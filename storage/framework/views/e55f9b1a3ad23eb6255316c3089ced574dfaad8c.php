<!DOCTYPE html>
<html>
<head>
	<title>Learn Infinity - Image Uploading Using Dropzone js In Laravel</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
</head>
<body>
	<h3>Image Uploading Using Dropzone js In Laravel</h3>
	
		<?php echo e(Form::open(array('url' => 'imageUpload','method' => 'PUT', 'name' => 'product_images', 'id' => 'myImageDropzone', 'class' => 'dropzone','files' => true))); ?>


		<?php echo e(Form::close()); ?>

</body>
</html>