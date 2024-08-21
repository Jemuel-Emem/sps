<div class="w-5/12 mx-auto p-6 bg-white rounded-lg shadow-lg mb-4 mt-4">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Appointment Form</h2>

    <!-- Owner Details -->
    <div class="mb-6">
        <h3 class="text-xl font-medium text-gray-700 mb-4">Owner Details</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" wire:model="owner_name" class="w-full mt-1 p-2 border border-gray-300 rounded-md" placeholder="Owner's Name">
                @error('owner_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="text" wire:model="owner_phone" class="w-full mt-1 p-2 border border-gray-300 rounded-md" placeholder="Owner's Phone Number">
                @error('owner_phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Address</label>
                <input type="text" wire:model="owner_address" class="w-full mt-1 p-2 border border-gray-300 rounded-md" placeholder="Owner's Address">
                @error('owner_address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Date of Schedule</label>
                <input type="date" wire:model="date_schedule" class="w-full mt-1 p-2 border border-gray-300 rounded-md">
                @error('date_schedule') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>

    <!-- Dog Details -->
<!-- Dog Details -->
<div>
    <h3 class="text-xl font-medium text-gray-700 mb-4">Dog Details</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">Dog's Name</label>
            <input type="text" class="w-full mt-1 p-2 border border-gray-300 rounded-md" wire:model="dog_name" placeholder="Dog's Name">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Breed</label>
            <input type="text" class="w-full mt-1 p-2 border border-gray-300 rounded-md" wire:model="dog_breed" placeholder="Dog's Breed">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Age</label>
            <input type="number" class="w-full mt-1 p-2 border border-gray-300 rounded-md" wire:model="dog_age" placeholder="Dog's Age">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Sex</label>
            <select class="w-full mt-1 p-2 border border-gray-300 rounded-md" wire:model="dog_sex">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700">Dog's Photo</label>
            <input type="file" class="w-full mt-1 p-2 border border-gray-300 rounded-md" wire:model="dog_photo">
        </div>
    </div>
</div>


    <div class="flex justify-end mt-6">
        <button wire:click="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Submit</button>
    </div>

    <!-- Success Message -->
    @if (session()->has('message'))
        <div class="mt-4 text-green-500">
            {{ session('message') }}
        </div>
    @endif
</div>
