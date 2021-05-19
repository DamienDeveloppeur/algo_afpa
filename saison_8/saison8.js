function exo81()
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

    

    
        document.getElementById("AJS81").innerHTML = solution;

}

function exo82()
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
            
               
                document.getElementById("AJS82").innerHTML = solution82;
            }
              
        }
      


}

function exo83()
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

     document.getElementById("AJS83").innerHTML = solution0 + "<br>" +solution83;
}

function exo84()
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
    document.getElementById("AJS84").innerHTML = solution;
}

function exo85A()
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
    document.getElementById("AJS85A").innerHTML = solution;

}


function exo85B()
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
            solution = solution +  "T["+k +"] = "+ T[k] + "<br>";
           }
           
        }
    }
    document.getElementById("AJS85B").innerHTML = solution;

}

var iCompteur86 = 0;
var position = "";
function exo86()
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
document.getElementById("AJS86").innerHTML = "La valeur max est : " + max + " Ayant pour position dans l'array : "+ position;
    


}
var solution = "";
function uploadDamier()
{

    var aDamier = [];
    //var startLigneFlex = "<div class=\"flexligne\">";
    //var endLigneFlex = "</div>";
    for (i = 1; i < 11; i++)
    {
        aDamier[i] = [];

 
        for(m = 0; m < 10; m++)
        {           
         //SI l'INDICE EST PAIR
                if (i%2 != 0)
                {
                    //INDICE 0 || 2
                    if (i < 5)
                    {
                        if (m == 0)
                        {
                            solution +=   "<div class=\"flexligne\">  <div class=\"caseRouge\" id=\"" +i+m+"\" >"+i + m+"</div>"  ; 
                        }
                        // INDICE : m => 2 
                        else if (m !=0 && m != 9 && m%2 == 0)
                        {
                            solution +=  " <div class=\"caseRouge\" id=\"" +i+m+"\" >" +i+m+"</div>";
                        }
                        // INDICE : m => 1 || 3 || 5 || 7 || 9
                        else if (m !=0 && m != 9 && m%2 != 0)
                        {
                            solution +=  " <div class=\"nes-squirtle\" id=\"" +i+m+"\" onclick=\"deplacement("+i+","+m+")\">" +i+m+"</div>";
                        }
                        else  
                        {
                            solution +=   " <div class=\"nes-squirtle\" id=\"" +i+m+"\" onclick=\"deplacement("+i+","+m+")\">" +i+m+"</div> </div>";
                        }
                    }
              
                    // INDICE 4 || 6 || 8
                    else if (i == 5)
                    {
                        // m = 0
                        if (m == 0)
                        {
                            solution +=   "<div class=\"flexligne\" >  <div class=\"caseRouge\" id=\"" +i+m+"\" >" +i+m+"</div>"  ; 
                        }
                        // m => 2 || 4 || 6 || 8
                        else if (m !=0 && m != 9 && m%2 == 0 && m!= 4)
                        {
                            solution +=  " <div class=\"caseRouge\"id=\"" +i+m+"\" >" +i+m+"</div>";
                        }
                        else if (m == 4)
                        {
                            solution +=  " <div class=\"caseRouge\" id=\"" +i+m+"\" >" +i+m+"</div>";
                        }
                        // m=> 1 || 3 || 5 || 7 
                        else if (m !=0 && m != 9 && m%2 != 0)
                        {
                            solution +=  " <div class=\"caseNoir\" id=\"" +i+m+"\" onclick=\"deplacement("+i+","+m+")\">" +i+m+"</div>";
                        }
                        // m=> 9
                        else  
                        {
                            solution +=   " <div class=\"caseNoir\" id=\"" +i+m+"\" onclick=\"deplacement("+i+","+m+")\">" +i+m+"</div> </div>";
                        }
    
                    }
                    else 
                    {
                        if (m == 0)
                        {
                            solution +=   "<div class=\"flexligne\">  <div class=\"caseRouge\" id=\"" +i+m+"\" >" +i+m+"</div>"  ; 
                        }
                        // m => 2 || 4 || 6 || 8
                        else if (m !=0 && m != 9 && m%2 == 0)
                        {
                            solution +=  " <div class=\"caseRouge\" id=\"" +i+m+"\" >" +i+m+"</div>";
                        }
                       
                        // m=> 1 || 3 || 5 || 7 
                        else if (m !=0 && m != 9 && m%2 != 0)
                        {
                            solution +=  " <div class=\"nes-bulbasaur\" id=\"" +i+m+"\" onclick=\"deplacement("+i+","+m+")\">" +i+m+"</div>";
                        }
                        // m=> 9
                        else  
                        {
                            solution +=   " <div class=\"nes-bulbasaur\"  id=\"" +i+m+"\" onclick=\"deplacement("+i+","+m+")\">" +i+m+"</div> </div>";
                        }
    

                    }
                }
           //SI L'INDICE N'EST PAS PAIR
                else 
                {
                    // INDICE 5 || 7 || 9
                    if (i > 6)
                    {

                        if (m == 0)
                        {
                            solution +=   "<div class=\"flexligne\">  <div class=\"nes-bulbasaur\" id=\"" +i+m+"\" onclick=\"deplacement("+i+","+m+")\">" +i+m+"</div>"  ; 
                        }

                        else if (m !=0 && m != 9 && m%2 == 0)
                        {
                            solution +=  " <div class=\"nes-bulbasaur\" id=\"" +i+m+"\" onclick=\"deplacement("+i+","+m+")\">" +i+m+"</div>";
                        }
                        else if (m !=0 && m != 9 && m%2 != 0)
                        {
                            solution +=  " <div class=\"caseRouge\" id=\"" +i+m+"\" >" +i+m+"</div>";
                        }
                        else  
                        {
                            solution +=   " <div class=\"caseRouge\" id=\"" +i+m+"\" >" +i+m+"</div> </div>";
                        }
                    }
                    else if (i == 4 || i == 2)
                    {
                        // INDICE => 1 || 3 || 5
                        if (m == 0)
                        {
                            solution +=   "<div class=\"flexligne\">  <div class=\"nes-squirtle\" id=\"" +i+m+"\" onclick=\"deplacement("+i+","+m+")\">" +i+m+"</div>"  ; 
                        }
                        // m => 2 || 4 || 6
                        else if (m !=0 && m != 9 && m%2 == 0)
                        {
                            solution +=  " <div class=\"nes-squirtle\" id=\"" +i+m+"\" onclick=\"deplacement("+i+","+m+")\">" +i+m+"</div>";
                        }
                        else if (m !=0 && m != 9 && m%2 != 0)
                        {
                            solution +=  " <div class=\"caseRouge\" id=\"" +i+m+"\" >" +i+m+"</div>";
                        }
                        else  
                        {
                            solution +=   " <div class=\"caseRouge\" id=\"" +i+m+"\" >" +i+m+"</div> </div>";
                        }


                    }
                    else 
                    {
                        if (m == 0)
                        {
                            solution +=   "<div class=\"flexligne\">  <div class=\"caseNoir\" id=\"" +i+m+"\" onclick=\"deplacement("+i+","+m+")\">" +i+m+"</div>"  ; 
                        }
                        else if (m !=0 && m != 9 && m%2 == 0)
                        {
                            solution +=  " <div class=\"caseNoir\" id=\"" +i+m+"\" onclick=\"deplacement("+i+","+m+")\">" +i+m+"</div>";
                        }
                        else if (m !=0 && m != 9 && m%2 != 0)
                        {
                            solution +=  " <div class=\"caseRouge\" id=\"" +i+m+"\" >" +i+m+"</div>";
                        }
                        else  
                        {
                            solution +=   " <div class=\"caseRouge\" id=\"" +i+m+"\" >" +i+m+"</div> </div>";
                        }
                    }
                    
                }
                       
           

            
        }
        
    }

document.getElementById("AJS87").innerHTML = solution;

}

var test3 = 0;
function deplacement(x,y)
{
   var X = "";
    X = X + x;

   var Y = "";
    Y = Y + y;

    test3 = X + Y;
    
    var idPiece = document.getElementById(test3);

    var caseNoir = document.querySelectorAll(".caseNoir, .nes-bulbasaur, .nes-squirtle, .tortank, .florizare");

  for (var element of caseNoir) 
   {
    element.style.border = "none";
    
    }

    idPiece.style.border = "2px solid green";

    return callback (test3);
}


var iCompteurTPDAME = 4;
function deplacementFinal()
{

    //var coordonneesInitialeBrut = document.getElementById("FJS871").value; 
    var test4 = parseInt(test3);
    var coordonneesInitialeBrutInt = test4; 

    var coordonneesDestinationBrut = +document.getElementById("FJS872").value; 

    var IDpiece = document.getElementById(test3);

    // DEPLACEMENT PIECE
        var coordonneesPotentiellesp9 = document.getElementById(coordonneesInitialeBrutInt + 9);
   
    var coordonneesPotentiellesp11 = document.getElementById(coordonneesInitialeBrutInt + 11);
   
    var coordonneesPotentiellesMANGEAGEp18 = document.getElementById(coordonneesInitialeBrutInt + 18);
   
    var coordonneesPotentiellesMANGEAGEp22 = document.getElementById(coordonneesInitialeBrutInt + 22);

    var coordonneesPotentiellesm11 = document.getElementById( coordonneesInitialeBrutInt - 11);
   
    var coordonneesPotentiellesm9 = document.getElementById(coordonneesInitialeBrutInt - 9);



    var coordonneesPotentiellesMANGEAGEm22 = document.getElementById(coordonneesInitialeBrutInt - 22);
   
    var coordonneesPotentiellesMANGEAGEm18 = document.getElementById(coordonneesInitialeBrutInt - 18);

    // CASE PROMOTION DAME


    if (iCompteurTPDAME%2 != 0)
    {
   
    if (IDpiece.classList == "nes-squirtle")
    {
       
       if (coordonneesDestinationBrut == 0)
       {
        


           if (coordonneesPotentiellesp9.classList == "caseNoir")
           {
            iCompteurTPDAME++;
            coordonneesPotentiellesp9.classList = "nes-squirtle";
            IDpiece.classList = "caseNoir";
            promotion(coordonneesPotentiellesp9);
           }
           if ((coordonneesPotentiellesp9.classList == "nes-bulbasaur" || coordonneesPotentiellesp9.classList == "florizare"  )&& (coordonneesPotentiellesMANGEAGEp18.classList == "caseNoir"))
           {
            iCompteurTPDAME++;
            alert("eat bulbi");
            coordonneesPotentiellesp9.classList = "caseNoir";
            coordonneesPotentiellesMANGEAGEp18.classList = "nes-squirtle";
            IDpiece.classList = "caseNoir"
            promotion(coordonneesPotentiellesMANGEAGEp18);
           }

       }
       if (coordonneesDestinationBrut == 1)
       {
        
           if (coordonneesPotentiellesp11.classList == "caseNoir")
           {
            iCompteurTPDAME++;
            coordonneesPotentiellesp11.classList = "nes-squirtle";
            IDpiece.classList = "caseNoir";
            promotion(coordonneesPotentiellesp11);
           }
           if ((coordonneesPotentiellesp11.classList == "nes-bulbasaur" || coordonneesPotentiellesp11.classList == "florizare" ) && (coordonneesPotentiellesMANGEAGEp22.classList == "caseNoir") )
           {
            iCompteurTPDAME++;
            alert("eat bulbi");
            coordonneesPotentiellesp11.classList = "caseNoir";
            coordonneesPotentiellesMANGEAGEp22.classList = "nes-squirtle";
            IDpiece.classList = "caseNoir";
            promotion(coordonneesPotentiellesMANGEAGEp22);
           }
       }
       if (coordonneesDestinationBrut == 2)
       {
            if ( (coordonneesPotentiellesm11.classList == "nes-bulbasaur" || coordonneesPotentiellesm11.classList == "florizare"  )&& coordonneesPotentiellesMANGEAGEm22.classList == "caseNoir")
            {
                iCompteurTPDAME++;
                coordonneesPotentiellesm11.classList = "caseNoir";
                coordonneesPotentiellesMANGEAGEm22.classList = "nes-squirtle";
                IDpiece.classList = "caseNoir"
            }
       }
       if (coordonneesDestinationBrut == 3)
       {
            if ( (coordonneesPotentiellesm9.classList == "nes-bulbasaur" || coordonneesPotentiellesm9.classList == "florizare"  ) && coordonneesPotentiellesMANGEAGEm18.classList == "caseNoir")
            {
                iCompteurTPDAME++;
                coordonneesPotentiellesm9.classList = "caseNoir";
                coordonneesPotentiellesMANGEAGEm18.classList = "nes-squirtle";
                IDpiece.classList = "caseNoir"
            }
       }

    }
    // DAME CARAPUCE
        if (IDpiece.classList == "tortank")
        {
            if (coordonneesDestinationBrut == 0)
            {
             
                if (coordonneesPotentiellesp9.classList == "caseNoir")
                {
                    iCompteurTPDAME++;
                 coordonneesPotentiellesp9.classList = "tortank";
                 IDpiece.classList = "caseNoir";
                 
                }
                if ((coordonneesPotentiellesp9.classList == "nes-bulbasaur" || coordonneesPotentiellesp9.classList == "florizare"  ) && (coordonneesPotentiellesMANGEAGEp18.classList == "caseNoir"))
                {
                    iCompteurTPDAME++;
                 alert("eat bulbi");
                 coordonneesPotentiellesp9.classList = "caseNoir";
                 coordonneesPotentiellesMANGEAGEp18.classList = "tortank";
                 IDpiece.classList = "caseNoir"
                 
                }
     
            }
            if (coordonneesDestinationBrut == 1)
            {
             
                if (coordonneesPotentiellesp11.classList == "caseNoir")
                {
                    iCompteurTPDAME++;
                 coordonneesPotentiellesp11.classList = "tortank";
                 IDpiece.classList = "caseNoir";
                 
                }
                if ((coordonneesPotentiellesp11.classList == "nes-bulbasaur" || coordonneesPotentiellesp11.classList == "florizare"  ) && (coordonneesPotentiellesMANGEAGEp22.classList == "caseNoir") )
                {
                    iCompteurTPDAME++;
                 alert("eat bulbi");
                 coordonneesPotentiellesp11.classList = "caseNoir";
                 coordonneesPotentiellesMANGEAGEp22.classList = "tortank";
                 IDpiece.classList = "caseNoir";
                
                }
            }
            if (coordonneesDestinationBrut == 2)
            {
                if (coordonneesPotentiellesm11.classList == "caseNoir")
                {
                    iCompteurTPDAME++;
                 coordonneesPotentiellesm11.classList = "tortank";
                 IDpiece.classList = "caseNoir";
                 
                }
                 if ( (coordonneesPotentiellesm11.classList == "nes-bulbasaur" || coordonneesPotentiellesm11.classList == "florizare"  ) && coordonneesPotentiellesMANGEAGEm22.classList == "caseNoir")
                 {
                    iCompteurTPDAME++;
                     coordonneesPotentiellesm11.classList = "caseNoir";
                     coordonneesPotentiellesMANGEAGEm22.classList = "tortank";
                     IDpiece.classList = "caseNoir"
                 }
            }
            if (coordonneesDestinationBrut == 3)
            {
                if (coordonneesPotentiellesm9.classList == "caseNoir")
                {
                    iCompteurTPDAME++;
                 coordonneesPotentiellesm9.classList = "tortank";
                 IDpiece.classList = "caseNoir";
                 
                }
                 if ( (coordonneesPotentiellesm9.classList == "nes-bulbasaur" || coordonneesPotentiellesm9.classList == "florizare"  ) && coordonneesPotentiellesMANGEAGEm18.classList == "caseNoir")
                 {
                    iCompteurTPDAME++;
                     coordonneesPotentiellesm9.classList = "caseNoir";
                     coordonneesPotentiellesMANGEAGEm18.classList = "tortank";
                     IDpiece.classList = "caseNoir"
                 }
            }
        }
    }
    if (iCompteurTPDAME%2 == 0)
    {
              

        if (IDpiece.classList == "nes-bulbasaur")
            {
                // HAUT GAUCHE
                if (coordonneesDestinationBrut == 0)
                {
                    if (coordonneesPotentiellesm11.classList == "caseNoir" )
                    {
                      
                        iCompteurTPDAME++;
                        coordonneesPotentiellesm11.classList = "nes-bulbasaur";
                    IDpiece.classList = "caseNoir";
                    promotion(coordonneesPotentiellesm11);
                    }

                    if ((coordonneesPotentiellesm11.classList == "nes-squirtle" || coordonneesPotentiellesm11.classList == "tortank")  && (coordonneesPotentiellesMANGEAGEm22.classList == "caseNoir")  )
                    {
                        iCompteurTPDAME++;
                        coordonneesPotentiellesm11.classList = "caseNoir";
                    
                        
                    coordonneesPotentiellesMANGEAGEm22.classList = "nes-bulbasaur";
                    IDpiece.classList = "caseNoir";
                    promotion(coordonneesPotentiellesMANGEAGEm22);
                    }
                }
                //HAUT DROIT
                if (coordonneesDestinationBrut == 1)
                {
                   
                    if (coordonneesPotentiellesm9.classList == "caseNoir" )
                    {                                           
                        iCompteurTPDAME++;
                        coordonneesPotentiellesm9.classList = "nes-bulbasaur";
                        IDpiece.classList = "caseNoir";
                   promotion(coordonneesPotentiellesm9);
                    }
                    if ((coordonneesPotentiellesm9.classList == "nes-squirtle" || coordonneesPotentiellesm9.classList == "tortank") && (coordonneesPotentiellesMANGEAGEm18.classList == "caseNoir") )
                    {
                        
                        iCompteurTPDAME++;
                        alert("eat carapuce");
                        coordonneesPotentiellesm9.classList = "caseNoir";
                    
                       
                    coordonneesPotentiellesMANGEAGEm18.classList = "nes-bulbasaur";
                    IDpiece.classList = "caseNoir";
                   promotion(coordonneesPotentiellesMANGEAGEm18);
                    }
                }
                if (coordonneesDestinationBrut == 2)
                {
                    if ((coordonneesPotentiellesp9.classList == "nes-squirtle" || coordonneesPotentiellesp9.classList == "tortank") && coordonneesPotentiellesMANGEAGEp18.classList == "caseNoir")
                    {
                        iCompteurTPDAME++;
                        coordonneesPotentiellesp9.classList = "caseNoir";
                        coordonneesPotentiellesMANGEAGEp18.classList = "nes-bulbasaur";
                        IDpiece.classList = "caseNoir"
                    }
                }
                if (coordonneesDestinationBrut == 3)
                {
                    if ((coordonneesPotentiellesp11.classList == "nes-squirtle" || coordonneesPotentiellesp11.classList == "tortank") && coordonneesPotentiellesMANGEAGEp22.classList == "caseNoir")
                    {
                        iCompteurTPDAME++;
                        coordonneesPotentiellesp11.classList = "caseNoir";
                        coordonneesPotentiellesMANGEAGEp22.classList = "nes-bulbasaur";
                        IDpiece.classList = "caseNoir"
                    }
                }
                
        
            }

            if (IDpiece.classList == "florizare")
            {
               
                if (coordonneesDestinationBrut == 0)
                {
                
                    if (coordonneesPotentiellesm11.classList == "caseNoir")
                    {
                        iCompteurTPDAME++;
                        coordonneesPotentiellesm11.classList = "florizare";
                    IDpiece.classList = "caseNoir";
                   
                    }
                    if ((coordonneesPotentiellesm11.classList == "nes-squirtle" || coordonneesPotentiellesm11.classList == "tortank") && (coordonneesPotentiellesMANGEAGEm22.classList == "caseNoir")  )
                    {
                        iCompteurTPDAME++;
                        coordonneesPotentiellesm11.classList = "caseNoir";
                    
                        coordonneesPotentiellesp9.classList = "caseNoir";
                    coordonneesPotentiellesMANGEAGEm22.classList = "florizare";
                    IDpiece.classList = "caseNoir";
                   
                    }
                }
                if (coordonneesDestinationBrut == 1)
                {
                
                    if (coordonneesPotentiellesm9.classList == "caseNoir")
                    {
                        iCompteurTPDAME++;
                        coordonneesPotentiellesm9.classList = "florizare";
                    IDpiece.classList = "caseNoir";
                   
                    }
                    if ((coordonneesPotentiellesm9.classList == "nes-squirtle" || coordonneesPotentiellesm9.classList == "tortank") && (coordonneesPotentiellesMANGEAGEm18.classList == "caseNoir") )
                    {
                        iCompteurTPDAME++;
                        alert("eat carapuce");
                        coordonneesPotentiellesm9.classList = "caseNoir";
                    
                        coordonneesPotentiellesp11.classList = "caseNoir";
                    coordonneesPotentiellesMANGEAGEm18.classList = "florizare";
                    IDpiece.classList = "caseNoir";
                   
                    }
                }
                if (coordonneesDestinationBrut == 2)
                {
                    if (coordonneesPotentiellesp9.classList == "caseNoir")
                    {
                        iCompteurTPDAME++;
                        coordonneesPotentiellesp9.classList = "florizare";
                    IDpiece.classList = "caseNoir";
                   
                    }
                    if ( (coordonneesPotentiellesp9.classList == "nes-squirtle" || coordonneesPotentiellesp9.classList == "tortank") && coordonneesPotentiellesMANGEAGEp18.classList == "caseNoir")
                    {
                        iCompteurTPDAME++;
                        coordonneesPotentiellesp9.classList = "caseNoir";
                        coordonneesPotentiellesMANGEAGEp18.classList = "florizare";
                        IDpiece.classList = "caseNoir"
                    }
                }
                if (coordonneesDestinationBrut == 3)
                {
                    if (coordonneesPotentiellesp11.classList == "caseNoir")
                    {
                        iCompteurTPDAME++;
                        coordonneesPotentiellesp11.classList = "florizare";
                    IDpiece.classList = "caseNoir";
                   
                    }
                    if ( (coordonneesPotentiellesp11.classList == "nes-squirtle" || coordonneesPotentiellesp11.classList == "tortank") && coordonneesPotentiellesMANGEAGEp22.classList == "caseNoir")
                    {
                        iCompteurTPDAME++;
                        coordonneesPotentiellesp11.classList = "caseNoir";
                        coordonneesPotentiellesMANGEAGEp22.classList = "florizare";
                        IDpiece.classList = "caseNoir"
                    }
                }
                
        
            }
    }

    
 
 

     
 }

function promotion(coordonnees)
{
    var casePromoC1 = document.getElementById("100");
    var casePromoC2 = document.getElementById("102");
    var casePromoC3 = document.getElementById("104");
    var casePromoC4 = document.getElementById("106");
    var casePromoC5 = document.getElementById("108");
  
    var casePromoB1 = document.getElementById("11");
    var casePromoB2 = document.getElementById("13");
    var casePromoB3 = document.getElementById("15");
    var casePromoB4 = document.getElementById("17");
    var casePromoB5 = document.getElementById("19");

    if(coordonnees == casePromoC1|| coordonnees == casePromoC2 || coordonnees == casePromoC3 ||coordonnees == casePromoC4 || coordonnees == casePromoC5 )
    {
        alert("test");
        coordonnees.classList = "tortank";
    }
    else if(coordonnees == casePromoB1 || coordonnees == casePromoB2 ||coordonnees == casePromoB3 ||coordonnees == casePromoB4 ||coordonnees == casePromoB5 )
    {
        alert("test");
        coordonnees.classList = "florizare";
    }

}
