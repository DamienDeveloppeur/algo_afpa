function exo31jq()
{

 let nbr = $("#FJS331").val()
 if(nbr < 0)
 {
 $("#AJS31").html("Le Nombre est négatif")
 }
 else
 {
 $("#AJS31").html("Le Nombre est positif")
 } 

}

function exo32jq()
{
    let nbr1 =$("#FJS3321").val()
    let nbr2 =$("#FJS3322").val() 

    if (nbr1 > 0 && nbr2 > 0 || nbr1 < 0 && nbr2 < 0)
    {
        $("#AJS32").html("le produit est positif")
    }
    else
    {
        $("#AJS32").html("le produit est négatif")
    }
    


}

function exo33jq()
{
    let firstName = $("#FJS3331").val()
    let secondName = $("#FJS3332").val()
    let thirdName = $("#FJS3333").val()

    if (firstName < secondName && secondName < thirdName)
    {
        $("AJS33").html( "C'est dans l'ordre alphabétique")
    }
    else
    {
        $("AJS33").html( "Ce n'est pas dans l'ordre alphabétique")
    }

}

function exo34jq()
{


    let nbr = $("#FJS334").val()

    if (nbr > 0)
    {
        $("#AJS334").html( "le nombre est positif")
    }
    else if (nbr == 0)
    {
        $("#AJS334").html( "le nombre entré est zéro")
    }
    else {
        $("#AJS334").html( "le nombre est négatif")
    }

}

function exo35()
{

    var nbr1 = $("FJS3351").val()
    var nbr2 = $("FJS3352").val()
    

    if (nbr1 > 0 && nbr2 > 0 || nbr1 < 0 && nbr2 < 0 )
    {
        $("AJS335").innerHTML("le produit est positif")
    }
    else if (nbr1 == 0 || nbr2 == 0)
    {
        $("AJS335").innerHTML("le produit est égale à 0")
    }
    else {
        $("AJS335").innerHTML("le produit est négatif")
    }
    
}


function exo36jq()
{
    var age = $("FJS336").val()


    if (age < 6)
    {
        $("AJS336").html("Trop jeune, vous devez avoir au moins 6 ans")
    }
    else if (age == 6 || age == 7)
    {
        $("AJS336").html("Poussin")
    }

    else if (age == 8 || age == 9)
    {
        $("AJS336").html("Pupille")
    }
    else if (age == 10 || age == 11)
    {
        $("AJS336").html("Minime")
    }
    else if (age >= 12)
    {
        $("AJS336").html("Cadet")
    }

}