<?php

namespace App\Livewire\Admin;

use App\Models\File;
use Livewire\Component;

class Upload extends Component
{
    public function approve($id)
    {
        $file = File::findOrFail($id);
        $file->update(['status' => 'approved']);
        session()->flash('success', 'File approved successfully!');
    }

    public function decline($id)
    {
        $file = File::findOrFail($id);
        $file->update(['status' => 'declined']);
        session()->flash('error', 'File declined successfully!');
    }

    public function render()
    {
        $files = File::all();
        return view('livewire.admin.upload', compact('files'));
    }
}
