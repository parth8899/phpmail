<html>
    <head>
        <title>Contact Form</title>
    </head>
<body>
<form action="mailsend.php" method="post">
    <table align="center" width="400" border="0" cellspacing="2" cellpadding="0">
        <tr>
            <td width="29%" class="bodytext">Name:</td>
            <td width="71%"><input name="name" type="text" id="name" size="32"></td>
        </tr>
        <tr>
            <td class="bodytext">Email:</td>
            <td><input name="email" type="text" id="email" size="32"></td>
        </tr>
        <tr>
            <td class="bodytext">Comment:</td>
            <td><textarea name="comment" cols="45" rows="6" id="comment" class="bodytext"></textarea></td>
        </tr>
        <tr>
            <td class="bodytext"> </td>
            <td align="left" valign="top"><input type="submit" name="Submit" value="Send"></td>
        </tr>
    </table>
</form>
</body>
</html>
