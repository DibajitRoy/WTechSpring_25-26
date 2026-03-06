function data()
{
 var a = document.getElementById("n1").value;
 var b = document.getElementById("n2").value;
 var c = document.getElementById("n3").value;
 var d = document.getElementById("n4").value;
 var e = document.getElementById("n5").value;

 if(a=="  " || b=="" || c=="" || d=="" || e=="")
 {
    alert("Field Value need to be filled up");
    return false;
 }
 else
 {
    return true;
 }
}