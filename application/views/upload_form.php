<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('UploadController/do_upload');?>

<div>
<input type="file" name="userfile" size="20" />
</div>

<div>
<input type="file" name="sizeover" size="20" />
</div>

<input type="submit" value="upload" />

</form>

</body>
</html>