var array = [];
var iCompteur71 = 0;
function exo71jq()
{
   
    var divA = $("#AJS71");
    var tailleTableau = +$("#FJS71").val()
 
    $("#FJS712G").css("visibility", "visible")
    $("#FJS711G").css("visibility", "hidden")

    var iNbr = +$("#FJS712").val()

    iCompteur71++;
    if (iCompteur71 < tailleTableau + 1)
    {
      
        array.push(iNbr);
        divA.html("Valeur bien enregistré, encore : " + (tailleTableau - iCompteur71)+ " à enregistrer")
        if (iCompteur71 == tailleTableau)
        {
  
        for ( p = 0; p < tailleTableau; p++)
        {

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
  
  
        for (m = 1; m < array.length - 1; m++)
        {
            if (array[m] + 1 == array[m + 1] && array[m] - 1 == array[m -1])
            {
                divA.html(array + "<br>c'est dans l'ordre !")
               
            }
            else
            {
                divA.html(array + "<br> ce n'est pas dans l'ordre !")
              
            }
        }
    }
    


    }
 
}

function exo72jq()
{
    // TRI A BULLE
    var array = [5,-9,3,7,-7,12,4];

    for (i = 0; i < array.length; i++)
    {

        if (array[i] < array[i + 1])
        {
            while(array[i] < array[i + 1])
            {

            
                var temp = array[i];
                array[i] = array[i + 1];
                array[ i+ 1] = temp;
                i = 0;
            }
        }

    }
    $("#AJS72").html("Array avant la fonction: (5,-9,3,7,-7,12,4)<br>" +"array après la fonction : "+ array)

}

function exo721jq()
{
    //TRI PAR INSERTION 
    var temp = 0;
    var array = [5,4,9,2,1,4,-5,3,10];

    for (i = 0; i < array.length; i++)
    {
        temp = array[i];
       
            for(j = i; j > 0 && array[j - 1] < temp; j--)
            {
                array[j] = array[j-1];
            }
        array[j] = temp;

    }
 
}

var array73 = [];
var array73First = [];
var arrayLength73 = array73.length; 
    
var aTempArray73 = [];
var iCompteur73 = 0;
function exo73jq()
{
  var iTailleArray = +$("#FJS731").val()
    //clear();
    $("#FJS732G").css("visibility", "visible")

    var nbr73 = +$("#FJS732").val()
    //clear();
    iCompteur73++;

   if (iCompteur73 < iTailleArray + 1 )
   {

        array73.push(nbr73);
        array73First = array73;
        $("#AJS73").html("Array entré "+ array73First)

        if (iCompteur73 == iTailleArray)
        {
           
           
            
            for (i = array73.length - 1; i > -1; i--)
            {
                
                aTempArray73.push(array73[i]);
                
            }
            
            array73 = aTempArray73;
            $("#AJS73").html("Array entré :"+array73First+ "<br>"+ " array reverse :"+  array73)
        
        }
    
   }

 

}
var AarraySupr714 = [];
var iCompteur714 = 0;
function exo74jq()
{
    
    var nbr = +$("#FJS741").val() 

    $("#FJS742G").css("visibility", "visible")
   
    var nbrDansLarray = +$("#FJS742").val() 
    iCompteur714++;
    if (iCompteur714 < nbr + 1)
    {
        AarraySupr714.push(nbrDansLarray);
        $("#AJS714").html( AarraySupr714)
    }
    else
    {
        $("#FJS743G").css("visibility", "visible")
        var indiceSlice = +$("#FJS743").val() 
        alert(AarraySupr714);

        var arrayLength = AarraySupr714.length; 
    
    
        var arrayTemp = [];
    
       for (i =0; i < nbr; i++ )
        {
            if (AarraySupr714[i] != AarraySupr714[indiceSlice])
            {
                arrayTemp.push(AarraySupr714[i]);
            }
    
        }
        AarraySupr714 = arrayTemp;
    $("#AJS714").html(AarraySupr714)
   

    }

}


var arrayTemp = [];
var aDictionnaire = ["alphabet", "becasse", "caroline", "damier", "elephant", "fifrelin", "girafe","helicoptere","iris","jhin","kaimorse","lumiere", "node", "voilier","zaza", "zebu"  ];
var iTailleArray = aDictionnaire.length;

var iMedianWord = iTailleArray/2;

var sMotMedian = aDictionnaire[parseInt(iMedianWord)];



var aDictionnaireTemp = aDictionnaire ;


var iTailleArrayTemp = aDictionnaireTemp.length;

var iMedianWordTemp = parseInt(iTailleArrayTemp)/2;


var sMotMedianTemp = aDictionnaireTemp[parseInt(iMedianWordTemp)];

function exo75jq()
{
   
   var divA =  $("#AJS75");
    var sMotRecherche = $("#FJS75").val() 
 
    while (iTailleArrayTemp > 1  )
    {
    alert(sMotMedianTemp + "~~" + aDictionnaireTemp + "~~" + iTailleArrayTemp);
    if (sMotRecherche > sMotMedianTemp )
    {

        for (i = parseInt(iMedianWordTemp); i < parseInt(iTailleArrayTemp); i++ )
        {    
                arrayTemp.push(aDictionnaireTemp[i]); 
        }

        aDictionnaireTemp = arrayTemp;
        arrayTemp = [];
        iTailleArrayTemp = aDictionnaireTemp.length; 
        iMedianWordTemp = parseInt(iTailleArrayTemp)/2;       
        sMotMedianTemp = aDictionnaireTemp[parseInt(iMedianWordTemp)];    
        //divA.innerHTML = aDictionnaireTemp + " ~~"+ sMotMedianTemp;
      
    }

    else if (sMotRecherche < sMotMedianTemp )
    {
                for (i = 0; i < parseInt(iMedianWordTemp) ; i++ )
                {
 
                        arrayTemp.push(aDictionnaireTemp[i]);

                }
                aDictionnaireTemp = arrayTemp;
                arrayTemp = [];
                iTailleArrayTemp = aDictionnaireTemp.length; 
                iMedianWordTemp = parseInt(iTailleArrayTemp)/2;       
                sMotMedianTemp = aDictionnaireTemp[parseInt(iMedianWordTemp)];    
                //divA.innerHTML = aDictionnaireTemp + " ~~"+ sMotMedianTemp;
    
           
         
    }
          
  
    else 
    {
       return  divA.html("Le mot est bien dans le gros dico")
       
        break;

    }

    }

    if (sMotRecherche == aDictionnaireTemp)
    {
        alert(sMotRecherche + "~~" +aDictionnaireTemp )
        divA.html("Le mot est bien dans le gros dico")
    }
    else
    {
        alert(sMotRecherche + "~~" +aDictionnaireTemp )
        divA.html("Le mot n'est pas dans le gros dico")
    }
 
}

var array76A = [];

        
var aTempArray76A = [];
var iCompteur76A = 0;
var iMini76A = 0;
var iMax76A = 0
var iVariance76A = 0;

function exo76Ajq()
{
    
      var iTailleArray76A = +$("#FJS76A1").val()
       
        $("#FJS76A2G").css("visibility", "visible")
    
        var nbr76A = +$("#FJS76A2").val()
        
       
    if (nbr76A > 0)
    {
        iCompteur76A++;
        if (iCompteur76A < iTailleArray76A + 1 )
        {
     
             if (nbr76A < iMini76A || iCompteur76A == 1 )
             {
                 iMini76A = nbr76A;
                 
             }
             if (nbr76A > iMax76A || iCompteur76A == 1 )
             {
                iMax76A = nbr76A;
                 
             }
            array76A.push(nbr76A);
             
             $("#AJS76A").html("Valeur bien enregistrée, encore : "+ (iTailleArray76A - iCompteur76A))
     
             if (iCompteur76A == iTailleArray76A)
             {
                iVariance76A = iMax76A - iMini76A;
                 $("#AJS76A").html("Le plus petit est :" + iMini76A + "<br> le plus grand est : "+ iMax76A
                 +"<br> la variance est : "+ iVariance76A)
             
 
             }

         }
     
        
   }
}

var array76B = [];
      

var iCompteur76B = 0;
var iMini76B = 0;
var iMax76B = 0
var iVariance76B = 0;

function exo76Bjq()
{
      var iTaillearray76B = +$("#FJS76B1").val()
       
        $("#FJS76B2G").css("visibility", "visible")
    
        var nbr76B = +$("#FJS76B2").val()
        
        iCompteur76B++;
   

        if (iCompteur76B < iTaillearray76B + 1 )
        {
     
             if (nbr76B < iMini76B || iCompteur76B == 1 )
             {
                 iMini76B = nbr76B;
             }

             if (nbr76B > iMax76B || iCompteur76B == 1 )
             {
                iMax76B = nbr76B;
             }

            array76B.push(nbr76B);
            $("#AJS76B").html("Valeur bien enregistrée, encore : "+ (iTaillearray76B - iCompteur76B))
             if (iCompteur76B == iTaillearray76B  )
             {

               
     
                if (iCompteur76B == iTaillearray76B)
                {
                   iVariance76B = iMax76B - iMini76B;
                    $("#AJS76B").html("Le plus petit est :" + iMini76B + "<br> le plus grand est : "+ iMax76B
                    +"<br> la variance est : "+ iVariance76B)
                
    
                }

             }
         

    }
     
        
        
}

function exo77jq()
{
    var iajq = 0;
    var ibjq = 0;
    var icjq = -1;

     aFirstArray77 = [4,6,8,10,13,17];

    aSecondArray77 = [7,9,12,14,15,19];

    aFirstArray77TEMP = [];

    var afini = false;

    var bfini = false;

 
    iArrayLength = aFirstArray77.length;
    aSecondArray77Length = aSecondArray77.length;

    while (!afini || !bfini)
    {
        
        icjq++;
       
        if (afini || aFirstArray77[iajq] > aSecondArray77[ibjq] )
        {
            aFirstArray77TEMP[icjq] = aSecondArray77[ibjq];
            ibjq++;
           // bfini = ib > 6;
           
            if (ibjq == aSecondArray77Length)
            {
                bfini = true;
            }

        }
        else
        {
            aFirstArray77TEMP[icjq] = aFirstArray77[iajq];
            iajq++;
           // afini = ac >6;
          
           if(iajq == iArrayLength)
           {
            afini = true;
           }
        }
        
    }

$("#AJS77").html(aFirstArray77TEMP)



}
