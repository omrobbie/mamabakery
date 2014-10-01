<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="js/tiny_mce/tiny_mce_init.php"></script>

<style>
	textarea {
		border:1px solid #cccccc;
		padding:5px;
		border-radius: 5px;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		resize:none;
		box-sizing: border-box;
		-webkit-box-sizing:border-box;
		-moz-box-sizing: border-box;
		-ms-box-sizing: border-box;
		width:100%;
	}
</style>
</head>

<body>
<div class="gc_field gc_tinymce">
	<textarea id="description" name="description" class="tinyMCE"></textarea>
</div>

<div class="button_set">
	<input type="button" onclick="toggleEditor('description'); return false;" value="Toggle WYSIWYG" />
</div>

</body>
</html>