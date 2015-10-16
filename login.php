<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <div class="P_quiz"><img  src='quiz.jpg' alt="quiz" ></div>
        <h1 class="title">QuizTime(Guest)</h1>
        <a href="index.php" class="button">Home</a>
        <a href="login.php"class="button">Log in</a>
        <a href="signup.php"class="button">Sign up</a>
        <a href='quiz2.html'class='button'>Quiz</a>
        <p class="Home_info">=>You must be logged in to view this page.</p><br>
        <form action='Checklogin.php' method='POST'>
            Username:<input type="text" name="username"><br>
            Password:<input type="password" name="password"><br>
            <input type="submit" name="login" value="Log in">
        </form>
    </body>
</html>

