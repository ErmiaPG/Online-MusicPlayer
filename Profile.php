<?php
    ini_set('display_errors', 1);
    session_start();
    $Loged_in = false;
    if (isset($_SESSION['Loged in']))
    {
        if($_SESSION['Loged in'] == true)
           {$Loged_in = true;}
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <link rel="shortcut icon" href="../wp-content/uploads/favicon.ico">
    <link rel="icon" type="image/png" href="../wp-content/uploads/favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" sizes="180x180" href="../wp-content/uploads/apple-touch-icon-180x180.png">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        body {
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        
        * {
            box-sizing: border-box;
        }

		.profile-photo {
			width:48px;
			height:auto;
		}

		.flex-menu {
			display:flex;
		}

		.flex-menu li:not(:last-child) {
			margin-right:40px;
		}
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <img src="../wp-content/uploads/favicon-192x192.png" width="30" height="30"  class="d-inline-block align-top" alt="">
        Online MusicPlayer
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"                  aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <?php 
                    if($Loged_in == false)
                    { echo '<a class="nav-link" href="../Login">Login / Sign up</a>';}
                    else
                    { echo '<a class="nav-link" href="../Profile">Profile</a>';}
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../Playlist">Playlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Musics">Musics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="/" tabindex="-1" aria-disabled="true">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Social Media</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="http://onlinemusicplayerproject.gigfa.com">Website</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://www.instagram.com/ermiapg" target="_blank">Instgram</a>
                            <a class="dropdown-item" href="https://www.youtube.com/channel/UCBZ8j63pCuhI27nJOXg3s2g?view_as=subscriber" target="_blank">You Tube</a>
                        </div>
                    </li>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
</nav>


<br>
<main>
        <div class="container">
			<div class="row m-b-r m-t-3">
				<div class="col-md-2 offset-md-1">
					<img src="../wp-content/uploads/ermiapg-profile.jpeg" alt="" class="rounded-circle img-fluid">
				</div>
				<div>
                    <h2 class="h2-responsive" style="color:lightblue;">@ermiapg <button type="button" class="btn btn-primary btn-lg" >Follow</button></h2>
					<p style="color:white;">Ermiapg</p>

					<ul class="flex-menu">
						<li style="color:white;"><strong>41</strong> musics</li>
						<li style="color:white;"><strong>47k</strong> followers</li>
						<li style="color:white;"><strong>208</strong> following</li>
					</ul>
			</div>
		</div>

<script>
"use strict"; 
const body=document.getElementsByTagName("body").item(0);
body.style.background="#000";
const TP=2*Math.PI;
const CSIZE=400;

const ctx=(()=>{
  let d=document.createElement("div");
  d.style.textAlign="center";
  body.append(d);
  let c=document.createElement("canvas");
  c.width=c.height=2*CSIZE;
  d.append(c);
  return c.getContext("2d");
})();

onresize=()=>{ 
  let D=Math.min(window.innerWidth,window.innerHeight)-40; 
  ctx.canvas.style.width=D+"px";
  ctx.canvas.style.height=D+"px";
}

const getRandomInt=(min,max,low)=>{
  if (low) {
    return Math.floor(Math.random()*Math.random()*(max-min))+min;
  } else {
    return Math.floor(Math.random()*(max-min))+min;
  }
}

var sq=2*CSIZE;

var getImageData=()=>{
  let pixd=ctx.createImageData(sq,sq); 
  let rm=Math.pow(2,getRandomInt(2,6,true));
  let gm=Math.pow(2,getRandomInt(2,6,true));
  let bm=Math.pow(2,getRandomInt(2,6,true));
let ro=TP/4*getRandomInt(0,4);
let go=TP/4*getRandomInt(0,4);
let bo=TP/4*getRandomInt(0,4);
  let rf=sq/getRandomInt(1,5);
  let gf=sq/getRandomInt(1,5);
  let bf=sq/getRandomInt(1,5);
  for (let i=0; i<sq; i++) {
    for (let j=0; j<sq; j++) {
      let x=j-sq/2;
      let y=i-sq/2;
      let r=Math.pow(x*x+y*y,0.5);
      let a=Math.atan2(y,x);
      pixd.data[(i*4*sq)+j*4]  =Math.round(96+159*Math.sin(TP*r/rf+ro)*Math.cos(rm*a));
      pixd.data[(i*4*sq)+j*4+1]=Math.round(96+159*Math.sin(TP*r/gf+go)*Math.cos(gm*a));
      pixd.data[(i*4*sq)+j*4+2]=Math.round(96+159*Math.sin(TP*r/bf+bo)*Math.cos(bm*a));
      pixd.data[(i*4*sq)+j*4+3]=255;
    }
  }
  return pixd;
}

var setPattern=(n)=>{
  let pixd=getImageData();
  createImageBitmap(pixd).then((ib)=>{ 
    ctx.strokeStyle=ctx.createPattern(ib,"repeat");
  });
}

function start() {
  if (stopped) {
    requestAnimationFrame(animate);
    stopped=false;
  } else {
    stopped=true;
  }
}
ctx.canvas.addEventListener("click", start, false);

var rotation=0;
var stopped=true;
var t=0;
var duration=1600;
function animate(ts) {
  if (stopped) return;
  t++;
  if (t%duration==0) { 
    C=[16,8,32][getRandomInt(0,3,true)];
    R=220+160*Math.random();
    R2=220+160*Math.random();
    F=TP*Math.random();
    F2=TP*Math.random();
    for (let i=0; i<C; i++) {
      lines[i].a=i*TP/C+(C/4-1)*TP/C/2;
      lines[i].setLine();
    }
    setPattern(); 
    skipLevel=2*getRandomInt(0,C/4)+1;
    rotation=0;
    t=0;
ctx.clearRect(0,0,2*CSIZE,2*CSIZE);
  }
rotation+=0.06/C;
for (let i=0; i<C; i++) {
  F+=0.002/C;
  F2+=0.002/C;
  lines[i].setLine();
  if (i%2) lines[i].rotate(rotation);
  else lines[i].rotate(-rotation);
}
  ctx.lineWidth=3*(1-Math.pow(Math.cos(TP*t/duration),5));
  draw();
  requestAnimationFrame(animate);
}

onresize();
ctx.lineWidth=0;
var C=[16,8,32][getRandomInt(0,3,true)];
C=16;
var F=(TP+10*Math.random())/12;
var F2=(TP+10*Math.random())/12;
var R=220+200*Math.random();	
var R2=220+200*Math.random();

var Line=function(idx) {
  this.a=idx*TP/C+(C/4-1)*TP/C/2;	// could use binary unequal a, with C split/merge, but not compatible with pattern stroke
  this.dp1=new DOMPoint();
  this.dp2=new DOMPoint();
  this.rotate=(z)=>{
    let dm2=new DOMMatrix([Math.cos(z),Math.sin(z),-Math.sin(z),Math.cos(z),this.mx,this.my]);
    let dm3=dm2.multiply(this.dm1);
    this.dp1=this.dp1.matrixTransform(dm3);
    this.dp2=this.dp2.matrixTransform(dm3);
  }
  this.setLine=()=>{
    let f=C>8?(idx%4<2)?F:F2:F;
    let r=C>8?(idx%4<2)?R:R2:R;
    this.dp1.x=r*Math.cos(this.a-f)+CSIZE;
    this.dp1.y=r*Math.sin(this.a-f)+CSIZE;
    this.dp2.x=r*Math.cos(this.a+f)+CSIZE;
    this.dp2.y=r*Math.sin(this.a+f)+CSIZE;
    this.mx=(this.dp1.x+this.dp2.x)/2;
    this.my=(this.dp1.y+this.dp2.y)/2;
    this.dm1=new DOMMatrix([1,0,0,1,-this.mx,-this.my]);
  }
}

var lines=new Array(32);
for (let i=0; i<32; i++) lines[i]=new Line(i);

var skipLevel=2*getRandomInt(0,C/4)+1;

ctx.fillStyle="#00000009";
var draw=()=>{
  ctx.fillRect(0,0,2*CSIZE,2*CSIZE);
  let p=new Path2D();
  p.moveTo(lines[0].mx,lines[0].my);
  for (let i=0; i<skipLevel*C; i+=skipLevel) {
    let i0=(i)%C;
    let i1=(i+skipLevel)%C;
    p.bezierCurveTo(lines[i0].dp2.x,lines[i0].dp2.y,lines[i1].dp1.x,lines[i1].dp1.y,lines[i1].mx,lines[i1].my);
  }
  ctx.stroke(p);
}

setPattern();
start();
</script>
    </main>
</body>

</html>
