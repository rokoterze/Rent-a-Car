<?php include './templates/signup-login-reset/header.php'?>
<title>About Me</title>
</head>

<body>
    <div id="header" class="header">
        <a href="./login.php" class="contact">Log In</a>
        <a href="./contact.php" class="contact">Contact Us</a>
        <a href="./rokoterze.php" class="contact">About Me</a>
        <a href="./dokumentacija.php" class="contact">Documentation</a>
    </div>
       
    <div id = "imgdiv">
        <br>
        <img src="./resources//img/profile.jpg" alt="profile" id="profile">
    </div>
    
    <div id = "info"  class="authorclass">
        <br>
        <label for="author" class="authorlabel">Ime i prezime</label><br>
        <input type="text" disabled value="Roko Terze" class ="authorinput"><br>

        <label for="author" class="authorlabel">OIB</label><br>
        <input type="text" disabled value="93107239252" class ="authorinput"><br>

        <label for="author" class="authorlabel">Email</label><br>
        <input type="text" disabled value="roko.terze@aspira.hr" class ="authorinput"><br>

    </div>
    <br>
<?php include './templates/signup-login-reset/footer.php'?>