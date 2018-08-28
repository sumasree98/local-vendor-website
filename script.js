function validate1()
{
    var username = document.forms["form1"]["username"].value;
    if(username.length<8)
    {
        document.getElementById("span1").innerHTML="The length of the username should atleast be 8";
        return false;
    }
    else
    {
        document.getElementById("span1").innerHTML="";
    }
    var password = document.forms["form1"]["password"].value;
    if(password.length<8)
    {
        document.getElementById("span2").innerHTML="The length of the password should atleast be 8";
        return false;
    }
    else
    {
        document.getElementById("span2").innerHTML="";
    }
    if(true)
        redirect();
}
function redirect()
{
    window.location.href="Welcome.html";
}
function validate2()
{
    var Fname=document.forms["form2"]["firstname"];
	if(Fname.value=="")
	{
		document.getElementById("span3").innerHTML="Please enter First Name";
		return false;
	}
	else
	{
		document.getElementById("span3").innerHTML="";
	}
	var fnregex=/^[A-Za-z]+$/;
	if(!(fnregex.test(Fname.value)))
	{
		document.getElementById("span3").innerHTML="Please enter a valid First Name";
		return false;
	}
	else
	{
		document.getElementById("span3").innerHTML="";
    }
    
    var Lname=document.forms["form2"]["lastname"];
	if(Lname.value=="")
	{
		document.getElementById("span4").innerHTML="Please enter last Name!";
		return false;
	}
	else
	{
		document.getElementById("span4").innerHTML="";
	}
	var lnregex=/^[A-Za-z]+$/;
	if(!(lnregex.test(Lname.value)))
	{
		document.getElementById("span4").innerHTML="Please enter a valid Last Name";
		return false;
	}
	else
	{
		document.getElementById("span4").innerHTML="";
    }

    var username = document.forms["form2"]["username"].value;
    if(username.length<8)
    {
        document.getElementById("span5").innerHTML="The length of the username should atleast be 8";
        return false;
    }
    else
    {
        document.getElementById("span5").innerHTML="";
    }

    var email = document.forms["form2"]["email"];
	if(email.value=="")
	{
		document.getElementById("span6").innerHTML="Please enter an Email!";
		return false;
	}
	else
	{
		document.getElementById("span6").innerHTML="";
	}
	var atpos = email.value.indexOf("@");
    var dotpos = email.value.lastIndexOf(".");
    if (atpos < 1 || dotpos<1) 
    {
        document.getElementById("span6").innerHTML="Please enter a valid Email!";
        return false;
    }
    else
	{
		document.getElementById("span6").innerHTML="";
	}
    var unregex=/^[a-zA-Z][a-zA-Z0-9.@_]+$/;
    if(!(unregex.test(email.value)))
    {
	 	document.getElementById("span6").innerHTML="Please enter a valid Email!";
        return false;
    }
    else
	{
		document.getElementById("span6").innerHTML="";
    }
    
    var num=document.forms["form2"]["contactnumber"];
	if(num.value=="")
	{
		document.getElementById("span7").innerHTML="Please enter Phone Number!";
		return false;
	}
	else
	{
		document.getElementById("span7").innerHTML="";
	}
	if(num.value.length!=10)
	{
		document.getElementById("span7").innerHTML="Please enter a valid Phone Number!";
		return false;
	}
	else
	{
		document.getElementById("span7").innerHTML="";
	}
	var numreg=/^[6789][0-9]+$/;
	if(!(numreg.test(num.value)))
	{
		document.getElementById("span7").innerHTML="Please enter a valid Phone Number!";
		return false;
	}
	else
	{
		document.getElementById("span7").innerHTML="";
    }
    
    var Password = document.forms["form2"]["password"];
	if(Password.value=="")
	{
		document.getElementById("span8").innerHTML="Please enter a Password!";
		return false;
	}
	else
	{
		document.getElementById("span8").innerHTML="";
	}
	if(Password.value.length<8)
    {
        document.getElementById("span8").innerHTML="Length of the Password should at least be 8 characters.";
        return false;
    }
    else
	{
		document.getElementById("span8").innerHTML="";
    }
    
    var conpass = document.forms["form2"]["conpassword"];
    if(conpass!=Password)
    {
        document.getElementById("span9").innerHTML="The passwords do not match!";
    }
    else
    {
        document.getElementById("span9").innerHTML="";
    }
    redirect();
}