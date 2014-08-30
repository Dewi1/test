<?php session_start(); $title = "Edit user"; ?>

<form method="post" action="/admin/index.php?page=editing">
    <?php foreach ($users as $user):?>
        <br>
        <input type="submit" name="<?php echo $user['id'];?>" value="Редактировать">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Логин</th>
                <th>Пароль</th>
                <th>E-mail</th>
                <th>Пол</th>
                <th>Возраст</th>
                <th>О пользователе</th>
            </tr>
            <tr>
                <td><?php echo $user['id'];?></td>
                <td><?php echo $user['name'];?></td>
                <td><?php echo $user['login'];?></td>
                <td><?php echo $user['password'];?></td>
                <td><?php echo $user['email'];?></td>
                <td><?php echo $user['sex'];?></td>
                <td><?php echo $user['age'];?></td>
                <td><?php echo $user['about'];?></td>
            </tr>
        </table>
    <?php endforeach?>
    <br><br>
    <div style="position:absolute; top:10px; right:10px; width:80px; text-align:center;">
        <button type="button">
            <a href="/admin/index.php?page=user_change">Назад</a>
        </button>
    </div>
</form>
