<?php
	ob_start(); 

	echo "

Exercice 1.1
<br>
A = 9
B = 19
<br><br>
exercice 1.2
<br>
a = 21
<br>
b= 34
<br>
c= 34 - 21 = 13
<br><br>
exercice 1.3
<br>
A = 50
<br>
B = 46
<br><br>
exercice 1.4
<br>
a = 32
<br>
b = 32
<br>
c = 32
<br><br>
exercice 1.5
<br>
a = 29
<br>
b= 29
<br>
On attribue la valeur de B à A,
 la dernière est instruction peut être considérer comme useless
 <br>
Echanger, techniquement non, puisque B ne prends pas la valeur de A.
<br><br>
exercice 1.6
<br>
A = 10
<br>
B = 12

<br>
C <= A
<br>
B <= A
<br>
A <= C
<br><br>


exercice 1.7
<br>
Une variante du précédent : on dispose de trois variables A, B et C.<br> Ecrivez un algorithme transférant à B la valeur de
A, à C la valeur de B et à A la valeur de C <br>(toujours quels que soient les contenus préalables de ces variables).
<br>
A = 10<br>
B = 12<br>
C = 14<br>
D = 16<br>
E= 18
<br>
D<=B<br>
E<=C<br>
B<= A<br>
C<= D<br>
A<= E

<br><br>
exercice 1.8
A = '573'
B= '19'
C = '57319'
<br><br>
exercice 1.9
C = '57319'

";
$content = ob_get_clean();

	require "exo_1.html";

	?>

