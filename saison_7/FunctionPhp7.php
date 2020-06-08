<?php




function exo71()
{
   
    
    ?>
    <script>
        document.getElementById("FJS712G").style.visibility = "visible";
    </script>
    <?php
  if (empty($_SESSION["compteur71"]) && empty($_SESSION["array71"]))
            {
                
            
                $_SESSION["compteur71"] = 0;
                $_SESSION["tailleArray"] = $_POST["tailleArray"];
                $_SESSION["tailleArray"] = intval($_SESSION["tailleArray"]);
                $_SESSION["array71"] = [];

                $solution = "";
                $temp = 0;
            }
          $_SESSION["compteur71"]++;
            
    if (!empty($_POST["nbrArray"]) && isset($_POST["nbrArray"]))
    {
  
    if ($_SESSION["compteur71"] < $_SESSION["tailleArray"] + 1)
    {
    
        $_SESSION["array71"][] = intval($_POST["nbrArray"]);
      
        
   
        if ($_SESSION["compteur71"] == $_SESSION["tailleArray"])
        {

        
            for ( $p = 0; $p < $_SESSION["tailleArray"]  - 1; $p++)
            {
                    for ($i = 0; $i < $_SESSION["tailleArray"] - 1 ; $i++)
                    {
                        
                        if ($_SESSION["array71"][$i] > $_SESSION["array71"][$i+1])
                        {
                            while ($_SESSION["array71"][$i] > $_SESSION["array71"][$i + 1])
                            {
                                $temp = $_SESSION["array71"][$i];       
                                $_SESSION["array71"][$i] = $_SESSION["array71"][$i + 1];    
                                $_SESSION["array71"][$i + 1] = $temp;         
                                $i = 0;
                            }
                        }
                    }
                }
        
            for ($m = 1; $m < $_SESSION["tailleArray"] - 1; $m++)
            {
                if ($_SESSION["array71"][$m] + 1 == $_SESSION["array71"][$m + 1] && $_SESSION["array71"][$m] - 1 == $_SESSION["array71"][$m -1])
                {
                $solution = "c'est dans l'ordre";
                
                $_SESSION["compteur71"] = NULL;
                    $_SESSION["tailleArray"] = NULL;
                    $_SESSION["array71"] = NULL;
                session_destroy();
                return $solution;
                }
                else
                {
                    $solution = "c'est pas dans l'ordre";
                    $_SESSION["compteur71"] = NULL;
                    $_SESSION["tailleArray"] = NULL;
                    $_SESSION["array71"] = NULL;
                    session_destroy();
                    return $solution;
                }
            }
        }

     }


    }
  
  
}

function exo72()
{
    $array72 = array(5,-9,3,7,-7,12,4);
    $temp = 0;
    for ($i = 0; $i < 7; $i++)
    {

        if ($array72[$i] < $array72[$i + 1])
        {

            while($array72[$i] < $array72[$i + 1])
            {

            
                $temp = $array72[$i];
                $array72[$i] = $array72[$i + 1];
                $array72[ $i+ 1] = $temp;
                $i = 0;
            }
        }

    }
return $array72;
}

function exo73()
{
    $array73 = array(5,-9,3,7,-7,12,4);
    $array73TEMP = [];
   
             for ($i = 6; $i > -1; $i--)
             {             
                 $array73TEMP[] = $array73[$i];   
             }
             
             $array73 = $array73TEMP;
            return $array73;

}

function exo74()
{

 if (empty($_SESSION["tailleArray74"]))
        {
        $_SESSION["compteur74"] = 0;
        $_SESSION["arrayphp"] = [];
        $_SESSION["solution74"] = "";
        $_SESSION["tailleArray74"] = intval($_POST["tailleArray74"]);
     
        $_SESSION["arrayTemp74"] = [];
    
        }


        ?>
        <script>
            document.getElementById("FC74").style.display = "block";
          
        </script>
        <?php

        if (!empty($_POST["nbrc1"]) )
        {
         
            $_SESSION["nbrc1"] = $_POST["nbrc1"];
          for ($i = 0; $i < $_SESSION["tailleArray74"]; $i++)
          {
            
            $_SESSION["arrayphp"][$i] = intval($_POST["nbrc".$i]);
           
          }
         
        //$_SESSION["compteur74"]++;

        ?>
        <script>
            document.getElementById("FJS743G").style.visibility = "visible";
        
        </script>
        <?php
        }
                if (!empty($_POST["nbrIndice74"]) && isset($_POST["nbrIndice74"]) )
                {
                    /*
                    ?>
                            <script>
                               alert( "trollette");
                            
                            </script>
                            <?php
                    */
               
                    for ($i = 0; $i < $_SESSION["tailleArray74"]; $i++)
                    {
                        //var_dump($_SESSION["arrayphp"][$i]);
                       // var_dump($_SESSION["arrayphp"][$_POST["nbrIndice74"]]);
                       // var_dump($_POST["nbrIndice74"]);
                        if ($_SESSION["arrayphp"][$i] != $_SESSION["arrayphp"][intval($_POST["nbrIndice74"])])
                        {
                          
                    

                            $_SESSION["arrayTemp74"][] = $_SESSION["arrayphp"][$i];
                           
                            $_SESSION["solution74"] = $_SESSION["solution74"] . " ". $_SESSION["arrayphp"][$i]; 
                        }
                    
                    }
                   
                    $_SESSION["arrayphp"] =  $_SESSION["arrayTemp74"];
                    //var_dump($_SESSION["arrayphp"]);
                    $_SESSION["compteur74"] = NULL;
                   
                    $_SESSION["nbrIndice74"] = NULL;
                    $_SESSION["arrayTemp74"] = NULL;
                    $_SESSION["tailleArray74"] = NULL;
                    return  $_SESSION["solution74"];
                    $_SESSION["arrayphp"] = NULL;
                }
                
          
        

}



function exo75()
{
 
    $_SESSION["arrayTemp"] = [];
    $aDictionnaire = ["alphabet", "becasse", "caroline", "damier", "elephant",
     "fifrelin", "girafe","helicoptere","iris","jhin","kaimorse",
     "lumiere", "node", "voilier","zaza", "zebu"  ];
    $iTailleArray = sizeof($aDictionnaire);
   
       $iMedianWord = $iTailleArray/2;
       $iMedianWord =  intval($iMedianWord);
    $sMotMedian = $aDictionnaire[$iMedianWord];
   
    $aDictionnaireTemp = [];
    $aDictionnaireTemp = $aDictionnaire ;
  
   
   $iTailleArrayTemp = sizeof($aDictionnaireTemp);
   
    $iMedianWordTemp = intval($iTailleArrayTemp)/2;
   
   
    $sMotMedianTemp = $aDictionnaireTemp[intval($iMedianWordTemp)];


   $_SESSION["sMotRecherche"] = $_POST["sMotRecherche"];
   // var_dump($iTailleArrayTemp);
    while ($iTailleArrayTemp > 1  )
    {
       
    //alert($sMotMedianTemp + "~~" + $aDictionnaireTemp + "~~" + $iTailleArrayTemp);
            if ($_SESSION["sMotRecherche"] > $sMotMedianTemp )
            {
               
                for ($i = intval($iMedianWordTemp); $i < intval($iTailleArrayTemp); $i++ )
                {    
                        //arrayTemp.push($aDictionnaireTemp[i]); 
                        $_SESSION["arrayTemp"][] = $aDictionnaireTemp[$i];
                }

                $aDictionnaireTemp = $_SESSION["arrayTemp"];

                $_SESSION["arrayTemp"] = [];
                //$iTailleArrayTemp = $aDictionnaireTemp.length; 
                $iTailleArrayTemp = sizeof($aDictionnaireTemp); 
                $iMedianWordTemp = intval($iTailleArrayTemp)/2;       
                $sMotMedianTemp = $aDictionnaireTemp[intval($iMedianWordTemp)];    
                //divA.innerHTML = $aDictionnaireTemp + " ~~"+ $sMotMedianTemp;
            
            }

            else if ($_SESSION["sMotRecherche"] < $sMotMedianTemp )
            {
               
                        for ($i = 0; $i < intval($iMedianWordTemp) ; $i++ )
                        {
        
                                //arrayTemp.push($aDictionnaireTemp[i]);
                                $_SESSION["arrayTemp"][] = $aDictionnaireTemp[$i];
                        }
                        $aDictionnaireTemp = $_SESSION["arrayTemp"];
                        $_SESSION["arrayTemp"] = [];
                        $iTailleArrayTemp = sizeof($aDictionnaireTemp); 
                        $iMedianWordTemp = intval($iTailleArrayTemp)/2;       
                        $sMotMedianTemp = $aDictionnaireTemp[intval($iMedianWordTemp)];    
                        //divA.innerHTML = $aDictionnaireTemp + " ~~"+ $sMotMedianTemp;
            
                
                
            }
                
        
            else 
            {
            
               
            $control =  "Le mot est bien dans le gros dico";
           //var_dump($control);
            return $control;
                break;

            }
            
        }

            if ($_SESSION["sMotRecherche"] == $aDictionnaireTemp)
            {
                //var_dump($iTailleArrayTemp);
              
            // alert(sMotRecherche + "~~" +$aDictionnaireTemp )
                $control = "Le mot est bien dans le gros dico";
                //var_dump($control);
                return $control;
            }
            else
            {
                //var_dump($iTailleArrayTemp);

                //var_dump($_SESSION["sMotRecherche"]);
            
            // alert(sMotRecherche + "~~" +$aDictionnaireTemp )
                $control = "Le mot n'est pas dans le gros dico";
                //var_dump($control);
                return $control;
            }
    
}


function exo76A()
{
  
    if (empty($_SESSION["tailleArray76A"]))
        {
        
        $_SESSION["arrayphp"] = [];
        $_SESSION["solution76A"] = 0;
        $_SESSION["tailleArray76A"] = intval($_POST["tailleArray76A"]);
        $_SESSION["tailleArray76A"] = intval($_POST["tailleArray76A"]); 
        $_SESSION["max"] = 0;
        $_SESSION["mini"] = 0;
        $_SESSION["arrayTemp76A"] = [];
      
      }

       
        ?>
        <script>
            document.getElementById("FC76A").style.display = "block";
          
        </script>
        <?php
 

        if (!empty($_POST["nbrc1"]) && isset($_POST["nbrc1"]) )
        {
         
           

          for ($m = 0; $m < $_SESSION["tailleArray76A"] ; $m++)
          {
         
                if($_POST["nbrc".$m] > 0)
                {
                    
                    $_SESSION["arrayphp"][] = intval($_POST["nbrc".$m]);
                   
                }

          }
         // var_dump($_SESSION["arrayphp"]);
         

         $_SESSION["max"] = intval($_SESSION["arrayphp"][0]);
         $_SESSION["mini"] = intval($_SESSION["arrayphp"][0]);
          for ($i = 0; $i < $_SESSION["tailleArray76A"] ; $i++)
          {

               
               
                if ( $_SESSION["arrayphp"][$i] < $_SESSION["mini"] )
                {
                    $_SESSION["mini"] = $_SESSION["arrayphp"][$i];
                    
                }

                if ($_SESSION["arrayphp"][$i] > $_SESSION["max"])
                {

                    $_SESSION["max"]  = $_SESSION["arrayphp"][$i];
                   // var_dump($_SESSION["arrayphp"][$i]);
                }
              
                //var_dump("max". $_SESSION["max"]);
               // var_dump($_SESSION["mini"]);
          }


          $_SESSION["solution76A"] = ($_SESSION["max"]  - $_SESSION["mini"]);
     
   
        $_SESSION["tailleArray76A"] = NULL;
        $_SESSION["arrayphp"] = NULL;
        $_SESSION["nbrc1"] = NULL;

        return  $_SESSION["solution76A"];
        session_destroy();
        $_SESSION["solution76A"] = NULL;
        $_SESSION["max"] = NULL;
        $_SESSION["mini"] = NULL;
        }
     
}

function exo76B()
{

    if (empty($_SESSION["tailleArray76B"]))
    {
        ?>
                    <script>
                        alert("test");
                    
                    </script>
                    <?php
    $_SESSION["compteur76B"] = 0;
    $_SESSION["arrayphp"] = [];
    $_SESSION["solution76B"] = 0;
    $_SESSION["tailleArray76B"] = intval($_POST["tailleArray76B"]);
    $_SESSION["maxB"] = 0;
    $_SESSION["miniB"] = 0;
    $_SESSION["arrayTemp76B"] = [];
  
  }

   
    ?>
    <script>
        document.getElementById("FC76B").style.display = "block";
      
    </script>
    <?php


    if (!empty($_POST["nbrc0"]) && isset($_POST["nbrc0"]) )
    {
    
        $_SESSION["nbrc1"] = intval($_POST["nbrc1"]);


        for ($i = 0; $i < $_SESSION["tailleArray76B"]  ; $i++)
        {
        
        var_dump(intval($_POST["nbrc".$i]));
            $_SESSION["arrayphp"][$i] = intval($_POST["nbrc".$i]);

        }
            $_SESSION["maxB"] = intval($_POST["nbrc0"]);
            $_SESSION["miniB"] = intval($_POST["nbrc0"]);
      for ($i = 0; $i < $_SESSION["tailleArray76B"] ; $i++)
      {
        if (intval($_POST["nbrc".$i]) < intval($_SESSION["mini"]) )
        {
            $_SESSION["miniB"] = intval($_POST["nbrc".$i]);
        
        }

        if (intval($_POST["nbrc".$i]) > intval($_SESSION["maxB"]))
        {
           
            $_SESSION["maxB"]  = intval($_POST["nbrc".$i]);
        }

      }

             
               // var_dump("mini" .$_SESSION["mini"]);
               // var_dump("max" .$_SESSION["maxB"]);
        


      $_SESSION["solution76B"] = ($_SESSION["maxB"]  - $_SESSION["miniB"]);
    
  
   
    $_SESSION["nbrc1"] = NULL;
    $_SESSION["tailleArray76B"] = NULL;
    $_SESSION["compteur76B"] = NULL;
    
    return  $_SESSION["solution76B"];
    $_SESSION["solution76B"] = NULL;
    $_SESSION["maxB"] = NULL;
    $_SESSION["mini"] = NULL;
    }

}

function exo77()
{
    $iajq = 0;
    $ibjq = 0;
    $icjq = -1;
    $soluce = "";
     $aFirstArray77 = array(4,6,8,10,13,17);
     var_dump($aFirstArray77);
    $aSecondArray77 = array(7,9,12,14,15,19);

    $aFirstArray77TEMP = [];

    $afini = false;

    $bfini = false;


    while (!$afini || !$bfini)
    {
        
        $icjq++;
       
        if ($afini || $aFirstArray77[$iajq] > $aSecondArray77[$ibjq] )
        {
            $aFirstArray77TEMP[$icjq] = $aSecondArray77[$ibjq];
            $ibjq++;
            $soluce = $soluce . " " .$aSecondArray77[$ibjq];
           // bfini = ib > 6;
           
            if ($ibjq == 6)
            {
                $bfini = true;
            }

        }
        else
        {
            $aFirstArray77TEMP[$icjq] = $aFirstArray77[$iajq];
            $iajq++;
           // afini = ac >6;
           $soluce = $soluce . " " .    $aFirstArray77[$iajq];
           if($iajq == 6)
           {
            $afini = true;
           }
        }
        
    }

        return $soluce;



}