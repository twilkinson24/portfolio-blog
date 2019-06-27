<html>
	<head></head>
	<body>
		<p>Click the link to reset your password: </p>
		<p>{{ url('password/reset/' . $token) }}</p>
	</body>
</html>