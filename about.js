  alert("Hi never mind , I have given my personal info here cause I think that you are the beliveable");

var photos = ['picture/my mother.PNG' , 'picture/my father.PNG' 
 , 'picture/bb.PNG' , 'picture/subrota.PNG' ];
 var imgTag = document.getElementById("slider11");
var count = 0 ;
function next(){
count++;
if(count>=photos.length){
    count=0;
    imgTag.src=photos[count];
}else{
imgTag.src=photos[count];
   }
}
function prev(){
    count--;
    if(count<0){
        count=photos.length - 1;
        imgTag.src=photos[count];
    }else{
    imgTag.src=photos[count];
       }
}
