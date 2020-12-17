<?php
session_start();
$visit_count = 1;

if (isset($_SESSION["visit_count"])) {
    $visit_count = $_SESSION["visit_count"] + 1;
}

$_SESSION["visit_count"] = $visit_count;

print("Общее количество посещений : " . $visit_count);
echo "<br>";
print(" Меню было реализовано через динамический html" );
echo "<br>";
print(" (изменения данных на сайте без перезагрузки странички)," );
echo "<br>";
print(" поэтому тут фактически одна страничка,");
echo "<br>";
print("Хоть визуально их несколько.");
?>