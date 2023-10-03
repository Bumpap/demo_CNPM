function validateInput()
{
    let emailField = document.getElementById('User');
    let passField = document.getElementById('Pass'); 
    let errorField = document.getElementsByClassName('errorMessage')[0];

    let email = emailField.value;
    let password = passField.value;

    if (email==="")
    {
        errorField.innerHTML="Please enter your Email";
        emailField.focus();
        return false;
    }

    else if (!email.includes('@'))
    {
        errorField.innerHTML="Your email is not correct";
        emailField.focus();
        return false;
    } 

    else if (password==="")
    {
        errorField.innerHTML="Please enter your Password";
        passField.focus();
        return false;
    }
    else if(password.length < 6 )
    {
        errorField.innerHTML="Your password must be at least 6 character";
        passField.focus();
        return false;
    }
    errorField.innerHTML = "";
    return true;
      
}

function clearErrorMessage()
{
    let errorField = document.getElementsByClassName('errorMessage')[0].innerHTML="";
}