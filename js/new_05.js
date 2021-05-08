
function login(){ 
    var username = document.getElementById("username-field").value;
    var password = document.getElementById("password-field").value;
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var loginStatus;

    if (username.match(mailformat) && password == "password"){
        
        alert("You successfully logged in");
        loginStatus = "true";
        localStorage.setItem("status", loginStatus);
        localStorage.setItem("user1", username);
        window.location = "./information_page.html";
    }
    else{
        alert("Invalid username or password. Please check again!");
        loginStatus = "false";
        localStorage.setItem("status", loginStatus);
        location.reload();
    }
}

function loginStatusCheck(){ 
    
    if (localStorage.getItem("status") == null){
        window.location = "./login.html";
    }
    else{
        window.location = "./information_page.html";
    }
}

function testtmp(){
    var temp = localStorage.getItem("user1");
    document.getElementById("email-field").innerHTML = temp;
}

