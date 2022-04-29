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
                    
                    echo '
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                        <h3 style="font-weight:bold">PRICE:</h3>
                        <p> GST (5%): $ '.$data['gst'].'<br>
                        QST (9.975%): $ '.$data['qst'].'<br>
                        Sales Taxes (14.975%): $ '.$data['salesTaxes'].'<br>
                        Total Price: $ '.$data['finalPrice'].' CAD </p>
                        </div>
                     </li>';
             ?>
                </ul>
            </div>
            <div class="col-8">
                <h4>Shipping Address</h4>
                <form method="post" action="">
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="firstname">First Name</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="lastname">Last name</label>
                            <input type="text" name= "lastname" id="lastname" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="email">Email
                            </label>
                            <input type="email" id="email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="address">Address </label>
                            <input type="text" id="address" name="address" class="form-control" required>
                        </div>

                        <div class="col-4">
                            <label class="form-label" for="province">Province </label>
                            <select class="form-select" id="province" name="province">
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
                        <div class="col-4">
                            <label class="form-label" for="postalcode">Postal Code </label>
                            <input type="text" id="postalcode" name="postalcode" class="form-control">
                        </div>
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
                            <input type="text" name="cardname" id="cardname" class="form-control" required>
                            <small class="text-muted">Full name as displayed on card</small>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="cardnumber">Card Number </label>
                            <input type="text" name="cardnumber" id="cardnumber" class="form-control" required>
                        </div>
                        <div class="col-3">
                            <label class="form-label" for="expiration">Expiration </label>
                            <input type="text" name="expiration" id="expiration" class="form-control" required>
                        </div>
                        <div class="col-3">
                            <label class="form-label" for="cvv">CVV </label>
                            <input type="password" name="cvv" id="cvv" class="form-control" required min="3" max="3">
                        </div>
                    </div>
                    <hr>     
                  
                    <button type="submit" class="btn btn-primary btn-block mb-4" name="orderButton">PLACE ORDER</button>
                    
                </form>
            </div>
        </div>
    </div>
    <?php require APPROOT . '/views/includes/footer.php';  ?>

    