<html>
	<head></head>
	<body>
		<p>Click the link below to reset your password: </p>
		<p><a href="{{ url('password/reset/' . $token) }}">Reset Password</p>
	</body>
</html>