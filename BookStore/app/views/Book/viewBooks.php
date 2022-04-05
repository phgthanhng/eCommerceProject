<?php require APPROOT . '/views/includes/header.php';  ?>

<div class="container">
    <h1 style="margin-bottom: 25px;margin-top: 30px;">ALL BOOKS</h1>
   

         // try print books from db as product

        <!-- echo '<div class="parent">';

        while ($rows = $result->fetch_array()) {  

            print_r($rows);

            echo '<div class="item">';

            echo '<i>'.$rows['id'].'</i>';  

            echo '<img src="'.$rows['imgurl'].'">';  

            echo '<span>'.$rows['name'].'</span>';  

            echo '</div>';

        }//end while()  

        echo '</div>';

    }else{   -->


    <!-- <div data-reflow-type="product-list" data-reflow-layout="cards" data-reflow-order="date_desc"
        data-reflow-product-link="/product.html?product={id}"></div> -->
</div>

<?php require APPROOT . '/views/includes/footer.php';  ?>