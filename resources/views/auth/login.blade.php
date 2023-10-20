@extends('layouts.main')

@section('content')
    
    <div class="max-w-xl mx-auto lg:py-8">
        @if (session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success!</span> {{ session('success') }}
        </div>
        @endif
        <h1 class="text-center font-bold text-2xl mb-6 text-slate-600">Login Form</h1>
        <form method="post" action="{{ route('authenticate') }}">
            @csrf
            <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-400 focus:border-teal-400 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-400 dark:focus:border-teal-400" placeholder="name@flowbite.com" required>
            </div>
            <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-400 focus:border-teal-400 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-400 dark:focus:border-teal-400" required>
            </div>
            <div class="flex items-start mb-6">
            <label for="remember" class="text-sm font-medium text-gray-900 dark:text-gray-300">Dont have an account? <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-600">register here</a></label>
            </div>
            <button type="submit" class="text-white bg-gradient-to-r from-teal-300 via-teal-400 to-teal-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Login</button>
        </form>
    </div>
@endsection