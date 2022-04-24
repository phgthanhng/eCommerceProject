<?php require APPROOT . '/views/includes/header.php';  ?>

    <div class="container col-8 my-5 br-2 rounded" style="background: #E8F0F9">
        <div class="row g-3">
            <div class="col-4 order-md-last">
                <h4 class="d-flex justify-content-between align-item-center">
                    <span class="text-muted">Your Cart</span>
                    <span class="badge bg-secondary rounded-pill"><?php echo getCartCount() ?></span>
                </h4>
                <ul class="list-group">
                    <?php foreach ($data['items'] as $item) {
                    
                    echo '<li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h6>'.$item->bookname.'</h6>
                            <h6> $'.$item->retailprice.' CAD X '.$item->quantity.' QTY </h6>
                        </div>
                     
                    </li>';
                    }
                    ?>
                 
                </ul>
            </div>
            <div class="col-8">
                <h4>Billing Address</h4>
                <form>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="firstname">First Name</label>
                            <input type="text" id="firstname" class="form-control" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="lastname">Last name</label>
                            <input type="text" id="lastname" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="from-label" for="username">Username</label>
                            <div class="input-group">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="usrname" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="email">Email
                            </label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="address">Address </label>
                            <input type="text" id="address" class="form-control" required>
                        </div>

                        <div class="col-4">
                            <label class="form-label" for="state">Province </label>
                            <select class="form-select" id="state">
                                <option>Quebec</option>
                                <option>Ontario</option>
                                <option>Alberta</option>
                                <option>British Columbia</option>
                                <option>Manitoba</option>
                                <option>Nova Scotia</option>
                                <option>Prince Edward Island</option>
                                <option>Saskatchewan</option>
                                <option>New Brunswick</option>
                                <option>Newfoundland and Labrador</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label class="form-label" for="zip">Zip </label>
                            <input type="text" id="zip" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label">Shipping address is the same as my billing address</label>
                    </div>
                    <hr>
                    <h4>Payment</h4>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="paymentMethod" checked>
                        <label class="form-check-label">Credit Card</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="paymentMethod">
                        <label class="form-check-label">Debit Card</label>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="cardname">Name on Card </label>
                            <input type="text" id="cardname" class="form-control" required>
                            <small class="text-muted">Full name as displayed on card</small>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="creditcard">Card Number </label>
                            <input type="text" id="creditcard" class="form-control" required>
                        </div>
                        <div class="col-3">
                            <label class="form-label" for="expiration">Expiration </label>
                            <input type="text" id="expiration" class="form-control" required>
                        </div>
                        <div class="col-3">
                            <label class="form-label" for="cvv">CVV </label>
                            <input type="text" id="cvv" class="form-control" required>
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-block mb-4" name="checkoutBtn">PLACE ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <?php require APPROOT . '/views/includes/footer.php';  ?>