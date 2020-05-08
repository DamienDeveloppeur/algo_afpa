function exo51()
{
        var nbr = +prompt("entrez un nombre", "");

        while (nbr < 1 || nbr > 3 )
                {
                    var nbr = +prompt("entrez un nombre", "");
                    
                }

                alert("fin de la boucle", "");



}
function exo52A()
{

    var divR = document.getElementById("AJS52A");
    var nbr = +document.getElementById("FJS52A").value; 

    while (nbr < 10 || nbr > 20)
    {

     if (nbr < 10)
        {
            var nbr = +prompt("Plus grand !");
            divR.innerHTML = "Plus grand !";
        }
        else if ( nbr > 20)
        {
            var nbr = +prompt("plus petit");
            divR.innerHTML = "Plus petit !";
        }
      


    }

    divR.innerHTML = "Bravo !";
    
}

function exo52B()
{
        var divR = document.getElementById("AJS52B");
        var nbr = +document.getElementById("FJS52B").value; 

        var iNombreHasard = Math.floor((Math.random(1,100) * 100 ));
    alert(iNombreHasard);
        var compteur = 0;

        while (nbr != iNombreHasard)
        {
    compteur ++;
            if (nbr < iNombreHasard)
            {
                var nbr = +prompt("Plus grand !");
                divR.innerHTML = "Plus grand !";
            }
            else if ( nbr > iNombreHasard)
            {
                var nbr = +prompt("plus petit");
                divR.innerHTML = "Plus petit !";
            } 
        }
                    
        divR.innerHTML = "Bravo ! Tu as bien trouvé le nombre " + iNombreHasard + " en <br>"+
        compteur + " coups";
}

function exo53()
{

    var divR = document.getElementById("AJS53");
    var nbr = +document.getElementById("FJS53").value; 
    var listeNombre = "";
    var i = nbr ;

    while (i != nbr +11)
    {
        i++;
        listeNombre = listeNombre +  i + " ";
            
    }

    divR.innerHTML = listeNombre;

}

function exo54()
{
  
    var divR = document.getElementById("AJS54");
    var nbr = +document.getElementById("FJS54").value; 
    var listeNombre = "";
    var chaineAdditionnelle = nbr + 11;


    for (i = nbr + 1; i < chaineAdditionnelle; i++)
    {
        alert(i);
        listeNombre = listeNombre +  i + " ";
        
    }
divR.innerHTML = listeNombre;

}

function exo55()
{

    var divR = document.getElementById("AJS55");
    var nbr = +document.getElementById("FJS55").value; 
    var listeSolution = "";
    for (i = 0; i < 11; i++)
    {
          
        //alert(nbr +"*" + i +"=" + nbr*i);
        listeSolution = listeSolution + "" + nbr +"*" + i +"=" + nbr*i + "<br>";
       

    }
    divR.innerHTML = listeSolution;
}

function exo56() 
{

    var divR = document.getElementById("AJS56");
    var nbr = +document.getElementById("FJS56").value; 
    var somme = 0;
    

    for (i = 1; i != nbr + 1; i++ )
    {

        somme = somme + i;

        if (i == nbr)
        {
            divR.innerHTML = somme;
        }
    }

}

function exo57()
{
    var divR = document.getElementById("AJS57");
    var nbr = +document.getElementById("FJS57").value; 
    var somme = 1;


    for (i = 1; i != nbr + 1; i++ )
    {

        somme = somme * i;

        if (i == nbr)
        {
            divR.innerHTML = somme;
        }
    }

}

function exo58A()
{
    var divR = document.getElementById("AJS58A");
   var nbr = 0;
   var max = 0;
    for (i=0; i < 20; i++)
    {

        var nbr = +prompt("Entrez un nombre");
       
       if (nbr > max)
       {
           max = nbr;
       }
        
    }
divR.innerHTML = max;

}

function exo58B()
{

    var divR = document.getElementById("AJS58B");
    var nbr = 0;
    var max = 0;
    var position = 0;
     for (i=1; i < 5; i++)
     {
 
         var nbr = +prompt("Entrez un nombre");
        
        if (nbr > max)
        {
            max = nbr;
            position = i;
        }
         
     }
 divR.innerHTML = "Le nombre le plus grand est : " + max + " arrivant en position : " + position;
}

function exo59()
{

    var divR = document.getElementById("AJS59");
  //  var nbr = +document.getElementById("FJS59").value; 
    var compteur = 0;
    var max = 0;
    var position = 0;
    do {
        compteur++;
        var nbr = +prompt("Entrer le nombre pour troller", ""); 
        if (nbr > max)
        {
            max = nbr;
            position = compteur;
        }

    } while (nbr != 0);

divR.innerHTML = "Le nombre le plus grand est : " + max +" arrivant en " + position + "position";
}

function exo510()
{
  var  divR = document.getElementById("AJS510");
    var total = 0;
    var sommeARendre = 0;
    do 
    {
    var nbr=prompt("entrer le prix de l'article, zéro pour stop", "");
    var nbr1 = parseInt(nbr);
    total += nbr1;
    
    
    } while (nbr != 0);
    divR.innerHTML = "Vous devez un total de : " + total + "<br>";
    
    var sommePayeeString=prompt("entrer la somme payée", "");
    var sommePayee= parseInt(sommePayeeString);
    
    if (sommePayee > total)
        {
       sommeARendre = sommePayee - total ;
       divR.innerHTML = " On vous rends :" + sommeARendre + "<br>";
        }
    else if (sommePayee == total)
        {
            divR.innerHTML = "Vous avez donné l'apoint, félicitation.<br> Vous avez fait preuve d'un certain civisme en épargnant du boulot à la caissiére";
    
        }
    else 
        {
            divR.innerHTML = "vous n'avez pas donné assez";
    
            do 
            {
                var nbr=prompt("entrer une nouvelle somme donnee", "");
                 sommePayee = parseInt(nbr);
                
    
    
                } while (sommePayee < total );
                
                     if (sommePayee > total)
                        {
                       sommeARendre = sommePayee - total ;
                       divR.innerHTML = " On vous rends :" + sommeARendre + "<br>";
                        }
                    else if (sommePayee == total)
                        {
                            divR.innerHTML = "Vous avez donné l'apoint, félicitation.<br> Vous avez fait preuve d'un certain civisme en épargnant du boulot à la caissiére";
    
                        }
        }
}

function exo511()
{

    var divR = document.getElementById("AJS511");

    var nbr=prompt("entrer le nombre de chevaux partans", "");
    var n = parseInt(nbr);

    var nbr2=prompt("entrer le nombre de chevaux joué", "");
    var p = parseInt(nbr2);


    var factoN = 1;
    for (i = 1; i != n + 1; i++  )
    {
        factoN = factoN * i;  
    }

    var factoPN = 1;
    for (i = 1; i != (n - p)  + 1; i++  )
    {
        factoPN = factoPN * i;  
    }

    var factoP = 1;
    for (i = 1; i != p  + 1; i++  )
    {
        factoP = factoP * i;  
    }


    var X = factoN / factoPN;

    var Y = factoN / (factoP * factoPN);

    divR.innerHTML = "Vous avez une chance sur " + X + "de gagner dans l'ordre";
    divR.innerHTML = "Vous avez une chance sur " + Y + "de gagner dans le désordre";

}