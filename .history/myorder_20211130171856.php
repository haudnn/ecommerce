<?php
include('./config/db.php'); 
$id = $_SESSION["login"][0];
$order  = mysqli_query($conn,"SELECT * FROM purchase WHERE ORDER BY $id");
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
            <div class="myorder-container">
                <p class="myorder-heading">My Orders</p>
                <table class="table-order"> 
                    <tr>
                        <th class="table-order-id">Order ID</th>
                        <th class="table-order-items">Num of Items</th>
                        <th class="table-order-amount">Amount</th>
                        <th class="table-order-status">Status</th>
                        <th class="table-order-action">Actions</th>
                    </tr>
                    <tr>
                        <td class="table-order-id" >1</td>
                        <td class="table-order-items">2</td>
                        <td class="table-order-amount">$675.12</td>
                        <td class="table-order-status process">Processing</td>
                        <td class="table-order-action">
                            <div>
                                <i class="fas fa-eye"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-order-id">Order ID</th>
                        <th class="table-order-items">Num of Items</th>
                        <th class="table-order-amount">Amount</th>
                        <th class="table-order-status">Status</th>
                        <th class="table-order-action">Actions</th>
                    </tr>
                </table>
            </div>
        <?php include('includes/footer.php'); ?> 
    </div> 
    <script src="assets/js/emtycart.js"></script>
    <script src="assets/js/cart.js"></script>  
</body>
</html>