<!DOCTYPE html>



<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Exo:400,900' rel='stylesheet' type='text/css'>
<title>xer0.tv</title>


 <link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">

<style>
html, body{
  height: 100%;
}
body { 
			background-image: url(visuals/fun/squig.png) ;
			background-position: center center;
			background-repeat:  no-repeat;
			background-attachment: fixed;
			background-size:  cover;
			background-width: 100%;
			background-height: 100%;
  
}


.wrapper {
  height: 100%; 
  width: 100%; 
}

.message {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%; 
  height:45%;
  bottom: 0; 
  display: block;
  position: absolute;
  background-color: rgba(0,0,0,0.6);
  color: #fff;
  padding: 0.5em;
}

</style>

</head>


<body>

  <div id="bar" class = "ticker-container">
	<div class = "ticker-text"><div id="ticktext">
    <img src="blogo.png"></img><?php include("ticker.txt"); ?></div>
	</div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
