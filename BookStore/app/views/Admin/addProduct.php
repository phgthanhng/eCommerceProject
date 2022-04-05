<?php require APPROOT . '/views/includes/adminheader.php';  ?>

    <section class="text-center d-lg-flex flex-column justify-content-center align-content-center align-items-lg-center"
        style="min-height: 100vh;background: url(&quot;<?php echo URLROOT; ?>/img/admin_dashboard.jpg&quot;);margin: 0px;padding: 0px;">
        <h1 style="margin-top: 34px;">Add a book</h1>
        <form
            style="width: 600px;height: 720px;margin: 22px;margin-top: 7px;background: rgba(112,126,101,0.53);padding-top: 17px;padding-right: -6px;">
            <div></div><label class="form-label float-none"
                style="font-size: 22px;width: 188px;height: 26.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: 7px;">Title</label><input
                class="form-control float-end" type="text"
                style="width: 364px;padding: 0px 0px 0px 0px;padding-top: 2px;margin-right: 10px;margin-top: 9px;font-size: 12px;height: 29px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;"
                name="title"><label class="form-label float-none"
                style="font-size: 22px;width: 188px;height: 28.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: 10px;">ISBN</label><input
                class="form-control float-end" type="text"
                style="width: 364px;padding: 0px 0px 0px 0px;padding-top: 2px;margin-right: 10px;margin-top: 9px;font-size: 12px;height: 29px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;"
                name="title"><label class="form-label float-none"
                style="font-size: 22px;width: 188px;height: 28.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: 6px;">Author</label><input
                class="form-control float-end" type="text"
                style="width: 364px;padding: 0px 0px 0px 0px;padding-top: 2px;margin-right: 10px;margin-top: 9px;font-size: 12px;height: 29px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;"
                name="title"><label class="form-label float-none"
                style="font-size: 22px;width: 188px;height: 28.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: 5px;margin-bottom: 17px;">Publisher</label><input
                class="form-control float-end" type="text"
                style="width: 364px;padding: 0px 0px 0px 0px;padding-top: 2px;margin-right: 10px;margin-top: 9px;font-size: 12px;height: 29px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;"
                name="title"><label class="form-label float-start"
                style="font-size: 22px;width: 227px;height: 28.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: 7px;">Published
                Date</label><input class="form-control" type="date"
                style="width: 195px;height: 29px;margin-top: 9px;padding: 0px 0px 0px 0px;padding-left: 2px;padding-bottom: 2px;padding-right: 2px;padding-top: 2px;margin-right: 39px;margin-bottom: 19px;margin-left: -5px;text-align: center;"><label
                class="form-label float-start"
                style="font-size: 22px;width: 227px;height: 28.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: -1px;">Retail
                Price</label><input class="form-control float-end" type="number"
                style="width: 364px;padding: 0px 0px 0px 0px;padding-top: 2px;margin-right: 10px;margin-top: -34px;font-size: 12px;height: 29px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;margin-bottom: 13px;"
                name="title"><input class="form-control float-end" type="number"
                style="width: 364px;padding: 0px 0px 0px 0px;padding-top: 2px;margin-right: 10px;margin-top: 10px;font-size: 12px;height: 29px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;"
                name="title"><label class="form-label float-start"
                style="font-size: 22px;width: 227px;height: 28.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: -34px;margin-bottom: 15px;">Available
                Quantity</label><input class="form-control float-end" type="number"
                style="width: 364px;padding: 0px 0px 0px 0px;padding-top: 2px;margin-right: 10px;margin-top: 10px;font-size: 12px;height: 29px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;"
                name="title"><label class="form-label float-start"
                style="font-size: 22px;width: 227px;height: 28.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: -30px;margin-right: 3px;">Sold
                Quantity</label><label class="form-label float-start"
                style="font-size: 22px;width: 128px;height: 29.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: 72px;margin-left: -172px;">Description</label><label
                class="form-label float-start"
                style="font-size: 22px;width: 65px;height: 28.5px;color: rgb(0,0,0);font-weight: bold;text-align: center;margin-top: 22px;margin-left: -145px;margin-right: 8px;">Image</label><input
                class="form-control float-end" type="file"
                style="width: 364px;padding: 0px 0px 0px 0px;padding-top: 2px;margin-right: 9px;margin-top: 15px;font-size: 12px;height: 29px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;background: rgb(193,196,175);"
                name="title"><textarea class="form-control float-end"
                style="overflow-y: scroll;width: 364px;height: 159px;margin-top: 20px;margin-right: 10px;padding: 0px 0px 0px 0px;padding-top: 2px;padding-right: 2px;padding-bottom: 2px;padding-left: 2px;"></textarea><button
                class="btn btn-primary float-end" type="button"
                style="height: 45px;margin-top: 210px;margin-right: -137px;background: rgb(55,59,47);">Add
                product</button>
        </form>
    </section>
   
<?php require APPROOT . '/views/includes/adminfooter.php';  ?>
