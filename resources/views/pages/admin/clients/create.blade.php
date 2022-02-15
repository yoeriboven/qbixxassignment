@extends('layouts.admin')

@section('title', 'Create client')

@section('content')
    <div class="w-full flex justify-center">
        <div class="block p-6 rounded-lg shadow-lg bg-white w-1/3">
            <form method="POST" action="{{ route(RoutesEnum::ADMIN_STORE_CLIENT) }}">
                <div class="form-group mb-6">
                    <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Name</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Enter client name">
                    @error('name')
                    <div class="text-red-500 italic">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full flex flex-row justify-between">
                    <a
                        type="submit"
                        class="inline-block px-6 py-2 border-2 border-gray-800 text-gray-800 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                        href="{{ route(RoutesEnum::ADMIN_INDEX_CLIENTS) }}">
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                        Create Client
                    </button>
                </div>
                @csrf
            </form>
        </div>
    </div>
@endsection
