<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="customer/name" method="get">
	 <input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="text" name="name">
		<input type="text" name="password">
		<button type="submit">submit</button>
</form>
</body>
</html>