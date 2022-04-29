<?php require APPROOT . '/views/includes/header.php';  ?>

    <div class="text-end" style="margin: 10px;margin-top: 30px;"><a href="<?php echo URLROOT;?>/User/editCredentials/<?php echo $_SESSION['user_id'];?>"
            style="color: #000000;margin-right: 20px;">Change your password</a></div>
    <div class="text-end" style="margin: 10px;margin-top: 10px;"><a href="<?php echo URLROOT;?>/User/editProfile/<?php echo $_SESSION['user_id'];?>"
            style="color: #000000;margin-right: 20px;">Edit profile</a></div>
    <div class="container">
        <h1 style="margin-bottom: 25px;margin-top: 50px;text-align: center;">Processing orders</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        
                    <th>Order placed</th>
                    <th>Total Price</th>
                    <th>Order Status</th>
                    <th colspan="3" style="text-align: center;">Action</th>


                    </tr>
                </thead>
                <tbody>
                <?php
                    if (!empty($data["processingOrders"])) {
                      foreach($data["processingOrders"] as $order) {
                        echo "<tr>";
                        echo "<td>
                       $order->orderdate
                        </td>";
                        echo "<td>
                        $order->totalprice
                        </td>";
                        echo "<td>
                        $order->orderstatus
                        </td>";

                        echo "<td>
                        <a href='/eCommerceProject/BookStore/Order/orderDetails/$order->orderID'>Details</a>
                        </td>";
                        echo "<td>
                        <a href='/eCommerceProject/BookStore/Order/cancel/$order->orderID'>Cancel</a>
                        </td>";
                        echo "</tr>";
                      } 
                    }
                  ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="container">
        <h1 style="margin-bottom: 25px;margin-top: 50px;text-align: center;">Past orders</h1>
        <div class="table-responsive">
        <table class="table">
                <thead>
                    <tr>
                        
                    <th>Order placed</th>
                    <th>Total Price</th>
                    <th>Order Status</th>
                    <th colspan="3" style="text-align: center;">Action</th>


                    </tr>
                </thead>
                <tbody>
                <?php
                    if (!empty($data["completedOrders"])) {
                      foreach($data["completedOrders"] as $order) {
                        echo "<tr>";
                        echo "<td>
                       $order->orderdate
                        </td>";
                        echo "<td>
                        $order->totalprice
                        </td>";
                        echo "<td>
                        $order->orderstatus
                        </td>";

                        echo "<td>
                        <a href='/eCommerceProject/BookStore/Order/orderDetails/$order->orderID'>Details</a>
                        </td>";
                        echo "<td>
                        <a href='/eCommerceProject/BookStore/Order/reviewOrder/$order->orderID'>Review Order</a>
                        </td>";
                        echo "</tr>";
                      } 
                    }
                  ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="container">
        <h1 style="margin-bottom: 25px;margin-top: 50px;text-align: center;">Reviews</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 1</th>
                        <th>Column 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                    </tr>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                    </tr>
                    <tr>
                        <td>Cell 3</td>
                        <td>Cell 3</td>
                        <td>Cell 4</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php require APPROOT . '/views/includes/footer.php';  ?>
