<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="sendmail.php" method="post">
    <table width="450px">


        <tr>
            <td valign="top">
                <label for="first_name">First Name *</label>
            </td>
            <td valign="top">
                <input type="text" name="first_name" size="30">
            </td>
        </tr>


        <tr>
            <td valign="top">
                <label for="last_name">Last Name *</label>
            </td>
            <td valign="top">
                <input type="text" name="last_name" size="30">
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="email">Email Address *</label>
            </td>
            <td valign="top">
                <input type="email" name="email" size="30">
            </td>
        </tr>


        <tr>
            <td valign="top">
                <label for="phone">Telephone *</label>
            </td>
            <td valign="top">
                <input type="text" name="phone" size="30">
            </td>
        </tr>


        <tr>
            <td valign="top">
                <label for="comments">Comments *</label>
            </td>
            <td valign="top">
                <textarea type="text" name="comments" maxlength="1000" cols="25" rows="6">
            </textarea>
            </td>
        </tr>


        <tr>
            <td colspan="2" style="text-align:center">
        <input type="submit" value="Submit"></td>
        </tr>

    </table>
</body>
</html>