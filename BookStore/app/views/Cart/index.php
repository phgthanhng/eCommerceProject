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
                echo '<td>$ '.$item->retailprice.' CAD </td>';
                echo '<td>$ '.$item->cartitemprice.' CAD</td>';
            }  
          
        echo '</tbody>';
        echo '</table>';
        
        echo '<div class="d-flex justify-content-end">
                <p>PRICE
                <br>GST (5%): $ '.$data['gst'].'<br>
                QST (9.975%): $ '.$data['qst'].'<br>
                Sales Taxes (14.975%): $ '.$data['salesTaxes'].'<br>
                Total Price: $ '.$data['finalPrice'].' CAD
                <p> 
            </div>';
        echo '
            <form class="" method="post" action="">
            <div class="d-flex justify-content-end">
                <a href="' . URLROOT . '/Cart/checkout/' . $item->cartID. '" 
                    <button type="button" class="btn btn-success" name="checkout">Checkout</button>
                </a>
            </div>
            </form>';
            
    }
    else {
        echo '<div><p class="text-center" style="height:auto;">No items in the cart</p></div>';
    }
    ?>
    </div>
    
</section>
<?php require APPROOT . '/views/includes/footer.php';  ?>