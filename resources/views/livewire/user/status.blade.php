<div class="p-6 bg-white rounded-lg shadow-lg max-w-lg mx-auto h-80 w-5/12">
    <div class="flex items-center justify-between border-b pb-4 mb-4">
        <div class="text-lg font-semibold text-gray-800">
            <span class="block">Dog Name</span>
            <span class="text-2xl font-bold text-blue-600">{{ $dogname }}</span>
        </div>
        <div class="text-lg font-semibold text-gray-800">
            <span class="block">Appointment Status</span>
            <span class="text-2xl font-bold text-green-600 {{ $status === 'approved' ? 'text-green-600' : 'text-yellow-500' }}">
                {{ $status }}
            </span>
        </div>
    </div>
    <div class="flex items-center justify-between">
        <div class="flex items-center space-x-4">

    </div>
</div>
