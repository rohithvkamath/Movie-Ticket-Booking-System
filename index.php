<html>
<head>
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<title>
Home
</title>
<style>

</style>
</head>
<body>
<header></header>

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
                    echo '<a href="booking.php?id=' . $row['movieID'] . '"> Book a seat</a>';
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






    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
    

</body>
</html>