
<?php require APPROOT . '/views/includes/header.php';  ?>

    <div class="text-center d-lg-flex flex-column align-content-center align-items-lg-center" style="min-height: 100vh;background: url('<?php echo URLROOT; ?>/img/admin_dashboard.jpg');margin: 0px;padding: 0px;">

    <div class="table-responsive" style="transform: scale(1);transform-origin: top;opacity: 0.88;filter: contrast(92%);margin-top: 60px;">
            <table class="table">
                <thead>
                    <tr>
                        <th style="background: #ffffff;border-color: #000000;">Users</th>
                        <th style="background: #ffffff;border-color: #000000;">Email</th>
                        <th style="background: #ffffff;border-color: #000000;">First Name</th>
                        <th style="background: #ffffff;border-color: #000000;">Last Name</th>
                        <th style="background: #ffffff;border-color: #000000;">Phone Number</th>
                        <th style="background: #ffffff;border-color: #000000;">Address</th>
                        <th style="background: #ffffff;border-color: #000000;">Newsletter Subscription</th>
                        <th style="background: #ffffff; border-color: #000000;">Past Orders</th>
                        <th style="background: #ffffff; border-color: #000000;">Return Orders</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    if (!empty($data["users"])) {
                      foreach($data["users"] as $user) {
                        echo "<tr>";
                        echo "<td style='background: #ffffff;'>
                       $user->username
                        </td>";
                        echo "<td style='background: #ffffff;'>
                        $user->email</a>
                        </td>";
                        echo "<td style='background: #ffffff;'>
                        $user->firstname</a>
                        </td>";
                        echo "<td style='background: #ffffff;'>
                        $user->lastname</a>
                        </td>";
                        echo "<td style='background: #ffffff;'>
                        $user->phone</a>
                        </td>";
                        echo "<td style='background: #ffffff;'>
                        $user->address</a>
                        </td>";
                        echo "<td style='background: #ffffff;'>
                        $user->newsletter</a>
                        </td>";

                        echo "<td style='background: #ffffff;'>
                        <a href='/eCommerceProject/BookStore/Admin/details/$user->userID'>Details</a>
                        </td>";
                        echo "<td style='background: #ffffff;'>
                        <a href='/eCommerceProject/BookStore/Admin/details/$user->userID'>Details</a>
                        </td>";
                      } 
                    }
                  ?>
                </tbody>
            </table>
        </div>
  </div>

    <?php require APPROOT . '/views/includes/footer.php';  ?>