<?php

namespace App\Livewire\User;

use App\Models\File;
use Livewire\Component;

class Files extends Component
{
    public function render()
    {

        $files = File::where('status', 'approved')->get();

        return view('livewire.user.files', compact('files'));
    }
}
