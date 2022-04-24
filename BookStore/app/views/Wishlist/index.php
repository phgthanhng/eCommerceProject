<?php require APPROOT . '/views/includes/header.php';  ?>

<section>

    <h1 class="text-center">Wishlist</h1>

    <div>
        <?php
        if (!empty($data['items'])) {
            echo '<table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Image</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                
                </tr>
            </thead>
            <tbody>';
            foreach ($data['items'] as $item) {
                echo '<tr>';
                echo '<td> 
                    <img src=" ' . URLROOT . '/public/img/' . $item->image . ' " style="width:210px; height:300px">
                    </td>';
                echo '<td>' . $item->bookname . '</td>';
                echo '<td>
                        <input type="hidden" id="wishlist_item_id" value="' . $item->wishlistitemID . '">
                        <a href="' . URLROOT . '/Wishlist/removeWishlistItem/' . $item->wishlistitemID . '" style="text-decoration:none;">
                            <i class="fa fa-window-close fa-lg" aria-hidden="true"></i>
                        </a>
                    </td>';
                echo '<td>$ ' . $item->retailprice . ' CAD </td>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<div><p class="text-center" style="height:auto;">No items in the wishlist</p></div>';
        }
        ?>

    </div>


</section>



<?php require APPROOT . '/views/includes/footer.php';  ?>