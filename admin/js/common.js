function fillTableFotografos(txt = ''){
    $.ajax({
        url:"../AJAX/AJAXFillCriador.php",
        type:"post",
        data:{
            txt:txt
        },
        success:function (result){
            $('#tableContent').html(result);
        }
    });
}