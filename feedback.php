
<!DOCTYPE html>
<html>
<head>
    <title>THE Venturer</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    <link type="text/css" rel="stylesheet" href="css/main.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">THE Venturer</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.html">Home</a></li>
            <li class="active"><a href="#">Feedback</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="login.html">Login</a></li>
        </ul>
    </div>
</nav>


<div class="cont" style="padding: 20px 30px 10px 30px;">
    <div class="row">
        <form class="col s12" action="contact.php" method="post">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate" name="firstname">
                    <label for="icon_prefix">First Name</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate" name="lasttname">
                    <label for="icon_prefix">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate" name="email">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" type="tel" class="validate" name="phone">
                    <label for="icon_telephone">Telephone</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
                    <label for="textarea1">Leave your Feedback </label>
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</div>


<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">With Love</h5>
                <p class="grey-text text-lighten-4">This website is made with love and care </p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Follow us on </h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/login/">Facebook</a></li>
                    <li><a class="grey-text text-lighten-3" href="https://twitter.com/login?lang=en">Twitter</a></li>
                    <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            &copy Design by TEJA
        </div>
    </div>
</footer>
</body>
</html>