<?php session_start(); ?>

    <div id="cart">
        <?php 
            $ok = 1;
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $value) {
                    if (isset($value)) {
                        $ok = 2;
                        return $result = $ok * $_REQUEST['price'];
                    }
                }
            }

            if ($ok != 2) {
                echo '<p>ban khong co mon hang nao trong gio</p>';
            } else {
                $items = $_SESSION['cart'];
                echo '<p>ban dang co <a href="Cart.php">' .count($items). 'mon hang trong gio hang</p>';
            }
        ?>
    </div>

