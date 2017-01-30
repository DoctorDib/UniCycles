<html>

<form action="checkRegister.php" method="post" enctype="multipart/form-data">

<fieldset style="width:70%"><legend>Registration Form</legend>
    <table border="0">
        <tr>
            <form method="POST" action=""
        </tr>
        <tr>
            <td>
                Forename</td><td> <input type="text" name="Forename">
            </td>
        </tr>
        <br><br>
        <tr>
            <td>
                Surname</td><td> <input type="text" name="Surname">
            </td>
        </tr>
        <br><br>
        <tr>
            <td>
                UP Number</td><td> <input type="text" name="upNumber">
            </td>
        </tr>
        <br><br>
        <tr>
            <label for="day">Date of Birth (normal):</label>
            <div id="date2" class="datefield">
                <input id="day" type="tel" maxlength="2" placeholder="DD" name="day"/> /
                <input id="month" type="tel" maxlength="2" placeholder="MM" name="month"/> /
                <input id="year" type="tel" maxlength="4" placeholder="YYYY" name="year"/>
            </div>
        </tr>
        <br><br>
        <tr>
            <td>
                Phone Number</td><td> <input type="text" name="phoneNumber">
            </td>
        </tr>
        <tr>
            <td>
                Password</td><td> <input type="password" name="pass">
            </td>
        </tr>
        <tr>
            <td>
                Confirm Password </td><td><input type="password" name="cpass">
            </td>
        </tr>
        <tr>
            <td>
                <input id="button" name="submit" value="go!"="" type="submit">
            </td>
        </tr>
        <tr>
            What is your role in the university?
            <select name="universityRole">
                <option value="">Select...</option>
                <option value="Student">Student</option>
                <option value="Lecturer">Lecturer</option>
                <option value="Other">Other</option>
            </select>
        </tr>
    </table>
</fieldset>
</form>
</html>
