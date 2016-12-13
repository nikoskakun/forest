
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
            for(var i = 0; i <= data.length-1;i++){
               forest += "<option value='"+ data[i].id +"'>"+ data[i].forest_name +"</option>";
               forest1 += "<a href='' data-select='" + data[i].id + "' class='btn'>" + data[i].forest_name + "</a>";
               }    

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
            for(var i = 0; i <= data.length-1;i++){
               tree += "<option value='"+ data[i].id +"'>"+ data[i].tree_name +"</option>";
               }    

            $("#tree").html(tree);
        }
     });
    
    $(".toggle__button").click(function(e){
        e.preventDefault();
       $("#add__object").slideToggle(300); 
    });
    
    $(".add__inner__item").click(function(){
        var action;
        var forest = $("#forest1").val();
        var tree = $("#tree1").val();
        var d = $(this).data("f");
        switch(d){
            case 1:
                if(forest != ''){
                action = "addForest";
                $.ajax({
                    type:"POST",
                    url:"action.php",
                    data:{forest:forest,action:action}
                });
                }
            break;
                
            case 2:
                if(tree != ''){
                action = "addTree";
                $.ajax({
                    type:"POST",
                    url:"action.php",
                    data:{tree:tree,action:action}
                });
            }
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
    })    
});


