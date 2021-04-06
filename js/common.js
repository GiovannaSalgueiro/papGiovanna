function gosto() {
    document.getElementById("gosto").innerHTML = "<i class=\"fas fa-heart\" style='color: red'></i>";
    n += 1;
    document.getElementById("gostar").innerHTML = n;
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