
$(document).ready(function(){
   $.ajax({
        type: "POST",
        url: "action.php",
        success:function(data){
            $(".info__inner").html(data);
        }
     });
    
    $.ajax({
        type: "POST",
        url: "forest.php",
        dataType: "JSON",
        success:function(data){
            var forest = '';
            var forest1 = '';
            $.each(data,function(i){
               forest += "<option value='"+ data[i].id +"'>"+ data[i].forest_name +"</option>";
               forest1 += "<a href='' data-select='" + data[i].id + "' class='btn'>" + data[i].forest_name + "</a>";
               }    
            );
            
            $("#forest").html(forest);
            $(".sidebar__menu").html(forest1);
        }
     });
    
    $.ajax({
        type: "POST",
        url: "tree.php",
        dataType: "JSON",
        success:function(data){
            var tree = '';
            $.each(data,function(i){
               tree += "<option value='"+ data[i].id +"'>"+ data[i].tree_name +"</option>";
               });

            $("#tree").html(tree);
        }
     });
    

   $("#plant").click(function(){
       var forest = $("#forest").val();
       var tree = $("#tree").val();
       var action = "add";
       $.ajax({
        type: "POST",
        url: "action.php",
        data: {forest:forest,tree:tree,action:action},
        success:function(){
                $.ajax({
                    type: "POST",
                    url: "action.php",
                    success:function(data){
                        $(".info__inner").html(data);
                    }
                 }); 
            }
        });
    })
   
   $(document).on('click','a.del',function(e){
       e.preventDefault();
       var action = "del";
       var id = $(this).data('num');
       $.ajax({
        type: "POST",
        url: "action.php",
        data: {id:id,action:action},
        success:function(){
                $.ajax({
                    type: "POST",
                    url: "action.php",
                    success:function(data){
                        $(".info__inner").html(data);
                    }
                 }); 
            }
        });
    });
    
    $(document).on('click','.btn',function(e){
       e.preventDefault();
       var text = $(this).text();
       var title = $("#title").text(text);
       var id = $(this).data('select');
       var action = "select";
       $.ajax({
        type: "POST",
        url: "action.php",
        data: {id:id,action:action},
        success:function(data){
                $(".info__inner").html(data);
            }
        });
    });
    
    $(".app__object__action").click(function(e){
       e.preventDefault();
       var d1 = $(this).data("act");
       console.log(d1);
       if(d1 % 3 != 0){
           $("#overlay").fadeToggle('fast');
           $("#overlay").click(function(){
           $(this).fadeOut('fast');
          });
       }
       
    });
});


