<?php include "navbar.php";?>
<?php
  $query="SELECT * FROM profile";
  $result=mysqli_query($conn,$query);
  $profile_row=mysqli_fetch_assoc($result);
  ?>
<!-- bars background -->
<div class="bars-box active">
    <div class="bar" style="--i: 6"></div>
    <div class="bar" style="--i: 5"></div>
    <div class="bar" style="--i: 4"></div>
    <div class="bar" style="--i: 3"></div>
    <div class="bar" style="--i: 2"></div>
    <div class="bar" style="--i: 1"></div>
</div>

<!-- home section -->
<section class="home active">
    <div class="home-detail">
        <?php
        $query="SELECT * FROM highlight";
        $result=mysqli_query($conn,$query);
        ?>
        <h1><?=$profile_row['name']?></h1>
        <h2>
            I'm a
            <!-- <span style="--i: 4" data-text="Coder">Coder</span>

            <span style="--i: 3" data-text="PHP Developer">PHP Developer</span>

            <span style="--i: 2" data-text="Web Developer">Web Developer</span>

            <span style="--i: 1" data-text="Full Stack Developer">Full Stack Developer</span> -->
            <?php
            foreach($result as $highlight_row)
            {
                ?>
                <span style="--i: 4" data-text="<?=$highlight_row['highlight_name']?>"><?=$highlight_row['highlight_name']?></span>
                <?php
            }
            ?>
        </h2>
        <p>
            <?=$profile_row['intro']?>
        </p>
        <div class="btn-sci">
            <a href="admin/component/upload/<?=$profile_row['cv']?>" download class="btn">Download CV</a>
            <div class="sci">
                <a href="<?=$profile_row['link_1']?>" target="_blank" rel="noopener noreferrer"><i
                        class="bx bxl-github"></i></a>
                <a href="<?=$profile_row['link_2']?>" target="_blank" rel="noopener noreferrer"><i
                        class="bx bxl-linkedin"></i></a>
                <a href="<?=$profile_row['link_3']?>" target="_blank" rel="noopener noreferrer"><i
                        class='bx bxl-instagram'></i></a>
            </div>
        </div>
    </div>

    <div class="home-img">
        <div class="img-box">
            <div class="img-item">
                <img src="admin/component/upload/<?=$profile_row['profile_img']?>" alt="Home Image" />
            </div>
        </div>
    </div>
</section>

<!-- services section -->
<section class="services">
    <h2 class="heading">My <span>Services</span></h2>
    <div class="services-container">
        <div class="services-box">
            <div class="icon">
                <i class="bx bx-code-alt"></i>
                <a href="#"><i class="bx bx-arrow-back"></i></a>
            </div>
            <h3>Resp. Web Design & Development</h3>
            <p>
                Creating websites that work seamlessly on all devices (desktops,
                tablets, smartphones) using HTML, CSS, JavaScript, and Bootstrap.
                Providing UI/UX design solutions for a smooth, intuitive user
                experience.
            </p>
        </div>

        <div class="services-box">
            <div class="icon">
                <i class="bx bx-code-alt"></i>
                <a href="#"><i class="bx bx-arrow-back"></i></a>
            </div>
            <h3>Full-Stack Web Development</h3>
            <p>
                Developing dynamic web applications using a combination of frontend
                (HTML, CSS, Bootstrap, JavaScript) and backend technologies (PHP, MySQL). Building scalable, secure, and
                high-performance web
                applications.
            </p>
        </div>

        <div class="services-box">
            <div class="icon">
                <i class="bx bx-code-alt"></i>
                <a href="#"><i class="bx bx-arrow-back"></i></a>
            </div>
            <h3>Single-Page Applications (SPA)</h3>
            <p>
                Building responsive and fast Single-Page Applications
                for better user engagement and performance.
            </p>
        </div>

        <div class="services-box">
            <div class="icon">
                <i class="bx bx-code-alt"></i>
                <a href="#"><i class="bx bx-arrow-back"></i></a>
            </div>
            <h3>Backend Development</h3>
            <p>
                Providing secure, scalable, and high-performance backend solutions using PHP, CodeIgniter 3, and MySQL.
                Leveraging PHP for dynamic server-side functionalities, CodeIgniter 3 for structured MVC-based
                development,
                and MySQL for optimized database management.
            </p>
        </div>
    </div>
</section>

<!-- resume section -->
<section class="resume">
    <div class="resume-container">
        <div class="resume-box">
            <h2>Why Hire Me?</h2>
            <p style="margin-bottom: 20px;">
                I am a full-stack web developer with a Computer Science degree and hands-on experience in PHP, frontend,
                and
                backend development. Skilled in HTML, CSS, JavaScript, Bootstrap, and CodeIgniter 3, I specialize in
                building
                dynamic, user-friendly web solutions. With real-world project experience. I excel in problem-solving,
                collaboration, and delivering innovative solutions while staying
                committed to continuous learning and growth.
            </p>
            <button class="resume-btn active">Experience</button>
            <button class="resume-btn">Education</button>
            <button class="resume-btn">Skills</button>
            <button class="resume-btn">About Me</button>
        </div>
        <div class="resume-box">
            <div class="resume-detail Experience active">
                <h2 class="heading">My <span>Experience</span></h2>
                <div class="resume-list">
                    <div class="resume-item">
                        <p class="year">July 2024 - Dec 2024</p>
                        <h3>Full Stack Web Developer Intern</h3>
                        <p class="company">A2Z IT HUB PVT LTD</p>
                        <p>
                            Gained hands-on experience in full-stack development, building dynamic web applications
                            using PHP, and
                            modern
                            front-end technologies.
                            Contributed to real-world projects, enhancing problem-solving skills and applying
                            theoretical knowledge
                            in a professional
                            environment.
                            Led a team of developers, coordinating tasks and ensuring successful project completion
                            within
                            deadlines.
                            Collaborated with team members to design, develop, and debug code, ensuring optimal
                            performance and
                            usability.
                        </p>
                    </div>
                </div>
            </div>

            <div class="resume-detail Education">
                <h2 class="heading">My <span>Education</span></h2>
                <div class="resume-list">
                    <!-- <div class="resume-item">
              <p class="year">2024</p>
              <h3>PHP Full Stack Developement</h3>
              <p class="company">Offline Course</p>
              <p>
                Completed an offline Java Full Stack Developer course, gaining
                in-depth knowledge and hands-on experience in building robust
                web applications using Java, Spring Boot, and frontend
                technologies.
                <br /><br />
                Strengthened full-stack development skills and mastered tools
                to create scalable and efficient solutions.
              </p>
            </div> -->

                    <div class="resume-item">
                        <p class="year">2021 - 2024</p>
                        <h3>Bachelor of Computer Science</h3>
                        <p class="company">Savitribai Phule Pune University, Pune</p>
                        <p>
                            Graduated with First Class, achieving a 7.98 CGPA.
                            <br /><br />
                            Built a strong foundation in computer science principles,
                            programming languages, and software development practices.
                        </p>
                    </div>

                    <!-- <div class="resume-item">
              <p class="year">2018 - 2021</p>
              <h3>Diploma in Computer Technology</h3>
              <p class="company">
                Maharashtra State Board of Technical Education, Mumbai
              </p>
              <p>
                Achieved First Class with Distinction, securing 92.86%.
                <br /><br />
                Awarded a Certificate of Appreciation for outstanding
                performance in the State Level Online Quiz Competition on
                Programming in Java (22412), organized by the Department of
                Computer Engineering, Government Polytechnic Ambad, with a
                passing percentage of 94%.
              </p>
            </div> -->

                    <div class="resume-item">
                        <p class="year">2020 - 2021</p>
                        <h3>HSC (Science)</h3>
                        <p class="company">
                            Maharashtra State Board of Secondary and Higher Secondary
                            Education, Pune
                        </p>
                        <p>
                            Completed Higher Secondary Education with a focus on Science,
                            building a solid foundation for academic and professional
                            growth in technology.
                            Developed critical problem-solving skills and a strong
                            understanding of core scientific principles.
                        </p>
                    </div>

                    <div class="resume-item">
                        <p class="year">2018 - 2019</p>
                        <h3>SSC (Semi-English)</h3>
                        <p class="company">
                            Maharashtra State Board of Secondary and Higher Secondary
                            Education, Pune
                        </p>
                        <p>
                            Earned the Secondary School Certificate (SSC) with a strong
                            academic foundation in key subjects.
                            <br />
                            Gained essential problem-solving and critical thinking skills,
                            paving the way for advanced studies and a career in
                            technology.
                        </p>
                    </div>
                </div>
            </div>

            <div class="resume-detail skills">
                <h2 class="heading">My <span>Skills</span></h2>
                <p class="desc">
                    Equipped with a diverse skill set in full-stack web development, I
                    am proficient in both frontend and backend technologies. I
                    continuously expand my expertise to deliver innovative,
                    user-friendly solutions.
                </p>
                <div class="resume-list">
                    <div class="resume-item">
                        <i class="bx bxl-html5"></i>
                        <span>HTML5</span>
                    </div>
                    <div class="resume-item">
                        <i class="bx bxl-css3"></i>
                        <span>CSS3</span>
                    </div>
                    <div class="resume-item">
                        <i class="bx bxl-javascript"></i>
                        <span>javaScript (ES6+)</span>
                    </div>
                    <div class="resume-item">
                        <i class="bx bxl-jquery"></i>
                        <span>JQuery</span>
                    </div>
                    <div class="resume-item">
                        <i class="bx bxs-file-json"></i>
                        <span>JSON</span>
                    </div>
                    <div class="resume-item">
                        <i class="bx bxl-react"></i>
                        <span>React.js</span>
                    </div>
                    <div class="resume-item">
                        <i class="bx bxl-bootstrap"></i>
                        <span>Bootstrap</span>
                    </div>
                    <div class="resume-item">
                        <i class="bx bx-data"></i>
                        <span>MySQL</span>
                    </div>
                    <div class="resume-item">
                        <i class='bx bxl-php'></i>
                        <span>PHP</span>
                    </div>
                    <div class="resume-item">
                        <i class='bx bxs-hot'></i>
                        <span>CodeIgniter 3</span>
                    </div>
                    <div class="resume-item">
                        <i class='bx bxl-git'></i>
                        <span>Git</span>
                    </div>
                    <div class="resume-item">
                        <i class="bx bxl-github"></i>
                        <span>Github</span>
                    </div>
                </div>
            </div>

            <div class="resume-detail about">
                <h2 class="heading">About <span>Me</span></h2>
                <div class="resume-list">
                    <div class="resume-item">
                        <p>Name <span><?=$profile_row['name']?></span></p>
                    </div>
                    <div class="resume-item">
                        <p>Gender <span><?=$profile_row['gender']?></span></p>
                    </div>
                    <div class="resume-item">
                        <p>Age <span><?=$profile_row['age']?></span></p>
                    </div>
                    <div class="resume-item">
                        <p>Status <span><?=$profile_row['status']?></span></p>
                    </div>
                    <div class="resume-item">
                        <p>City <span><?=$profile_row['city']?></span></p>
                    </div>
                    <div class="resume-item">
                        <p>Nationality <span><?=$profile_row['nationality']?></span></p>
                    </div>
                    <div class="resume-item">
                        <p>Experience <span><?=$profile_row['experience']?></span></p>
                    </div>
                    <div class="resume-item">
                        <p>Available <span><?=$profile_row['available']?></span></p>
                    </div>

                    <div class="resume-item">
                        <p>Phone <span>+91 <?=$profile_row['phone']?></span></p>
                    </div>
                    <div class="resume-item">
                        <p>Email <span><?=$profile_row['email']?></span></p>
                    </div>
                    <div class="resume-item">
                        <p>Languages <span><?=$profile_row['language']?></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section class="portfolio">
    <h2 class="heading">Latest <span>Project</span></h2>
    <div class="portfolio-container">
        <div class="portfolio-box">
            <div class="portfolio-detail active">
                <p class="numb">01</p>
                <h3>Varad Interiors Website</h3>
                <p>
                    Aresponsive and user-friendly interface optimized for multiple devices.
                    Interactive elements, including a hover zoom effect on image cards, enhancing visual appeal.
                    Dynamic content management using Node.js for seamless server-side functionality.
                    Afocus on UI/UX design to reflect the brand’s aesthetic and professional identity
                </p>
                <div class="tech">
                    <p>HTML5, CSS3, Bootstrap, JavaScript</p>
                </div>
                <div class="live-github">
                    <a href="https://varadinteriors.netlify.app/" target="_blank" rel="noopener noreferrer"><i
                            class="bx bx-arrow-back"></i><span>Live Project</span></a>
                    <a href="https://github.com/varadjagtap9141/varad_interiors" target="_blank"
                        rel="noopener noreferrer"><i class="bx bxl-github"></i><span>Github Repository</span></a>
                </div>
            </div>

            <div class="portfolio-detail">
                <p class="numb">02</p>
                <h3> ClothEase - Cloth Store Management System</h3>
                <p>
                    Designed and developed a comprehensive retail management software to streamline cloth store
                    operations. Key
                    features
                    include category and brand management, product size tracking, supplier and customer management,
                    stock
                    monitoring,
                    invoicing and sales/purchase reporting with CSV/PDF export. Integrated financial tracking for
                    payments, dues
                    and
                    balances.
                </p>
                <div class="tech">
                    <p>Core PHP</p>
                </div>
                <div class="live-github">
                    <a href="#" target="_blank" rel="noopener noreferrer"><i class="bx bx-arrow-back"></i><span>Live
                            Project</span></a>
                    <a href="https://github.com/varadjagtap9141/clothease" target="_blank" rel="noopener noreferrer"><i
                            class="bx bxl-github"></i><span>Github Repository</span></a>
                </div>
            </div>
            <div class="portfolio-detail">
                <p class="numb">03</p>
                <h3>Medilab - CMS Website</h3>
                <p>
                    Medilab is a healthcare-focused CMS that enables easy management of services, doctors, and
                    testimonials. It
                    features a
                    secure admin panel for real-time content updates, a responsive design, and SEO-friendly
                    architecture,
                    ensuring an
                    efficient and professional online presence for medical organizations.
                </p>
                <div class="tech">
                    <p>HTML, CSS, Bootstrap, Core PHP</p>
                </div>
                <div class="live-github">
                    <a href="#" target="_blank" rel="noopener noreferrer"><i class="bx bx-arrow-back"></i><span>Live
                            Project</span></a>
                    <a href="https://github.com/varadjagtap9141/hospital" target="_blank" rel="noopener noreferrer"><i
                            class="bx bxl-github"></i><span>Github Repository</span></a>
                </div>
            </div>
        </div>
        <div class="portfolio-box">
            <div class="portfolio-carousel">
                <div class="img-slide">
                    <div class="img-item">
                        <img src="images/portfolio1.jpg" alt="" />
                    </div>
                    <div class="img-item">
                        <img src="images/portfolio2.jpg" alt="" />
                    </div>
                    <div class="img-item">
                        <img src="images/portfolio3.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="navigation">
                <button class="arrow-left disabled">
                    <i class="bx bx-chevron-left"></i>
                </button>
                <button class="arrow-right">
                    <i class="bx bx-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- contact section -->
<section class="contact">
    <div class="contact-container">
        <div class="contact-box">
            <h2>Let's Work Together</h2>
            <p class="desc">
                Let's collaborate to bring your ideas to life
                with creativity and technical excellence!
            </p>

            <div class="contact-detail">
                <i class="bx bxs-phone"></i>
                <div class="detail">
                    <p>Phone</p>
                    <p>(+91) <?=$profile_row['phone']?></p>
                </div>
            </div>
            <div class="contact-detail">
                <i class="bx bxs-envelope"></i>
                <div class="detail">
                    <p>Email</p>
                    <p><?=$profile_row['email']?></p>
                </div>
            </div>
            <div class="contact-detail">
                <i class="bx bxs-map"></i>
                <div class="detail">
                    <p>Address</p>
                    <p><?=$profile_row['address']?></p>
                </div>
            </div>
        </div>

        <div class="contact-box">
            <form action="https://api.web3forms.com/submit" method="POST" id="contactForm">
                <input type="hidden" name="access_key" value="94742f65-0a2a-45ea-9284-b597c319006d">
                <h2 class="heading">Contact <span>Me!</span></h2>
                <div class="field-box">
                    <input type="text" name="fullName" id="fullName" placeholder="Full Name" required />
                    <input type="email" name="email" id="emailID" placeholder="Email Address" required />
                    <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number" required />
                    <input type="text" name="subject" id="subject" placeholder="Email Subject" required />
                    <textarea name="messageBody" id="messageBody" placeholder="Your Message" required></textarea>
                </div>
                <input type="hidden" name="redirect" value="https://web3forms.com/success" />
                <button type="submit" class="btn" id="submit_btn">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>