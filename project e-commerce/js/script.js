function login(){
    if (document.forms["formLogin"]["username"].value != "admin") {
        document.getElementById("error1").innerHTML = "Username Failed";
        document.forms["formLogin"]["username"].focus();
        return false;
    }
    if(document.forms["formLogin"]["password"].value != "12345") {
        document.getElementById("error2").innerHTML = "Password Failed";
        document.forms["formLogin"]["password"].focus();
        return false;
    }
}
