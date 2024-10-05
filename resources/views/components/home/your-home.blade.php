@props(["title" => "Tell Us About Your Home", "flat" => "Flat", "title1" => "A house with only one floor", "Duplex" => "Duplex", "title2" => "A house with more than one floor"])

<div class="w-full py-10 border-b" >
    <h1 class="text-center font-semibold">{{$title}}</h1>

    <div class="w-full flex items-center justify-center gap-4 mt-5" x-data="{ check: 'flat' }">
        <label class="border w-56 h-28 flex items-center justify-center rounded-md cursor-pointer " @click="check = 'flat'" :class="{ 'border-green-700 border-[1px] bg-green-200': check === 'flat' }">

            <div class="flex flex-col p-5 text-center text-sm ">
                <p class="font-bold">{{$flat}}</p>
            <span class="text-gray-600">{{$title1}}</span>
            </div>

        </label>

        <label class="border w-56 h-28 flex items-center justify-center rounded-md cursor-pointer " @click="check = 'duplex'" :class="{ 'border-green-700 border-[1px] bg-green-200': check === 'duplex' }">

            <div class="flex flex-col p-5 text-center text-sm ">
                <p class="font-bold">{{$Duplex}}</p>
            <span class="text-gray-600">{{$title2}}</span>
            </div>

        </label>
    </div>
</div>
