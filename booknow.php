<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="style/styles.css">
    <title>Movies Schedule</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="_.js "></script>
</head>
<?php
    include "connection.php";
    $sql = "SELECT * FROM movieTable";
?>
<style>
   .movie-box{
    text-align:center;
    justify-items:center;
   }
</style>
<header></header>

<body>
    <div class="schedule-section">
        <h1>Book Now</h1>
        <div class="schedule-dates">
            <div class="schedule-item">Jan 4,2023</div>
            <div class="schedule-item schedule-item-selected">Jan 5,2023</div>
            <div class="schedule-item">Jan 6,2023</div>
            <div class="schedule-item">Jan 7,2023</div>
            <div class="schedule-item">Jan 8,2023</div>
        </div>
        <div class="schedule-table">
            <table>
                <tr>
                    <th>MOVIE</th>
                    <th>SHOW TIMINGS</th>
                </tr>
        <?php
        if ($result = mysqli_query($con, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                    $row = mysqli_fetch_array($result);
                    echo '<tr class="fade-scroll">
                        <td>
                            <h2>' . $row['movieTitle'] . '</h2>
                        <div class="movie-box">
                            <img src="' . $row['movieImg'] . '" alt="'.$row['movieTitle'].' ">
                        </div>
                            <i class="far fa-clock"></i> 125m <i class="fas fa-desktop"></i> IMAX
                            </div>
                        </td>
                        <td>
                            <div class="hall-type">
                                <h3>Private Hall</h3>
                                <div>
                                    <div class="schedule-item"><i class="far fa-clock"></i></div>
                                    <div class="schedule-item">09:00 AM</div>
                                    <div class="schedule-item">1:00 PM</div>
                                    <div class="schedule-item">06:00 PM</div>
                                </div>
                            </div>
                            <div class="hall-type">
                                <h3>VIP Hall</h3>
                                <div>
                                    <div class="schedule-item"><i class="far fa-clock"></i></div>
                                    <div class="schedule-item">09:00 AM</div>
                                    <div class="schedule-item">1:00 PM</div>
                                    <div class="schedule-item">6:00 PM</div>
                                </div>
                            </div>
                            <div class="hall-type">
                                <h3>Main Hall</h3>
                                <div>
                                    <div class="schedule-item"><i class="far fa-clock"></i></div>
                                    <div class="schedule-item">09:00 AM</div>
                                    <div class="schedule-item">1:00 AM</div>
                                    <div class="schedule-item">06:00 PM</div>
                                </div>
                            </div>
                        </td>
                    </tr>';
                }
                        }
                    }            
            ?>
            </table>
        </div>


    </div>
    <footer></footer>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>