@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex items-center justify-center h-full">
        <div class="border border-gray-300 rounded-md overflow-hidden flex flex-col items-center justify-center">
            <!-- Judul LOGIN -->
            <h2 class="text-center text-3xl font-semibold mt-5 mb-5 text-gray-800">Login</h2>

            <!-- Gambar Hotel dan Form -->
            <div class="flex">
                <!-- Gambar Hotel -->
                <div class="w-1/2">
                    <img src="{{ asset('assets/images/login/hotel3d.png') }}" alt="Hotel Image" class="w-full">
                </div>

                <!-- Form -->
                <!-- Form -->
                <form action="{{ route('login.authenticate') }}" method="post" class="w-1/2 flex flex-col gap-4 justify-center py-10 px-12">
                    @csrf
                    <!-- Menampilkan error jika terdapat error pada field 'email' -->
                    @error('email')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                    <div>
                        <label for="email" class="block font-medium leading-6 text-gray-900">Email</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input type="email" id="email" name="email" required class="block w-full rounded-md border border-gray-300 py-4 px-6 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <!-- Menampilkan error jika terdapat error pada field 'password' -->
                    @error('password')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                    <div>
                        <label for="password" class="block font-medium leading-6 text-gray-900">Password</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input type="password" id="password" name="password" required class="block w-full rounded-md border border-gray-300 py-4 px-6 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <button type="submit" class="h-min mt-auto text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg w-full sm:w-auto px-5 py-3 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Login</button>
                </form>

            </div>
        </div>
    </div>
@endsection
