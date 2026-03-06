funtion data ()
{
 var a = document.getElementById("n1").Value;
 var b = document.getElementById("n2").Value;
 var c = document.getElementById("n3").Value;
 var d = document.getElementById("n4").Value;
 var e = document.getElementById("n5").Value;
  if (a=="" || b=="" || c=="" || d=="" || e=="")
 {
    alert("Field Value need to be filled up");
    return false;
 }
 else
 {
    alert("Data submitted successfully");
    return true;
 }
}