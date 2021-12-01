<?php
include('./config/db.php');
if  (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM  purchase  WHERE purchase_user_id =$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $fname = $row['brand_name'];
      $lname = $row['brand_name'];
      $address = $row['brand_name'];
      $phone = $row['brand_name'];
      $email = $row['brand_name'];
      $total = $row['brand_name'];

      $old_image = $row['brand_img'];
    }
  } 
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">   
        <?php include('includes/nav.php'); ?>
            <div class="myorder-container">
                <p class="myorder-heading">Order #<?php echo $id; ?></p>
                <div class="order-shipping-info">
                    <p class="details-order-heading">Shipping info</p>
                    <ul class="order-info-item">
                        <li class="order-info-list">
                            <p>First Name:</p>
                            <span>Luan</span>
                        </li>
                        <li class="order-info-list">
                            <p>Last Name:</p>
                            <span>Nguyen</span>
                        </li>
                        <li class="order-info-list">
                            <p>Address:</p>
                            <span>Da Nang</span>
                        </li>
                        <li class="order-info-list">
                            <p>Phone:</p>
                            <span>0362821110</span>
                        </li>
                        <li class="order-info-list">
                            <p>Email:</p>
                            <span>ahu@gmail.com</span>
                        </li>
                        <li class="order-info-list">
                            <p>Total:</p>
                            <span>$500</span>
                        </li>
                    </ul>
                </div>
                <div class="order-shipping-info">
                    <p class="details-order-heading">Payment</p>
                    <span class="order-shipping-info-status pay">NOT PAID</span>
                </div>
                <div class="order-shipping-info">
                    <p class="details-order-heading">Order Status</p>
                    <span class="order-shipping-info-status">Processing</span>
                </div>
                <div class="order-shipping-info">
                    <p class="details-order-heading">Order Items</p>
                    <ul class="order-shipping-info-product-item">
                        <li class="order-shipping-info-product-list">
                            <div class="order-shipping-info-product-img">
                                <img src="./assets/img/cate1.png" alt="" width="100px" height="100px" style="object-fit: cover;">
                            </div>
                        </li>
                        <li class="order-shipping-info-product-list">
                            <p class="order-shipping-info-product-name">Coby Coffee Table</p>
                        </li>
                        <li class="order-shipping-info-product-list">
                            <p class="order-shipping-info-product-total">$30</p>
                        </li>
                        <li class="order-shipping-info-product-list">
                        <p class="order-shipping-info-product-total">1 Piece(s)</p>
                        </li>
                    </ul>
                </div>
            </div>
        <?php include('includes/footer.php'); ?> 
    </div> 
    <script src="assets/js/emtycart.js"></script>
    <script src="assets/js/cart.js"></script>  
</body>
</html>