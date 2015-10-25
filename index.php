<html>
<head><title>Index</title> <meta http-equiv = "Content-Type" content="text/html; charset=utf-8"/></head>
<style type = "text/css">


    body,
    html {
    margin:0;
    padding:0;
    color:#000;
    
    background-image:url(bg2.jpg);
    }

   #wrap {
    width:750px;
    margin:0 auto;
    background:#9c9;
    }
  
    #header {
    padding:30px 80px;
    background:#ddd;
    }
    
    h1 {
    margin:0;
    float: center;
    }
    
    #main {
    float:left;
    width:480px;
    padding:50px;
    padding-bottom:760px;
    background:#a7a09a;
    height:0;
    }
    h2 {
    margin:0;
    }
    #sidebar {
    float:right;
    width:150px;
    padding:10px;
    padding-bottom:800px;
    background:#99c;
    height:0;
    }
    #footer {
    clear:both;
    padding:5px 10px;
    background:#808080;
    }
    
    #footer p {
    margin:0;
    }
 
</style>
<body>


    <div id="wrap">
    <div id="header">
        <img src ="hanifa.png"></div>
    
    <div id="main">
    <?php 
    $text = file_get_contents("entries.txt");
    echo "$text";
    ?>
    </div>
    
    <div id="sidebar">
<ul> 
	<li><a href="index.php">          Home </a></li>
	<li><a href="login.html">       Login </a></li>
 </ul>
 </div>
<div id ="footer">
<p><?php
$countPage = "hitcounter.txt";
if (!file_exists($countPage))
{
$fPut = fopen($countPage, 'w') or die("file not accessible");
fwrite($fPut,"0");
fclose($fPut);
}
$hits = file($countPage);
$hits[0] ++;
$fPut = fopen($countPage , "w");
fputs($fPut , "$hits[0]");
fclose($fPut);
echo '<font color="white">' . "$hits[0] viewers and counting!" .'</font color>'; I

?></p>
</div>   
    </div>

</body>
</html>
