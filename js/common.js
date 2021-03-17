function gosto() {
    document.getElementById("gosto").innerHTML = "<i class=\"fas fa-heart\" style='color: red'></i>";
    document.getElementById("gostar").innerHTML = "23 gostos";
}

function mostraFoto(id){

    $.ajax({
        url:"AJAX/AJAXGetFoto.php",
        type:"post",
        data:{
            idFoto:id
        },
        success:function (result){
            $('#top1').html(result);
            $('#top1').modal('toggle');
        }
    })
}