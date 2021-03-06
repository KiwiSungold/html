<?php
/*setcookie defineix una cookie per ser enviada juntament amb la resta de 
 *capçaleres HTTP, per tant ha de ser enviades abans que el script generi cap
 *sortida com els elements HTML*/
 
//Creem una cookie de nom vegetal, amb valor pastanaga, que caduqui 
//en una hora, que estigui disponible per qualsevol URL, amb domini buit
// i que es pugui enviar mitjançant una connexió no segura (http) amb el 
//servidor.
setcookie("vegetal","pastanaga",time()+3600, "/","",0);

print_r($_COOKIE);

if (isset($_COOKIE["vegetal"])) { //Si la cookie existeix en el navegador...
	//Mostrem valor de la cookie.
	echo "<p>Hola de nou! Has escollit: ".$_COOKIE["vegetal"].".</p>";
    
	//Modifiquem el valor de la cookie. El canvi no el podrem mostrar per
	//pantalla fins que no recarreguem la pàgina (tornem a enviar la petició HTTP).
	setcookie("vegetal","tomaquet",time()+3600, "/","",0);
	
} else { //Si no existeix (primer cop que executem script)...
	//Mostrem missatge.
	echo "<p>Hola. Aquesta és la teva primera visita.</p>";
}

//Eliminem la cookie creada
setcookie("vegetal","tomaquet",time()-3600, "/","",0);
?>
