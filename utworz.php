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
         <script src="https://skrypt-cookies.pl/id/c430c475303b99d9.js"></script>
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
                            <?php 
                            @session_start();
                            require('dane.php');
                            //po????czenie
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
            <div id="content3">
                <?php
                function tworzenie()
                {      
                if(!empty($_POST['dane_wprowadzone']))
                {
                    @$tekst=$_POST['dane_wprowadzone'];
                    @$tytul=$_POST['title'];
                    if(empty($_POST['title']))
                    {
                        $tytul="plik.txt";          
                    }
                    else
                    {
                        $tytul=$tytul.".txt";    
                    }

                    $plik = fopen("$tytul", "w");
                    fwrite($plik, $tekst);
                    fclose($plik); 
                    echo("uda??o si?? zapisa?? plik o nazwie $tytul");
                }
                else
                    {
                    echo('Musisz co?? wpisa??');       
                    }        
                }            
                if(isset($_POST['submit']))
                {
                tworzenie();   
                }
                else
                { 
                //w sumie nie wiem co tu da?? wi??c nic nie dam xD
                //wiem ??e zadzia??a bez tego ale mi to logicznie przeszkadza wi??c sobie pisz?? 
                }        
                ?>
                <form method="post" action="">
                <div>
                    <div id="podaj_n">Podaj nazw?? pliku</div>
                   <div> <input type="text" name="title"  title="BEZ kropki i na pewno bez .txt wrrrr"></div>
                    <textarea name="dane_wprowadzone"></textarea>
                </div>   
                <input type="reset" value="Wyczy????">
                <input type="submit" id="logout" value="Utw??rz"  name="submit">                 
                </form>          
                <hr>
                <form method="post" action="">  
                <div id="otwarcie">    
                    <div>Podaj nazw?? pliku</div>
                    <div> <input type="text" name="title2"  title="BEZ kropki i na pewno bez .txt wrrrr"></div>
                    <input type="submit" id="logout" value="Otw??rz plik"  name="submit2"> 
                </div> 
                </form>   
                <?php 
                if(isset($_POST['submit2']))
                {
                otworzenie();   
                }
                else
                { 
                //w sumie nie wiem co tu da?? wi??c nic nie dam xD
                //wiem ??e zadzia??a bez tego ale mi to logicznie przeszkadza wi??c sobie pisz?? 
                }  
                function otworzenie()
                { 
                @$tytul=$_POST['title2'];   
                if(empty($_POST['title2']))
                {
                $tytul="plik.txt";          
                }
                else
                {
                $tytul=$tytul.".txt";    
                }     
                @$plik=fopen("$tytul", "r")or die("Nie mog?? otworzy?? pliku"); 
                echo("<br> <br> <br>");    
                while(!feof($plik)) 
                {
                echo("<div id='plik1'>");
                echo(fgets($plik)."<br>");
                echo("</div>");
                }                
                fclose($plik);    
                }
                ?>
             </div>
             <div id="footer">
                 Maciej Szwa??ek
            </div> 
        </div>
         <script src="jquery-1.11.3.min.js"></script>
    </body>
</html>