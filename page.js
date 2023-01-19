function lettervalidation(){
    var letters = /^[A-Za-z]+$/;
    var username = document.forms["contactFrm"]["username"].value;
    if (username.value.match(letters)){
        return true;
    } else {
        alert("error");
        return false;
    }
}