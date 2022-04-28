<?php require APPROOT . '/views/includes/header.php';  ?>
 <section>
    <div>
    <?php
    if (!empty($data['order'])) {
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
            foreach ($data['order'] as $item) {
                echo '<tr>';
                echo '<td> 
                    <a href="'.URLROOT.'/Book/bookdetail/'.$item->bookID.'">
                    <img src=" ' . URLROOT . '/public/img/' . $item->image .' " style="width:210px; height:300px">
                    </a>
                    </td>';
                echo '<td>
                    <a href="'.URLROOT.'/Book/bookdetail/'.$item->bookID.'" style="text-decoration:none;">
                    '.$item->bookname.'
                    </a>
                    </td>';
                echo '<td>
                        <input type="number" name="qty" id="number" value="'.$item->quantity.'" readonly style="width: 50px;"/>
                        <input type="hidden" id="cart_item_id" value="'.$item->cartitemID.'">
                    </td>';
                echo '<td>$ '.$item->retailprice.' CAD </td>';
                echo '<td>$ '.$item->cartitemprice.' CAD</td>';
            }  
          
        echo '</tbody>';
        echo '</table>';            
    }
    ?>
    </div>
    
</section>
<?php require APPROOT . '/views/includes/footer.php';  ?>