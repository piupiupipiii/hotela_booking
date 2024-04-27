@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex items-center justify-center h-full">
        <div class="border border-gray-300 rounded-md overflow-hidden flex flex-col items-center justify-center">
            <!-- Judul REGISTER -->
            <h2 class="text-center text-3xl font-semibold mt-5 mb-5 text-gray-800">Register</h2>

            <!-- Gambar Hotel dan Form -->
            <div class="flex items-center justify-center">
                <!-- Gambar Hotel -->
                <div class="w-1/2">
                    <img src="{{ asset('assets/images/login/hotel3d.png') }}" alt="Hotel Image" class="w-full">
                </div>

                <!-- Form -->
                <form action="{{ route('register.store') }}" method="post" class="w-1/2 flex flex-col gap-4 justify-center py-10 px-12">
                    @csrf
                    <div>
                        <label for="name" class="block font-medium leading-6 text-gray-900">Nama</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input type="text" id="name" name="name" required class="block w-full rounded-md border border-gray-300 py-2 px-4 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block font-medium leading-6 text-gray-900">Email</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input type="email" id="email" name="email" required class="block w-full rounded-md border border-gray-300 py-2 px-4 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="phone" class="block font-medium leading-6 text-gray-900">Phone</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input type="text" id="phone" name="phone" required class="block w-full rounded-md border border-gray-300 py-2 px-4 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block font-medium leading-6 text-gray-900">Password</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input type="password" id="password" name="password" required class="block w-full rounded-md border border-gray-300 py-2 px-4 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <button type="submit" class="h-min mt-auto text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg w-full sm:w-auto px-5 py-3 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection
