// VARIABLE GLOBALE // 
var iCompteur58A = 0;



//FONCTIONS EXO
function exo51()
{
    var divR = document.getElementById("AJS51");
    var nbr = document.getElementById("FJS51").value; 


    if (nbr < 1 || nbr > 3 )
    {
        divR.innerHTML = "Essaie encore !";
    }
    else 
    {
        divR.innerHTML = "Bravo !"
        document.getElementById("FJS51G").style.display = "none";
    }

}
function exo52A()
{

    var divR = document.getElementById("AJS52A");
    var nbr = +document.getElementById("FJS52A").value; 

 

     if (nbr < 10)
        {
          
            divR.innerHTML = "Plus grand !";
        }
        else if ( nbr > 20)
        {
           
            divR.innerHTML = "Plus petit !";
        }
      else 
      {
        divR.innerHTML = "Bravo !";
        document.getElementById("FJS52AG").style.display = "none";
      }

}

function exo52B()
{
        var divR = document.getElementById("AJS52B");
        var nbr = +document.getElementById("FJS52B").value; 

        var iNombreHasard1 = Math.floor((Math.random(1,100) * 100 ));
        const iNombreHasard = iNombreHasard1;
    alert(iNombreHasard);
        var compteur = 0;

            if (nbr < iNombreHasard)
            {
               compteur++;
                divR.innerHTML = "Plus grand !";
            }
            else if ( nbr > iNombreHasard)
            {
                compteur++;
                divR.innerHTML = "Plus petit !";
            } 
        else 
        {
            divR.innerHTML = "Bravo ! Tu as bien trouvé le nombre " + iNombreHasard + " en <br>"+
            compteur + " coups";
        }
                    
       
}

function exo53()
{

    var divR = document.getElementById("AJS53");
    var nbr = +document.getElementById("FJS53").value; 
    var listeNombre = "";
    var i = nbr ;

    while (i != nbr +10)
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
var max58A = 0;
function exo58A()
{
    var divR = document.getElementById("AJS58A");

        var nbr = +document.getElementById("FJS58A").value; 
        iCompteur58A++;
        if ( iCompteur58A < 5)
        {
           
            if (iCompteur58A == 1 || nbr > max58A )
            {
                max58A = nbr;
              
            }
            divR.innerHTML = "Il reste encore " + (5 - iCompteur58A) + " valeur a saisir en JS" +" "+ iCompteur58A;

        }
        else if (iCompteur58A == 5)
        {
            divR.innerHTML = "La valeur max est : "+ max58A;
            iCompteur58A = 0;
             max58A = 0;
        }
             
   

}

var iCompteur58B = 0;
var iMax58B = 0;
var iPosition58B = 0;
function exo58B()
{

    var divR = document.getElementById("AJS58B");

    var nbr = +document.getElementById("FJS58B").value; 
    iCompteur58B++;
    if ( iCompteur58B < 5)
    {
       
        if (iCompteur58B == 1 || nbr > iMax58B )
        {
            iMax58B = nbr;
            iPosition58B = iCompteur58B ;
        }
        divR.innerHTML = "Il reste encore " + (5 - iCompteur58B) + " valeur a saisir en JS" +" "+ iCompteur58B;

    }
    else if (iCompteur58B == 5)
    {
        divR.innerHTML = "La valeur max est : "+ iMax58B+ " arrivant à la position :" + iPosition58B;
        iCompteur58B = 0;
        iMax58B = 0;
    }
}
var iCompteur59 = 0;
var iiMax59 = 0;
var iPosition59 = 0;
function exo59()
{
   
    var divR = document.getElementById("AJS59");

    var nbr = +document.getElementById("FJS59").value; 

    iCompteur59++;
    if ( nbr != 0)
    {
       
        if (iCompteur59 == 1 || nbr >iMax59 )
        {
           iMax59 = nbr;
           iPosition59 = iCompteur59 ;
        }
        divR.innerHTML = "Valeur bien enregistrée, nombre de tentative : " + iCompteur59 ;

    }
    else if (nbr == 0)
    {
        divR.innerHTML = "La valeur max est : "+ iMax59 +" arrivant à la position "+ iPosition59 ;
        iCompteur59 = 0;
        iMax59 = 0;
        iPosition58B  = 0;
    }
}



var total510 = 0;

var control1 = 0;
var sommeARendre510 = 0;
var sommeARendre510Style = 0;
var billet10 = 0;
var billet5 = 0;
var piece1 = 0;
function exo510()
{
    var  divR510 = document.getElementById("AJS510");
    var  nbr510 = +document.getElementById("FJS510").value;
    var sommePayee510 = +document.getElementById("FJS5102").value;
   
    if (nbr510 != 0)
    {
        total510 += nbr510;
        divR510.innerHTML = "Vous devez pour l'instant :"+ total510 + " de marchandise chinoise bon marché";
    }
    else if (nbr510 == 0)
    {
        divR510.innerHTML = "Vous devez un total de : " + total510 + "<br>";
        document.getElementById("FJS510G").style.visibility = "visible";
        control1 = 1;

    }

  if (control1 == 1)
  {
      
        if (sommePayee510  != 0)
        {

            if (sommePayee510  > total510)
            {
        sommeARendre510 = sommePayee510  - total510 ;
        sommeARendre510Style = sommeARendre510;
                while (sommeARendre510>= 10)
                {
                    sommeARendre510 -= 10;
                    billet10++;
                }
                while (sommeARendre510 >= 5)
                {
                    sommeARendre510 -= 5;
                    billet5++;
                }
                while (sommeARendre510 > 0)
                {
                    sommeARendre510 -= 1;
                    piece1++;

                }
        divR510.innerHTML = " On vous rends :" + sommeARendre510Style + " avec " + billet10+ " Billet de 10, <br>"+
        billet5 + " billet de 5 et " + piece1 + " piecette";
            }

        else if (sommePayee510  == total510)
            {
                divR510.innerHTML = "Vous avez donné l'apoint, merci de votre visite";

            }

        else if (sommePayee510  < total510)
            { 
                divR510.innerHTML = "vous n'avez pas donné assez, il manque : " + (total510 - sommePayee510);

            }

        }
         


  }
    
  
}

function exo511()
{

    var divR = document.getElementById("AJS511");

    var n = +document.getElementById("FJS511").value; 
    var p = +document.getElementById("FJS512").value; 


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

    divR.innerHTML = "Vous avez une chance sur " + X + " de gagner dans l'ordre <br> Vous avez une chance sur " + Y + " de gagner dans le désordre";
         

}