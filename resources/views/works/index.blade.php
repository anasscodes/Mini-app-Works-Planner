<x-layout>
<div class="max-w-6xl mx-auto py-10 px-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold text-gray-800">🗓️ My Work Schedule</h1>
        <a href="{{ route('works.create') }}" 
           class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-xl text-sm font-semibold shadow-md transition duration-200">
           + Add Work Day
        </a>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($works as $work)
        <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition duration-300 border border-gray-100 p-5 relative overflow-hidden">
            
            <div class="absolute top-0 left-0 w-full h-1 
                {{ $work->status === 'work' ? 'bg-green-500' : 'bg-yellow-500' }}">
            </div>
            
            <div class="flex items-center justify-between mb-3">
                <h2 class="text-xl font-semibold text-gray-800">
                    {{ \Carbon\Carbon::parse($work->date)->format('d M Y') }}
                </h2>
                <span class="text-sm px-3 py-1 rounded-full 
                    {{ $work->status === 'work' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                    {{ ucfirst($work->status) }}
                </span>
            </div>

            <p class="text-gray-600 mb-2">
                <i class="fa-solid fa-briefcase mr-2 text-indigo-500"></i> 
                <strong>Domain:</strong> {{ $work->domaine }}
            </p>

            <p class="text-gray-500 italic mb-4">
                {{ $work->note ?? 'No notes added.' }}
            </p>

            <div class="flex justify-between items-center gap-2">
                <a href="{{ route('works.show', $work->id) }}" 
                   class="flex items-center gap-2 bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-lg text-sm font-semibold shadow-sm transition duration-200">
                    <i class="fa-solid fa-eye"></i> Show
                </a>

                <a href="{{ route('works.edit', $work->id) }}" 
                   class="flex items-center gap-2 bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-lg text-sm font-semibold shadow-sm transition duration-200">
                    <i class="fa-solid fa-pen-to-square"></i> Edit
                </a>

                <form action="{{ route('works.destroy', $work->id) }}" method="POST" 
                      onsubmit="return confirm('Are you sure you want to delete this item?');">
                    @csrf
                    @method('DELETE')
                    <button 
                        class="flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded-lg text-sm font-semibold shadow-sm transition duration-200">
                        <i class="fa-solid fa-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    @if($works->isEmpty())
        <p class="text-center text-gray-500 mt-10 text-lg">No work days found — start by adding one 👇</p>
    @endif
</div>

<!-- Tailwind & FontAwesome (add if not already included in layout) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>
</x-layout>
