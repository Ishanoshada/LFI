<html>

<head>
    <title>Admin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script LANGUAGE="JavaScript">
        <!--

        fieldlist = [
            ["admin_id", "아이디"],
            ["admin_passwd", "비밀번호"]
        ];

        function chk_login() {
            for (i = 0; i < fieldlist.length; i++) {
                if (eval("login_form." + fieldlist[i][0] + ".value.split(' ').join('')") == '') {
                    alert(fieldlist[i][1] + "를 입력해 주세요.");
                    eval("login_form." + fieldlist[i][0]).focus();
                    return false;
                }
            }
            return true;
        }
        
        //-->
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#admin_id").focus();
        });

    </script>
</head>

<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
    
    <form name="login_form" action="process.php" method=post onSubmit="return chk_login();" style="margin:0px">
        <input type="hidden" name="action" value="login">
        <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="100%" height="30%" colspan="3"></td>
            </tr>
            <tr>
                <td width="50%"></td>
                <td>
                    <table width="657" height="277" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td background="img/login_bg.gif" width="657" height="277">
                                <table width="657" height="277" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td height="106" colspan="3"></td>
                                    </tr>
                                    <tr height="45">
                                        <td width="265"></td>
                                        <td>
                                            <table width="345" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td background="img/login_bg_text.gif" width="275" style="padding-left:80px;">
                                                        <div>
                                                            <input type="text" name="id" id="admin_id" value="" class="input_point_free" style="width:180px;height:19px;" maxlength="20">
                                                        </div>
                                                        <div>
                                                            <input type="password" name="passwd" value="" class="input_point_free" style="width:180px;height:19px;" maxlength="20">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="image" src="img/login_btn.gif" align="absmiddle">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="49"></td>
                                    </tr>
                                    <tr>
                                        <td height="126" colspan="3"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="50%"></td>
            </tr>
            <tr>
                <td width="100%" height="50%" colspan="3"></td>
            </tr>
        </table>
    </form>
    
</body>

</html>
