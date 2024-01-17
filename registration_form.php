<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
<center>
 
<div align="left"><a href="user.php">All User</a></div>
    <h1 style="color: red">Welcome to the registration form</h1>
    <form action="action.php" method="post" enctype="multipart/form-data">
    <table border="1">
    <tr>
            <td colspan="2" align="center"><b>User Registration:</b></td>
        </tr>
        <tr>
            <td><b>Name:</b></td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td><b>Email:</b></td>
            <td><input type="email" name="mail" required></td>
        </tr>
        <tr>
            <td><b>Password:</b></td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td><b>Gender:</b></td>
            <td><input type="radio" name="gender" value="Male" checked="checked">Male
            <input type="radio" name="gender" value="Female">Female</td>
        </tr>
        <tr>
            <td><b>Date of Birth:</b></td>
            <td><input type="date" name="dob" id="dob"></td>
        </tr>
        <tr>
            <td><b>Address:</b></td>
            <td><textarea cols="30" rows="2" name="address"></textarea></td>
        </tr>
 
        <tr>
            <td><b>course</b></td>
            <td><select name="course">
                <option>--select--</option>
                <option value="btech">btech</option>
                <option value="mtech">mtech</option>
                <option value="bca">bca</option>
                <option value="mca">mca</option>
            </select></td>
        </tr>
 
        <tr>
            <td><b>Language:</b></td>
            <td><input type="checkbox" name="language[]" value="hindi" >Hindi
            <input type="checkbox" name="language[]" value="english"  >English
            <input type="checkbox" name="language[]" value="bengali"  >Bengali</td>
        </tr>
        <tr>
            <td><b>Upload Image</b></td>
            <td><input type="file" name="img" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="sub" value="Submit">
                <input type="reset" name="reset" value="Reset">
            </td>
        </tr>
    </table>
    </form>
</center>
</body>
</html>
