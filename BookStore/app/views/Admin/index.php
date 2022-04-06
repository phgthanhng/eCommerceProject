<?php require APPROOT . '/views/includes/adminheader.php';  ?>

<div class="text-center d-lg-flex flex-column justify-content-center align-content-center align-items-lg-center" style="
        min-height: 100vh;
        background: url('<?php echo URLROOT; ?>/img/admin_dashboard.jpg');
        margin: 0px;
        padding: 0px;">

    <div class="text-center d-lg-flex flex-column justify-content-center align-content-center align-items-lg-center" style="min-height: 100vh;background: url(&quot;../assets/img/admin_dashboard.jpg&quot;);margin: 0px;padding: 0px;">
        <a href="<?php echo URLROOT; ?>/Admin/manageProducts" style="margin: auto;margin-top: 30pxpx;margin-bottom: 30px;">
        <button class="btn btn-primary" type="button" style="background: #3e6259;margin: 0px;width: 192px;">Manage Products</button>
        </a>
        <a href="<?php echo URLROOT; ?>/Admin/addBook" style="margin: auto;margin-top: 0px;margin-bottom: 30px;">
        <button class="btn btn-primary" type="button" style="background: #3e6259;margin: 0px;width: 192px;">Add a product</button>
        </a>
        <a href="<?php echo URLROOT; ?>/Admin/manageOrder" style="margin: auto;margin-top: 0px;margin-bottom: 30px;">
        <button class="btn btn-primary" type="button" style="margin: 0px;width: 192px;background: #3e6259;">Manage orders</button>
        </a>
        <a href="<?php echo URLROOT; ?>/Admin/returns" style="margin: auto;margin-top: 0px;margin-bottom: 30px;">
        <button class="btn btn-primary" type="button" style="margin: 0px;width: 192px;background: #3e6259;">return orders</button>
        </a>
        <a href="<?php echo URLROOT; ?>/Admin/reviews" style="margin: auto;margin-top: 0px;margin-bottom: 30px;">
        <button class="btn btn-primary" type="button" style="margin: 0px;width: 192px;background: #3e6259;">View reviews</button>
        </a>
        <a href="<?php echo URLROOT; ?>/Admin/editContactUs" style="margin: auto;margin-top: 0px;"><button class="btn btn-primary" type="button" style="margin: 0px;width: 192px;background: #3e6259;">Edit contact us</button>
        </a>
    </div>
</div>
<?php require APPROOT . '/views/includes/adminfooter.php';  ?>