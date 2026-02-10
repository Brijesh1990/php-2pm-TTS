function cartsum()
{
    var p=document.getElementById("price").value;
    var q=document.getElementById("qty").value;
    var t=p*q;
    document.getElementById("tot").innerHTML=t;
}
// print bill
function pp()
{
    document.getElementById("btn").style="display:none";
    window.print();
}