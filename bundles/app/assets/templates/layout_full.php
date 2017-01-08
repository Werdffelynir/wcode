<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all"
          rel="stylesheet">
    <title>PHPixie 3</title>

    <link rel="stylesheet" href="bundles/app/css/fontello.css">
    <link rel="stylesheet" href="bundles/app/css/grid.css">
    <link rel="stylesheet" href="bundles/app/css/main.css">
    <script src="bundles/app/js/lib/ns.application.js" data-init="bundles/app/js/app/init.js"></script>

</head>
<body>

<div id="page">

    <div id="navigation">
        <section class="menuinline table">
            <div data-block="menu">
                <ul>
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">JavaScript</a></li>
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">Python</a></li>
                    <li><a href="#">C#</a></li>
                    <li><a href="#">GNU/Linux</a></li>
                    <li><a href="#">SQL</a></li>
                    <li><a href="#">Common</a></li>
                    <li><a href="#">Private</a></li>
                </ul>
            </div>
            <div data-block="right" class="text_right">
                <ul>
                    <li><a href="#">JSRun</a></li>
                    <li><a href="#">CSSGrid</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
        </section>

        <section class="menuinline table">
            <div data-block="search">
                <form name="formsearch" action="">
                    <div class="table">
                        <div><i class="icon-search"></i></div>
                        <div><input name="search" type="text" placeholder="Search..."></div>
                    </div>
                </form>
            </div>
            <div data-block="admin" class="text_right">
                <ul id="menu-admin">
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Snippet</a></li>
                </ul>
            </div>
        </section>
    </div>

    <div id="wrapper" class="table">
        <div id="sidebar" class="valign_top">
            <ul id="menu-category">
                <li><a href="#">Lorem ipsum dolor sit</a></li>
                <li><a href="#">JavaScript</a></li>
                <li><a href="#">HTML nesciunt officiis</a></li>
                <li><a href="#">CSS consectetur adipisicing</a></li>
                <li><a href="#">Python</a></li>
                <li><a href="#">adipisicing C#</a></li>
                <li><a href="#">GNU/ adipisicing Linux</a></li>
                <li><a href="#">SQL</a></li>
                <li><a href="#">Aliquam aliquid asperiores</a></li>
                <li><a href="#">Java asperiores Script</a></li>
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSadipisicing Zipisicing</a></li>
                <li><a href="#">Python</a></li>
                <li><a href="#">C#</a></li>
                <li><a href="#">GNU/Linux</a></li>
                <li><a href="#">SQL Labore ZZ Labore</a></li>
                <li><a href="#">Common suscipit ullam velit</a></li>
                <li><a href="#">Private</a></li>
            </ul>

        </div>
        <div id="content" class="valign_top">
            <div id="snippets-list">

                <?php for ($i = 25; $i; --$i): ?>
                    <div class="snippet-item" data-id="">
                        <div class="tbl">
                            <div class="tbl_cell si-preview"><i class="icon-code"></i></div>
                            <div class="tbl_cell si-title">
                                <p><a href="#">Snippet title name [<?=$i?>]</a></p>
                                <p style="font-size: 90%">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus, dolore eligendi est illum ipsa nobis saepe sunt velit? Ad aliquid cum dolore eligendi inventore ipsa neque non quasi totam.</p>

                            </div>
                            <div class="tbl_cell si-vote">
                                <div class="table">
                                    <p>+10</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

            </div>
        </div>
    </div>

    <footer>
        <p>Snippet-code 2014-2017</p>
    </footer>

</div>

</body>
</html>
