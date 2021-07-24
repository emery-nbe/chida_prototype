<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
    <link href="second.css" rel="stylesheet">
    <script src="js/action.js"></script>
</head>

<body>


    <header>
        <nav>
            <div class="nav-container">
                <div class="logo">
                    <p>Chida</p>
                    <img src="img/cheap_2_50px.png" alt="logo-image">
                </div>
                <div class="search-bar">
                    <input name="search" placeholder="Search">    
                </div>
                <div class="nav-menu">
                    <ul>
                        <li><a href="index.php"><button class="btn-nav btn-home">Accueil</button></a></li>
                        <li><a href="espace.php"><button class="btn-nav btn-person">Espace Client</button></a></li>
                        <li><button class="btn-nav btn-market">Mon Panier</button></li>
                        <li><button class="btn-nav btn-contact">Contact</button></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        
        <div class="main-container">
            <form action="controller.php" method="POST">
                
                <div class="signIn">
                    <p>Sign to Chida</p>
                    <input name="email" placeholder="your email adress" class="userdata" required>
                    <input name="password" type="password" placeholder="password" class="userdata" required>
                    <button type="submit">Se connecter</button>
                    <p id="lol"><a href="" class="newCompte" onclick="hide()">Créer un compte</a></p>
                </div>
                

                <div class="signUp">
                    <input name="email" placeholder="your email adress" class="userdata" required>
                    <input name="password" type="password" placeholder="password" class="userdata" required>
                    <button type="submit">Se connecter</button>
                </div>
            </form>
        </div>
    </main>
        
    <footer>
        <div class="footer-container">
        
        </div>
    </footer>
    
</body>
</html>