@extends('layouts.app')

@section('content')
<?php $list = explode("/", Request::getpathInfo()); $listId = $list[3] ?? null; $listName = $list[2] ?? null; 
  $taskId = $list[4] ?? null;
?>
  {{-- <ul id="menu">
    <li class="menu-item"> <i class="fa fa-edit"></i> edit</li>
    <li class="menu-item"> <i class="fa fa-remove"></i> remove</li>
  </ul>
  
  <div id="out-click"></div>
  <!--====== PRELOADER ======-->
  <div class="preloader">
    <span class="loader-112">D &nbsp;nemod </span>
  </div> --}}

  <div>
    <nav class="bg-gray-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-10">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <a href="#">
                <img class="h-8 " src="{{ asset("img/logo.png") }}" alt="Workflow">
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
                  <a href="dashboard/index.html">
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
           <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>

  </div>



  <div class="flex text-gray-50" id="clickable">
 <!-- sidebar  -->
    <div class="h-auto flex-auto max-w-xs2 m-1 divide-y hidden sm:block" id="tabs">
       <!-- <span> Lists </span>  -->
    @foreach($folders as $folder)
    <div class="flex justify-between text-lg menu-bg">
      <p class="m-1">
      <span>
          @if ($folder->name == "Today")
          &#128197;
          @elseif($folder->name == "Events")
          &#11088;
          @elseif($folder->name == "Planned")
          &#128202;
          @elseif($folder->name == "Meeting")
          &#129309;
          @elseif($folder->name == "Ideas")
          &#128278;
          @elseif($folder->name == "Project")
          &#127970;
          @elseif($folder->name == "Tasks")
          🗄️
          @endif
      </span>
      <a href="/tasks/{{ strtolower($folder->name) }}/{{$folder->id}}" id="listInfo" data-list-id="{{$listId}}"> {{ $folder->name }} </a>
      {{-- <button class="lists" data-list-name="{{ strtolower($folder->name) }}" data-list-id="{{$folder->id}}"> {{ $folder->name }} </button> --}}
       </p>
      <span class="mr-1 num-bg"> {{ $folder->taskEntity }} </span>
    </div>
    @endforeach
      <div class="flex justify-between text-lg menu-bg">
        <p class="m-1">  <span>	&#127911;</span><div  class="musicpopup"><a> music player</a></div> </p>
        <span class="mr-1 num-bg"></span>
      </div>
    </div>
    <!--  sidebar  -->

    <!-- Tasks  -->
<div class="h-auto flex-auto m-1 text-white task-bg">
      <div id="date"></div> 
      <div id="time"></div>
      <hr>
      <div class="text-center">
        <span class="text-2xl mt-2"> Planned </span>
      </div>
      <div class="undo">
        Task deleted 
        <div> 
          <span class="fa fa-undo"></span>
          Undo
        </div>
      </div>

 <div class="wrapper1" id="clickable">
 <div class="main1">
   <div class="header">
     {{-- <h1 style="color: rgb(233, 225, 225);">to do list<span></span></h1> --}}
   </div>
   <ul id="sortable">
    <li style="display:none">
      <span class="priority-indicator"></span>      
      <div class="dragger">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><circle cy="7" cx="9.5" r="1" fill="#999"></circle><circle cy="7" cx="14" r="1" fill="#999"></circle><circle cy="12.5" cx="9.5" r="1" fill="#999"></circle><circle cy="12.5" cx="14" r="1" fill="#999"></circle><circle cy="18" cx="9.5" r="1" fill="#999"></circle><circle cy="18" cx="14" r="1" fill="#999"></circle></svg>
      </div>
      <input type="checkbox"/>
      <label>
        <div class="checkbox"><span class="fa fa-check"></span></div>
        <span class="item-name">learn react js </span>        
        <input type="text">
       </label>
      <div class="actions">   
        <span class="fa fa-dot-circle-o prio-btn"></span>
        <span class="fa fa-pencil"></span>
        <span class="fa fa-trash"></span>        
      </div>
    </li>
    
    <li class="checked">
      <span class="priority-indicator"></span>
      <div class="dragger">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><circle cy="7" cx="9.5" r="1" fill="#999"></circle><circle cy="7" cx="14" r="1" fill="#999"></circle><circle cy="12.5" cx="9.5" r="1" fill="#999"></circle><circle cy="12.5" cx="14" r="1" fill="#999"></circle><circle cy="18" cx="9.5" r="1" fill="#999"></circle><circle cy="18" cx="14" r="1" fill="#999"></circle></svg>
      </div>
      <input type="checkbox" id="1" checked/>
      <label for="1">
        <div class="checkbox">
          <span class="fa fa-check"></span>
          </div>
        <span class="item-name">study </span>        
        <input type="text">
      </label>
      <div class="actions">   
        <span class="fa fa-dot-circle-o prio-btn"></span>
        <span class="fa fa-pencil"></span>
        <span class="fa fa-trash"></span>        
      </div>
    </li>
    
    <li class="priority priority2">
      <span class="priority-indicator"></span>
     <div class="dragger">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><circle cy="7" cx="9.5" r="1" fill="#999"></circle><circle cy="7" cx="14" r="1" fill="#999"></circle><circle cy="12.5" cx="9.5" r="1" fill="#999"></circle><circle cy="12.5" cx="14" r="1" fill="#999"></circle><circle cy="18" cx="9.5" r="1" fill="#999"></circle><circle cy="18" cx="14" r="1" fill="#999"></circle></svg>
      </div>
      <input type="checkbox" id="2"/>
      <label for="2">
        <div class="checkbox"><span class="fa fa-check"></span></div>
        <span class="item-name">project</span>
        <input type="text">
      </label>
      <div class="actions">
        <span class="fa fa-dot-circle-o prio-btn"></span>
        <span class="fa fa-pencil"></span>
        <span class="fa fa-trash"></span>
      </div>
    </li>
    
    <li class="priority priority1">
      <span class="priority-indicator"></span>
      <div class="dragger">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><circle cy="7" cx="9.5" r="1" fill="#999"></circle><circle cy="7" cx="14" r="1" fill="#999"></circle><circle cy="12.5" cx="9.5" r="1" fill="#999"></circle><circle cy="12.5" cx="14" r="1" fill="#999"></circle><circle cy="18" cx="9.5" r="1" fill="#999"></circle><circle cy="18" cx="14" r="1" fill="#999"></circle></svg>
      </div>
      <input type="checkbox" id="4" />
      <label for="4">
        <div class="checkbox"><span class="fa fa-check"></span></div>
        <span class="item-name">read book</span>
        <input type="text">
      </label>
      <div class="actions">
        <span class="fa fa-dot-circle-o prio-btn"></span>
        <span class="fa fa-pencil"></span>
        <span class="fa fa-trash"></span>
      </div>
    </li>
    
    <li>
      <span class="priority-indicator"></span>
      <div class="dragger">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><circle cy="7" cx="9.5" r="1" fill="#999"></circle><circle cy="7" cx="14" r="1" fill="#999"></circle><circle cy="12.5" cx="9.5" r="1" fill="#999"></circle><circle cy="12.5" cx="14" r="1" fill="#999"></circle><circle cy="18" cx="9.5" r="1" fill="#999"></circle><circle cy="18" cx="14" r="1" fill="#999"></circle></svg>
      </div>
      <input type="checkbox" id="3" />
      <label for="3">
        <div class="checkbox"><span class="fa fa-check"></span></div>
        <span class="item-name"> watch movie </span>
        <input type="text">
      </label>
      <div class="actions">
        <span class="fa fa-dot-circle-o prio-btn"></span>
        <span class="fa fa-pencil"></span>
        <span class="fa fa-trash"></span>
      </div>
    </li>
  </ul>
      <div class="add">
        <div class="add-txt">
          <div>
            <span class="fa fa-plus"></span>
          </div>
          <div>
            <a href="#popup1"><span class="fa fa-calendar"></span></a>
          </div>
          <span class="txt ">Add new</span>
          <input type="text">
        </div>
      </div>
  </div>
</div>
</div>
   
<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Date and Time </h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
      <input type="datetime-local" id="birthdaytime" name="birthdaytime" class="reminder">
      <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
		</div>
	</div>
</div>
    <!-- Tasks -->
  
  
<div class="overlay1">
  <div class="content-music">
    <div id="close"><i class="fa fa-times" aria-hidden="true"></i></div>
    <iframe src="https://open.spotify.com/embed/playlist/5GfvZIg4K2Jy98UorzhwIr" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture">
    </iframe>
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