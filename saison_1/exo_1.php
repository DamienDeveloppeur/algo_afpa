<?php
	ob_start(); 
?>
	<div class="nes-container is-dark with-title">
  <p class="title"> Exercice 1.1</p>
  <p>Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ? </p>
  Variables A, B en Entier<br>
	Début<br>
	A ← 17<br>
	B ← A + 2<br>
	A← 9<br>
	Fin<br>
	Resultat : <br>
		A = 9<br>
		B = 19<br>
	

</div>

<div class="nes-container is-dark with-title">
  <p class="title"> Exercice 1.2</p>
  <p>Quelles seront les valeurs des variables A, B et C après exécution des instructions suivantes ? </p>
  Variables A, B, C en Entier<br>
Début<br>
A ← 51<br>
B ← 34<br>
C ← A + B<br>
A ← 21<br>
C ← B – A<br>
Fin<br>
Resultat : <br>
A = 21 ; B = 34 ; C=13 
		<br><br>

</div>

<div class="nes-container is-dark with-title">
  <p class="title"> Exercice 1.3</p>
  <p>Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ? </p>
  Variables A, B en Entier<br>
Début<br>
A ← 49<br>
B ← A + 4<br>
A ← A + 1<br>
B ← A - 4<br>
Fin<br>
Resultat <br>
		
		A = 50 <br>
		 B = 46 
		<br><br>

</div>

<div class="nes-container is-dark with-title">
  <p class="title"> Exercice 1.4</p>
  <p>Quelles seront les valeurs des variables A, B et C après exécution des instructions suivantes ?</p>
  Variables A, B, C en Entier<br>
Début<br>
A ← 13<br>
B ← 19<br>
C ← A + B<br>
B ← A + B<br>
A ← C<br>
Fin<br>
		<br>
		A = 32 <br>
		 B = 32 <br>
		  C=32 <br>
		<br><br>

</div>

<div class="nes-container is-dark with-title">
  <p class="title"> Exercice 1.5</p>
  <p>Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ? </p>
  Variables A, B en Entier<br>
Début<br>
A ← 14<br>
B ← 29<br>
A ← B<br>
B ← A<br>
Fin <br>
		<br>
		A = 29 ; B = 29 ; 
		<br>
Echanger les deux dernières instructions auraient pour conséquences d'attribuer la valeur 14 à A et B
</div>

<div class="nes-container is-dark with-title">
  <p class="title"> Exercice 1.6</p>
  <p>Ecrire un pseudo-code permettant d’échanger les valeurs de deux variables A et B,<br>
	   et ce quel que soit leur contenu préalable. </p>

 DEBUT<br>
	A= 14<br>
	B= 12<br>
	<br>
	<br>
 	C = A<br>
 	A = B<br>
	 B = C<br>
	 <br>
	A = 12<br>
	B = 14<br>
FIN<br>

		<br>

</div>

<div class="nes-container is-dark with-title">
  <p class="title"> Exercice 1.7</p>
  <p>Une variante du précédent : on dispose de trois variables A, B et C.<br>
Ecrivez un algorithme transférant à B la valeur de A, à C la valeur de B et à A la valeur de C<br>
 (toujours quels que soient les contenus préalables de ces variables). </p>
	  
Début<br>
A = 10<br>
B = 12<br>
C = 14<br>
D = 0<br>
<br>
DEBUT	<br>																	
	D = B 	<br>																	
	B = A 	<br>																	
	A = C<br>
	C = D<br>
FIN<br>


</div>

<div class="nes-container is-dark with-title">
  <p class="title"> Exercice 1.8</p>
  <p>Que produit l’algorithme suivant ? </p>
	  
  Variables A, B, C en Caractères
   Début
	A ← "573"<br>
B ← "19"<br>
 C ← A + B <br>
	Fin<br>
  A = '573'<br>
B= '19'<br>
C = '57319'<br>


</div>

<div class="nes-container is-dark with-title">
  <p class="title"> Exercice 1.8</p>
  <p>Que produit l’algorithme suivant ? </p>
	  
  Variables A, B, C en Caractères<br>
   Début<br>
	A ← "573"<br>
	 B ← "19"<br>
	  C ← A & B <br>
	  Fin<br>
	  A ← "573"<br>
	  B ← "19"<br>
	  C = '57319'<br>
</div>
<?php
$content = ob_get_clean();

	require "exo_1.html";

	?>

