<html>
    <head>
        <title>
</title>
</head>

<style>
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
    text-decoration:none;
}
.menu-bar >a:hover {
text-decoration:none;
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
        
	
/* ---------------------------------------------------------------- */

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */


/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 400px; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
#disname:hover{
  background:rgba(0,0,0,0);
  color:white;
  cursor:default;
}
</style>
</head>
<body>
<?php
include '../connection.php';

echo '<nav class="navibar">
<ul class="menu-bar">';
if(isset($_SESSION['user_name'])){
  echo "<li id='disname'> Hi! "; echo $_SESSION['user_name']; echo"</li>";
}
  echo '<a href="index.php"><li>Home</li></a>
  <li>Now Showing</li>
  <li>TV Shows</li>
  <li>Sports</li>
  <li>Review</li>';
if(isset($_SESSION['user_name'])){
  echo "<a href='logout.php'><li>LogOut</li></a>";
}
else{
  echo "<a href='login.php'><li>Login</li></a>";
}
?>


</ul>
</nav>
</script>

</body>
</html>