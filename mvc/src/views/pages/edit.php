<?php $render('header'); ?>

<!-- renderiza um item de partials -->

<h2>Editar usuario</h2>
<form method="POST" action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
    <label for="name">
        Nome: <br>
        <input type="text" name="name" value="<?=$usuario['name'];?>">
    </label>
    <br><br>
    <label for="email">
        Email: <br>
        <input type="email" name="email" value="<?=$usuario['email'];?>>

    </label><br><br>

    <input type="submit" value="Salvar">

</form>
<?php $render('footer');?>