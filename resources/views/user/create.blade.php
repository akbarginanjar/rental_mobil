@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-10">
        <div class="grid grid-cols-2 mb-3">
            <h1 style="font-size: 30px; font-weight: bold;">Tambah Data Jurusan</h1>
        </div>
        <div class="max-w-xl rounded overflow-hidden shadow-lg bg-white mt-2">
            <div class="px-5 mt-5">
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                     <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            name
                        </label>
                        <input
                            class="@error('name') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            value="{{ old('name') }}" name="name" type="text" placeholder="name">
                        @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div> 
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            email
                        </label>
                        <input
                            class="@error('email') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            value="{{ old('email') }}" name="email" type="text" placeholder="email">
                        @error('email')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                           password
                        </label>
                        <input
                            class="@error('password') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            value="{{ old('password') }}" name="password" type="text"
                            placeholder="password">
                        @error('password')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-5 rounded float-right">
                            Simpan </button>
                    </div>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
@endsection