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
        <fieldset>
            <p id="invalid_1">Please enter a username</p>
            <p id="invalid_2">Please enter a password</p>
            <p id="invalid_3">These passwords don't match. Try again?</p>
        <form action='adduser.php' method='POST'>
        Username :<input type="text" name="username"><br>
        Password :<input type="password" name="password"><br>
        password2:<input type="password" name="password2"><br>
        <input type="submit" name="Signup" value="Signup" onClick="return ValidateForm(this.form)"><br>
        </form>
        </fieldset>

    </body>
</html>