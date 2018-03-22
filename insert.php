<html>
    <head>
        <title>Phonebook</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div id="wrap">
            <div id="search">
                <img src="img/add.png" alt='Slika'>
				<a href="index.php"><img src="img/search.png" height="72px" title="search"></a>
				<a href="remove.php"><img src="img/remove.png" height="72px" title="remove contact"></a>
				
				<form action="#" method="POST">
				<label>First name:<br/>
					<input type="text" name="fname"></label><br/>
               <label>Last name:<br/>
					<input type="text" name="lname"></label><br/>
				<label>Tel:<br/>
					<input type="text" name="tel"></label><br/>
			   <input type="submit" name="insert" value="Insert"><br/>
			   </form>
				</div>
			<div id="message">
			<?php
			if(isset($_POST['insert'])){
				if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['tel'])){
					if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['tel'])){
						$fname = trim($_POST['fname']);
						$lname = trim($_POST['lname']);
						$tel = trim($_POST['tel']);
						require 'inc/connect.php';
						
						$fname = mysqli_real_escape_string($conn, $fname);
						$lname = mysqli_real_escape_string($conn, $lname);
						$tel = mysqli_real_escape_string($conn, $tel);
							$query = "INSERT INTO contacts (fname, lname, tel) VALUES ('{$fname}','{$lname}','{$tel}')";
							if(mysqli_query($conn, $query) === TRUE) {
								echo "New record successfully created";
							}else {
								echo "Error";
							}

					}else{
						echo "All fields must be field in.";
					}
					
				}else{
						echo "All parametars must be sent!";
				}
			}
			
			
			?>
			</div>
			
											
        </div>
		
    </body>
</html>