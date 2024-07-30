<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    
    <style>

      #boxRight{
        width: 500px; 
        height: 500px; 
        border: 1px solid black;

        position: absolute; 
        top: 150px; 
        right: 100px;
      }

      #bigText{
        width: 300px; 
        height: 80px; 
        border: 1px solid black;

        position: absolute; 
        top: 200px; 
        left: 100px;

      }

      #change{
        width: 100px; 
        height: 30px; 
        border: 1px solid black;

        position: absolute; 
        top: 300px; 
        left: 100px;

      }

      #boxLeft{
        width: 400px; 
        height: 200px; 
        border: 1px solid black;

        position: absolute; 
        top: 400px; 
        left: 100px;

      }


      .ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        background-color: #399C2A;
        display: flex;
        align-items: center;
      }

      .ul > li > a {
        display: block;
        color: black;
        text-align: left;
        padding-top: 20px;
        padding-bottom: 20px;
        padding: 20px;
        padding-left: 80px;
        text-decoration: none;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: 20px;
      }

      .ul > li a:hover {
        background-color: #2F8123;
      }

    </style>
</head>

<body>


  <ul class="ul">
    <li><a href="#about">About</a></li>
    <li><a class="active" href="#home">Home</a></li>
    <li><a href="#news">Analysis</a></li>
    <li><a href="#contact">Setting</a></li>
    <li><a href="#profile">Profile</a></li>
  </ul>

  <div id="boxRight"></div>
  <div id="bigText"></div>
  <div id="change"></div>
  <div id="boxLeft"></div>











</body>
</html>