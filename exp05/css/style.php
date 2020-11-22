<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>


*{

margin: 0;
padding: 0;

}

.header{
background: rgba(0, 0, 170, 0.5);
height: 100vh;
}

.video-background
{

position: absolute;
right: 0;
bottom: 0;
min-width: 100%;
min-height: 100%;
width: auto;
height: auto;
z-index: -1;
}


@media (min-aspect-ratio:16/9)

{

.video-background{

  width: 100%;
  height: auto;
}
}

@media (max-aspect-ratio:16/9)

{

.video-background{

  width: auto;
  height: 100%;
}
}

.btnr-log{
position: absolute;
text-align: center;
top: 50px;
left: 1100px;
}

.btnr-abt{
position: absolute;
text-align: center;
top: 50px;
left: 1250px;
}


.logo{

margin: 18px;
height: 100px;
}



.welcomemsg{

position: relative;
text-align: center;
font-family: monospace;
color: #fff;
top: 150px;
}

.welcomemsg h1
{

font-size: 40px;
font-weight: 100;
letter-spacing: 2px;
margin-bottom: 30px;
}

.mainbtn {
font-size: 45px;
color: #fff;
margin: 2px;
padding: 7px 22px;
text-decoration: none;
border: none;
outline: 0;
display: inline-block;
color: white;
background-color: #979fcb;
text-align: center;
width: 45%;
border-radius: 04px;
text-decoration: none;
}

.btn {
border: none;
outline: 0;
display: inline-block;
padding: 7px 22px;
color: white;
background-color: #979fcb;
text-align: center;
width: 05%;
border-radius: 04px;
text-decoration: none;
}

.btn:hover
{

background:  #1D8A80;
}

.logcenter {
margin: 0;
position: absolute;
top: 50%;
left: 50%;
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
}

.logcenterbutton {
margin: 0;
position: absolute;
top: 110%;
left: 60%;
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
}

button {   
     background-color: #979fcb;   
      width: 50%;  
      color: white;   
      padding: 15px;   
      margin: 10px 0px;   
      border: none;   
      cursor: pointer;
      position: center;   
       }   
form {   
      border: 0px solid #f1f1f1;   
    }   
input[type=text], 
input[type=password] 
{   
      width: auto;   
      margin: 8px 0;  
      padding: 12px 20px;   
      display: inline-block;   
      border: 2px solid #979fcb;   
      box-sizing: border-box;   
  }  
button:hover {   
      opacity: 0.7;   
  }   
   
.logcontainer {   
      padding: 25px;   
      background-color: white;
      border: 2px solid white;
    border-radius: 25px;
  }

html {
box-sizing: border-box;
}

*, *:before, *:after {
box-sizing: inherit;
}

.column {
float: left;
width: 33.3%;
margin-bottom: 16px;
padding: 0 8px;
}

.btncenter {
border: none;
outline: 0;
display: inline-block;
padding: 15px;
color: white;
background-color: #979fcb;
text-align: center;
cursor: pointer;
width: 15%;
border-radius: 06px;
position: absolute;
top: 115%;
left: 50%;
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
}



.about-section {
size: 45px;
padding: 50px;
text-align: center;

color: black;
}

.header.about-section h1{
te
}

.container {

padding: 20px;   
background-color: white;
border: 2px solid white;
border-radius: 25px;
}

.container::after, .row::after {
content: "";
clear: both;
display: table;
}

.title {
color: #979fcb;
}

.cbutton {
border: none;
outline: 0;
display: inline-block;
padding: 8px;
color: white;
background-color: #979fcb;
text-align: center;
cursor: pointer;
width: 100%;
border-radius: 04px;
}

.cbutton:hover {
background-color: #979fcb;
}

@media screen and (max-width: 650px) {
.column {
  width: 100%;
  display: block;
}
}

/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
width: 100%; /* Full width */
padding: 12px; /* Some padding */  
border: 1px solid #ccc; /* Gray border */
border-radius: 4px; /* Rounded borders */
box-sizing: border-box; /* Make sure that padding and width stays in place */
margin-top: 6px; /* Add a top margin */
margin-bottom: 16px; /* Bottom margin */
resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
background-color: #4CAF50;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
border-radius: 5px;
background-color: #f2f2f2;
padding: 20px;
}




</style>


</head>

<body>
  
</body>
</html>