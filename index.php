<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <title>Accueil</title>
            <link rel="stylesheet" type="text/css" href="style.css"> 
            <link href="https://fonts.googleapis.com/css?family=Convergence" rel="stylesheet">   
    </head>
<body>
    <header>

    </header>
    <main>
        
            <h1>LEXIQUE HTML</h1>
            <svg>                   
                <filter id="filter">
                    <feFlood flood-color="black" flood-opacity=".6" />
                    <feComposite in2="SourceAlpha" operator="out" />
                    <feGaussianBlur stdDeviation="2"/>
                    <feOffset dx="0" dy="10" />
                    <feComposite in2="SourceAlpha" operator="in" />
                    <feMerge>
                        <feMergeNode in="SourceGraphic" />
                        <feMergeNode />
                    </feMerge>
                </filter>
            </svg>
    <h3>Les balises :</h3>
    <nav>     
        <ul>
            <li><a href="./balise_a.php"><code>&lt;a&gt;</code></a></li>
            <li><a href="./balise_body.php"><code>&lt;body&gt;</code></a></li>
            <li><a href="./balise_div.php"><code>&lt;div&gt;</code></a></li>
            <li><a href="./balise_form.php"><code>&lt;form&gt;</code></a></li>
            <li><a href="./balise_head.php"><code>&lt;head&gt;</code></a></li>
            <li><a href="./balise_input.php"><code>&lt;input&gt;</code></a></li>
            <li><a href="./balise_link.php"><code>&lt;link&gt;</code></a></li>
            <li><a href="./balise_meta.php"><code>&lt;meta&gt;</code></a></li>
            <li><a href="./balise_select.php"><code>&lt;select&gt;</code></a></li>
            <li><a href="./balise_table.php"><code>&lt;table&gt;</code></a></li>
            <li><a href="./balise_textarea.php"><code>&lt;textarea&gt;</code></a></li>
            <li><a href="./balise_title.php"><code>&lt;title&gt;</code></a></li>
        </ul> 
    </nav>
    <a class="contactus" href="./contact.php"> Nous contacter</a>
   <span> Groupe 4 &copy;</span>
</main>
</body>
</html>