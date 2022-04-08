<?php require APPROOT . '/views/includes/header.php';  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" rel="stylesheet">
    <link href="https://w3learnpoint.com/cdn/jquery-picZoomer.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"></script>




</head>
<style>
    .picZoomer {
        position: relative;
        margin-left: 100px;
        width: 200px;
        padding: 15px;
    }

    .picZoomer-pic-wp {
        position: relative;
        overflow: hidden;
        text-align: center;
    }

    .picZoomer-pic-wp:hover .picZoomer-cursor {
        display: block;
    }

    .picZoomer-zoom-pic {
        position: absolute;
        top: 0;
        left: 0;
    }

    .picZoomer-pic {
        width: 100%;
        height: 100%;
    }

    .picZoomer-zoom-wp {
        display: none;
        position: absolute;
        z-index: 999;
        overflow: hidden;
        border: 1px solid #eee;
        height: 460px;
        margin-top: -19px;
    }

    .picZoomer-cursor {
        display: none;
        cursor: crosshair;
        width: 100px;
        height: 100px;
        position: absolute;
        top: 0;
        left: 0;
        border-radius: 50%;
        border: 1px solid #eee;
        background-color: rgba(0, 0, 0, .1);
    }



    .my_img {

        vertical-align: middle;
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        height: 100%;
    }


    /* custom style */
    .picZoomer-pic-wp,
    .picZoomer-zoom-wp {
        border: 1px solid #eee;
    }



    .section-bg {
        background-color: #fff1e0;
    }

    section {
        padding: 60px 0;
    }

    .row-sm .col-md-6 {
        padding-left: 5px;
        padding-right: 5px;
    }

    /*===pic-Zoom===*/
    ._boxzoom ._product-images {
        width: 100%;
        display: inline-block;
    }

    ._boxzoom ._product-images .picZoomer {
        width: 75%;
    }

    ._boxzoom ._product-images .picZoomer .picZoomer-pic-wp img {
        left: 0px;
    }

    ._boxzoom ._product-images .picZoomer img.my_img {
        width: 70%;
    }



    /*======products-details=====*/


    .products-details-container {
        float: left;
        width: 90%;

    }

    ._product-detail-content {
        background: #fff;
        padding: 15px;
        border: 1px solid lightgray;
    }

    ._product-detail-content p._p-name {
        color: black;
        font-size: 24px;
        border-bottom: 1px solid lightgray;
        padding-bottom: 12px;
    }

    ._product-detail-content p.author {
        color: #000;
        font-size: 20px;
        font-weight: bold;

    }



    .p-list span {
        margin-right: 15px;
    }

    .p-list span.price {
        font-size: 25px;
        color: #318234;
    }


    ._p-qty>span {
        color: black;
        margin-right: 15px;
        font-weight: 500;
    }

    ._p-qty .value-button {
        display: inline-flex;
        border: 0px solid #ddd;
        margin: 0px;
        width: 30px;
        height: 35px;
        justify-content: center;
        align-items: center;
        background: #fd7f34;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: #fff;
    }

    ._p-qty .value-button {
        border: 0px solid #fe0000;
        height: 35px;
        font-size: 20px;
        font-weight: bold;
    }


    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }

    ._p-qty input#number {
        text-align: center;
        border: none;
        border-top: 1px solid #fe0000;
        border-bottom: 1px solid #fe0000;
        margin: 0px;
        width: 50px;
        height: 35px;
        font-size: 14px;
        box-sizing: border-box;
    }

    ._p-add-cart {
        margin-left: 0px;
        margin-bottom: 15px;
    }

    .p-list {
        margin-bottom: 10px;
    }

    ._p-features>span {
        display: block;
        font-size: 16px;
        color: #000;
        font-weight: 500;
    }



    ._p-add-cart .btn {
        text-transform: capitalize;
        padding: 6px 20px;
        /* width: 200px; */
        margin: 0px 8px;
        border-radius: 52px;
    }

    .btn-wishlist {

        /* text-transform: capitalize; */
        padding: 6px 20px;
        /* width: 200px; */
        margin: 0px 8px;
        border: none;
        background-color: #C7E3FF;

        color: #FF6E73;
        border-radius: 52px;

        font-size: 15px;
    }


    /*====== wist list=====  */


    .wishlist {
        /* default */
        color: #adb5bd;
        font-size: 30px;
    }


    .wishlist i:hover {
        color: #fe0000;
    }

    /* .wishlist i:visited {

        color: #318234;
    } */
</style>

<?php

$book = $data['book'];

?>

<body>
    <section id="services" class="services section-bg">
        <div class="container-fluid">
            <div class="row row-sm">
                <div class="col-md-6 _boxzoom">

                    <div class="_product-images">
                        <div class="picZoomer">
                            <img class="my_img" src="http://localhost/eCommerceProject/BookStore/public/img/<?php echo $book->image ?>" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="products-details-container">
                        <div class="_product-detail-content">
                            <p class="_p-name"> <?php echo $book->bookname ?></p>

                            <form action="" method="post">

                                <div class="_p-add-cart">
                                    <?php
                                    if (!isAdmin()) {
                                        '<button class="btn-wishlist" tabindex="0">
                                            <i class="fa fa-heart"></i> Add to Wish List
                                        </button>';   
                                    }
                                    ?>
                                </div>

                            </form>

                            <p class="author"> <?php echo "By: " . $book->author ?></p>

                            <div class="_p-price-box">
                                <div class="p-list">

                                    <span class="price"> <?php echo "$" . $book->retailprice ?> </span>

                                </div>
                               

                                <div class="_p-add-cart">
                                    <div class="_p-qty">
                                        <span>Add Quantity</span>
                                        <div class="value-button decrease_" id="" value="Decrease Value">-</div>
                                        <input type="number" name="qty" id="number" value="1" />
                                        <div class="value-button increase_" id="" value="Increase Value">+</div>
                                    </div>
                                </div>

                                <div class="_p-features">
                                    <span> About: <?php echo $book->description?> </span>
                                    
                                </div>

                                <form action="" method="post" accept-charset="utf-8">
                                    <ul class="spe_ul"></ul>
                                    <div class="_p-qty-and-cart">
                                        <div class="_p-add-cart">
                                            <?php
                                            if (!isAdmin()) {
                                           ' <button class="btn-theme btn btn-success" tabindex="0">
                                                <i class="fa fa-shopping-cart"></i> Add to Cart
                                            </button>';   
                                            }
                                            ?>
                                            <input type="hidden" name="pid" value="18" />
                                            <input type="hidden" name="price" value="850" />
                                            <input type="hidden" name="url" value="" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <p>fwrgvhgevbebbbbbbbbbbbbbbbboooooooooooooooooo </p>
        </div>
    </section>

   
    <!-- <section class="sec bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 title_bx">
                    <h3 class="title"> Recent Post </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 list-slider mt-4">
                    <div class="owl-carousel common_wd  owl-theme" id="recent_post">
                        <div class="item">
                            <div class="sq_box shadow">
                                <div class="pdis_img">
                                    <span class="wishlist">
                                        <a alt="Add to Wish List" title="Add to Wish List" href="javascript:void(0);"> <i class="fa fa-heart"></i></a>
                                    </span>
                                    <a href="#">
                                        <img src="https://ucarecdn.com/05f649bf-b70b-4cf8-90f7-2588ce404a08/-/resize/680x/">
                                    </a>
                                </div>
                                <h4 class="mb-1"> <a href="details.php"> Milton Bottle </a> </h4>
                                <div class="price-box mb-2">
                                    <span class="price"> Price <i class="fa fa-inr"></i> 200 </span>
                                    <span class="offer-price"> Offer Price <i class="fa fa-inr"></i> 120 </span>
                                </div>
                                <div class="btn-box text-center">
                                    <a class="btn btn-sm" href="javascript:void(0);"> <i class="fa fa-shopping-cart"></i> Add to Cart </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sq_box shadow">
                                <div class="pdis_img">
                                    <span class="wishlist">
                                        <a alt="Add to Wish List" title="Add to Wish List" href="javascript:void(0);"> <i class="fa fa-heart"></i></a>
                                    </span>
                                    <a href="#">
                                        <img src="https://ucarecdn.com/05f649bf-b70b-4cf8-90f7-2588ce404a08/-/resize/680x/">
                                    </a>
                                </div>
                                <h4 class="mb-1"> <a href="details.php"> Milton Bottle </a> </h4>
                                <div class="price-box mb-2">
                                    <span class="price"> Price <i class="fa fa-inr"></i> 200 </span>
                                    <span class="offer-price"> Offer Price <i class="fa fa-inr"></i> 120 </span>
                                </div>
                                <div class="btn-box text-center">
                                    <a class="btn btn-sm" href="javascript:void(0);"> <i class="fa fa-shopping-cart"></i> Add to Cart </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sq_box shadow">
                                <div class="pdis_img">
                                    <span class="wishlist">
                                        <a alt="Add to Wish List" title="Add to Wish List" href="javascript:void(0);"> <i class="fa fa-heart"></i></a>
                                    </span>
                                    <a href="#">
                                        <img src="https://ucarecdn.com/05f649bf-b70b-4cf8-90f7-2588ce404a08/-/resize/680x/">
                                    </a>
                                </div>
                                <h4 class="mb-1"> <a href="#"> Milton Bottle </a> </h4>
                                <div class="price-box mb-2">
                                    <span class="price"> Price <i class="fa fa-inr"></i> 200 </span>
                                    <span class="offer-price"> Offer Price <i class="fa fa-inr"></i> 120 </span>
                                </div>
                                <div class="btn-box text-center">
                                    <a class="btn btn-sm" href="javascript:void(0);"> <i class="fa fa-shopping-cart"></i> Add to Cart </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sq_box shadow">
                                <div class="pdis_img">
                                    <span class="wishlist">
                                        <a alt="Add to Wish List" title="Add to Wish List" href="javascript:void(0);"> <i class="fa fa-heart"></i></a>
                                    </span>
                                    <a href="#">
                                        <img src="https://ucarecdn.com/05f649bf-b70b-4cf8-90f7-2588ce404a08/-/resize/680x/">
                                    </a>
                                </div>
                                <h4 class="mb-1"> <a href="#"> Milton Bottle </a> </h4>
                                <div class="price-box mb-2">
                                    <span class="price"> Price <i class="fa fa-inr"></i> 200 </span>
                                    <span class="offer-price"> Offer Price <i class="fa fa-inr"></i> 120 </span>
                                </div>
                                <div class="btn-box text-center">
                                    <a class="btn btn-sm" href="javascript:void(0);"> <i class="fa fa-shopping-cart"></i> Add to Cart </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sq_box shadow">
                                <div class="pdis_img">
                                    <span class="wishlist">
                                        <a alt="Add to Wish List" title="Add to Wish List" href="javascript:void(0);"> <i class="fa fa-heart"></i></a>
                                    </span>
                                    <a href="#">
                                        <img src="https://ucarecdn.com/05f649bf-b70b-4cf8-90f7-2588ce404a08/-/resize/680x/">
                                    </a>
                                </div>
                                <h4 class="mb-1"> <a href="details.php"> Milton Bottle </a> </h4>
                                <div class="price-box mb-2">
                                    <span class="price"> Price <i class="fa fa-inr"></i> 200 </span>
                                    <span class="offer-price"> Offer Price <i class="fa fa-inr"></i> 120 </span>
                                </div>
                                <div class="btn-box text-center">
                                    <a class="btn btn-sm" href="javascript:void(0);"> <i class="fa fa-shopping-cart"></i> Add to Cart </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sq_box shadow">
                                <div class="pdis_img">
                                    <span class="wishlist">
                                        <a alt="Add to Wish List" title="Add to Wish List" href="javascript:void(0);"> <i class="fa fa-heart"></i></a>
                                    </span>
                                    <a href="#">
                                        <img src="https://ucarecdn.com/05f649bf-b70b-4cf8-90f7-2588ce404a08/-/resize/680x/">
                                    </a>
                                </div>
                                <h4 class="mb-1"> <a href="details.php"> Milton Bottle </a> </h4>
                                <div class="price-box mb-2">
                                    <span class="price"> Price <i class="fa fa-inr"></i> 200 </span>
                                    <span class="offer-price"> Offer Price <i class="fa fa-inr"></i> 120 </span>
                                </div>
                                <div class="btn-box text-center">
                                    <a class="btn btn-sm" href="javascript:void(0);"> <i class="fa fa-shopping-cart"></i> Add to Cart </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sq_box shadow">
                                <div class="pdis_img">
                                    <span class="wishlist">
                                        <a alt="Add to Wish List" title="Add to Wish List" href="javascript:void(0);"> <i class="fa fa-heart"></i></a>
                                    </span>
                                    <a href="#">
                                        <img src="https://ucarecdn.com/05f649bf-b70b-4cf8-90f7-2588ce404a08/-/resize/680x/">
                                    </a>
                                </div>
                                <h4 class="mb-1"> <a href="details.php"> Milton Bottle </a> </h4>
                                <div class="price-box mb-2">
                                    <span class="price"> Price <i class="fa fa-inr"></i> 200 </span>
                                    <span class="offer-price"> Offer Price <i class="fa fa-inr"></i> 120 </span>
                                </div>
                                <div class="btn-box text-center">
                                    <a class="btn btn-sm" href="javascript:void(0);"> <i class="fa fa-shopping-cart"></i> Add to Cart </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <script>
        // zoom tool放大镜控件

        (function($) {
            $.fn.picZoomer = function(options) {
                var opts = $.extend({}, $.fn.picZoomer.defaults, options),
                    $this = this,
                    $picBD = $('<div class="picZoomer-pic-wp"></div>').css({
                        'width': opts.picWidth + 'px',
                        'height': opts.picHeight + 'px'
                    }).appendTo($this),
                    $pic = $this.children('img').addClass('picZoomer-pic').appendTo($picBD),
                    $cursor = $('<div class="picZoomer-cursor"><i class="f-is picZoomCursor-ico"></i></div>').appendTo($picBD),
                    cursorSizeHalf = {
                        w: $cursor.width() / 2,
                        h: $cursor.height() / 2
                    },
                    $zoomWP = $('<div class="picZoomer-zoom-wp"><img src="" alt="" class="picZoomer-zoom-pic"></div>').appendTo($this),
                    $zoomPic = $zoomWP.find('.picZoomer-zoom-pic'),
                    picBDOffset = {
                        x: $picBD.offset().left,
                        y: $picBD.offset().top
                    };


                opts.zoomWidth = opts.zoomWidth || opts.picWidth;
                opts.zoomHeight = opts.zoomHeight || opts.picHeight;
                var zoomWPSizeHalf = {
                    w: opts.zoomWidth / 2,
                    h: opts.zoomHeight / 2
                };

                //intinial zoom cantainer size 初始化zoom容器大小
                $zoomWP.css({
                    'width': opts.zoomWidth + 'px',
                    'height': opts.zoomHeight + 'px'
                });
                $zoomWP.css(opts.zoomerPosition || {
                    top: 0,
                    left: opts.picWidth + 30 + 'px'
                });
                //初始化zoom图片大小
                $zoomPic.css({
                    'width': opts.picWidth * opts.scale + 'px',
                    'height': opts.picHeight * opts.scale + 'px'
                });

                //初始化事件
                $picBD.on('mouseenter', function(event) {
                    $cursor.show();
                    $zoomWP.show();
                    $zoomPic.attr('src', $pic.attr('src'))
                }).on('mouseleave', function(event) {
                    $cursor.hide();
                    $zoomWP.hide();
                }).on('mousemove', function(event) {
                    var x = event.pageX - picBDOffset.x,
                        y = event.pageY - picBDOffset.y;

                    $cursor.css({
                        'left': x - cursorSizeHalf.w + 'px',
                        'top': y - cursorSizeHalf.h + 'px'
                    });
                    $zoomPic.css({
                        'left': -(x * opts.scale - zoomWPSizeHalf.w) + 'px',
                        'top': -(y * opts.scale - zoomWPSizeHalf.h) + 'px'
                    });

                });
                return $this;

            };
            $.fn.picZoomer.defaults = {
                picHeight: 460,
                scale: 2.5,
                zoomerPosition: {
                    top: '0',
                    left: '380px'
                },

                zoomWidth: 400,
                zoomHeight: 460
            };
        })(jQuery);



        $(document).ready(function() {
            $('.picZoomer').picZoomer();
            $('.piclist li').on('click', function(event) {
                var $pic = $(this).find('img');
                $('.picZoomer-pic').attr('src', $pic.attr('src'));
            });

            var owl = $('#recent_post');
            owl.owlCarousel({
                margin: 20,
                dots: false,
                nav: true,
                navText: [
                    "<i class='fa fa-chevron-left'></i>",
                    "<i class='fa fa-chevron-right'></i>"
                ],
                autoplay: true,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    },
                    1200: {
                        items: 4
                    }
                }
            });

            $('.decrease_').click(function() {
                decreaseValue(this);
            });
            $('.increase_').click(function() {
                increaseValue(this);
            });

            function increaseValue(_this) {
                var value = parseInt($(_this).siblings('input#number').val(), 10);
                value = isNaN(value) ? 0 : value;
                value++;
                $(_this).siblings('input#number').val(value);
            }

            function decreaseValue(_this) {
                var value = parseInt($(_this).siblings('input#number').val(), 10);
                value = isNaN(value) ? 0 : value;
                value < 1 ? value = 1 : '';
                value--;
                $(_this).siblings('input#number').val(value);
            }
        });
    </script>


    <?php require APPROOT . '/views/includes/footer.php';  ?>