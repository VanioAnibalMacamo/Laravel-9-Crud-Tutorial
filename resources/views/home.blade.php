<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
	</head>
	<body>
		<div align="center">
			<form action="{{url('upload')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div style="padding: 10px;">
					<label>Name</label>
					<input type="text" name="name">
				</div>
				<div style="padding: 10px">
					<label>Email</label>
					<input type="email" name="email">
				</div>
				
				<div style="padding: 10px">
					<label>Image</label>
					<input type="file" name="file">
				</div>
				<div style="padding: 10px">
					<input type="submit">
				</div>
			</form>
		</div>
	</body>
</html>