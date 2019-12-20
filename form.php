<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		@font-face {
		    font-family: 'UniSansBold';
		    src: url('UniSansBold.woff2') format('woff2'),
		        url('UniSansBold.woff') format('woff');
		    font-weight: bold;
		    font-style: normal;
		}
		@font-face {
		    font-family: 'UniSansLight';
		    src: url('UniSansLight.woff2') format('woff2'),
		        url('UniSansLight.woff') format('woff');
		    font-weight: 300;
		    font-style: normal;
		}
		@font-face {
		    font-family: 'Uni Neue';
		    src: url('UniNeue-Light.woff2') format('woff2'),
		        url('UniNeue-Light.woff') format('woff');
		    font-weight: 300;
		    font-style: normal;
		}

	</style>
</head>
<body>
<table width="900">
  <tr>
    <th rowspan="6"><img src="logo.jpg" width="300" style="margin-right: 20px"></th>
    <th colspan="2" align="left">
    	<h2 style="font-family: 'UniSansBold'; color:#1B2C69;"><?php echo $_GET['nome']; ?><br><small style="font-family: 'UniSansLight'; font-style: italic;"><?php echo $_GET['cargo']; ?></small></h2>
    </th>
  </tr>
  <tr>
    <td class="tg-0lax" colspan="2"><img src="phone.png" width="17"> <span style="font-size: 20px; font-family: 'Uni Neue'; font-weight: bold;"><small>(27)</small> 3029-0766 | <small>(27)</small> <?php echo $_GET['celular']; ?></span></td>
  </tr>
  <tr>
    <td class="tg-0lax" colspan="2">
    	<a style="text-decoration: none; color:#1B2C69" href="mailto:<?php echo $_GET['email']; ?>" target="_blank">
    	<img src="mail.png" width="17"> <span style="font-size: 20px; font-family: 'Uni Neue'; font-weight: bold;"><?php echo $_GET['email']; ?></span>
    	</a>
    </td>
  </tr>
  <tr>
  	<td colspan="2"><br></td>
  </tr>
  <tr>
    <td>
    	<a style="text-decoration: none; color:#1B2C69" href="http://hospitaltotalhealth.com.br/" target="_blank">
    		<img src="mundo.png" width="17"> <span style="font-size: 20px; font-family: 'Uni Neue'; font-weight: bold;">www.hospitaltotalhealth.com.br</span>
    	</a>
    </td>
    <td><img src="instagram.png" width="17"> <img src="facebook.png" width="17"> <img src="linkedin.png" width="17"> <span style="font-size: 20px; font-family: 'Uni Neue'; font-weight: bold;">hospitaltotalhealth</span></td>
  </tr>
  <tr>
    <td colspan="2"><img src="marker.png" width="17"> <a style="text-decoration: none; color:#1B2C69" href="https://goo.gl/maps/uUPm2YxJWV5n4Xaq8" target="_blank"><span style="font-size: 20px; font-family: 'Uni Neue'; font-weight: bold;">Rua Dona Maria Rosa, 425, Santa Luiza, Vitória - ES CEP 29045-090</span></a></td>
  </tr>
</table>
</body>
</html>