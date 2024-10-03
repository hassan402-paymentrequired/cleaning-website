<div class="flex p-10 justify-center gap-x-8">
    <form class="w-1/2 border shadow-xl p-5">
        <div class="space-y-12 ">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base sm:text-3xl font-semibold leading-7 text-center text-gray-900">Complete your
                    booking.
                </h2>
                <p class="mt-1 text-sm leading-6 text-gray-600 text-center">Great! Few details and we can complete your
                    booking.</p>
                <hr />
                <div class="border-b border-gray-900/10 py-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Choose your service</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Tell us about your home.</p>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="first-name"
                                class="block text-sm font-medium leading-6 text-gray-900">Bedroom</label>
                            {{-- naem --}}
                            <div class="mt-2">
                                <select id="country" name="country" autocomplete="country-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="last-name"
                                class="block text-sm font-medium leading-6 text-gray-900">Studio</label>
                            <div class="mt-2">
                                <select id="country" name="country" autocomplete="country-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Square
                                meters</label>
                            <div class="mt-2">
                                <select id="country" name="country" autocomplete="country-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2  sm:text-sm sm:leading-6">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>
                        </div>

                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                        <div class="sm:col-span-3">
                            <div class="mt-2">
                                <select id="country" name="country" autocomplete="country-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Street
                                address</label>
                            <div class="mt-2">
                                <input type="text" name="street-address" id="street-address"
                                    autocomplete="street-address"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                            <div class="mt-2">
                                <input type="text" name="city" id="city" autocomplete="address-level2"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="region" class="block text-sm font-medium leading-6 text-gray-900">State /
                                Province</label>
                            <div class="mt-2">
                                <input type="text" name="region" id="region" autocomplete="address-level1"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">ZIP /
                                Postal
                                code</label>
                            <div class="mt-2">
                                <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                </div>

                <hr />

                {{-- how often will you like us to come --}}
                <div class=" py-6">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">How often would you like us to come?
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Scheduling is flexible. Cancel or reschedule
                        anytime.
                    </p>
                    <div x-data="{ selected: null }" class="mt-10 justify-center items-center sm:flex-row gap-5 flex">
                        <label :class="{ 'selected': selected === 'one' }" class="p-5 rounded-md flex border">
                            <input type="radio" name="subscription" value="one" x-model="selected" class="hidden">
                            One Time
                        </label>
                        <label :class="{ 'selected': selected === 'weekly' }"
                            class="p-5 text-black rounded-md flex items-center justify-center border">
                            <input type="radio" name="subscription" value="weekly" x-model="selected" class="hidden">
                            Every week (15% discount)
                        </label>
                        <label :class="{ 'selected': selected === 'biweekly' }"
                            class="p-5 rounded-md flex items-center justify-center border">
                            <input type="radio" name="subscription" value="biweekly" x-model="selected"
                                class="hidden"> Every 2 weeks (Most popular)
                        </label>
                        <label :class="{ 'selected': selected === 'monthly' }"
                            class="p-5 rounded-md flex items-center justify-center border">
                            <input type="radio" name="subscription" value="monthly" x-model="selected"
                                class="hidden"> Every 4 weeks
                        </label>
                    </div>


                </div>

                <hr />
                <div class="border-b border-gray-900/10 py-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Who you are</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">This information will be used to contact you about
                        your
                        service.</p>

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <div class="mt-2">
                            <input type="text" name="street-address" id="street-address"
                                placeholder="First name*"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>

                        <div class="mt-2">
                            <input type="text" name="street-address" id="street-address" placeholder="Last name*"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>

                        <div class="mt-2">
                            <input type="text" name="street-address" id="street-address" placeholder="Email*"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        <div class="mt-2">
                            <input type="text" name="street-address" id="street-address"
                                placeholder="Phone number*"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="flex h-6 items-center gap-2 mt-3">
                        <input id="comments" name="comments" type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-600" />
                        <span class="text-gray-500 text-sm">Send me reminders about my booking via text message or
                            email</span>
                    </div>
                </div>

                <hr />
                <div class="">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Service Address</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Where would you like us to clean?</p>
                    <div class="sm:col-span-6">
                        <div class="mt-2">
                            <select id="country" name="country" autocomplete="country-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option selected value="--any--">--state--</option>
                                <option>Canada</option>
                                <option>Mexico</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <div class="mt-2">
                            <input type="text" name="street-address" id="street-address"
                                autocomplete="street-address" placeholder="Adress*"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2 sm:col-start-1">
                        <div class="mt-2">
                            <input type="text" name="suite" placeholder="App/Suite #"
                                autocomplete="address-level2"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <div class="mt-2">
                            <input type="text" name="region" placeholder="city*" autocomplete="address-level1"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <div class="mt-2">
                            <input type="text" name="postal-code" placeholder="zip code"
                                autocomplete="postal-code"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                </div>
            </div>

            {{-- when to come --}}
            <div class="border-b border-gray-900/10">
                <h2 class="text-base font-semibold leading-7 text-gray-900">When will you like us to come</h2>
                <div class="sm:col-span-2">
                    <div class="mt-2">
                        <input type="date" name="region" placeholder="city*" autocomplete="address-level1"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <div class="mt-2">
                        <input type="text" name="postal-code" placeholder="zip code" autocomplete="postal-code"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

            </div>

            <hr />
            {{-- payment --}}
            <div class="">
                <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl">Payment</h2>
                <p class="text-gray-500">Enter your card information below. You will be charged after service has been
                    rendered.</p>

                <div class="">
                    <div class=" grid grid-cols-2 gap-4">
                        <div class="col-span-3 ">
                            <input type="text" id="full_name"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm "
                                placeholder="Full name (as displayed on card)*" required />
                        </div>

                        <div class="col-span-1 sm:col-span-3">
                            <input type="text" id="card-number-input"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pe-10 text-sm text-gray-900 "
                                placeholder="xxxx-xxxx-xxxx-xxxx" pattern="^4[0-9]{12}(?:[0-9]{3})?$" required />
                        </div>

                        <div>
                            <div class="relative">
                                <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3.5">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input datepicker datepicker-format="mm/yy" id="card-expiration-input" type="text"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-9 text-sm text-gray-900 "
                                    placeholder="card expiry" required />
                            </div>
                        </div>

                        <div>
                            <input type="number" id="cvv-input" aria-describedby="helper-text-explanation"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 "
                                placeholder="cvv" required />
                        </div>
                    </div>

                </div>
            </div>
            <hr />

            {{-- anything to know --}}
            <div>
                <h2 class="text-xl sm:text-2xl">Is there anything else we should know?</h2>
                <textarea name="anything-else" rows="4"
                    class="w-full mt-3 rounded outline-none focus:outline-none border-gray-500 resize-none text-gray-600"></textarea>
            </div>
            <hr />

            {{-- hear about us --}}
            <div>
                <h2 class="text-base sm:text-xl">What is the name of your neighborhood or apartment complex?</h2>
                <input type="text" name="neigbour" class="w-full text-gray-500 mt-3"
                    placeholder="neighborhood or apartment complex name">
                <select name="hear-us" class="w-full mt-4 focus:border-gray-5">
                    <option value="--">--How do you hear about us--</option>
                    <option value="youtube">Youtube</option>
                    <option value="facebook">facebook</option>
                    <option value="next-door">next-door</option>
                    <option value="ads">ads</option>
                </select>
            </div>

            {{-- where we should pack --}}
            <div class="w-full">
                <h2 class="text-base font-semibold leading-7 text-gray-500">Where should we park?</h2>

                <div class="flex flex-col gap-3">
                    <div class="flex flex-col">
                        <div x-data="{ selected: null }" class=" flex flex-col">
                            <div class="flex items-center space-x-5 mt-4 justify-evenly">

                                <div class="flex flex-col">
                                    <div :class="{ 'selected': selected === 'street' }" @click="selected = 'street'"
                                        class="py-2 px-8  text-white rounded-md flex items-center justify-center border cursor-pointer">
                                        <span class="text-5xl text-gray-400">&#x2609;</span>
                                    </div>
                                    <span class="text-sm text-gray-500">There is street parking</span>
                                </div>

                                <div class="flex flex-col">
                                    <div :class="{ 'selected': selected === 'driveway' }"
                                        @click="selected = 'driveway'"
                                        class="py-2 px-8 text-white rounded-md flex items-center justify-center border cursor-pointer">
                                        <span class="text-5xl text-gray-400">&#x2609;</span>
                                    </div>
                                    <span class="text-sm text-gray-500">Park in my Driveway</span>
                                </div>

                                <div class="flex flex-col">
                                    <div :class="{ 'selected': selected === 'garage' }" @click="selected = 'garage'"
                                        class="py-2 px-8 text-white rounded-md flex items-center justify-center border cursor-pointer">
                                        <span class="text-5xl text-gray-400">&#x2609;</span>
                                    </div>
                                    <span class="text-sm text-gray-500">Park in my garage</span>
                                </div>

                                <div class="flex flex-col">
                                    <div :class="{ 'selected': selected === 'other' }" @click="selected = 'other'"
                                        class="py-2 px-8 text-white rounded-md flex items-center justify-center border cursor-pointer">
                                        <span class="text-5xl text-gray-400">&#x2609;</span>
                                    </div>
                                    <span class="text-sm text-gray-500">Other (please explain below)</span>
                                </div>
                            </div>
                            <input type="text" name="others" x-show="selected === 'other'"
                                class="w-full mt-4 text-gray-500" placeholder="Please explain..." />
                        </div>
                    </div>


                </div>

                {{-- home access  --}}
                <div class="w-full mt-5">
                    <h2 class="text-base font-semibold leading-7 text-gray-500">Where should we park?</h2>

                    <div class="flex flex-col gap-3">
                        <div x-data="{ selected: null }" class="flex flex-col">
                            <div class="flex items-center space-x-5 mt-4 justify-evenly">
                                <div class="flex flex-col">
                                    <div :class="{ 'selected': selected === 'home' }" @click="selected = 'home'"
                                        class="py-2 px-8 text-white rounded-md flex items-center justify-center border cursor-pointer">
                                        <span class="text-5xl text-gray-400">&#x2609;</span>
                                    </div>
                                    <span class="text-sm text-gray-500">I will be home</span>
                                </div>

                                <div class="flex flex-col">
                                    <div :class="{ 'selected': selected === 'key' }" @click="selected = 'key'"
                                        class="py-2 px-8 text-white rounded-md flex items-center justify-center border cursor-pointer">
                                        <span class="text-5xl text-gray-400">&#x2609;</span>
                                    </div>
                                    <span class="text-sm text-gray-500">I will leave a key</span>
                                </div>

                                <div class="flex flex-col">
                                    <div :class="{ 'selected': selected === 'code' }" @click="selected = 'code'"
                                        class="py-2 px-8 text-white rounded-md flex items-center justify-center border cursor-pointer">
                                        <span class="text-5xl text-gray-400">&#x2609;</span>
                                    </div>
                                    <span class="text-sm text-gray-500">I will provide an access code</span>
                                </div>

                                <div class="flex flex-col">
                                    <div :class="{ 'selected': selected === 'other' }" @click="selected = 'other'"
                                        class="py-2 px-8 text-white rounded-md flex items-center justify-center border cursor-pointer">
                                        <span class="text-5xl text-gray-400">&#x2609;</span>
                                    </div>
                                    <span class="text-sm text-gray-500">Other</span>
                                </div>
                            </div>
                            <input type="text" name="others" x-show="selected === 'other'"
                                class="w-full mt-1 text-gray-500" placeholder="Please specify..." />
                        </div>
                    </div>

                    <textarea name="anything-else" rows="4"
                        class="w-full mt-3 rounded outline-none focus:outline-none border-gray-500 resize-none text-gray-600"></textarea>
                </div>
            </div>
            <p class="mt-2 text-gray-500">By clicking the Book Now button you are agreeing to our Terms of Service
                and Privacy Policy.</p>
            <p class="mt-2 text-gray-500">Don't worry, you won't be billed until the day of service and you will
                receive an email receipt instantly.</p>
        </div>

        <div class=" w-full">
            <button type="submit"
                class=" bg-green-500 text-gray-200 uppercase w-full h-10 flex justify-center items-center">Book
                now</button>
        </div>
</div>

</form>


<x-order.book-side-bar />
</div>
