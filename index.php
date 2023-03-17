<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>potfolio</title>
    <link rel="stylesheet" href="style.css">
    <meta name="theme-color" content="#ff005d">
</head>

<body>
    <div class="main-continer">
        <!--! ------------home--------------->
        <sction>
            <div id="home">
                <div class="container">
                    <nav>
                        <div class="logo">MY FOLIO</div>
                        <ul id="navitem">
                            <img class="side" src="img\cross-circle.png" onclick="closemenu()">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                        <img class="side" src="img\menu-burger.png" onclick="openmenu()">
                    </nav>
                    <script>
                        var navite = document.getElementById('navitem');

                        function openmenu() {
                            navite.style.right = "0px";
                        }

                        function closemenu() {
                            navite.style.right = "-170px";
                        }
                    </script>
                    <div class="wapper">

                        <div class="cols col1">
                            <span class="hello1">HELLO</span>
                            <h1>I'm<span class="chng"></span></h1>
                            <p>Welcome to my portfolio! I am thrilled to showcase my skills and work, and I invite you to explore and discover how I can help you take your digital presence to the next level.</p>
                            <div class="btn">
                                <a href="cv.txt" download="cv.txt"><button class="dc">DOWNLOAD CV</button></a>
                                <a href="#contact"><button class="dc hire">HIRE ME</button></a>
                            </div>
                        </div>
                        <div class="imgbox">
                        </div>
                    </div>
                </div>
            </div>
        </sction>
        <!-- !----------------- about ------------------------->
        <section>
            <div id="about">
                <div class="container2">
                    <div class="row">
                        <div class="ab-col1">
                            <img src="img\pexels-italo-melo-2379004.jpg">
                        </div>
                        <div class="ab-col2">
                            <h1>About<b>Me</b></h1>
                            <p>Welcome to my portfolio! I am Arpit Chaubay, a web developr with a passion for Web Designing and Developing . With 4' years of experience, I have honed my skills and developed a reputation as a Web/app Developer and UI/UX Designer professional.
                                Throughout my career, I have remained committed to creativity , excellence , Hardworking nature. I pride myself on my ability to Make app/Website with standout designs that My clients love and that's the thing which make me push to develop my next product further.I am always looking for new and exciting projects, and I am passionate about helping my clients achieve their goals.
                                Let's work together to create a design that exceeds your expectations and delivers outstanding results. </p>

                            <p class="t-link">My Skills <b>:</b></p>
                            <div class="skill">
                                <span class="hello">HTML:</span>
                                <span class="hello2">CSS:</span>
                                <span class="hello3">J.S:</span>
                                <span class="hello4">PHP:</span>
                                <span class="hello5">PYTHON:</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--!------------------ services----------------------->
        <section>
            <div id="services">
                <div class="container3">
                    <h1 class="title2"><b>My</b>Services</h1>
                    <div class="service-list">
                        <div class="block">
                            <h2 class="header">Webseite development</h2>
                            <p class="desc">let's Develop Website to give you a digital push and make you or your business reachable to wlord togther".</p>
                        </div>
                        <div class="block">
                            <h2 class="header">Web Design</h2>
                            <p class="desc">Let's work together to create a design that exceeds your expectations and delivers outstanding results and make users in love with experience that they will never experience.</p>
                        </div>
                        <div class="block">
                            <h2 class="header">UI/UX</h2>
                            <p class="desc">I understand that a website is more than just a collection of pages; it's an experience for the user. That's why I work to create websites that are easy to navigate, intuitive, and visually appealing.</p>
                        </div>
                        <div class="block">
                            <h2 class="header">App Development</h2>
                            <p class="desc">If you're looking for an app developer to help you bring your app idea to life, look no further! With my expertise in app development and your vision, we can help you create an app that not only looks great but also delivers outstanding results.</p>
                        </div>
                    </div>
                    <a href="#home"><button class="btn3">TOP</button></a>
                </div>
            </div>
        </section>
        <!--!----------------- footer ------------------------->
        <section>
            <div id="contact">
                <div class="container4">
                    <h1 class="title3">Contact <b>Me</b></h1>
                    <div class="row2">
                        <div class="cont-left">
                            <p><img src="img\envelopes.png"> Contact-info@email.com</p>
                            <p><img src="img\phone-call.png"> 0123456789</p>
                            <div class="social">
                                <a href="#"><img src="img\instagram.png"></a>
                                <a href="#"><img src="img\linkedin.png"></a>
                                <a href="#"><img src="img\twitter.png"></a>
                                <a href="#"><img src="img\facebook.png"></a>
                            </div>
                            <a href="cv.txt" download="cv.txt"><button class="dc">DOWNLOAD CV</button></a>
                        </div>
                        <div class="cont-right">
                            <form method="post">
                                <input type="text" name="name" placeholder="Your Name" required>
                                <input type="email" name="email" placeholder="Your Email" required>
                                <textarea name="message" rows="6" placeholder="Your Message"></textarea>
                                <button class="submit" name="submit2" type="submit">Submit</button>
                            </form>
                            <div class="php">
                                <?php
                                error_reporting(0);
                                if (isset($_POST['submit2'])) {
                                    $server = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $database = "portfolio";

                                    $conn = mysqli_connect($server, $username, $password, $database);

                                    if (!$conn) {
                                        echo "fail to connect";
                                    }


                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $message = $_POST['message'];




                                    $query = "INSERT INTO `contactme` (`s.no`, `Name`, `E-mail`, `Your Message`) VALUES (NULL, '$name', '$email', '$message');";

                                    $run = mysqli_query($conn, $query);

                                    if (!$run) {
                                        echo "failed";
                                    } else {
                                        echo "Thank you for message";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------------copyright -------------->
        <section>
            <div class="copyright">
                <p>Copyright © <b class="b2">MY FOLIO</b>. Made with <b>♡</b> by Arpit.</p>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed('.chng', {

            strings: ["Coder", "Student"],
            typeSpeed: 150,
            backspeed: 90,
            backspeed: 90,
            loop: true
        });
    </script>

</body>

</html>