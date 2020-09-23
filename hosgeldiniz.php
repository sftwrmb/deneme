<?php

    session_start();

    require_once 'conn.php';



   if ($_POST) {


	$kullanici_adi = trim($_POST['kullanici_adi']);
	$email = trim($_POST['eposta']);

	$kayitlar = $db->prepare("SELECT * FROM user_information WHERE name=? && email=?");
	$kayitlar->execute(array($kullanici_adi,$email));

    $say = $kayitlar->fetch(PDO::FETCH_ASSOC);

   //print_r($say); çıktısı: Array ( [id] => 1 [name] => Mustafa [phone] => 05421235262 [email] => mustafabaz@windowslive.com [country] => Türkiye [zip] => 6023219 )

	if ($say) {

		$_SESSION['oturum']=true;
		$_SESSION['kadi']=$kullanici_adi;
		$_SESSION['mail']=$email;

		

	    echo '<html>
	          <head>
	          <style>

	      p {
	      	   font-size: 30px;
	      	   font-style: verdana;
	      	   color: white;
	      	   margin-left: 500px;
	      	   margin-top: 100px;
	      }

	      body {
	      	background-color: #20b2aa;
	      }


	      </style>
	      </head><body><p>Merhaba, Hoşgeldiniz!<br /><br />
	      <strong>['.$_SESSION['kadi'].']</strong><br /><br />
	      <strong>['.$_SESSION['mail'].']</strong><br /><br />
	      <strong><a href="cikis.php">[Çıkış Yap]</a></p></strong>
	      </body></html>';
	      

	} else {

	   header("location: basarisiz.php");
    
    }


} else {

	header("location: get_users.php");

}


$db=null;


		

?>


