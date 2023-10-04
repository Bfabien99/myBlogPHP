<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Lato;
        }

        body {
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            background: url('https://images.unsplash.com/photo-1604147706283-d7119b5b822c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2487&q=80') no-repeat center/cover;
        }

        header {
            display: flex;
            padding: 20px 30px;
            background-color: #261c85;
            justify-content: space-evenly;
            gap: 2em;
            align-items: center;
            color: #fff
        }

        header a {
            text-decoration: none;
            color: #fff
        }

        header .logo {
            padding: 10px;
            border: 1px solid #fff;
            font-size: 1.8em;
        }

        header .logo:hover {
            background-color: #fff;
            color: #261c85;
            transition: all .2s ease-in-out;
        }

        header ul {
            display: flex;
            justify-content: space-evenly;
            gap: 1em;
            list-style: none;
            align-items: center;
            flex-grow: 1;
        }

        header ul li {
            min-width: 100px;
            padding: 5px;
        }

        header ul li a {
            font-size: 1.1em;
        }

        header ul .inscription {
            color: #261c85;
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
        }

        header ul .inscription:hover {
            padding: 12px;
            transition: all .2s ease-in-out;
        }

        header ul input {
            min-height: 30px;
            padding: 5px 10px;
            outline: none;
            border: none;
            border-radius: 5px;
        }

        main {
            flex-grow: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2em;
            width: 100%;
            max-width: 1200px;
        }

        #content form {
            width: 100%;
            max-width: 500px;
            display: flex;
            flex-direction: column;
            gap: 1.5em;
        }

        #content form .group {
            display: flex;
            flex-direction: column;
        }
        #content form label {
            color: #261c85;
            width: fit-content;
        }
        #content form input{
            border: none;
            outline: none;
            border: 1px solid #d4d4d4;
            padding: 10px;
            resize: none;
        }
        #content form input[type='submit']{
            cursor: pointer;
        }
        #content form input[type='submit'] {
            width: 100%;
            max-width: fit-content;
            padding: 10px;
            border-radius: 5px;
            margin: 0 auto;
            background-color: #261c85;
            color: #fff;
            text-align: center;
        }
        #content form input[type='submit']:hover {
            background-color: #3f2fce;
            border: 1px solid #3f2fce;
        }

        @media screen and (max-width: 930px) {
            header {
                flex-direction: column;
            }
        }

        @media screen and (max-width: 730px) {
            ul {
                flex-direction: column;
            }

            header ul form,
            input {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <header>
        <a class="logo" href="">myBlog</a>
        <ul>
            <li><a href="./">Accueil</a></li>
            <li><a href="">Catégories</a></li>
            <li><a href="connexion.php">Connexion</a></li>
            <form action="" method="post">
                <input type="search" name="search" id="search" placeholder="rechercher">
            </form>
            <li><a href="inscription.php" class="inscription">Inscription</a></li>
        </ul>
    </header>
    <main>
        <div id="content">
            <h3>Connexion</h3>
            <form action="./connecter/index.php" method="">
                <div class="group">
                    <label for="email">Email</label>
                    <input type="text" name="" id="email" placeholder="johnDoe@ex.ci">
                </div>
                <div class="group">
                    <label for="password">Mot de passe</label>
                    <input type="text" name="" id="password" placeholder="mot de passe">
                </div>
                <input type="submit" value="Se connecter">
            </form>
        </div>
    </main>
</body>

</html>