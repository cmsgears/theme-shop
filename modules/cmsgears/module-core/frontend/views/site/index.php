<?php
use yii\captcha\Captcha;

$coreProperties 		= $this->context->getCoreProperties();
$this->title 			= $coreProperties->getSiteTitle();
$this->params['desc']	= "The basic template with basic theme for CMSGears.";
$this->params['meta']	= "cmsgears, template, basic, theme";
?>
<section class="module module-basic" id="module-banner">
	<div class="module-bkg-parallax"> </div>
	<div class="texture texture1"></div>
	<div class="module-wrap-content valign-center">
		<div class="module-content">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do....
		</div>	
	</div>
</section>

<section class="module module-basic" id="module-about">
	<div class="module-wrap-content">
		<h2 class="module-header">About Us</h2>
		<div class="module-content clearfix">
			<div class="row">
				<div class="col2 container shadow">
					<h4 class="title">Title 1</h4>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
				<div class="col2 container shadow">
					<h4 class="title">Title 2</h4>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col3 container shadow">
					<h4 class="title">Title 3</h4>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
				<div class="col3 container shadow">
					<h4 class="title">Title 4</h4>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
				<div class="col3 container shadow">
					<h4 class="title">Title 5</h4>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
		</div>	
	</div>
</section>

<section class="module module-basic" id="module-contact">
	<div class="module-bkg"> </div>
	<div class="module-wrap-content valign-center">
		<h2 class="module-header">Write To Us</h2>
		<div class="module-content clearfix">
			<div class="col3x2 clearfix">
				<form class="frm-ajax" id="frm-contact" action="<?php echo Yii::$app->urlManager->createAbsoluteUrl("apix/contact"); ?>" method="post">
					<div class="max-area-cover frm-spinner"><div class="valign-center fa fa-3x fa-spinner fa-spin"></div></div>
					<div class="row clearfix">
						<div class="col2">
							<div class="frm-icon-field">
								<span class="wrap-icon fa fa-user"></span><input type="text" name="Contact[name]" placeholder="Name *">
							</div>
							<span class="error" formError="name"></span>
						</div>
						<div class="col2">
							<div class="frm-icon-field">
								<span class="wrap-icon fa fa-at"></span><input class="fa-field-email" type="text" name="Contact[email]" placeholder="Email *">
							</div>
							<span class="error" formError="email"></span>
						</div>
					</div>
					<div class="row clearfix">
						<div class="frm-icon-field">
							<span class="wrap-icon fa fa-briefcase"></span><input type="text" name="Contact[subject]" placeholder="Subject *">
						</div>
						<span class="error" formError="subject"></span>
					</div>
					<div class="row clearfix">
						<div class="frm-icon-field">
							<span class="wrap-icon fa fa-folder icon-textarea"></span><textarea name="Contact[message]" placeholder="Message *"></textarea>
						</div>	
						<span class="error" formError="message"></span>
					</div>
					<div class="row clearfix">
						<?= Captcha::widget( [ 'name' => 'Contact[captcha]', 'captchaAction' =>  '/cmgforms/site/captcha' ] ); ?>	
						<span class="error" formError="captcha"></span>
					</div>
					<div class="row clearfix">
						<input type="submit" name="submit" value="Submit">
					</div>
					<div class="row clearfix">
						<div class="frm-message warning"></div>
					</div>	
				</form>
			</div>
			<div class="col3">
				<h6>Address</h6>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
		</div>
	</div>
</section>