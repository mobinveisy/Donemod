@extends("layouts.app")
<?php //$list = explode("/", Request::getpathInfo()); $listId = $list[3] ?? null; $listName = $list[2] ?? null; 
  //$taskId = $list[4] ?? null;
  // $listId = $_GET["listId"] ?? null
?>

@foreach ($tasks as $task)
    @if ($task->folderId == $_GET["listId"])
    <li class="checked">
      <span class="priority-indicator"></span>
      <label for="1">
        <button class="isDone" data-task-id="{{$task->id}}">
          <span  class="fa <?= $task->isDone == 1 ? "fa-check-circle" : "fa-circle"?> fa-2x mt-2 <?= $task->isDone == 1 ? "nav__icon" : ""?>"></span>
          {{$task->name}}
          
        </button>
      </label>
    </li>
       <span class="ml-6"> Date : {{ $task->created_at->format("d/m") ?? null }} </span>
       @endif
@endforeach