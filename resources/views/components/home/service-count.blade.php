<div class="w-full p-5" >

    <div class="w-full flex items-center justify-between">
        <span class="font-bold">Bedroom</span>
        <div class="space-x-3">
            <button type="button" :disabled="bedroom === 0" :class="{'bg-gray-400': bedroom === 0}"  @click="bedroom--; total -= 1000"  class="w-7 h-7 rounded-lg bg-green-800 text-white font-semibold">-</button>
            <span x-text="bedroom"></span>
            <button type="button"  @click="bedroom++; total += 1000" class="w-7 h-7 rounded-lg bg-green-800 text-white font-semibold">+</button>
        </div>
    </div>

{{--    living-room--}}

    <div class="w-full flex items-center justify-between mt-5">
        <span class="font-bold">Living Rooms / Dining Areas</span>
        <div class="space-x-3">
            <button type="button" :disabled="LivingRooms === 0" :class="{'bg-gray-400': LivingRooms === 0}" @click="LivingRooms--; total += 1000" class="w-7 h-7 rounded-lg bg-green-800 text-white font-semibold">-</button>
            <span x-text="LivingRooms"></span>
            <button type="button" @click="LivingRooms++; total -= 1000" class="w-7 h-7 rounded-lg bg-green-800 text-white font-semibold">+</button>
        </div>
    </div>


    {{-- toilet--}}

    <div class="w-full flex items-center justify-between mt-5">
        <span class="font-bold">Toilets / Bathrooms</span>
        <div class="space-x-3">
            <button type="button" :disabled="toilets === 0" :class="{'bg-gray-400': toilets === 0}" @click="toilets--; total -= 1000" class="w-7 h-7 rounded-lg bg-green-800 text-white font-semibold">-</button>
            <span x-text="toilets"></span>
            <button type="button" @click="toilets++; total += 1000" class="w-7 h-7 rounded-lg bg-green-800 text-white font-semibold">+</button>
        </div>
    </div>


    {{-- kitchen--}}

    <div class="w-full flex items-center justify-between mt-5">
        <span class="font-bold">Kitchen</span>
        <div class="space-x-3">
            <button type="button" :disabled="Kitchen === 0" :class="{'bg-gray-400': Kitchen === 0}" @click="Kitchen--; total -= 1000" class="w-7 h-7 rounded-lg bg-green-800 text-white font-semibold">-</button>
            <span x-text="Kitchen"></span>
            <button type="button" @click="Kitchen++; total += 1000" class="w-7 h-7 rounded-lg bg-green-800 text-white font-semibold">+</button>
        </div>
    </div>

    {{-- balcony--}}

    <div class="w-full flex items-center justify-between mt-5">
        <span class="font-bold">Outdoor / Balcony</span>
        <div class="space-x-3">
            <button type="button" :disabled="outdoor === 0" :class="{'bg-gray-400': outdoor === 0}" @click="outdoor--; total -= 1000" class="w-7 h-7 rounded-lg bg-green-800 text-white font-semibold">-</button>
            <span x-text="outdoor"></span>
            <button type="button" @click="outdoor++; total += 1000" class="w-7 h-7 rounded-lg bg-green-800 text-white font-semibold">+</button>
        </div>
    </div>


    {{-- study--}}

    <div class="w-full flex items-center justify-between mt-5">
        <span class="font-bold">Study / Store</span>
        <div class="space-x-3">
            <button type="button" :disabled="StudyStore === 0" :class="{'bg-gray-400': StudyStore === 0}" @click="StudyStore--; total -= 1000" class="w-7 h-7 rounded-lg bg-green-800 text-white font-semibold">-</button>
            <span x-text="StudyStore"></span>
            <button type="button" @click="StudyStore++; total += 1000" class="w-7 h-7 rounded-lg bg-green-800 text-white font-semibold">+</button>
        </div>
    </div>


</div>
