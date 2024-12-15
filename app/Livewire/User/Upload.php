<?php

namespace App\Livewire\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\File;

class Upload extends Component
{
    use WithFileUploads;

    public $filename;
    public $file;
    public $date;
    public $modalOpen = false;
    public $editMode = false;
    public $fileId;

    public function openModal()
    {
        $this->resetFields();
        $this->modalOpen = true;
    }

    public function closeModal()
    {
        $this->modalOpen = false;
    }

    public function resetFields()
    {
        $this->filename = '';
        $this->file = null;
        $this->date = null;
        $this->fileId = null;
        $this->editMode = false;
    }

    public function saveFile()
    {
        $this->validate([
            'filename' => 'required|string|max:255',
            'file' => $this->editMode ? 'nullable|file|mimes:pdf,jpg,png|max:9048' : 'required|file|mimes:pdf,jpg,png|max:9048',
            'date' => 'required|date',
        ]);

        $filePath = $this->file ? $this->file->store('files', 'public') : null;

        if ($this->editMode && $this->fileId) {
            $fileRecord = File::findOrFail($this->fileId);
            $fileRecord->update([
                'filename' => $this->filename,
                'file' => $filePath ?? $fileRecord->file,
                'date' => $this->date,
            ]);
            session()->flash('success', 'File updated successfully!');
        } else {
            File::create([
                'filename' => $this->filename,
                'file' => $filePath,
                'date' => $this->date,
                'user_id' => Auth::id()
            ]);
            session()->flash('success', 'File uploaded successfully!');
        }

        $this->closeModal();
    }

    public function editFile($id)
    {
        $file = File::findOrFail($id);
        $this->fileId = $file->id;
        $this->filename = $file->filename;
        $this->date = $file->date;
        $this->editMode = true;
        $this->modalOpen = true;
    }

    public function deleteFile($id)
    {
        $file = File::findOrFail($id);
        $file->delete();
        session()->flash('success', 'File deleted successfully!');
    }

    public function render()
    {
        $files = File::where('user_id', Auth::id())->get();

        return view('livewire.user.upload', compact('files'));
    }
}
