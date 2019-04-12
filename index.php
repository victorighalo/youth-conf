<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NOB Speicial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/preflight.min.css" rel="stylesheet">
    <style>
    body{
        background: #0d52c7;
        margin:0px;
        padding:0px
    }
    #frame_container{
    height: 300px;
    width: 300px;
    margin: 0 auto;
    border: 3px solid #fff;
    border-radius: 5px;
}
h3{
    color: #ffffff;
    text-align: center
}
#imagebg{
    background:url('./bg2.jpeg');
    background-size: cover;
    height: 300px;
    width: 300px;
}
#avatar_container{
    text-align: center;
    width: 116px;
    height: 112px;
    margin: 0 auto;
    position: relative;
    top: 134px;
    right: 22px;
}
img {
    max-width: 100%;
    max-height: 100%;
    min-width: 100%;
    min-height: 100%;
}
#download_container{
    width: 80%;
    margin: 20px auto;
    display: none;
}
#controls{
    height: auto;
    width: 300px;
    margin: 50px auto 0;   
    text-align:center;
    border: 15px solid #fff;
    border-radius: 5px;
    background: #fff;
}
.page{z-index: 900}
#blocker{
    z-index:1000;
    height:100%;
    width:100%;
    background: gray; 
    opacity:0.9; 
    position: absolute;
    text-align:center;
    }
    #blocker h2{
        color:#fff;
        margin-top:20%;        
    }
    .show{
        display:block
    }
    .hide{
        display:none
    }
    </style>
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/utilities.min.css" rel="stylesheet">
</head>
<body>
<div id="blocker" class="hide">
<h2>Please wait...</h2>
</div>
    <div id="frame_container" class="max-w-sm overflow-hidden shadow-lg" >
        <div id="imagebg">
        
        <div id="avatar_container">

        </div>
    </div>
    </div>
    <div
    id="controls"
    class="max-w-sm overflow-hidden shadow-lg pb-5 pt-5 pl-1 pr-1 mb-20" 
    >
    <div class="font-bold text-xs mb-2">Choose an image to afix.</div>
        <input type="file" name="avatar" id="avatar" 
        class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline"
        >
        <button class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded inline-flex items-center rounded-full" id="download_container">
  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
  
</button>

    </div>
    <div class="flex text-white mt-20">
  <div class="w-full h-12 pl-3">
  <p>Youth Conference 2019 - Poster Maker</p>
  <h6>New Media - Zone2 Christ Embasssy, Lagos Nigeria</h6>
  </div>
</div>
    <script src="main.js"></script>
</body>
</html>