<?php require APPROOT . '/views/includes/header.php';  ?>
<section>
    <div>
        <?php
        if (!empty($data["order"])) {
            foreach ($data["order"] as $order) {
                echo '<h2 style="margin:30px">Order Status: ' . $order->orderstatus . ' </h2>';
            }
        }
        ?>
        <table class="table" style="margin: 30px;">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col"></th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Sub total</th>
                    <th colspan="3" style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($data["items"])) {
                    foreach ($data["items"] as $item) {
                        echo '<tr>';
                        echo '<td> 
                    <a href="' . URLROOT . '/Book/bookdetail/' . $item->bookID . '">
                    <img src=" ' . URLROOT . '/public/img/' . $item->image . ' " style="width:210px; height:300px">
                    </a>
                    </td>';
                        echo '<td>
                    <a href="' . URLROOT . '/Book/bookdetail/' . $item->bookID . '" style="text-decoration:none;">
                    ' . $item->bookname . '
                    </a>
                    </td>';
                    echo '<td>&nbsp&nbsp&nbsp&nbsp
                        '. $item->quantity .'
                        <input type="hidden" id="cart_item_id" value="' . $item->cartitemID . '">
                    </td>';
                     echo '<td> X </td>';
                        echo '<td>$ ' . $item->retailprice . ' CAD </td>';
                        echo '<td>$ ' . $item->cartitemprice . ' CAD</td>';
                        echo "<td>
                        <a href='/eCommerceProject/BookStore/Order/addReview/$item->bookID'>Add Review</a>
                        </td>";
                    }

                    echo '</tbody>';
                    echo '</table>';
                }
                ?>
                <?php
                if (!empty($data["order"])) {
                    foreach ($data["order"] as $order) {
                        echo '<h2 style="position: relative; overflow: hidden;float:right; margin:30px">Total Price: ' . $order->totalprice . ' </h2>';
                    }
                }
                ?>
    </div>

</section>
<?php require APPROOT . '/views/includes/footer.php';  ?>