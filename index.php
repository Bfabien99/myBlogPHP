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

        #posted {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            justify-content: center;
            gap: 2em;
        }

        #posted .article {
            display: flex;
            flex-direction: column;
            max-width: 300px;
            box-shadow: 0px 0px 5px 1px #aaa;
            border-radius: 2px;
            background-color: #fff;
        }

        #posted .article:hover {
            transform: scale(1.1);
            box-shadow: 0px 0px 10px 2px #e1e1e1;
            transition: all .2s ease-in;
        }

        #posted .article img {
            width: 100%;
        }

        #posted .article .title {
            margin: 0 auto;
            padding: 5px;
            color: #261c85;
            font-weight: 700;
            width: fit-content;
        }

        #posted .article .title:hover {
            color: #bd6406;
            font-weight: 900;
            transition: all .2s ease-in-out;
        }

        #posted .article .description {
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 1.2em;
            text-align: justify;
        }

        #posted .article .description .date {
            font-style: italic;
            color: #bbb;
        }

        @media screen and (max-width: 930px) {
            header {
                flex-direction: column;
            }

            #posted {
                grid-template-columns: repeat(2, 1fr);
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

            #posted {
                grid-template-columns: repeat(1, 1fr);
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
            <h3>Articles postés</h3>
            <div id="posted">
                <div class="article">
                    <img src="https://media.istockphoto.com/id/1319623001/photo/caesar-salad-with-crispy-bread-and-bacon-healthy-food-style.webp?s=1024x1024&w=is&k=20&c=gvTJfggHVKAWWCTdcEHIziVAfQmZJfgibmokDtLdiCc="
                        alt="">
                    <a class="title" href="voir.php">Mon Article 1</a>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, libero? Ipsa magnam, eaque
                            consectetur fuga esse accusamus voluptatem, laudantium quidem nulla nihil maiores iure
                            veniam, amet ratione facere expedita. Perspiciatis.</p>
                        <p class="date">Mardi 10 Octobre 2023</p>
                    </div>
                </div>
                <div class="article">
                    <img src="https://media.istockphoto.com/id/1319623001/photo/caesar-salad-with-crispy-bread-and-bacon-healthy-food-style.webp?s=1024x1024&w=is&k=20&c=gvTJfggHVKAWWCTdcEHIziVAfQmZJfgibmokDtLdiCc="
                        alt="">
                    <a class="title" href="voir.php">Mon Article 1</a>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, libero? Ipsa magnam, eaque
                            consectetur fuga esse accusamus voluptatem, laudantium quidem nulla nihil maiores iure
                            veniam, amet ratione facere expedita. Perspiciatis.</p>
                        <p class="date">Mardi 10 Octobre 2023</p>
                    </div>
                </div>
                <div class="article">
                    <img src="https://media.istockphoto.com/id/1319623001/photo/caesar-salad-with-crispy-bread-and-bacon-healthy-food-style.webp?s=1024x1024&w=is&k=20&c=gvTJfggHVKAWWCTdcEHIziVAfQmZJfgibmokDtLdiCc="
                        alt="">
                    <a class="title" href="voir.php">Mon Article 1</a>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, libero? Ipsa magnam, eaque
                            consectetur fuga esse accusamus voluptatem, laudantium quidem nulla nihil maiores iure
                            veniam, amet ratione facere expedita. Perspiciatis.</p>
                        <p class="date">Mardi 10 Octobre 2023</p>
                    </div>
                </div>
                <div class="article">
                    <img src="https://media.istockphoto.com/id/1319623001/photo/caesar-salad-with-crispy-bread-and-bacon-healthy-food-style.webp?s=1024x1024&w=is&k=20&c=gvTJfggHVKAWWCTdcEHIziVAfQmZJfgibmokDtLdiCc="
                        alt="">
                    <a class="title" href="voir.php">Mon Article 1</a>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, libero? Ipsa magnam, eaque
                            consectetur fuga esse accusamus voluptatem, laudantium quidem nulla nihil maiores iure
                            veniam, amet ratione facere expedita. Perspiciatis.</p>
                        <p class="date">Mardi 10 Octobre 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>