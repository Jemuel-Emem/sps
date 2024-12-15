<?php

namespace App\Livewire\Admin;

use App\Models\Appointment;
use App\Models\User;
use App\Models\File; // Add this import for File model
use Livewire\Component;

class Index extends Component
{
    public $appointmentsCount;
    public $usersCount;
    public $schedulesCount;
    public $approvedFilesCount; // Add a property for the approved files count

    public function mount()
    {
        // Count the number of appointments with status 'approved'
        $this->appointmentsCount = Appointment::where('status', 'approved')->count();

        // Count the total number of users
        $this->usersCount = User::count();

        // Count the number of schedules (appointments) that are approved
        $this->schedulesCount = Appointment::where('status', 'approved')->count();

        // Count the number of approved files
        $this->approvedFilesCount = File::where('status', 'approved')->count(); // Query for approved files
    }

    public function render()
    {
        return view('livewire.admin.index');
    }
}
