<html>
<head><title>Login</title>
<style type="text/css">
h2{
text-align:center;
color:white;
}
body{background-image:url("v.jpg");
     color:black;
}
.form-container{
padding:15px;
text-align:center;
border:1px;
}
</style>
</head>
<body>
<h2>Welcome Voters</h2>
<hr>
<div class="form-container">
<form action="login.php" method="post">
Username:<input type="text" name="username" placeholder="Enter username or emailid" required>
<br /><br />
Password:<input type="password" name="password" placeholder="Enter password" required>
<br /><br />
<button type="submit" >submit</button>
</form>
</div>
</body>
</html>
