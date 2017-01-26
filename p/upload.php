<html xmlns="http://www.w3.org/1999/xhtml"><head>
<link rel="shortcut icon" href="images/favicon.gif" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
</html>


<?
$data = $_POST['action'];
if ($data == "") {
 echo "FATAL ERROR! PLEASE CONTACT ADMINISTRATOR";
 exit();
    }
//comprobación: <input name="action" value="upload" type="hidden" /> 


$archivo = $_FILES["archivo"]['name'];
if ($archivo == "") {
 echo "No File Select";
 exit();
    }
$tamano = $_FILES["archivo"]['size'];
if ($tamano > "40000000") {
echo "File max exceeded";
exit();
}
//comprobación del tamaño del archivo
?>
<?PHP

function gerasenha(){

   $silabas = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','-');

   $numeros = array('0','1','2','3','4','5','6','7','8','9');

   $a = $silabas[rand(0,count($silabas)-1)];

   $a .= $numeros[rand(0,count($numeros)-1)];

   $a .= $silabas[rand(0,count($silabas)-1)];

   $a .= $silabas[rand(0,count($silabas)-1)];

   $a .= $numeros[rand(0,count($numeros)-1)];

   return($a);

}



$senha = gerasenha();



if(file_exists($senha)){
$senha = gerasenha();
}



    /**

       verifica existencia
    */
mkdir($senha);
$arq = fopen($senha."/index.php", "w+");



$msg = "
<html xmlns='http://www.w3.org/1999/xhtml'><head>

<title> <? include ('../../administrator122/name.txt'); ?> </title><meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel='shortcut icon' href='../images/favicon.gif' />
<link rel='stylesheet' type='text/css' href='../style.css' />
<style>
#divoculta {
display: none;
}
#d_clip_container {
top: 125px;
left: 600px;
margin: 0px;
vertical-align: middle;
   padding: 0;  
}
</style>
<!-- prta papeles -->
	<script type='text/javascript' src='../../core/clip/ZeroClipboard.js'></script>
	<script language='JavaScript'>
		var clip = null;
		
		function $(id) { return document.getElementById(id); }
		
		function init() {
			clip = new ZeroClipboard.Client();
			clip.setHandCursor( true );
			
			clip.addEventListener('load', function (client) {
				debugstr('Flash movie loaded and ready.');
			});
			
			clip.addEventListener('mouseOver', function (client) {
				// update the text on mouse over
				clip.setText( $('fe_text').value );
			});
			
			clip.addEventListener('complete', function (client, text) {
				debugstr('Copied text to clipboard: ' + text );
			});
			
			clip.glue( 'd_clip_button', 'd_clip_container' );
		}
		
		function debugstr(msg) {
			var p = document.createElement('p');
			p.innerHTML = msg;
			$('d_debug').appendChild(p);
		}
	</script>



<script type='text/javascript' src='https://apis.google.com/js/plusone.js'>
  {lang: 'es'}
</script>

<? include('../../administrator122/adfly.php'); ?>

</head>

<body onLoad='init()'>
<!--Header Begin-->
<div id='header'>
  <div class='center'>
    <div id='logo'><a href='#'>Calliope</a></div>
    <!--Menu Begin-->
    <div id='menu'>
      <ul>
        <li><a href='../../index.php'><span>Home</span></a></li>
        <li><a class='active' href='../../../about.php'><span>Acerca</span></a></li>
        <li><a href='#'><span>Abuso</span></a></li>
        <li><a href='#'><span>Contacta</span></a></li>
      </ul>
    </div>
    <!--Menu END-->
  </div>
</div>
<!--Header END-->
<!--SubPage Toprow Begin-->
<div id='toprowsub'>
  <div class='center'>
    <h2>Archivo: <? echo '' . '$archivo';  ?></h2> 
	
	<div id='divoculta'><textarea id='fe_text' cols=50 rows=5 onChange='clip.setText(this.value)'><? include ('../../administrator122/servidor.txt'); echo '/p/' . '$senha';  ?></textarea></div>
								
				<div id='d_clip_container' style='position:relative;top:15px; left: -1px; width:138px;'>
					<div id='d_clip_button' class='my_clip_button'><img align='left' src='../../core/clip/img.png'> <p style='position:relative; top: 5px;'>Copiar Url</p></div>
				</div>
	
	<div style='position: relative; top: -19px; left: 135px; z-index:100;'><g:plusone></g:plusone>
		<a href='https://twitter.com/share' class='twitter-share-button' data-count='horizontal'>Tweet</a><script type='text/javascript' src='//platform.twitter.com/widgets.js'></script></div>


	
  </div>
</div>
<!--Toprow END-->
<!--SubPage MiddleRow Begin-->
<div id='midrow'>
  <div class='center'>
    <div class='textbox2'><br /><br /><br /><div style='text-align: center;'><a href='go.php'><img style='border: 0px solid ; width: 184px; height: 60px;' src='../img/button-5620.png' alt='' /></a></div><br />&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Descargas: <? include ('numero.dat'); ?><br /><br /><br /></div>
<br><br>


</p></td>
</tr>
</tbody></table>
</center>
</div>
</form>
</td>
</tr>
<center><iframe name='ass' width='393' height='75' scrolling='no' border='0' frameborder='0'>
</iframe>
</center>

  </div>
</div>
<!--MiddleRow END-->
<!--SubPage BottomRow Begin-->
<div id='bottomrow'>
  <div id='box2holder'><div class='box2' style='width: 925px; height: 83px'>
	<p align='center'><? include ('../../administrator122/ads.txt'); ?><br /></p>
	<p><a>. </a></p>
    </div>
  </div>
</div>
<!--BottomRow END-->
<!--Footer Begin-->

<!--Footer END-->
</body></html>

";


fwrite($arq,$msg);
fclose($arq);


   

//FIN DE CREACIÓN DE ARCHIVO INDEX.PHP Y CARPETA DEL ARCHIVO: hJSKj

?>

<?
mkdir($senha . "/file");
//FIN DE LA CREACIÓN DE LA CARPETA PARA ALOJAR EL ARCHIVO
?>

<?
$status = "";
if ($_POST["action"] == "upload") {
    // obtenemos los datos del archivo
    $tamano = $_FILES["archivo"]['size'];
    $tipo = $_FILES["archivo"]['type'];
    $archivo = $_FILES["archivo"]['name'];
    $prefijo = "";
	if ($tamano < "3000000000") {
    if ($archivo != "") {
        // guardamos el archivo a la carpeta files
        $destino =  $senha ."/file/".$prefijo."".$archivo;
        if (copy($_FILES['archivo']['tmp_name'],$destino)) {
            $status = $senha;
        } else {
            $status = "Error al subir el archivo1";
        }
    } else {
        $status = "Error al subir archivo2";
    }
	} else {
		$status = "File max exceeded";
}}
$asdfasdf = include('../administrator122/servidor.txt');
$asdfasdf = str_replace($asdfasdf, "1", "");
echo $asdfasdf . "/p/" . $status ;
//fin de subida de archivo
?>

<?php
$archivoo = "$" . "archivoo";
$abre = "$" . "abre";
$total = "$" . "total";
$grabar = "$" . "grabar";

$tested = "
<meta http-equiv='refresh' content='2;url=index.php'>


<?
// Archivo en donde se acumulará el numero de visitas
$archivoo = 'numero.dat';
// Abrimos el archivo para solamente leerlo (r de read)
$abre = fopen($archivoo, 'r');
// Leemos el contenido del archivo
$total = fread($abre, filesize($archivoo));
// Cerramos la conexión al archivo
fclose($abre);
// Abrimos nuevamente el archivo
$abre = fopen($archivoo, 'w');
// Sumamos 1 nueva visita
$total = $total + 1;
// Y reemplazamos por la nueva cantidad de visitas 
$grabar = fwrite($abre, $total);
// Cerramos la conexión al archivo
fclose($abre);




if (file_exists('file/$archivo')) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename('file/$archivo'));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize('file/$archivo'));
    ob_clean();
    flush();
    readfile('file/$archivo');
    exit;
}
?>
";
$fp = fopen($senha ."/go.php", "w");
fputs($fp, $tested);
fclose($fp);

//fin de la creación del archivo go.php
?>

<?


$acc = "
#deny all access
deny from all
";

$fp = fopen($senha ."/file/.htaccess", "w");
fputs($fp, $acc);
fclose($fp);
//crear archivo .accessssss

?>

<?

$accc = "
0";

$fp = fopen($senha . "/numero.dat", "w");
fputs($fp, $accc);
fclose($fp);
//crear archivo .numero.dat
?>


<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=<? echo $senha; ?>">