<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>hello</title>
</head>
<body>
    hello
</body>
</html>
<script type="text/javascript" src="/Public/static/js/jquery-3.0.0.min.js"></script>
<script type="text/javascript">
	$.get('/index.php/home/test/show', {}, function(json, textStatus) {
			/*optional stuff to do after success */
	});
</script>