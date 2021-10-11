
//sign up form check 
document.querySelector("#signup").addEventListener("click" , function(){
    var username = document.querySelector("#username"). value;
    var email = document.querySelector("#email"). value ; 
    var password = document.querySelector("#password"). value ;
    if(username!=="" && password!=="" && email!==""){
        alert("Great job you are able to successfully sign up. We are don't share your info with anybody . Your information is our responsiblity");
        window.location="my_website.php";
    }else{
        alert("Please fill up this form"); 
    }
    
    });
    