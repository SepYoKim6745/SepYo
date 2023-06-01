<div class="container">
      <div class="col-12">
        <br>
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" method="post" action="member_insert.php" novalidate="">
            <div class="col-sm-5">
              <label for="name_form" class="form-label">이름</label>
              <input type="text" class="form-control" id="name_form" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <br>
            <div class="col-12">
              <label for="username_form" class="form-label">Username</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="username_form" placeholder="Username" required="">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>
            <br>
            <div class="col-12">
              <label for="pass_form" class="form-label">password</label>
              <input type="password" class="form-control" id="pass_form" placeholder="Apartment or suite">
            </div>
            <br>
            <div class="col-12">
              <label for="email_form" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email_form" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <br>
            <div class="col-12">
              <label for="address_form" class="form-label">Address</label>
              <input type="text" class="form-control" id="address_form" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <br>
            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" required="">
                <option>대한민국</option>
                <option>미국</option>
                <option>중국</option>
                <option>일본</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <br>
            <div class="col-md-4">
              <label for="belong" class="form-label">State</label>
              <select class="form-select" id="belong" required="">
                <option>한국기술교육대학교</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>