<x-layout>
    <div class="p-8">
        <h1 class="text-2xl font-bold mb-4">Add Work Day</h1>

        <form action="{{ route('works.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label>Date:</label>
                <input type="date" name="date" class="border p-2 rounded w-full">
            </div>

            <div>
                <label>Domaine:</label>
                <input type="text" name="domaine" class="border p-2 rounded w-full" placeholder="ex: Dev, Event...">
            </div>

            <div>
                <label>Status:</label>
                <select name="status" class="border p-2 rounded w-full">
                    <option value="work">Work</option>
                    <option value="dispo">Dispo</option>
                </select>
            </div>

            <div>
                <label>Note:</label>
                <textarea name="note" class="border p-2 rounded w-full" rows="3"></textarea>
            </div>

            <button class="bg-indigo-600 text-white px-4 py-2 rounded">Save</button>
        </form>
    </div>
</x-layout>
