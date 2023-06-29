<?php
require("./funcs/pageBase.php");
require("./funcs/user.php");
require("./funcs/session.php");
require("./funcs/alert.php");
require("./funcs/DBinteraction.php");

$query = "SELECT * FROM `products` LIMIT 5";
$slides = selectFrom($query, "ALL");
?>

<div class="slider">
    <div class="slider-line">
        <?php
        foreach ($slides as $slide) {
        ?>
            <a href="product.php?id=<?= $slide['id'] ?>" class="block"><img src="./img/products/<?= $slide['image'] ?>" alt="<?= $slide['name'] ?>"></a>
        <?php } ?>
    </div>
</div>
<div class="btns wcenter flex">
    <button class="slider-prev accent-to-black">Prev</button>
    <button class="slider-next accent-to-black">Next</button>
</div>
<script src="./js/slider.js"></script>