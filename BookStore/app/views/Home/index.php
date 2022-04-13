<?php require APPROOT . '/views/includes/header.php';  ?>
<div class="text-center d-lg-flex align-content-center justify-content-lg-center align-items-lg-center" style="min-height: 100vh;background-image: url('<?php echo URLROOT; ?>/img/book_wallpaper.jpg'); 
    background-repeat: no-repeat; height: 100%;  background-position: center;   background-size: cover;
">
    <a href="<?php echo URLROOT;?>/Book/index" style="margin: auto; text-decoration: none;">
        <button class="btn btn-light text-center d-flex d-lg-flex justify-content-lg-center align-items-lg-center"
            type="button" style="transform: translate(0%); border: 1px solid;
            padding: 10px;
            box-shadow: 5px 10px;">
            <p style =" font-size: 35px;padding-top:20px;">View Books<p>
        </button> </a>
</div>
<?php require APPROOT . '/views/includes/footer.php';  ?>