<!-- 
_____ ______       ________      ________      ___      _______          ___                         
|\   _ \  _   \    |\   __  \    |\   ____\    |\  \    |\  ___ \        |\  \                         
\ \  \\\__\ \  \   \ \  \|\  \   \ \  \___|    \ \  \   \ \   __/|       \ \  \                       
 \ \  \\|__| \  \   \ \   __  \   \ \  \        \ \  \   \ \  \_|/__   __ \ \  \                       
  \ \  \    \ \  \   \ \  \ \  \   \ \  \____    \ \  \   \ \  \_|\ \ |\  \\_\  \                     
   \ \__\    \ \__\   \ \__\ \__\   \ \_______\   \ \__\   \ \_______\\ \________\                     
    \|__|     \|__|    \|__|\|__|    \|_______|    \|__|    \|_______| \|________|                       
                                                                                                         
                                                                                                         
                                                                                                         
 ________       ________      ___       __       ________      ___           _______       ___  __     
|\   ____\     |\_____  \    |\  \     |\  \    |\   __  \    |\  \         |\  ___ \     |\  \|\  \     
\ \  \___|_     \|___/  /|   \ \  \    \ \  \   \ \  \|\  \   \ \  \        \ \   __/|    \ \  \/  /|_   
 \ \_____  \        /  / /    \ \  \  __\ \  \   \ \   __  \   \ \  \        \ \  \_|/__   \ \   ___  \  
  \|____|\  \      /  /_/__    \ \  \|\__\_\  \   \ \  \ \  \   \ \  \____    \ \  \_|\ \   \ \  \\ \  \ 
    ____\_\  \    |\________\   \ \____________\   \ \__\ \__\   \ \_______\   \ \_______\   \ \__\\ \__\
   |\_________\    \|_______|    \|____________|    \|__|\|__|    \|_______|    \|_______|    \|__| \|__|
   \|_________|                                                                                          
                                                                                                         
 --> 
<?php
setcookie("witaj",1,time()+(3600*24),"/");
?>
<!doctype html>
<html lang="pl">
    <head>
        <title> D z i e ń  d o b r y</title>
        <meta charset="utf-8">
        <meta name="author" value="Maciej Szwałek">
        <meta name="description" content="Moja strona na 6 z Witryn,Proszę ja chce szóstkę.Napiszę ten egzamin jak najlepiej bo bardzo lubię programowanie.Obiecuję">
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MySQL, Zadanie na 6">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style8.css" type="text/css">
        <link rel="stylesheet" href="fontello-ed321cde/css/fontello.css" type="text/css">
        <link rel="icon" href="icons8-performance-macbook-100.png">
        <script></script>
    </head>
    <body onload='zegar()'>
        <div id="container">  
             <div id="menu">
                    <div class="elements"><span id="imie"><a href="index.php">Maciej Szwałek</a></span></div>
                        <div class="elements"><a href="Omnie.php"> O Mnie</a></div>
                        <div class="elements"><a href="foty.php"> Foty</a></div>
                        <div class="elements"><a href="utworz.php"> Utwórz plik</a></div>
                        <div class="elements"><a href="zaloguj.php"> Zaloguj się</a></div>
                    <div class="elements">
                        <span id="icon">
                           <?php 
                            @session_start();
                            require('dane.php');
                            //połączenie
                            $connect=mysqli_connect($host,$root,$haslo,$baza);
                            
                            @$id=$_SESSION['id'];
                            @$sql3="SELECT * FROM `dane` WHERE `id` LIKE '$id'";
                            @$zapytanie3=mysqli_query($connect,$sql3);
                            @$wiersz=mysqli_fetch_assoc($zapytanie3); 
                            echo(@$wiersz['Imie']." ".@$wiersz['Nazwisko']);
                            if(isset($_SESSION['id']))
                            {
                            echo(" <i class='demo-icon icon-circle'></i>");    
                            }
                            else
                            {
                            header("Location: index.php");    
                            echo("<i class='demo-icon icon-circle-empty'></i>");    
                            }      
                            ?>
                        </span>
                    </div>
            </div>
             <div id="content4"> 
                <?php 
                echo("Zalogowano pomyślnie!");
                echo("<hr>"); 
                ?>
                <form method="post" action="wyloguj.php">
                    <input type="submit" id="logout" value="wyloguj">
                </form>
                <?php 
                echo("Imie: ".$wiersz['Imie']."<br>"."Nazwisko: ".$wiersz['Nazwisko']);
                echo("<br>"."Login: ".$wiersz['login']); 
                ?>
                <?php
                require('dane.php');
                //połączenie
                $connect=mysqli_connect($host,$root,$haslo,$baza);
                echo("<br>");              
                if(!isset($_COOKIE["witaj"])) 
                {
                  echo "Logujesz się dzisiaj po raz pierwszy";
                }
                else
                {
                  echo "Logujesz się dzisiaj kolejny raz";
                }
                ?>
                 <div id='zegar'>
                 <script> 
                    function zegar()
                        {     
                            var sec = setInterval(time, 1);
                            function time()
                            {
                            var d = new Date();
                            var a='Aktualny czas: ';
                            var t = d.toLocaleTimeString(); 
                            document.getElementById("zegar").innerHTML = a+'<mark>' +t+'</mark>'; 
                            }
                            function update()
                            {
                            clearInterval(sec);
                            }
                        }
                 </script>
                 </div>
                 <div id="tajemnica" onclick="tajemnica()" ondblclick="tajemnica2()">
                    KLIKNIJ NA MNIE<br> 
                    ABY ODKRYĆ TAJEMNICĘ!
                 </div>
                 <div id="taj">
                 <script>
                 function tajemnica()
                         {  
                         document.getElementById('tajemnica').innerHTML="<span id='dawid'>dawid to fajny kolega<br> pozdrawiam!</span>";    
                         }
                 function tajemnica2()
                         {  
                         document.getElementById('tajemnica').innerHTML="<span id='dawid2'> KLIKNIJ NA MNIE! <br> ABY ODKRYĆ TAJEMNICĘ!</span>";   
                         }
                 </script>   
                 </div>
                 <div id="wpis_form">
                 <form method="post" action="dodajwpis.php">
                     <div>Dodaj wpis do bloga </div>
                     <div><input type="text" name="wpis" placeholder="co chcesz napisać?"></div>
                     <div> <input type="submit" name='dodaj_wpis' value="dodaj!"> </div>
                </form>
                 </div>
            </div>
             <div id="footer">
                 Maciej Szwałek
            </div> 
        </div>
         <script src="jquery-1.11.3.min.js"></script>
    </body>
</html>