<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<title> <? include ('administrator122/name.txt'); ?> </title><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="images/favicon.gif" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--progress bar --> <script language="javascript" src="xp_progress.js"></script>
<script type="text/javascript" src="js/swfobject/swfobject.js"></script>
<script type="text/javascript">
var flashvars = {};
flashvars.xml = "config.xml";
flashvars.font = "font.swf";
var attributes = {};
attributes.wmode = "transparent";
attributes.id = "slider";
swfobject.embedSWF("cu3er.swf", "cu3er-container", "960", "270", "9", "expressInstall.swf", flashvars, attributes);
</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){ 
$("#divx").animate({"left": "+=600px"}, "slow");}); 
</script><!-- Botones -->


<link rel="stylesheet" href="home.css" type="text/css" media="screen" /></head>

<body>
<!--Header Begin-->
<div id="header">
  <div class="center">
    <div id="logo"><a href="#"></a></div>
    <!--Menu Begin-->
    <div id="menu">
      <ul>
        <li><a class="active" href="index.html"><span>Inicio</span></a></li>
		<li><a href="chat"><span>Chat</span></a></li>

      </ul>
    </div>
    <!--Menu END-->
  </div>
</div>
<!--Header END-->
<!--Toprow Begin-->
<div id="toprow">
  <div class="center">
    <div id="cubershadow">
		<div align="center">
&nbsp;<p>&nbsp;</p>
<table cellpadding="0" cellspacing="0" height="242" width="668">
	<!-- MSTableType="layout" -->
	<tbody><tr>
		<td height="242" width="668">
<form action="p/upload.php" method="post" enctype="multipart/form-data">
      
          
          
		
			<h2>Arrastra tu archivo aquí:</h2>
			<center><input name="archivo" size="35" class="text" type="file" /></center>
		
	
	
		  <input name="action" value="upload" type="hidden" />   
<!-- PB 	onclick="javascript:bar1.showBar()" class="button" -->	  
          <center><input  value="Upload!"  onclick="javascript:bar1.showBar()" class="button" type="submit" /></center></form>
		  <br>
		  <center><script type="text/javascript">
var bar1= createBar(300,15,'white',1,'black','#6E6E6E',85,7,3,"");
</script></iframe></center>


</td>
	</tr>
</tbody></table>

<div style="position: absolute; width: 297px; height: 39px; z-index: 2; left: -721px; top: 89px;" id="divx">
	<div style="position: absolute; width: 100%; height: 33px; z-index: 1; left: 153px; top: 12px;" id="capa1">
		<? include('administrator122/noticia.txt'); ?> </div>
	<img src="images/bg_title.png" border="0" height="47" width="710" /></div>

		</div>
    </div>
	
  </div>
  
</div><br><center> <? include('administrator122/ads.txt'); ?></center>
<!--Toprow END-->
<!--MiddleRow Begin-->
<div id="midrow">
  <div id="container">
    <div class="box">
      <h1>Sube archivos ilimitadamente</h1>
      <a class="plan" href="#">Business Plan</a>
      <p><a>Sube archivos sin ningún tipo de limite, sube todos los archivos que desees de manera ilimitada.</a></p>
    </div>
    <div class="box">
      <h1>Maximo 4MB por archivo</h1>
      <a class="whyus" href="#">Why Choose Us?</a>
      <p><a>Sube cualquier tipo de archivo con la extensión que sea cumpliendo nuestro máximo de grandaria por archivo.</a><br /></p>
    </div>
    <div class="box last">
      <h1>Sin limite de velocidad</h1>
      <a class="support" href="#">Our Support</a>
      <p><a>No necesitas cuenta premium para poder descargar a toda velocidad, con nuestro servicio todos somos iguales.</a><br />
        </p>
    </div>
  </div>
</div>
<!--MiddleRow END-->
<!--BottomRow Begin-->
<div id="bottomrow">
  &nbsp;</div>
<!--BottomRow END-->
<!--BottomRow Begin-->
<div id="bottomrow">
  <div class="textbox">
		</div>
  <div class="feed"> &nbsp;<a href="#"><br /></a> </div>
</div>
<!--BottomRow END-->
<!--Footer Begin-->
<div id="footer">
  <div class="foot"> Made in Spain</div>
</div>
<!--Footer END-->
</body></html>