@extends('layouts.auth')

@section('container')
    <div class="bg-white w-full h-max rounded-lg shadow-md overflow-hidden lg:w-1/4">
        <div class="bg-teal-500 w-full h-4"></div>
        <div class="p-3">
            <h5 class="text-2xl font-medium font-mono text-center">Registration</h5>
            <hr class="my-3">
            <form action="" method="post" class="flex flex-col gap-3">
                @method('post')
                @csrf
                <input type="text" id="fullname" name="fullname" class="px-3 py-1 w-full border rounded-lg " placeholder="Fullname" >
                <input type="text" class="px-3 py-1 w-full border rounded-lg " placeholder="Username" id="username" name="username">
                <input type="password" class="px-3 py-1 w-full border rounded-lg " placeholder="Password" id="password" name="password">
                <input type="password" class="px-3 py-1 w-full border rounded-lg " placeholder="Confirm Password" id="confirm" name="confirm">
                <div class="flex justify-end">
                    <button type="submit" class="bg-teal-500 px-3 py-2 rounded-lg text-white">Create Account</button>
                </div>
            </form>
            <hr class="my-3">
            <p class="text-center text-sm font-light">
                have an account? <a href="/login" class="text-sky-500 hover:text-sky-400 hover:duration-150">login</a>
            </p>
        </div>
        <div class="bg-teal-500 w-full h-4"></div>
    </div>
@endsection