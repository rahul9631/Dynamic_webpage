
<title>Razweb</title>
<style>
@font-face{
	src:url(assest/font.otf);
	font-family:Arial, Helvetica, sans-serif;
	}
	#uni{
		position:absolute;
		width:100%;
		min-height:100%;
		left:0px;
		top:0px;
		font-family:Arial, Helvetica, sans-serif;
		}
	#header{
		width:94%;
		padding:3%;
		font-size:60px;
		color:#FFF;
		background-color:#F90;
		}
	#menubar{
		width:100%;
		background-color:#000;}
    #menubar a{
		font-size:24px;
		color:#FFF;
		padding:10px 20px 10px 20px;
		text-decoration:none;
		display:inline-block;}
	#menubar a:hover{
		color:#72727272;
		background-color:#FFF;}
	#footer{
		width:94%;
		padding:3%;
		color:#FFF;
		background-color:#000;
		font-size:20px;
		text-align:center;}
     #content{
		 width:96%;
		 padding:2%;
		 font-size:20px;
		 background-color:#CFC;
		 height:500px;}

</style>
<div id="uni">
<?php
include('header.php');

?>

<div id="content">

<?php

   if($_GET['page'])
   {
	   $page= $_GET['page'];
	   $display= $page.'.php';
	   include($display);
   }
   else
   {
	   echo 'hello welcome ';
   };
   
   
?>

</div>
<?php
include('footer.php');
?>
</div>