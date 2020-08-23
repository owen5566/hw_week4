<?php
    $secretPage = $_GET["location"];
    if (isset($_GET["logout"])) {
        session_start();
        unset($_SESSION["userName"]);
        header("Location: index.php");
    }
    if ((isset($_POST["btnOK"]))) {
        if ($_POST["txtPassword"]===""||$_POST["txtPassword"]==="") {
            echo "請輸入帳號/密碼！";
        } else {
            session_start();
            $_SESSION["userName"]=$_POST["txtUserName"];
            $_SESSION["password"]=$_POST["txtPassword"];
            //如果是點會員連結導到登入頁的 登入後就導到會員頁
            if($secretPage==1){
              header("Location: secret.php");
            }else{
              header("Location: index.php");
            }
              
        }
    }
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Lab - Login</title>
</head>
<body>
<form id="form1" name="form1" method="post">
  <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 登入</font></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">帳號</td>
      <td valign="baseline"><input type="text" name="txtUserName" id="txtUserName" pattern="[\w_]{4,20}" required/></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">密碼</td>
      <td valign="baseline"><input type="password" name="txtPassword" id="txtPassword" pattern="[\w_]{4,20}" required/></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC">
      <input type="submit" name="btnOK" id="btnOK" value="登入" />
      <input type="reset" name="btnReset" id="btnReset" value="重設" />
      <input type="button" name="btnHome" id="btnHome" value="回首頁" onclick="location.href='index.php'"/>
      </td>
    </tr>
  </table>
</form>

</body>
</html>