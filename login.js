
    //login form chek 
    document.querySelector("#logIn").addEventListener("click" , function(){

        var user = document.querySelector("#username"). value;
        var pass = document.querySelector("#password").value;
        if(user!=="" && pass!==""){
            alert("You will be able to successfully log in . If you are username and password is valid");
        }else{
            alert("Please fill up this form")
        }
    })