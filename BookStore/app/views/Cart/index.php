<?php require APPROOT . '/views/includes/header.php';  ?>
 <section>
    <div>
    <?php
    if (!empty($data['items'])) {
       echo '<table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Image</th>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Sub total</th>
                </tr>
            </thead>
            <tbody>';
            foreach ($data['items'] as $item) {
                echo '<tr>';
                echo '<td> 
                    <img src=" ' . URLROOT . '/public/img/' . $item->image .' " style="width:210px; height:300px">
                    </td>';
                echo '<td>'.$item->bookname.'</td>';
                echo '<td>
                        <input type="number" name="qty" id="number" value="'.$item->quantity.'" min="1" onkeypress="onlyNum(this.evt)" onchange="updateQuantity()" style="width: 50px;"/>
                        <input type="hidden" id="cart_item_id" value="'.$item->cartitemID.'">
                        <a href="' . URLROOT . '/Cart/removeCartItem/' . $item->cartitemID. '" style="text-decoration:none;">
                            <i class="fa fa-window-close fa-lg" aria-hidden="true"></i>
                        </a>
                    </td>';
                echo '<td>'.$item->retailprice.'</td>';
                echo '<td>'.$item->cartitemprice.'</td>';
            }  
          
        echo '</tbody>';
        echo '</table>';
    }
    else {
        echo '<div><p class="text-center" style="height:auto;">No items in the cart</p></div>';
    }
    ?>
    </div>
    
</section>
<?php require APPROOT . '/views/includes/footer.php';  ?>