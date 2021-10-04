{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<?php $list = explode("/", Request::getpathInfo()); $listId = $list[3] ?? null; $listName = $list[2] ?? null; 
  $taskId = $list[4] ?? null;
?>

<div>
  <nav class="bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-10">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <a href="/tasks">
              <img class="h-8 " src=" {{ asset("img/logo.png") }}" alt="Workflow">
            </a>
          </div>
        </div>

        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline">

            <a href="/tasks" class="text-gray-50 px-3 py-2 rounded-md text-xl"> Donemod </a>
          </div>
        </div>


        <div class="">
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

            
            <div class="ml-3 relative">
                <a href="/profile">
                    <img class="h-8 w-8 rounded-full" src="{{ asset("img/user.png") }}" alt="">
                </a>
            </div>

            <div class="ml-2 relative">
                <a href="/profile">
                  <span class="text-white"> {{ Auth()->user()->name }} </span>
                </a>
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

  <!-- header  -->
  <header class="bg-main shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
     <div class="card add">

      <form id="addTaskForm">
          <div class="txt-container">
            <input type="text" id="addt" class="txt-input" placeholder="Add Task" spellcheck="false" data-list-name="{{$listName}}" autocomplete="off" data-user-id="{{ Auth()->user()->id }}"/>
              <div class="cb-container">
                <button type="submit" class="addTaskBtn"> + </button>
              </div>
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
  </div>
  <!--  sidebar  -->


  <!-- Tasks  -->
  <div class="h-auto flex-auto m-1 divide-y text-white task-bg" >
    <span class="text-2xl ml-4"> {{strtoupper($listName)}}  </span>
    @foreach ($tasks as $task)
    @if ($task->folderId == $listId)
    <div class="flex flex-col m-4 main-bg">
      <a href="/tasks/{{$listName }}/{{ $listId }}/{{ $task->id }}">
      {{-- <a class="tasks" data-list-name="{{$listName }}" data-list-id="{{ $listId }}" data-task-id="{{ $task->id }}"> --}}
      <span class="ml-6 mb-2">
        <button data-task-id="{{$task->id}}" class="isDone">
          <i class="fa <?= $task->isDone == 1 ? "fa-check-circle" : "fa-circle"?> fa-2x mt-2 <?= $task->isDone == 1 ? "nav__icon" : ""?> pl-1"></i>
           {{ $task->name }}
        </button>
       </span>
      {{-- </a> --}}
      </a>
       <span class="ml-6"> Date : {{ $task->created_at->format("d/m") }} </span>
    </div>
    @endif
    @endforeach
  </div>
  <!-- Tasks -->
</div>

<!-- Navigation bar  -->
<div class="flex sm:hidden">
  <nav class="nav">
    @foreach($folders as $folder)
    <a href="/tasks/{{ strtolower($folder->name) }}/{{$folder->id}}" id="listInfo" data-list-id="{{$listId}}" class="nav__link">
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
      <span class="nav__text">
        {{ $folder->name }}
      </span>
    </a>
    @endforeach
  </nav>
  <!-- Navigation bar  -->
</div>
{{-- @endsection --}}