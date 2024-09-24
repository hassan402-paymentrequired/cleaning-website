<form class="px-2">
    <div class="space-y-10">
      <div class="border-b border-gray-900/10 pb-6">
        <h2 class="text-2xl font-semibold leading-7 text-gray-900">Get In Touch</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <div class="mt-2">
              <input type="text" name="first-name" placeholder="First name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.8 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
  
          <div class="sm:col-span-3">
            <div class="mt-2">
              <input type="text" name="last-name" placeholder="Last name" class="block w-full rounded-md border-0 py-1.8 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
  
          <div class="sm:col-span-6">
            <div class="mt-2">
              <input id="email" placeholder="Email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="sm:col-span-6">
            <div class="mt-2">
              <input id="phone" placeholder="Phone number" name="phone" type="tel" autocomplete="phone" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
  
            <div class="sm:col-span-3">
              <select id="country" name="service" class="block w-full rounded-md border-0 py-1.8 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:max-w-xs sm:text-sm sm:leading-6">
                <option selected > -- Select service --</option>
                <option>house</option>
                <option>full cleaning</option>
                <option>deep cleaning</option>
              </select>
          </div>
          <div class="sm:col-span-3">
            <select id="country" name="service" class="block w-full rounded-md border-0 py-1.8 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <option selected > -- Select residence --</option>
              <option>Lagos, nigeria</option>
              <option>Alagomeji</option>
              <option>sabo yaba</option>
            </select>
        </div>
        </div>
      </div>

    </div>
  
    <div class="mt-3 flex items-center justify-end gap-x-6">
      <button type="submit" class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Book a sevices &rarr;</button>
      <button type="submit" class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Send</button>
    </div>
  </form>
  