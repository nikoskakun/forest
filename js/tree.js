$(document).ready(function(){
    addTree();
    function addTree(){
            $.ajax({
            type:"POST",
            url:"tree.php",
            dataType:"JSON",
            success: function(data){
                var d = "<tr><th>id</th><th>Наименование</th><th colspan='2'>Действия</th></tr>";
                $.each(data,function(i){
                   d+="<tr><td>"+data[i].id+"</td><td>"+data[i].tree_name+"</td>"+
                   "<td><a href='' class='upd' data-action='"+data[i].id+"'>обновить</a></td>"+
                   "<td><a href='' class='del' data-action='"+data[i].id+"'>удалить</a></td></tr>"
                });
                $("#tree__object").html(d);
                $("#tree__item").val(" ");
            }
        });
    }
    
    $(document).on('click','a.del',function(e){
        e.preventDefault();
        var id = $(this).data("action");
        var action = 'del';
        $.ajax({
            type:"POST",
            url:"tree.php",
            data:{action:action,id:id},
            success:function(data){
                addTree();
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
                $.ajax({
                    type:"POST",
                    url:"tree.php",
                    data:{action:action,id:id,name:target},
                    success:function(data){
                        addTree();
                    }
                });
               $("#overlay,.app__object__form").fadeOut();
          });
    });
    
    $(".ins").click(function(){
        var tree = $("#tree__item").val();
        var action = 'ins';
        if(tree != ""){
            $.ajax({
                type:"POST",
                url:"tree.php",
                data:{action:action,tree:tree},
                success:function(data){
                    addTree();
                }
            });
        }
    });
    
    $("#overlay").click(function(){
        $("#overlay,.app__object__form").fadeOut();
    });
});