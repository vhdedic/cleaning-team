<?php

$ime=$_POST['ime'];
$email=$_POST['email'];
$poruka=$_POST['poruka'];
	
if (empty($ime) || empty($email) || empty($poruka)){
  echo 'Molimo vas da popunite sva polja!!!';
	echo '<p><a href="../pages/kontakt.html">Povratak na kontakt obrazac</a>.</p>';
}
	
else {        
  echo 'Vaše ime je: '.$ime.'<br>';
	echo 'Vaša email adresa je : '.$email.'<br>';
	echo 'Vaša poruka je: '.$poruka.'<br>';
	echo '<p><a href="../index.html">Povratak na početnu stranicu</a>.</p>';
}
    
?>


     