<div class="w-full bg-green-300 p-10" id="book" x-data="{ modal: false, selected: 'standard'}">
    <h1 class="text-xl  font-bold sm:text-6xl font-['Jost'] text-center mb-10">book your cleaning session.</h1>

    <div class="p-10 rounded-md w-full relative max-w-3xl bg-white mx-auto mt-10" x-data="{ bedroom: 0, LivingRooms: 0, toilets: 0, Kitchen: 0, outdoor: 0 , StudyStore: 0, total: 6000}">

        <div>
            <x-home.service-tab/>
            <x-home.your-home/>
            <x-home.service-count/>
            <x-home.your-home title="Frequent" flat="One off" Duplex="Recurring" title2="" title1=""/>

            <div class="border-t py-5 w-full font-bold flex justify-center flex-col gap-2">
                <span class="text-center text-3xl">&#x20A6; <span x-text="total"></span></span>
                <button type="submit" class="w-full h-10 rounded text-white flex items-center justify-center bg-green-500" @click="modal = true">Continue</button>
            </div>
        </div>
        <x-home.once-modal />
    </div>
</div>
