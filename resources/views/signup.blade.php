@extends('layouts.main')
@section('content')
    

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4  col-sm-6 circle green">
			<!-- <h1 style="margin-top: 80px;margin-left: 120px">ljsagfh</h1>
			<p style="text-shadow: 0 0 3px blue">kasjfgasjg</p> -->
		</div>
		<div class="col-md-4 col-sm-6 red">

			<p align="center">Sign Up</p>
		
			
			<form method="post" class="form-group" target="" action="/register">
				<label>First name</label>
				<input type="text" name="fname" class="form-control">

				<label>Last name</label>
				<input type="text" name="lname" class="form-control">

				<label>email</label>
				<input type="email" name="email" class="form-control">

				<label>Contact no</label>
				<input type="text" name="contact" class="form-control">
			
				<label>User Name</label>
				<input type="text" name="username" class="form-control">

				<label>Password</label>
				<input type="password" name="password" class="form-control">

				

				<br>
		<input type="submit" name="register" value="submit" class="btn btn-danger ">

		<input type="reset" name="" value="reset" class="btn btn-info">


	</form>
		</div>
		
		<div class="col-md-4  col-sm-12 red"></div>
		</div>



	</div>
@endsection