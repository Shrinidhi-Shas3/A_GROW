
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #f20000;
  color: white;
}

/* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
}
* {


  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;

}

/* Style the header */
header {
   
   background-color:black;
background-image: url(http://numalsfoods.com/wp-content/uploads/2016/02/food-products-kochi.jpg?id=5303);
                background-size: cover;
  padding: 300px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 1100px; /* only for demonstration, should be removed */
  background-color:#32cd32;
}


/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: right;
  padding: 20px;
  width: 70%;
  background-color:white;
  height: 1100px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #000000;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }

}
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 5px;

}

tr:nth-child(even) {
  background-color: #32cd32;
}

tr:nth-child(odd) {
  background-color: #ff0000;
}

</style>
</head>
<body>


<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="https://economictimes.indiatimes.com/news/economy/agriculture">News Updates</a>
  <a href="http://agriculture.gov.in/#">Ministry</a>
  <a href="https://raitamitra.karnataka.gov.in/english">KSDA</a>

  <a href="https://cacp.dacnet.nic.in/">Crop Prices</a>

<a href="https://www.accuweather.com/en/in/tumkur/188762/weather-forecast/188762">Weather</a>
<a href="index.php">Logout</a>
    
    
  </div>


</div><section>
  <nav>
    <ul>
       <h2><b>KNOW MORE ABOUT YOUR CROPS!!!.</b></h2>
    <h3> Please select the crops to know about their common diseases, their symptoms and its management.</h3>
    <h4> CEREALS </h4>
    <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_cereals_paddy.html">Know about <b>PADDY</b></a></p>
    <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_cereals_wheat_main.html">Know about <b>WHEAT</b></a></p>
     <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_cereals_ragi.html">Know about <b>RAGI</b></a></p>
      <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_cereals_maize.html">Know about <b>MAIZE</b></a></p>
      <p><a href="http://www.agritech.tnau.ac.in/crop_protection/crop_prot_crop_insect_pul_red%20gram.html">Know about <b>RED GRAM</b></a></p>
      <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_oilseeds_groundnut.html">Know about <b>GROUND NUT</b></a></p>
      <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_pulses_chickpea.html">Know about <b>BENGAL GRAM</b></a></p>
      
      <h4> FRUIT CROP </h4>
      <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_veg_musk%20melon%20_water%20melon.html">Know about <b>WATERMELON</b></a></p> 
     <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_fruits_mango.html">Know about <b>MANGO</b></a></p>
      <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_fruits_pomegranate.html">Know about <b>POMEGRANATE</b></a></p>
      <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_fruits_banana.html">Know about <b>BANANA</b></a></p>
      <p><a href="http://agritech.tnau.ac.in/crop_protection/papaya_diseases_3.html">Know about <b>PAPAYA</b></a></p>
      <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_fruits_citrus.html">Know about <b>ORANGE</b></a></p>
      
      <h4> PLANTATION CROPS </h4>
      <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_plantation_arecanut.html">Know about <b>ARACA NUT</b></a></p>
      <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_plantation_coconut.html">Know about <b>COCONUT</b></a></p>
      <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_plantation_coffee.html">Know about <b>COFFEE</b></a></p>
      <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_plantation_tea.html">Know about <b>TEA</b></a></p>
      <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_plantation_rubber.html">Know about <b>RUBBER</b></a></p>
      <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_plantation_cashew.html">Know about <b>CASHEW</b></a></p>
      <p><a href="http://agritech.tnau.ac.in/crop_protection/crop_prot_crop%20diseases_plantation_oilpalm.html">Know about <b>OIL PALM</b></a></p>
      
    </ul>
  </nav>
  
  <article>
<h3><b>About us</b></h3>
<p></p>




<lr></lr>
<h3><b>Documentation</b><h3>
<table>
  <tr>
    <th>Crop</th>
    <th>Downloadable file</th>
    <th>Crop</th>
    <th>Downloadable file</th>
    
  </tr>
  <tr>
    <td>Paddy</td>
    <td>qwfqf</td>
  <td>Banana</td>
    <td>sdg</td>
  </tr>
  <tr>
    <td>Wheat</td>
   <td>Francisco Chang</td>
  <td>Papaya</td>
    <td>sdg</td>
    
  </tr>
  <tr>
    <td>Ragi</td>
    <td>Roland Mendel</td>
   <td>Pomagrenate</td>
    <td>sdg</td>
   
  </tr>
  <tr>
    <td>Maize</td>
    <td>Helen Bennett</td>
<td>Araca nut</td>
<td> vasdfe</td>
   
  </tr>
  <tr>
    <td>Red gram</td>
    <td>Yoshi Tannamuri</td>
    <td> Coconut</td>
<td>qjhd</td>
  </tr>
  <tr>
    <td>Ground nut</td>
    <td>Giovanni Rovelli</td>
<td>Coffee</td>
<td><qdd</td>
  
  </tr>
<tr>
    <td>Bengal gram</td>
    <td>sdg</td>
  <td>Tea</td>
<td>dsd</td>
  </tr>
<tr>
    <td>Watermelon</td>
    <td>sdg</td>
<td>Rubber</td>
<td>wdwd</td>

  
  </tr>
<tr>
    <td>Mango</td>
    <td>sdg</td>
  <td>Cashew</td>
<td>sdadqd</td>

  </tr>
<tr>
    <td>Orange</td>
    <td>sdg</td>
<td>Oil Palm</td>
<td>wdad</td>

</table>

<h3><b>Sell your crops here</b></h3>
<p>The purpose of a national agricultural market that unites all 29 states is to remove the taxation and licensing hurdles hobbling the marketing of crops and suppressing farmer returns. But success will come only when this market also delivers five structural benefits.

One, the national market should guarantee each farmer freedom of pricing and freedom of access. The wheat farmer in Haryana should be free to sell directly to a trader in Tamil Nadu if the prices offered are better. There should be new kinds of commission agents, such as Farmer Producer Organisations and cooperatives, for better aggregation.</p>
<center><a href='http://www.kisanmandi.com/'><button background-color:red;><b>BUY OR SELL HERE...</b></button></a></center>

<h3><b>Get suggestions from an expert</b></h3>
<p>Agriculture is evolving for farmers and entrepreneurs in India. It can generate huge profits if approached with right advice and expertise. To assist you with the same, Quikconsult hosts top agriculture and floriculture experts of India on its email and live chat consultation platform. Get agricultural advice in India on crop recommendations, fertilizer advice, organic farming, seed consultation, irrigation insights, and learn about government programs related to best training and financial support within minutes!</p>
<center><a href='https://quikconsult.com/agriculture-floriculture-consultants'><button background-color:red;><b>TALK TO THE EXPERTS HERE...</b></button></a></center>

<H3>
  <b>Locate your nearest fertilizer store</b></H3>
  <P>Unable to find a shop near you, where you can buy fertilizer. Don't panic just click the button below and select your State, District and taluk to get the shop's name and address.
  The real-time information in farmers’ hands empowers them to make informed decisions to reduce their
crop expenditure by up to 20% and increase the yield by up to 15% with overall profitability going up
by a third.</P>
   <center><a href='https://www.napanta.com/fertilizer-dealer/karnataka'><button background-color:red;><b>FIND A STORE NEAR YOU...</b></button></a></center>

  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>
