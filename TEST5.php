<html>
<head>
    <meta charset="UTF-8">
    <title>添加学生信息</title>
</head>
</head>
<style>
 .top{
    background-color:whitesmoke;
    height: 100px;
    margin-bottom: 2px;
    font-family: "微软雅黑";
    font-size: 50px;
    text-align: center;
    }
  .middle{
  	background-color: aquamarine;
    height: 400px;
    align-content: center;
  }
  .bottom{
    background-color:white;
    height: 70px;
    width: 1200px;
   }
    </style>
<body>
<center>
   <div class="top">添加学生信息</div>
   <div class="middle">
    <form method="post" action="TEST6.php"  enctype="multipart/form-data">
    	
        <table width="400px" height="400px" border="0"  
        	cellpadding="0" cellspacing="1"  align="center">
            <tr>
                <td>&nbsp;姓名&nbsp;</td>
                <td><input type="text" name="name" ></td>
            </tr>
            <tr>
                <td>&nbsp;电话&nbsp;</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>&nbsp;专业&nbsp;</td>
                <td><input type="text" name="major"></td>
            </tr>
            <tr>
                <td>&nbsp;班级&nbsp;</td>
                <td><input type="text" name="class"></td>
            </tr>
            <tr>
                <td>&nbsp;宿舍&nbsp;</td>
                <td><input type="text" name="dormitoty"></td>
            </tr>
            <tr>
                <td>&nbsp;头像&nbsp;</td>
                <td><input type="file" name="touxiang"></td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" value="添加">
                    <input type="reset" value="重置">
                </td>

            </tr>
        </table>
        
    </form>
    </div>
</center>

</body>
</html>