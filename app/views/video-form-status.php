<?php 

function textContentValidate()
{   
    
    if(!($_GET['sucesso'] == '1')){
        return 'A url inserida não é uma URL de vídeo válida';
    }
    return "Vídeo inserido com sucesso";
}

function classValidate()
{   
    if(!($_GET['sucesso'] == '1')){
        return "form-failed";
    }
    return "form-sucess";
}

?>
<div class="<?=classValidate(); ?>">
    <p class="form-status"> <?= textContentValidate(); ?> </p>
</div>