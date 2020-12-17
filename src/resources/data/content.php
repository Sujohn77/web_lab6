<?php $pdo->query("SET CHARACTER SET utf8"); ?>
...
<div id="menu">
 <?php
 $query = 'SELECT * from articles FROM page';
 $q_res = $pdo->query($query);
 if ($q_res)
 foreach ($q_res as $row_menu) { ?>
 <a href="index.php?page=<?php echo
$row_menu["id"]; ?>">
 <?php echo $row_menu["menu_item_name"]; ?> </a>
 <?php } ?>
</div>