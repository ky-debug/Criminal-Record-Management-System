<html>
	<head>
		<style>
			.bg{
			background-image:url("imgs/homeimage.jpg");
			height:850px;
			background-position:center;
			background-repeat:no-repeat;
			background-size:cover;
		
		   }
			#title{
				background-color:transparent;
				font-size:24px;
				color:#E53935;
				color:black;
				margin-left:20px;
			}
				
			ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			}
			
			li {
				float: right;
			}
			
			#titlehead{
				float: left;
			}

			li a {
				display: block;
				color: black;
				font-size:20px;
				text-align: center;
				padding: 16px 20px;
				margin-top:10px;
				text-decoration: none;
			}

			li a:hover:not(.active) {
				background-color: #cccccc;
				color:black;
			}
			#home_img{
				padding-left:50px;
				padding-bottom:10px;
				
			}
			
			#bottom_posts{
				
				display: grid;
				grid-template-columns: auto auto auto;
				padding: 10px;
				margin-top:45%;
			
			}
			
			#img_title{
				
				display: grid;
				grid-template-columns: auto auto auto;
				padding: 10px;
			
			}
			
			#posts{
				padding: 20px;
				font-size: 30px;
				text-align: center;
				margin-top:45%;
			
			}
			
		</style>
	</head>
	
	<body class="bg">
		<div>
		<ul>
			<li id="titlehead"><p id="title"style="font-size:45px;" href="home.php">CRIMINAL RECORD MANAGEMENT SYSTEM</p></li>
			<li><a href="admin_login.php">Admin</a></li>
			<li><a href="officer_login.php">User</a></li>
			<li><a href="home.php">Home</a></li>
		</ul>
		</div>
		<b style="margin-left:100;font-size:25"> Welcome to the "Criminal Record Management Sytstem"</b><br><br>
		<p style="margin-left:100;font-size:25" id="f" >The system provides an easy way to enter and retrieve details about Criminals<br> and their whereabouts.  An Admin can update the information if any new<br> Officers,Courts,Jails,Crimes are added. Criminal information cab be viewed<br> and updated as per the requirements.
                </p>
		<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";

		$conn = new mysqli($servername, $username, $password);
	
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "CREATE DATABASE IF NOT EXISTS crimedb";
            if ($conn->query($sql) === TRUE) {
		$conn->close();
		}
		?>
	</body>
	
</html>
