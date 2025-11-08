<x-layout>
    <div class="p-8">
        <h1 class="text-2xl font-bold mb-4">Edit Work</h1>

        <form action="{{ route('works.update', $work->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label>Date:</label>
                <input type="date" name="date" value="{{ $work->date }}" class="border p-2 rounded w-full">
            </div>

            <div>
                <label>Domaine:</label>
                <input type="text" name="domaine" value="{{ $work->domaine }}" class="border p-2 rounded w-full">
            </div>

            <div>
                <label>Status:</label>
                <select name="status" class="border p-2 rounded w-full">
                    <option value="work" {{ $work->status == 'work' ? 'selected' : '' }}>Work</option>
                    <option value="dispo" {{ $work->status == 'dispo' ? 'selected' : '' }}>Dispo</option>
                </select>
            </div>

            <div>
                <label>Note:</label>
                <textarea name="note" class="border p-2 rounded w-full">{{ $work->note }}</textarea>
            </div>

            <button class="bg-indigo-600 text-white px-4 py-2 rounded mb-5">Update</button>
        </form>

        <a href="{{ route('works.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded ">Back</a>
    </div>
</x-layout>
