@extends('welcome')

@section('content')
<form class="max-w-lg mx-auto" method="POST" action="{{route('marcas.store')}}">
    @csrf
    <div>
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de la Marca</label>
        <input name="nombre" id="nombre" type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2">
        @error('nombre')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500 mb-2">
                <span class="font-medium">Oops!</span> {{ $message }}
            </p>
        @enderror
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar Marca</button>
  </form>
@endsection