<div class="p-6 w-9/12">

    <!-- Upload Button -->
    <div class="flex justify-end mb-4">
        <button class="px-4 py-2 text-white bg-blue-500 hover:bg-blue-600 rounded"
            wire:click="openModal">
            Upload File
        </button>
    </div>

    <!-- File Table -->
    <div class="mt-2 w-full">
        <table class="w-11/12 border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200 text-left text-gray-600">
                    <th class="border border-gray-300 px-4 py-2">Filename</th>
                    <th class="border border-gray-300 px-4 py-2">File</th>
                    <th class="border border-gray-300 px-4 py-2">Date</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($files as $file)
                <tr class="border border-gray-300 hover:bg-gray-100">
                    <td class="px-4 py-2">{{ $file->filename }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ Storage::url($file->file) }}" target="_blank" class="text-blue-500 underline">
                            View File
                        </a>
                    </td>
                    <td class="px-4 py-2">{{ $file->date }}</td>
                    <td class="px-4 py-2 text-center space-x-2">
                        <button class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600"
                            wire:click="editFile({{ $file->id }})">
                            Edit
                        </button>
                        <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600"
                            wire:click="deleteFile({{ $file->id }})">
                            Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    @if($modalOpen)
    <div class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded shadow-lg w-1/3">
            <div class="p-4 border-b">
                <h2 class="text-lg font-bold">{{ $editMode ? 'Edit File' : 'Upload File' }}</h2>
                <button class="absolute top-2 right-4 text-gray-500 hover:text-gray-800"
                    wire:click="closeModal">✕</button>
            </div>
            <div class="p-4">
                <form wire:submit.prevent="saveFile">
                    <div class="mb-4">
                        <label for="filename" class="block text-sm font-medium text-gray-700">Filename</label>
                        <input type="text" id="filename" wire:model="filename"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
                    </div>
                    <div class="mb-4">
                        <label for="file" class="block text-sm font-medium text-gray-700">File</label>
                        <input type="file" id="file" wire:model="file"
                            class="mt-1 block w-full text-sm text-gray-700 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" />
                    </div>
                    <div class="mb-4">
                        <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                        <input type="date" id="date" wire:model="date"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
                    </div>
                    <div class="text-right">
                        <button type="button" wire:click="closeModal"
                            class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                            Close
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
</div>
