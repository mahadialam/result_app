<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>5CMT-A2 Result</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome.min.css">
        <link rel="stylesheet" href="responsive.css">
        <title>5CMT-A2 Sylhet Polytechnic Institute</title>
    
	    <style type="text/css">
	    	.div_tbl{
	    		
	    	}

			 .tbl_pass {
				border-collapse: collapse;
				border: 1px solid #ffff;
				margin: 0 auto;
				font-size: 18px;
				
			}
			.tbl_pass th{
				padding: 5px;
				background: seagreen;
				text-align: center;
				color: #fff;
			}
			.tbl_pass td {
				padding: 10px;
				background: lightgray;
				text-align: center;
				color: green;
			}



			.tbl_fail {
				border-collapse: collapse;
				border: 1px solid #ffff;
				margin: 0 auto;
				font-size: 18px;
				
			}
			.tbl_fail th{
				padding: 5px;
				background: red;
				text-align: center;
				color: #fff;
			}
			.tbl_fail td {
				padding: 10px;
				background: lightgray;
				text-align: center;
				color: red;
			}
	    	

	    	.user_input .submit{
	    			outline: none;
	    			border: none;
	    	}
	        
	        .user_input .text{
		        	outline: none;
		         	width: 250px;  
		         	padding: 8px; 
		         	border: none; 
		         	border: solid #3333 1px; 
		         	border-radius: 5px;
		         }
	   
			.footersection {padding-top: 350px;}


			
	    </style>
	    

    </head>
    <body onload= "">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

	<div class="row">
		<header class="container">
			<div class="row">
				<div class="phpcoding">
					<div class="text-center">
					    <h3>6CMT-A2 Final Exam Result</h3>
					</div>

					<div class="text-center" >
					
						<p style="text-align: center; margin: 0 auto;"><?php echo date('l d/m/Y');?></p>
						
						<div class='user_input' >
							<form method="post" action="">
							    <br/>
							    <input type="text" class="text" name="text" placeholder="Enter your board roll" value="<?php global $txt; echo $txt;?>" required>
							    <input type="submit" class="submit btn btn-primary" name="submit" value="Search">
							    <br/><br/>

							</form>
							
							<?php

							if (isset($_POST['text'])) {
							
							$get_value = $_POST['text'];
							
							switch ($get_value) {
								case '162685': ?>

									<div class="div_tbl">
										<h3 style="color: green; margin-top: 5px; font-size: 30px; margin-bottom: 20px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Muhtsim Fuad Badhon"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 2.92";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162688': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Al Mamun"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.21";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162691': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Shohel Mia"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 2.87";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162692': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Shekh Mahadi Alam Sumon"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.12";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162693': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Really sorry you'r fail !!</h3>
										<table border="1" class="tbl_fail">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Raju Ahmed"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "Refard { 66651(T), 66662(T), 66664(T), 66667(T), 68546(T), 69054(T) }"; ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162694': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_fail">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Ruman Khan"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "Refard { 66651(T), 69054(T) }";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162696': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Atikul Islam"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.45";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162697': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Fatema Akter Shipa"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.57";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162698': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Shanta Barman"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.34";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162699': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Kamrul Alam Shovra"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.11";         ?></td>
											</tr>
										</table>
									</div> 
								<?php
								break;

								case '162700': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_fail">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Abdus Salam Nayem"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "Refard { 66651(T), 66662(T) }";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162701': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Ronjon Das"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.04";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162702': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Merajul Islam"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 2.93";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;
								
								case '': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Really sorry you'r fail !!</h3>
										<table border="1" class="tbl_fail">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Rifat Hossain Ripon"; 			 	 ?></td>
												<td><?php  echo $get_value;          	 ?></td>
												<td><?php  echo "Computer";          	 ?></td>
												<td><?php  echo "Refard (66664, 66667)"; ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162704': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Shah Arif Ahmed Himel"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 2.83";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162707': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Jannatul Ferdaus Jannat"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.59";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162708': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Really sorry you'r fail !!</h3>
										<table border="1" class="tbl_fail">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Mist. Sormili Jahan Sorna"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "Refard { 66661(T) }";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162709': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Omar Faruk"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.09";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162710': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Really sorry you'r fail !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Imran Hossain"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "Refard { 66661(T) }";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162711': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Rihat"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.13";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162712': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Arifur Rahman"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.84";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162713': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Shakib Sarkar Hridoy"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 2.99";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162716': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Najmin Begum"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.96";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162717': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Really sorry you'r fail !!</h3>
										<table border="1" class="tbl_fail">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Rasel Mia"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "Refard { 65852(T), 66641(T),
66644(T), 66651(T), 66664(T),
66842(T), 68546(T) }";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162718': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Mahim Hossain"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.80";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162719': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Really sorry you'r fail !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Delwar Hossain"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "Refard { 66662(T) }";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162720': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Muzahid Mondol"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 2.66";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162722': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Really sorry you'r fail !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Shifat Rahman Auporbo"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "Refard { 66641(T), 66651(T) }";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162269': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Really sorry you'r fail !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Nafiur Rob"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "Refard { 66662(T) }";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162270': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Rezaul Hossen"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.28";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162271': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Nayeem Ahmed"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.38";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162272': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Abul Hussain Mohin"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.82";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162273': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Mahfuja Akther"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.49";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162277': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Khaled Ahmad"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 2.71";         ?></td>
											</tr>
										</table>
									</div> 
								<?php
								break;

								case '162278': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Fahima Akther"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.82";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162279': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Abdullah Al Mamun"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.41";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162281': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Really sorry you'r fail !!</h3>
										<table border="1" class="tbl_fail">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Hasan Ahmed"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "Refard { 66644(T), 66645(T),
66661(P), 66662(T,P), 66663(P),
66664(T,P), 66667(T,P), 66842(T),
69054(T) }";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;
								
								case '162285': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Really sorry you'r fail !!</h3>
										<table border="1" class="tbl_fail">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Mahbub Alam"; 		 ?></td>
												<td><?php  echo $get_value;          	 ?></td>
												<td><?php  echo "Computer";          	 ?></td>
												<td><?php  echo "CGPA 3.37"; ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162286': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Really sorry you'r fail !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Eva Lamin Samia"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "Refard { 66661(T), 68546(T),
69054(T) }";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162287': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Really sorry you'r fail !!</h3>
										<table border="1" class="tbl_fail">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Shafi Alom"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "Refard { 66644(T), 66664(T),
68546(T), 69054(T) }";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162288': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Really sorry you'r fail !!</h3>
										<table border="1" class="tbl_fail">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Abdus Shakur"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "Refard { 66644(T), 66664(T) }";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162290': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Mahfujur Rahman"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.36";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162291': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Chowdhury Ahmed Raja Shah"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 2.64";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '162292': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Really sorry you'r fail !!</h3>
										<table border="1" class="tbl_fail">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Masum Khan Opu"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "Refard { 68546(T) }";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '163892': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Akhlasur Rahman"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.66";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '164599': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Nur Islam"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.47";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '183797': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Really sorry you'r fail !!</h3>
										<table border="1" class="tbl_fail">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Ahm Kibria"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "Refard { 66842(T) }";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '183798': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Asraf Hussain Khan Jibon"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 2.78";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '183799': ?>

									<div class="div_tbl">
										<h3 style="color: red; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Really sorry you'r fail !!</h3>
										<table border="1" class="tbl_fail">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Abdul Basit Mamun"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "Refard { 66664(T) } ";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '183800': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Karno Das Shaoun"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.32";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '475461': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Mithun"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 2.82";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '475463': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Md: Shahriar Islam Nahid"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 2.93";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								case '182086': ?>

									<div class="div_tbl">
										<h3 style="color: green; font-size: 30px; margin-bottom: 20px; margin-top: 5px;">Congratulations !!</h3>
										<table border="1" class="tbl_pass">
											<tr>
												<th>Name</th>
												<th>Roll</th>
												<th>Dept</th>
												<th>Result</th>
											</tr>
											<tr>
												<td><?php  echo "Noor Hasan"; ?></td>
												<td><?php  echo $get_value;          ?></td>
												<td><?php  echo "Computer";          ?></td>
												<td><?php  echo "CGPA 3.42";         ?></td>
											</tr>
										</table>
									</div> 

								<?php
								break;

								default:
									echo "<span style='color: red; font-size: 30px;'>Invalid roll number !</span>";
								break;
									
							}
								}		
							
								?>

						</div>

					</div>

					<section class="footersection text-center">
					    <hr>
					    	<span>Source - 

					    		<a href="https://drive.google.com/file/d/1HaJKFnc4naaKvd6e2CxkhP_MkqbmVBM6/view?usp=sharing">BTEB</a> Developed by 

					    		<a href="https://mahadialam.github.io/home-page/">Mahadi Alam Sumon</a>

					    	</span>
					    <hr>
					</section>
				</div>
           </div>
	</header>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
	 -->
    </body>
</html>
