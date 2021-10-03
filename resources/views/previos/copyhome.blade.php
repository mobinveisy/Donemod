<div>
    <nav class="bg-gray-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-10">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              {{-- <img src="{{ asset("img/logo.png") }}" class="h-8" alt="Workflow"> --}}
              <form method="POST" action="logout" >
                @csrf
                <button class="bg-red-600" type="submit"> Logout </button>
              </form>
            </div>
          </div>

            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline">
                <img src="{{ asset("img/logo.png") }}" class="h-12" alt="Workflow">
              </div>
            </div>
          

          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
              <button type="button" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                <span class="sr-only">View notifications</span>
                <!-- Heroicon name: outline/bell -->
                <i class="fa fa-bell" aria-hidden="true"></i>
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
      <div class="h-auto flex-auto max-w-xs2 m-1 divide-y border-r-2 hidden sm:block" id="lists">
        {{-- <span> Lists </span> --}}
          
     
      </div>
      
      <input type="text" id="listName" name="listName" class="rounded outline-none border-2 border-red-600 p-0.5">
      <input type="button" value="Add" id="addListBtn" class="cursor-pointer outline-none rounded bg-red-400 text-white p-0.5">
    {{-- sidebar --}}


      {{-- Tasks --}}
      <div class="h-auto flex-auto m-1 divide-y"> 
       <span class="text-2xl ml-4"> Planned For {{  Auth::user()->name }}
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



{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>




                
                 <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> 
            </div>
        </div>
    </div>
</div> --}}