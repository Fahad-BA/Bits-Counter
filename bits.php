<html>
	<head>
		<title> Twitch Bits Counter.</title>
		<meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<style>

body {
    background-color: #eae6f4;
    color: black;
    margin: auto;
    margin-top: -100px;
    position: fixed;
    top: 50%;
    left: 0;
    width: 100%;
    font-size: 1.17em;
    font-weight: bolder;
}



a, a:hover{ color:black; }

.Don, .Don:hover{
    color:black;
    text-decoration: none;
}


</style>
	</head>
	<body><div class="content"><b>
	    <center>

			<div class="container">
		    <img src="https://fhidan.com/img/twtch2.png"><br><br>
		    <h2>Twitch Bits Counter.</h2><br>
				Enter how many bits do you want to copy.<br>

		    <form method="post" action="bits.php">
		        <input name="total" type="number" class="form-control" style="width: 150px; display: inline" placeholder="How many bits?"/>
<select name="bits" class="form-control" style="width: 150px; display: inline">
							<option value="Cheer1">Cheer</option>
							<option value="PogChamp1">PogChamp</option>
							<option value="ShowLove1">ShowLove</option>
							<option value="FrankerZ1">FrankerZ</option>
							<option value="VoHiYo1">VoHiYo</option>
							<option value="Party1">Party</option>
							<option value="SeemsGood1">SeemsGood</option>
							<option value="Kreygasm1">Kreygasm</option>

</select>

<input name="submit" type="submit" value="Submit" class="btn btn-primary" />
		    </form>
		</div>


		<script>

		function myFunction() {
		var copyText = document.getElementById("cheers");
		copyText.select();
		copyText.setSelectionRange(0, 499)
		document.execCommand("copy");
		alert("Copied :)");
		}

		</script>

<?php

            if(isset($_POST['submit']))
				{
				if(is_numeric($_POST['total']) && $_POST['total'] <= 500)
					{
						echo "<b>here is your ".$_POST['total']." bit/s.</b><input class=\"form-control\" style=\"width: 30%; \" id=\"cheers\" type=\"textarea\" value=\"";
						for ($i=1; $i<=$_POST['total']; $i++)
						{ echo $_POST['bits']." "; }
						echo "\"<br>";
						echo " <button onclick=\"myFunction()\" class=\"btn btn-primary\" >Copy!</button>";
		} else if($_POST['total'] > 500) { echo "<b>You've Reached Character Limit of 500.</b>"; }
		else { echo '<font color="red"><b>Enter how many bits do you wanna send.</font></b><br>'; }
	    			}

		?>



		<footer>
		    i spent about 3 minutes trying to send 93 bits until my friend stop streaming, so i made this page.
		    <br>follow me on twitter <a href=https://twitter.com/Dopesist>@Dopesist</a> :)<br>

<br><a href="https://www.buymeacoffee.com/Dopesist" class="Don"><img src="https://fhidan.com/img/SAR.png"> | Buy me a coffee.</a></footer>

        </b></div>
	</body>
</html>