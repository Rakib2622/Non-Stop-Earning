@include('frontend.header')

<br><br><br>

<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-width">Checkout</h1></div>
          </div>
    </div>
    <!--End Page Title-->
    
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                <div class="customer-box returning-customer">
                    <h3><i class="icon anm anm-user-al"></i> Returning customer? <a href="#customer-login" id="customer" class="text-white text-decoration-underline" data-toggle="collapse">Click here to login</a></h3>
                    <div id="customer-login" class="collapse customer-content">
                        <div class="customer-info">
                            <p class="coupon-text">If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                            <form>
                                <div class="row">
                                    <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <label for="exampleInputEmail1">Email address <span class="required-f">*</span></label>
                                        <input type="email" class="no-margin" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <label for="exampleInputPassword1">Password <span class="required-f">*</span></label>
                                        <input type="password" id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-check width-100 margin-20px-bottom">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value=""> Remember me!
                                            </label>
                                            <a href="#" class="float-right">Forgot your password?</a>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                <div class="customer-box customer-coupon">
                    <h3 class="font-15 xs-font-13"><i class="icon anm anm-gift-l"></i> Have a coupon? <a href="#have-coupon" class="text-white text-decoration-underline" data-toggle="collapse">Click here to enter your code</a></h3>
                    <div id="have-coupon" class="collapse coupon-checkout-content">
                        <div class="discount-coupon">
                            <div id="coupon" class="coupon-dec tab-pane active">
                                <p class="margin-10px-bottom">Enter your coupon code if you have one.</p>
                                <label class="required get" for="coupon-code"><span class="required-f">*</span> Coupon</label>
                                <input id="coupon-code" required="" type="text" class="mb-3">
                                <button class="coupon-btn btn" type="submit">Apply Coupon</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row billing-fields">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
                <div class="create-ac-content bg-light-gray padding-20px-all">
                    <form>
                        <fieldset>
                            <h2 class="login-title mb-3">Billing details</h2>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-firstname">First Name <span class="required-f">*</span></label>
                                    <input name="firstname" value="" id="input-firstname" type="text">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-lastname">Last Name <span class="required-f">*</span></label>
                                    <input name="lastname" value="" id="input-lastname" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                    <input name="email" value="" id="input-email" type="email">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-telephone">Telephone <span class="required-f">*</span></label>
                                    <input name="telephone" value="" id="input-telephone" type="tel">
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                    <label for="input-company">Company</label>
                                    <input name="company" value="" id="input-company" type="text">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-address-1">Address <span class="required-f">*</span></label>
                                    <input name="address_1" value="" id="input-address-1" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                    <label for="input-address-2">Apartment <span class="required-f">*</span></label>
                                    <input name="address_2" value="" id="input-address-2" type="text">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-city">City <span class="required-f">*</span></label>
                                    <input name="city" value="" id="input-city" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-postcode">Post Code <span class="required-f">*</span></label>
                                    <input name="postcode" value="" id="input-postcode" type="text">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-country">Country <span class="required-f">*</span></label>
                                    <select name="country_id" id="input-country">
                                        <option value=""> --- Please Select --- </option>
                                        <option value="244">Aaland Islands</option>
                                        <option value="1">Afghanistan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-zone">Region / State <span class="required-f">*</span></label>
                                    <select name="zone_id" id="input-zone">
                                        <option value=""> --- Please Select --- </option>
                                        <option value="3513">Aberdeen</option>
                                        <option value="3514">Aberdeenshire</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                    <label for="input-shipping">Shipping Address</label>
                                    <div>
                                        <input type="radio" name="shipping" id="insideDhaka" value="50" onclick="updateShipping()">
                                        <label for="insideDhaka">Inside Dhaka</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="shipping" id="outsideDhaka" value="120" onclick="updateShipping()">
                                        <label for="outsideDhaka">Outside Dhaka</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                    </form>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
                <div class="order-box">
                    <div class="bg-light-gray padding-20px-all">
                        <h5 class="no-margin-top">Your Order</h5>
                        <div class="table-responsive-sm order-table">
                            <table class="bg-white table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th class="text-left">Product Name</th>
                                        <th>Price</th>
                                        <th>Size</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">Spike Jacket</td>
                                        <td>$99</td>
                                        <td>S</td>
                                        <td>1</td>
                                        <td>$99</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Argon Sweater</td>
                                        <td>$199</td>
                                        <td>M</td>
                                        <td>2</td>
                                        <td>$398</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Babydoll Bow Dress</td>
                                        <td>$299</td>
                                        <td>XL</td>
                                        <td>3</td>
                                        <td>$897</td>
                                    </tr>
                                </tbody>
                                <tfoot class="font-weight-600">
                                    <tr>
                                        <td colspan="4" class="text-right">Shipping</td>
                                        <td id="shipping-cost">$50.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right">Total</td>
                                        <td id="total-cost">$1392.00</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <a href="checkout.html" class="btn btn-primary btn-lg">Proceed to Checkout</a>
                    </div>
                    <hr>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.footer')

<script>
    function updateShipping() {
        const shippingRadios = document.getElementsByName('shipping');
        let shippingCost = 0;
        for (let i = 0; i < shippingRadios.length; i++) {
            if (shippingRadios[i].checked) {
                shippingCost = parseFloat(shippingRadios[i].value);
                break;
            }
        }
        
        const subtotal = 1392 - 50; // Fixed total minus initial shipping cost
        const totalCost = subtotal + shippingCost;
        
        document.getElementById('shipping-cost').textContent = `৳${shippingCost.toFixed(2)}`;
        document.getElementById('total-cost').textContent = `৳${totalCost.toFixed(2)}`;
    }
</script>