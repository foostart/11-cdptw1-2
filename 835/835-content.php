<div class="type-835">
  <div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Billing</h3>
                </div>
                <div class="panel-body">
                    <label>Invoice ID: 2016MM-ID</label>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <p>Payment Details </p>
                        <img class="img-responsive" src="images/accepted_c22e0.png" alt="">
                    </div>
                </div>
                <div class="panel-body">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label>CARD NUMBER</label>
                            <div class="input-group">
                                <input type="text" class="form-control"  placeholder="Valid Card Number" required autofocus data-stripe="number" />
                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label>EXPIRATION DATE</label>
                            <div class="input-group">
                                <input type="text" name="bday" class="form-control"  placeholder="MM" required data-stripe="exp_year" required data-stripe="exp_month" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>CV CODE</label>
                            <input type="password" class="form-control"  placeholder="CV" required data-stripe="cvc" />
                        </div>
                        <div class="form-group">
                            <label>COUPON CODE</label>
                            <input type="text" class="form-control" required data-stripe="couponCode"/>
                        </div> 
                        <div class="form-group">
                                 <button class="btn btn-success btn-lg btn-block" type="submit">
                            Submit Payment</button>                          
                        </div>      
                    </form>
                </div>  
            </div>
        </div>
    </div>
  </div>
</div>