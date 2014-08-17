<?php session_start(); $title = "Delete user"; ?>

<form action="/admin/index.php?page=user_delete" method="post">
    <?php $s=0;$k=0;?>
    <?php foreach ($users as $user):?>
        <?php $k++;?>
        <br>
        <input type="submit" name="user_<?php echo $k; ?>" value="Удалить">
        <table border="1">
            <tr>
                <th>Имя</th>
                <th>Логин</th>
                <th>Пароль</th>
                <th>E-mail</th>
                <th>Пол</th>
                <th>Возраст</th>
                <th>О пользователе</th>
            </tr>
            <tr>
                <td><?php echo $user['name'];?></td>
                <td><?php echo $user['login'];?></td>
                <td><?php echo $user['password'];?></td>
                <td><?php echo $user['email'];?></td>
                <td><?php echo $user['sex'];?></td>
                <td><?php echo $user['age'];?></td>
                <td><?php echo $user['about'];?></td>
            </tr>
        </table>
        <?php $vol_u = $user['id'];?>
        <?php if ($_POST['user_'.$k] == "Удалить"):?>
            <?php $del_user = delete_user($vol_u);?>
            <b>. . .Удалено</b>
        <?php endif?>
    <?php endforeach?>
    <br><br>
    <div style="position:absolute; top:10px; right:10px; width:80px; text-align:center;">
        <button type="button">
            <a href="/admin/index.php?page=user_change">Назад</a>
        </button>
    </div>
</form>
