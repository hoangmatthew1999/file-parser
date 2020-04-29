<style>
    * {
    box-sizing: border-box;
  }
/*BODY TEXT*/
  body {
    font-family:Georgia;
    color: #05386B;
    padding: 5px;
    background:	#a8e4a0;
    margin: 0;
  }
/* HEADER
      .header {
        padding: 30px;
        text-align: center;
        border-style: solid;
        border-width: thick;
        border-color: lightyellow;
        border-radius: 25px;
        background-image:url("https://image.shutterstock.com/image-vector/natural-forest-trees-mountains-horizon-260nw-1588730179.jpg");
      }
      .header h1 {
        font-size: 50px;
        font-weight: bold;
        color: lightyellow;
        font-family: monospace;
      } */

/*ACCOUNT CARDS*/
/* Left column */
  .leftcolumn {
    float: left;
    margin-left: 20px;
    padding: 30px;
    width: 40%;
    height: 30%;
    padding-bottom:5%;
  }

/* Right column */
  .rightcolumn {
    float: right;
    margin-right: 20px;
    padding: 30px;
    width: 40%;
    height: 30%;
  }

  .account {
    background-color: #EDF5E1;
    padding: 20px;
    margin-top: 20px;
  }
  .account a{
    float: left;
    display: block;
    background-color: #5cdb95;
    color: #EDF5E1;
    text-align: center;
    text-decoration: none;
  }

/* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

/*TOP LINK BAR*/
  .topnav {
    overflow: hidden;
    background-color: lightyellow;
  }
  .topnav2 {
    overflow: hidden;
    background-color:  #5cdb95;
  }
  .topnav a{
		float: left;
		display: block;
		color: #379683;
		text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	}
  .topnav2 a{
    float: left;
    display: block;
    color: #EDF5E1;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  /* Change color on hover */
  .topnav a:hover {
      background-color:  dodgerblue;
      color: white;
  }
  .topnav2 a:hover {
      background-color:  dodgerblue;
      color: white;
  }
  .topnav a.active {
    background-color: #4CAF50;
    color: white;
  }

/*BEGIN: SIDE MENU STUFF*/
  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #8FBC8F;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }
  .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: lightyellow;
    display: block;
    transition: 0.3s;
  }
  .sidenav a:hover {
    color: #818181;
  }
  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }
  #main {
    transition: margin-left .5s;
    padding: 16px;
  }
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
/*END: SIDE MENU STUFF*/

/*BEGIN: Header*/
  .header {
    overflow: hidden;
    background-color: #f1f1f1;
    border-width: thick;
    border-top: none;
    padding: 50px 20px;
    background-image:url("https://image.shutterstock.com/image-vector/natural-forest-trees-mountains-horizon-260nw-1588730179.jpg");
  }
  .header a {
    float: center;
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
    border-radius: 4px;

  }
  .header a.logo {
    font-size: 50px;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
    position:relative;
    left: 30%;
  }
  .header a:hover {
    background-color: #ddd;
    color: black;
  }
  .header a.active {
    background-color: dodgerblue;
    color: white;
    margin-top: 0px;
  }
  .header-right {
    float: right;
  }
  @media screen and (max-width: 500px) {
    .header a {
      float: none;
      display: block;
      text-align: left;
    }
    .header-right {
      float: none;
    }
  }
/*END: Header*/

/*BEGIN: SECTION*/
  .section{
    padding-bottom: 5px;
    margin-left: 5%;
    margin-right: 5%;
    background: #FFFFE0;
  }
/*END: SECTION*/

/*BEGIN: IMAGE*/
  img{
    height: 290px;
    width: 330px;
    margin-left: 100px;
    opacity: .87;
  }

  img:hover {
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
  }
/*END: IMAGE*/

/*BEGIN: TEXT STUFF*/
  h1 {
    text-align: center;
    letter-spacing: 3px;
    font-size: 25px;
    text-transform: uppercase;
    color: #1e90ff;
  }

h2{
      text-align: center;
      letter-spacing: 3px;
      font-size: 30px;
      text-transform: uppercase;
      color:  #5cdb95;
}

  p{
    text-align: justify;
    letter-spacing: 3px;
    color: #004242;
    text-decoration-line: black;
  }
/*END: TEXT STUFF*/

/*BEGIN: Buttons*/
  .button {
    background-color: #fffafa;
    border-radius: 0%;
    color: #b0e0e6;
    padding: 10px 25px;
    text-align: center;
    text-decoration:none;
    display:block;
    font-size: 25px;
    margin: 2px 1px;
    cursor: pointer;
    font-family:times;
  }
  .button1 {
    background-color: #4CAF50;
    color: #fffafa;
    border: 3px double #4CAF50;
  }
  .button1:hover {
    background-color: #FFFFE0;
    color: #1e90ff;
  }
/*END: Buttons*/

/*BEGIN: SlideShow*/
  /* Slideshow container */
  .slideshow-container {
    position: relative;
    background: lightyellow;
  }
  /* Slides */
  .mySlides {
    display: none;
    padding: 80px;
    text-align: center;
    overflow: auto;
  }
  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -30px;
    padding: 16px;
    color: #8FBC8F;
    font-weight: bold;
    font-size: 20px;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }
  /* Position the "next button" to the right */
  .next {
    position: absolute;
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    background-color: #8FBC8F;
    color: #fffafa;
  }
  /* The dot/bullet/indicator container */
  .dot-container {
      text-align: center;
      padding: 20px;
      background: #8FBC8F;
  }
  /* The dots/bullets/indicators */
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #a8e4a0;
    border-radius: 50%;
    display: inline-block;
    transition:0.5s ease;
  }
  /* Add a background color to the active dot/circle */
  .active, .dot:hover {
    background-color: #fffafa;
  }
  /* Add an italic font style to all quotes */
  q {font-style: italic;}
  /* Add a blue color to the author */
  .author {
    text-align: center;
    color: cornflowerblue;
  }
/*END: SlideShow*/

#form
{ position: float;
 background-color: #1111111;
 height: 600px;
 width: 700px;
 margin-right: auto;
 margin-left:  auto;
 border-color: #39ac73;
 border-style: outset;

}
.form-group
{
  position: float;
}

label
{
  font-family: Ariel;
  font-size: 10px;
  color: white;
  font-size: 30px;
  color: #333;
  height: 20px;
  width: 150px;
  margin-top: 50px;
  margin-left: 100px;
  text-align: justify;
  margin-right: 0px;
  float: left;
}

input
{
  height: 20px;
  width: 300px;
  border: 1px solid #000;
  margin-top: 50px;
  margin-left: 50px;
  margin-right: 40px;
}

#submit
{
  font-family: Ariel;
  margin-left: 350px;
  width: 200px;
  height: 40px;
  font-size: 20px;
  background-color: lightgreen;
  border-color: #39ac73;
  border-style: outset;
}

</style>
