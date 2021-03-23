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
        <script src="https://skrypt-cookies.pl/id/c430c475303b99d9.js"></script>
    </head>
    <body  onload="zmien()">
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
                            echo("<i class='demo-icon icon-circle-empty'></i>");    
                            }                
                            ?>
                        </span>
                    </div>
            </div>           
            <div id="content8">
            <hr>
                <div id="slajder">
                    <div id="zdj">
                        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
                        <script type="text/javascript">
                            var numer = Math.floor(Math.random()*25)+1;
                            var timer1 = 0;
                            var timer2 = 0;
                            function schowaj()
                            {
                                $("#zdj").fadeOut(500);
                            }

                            function zmien()
                            {
                                numer++; 
                                if(numer>25) numer=1;
                                var plik = "<img id='slide' src='Photos/jpg/" + numer + ".jpg' />";
                                document.getElementById("zdj").innerHTML = plik;
                                $("#zdj").fadeIn(500);                         
                                timer1 = setTimeout("zmien()", 4000);
                                timer2 = setTimeout("schowaj()", 3500);
                            }
                        </script>
                    </div> 
                </div>
                <hr>
                <div id="fotos">
                </div>
                 <script>   
                        var i=1;
                        var a=26;
                        var c=0;
                        var d=5;   
                        var zm="";
                        var zdj=1;
                        for(i;i<=a;i++)
                        {
                        for(c;c<d;c++)
                            {
                                zm=zm+"<img class='jedno_zdjecie' src='Photos/jpg/" +zdj+ ".jpg'/>";    
                                document.getElementById("fotos").innerHTML=zm;  
                                zdj++;  
                                if(zdj==27)
                                {
                                break;    
                                }
                            } 
                            if(zdj==27)
                            {
                            break;    
                            }  
                            c=0; 
                            zm=zm+"<br>";                                  
                        }  
                    </script>
            </div>
             <div id="footer">
                 Maciej Szwałek
            </div>    
        </div>
        <script src="jquery-1.11.3.min.js"></script>
    </body>
</html>