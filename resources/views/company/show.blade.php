@extends('layouts.user')

@section('container')
    <h5 class="text-slate-500 font-medium text-xl">Pt.lorem</h5>
    <div class="w-full h-max p-6 bg-white rounded-3xl mt-6">
        <div class="bg-slate-800 p-4 rounded-lg gap-3 flex flex-col lg:flex-row">
            <div class="w-1/3">
                <img src="{{ asset('storage/'.$company->image) }}" alt="{{ $company->company }}" class="w-full object-cover">
            </div>
            <div class="w-full">
                <h5 class="font-medium text-teal-500">{{ $company->company }}</h5>
                <p class="text-sm text-slate-400">{{ $company->desc }}</p>
                <br>
                <div class="flex flex-col">
                    <span class="text-slate-400 font-medium">Rules</span>
                    <div class="text-slate-400">{!! $company->rules !!}</div>
                </div>
            </div>
        </div>
    </div>
@endsection