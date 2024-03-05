<nav class="bg-white w-full h-14 lg:h-16 flex flex-row items-center  justify-between p-6">
    <div class="">
        <h5 class="font-medium font-mono text-xl lg:text-2xl">InfoGawian.</h5>
    </div>
    <div class="flex flex-row gap-10 justify-center items-center">
        <ul class="hidden lg:flex flex-row gap-4">
            <li>
                <a href="/" class="text-light">Home</a>
            </li>
            <li>
                <a href="/company" class="text-light">Company</a>
            </li>
            <li>
                <a href="/worker">Workers</a>
            </li>
        </ul>
        <button onclick="profile()" class="flex flex-row gap-3 items-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsPUEdlaqIwNG_xq3PtlWjuD_kxkV7ovsmcQ&usqp=CAU" alt="" class="w-10 h-10 rounded-full">
            <div class="hidden lg:flex">
                Erlang Andriyanputra
            </div>
        </button>
    </div>
</nav>

<div id="profileDrop" class="bg-white w-max h-max rounded-xl shadow-md fixed right-6 top-16 p-3 hidden">
    <ul class="w-56 font-medium flex flex-col gap-1">
        <li class="flex">
            <a href="" class="w-full px-3 py-2 rounded-lg hover:bg-slate-200 hover:duration-150">Profile</a>
        </li>
        <li class="flex">
            <a href="" class="w-full px-3 py-2 rounded-lg hover:bg-slate-200 hover:duration-150">Dashboard Company</a>
        </li>
        <li class="flex">
            <a href="" class="w-full px-3 py-2 rounded-lg hover:bg-slate-200 hover:duration-150">Dashboard Admin</a>
        </li>
        <li class="flex">
            <a href="" class="w-full px-3 py-2 rounded-lg bg-red-500 text-white hover:bg-red-400 hover:duration-150">Logout</a>
        </li>
    </ul>
</div>