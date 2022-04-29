<?php require APPROOT . '/views/includes/header.php';  ?>
<section>
    <div>
        <h1 class="text-center">Wishlist</h1>
        <?php
        if (!empty($data['items'])) {
            echo '<table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Image</th>
                <th scope="col">Book Name</th>
                <th scope="col">Price</th>
                <th scope="col">Add to Cart</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>';
            foreach ($data['items'] as $item) {
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
             
                echo '<td>$ ' . $item->retailprice . ' CAD </td>';
                if ($item->availablequantity > 0) {
                    echo '<td>
                            <a href="' . URLROOT . '/Book/bookdetail/' . $item->bookID . '" style="text-decoration:none;">
                            <button class="btn btn-primary" type="button">ADD TO CART</button>
                            </a>
                        </td>';
                }
                else {
                    echo '<td>CURRENTLY OUT OF STOCK</td>';
                }
                echo '<td>
                        <a href="' . URLROOT . '/Wishlist/removeWishlistItem/' . $item->wishlist_itemID . '" style="text-decoration:none;">
                            <i class="fa fa-window-close fa-lg"  aria-hidden="true"></i>
                        </a>
                        <input type="hidden" id="wishlist_item_id" value="' . $item->wishlist_itemID . '">
                    </td>';
            }

            echo '</tbody>';
            echo '</table>';

         
        } else {
            echo '<div><p class="text-center" style="height:auto;">No items in the wishlist</p></div>';
        }
        ?>
    </div>
</section>

<script>
    function removeWishListItem() {
        alert("Wishlist item removed!");
    }
    // setTimeout(removeWishlistItem, 2000);

</script>

<?php require APPROOT . '/views/includes/footer.php';  ?>