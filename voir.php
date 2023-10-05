<?php
    if(!empty($_GET['article_id'])){
        // Récupération de l'id
        $id = $_GET['article_id'];
        // On se connecte à la base de donnée
        $connexion = mysqli_connect('localhost','root','','blog');
        // On vérifie si la connexion s'est bien passée
        if(!$connexion)
        { 
            die('Erreur de connexion à la Base de Donnée');
        }

        // On lance la requête de sélection des articles
        $req = "SELECT * FROM Article WHERE id = '$id'";

        // On exécute la requête
        $sql_result = mysqli_query($connexion, $req);
        if($sql_result){
            // On récupère les données dans un tableau associatif
            $article = mysqli_fetch_assoc($sql_result);
        }else{
            echo "OOps! Une erreur est survenue, veuillez réessayer plus tard!";
        }
    }
?>
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

        #content .article{
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 900px;
            gap: 1.5em;
        }

        #content .article .title{
            text-transform: uppercase;
            text-align: center;
        }

        #content .article img{
            width: 100%;
            margin: 0 auto;
        }

        #content .article p{
            text-align: justify;
        }

        #content .article .description{
            padding: 10px;
            font-size: 1.2em;
            font-weight: 900;
            color: #333;
        }

        #acontent{
            font-size: 1.2em;
            font-weight: 400;
            display: flex;
            flex-direction: column;
            gap: .3em;
        }

        #content .article .details{
            width: 100%;
            display: flex;
            padding: 5px;
            justify-content: space-between;
            font-weight: 700;
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
            <?php if(!empty($article)):?>
            <div class="article">
                <h3 class="title">Mon Article 1</h3>
                <img src="https://media.istockphoto.com/id/1319623001/photo/caesar-salad-with-crispy-bread-and-bacon-healthy-food-style.webp?s=1024x1024&w=is&k=20&c=gvTJfggHVKAWWCTdcEHIziVAfQmZJfgibmokDtLdiCc="
                    alt="">
                <div class="description">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, libero? Ipsa magnam, eaque
                        consectetur fuga esse accusamus voluptatem, laudantium quidem nulla nihil maiores iure
                        veniam, amet ratione facere expedita. Perspiciatis.</p>
                </div>
                <hr>
                <div id="acontent">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vitae nemo quod voluptatem ex nesciunt excepturi et cupiditate quos optio eos facere eligendi amet est ad nulla nisi modi numquam, reprehenderit tenetur provident sit architecto illo assumenda? Excepturi velit iste facere aspernatur libero est natus, nesciunt sit incidunt porro accusantium.</p>
                    <p>Esse, repellat voluptates. Expedita corrupti, modi quaerat quisquam magnam itaque cum. Ut impedit unde minus officia delectus aliquam perferendis amet ducimus praesentium fugiat deserunt nemo suscipit asperiores esse aliquid, veniam autem, officiis itaque enim rem necessitatibus. Illo, esse. Maiores modi non animi officiis quos nam blanditiis libero eveniet temporibus voluptates.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam delectus error autem debitis placeat porro reiciendis iste optio aperiam corporis reprehenderit, ad aspernatur, fuga obcaecati. Labore id quasi veritatis esse libero, a placeat, ducimus suscipit, iure vero quod asperiores illo error. Voluptate, sunt pariatur consectetur cumque ipsam molestiae? Ullam, dignissimos quaerat? Laboriosam in quisquam quod voluptatum facere debitis, corporis excepturi quo maxime vitae, placeat cum veritatis exercitationem nihil quia impedit? Enim, dolore.</p>
                    <p>Suscipit laborum aliquam nulla laboriosam tenetur, minus velit corrupti magni nesciunt repellendus, rerum perspiciatis vel repudiandae. Earum odit ipsum natus obcaecati facere reiciendis mollitia porro, sequi tempore similique enim incidunt delectus consequuntur quidem reprehenderit ipsa placeat. Omnis, magni. Vero, corrupti odio illo repudiandae quia temporibus vitae dolores consectetur beatae recusandae? Itaque, dolor voluptate in quo obcaecati quaerat voluptatibus quae ducimus, quidem laudantium, officiis accusamus sapiente illum doloremque fugit inventore labore porro assumenda!</p>
                    <p>Explicabo eius ad quidem! Esse nulla incidunt, doloribus animi ut facere voluptatem sit deleniti repellat quo. Ducimus harum cumque reiciendis exercitationem ad porro nemo itaque pariatur a earum! Nostrum corporis tenetur, expedita sunt a, quo vel aperiam earum iusto iste minus inventore facilis accusamus. Recusandae ex sequi mollitia itaque accusantium ea repellendus velit consequatur fugit amet fuga suscipit, hic, aliquid, cumque odit eum omnis. Ratione aliquid possimus, exercitationem magnam id nostrum praesentium.</p>
                </div>
                <div class="details">
                    <p class="name">Ecrit par : Brou fabien</p>
                    <p class="date">Le Mardi 10 0ctobre 2023</p>
                </div>
            </div>
            <?php else:?>
                <div class="empty">
                    <p>Aucun article</p>
                </div>
            <?php endif; ?>
        </div>
    </main>
</body>

</html>