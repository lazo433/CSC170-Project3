<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Henry Lazo, CSC170 Project 3</title>
        <link rel="stylesheet" href="./css/style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Explore the interests of students from CSC170 Fall24. Learn about topics that
            that range from sports like soccer and mixed martial arts to video games and biocomputing.">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="./inc/slideshow.js"></script>
    </head>
    <body class="slideshow-page">
        <!-- grid-container -->
        <div class="grid-container">
         <!-- note: doesn't follow the same layout as others; doesn't have aside secontion -->
            <!-- header -->
            <header class="header">
                <!-- code for banner -->
                <div class="banner">
                    <div class="title-container">
                        <a href="./index.php">
                            <h1>CSC170Wiki
                                <img src="./images/computer-logo-2.png" alt="Computer logo" class="logo">
                            </h1>
                        </a>
                        <p class="subtitle">Interests of CSC170 Fall24</p>
                    </div>
                    
                </div>
            </header>

            <!-- Nav menu in php -->
            <?php include 'inc/menu.php'; ?>

            <div class="slideshow-container">
            <!-- Example images for the slideshow -->
                <img src="./images/champions_league_trophy.jpg" alt="Slide 1" class="slide">
                <img src="./images/organoid.jpg" alt="Slide 2" class="slide">
                <img src="./images/img3.jpg" alt="Slide 3" class="slide">
                <img src="./images/lislogo.jpeg" alt="Slide 4" class="slide">
            </div>

            <!-- main -->
            <main class="main">
                <!-- code -->
                <div class="subpage">
                    <section>
                        <h2>Champions League</h2>
                        <p>The UEFA Champions League (abbreviated as UCL) is an annual club association football competition organized by the Union of European Football Associations (UEFA) that is contested by top-division European clubs. The competition begins with a round-robin league phase to qualify for the double-legged knockout rounds and a single-leg final. It is the most-watched club competition in the world and the third most-watched football competition overall, behind only the UEFA European Championship and the FIFA World Cup. It is one of the most prestigious football tournaments in the world and the most prestigious club competition in European football, played by the national league champions (and, for some nations, one or more runners-up) of their national associations.</p>
                        <a href="./champions-league.php">Read more about Champions League > </a>
                    </section>
                    <img src="./images/UEFA_Champions_League.svg.png" alt="UEFA Champions League Logo" class="subpage-img">

                </div>
                <div class="subpage">
                    <section>
                        <h2>Life is Strange</h2>
                        <p> Life is Strange refers to the singular title released in 2015, but also to the entire franchise of games that came afterward. Most of the content on this webpage will focus on the first Life is Strange game, but there will be mentions of consequent games as well. </p>
                        <a href="./life-is-strange.php">Read more about Life is Strange > </a>
                    </section>
                    <!-- img -->
                    <img src="images/lislogo.jpeg" alt="Life is Strange's Logo" class="subpage-img">                    
                </div>
                <div class="subpage">
                    <section>
                        <h2>Organoid Intelligence: A New Era in Biocomputing</h2>
                        <p>Organoid Intelligence (OI) represents a revolutionary new frontier in biocomputing, where biological brain-like structures, called organoids, are harnessed to perform computational tasks in a way that mimics the human brain. The field builds on the ability to cultivate 3D brain organoids from human stem cells, a development that has profound implications for both computing and neuroscience. While traditional silicon-based computers process information sequentially, the brain processes it in parallel and operates far more efficiently, requiring less energy to perform complex tasks.</p>
                        <a href="./organoid-intel.php">Read more about organiod intelligence: a new era in biocomputing > </a>
                    </section>
                    <!-- img -->
                    <img src="images/first.png" alt="Connection between brain and machine" class="subpage-img">
                </div>
                <div class="subpage">
                    <section>
                        <h2>Ultimate Fighting Championship (UFC)</h2>
                        <p>The UFC is the largest mixed martial arts (MMA) promotion in the world, featuring the highest-level fighters across various weight classes. The UFC was founded in 1993 in Denver, Colorado, as a tournament to determine the most effective martial art. Over the years, it evolved into a regulated, mainstream sport with millions of fans worldwide. It has introduced weight classes, safety measures, and a global stage for fighters to showcase their talent.</p>
                        <a href="./ufc.php">Read more about ultimate fighting championship (UFC) > </a>
                    </section>
                    <!-- img -->
                     <img src="./images/ufc-logo.jpg" alt="Ultimate Fighting Championship (UFC) logo" class="subpage-img">
                </div>

            </main>

            <!-- footer -->
            <footer class="footer">
                <!-- code -->
                <p>Henry Lazo | CSC 170 Webpage Design and Development</p>
            </footer>
        </div>
    </body>
</html>