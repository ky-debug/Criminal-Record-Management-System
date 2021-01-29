    <html>
        <head>
            <style>
                body {
			padding: 2vw;
			height: 100vh;
			margin:0;
			padding:0;
			}
                .bg{
                background-image:url("imgs/adminadd.jpeg");
                height:1000px;
                background-position:center;
                background-repeat:no-repeat;
                background-size:cover;
                /* margin-top:-30;
                        margin-left:-20; */
                opacity:0.8;
               }

                #title{
                    background-color:Gray;
                    font-size:24px;
                    color:#E53935;

                    color:white;
                    margin-left:20px;

                    }

                    ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: transparent;
			 
			}
			
			li {
				float: right;
			}
			
			#titlehead{
				float: left;
			}

			li a {
				display: block;
				color: white;
				font-size:20px;
				text-align: center;
				padding: 16px 20px;
				margin-top:10px;
				text-decoration: none;
			}

			li a:hover:not(.active) {
				background-color:  #cccccc;
				color:black;
			}


                .grid-container {
                    display: grid;
                    grid-template-columns: auto auto;
                    grid-gap: 20px;
                    padding: 10px;
                }

                .btn{
                    background-color: white;
                    border: none;
                    color: #424242;
                    padding-top:7px;
                    text-align: center;
                    margin-bottom:0px;

                    font-size: 20px;
                }

                .btn:hover{
                    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
                }

                .cont{
                    background-position:center;
                     background: rgb(0, 0, 0); 
                    background: rgba(0, 0, 0, 0.5); 
                    color: #f1f1f1;
                    background-size:cover;
                    height:1000px;
                }

            </style>
        </head>

        <body>

            <div class="bg">
            <div class="cont">
            <ul>
            <!--<li id="titlehead"><p id="title"style="font-size:25px;" href="home.php">CRIMINAL RECORD MANAGEMENT SYSTEM</p></li>-->
			<!-- <li id="titlehead"style="text-decoration: underline;text-decoration-color:white;"><p id="title" style="font-size:30px;" ><a href="admin_home.php">ADMIN HOME</a></p></li> -->
            <li id="titlehead" style="font-style:italic; text-decoration: underline;text-decoration-color:white;">
                    <a href="admin_login.php">Log Out</a>
                </li>
			<li><a href="admin_login.php">Admin</a></li>
			<li><a href="officer_login.php">User</a></li>
			<li><a href="home.php">Home</a></li>
		    </ul>

            <h2 style="font-style:italic; font-size:35px;padding-left:30px;">Admin Dashboard</h2>


            <div class="grid-container">
                <div style="text-align:right;"> <img src="imgs\policemini.png">  </div>
                <div ><button type="button" class="btn" onclick="location.href='add_officer.php'"style="background-color:transparent;color:white;">Add Officer Record</button></div>
<!--
                <div style="text-align:right;"><img src="imgs\adminmini.png"></div>  
                <div ><button type="button" class="btn" onclick="location.href='add_admin.php'"style="background-color:transparent;color:white;">Add Admin</button></div> 
-->
                <div style="text-align:left;"> <img src="imgs/cell.jpg">  </div>
                <div ><button type="button" class="btn" onclick="location.href='add_jail_record.php'"style="background-color:transparent;color:white;">Add Jail Record</button></div>
                <div style="text-align:left;"> <img src="imgs\criminalmini.png"></div>
                <div ><button type="button" class="btn" onclick="location.href='add_crime_record.php'"style="background-color:transparent;color:white;">Add Crime Record</button></div>
                <div style="text-align:left;"> <img src="imgs/c1.jpg"></div>
                
                <div ><button type="button" class="btn" onclick="location.href='add_court_record.php'"style="background-color:transparent;color:white;">Add Court Record</button></div>
                <div style="text-align:left;"><img src="imgs\searchmini.png"></div>
                
                <div ><button type="button" class="btn" onclick="location.href='search_home.php'"style="background-color:transparent;color:white;">Search Records</button></div>
                

            </div>

            </div>
            </div>


        </body>





    </html>
