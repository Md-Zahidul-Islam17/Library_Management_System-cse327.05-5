
  console.log("Hello Everyone");

function validate() {
  var namee = document.form.namee.value;
  var usernamee = document.form.usernamee.value;
  var emaill = document.form.emaill.value;
  var passwordd = document.form.passwordd.value;
  var mobilee = document.form.mobilee.value; 

  var flag = true;

  if (namee==null || namee == "") {
    document.getElementById('nameError').innerHTML = "*Name can't be blank";
    flag = false;
  } else {
    if(!/^[a-zA-Z ]+$/.test(namee)){
      document.getElementById('nameError').innerHTML = "*Only letters and white space allowed";
      flag = false;
    }
  }

  if (usernamee==null) {
    document.getElementById('usernameError').innerHTML = "*Username can't be blank ";
    flag = false;
  } 
  else {
    if (!(/^[\S]+$/.test(usernamee))) {
        document.getElementById('usernameError').innerHTML = "*white space are not allowed";
      flag = false;
    }
  }
  if (passwordd==null || passwordd ==""){
    document.getElementById('passwordError').innerHTML = "*Password can't be blank";
    flag = false;

  } else
  {
    if((passwordd.length < 8) || (passwordd.length >= 32)) {
        document.getElementById('passwordError').innerHTML =" ** Passwords length must be between 8 to 32";
        flag = false;
      }
  }

  if (eamill==null || emaill ==""){
    document.getElementById('emailError').innerHTML = "*eamil can't be blank";
    flag = false;

  }
  

  if (mobilee==null || mobilee ==""){
    document.getElementById('contactError').innerHTML = "*Contact can't be blank";
    flag = false;

  }

  else {
    if(!/^[0-9]+$/.test(mobilee)){
      document.getElementById('contactError').innerHTML = "*Only numbers allowed";
      flag = false;
    }
  }

  return flag;

}
