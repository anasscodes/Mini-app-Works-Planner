<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Planner</title>
    @vite('resources/css/app.css')
</head>
<body>

    <nav class="bg-white/80 backdrop-blur-md shadow-sm border-b border-gray-200 fixed top-0 left-0 right-0 z-50">
  <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center gap-2">
      <div class="w-8 h-8 bg-indigo-600 text-white flex items-center justify-center font-bold rounded-lg">W</div>
      <span class="text-xl font-bold text-gray-800 tracking-wide">WorkPlanner</span>
    </div>

    <!-- Links -->
    <ul class="hidden md:flex items-center gap-6 text-gray-700 font-medium">
      <li>
        <a href="{{ route('works.index') }}" 
           class="hover:text-indigo-600 transition duration-200">Dashboard</a>
      </li>
      <li>
        <a href="{{ route('works.create') }}" 
           class="hover:text-indigo-600 transition duration-200">Add Work</a>
      </li>
      <li>
        <a href="#" 
           class="hover:text-indigo-600 transition duration-200">Profile</a>
      </li>
    </ul>

    <!-- Mobile Menu Button -->
    <button id="menuBtn" class="md:hidden text-gray-700 text-2xl">
      ☰
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobileMenu" class="md:hidden hidden  flex-col bg-white border-t border-gray-200 shadow-inner">
    <a href="{{ route('works.index') }}" class="px-6 py-3 hover:bg-indigo-50 transition">Dashboard</a>
    <a href="{{ route('works.create') }}" class="px-6 py-3 hover:bg-indigo-50 transition">Add Work</a>
    <a href="#" class="px-6 py-3 hover:bg-indigo-50 transition">Profile</a>
  </div>
</nav>


<script>
  document.getElementById('menuBtn').addEventListener('click', () => {
    document.getElementById('mobileMenu').classList.toggle('hidden');
  });
</script>

    
         <main class="py-6 px-20 m-auto">
             {{ $slot }}
        </main>

</body>
</html>