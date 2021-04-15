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
            $('#tableContent').html(result);
        }
    })
}


