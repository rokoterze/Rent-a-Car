<?php include './templates/signup-login-reset/header.php'?>
<title>Contact Us</title>
</head>

<body>
    <div id="header" class="header">
        <a href="./login.php" class="contact">Log In</a>
        <a href="./contact.php" class="contact">Contact Us</a>
        <a href="./rokoterze.php" class="contact">About Me</a>
        <a href="./dokumentacija.php" class="contact">Documentation</a>
    </div>
    
    <div class="contact-form">
        <h2>Contact Us</h2><hr>
        <form action="./include/signup-login-reset/contact/contact.inc.php" method="post" name="contactform" id="contactform">

            <input type="text" name="senderEmail" id="senderEmail" placeholder=" *Your Email.." oninput="contactEmailValidation();"><br>
            <span id="emailspan" ></span><br>

            <input type="text" name="subject" id="subject" placeholder=" *Subject.." onblur= isSubjectEmpty();><br>

            <textarea name="message" id="message" placeholder=" *Your message here.." onblur=isMessageEmpty();></textarea>

            <button type="submit" name="submit" id="submit">Send</button> 
        </form>
        
        <hr>
        <p>Back to <a href="./signup.php">Sign Up</a> or <a href="./login.php">Log In</a></p>
       
        <?php include './include/signup-login-reset/contact/contact-errors.php'?>
    </div>
    <br>
<?php include './templates/signup-login-reset/footer.php'?>