<?php require APPROOT . '/views/includes/header.php';  ?>
<section>
    <div style="padding: 30px" >
        <?php
        if (!empty($data["order"])) {
                echo '<h3 style="margin:30px">Order Status: ' . $data["order"]->orderstatus . ' </h2>';
                echo '<h3 style="margin:30px">Shipping address: ' . $data["order"]->shippingaddress . ' </h2>';
            }
        
        ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col"></th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Sub total</th>
                   
                    <?php
                    if (!isAdmin()) {
                        echo '<th ">Action</th> ';
                    }
                    ?>
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
                        if (!isAdmin()) {
                        echo "<td>
                        <a href='/eCommerceProject/BookStore/Order/addReview/$item->bookID'>Add Review</a>
                        </td>";
                    }
                    }

                    echo '</tbody>';
                    echo '</table>';
                }
                ?>
                <?php
                if (!empty($data["order"])) {
                        echo '<h2 style="position: relative; overflow: hidden;float:right; margin:30px">Total Price: ' . $data["order"]->totalprice . ' </h2>';
                    }
                
                ?>
    </div>

</section>
<?php require APPROOT . '/views/includes/footer.php';  ?>