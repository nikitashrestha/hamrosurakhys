<html>
<head>
	<title></title>
</head>
<body>
	<form action="fileupload.php" method="Post" enctype="multipart/form-data">
    <input type="file" name="image" id="fileToUpload"><br>
    <input type="text" name="title" placeholder="ImageName"><br>
    <input type="text" name="subject" placeholder="Subject"><br>
    <input type="text" name="context" placeholder="Details"><br>
    <input type="text" name="contact" placeholder="Contact"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="submit" value="Upload Image" name="submit"><br>
</form>
<img src="" id="image" height="auto" width="300px">

</body>
</html>