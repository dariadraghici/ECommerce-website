<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewreport" content="width=devicewidth, initial-scale=1.0">
    <title>ART-ISAN</title>

    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <script defer src="./index.js"></script>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:"poppins",sans-serif;
        }
        body{
            background-color: #c9d6ff;
            background: linear-gradient(to right, #ffe9d2, #ffdab0, #ffc37e);
        }
        .container{
            background:#fff;
            width:450px;
            padding:1.5rem;
            margin:300px auto;
            border-radius:10px;
            box-shadow:0 20px 35px rgba(0,0,1,0.9);
            display: block;
            position: relative;
            justify-content: center;
            align-items: center;
        }
        .container .form-title{
            font-size: 2.5rem;
            font-weight:bold;
            text-align:center;
            padding:1.3rem;
            margin-bottom:0.4rem;
        }

        form{
            margin:0 2rem;
        }
        input{
            color:inherit;
            width:100%;
            background-color:transparent;
            border:none;
            border-bottom:1px solid #757575;
            padding-left:1.5rem;
            font-size:15px;
        }
        .input-group{
            padding:1% 0;
            position:relative;

        }
        .input-group i{
            position:absolute;
            color:black;
        }
        input:focus{
            background-color: transparent;
            outline:transparent;
            border-bottom:2px solid hsl(327,90%,28%);
        }
        input::placeholder{
            color:transparent;
        }
        label{
            color:#757575;
            position:relative;
            left:1.2em;
            top:-1.3em;
            cursor:auto;
            transition:0.3s ease all;
        }
        input:focus~label,input:not(:placeholder-shown)~label{
            top:-3em;
            color:hsl(327,90%,28%);
            font-size:15px;
        }
        .recover{
            text-align:right;
            font-size:1rem;
            margin-bottom:1rem;

        }
        .recover a{
            text-decoration:none;
            color:rgb(125,125,235);
        }
        .recover a:hover{
            color:blue;
            text-decoration:underline;
        }
        .btn{
            font-size:1.1rem;
            padding:8px 0;
            border-radius:5px;
            outline:none;
            border:none;
            width:100%;
            background:rgb(125,125,235);
            color:white;
            cursor:pointer;
            transition:0.9s;
        }
        .btn:hover{
            background:#07001f;
        }
        .or{
            font-size:1.1rem;
            margin-top:0.5rem;
            text-align:center;
        }
        .icons{
            text-align:center;
        }
        .icons i{
            color:rgb(125,125,235);
            padding:0.8rem 1.5rem;
            border-radius:10px;
            font-size:1.5rem;
            cursor:pointer;
            border:2px solid #dfe9f5;
            margin:0 15px;
            transition:1s;
        }
        .icons i:hover{
            background:#07001f;
            font-size:1.6rem;
            border:2px solid rgb(125,125,235);
        }
        .links{
            display:flex;
            justify-content:space-around;
            padding:0 4rem;
            margin-top:0.9rem;
            font-weight:bold;
        }
        button{
            color:rgb(125,125,235);
            border:none;
            background-color:transparent;
            font-size:1rem;
            font-weight:bold;
            cursor: pointer;
            padding:7px;
        }
        
        button:hover{
            text-decoration:underline;
            color:blue;
        }
        
    </style>
</head>
<body>
    
    <header>
        <input type="checkbox" name="" id="toggler"> <!--caseta de validare comutator-->
        <label for="toggler" class="fas fa-bars"></label> <!--comutator-->
    
        <a href="#" class="logo">ART<span>-</span>ISAN<span></a> <!--creare logo-->
            <!--creare bara de navigare-->
            <nav class="navbar">
                    <a href="index.html">Home</a>
                    <a href="about.html">About</a>
                    <a href="products.html">Products</a>
                    <a href="review.html">Community</a>
                    <a href="contact.html">Contact</a>
        </nav>
    
        <!--crearea unei clase de pictograme-->
        <div class="icons">
            <a href="favorites.html" class="fas fa-heart"></a>
            <a href="cart.html" class="fas fa-shopping-cart"></a>
        </div>
    
    </header>


    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <p class="or">
        ----------or--------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
          ----------or--------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>
    <section class="footer">
    
        <div class="credit"> created by <span> Drăghici Daria-Ioana</span> all rights reserved</div>
    
    </section>

    <script src="script.js"></script>

    <script>
        const signUpButton=document.getElementById('signUpButton');
        const signInButton=document.getElementById('signInButton');
        const signInForm=document.getElementById('signIn');
        const signUpForm=document.getElementById('signup');

        signUpButton.addEventListener('click',function(){
            signInForm.style.display="none";
            signUpForm.style.display="block";
        })
        signInButton.addEventListener('click', function(){
            signInForm.style.display="block";
            signUpForm.style.display="none";
        })
    </script>
</body>
</html>