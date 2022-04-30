<?php require APPROOT . '/views/includes/header.php';  ?>

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
            echo "</tr>";
          }
        }
        ?>
      </tbody>
    </table>
  </div>
<?php require APPROOT . '/views/includes/footer.php';  ?>
