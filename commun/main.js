/*
function rotation(id_select)
{
    
	document.getElementById(id_select).rotate({});
}
*/
// BOUTONS DISPLAY EXE
/*
function displayblockphp()
{
   
    var divJS = document.getElementById("JS");
    var divphp = document.getElementById("php");

    if (divphp.style.display == "none")
    {
        divphp.style.display = "block" ;
       divJS.style.display = "none";
       divjquery.style.display = "none";
        
    }
    else
    {
        divphp.style.display = "none";
       
        
    }

}

function displayblockjs()
{

    var divJS = document.getElementById("JS");
var divphp = document.getElementById("php");

    if (divJS.style.display == "none")
    {
        divJS.style.display = "block" ;
        divphp.style.display = "none";
        divjquery.style.display = "none";
    }
    else
    {
        divJS.style.display = "none";
    }


}

function displaynonejquerry()
{
    var divjquery = document.getElementById("jquery");
    var divJS = document.getElementById("JS");
    var divphp = document.getElementById("php");

    if (divjquery.style.display == "none")
    {
        divjquery.style.display = "block"
        divphp.style.display = "none";
        divJS.style.display = "none";
    }
    else
    {
        divjquery.style.display = "none";
    }
}
*/
// BOUTONS DISPLAY SHOW

function displayblockshowphp()
{
   
    var divshowJS = document.getElementById("showJS");
    var divshowphp = document.getElementById("showphp");
    var divshowjquery = document.getElementById("showjquery");

    if (divshowphp.style.display == "none")
    {
        divshowphp.style.display = "block" ;
       divshowJS.style.display = "none";
        divshowjquery.style.display = "none";
    }
    else
    {
        divshowphp.style.display = "none";
       
        
    }

}

function displayblockshowjs()
{

    var divshowJS = document.getElementById("showJS");
    var divshowphp = document.getElementById("showphp");
    var divshowjquery = document.getElementById("showjquery");

    if (divshowJS.style.display == "none")
    {
        divshowJS.style.display = "block" ;
        divshowphp.style.display = "none";
        divshowjquery.style.display = "none";
    }
    else
    {
        divshowJS.style.display = "none";
    }


}

function displaynoneshowjquerry()
{
    var divshowJS = document.getElementById("showJS");
    var divshowphp = document.getElementById("showphp");
    var divshowjquery = document.getElementById("showjquery");

    if (divshowjquery.style.display == "none")
    {
        divshowJS.style.display = "one" ;
        divshowphp.style.display = "none";
        divshowjquery.style.display = "block";
    }
    else
    {
        divshowjquery.style.display = "none";
    }
}

// EFFET SAISON 5
// EXO 510 
function displaysommePayee()
{
    var divSommePayee = document.getElementById("sommePayee");

    if (divSommePayee.style.display == "none")
    {
        
        divSommePayee.style.display = "block";
    }
    else
    {
        divSommePayee.style.display = "none";
    }
   
}



/* COURS ET TESTS */

  
var ps = document.querySelectorAll('p')
for (i = 0; i < ps.length; i++)
{
  var p = ps[i]
  var rougit = function()
  {
      
      this.classList.toggle('black')
  }
  p.addEventListener('click', rougit)
}

// POUR CONFIRMATION CLICK LIEN

var liens = document.querySelectorAll('.external')

for (i = 0; i< liens.length;i++)
{
var lien = liens[i]

lien.addEventListener('click', function(event) 
{

  var reponse = window.confirm('je test')
  if (reponse === false)
  {
    event.preventDefault()
  }
}

)}

// KEYDOWN pour pouvoir entrer que des caractéres précis 
/* document.querySelector('#a').addEventListener('keydown', function(e)
{
    var lettre = String.fromCharCode(e.keyCode)
    if(lettre != "A")
    {
        e.preventDefault()
    }
}
    
    
) */


function test()
{
    alert("Hello le test" );
}

