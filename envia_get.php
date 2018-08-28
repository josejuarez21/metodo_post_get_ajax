<!DOCTYPE html>
<html>
<head>
	<script>
		var xmlhttp;
		function ajax(datos, ruta)  
	{
		var	xmlhttp;
		if (window.XMLHttpRequest)
			{
				xmlhttp=new XMLHttpRequest();
			}

		
		else
		{
			xmlhttp=new ActiveXobject("Microsoft.xmlhttp");
		}
		xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState== 4 && xmlhttp.staturs==200)
				 {
					document.getElementById("cuerpo").innerHTML=xmlhttp.responseText;	
				}
			}

			xmlhttp.open("GET",ruta+datos,true)
			xmlhttp.send();
	}

	//====================================================
	function recibe(){
		var datos = document.getElementById('datos').value
		ajax("valor="+datos, "recibe.php?");
	}






	</script>>
</head>
<body>

<body style="font-family:verdana, Geneva, sans-serif; font-size:24px; text-align:center;>
<form method="post">
<fieldset style="width:60%;">
<h2>Enviar datos por Get a un archivo. AJAX - PHP - JAVA SCRIPT -HTML</h2>
<input type="text" id="datos" size="45" name="datos"
<input type="button" onclick="recibe();" value="Enviar Datos">
<div id="cuerpo"></div>
<div style="color:#039;">
</div>
</fieldset>
</form>
</body>

</html>