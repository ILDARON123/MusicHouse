<?php
require("user.php");
require("../admin/security.php");
require("DBinteraction.php");
if (isset($_GET['reason'])) {
    if (isset($_SESSION['maydel'])) {
        $query = "INSERT INTO `cancelled_orders` (`id`, `reason`, `order`) VALUES (NULL,'" . $_GET['reason'] . "','" . $_SESSION['mayDel'] . "')";
        insertOrUpdate($query);

        $query = "UPDATE `orders` SET `status`='3' WHERE `id` = " . $_SESSION['mayDel'];
        insertOrUpdate($query);

        $_SESSION['result'] = "Отказано.";
    } else {
        $_SESSION['result'] = "Нечему отказывать.";
    }
} else {
    $_SESSION['result'] = "Без причин.";
}
echo $_SESSION['result'];
// header("location: /admin.php");
