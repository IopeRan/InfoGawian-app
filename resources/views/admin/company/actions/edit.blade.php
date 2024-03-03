@extends('layouts.main')

@section('container')
    <div class="w-full flex justify-center pb-4w">
        <div class="bg-white w-full lg:w-1/3 h-max rounded-3xl overflow-hidden shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#eab308" fill-opacity="1" d="M0,64L34.3,85.3C68.6,107,137,149,206,170.7C274.3,192,343,192,411,197.3C480,203,549,213,617,208C685.7,203,754,181,823,170.7C891.4,160,960,160,1029,181.3C1097.1,203,1166,245,1234,240C1302.9,235,1371,181,1406,154.7L1440,128L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
            <hr>
            <div class="w-full px-6">
                <h5 class="text-slate-500 font-medium text-lg">Edit User</h5>
                <form action="" class="w-full my-4 flex flex-col gap-3">
                    <div class="flex flex-col">
                        <label for="company" class="text-slate-500">Company</label>
                        <input type="text" id="company" name="company" placeholder="Company" class="border px-3 py-2 rounded-lg outline-yellow-500">
                    </div>
                    <div class="flex flex-col">
                        <label for="description" class="text-slate-500">Description</label>
                        <textarea id="description" name="description" placeholder="Description" class="border px-3 py-2 rounded-lg outline-yellow-500"></textarea>
                    </div>
                    <div class="flex flex-col">
                        <label for="rules" class="text-slate-500">Rules</label>
                        <input type="text" id="rules" name="rules" placeholder="Rules" class="border px-3 py-2 rounded-lg outline-yellow-500">
                    </div>
                    <div class="flex flex-col">
                        <label for="phone" class="text-slate-500">Phone</label>
                        <input type="text" id="phone" name="phone" placeholder="Phone" class="border px-3 py-2 rounded-lg outline-yellow-500">
                    </div>
                    <div class="flex flex-col">
                        <label for="phone" class="text-slate-500"></label>
                        <input type="text" id="phone" name="phone" placeholder="Phone" class="border px-3 py-2 rounded-lg outline-yellow-500">
                    </div>
                    <div class="flex flex-col">
                        <label for="image" class="text-slate-500">Image</label>
                        <input type="hidden" id="oldImage" name="oldImage" value="">
                        <div>
                            <img src="{{ asset('assets/default-img/company.png') }}" alt="" class="w-32 h-32">
                        </div>
                        <input type="file" id="image" name="image" class="border px-3 py-2 rounded-lg outline-yellow-500">
                    </div>
                    <div class="flex flex-row justify-between w-full">
                        <a href="/admin/dashboard/company" class="border border-red-500 text-red-500 px-4 py-2 rounded-xl hover:bg-red-500 hover:text-white hover:duration-150">Cancel</a>
                        <button type="submit" class="bg-yellow-500 px-4 py-2 text-white rounded-xl hover:bg-yellow-400">Save</button>
                    </div>
                </form>
            </div>
            <hr>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#eab308" fill-opacity="1" d="M0,64L34.3,85.3C68.6,107,137,149,206,170.7C274.3,192,343,192,411,197.3C480,203,549,213,617,208C685.7,203,754,181,823,170.7C891.4,160,960,160,1029,181.3C1097.1,203,1166,245,1234,240C1302.9,235,1371,181,1406,154.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
        </div>
    </div>
@endsection