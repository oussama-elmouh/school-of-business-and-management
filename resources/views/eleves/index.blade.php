{{--             <table class="min-w-full divide-y divide-gray-300">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">ID</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">ID</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Nom</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Prénom</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                   
                  <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 bg-white">
                 @foreach($eleves as $eleve)
                <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ $eleve->id }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $eleve->id }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $eleve->nom }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $eleve->prenom }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $eleve->email }}</td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                      <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                    </td>
                  </tr>
                 @endforeach
              </tbody>
            </table> --}}

            @extends('layouts.app')

@section('title', 'Dashbord')

@section('content')
<div class="bg-gray-100">
  <div class="min-h-full">
      <div class="py-10">
      <header>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Filires</h1>
        </div>
      </header>
      <main>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        </div>
      </main>
      
    </div>
  </div>
  </div> 

{{-- -- Section tableau-- --}}

 
<div class="bg-gray-100">
    <div class="mx-auto max-w-7xl">
      
 

    </div>
  </div>


@endsection
@section('tableau')
 <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-base font-semibold leading-6 text-gray-900">Users</h1>
        <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title, date_naissance and role.</p>
      </div>
      <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
        <button type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add user</button>
      </div>
    </div>
    <div class="mt-8 flow-root">
      <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg mr-[200px] ml-[200px] ">
          <table class="min-w-full divide-y divide-gray-300">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">ID</th>
                  
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Nom</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Prénom</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                   <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Action</th>
                    
                   
                  
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 bg-white">
                 @foreach($eleves as $eleve)
                 
                <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ $eleve->id }}</td>
                    
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $eleve->nom }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $eleve->prenom }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $eleve->date_naissance }}</td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-left text-sm font-medium sm:pr-6">
                      <a href="#" class="text-indigo-600   hover:text-indigo-900">Edit </a>
                    </td>

                  </tr>
                 @endforeach
                 
              </tbody>
            </table>
            <div class="mt-4">
    {{ $eleves->links() }}
</div>



----------------------------

---------------------------




          </div>
        </div>
      </div>
    </div>
  </div>
       
@endsection 