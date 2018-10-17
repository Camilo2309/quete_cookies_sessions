<?php
session_start();

if (!isset($_SESSION['pseudo'])) {
    header('location: login.php');
}

if (isset($_POST['delete'])) {
    // supprime moi la KEY [$_POST['delete']] du tableau ($_SESSION["cart"]
    unset($_SESSION["cart"][$_POST['delete']]);
}

?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">

        <?php
        foreach ($_SESSION['cart'] as $key => $cart){
          ?>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?php echo $cart['add_to_cart']; ?>.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?php echo $cart['titre']; ?> </h3>
                        <p>Cooked by Penny !</p>

                        <form role="form" action="" method="POST">
                            <input type="hidden" name="delete" value="<?php echo $key; ?>">
                                <button type="submit" class="btn btn-danger"><I><B>Supreme</B></I>
                        </form>

                    </figcaption>
                </figure>
            </div>

        <?php
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
