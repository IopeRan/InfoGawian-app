@extends('layouts.user')

@section('container')
    <div class="w-full h-max bg-white flex flex-col gap-4 rounded-3xl lg:flex-row p-6">
        <form action="/postJob" method="post" class="w-full flex flex-col gap-3">
            @method('post')
            @csrf
            <div class="flex flex-col">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Title" class="w-full border rounded-lg px-3 py-1">
            </div>
            <div class="flex flex-col">
                <label for="body">Text</label>
                <input type="hidden" id="x" name="body">
                <trix-editor input="x"></trix-editor>
            </div>
            <div class="flex flex-col justify-end items-end">
                <button class="bg-teal-500 w-max h-max rounded-lg text-white font-medium px-6 py-2 hover:bg-teal-400 hover:duration-150">Submit</button>
            </div>
        </form>
    </div>
@endsection