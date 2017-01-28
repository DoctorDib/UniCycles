<html>
<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
    <fieldset >
        <legend>Login</legend>
        <input type='hidden' name='submitted' id='submitted' value='1'/>

        <label for='username' >UserName*:</label>
        <input type='text' name='username' id='username'  maxlength="50" />

        <label for='password' >Password*:</label>
        <input type='password' name='password' id='password' maxlength="50" />

        <input type='submit' name='Submit' value='Submit' />

    </fieldset>
</form>
</html>
<?php
function Login()
{
    if(empty($_POST['username']))
    {
        $this->HandleError("UserName is empty!");
        return false;
    }
    if(empty($_POST['password']))
    {
        $this->HandleError("Password is empty!");
        return false;
    }
    if($_POST['username'] == $_POST['password'])
    {
        $this->HandleError("Password cannot be the same as Username");
    }

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(!$this->CheckLoginInDB($username,$password))
    {
        return false;
    }

    session_start();

    $_SESSION[$this->GetLoginSessionVar()] = $username;

    return true;
}
