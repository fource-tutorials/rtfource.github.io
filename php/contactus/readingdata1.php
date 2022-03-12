<doctype html>
<html>
<head>
<title>RT Biology</title>
<link rel="stylesheet" href="css/style1.css">
<style type="text/css">
    blockquote { 
        margin: 0 0 20px; 
        border: 1px solid black; 
        padding: 15px 15px 0 15px; 
        display: block; 
        background-color: rgba(0,0,0,.5); }
        .subsection{
	height: 50%;
	width:100%;
	background-color: bisque;}
	#nav{
		float: left;
		width:20%;
		position: fixed;
		padding-top: 60px;
		font-size: 40px;
		background-color: black;
		margin: 0,0,9px;
		height: 100%;
		z-index: 2;
	}
	#nav a:focus{
		background: silver;
	}
	#nav a{
	    color: white;
	    text-decoration: none;
	    
	}
	#nav a:hover{color: gray;}
	#nav a:active {color:#0000FF;}
	#main{
		float: right;
		padding-top: 10px;
		padding-right: 50px;
		font-size: 40px;
		width: 70%;
		position: relative;
		z-index: 2;
	}
</style>
</head>
<body>
<div id="nav">
			<ul>
      <li><a href="home.html" class="on">Home</a></li>
      <li><a href="index.html">Assignments</a></li>
      <li><a href="download.html">Downloads</a></li>
      <li><a href="video.html">Videos</a></li>
      <li><a href="botany.html">Botany</a></li>
      <li><a href="zoology.html">Zoology</a></li>
      <li><a href="board.html">Board papers</a></li>
      <li><a href="samplepaper.html">Sample paper</a></li>
      <li><a href="doubt.html">Got a doubt?</a></li>
      <li><a href="contact.html">Feedback</a></li>
      </ul>
      </div>
      <div id="main">
      <h2 style="color:skyblue">Responses</h2>
      <center>
      <?php
$db=mysql_connect("localhost","root","");
if(!$db)
{
  echo "No Connection";
  exit();
}
mysql_select_db("contactus",$db);
$result=mysql_query("select *from feedback");
if(!$result)
{
  echo mysql_error();
  exit();
}
echo "<table border=1><tr>";
echo "<th>Name</th>
      <th>Email</th>
      <th>Subject</th>
      <th>Message</th></tr>";
while ($row=mysql_fetch_array($result)) {
  echo "<tr><td>";
  echo $row['name'];
  echo "</td><td>";
  echo $row['email'];
  echo "</td><td>";
  echo $row['subject'];
  echo "</td><td>";
  echo $row['message'];
  echo "</td></tr>";
}
echo "</table>";
?>
</center>
<br>
<br>

 
	  

	 <div class="subsection">
	 <center>
     <font size="800" face="Comic Sans MS" color="black">Connect with Us</font><br><br>
     <a href="http://facebook.com"><img src="fb.svg" width="120" height="120"></a>
     <a href="https://twitter.com/login"><img src="twit.png" width="120" height="120"></a>
     <a href="https://www.pinterest.com/"><img src="pinterest.png" width="120" height="120"></a>
       <a href="https://www.instagram.com/?hl=en"><img src="insta.png" width="120" height="120"></a>
       <a href="https://plus.google.com/apps/activities"><img src="g+.png" width="120" height="120"></a>
      </center>

    </div>
      </div>
      	  

    <video id="my-video" class="video" loop muted autoplay>
  <source src="media/demo.mp4" type="video/mp4">
  
<source src="media/demo.ogv" type="video/ogg">
  <source src="media/demo.webm" type="video/webm">

</video><!-- /video -->
</body>
</html>
