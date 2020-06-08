function exo51jq()
{
    var divR = $("#AJS51");
    var nbr = $("#FJS51").val()

    
    if (nbr < 1 || nbr > 3 )
    {
        divR.html("Essaie encore !")
    }
    else 
    {
        divR.html("Bravo !")
        $("#FJS51G").css("display","none")
    }

                
              



}
function exo52Ajq()
{

    var divR = $("#AJS52A");
    var nbr = +$("#FJS52A").val()


     if (nbr < 10)
        {
           
            divR.html("Plus grand !")
        }
        else if ( nbr > 20)
        {
           
            divR.html("Plus petit !")
        }
      else 
      {
        divR.html("Bravo !")
        $("#FJS52AG").css("display","none")
      }




 
    
}

function exo52Bjq()
{
        var divR = $("#AJS52B");
        var nbr = +$("#FJS52B").val()

        var iNombreHasard = Math.floor((Math.random(1,100) * 100 ));
    alert(iNombreHasard);
        var compteur = 0;

        while (nbr != iNombreHasard)
        {
    compteur ++;
            if (nbr < iNombreHasard)
            {
                var nbr = +prompt("Plus grand !");
                divR.html("Plus grand !")
            }
            else if ( nbr > iNombreHasard)
            {
                var nbr = +prompt("plus petit");
                divR.html("Plus petit !")
            } 
        }
                    
        divR.html("Bravo ! Tu as bien trouvé le nombre " + iNombreHasard + " en <br>"+
        compteur + " coups")
}

function exo53jq()
{

    var divR = $("#AJS53");
    var nbr = +$("#FJS53").val()
    var listeNombre = ""
    var i = nbr ;

    while (i != nbr +10)
    {
        i++;
        listeNombre = listeNombre +  i + " ";
            
    }

    divR.html(listeNombre)

}

function exo54jq()
{
  
    var divR = $("#AJS54");
    var nbr = +$("#FJS54").val()
    var listeNombre = ""
    var chaineAdditionnelle = nbr + 11;


    for (i = nbr + 1; i < chaineAdditionnelle; i++)
    {
      
        listeNombre = listeNombre +  i + " ";
        
    }
divR.html(listeNombre)

}

function exo55jq()
{
    
    var divR = $("#AJS55");
    var nbr = +$("#FJS55").val()
    var listeSolution = ""
    for (i = 0; i < 11; i++)
    {
          
        //alert(nbr +"*" + i +"=" + nbr*i);
        listeSolution = listeSolution + "" + nbr +"*" + i +"=" + nbr*i + "<br>";
       

    }
    divR.html(listeSolution)
}

function exo56jq() 
{

    var divR = $("#AJS56");
    var nbr = +$("#FJS56").val()
    var somme = 0;
    

    for (i = 1; i != nbr + 1; i++ )
    {

        somme = somme + i;

        if (i == nbr)
        {
            divR.html(somme)
        }
    }

}

function exo57jq()
{
    var divR = $("#AJS57");
    var nbr = +$("#FJS57").val()
    var somme = 1;


    for (i = 1; i != nbr + 1; i++ )
    {

        somme = somme * i;

        if (i == nbr)
        {
            divR.html(somme)
        }
    }

}
var max58Ajq = 0;
var iCompteur58Ajq = 0;
function exo58Ajq()
{
    var divR = $("#AJS58A");

    var nbrjq = +$("#FJS58A").val()
    iCompteur58Ajq++;
    if ( iCompteur58Ajq < 5)
    {
       
        if (iCompteur58Ajq == 1 || nbrjq > max58Ajq )
        {
            max58Ajq = nbrjq;
          
        }
        divR.html ("Il reste encore " + (5 - iCompteur58Ajq) + " valeur a saisir en JS")


    }
    else if (iCompteur58Ajq == 5)
    {
        divR.html("La valeur max est : "+ max58Ajq)
        iCompteur58Ajq = 0;
         max58Ajq = 0;
    }
         

divR.html(max)

}

var iCompteur58Bjq = 0;
var iMax58Bjq = 0;
var iPosition58Bjqjq = 0;
function exo58Bjq()
{

    var divR = $("#AJS58B");

    var nbr = +$("#FJS58B").val()
    iCompteur58Bjqjq++;
    if ( iCompteur58Bjq< 5)
    {
       
        if (iCompteur58Bjq == 1 || nbr > iMax58Bjq )
        {
            iMax58Bjq = nbr;
            iPosition58Bjq = iCompteur58Bjq ;
        }
        divR.html("Il reste encore " + (5 - iCompteur58Bjq) + " valeur a saisir en JS" +" "+ iCompteur58Bjq)

    }
    else if (iCompteur58Bjq == 5)
    {
        divR.html("La valeur max est : "+ iMax58Bjq+ " arrivant à la position :" + iPosition58Bjq)
        iCompteur58Bjq = 0;
         iMax58Bjq = 0;
    }
}

var iCompteur59jq = 0;
var iMax59 = 0;
var iPosition59jq = 0;
function exo59jq()
{
   
    var divR = $("#AJS59");

    var nbr = +$("#FJS59").val()

    iCompteur59jq++;
    if ( nbr != 0)
    {
       
        if (iCompteur59jq == 1 || nbr >iMax59 )
        {
           iMax59 = nbr;
           iPosition59jq = iCompteur59jq ;
        }
        divR.html("Valeur bien enregistrée, nombre de tentative : " + iCompteur59jq)

    }
    else if (nbr == 0)
    {
        divR.html("La valeur max est : "+ iMax59 +" arrivant à la position "+ iPosition59jq)
        iCompteur59jq = 0;
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
function exo510jq()
{
    var  divR510 = $("#AJS510")
    var  nbr510 = +$("#FJS510").val()
    var sommePayee510 = +$("#FJS5102").val()
   
    if (nbr510 != 0)
    {
        total510 += nbr510;
        divR510.html("Vous devez pour l'instant :"+ total510 + " de marchandise chinoise bon marché")
    }
    else if (nbr510 == 0)
    {
        divR510.html("Vous devez un total de : " + total510 + "<br>")
        $("#FJS510G").css("visibility", "visible")
       
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
        divR510.html(" On vous rends :" + sommeARendre510Style + " avec " + billet10+ " Billet de 10, <br>"+
        billet5 + " billet de 5 et " + piece1 + " piecette")
            }

        else if (sommePayee510  == total510)
            {
                divR510.html("Vous avez donné l'apoint, merci de votre visite")

            }

        else if (sommePayee510  < total510)
            { 
                divR510.ihtml("vous n'avez pas donné assez, il manque : " + (total510 - sommePayee510))

            }

        }
         


  }
    
  
}

function exo511jq()
{

    var divR = $("#AJS511");
    var n = +$("#FJS511").val() 
    var p = +$("#FJS512").val() 

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

    divR.html("Vous avez une chance sur " + X + "de gagner dans l'ordre <br> Vous avez une chance sur " + Y + "de gagner dans le désordre")
    

}