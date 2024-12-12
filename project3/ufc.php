<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Henry Lazo, CSC170 Project 3</title>
        <link rel="stylesheet" href="./css/style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!-- grid-container -->
        <div class="grid-container">
            <!-- header -->
            <header class="header">
                <!-- code for banner -->
                <div class="banner">
                    <div class="title-container">
                        <a href="./index.php"><h1>CSC170Wiki
                            <img src="./images/computer-logo-2.png" alt="computer logo" class="logo">
                        </h1>
                    </a>
                        <p class="subtitle">Interests of CSC170 Fall24</p>
                    </div>
                </div>
            </header>

            <!-- Nav menu in php -->
            <?php include 'inc/menu.php'; ?>

            <div class="title-header">
                <h1>Ultimate Fighting Championship (UFC)</h1>
                <div>The UFC is the largest mixed martial arts (MMA) promotion in the world, featuring the highest-level fighters across various weight classes.</div>
            </div>

            <!-- lead -->
            <div class="lead">
                <!-- add other student code -->
                <section>
                    <h2>History</h2>
                        <p>The UFC was founded in 1993 in Denver, Colorado, as a tournament to determine the most effective martial art. Over the years, it evolved into a regulated, mainstream sport with millions of fans worldwide.</p>
                        <p>It has introduced weight classes, safety measures, and a global stage for fighters to showcase their talent.</p>
                </section>
            </div>
            <!-- main -->
            <main class="main">
                <!-- add other student code -->
                <section>
                    <h2>Weight Classes</h2>
                        <p>The UFC ensures fair competition through several weight classes:</p>
                    <ul>
                        <li>Flyweight: up to 125 lbs</li>
                        <li>Bantamweight: up to 135 lbs</li>
                        <li>Featherweight: up to 145 lbs</li>
                        <li>Lightweight: up to 155 lbs</li>
                        <li>Welterweight: up to 170 lbs</li>
                        <li>Middleweight: up to 185 lbs</li>
                        <li>Light Heavyweight: up to 205 lbs</li>
                        <li>Heavyweight: up to 265 lbs</li>
                    </ul>
                    <div class="image-container">
                        <img src="./images/img2.jpg" alt="UFC Weight Classes">
                        <p class="image-description">Fighters competing in different weight categories.</p>
                    </div>
                </section>

                <h2>Major Pay-Per-View Events</h2>
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Event</th>
                                <th>Date</th>
                                <th>Main Fight</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>UFC 254</td>
                                <td>October 24, 2020</td>
                                <td>Khabib Nurmagomedov vs. Justin Gaethje</td>
                            </tr>
                            <tr>
                                <td>UFC 229</td>
                                <td>October 6, 2018</td>
                                <td>Khabib Nurmagomedov vs. Conor McGregor</td>
                            </tr>
                        </tbody>
                    </table>
                
                <section>
                    <h2>Impact on Sports</h2>
                        <p>The UFC has significantly influenced the world of sports, popularizing mixed martial arts globally. The organization has changed perceptions about combat sports, promoting safety and athleticism.</p>
                        <p>It has attracted a diverse audience, bringing in fans from various backgrounds and interests. The sport has also seen increased media coverage, with broadcasts on major networks and streaming platforms.</p>
                        <p>Additionally, the UFC has contributed to the growth of MMA as a sport at the grassroots level, with more gyms and training facilities dedicated to developing future fighters. The emphasis on fitness and martial arts has resonated with many, leading to a broader interest in combat sports.</p>
                        <p>As a result, the UFC has created a new generation of athletes and fans, further embedding MMA into mainstream culture. Popularity in the sport has also led to discussions about athlete rights and health regulations, shaping the future of MMA.</p>
                </section>
            </main>

            <!-- side  -->
            <aside class="side">
                <!-- add other student code -->
                <section>
                    <h2>Famous Fighters</h2>
                        <p>UFC has produced some of the greatest athletes in combat sports history, including:</p>
                        <ul>
                            <li><strong>Conor McGregor</strong>: The first fighter to hold two titles simultaneously.</li>
                            <li><strong>Ronda Rousey</strong>: A pioneer for women’s MMA.</li>
                            <li><strong>Jon Jones</strong>: One of the most dominant champions.</li>
                        </ul>
                    <div class="image-container">
                        <img src="./images/img3.jpg" alt="Icons of UFC history" style="max-width: 300px; height: auto;">
                        <p class="image-description">Icons of UFC history.</p>
                    </div>
                </section>
            </aside>
            <!-- footer -->
            <footer class="footer">
                <!-- add other student code -->
                <h2>Citations</h2>
                    <ul>
                        <li><a href="https://www.ufc.com" target="_blank">UFC Official Website</a></li>
                        <li><a href="https://en.wikipedia.org/wiki/Ultimate_Fighting_Championship" target="_blank">Wikipedia</a></li>
                    </ul>
                    <p>Henry Lazo | CSC 170 Webpage Design and Development</p>
            </footer>
        </div>
    </body>
</html>