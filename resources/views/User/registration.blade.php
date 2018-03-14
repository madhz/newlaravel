<html lang="en">
<head>

</head>
<body>
<h1>Registration Form</h1>
{{ Form::open(array('url'=>'/user/registration')) }}
{{ Form:: text('fname')}}
{{ Form:: text('lname')}}
{{ Form::submit('submit') }}
</body>
</html>