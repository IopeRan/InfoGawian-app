@extends('layouts.user')

@section('container')
    <div class="text-slate-500 text-lg lg:text-xl font-medium">Menu Company</div>
    <div class="bg-white w-full h-max rounded-3xl my-6 flex flex-col overflow-hidden">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,85.3C384,64,480,96,576,138.7C672,181,768,235,864,229.3C960,224,1056,160,1152,133.3C1248,107,1344,117,1392,122.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        <div class="px-6">
            <div>
                <img src="{{ asset('assets/default-img/company.png') }}" alt="">
            </div>
            <div>
                <h5 class="text-teal-500 text-lg font-medium">Pt.Lorem Ipsum</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, unde. Inventore fuga totam dolorem molestias rem earum repellendus consequuntur eius? Aspernatur totam ex dicta. Reprehenderit doloremque eveniet quaerat ducimus aliquam.</p>
                <p class="mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid dolores soluta praesentium autem voluptates placeat deserunt ab possimus ipsa provident, minus vero saepe omnis perferendis ipsum quas fugit? Dignissimos, dolorum.</p>
                <div class="flex justify-end">
                    <button type="button" onclick="editCompany()" class="px-3 py-2 bg-teal-500 rounded-lg text-white hover:bg-teal-400 hover:duration-150 mt-6">Edit</button>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,85.3C384,64,480,96,576,138.7C672,181,768,235,864,229.3C960,224,1056,160,1152,133.3C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
@endsection