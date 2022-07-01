<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">

        <title>Υπολογισμός</title>
        <link rel="stylesheet" href="style.css">
        <style>
            #h2{
                padding:10px;
                text-align:center;
            }
        </style>
        <script>
            function calc() {
                var per,staff,days, text;

                //input value
                per = document.getElementById("people").value;
                staff = document.getElementById("staff").value;
                days = document.getElementById("days").value;

                
                if (isNaN(per) || per < 1 ) {
                     text = "Άκυρος αριθμός παρευρισκόμενων";
                     document.getElementById("message").innerHTML = text;}
                    else if(isNaN(staff) || staff < 1){
                        text = "Άκυρος αριθμός προσωπικού";
                        document.getElementById("message").innerHTML = text;}
                    else if(isNaN(days)||days<1){
                            text = "Άκυρος αριθμός ημερών";
                             document.getElementById("message").innerHTML = text;
                        }
                else{
                    workHours=days*8;

                    if(per<501){
                        staffCost=staff*10*workHours;
                        daysCost=500*days;
                        peopleFees=per*0.5;
                        totalCost=staffCost+daysCost+peopleFees;
                    
                    }else if( per<1001){
                        staffCost=staff*8*workHours;
                        daysCost=400*days;
                        peopleFees=per*0.4;
                        totalCost=staffCost+daysCost+peopleFees;
                    }
                        
                    else if(per<1501){
                        staffCost=staff*6*workHours;
                        daysCost=300*days;
                        peopleFees=per*0.3;
                        totalCost=staffCost+daysCost+peopleFees;}
                        
                    else if(per<2001){
                        staffCost=staff*5*workHours;
                        daysCost=200*days;
                        peopleFees=per*0.2;
                        totalCost=staffCost+daysCost+peopleFees;
                        }
                    else{
                        staffCost=staff*4*workHours;
                        daysCost=150*days;
                        peopleFees=per*0.15;
                        totalCost=staffCost+daysCost+peopleFees;
                        }
                        
                    document.getElementById("message").innerHTML = "Το κόστος αποστολής είναι: "+totalCost+"€";
                    
                    


                } }     
                
        </script>
    </head>
    <body>
        <?php  include("navbar.php"); ?> <!--navbar-->
        
        <table> <!-- PriceCalculator-->
            
            <h2 id="h2">Υπολογισμός Κόστους Παροχής υπηρεσιών</h2>
            <tr>
            <td>Πλήθος των παρευρισκόμενων:</td>
            <td><input class="calc"type="text" id="people" placeholder="Πλήθος των παρευρισκόμενων"></td>
            </tr>
            <tr>
            <td>Πλήθος του προσωπικού:</td>
            <td> <input class="calc" type="text" id="staff" placeholder="Πλήθος του προσωπικού"></td>
            </tr>
            <tr>
            <td>Ημέρες διάρκειας συνεδρίου:</td>
            <td><input class="calc" type="text" id="days" placeholder="Ημέρες διάρκειας συνεδρίου"></td>
            </tr>
            <tr>
                <td>
            <button class="calc" type="button" onclick="calc()">Υπολογισμός</button></td>
            
            </tr>
            
            </div>
        </table>
        <p id="message"></p>
    </body>
    <footer><?php  include("footer.php"); ?></footer>
</html>