<x-layout>
    <div class="p-8">
        <h1 class="text-2xl font-bold mb-4">Work Details</h1>

        <div class="bg-white shadow-md p-4 rounded">
            <p><strong>Date:</strong> {{ $work->date }}</p>
            <p><strong>Domaine:</strong> {{ $work->domaine }}</p>
            <p><strong>Status:</strong> {{ $work->status }}</p>
            <p><strong>Note:</strong> {{ $work->note ?? 'No notes' }}</p>
        </div>

        <div class="mt-4 flex gap-3">
            <a href="{{ route('works.edit', $work->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
            <form action="{{ route('works.destroy', $work->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                @csrf
                @method('DELETE')
                <button class="bg-red-600 text-white px-4 py-2 rounded">Delete</button>
            </form>
            <a href="{{ route('works.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded">Back</a>
        </div>
    </div>
</x-layout>
