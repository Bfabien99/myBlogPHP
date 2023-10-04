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
            justify-content: space-between;
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

        #content .btn{
            text-decoration: none;
            padding: 10px;
            color: #fff;
            background-color: #3120cc;
            border-radius: 5px;
        }

        #content .btn:hover{
            background-color: #2718b6;
        }

        #content table{
            width: 100%;
            background-color: #fff;
        }

        #content table{
            text-align: center;
            border-collapse: collapse;
        }

        #content table th{
            border: 1px solid rgb(179, 179, 179);
        }

        #content table td{
            padding: 5px;
            width: 120px;
        }

        #content table tbody td .action{
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        #content table tbody tr:nth-child(odd){
            background-color: #cccccc;
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
        <a class="logo" href="">myBlog Dashboard</a>
        <ul>
            <li><a href="./dashboard.php">Accueil</a></li>
            <li><a href="./articles.php">Articles</a></li>
            <li><a href="./profil.php">Profil</a></li>
            <li><a href="../index.php">myBlog</a></li>
        </ul>
    </header>
    <main>
        <div id="content">
            <h3>Mes Articles</h3>
            <a href="ajout.php" class="btn">Ajouter un article</a>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Categorie</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Un titre par défaut</td>
                        <td><img src="https://plus.unsplash.com/premium_photo-1695925076117-69d7051e3585?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzM3x8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=900&q=60" alt="" width="100px" height="100px"></td>
                        <td>Une petite description en quelques lignes</td>
                        <td>Cuisine</td>
                        <td>10/10/2023</td>
                        <td><div class="action"><a href="modifier.php">Editer</a><a href="supprimer.php" onclick="Delete(event)">Supprimer</a></div></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Un titre par défaut</td>
                        <td><img src="https://plus.unsplash.com/premium_photo-1695925076117-69d7051e3585?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzM3x8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=900&q=60" alt="" width="100px" height="100px"></td>
                        <td>Une petite description en quelques lignes</td>
                        <td>Cuisine</td>
                        <td>10/10/2023</td>
                        <td><div class="action"><a href="modifier.php">Editer</a><a href="supprimer.php" onclick="Delete(event)">Supprimer</a></div></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Un titre par défaut</td>
                        <td><img src="https://plus.unsplash.com/premium_photo-1695925076117-69d7051e3585?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzM3x8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=900&q=60" alt="" width="100px" height="100px"></td>
                        <td>Une petite description en quelques lignes</td>
                        <td>Cuisine</td>
                        <td>10/10/2023</td>
                        <td><div class="action"><a href="modifier.php">Editer</a><a href="supprimer.php" onclick="Delete(event)">Supprimer</a></div></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
<script>
    function Delete(event){
        event.preventDefault();
        let url = event.target.href;
        
        if(confirm('Voulez vous vraiment supprimer l\'article? ')){
            window.location.href = url;
        }
    }
</script>
</html>