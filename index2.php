        <!-- EXO1 -->
        <?php 
        $chainedeConnection = 'mysql:dbname=colyseum;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $objetPdo = new PDO($chainedeConnection, $user, $password);


        $requeteSql =  'SELECT * FROM clients';
        foreach  ($objetPdo->query($requeteSql) as $ligne)
        {
            echo $ligne['lastName'] . " ";
            echo $ligne['firstName'] . " ";
            echo $ligne['birthDate'] . " ";
            echo $ligne['card'] . " ";
            echo $ligne['cardNumber'] . "<br>";
        }
        ?>
        <!-- EXO2 -->
        <?php 
        $chainedeConnection = 'mysql:dbname=colyseum;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $objetPdo = new PDO($chainedeConnection, $user, $password);


        $requeteSql =  'SELECT * FROM showTypes';
        foreach ($objetPdo->query($requeteSql) as $ligne)
        {   
            echo $ligne['type'] . " ";
            
        }

        ?>
        <!-- EXO3 -->
        <?php 
        $chainedeConnection = 'mysql:dbname=colyseum;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $objetPdo = new PDO($chainedeConnection, $user, $password);

        $requeteSql =  'SELECT * FROM clients LIMIT 20';
        foreach  ($objetPdo->query($requeteSql) as $ligne)
        {
            echo $ligne['lastName'] . " ";
            echo $ligne['firstName'] . " ";
            echo $ligne['birthDate'] . " ";
            echo $ligne['card'] . " ";
            echo $ligne['cardNumber'] . "<br>";
        }
        ?>
        <!-- EXO4 -->
        <?php 
        $chainedeConnection = 'mysql:dbname=colyseum;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $objetPdo = new PDO($chainedeConnection, $user, $password);

        $requeteSql =  'SELECT * FROM clients WHERE card = 1 ';
        foreach  ($objetPdo->query($requeteSql) as $ligne)
        {
            echo $ligne['card'] . " ";
            echo $ligne['lastName'] . " ";
            echo $ligne['firstName'] . "<br>";
        }
        ?>
        <!-- EXO5 -->
        <?php 
        $chainedeConnection = 'mysql:dbname=colyseum;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $objetPdo = new PDO($chainedeConnection, $user, $password);

        $requeteSql =  'SELECT * FROM clients WHERE lastName LIKE "M%" ORDER BY lastName ASC ';
        foreach  ($objetPdo->query($requeteSql) as $ligne)
        {
        
            echo $ligne['lastName'] . " ";
            echo $ligne['firstName'] . "<br>";
        }
        ?>
        <!-- EXO6 -->
        <?php 
        $chainedeConnection = 'mysql:dbname=colyseum;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $objetPdo = new PDO($chainedeConnection, $user, $password);  
        $requeteSql =  'SELECT performer, title, date, startTime FROM shows ORDER BY title ';
        foreach  ($objetPdo->query($requeteSql) as $ligne)
        {
        
            echo $ligne['title'] . " ";
            echo $ligne['performer'] . " ";
            echo $ligne['startTime'] . " ";
            echo $ligne['date'] . "<br> ";
        
        }
        ?>
        <!-- EXO7 -->
        <?php 
        $chainedeConnection = 'mysql:dbname=colyseum;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $objetPdo = new PDO($chainedeConnection, $user, $password);  
        $requeteSql =  'SELECT* FROM clients ';
        foreach  ($objetPdo->query($requeteSql) as $ligne)
        {
        
            echo $ligne['lastName'] . " ";
            echo $ligne['firstName'] . " ";
            echo $ligne['birthDate'] . " ";
            echo $ligne['card'] . " ";
            echo $ligne['cardNumber'] . "<br> ";
        }
        ?>


           <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>

        
        </body>
        </html>
            
        </body>
        </html>