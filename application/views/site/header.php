<!DOCTYPE html>
<html>
<head>
	<title><?php echo PAGE_PREFIX; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/thirdparty/bootstrap/css/bootstrap.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/thirdparty/bootstrap/css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/local/css/stylesheet.css'; ?>">
</head>
<body>
	<header>
		<nav class="menu navbar navbar-default">
		  <div class="container">
		    <ul>
		    	<a href="<?php echo base_url(); ?>"><li>Home</li></a>
		    	<?php if($categories):  ?>
	    			<?php foreach ($categories as $category) {
	    				echo "<a href='". base_url().'?cat='. $category->ID ."'><li>". $category->category_name . "</li></a>";
	    			} ?>
		    	<?php endif; ?>
		    </ul>
		  </div>
		</nav>
	</header>
	<section>
		<div class="container-fluid">
			<?php if($content): ?>
				<?php echo $content; ?>
			<?php endif; ?>
		</div>
	</section>
	<footer>
		<script type="text/javascript" scr="<?php echo base_url().'assets/thirdparty/jquery/js/jquery.js' ?>"></script>
		<script type="text/javascript" scr="<?php echo base_url().'assets/thirdparty/bootstrap/js/bootstrap.js' ?>"></script>
		<script type="text/javascript" scr="<?php echo base_url().'assets/thirdparty/bootstrap/js/bootstrap.min.js' ?>"></script>
		<script type="text/javascript" scr="<?php echo base_url().'assets/local/js/main.js' ?>"></script>
	</footer>
</body>
</html>