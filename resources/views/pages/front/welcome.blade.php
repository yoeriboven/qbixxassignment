@extends("layouts.front")

@section("content")
    <div class="relative flex flex-col items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="text-6xl font-bold my-2">Welcome to Qbixx test!</div>
        <div class="text-4xl font-bold my-2">We wish you good luck!</div>
        <a class="my-2 inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="{{ route(RoutesEnum::ADMIN_INDEX_CLIENTS) }}">To Admin Panel</a>

    </div>
@endsection
