<div class="mb-4">
    <form method="GET" action="{{ url()->current() }}" class="flex items-center space-x-2">
        <input
            type="text"
            name="search"
            placeholder="{{ $placeholder }}"
            value="{{ request('search') }}"
            class="border border-gray-300 rounded-md px-4 py-2 w-64"
        >
        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600">
            Cari
        </button>
    </form>
</div>
