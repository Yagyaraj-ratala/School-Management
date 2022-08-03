<!DOCTYPE html>
<html>
<head>
	<title>Create student</title>
</head>
<body>
	<h1 style="color: green" align="left">Add new Student</h1>
	​<form action="/saveStudent" method="POST" enctype="multipart/form-data">
        @csrf
		<label>Full Name</label><br>
		<input type="text" name="fname" placeholder="your name"><br><br>
		<label>Roll No.</label><br>
		<input type="text" name="roll" placeholder="your roll"><br><br>
		<label>Section</label><br>
		<input type="text" name="section" placeholder="your section"><br><br>
		<label>Email</label><br>
		<input type="text" name="email" placeholder="your email"><br><br>
		<label>Phone</label><br>
		<input type="text" name="phone" placeholder="your phone"><br><br>
		<input type="submit" name="Submit">
	</form>

</body>
</html>