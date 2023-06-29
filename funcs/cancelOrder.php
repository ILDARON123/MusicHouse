<?php
require("../admin/security.php");
require("setProductDB.php");
if (isset($_GET['reason']) && isset($_SESSION['maydel'])) {
$query = "INSERT INTO `cancelled_orders` (`id`, `reason`, `orders`) VALUES (NULL,'".$_GET['reason']."','".$_SESSION['mayDel']."')";
$_SESSION['result'] = "Отказано.";
} else {
    $_SESSION['result'] = "Недостаточно информации.";
}
header("location: /admin.php");