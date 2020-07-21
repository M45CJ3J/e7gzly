<?php  require_once '../private/main_header.php'; ?>


<div class="site-section py-5 home-intro">
  <div class="container ">
    <div class="row ">
      <div class="col-12">
        <h3 class="text-center font-weight-bold text-capitalize">Password Recovery</h3>
        <form id="forget_pass_form" class="d-block mx-auto w-50 pb-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="custom-control custom-radio">
            <input type="radio" id="by_email" checked name="type" value="1" class="custom-control-input">
            <label class="custom-control-label" for="by_email">via Email</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" id="by_phone" name="type" value="2" class="custom-control-input">
            <label class="custom-control-label" for="by_phone">via Phone</label>
          </div>
          <div id="email_cont" class="form-group">
            <label for="email">Email</label>
            <input class="form-control is-valid"  name="email" id="email" placeholder="Email" type="email" >
            <div id="mail_feedback" class=""></div>
          </div>
          <div id="phone_cont" class="form-group">
            <label for="phone">Phone</label>
            <input class="form-control is-valid" name="phone" placeholder="Phone" type="text" id="phone" minlength="8" maxlength="11" >
            <div id="phone_feedback" class=""></div>
          </div>

          <button  name="form_btn" class="btn btn-primary form-btn d-block mx-auto px-5" type="submit">Send Code</button>
        </form>
      </div>
    </div>
  </div>




<?php require_once '../private/main_footer.php'; ?>
