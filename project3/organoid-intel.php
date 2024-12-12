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
                        <a href="./index.php">
                            <h1>CSC170Wiki
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
                <h1>Organoid Intelligence: A New Era in Biocomputing</h1>
            </div>

            <!-- lead -->
            <div class="lead">
                <!-- add other student code -->
                <section>
                    <img src="images/first.png" alt="Connection between brain and machine">
                    <h2>Introduction</h2>
                    <p><strong>Organoid Intelligence (OI)</strong> represents a revolutionary new frontier in biocomputing, where biological
                        brain-like structures, called organoids, are harnessed to perform computational tasks in a way that
                        <em>mimics the human brain</em>. The field builds on the ability to cultivate 3D brain organoids from human stem
                        cells, a development that has profound implications for both computing and neuroscience. While
                        traditional silicon-based computers process information sequentially, the brain processes it in parallel
                        and operates far more efficiently, requiring less energy to perform complex tasks.</p>
                    <p>Recent advances in human stem cell-derived organoids promise to replicate critical molecular and cellular
                        aspects of learning, memory, and cognition in vitro. <strong>The goal of OI is to harness the unique processing
                        capabilities of brain organoids for applications in computing, machine learning, and medical research.</strong>
                        As Smirnova et al. explain in their groundbreaking article, “We anticipate OI-based biocomputing systems
                        to allow faster decision-making, continuous learning during tasks, and greater energy and data
                        efficiency”</p>
                    <p>The significance of OI extends far beyond its computational potential. It opens doors to unprecedented
                        advances in the understanding of brain development and the treatment of neurological disorders. This
                        document will explore the development of OI, its applications in biocomputing, and the technical and
                        ethical challenges that lie ahead.</p>
                </section>
            </div>
            <!-- main -->
            <main class="main">
                <!-- add other student code -->
                <section>
                    <img src="images/microelectrode.jpg" alt="a 3D microelectrode used for these organoid brains">
                    <h2>The Development of Organoid Intelligence</h2>
                    <p>Organoids are small, self-organizing structures derived from human stem cells, designed to mimic the
                        cellular structure and behavior of brain tissue. They are cultivated in vitro from induced pluripotent
                        stem cells (iPSCs) or embryonic stem cells, which are reprogrammed into neural cells. Over time, these
                        cells form 3D structures that resemble the architecture and functionality of a human brain, including
                        the formation of neurons, synapses, and even spontaneous electrical activity. The ability of these
                        organoids to replicate aspects of human brain functionality positions them as a powerful tool for
                        biocomputing.</p>
                    <p>What sets OI apart from traditional computing models is its <em>potential for efficiency and parallel
                        processing</em>. Unlike silicon-based computers, which process data sequentially and consume significant
                        amounts of power, brain organoids operate in a way that is much closer to how the human brain processes
                        information. For example, the Frontier supercomputer, currently the world’s most powerful supercomputer,
                        consumes 21 megawatts of power to achieve processing speeds of approximately 1.102 exaFLOPS. In
                        comparison, the human brain, which operates at roughly the same computational power, consumes just 20
                        watts​. This efficiency makes OI a tantalizing alternative to current computing technologies,
                        particularly as the energy demands of AI and machine learning continue to rise.</p>
                    <p>The development of OI depends on scaling up current brain organoids into more complex and durable
                        structures. Researchers are working on generating organoids with enriched levels of cells and genes
                        associated with learning, which is critical for building computational systems that can learn and adapt
                        over time. As described by Smirnova et al., <em>“Integrated microfluidic perfusion systems can support
                        scalable and durable culturing, and spatiotemporal chemical signaling”</em>​. These advances are crucial for
                        creating biocomputing systems that are capable of sustained, long-term functioning.</p>
                    <p>To fully harness the potential of organoids in biocomputing, it is necessary to develop new technologies
                        that can effectively communicate with these biological structures. This includes the creation of
                        brain-machine interfaces that can stimulate and record the activity of organoids in real-time. Such
                        technologies are currently in development, and they are expected to enable researchers to explore the
                        computational potential of OI in unprecedented ways.</p>
                </section>
                <section>
                    <h2>Applications of OI in Biocomputing</h2>
                    <p>The potential applications of Organoid Intelligence extend into multiple disciplines, including medical
                        research, biological computing, and machine learning. One of the most promising areas of research is the
                        use of organoids to study neurological diseases. OI offers the ability to model complex brain functions
                        in vitro, providing a powerful tool for understanding diseases like Alzheimer’s, dementia, and autism.
                        By cultivating brain organoids that mimic cognitive and memory functions, researchers can explore
                        disease progression and test potential treatments in ways that were previously impossible.</p>
                    <p>For example, <strong>Alzheimer’s disease</strong> is characterized by the progressive loss of cognitive function, a
                        process that is difficult to study using traditional animal models. However, by using organoids that
                        replicate aspects of brain function, researchers can simulate the disease's impact on neural pathways
                        and investigate how it could be treated. Similarly, autism spectrum disorder (ASD) is another condition
                        that stands to benefit from OI research. Autism is believed to involve a complex interplay between
                        genetic and environmental factors, and brain organoids offer a way to model these interactions and
                        better understand the condition.</p>
                    <p>In the context of <strong>Schizophrenia</strong>, organoid research is being used to explore cognitive dysfunction, a
                        hallmark of the disorder. By comparing organoids derived from individuals with schizophrenia to those
                        from healthy controls, scientists can identify the biological markers that may contribute to the
                        development of the disease. The ability to study these diseases in human-derived organoids marks a
                        significant advancement in the field of medical research, as it allows for a level of specificity and
                        accuracy that animal models cannot provide. </p>
                </section>

                <h3>A data table summarizing key areas where OI is expected to make significant contributions is shown below:</h3>
                <table>
                    <tr>
                        <th>Disease/Condition</th>
                        <th>Potential for OI Use</th>
                        <th>Current Stage of Research</th>
                    </tr>
                    <tr>
                        <td>Alzheimer's Disease</td>
                        <td>Exploring neurodegenerative pathways</td>
                        <td>Early-stage research</td>
                    </tr>
                    <tr>
                        <td>Autism</td>
                        <td>Gene-environment interaction studies</td>
                        <td>Experimental</td>
                    </tr>
                    <tr>
                        <td>Schizophrenia</td>
                        <td>Understanding cognitive impairments</td>
                        <td>Ongoing studies</td>
                    </tr>
                    <tr>
                        <td>Dementia</td>
                        <td>Therapeutic interventions</td>
                        <td>Promising results in organoid models</td>
                    </tr>
                    <tr>
                        <td>Leukodystrophies</td>
                        <td>Studying white matter development</td>
                        <td>In-progress</td>
                    </tr>
                </table>

                <section>
                    <p>Beyond medical research, OI holds promise in the field of biocomputing, where it could enable the
                        development of hybrid biological-electronic systems that learn and adapt over time. Unlike traditional
                        AI systems, which require vast amounts of data and energy to train, OI systems could potentially learn
                        with far fewer examples. For instance, humans and simpler organisms like honeybees learn tasks with
                        remarkably fewer samples compared to AI. Honeybees, for example, can learn simple distinctions with as
                        few as 100 samples, whereas AI systems required millions of examples to master similar tasks as recently
                        as 2018</p>
                    <p>Another exciting application of OI is in the development of neuromorphic computing systems that combine
                        biological and electronic components. These systems could have significant advantages in areas requiring
                        real-time decision-making, such as autonomous vehicles or robotics. In addition, OI has the potential to
                        advance our understanding of cognition and memory by allowing researchers to study the mechanisms of
                        learning in a controlled, reproducible environment.</p>
                    <img src="images/organoid.jpg" alt="sample organoid brain">
                </section>
                <section>
                    <h2>Conclusion</h2>
                    <p>Organoid Intelligence represents a groundbreaking development in the fields of biocomputing,
                        neuroscience, and artificial intelligence. By harnessing the natural processing power of human brain
                        organoids, researchers are paving the way for a new era of computing that could surpass traditional
                        silicon-based systems in both efficiency and capability. The potential applications of OI are vast,
                        ranging from medical research into neurodegenerative diseases and developmental disorders to the
                        creation of biocomputing systems that learn and adapt in real-time.</p>
                    <p>However, significant technical and ethical challenges remain. The scalability of organoids, the
                        development of advanced interfaces, and the need for robust data-processing infrastructures are just a
                        few of the hurdles that must be overcome before OI can reach its full potential. Moreover, the ethical
                        implications of using human-derived brain tissue for computation require careful consideration and the
                        establishment of clear guidelines to ensure that this research is conducted responsibly. </p>
                    <p>Despite these challenges, the future of OI looks incredibly promising. As researchers continue to explore
                        the possibilities of biocomputing, we may soon see advances that revolutionize not only how we compute
                        but also how we understand the human brain itself. Organoid Intelligence could hold the key to unlocking
                        new insights into cognition, learning, and memory, while also providing innovative solutions to some of
                        the most pressing challenges in medicine and technology today. </p>
                </section>

            </main>

            <!-- side  -->
            <aside class="side">
                <!-- add other student code -->
                <section>
                    <h2>Technical Challenges and Advances</h2>
                    <ul>
                        <li><strong>Scalability:</strong> Brain organoids are currently limited in size due to the lack of
                            vasculature, which restricts nutrient and waste exchange, affecting their growth and longevity.</li>
                        <li><strong>Microfluidic Systems:</strong> Researchers are developing microfluidic systems that
                            replicate blood flow in the human brain, allowing controlled perfusion of nutrients, oxygen, and
                            growth factors to support long-term growth of organoids.</li>
                        <li><strong>Interfacing with Machine Learning and AI:</strong> Traditional computers process data
                            sequentially, while biological systems like organoids process information in parallel, requiring new
                            algorithms and interfaces for meaningful outputs.</li>
                        <li><strong>3D Microelectrode Arrays:</strong> These novel arrays can record and stimulate organoid
                            activity in real-time, helping in detailed mapping of neural networks and synaptic activity.</li>
                        <li><strong>Data Processing Infrastructure:</strong> Handling the large amounts of high-resolution
                            spatiotemporal data generated by organoids will require robust data storage, processing, and
                            analysis methods. Advances in big-data management and machine learning are essential to decipher
                            these complex interactions.</li>
                    </ul>
                </section>
                <section>

                    <h2>Ethical Implications</h2>
                        <p>As with any new technology, the rise of Organoid Intelligence brings with it a host of <strong>ethical
                            considerations</strong>. One of the most significant concerns is the use of human-derived brain cells in
                            computing. The potential for these biological structures to develop advanced cognitive abilities, such
                            as learning and memory, raises questions about their moral status and the ethical implications of using
                            them in research.</p>
                        <p>To address these concerns, researchers advocate for an embedded ethics approach, where ethicists,
                            scientists, and members of the public collaborate to identify and analyze the ethical issues surrounding
                            OI. This approach emphasizes transparency, accountability, and the responsible use of technology. For
                            example, the Baltimore Declaration Toward OI was established to guide ethical research in this field.
                            The declaration emphasizes the importance of ensuring that OI develops in a way that is socially and
                            ethically responsible, taking into account the potential implications for human rights and dignity​</p>
                        <p>One of the primary ethical concerns is the potential for organoids to develop cognitive capabilities such
                            as learning, memory, or even rudimentary forms of consciousness. Although the current state of organoid
                            research is far from achieving sentience, the possibility raises important questions about the moral and
                            legal rights of these biological entities. <em>For instance, if an organoid were to demonstrate significant
                            learning or problem-solving abilities, would it deserve certain protections? Could the use of such
                            organoids in research or computation be considered exploitative?</em> These concerns are not only theoretical
                            but will require ongoing discussion as OI research advances.</p>
                        <p>Furthermore, ethical considerations also extend to the use of organoids in medical research, particularly
                            in cases where they may be used to model diseases or test drugs. While OI holds great promise for
                            understanding neurological disorders like Alzheimer’s and autism, the use of human-derived brain tissue
                            poses questions about consent, especially when the cells are derived from donors. Ethical frameworks
                            need to ensure that such research is conducted with full transparency, with the donors’ rights and
                            dignity fully respected. </p>
                        <p>Lastly, the potential for OI to blur the boundaries between biological systems and machines invites
                            scrutiny regarding the future of human-computer interaction. As biocomputing technologies evolve, we may
                            face a future where the lines between organic and artificial intelligence become increasingly unclear.
                            This presents challenges not only in terms of ethics but also in regulating the development and use of
                            such technologies to ensure that they serve the public good while avoiding unintended consequences.</p>
                </section>
            </aside>
            <!-- footer -->
            <footer class="footer">
                <!-- add other student code -->
                <h2>Citations</h2>
                    <ul>
                        <li><a href="https://www.frontiersin.org/journals/science/articles/10.3389/fsci.2023.1017235">Smirnova et al. 2023</a></li>
                        <li><a href="https://spectrum.ieee.org/organoid-intelligence-computing-on-brain">Organoid Intelligence Computing on Brain</a></li>
                        <li><a href="https://www.forbes.com/sites/williamhaseltine/2023/04/28/forget-ai-organoid-intelligence-may-soon-power-our-computers/">Organoid Intelligence Power our Computers</a></li>
                        <li><a href="https://en.wikipedia.org/wiki/Organoid_intelligence">Wikipedia Organoid Intelligence</a></li>
                    </ul>
                    <p>Henry Lazo | CSC 170 Webpage Design and Development</p>
            </footer>
        </div>
    </body>
</html>