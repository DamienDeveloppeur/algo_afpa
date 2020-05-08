function exo41()
{
    var tutu = document.getElementById("FJS411").value;
    var tutu1 = parseInt(tutu);

    var toto = document.getElementById("FJS412").value;
    var toto1 = parseInt(toto);

    var tata = document.getElementById("FJS413").value;

 
    if (tutu1 <= toto1 + 4)
    {
        tutu1 -= 1;
        document.getElementById("AJS41").innerHTML= "Valeur de tutu :" + tutu1;
    }
    else if (tata == "ok")
    {
        tutu1 = tutu1 + 1;
        document.getElementById("AJS41").innerHTML= "Valeur de tutu :" + tutu1;
    }
    else
    {
        tutu1 = tutu1 + 1;
        document.getElementById("AJS41").innerHTML= "Valeur de tutu :" + tutu1;
    }

}

function exo42()
{

    var heure1 = document.getElementById("FJS421").value;
    var heure = parseInt(heure1);
    var minute1 = document.getElementById("FJS422").value;
    var minute = parseInt(minute1);

    if (minute < 59 && heure < 24)
    {
        minute +=  1;
        document.getElementById("AJS42").innerHTML = "Dans une minute il sera : " + heure + "H "+ minute;
       
    }
    else if (heure < 23 && minute == 59)
    {
        heure += 1;
        minute = 0;
        document.getElementById("AJS42").innerHTML = "Dans une minute il sera : " + heure + "H "+ minute;
      
    }
    else if(heure == 23 && minute == 59)
    {
        heure = 0;
        minute = 0;
        document.getElementById("AJS42").innerHTML = "Dans une minute il sera : " + heure + "H "+ minute;
      
    }
    else
    {
        document.getElementById("AJS42").innerHTML = "Entrez une heure valide";
       
    }

}

function exo43()
{

    var heure1 = document.getElementById("FJS431").value;
    var heure = parseInt(heure1);

    var minute1 = document.getElementById("FJS432").value;
    var minutes = parseInt(minute1);

    var seconde1 = document.getElementById("FJS433").value;
    var secondes = parseInt(seconde1);


    if ( secondes < 59 && minutes < 59 && heure <= 23)
        {
            secondes += 1;
            
            document.getElementById("AJS43").innerHTML = "Dans une seconde il sera : " + heure + "H "+ minutes + "min " + secondes + " secondes";
        }
        else if (secondes == 59 && heure < 23 && minutes < 59)
        {
            secondes = 0;
            minutes += 1;
            document.getElementById("AJS43").innerHTML = "Dans une seconde il sera : " + heure + "H "+ minutes + "min " + secondes + " secondes";
        }
        else if(secondes == 59 && minutes == 59 && heure < 23)
        {
            secondes += 1;
            minutes += 1;
            document.getElementById("AJS43").innerHTML = "Dans une seconde il sera : " + heure + "H "+ minutes + "min " + secondes + " secondes";
        }
        else if(secondes == 59 && minutes == 59 && heure == 23)
        {
            secondes = 0;
            minutes = 0;
            heure = 0;
            document.getElementById("AJS43").innerHTML = "Dans une seconde il sera : " + heure + "H "+ minutes + "min " + secondes + " secondes";
        }
        else 
        {
            document.getElementById("AJS43").innerHTML = "Entrez une horraire valide ";
        }

}

function exo44()
{

    var nbr1 = document.getElementById("FJS44").value;
    var nbr = parseInt(nbr1);

    if (nbr <= 10)
    {
       
        document.getElementById("AJS44").innerHTML = "Tarif : " + (nbr * 0.10) + " euros";
        
    }
    else if (nbr <= 30 && nbr > 10)
    {
        
        document.getElementById("AJS44").innerHTML = "Tarif : " + ((0.10 * 10) + (nbr - 10) * 0.09)+ " euros";
    }
    else if (nbr > 30)
    {
        
         document.getElementById("AJS44").innerHTML = "Tarif : " + ((0.10 * 10) + (0.09 * 20) + (nbr - 30) * 0.08)+ " euros";
    }

}

function exo45()
{

    var sexe1 = document.getElementById("FJS451").value;

   if (sexe1 == "h" || sexe1 == "H")
   {
       var sexe1 = 1;
         var sexe = parseInt(sexe1);
   }
   else if (sexe1 == "f" || sexe1 == "F")
   {
       var sexe1 = 2;
        var sexe = parseInt(sexe1);
   }


    var age1 = document.getElementById("FJS452").value;
    var age = parseInt(age1);
    
    if (sexe == 1)
    {
       if (age >= 20)
       {
         
          document.getElementById("AJS45").innerHTML = "Imposable";
       }
       else
       {
           
           document.getElementById("AJS45").innerHTML = "Non-imposable";
       }
    }
    else if (sexe == 2)
    {
       if (age >= 18 && age <= 35)
       {
        document.getElementById("AJS45").innerHTML = "Imposable";
          
       }
       else 
       {
        document.getElementById("AJS45").innerHTML = "Non-imposable";
           
       }
    }

}

function exo46()
{
    var nom1 = document.getElementById("FJS461").value;

    var scoree = document.getElementById("FJS462").value;
    var score1 = parseInt(scoree);

    var nom2 = document.getElementById("FJS463").value;

    var scoree1 = document.getElementById("FJS464").value;
    var score2 = parseInt(scoree1);

    var nom3 = document.getElementById("FJS465").value;

    var scoree2 = document.getElementById("FJS466").value;
    var score3 = parseInt(scoree2);

    var nom4 = document.getElementById("FJS467").value;

    var scoree3 = document.getElementById("FJS468").value;
    var score4 = parseInt(scoree3);
       
    if (score1 > 50)
        {
           
           document.getElementById("AJS46").innerHTML = "Candidat " + nom1 + " élu à la majorité absolue";
        }
    else if (score1 >= 12.5)
            {                
            if (score1 > score2 && score1 > score3 && score1 > score4)
                {
                    
                    document.getElementById("AJS46").innerHTML = "Candidat " + nom1 + " en balottage favorable avec le score de" + score1 + "%";
                }
            else 
               {
                document.getElementById("AJS46").innerHTML = "Candidat " + nom1 + " en balottage défavorable avec le score de " + score1 + "%";
               }
                           
             }
                        
    else 
    {
        document.getElementById("AJS46").innerHTML = "Candidat" + nom1 +  "battu";
    }
    

}

function exo47()
{
    var compteurPoint = 1;

    var age1 = document.getElementById("FJS471").value;
    var age = parseInt(age1);

    var age2 = document.getElementById("FJS472").value;
    var TitulairePermisTemps = parseInt(age2);

    var age3 = document.getElementById("FJS473").value;
    var nbrAccident = parseInt(age3);

    var age4 = document.getElementById("FJS474").value;
    var anciennete = parseInt(age4);

    if (age > 25)
    {
        compteurPoint += 1;
    }
    if (TitulairePermisTemps > 2)
    {
        compteurPoint += 1;
    }
    if (nbrAccident == 1)
    {
        compteurPoint -= 1;
    }
    else if (nbrAccident == 2)
    {
        compteurPoint -= 2;
    }
    else if (nbrAccident == 3)
    {
        compteurPoint -= 6;
    }
    if (anciennete > 5)
    {
        compteurPoint += 1;
    }

    if (compteurPoint == 4)
    {
        document.getElementById("AJS47").innerHTML = "Tarif bleue";
    }
    if (compteurPoint == 3)
    {
        document.getElementById("AJS47").innerHTML = "Tarif vert";
    }
    if (compteurPoint == 2)
    {
        document.getElementById("AJS47").innerHTML = "Tarif orange";
    }
    if (compteurPoint == 1)
    {
        document.getElementById("AJS47").innerHTML = "Tarif rouge";
    }
    if (compteurPoint < 1)
    {
        document.getElementById("AJS47").innerHTML = "Refusé";
    }


}

function exo48()
{

    var jour = +document.getElementById("FJS481").value;
    var mois = +document.getElementById("FJS482").value;
    var annee = +document.getElementById("FJS483").value;


    if (mois >= 0 && mois <= 12)
    {
        if (mois == 2)
        {

        }
        else
        {
            if (jour >=0 && jour <= 31 )
            {
                
            }
        }
    }
   else
   {
       document.getElementById("AJS48").innerHTML = "Moins invalide";
   }

}