<html>
    <head>
        <title>Setting up database</title>
    </head>
    <script LANGUAGE="JavaScript">
        function ValidateForm(form){
            var ErrorText= "";
            if(form.username.value==""){
                ErrorText+="Please enter a username\n";
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
        <form action='adduser.php' method='POST'>
        Username:<input type="text" name="username"><br>
        Password:<input type="password" name="password"><br>
        password2:<input type="password" name="password2"><br>
        <input type="submit" name="Signup" value="Signup" onClick="return ValidateForm(this.form)"><br>
        </form>
    </body>
</html>