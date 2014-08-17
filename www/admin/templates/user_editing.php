<?php session_start(); $title = "Edit user"; ?>

<form action="/admin/index.php?page=editing" method="post">
    <?php $k=0;?>
    <?php foreach ($users as $user):?>
        <?php $k++;?>
        <br>
        <input type="submit" name="user_<?php echo $k; ?>" value="Редактировать">
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
        <?php if ($_POST['user_'.$k] == "Редактировать"):?>
            <?php $user_id =  $user['id'];?>
        <?php endif?>
    <?php endforeach?>
    <br><br>
    <div style="position:absolute; top:10px; right:10px; width:80px; text-align:center;">
        <button type="button">
            <a href="/admin/index.php?page=user_change">Назад</a>
        </button>
    </div>
</form>
