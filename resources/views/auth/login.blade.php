@extends('layouts.auth')

@section('container')
    <div class="bg-white w-full h-max rounded-lg shadow-md overflow-hidden">
        <div class="bg-teal-500 w-full h-4"></div>
        <div class="p-3">
            <h5 class="text-2xl font-medium font-mono text-center">Login</h5>
            <hr class="my-3">
            <form action="" class="flex flex-col gap-3">
                <input type="text" class="px-3 py-1 w-full border rounded-lg " placeholder="Username" >
                <input type="Password" class="px-3 py-1 w-full border rounded-lg " placeholder="Password" >
                <div class="flex justify-end">
                    <button type="submit" class="bg-teal-500 px-3 py-2 rounded-lg text-white">Login</button>
                </div>
            </form>
            <hr class="my-3">
            <p class="text-center text-sm font-light">
                don't have an account? <a href="/registration" class="text-sky-500 hover:text-sky-400 hover:duration-150">create one</a>
            </p>
        </div>
        <div class="bg-teal-500 w-full h-4"></div>
    </div>
@endsection