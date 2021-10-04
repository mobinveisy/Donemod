$(document).ready(function () {
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $("#addTaskForm").submit(function(e){
      e.preventDefault();

      var taskName = $("#addt").val();
      var userId = $("#addt").attr("data-user-id");
      var listId = $("#listInfo").attr("data-list-id");

      $.ajax({
        method:"POST",
        url:"/task",
        data:{
          taskName: taskName,
          userId: userId,
          listId: listId
        },
      }).done(function(name){
        location.reload();
      });
    })

/* <div class="flex flex-col m-4 main-bg" id="tasks">
      <p class=""> <i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon pl-5" aria-hidden="true"></i> 
        <a href="/tasks/{{ $listName }}/{{ $listId }}/{{ $task->id }}"> {{ $task->name }} </a>
        <button class="deleteTaskBtn" data-task-id="{{ $taskId }}">
          <i class="fa fa-trash"></i>
        </button>
      </p>
      <p class="border-black pl-10 ml-5"> {{ $listName }} <span> {{ $task->created_at }} </span> </p>
    </div> */


    // $(".addTaskBtn").click(function() {
    //     var taskName = $("#addt").val();
    //     var userId = $("#addt").attr("data-user-id");
    //     var listId = $("#listInfo").attr("data-list-id");
    //   $.ajax({
    //   url:"/task",
    //   method:"post",
    //   data:{
    //     action:"addTask",
    //     taskName: taskName,
    //     userId: userId,
    //     listId: listId
    //   },
    //   success: function(message){
    //     $('<div class="flex flex-col m-4 main-bg"><p class=""> <i class="fa fa-check-circle fa-2x mr-2 mt-2 nav__icon pl-5" aria-hidden="true"></i>' + taskName + "</p></div>")
    //     .appendTo("#tasks");
    //   },
    // })
    // })
  })
  // window.location.href = "/some";