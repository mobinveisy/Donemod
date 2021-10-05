// $(window).on('load', function(event) {
//     $('.preloader').delay(500).fadeOut(500);
// });  // preloader

// main 
var undo = false;
var list_item_to_undo;
var time_out;

$(document).ready(function(){ 

  $(".musicpopup a").on("click", function() {
    $(".overlay1").addClass("is-on");
  });
  
  $("#close").on("click", function() {
    $(".overlay1").removeClass("is-on");
  });
  
  /*DELETE*/
  $('body').on('click', '.fa-trash', function() {
    
    if($('.main ul li').hasClass("temp_deleted")){
      $('.main ul li.temp_deleted').remove();
    }
    
    list_item_to_undo = $(this).parent().parent();    
    var undo_time = 10000;
    
    list_item_to_undo.animate({
      height: "0px"
    }, 200, function() {
      $(this).addClass('temp_deleted').hide();
    });
    
    function_undo(list_item_to_undo, undo);     
   
    //undo
    $('.undo').addClass('active');
    
    clearTimeout(time_out);
    
    time_out = setTimeout(function() {
      $('.undo').removeClass('active');      
      if (undo === false){        
        $('.main ul li.temp_deleted').remove();
      }
    }, undo_time);
    
  });
  /*DELETE*/
  
  
  /*UNDO*/
  $('.undo div').click(function(){
    undo = true;
    function_undo(list_item_to_undo, undo);
    $(this).parent().removeClass('active');
  });
  
  
  /*EDIT*/
  $('body').on('click', '.fa-pencil', function() {
     var current = $(this).parent().parent().find('span').text();
     $(this).parent().parent().find('input[type=text]').val(current).show().select();
  });
  
  
  $('body').on('keypress', '.main ul li input[type=text]', function(e) {
      if (e.which == 13) {
        //hide undo
        $('.undo').removeClass('active');
        
        var newvalue = $(this).val();
        $(this).parent().parent().find('label span.item-name').text(newvalue);
        $(this).hide();
        return false;    //<---- Add this line
      } 
  });
  
  
  $(document).on('blur', 'input[type=text]', function() {   
    $(this).hide();
  });
  
  
  
  
  
  /*ADD NEW*/
  //  $('.add').click(function(){
  //   $(this).find('input[type=text]').val('Add new').show().select();
  // });
  
  
  $('body').on('keypress', '.add input[type=text]', function(e) {
    if (e.which == 13) {
      
      //hide undo
      $('.undo').removeClass('active');
      
      var newvalue = $(this).val();
      
      var clone = $(".main ul li:first").clone();
      clone.find('label span.item-name').text(newvalue);
      
      var random_num = Math.floor(Math.random() * 1000) + 1 
      var id = newvalue.replace(/\s/g,'');
      var ids = id + random_num;
 
      clone.find('input').attr({
          id:ids
      });      
     clone.find('label').attr('for', ids);
     clone.find("input[type=checkbox]").prop('checked', false);  
     clone.removeClass('priority priority1 priority2 checked');
     clone.show();
     clone.appendTo(".main ul");
      
      $( '.add' ).trigger( "click" );
      return false;    //<---- Add this line
    }
  });
  
  
  
  /*PRIORITY*/  
  $('body').on('click', '.main ul li .actions .prio-btn', function() {
    
    if($(this).parent().parent().hasClass("priority2")){
        
        $(this).parent().parent().addClass('reset').removeClass("priority priority1 priority2 ");
      
      return false;
    }

    if($(this).parent().parent().hasClass("priority1")){
        $(this).parent().parent().addClass("priority2");
    }
     
    $(this).parent().parent().addClass('priority priority1');
         
  });
   
  
  /*CLICK*/
  $('body').on('change', '.main ul li input[type=checkbox]', function() {
    if ($(this).prop('checked')) {
      $(this).parent().addClass('checked');
    }else{
      $(this).parent().removeClass('checked');
    }
    
  });
  
  
  /*SORTABLE*/
  $( function() {
    $( ".main ul" ).sortable({
      animation: 100,
      delay: 150, 
      cursor:'move',
      handle: ".dragger",
      tolerance: "pointer",
      axis:'y'
    });
    $( "#sortable" ).disableSelection();
  } );
  
  

  let tabsContainer = document.querySelector("#tabs");

  let tabTogglers = tabsContainer.querySelectorAll("a");
  // console.log(tabTogglers);
  
  // tabTogglers.forEach(function(toggler) {
  //   toggler.addEventListener("click", function(e) {
  //     e.preventDefault();
  
  //     let tabName = this.getAttribute("href");
  
  //     let tabContents = document.querySelector("#tab-contents");
  
  //     for (let i = 0; i < tabContents.children.length; i++) {
  
  //       tabTogglers[i].parentElement.classList.remove("border-blue-400", "border-b",  "-mb-px", "opacity-100");  tabContents.children[i].classList.remove("hidden");
  //       if ("#" + tabContents.children[i].id === tabName) {
  //         continue;
  //       }
  //       tabContents.children[i].classList.add("hidden");
  
  //     }
  //     e.target.parentElement.classList.add("border-blue-400", "border-b-4", "-mb-px", "opacity-100");
  //   });
  // });
  
  document.getElementById("default-tab").click();
  
const clickable = document.getElementById('clickable')
  const menu = document.getElementById('menu')
  const outClick = document.getElementById('out-click')
  
  clickable.addEventListener('contextmenu', e => {
    e.preventDefault()
  
    menu.style.top = `${e.clientY}px`
    menu.style.left = `${e.clientX}px`
    menu.classList.add('show')
  
    outClick.style.display = "block"
  })
  
  outClick.addEventListener('click', () => {
    menu.classList.remove('show')
    outClick.style.display = "none"
  })



  (function() {
    'use strict';
  
    function getDate() {
      var date = new Date();
      var weekday = date.getDay();
      var month = date.getMonth();
      var day = date.getDate();
      var year = date.getFullYear();
      var hour = date.getHours();
      var minutes = date.getMinutes();
      var seconds = date.getSeconds();
  
      if (hour < 10) hour = "0" + hour;
      if (minutes < 10) minutes = "0" + minutes;
      if (seconds < 10) seconds = "0" + seconds;
  
      var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
  
      var weekdayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
      
      var monthColors = ["#1E90FF", "#FF69B4", "#00FFFF", "#7CFC00", "#00CED1", "#FF1493", "#00008B", "#FF7F50", "#C71585", "#FF4500", "#FFD700", "#800000"]
  
      var ampm = " PM ";
  
      if (hour < 12) ampm = " AM ";
  
      if (hour > 12) hour -= 12;
  
      var showDate = weekdayNames[weekday] + ", " + monthNames[month] + " " + day + ", " + year;
  
      var showTime = hour + ":" + minutes + ":" + seconds + ampm;
      
      var color = monthColors[month];
  
      document.getElementById('date').innerHTML = showDate;
  
      document.getElementById('time').innerHTML = showTime;
      
      document.bgColor = color;
      
  
      requestAnimationFrame(getDate);
    }
  
    getDate();
  
  }());
  
});


function function_undo(list_item_to_undo, undo){  
  if(undo==true){
      list_item_to_undo.css('height', 'auto');
      list_item_to_undo.show();
      list_item_to_undo.removeClass('temp_deleted');
  }
}