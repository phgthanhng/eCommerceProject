<?php require APPROOT . '/views/includes/header.php';  ?>

<div class="container" style="margin-top: 20px;">
    <img src="<?php echo URLROOT; ?>/img/PROD-23104_EBOOKFIVE.jpg " style="width: 100%;height: 100%;">
</div>

<div class="container">
    <h1 style="margin-bottom: 25px;margin-top: 30px;">New Arrivals</h1>
    <div data-reflow-type="product-list" data-reflow-layout="cards" data-reflow-order="date_desc"
        data-reflow-product-link="/product.html?product={id}"></div>
</div>

<?php require APPROOT . '/views/includes/footerV2.php';  ?>