<div id="sidebar">
<!-- <h3>Login</h3> -->
	<br>
	<form  action='index_success.php' method='POST'>
	<div id="loginas">
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
			<tr> <input type='submit' value='Log in'><br />
			</tr>
			<tr>
		<br />
		<a href="{{ URL::route('register-me')}}">Register Here!<a/>
		</tr>
		</table>
	</div>
</form>

<h3>Links</h3>
	<li><a href="http://www.delfi.lt">DELFI</a></li>
	<li><a href="http://www.gsmarena.com">GSMARENA</a></li>
	<li><a href="https://www.youtube.com/feed/subscriptions">Youtube</a></li>
	<li><a href="http://www.smashingmagazine.com/">Smashing Magazine</a></li>
	<li><a href="http://www.raywenderlich.com/">Ray Wendelich</a></li>
	

</div> <!-- end #sidebar -->
