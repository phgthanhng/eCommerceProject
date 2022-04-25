<?php require APPROOT . '/views/includes/header.php';  ?>

<style>
.parent {

    max-width: 80%;
    overflow: hidden;
    zoom: 1;
    margin: 0 auto;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.item {
    /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); */
    width: 230px;
    float: left;
    height: auto;
    text-align: center;
    font-family: arial;
}

.bookname {
    color: black;
    font-size: 18px;
    /* line-height: 10px; */

}

.author {
    color: black;
    font-weight: bold;
    font-size: 16px;
    line-height: 10px;

}

.price {
    color: black;
    font-size: 16px;
    line-height: 10px;
}

.item button {
    border: none;
    outline: 0;
    padding: 8px;
    color: white;
    background-color: #8BAD57;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

.card button:hover {
    opacity: 0.7;
}
</style>

<body>
    <!-- <div class="container"> -->
    <h1 style="margin-bottom: 25px;margin-top: 30px;text-align: center;">Classic Books</h1>
    <div class="parent">
        <?php
        if (!empty($data["classic_books"])) {
            foreach ($data["classic_books"] as $book) {
                $id = $book->bookID;
                $name = substr($book->bookname, 0, 20) . "...";
                echo '<div class = "item">';
                echo '<a href="' . URLROOT . '/Book/bookdetail/'.$id.'">
                        <img src="' . URLROOT . '/public/img/' . $book->image . '" style="width:210px; height:300px;"
                    </a>';
                echo '<p><a href="' . URLROOT . '/Book/bookdetail/' . $id . '" style="text-decoration:none;"> ' . $name . '</a></p>';
                echo '<p class="author"> by ' . $book->author . '</p>';
                echo '<p class="price"> $' . $book->retailprice . "</p>";
                // if not logged in 
                if (!isLoggedIn()) {
                    echo '<p><button>Add to Cart</button></p>';
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
<?php require APPROOT . '/views/includes/footer.php';  ?>