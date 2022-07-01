<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">

        <title>Αρχική Σελίδα</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php  include("navbar.php"); ?> <!--navbar-->
        
        
        <h2>Φόρμα Εγγραφής</h2>
        <form action="subscribe.php" method="POST">
            <label for="email">Username:</label><br>
            <input type="text" id="username" name="username" placeholder="Username"><br>
            <label for="name">Όνομα:</label><br>
            <input type="text" id="name" name="name" placeholder="Όνομα"><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" placeholder="Email"><br>
            <input style="margin-top: 1px;"type="submit" value="Submit" name='submit'>
        </form>

    </body>
    <footer><?php  include("footer.php"); ?></footer>
</html>