<div class="w-full" x-data="{ selected: 'standard'}">

    <div class="flex items-center justify-evenly my-5 mb-5 space-x-5">

        <div @click="selected = 'standard'" class="cursor-pointer text-3xl "
             :class="{ 'text-green-700 border-b-2 border-green-600': selected === 'standard' }">
            Standard cleaning
        </div>
        <div @click="selected = 'deep'" class="cursor-pointer text-3xl "
             :class="{ 'text-green-700 border-b-2 border-green-600': selected === 'deep' }">Deep cleaning
        </div>
        <div @click="selected = 'post'" class="cursor-pointer text-3xl "
             :class="{ 'text-green-700 border-b-2 border-green-600': selected === 'post' }">Post-construction cleaning
        </div>

    </div>

    {{--    standard--}}
    <div class="flex-col space-y-3 p-5 bg-green-700  rounded-md text-black w-full" x-show="selected === 'standard'" x-transition
         x-transition:enter.duration.200ms x-transition:leave.duration.200ms  x-data="{ open: true }">
        <h2 class="text-2xl border-b-[1px] text-gray-100 flex border-white" @click="open = ! open">What Standard cleaning entails  <span class="flex justify-end ml-72">&#x261F;</span> </h2>
    {{--//&#x27AB;--}}
        <div class="flex flex-col" x-show="open" x-transition>
            <ul class="list-disc text-white">
                <li class="tracking-wider font-normal">Dusting and polishing surfaces</li>
                <li class="tracking-wider font-normal">Vacuuming and mopping floors</li>
                <li class="tracking-wider font-normal">Cleaning bathrooms and kitchens</li>
                <li class="tracking-wider font-normal">Laundry and bed-making services</li>
            </ul>
        </div>

    </div>

    {{--    deep--}}
    <div class="flex-col space-y-3 p-5 bg-green-700  rounded-md text-black w-full" x-show="selected === 'deep'" x-transition
         x-transition:enter.duration.500ms x-transition:leave.duration.400ms x-data="{ open: true }">
        <h2 class="text-2xl border-b-[1px] text-gray-100 flex border-white" @click="open = ! open">What Deep cleaning entails<span class="flex justify-end ml-72">&#x261F;</span> </h2>

        <div class="flex flex-col" x-show="open" x-transition>
            <ul class="list-disc text-white">
                <li>hello world</li>
                <li>hello world</li>
                <li>hello world</li>
                <li>hello world</li>
            </ul>
        </div>

    </div>

    {{--    post--}}
    <div class="flex-col space-y-3 p-5 bg-green-700  rounded-md text-black w-full" x-show="selected === 'post'" x-transition
         x-transition:enter.duration.500ms x-transition:leave.duration.400ms x-data="{ open: true }">
        <h2 class="text-2xl border-b-[1px] text-gray-100 flex border-white" @click="open = ! open">What construction cleaning entails <span class="flex justify-end ml-72">&#x261F;</span> </h2>
        <div class="flex flex-col" x-show="open" x-transition>
            <ul class="list-disc text-white">
                <li>hello world</li>
                <li>hello world</li>
                <li>hello world</li>
                <li>hello world</li>
            </ul>
        </div>

    </div>

</div>
