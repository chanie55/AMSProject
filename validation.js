//still not working.. javascript wont connect to html form

var username = document.forms['formlogin']['username'];
var password = document.forms['formlogin']['password'];

var uname_error = document.getElementById('uname-error');
var pass_error = document.getElementById('pass-error');
var form1 = document.getElementById('form1');

form1.addEventListener('submit', (e) => {
    
    e.preventDefault();
    validate();
})

function validate() {
    if (username.value.length == "") {
        username.style.border-bottom = "1px solid red";
        pass_error.style.display = "block";
        username.focus();
        return false;
    } else if (password.value.length == "") {
        password.style.border = "1px solid red";
        pass_error.style.display = "block";
        password.focus();
        return false;
    }
}

