<?php $render('header'); ?>

<!-- renderiza um item de partials -->

<a href="<?=$base;?>/novo">Novo Usuario</a>
Opa, <?=$nome;?>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario):?>
        <tr>
            <td><?=$usuario['id']?></td>
            <td><?=$usuario['nome']?></td>
            <td><?=$usuario['email']?></td>
            <td>
                <a href="<?=$base?>/usuarios/<?=$usuario['id']?>/editar">[ editar ]</a>
                <a href="<?=$base?>/usuarios/<?=$usuario['id']?>/editar" onclick="return confirm('tem certeza que deseja excluir?')">[ excluir ]</a>
            </td>
        </tr>
    <?php endforeach?>
</table>

<?php $render('footer');?>