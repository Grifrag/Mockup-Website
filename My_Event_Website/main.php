<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">

        <title>Αρχική Σελίδα</title>
        <link rel="stylesheet" href="style.css">
    
        <script>
            function newTab(){
                window.open('showcase.php', '_blank');
            }
            </script>
    </head>
    <body>

        <p><?php  include("navbar.php"); ?></p> <!--navbar-->

        <section> <!-- Poioi eimaste.2GridColumn-->
            <h2>Ποιοί είμαστε;</h2>
            <div class="row">
             <div class="column2Grid">
                <p>Example description</p>
                </div>
                <div class="column2Grid">
                    <video width=100% controls>
                        <source src="video.mp4" type="video/mp4">
                    </video>
    
                    </div>
            </div>
        </section>
        <section> <!-- YphresiesMas.4GridColumn-->
            <h2 >Οι Υπηρεσίες μας</h2>
            <div class="row">
                <div class="column4Grid">
                    <h4>Ενοικίαση Ηχητικού Εξοπλισμού</h4>
                    <img src="example.jpg" class="responsive">
                </div>
                <div class="column4Grid">
                     <h4>Ενοικίαση Φωτισμού</h4>
                    <img src="example.jpg" class="responsive">
                </div>
                <div class="column4Grid">
                    <h4>Υπηρεσίες Catering </h4>
                    <img src="example.jpg" class="responsive">
                </div>
                <div class="column4Grid">
                    <h4>Παροχή Προσωπικού</h4>
                    <img src="example.png" class="responsive">
                </div>
            </div>
            <button id="interface2button" class="float-left submit-button" onclick=newTab() >Παρουσίαση Εταιρίας</button>

        </section>
        
    </body>
    <footer><?php  include("footer.php"); ?></footer>
</html>