<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">

        <title>Αρχική Σελίδα</title>
        <link rel="stylesheet" href="style.css">
        <script>
            function newTab(){
                window.open('newsletter.php', '_blank');
            }
            </script>
    </head>
    <body>
        <?php  include("navbar.php"); ?> <!--navbar-->
        <section> <!-- Poioi eimaste.3GridColumn-->
            <h2>Σχετικά με εμάς;</h2>
            
                <div class="row">
                    <div class="column3Grid" id="phone">
                        <h3>Η φιλοσοφία μας</h3>
                        <p>Example description</p>
                    
                    </div>
                    <div class="column3Grid" id="phone">
                        <h3>Το όραμα μας</h3>
                        <p>Example description2</p>
                    
                    </div>
                    <div class="column3Grid" id="phone">
                        <h3>Ο στόχος μας</h3>
                        <p>Example description3</p>
                
                    </div>
        </section>
        <section></section>
            <button id="interface5button" class="float-left submit-button" onclick=newTab() >Εγγραφή στο Newsletter</button>

        </section>

    </body>
    <footer><?php  include("footer.php"); ?></footer>
</html>