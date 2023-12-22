<?php

function randomPassword() {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()-_';
    
    $alphabet = $lowercase . $uppercase . $numbers . $specialChars;
        
	$small = "abcdefghjkmnpqrstuwxyz";
	$smallLength = strlen($small) - 1; 
	
	$capital = "ABCDEFGHJKLMNPQRSTUWXYZ";
	$capitalLength = strlen($capital) - 1; 

	$numbers = "23456789";
	$numbersLength = strlen($numbers) - 1; 

	
	$pass = array(); 
	$alphaLength = strlen($alphabet) - 1; 
    

    for($i = 0; $i<5; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n]; 
    }

   //5 kez dönüye sokuyoruz.
	for ($i = 0; $i < 5; $i++) {
		$n = rand(0, $alphaLength);     //alphabetten rasgele karakter seçilir 
		$pass[] = $alphabet[$n]; //alphabet içerisinde ne değişkeni rastgele index seçmek için kullanılır.
	}
		$n = rand(0, $smallLength);
		$pass[] = $small[$n];       //küçük harften rastgele 1 karakter passworde eklenir.

		$n = rand(0, $capitalLength);
		$pass[] = $capital[$n];		//büyük harften rastgele 1 karakter passworde eklenir.

		$n = rand(0, $numbersLength);
		$pass[] = $numbers[$n];	    //sayılardan rastgele 1 karakter passworde eklenir.
		
	return implode($pass); //implode ile dizi elemanlarını birleştirdik.
}
echo randomPassword();


?>