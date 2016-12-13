
$(document).ready(function(){
   $.ajax({
        type: "POST",
        url: "forest.php",
        success:function(data){
            $(".info__inner").html(data);
        }
     }); 
    
   $("#plant").click(function(){
       var forest = $("#forest").val();
       var tree = $("#tree").val();
       var action = "add";
       $.ajax({
        type: "POST",
        url: "forest.php",
        data: {forest:forest,tree:tree,action:action},
        success:function(){
                $.ajax({
                    type: "POST",
                    url: "forest.php",
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
       console.log(id);
       $.ajax({
        type: "POST",
        url: "forest.php",
        data: {id:id,action:action},
        success:function(){
                $.ajax({
                    type: "POST",
                    url: "forest.php",
                    success:function(data){
                        $(".info__inner").html(data);
                    }
                 }); 
            }
        });
    });
    
    $(".forest_select").click(function(e){
       e.preventDefault();
       var text = $(this).text();
       var title = $("#title").text(text);
       var id = $(this).data('select');
       var action = "select";
       console.log(text);
       $.ajax({
        type: "POST",
        url: "forest.php",
        data: {id:id,action:action},
        success:function(data){
                $(".info__inner").html(data);
            }
        });
    })    
});


