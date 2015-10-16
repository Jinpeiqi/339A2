<html>
<head>
    <link rel="stylesheet" type="text/css" href="main.css">
    <script type='text/javascript'>
        function validation(){
            var name = document.getElementById("name").value;
            var psw1 = document.getElementById("psw1").value;
            var psw2 = document.getElementById("psw2").value;
            var msg= "";
            if(name==""){
                msg+="please enter a name \n";
            }
            if(psw1==""){
                msg+="please enter a password \n";
            }
            if(psw2==""){
                msg+="please enter a password2 \n";
            }
            if(psw1!=psw2){
                msg+="These passwords don't match \n";
            }
            if(psw1!=""){
                if(psw1.length<6){
                    msg+="At least 6 characters";
                }
            }
            if(msg==""){
                return true;
            }else{
                alert(msg);
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="P_quiz"><img  src='quiz.jpg' alt="quiz" ></div>
    <h1 class="title">QuizTime(Guest)</h1>
    <a href="index.php" class="button">Home</a>
    <a href="login.php"class="button">Log in</a>
    <a href="signup.php"class="button">Sign up</a>
    <a href='quiz2.html'class='button'>Quiz</a>
    <p class="Home_info">=>You must be logged in to view this page.</p><br>
    <form action="adduser.php" method="POST" onSubmit="return validation()">
        Username : <input type="text" name="username" id="name"><br>
        Password : <input type="password" name="password" id="psw1"><br>
        password2: <input type="password" name="password2" id="psw2"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>