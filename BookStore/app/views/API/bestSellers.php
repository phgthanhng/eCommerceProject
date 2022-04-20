<?php require APPROOT . '/views/includes/header.php';  ?>

<?php 
    if($data != null){
?>

<div class="card mx-auto mt-3" style="width: 60%;">
    <!-- background-color:#9EADA4; -->
    <h4 class="text-center mt-3">New York Times BestSellers</h4>
    <h6 class="text-center mt-3">Total bestsellers: <?php echo count($data->results) ?></h6>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <!-- <th scope="col">Rank</th> -->
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <!-- <th scope="col">Best Sellers Date</th> -->
            </tr>
        </thead>

        <tbody>
            <?php 
            foreach ($data->results as $book) {
                echo '<tr>';
                // foreach ($book->isbns as $isbn) {
                // echo '<td>'.$isbn->isbn13.'</td>';
                // }
                // foreach ($book->ranks_history as $rank) {
                //     echo '<td>'.$rank->rank.'</td>';
                // }
                echo '<td>'.$book->title.'</td>';
                echo '<td>'.$book->author.'</td>';
                // foreach ($book->ranks_history as $rank) {
                //     echo '<td>'.$rank->bestsellers_date.'</td>';
                // }
                 echo '<tr>';
            }   
                ?>
        </tbody>
    </table>
</div>
<?php 
    }
    else {
        echo 'No data';
    }
?>
<?php require APPROOT . '/views/includes/footer.php';  ?>