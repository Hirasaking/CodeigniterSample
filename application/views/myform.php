<head>
<title>私のフォーム</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('FormController'); ?>

<h5>ユーザ名</h5>
<input type="text" name="username" value="" size="50" />

<h5>パスワード</h5>
<input type="text" name="password" value="" size="50" />

<h5>パスワード確認</h5>
<input type="text" name="passconf" value="" size="50" />

<h5>ファイル</h5>
<input type="file" name="userfile" size="20" />

<h5>メールアドレス</h5>
<input type="text" name="email" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>