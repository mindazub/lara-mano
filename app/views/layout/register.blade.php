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
					<p>REGISTER PAGE</p>
					
					<form  action="#" method='POST'>
						<div id="registravimas">
							<table>
								<tr>
								First Name:<br />
								</tr>
								<tr><input type='text' name='firstname'><br />
								</tr>
								<tr>
								Last Name:<br />
								</tr>
								<tr><input type='text' name='lastname'><br />
								</tr>
								<tr>
								Username:<br />
								</tr>
								<tr><input type='text' name='username'><br />
								</tr>
								<tr>
								Email:<br />
								</tr>
								<tr><input type='text' name='email'><br />
								</tr>
								<tr>
								Password:<br />
								</tr> 
								<tr><input type='password' name='password'><br />
								</tr>
								<tr>
								Password again:<br />
								</tr> 
								<tr><input type='password' name='password_again'><br />
								</tr>
								<br />
								<tr> <input type='submit' value='Register'><br />
								</tr>
								<tr>
							<br />
							Already registered? <a href="{{ URL::route('login-me')}}">Login Here!<a/>
							</tr>
							</table>
						</div>
					</form>






			</div> <!-- end #content -->


					

					@include('layout.footer')

		</div> <!-- End #wrapper -->

	</body>

</html>
