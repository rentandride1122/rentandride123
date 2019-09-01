<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="{{ url('admin/log') }}">
		
		Email: <input type="text" name="email"><br>
		password: <input type="password" name="password"><br>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="user_type" value="admin">
		<input type="submit" name="login" value="login">

	</form>

</body>
</html>