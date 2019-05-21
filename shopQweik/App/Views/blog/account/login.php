<div class="container">
	<div class="row">
		<div class="col-sm-6 col-12">
			<div class="card mt-5">
			    <div class="login">
    				<form action="<?php echo url('customer/account/login/submit'); ?>" class="form" method="POST">
    				<h5> هل لديك حساب على موقعنا؟ قم بستجيل الدخول!</h5>
    				<div id="form-results"></div>
    				
    				  <div class="form-group">
    					<label for="email">البريد الألكتروني *</label>
    					<input type="email" name="email" class="form-control" id="email">
    				  </div>
    				  <div class="form-group">
    					<label for="password">كلمة المرور *</label>
    					<input type="password" name="password" class="form-control" id="password">
    				  </div>
    				  <div class="form-check">
    					<input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
    					<label class="form-check-label" for="exampleCheck1">حفظ تسجيل الدخول</label> <a href="<?php echo url('/customer/account/forgotpassword'); ?>" class="f-left">هل نسيت كلمة المرور؟</a>
    				  </div>
    				  <input type="button" class="osh-btn button submit-btn" value="الدخول">
    				</form>
    			</div>
			</div>
		</div>
		
		<div class="col-sm-6 col-12">
			<div class="card mt-5 mb-3">
			    <div class="register">
    				<form action="<?php echo url('/account/create/submit'); ?>" class="form" method="POST">
    				<h5>عميل جديد</h5>	
    				
    				<div id="form-results"></div>
    				<?php $token = md5(uniqid(rand(), TRUE));
    					$_SESSION['token'] = $token;?>
    				<input type="hidden" name="token" value="<?=$_SESSION['token']?>" />
    				  <div class="form-group">
    					<label for="first_name">الأسم الأول *</label>
    					<input type="text" name="first_name" class="form-control" id="first_name">
    				  </div>
    				  <div class="form-group">
    					<label for="last_name">أسم العائلة *</label>
    					<input type="text" name="last_name"  class="form-control" id="last_name">
    				  </div>
    				  <div class="form-group">
    					<label for="email">البريد الألكتروني *</label>
    					<input type="email" name="email"  class="form-control" id="email">
    				  </div>
    				  <div class="form-group">
    					<label for="passwordSignup">كلمة المرور *</label>
    					<input type="password" name="password"  class="form-control" id="passwordSignup">
    				  </div>
    				  <div class="form-group">
    					<label for="confirm_password">تأكيد كلمة المرور *</label>
    					<input type="password" name="confirm_password"  class="form-control" id="confirm_password">
    				  </div>
    				  
    				  <div class="form-group mobile">
    					<div class="col-8"><input type="text" name="mobile_number" class="form-control" id="mobile_number"></div>
    					<div class="col-4"><input disabled type="text" name="mobile_country_code" class="form-control" dir="ltr" value="00966" id="mobile_country_code" maxlength="6" size="6"></div>
    				  </div>
    				  
    				  <div class="form-check">
    					<input type="checkbox" name="is_subscribed" class="form-check-input" value="1" id="is_subscribed">
    					<label class="form-check-label" for="is_subscribed">الأشتراك في النشرة البريدية</label>
    				  </div>
    				  
    				  <input type="button" class="osh-btn button submit-btn" value="تسجيل حساب جديد">
                    </form>
                </div>
			</div>
		</div>
		
		
	</div>

</div>