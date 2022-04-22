<?php require APPROOT . '/views/includes/header.php';  ?>

<?php
$book = $data['book'];
?>
<section id="services" class="services section-bg">
    <div class="container-fluid">
        <div class="row row-sm">
            <div class="col-md-6 _boxzoom">
                <div class="_product-images">
                    <div class="picZoomer">
                        <img class="my_img"
                            src="http://localhost/eCommerceProject/BookStore/public/img/<?php echo $book->image ?>"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="products-details-container">
                    <div class="_product-detail-content">
                        <p class="_p-name"> <?php echo $book->bookname ?></p>
                        <form action="" method="post">
                            <div class="_p-add-cart">
                                <?php
                                    if (!isLoggedIn()) {
                                        echo '
                                            <button class="btn-wishlist" tabindex="0">
                                                <a href="'.URLROOT.'/Login/index">
                                                <i class="fa fa-heart" style="color:red;">
                                                 Add to Wish List</i>
                                                 </a>
                                            </button>
                                            
                                      ';
                                    }
                                    // if is logged in 
                                    else {
                                        // if users -> show the wishlist heart icon
                                        if (!isAdmin()) {
                                           echo '
                                            <button class="btn-wishlist" tabindex="0">
                                                <a href="'.URLROOT.'/Wishlist/addBook/'.$book->bookID.'">
                                                    <i class="fa fa-heart" style="color:red;">
                                                    Add to Wish List</i>
                                                 </a>
                                            </button>  
                                        ';
                                        } else {
                                            echo '<p><a href="' . URLROOT . '/Admin/editBook/' . $book->bookID . '"> Edit Book </a></p>';
                                            echo '<p><a href="' . URLROOT . '/Admin/delete/' . $book->bookID . '"> Delete Book </a></p>';
                                        }
                                    }
                                ?>
                            </div>
                        </form>

                        <p class="author"> <?php echo "By: " . $book->author ?></p>
                        <div class="_p-price-box">
                            <span class="price"> <?php echo "$" . $book->retailprice ?> </span>
                        </div>
                        <div class="_p-add-cart">
                            <div class="_p-qty">
                                <span>Add Quantity</span>
                                <input type="hidden" id="bookId" value="<?php echo $book->bookID ?>">
                                <div class="value-button decrease_" id="" value="Decrease Value">-</div>
                                <input type="text" name="qty" id="number" value="1" onkeypress="onlyNum(this.evt)"/>
                                <div class="value-button increase_" id="" value="Increase Value">+</div>
                            </div>
                        </div>
                        <div class="_p-features">
                            <details>
                                <summary>
                                    <p class="p_detail"> Detail:</p>
                                    <p class="p_detail"> ISBN: <?php echo $book->isbn ?> </p>
                                    <p class="p_detail"> Publisher: <?php echo $book->publisher ?> </p>
                                </summary>
                                <span class=>
                                    <p class="p_detail"> ABOUT:</p>

                                    <p class="about"> <?php echo $book->description ?> </p>
                                </span>
                            </details>
                        </div>
                        <ul class="spe_ul"></ul>
                        <div class="_p-qty-and-cart">
                            <div class="_p-add-cart">
                                <?php
                                    // if NOT logged in 
                                    if (!isLoggedIn()) {
                                        echo '
                                            <a href="'.URLROOT.'/Login/index">
                                                <button class="btn-theme btn btn-success" tabindex="0">
                                                    <i class="fa fa-shopping-cart"></i> 
                                                    Add to Cart
                                                </button>
                                            </a>';
                                    } 
                                    else { // if is logged in 
                                        // if not admin-> customer only
                                        if (!isAdmin()) {
                                            echo '
                                                <button class="btn-theme btn btn-success" tabindex="0" onclick="addcartitem()">
                                                    <i class="fa fa-shopping-cart"></i> 
                                                        Add to Cart
                                                </button>';
                                        }
                                    }
                                ?>
                                <input type="hidden" name="pid" value="18" />
                                <input type="hidden" name="price" value="850" />
                                <input type="hidden" name="url" value="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<?php require APPROOT . '/views/includes/footer.php';  ?>