<div class="p-6 w-9/12 mx-auto">

    <!-- Success/Error Messages -->
    @if(session()->has('success'))
        <div class="p-4 mb-4 text-green-700 bg-green-100 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if(session()->has('error'))
        <div class="p-4 mb-4 text-red-700 bg-red-100 rounded">
            {{ session('error') }}
        </div>
    @endif

    <!-- File Table -->
    <div class="mt-4">
        <table class="min-w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200 text-left text-gray-600">
                    <th class="border border-gray-300 px-4 py-2">Filename</th>
                    <th class="border border-gray-300 px-4 py-2">File</th>
                    <th class="border border-gray-300 px-4 py-2">Date</th>
                    <th class="border border-gray-300 px-4 py-2">Status</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($files as $file)
                    <tr class="border border-gray-300 hover:bg-gray-100">
                        <td class="px-4 py-2">{{ $file->filename }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ Storage::url($file->file) }}" target="_blank" class="text-blue-500 underline">
                                View File
                            </a>
                        </td>
                        <td class="px-4 py-2">{{ $file->date }}</td>
                        <td class="px-4 py-2 text-center">
                            {{ $file->status }}
                        </td>
                        <td class="px-4 py-2 text-center space-x-2">
                            <button class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600"
                                wire:click="approve({{ $file->id }})">
                                Approve
                            </button>
                            <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600"
                                wire:click="decline({{ $file->id }})">
                                Decline
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-2 text-center text-gray-500">
                            No files available.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
