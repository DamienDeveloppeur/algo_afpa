if ($age >= 25)
    {
        if ($TitulairePermisTemps >= 2)
        {
            if ($nbrAccident == 0)
            {
                if ($anciennete > 5)
                {
                    echo"tarif bleue";
                }
                else 
                {
                    echo"tarif vert";
                }
                
            }
            else if ($nbrAccident = 1)
            {
                if ($anciennete > 5)
                {
                    echo"tarif vert";
                }
                else 
                {
                    echo"tarif orange";
                }
                
            }
            else if ($nbrAccident = 2)
            {
                if ($anciennete > 5)
                {
                    echo"tarif orange";
                }
                else 
                {
                    echo"tarif rouge";
                }
            }
            else
            {
                echo"refusé";
            }
        }
        else if ($TitulairePermisTemps < 2)
        {
            if ($nbrAccident = 0)
            {
                echo"tarif orange";
            }
            if ($nbrAccident = 1)
            {
                echo"tarif rouge";
            }
            else
            {
                echo"refusé";
            }
        }

    }
    else if ($age < 25)
    {
        if ($TitulairePermisTemps < 2)
        {
            if ($nbrAccident = 0)
            {
                echo"tarif rouge";
            }
            else 
            {
                echo"refusé";
            }
        }
        if ($TitulairePermisTemps > 2)
        {
            if ($anciente > 5)
            {
                echo"tarif vert";
            }
            else
            {
                echo"tarif orange";
            }
        }
    }