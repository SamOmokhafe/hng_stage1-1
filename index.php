<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>HNG 4.0</title>
    <link  rel="stylesheet" type="text/css" href="style.css" />
    <style>
    body {
        background-image: url('hng.jpg');
        background-repeat: no-repeat;
        position: absolute;
        width: 100%;
        height: 100;
        left: 0px;
        top: 0px;
}
    
    </style>
</head>
    
    
<body>
    
    <div class="hng"> 
        <h1>HNG Internship <sup style="font-size:60px">4.0</sup></h1>
    
    </div>
    
<div >
   <div class="today">
       <p class="time" center> <?php
            date_default_timezone_set("Africa/Lagos");
            echo "Today is " . date("l") . "<br>"; 
            echo "Today is " . date("Y/m/d") . "<br>";
            echo "The time is " . date("h:i:sa");
        ?>  
        </p>   
   </div>     
</div>
    

</body>
</html>