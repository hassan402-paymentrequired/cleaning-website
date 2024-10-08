<x-guest-layout>
    <div class="w-full  bg-[#EAF9E7] ">
        @if (session('message'))
            <div class="alert alert-{{ session('message.type') }}">
                {{ session('message.msg') }}
            </div>
        @endif
        <x-home.heropage />
       <x-home.subSevice />
       <x-home.recommend />
       <x-home.what-they-say/>
        <x-home.map />
       <x-home.book/>
       <x-home.faq/>
       <x-home.satisfy/>
       <x-home.footer/>

    </div>
</x-guest-layout>
