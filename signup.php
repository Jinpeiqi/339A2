<html>
    <head>
        <title>Setting up database</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <script LANGUAGE="JavaScript">
        function ValidateForm(form){
            var ErrorText= "";
            if(form.username.value==""){
                document.getElementById(invalid_1).innerHTML=
            }
            if(form.password.value==""){
                ErrorText+="Please enter a password\n";
            }
            if(form.password2.value==""){
                ErrorText+="Please enter a password2\n";
            }
            if(form.password.value!=form.password2.value){
                ErrorText+="Password are not equal\n";
            }
            if(ErrorText!=""){
                alert (ErrorText );
                return false;
            }
            else{
                return true;
            }
        }
    </script>
    <body>
        <div class="P_quiz"><img  src='quiz.jpg' alt="quiz" ></div>
        <h1 class="title">QuizTime(Guest)</h1>
        <a href="index.php" class="button">Home</a>
        <a href="login.php"class="button">Log in</a>
        <a href="signup.php"class="button">Sign up</a>
        <p class="Home_info">=>You must be logged in to view this page.</p><br>
        <fieldset>
           <!-- <p id="invalid_1">Please enter a username</p>
            <p id="invalid_2">Please enter a password</p>
            <p id="invalid_3">These passwords don't match. Try again?</p>-->
        <form action='adduser.php' method='POST'>
        Username :<input type="text" name="username"><br>
        Password :<input type="password" name="password"><br>
        password2:<input type="password" name="password2"><br>
        <input type="submit" name="Signup" value="Signup" onClick="return ValidateForm(this.form)"><br>
        </form>
        </fieldset>

    </body>
</html>