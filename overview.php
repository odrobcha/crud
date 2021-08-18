<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of MyLittlePony cards</title>
    <link href = 'styles/styles.css ' rel="stylesheet"/>
</head>
<body>
<?php echo ' 
        <nav>
            <ul class="nav">
                 <li class="nav-item">
                    <a class="nav-link btn' . ($page == 'get' ? ' active' : "")  .' " href="index.php?page=get">Get all ponies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn'. ($page == 'find' ? ' active' : "") .' " href="index.php?page=find">Find pony</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link btn'. ($page == 'create' ? ' active' : "") .' " href="index.php?page=create">Create pony</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link btn'. ($page == 'delete' ? ' active' : "") .' " href="index.php?page=delete">Delete pony</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn'. ($page == 'update' ? ' active' : "") .' " href="index.php?page=update">Update pony</a>
                </li>
                
            </ul>
        </nav>
    ';
?>
<div class="container">
    <div class="container-inner">
        <h1>Goodcard - track your collection of MyLittlePony cards</h1>


        <br>
        <?php require 'pages/' .$page . '.php' ?>
    </div>

</div>


<script src="scripts/script.js"></script>
</body>
</html>