function submitUpdate(){
    var name = $('#nombreHerramienta').val();
    var email = $('#modeloHerramienta').val();
    var descrition = $('#descripcionHerramienta').val();

    if(name.trim() == '' ){
        alert('Por favor inserte un nombre');
        $('#nombreHerramienta').focus();
        return false;

    }else if(email.trim() == '' ){

        alert('Por favor inserte el modelo');
        $('#modeloHerramienta').focus();
        return false;
    
    }else if(descrition.trim() == '' ){
        alert('Por favor agrague una descripción');
        $('#descripcionHerramienta').focus();
        return false;

    }else{
        $.ajax({
            type:'POST',
            url:'submit_form.php',
            data:'contactFrmSubmit=1&name='+name+'&email='+email+'&descrition='+descrition,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                if(msg == 'ok'){
                    $('#nombreHerramienta').val('');
                    $('#modeloHerramienta').val('');
                    $('#descripcionHerramienta').val('');
                    $('.statusMsg').html('<span style="color:green;">Thanks for contacting us, well get back to you soon.</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}


$("#btnCerrar").on("click",function(event){ 
     $("#formUpdate").trigger("reset"); 
});