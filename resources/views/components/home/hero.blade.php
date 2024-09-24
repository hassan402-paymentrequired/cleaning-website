<div class="min-h-screen">
    @include('layouts.navigation')
    <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-x-3 items-center border p-10 justify-center">
        <div class="flex flex-col items-center justify-center md:p-10 sm:p-3">
            <div class="flex flex-col">
                <h1 class="sm:text-xl md:text-5xl mb-3 font-bold">A New <span
                        class="text-[#4CA771] tracking-wide">Solution</span> For Your Home Cleaning</h1>
                <p class="text-sm text-gray-500 p-2 my-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Adipisci, eligendi vitae possimus cum earum sunt culpa illo accusantium quam sed.</p>
                <div class="flex w-full space-x-5">
                    <button class="px-4  rounded bg-green-400 text-white font-semibold">Order Now</button>
                    <x-primary-button class="bg-transparent hover:bg-green-400 rounded-md  text-black text-xs ">
                        <span
                            class="w-8 h-8 flex items-center justify-center border-2 border-green-300 bg-green-400 mr-2 text-white  rounded-full"><i
                                class='bx text-2xl ml-1 bx-play'></i></span>
                        Watch Demo
                    </x-primary-button>
                </div>
            </div>
        </div>

        <div class="">
            <div class="flex w-full h-full items-center justify-center border-[10px] rounded-full border-green-600 ">
                <div class="">
                    <img src="assets/images/hero.png" alt="" width="500">
                </div>
            </div>
        </div>
    </div>
</div>
