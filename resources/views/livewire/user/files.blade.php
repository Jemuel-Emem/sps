<div class="p-6">

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($files as $file)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-4">

                    <h3 class="text-xl font-semibold text-gray-800">{{ $file->filename }}</h3>


                    <p class="text-gray-600 mt-2">{{ \Carbon\Carbon::parse($file->date)->format('F j, Y') }}</p>
                    <p class="text-gray-600">{{ pathinfo($file->file, PATHINFO_BASENAME) }}</p>


                    <div class="mt-4">
                        <a href="{{ asset('storage/' . $file->file) }}" download
                           class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                            Download
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
