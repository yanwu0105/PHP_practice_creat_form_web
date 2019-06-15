<html>
<body>

<form action="insert_data.php" method="post">

姓名: <input type="text" name="name"><br>
年齡: <input type="text" name="age"><br>
性別: 
<input type="radio" name="sex" value="Male">男
<input type="radio" name="sex" value="Female">女<br>
<!--input type="radio" name="sex" value="Other"-->
教育程度: <Select name="education" size=1>
	<option>請選擇</option>
	<option value="Elementary">國小</option>
	<option value="Junior">國中</option>
	<option value="senior">高中</option>
	<option value="University">大學</option>
	<option value="Graduate">研究所以上</option>
</Select><br>
興趣: <input type="checkbox" name="hobby[]" value="Basketball">籃球
<input type="checkbox" name="hobby[]" value="Baseball">棒球
<input type="checkbox" name="hobby[]" value="Football">足球<br>
<input type="checkbox" name="hobby[]" value="Tennis">網球
<input type="checkbox" name="hobby[]" value="Badminton">羽毛球
<input type="checkbox" name="hobby[]" value="Pingpong">乒乓球<br>
自我介紹: <textarea name="info" cols="30" rows="5"></textarea><br>
<input type="submit" value="送出">
</form>

</body>
</html>
