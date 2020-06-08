function exo61jq()
{
    var divA = $("#AJS61").val()
    var array = [];
    var p = 0;
    for (i =0; i < 7; i++)
    {
      p = 0;
       array.push(p);
    }
    //divA.html( array;
    $("#AJS61").html(array)
}

function exo62jq()
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

    $("#AJS62").html(arrayLetter)
}

var sSoluceStyle = "";
var iCompteur63 = 0;
function exo63jq()
{
    var nbr1 = +$("#FJS63").val()
    iCompteur63++;

    if (iCompteur63 < 10)
    {

        var array = [];
   
        array.push(nbr1);
        sSoluceStyle = sSoluceStyle  + " " + nbr1;
        $("#AJS63").html(sSoluceStyle)
    }
    else if (iCompteur63 == 9)
    {
        $("#AJS63").html( sSoluceStyle)
        iCompteur63= 0;
    }

}

function exo64jq()
{
   
    var nb = [];
    var nombreDeValeur = 5;
    var showSoluce = "";
    for (i=0; i < 6; i++)
    {
        nb[i] = i * i;
        showSoluce = showSoluce + " " + nb[i];
        
    }

    $("#AJS64").html(showSoluce)
}

function exo65jq()
{
    var N = [];
    var i = 0;
   N[0] = 1;
    var showSoluce = "";
    for (k = 1; k < 7;k++ )
    {
        N[k] = N[k - 1] +2;
        alert(N[k]);
    }
    for (i = 0; i < 7; i++)
    {
        showSoluce = showSoluce + " " + N[i];
    }

    $("#AJS65").html(showSoluce)
}

function exo65simplejq()
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
   
    $("#AJS65").html(showSoluce)

}

function exo66jq()
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
    $("#AJS66").html(showSoluce)
}


var iCompteur67 = 0;
var array67 = [];
var somme67 = 0;
var moy67 = 0;
function exo67jq()
{

    var nbr1 = +$("#FJS67").val()
    iCompteur67++;
    array67.push(nbr1);
    if ( iCompteur67 < 10)
    {
        somme67 = somme67 + nbr1;
        moy67 = somme67 / array67.length;
        $("#AJS67").html("Pour le moment la moyenne de : " + moy67)
    }
    else if (iCompteur67 == 10)
    {
        $("#AJS67").html("Somme totale : " + 
        somme67 + "<br> pour une moyenne de : " + moy67)
        iCompteur67 = 0;
    }

}

var arrayP68 = [];
var arrayN68 = [];
var arrayZero68 = [];
var iCompteur68 = 0;
function exo68jq()
{
    var nbr1 = +$("#FJS681").val()
    iCompteur68++;
   
    $("#FJS682G").css("visibility","visible")
    
     
    var nbr3 = +$("#FJS682").value;
    if (iCompteur68 < nbr1 + 1)
    {

        if (nbr3 > 0)
        {
            arrayP68.push(nbr3);
            $("#AJS68").html( "Nombre positif enregistré")
        }
        else if (nbr3 < 0)
        {
            arrayN68.push(nbr3);
            $("#AJS68").html( "Nombre négatif enregistré")
        }
            else 
            {
                arrayZero68.push(nbr3);
                $("#AJS68").html( "zéro enregistré")
            }
    }
    else if (iCompteur68 == nbr1)
    {
        $("#AJS68").html("Il y a "+ arrayP68.length+"valeur positives, voici la liste :"+ arrayP68 +"<br>"+
        "Il y a "+ arrayN68.length+"valeur négatives, voici la liste :" + arrayN68 + "<br>" +
        "Il y a eu " + arrayZero68.length+ " zéro de rentrées ")

    }
    
}

var iCompteur69 = -1;

var somme69 = 0;

function exo69jq()
{
   
    var nbr1 = +$("#FJS691").val()
    iCompteur69++;
 
    $("#FJS692G").css("visibility","visible")
     
    var nbr2 = +$("#FJS692").val()
    

    if (iCompteur69 < nbr1 + 1)
    {
        somme69 += nbr2;
        $("#AJS69").html( "Pour l'instant la somme est de : " + somme69 + "compteur :" + iCompteur69)
    }
    else if (iCompteur69 == nbr1)
    {

        $("#AJS69").html( "la somme est de : " + somme69)

    }

}


function exo610jq()
{

    var array1 = [4,8,7,9,1,5,4,6];
    var array2 = [7,6,5,2,1,3,7,4];
    var array3 = [];
    
    
    for (i =0; i < 8; i++)
    {
       
        var nbr1 = array1[i];
        var nbr2 = array2[i];
        array3.push(nbr1 + nbr2);
     
    }
    
    
    $("#AJS610").html(array3)
    

}

function exo611jq()
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



   
    $("#AJS611").html(sommeTOTALE)
}

var array612 = [];
var iCompteur612 = 0;
function exo612jq()
{

    var nbr1 = +$("#FJS6121").val()


    $("#FJS6122G").css("display","block")
    
    var nbr2 = +$("#FJS6122").val()
    iCompteur612++;
    
  if (iCompteur612 < nbr1 + 1)
  {
    var nbr4 = nbr2 + 1;
     
    array612.push(nbr4);
  }
        
    $("#AJS612").html( array612)

}

var array613 = [];
var max613 = 0;
var position613 = 0;
var iCompteur613 = 0; 
function exo613jq()
{

    var nbr1 = +$("#FJS6131").val()


    $("#FJS6132G").css("visibility","visible")
    
    var iNunberInArray = +$("#FJS6132").val()

    iCompteur613++;

   
    if (iCompteur613 < nbr1)
    {
        array613.push(iNunberInArray);
        $("#AJS613").html( "Valeur bien enregistrée, encore " + (nbr1 - iCompteur613) + "valeur à entrer" + " " + nbr1)
        if((iNunberInArray > max613) || iCompteur613 == 1 )
            {
                max613 = iNunberInArray ;
                position613 = iCompteur613 - 1;
            }
          
             
    }
  
    if (iCompteur613 == nbr1)
    {
        $("#AJS613").html( "le nombre le plus grand est : " + max613 + "arrivant en "+ position613 + " position")
    }

    

}

var arrayNotes614 = [];
var arrayNoteOverMoy614 = [];
var somme614 = 0;
var iCompteur614 = 0;
var moy614 = 0;
function exo614jq()
{

    
    
    var nbrDonnee = +$("#FJS6141").val()

    $("#FJS6142G").css("visibility","visible")

    var noteRentree = +$("#FJS6142").val()

    iCompteur614++;


    if (iCompteur614 < nbrDonnee + 2)
    {
        arrayNotes614.push(noteRentree);

        somme614 = somme614 + noteRentree;
        $("#AJS614").html( "Valeur bien enregistrée, encore " + ((nbrDonnee + 1)- iCompteur614))

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
                    $("#AJS614").html( "Notes au dessus de la moyenne : " + arrayNoteOverMoy614)
                
        
            }
    }

    
}

function exo615jq()
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


        var nbr = +$("#FJS6141").val()

     
      $("#AJS615").html( "Somme de l'année " + nbr + " :" +arraySomme[nbr])

}

function exo616jq()
{
    var choixArray = +$("#dark_select").val()
   
    if (choixArray == 0)
    {
        Array1 = [1,2,3,4,5,6,7,8];
    }
    else if (choixArray == 1)
    {
        Array1 = [9,4,7,3,1,2,8,4];
    }
  

    var controle = 0;
    
 
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
        
         $("#AJS616").html("Tout est dans l'ordre")
   }
   else
   {
       
        $("#AJS616").html( "C'est pas dans l'ordre")
   }

 

}

function exo617jq()
{
    
    var array617 = [12,6,-5,8,3,9,-8];
    
  
 
    for ( p = 0; p < 7; p++)
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
   
    $("#AJS617").html("Array après l'éxécution du programme : " + array617)

}

/*
function exo6173jq()
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
*/
