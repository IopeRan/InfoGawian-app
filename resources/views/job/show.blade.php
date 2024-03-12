@extends('layouts.user')

@section('container')
    <h5 class="text-slate-500 font-medium text-xl">{{ $post->title }}</h5>
    <div class="w-full h-max p-6 bg-white rounded-3xl mt-6">
        <div class="bg-slate-100 p-4 rounded-lg gap-3 flex flex-col lg:flex-row">
            <div>
                <h5 class="font-medium text-teal-500">{{ $post->title }}</h5>
                <p class="text-sm text-slate-400">{!! $post->body !!}</p>
            </div>
        </div>
    </div>
@endsection