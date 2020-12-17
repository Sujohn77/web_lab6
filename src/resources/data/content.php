<?php $pdo->query("SET CHARACTER SET utf8"); ?>
...
<div id="menu">
 <?php
    // Следующий запрос приводит к ошибке уровня E_WARNING вместо исключения (когда таблица не существует)
    $q_res = $dbh->query("SELECT * from articles FROM page");
    if ($q_res)
        foreach ($q_res as $row_menu) { ?>{
            <a href="index.php?page=<?php echo$row_menu["id"]; ?>">
        }
    <?php echo $row_menu["menu_item_name"]; ?> </a>
    <?php } ?>
</div>