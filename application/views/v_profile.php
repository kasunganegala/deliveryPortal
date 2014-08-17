<div id="page-wrapper" style="background-color: #ECF0F1">
	<?php
		/*print_r($company['basic_details']);
		echo '<br>';
		echo '<br>';
		print_r($company['address_details']);
		echo '<br>';
		echo '<br>';
		print_r($company['contact_details']);
		echo '<br>';
		echo '<br>';
		print_r($company['email_details']);
		
		/*echo $company['basic_details']['id'];
		echo '<br>';
		echo $company['basic_details']['company_name'];
		echo '<br>';
		echo $company['basic_details']['profile_picture'];
		echo '<br>';
		echo $company['basic_details']['description'];
		echo '<br>';
		echo $company['basic_details']['registered_dateandtime'];
		*/
	?>
	<div class="col-md-12">
		<div class="" style=" margin-top: 30px; margin-left: 10px; position: fixed;">
			<?php
				if($company['basic_details']['profile_picture']!=null){
					echo '<img style="margin-bottom:10px;" width="250px" class="" src="'.base_url().'images/profile_pictures/'.$company['basic_details']['profile_picture'].'">';
				}else{
					echo '<img style="margin-bottom:10px;" width="250px" class="" src="'.base_url().'images/profile_pictures/default.jpg" >';
				}

				if($company['basic_details']['id']!=$this->session->userdata('company_id')){
					echo '<a class="btn btn-block btn-embossed btn-danger">Make report</a>';
					echo '<a class="btn btn-block btn-embossed btn-info">Make delivery request</a>';
				}else{
					echo '<a class="btn btn-block btn-embossed btn-danger">Submit report</a>';
					echo '<a class="btn btn-block btn-embossed btn-info">Make delivery request</a>';
				}
			?>
		</div>
		<div class="col-md-8" style="margin-left: 300px; margin-top: 30px; background-color: #FFFFFF; -webkit-border-radius: 5px">
			<div class="h3 text-center">
				<?php echo $company['basic_details']['company_name']; ?>
			</div>
			<hr />
			<div style="margin-top: 25px">
				<label>
					<b>Company id : </b><?php echo $company['basic_details']['id']; ?>
				</label>
				<br />
				<label>
					<b>Registerd on : </b><?php echo $company['basic_details']['registered_dateandtime']; ?>
				</label>
				<br />
				<label>
					<b>Description : </b><?php echo $company['basic_details']['description']; ?>
				</label>
			</div>
		</div>
	</div>
	.
</div>
