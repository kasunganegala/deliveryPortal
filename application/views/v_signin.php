<div class="container">
	<div class="col-md-4 col-md-offset-4 breadcrumb">
		<div class="col-md-12" style="margin-bottom: 40px">
		<div class="h4 text-black text-center">
			<b>Signin</b>
		</div>
		<hr />
		<br />
		<?php
			$formattributes = array('role' => 'form', 'enctype'=>'multipart/form-data' );
			echo form_open('signin/validate/',$formattributes);
			
			if(form_error('useremail')!=null)
			echo '<div class="alert alert-danger">'.form_error('useremail').'</div>';
		?>
			<div class="form-group">
				<input type="text" class="form-control" name="useremail" placeholder="Username" value="<?php echo $this->input->post('useremail')?>" />
				<label class="input-icon fui-user"></label>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Password" />
				<label class="input-icon fui-lock"></label>
			</div>
			<input type="submit" name="asd"  class="btn btn-primary btn-block" value="SIGN IN">
			
		<?php
			form_close();
		?>
		<div class=" text-center">
			<a class="btn btn-link" href="#">
				Need an account ?
			</a>
		</div>
		</div>
	</div>
</div>