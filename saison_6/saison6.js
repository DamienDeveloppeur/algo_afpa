function exo61()
{
    var divA = document.getElementById("AJS61");
    var array = [];
    var p = 0;
    for (i =0; i < 7; i++)
    {
      p = 0;
       array.push(p);
    }
    //divA.innerHTML = array;
    document.getElementById("AJS61").innerHTML= array;
}

function exo62()
{
    var arrayLetter = [];
  
    for (i = 0; i < 6; i++)
    {
        if (i == 0)
        {
            arrayLetter.push('a');
        }
        else if (i == 1)
        {
            arrayLetter.push('e');
        }
        else if (i == 2)
        {
            arrayLetter.push('i');
        }
        else if (i == 3)
        {
            arrayLetter.push('o');
        }
        else if (i == 4)
        {
            arrayLetter.push('u');
        }
        else if (i == 5)
        {
            arrayLetter.push('y');
        }
        

    }

    document.getElementById("AJS62").innerHTML= arrayLetter;
}

var sSoluceStyle = "";
var iCompteur63 = 0;
function exo63()
{
    var nbr1 = +document.getElementById("FJS63").value;
    iCompteur63++;

    if (iCompteur63 < 10)
    {

        var array = [];
   
        array.push(nbr1);
        sSoluceStyle = sSoluceStyle  + " " + nbr1;
        document.getElementById("AJS63").innerHTML = sSoluceStyle;
    }
    else if (iCompteur63 == 9)
    {
        document.getElementById("AJS63").innerHTML = sSoluceStyle;
        iCompteur63= 0;
    }

}

function exo64()
{
   
    var nb = [];
    var nombreDeValeur = 5;
    var showSoluce = "";
    for (i=0; i < 6; i++)
    {
        nb[i] = i * i;
        showSoluce = showSoluce + " " + nb[i];
        
    }

    document.getElementById("AJS64").innerHTML = "JS" + showSoluce;
}

function exo65()
{
    var N = [];
    var i = 0;
   N[0] = 1;
    var showSoluce = "";
    for (k = 1; k < 7;k++ )
    {
        N[k] = N[k - 1] +2;
       
    }
    for (i = 0; i < 7; i++)
    {
        showSoluce = showSoluce + " " + N[i];
    }

    document.getElementById("AJS65").innerHTML = showSoluce;
}

function exo65simple()
{

    var N = [];
    var i = 0;
   N[0] = 1;
    var showSoluce = "1";
    for (k = 1; k != 7;k++ )
    {
        N[k] = N[k - 1] +2;
        showSoluce = showSoluce + " " + N[k];
    }
   
    document.getElementById("AJS65").innerHTML = showSoluce;

}

function exo66()
{
    var Suite = [];
    var i = 0;
    var showSoluce = "";

    Suite[0] = 1;
    Suite[1] = 1;
    for (i = 2; i < 8; i++ )
    {
        Suite[i] = Suite[i-1] + Suite[i-2];

    }
    for (i = 0; i < 8; i++)
    {
        showSoluce = showSoluce + " "+ Suite[i];

    }
    document.getElementById("AJS66").innerHTML = "JS" + showSoluce;
}

var iCompteur67 = 0;
var array67 = [];
var somme67 = 0;
var moy67 = 0;
function exo67()
{
    var nbr1 = +document.getElementById("FJS67").value;
    iCompteur67++;
    array67.push(nbr1);
    if ( iCompteur67 < 10)
    {
        somme67 = somme67 + nbr1;
        moy67 = somme67 / array67.length;
        document.getElementById("AJS67").innerHTML ="Pour le moment la moyenne de : " + moy67 ;
    }
    else if (iCompteur67 == 10)
    {
        document.getElementById("AJS67").innerHTML ="Somme totale : " + 
        somme67 + "<br> pour une moyenne de : " + moy67 ;
        iCompteur67 = 0;
    }
   

}
var arrayP68 = [];
var arrayN68 = [];
var arrayZero68 = [];
var iCompteur68 = 0;
function exo68()
{
    var nbr1 = +document.getElementById("FJS681").value;
    iCompteur68++;
   
    document.getElementById("FJS682G").style.visibility = "visible";
     
    var nbr3 = +document.getElementById("FJS682").value;
    if (iCompteur68 < nbr1 + 1)
    {

        if (nbr3 > 0)
        {
            arrayP68.push(nbr3);
            document.getElementById("AJS68").innerHTML = "Nombre positif enregistré";
        }
        else if (nbr3 < 0)
        {
            arrayN68.push(nbr3);
            document.getElementById("AJS68").innerHTML = "Nombre négatif enregistré";
        }
            else 
            {
                arrayZero68.push(nbr3);
                document.getElementById("AJS68").innerHTML = "zéro enregistré";
            }
    }
    else if (iCompteur68 == nbr1)
    {
        document.getElementById("AJS68").innerHTML = "Il y a "+ arrayP68.length+"valeur positives, voici la liste :"+ arrayP68 +"<br>"+
        "Il y a "+ arrayN68.length+"valeur négatives, voici la liste :" + arrayN68 + "<br>" +
        "Il y a eu " + arrayZero68.length+ " zéro de rentrées ";

    }
    
}

var iCompteur69 = -1;

var somme69 = 0;

function exo69()
{
   
    var nbr1 = +document.getElementById("FJS691").value;
    iCompteur69++;
 
    document.getElementById("FJS692G").style.visibility = "visible";
     
    var nbr2 = +document.getElementById("FJS692").value;
    

    if (iCompteur69 < nbr1 + 1)
    {
        somme69 += nbr2;
        document.getElementById("AJS69").innerHTML = "Pour l'instant la somme est de : " + somme69 + "compteur :" + iCompteur69;
    }
    else if (iCompteur69 == nbr1)
    {

        document.getElementById("AJS69").innerHTML = "la somme est de : " + somme69;

    }

}



function exo610()
{

    var array1 = [4,8,7,9,1,5,4,6];
    var array2 = [7,6,5,2,1,3,7,4];
    var array3 = [];
    
   
  
       for(i =0; i <array1.length; i++)
       {
        var nbr1 = array1[i];
        var nbr2 = array2[i];
        array3.push(nbr1 + nbr2);
       }
     
       
     
    
    
    document.getElementById("AJS610").innerHTML = array3;
    

}

function exo611()
{

    
    var array1 = [4,8,7,9,1,5,4,6];
    var array2 = [7,6,5,2,1,3,7,4];
    var arrayTOON = [];
    var sommeTOTALE = 0;

    for (i = 0; i < 8; i++)
    {
    
        var nbr1 = array1[i];
        var nbr2 = array2[i];
    
            for (p = 0; p < 8 ; p++)
            {
                var nbr3 = array2[p];
                var produit = nbr1 * nbr3; 
                arrayTOON.push(produit);
            }
    
    }
        var tailleTOON = arrayTOON.length;

        for (m = 0; m < tailleTOON; m++ ) 
        {
            var valeurTOON = arrayTOON[m];
            sommeTOTALE = sommeTOTALE + valeurTOON;
        }



   
    document.getElementById("AJS611").innerHTML = sommeTOTALE;
}




var array612 = [];
var iCompteur612 = 0;
function exo612()
{

    var nbr1 = +document.getElementById("FJS6121").value;


    document.getElementById("FJS6122G").style.display = "block";
    
    var nbr2 = +document.getElementById("FJS6122").value;
    iCompteur612++;
    
  if (iCompteur612 < nbr1 + 1)
  {
    var nbr4 = nbr2 + 1;
     
    array612.push(nbr4);
  }
        
    document.getElementById("AJS612").innerHTML = array612;

}


var array613 = [];
var max613 = 0;
var position613 = 0;
var iCompteur613 = 0; 
function exo613()
{

    var nbr1 = +document.getElementById("FJS6131").value;


    document.getElementById("FJS6132G").style.visibility = "visible";
    
    var iNunberInArray = +document.getElementById("FJS6132").value;

    iCompteur613++;

   
    if (iCompteur613 < nbr1)
    {
        array613.push(iNunberInArray);
        document.getElementById("AJS613").innerHTML = "Valeur bien enregistrée, encore " + (nbr1 - iCompteur613) + "valeur à entrer" + " " + nbr1;
        if((iNunberInArray > max) || iCompteur613 == 1 )
            {
                max613 = iNunberInArray ;
                position613 = iCompteur613 - 1;
            }
          
             
    }
  
    if (iCompteur613 == nbr1)
    {
        document.getElementById("AJS613").innerHTML = "le nombre le plus grand est : " + max613 + "arrivant en "+ position613 + "position";
    }

    

}

var arrayNotes614 = [];
var arrayNoteOverMoy614 = [];
var somme614 = 0;
var iCompteur614 = 0;
var moy614 = 0;
function exo614()
{

    
    
    var nbrDonnee = +document.getElementById("FJS6141").value;

    document.getElementById("FJS6142G").style.visibility = "visible";

    var noteRentree = +document.getElementById("FJS6142").value;

    iCompteur614++;


    if (iCompteur614 < nbrDonnee + 2)
    {
        arrayNotes614.push(noteRentree);

        somme614 = somme614 + noteRentree;
        document.getElementById("AJS614").innerHTML = "Valeur bien enregistrée, encore " + ((nbrDonnee + 1)- iCompteur614);

             if (iCompteur614 == nbrDonnee + 1)
            {
                var moy614 = somme614 / arrayNotes614.length;
        
                for (p = 0; p <arrayNotes614.length; p++ )
                {
                    if( arrayNotes614[p] > moy614 )
                    {
                        arrayNoteOverMoy614.push(arrayNotes614[p])
                    }
                }
                    document.getElementById("AJS614").innerHTML = "Notes au dessus de la moyenne : " + arrayNoteOverMoy614;
                
        
            }
    }

    
}

function exo615()
{

    var sommeCompte = 1000;
    const taux = 2.75;
    var arraySomme = [];
    arraySomme[0] = 1000;

        for (i = 1; i < 21; i++)
        {
            var I = (sommeCompte * taux) / 100;
            sommeCompte = I + sommeCompte; 
            /*document.write(sommeCompte + "<br>")*/
            arraySomme[i] = sommeCompte;
            var compteParAnnee = arraySomme[i];
        }


        var nbr = +document.getElementById("FJS6141").value;

     
      document.getElementById("AJS615").innerHTML = "Somme de l'année " + nbr + " :" +arraySomme[nbr];

}

function exo616()
{
    var choixArray = +document.getElementById("dark_select").value;

    if (choixArray == 0)
    {
        Array1 = [1,2,3,4,5,6,7,8];
    }
    else if (choixArray == 1)
    {
        Array1 = [9,4,7,3,1,2,8,4];
    }
  

    var controle = 0;
    var array = [];
 
   for (i=1; i < Array1.length - 1; i++)
   {
       
        if (Array1[i] - 1 == Array1[i - 1] && Array1[i]  + 1== Array1[i +1] )
        {
            controle = 1;
        }
         else
         {
              controle = 2;
         }
   }
   if (controle == 1)
   {
        
         document.getElementById("AJS616").innerHTML = "Tout est dans l'ordre";
   }
   else
   {
       
        document.getElementById("AJS616").innerHTML = "C'est pas dans l'ordre";
   }

 

}

function exo617()
{
    var array617 = [12,6,-5,8,3,9,-8];
    
  
 
    for ( p = 0; p < 10; p++)
    {

            for (i = 0; i < array617.length; i++)
            {
                if (array617[i] > array617[i+1])
                {
                    while (array617[i] > array617[i + 1])
                    {
                        var temp = array617[i];       
                        array617[i] = array617[i + 1];    
                        array617[i + 1] = temp;         
                        i = 0;
                    }
                
                }

            }
           
    }
    document.getElementById("AJS617").innerHTML = "Array après l'éxécution du programme : " +array617;

}

function exo6173()
{
   
    var array = [5,9,4,-9, 10,1, -5];
    var i= 0;

    while ( i < array.length )
    {
            if (array[i] > array[i+1])
            {
                while (array[i] > array[i + 1])
                {
                    var temp = array[i];       
                    array[i] = array[i + 1];    
                    array[i + 1] = temp;         
                    i = 0;
                }
              
            }

        i++;
    }
    alert(array);
}

