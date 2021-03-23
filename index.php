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
    <body>
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
            <div id="content">
            <div id="sen">To nic nie znaczy<mark>,</mark><br>  to o niczym nie świadczy<mark>.</mark> </div>
            <div><hr></div>
            <div class="fotografia"><img  src="Photos/4.jpg" alt="Foto1"></div>
                <h1> Robię strony<mark>,</mark> zasługuję na 6 </h1>
            <div class="fotografia2"><img  src="Photos/2.jpg" alt="Foto1"></div>
                <h1> Napiszę ten egzamin na <mark><br>100% </mark>!</h1>
            <div class="fotografia"><img  src="Photos/1.jpg" alt="Foto1"></div> 
                <h1></h1>
            <div class="fotografia2"><img  src="Photos/3.jpg" alt="Foto1"></div> 
                <h1></h1>
            <div class="fotografia"><img  src="Photos/5.jpg" alt="Foto1"></div> 
                <h1>Bo w sumie<mark>,</mark><br> czemu nie<mark>?</mark></h1>
            <div class="fotografia2"><img  src="Photos/6.jpg" alt="Foto1"></div> 
                <h3>NA TEJ STRONIE SĄ <br> DZIAŁAJĄCE SESJE<mark>,</mark><br> <br> MOŻNA UTWORZYĆ WŁASNY PLIK<mark>,</mark><br> <br> DZIAŁAJĄ TEŻ CIASTECZKA<mark>.</mark></h3>                
            <h1 id="ostat">POZDRAWIAM!</h1>  
            </div>   
             <div id="footer">
                  Maciej Szwałek
            </div>          
        </div>
        <script src="jquery-1.11.3.min.js"></script>
    </body>
</html>