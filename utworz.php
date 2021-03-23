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
                    echo("udało się zapisać plik o nazwie $tytul");
                }
                else
                    {
                    echo('Musisz coś wpisać');       
                    }        
                }            
                if(isset($_POST['submit']))
                {
                tworzenie();   
                }
                else
                { 
                //w sumie nie wiem co tu dać więc nic nie dam xD
                //wiem że zadziała bez tego ale mi to logicznie przeszkadza więc sobie piszę 
                }        
                ?>
                <form method="post" action="">
                <div>
                    <div id="podaj_n">Podaj nazwę pliku</div>
                   <div> <input type="text" name="title"  title="BEZ kropki i na pewno bez .txt wrrrr"></div>
                    <textarea name="dane_wprowadzone"></textarea>
                </div>   
                <input type="reset" value="Wyczyść">
                <input type="submit" id="logout" value="Utwórz"  name="submit">                 
                </form>          
                <hr>
                <form method="post" action="">  
                <div id="otwarcie">    
                    <div>Podaj nazwę pliku</div>
                    <div> <input type="text" name="title2"  title="BEZ kropki i na pewno bez .txt wrrrr"></div>
                    <input type="submit" id="logout" value="Otwórz plik"  name="submit2"> 
                </div> 
                </form>   
                <?php 
                if(isset($_POST['submit2']))
                {
                otworzenie();   
                }
                else
                { 
                //w sumie nie wiem co tu dać więc nic nie dam xD
                //wiem że zadziała bez tego ale mi to logicznie przeszkadza więc sobie piszę 
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
                @$plik=fopen("$tytul", "r")or die("Nie mogę otworzyć pliku"); 
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
                 Maciej Szwałek
            </div> 
        </div>
         <script src="jquery-1.11.3.min.js"></script>
    </body>
</html>