<?php require APPROOT . '/views/includes/header.php';  ?>

<div class="jumbotron m-5">
  <h1 class="display-6 text-center m-5">Please scan the following QRcode <i class="fa fa-qrcode" aria-hidden="true"></i>
</h1>

  <?php
      if(!empty($data['qrcode'])){
        echo $data['qrcode'];
      }
?>
</div>

<h2></h2>

<?php require APPROOT . '/views/includes/footer.php'; ?>