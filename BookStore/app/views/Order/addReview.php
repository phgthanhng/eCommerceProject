<?php require APPROOT . '/views/includes/header.php';  ?>

<div class="container" style="min-height: 100vh;">
    <h1 style="margin-bottom: 25px;margin-top: 40px; text-align: center;">Write a Review</h1>
    <div class="my-3 py-1 text-dark">
        
        <div class="col-md-8 col-lg-6 col-xl-10 container">
            <div class="card p-3 shadow-2-strong" style="border-radius: 1rem;">
                <form action="" method="post" enctype=multipart/form-data>
                    <div class="form-outline">
                        <textarea class="form-control" id="reviewTextArea" name="reviewTextArea" rows="4" placeholder="Write review..." style="resize: none;"></textarea>
                        <p>Review Mark: </p>
                        <select name="review_mark" id="review_mark" class="btn btn-dark dropdown-toggle form-select form-select-sm" aria-label=".form-select-sm example" data-toggle="dropdown">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-end mt-3 mr-4">
                        <button type="submit" name="reviewSubmit">SUBMIT</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/includes/footer.php';  ?>