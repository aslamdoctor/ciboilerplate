<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CI HMVC</title>
</head>
<body>
	<ul>
		<li><a href="<?php echo base_url().'home';?>">Home</a></li>
		<li><a href="<?php echo base_url().'test';?>">Test</a></li>
	</ul>

	<?php $this->load->view($content_view);?>

</body>
</html>