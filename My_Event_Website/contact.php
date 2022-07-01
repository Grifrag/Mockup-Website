<!DOCTYPE html>
<html lang='en'>
<html>
    <head>
        <style>
            body{
                font-family: Verdana, sans-serif;
                font-size: 16px;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Επικοινωνία</title>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <?php  include("navbar.php"); ?> <!--navbar-->
        <h2>Φόρμα Επικοινωνίας</h2>
        <form action="contactfunc.php" method="POST">
            <label for="name">Όνομα:</label><br>
            <input type="text" id="name" name="name" placeholder="Όνομα"><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" placeholder="Email"><br>
            <label for="subject">Θέμα:</label><br>
            <input type="text" id="subject" name="subject" placeholder="Θέμα"><br>
            <label for="message">Μήνυμα:</label><br>
            <input type="text" id="message" name="message" placeholder="Μήνυμα">
            <input type="submit" value="Submit" name="submit">
        </form>
        <h2 >Στοιχεία επικοινωνίας</h3>
        <a>Διεύθυνση:Καραολή και Δημητρίου 80</a><br>
        <a>Τηλέφωνο:</a>
        <a href="tel:2104142000">210 4142000</a><br>
        <a>Email:</a>
        <a href="mailto:publ@unipi.gr">publ@unipi.gr</a><br>
        <iframe width=50% src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.525521061059!2d23.650679415322482!3d37.94151367972942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bbe5bb8515a1%3A0x3e0dce8e58812705!2zzqDOsc69zrXPgM65z4PPhM6uzrzOuc6_IM6gzrXOuc-BzrHOuc-Oz4I!5e0!3m2!1sel!2sgr!4v1621771975483!5m2!1sel!2sgr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </body>
    <footer><?php  include("footer.php"); ?></footer>
</html>