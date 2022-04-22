// Jquery for picture zoomer
(function($) {
    $.fn.picZoomer = function(options) {
        var opts = $.extend({}, $.fn.picZoomer.defaults, options),
            $this = this,
            $picBD = $('<div class="picZoomer-pic-wp"></div>').css({
                'width': opts.picWidth + 'px',
                'height': opts.picHeight + 'px'
            }).appendTo($this),
            $pic = $this.children('img').addClass('picZoomer-pic').appendTo($picBD),
            $cursor = $('<div class="picZoomer-cursor"><i class="f-is picZoomCursor-ico"></i></div>')
            .appendTo($picBD),
            cursorSizeHalf = {
                w: $cursor.width() / 2,
                h: $cursor.height() / 2
            },
            $zoomWP = $(
                '<div class="picZoomer-zoom-wp"><img src="" alt="" class="picZoomer-zoom-pic"></div>')
            .appendTo($this),
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
        //intinial zoom image size 初始化zoom图片大小 
        $zoomPic.css({
            'width': opts.picWidth * opts.scale + 'px',
            'height': opts.picHeight * opts.scale + 'px'
        });

        //intinial even 初始化事件
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

    //increase button and descrease button

    $('.decrease_').click(function() {
        decreaseValue(this);
    });
    $('.increase_').click(function() {
        increaseValue(this);
    });

    function increaseValue(_this) {
        var value = parseInt($(_this).siblings('input#number').val(), 10);
        value = isNaN(value) ? 1 : value;
        value++;
        $(_this).siblings('input#number').val(value);

    }

    function decreaseValue(_this) {
        var value = parseInt($(_this).siblings('input#number').val(), 10);
        value--;
        value < 1 ? value = 1 : '';
        value = isNaN(value) ? 1 : value;
        $(_this).siblings('input#number').val(value);


    }
});

// will redirect to php method addCartItem
function addcartitem() {
    var quantity = document.getElementById("number").value;
    var id = document.getElementById("bookId").value;
    urlRoot = window.location.origin + "/eCommerceProject/Bookstore/";
    window.location.href = urlRoot + "Cart/addCartItem/" + quantity + "/" + id;
}

function onlyNum(evt) {
    evt = evt ? evt : window.event;
    var charCode = evt.which ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        evt.preventDefault();
    } else {
        return true;
    }
}

function updateQuantity() {
    var quantity = document.getElementById("number").value;
    var cartitemid = document.getElementById("cart_item_id").value;
    urlRoot = window.location.origin + "/eCommerceProject/Bookstore/";
    window.location.href = urlRoot + "Cart/editCartItemQuantity/" + quantity + "/" + cartitemid;
}