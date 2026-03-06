funtion data ()
{
var a = document.getElementById("n1");
var b = document.getElementById("n2");
var c = document.getElementById("n3");
var d = document.getElementById("n4");
var e = document.getElementById("n5");
if (a=="" || b=="" || c=="" || d=="" || e=="")
{
    alert("Please fill in all fields");
    return false;
}
else
{
    alert("Data submitted successfully");
    return true;
}