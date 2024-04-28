<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="300">
  <title>iTex</title>
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="style.css">
</head>
<body onload="startTime()">
  <section class="main">
   <div class="slideshow-container">
    </div>
  </section>

  <script>
        function createDivs() {
            let container = document.getElementsByClassName("slideshow-container")[0];
            let k = 1;
            let j = 1;
            for (let i = 1; i <= 60; i++) {
                let div = document.createElement("div");
                container.appendChild(div);
                div.className = "mySlides fade slide" + i;
                if (i % 2 != 0) {
                    let img = document.createElement("img");
                    img.src = "img/" + k + ".jpg";
                    div.appendChild(img);
                    k = k + 1;
                } else {
                    let video = document.createElement("video");
                    video.src = "img/" + j + ".mp4";
                    video.autoplay = true;
                    video.muted = true;
                    video.loop = true;
                    div.appendChild(video);
                    j = j + 1;
                }
               
                
            }
        }
        createDivs();
    </script>
  <footer>
<div class="footer__info" style="width: 249px; height: 220px; display: flex; flex-direction: column; justify-content: center; align-items:center; background: black; padding-top: 30px">
<span id="time" style="font-family: Arial; color: white; font-size: 80px; font-weight: bold;">
<script>
function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  m = checkTime(m);
  document.getElementById('time').innerHTML =  h + ":" + m;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script></span>
<span style="font-family: Arial; color: white; font-size: 22px; font-weight: bold; margin-top: 15px; margin-left:120px; "> <?php
$date = date('d.m.Y');
echo $date;
?> </span>
<span style="font-family: Arial; color: white; font-size: 22px; font-weight: bold; margin-top: 15px; margin-left: 70px; margin-bottom: 30px;"> <?php
$datetime1 = date_create('today');
$datetime2 = date_create('2022-02-23');
$interval = date_diff($datetime1, $datetime2);
echo $interval->days . " день війни";?> </span>
</div>
<div class="footer__info">
<div id="slider">
            <div class="slide">
                <img src="img/slider/ships.jpg">
                <span id="ships"></span>
            </div>
            <div class="slide">
                <img src="img/slider/pigs.jpg">
                <span id="people"></span>
            </div>
            <div class="slide">
                <img src="img/slider/tanks.jpg">
                <span id="tanks"></span>
            </div>
            <div class="slide">
                <img src="img/slider/planes.jpg">
                <span id="planes"></span>
            </div>
            <div class="slide">
                <img src="img/slider/helicopters.jpg">
                <span id="helicopters"></span>
            </div>
            <div class="slide">
                <img src="img/slider/ppo.jpg">
                <span id="ppo"></span>
            </div>
            <div class="slide">
                <img src="img/slider/artilery.jpg">
                <span id="artilery"></span>
            </div>
            <div class="slide">
                <img src="img/slider/bbm.jpg">
                <span id="bbm"></span>
            </div>
            <div class="slide">
                <img src="img/slider/rszv.jpg">
                <span id="rszv"></span>
            </div>
            <div class="slide">
                <img src="img/slider/auto.jpg">
                <span id="auto"></span>
            </div>
            <div class="slide">
                <img src="img/slider/bpla.jpg">
                <span id="bpla"></span>
            </div>
        </div>
</div>
	<div class="footer__info">
<style>
#IUAfinance86 {min-width: 249px; width: 249px; position: relative;}
#IUAfinance86 * {margin: 0; padding: 0;}
#IUAfinance86 a, #IUAfinance86 a:hover {border: none; text-decoration: underline; color: inherit;}
#IUAfinance86 .IUAfinance_block {overflow: hidden; padding: 10px; font-family: Arial; font-size: 10px; background: #F6F6F6; color: #000000; padding-bottom: 30px}
#IUAfinance86 .IUAfinance_title {display: none; overflow: hidden; margin-top: -4px; font-size: 12px; font-weight: bold; height: 20px; line-height: 20px; color: #00529C;}
#IUAfinance86 .IUAfinance_title i {position: absolute; right: 4px; top: 2px; width: 36px; height: 14px; background: url(//i.i.ua/v2/logo/logo_small_14_black.png) no-repeat 0 0 transparent; opacity: .3;}
#IUAfinance86 .IUAfinance_content, #IUAfinance86 .IUAfinance_content:hover {display: block; background: #FFFFFF; padding: 4px; margin-bottom: 4px; text-decoration: none; color: inherit;}
#IUAfinance86 .IUAfinance_head_title {font-size: 15px; font-weight: bold; display: none}
#IUAfinance86 .IUAfinance_item,
#IUAfinance86 .IUAfinance_head {padding: 5px 0;}
#IUAfinance86 .IUAfinance_item:last-child {padding-bottom: 0;}
#IUAfinance86 .IUAfinance_item {border-top: 1px dotted #DDD; font-size: 18px; font-family: Arial; font-weight: bold;}
#IUAfinance86 .IUAfinance_item_title,
#IUAfinance86 .IUAfinance_item_data {display: inline-block; vertical-align: top; width: 42%; text-align: right; font-weight: bold;}
.IUAfinance_item_title {font-size: 16px}
#IUAfinance86 .IUAfinance_item_title:first-child,
#IUAfinance86 .IUAfinance_item_data:first-child  {width: 16%; text-align: left;}
#IUAfinance86 .IUAfinance-increase:before {display: none; content: "\25B2";  color: #40983c; font-size: 11px;}
#IUAfinance86 .IUAfinance-decrease:before {display: none; content: "\25BC";  color: #ed482e; font-size: 11px;}
</style>
<div id="IUAfinance86">
<div class="IUAfinance_block" id="IUAfinanceBlock">
<h1 class="IUAfinance_title" id="IUAfinanceTitle"></h1>
<a href="//finance.i.ua/informers/" target="_blank" class="IUAfinance_content" id="IUAfinanceContent"></a>
</div>
</div>

<script type="text/javascript">
var $container = document.getElementById("IUAfinance86");
$container.style.width = "250";
$container.querySelector(".IUAfinance_block").style.backgroundColor = "rgb(0,0,0)";
$container.querySelector(".IUAfinance_block").style.borderColor = "rgb(255, 255, 255)";
$container.querySelector(".IUAfinance_block").style.color = "rgb(255, 255, 255)";
$container.querySelector(".IUAfinance_content").style.backgroundColor = "rgb(0,0,0)";
$container.querySelector(".IUAfinance_title").style.color = "rgb(255, 255, 255)";
$container.querySelector("#IUAfinanceLink").style.color = "rgb(255, 255, 255)";</script>
<script type="text/javascript">
if (typeof(iFinance) == "undefined") {
if (typeof(iFinanceData) == "undefined") {
document.write('<scr' + 'ipt src="//i.i.ua/js/i/finance_informer.js?1" type="text/javascript" charset = "windows-1251"></scr' + 'ipt>');
iFinanceData = [];
}
iFinanceData.push({b:73, c:[840,978], enc:2, lang:1, p:86, ver2: true});
} else {
window['oiFinance86'] = new iFinance(2);
window['oiFinance86'].gogo({b:73, c:[840,978], enc:2, lang:1, p:86});
}
</script>
</div>
    <div class="footer__info">
	
    <link type="text/css" rel="stylesheet" href="informer.css">
	    <div class="meteoprog-informer" style="width: 249px" data-params='{"city_ids":"2513","domain":"https://www.meteoprog.ua/ua/","id":"62f6a5f62bac923f138b4881","lang":"ua"}'>

      
        <a title="Ïîãîäà â ì³ñò³ ²âàíî-Ôðàíê³âñüê" target="_blank" href="https://www.meteoprog.ua/ua/weather/Ivanofrankivsk/">
          <img style="margin: 0 auto; display: block" src="https://www.meteoprog.ua/images/preloader.gif" alt="Loading...">
        </a>
        <a target="_blank" class="constructor__met2wlink" href="https://www.meteoprog.ua/ua/review/Ivanofrankivsk/">Ïîãîäà íà 2 òèæí³</a>
      

      <a class="constructor__metlink" target="_blank" href="https://www.meteoprog.ua/ua/">
        <img style="display: block; margin: 0 auto;" alt="Meteoprog" src="https://www.meteoprog.ua/images/meteoprog-inf.png">
      </a>
    </div>
    <script type="text/javascript" src="https://www.meteoprog.ua/js/winformer.min.js?id=100"></script>

  </div>
<div class="footer__info" style="width: 249px; height: 475px; display: flex; flex-direction: column; justify-content: center; align-items:center; background: black; padding-top: 20px">
<div style="background:white; padding:5px;">
<img style="width: 210px; height: 210px" src="img/info/qr.jpg">
</div>
<span style="font-family: Arial; color: white; font-size: 15px; font-weight: bold; margin-top: 15px;">www.dim-sad.com.ua</span>

</div>

</footer>
<div style="margin: 0; position: fixed; top: -5px; left: 10px; z-index: 3;">
<img style="width: 170px; height: 170px" src="img/info/logo.jpg">
</div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>
    <?php

$filename = [];
$k = 1;
for ($i = 1; $i <= 60; $i++) {
   $filename["img/$k.jpg"] = "slide$i";
   $i++;
   $filename["img/$k.mp4"] = "slide$i";
   $k++;
 
}

    foreach ($filename as $v => $k) {
      if(file_exists($v)){
        
      } else {
         echo "<script>$('.$k').remove();</script>";
      }
    }
    ?>
  </body>
  </html>
