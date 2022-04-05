<?php require APPROOT . '/views/includes/adminheader.php';  ?>

<div class="text-center d-lg-flex flex-column justify-content-center align-content-center align-items-lg-center" style="
        min-height: 100vh;
        background: url('<?php echo URLROOT; ?>/img/admin_dashboard.jpg');
        margin: 0px;
        padding: 0px;">
    <button class="btn btn-primary" type="button" style="background: #3e6259; margin: 10px; width: 192px">
        <a href="<?php echo URLROOT; ?>/Admin/manageProducts" style="margin: auto"></a>Manage Products</button><button class="btn btn-primary"
        type="button" style="background: #3e6259; margin: 10px; width: 192px">
        <a href="<?php echo URLROOT; ?>/Admin/addProduct" style="margin: auto"></a>Add a product</button><button class="btn btn-primary"
        type="button" style="margin: 10px; width: 192px; background: #3e6259">
        <a href="<?php echo URLROOT;?>/Admin/managerOrders" style="margin: auto"></a>Manage orders</button><button class="btn btn-primary"
        type="button" style="margin: 10px; width: 192px; background: #3e6259">
        <a href="<?php echo URLROOT; ?>/Admin/returns" style="margin: auto"></a>return orders</button><button class="btn btn-primary"
        type="button" style="margin: 10px; width: 192px; background: #3e6259">
        <a href="<?php echo URLROOT; ?>/Admin/ViewReviews" style="margin: auto"></a>View reviews</button><button class="btn btn-primary"
        type="button" style="margin: 10px; width: 192px; background: #3e6259">
        <a href="<?php echo URLROOT; ?>/Admin/editContact" style="margin: auto"></a>Edit contact us
    </button>
</div>
<?php require APPROOT . '/views/includes/adminfooter.php';  ?>