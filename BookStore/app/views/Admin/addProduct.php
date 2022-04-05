<?php require APPROOT . '/views/includes/adminheader.php';  ?>

<section class="text-center d-lg-flex flex-column justify-content-center align-content-center align-items-lg-center"
    style="min-height: 100vh;background: url('<?php echo URLROOT; ?>/img/admin_dashboard.jpg');margin: 0px;padding: 0px;">
    <h1 style="margin-top: 34px;">Add a book</h1>
    <form
        style="width: 600px;height: 650px;margin: 22px;margin-top: 7px;background: rgba(112,126,101,0.53);padding-top: 17px;padding-right: -6px;">
        <div><input class="form-control float-end" type="text"
                style="width: 364px;padding: 0px 0px 0px 0px;padding-top: 2px;margin-right: 10px;margin-top: 9px;font-size: 12px;height: 29px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;"
                name="title" /><label class="form-label float-none"
                style="font-size: 22px;width: 188px;height: 26.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: 7px;">Title</label>
        </div>
        <div><label class="form-label float-none"
                style="font-size: 22px;width: 188px;height: 28.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: 10px;">ISBN</label><input
                class="form-control float-end" type="text"
                style="width: 364px;padding: 0px 0px 0px 0px;padding-top: 2px;margin-right: 10px;margin-top: 9px;font-size: 12px;height: 29px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;"
                name="title" /></div>
        <div><label class="form-label float-none"
                style="font-size: 22px;width: 188px;height: 28.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: 6px;">Author</label><input
                class="form-control float-end" type="text"
                style="width: 364px;padding: 0px 0px 0px 0px;padding-top: 2px;margin-right: 10px;margin-top: 9px;font-size: 12px;height: 29px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;"
                name="title" /></div>
        <div><label class="form-label float-none"
                style="font-size: 22px;width: 188px;height: 28.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: 5px;margin-bottom: 17px;">Publisher</label><input
                class="form-control float-end" type="text"
                style="width: 364px;padding: 0px 0px 0px 0px;padding-top: 2px;margin-right: 10px;margin-top: 9px;font-size: 12px;height: 29px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;"
                name="title" />
            <div><label class="form-label float-start"
                    style="font-size: 22px;width: 227px;height: 28.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: -1px;">Retail
                    Price</label><input class="form-control float-end" type="number"
                    style="width: 364px;padding: 0px 0px 0px 0px;padding-top: 2px;margin-right: 10px;margin-top: -34px;font-size: 12px;height: 29px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;margin-bottom: 13px;"
                    name="title" /></div>
        </div>
        <div><input class="form-control float-end" type="number"
                style="width: 364px;padding: 0px 0px 0px 0px;padding-top: 2px;margin-right: 10px;margin-top: 10px;font-size: 12px;height: 29px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;"
                name="title" /><label class="form-label float-start"
                style="font-size: 22px;width: 227px;height: 28.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: -34px;margin-bottom: 15px;">Available
                Quantity</label></div>
        <div><input class="form-control float-end" type="number"
                style="width: 364px;padding: 0px 0px 0px 0px;padding-top: 2px;margin-right: 10px;margin-top: 10px;font-size: 12px;height: 29px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;"
                name="title" /><label class="form-label float-start"
                style="font-size: 22px;width: 227px;height: 28.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: -30px;margin-right: 3px;margin-bottom: 8px;">Sold
                Quantity</label></div>
        <div><label class="form-label float-start"
                style="font-size: 22px;width: 128px;height: 29.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: 72px;margin-left: -186px;margin-right: -1px;">Description</label><input
                class="form-control float-end" type="file"
                style="width: 364px;padding: 0px 0px 0px 0px;padding-top: 2px;margin-right: 9px;margin-top: 15px;font-size: 12px;height: 29px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;background: rgb(193,196,175);"
                name="title" /></div>
        <div><label class="form-label float-start"
                style="font-size: 22px;width: 65px;height: 14.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: 14px;margin-left: 66px;margin-right: 8px;">Image</label><textarea
                class="form-control float-end"
                style="overflow-y: scroll;width: 364px;height: 159px;margin-top: 20px;margin-right: 10px;padding: 0px 0px 0px 0px;padding-top: 2px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;"></textarea>
        </div><button class="btn btn-primary float-end" type="button"
            style="height: 45px;margin-top: 210px;margin-right: -137px;background: rgb(55,59,47);">Add Book</button>
    </form>
</section>

<?php require APPROOT . '/views/includes/adminfooter.php';  ?>