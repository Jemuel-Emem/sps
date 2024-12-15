<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPS</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @wireUiScripts --}}
    <style>

        .bg-green-light {
            background-color: #F0FFF4; /* Light green */
        }
    </style>
</head>
<body class="bg-green-light">
    @livewireScripts

    <div class="justify-center w-full mx-auto bg-green-200">
        <div x-data="{ open: false }" class="flex flex-col w-full px-8 py-2 mx-auto md:px-12 md:items-center md:justify-between md:flex-row lg:px-32 max-w-7xl">
          <div class="flex flex-row items-center justify-between text-black">
            <a class="inline-flex items-center gap-3 text-xl font-bold tracking-tight text-black" href="/dashboard">
              <img src="{{ asset('images/icon.jpg') }}" class="h-8 rounded-full" alt="Flowbite Logo" />
              <span class="text-red-600 font-bold">SPS</span>
            </a>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
              <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
          <nav :class="{'flex': open, 'hidden': !open}" class="flex-col items-center flex-grow hidden gap-3 p-4 px-5 text-sm font-medium text-gray-500 md:px-0 md:pb-0 md:flex md:justify-start md:flex-row lg:p-0 md:mt-0">
            <a class="hover:text-white focus:outline-none focus:text-gray-500 md:ml-auto text-gray-500" href="{{route('appointment')}}">Appointment
            </a>
            <a class="hover:text-black focus:outline-none focus:text-gray-500 md:mr-auto" href="{{route('statuss')}}">Appointment Status
            </a>

           <div class="flex gap-4">
               <a href="{{route('login')}}"> <div class="bg-blue-500 text-white w-32 p-1 text-center rounded-lg">Login</div></a>
               <a href="{{route('register')}}"> <div class="bg-green-500 text-white w-32 p-1 text-center rounded-lg">Register</div></a>
           </div>
          </nav>
        </div>
      </div>

      <div>
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

              <section class="bg-gray-100 py-12">
                <div class="px-8 mx-auto md:px-12 lg:px-32 max-w-7xl">
                  <h2 class="text-3xl font-bold text-center text-gray-900">About Us</h2>
                  <p class="mt-4 text-lg text-center text-gray-600">
                    SPS is dedicated to providing a seamless experience for pet owners to manage their pet's care. Our mission is to bridge the gap between pet owners and care providers, ensuring every pet receives timely and efficient care.
                  </p>
                  <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-3">
                    <div class="p-6 bg-white rounded-lg shadow-md">
                      <h3 class="text-xl font-semibold text-gray-900">Convenience</h3>
                      <p class="mt-2 text-gray-600">
                        Manage appointments, track schedules, and get reminders all in one place.
                      </p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-md">
                      <h3 class="text-xl font-semibold text-gray-900">Care</h3>
                      <p class="mt-2 text-gray-600">
                        We prioritize your pet's well-being by connecting you with reliable care providers.
                      </p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-md">
                      <h3 class="text-xl font-semibold text-gray-900">Support</h3>
                      <p class="mt-2 text-gray-600">
                        Our support team is here to assist you every step of the way.
                      </p>
                    </div>
                  </div>
                </div>
              </section>
        </div>

      </div>


</body>
</html>
