
<?php require APPROOT . '/views/includes/header.php';  ?>

   
<div class="text-center d-lg-flex flex-column align-content-center align-items-lg-center" style="min-height: 100vh;background: url('<?php echo URLROOT; ?>/img/admin_dashboard.jpg');margin: 0px;padding: 0px;">

<div class="table-responsive" style="transform: scale(1);transform-origin: top;opacity: 0.88;filter: contrast(92%);margin-top: 60px;">
        <table class="table">
          <h1>Completed Orders</h1>
            <thead>
                <tr>
                    <th style="background: #ffffff;border-color: #000000;">Username</th>
                    <th style="background: #ffffff;border-bottom-color: #000000;">Order ID</th>
                    <th style="background: #ffffff;border-bottom-color: #000000;">Order Date</th>
                    <th style="background: #ffffff;border-bottom-color: #000000;">Order Status</th>
                    <th style="background: #ffffff;border-bottom-color: #000000;">Total Price</th>
                    <th colspan="3" style="background: #ffffff;border-bottom-color: #000000;">Action</th>
                </tr>
            </thead>
            <tbody>
              <?php
                if (!empty($data["orders"])) {
                  foreach($data["orders"] as $order) {
                    echo "<tr>";
                    echo "<td style='background: #ffffff;'>
                   $order->username
                    </td>";
                    echo "<td style='background: #ffffff;'>
                    $order->orderID</a>
                    </td>";
                    echo "<td style='background: #ffffff;'>
                    $order->orderdate</a>
                    </td>";
                    echo "<td style='background: #ffffff;'>
                    $order->orderstatus</a>
                    </td>";
                    echo "<td style='background: #ffffff;'>$ 
                    $order->totalprice</a>
                    </td>";

                    echo "<td style='background: #ffffff;'>
                    <a href='/eCommerceProject/BookStore/Order/orderDetails/$order->orderID'>Details</a>
                    </td>";
                    echo "<td style='background: #ffffff;'>
                    <a href='/eCommerceProject/BookStore/Admin/deleteCompletedOrder/$order->orderID'>Delete</a>
                    </td>";
                    echo "</tr>";
                  } 
                }
              ?>
            </tbody>
        </table>
    </div>
</div>

<?php require APPROOT . '/views/includes/footer.php';  ?>