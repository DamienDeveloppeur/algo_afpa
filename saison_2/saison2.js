function calculerCarre2()
{

let nbr = document.getElementById("dark_field").value;

var solution = nbr*nbr;

document.getElementById("AJS22").innerHTML= "le carre de " + nbr + " est : " + solution;
}

function exo22()
{

   
    
   let prixArticleHT1 = document.getElementById("FJS231").value;
let prixArticleHT = parseInt(prixArticleHT1);

   let nbrarticle1 = document.getElementById("FJS232").value;
let nbrarticle = parseInt(nbrarticle1);
   let TauxDeTva1 = document.getElementById("FJS233").value;
let TauxDeTva = parseInt(TauxDeTva1);


    var PrixEtapeIntermediaire = (prixArticleHT * TauxDeTva) / 100 ;
            
       var prixFinal = prixArticleHT + PrixEtapeIntermediaire;
            
            valeurPanier = prixFinal * nbrarticle;
       
           
          document.getElementById("AJS23").innerHTML= "La valeur totale du panier est de : " + valeurPanier;

}

