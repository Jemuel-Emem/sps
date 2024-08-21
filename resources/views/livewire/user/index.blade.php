<div>
    <section>
        <div class="px-8 py-12 mx-auto md:px-12 lg:px-32 max-w-7xl">
          <div class="grid items-center grid-cols-1 gap-4 list-none lg:grid-cols-2 lg:gap-24">
            <div>
              <span class="text-xs font-bold tracking-wide text-gray-500 uppercase">Pet Care</span>
              <p class="mt-8 text-4xl font-semibold tracking-tight text-gray-900 text-balance">
                Simplifying Pet Scheduling, One Appointment at a Time
              </p>
              <p class="mt-4 text-base font-medium text-gray-500">
                Manage your pet's appointments and care routines with ease. Our system ensures that your pets get the care they deserve, while giving you full control over scheduling and reminders.
              </p>
              <div class="flex flex-col items-center gap-2 mx-auto mt-8 md:flex-row">
               <a href="{{route('appointment')}}">
                <button class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 font-medium text-white duration-200 bg-red-600 md:w-auto rounded-xl hover:bg-red-500 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" aria-label="Schedule Appointment">
                    Schedule Appointment
                  </button>
               </a>

              </div>
            </div>
            <div class="p-2 border bg-gray-50 rounded-3xl lg:order-first">
              <div class="h-full overflow-hidden bg-white border shadow-lg rounded-3xl">
                <img alt="Pets and Scheduling" class="relative w-full rounded-2xl drop-shadow-2xl" src="{{asset('images/bg.jpg')}}">
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
