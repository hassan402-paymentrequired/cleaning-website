<div class="flex p-5 justify-center gap-8">
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
                            {{-- bedrooms and bathrooms --}}
                            <div class="mt-2">
                                <select id="country" name="bedroom-count" autocomplete="bed-room"
                                    class="w-full">
                                    <option selected>--bedroom--</option>
                                    <option>1 bedroom</option>
                                    <option>2 bedrooms</option>
                                    <option>3 bedrooms</option>
                                    <option>4 bedrooms</option>
                                    <option>5 bedrooms</option>
                                    <option>Home: Hourly service - $35/hr per maid</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <div class="mt-2">
                                <select id="bathroom" name="bathroom" autocomplete="bathroom-name"
                                    class="w-full">
                                    <option>--bathroom--</option>
                                    <option>1 bathroom</option>
                                    <option>2 bathrooms</option>
                                    <option>3 bathrooms</option>
                                    <option>4 bathrooms</option>
                                    <option>5 bathrooms</option>
                                    <option>6 bathrooms</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <div class="mt-2">
                                <select id="meters" name="meters" autocomplete="meters-name"
                                    class="w-full">
                                    <option selected>--square meters--</option>
                                    <option>Less than 1,000 sq ft</option>
                                    <option>Less than 1,499 sq ft</option>
                                    <option>Less than 1,999 sq ft</option>
                                    <option>Less than 2,499 sq ft</option>
                                    <option>Less than 2,999 sq ft</option>
                                    <option>Less than 3,499 sq ft</option>
                                </select>
                            </div>
                        </div>


                        {{-- maid --}}
                        <div class="col-span-6 ">
                            <div class=" ">
                                <div class="mt-2 sm:col-span-3 ">
                                    <select id="meters" name="meters" autocomplete="meters-name" class="w-full">
                                        <option selected>--cleaners--</option>
                                        <option>2 cleaner</option>
                                    </select>
                                </div>

                                <div class=" sm:col-span-3">
                                    <div class="mt-2 mb-4 ">
                                        <select id="maid-hour" name="maid-hour" autocomplete="maid-hour-name" class="w-full">
                                            <option selected>--hours--</option>
                                            <option>1 hour</option>
                                            <option>2 hours</option>
                                            <option>3 hours</option>
                                            <option>4 hours</option>
                                            <option>5 hours</option>
                                            <option>6 hours</option>
                                            <option>7 hours</option>
                                            <option>8 hours</option>
                                        </select>
                                    </div>
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
                                <input type="radio" name="subscription" value="one" x-model="selected"
                                    class="hidden">
                                One Time
                            </label>
                            <label :class="{ 'selected': selected === 'weekly' }"
                                class="p-5 text-black rounded-md flex items-center justify-center border">
                                <input type="radio" name="subscription" value="weekly" x-model="selected"
                                    class="hidden">
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

                    <hr class=""/>

                    {{-- who are you --}}
                    <div class="border-b border-gray-900/10 py-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Who you are</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">This information will be used to contact you
                            about
                            your
                            service.</p>

                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                            <div class="mt-2">
                                <input type="text" name="first-name" id="first-name"
                                    placeholder="First name*"
                                    class="w-full">
                            </div>

                            <div class="mt-2">
                                <input type="text" name="last-name" id="last-name" placeholder="Last name*"
                                    class="w-full">
                            </div>

                            <div class="mt-2">
                                <input type="text" name="email" id="email" placeholder="Email*"
                                    class="w-full">
                            </div>
                            <div class="mt-2">
                                <input type="text" name="phone-number" id="phone-number"
                                    placeholder="Phone number*"
                                    class="w-full">
                            </div>
                        </div>
                        <div class="flex h-6 items-center gap-2 mt-3">
                            <input id="comments" name="comments" type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-600" />
                            <span class="text-gray-500 text-sm">Send me reminders about my booking via text message or
                                email</span>
                        </div>
                    </div>

                    <hr/>

                    {{-- service --}}
                    <div class="mt-4">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Service Address</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Where would you like us to clean?</p>
                        <div class="sm:col-span-6">
                            <div class="mt-2">
                                <select id="state" name="state" autocomplete="state-name"
                                    class="w-full">
                                    <option selected value="--any--">--state--</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <div class="mt-2">
                                <input type="text" name="address" id="address"
                                    autocomplete="street-address" placeholder="Address*"
                                    class="w-full">
                            </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                            <div class="mt-2">
                                <input type="text" name="suite" placeholder="App/Suite #"
                                    autocomplete="address-level2"
                                    class="w-full">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <div class="mt-2">
                                <input type="text" name="city" placeholder="city*"
                                    autocomplete="city"
                                    class="w-full">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <div class="mt-2">
                                <input type="text" name="postal-code" placeholder="zip code"
                                    autocomplete="postal-code"
                                    class="w-full">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

                {{-- when to come --}}
                <div class="border-b border-gray-900/10">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">When will you like us to come</h2>
                    <div class="sm:col-span-2">
                        <div class="mt-2">
                            <input type="date" name="time-to-come" class="w-full">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <div class="mt-2">
                            <input type="text" name="available" placeholder="no spot"
                                autocomplete="available"
                                class="w-full">
                        </div>
                    </div>

                </div>

                <hr />
                {{-- payment --}}
                <div class="">
                    <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl">Payment</h2>
                    <p class="text-gray-500">Enter your card information below. You will be charged after service has
                        been
                        rendered.</p>

                    <div class="">
                        <div class=" grid grid-cols-2 gap-4">
                            <div class="col-span-3 ">
                                <input type="text" id="full_name"
                                    class="w-full"
                                    placeholder="Full name (as displayed on card)*" required />
                            </div>

                            <div class="col-span-1 sm:col-span-3">
                                <input type="text" id="card-number-input"
                                    class="w-full"
                                    placeholder="xxxx-xxxx-xxxx-xxxx" pattern="^4[0-9]{12}(?:[0-9]{3})?$" required />
                            </div>

                            <div>
                                <div class="relative">
                                    <div
                                        class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3.5">
                                        <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input datepicker datepicker-format="mm/yy" id="card-expiration-input"
                                        type="text"
                                        class=" w-full p-2.5 ps-9 text-sm text-gray-900 "
                                        placeholder="card expiry" required />
                                </div>
                            </div>

                            <div>
                                <input type="number" id="cvv-input" aria-describedby="helper-text-explanation"
                                    class="w-full"
                                    placeholder="cvv" required />
                            </div>
                        </div>

                    </div>
                </div>
                <hr />

                {{-- anything to know --}}
                <div>
                    <h2 class="text-xl sm:text-2xl">Is there anything else we should know?</h2>
                    <textarea name="anything-else" rows="4" placeholder="Explain here..."
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
                                        <div :class="{ 'selected': selected === 'street' }"
                                            @click="selected = 'street'"
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
                                        <div :class="{ 'selected': selected === 'garage' }"
                                            @click="selected = 'garage'"
                                            class="py-2 px-8 text-white rounded-md flex items-center justify-center border cursor-pointer">
                                            <span class="text-5xl text-gray-400">&#x2609;</span>
                                        </div>
                                        <span class="text-sm text-gray-500">Park in my garage</span>
                                    </div>

                                    <div class="flex flex-col">
                                        <div :class="{ 'selected': selected === 'other' }"
                                            @click="selected = 'other'"
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
                                        <div :class="{ 'selected': selected === 'home' }"
                                            @click="selected = 'home'"
                                            class="py-2 px-8 text-white rounded-md flex items-center justify-center border cursor-pointer">
                                            <span class="text-5xl text-gray-400">&#x2609;</span>
                                        </div>
                                        <span class="text-sm text-gray-500">I will be home</span>
                                    </div>

                                    <div class="flex flex-col">
                                        <div :class="{ 'selected': selected === 'key' }"
                                            @click="selected = 'key'"
                                            class="py-2 px-8 text-white rounded-md flex items-center justify-center border cursor-pointer">
                                            <span class="text-5xl text-gray-400">&#x2609;</span>
                                        </div>
                                        <span class="text-sm text-gray-500">I will leave a key</span>
                                    </div>

                                    <div class="flex flex-col">
                                        <div :class="{ 'selected': selected === 'code' }"
                                            @click="selected = 'code'"
                                            class="py-2 px-8 text-white rounded-md flex items-center justify-center border cursor-pointer">
                                            <span class="text-5xl text-gray-400">&#x2609;</span>
                                        </div>
                                        <span class="text-sm text-gray-500">I will provide an access code</span>
                                    </div>

                                    <div class="flex flex-col">
                                        <div :class="{ 'selected': selected === 'other' }"
                                            @click="selected = 'other'"
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

    </form>


    <x-order.book-side-bar />
</div>
