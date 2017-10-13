<div class="box">
    @if(session()->has('message.level'))
    <div class="isa_success">
     <i class="fa fa-check"></i>
    {!! session('message.content') !!}
    </div>
@endif

<br>
<form class="edit-profile-form light-inputs" enctype="multipart/form-data" method="post" action=" {{ url('saveprofile') }} ">
    {{ csrf_field() }} 
							<h4 id="accountdetails">Account Details</h4>
							
							<input type="hidden" name="userid" value="{{ Auth::User()->id }}" />
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<div class="input-group">
						<span class="input-group-addon">First Name * :</span>
							<input placeholder="firstname" name="first_name" value="{{ $profile->first_name }}" type="text">
</div> <!-- end .input-group -->
									</div> <!-- end .form-group -->
								</div> <!-- end .col-sm-6 -->
								<div class="col-sm-6">
								<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">Last Name * :</span>
											<input placeholder="lastname" name="last_name" value="{{ $profile->last_name }}" type="text">

										</div> <!-- end .input-group -->
									</div> <!-- end .form-group -->
								</div> <!-- end .col-sm-6 -->
							</div> <!-- end .row -->
						
       
							<div class="form-group">
								<div class="input-group">
							<span class="input-group-addon">Current Password (leave blank to leave unchanged) :</span>
									<input placeholder="Current Password" name="oldpwd" type="password">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">New Password :</span>
									<input placeholder="New Password" name="newpwd" type="password">

								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->

							<div class="submit"><button type="submit" class="button" name="basic" value="basic">Save Changes</button></div>
						</form>
						<hr>
<h4>Profile Picture</h4>
<form class="edit-profile-form light-inputs" enctype="multipart/form-data" method="post" action=" {{ url('saveprofile') }}" files="true">
 {{ csrf_field() }} 
<div class="col-sm-6">
<div class="form-group">
								<div class="input-group">
	<input placeholder="" name="user_avatar" type="file"> 

								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
</div>
<div class="col-sm-6">
<div class="form-group">
								<div class="input-group">
<img src=" {{ url('/public/uploads/avatar/'.$profile->user_avatar) }} " alt="Upload Your Profile Picture Here.." width="150px" height="150px">
</div>
</div>
</div>
<div class="submit"><button type="submit" class="button">Upload</button></div>

</form>
	<hr>					<form class="edit-profile-form light-inputs" method="post" action="{{ url('saveprofile') }}">
	    {{ csrf_field() }} 
							<h4>Social Login Accounts<small>Your account is connected to the following social login providers. <!--<a href="">Add more...</a>--></small></h4>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Facebook username (optional) :</span>
									<input placeholder="angelbi" name="fbname" value="{{ $profile->fbname }}" type="text">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Twitter username (optional) :</span>
									<input placeholder="angelbi" name="twittername" value="{{ $profile->twittername }}" type="text">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Googleplus username (optional) :</span>
									<input placeholder="e.g yournamecompany" name="gplusname" value="{{ $profile->gplusname }}" type="text">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
												<hr>
						
							<h4 id="billaddress">Billing Address</h4>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">First Name * :</span>
											<input placeholder="e.g Bi" name="first_name" value="{{ $profile->first_name }}" type="text">
										</div> <!-- end .input-group -->
									</div> <!-- end .form-group -->
								</div> <!-- end .col-sm-6 -->
								<div class="col-sm-6">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">Last Name * :</span>
											<input placeholder="e.g Angel" name="last_name" value="{{ $profile->last_name }}" type="text">
										</div> <!-- end .input-group -->
									</div> <!-- end .form-group -->
								</div> <!-- end .col-sm-6 -->
								<div class="col-sm-6">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">Email Address * :</span>
											<input placeholder="e.g yourcompany@gmail.com" name="bemail" value="user5@gmail.com" type="email">
										</div> <!-- end .input-group -->
									</div> <!-- end .form-group -->
								</div> <!-- end .col-sm-6 -->
								<div class="col-sm-6">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">Phone Number * :</span>
											<input placeholder="e.g +84 0939793979" name="phone_number" value="{{ $profile->phone_number }}" type="tel">
										</div> <!-- end .input-group -->
									</div> <!-- end .form-group -->
								</div> <!-- end .col-sm-6 -->
							</div> <!-- end .row -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Company Name (optional) :</span>
									<input placeholder="e.g Your name company" name="company_name" value="{{ $profile->company_name }}" type="text">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Address * :</span>
									<input placeholder="e.g Street Address , Apartment , suite ,unit etc." name="address" value="{{ $profile->address }}" type="text">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">Town / City * :</span>
											<input placeholder="e.g NewYork" name="city" value="{{ $profile->city }}" type="text">
										</div> <!-- end .input-group -->
									</div> <!-- end .form-group -->

								</div> <!-- end .col-sm-4 -->
								<div class="col-sm-4">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">Country * :</span>
											<input placeholder="e.g USA" name="country" value="{{ $profile->country }}" type="text">
										</div> <!-- end .input-group -->
									</div> <!-- end .form-group -->
								</div> <!-- end .col-sm-4 -->
								<div class="col-sm-4">
									<div class="form-group">
										<div class="input-group">
							<span class="input-group-addon">Postcode * :</span>
				<input placeholder="e.g 10001" name="zipcode" value="{{ $profile->zipcode }}" type="text">
										</div> <!-- end .input-group -->
									</div> <!-- end .form-group -->
								</div> <!-- end .col-sm-4 -->
							</div> <!-- end .row -->
							<div class="submit"><button type="submit" class="button" name="social" value="save">Save Changes</button></div>
						</form>
					</div>