function gosto(id) {
    $.ajax({
        url:"AJAX/AJAXPutLikeFoto.php",
        type:"post",
        data:{
            idFoto:id
        },
        success:function (result){
            $.ajax({
                url:"AJAX/AJAXGetGostoFoto.php",
                type:"post",
                data:{
                    idFoto:id
                },
                success:function (result){
                    $('#gosto').html(result);

                }
            });

        }
    });
    /*
    document.getElementById("gosto").innerHTML = "<i class=\"fas fa-heart\" style='color: red'></i>";
    n += 1;
    document.getElementById("gostar").innerHTML = n;
    */

}
function favorito(id) {
    $.ajax({
        url:"AJAX/AJAXPutFavoritoFoto.php",
        type:"post",
        data:{
            idFotografo:id
        },
        success:function (result){
            $.ajax({
                url:"AJAX/AJAXGetFavoritoFoto.php",
                type:"post",
                data:{
                    idFotografo:id
                },
                success:function (result){
                    $('#favorito').html(result);

                }
            });

        }
    });
}
function comentario(id) {
    $.ajax({
        url:"AJAX/AJAXPutComentarioFoto.php",
        type:"post",
        data:{
            idFoto:id
        },
        success:function (result){
            ;

        }
    });


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
    });

}


function fillTableFotografos(txt = '') {
    $.ajax({
        url: "AJAX/AJAXFillFotografo.php",
       type: "post",
       data: {
            txt: txt
          },
       success: function (result) {
            //        $('#tableContent').html(result);
         }
      });

}


