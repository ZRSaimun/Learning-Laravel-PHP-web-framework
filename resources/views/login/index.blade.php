<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form method="post">
	@csrf
		<fieldset>
		<h1 align="center"><legend>Login</legend> </h1>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		</fieldset>

		<h3 style="color: red">
			{{session('msg')}}
		</h3>
	</form>
</body>
</html>