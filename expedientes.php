<?php include 'dbtools.php'; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>Proyectos Presentados</title>
		<style type="text/css" title="currentStyle">
			@import "media/css/demo_page.css";
			@import "media/css/demo_table.css";
		</style>
		<script type="text/javascript" charset="utf-8"  language="javascript" src="media/js/jquery.js"></script>
		<script type="text/javascript" charset="utf-8"  language="javascript" src="media/js/jquery.dataTables.js"></script>
		<script type="text/javascript">
		$(document).ready(function() 
		{
		$('#example').dataTable(
		{
		"aaSorting": [[ 0, "desc" ]],
		"bInfo": false,
		"oLanguage": {
						"sUrl": "http://boasso24horas.com/proyectos/media/idiomas/dataTables.espanol.txt"
						}
		}
		);
		} );		
		</script>
	</head>
	
	<body id="dt_example">
		<div id="containe">
			<div id="demo">
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
			<thead>
			<tr>
				<th>Expediente</th>
				<th>Detalle</th>
				<th>Comision</th>
				<th>Tipo</th>
				<th>Numero</th>
				<!--<th>Fecha</th>-->
			</tr>
			</thead>
		<tbody>
		<?php 
		$result = mysql_query("SELECT * FROM expedientes"); 
		
        while ($row = mysql_fetch_array($result)) 
			{ ?>
            <tr class='even gradeU'>
			<td><?php echo $row['dictamen']?></td> 
			<td><a  target="_blank" href="<?php echo $row['link'] ?>"><?php echo utf8_encode($row['detalle']) ?></a></td>
			<td><?php echo $row['comision']?></td> 
			<td><?php echo $row['tipo']?></td>
			<td><?php echo $row['numero']?></td>
			<!--<td><?php echo date("Y M", $row['fecha'])?></td>-->
            </tr>
			<?php
			}
          ?>
		</tbody>
		<tfoot>
		
		</tfoot>
	</table>
			</div>
			<div class="spacer"></div>
		
			<style type="text/css">
				@import "../examples_support/syntax/css/shCore.css";
			</style>
			<script type="text/javascript" language="javascript" src="../examples_support/syntax/js/shCore.js"></script>
			
		</div>
	</body>
</html>