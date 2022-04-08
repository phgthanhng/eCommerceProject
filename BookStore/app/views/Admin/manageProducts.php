
<?php require APPROOT . '/views/includes/header.php';  ?>

   
    <div class="text-center d-lg-flex flex-column align-content-center align-items-lg-center" style="min-height: 100vh;background: url('<?php echo URLROOT; ?>/img/admin_dashboard.jpg');margin: 0px;padding: 0px;">

    <div class="table-responsive" style="transform: scale(1);transform-origin: top;opacity: 0.88;filter: contrast(92%);margin-top: 60px;">
            <table class="table">
                <thead>
                    <tr>
                        <th style="background: #ffffff;border-color: #000000;">Title</th>
                        <th style="background: #ffffff;border-bottom-color: #000000;">Author</th>
                        <th style="background: #ffffff;">Category</th>
                        <th style="background: #ffffff;">Quantity</th>
                        <th colspan="3" style="background: #ffffff;">Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    if (!empty($data["books"])) {
                      foreach($data["books"] as $book) {
                        echo "<tr>";
                        echo "<td style='background: #ffffff;'>
                       $book->bookname
                        </td>";
                        echo "<td style='background: #ffffff;'>
                        $book->author</a>
                        </td>";
                        echo "<td style='background: #ffffff;'>
                        $book->category</a>
                        </td>";
                        echo "<td style='background: #ffffff;'>
                        $book->availablequantity</a>
                        </td>";

                        echo "<td style='background: #ffffff;'>
                        <a href='/eCommerceProject/BookStore/Book/bookdetail/$book->bookID'>Details</a>
                        </td>";
                        echo "<td style='background: #ffffff;'>
                        <a href='/eCommerceProject/BookStore/Admin/editBook/$book->bookID'>Edit</a>
                        </td>";
                        echo "<td style='background: #ffffff;'>
                        <a href='/eCommerceProject/BookStore/Admin/delete/$book->bookID'>Delete</a>
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