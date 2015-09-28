<html>
    <head>
        <title>Setting up database</title>
    </head>
    <body>
        <h3>Setting up...</h3>
<?php
    require_once 'function.php';
    createTable('member',
                'username VARCHAR(16),
               password VARCHAR(16),
               score  INTEGER(16),
               PRIMARY KEY (username)');
    createTable('profiles','
               username VARCHAR(16),
               text VARCHAR(255)');


?>
<br>...done.
</body>
</html>
