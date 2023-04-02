<?php $render('header'); ?>

<a href="<?php echo $base; ?>/novo">ADICIONAR NOVO USUARIO</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario){ ?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="<?=$base;?>/usuario/<?=$usuario['id']?>/editar">[ editar ]</a>
                <a href="<?=$base;?>/usuario/<?=$usuario['id']?>/excluir" onclick="return confirm('Tem certeza que deseja exlcuir ?')">[ excluir]</a>
            </td>
        </tr>
        <?php }?>

</table>

<?php $render('footer'); ?>