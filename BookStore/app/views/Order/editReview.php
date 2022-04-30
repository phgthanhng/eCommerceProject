<?php require APPROOT . '/views/includes/header.php';  ?>


<script>
    function validateForm() {
        let comment = document.forms["editReview"]["reviewText"].value;
        if (comment == "") {
            alert("review can't be empty");
            return false;
        }
    }
</script>
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-10">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <form class="container-fluid" name="editReview" action='' onsubmit="return validateForm()" method='post' enctype="multipart/form-data">
                            <h3 class="mb-3 d-flex justify-content-center">EDIT COMMENT</h3>

                            <div class="form-outline mb-4">
                                <label for="updateComment">Your comment</label>
                                <input name="reviewText" type="text" class="form-control" id="reviewinput" value="<?php echo $data->reviewcontent ?>">
                                <p>Review Mark: </p>
                                <select name="review_mark" id="review_mark" class="btn btn-dark dropdown-toggle form-select form-select-sm" aria-label=".form-select-sm example" data-toggle="dropdown">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" name='editReview' class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php require APPROOT . '/views/includes/footer.php';  ?>