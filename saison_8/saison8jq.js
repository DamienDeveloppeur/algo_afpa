function exo81jq()
{
    var solution ="";
    var array81 = [];
    for (i = 0; i < 6; i++)
    {
        array81[i] = []

        for(m = 0; m < 13; m++)
        {

           array81[i][m] = 0;
           if (m == 12)
           {
            solution = solution + "array81 ["+i +"] = "+ array81[i] + "<br>";
           }
          
        }
    }

    array82 = [];

    
        $("#AJS81").html(solution)

}

function exo82jq()
{
        var val = 1;
        var X = [];
        var solution82 = "";
        for (i = 0; i <2; i++)
        {
            
            X[i] =[];
           
            for (j = 0; j < 3; j++)
            {
                X[i][j] = val;
                val++;
                if (j == 2)
                {

                    solution82 = solution82 + "X ["+i +"] = "+ X[i] + "<br>";
                }
            
               
                $("#AJS82").html(solution82)
            }
              
        }
      


}

function exo83jq()
{

    var val = 1;
    var X = [];
    var solution83 = "";
    for (i = 0; i <2; i++)
    {
        
        X[i] =[];
       
        for (j = 0; j < 3; j++)
        {
            X[i][j] = val;
            val++;
           
        }
          
    }
    for (j = 0; j < 3; j++)
    {

        for (i = 0; i < 2; i++)
        {
            if (i == 0)
            {
                solution0 =  "X["+i +"] = "+ X[i] + "<br>" ;
            }
            if (i == 1)
            {
                solution83 =  "X["+i +"] = "+ X[i] + "<br>" ;
            }
                
        }
     }

     $("#AJS83").html(solution0 + "<br>" +solution83)
}

function exo84jq()
{
    var T = [];
    var solution ="";
    for(k = 0; k <4; k++)
    {
        T[k] = [];
      
        for (m = 0; m <2; m++)
        {
            T[k][m] = k+m;
           if (m == 1)
           {
            solution = solution +  "X["+k +"] = "+ T[k] + "<br>";
           }
           
        }
    }
    $("#AJS84").html(solution)
}

function exo85Ajq()
{

    var T = [];
    var solution ="";
    for(k = 0; k <4; k++)
    {
        T[k] = [];
      
        for (m = 0; m <2; m++)
        {
            T[k][m] = (2 * k) + (m + 1);
//alert(T[1][0]);

           if (m == 1)
           {
            solution = solution +  "X["+k +"] = "+ T[k] + "<br>";
           }
           
        }
    }
    $("#AJS85A").html(solution)

}


function exo85Bjq()
{

    var T = [];
    var solution ="";
    for(k = 0; k <4; k++)
    {
        T[k] = [];
      
        for (m = 0; m <2; m++)
        {
            T[k][m] = (k + 1) + 4 * m;
//alert(T[1][0]);

           if (m == 1)
           {
            solution = solution +  "X["+k +"] = "+ T[k] + "<br>";
           }
           
        }
    }
    $("#AJS85B").html(solution)

}

var iCompteur86 = 0;
var position = "";
function exo86jq()
{

    var max = 0;

    var arrayMax = [];

    arrayMax[0] = [5,78,95,14,23,64,49,98,51,32,15,21];
    arrayMax[1] = [98,48,74,51,32,98,956,874,12];
    arrayMax[2] = [965,633,712,122,343,248,786,337,365]
    arrayMax[3] = [116,463,393,831,13,748,452,532,43]
    arrayMax[4] = [163,142,282,281,84,570,249,250,931]
    arrayMax[5] = [868,66,546,549,962,366,928,213,661]
    arrayMax[6] = [794,335,32,217,348,160,548,689,343]
    arrayMax[7] = [33,384,212,722,915,577,561,419,361]
    arrayMax[8] = [811,664,101,957,558,972,905,313,936]
    arrayMax[9] = [57,895,818,1004,968,584,339,99,374]
    arrayMax[10] = [874,132,830,78,343,713,824,182,85]
    arrayMax[11] = [296,539,816,788,384,376,393,313,839]
    arrayMax[12] = [809,652,843,345,519,225,102,334,314]

  var iTaillearrayMax =  arrayMax.length;



    for (i=0; i < iTaillearrayMax; i++)
    {

        for (m = 0; m < 9; m++)
        {
            if (iCompteur86 == 1 || arrayMax[i][m] > max)
            {
                max = arrayMax[i][m];
                position = "arrayMax["+ i+ "]["+ m+"]";
            }

        }

    }
$("#AJS86").html("La valeur max est : " + max + " Ayant pour position dans l'array : "+ position)
    


}