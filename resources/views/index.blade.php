@extends('layouts.main')

@section('content')
    <div class="h-screen flex flex-col items-center justify-center">
        <h1 class="mb-6 font-bold text-2xl">Check out my portfolio!</h1>
        <a href="{{ route('portfolio') }}">
            <button type="button" class="text-white bg-gradient-to-r from-teal-300 via-teal-400 to-teal-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Click Me</button>
        </a>
    </div>
@endsection