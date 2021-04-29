<?php /* Template name: sql_learn */?>
<html>
	<head>
	<?php wp_head();?>
	</head>
	<body>
		
		<form method="post">
			<input type="submit" name="sql_learn" value="SQL Tester Suite">
		</form>	
		<?php
//			if(isset($_POST['sql_learn'])){
				include_once 'template-parts/sql_learn/sql.php';
//			}
		?>
	</body>
</html>