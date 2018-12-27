<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Game Tetris</title>
        <link rel="icon" href="favicon.ico" type="image/ico">
        <!-- main css -->
        <link rel="stylesheet" href="css/thongtin.css">
    </head>
    <body>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
				<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
							<h2 align="center">THÔNG TIN TÀI KHOẢN</h2>
                            <h2>
                                <?php
                                    $servername = "localhost";
                                    $username = "root";  //your user name for php my admin if in local most probaly it will be "root"
                                    $password = "";  //password probably it will be empty
                                    $databasename = "tetris"; //Your db nane
                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password,$databasename);
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    } 
                                    
                                    $sql = "SELECT * FROM user";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "Username: " . $row["username"]."<br>"."<br>";
                                            echo "E-mail: " . $row["E-mail"]."<br>"."<br>";
                                            echo "Password: " . $row["Password"]. "<br>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();                                    
                                ?>
                            </h2>
						</div>
						<div class="aitssendbuttonw3ls">
							<input align="center" type="submit" value="Thay đổi thông tin">
							<a href="bangxephang.html"><input align="center" type="submit" value="Bảng xếp hạng"></a>							
							<a href="maingame.html"><input align="center" type="submit" value="Play game"></a>							
						</div>									
					</div>
				</div>
            </div>
        </section>
		
        <!--================End Home Banner Area =================-->       
    </body>
</html>