<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>

<style>
    body {
        background: -webkit-linear-gradient(#3851f5,#8d9bf7);
       
    }

    #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
    }

    #card-content {
        padding: 12px 44px;
    }

    #card-title {
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 4px;
        padding-bottom: 22px;
        padding-top: 13px;
        text-align: center;
    }

    .underline-title {
        background: -webkit-linear-gradient(right, #7a110a, #7a110a);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 89px;
    }

    a {
        text-decoration: none;
    }

    label {
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
    }

    #forgot-pass {
        color: #7a110a;
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 3px;
        text-align: right;
    }

    .form {
        align-items: left;
        display: flex;
        flex-direction: column;
    }

    .form-border {
        background: -webkit-linear-gradient(right, #7a110a, #7a110a);
        height: 1px;
        width: 100%;
    }

    .form-content {
        background: #fbfbfb;
        border: none;
        outline: none;
        padding-top: 14px;
    }
    #signup {
    color: #7a110a;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #ec59ff, #4ae7ff);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #7a110a;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #ff0400;
}
#copy{
  font-family: "Raleway Thin", sans-serif;
  color:#ffffff;
  letter-spacing: 1px;
  padding-bottom: 2px;
  padding-top: 20px;
  text-align: center;
}
</style>
</head>
<body>
<div id="card">
<div id="card-content">
    <div id="card-title">
        <h2>Login</h2>
        <div class="underline-title"></div>
    </div>
    <form method="POST" class="form" action="login.php"> 
    <label for="user-email" style="padding-top:13px">&nbsp;Email</label>
    <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
    <div class="form-border"></div>
    <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
    <input id="user-password" class="form-content" type="password" name="password" required />
    <div class="form-border"></div>
    <a href="#">
        <legend id="forgot-pass">Forgot password?</legend>
    </a>
    <input id="submit-btn" type="submit" name="submit" value="Login" />
    <a href="#" id="signup">Create Account?</a>
</div>
</div> 
<div class id="copy">&copy; Copyright by Webkece</div>
</form>
</body>
</html>

        



    
