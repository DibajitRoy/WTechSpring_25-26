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
   alert("Form Submitted Successfully!");
    console.log("First Name: " + a);
    console.log("Last Name: " + b);
    console.log("Email: " + c);
    console.log("Phone Number: " + d);
    console.log("Message: " + e);
    return false;
 }
}
