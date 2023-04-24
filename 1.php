<html>
<head>
    <meta charset="UTF-8">
    <title>修改学生信息</title>
</head>
</head>
<body>
<?PHP
    include "TEST2.php";
    mysql_set_charset('utf8' , $conn);
    $id = $_GET['id'];
    $sql = "SELECT * FROM study WHERE id = {$id}";
    $sql_arr = mysql_fetch_assoc($sql);
?>
<form action="TEST7.php" METHOD="post">
    <table>
        <tr>
            <td><label>ID:</label></td>
            <td><input type="text" name="id" value="<?php echo $sql_arr['id']?>"></td>
        </tr>
        <tr>
            <td><label>姓名:</label></td>
            <td><input type="text" name="name" value="<?php echo $sql_arr['name']?>"></td>
        </tr>
        <tr>
            <td><label>电话:</label></td>
            <td><input type="text" name="phone" value="<?php echo $sql_arr['phone']?>"></td>
        </tr>
        <tr>
            <td><label>专业:</label></td>
            <td><input type="text" name="major" value="<?php echo $sql_arr['major']?>"></td>
        </tr>
        <tr>
            <td><label>班级:</label></td>
            <td><input type="text" name="class" value="<?php echo $sql_arr['class']?>"></td>
        </tr>
        <tr>
            <td><label>宿舍:</label></td>
            <td><input type="text" name="dormitoty" value="<?php echo $sql_arr['dormitoty']?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="修改"></td>
            <td><input type="reset" value="重置"></td>
    </table>
</form>

</body>
</html>