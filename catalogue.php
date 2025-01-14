<?php
require("./funcs/pageBase.php");
require("./funcs/user.php");
require("./funcs/session.php");
require("./funcs/alert.php");
require("./funcs/DBinteraction.php");
?>
<div id="first-content-on-page" class="flex column g10 inner-shadow brad20 p20">
    <?php
    include("./funcs/filters.php");
    getFilters();
    ?>
    <div class="flex g10 brad20 wrap">
        <?php
        $query = "SELECT 
        products.id,
        products.name,
        products.cost,
        products.image,
        products.create_date,
        countries.name AS country,
        types.name AS `type`
      FROM products
      INNER JOIN countries ON products.country = countries.id
      INNER JOIN types ON products.type = types.id ";
        $filters = applyFilters();
        if (is_array($filters)) {
            foreach ($filters as $filter) {
                $query .= " " . $filter;
            }
        } else {
            $query .= "ORDER BY products.name ASC";
        }
        $products = selectFrom($query, "ALL");

        require("./funcs/productCard.php");
        foreach ($products as $product) {
            showCard($product);
        }
        ?>
    </div>
</div>