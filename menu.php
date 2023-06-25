<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
	<style>
		body{
    background: black;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #8f94fb, #4e54c8);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #8f94fb, #4e54c8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}    
.menu-card-container{
    margin: 20px 15%;
    width:60%;
    background: #000000; 
    background: -webkit-linear-gradient(to right, #434343, #000000);
    background: linear-gradient(to right, #434343, #000000); 
    padding:5%;
    border-radius: 40px;
}


h1{
    background-image: linear-gradient(to right, #ee00ff 0%, #fbff00 100%);
    color: transparent;
    -webkit-background-clip: text;
    text-align: center;
    font-size:60px;
}
img{
    width:100px;
    height:100px;
    border-radius:50%;
}
h2{
    background-image: linear-gradient(to right, #ee00ff 0%, #fbff00 100%);
    color: transparent;
    -webkit-background-clip: text;
    text-align:center;
    font-size:40px;
    font-family:'Times New Roman', Times, serif;
}
ul{
    font-size: 30px;
    color:#8f94fb
}
a:link{
    color:#fff;
    font-size:20px;
    text-decoration: none;
}
a:hover{
    color:#4e54c8;
}
a:active{
    color:rgb(0, 0, 0);
}
h3{
    font-size:30px; 
    text-align:center;
    color:#fff;
    font-family: 'Caveat', cursive;
}
.credit a {
    text-decoration: none;
    color: #fff;
    font-weight: 800;
  }
  
  .credit {
      color: #fff;
    text-align: center;
    margin-top: 10px;
    font-family: Verdana,Geneva,Tahoma,sans-serif;
  }

  @media only screen and (max-width: 860px) {
    h1
      {
         font-size: 38px;
     }
     .menu-card-container{
        margin: 20px 5%;
        width:80%;
     }
   }
   @media only screen and (max-width: 600px) {
    h1
      {
         font-size: 28px;
     }
     .menu-card-container{
        margin: 20px 1%;
        width:88%;
     }
     ul{
        font-size: 20px;
        color:#8f94fb
    }
    h2{
        font-size:18px ;
    }
    h3{
        font-size: 18px;
   }}




		
	</style>
</head>
<body>
 <div class="menu-card-container">
        <h1><b> KhaOO PiyOO MenU</b> <br> <small><i>~ Always Fresh..Always Cold ~</i></small></h1>
        <img src="https://cdn.pixabay.com/photo/2015/10/23/15/51/coffee-1003185__480.jpg">
        <h2><i><b>COFFEE</b></i></h2>
        <ul style="list-style-type:disc;">
            <li>Espresso ----------------- $5</li>
            <li>Americano -------------- $3</li>
            <li>Cappuccino ------------- $6</li>
            <li>Mocha ------------------- $6</li>
            <li>Cafe Latte --------------- $6</li>
            <li>Caramel Macchiato ---- $7</li>
            <li>Piccolo ------------------ $7</li>
        </ul>
        <h2><i><b>OTHERS</b></i></h2>
        <ul style="list-style-type:disc;">
            <li>Black tea --------------- $4</li>
            <li>Lemon tea ------------- $4</li>
            <li>Strawberry tea -------- $5</li>
            <li>Lychee tea ------------- $5</li>
            <li>Mineral water --------- $3</li>
        </ul>
        <hr><br>
        <img src="https://cdn.pixabay.com/photo/2015/10/23/15/51/coffee-1003185__480.jpg" width="100px" height="100px">
        <a href="https://www.healthline.com/nutrition/top-evidence-based-health-benefits-of-coffee">Visit Our Website</a>
        <h3><b>Thank you for you visit <br><small>You just made our business grow..and for that we are GRATEFULL!</small></b></h3>
        <div class="credit">Made with <span style="color:tomato;font-size:20px;">❤ </span>by<a href="https://www.learningrobo.com/"> Asad Siyal</a></div>

    </div>

</body>
</html>