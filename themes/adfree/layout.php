<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<base href="<?php echo base_url(); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $template['title'] ?></title>
	<?php echo $template['metadata'] ?>
	<?php include "_css.php";?>
</head>
<body>
	<?php include "_header.php";?>
    <div class="container"><?php echo $template['body'] ?></div>
	<?php include "_footer.php";?>
    <?php include "_script.php";?>
</body>
</html>