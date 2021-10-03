@extends('layouts.app')

@section('content')
<?php $list = explode("/", Request::getpathInfo()); $listId = $list[3] ?? null; $listName = $list[2] ?? null; 
  $taskId = $list[4] ?? null;
?>

<ul id="menu">
  <li class="menu-item"> <i class="fa fa-edit"></i> edit</li>
  <li class="menu-item"> <i class="fa fa-trash"></i> remove</li>
</ul>

<div id="out-click"></div>
<!--====== PRELOADER ======-->
<div class="preloader">
  <span class="loader-112">D &nbsp;nemod </span>
</div>


<div>
  <form action="/logout" method="POST">
    @csrf
    <input type="submit" value="logout">
  </form>
  <nav class="bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-10">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <a href="#">
              <img class="h-8 " src=" {{ asset("img/logo.png") }}" alt="Workflow">
            </a>
          </div>
        </div>

        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline">

            <a href="#" class="text-gray-50 px-3 py-2 rounded-md text-xl"> Donemod </a>
          </div>
        </div>


        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button"
              class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
              <span class="sr-only">View notifications</span>

              <!-- Heroicon name: outline/bell -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="ml-3 relative">
              <div>
                <a href="/profile">
                  <button type="button"
                    class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="{{ asset("img/user.png") }}" alt="">
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">

          <!-- Mobile menu button -->
          <!-- <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
               <span class="sr-only">Open main menu</span>
               
                 Heroicon name: outline/menu
   
                 Menu open: "hidden", Menu closed: "block"
               
               <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
               </svg>
                 Heroicon name: outline/x
   
                 Menu open: "block", Menu closed: "hidden"
               -->
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- header  -->
  <header class="bg-main shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
     <div class="card add">

      <form action="/task" id="addTaskForm">
        <div class="cb-container">
            <button type="submit" class="addTaskBtn"> + </button>
        </div>
          <div class="txt-container">
            <label for="addt"> New task </label>
            <input type="text" id="addt" class="txt-input" placeholder="Add Task" spellcheck="false" data-list-name="{{$listName}}"
              autocomplete="off" data-user-id="{{ Auth()->user()->id }}"/>
          </div>
      </form>

      </div>
    </div>
  </header>
  <!-- header  -->
</div>

<div class="flex text-gray-50" id="clickable">
  <!-- sidebar  -->
  <div class="h-auto flex-auto max-w-xs2 m-1 divide-y hidden sm:block">
    @foreach($folders as $folder)
    <div class="flex justify-between text-lg menu-bg" id="lists">
      <p class="m-1"> <span>&#128197;</span>
        <a href="/tasks/{{ strtolower($folder->name) }}/{{ $folder->id }}" id="listInfo" data-list-id="{{$listId}}"> {{ $folder->name }} </a>
       </p>
      <span class="mr-1 num-bg"> {{ $folder->taskEntity }} </span>
    </div>
    @endforeach
    {{-- @foreach($folders as $folder)
    <div class="flex justify-between text-lg menu-bg" id="lists">
      <p class="m-1"> <span>&#128197;</span>
        @if (!empty($_GET["data"]))
        <a href="/tasks/{{ strtolower($folder->name) }}?data={{ $folder->id }}" id="listInfo" data-list-id="<?= //$_GET["data"]?? null ?>"> {{ $folder->name }} </a>
        @endif  
       </p>
      <span class="mr-1 num-bg"> {{ $folder->taskEntity }} </span>
    </div>
    @endforeach --}}

    {{-- <div class="flex justify-between text-lg menu-bg">
      <p class="m-1"> <span>&#11088;</span> Important </p>
      <span class="mr-1 num-bg"> 3 </span>
    </div>

    <div class="flex justify-between text-lg menu-bg"">
      <p class="m-1"> <span>&#129309;</span> Meeting </p>
      <span class="mr-1 num-bg"> 1 </span>
    </div>
    <div class="flex justify-between text-lg menu-bg"">
      <p class="m-1">  <span>&#127970;</span> Project </p>
      <span class="mr-1 num-bg"> 5 </span>
    </div>
    <div class="flex justify-between text-lg menu-bg"">
      <p class="m-1"> <span>&#128198;</span> Events </p>
      <span class="mr-1 num-bg"> 7 </span>
    </div>
    <div class="flex justify-between text-lg menu-bg"">
      <p class="m-1"> <span>&#128202;</span> Planned </p>
      <span class="mr-1 num-bg"> 2 </span>
    </div>
    <div class="flex justify-between text-lg menu-bg"">
      <p class="m-1">  <span>	&#127911;</span> music player </p>
      <span class="mr-1 num-bg"></span>
    </div> --}}
  </div>
  <!--  sidebar  -->


  <!-- Tasks  -->
  <div class="h-auto flex-auto m-1 divide-y text-white task-bg" >
    <span class="text-2xl ml-4">  {{ $listName }}  </span>
    {{-- id="tasks" --}}
    @foreach ($tasks as $task)
    @if ($task->folderId == $listId)
    <div class="flex flex-col m-4 main-bg" id="tasks">
      <p class=""> <i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon pl-5" aria-hidden="true"></i> 
        <a href="/tasks/{{ $listName }}/{{ $listId }}"> {{ $task->name }} </a>
        <button class="deleteTaskBtn" data-task-id="{{ $taskId }}">
          <i class="fa fa-trash"></i>
        </button>
      </p>
      <p class="border-black pl-10 ml-5"> {{ $listName }} <span> {{ $task->created_at }} </span> </p>
    </div>
    @endif
    @endforeach
    {{-- @foreach ($tasks as $task)
    @if($task->folderId == $_GET["data"] && !empty($_GET["data"]))
    <div class="flex flex-col m-4 main-bg" id="tasks">
      <p class=""> <i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon pl-5" aria-hidden="true"></i>
         {{ $task->name }}
      </p>
      <p class="border-black pl-10 ml-5"> Today <span> Date </span></p>
    </div>
    @endif
    @endforeach --}}

    {{-- <div class="flex flex-col m-4 main-bg">
      <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon pl-5" aria-hidden="true"></i> Bake a Cake </p>
      <p class="border-black pl-10 ml-5"> Important <span> yesterday </span></p>
    </div>
    <div class="flex flex-col m-4 main-bg">
      <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon pl-5" aria-hidden="true"></i> Eating Water </p>
      <p class="border-black pl-10 ml-5"> Today <span> Date </span></p>
    </div>
    <div class="flex flex-col m-4 main-bg">
      <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon pl-5" aria-hidden="true"></i> Bake a Cake </p>
      <p class="border-black pl-10 ml-5"> Important <span> yesterday </span></p>
    </div>
    <div class="flex flex-col m-4 main-bg">
      <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon pl-5" aria-hidden="true"></i> Eating Water </p>
      <p class="border-black pl-10 ml-5"> Today <span> Date </span></p>
    </div>
    <div class="flex flex-col m-4 main-bg">
      <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon pl-5" aria-hidden="true"></i> Bake a Cake </p>
      <p class=" border-black pl-10 ml-5"> Important <span> yesterday </span></p>
    </div>
    <div class="flex flex-col m-4 main-bg">
      <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon pl-5" aria-hidden="true"></i> Eating Water </p>
      <p class=" border-black pl-10 ml-5"> Today <span> Date </span></p>
    </div>
    <div class="flex flex-col m-4 main-bg">
      <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon pl-5" aria-hidden="true"></i> Bake a Cake </p>
      <p class=" border-black pl-10 ml-5"> Important <span> yesterday </span></p>
    </div>
    <div class="flex flex-col m-4 main-bg">
      <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon pl-5" aria-hidden="true"></i> Eating Water </p>
      <p class=" border-black pl-10 ml-5"> Today <span> Date </span></p>
    </div>
    <div class="flex flex-col m-4 main-bg">
      <p class=""><i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon pl-5" aria-hidden="true"></i> Bake a Cake </p>
      <p class=" border-black pl-10 ml-5"> Important <span> yesterday </span></p>
    </div> <br> <br> --}}
  </div>
  <!-- Tasks -->
</div>

<!-- Navigation bar  -->
<div class="flex sm:hidden">
  <nav class="nav">
    <a href="#" class="nav__link">
      <span>&#128197;</span> 
      <span class="nav__text "> Today </span>
    </a>
    <a href="#" class="nav__link nav__link--active">
      <span>&#11088;</span>
      <span class="nav__text"> Important </span>
    </a>
    <a href="#" class="nav__link">
      <span>&#127970;</span>
      <span class="nav__text">Project</span>
    </a>
    <a href="#" class="nav__link">
      <span>&#128202;</span>
      <span class="nav__text"> Planned </span>
    </a>
    <a href="#" class="nav__link">
      <span>&#128198;</span>
      <span class="nav__text">Events</span>
    </a>
    <a href="#" class="nav__link">
      <span>&#129309;</span>
      <span class="nav__text"> Meeting </span>
    </a>
    <a href="#" class="nav__link">
      <span>&#127911;</span>
      <span class="nav__text">Music player</span>
    </a>
  </nav>
  <!-- Navigation bar  -->

</div>

@endsection