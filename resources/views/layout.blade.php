<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset("css/style.css") }}" rel="stylesheet" >
    <title> Donemod </title>
</head>
<body>
     <div>
        <nav class="bg-gray-900">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-10">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  {{-- <img class="h-8" src="/img/logo.png" alt="Workflow"> --}}
                </div>
              </div>

                <div class="hidden md:block">
                  <div class="ml-10 flex items-baseline">
                    {{-- <a href="#" class="text-gray-300 px-3 py-2 rounded-md text-xl"> Donemod </a> --}}
                    <img class="h-8" src="/img/logo.png" alt="Workflow">
                  </div>
                </div>
              

              <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                  <button type="button" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                  </button>
      
                  <!-- Profile dropdown -->
                  <div class="ml-3 relative">
                    <div>
                    <a href="/profile">
                      <button type="button" class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full" src="#" alt="">
                      </button>
                    </a>
                    </div>
                   
                      {{-- Dropdown menu, show/hide based on menu state.
      
                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95" --}}
                  </div>
                </div>
              </div>
              <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                 {{-- <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <!--
                    Heroicon name: outline/menu
      
                    Menu open: "hidden", Menu closed: "block"
                  -->
                  <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                  <!--
                    Heroicon name: outline/x
      
                    Menu open: "block", Menu closed: "hidden"
                  -->
                  <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button> --}}
              </div>
            </div>
          </div>
        </nav>

        {{-- header --}}
        <header class="bg-white shadow">
          <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{-- <h1 class="text-2xl font-bold text-gray-900"> --}}
              {{-- Hello UserName <br>
              What do you want to do? --}}
            {{-- </h1> --}}
          </div>
        </header>
        {{-- header --}}
      </div>

      <div class="flex">
        {{-- sidebar --}}
          <div class="h-auto flex-auto max-w-xs2 m-1 divide-y border-r-2 hidden sm:block">
            {{-- <span> Lists </span> --}}
          <div class="flex justify-between text-lg">
              <p class="m-1"> <i class="fa fa-calendar" aria-hidden="true"></i> Today </p>
              <span class="mr-1"> 9 </span>
            </div>

            <div class="flex justify-between text-lg ">
              <p class="m-1"> <i class="fa fa-star" aria-hidden="true"></i> Important </p>
              <span class="mr-1"> 3 </span>
            </div>

            <div class="flex justify-between text-lg ">
              <p class="m-1"> <i class="fa fa-handshake-o" aria-hidden="true"></i> Meeting </p>
              <span class="mr-1"> 1 </span>
            </div>
            <div class="flex justify-between text-lg ">
              <p class="m-1"> <i class="fa fa-building" aria-hidden="true"></i> Project </p>
              <span class="mr-1"> 5 </span>
            </div>
            <div class="flex justify-between text-lg ">
              <p class="m-1"> <i class="fa fa-calendar-o" aria-hidden="true"></i> Events </p>
              <span class="mr-1"> 7 </span>
            </div>
            <div class="flex justify-between text-lg ">
              <p class="m-1"> <i class="fa fa-columns" aria-hidden="true"></i> Planned </p>
              <span class="mr-1"> 2 </span>
            </div>
          </div>
        {{-- sidebar --}}


          {{-- Tasks --}}
          <div class="h-auto flex-auto m-1 divide-y"> 
           <span class="text-2xl ml-4"> Planned 
             {{-- Saturday, 18 Sept --}}
           </span>
            <div class="flex flex-col m-4">
              <p class=""> <i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon" aria-hidden="true"></i>  Eating Water </p>
              <p class=" border-black pl-5 ml-5"> Today <span> Date </span></p> 
            </div>
            <div class="flex flex-col m-4">
              <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon" aria-hidden="true"></i> Bake a Cake </p>
              <p class=" border-black pl-5 ml-5"> Important <span> yesterday </span></p> 
            </div>
            <div class="flex flex-col m-4">
              <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon" aria-hidden="true"></i> Eating Water </p>
              <p class=" border-black pl-5 ml-5"> Today <span> Date </span></p> 
            </div>
            <div class="flex flex-col m-4">
              <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon" aria-hidden="true"></i> Bake a Cake </p>
              <p class=" border-black pl-5 ml-5"> Important <span> yesterday </span></p> 
            </div>
            <div class="flex flex-col m-4">
              <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon" aria-hidden="true"></i> Eating Water </p>
              <p class=" border-black pl-5 ml-5"> Today <span> Date </span></p> 
            </div>
            <div class="flex flex-col m-4">
              <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon" aria-hidden="true"></i> Bake a Cake </p>
              <p class=" border-black pl-5 ml-5"> Important <span> yesterday </span></p> 
            </div>
            <div class="flex flex-col m-4">
              <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon" aria-hidden="true"></i> Eating Water </p>
              <p class=" border-black pl-5 ml-5"> Today <span> Date </span></p> 
            </div>
            <div class="flex flex-col m-4">
              <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon" aria-hidden="true"></i> Bake a Cake </p>
              <p class=" border-black pl-5 ml-5"> Important <span> yesterday </span></p> 
            </div>
            <div class="flex flex-col m-4">
              <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon" aria-hidden="true"></i> Eating Water </p>
              <p class=" border-black pl-5 ml-5"> Today <span> Date </span></p> 
            </div>
            <div class="flex flex-col m-4">
              <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon" aria-hidden="true"></i> Bake a Cake </p>
              <p class=" border-black pl-5 ml-5"> Important <span> yesterday </span></p> 
            </div> <br> <br>
          </div>
          {{-- Tasks --}}
      </div>

      {{-- Navigation bar --}}
     <div class="flex sm:hidden"> 
      <nav class="nav">
        <a href="#" class="nav__link">
          <i class="fa fa-calendar fa-lg" aria-hidden="true"></i>
          <span class="nav__text "> Today </span>
        </a>
        <a href="#" class="nav__link nav__link--active">
          <i class="fa fa-star fa-lg" aria-hidden="true"></i>
          <span class="nav__text"> Important </span>
        </a>
        <a href="#" class="nav__link">
          <i class="fa fa-bookmark-o fa-lg" aria-hidden="true"></i>
          <span class="nav__text">Project</span>
        </a>
        <a href="#" class="nav__link">
          <i class="fa fa-columns fa-lg" aria-hidden="true"></i>
          <span class="nav__text"> Planned </span>
        </a>
        <a href="#" class="nav__link">
          <i class="fa fa-black-tie fa-lg" aria-hidden="true"></i>
          <span class="nav__text">Events</span>
        </a>
        <a href="#" class="nav__link">
          <i class="fa fa-handshake-o" aria-hidden="true"></i>
          <span class="nav__text"> Meeting </span>
        </a>
        <a href="#" class="nav__link">
          <i class="fa fa-check" aria-hidden="true"></i>
          <span class="nav__text">exam</span>
        </a>
      </nav>
      {{-- Navigation bar --}}

    </div>
      <script src="https://use.fontawesome.com/44d08aa6b0.js"></script>
</body>
</html>