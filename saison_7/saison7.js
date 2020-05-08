
function exo71()
{
    var array = [];
    var divA = document.getElementById("AJS71");
    var tailleTableau = document.getElementById("FJS71").value;
 
    for ( p = 0; p < tailleTableau; p++)
    {
        var nbr = +prompt("entrez une valeur");
        array.push(nbr);

            for (i = 0; i < array.length; i++)
            {
                if (array[i] > array[i+1])
                {
                    while (array[i] > array[i + 1])
                    {
                        var temp = array[i];       
                        array[i] = array[i + 1];    
                        array[i + 1] = temp;         
                        i = 0;
                    }
                }
            }
    }
    
    for (m = 1; m < array.length - 1; m++)
    {
        if (array[m] + 1 == array[m + 1] && array[m] - 1 == array[m -1])
        {
            divA.innerHTML = array + "<br>c'est dans l'ordre !";
        }
        else
        {
            divA.innerHTML =array + "<br> ce n'est pas dans l'ordre !";
        }
    }
}

function exo72()
{
    var array = [5,4,9,2,1];

    for (i = 0; i < array.length; i++)
    {

        if (array[i] < array[i + 1])
        {
            while(array[i] < array[i + 1])
            {

            
                var temp = array[i];
                array[i] = array[i + 1];
                array[ i+ 1] = temp;
                i = 0;
            }
        }

    }

alert(array);
}

function exo721()
{
    var temp = 0;
    var array = [5,4,9,2,1,4,-5,3,10];

    for (i = 0; i < array.length; i++)
    {
        temp = array[i];
       
            for(j = i; j > 0 && array[j - 1] < temp; j--)
            {
                array[j] = array[j-1];
            }
        array[j] = temp;

    }
    alert(array);
}

function exo73()
{
    var array = [1,5,4,6,2];

    for (let i in array)
    {
        temp = array[i];
        

    }


}