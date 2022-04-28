    <?php require APPROOT . '/views/includes/header.php';  ?>
    <!DOCTYPE html>
    <html lang="en">

    <body>
        <!-- <div class="container"> -->
        <h1 style="margin-bottom: 25px;margin-top: 30px;text-align: center;">Romance Books</h1>
        <div class="parent">
            <?php
            if (!empty($data["romance_books"])) {
                foreach ($data["romance_books"] as $book) {
                    $id = $book->bookID;
                $name = substr($book->bookname, 0, 20) . "...";
                $author = $book->author;
                if(strpos($author, ",")){
                    $author = substr($book->author, 0, 19) . "...";
                }else{
                    $author = $book->author;
                }
                
                echo '<div class = "item">';
                echo '<a href="'.URLROOT.'/Book/bookdetail/'.$book->bookID.'">
                    <img src="' . URLROOT . '/public/img/' . $book->image . '" style="width:210px; height:300px;"
                    </a>';
                echo '<p><a href="' . URLROOT . '/Book/bookdetail/' . $id . '" style="text-decoration: none;"> ' . $name . '</a></p>';
                echo '<p class="author"> by ' .$author . '</p>';
                echo '<p class="price"> $' . $book->retailprice . "</p>";
               
                // if not logged in 
                if (!isLoggedIn()) {
                    echo '<p>
                        <a href="' .URLROOT. '/Login/index/"><button>Add to Cart</button></a>
                        </p>';
                }
                // if is logged in
                else {
                    // if users -> show the Add to Cart
                    if (!isAdmin()) {
                        echo '<p>
                            <a href="' .URLROOT. '/Book/bookdetail/'.$id.'"><button>Add to Cart</button></a>
                            </p>';
                    }
                }
                echo '</div>';
                }
            } ?>
        </div>

        <!-- </div> -->

    </body>

    </html>

    <?php require APPROOT . '/views/includes/footer.php';  ?>