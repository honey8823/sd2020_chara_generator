<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>トップページ</title>
</head>
<body>

<div id="container">
	<h1>トップページ</h1>

	<?= $testtext ?>

	<p class="footer">
		Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?><br>
		Memory usage : {memory_usage}
	</p>


</div>

</body>
</html>