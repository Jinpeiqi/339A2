<html>
    <head>
        <title>Setting up database</title>
        <style type="text/css">
            #invalid_1{
                color:red;
                position: absolute;
                top: 0px;
                left:270px;
            }
            #invalid_2{
                color:red;
                position: absolute;
                top: 28px;
                left:270px;
            }
            #invalid_3{
                color:red;
                position: absolute;
                top: 56px;
                left:270px;
            }
             #title{
                 color: #d068ff;
                 background-color: #ffb489;
                 text-align: center;
             }
            #P_quiz{
                text-align: center;
            }
            #Home_info{
                width: 450px;
                height: 25px;
                border: 3px solid #8AC007;
                background: #66ed86;
                font-size: 20px;
                color: #4a64ed;
            }
        </style>
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
    <div id="P_quiz"><img  src="quiz.jpg" alt="quiz" "></div>
    <h1 id="title">QuizTime(Guest)</h1>
    <div id="button"> <a href="index.php"><input type="button" value="Home"></a>
        <a href="login.php"><input type="button" value="Log in"></a>
        <a href="signup.php"><input type="button" value="Sign up"></a>
    </div>
    <p id="Home_info">=>You must be logged in to view this page.</p><br>
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