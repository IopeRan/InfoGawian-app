<div id="createPost" class="hidden justify-center items-center w-full fixed top-6">
    <div class="bg-white w-full lg:w-1/3 h-max rounded-3xl mx-6 flex flex-col overflow-hidden">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#14b8a6" fill-opacity="1" d="M0,128L60,149.3C120,171,240,213,360,218.7C480,224,600,192,720,186.7C840,181,960,203,1080,213.3C1200,224,1320,224,1380,224L1440,224L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
        <div class="px-6 pt-6">
            <div class="flex flex-col">
                <h5 class="text-slate-500 font-medium text-lg">Create a new Post</h5>
                <small class="text-slate-400">17/08/2024</small>
            </div>
            <hr class="mt-3">
            <form action="" class="w-full flex flex-col gap-4 mt-4">
                <textarea class="border w-full rounded-xl outline-teal-500 px-3 py-2" placeholder="Post"></textarea>
                <div class="flex justify-between">
                    <button type="button" onclick="cancelCreatePost()" class="px-6 py-2 font-medium border-red-500 border text-red-500 rounded-xl hover:bg-red-500 hover:duration-150 hover:text-white">Cancel</button>
                    <button type="submit" class="px-6 py-2 text-white font-medium bg-teal-500 rounded-xl hover:bg-teal-400 hover:duration-150">Create</button>
                </div>
            </form>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#14b8a6" fill-opacity="1" d="M0,128L60,149.3C120,171,240,213,360,218.7C480,224,600,192,720,186.7C840,181,960,203,1080,213.3C1200,224,1320,224,1380,224L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    </div>
</div>