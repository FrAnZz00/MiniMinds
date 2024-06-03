<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pf3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>Test pfp</title>
    <style>
        *{
    margin: 0;
    padding: 0;
}
body {
    font-family: "Roboto", sans-serif;
    overflow-x: hidden;
}
  
  /*nabvar*/
nav {
    display: flex;
    background-color: rgb(106, 21, 175);
    justify-content: space-around;
    width: 100%;
    padding: 20px 0;
    color: white;
}
  
nav.logo {
    font-family: "Schoolbell", cursive;
}
  
main a {
  text-decoration: none;
}
  
nav ul {
    display: flex;
    list-style: none;
    width: 40%;
    justify-content: space-between;
}
  
nav ul li a {
    color: rgb(195, 142, 238);
    text-decoration: none;
    font-size: 0.8em;
}
nav ul li p {
    color: rgb(195, 142, 238);
    text-decoration: none;
    font-size: 0.8em;
}
nav ul li p:hover {
    color: white;
    cursor: pointer;
}
  
nav ul li a:hover {
    color: white;
    cursor: pointer;
}
.popup{
   position: absolute;
   top: 0;
   left: 50%;
   transform: translate(-50%,-50%) scale(0.1);
   text-align: center;
   padding: 0 30px 30px;
   visibility: hidden;
   transition: all 0.4s;
   background: #9370DB;
   width: 580px;
   height: 490px;
   padding: 20px;
   box-sizing: border-box;
   border-radius: 20px;
}
.popup.open{
    visibility: visible;
    top: 50%;
    transform: translate(-50%, -50%) scale(1);
}
.popup button{
    width: 40%;
    margin-top: 40px;
    padding: 9px 0;
    background-color: #F0FFFF;
    color: #DCDCDC;
    border: 0;
    border-radius: 4px;
    font-size: 18px;
    outline: none;
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
    cursor: pointer;
}
.popup button:hover{
    background: #8B0000;
    transform: scale(1.05);
    overflow: hidden;
}
#file{
    display: none;
}
#uploadbtn{
    position: absolute;
    height: 30px;
    width: 30px;
    padding: 6px 6px;
    border-radius: 50%;
    cursor: pointer;
    color: #fff;
    transform: translateX(120%);
    margin-top: 100px;
    background-color: rgb(173, 172, 172, 0.801);
    box-shadow: 2px 4px 4px rgb(0, 0, 0,0.644);
}
.user-info{
    display: flex;
    flex-direction: column;
    align-items: center;
}
.user-info img{
    width: 140px;
}
.user-info h2{
    font-weight: 500;
    color: white;
    margin-bottom: 5px;
    text-align: center;
}
.desc h3{
    text-align: left;
    line-height: 2.1;
    margin-top: 5px;
    font-weight: 200;
    color: white;
}
h3{
    font-size: 30px;
}
.proggres-container{
    margin-bottom: 25px;
    margin-top: 30px;
}
.proggres-container h4{
    align-items: center;
    font-size: 30px;
    color: white;
    margin: 5px 0 15px 1px;
    letter-spacing: .5px;
}
.proggres-container .proggres-bar{
    position: relative;
    width: 538px;
    height: 25px;
    border-radius: 30px;
    background-color: white;
    box-shadow: 3px 4px 5px 0px rgba(204 185 185 / .75);
}
.proggres-container .proggres-bar span{
    position: absolute;
    top: 0;
    left: 0;
    width: 90%;
    height: 100%;
    color: white;
    font-weight: 800;
    font-size: 18px;
    line-height: 1.7;
    text-align: center;
    border-radius: 30px;
    background: linear-gradient(90deg, rgba(76,175,80,1) 50%, rgba(50,222,132,1) 100%);
    transition: width .5s linear;
}
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
              <h4>MiniMinds</h4>
            </div>
            <ul>
                <li><a id="click" onclick="openP()">Profile</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Setting</a></li>
            </ul>
            <div class="popup open" id="Submenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="pfp.png" id="photo">
                        <input type="file" id="file">
                        <label for="file" id="uploadbtn"><i class="fa-solid fa-camera fa-bounce"></i></label>
                        <h2>Name</h2>
                    </div>
                    <hr>
                    <h3>Class: B</h3>
                    <div class="proggres-container">
                        <h4>Proggres</h4>
                        <div class="proggres-bar">
                            <span data-width="80%">80%</span>
                        </div>
                        <button type="button" onclick="closeP()">Close</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <script>
        const popup = document.querySelector("#Submenu")
const spans = document.querySelectorAll('.progress-bar span');

function openP(){
    popup.classList.add("open");
}

function closeP(){
    popup.classList.remove("open");
}

spans.forEach((span) => {
    span.style.width = span.dataset.width;
    span.innerHTML = span.dataset.width;
})
    </script>
</body>
</html>