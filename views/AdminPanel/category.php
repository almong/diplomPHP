<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <?php if ($action == 'showAll') :?>
            <th scope="col">Вопросов</th>
            <th scope="col">Опубликованно</th>
            <th scope="col">Без ответа</th>
        <?php endif; ?>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php
        include $action . '/' . $nameClass. '.php';
    ?>
    </tbody>
</table>
<?php
if ($action == 'showAll') {?>
    <a href="/Category/add" class="btn btn-primary">Добавить</a>
<?php } ?>