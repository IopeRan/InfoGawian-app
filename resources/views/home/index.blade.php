@extends('layouts.user')

@section('container')
<h5 class="text-slate-500 font-bold lg:text-lg">Home</h5>
<div class="w-full flex flex-col gap-3 lg:flex-row">
    <div class="w-full flex flex-col">
        <div class="mt-4 bg-white w-full h-max rounded-3xl shadow-md flex flex-row overflow-hidden">
            <div class="bg-teal-500 w-4"></div>
            <div class="w-full flex flex-col gap-3 p-6">
            <h5 class="text-slate-500 font-bold my-3 lg:text-lg">Company</h5>
            @foreach ($company as $company)                    
            <a href="/company/{{ $company->id }}" class="w-full flex flex-row gap-3 hover:-translate-x-2 hover:duration-150">
                <div class="w-28 lg:w-max">
                    <img src="{{ asset('storage/'.$company->image) }}" alt="{{ $company->company }}" class="w-10 h-10 lg:w-20 lg:h-20 object-cover">
                </div>
                <div class="flex flex-col text-sm lg:text-base">
                    <p class="font-medium">{{ $company->company }}</p>
                </div>
            </a>
            @endforeach
                <div class="flex justify-end mt-4">
                    <a href="/company" class="bg-teal-500 px-3 py-2 text-white font-medium rounded-xl hover:bg-teal-400 hover:duration-150">See More</a>
                </div> 
            </div>
        </div>
        <div class="mt-4 bg-white w-full h-max rounded-3xl shadow-md flex flex-row overflow-hidden">
            <div class="bg-teal-500 w-4"></div>
            <div class="w-full flex flex-col gap-3 p-6">
            <h5 class="text-slate-500 font-bold my-3">People</h5>
            @foreach ($workers as $worker)                    
            <a href="/worker/{{ $worker->id }}" class="w-full flex flex-row gap-3 hover:-translate-x-2 hover:duration-150">
                <div class="w-28 lg:w-max">
                    <img src="{{ asset('storage/'.$worker->image) }}" alt="{{ $worker->username }}" class="w-10 h-10 lg:w-20 lg:h-20 rounded-full">
                </div>
                <div class="flex flex-col text-sm lg:text-base">
                    <p class="font-medium">{{ $worker->fullname }}</p>
                </div>
            </a>
            @endforeach
                <div class="flex justify-end mt-4">
                    <a href="/workers" class="bg-teal-500 px-3 py-2 text-white font-medium rounded-xl hover:bg-teal-400 hover:duration-150">See More</a>
                </div> 
            </div>
        </div>
    </div>
    @if(auth()->user())
    <div class="mt-4 bg-white w-1/3 h-max rounded-3xl shadow-md flex flex-col overflow-hidden">
        <div class="w-full flex justify-center p-6" style="background-image: url('https://e0.pxfuel.com/wallpapers/491/601/desktop-wallpaper-ultra-original-and-background-it-ultra.jpg');">
            <img src="{{ asset('storage/'.auth()->user()->image) }}" alt="{{ auth()->user()->username }}" class="w-32 h-32 rounded-full border-4 object-cover">
        </div>
        <div class="bg-teal-500 w-full h-4 rounded-b-3xl"></div>
        <ul class="w-full flex flex-col justify-start p-6 text-lg font-medium">
            <li class="text-xs lg:text-sm font-light text-slate-500">Registered at 0{{ auth()->user()->created_at }}</li>
            <li class="lg:text-lg">{{ auth()->user()->fullname }}</li>
            @if(auth()->user()->whatsapp != null)
            <li class="lg:text-lg">{{ auth()->user()->whatsapp }}</li>
            @else
            <a href="" class="text-sm font-normal text-sky-500 hover:text-sky-400 hover:duration-150">add whatsapp</a>
            @endif
            @if(auth()->user()->email != null)
            <li class="lg:text-lg">{{ auth()->user()->email }}</li>
            @else
            <a href="" class="text-sm font-normal text-sky-500 hover:text-sky-400 hover:duration-150">add email</a>
            @endif
            <li>
                <p class="text-sm lg:text-base text-slate-500">{{ auth()->user()->bio }}</p>
            </li>
        </ul>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#14b8a6" fill-opacity="1" d="M0,32L48,42.7C96,53,192,75,288,74.7C384,75,480,53,576,74.7C672,96,768,160,864,176C960,192,1056,160,1152,149.3C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
    @endif
</div>

@endsection