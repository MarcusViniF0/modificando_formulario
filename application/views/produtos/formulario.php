<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?= base_url(uri:"css/bootstrap.css")?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video-Formulario</title>
</head>
<body>
    <div class="container">

        <?php if($this->session->flashdata("success")):?>
        <p class="alert alert-success"><?=$this->session->flashdata("success")?></p>
        <?php endif ?>

        <?php if($this->session->flashdata("danger")):?>
        <p class="alert alert-danger"><?=$this->session->flashdata("danger")?></p>
        <?php endif ?>
        
        <h1>Formulário</h1>

        <?php 
        echo form_open(action:"produtos/novo");

        echo form_label(label_text:"Nome", id:"nome");
        echo form_input(array(
            "name"=>"nome",
            "id"=>"nome",
            "class"=>"form-control",
            "maxlength"=>"255"
        ));

        echo form_label(label_text:"Preço", id:"preco");
        echo form_input(array(
            "name"=>"preco",
            "id"=>"preco",
            "class"=>"form-control",
            "maxlength"=>"255"
        ));

        echo form_label(label_text:"Descrição", id:"descricao");
        echo form_textarea(array(
            "name"=>"descricao",
            "id"=>"descricao",
            "class"=>"form-control",
            "maxlength"=>"255"
        ));

        echo form_button(array(
            "class"=>"btn btn-primary",
            "type"=>"submit",
            "content"=>"Cadastrar"
        ));

        echo form_close();
        ?>
            
</div>
</body>
</html>