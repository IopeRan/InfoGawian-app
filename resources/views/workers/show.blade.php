@extends('layouts.user')

@section('container')
    <h5 class="text-slate-500 font-medium text-xl">Pt.lorem</h5>
    <div class="w-full h-max p-6 bg-white rounded-3xl mt-6">
        <div class="bg-slate-800 p-4 rounded-lg flex flex-col gap-10 lg:flex-row">
            <div class="w-full">
                <img src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsPUEdlaqIwNG_xq3PtlWjuD_kxkV7ovsmcQ&usqp=CAU') }}" alt="" class="w-full">
            </div>
            <div>
                <h5 class="font-medium text-teal-500">Pt.lorem</h5>
                <p class="text-sm text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur incidunt placeat odit vel expedita! Eius ab, expedita, iste eligendi magni nobis minus veritatis aliquid vitae accusamus iusto? Ipsa, molestiae debitis!</p>
                <br>
                <div class="flex flex-col">
                    <span class="text-slate-400 font-medium">Rules</span>
                    <div class="text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores fugit enim minus dignissimos facere non, quas voluptatum tenetur illo molestias aspernatur quos reprehenderit nobis delectus ad incidunt veritatis sunt tempora ipsa ab beatae aperiam consectetur? Quo ea, quia voluptas sunt excepturi expedita est libero ipsum dolores nulla, velit fuga facilis.</div>
                </div>
            </div>
        </div>
        <div class="p-4">
            <form action="">
                <button class="bg-teal-500 px-3 py-2 rounded-lg text-white font-medium hover:bg-teal-400 hover:duration-150">Accept</button>
            </form>
        </div>
    </div>
@endsection