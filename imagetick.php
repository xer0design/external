<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Exo:400,900' rel='stylesheet' type='text/css'>
<title>xer0.tv</title>

<style>
html, body{
  height: 100%;
}
body { 
			background-image: url(ticker.png), url(upload/file.jpg), url(black.jpg);
			background-position: center center;
			background-repeat:  no-repeat;
			background-attachment: fixed;
			background-size:  contain;
			background-width: 100%;
			background-height: 100%;
			color: white;
  
}
    

	h1 { 
    display: black;
    font-size: 5em;
    margin-top: 0.50em;
    margin-bottom: 1em;
    margin-left: 0;
    margin-right: 0;
    font-weight: bold;
}
	
div, body{
	margin-right: 0px;
	margin-left: 0px;
	margin-bottom: 21px;
	padding: 0;
	font-family: exo, sans-serif;
	margin-top: 557px;
}
.wrapper {
  height: 100%; 
  width: 100%; 
}

img {
    padding:0px;
    border:0px;
    margin-top:10px;
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
  color: #000;
  padding: 0.5em;
}

</style>

</head>
<body>   
    <div><marquee width="100%" scrollamount="7"><h1><img src="blogo.png" height="60px"></img><?php include "ticker.txt";?></h1></marquee></div>
    <div><img src="<?php include "image.txt";?>" height="200px"></img></div> 
<!--
<div class="wrapper">
  <div class="message">
    <h1>xer0.overlay</h1>    
  </div>
</div>
-->
</body>
</html>
