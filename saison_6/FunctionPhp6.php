<?php
function exo61()
{
      $arrayphp = array();
      $solution = "";
      $p = 0;
      for ($i =0; $i < 7; $i++)
      {
  
        $arrayphp[] = $p;
        $solution = $solution . $arrayphp[$i];
  
      }   
  return $solution; 
}

function exo62()
{
  $arrayLetter = array();
  $control = "";
    for ($i = 0; $i < 6; $i++)
    {
        if ($i == 0)
        {
            $arrayLetter[$i] = 'a';
        }
        else if ($i == 1)
        {
            $arrayLetter[$i] ='e';
        }
        else if ($i == 2)
        {
            $arrayLetter[$i] = 'i';
        }
        else if ($i == 3)
        {
            $arrayLetter[$i] ='o';
        }
        else if ($i == 4)
        {
            $arrayLetter[$i] ='u';
        }
        else if ($i == 5)
        {
            $arrayLetter[$i] ='y';
        }
        $control = $control ." ". $arrayLetter[$i];
        
    }
    return $control;
}


function exo63()
{
  

    if (empty($_SESSION["compteur"]))
    {
      $_SESSION["compteur"] = -1;
      $_SESSION["arrayphp"] = [];
      $_SESSION["solution63"] = "";
    }
    $_SESSION["compteur"]++;
    if ($_SESSION["compteur"] < 10)
    {

      $_SESSION["arrayphp"][$_SESSION["compteur"]] =  intval($_POST["nbr"]);
      $_SESSION["solution63"] = $_SESSION["solution63"] . " ". $_POST["nbr"];
      

            if ($_SESSION["compteur"] == 9)
            {
            
              $_SESSION["compteur"] = NULL;
              return $_SESSION["solution63"];
            }
    }

  
}

function exo64()
{

  $arrayphp = [];
 $nombreDeValeur = 5;
  $showSoluce = "";

  for ($i=0; $i < 6; $i++)
  {
    $arrayphp[$i] = $i * $i;
      $showSoluce = $showSoluce . " " . $arrayphp[$i];
      
  }
  return $showSoluce;

}

function exo65()
{

  $N = [];
  $i = 0;
  $N[0] = 1;
    $showSoluce = "";
    for ($k = 1; $k < 7;$k++ )
    {
        $N[$k] = $N[$k - 1] +2;
      
    }
    for ($i = 0; $i < 7; $i++)
    {
        $showSoluce = $showSoluce . " " . $N[$i];
    }

    return $showSoluce;
}

function exo66()
{


  $Suite = [];
  $i = 0;
  $showSoluce = "";
  
  $Suite[0] = 1;
  $Suite[1] = 1;
  for ($i = 2; $i < 8; $i++ )
  {
      $Suite[$i] = $Suite[$i-1] + $Suite[$i-2];
  
  }
  for ($i = 0; $i < 8; $i++)
  {
      $showSoluce = $showSoluce . " ". $Suite[$i];
  
  }
  return $showSoluce;

}
function exo67()
{

 

  if (empty($_SESSION["compteur"]))
  {
    $_SESSION["compteur"] = 0;
    $_SESSION["arrayphp"] = [];
    $_SESSION["somme"] = 0;
  }

  $_SESSION["compteur"]++;
  if ($_SESSION["compteur"] < 10)
 {
   
     $_SESSION["somme"] = $_SESSION["somme"] + $_POST["nbr"];
     $_SESSION["moy"] = $_SESSION["somme"] / $_SESSION["compteur"];


    if ($_SESSION["compteur"] == 9)
     {
      $_SESSION["moy"] = $_SESSION["somme"] / $_SESSION["compteur"];
      $_SESSION["compteur"] = NULL;
       session_destroy();
    }
 }

    else
    {
      $_SESSION["compteur"] = NULL;
      session_destroy();
    }


}

function exo68()
{
 
  ?>
  <script>

  document.getElementById("FJS681G").style.visibility = "hidden";
   document.getElementById("FJS682G").style.visibility = "visible";

  
   </script>
     <?php

      if (empty($_SESSION["compteur"]))
      {
        $_SESSION["nbr1"] = $_POST["nbr1"];
        $_SESSION["compteur"] = 0 ;
        $_SESSION["itailleArray"] = $_SESSION["nbr1"];
        $_SESSION["arrayPos"] = [];
        $_SESSION["arrayNeg"] = [];
        $_SESSION["arrayZero"] = [];
        $_SESSION["control1"] = "";
        $_SESSION["control2"] = "";
        $_SESSION["control3"] = 0;
      }
  $_SESSION["compteur"]++;
      
    


  if (!empty($_POST["nbr2"]) && isset($_POST["nbr2"]))
  {
        ?>
        <script>
        document.getElementById("FJS682G").style.visibility = "visible";
        document.getElementById("FJS681G").style.visibility = "hidden";
        </script>
          <?php

        if ($_SESSION["compteur"] < $_SESSION["nbr1"])
        {

            if ($_POST["nbr2"] > 0)
            {
              $_SESSION["arrayPos"][] = $_POST["nbr2"];
              $_SESSION["control1"] = $_SESSION["control1"] ." " . $_POST["nbr2"]. ", ";
            }
            else if ($_POST["nbr2"] < 0)
            {
              $_SESSION["arrayNeg"][] = $_POST["nbr2"];
              $_SESSION["control2"]= $_SESSION["control2"] . " " . $_POST["nbr2"] .", ";
            }
            else
            {
              $_SESSION["arrayZero"][] = $_POST["nbr2"];
              $_SESSION["control3"] = $_SESSION["control3"] +1;
            }


        }
        else if ($_SESSION["compteur"] == $_SESSION["nbr1"])
        {
          ?>
          <script>
          document.getElementById("FJS682G").style.visibility = "hidden";
          document.getElementById("FJS681G").style.visibility = "hidden";
          </script>
            <?php

        }
        else 
        {

          $_SESSION["compteur"] = NULL;
          session_destroy();

        }

  }

}

function exo69()
{
  ?>
  <script>
  document.getElementById("FJS691G").style.visibility = "hidden";
  document.getElementById("FJS692G").style.visibility = "visible";
  </script>

  <?php


  if (empty($_SESSION["compteur69"]))
  {
    $_SESSION["compteur69"] = 0;
   
    $_SESSION["arrayphp"] = [];
    $_SESSION["somme"] = 0;
    $_SESSION["compteur69Reste"] = 0;
    $_SESSION["nbr1"] = $_POST["nbr1"];
    
  }

  $_SESSION["compteur69"]++;
  if ($_SESSION["compteur69"] < $_SESSION["nbr1"] + 1 )
  {
      $_SESSION["somme"] = $_SESSION["somme"] + intval($_POST["nbr2"]);
      $_SESSION["compteur69Reste"] = $_SESSION["nbr1"] - $_SESSION["compteur69"];
     
      

        if ($_SESSION["compteur69"] == $_SESSION["nbr1"] )
        {
          
          ?>
              <script>
              document.getElementById("FJS691G").style.visibility = "hidden";
              document.getElementById("FJS692G").style.visibility = "hidden";
              </script>

              <?php
          $_SESSION["compteur69"] = NULL;
          $_SESSION["nbr1"] = NULL;
        }
  }
  else 
  {
    ?>
    <script>
    document.getElementById("FJS691G").style.visibility = "hidden";
    document.getElementById("FJS692G").style.visibility = "hidden";
    </script>

    <?php
    $_SESSION["compteur69"] = 0;
    session_destroy();
    
  }
  return $_SESSION["somme"];

}

function exo610()
{
 
  $array1 = [4,8,7,9,1,5,4,6];
  $array2 = [7,6,5,2,1,3,7,4];
  $array3 = [];
  $tailleArray = 8;
  $arrayTemp = 0;
  $showSoluce = "";
  for ($i =0; $i < $tailleArray ; $i++)
  {
    $arrayTemp =  $array1[$i] + $array2[$i];
    $array3[$i] = $arrayTemp;
   $showSoluce = $showSoluce . " ".  $arrayTemp;
  }
  return $showSoluce;
}

function exo611()
{

    $array1 = [4,8,7,9,1,5,4,6];
    $array2 = [7,6,5,2,1,3,7,4];
    $arrayTOON = [];
    $tailleArray = 8;
    $sommeTOTALE = 0;
    $arrayTemp = 0;
    $showSoluce = "";
    $nbr1 = 0;
    $nbr2 = 0;
    $nbr3 = 0;
    $produit = 0;
    for ($i = 0; $i < $tailleArray; $i++)
    {
    
        $nbr1 = $array1[$i];
        $nbr2 = $array2[$i];
    
            for ($p = 0; $p < $tailleArray ; $p++)
            {
               $nbr3 = $array2[$p];
              $produit = $nbr1 * $nbr3;
              $arrayTOON[$p] = $produit;
              $showSoluce = $showSoluce ." ". $produit;
              $sommeTOTALE = $sommeTOTALE + $produit;
            }
    
      }
  return $sommeTOTALE;
}

function exo612()
{
  ?>
  <script> 
  document.getElementById("FJS6121G").style.visibility = "hidden";
  document.getElementById("FJS6122G").style.visibility = "visible";
  </script>
  <?php
    if (empty($_SESSION["compteur612"]))
    {
      $_SESSION["compteur612"] = 0;
      $_SESSION["nbr1"] = $_POST["nbr1"];
      $_SESSION["nbr1"] =  intval($_SESSION["nbr1"]);
      $_SESSION["array612"] = [];
      $_SESSION["nbr2"] = 0;
      $_SESSION["soluceStyle"] = "";
    }

    $_SESSION["compteur612"]++;

  if (isset($_POST["nbr2"]))
  {

      if ($_SESSION["compteur612"] < $_SESSION["nbr1"] + 1)
      {
        $_SESSION["nbr2"] = intval($_POST["nbr2"]) + 1;
        $_SESSION["array612"][] =  $_SESSION["nbr2"];
        $_SESSION["soluceStyle"] = $_SESSION["soluceStyle"] ." " . $_SESSION["nbr2"];
        if ($_SESSION["compteur612"] == $_SESSION["nbr1"])
        {
          ?>
          <script> 
          document.getElementById("FJS6121G").style.visibility = "hidden";
          document.getElementById("FJS6122G").style.visibility = "hidden";
          </script>
          <?php
          $_SESSION["compteur612"] = NULL;
         session_destroy();
          
        }
  
      }
     
  }

  
  return $_SESSION["soluceStyle"];
}

function exo613()
{

  ?>
  <script> 
  document.getElementById("FJS6131G").style.visibility = "hidden";
  document.getElementById("FJS6132G").style.visibility = "visible";

  </script>
  <?php

    if (empty($_SESSION["compteur613"]))
    {
      $_SESSION["compteur613"] = 0;
      $_SESSION["arrayphp613"] = [];
      $_SESSION["nbr1"] = $_POST["nbr1"];
      $_SESSION["nbr1"] = intval($_SESSION["nbr1"]);
      $_SESSION["max"] = 0;
      $_SESSION["position"] = 0;
      $_SESSION["compteurTemp613"] = 0;
    }
    

    if ( $_SESSION["compteur613"] == 0 || $_POST["nbr2"] > $_SESSION["max"])
    {
      $_SESSION["max"] = $_POST["nbr2"];
      $_SESSION["position"] = $_SESSION["compteur613"];
    }

    $_SESSION["compteur613"]++;

    if ($_SESSION["compteur613"] < $_SESSION["nbr1"] + 1 )
    {
        $_SESSION["arrayphp613"][] = $_POST["nbr2"];
        $_SESSION["compteurTemp613"] = $_SESSION["nbr1"] - $_SESSION["compteur613"];

            if ($_SESSION["compteur613"] == $_SESSION["nbr1"])
            {
              ?>
              <script> 
              document.getElementById("FJS6131G").style.visibility = "hidden";
              document.getElementById("FJS6132G").style.visibility = "hidden";
              </script>
              <?php
              $_SESSION["compteur613"] = NULL;
              session_destroy();
              
            }
    }

  return $_SESSION["max"];

  }

function exo614()
{

    ?>
    <script> 
    document.getElementById("FJS6141G").style.visibility = "hidden";
    document.getElementById("FJS6142G").style.visibility = "visible";

    </script>
    <?php
 /*$_SESSION["nbr1"] = $_POST["nbr1"];
 $_SESSION["nbr1"] = intval($_SESSION["nbr1"]);*/
      if (empty($_SESSION["compteur614"]))
      {
        $_SESSION["compteur614"] = 0;
        $_SESSION["arrayphp614"] = [];
        $_SESSION["nbr1"] = $_POST["nbr1"];
        $_SESSION["nbr1"] = intval($_SESSION["nbr1"]);
        $_SESSION["max"] = 0;
        $_SESSION["somme"] = 0;
        $_SESSION["moy"] = 0;
        $_SESSION["compteurTemp613"] = 0;
        $_SESSION["soluce"] = "";
        $_SESSION["arraySoluce"] = [];
     
      }
      

      if ( $_SESSION["compteur614"] == 0 || $_POST["nbr2"] > $_SESSION["max"])
      {
        $_SESSION["max"] = $_POST["nbr2"];
        $_SESSION["position"] = $_SESSION["compteur614"];
      }

      $_SESSION["compteur614"]++;

      if ($_SESSION["compteur614"] < $_SESSION["nbr1"] + 1 )
      {
          $_SESSION["arrayphp614"][] = $_POST["nbr2"];
          $_SESSION["compteurTemp614"] = $_SESSION["nbr1"] - $_SESSION["compteur614"];
          $_SESSION["somme"] =  $_SESSION["somme"] + intval($_POST["nbr2"]); 
          

              if ($_SESSION["compteur614"] == $_SESSION["nbr1"])
              {
                $_SESSION["moy"] = $_SESSION["somme"] / $_SESSION["nbr1"];
                 
                  for ($i = 0; $i < $_SESSION["nbr1"]; $i++ )
                  {
                      if ($_SESSION["arrayphp614"][$i] > $_SESSION["moy"] )
                      {
                        $_SESSION["arraySoluce"][] = $_SESSION["arrayphp614"][$i];
                        $_SESSION["soluce"] = $_SESSION["soluce"] . " " . $_SESSION["arrayphp614"][$i];
                      }
                  }
                ?>
                <script> 
                document.getElementById("FJS6141G").style.visibility = "hidden";
                document.getElementById("FJS6142G").style.visibility = "hidden";
                </script>
                <?php
                $_SESSION["compteur614"] = NULL;
                session_destroy();
              }
      }
    return $_SESSION["soluce"];
  }

function exo615()
{

  $sommeCompte = 1000;
  $taux = 2.75;
  $arraySomme = [];
  $arraySomme[0] = 1000;
  $TEMP = 0;
  $compteParAnnee = 0;

      for ($i = 1; $i < 21; $i++)
      {
        $TEMP = ($sommeCompte * $taux) / 100;
          $sommeCompte = $TEMP  + $sommeCompte; 
          $arraySomme[$i] = $sommeCompte;
         $compteParAnnee = $arraySomme[$i];
      }

return $arraySomme;

}

function exo616()
{
  $control = "";
  if ($_POST["choixArray"] == 0)
  {
    $arrayVariable = [1,2,3,4,5,6,7,8];
  }
  else if ($_POST["choixArray"] == 1)
  {
    $arrayVariable = [9,4,7,3,1,2,8,4];
  }

   $tailleArray = 0;

   foreach ($arrayVariable as $value) {
    $tailleArray++;
  }


  for ($i=1; $i < $tailleArray - 1; $i++)
  {
      
        if ($arrayVariable[$i] - 1 == $arrayVariable[$i - 1] && $arrayVariable[$i]  + 1 == $arrayVariable[$i +1] )
        {
            $control = "C'est dans l'ordre";
        }
        else
        {
              $control = "Ce n'est pas dans l'ordre";
        }
  }

  return $control;

}

function exo617()
{
  $showSoluceStyle = "";
  if (empty($_SESSION["compteur617"]) && empty($_SESSION["array617"]) )
  {
  $_SESSION["compteur617"] = 0;
    $_SESSION["nbr1"] = $_POST["nbr1"];
    $_SESSION["nbr1"] = intval($_SESSION["nbr1"]);
      $_SESSION["array617"] = [];
      $temp = 0;
    
   
  }
   
    $_SESSION["compteur617"]++;
  if (isset($_POST["nbrc1"]))
  {


    for ($m = 0; $m < $_SESSION["nbr1"]; $m++)
    {
      $nbrc = $_POST["nbrc".$m];
      $_SESSION["array617"][$m] = $nbrc;
  
    }
   
  
      for ( $p = 0; $p < $_SESSION["nbr1"] - 1; $p++)
      {
        
              for ($i = 0; $i < $_SESSION["nbr1"] - 1 ; $i++)
              {
                  if ($_SESSION["array617"][$i] > $_SESSION["array617"][$i+1])
                  {
                      while ($_SESSION["array617"][$i] > $_SESSION["array617"][$i + 1])
                      {
                          $temp = $_SESSION["array617"][$i];       
                          $_SESSION["array617"][$i] = $_SESSION["array617"][$i + 1];    
                          $_SESSION["array617"][$i + 1] = $temp; 
                          //$showSoluceStyle = $showSoluceStyle . " ". $temp;      
                          $i = 0;
                          
                      }
                     
                  }
  
              }
            
      }
      $_SESSION["compteur617"] = NULL;
      $_POST["nbrc1"] = NULL;
  }


  


  return $_SESSION["array617"];
  $_SESSION["array617"] = NULL;

}

