<div>

        <!-- Modal Structure -->
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="modal" @keydown.escape.window="modal = false" x-cloak>
            <!-- Background backdrop -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true" x-show="modal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <!-- Modal panel -->
                    <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all duration-300"
                         x-show="modal"
                         x-transition:enter="ease-out duration-300"
                         x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                         x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                         x-transition:leave="ease-in duration-200"
                         x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                         x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">

                        {{--modal--}}
                        <div class="bg-white max-w-md px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                            <div class="sm:flex ">
                                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                    <h3 class="text-3xl font-semibold leading-6 text-gray-900" id="modal-title">Book Your Cleaning Session</h3>
                                    <div class="mt-2">
                                        {{-- your order --}}
                                        <div class="w-[90%] p-3 border mt-4 mx-auto">
                                            <p class="text-2xl font-semibold mb-4">Your Order</p>
                                            <div class="flex items-center justify-between">
                                                <div class="flex flex-col gap-3">
                                                <span class="font-semibold">standard Cleaning</span>
                                                <span>5 rooms</span>
                                                </div>
                                                <span x-text="total"></span>
                                            </div>
                                        </div>

                                        {{--recepient information  --}}

                                        <div class="flex flex-col p-3 gap-3">
                                            <h2 class="text-xl font-semibold">Recipient information</h2>

                                            <div class="flex flex-col gap-5">
                                            <div class="form-item flex flex-col">
                                                <x-input-label>First name</x-input-label>
                                                <x-text-input type="text" name="first_name" placeholder="First name"/>
                                                @error("first_name")
                                                <x-input-error :message="$first_name" />
                                                @enderror
                                            </div>


                                            <div class="form-item flex flex-col">
                                                <x-input-label>Last name</x-input-label>
                                                <x-text-input type="text" name="last_name" placeholder="Last name"/>
                                                @error("last_name")
                                                <x-input-error :message="$last_name" />
                                                @enderror
                                            </div>

                                            <div class="form-item flex flex-col">
                                                <x-input-label>Phone number</x-input-label>
                                                <x-text-input type="text" name="phone_number" placeholder="phone number"/>
                                                @error("phone_number")
                                                <x-input-error :message="$last_name" />
                                                @enderror
                                            </div>
                                            </div>

                                        </div>

                                        {{--Delivery information --}}

                                        <div class="border-t p-4">

                                            <h2 class="text-xl font-semibold">Delivery information</h2>

                                            <div class="p-3 flex items-center gap-2">
                                                <span></span>
                                                <p class="text-lg font-semibold text-center">Your cleaner will arrive to clean between 9AM - 2PM.</p>
                                            </div>

                                            <div class="flex flex-col gap-5">
                                                <div class="form-item flex flex-col">
                                                    <x-input-label>Cleaning date</x-input-label>
                                                    <x-text-input type="date" name="date" placeholder="date"/>
                                                    @error("date")
                                                    <x-input-error :message="$date" />
                                                    @enderror
                                                </div>


                                                <div class="form-item flex flex-col">
                                                    <x-input-label>Cleaning location</x-input-label>
                                                    <x-text-input type="text" name="location" id="location" placeholder="location"/>
                                                    <div id="location-suggestions"></div>
                                                    @error("location")
                                                    <x-input-error :message="$location" />
                                                    @enderror
                                                </div>

                                                <div class="form-item flex flex-col">
                                                    <x-input-label>Land mark</x-input-label>
                                                    <x-text-input type="text" name="land_mark" placeholder="land mark (optional)"/>
                                                    @error("land_mark")
                                                    <x-input-error :message="$land_mark" />
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:px-6">
                            <button type="button" @click="modal = false" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Pay now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






{{--</div>--}}
