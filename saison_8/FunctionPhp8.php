<?php

function exo81()
{
   $solution1 ="";
    $array81 = [];
    
    for ($i = 0; $i < 6; $i++)
    {
     
        for ($m = 0; $m < 13; $m++)
        {
           
           $array81[$i][$m] = 0;

         /* if ($m == 12)
           {
            $solution1 = $solution1 . "array81 [".$i."] =".$array81[$i] ." <br>";
          
           }*/
          
        }
    } 


      
    foreach($array81 as $index => $value) {
      $solution1 = $solution1 ."array81 [".$index ."] = ";
      foreach($array81[$index] as $val) {
       // $solution1 .= $val . " ". "<br>";
       $solution1 =  $solution1 .$val." ";
      }
      $solution1 .= "<br>";
  }

       return $solution1;

}

function exo82()
{
    //$array81[$i] .

    $val = 1;
    $X = [];
   $solution82 = "";
    for ($i = 0; $i <2; $i++)
    {
        
       $X[$i] =[];
      
        for ($j = 0; $j < 3; $j++)
        {
            $X[$i][$j] = $val;
            $val++;       
        }
          
    }

    foreach($X as $index => $value) {
      $solution82 = $solution82 ."X [".$index ."] = ";
      foreach($X[$index] as $val) {
       // $solution1 .= $val . " ". "<br>";
       $solution82 =  $solution82 .$val." ";
      }
      $solution82 .= "<br>";
  }


  return $solution82;

}

function exo83()
{

    $val = 1;
    $X = [];
    $solution83 = "";
    for ($i = 0; $i <2; $i++)
    {
        
        $X[$i] =[];
       
        for ($j = 0; $j < 3; $j++)
        {
            $X[$i][$j] = $val;
            $val++;
           
        }
          
    }

    foreach($X as $index => $value) {
      $solution83 = $solution83 ."X [".$index ."] = ";
      foreach($X[$index] as $val) {
       // $solution1 .= $val . " ". "<br>";
       $solution83 =  $solution83 .$val." ";
      }
      $solution83 .= "<br>";
  }

return $solution83;
    /*
    for ($j = 0; $j < 3; $j++)
    {

        for ($i = 0; $i < 2; $i++)
        {
            if ($i == 0)
            {
                $solution0 =  "X["+$i +"] = "+ $X[$i] + "<br>" ;
            }
            if ($i == 1)
            {
                $solution83 =  "X["+$i +"] = "+ $X[$i] + "<br>" ;
            }
                
        }
     }
*/
    
}

function exo84()
{
    $T = [];
    $solution ="";
    for($k = 0; $k <4; $k++)
    {
        $T[$k] = [];
      
        for ($m = 0; $m <2; $m++)
        {
            $T[$k][$m] = $k+$m;
          /* if ($m == 1)
           {
            $solution = $solution +  "X["+$k +"] = "+ $T[$k] + "<br>";
           }*/
           
        }
    }
    foreach($T as $index => $value) {
      $solution = $solution ."X [".$index ."] = ";
      foreach($T[$index] as $val) {
       // $solution1 .= $val . " ". "<br>";
       $solution =  $solution .$val." ";
      }
      $solution .= "<br>";
  }
  return $solution;
}

function exo85A()
{

    $T = [];
    $solution ="";
    for($k = 0; $k <4; $k++)
    {
        $T[$k] = [];
      
        for ($m = 0; $m <2; $m++)
        {
            $T[$k][$m] = (2 * $k) + ($m + 1);
           
        }
    }

    foreach($T as $index => $value) {
      $solution = $solution ."X [".$index ."] = ";
      foreach($T[$index] as $val) {
       // $solution1 .= $val . " ". "<br>";
       $solution =  $solution .$val." ";
      }
      $solution .= "<br>";
  }
   return $solution;

}


function exo85B()
{

    $T = [];
    $solution ="";
    for($k = 0; $k <4; $k++)
    {
        $T[$k] = [];
      
        for ($m = 0; $m <2; $m++)
        {
            $T[$k][$m] = ($k + 1) + 4 * $m;

           
        }
  
    }
    foreach($T as $index => $value) {
      $solution = $solution ."T [".$index ."] = ";
      foreach($T[$index] as $val) {
       // $solution1 .= $val . " ". "<br>";
       $solution =  $solution .$val." ";
      }
      $solution .= "<br>";
  }
   return $solution;

}



function exo86()
{
  $position = "";
  if (empty($_SESSION["compteurtroll"]))
  {
    $_SESSION["compteurtroll"] = 0;
    $_SESSION["max"] = 0;

  }
    

    $arrayMax = [];

    $arrayMax[0] = [5,78,95,14,23,64,49,98,51,32,15,21];
    $arrayMax[1] = [98,48,74,51,32,98,956,874,12];
    $arrayMax[2] = [965,633,712,122,343,248,786,337,365];
    $arrayMax[3] = [116,463,393,831,13,748,452,532,43];
    $arrayMax[4] = [163,142,282,281,84,570,249,250,931];
    $arrayMax[5] = [868,66,546,549,962,366,928,213,661];
    $arrayMax[6] = [794,335,32,217,348,160,548,689,343];
    $arrayMax[7] = [33,384,212,722,915,577,561,419,361];
    $arrayMax[8] = [811,664,101,957,558,972,905,313,936];
    $arrayMax[9] = [57,895,818,1004,968,584,339,99,374];
    $arrayMax[10] = [874,132,830,78,343,713,824,182,85];
    $arrayMax[11] = [296,539,816,788,384,376,393,313,839];
    $arrayMax[12] = [809,652,843,345,519,225,102,334,314];


    for ($i=0; $i < 13; $i++)
    {

        for ($m = 0; $m < 9; $m++)
        {
            if ($i == 0 || $arrayMax[$i][$m] > $_SESSION["max"])
            {
                $_SESSION["max"] = $arrayMax[$i][$m];
                $position = "arrayMax[". $i. "][". $m."]";
            }

        }

    }
    $_SESSION["compteurtroll"] = NULL;
return "La valeur max est : " . $_SESSION["max"] . " Ayant pour position dans l'array : ". $position;
    
}

