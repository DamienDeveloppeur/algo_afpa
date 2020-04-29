
    if (age >= 25)
    {
        if (TitulairePermisTemps >= 2)
        {
            if (nbrAccident == 0)
            {
                if (anciennete > 5)
                {
                    document.getElementById("AJS47").innerHTML = "tarif bleue";
                   
                }
                else 
                {
                    document.getElementById("AJS47").innerHTML ="tarif vert";
                   
                }
                
            }
            else if (nbrAccident == 1)
            {
                if (anciennete > 5)
                {
                    document.getElementById("AJS47").innerHTML ="tarif vert";
                   
                }
                else 
                {
                    document.getElementById("AJS47").innerHTML ="tarif orange";
                   
                }
                
            }
            else if (nbrAccident == 2)
            {
                if (anciennete > 5)
                {
                    document.getElementById("AJS47").innerHTML ="tarif orange";
                   
                }
                else 
                {
                    document.getElementById("AJS47").innerHTML ="tarif rouge";
                    
                }
            }
            else
            {
                document.getElementById("AJS47").innerHTML ="refusé";
               
            }
        }
        else if (TitulairePermisTemps < 2)
        {
            if (nbrAccident == 0)
            {
                document.getElementById("AJS47").innerHTML ="tarif orange";
            }
            if (nbrAccident == 1)
            {
                document.getElementById("AJS47").innerHTML ="tarif rouge";
            }
            else
            {
                document.getElementById("AJS47").innerHTML ="refusé";
            }
        }

    }
    else if (age < 25)
    {
        if (TitulairePermisTemps < 2)
        {
            if (nbrAccident == 0)
            {
                document.getElementById("AJS47").innerHTML ="tarif rouge";
            }
            else 
            {
                document.getElementById("AJS47").innerHTML ="refusé";
            }
        }
        if (TitulairePermisTemps > 2)
        {
            if (anciente > 5)
            {
                document.getElementById("AJS47").innerHTML ="tarif vert";
            }
            else
            {
                document.getElementById("AJS47").innerHTML ="tarif orange";
            }
        }
    }