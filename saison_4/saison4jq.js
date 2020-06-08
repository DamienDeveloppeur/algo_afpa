function exo41jq()
{
    var tutu = $("#FJS411").val()
    var tutu1 = parseInt(tutu)

    var toto = $("#FJS412").val()
    var toto1 = parseInt(toto)

    var tata = $("#FJS413").val()

 
    if (tutu1 <= toto1 + 4)
    {
        tutu1 -= 1
        $("#AJS41").html ("Valeur de tutu :" + tutu1)
    }
    else if (tata == "ok")
    {
        tutu1 = tutu1 + 1
        $("#AJS41").html("Valeur de tutu :" + tutu1)
    }
    else
    {
        tutu1 = tutu1 + 1
        $("#AJS41").html("Valeur de tutu :" + tutu1) 
    }

}

function exo42jq()
{

    var heure1 = $("#FJS421").val()
    var heure = parseInt(heure1)
    var minute1 = $("#FJS422").val()
    var minute = parseInt(minute1)

    if (minute < 59 && heure < 24)
    {
        minute +=  1
        $("#AJS42").html("Dans une minute il sera : " + heure + "H "+ minute)
       
    }
    else if (heure < 23 && minute == 59)
    {
        heure += 1
        minute = 0
        $("#AJS42").html("Dans une minute il sera : " + heure + "H "+ minute)
      
    }
    else if(heure == 23 && minute == 59)
    {
        heure = 0
        minute = 0
        $("#AJS42").html("Dans une minute il sera : " + heure + "H "+ minute)
      
    }
    else
    {
        $("#AJS42").html("Entrez une heure valide")
       
    }

}

function exo43jq()
{

    var heure1 = $("#FJS431").val()
    var heure = parseInt(heure1)

    var minute1 = $("#FJS432").val()
    var minutes = parseInt(minute1)

    var seconde1 = $("#FJS433").val()
    var secondes = parseInt(seconde1)


    if ( secondes < 59 && minutes < 59 && heure <= 23)
        {
            secondes += 1
            
            $("#AJS43").html("Dans une seconde il sera : " + heure + "H "+ minutes + "min " + secondes + " secondes")
        }
        else if (secondes == 59 && heure < 23 && minutes < 59)
        {
            secondes = 0
            minutes += 1
            $("#AJS43").html("Dans une seconde il sera : " + heure + "H "+ minutes + "min " + secondes + " secondes")
        }
        else if(secondes == 59 && minutes == 59 && heure < 23)
        {
            secondes += 1
            minutes += 1
            $("#AJS43").html("Dans une seconde il sera : " + heure + "H "+ minutes + "min " + secondes + " secondes")
        }
        else if(secondes == 59 && minutes == 59 && heure == 23)
        {
            secondes = 0
            minutes = 0
            heure = 0
            $("#AJS43").html("Dans une seconde il sera : " + heure + "H "+ minutes + "min " + secondes + " secondes")
        }
        else 
        {
            $("#AJS43").html("Entrez une horraire valide ")
        }

}

function exo44jq()
{

    var nbr1 = $("#FJS44").val()
    var nbr = parseInt(nbr1)

    if (nbr <= 10)
    {
       
        $("#AJS44").html("Tarif : " + (nbr * 0.10) + " euros")
        
    }
    else if (nbr <= 30 && nbr > 10)
    {
        
        $("#AJS44").html("Tarif : " + ((0.10 * 10) + (nbr - 10) * 0.09)+ " euros")
    }
    else if (nbr > 30)
    {
        
         $("#AJS44").html("Tarif : " + ((0.10 * 10) + (0.09 * 20) + (nbr - 30) * 0.08)+ " euros")
    }

}

function exo45jq()
{

    var sexe1 = $("#FJS451").val()

   if (sexe1 == "h" || sexe1 == "H")
   {
       var sexe1 = 1
         var sexe = parseInt(sexe1)
   }
   else if (sexe1 == "#F" || sexe1 == "#F")
   {
       var sexe1 = 2
        var sexe = parseInt(sexe1)
   }


    var age1 = $("#FJS452").val()
    var age = parseInt(age1)
    
    if (sexe == 1)
    {
       if (age >= 20)
       {
         
          $("#AJS45").html("Imposable")
       }
       else
       {
           
           $("#AJS45").html("Non-imposable")
       }
    }
    else if (sexe == 2)
    {
       if (age >= 18 && age <= 35)
       {
        $("#AJS45").html("Imposable")
          
       }
       else 
       {
        $("#AJS45").html("Non-imposable")
           
       }
    }

}

function exo46jq()
{
    var nom1 = $("#FJS461").val()

    var scoree = $("#FJS462").val()
    var score1 = parseInt(scoree)

    var nom2 = $("#FJS463").val()

    var scoree1 = $("#FJS464").val()
    var score2 = parseInt(scoree1)

    var nom3 = $("#FJS465").val()

    var scoree2 = $("#FJS466").val()
    var score3 = parseInt(scoree2)

    var nom4 = $("#FJS467").val()

    var scoree3 = $("#FJS468").val()
    var score4 = parseInt(scoree3)
       
    if (score1 > 50)
        {
           
           $("#AJS46").html("Candidat " + nom1 + " élu à la majorité absolue")
        }
    else if (score1 >= 12.5)
            {                
            if (score1 > score2 && score1 > score3 && score1 > score4)
                {
                    
                    $("#AJS46").html("Candidat " + nom1 + " en balottage favorable avec le score de" + score1 + "%")
                }
            else 
               {
                $("#AJS46").html("Candidat " + nom1 + " en balottage défavorable avec le score de " + score1 + "%")
               }
                           
             }
                        
    else 
    {
        $("#AJS46").html("Candidat" + nom1 +  "battu")
    }
    

}

function exo47jq()
{
    var compteurPoint = 1

    var age1 = $("#FJS471").val()
    var age = parseInt(age1)

    var age2 = $("#FJS472").val()
    var TitulairePermisTemps = parseInt(age2)

    var age3 = $("#FJS473").val()
    var nbrAccident = parseInt(age3)

    var age4 = $("#FJS474").val()
    var anciennete = parseInt(age4)

    if (age > 25)
    {
        compteurPoint += 1
    }
    if (TitulairePermisTemps > 2)
    {
        compteurPoint += 1
    }
    if (nbrAccident == 1)
    {
        compteurPoint -= 1
    }
    else if (nbrAccident == 2)
    {
        compteurPoint -= 2
    }
    else if (nbrAccident == 3)
    {
        compteurPoint -= 6
    }
    if (anciennete > 5)
    {
        compteurPoint += 1
    }

    if (compteurPoint == 4)
    {
        $("#AJS47").html("Tarif bleue")
    }
    if (compteurPoint == 3)
    {
        $("#AJS47").html("Tarif vert")
    }
    if (compteurPoint == 2)
    {
        $("#AJS47").html("Tarif orange")
    }
    if (compteurPoint == 1)
    {
        $("#AJS47").html("Tarif rouge")
    }
    if (compteurPoint < 1)
    {
        $("#AJS47").html("Refusé")
    }


}

function exo48jq()
{

    var jour = +$("#FJS481").val()
    var mois = +$("#FJS482").val()
    var annee = +$("#FJS483").val()

  
/*
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
       $("#AJS48").html("Moins invalide")
   }
*/
}