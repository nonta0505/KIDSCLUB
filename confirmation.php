<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>
 
<body>
 
<h2>問合せ内容</h2>    
 
<form action="mailto.php" method="post">
 
<table border="1">
<tr>
<td>お名前</td>
<td><?php echo $_POST["name"]; ?></td>
</tr>
<tr>
<td>年齢</td>
<td><?php echo $_POST["age"]; ?></td>
</tr>
<tr>
<td>どのように知りましたか</td>
<td><?php echo $_POST["know"]; ?></td>
</tr>
<tr>
<td>全体的な印象はどうですか</td>
<td><?php echo $_POST["impression"]; ?></td>
</tr>
<tr>
<td>見易さはどうですか</td>
<td><?php echo $_POST["Legibility"]; ?></td>
</tr>
<tr>
<td>使いやすさはどうですか</td>
<td><?php echo $_POST["use"]; ?></td>
</tr> 
<tr>
<td>安心して見せられるHPだと感じましたか</td>
<td><?php echo $_POST["relief"]; ?></td>
</tr> 
<tr>
<td>イラストは適切だおもいますか</td>
<td><?php echo $_POST["illustration"]; ?></td>
</tr>
<tr>
<td>知育の役に立つとおもいましたか</td>
<td><?php echo $_POST["education"]; ?></td>
</tr>
<tr>
<td>一番反応があったアニメーションはなんですか</td>
<td><?php echo $_POST["reaction"]; ?></td>
</tr>  
<tr>
<td>問い合わせ内容</td>
<td><?php echo $_POST["Request"]; ?></td>
</tr>
</table>
 
<input type="submit" value="送信" />
</form>
 
</body>
    
</html>
