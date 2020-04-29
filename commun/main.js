function test()
{
    alert("Hello le test" );
}


function displayblockphp()
{
    var divphp = document.getElementById("php");

    if (divphp.style.display == "none")
    {
        divphp.style.display = "block" ;
    }
    else
    {
        divphp.style.display = "none";
    }

}

function displayblockjs()
{

    var divJS = document.getElementById("contenue");

    if (divJS.style.display == "none")
    {
        divJS.style.display = "block" ;
    }
    else
    {
        divJS.style.display = "none";
    }


}


function displaynonejs()
{
    document.getElementById("contenue").style.display = "none";
}