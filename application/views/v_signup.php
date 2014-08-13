<div class="container">
	<div class="col-md-4 col-md-offset-4 breadcrumb">
		<div class="col-md-12" style="margin-bottom: 25px">
		<div class="h4 text-black text-center">
			<b>Signup</b>
		</div>
		<hr />
		<br />
		<?php
			$formattributes = array('role' => 'form', 'enctype'=>'multipart/form-data' );
			echo form_open('signup/validate/',$formattributes);
		?>
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Conpany name" />
				<span class="input-icon glyphicon glyphicon-tower"></span>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Username" />
				<span class="input-icon glyphicon glyphicon-user"></span>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Email" />
				<span class="input-icon glyphicon glyphicon-envelope"></span>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Password" />
				<span class="input-icon fui-lock"></span>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Retype password" />
				<span class="input-icon fui-lock"></span>
			</div>
			<input type="submit" name="asd"  class="btn btn-primary btn-block" value="SIGN UP">
		<?php
			form_close();
		?>
		<div class=" text-center">
			<a class="btn btn-link" href="#">
				Already have an account ?
				
			</a>
		</div>
		</div>
	</div>
</div>