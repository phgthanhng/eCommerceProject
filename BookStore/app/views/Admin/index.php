<?php require APPROOT . '/views/includes/header.php';  ?>

<div class="text-center d-lg-flex flex-column justify-content-center align-content-center align-items-lg-center" style="
        min-height: 100vh;
        background: url('<?php echo URLROOT; ?>/img/admin_dashboard.jpg');
        margin: 0px;
        padding: 0px;">

    <div class="text-center d-lg-flex flex-column justify-content-center align-content-center align-items-lg-center" style="min-height: 100vh;margin: 0px;padding: 0px;">
        <a href="<?php echo URLROOT; ?>/Admin/manageProducts" style="margin-top: 10px;margin-bottom: 30px;">
        <button class="btn btn-primary" type="button" style="background: #ffffff;margin: 0px;width: 192px;"><p style="margin:auto; font-weight:900; color:#3e6259;">Manage Products</p></button>
        </a>
        <a href="<?php echo URLROOT; ?>/Admin/addBook" style="margin: auto;margin-top: 0px;margin-bottom: 30px;">
        <button class="btn btn-primary" type="button" style="background: #ffffff;margin: 0px;width: 192px; font-weight:bolder; color:#3e6259;"><p style="margin:auto; font-weight:900; color:#3e6259;">Add a product</p></button>
        </a>
        <a href="<?php echo URLROOT; ?>/Admin/manageOrder" style="margin: auto;margin-top: 0px;margin-bottom: 30px;">
        <button class="btn btn-primary" type="button" style="background: #ffffff;margin: 0px;width: 192px; font-weight:bolder; color:#3e6259;"><p style="margin:auto; font-weight:900; color:#3e6259;">Manage orders</p></button>
        </a>
        <a href="<?php echo URLROOT; ?>/Admin/returns" style="margin: auto;margin-top: 0px;margin-bottom: 30px;">
        <button class="btn btn-primary" type="button" style="background: #ffffff;margin: 0px;width: 192px; font-weight:bolder; color:#3e6259;"><p style="margin:auto; font-weight:900; color:#3e6259;">return orders</p></button>
        </a>
        <a href="<?php echo URLROOT; ?>/Admin/reviews" style="margin: auto;margin-top: 0px;margin-bottom: 30px;">
        <button class="btn btn-primary" type="button" style="background: #ffffff;margin: 0px;width: 192px; font-weight:bolder; color:#3e6259;"><p style="margin:auto; font-weight:900; color:#3e6259;">View reviews</p></button>
        </a>
        <a href="<?php echo URLROOT; ?>/Admin/displayUsers" style="margin: auto;margin-top: 0px;margin-bottom: 30px;">
        <button class="btn btn-primary" type="button" style="background: #ffffff;margin: 0px;width: 192px; font-weight:bolder; color:#3e6259;"><p style="margin:auto; font-weight:900; color:#3e6259;">Display all Customers</p></button>
        </a>
        
    </div>
</div>
<?php require APPROOT . '/views/includes/footer.php';  ?>