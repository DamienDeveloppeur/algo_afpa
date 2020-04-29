function exo31()
{
  
    let nbr = document.getElementById("FJS331").value;

    if (nbr > 0 )
    {
        if (nbr > 0 && nbr < 10)
        {
            document.getElementById("AJS31").innerHTML= "le chiffre est positif";
        }
        else 
        {
            document.getElementById("AJS31").innerHTML= "le nombre est positif";
        }
        
    }
    else {
        document.write("Le chiffre est négatif");
    }
}

function exo32()
{
    let nbr1 = document.getElementById("FJS3321").value;
    let nbr2 = document.getElementById("FJS3322").value;

    if (nbr1 > 0 && nbr2 > 0 || nbr1 < 0 && nbr2 < 0)
    {
        document.getElementById("AJS32").innerHTML= "le produit est positif";
    }
    else
    {
        document.getElementById("AJS32").innerHTML= "le produit est négatif";
    }
    

}

function exo33()
{
    let firstName = document.getElementById("FJS3331").value;
    let secondName = document.getElementById("FJS3332").value;
    let thirdName = document.getElementById("FJS3333").value;

    if (firstName < secondName && secondName < thirdName)
    {
        document.getElementById("AJS33").innerHTML= "C'est dans l'ordre alphabétique";
    }
    else
    {
        document.getElementById("AJS33").innerHTML= "Ce n'est pas dans l'ordre alphabétique";
    }

}

function exo34()
{


    let nbr = document.getElementById("FJS334").value;

    if (nbr > 0)
    {
        document.getElementById("AJS334").innerHTML= "le nombre est positif";
    }
    else if (nbr == 0)
    {
        document.getElementById("AJS334").innerHTML= "le nombre entré est zéro";
    }
    else {
        document.getElementById("AJS334").innerHTML= "le nombre est négatif";
    }

}

function exo35()
{

    var nbr1 = document.getElementById("FJS3351").value;
    var nbr2 = document.getElementById("FJS3352").value;
    

    if (nbr1 > 0 && nbr2 > 0 || nbr1 < 0 && nbr2 < 0 )
    {
        document.getElementById("AJS335").innerHTML= "le produit est positif";
    }
    else if (nbr1 == 0 || nbr2 == 0)
    {
        document.getElementById("AJS335").innerHTML= "le produit est égale à 0";
    }
    else {
        document.getElementById("AJS335").innerHTML= "le produit est négatif";
    }
    
}

function exo36()
{
    var age = document.getElementById("FJS336").value;


    if (age < 6)
    {
        document.getElementById("AJS336").innerHTML= "Trop jeune, vous devez avoir au moins 6 ans";
    }
    else if (age == 6 || age == 7)
    {
        document.getElementById("AJS336").innerHTML= "Poussin";
    }

    else if (age == 8 || age == 9)
    {
        document.getElementById("AJS336").innerHTML= "Pupille";
    }
    else if (age == 10 || age == 11)
    {
        document.getElementById("AJS336").innerHTML= "Minime";
    }
    else if (age >= 12)
    {
        document.getElementById("AJS336").innerHTML= "Cadet";
    }

}