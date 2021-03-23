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
session_start();

if(isset($_SESSION['id']))
{
header('Location: zalogowano.php');    
    
}

else{
require('dane.php');
//połączenie
$connect=mysqli_connect($host,$root,$haslo,$baza);


$bool=0;

@$login=$_POST['login'];
@$haslo=$_POST['haslo'];

$sql1="SELECT * FROM `dane` WHERE 1"; 

$wynik1=mysqli_query($connect, $sql1);

if(mysqli_num_rows($wynik1)>0)
{
	while($wiersz= mysqli_fetch_assoc($wynik1))
	{
		if($wiersz['login']==$login)
        {
        $bool=1;
        break;  
        }
        else
        {
        header("Location: zle.php");
        }
	}
}



if($bool==1)
{
//zapytanie
$sql="SELECT * FROM `dane` WHERE `login` LIKE '$login'"; 
$wynik=mysqli_query($connect,$sql);
//pobrane od użytkownika hasło oraz login

$wiersz = mysqli_fetch_assoc($wynik);   
if($haslo == "" && $login == "")
    {
    header("Location: zle.php");
    }
elseif($haslo == $wiersz['password'] && $login == $wiersz['login'])
    {
    //session_start();
    $id=$wiersz['id'];
    
    $_SESSION['id']=$id;
    header("Location: zalogowano.php");
    }
else
    {
    header("Location: zle.php");
    } 
}

mysqli_close($connect);   
}
?>