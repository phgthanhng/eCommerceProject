<?php require APPROOT . '/views/includes/header.php';  ?>
<!DOCTYPE html>
<html lang="en">

<style>
    .parent {
        max-width: 100%;
        margin: 0 auto;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .item {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        width: 260px;
        height:400px;
        text-align: center;
        font-family: arial;
    }

    .bookname {
        color: black;
        font-size: 18px;
      
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
<!-- <div class="container"> -->
    <h1 style="margin-bottom: 25px;margin-top: 30px;">ALL BOOKS</h1>
    <div class="parent">
        <?php
        if (!empty($data["books"])) {
            foreach ($data["books"] as $book) {
                echo '<div class = "item">';
                echo '<img scr="' . URLROOT . '/public/img/' . $book->image .'"';
                if(strlen($book->bookname) > 45 ){
                    echo '<p class="bookname">'.substr($book->bookname, 0, 45). "...</p>";

                }else{
                    echo '<p class="bookname">' . $book->bookname . "</p>";
                }
                echo '<p class="author"> by ' . $book->author . '</p>';
                echo '<p class="price"> $' . $book->retailprice . "</p>";
                echo '<p><button>Add to Cart</button></p>';
                echo '</div>';
            }
        } ?>
    </div>

<!-- </div> -->

<?php require APPROOT . '/views/includes/footer.php';  ?>

</html>