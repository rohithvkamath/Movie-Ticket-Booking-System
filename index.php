<html>
<head>
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<title>
Home
</title>
<style>
    body {
    background: url("https://hdqwalls.com/download/stranger-things-season-3-2019-4k-5k-38-1920x1080.jpg"); 
    background-size: cover;
    background-attachment: fixed;
    background-repeat:no-repeat;
	justify-content: center;
} 

.menu-bar {
	border-radius: 25px;
	height: fit-content;
	display: inline-flex;
	background-color: rgba(0, 0, 0, .4);
	-webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);  
	align-items: center;
	padding: 0 10px;
	margin: 50px 0 0 0;
}
.menu-bar li {
	list-style: none;
	color: white;
	font-family: sans-serif;
	font-weight: bold;
	padding: 12px 16px;
	margin: 0 8px;
	position: relative;
	cursor: pointer;
	white-space: nowrap;
}
		.menu-bar li::before {
			content: " ";
			position: absolute;
			top: 0;
			left:0;
			height:100%;
			width: 100%;
			z-index:-1;
			transition: .2s;
			border-radius: 25px;
            
		}
        .menubar li ::before :hover ::before {
			background: linear-gradient(to bottom, #e8edec, #d2d1d3);
			box-shadow: 0px 3px 20px 0px black;
			transform: scale(1.2);
		}
		.menu-bar li:hover {
				color: black;
                background: linear-gradient(to bottom, #e8edec, #d2d1d3);
            
		}
        .navibar{
            justify-content: center;
            display: flex;
            width: 100%;
            padding-bottom: 30px;
        }
        
	


</style>
</head>
<body>
<nav class="navibar">
<ul class="menu-bar">
  <li>Home</li>
  <li>Now Showing</li>
  <li>TV Shows</li>
  <li>Sports</li>
  <li>Review</li>
  <li>Login</li>
</ul>
</nav>

<?php
    include "connection.php";
    $sql = "SELECT * FROM movieTable";
    ?>

    
<div id="home-section-1" class="movie-show-container">
    <h1>Showing Now</h1>
    <h3>Book a movie now</h3>

    <div class="movies-container">

        <?php
        if ($result = mysqli_query($con, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                    $row = mysqli_fetch_array($result);
                    echo '<div class="movie-box">';
                    echo '<img src="' . $row['movieImg'] . '" alt=" ">';
                    echo '<div class="movie-info ">';
                    echo '<h3>' . $row['movieTitle'] . '</h3>';
                    echo '<a href="booking.php?id=' . $row['movieID'] . '"><i class="fas fa-ticket-alt"></i> Book a seat</a>';
                    echo '</div>';
                    echo '</div>';
                }
                mysqli_free_result($result);
            }
        else {
                echo '<h4 class="no-annot">No Booking to our movies right now</h4>';
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }

        // Close connection
        mysqli_close($con);
        ?>
    </div>
</div>


<div id="home-section-2" class="services-section">
    <h1>How it works</h1>
    <h3>3 Simple steps to book your favourit movie!</h3>

    <div class="services-container">
        <div class="service-item">
            <div class="service-item-icon">
                <i class="fas fa-4x fa-video"></i>
            </div>
            <h2>1. Choose your favourite movie</h2>
        </div>
        <div class="service-item">
            <div class="service-item-icon">
                <i class="fas fa-4x fa-credit-card"></i>
            </div>
            <h2>2. Pay for your tickets</h2>
        </div>
        <div class="service-item">
            <div class="service-item-icon">
                <i class="fas fa-4x fa-theater-masks"></i>
            </div>
            <h2>3. Pick your seats & Enjoy watching</h2>
        </div>
        <div class="service-item"></div>
        <div class="service-item"></div>
    </div>
</div>


    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>

</body>
</html>