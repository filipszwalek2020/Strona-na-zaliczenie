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
        <title> D z i e ??  d o b r y</title>
        <meta charset="utf-8">
        <meta name="author" value="Maciej Szwa??ek">
        <meta name="description" content="Moja strona na 6 z Witryn,Prosz?? ja chce sz??stk??.Napisz?? ten egzamin jak najlepiej bo bardzo lubi?? programowanie.Obiecuj??">
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MySQL, Zadanie na 6">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style8.css" type="text/css">
        <link rel="stylesheet" href="fontello-ed321cde/css/fontello.css" type="text/css">
        <link rel="icon" href="icons8-performance-macbook-100.png">
        <script></script>
    </head>
    <body>
        <div id="container">     
             <div id="menu">
                    <div class="elements"><span id="imie"><a href="index.php">Maciej Szwa??ek</a></span></div>
                        <div class="elements"><a href="Omnie.php"> O Mnie</a></div>
                        <div class="elements"><a href="foty.php"> Foty</a></div>
                        <div class="elements"><a href="utworz.php"> Utw??rz plik</a></div>
                        <div class="elements"><a href="zaloguj.php"> Zaloguj si??</a></div>          
                    <div class="elements">
                        <span id="icon">
                            <?php ?>
                            <i class="demo-icon icon-circle-empty"></i>
                        </span>
                    </div>
            </div>
             <div id="content4">
                <?php 
                echo("<mark style='color:red;'> Poda??e?? z??e dane </mark>"); 
                ?>
                <form method="post" action="logowanie.php">
                <span id="forms">Login:</span>  
                <div><input type="text" name="login"> </div> 
                <div> <span  id="forms">Password:</span> </div>     
                <div> <input type="password" name="haslo"> </div>   
                <input type="reset" value="Wyczy????">
                <input type="submit" value="Zaloguj">     
                </form>
            </div>
             <div id="footer">
                 Maciej Szwa??ek
            </div>  
        </div>
        <script src="jquery-1.11.3.min.js"></script>
    </body>
</html>