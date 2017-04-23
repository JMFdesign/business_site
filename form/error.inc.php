<style type="text/css">

	@import url('http://www.memoriesbyjmf.com/nateshonor/wp-content/themes/business-site-jessica-arnieri-hernandez/stylesheets/normalize.css');
	@import url('http://www.memoriesbyjmf.com/nateshonor/wp-content/themes/business-site-jessica-arnieri-hernandez/stylesheets/skeleton.css');

	/* --- Fonts --- */

	@font-face {
	    font-family: 'amatic';
	    src: url('fonts/amatic.ttf') format('truetype');
	}

	@font-face {
	    font-family: 'geo';
	    src: url('fonts/geo.ttf') format('truetype');
	}

	@font-face {
	    font-family: 'hugs';
	    src: url('fonts/hugs.ttf') format('truetype');
	}

	/* --- General Formatting --- */

	*{
		color: #000000;
		font-size: 14px;
		line-height: 16px;
	}

	html {
	  width: 100vw;
	}

	#container {
		margin: 0px 0px 0px 400px;
		background-color: #ffffff;
		width: 1000px;
		-webkit-box-shadow: 0 0 45px 20px hsla(0, 0%, 33%, 0.30);
		box-shadow: 0 0 45px 20px hsla(0, 0%, 33%, 0.30);
	}

	.signup {
		width: 900px;
		height: 400px;
		padding: 20px;
		background-repeat: no-repeat;
		margin: auto;
		margin-top: 100px;
		background-color: darkgrey;
	}

	.bgrd {
		background-color: hsla(360, 100%, 100%, 0.8);
		padding: 10px;
		width: 570px;
		height: 360px;
		margin: auto;
		margin-top: 10px;
	}

	section {
		padding: 10px 20px;
	    margin: auto;
	    clear: both;
	    width: 525px;
	    background-color: hsla(243, 71%, 74%, 0.42);
	    font-family: 'geo', sans-serif;
	}

	h3 {
		padding: 10px;
		font-family: 'amatic', cursive;
		font-style: normal;
		font-size: 25px;
		text-align: center;
		color: #330066;
		text-shadow: 2px 2px hsla(46, 70%, 91%, 0.76);
	}

	p {
		padding: 10px 100px;
		margin-top: 10px;
		text-align: center;
		font-family: 'geo', sans-serif;
		font-size: 18px;
	    color:#333333;
	    display:block;
	    float: left; 
	}

	a img {
		margin-left: 215px;
	}

	#display_none {
		display: none;
	}

	#back {
		margin-left: 125px;
	}
</style>

<div class="signup">
	<div class="bgrd">
		<section>	
			<h3>Missing fields</h3>
		</section>
		
		<p>We're sorry, but it seems that you have not filled in all of the required fields.</p>
		<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

		<ul id="display_none">
		<?php
			for($i=0; $i<count($this->missing_required_fields); $i++){
				echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
			}
		?>
		</ul>

		<p id="back"><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
	</div>
</div>