var array = [];
var iCompteur71 = 0;
function exo71()
{
   
    var divA = document.getElementById("AJS71");
    var tailleTableau = +document.getElementById("FJS71").value;
 
    document.getElementById("FJS712G").style.visibility = "visible";
    document.getElementById("FJS711G").style.visibility = "hidden";

    var iNbr = +document.getElementById("FJS712").value;

    iCompteur71++;
    if (iCompteur71 < tailleTableau + 1)
    {
      
        array.push(iNbr);
        divA.innerHTML = "Valeur bien enregistré, encore : " + (tailleTableau - iCompteur71)+ " à enregistrer";
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
                divA.innerHTML = array + "<br>c'est dans l'ordre !";
               
            }
            else
            {
                divA.innerHTML =array + "<br> ce n'est pas dans l'ordre !";
              
            }
        }
    }
    


    }
 
}

function exo72()
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
    document.getElementById("AJS72").innerHTML ="Array avant la fonction: (5,-9,3,7,-7,12,4)<br>" + array;

}

function exo721()
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
function exo73()
{
  var iTailleArray = +document.getElementById("FJS731").value;
    //clear();
    document.getElementById("FJS732G").style.visibility = "visible";

    var nbr73 = +document.getElementById("FJS732").value;
    //clear();
    iCompteur73++;

   if (iCompteur73 < iTailleArray + 1 )
   {

        array73.push(nbr73);
        array73First = array73;
        document.getElementById("AJS73").innerHTML ="Array entré "+ array73First;

        if (iCompteur73 == iTailleArray)
        {
           
           
            
            for (i = array73.length - 1; i > -1; i--)
            {
                
                aTempArray73.push(array73[i]);
                
            }
            
            array73 = aTempArray73;
            document.getElementById("AJS73").innerHTML ="Array entré :"+array73First+ "<br>"+ " array reverse :"+  array73 ;
        
        }
    
   }

 

}
var AarraySupr714 = [];
var iCompteur714 = 0;
function exo74()
{
    
    var nbr = +document.getElementById("FJS741").value; 

    document.getElementById("FJS742G").style.visibility = "visible";
   
    var nbrDansLarray = +document.getElementById("FJS742").value; 
    iCompteur714++;
    if (iCompteur714 < nbr + 1)
    {
        AarraySupr714.push(nbrDansLarray);
        document.getElementById("AJS714").innerHTML = AarraySupr714;
    }
    else
    {
        document.getElementById("FJS743G").style.visibility = "visible";
        var indiceSlice = +document.getElementById("FJS743").value; 
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
    document.getElementById("AJS714").innerHTML = AarraySupr714;
   

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

function exo75()
{
    
   var divA =  document.getElementById("AJS75");
    var sMotRecherche = document.getElementById("FJS75").value; 
 
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
       return  divA.innerHTML = "Le mot est bien dans le gros dico";
       
        break;

    }

    }

    if (sMotRecherche == aDictionnaireTemp)
    {
        alert(sMotRecherche + "~~" +aDictionnaireTemp )
        divA.innerHTML = "Le mot est bien dans le gros dico";
    }
    else
    {
        alert(sMotRecherche + "~~" +aDictionnaireTemp )
        divA.innerHTML = "Le mot n'est pas dans le gros dico";
    }
 
}

var array76A = [];

        
var aTempArray76A = [];
var iCompteur76A = 0;
var iMini76A = 0;
var iMax76A = 0
var iVariance76A = 0;

function exo76A()
{
      var iTailleArray76A = +document.getElementById("FJS76A1").value;
       
        document.getElementById("FJS76A2G").style.visibility = "visible";
    
        var nbr76A = +document.getElementById("FJS76A2").value;
        
       
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
             
             document.getElementById("AJS76A").innerHTML = "Valeur bien enregistrée, encore : "+ (iTailleArray76A - iCompteur76A);
     
             if (iCompteur76A == iTailleArray76A)
             {
                iVariance76A = iMax76A - iMini76A;
                 document.getElementById("AJS76A").innerHTML ="Le plus petit est :" + iMini76A + "<br> le plus grand est : "+ iMax76A
                 +"<br> la variance est : "+ iVariance76A ;
             
 
             }

    }
     
        
        }
}

var array76B = [];
      

var iCompteur76B = 0;
var iMini76B = 0;
var iMax76B = 0
var iVariance76B = 0;

function exo76B()
{
      var iTaillearray76B = +document.getElementById("FJS76B1").value;
       
        document.getElementById("FJS76B2G").style.visibility = "visible";
    
        var nbr76B = +document.getElementById("FJS76B2").value;
        
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
             
             document.getElementById("AJS76B").innerHTML = "Valeur bien enregistrée, encore : "+ (iTaillearray76B - iCompteur76B);
     
             if (iCompteur76B == iTaillearray76B)
             {
                iVariance76B = iMax76B - iMini76B;
                 document.getElementById("AJS76B").innerHTML ="Le plus petit est :" + iMini76B + "<br> le plus grand est : "+ iMax76B
                 +"<br> la variance est : "+ iVariance76B ;
             
 
             }

    }
     
        
        
}


function exo77()
{
    var ia = 0;
    var ib = 0;
    var ic = -1;

     aFirstArray77 = [4,6,8,10,13,17];

    aSecondArray77 = [7,9,12,14,15,19];

    aFirstArray77TEMP = [];

    var afini = false;

    var bfini = false;

 
    iArrayLength = aFirstArray77.length;
    aSecondArray77Length = aSecondArray77.length;

    while (!afini || !bfini)
    {
        
        ic++;
       
        if (afini || aFirstArray77[ia] > aSecondArray77[ib] )
        {
            aFirstArray77TEMP[ic] = aSecondArray77[ib];
            ib++;
           // bfini = ib > 6;
           
            if (ib == aSecondArray77Length)
            {
                bfini = true;
            }

        }
        else
        {
            aFirstArray77TEMP[ic] = aFirstArray77[ia];
            ia++;
           // afini = ac >6;
          
           if(ia == iArrayLength)
           {
            afini = true;
           }
        }
        
    }

document.getElementById("AJS77").innerHTML = aFirstArray77TEMP;



}
