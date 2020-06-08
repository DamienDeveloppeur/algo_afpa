EXO 58A
ob_start();




    ?>

    <form method="POST" action="exo58A.php">  
    <input  onclick="exo58A()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo58Ajq()" value="Exe jquery" class="nes-btn is-error"></input>
    <label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
    <?php
    $array = array();

    for ($i=1; $i <5; $i++)
        {
            echo '<div class="nes-field is-inline"> <input id="FJS57'.$i.'" type="number" name="nbr'.$i.'"/> <br> </div>';
            
        }
        
    ?>
   
    <input class="nes-btn is-error" type="submit" value="Exe PHP"/> 

    </form>

    <?php


    if (isset($_POST["nbr1"]))
    {
    $max = 0;

        for ($i=1; $i <5; $i++)
        {
          $nbr = $_POST["nbr".$i];
          if ($i == 1)
          {
            $max = $nbr;
          }
          if ($nbr > $max)
          {
            $max = $nbr;
           
          }


        }
      }


?>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS58A" class="nes-balloon from-left">
        <?php
        if (isset($max))
          {
           echo $max;
          }
        ?>
    </section>
<?php


/*
if (isset($_POST["nbr"]))
{


  $nbr = $_POST["nbr"];
  var_dump($nbr);
    if ($compteur < 3)
    {
        if ($compteur == 0)
        {
          $max = $nbr;
          $compteur +=1;
        }
        else 
        {
          var_dump($compteur);
          $compteur +=1;
          if ($nbr > $max)
          {
            $max= $nbr;
          }
        }

    }
    else 
    {
      var_dump($compteur);
      $control = $max;
    }


}

    
*/

$JS = ob_get_clean();