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
					ABOUT PAGE
			</div> <!-- end #content -->


					@include('layout.sidebar')

					@include('layout.footer')

		</div> <!-- End #wrapper -->

	</body>

</html>
