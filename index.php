<html>
    <head>
        <title>Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="signup.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="signUpSubmit.php" method="post" >
            <div class="form">
                
               

                <h1>Sign Up!</h1>
               
                <p>Name*</p>
                <input type="text" name="name" id="name" required>
               
                <p>Password*</p>
                <input type="password" name="password" id="password">
               
                
                <p>Email Address*</p>
                <input type="email" name="email" id="email" required>
               
                
                <p>Phone*</p>
                <input type="tel" name="phone" id="phone" required>
               
                
                <p>Street*<p>
                <input type="text" name="street" id="street" required>
               
                <label for="city">City*</label>
                <input type="text" name="city" id="city" required>
               
                <p>State*</p>
                <input type="text" name="state" id="state" size="2" required>
               
                <p>Zip*</p>
                <input type="text" name="zip" id="zip" size="5" required>
               
                
                <p>Month of Birthday*</p>
                <input type="text" name="monthBday" id="monthBday" size="2" required>
               
                <p>Day of Birthday*</p>
                <input type="text" name="dayBday" id="dayBday" size="2" required>
               
                
                <p>I would like to receive offers and updates from ComeDu-bai!</p>
                <input type="checkbox" name="subscribe" id="subscribe" checked>
               
                
                <input type="submit" value="Submit"/>
                 <a href="login.php"> Already a member?</a>
            </div>
        </form>
       
        
</html>