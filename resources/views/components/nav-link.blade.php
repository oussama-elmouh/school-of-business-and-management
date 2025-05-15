<!-- resources/views/components/nav.blade.php -->
<nav x-data="{ open: false }" class="bg-white shadow-sm">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
          <div class="flex">
            <div class="flex flex-shrink-0 items-center">
              <img class="block h-8 w-auto lg:hidden" src="{{ asset('logo.png') }}" alt="Your Company">
              <img class="hidden h-8 w-auto lg:block" src="{{ asset('logo.png') }}" alt="Your Company">
            </div>
@php
  function navClass($routeName) {
    return Route::is($routeName)
      ? 'border-indigo-500 text-gray-900'
      : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700';
  }
@endphp

<div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
    <a href="{{ route('dashbord') }}" class="{{ navClass('dashbord') }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium">
        Dashboard
    </a>
    <a href="{{ route('eleves') }}" class="{{ navClass('eleves') }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium">
        Élève
    </a>
    <a href="{{ route('cours') }}" class="{{ navClass('cours') }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium">
        Cours
    </a>
    <a href="{{ route('professeurs') }}" class="{{ navClass('professeurs') }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium">
        Professeur
    </a>
    <a href="{{ route('filieres') }}" class="{{ navClass('filieres') }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium">
        Filière
    </a>
</div>
              
            </div>
          </div>
          

    </nav>
