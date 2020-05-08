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

function exo63()
{
    var array = [];
    for (i =0; i < 9; i++)
    {
       var nbr=prompt("Entrer une note", "");
       var nbr1 = parseInt(nbr);
        array.push(nbr1);
    
    }
    
    document.getElementById("AJS63").innerHTML = array;

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

    document.getElementById("AJS64").innerHTML = showSoluce;
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
        alert(N[k]);
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
    document.getElementById("AJS66").innerHTML = showSoluce;
}

function exo67()
{

    var array = [];
    var somme = 0;
    var moy = 0;
    
    for (i =0; i < 9; i++)
    {
       var nbr=prompt("Entrer une note", "");
       var nbr1 = parseInt(nbr);
        array.push(nbr1);
    
       somme = somme + nbr1;
        moy = somme / array.length;
    }
    
    
    document.getElementById("AJS67").innerHTML ="Somme totale : " + 
    somme + "<br> pour une moyenne de : " + moy ;

}

function exo68()
{

    var arrayP = [];
    var arrayN = [];
    var arrayZero = [];
    var somme = 0;
    var moy = 0;
    
    var nbr=prompt("Entrer le nombre de valeur souhaité", "");
    var nbr1 = parseInt(nbr);
    
    for (i =0; i < nbr1; i++)
    {
        var nbr2=prompt("Entrer le nombre de valeur souhaité", "");
    var nbr3 = parseInt(nbr2);
    
      if (nbr3 > 0)
      {
        arrayP.push(nbr3);
      }
       else if (nbr3 < 0)
       {
        arrayN.push(nbr3);
       }
        else 
        {
            arrayZero.push(nbr3);
        }
    }
   
    document.getElementById("AJS68").innerHTML = "Il y a "+ arrayP.length+"valeur positives, voici la liste :"+ arrayP +"<br>"+
    "Il y a "+ arrayN.length+"valeur négatives, voici la liste :" + arrayN + "<br>" +
    "Il y a eu " + arrayZero.length+ " zéro de rentrées ";

}

function exo69()
{
    var arrayExemple = [5,6,1,9,3,4,5,10];
   
    var somme = 0;
    var moy = 0;
    
 
    for (i =0; i < arrayExemple.length ; i++)
    {
     somme += arrayExemple[i];
     
    }
    
    document.getElementById("AJS69").innerHTML = somme;

}

function exo610()
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

function exo612()
{

    var array = [];


    var nbr=prompt("Entrer le nombre de valeur souhaité", "");
    var nbr1 = parseInt(nbr);
    
    for (i =0; i < nbr1; i++)
    {
        var nbr2=prompt("Entrer un nombre à mettre dans le TABLO", "");
        var nbr3 = parseInt(nbr2);
        var nbr4 = nbr3 + 1;
     
        array.push(nbr4);
     
    }
    
    document.getElementById("AJS612").innerHTML = array;

}

function exo613()
{

    var nombreDonneeSaisie1 = prompt("Entrer le nombre de donnee que vous souhaitez ?", "");
    var nombreDonneeSaisie = parseInt(nombreDonneeSaisie1);
    var array1 = [];
    var max = 0;
    var position = 0;

    for (i = 1; i < nombreDonneeSaisie + 1; i++ )

    {
        var nbr1 = prompt("Entrer le nombre de donnee que vous souhaitez ?", "");
        var nombreDansLarray = parseInt(nbr1);
        array1.push(nombreDansLarray);
        if(nombreDansLarray > max)
            {
                max = nombreDansLarray;
                position = i;
            }

    }

    document.getElementById("AJS613").innerHTML = "le nombre le plus grand est : " + max + "arrivant en "+ position + "position";

    /*
        var max =  Math.max.apply(Math, array1);
        document.write("La valeur maximale est :" + max + "<br>");
        var position = array1.indexOf(max);
        document.write(position);
    */
}

function exo614()
{

    
    var nbr = prompt("Entrer le nombre de valeur souhaitée", "");
    var nbrDonnee = parseInt(nbr);
    var arrayNotes = [];
    var arrayNoteOverMoy = [];
    var somme = 0;


    for (i = 0; i < nbrDonnee; i++)
    {
        var nbr1 = prompt("Entrer une note", "");
        var noteRentree = parseInt(nbr1);
    
        arrayNotes.push(noteRentree);

        somme = somme+  noteRentree;

    }

    var moy = somme / arrayNotes.length;

        /*
        arrayNotes.forEach((element) => {
            if (element > moy )
                {
                    arrayNoteOverMoy.push(element);
                }
        });
    */
    for (p = 0; p <arrayNotes.length; p++ )
    {
    if( arrayNotes[p] > moy )
    {
        arrayNoteOverMoy.push(arrayNotes[p])
    }
    }
        document.getElementById("AJS614").innerHTML = "Notes au dessus de la moyenne : " + arrayNoteOverMoy;
        /*
            var solution = arrayNotes.filter(element => element > moy);
            document.write(solution);
        */
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


        var nbr = +prompt("entrer l'année de compte", "");

        /*document.write(nbr);*/
        alert(arraySomme[nbr]);

}

function exo616()
{
    var controle = 0;
    var array = [];
   for (i=0; i < 10; i++)
   {
         array.push(i);
   }
   alert(array.length);
   var arrayTest = [2,5,9,4,6]
  
   for (i=1; i < array.length - 1; i++)
   {
       
        if (array[i] - 1 == array[i - 1] && array[i]  + 1== array[i +1] )
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
         alert("Tout est dans l'ordre");
   }
   else
   {
        alert("C'est pas dans l'ordre");
   }
   
   
   

}

function exo617()
{
    var array = [];
    
  
 
    for ( p = 0; p < 10; p++)
    {
        var nbr = +prompt("entrez une valeur");
        array.push(nbr);

            for (i = 0; i < array.length; i++)
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

            }
           
    }
    alert(array);

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

