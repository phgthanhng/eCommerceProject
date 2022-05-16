<?php require APPROOT . '/views/includes/header.php';  ?>

<div class="container">
        <h1 style="margin-bottom: 25px;margin-top: 50px;text-align: center;">Past orders</h1>
        <div class="table-responsive">
                <?php
                    if (!empty($data["orders"])) {
                        echo '<table class="table">
                        <thead>
                            <tr>
                            <th>Order placed</th>
                            <th>Total Price</th>
                            <th>Order Status</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>';
                      foreach($data["orders"] as $order) {
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
                  echo " </tbody>
                          </table>";
        }
        else {
            echo '<br>';
            echo "<h4 style='text-align: center;'> Nothing to show here</h4>";
        }
        ?>
  </div>
</div>
<?php require APPROOT . '/views/includes/footer.php';  ?>
