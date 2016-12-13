$(document).ready(function(){
    addForest();
    function addForest(){
        $.ajax({
            type:"POST",
            url:"forest.php",
            dataType:"JSON",
            success: function(data){
                var d = "<tr><th>id</th><th>Наименование</th><th colspan='2'>Действия</th></tr>";
                $.each(data,function(i){
                   d+="<tr><td>"+data[i].id+"</td><td>"+data[i].forest_name+"</td>"+
                   "<td><a href='' class='upd' data-action='"+data[i].id+"'>обновить</a></td>"+
                   "<td><a href='' class='del' data-action='"+data[i].id+"'>удалить</a></td></tr>";
                });
                $("#forest__object").html(d);
                $("#forest__item").val(" ");
            }
        });
    }
    
    $(document).on('click','a.del',function(e){
        e.preventDefault();
        var id = $(this).data("action");
        var action = 'del';
        $.ajax({
            type:"POST",
            url:"forest.php",
            data:{action:action,id:id},
            success:function(data){
                addForest();
            }
        });
    });
    
    $(document).on('click','a.upd',function(e){
        e.preventDefault();
        $("#overlay,.app__object__form").fadeIn();
        var id = $(this).data("action");
        var action = 'upd';
        $(".btn_action").click(function(){
                var target = $("#target__val").val();
                console.log(target);
                $.ajax({
                    type:"POST",
                    url:"forest.php",
                    data:{action:action,id:id,name:target},
                    success:function(data){
                        addForest();
                    }
                });
               $("#overlay,.app__object__form").fadeOut();
          });
    });
    
    $(".ins").click(function(){
        var forest = $("#forest__item").val();
        var action = 'ins';
        if(forest != ""){
            $.ajax({
                type:"POST",
                url:"forest.php",
                data:{action:action,forest:forest},
                success:function(data){
                    addForest();  
                }
            });  
        }
    });
    
    $("#overlay").click(function(){
        $("#overlay,.app__object__form").fadeOut();
    });
});