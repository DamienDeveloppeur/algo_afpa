<?php

function exo101()
{
    // OUVRIR FICHIER EN ECRITURE ET ECRIRE DANS UN FICHIER
    /*
    $fichier = fopen("exo.txt", "w");
    $truc = [];
    $sTextFinal = "je test";
    if ($fichier)
    {
        fputs($fichier, $sTextFinal);
         fclose($fichier);
    }
*/
// LIRE UN FICHIER
/*
$sReferenceFichier = fopen('exo.txt', 'r'); 
    if ($sReferenceFichier) 
    { 
        while (!feof($sReferenceFichier))
        { 
        $buffer = fgets($sReferenceFichier); 
        } 
        var_dump($buffer);
    fclose($sReferenceFichier);
    }
*/
/*
    $fichier = fopen("exo.txt","w");
    $truc = "test";
    while (!feof($fichier)){
        $truc = fgetc($fichier);
        
    }
    fclose($fichier);
    //return join("",$truc);
    */
 


    $test = fopen("txt/exo.txt","r");
    $arraytest = [];
    while (!feof($test))
    {
        $arraytest[] = fgetc($test);
    }
    fclose($test);
    return join("",$arraytest);
}

function exo102()
{
    $test = fopen("txt/exo2.txt","r");
    $arraytest = [];
    while (!feof($test))
    {
        $arraytest[] = fgetc($test);
    }
    fclose($test);
    $arraytest= str_replace("/", " ", $arraytest);
    return join("",$arraytest);


}

function exo103()
{
   

/*   Structure n°1 
    "Fonfec";"Sophie";0142156487;"fonfec@yahoo.fr"
     "Zétofrais";"Mélanie";0456912347;"zétofrais@free.fr"
      "Herbien";"Jean-Philippe";0289765194;"vantard@free.fr" 
      "Hergébel";"Octave";0149875231;"rg@aol.fr"
      */
/*
  Structure n°2 Fonfec Sophie 0142156487 fonfec@yahoo.fr
    Zétofrais Mélanie 0456912347 zetofrais@free.fr
    Herbien Jean-Philippe 0289765194 vantard@free.fr
    Hergébel Octave 0149875231 rg@aol.fr
    */
    /*
    $sTextFinal = $_POST["nbr1"];
      $sReferenceFichier = fopen('txt/exo3.txt', 'r+');
       if ($sReferenceFichier)
        {
           
           

            //$pages_vues = fgets($sReferenceFichier); // On lit la première ligne (nombre de pages vues)
            fseek($sReferenceFichier, 10);
            fputs($sReferenceFichier, $sTextFinal);

              fclose($sReferenceFichier);
        }
*/


        
                    $sNom = " " . $_POST["name"];

                    $sPrenom = " ". $_POST["lastName"];

                    $iNbr = " ". $_POST["nbr"];

                    $sMail = " ". $_POST["email"];

                    $newEntry = $sNom . $sPrenom . $iNbr .  $sMail.PHP_EOL ;
                // ECRITURE
                    $fichier = fopen('txt/exo3.txt', 'a');
                    fputs($fichier, $newEntry);
                   // $fichier = $newEntry 
                    
                    fclose($fichier);
                   
                // LECTURE
                    $fichier = fopen('txt/exo3.txt', 'r');
                    $aResult = [];
                    while (!feof($fichier))
                    {
                        $aResult[] = fgetc($fichier);
                    }
                    fclose($fichier);
                   
                    return join("",$aResult);

           
}

function exo104()
{

    // mettre les lignes du fichier dans un tableau
    // trier le tableau

    $solutionFinal = ""; 
    if (empty($comptroll))
    {
        $comptroll = -1;
        //$temp = "";
       
    }

    $flag = 1;
    $sNom1 = str_pad($_POST["name"], 15) ;
    $sPrenom1 = str_pad($_POST["lastName"],15);
    $iNbr1 = str_pad($_POST["nbr"],10);
    $sMail1 = str_pad($_POST["email"], 20);
    $newEntry = $sNom1 . $sPrenom1 . $iNbr1 .  $sMail1.PHP_EOL ;
    $aSolution = [];
    $array = [];

    
   
    $fichier = fopen('txt/exo4.txt', 'r');
    //fputs($fichier, $newEntry);

    while(!feof($fichier))
    {
        $comptroll++;
        $ligne = fgets($fichier);
        $array["sNom"] = substr($ligne, 0, 15); 
       $array["sPrenom"] = substr($ligne, 15, 15); 
       $array["iNbr"] = substr($ligne, 30, 10); 
       $array["email"] = substr($ligne, 40, 20); 
      

        if (($sNom1 < $array["sNom"]) && $flag ==1 )
        {
           /* ?>
            <script>
                alert("test");
                </script>
                        <?php*/
            $aSolution[$comptroll]["sNom"] = $sNom1 ;
            $aSolution[$comptroll]["sPrenom"] = $sNom1 ;
            $aSolution[$comptroll]["iNbr"] = $sNom1 ;
            $aSolution[$comptroll]["email"] = $sNom1 ;
            $comptroll++;
            $flag = 2;
        }
        $aSolution[$comptroll]["sNom"] =$array["sNom"];
        $aSolution[$comptroll]["sPrenom"] =$array["sPrenom"];
        $aSolution[$comptroll]["iNbr"] =$array["iNbr"] ;
        $aSolution[$comptroll]["email"] =$array["email"];
    }
        fclose($fichier);

        $fichier = fopen('txt/exo4.txt', 'w');
        for ($i=0; $i < count($aSolution); $i++)
        {
          $solutionFinal = $solutionFinal ." ". $aSolution[$i]["sNom"].$aSolution[$i]["sPrenom"].$aSolution[$i]["iNbr"].$aSolution[$i]["email"];

        }
        fputs($fichier, $solutionFinal);
        fclose($fichier);

  //  fclose($fichier);
    $comptroll = NULL;
  /*  $fichier = fopen('txt/exo4.txt', 'a');

    fputs($fichier, $newEntry);

    fclose($fichier);*/

    //$fichier = fopen('carnet.txt', 'r');
   return $solutionFinal;
    //return join("",$aSolution);


}

function exo105()
{
    ?>
    <script>
      alert("debut function");
    </script>
        <?php
      
 $solutionFinal="";
    $sNom1 = str_pad($_POST["name"],15);
    $sNewName = str_pad($_POST["nameChanged"], 15);
   $chronometre = -1;
        var_dump($_POST["nameChanged"]);
        //var_dump($_SESSION["sNom1"]);

        if (empty($_SESSION["comptroll"]))
        {
          /*  ?>
            <script>
              alert("test");
            </script>
            <?php*/
           // $solutionFinal="";
            $_SESSION["comptroll"] = -1;
            //$temp = "";
           $_SESSION["flag"] = 0;
           $_SESSION["aSolution"] = [];
           $_SESSION["array"] = [];
           //$_SESSION["flag2"] = 4;
        }
  
     
  
 
  
      $fichier = fopen('txt/exo5.txt', 'r');
      while(!feof($fichier))
      {
     
          $_SESSION["comptroll"]++;
          $ligne = fgets($fichier);
         // $array["sNom"] = substr($ligne, 0, 15); 
          $_SESSION["array"]["nom"] = substr($ligne, 0, 15); 
          $_SESSION["array"]["sPrenom"] = substr($ligne, 15, 15); 
          $_SESSION["array"]["iNbr"] = substr($ligne, 30, 10); 
          $_SESSION["array"]["email"] = substr($ligne, 40, 20); 
        

            $_SESSION["aSolution"] [$_SESSION["comptroll"]]["nom"]  = $_SESSION["array"]["nom"];
            $_SESSION["aSolution"][$_SESSION["comptroll"]]["prenom"] =  $_SESSION["array"]["sPrenom"];
            $_SESSION["aSolution"][$_SESSION["comptroll"]]["iNbr"] =  $_SESSION["array"]["iNbr"];
            $_SESSION["aSolution"][$_SESSION["comptroll"]]["email"] = $_SESSION["array"]["email"];
          
     
      }
  
   
    
     /* ?>
      <script>
      alert("test");
    </script>
    <?php*/

        foreach ($_SESSION["aSolution"] as $key => $value) {
            $chronometre++;
            if ($_SESSION["aSolution"][$chronometre]["nom"] == $sNom1)
            {
                $_SESSION["flag"] = 1;
              ?>
              <script>
                alert("condition");
              </script>
              <?php
                $_SESSION["aSolution"][$chronometre]["nom"]  = $sNewName;
       
                $_SESSION["comptroll"]++;
               
            }
        }

        if ($_SESSION["flag"] == 0 )
        {
          $_SESSION["sNom1"] = NULL;
            $_SESSION["comptroll"] = NULL;
            return "C'est trop compliqué de rentrer un nom valide dans le carnet ?";
        }


    fclose($fichier);

        $fichier = fopen('txt/exo5.txt', 'w');
        for ($i=0; $i < count($_SESSION["aSolution"]); $i++)
        {
          $solutionFinal = $solutionFinal ." ". $_SESSION["aSolution"][$i]["nom"]. $_SESSION["aSolution"][$i]["prenom"].$_SESSION["aSolution"][$i]["iNbr"].$_SESSION["aSolution"][$i]["email"];

        }
        fputs($fichier, $solutionFinal);
        fclose($fichier);

             /*  $fichier = fopen('txt/exo5.txt', 'w');
        for ($i=0; $i < count($aSolution); $i++)
        {
          $solutionFinal = $solutionFinal ." ". $aSolution[$i]["sNom"].$aSolution[$i]["sPrenom"].$aSolution[$i]["iNbr"].$aSolution[$i]["email"];

        }
        fputs($fichier, $solutionFinal);
        fclose($fichier);*/
        $_SESSION["comptroll"] = NULL;
        $_SESSION["sNom1"] = NULL;
        return $_SESSION["aSolution"];
    }

    //return $solutionFinal;



function exo108()
{
    $comptroll = -1;
    $solutionFinal = "";
    $aSolution = [];
    $array = [];
    $fichier = fopen('txt/exo8.txt', 'r');
   
    /*
    while(!feof($fichier))
    {
      $comptroll++;
        $ligne = fgets($fichier);
        $array["sNom"] = substr($ligne, 0, 15); 
       $array["sPrenom"] = substr($ligne, 15, 15); 
       $array["iNbr"] = substr($ligne, 30, 10); 
       $array["email"] = substr($ligne, 40, 20); 
      
      
       $aSolution[$comptroll]["sNom"] = $array["sNom"];
       $aSolution[$comptroll]["sPrenom"] = $array["sPrenom"];
       $aSolution[$comptroll]["iNbr"] = $array["iNbr"] ;
       $aSolution[$comptroll]["email"] = $array["email"];
    }

    return $aSolution;
    */
   
    while(!feof($fichier))
    {
     
        $ligne = fgets($fichier);
        $array["sNom"] = substr($ligne, 0, 15); 
       $array["sPrenom"] = substr($ligne, 15, 15); 
       $array["iNbr"] = substr($ligne, 30, 10); 
       $array["email"] = substr($ligne, 40, 20); 
      
     
if (substr_count($array["email"], '@') == 1)
{
  $comptroll++;
  $aSolution[$comptroll]["sNom"] = $array["sNom"];
  $aSolution[$comptroll]["sPrenom"] = $array["sPrenom"];
  $aSolution[$comptroll]["iNbr"] = $array["iNbr"] ;
  $aSolution[$comptroll]["email"] = $array["email"];
}

       /* if ( (stristr($array["email"] , '@') == TRUE) && (stristr($array["email"] , '@@') == FALSE)  )
        {
     

         

        }*/


    }
        fclose($fichier);

        $fichier = fopen('txt/exo8.txt', 'w');

        for ($i=0; $i < count($aSolution); $i++)
        {
          $solutionFinal = $solutionFinal ." ". $aSolution[$i]["sNom"].$aSolution[$i]["sPrenom"].$aSolution[$i]["iNbr"].$aSolution[$i]["email"];

        }
        fputs($fichier, $solutionFinal);
        fclose($fichier);

  //  fclose($fichier);
    $comptroll = NULL;

   return $solutionFinal;
    //return join("",$aSolution);

}