<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="{{ url('admin/reg') }}">
		Name: <input type="text" name="name"><br>
		Email: <input type="text" name="email"><br>
		password: <input type="password" name="password"><br>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="submit" name="register" value="register">

	</form>

</body>
</html>