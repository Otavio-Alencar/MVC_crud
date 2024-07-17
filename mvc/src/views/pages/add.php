<?php $render('header'); ?>

<!-- renderiza um item de partials -->

<h2>Adicionar Novo Usuario</h2>
<form method="POST" action="<?=$base;?>/novo">
    <label for="name">
        Nome: <br>
        <input type="text" name="name">
    </label>
    <br><br>
    <label for="email">
        Email: <br>
        <input type="email" name="email">

    </label><br><br>

    <input type="submit" value="Adicionar">

</form>
<?php $render('footer');?>