<!DOCTYPE html>

<html>

<head>

<title> mindaz laravel site </title>
<link href=" {{ asset('css/main.css') }}" rel="stylesheet" type="text/css" >



</head>

	<body>

		<div id="wrapper">

			<div id="header">
					<h2>mindazub PHP Laravel site</h2>
			</div>

					@include('layout.navigation')

			<div id="content">
					<p>LOGIN PAGE</p>

					<form  action="#" method='POST'>
						<div id="registravimas">
							<table>
								<tr>
								Username:<br />
								</tr>
								<tr><input type='text' name='username'><br />
								</tr>
								
								<tr>
								Password:<br />
								</tr> 
								<tr><input type='password' name='password'><br />
								</tr>
								
								<br />
								<tr> <input type='submit' value='Login'><br />
								</tr>
								<tr>
							<br />
							Not a member? <a href="{{ URL::route('register-me')}}">Register Here!<a/>
							</tr>
							</table>
						</div>
					</form>

			</div> <!-- end #content -->


					

					@include('layout.footer')

		</div> <!-- End #wrapper -->

	</body>

</html>
