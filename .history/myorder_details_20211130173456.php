<?php
include('./config/db.php'); 
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
            <div class="myorder-container">
                <p class="myorder-heading">Order</p>
                <div class="order-shipping-info">
                    <p class="details-order-heading">Shipping info</p>
                    <ul class="order-info-item">
                        <li class="order-info-list">
                            <p>First Name</p>
                            <span>Luan</span>
                        </li>
                        <li class="order-info-list">
                            <p>Last Name</p>
                            <span>Nguyen</span>
                        </li>
                        <li class="order-info-list">
                            <p>Address</p>
                            <span>Da Nang</span>
                        </li>
                        <li class="order-info-list">
                            <p>Phone</p>
                            <span>0362821110</span>
                        </li>
                        <li class="order-info-list"></li>
                        <li class="order-info-list"></li>
                    </ul>
                </div>
            </div>
        <?php include('includes/footer.php'); ?> 
    </div> 
    <script src="assets/js/emtycart.js"></script>
    <script src="assets/js/cart.js"></script>  
</body>
</html>