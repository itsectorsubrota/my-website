
 //flag of bangladesh start
 var c = document.getElementById("flag");
  var ctx = c.getContext("2d");
  ctx.fillStyle="green";
  ctx.fillRect(13,14,271,260);
//
  ctx.lineWidth="2";
  ctx.strokeStyle="black";
  ctx.strokeRect(15, -20, 270, 250);
//
var  centerX  = c.width/2;
var  centerY  = c.height/2;
//
  ctx.beginPath();
ctx.arc(centerX , centerY , 37, 0, 2*Math.PI, false);
ctx.fillStyle="red";
 ctx.fill();
ctx.stroke();
 //flag of bangladesh ends
var canvas = document.getElementById("global");
     var ctx = canvas.getContext("2d");
   ctx.globalCompositeOperation ="xor";
for(x=10, y=60; x<300; x+=50){  
  // ctx.fillStyle="red";
     ctx.fillStyle='hsl('+ 234* Math.random() +',100% , 50%)';
 
    ctx.beginPath();
    ctx.arc(x,y,110,0, 2* Math.PI , false);
  
    ctx.fill();
     }
  var go = document.getElementById("good");
   var tr = go.getContext("2d");

tr.globalCompositeOperation="xor";

  for(x=37,y=46; x<1000; x+=15){
    
    tr.fillStyle='hsl('+ 125* Math.random()+' , 100% , 50%)';
      
    tr.beginPath();
    tr.arc(x,y,105,0, 2* Math.PI , false);
    tr.fill();
}

  //global position ends 

  var c = document.getElementById("myAnimation");
  var ctx= c.getContext("2d");
var x=100;
var y=100;
  function draw (){
 ctx. clearRect(0,0 , c.width, c.height);
   ctx.fillStyle="black";
  ctx.fillRect(0,0 , c.width, c.height);
  for(x=0; x<15; x++){
  var rad = 50* Math.random();
   ctx.beginPath();
ctx.arc(1000*Math.random(), 1000*Math.random(), rad, 0, 2* Math.PI, false);
   ctx.fillStyle= 'hsl('+359*Math.random()+',100%, 50%)';
ctx.fill()
  }
requestAnimationFrame (draw);
}
 draw ();
 //requeast animation end