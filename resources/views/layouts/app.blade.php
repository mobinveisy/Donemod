<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset("img/favicon.png")}}" type="image/x-icon">
    <link href="{{ asset("css/TailwindCss/app.css") }}" rel="stylesheet">
    <link href="{{ asset("css/style.css") }}" rel="stylesheet" >
    <link href="{{ asset("css/fontawesome/all.css") }}" rel="stylesheet" >
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <title> Donemod </title>
</head>
<body>
    {{-- <main> --}}
        @yield('login')
        @yield('content')
    <script src="{{ asset("js/FontAwesome/all.min.js") }}"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="{{ asset("js/scripts.js") }}"></script>
    <script src="{{ asset("js/jquery/jqueryHandler.js") }}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    <script src='https://cdn.rawgit.com/egorshar/jquery-ui-sortable-animation/master/jquery.ui.sortable-animation.js'></script>
      <script src="{{asset("js/scripts.js")}}"></script>
    <script>
        $(document).ready(function () {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $(".isDone").click(function(){
          var taskId = $(this).attr("data-task-id");
          $.ajax({
            method:"PUT",
            url:"/task/" + taskId,
            data:{},
          }).done(function(name){
          });
        })

        // $(".lists").click(function(){
        //   var listId = $(this).attr("data-list-id");
        //   var listName = $(this).attr("data-list-name");
        //   var url = "/tasks/" + listName + "/" + listId;
        // //   var tasks = "@yield('tasks')"
        //   $.ajax({
        //     method:"GET",
        //     url:url,
        //     data:{},
        //   }).done(function(name){
        //     // location.reload();
        //     // window.history.pushState("", "Title", url);           
        //   });
        // })

        // $(".tasks").click(function(){
        //   var listId = $(this).attr("data-list-id");
        //   var listName = $(this).attr("data-list-name");
        //   var taskId = $(this).attr("data-task-id");
        //   var url = "/tasks/" + listName + "/" + listId + "/" + taskId;
        //   $.ajax({
        //     method:"GET",
        //     url:url,
        //     data:{},
        //   }).done(function(name){
        //     // window.history.pushState("", "Title", url);
        //   });
        // })
      })
        </script>
</body>
</html>