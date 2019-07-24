<?php
   /***********************************************************************************************************************
   *                                              Dev.Halil Han Badem                                                     *
   *                                                  24/07/2019                                                          * *                                              Instagram: halilhanbademm                                               *
   *                                      Github, Twitter, Facebook: halilhanbadem                                        *
   *                                            Instagram: halilhanbademm                                                 *
   *                                          halilhanbadem@protonmail.com                                                *
   ***********************************************************************************************************************/


   function AES256CBCEnc($encData, $encPassword, $encIVKey){
   	return openssl_encrypt($encData, "aes-256-cbc", $encPassword, 0, $encIVKey);
   }

   function AES256CBCDec($decData, $decPassword, $decIVKey){
   	return openssl_decrypt($decData, "aes-256-cbc", $decPassword, 0, $decIVKey);
   }


  /* $sifrele = AES256CBCEnc("halilhanbadem testi türkçe karakter", "pstestpstestpstestpstestpstest12", "ivtest_ivtest123"); 
   echo "Şifreli veri: " . $sifrele . "<br>";
   $sifre_cozum = AES256CBCDec($sifrele, "pstestpstestpstestpstestpstest12", "ivtest_ivtest123");
   echo "Çözümlü veri(UTF-8): " . $sifre_cozum;
   echo "<br> <br>";




  */


   



   ?>


   <!DOCTYPE html>
   <html>
   <head>
   	<title>AES Test Screen</title>
   	<style type="text/css">
   		* {
   			box-sizing: border-box;
   		}

   		input{
   			width: 100%
   			padding: 12px 20px;
   			margin: 8px 0;
   			box-sizing: border-box;
   		}

   		input:focus{
   			background-color: lightblue;
   		}

   		.kontayner{
   			padding: 20px;
   			background-color: lightgray;
   		}

   		label{
   			padding: 12px 12px 12px 0;
   			display: inline-block;
   		}

   		.col-25 {
   			float: left;
   			width: 25%;
   			margin-top: 6px;
   		}

   		.col-75 {
   			float: left;
   			width: 75%;
   			margin-top: 6px;
   		}

   		.row:after {
   			content: "";
   			display: table;
   			clear: both;
   		}

   	</style>
   </head>
   <body>
   	<caption>AES Encryption & Decryption - DELPHI & PHP: <b>AES-256-CBC</b></caption>
   	<form name="aes" id="aes" method="POST" action="phpAES.php">
   		<div class="kontayner">
   		<div class="row">
   			<div class="col-25">
   				<label for="aes_data">Data</label> 
   			</div>
   			<div class="col-75">
   				<input type="text" name="aes_data" autofocus="true" required="true"> <br>
   			</div>
   		</div>

   		<div class="row">
   			<div class="col-25">
   				<label for="aes_key">Key(32 char.)</label> 
   			</div>
   			<div class="col-75">
   				<input type="text" name="aes_key" autofocus="true" required="true"> <br>
   			</div>
   		</div>

   		<div class="row">
   			<div class="col-25">
   				<label for="aes_iv">IV(16 char.)</label> 
   			</div>
   			<div class="col-75">
   				<input type="text" name="aes_iv" autofocus="true" required="true"> <br>
   			</div>
   		</div>
   				<input type="hidden" name="aespost">
   				<input type="submit" value="Submit"> <br>

</form>
   	</body>
   	</html>


<br> <br>
 
 <?php

 if (isset($_POST["aespost"])) {
 	echo "<b>Şifresiz veri: </b>" . $_POST["aes_data"];
 	echo "<br><b>Şifreli veri: </b>" . AES256CBCEnc($_POST["aes_data"], $_POST["aes_key"], $_POST["aes_iv"]);
    echo "<br><b>AES Key: </b>" . $_POST["aes_key"];
    echo "<br><b>IV Key (Opsiyonel; güvenlik için kullanınız.): </b>" . $_POST["aes_iv"];
 }

   ?>