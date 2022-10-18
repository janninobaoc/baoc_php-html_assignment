function validate() {
    var fname = document.forms["myform"]["firstname"].value;
    if(fname==""){
    alert("Please enter your first name");
    return false;
    }
    else if((fname.length <= 2)||(fname.length>25)){
        alert("first name must be at least 2 characters and not exceed 25 characters.");
        return false;
    }
    var lname = document.forms["myform"]["lastname"].value;
    if(lname==""){
    alert("Please enter your last name");
    return false;
    }
    else if((lname.length <= 2)||(lname.length>25)){
        alert("last name must be at least 2 characters and not exceed 25 characters.");
        return false;
    }
    var address = document.forms["myform"]["address"].value;
    if(address==""){
    alert("Please enter the address");
    return false;
    }
    var email = document.forms["myform"]["email"].value;
    if(email==""){
    alert("Please enter the email");
    return false;
    }else{
    var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
    var x=re.test(email);
    if(x){
    }else{
    alert("Email id not in correct format");
    return false;
    } 
    }
    var password1 = document.forms["myform"]["password"].value;
    var password2 = document.forms["myform"]["password2"].value;
    if(password1==""){
        alert("Please enter a password");
        return false;
    }
    if(password1.length < 8) {  
        alert("Password length must be atleast 8 characters"); 
        return false;  
    }
    if(password2==""){
        alert("Please confirm your password");
        return false;
    }
    if(password1 != password2) {  
        alert("Passwords are not same"); 
        return false;  
      } else {
        alert ("Your account is created successfully");  
      }     
   }
   document.querySelector('.img-btn').addEventListener('click', function()
	{
		document.querySelector('.cont').classList.toggle('s-signup')
	}
    
);