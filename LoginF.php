<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> Login/Signup</title>
        <link rel="stylesheet" href="css/LoginF.css">
    </head>
    <body>
       <!--HTML CODE-->
    <div class="wrapper">
     <div class="container">
       <div class="sign-up-container">
         <form action="signupcode.php" method="POST"> 
           <h1>Create Account</h1>
           <!--adding Social Links-->
           <div class="social-links">
             <div>
               <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
             </div>
             <div>
               <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
             </div>
             <div>
               <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
             </div>
           </div>
           <span>or use your email for registration</span>
           <input type="text" name="name" placeholder="Name" required>
           <input type="email" name="email" placeholder="Email" required>
           <input type="password" name="password" placeholder="Password" required>
           <input type="password" name="cnf_password" placeholder="Re-Enter Password" required>
           <button name="s_btn" class="form_btn">Sign Up</button>
         </form>
       </div>


       <!--makeing of login form-->
       <div class="sign-in-container">
         <form action="logincode.php" method="POST">
           <h1>Login</h1>
           <!--add social links-->
           <div class="social-links">
             <div>
               <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
             </div>
             <div>
               <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
             </div>
             <div>
               <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
             </div>
           </div>
           <span>or use your account</span>
           <input type="email" name="mail" placeholder="Email" required>
           <input type="password" name="pword" placeholder="Password" required>
           <button type="submit" name="login_btn" class="form_btn">Log In</button>
         </form>
       </div>
       <div class="overlay-container">
         <div class="overlay-left">
           <h1>Welcome Back</h1>
           <p>To keep connected with us please login with your personal info</p>
           <button id="signIn" class="overlay_btn">Log In</button>
         </div>
         <div class="overlay-right">
           <h1>Join Us</h1>
           <p>Enter your personal details and start journey with us</p>
           <button id="signUp" class="overlay_btn">Sign Up</button>
         </div>
       </div>
     </div>
   </div>
    <!--Adding Javascript Code-->
    <script>
                  const signUpBtn = document.getElementById("signUp");
            const signInBtn = document.getElementById("signIn");
            const container = document.querySelector(".container");

            signUpBtn.addEventListener("click",() =>{
                container.classList.add("right-panel-active");

            })
            signInBtn.addEventListener("click",() =>{
                container.classList.remove("right-panel-active")
            })
    </script>
   </body>
   </html>
