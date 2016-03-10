<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
  <style>
    body {
      background: url("images/photo_bg.jpg") no-repeat center center fixed;
      background-size: cover;
      font-size: 16px;
      font-family: 'Lato', sans-serif;
      font-weight: 300;
      margin: 0;
      color: #666;
    }
    /* Typography*/

    #title {
      font-family: 'Roboto Slab', serif;
      font-weight: 300;
      font-size: 3.2em;
      color: white;
      text-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
      margin: 0 auto;
      padding-top: 180px;
      max-width: 300px;
      text-align: center;
      position: relative;
      top: 0px;
    }

    #title span {
      font-weight: 600;
    }

    #partOne{
      display: block;
      color:grey;
      text-align: center;

    }
  </style>

  <title>Landing page </title>
</head>

<body>

  <div>
    <h1 id="title">Welcome to
      <span>eGrid</span>
      <h1>
        <br>
        <div id = partOne>
          <h2> You are a member of us now!!</h2>
          <br> Please check your registration information
          <br>
          <br> Your name is:
          <?php echo $_POST["username"]; ?>
            <br> Your email is :
            <?php echo $_POST["email"]; ?>
              <br> Your password is:
              <?php echo $_POST["password"]; ?>
                <br>
                <br>
                <br>
        </div>
  </div>
</body>

</html>
