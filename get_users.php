<?php


echo "<html><head><style>

		#kullanici_adi {

			width: 500;
			padding: 8px;
			margin-bottom: 10px;
			box-sizing: border-box;
			border: 2px solid red;

		}


		#email {

			width: 500;
			padding: 8px;
			margin-bottom: 10px;
			margin-left: 48px;
			box-sizing: border-box;
			border: 2px solid red;

		}


		div {

			margin: 200px 350px;
		}

		body {
			background-color: #20b2aa;
		}
	

		input[type=submit] {

			padding: 20px 50px;
			margin-left: 100px;
			background-color: #4CAF50;
			color: white;

		}

		input[type=reset] {

			padding: 20px 50px;
			margin-left: 10px;
			background-color: #4CAF50;
			color: white;

		}

		</style>
		</head>
		<body>
		<div>
		<form action='hosgeldiniz.php' method='post'>

			Kullanıcı Adı: <input type='text' name='kullanici_adi' id='kullanici_adi'><br />
			Email: <input type='text' name='eposta' id='email'><br />
		    <input type='submit' value='Giriş Yap'>
		    <input type='reset' value='Sıfırla'>

	       
		</form>
		</div>
		</body></html>";


?>