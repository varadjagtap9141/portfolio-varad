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
        $highlight_row=mysqli_fetch_array($result);
        ?>
        <h1><?=$profile_row['name']?></h1>
        <h2>
            I'm a
            <span style="--i: 4" data-text="<?=$highlight_row['post_1']?>"><?=$highlight_row['post_1']?></span>

            <span style="--i: 3" data-text="<?=$highlight_row['post_4']?>"><?=$highlight_row['post_4']?></span>

            <span style="--i: 2" data-text="<?=$highlight_row['post_2']?>"><?=$highlight_row['post_2']?></span>

            <span style="--i: 1" data-text="<?=$highlight_row['post_3']?>"><?=$highlight_row['post_3']?></span>
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
        <?php
       $query="SELECT * FROM services";
       $result=mysqli_query($conn,$query);
       foreach($result as $service_row)
       {
        ?>
        <div class="services-box">
            <div class="icon">
                <i class="bx bx-code-alt"></i>
                <a href="#"><i class="bx bx-arrow-back"></i></a>
            </div>
            <h3><?=$service_row['service_title']?></h3>
            <p>
                <?=$service_row['service_subtitle']?>
            </p>
        </div>
        <?php
       }
       ?>
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
                    <?php
                    $query="SELECT description, company, position, DATE_FORMAT(start_date, '%M %Y') AS start_date, DATE_FORMAT(end_date, '%M %Y') AS end_date FROM experience";
                    $result=mysqli_query($conn,$query);
                    foreach($result as $experience_row)
                    {
                        ?>
                    <div class="resume-item">
                        <p class="year"><?=$experience_row['start_date']?> - <?=$experience_row['end_date']?></p>
                        <h3><?=$experience_row['position']?></h3>
                        <p class="company"><?=$experience_row['company']?></p>
                        <p>
                            <?=$experience_row['description']?>
                        </p>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div class="resume-detail Education">
                <h2 class="heading">My <span>Education</span></h2>
                <div class="resume-list">

                    <?php
                    $query="SELECT education_id, description, university, education, DATE_FORMAT(start_year, '%Y') AS start_year, DATE_FORMAT(end_year, '%Y') AS end_year FROM education";
                    $result=mysqli_query($conn,$query);
                    foreach($result as $education_row)
                    {
                        ?>
                    <div class="resume-item">
                        <p class="year"><?=$education_row['start_year']?> - <?=$education_row['end_year']?></p>
                        <h3><?=$education_row['education']?></h3>
                        <p class="company">
                            <?=$education_row['university']?>
                        </p>
                        <p>
                            <?=$education_row['description']?>
                        </p>
                    </div>
                    <?php
                    }
                    ?>
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
                    <?php
                    $query="SELECT * FROM skills";
                    $result=mysqli_query($conn,$query);
                    foreach($result as $skill_row)
                    {
                        ?>
                    <div class="resume-item">
                        <i class="<?=$skill_row['skill_name']?>"></i>
                        <span><?=$skill_row['title']?></span>
                    </div>
                    <?php
                    }
                    ?>
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
            <form action="admin/component/save_contact.php" method="POST" id="contactForm">
                <h2 class="heading">Contact <span>Me!</span></h2>
                <div class="field-box">
                    <input type="text" name="name" id="fullName" placeholder="Full Name" required />
                    <input type="email" name="email" id="emailID" placeholder="Email Address" required />
                    <input type="number" name="phone_no" id="phoneNumber" placeholder="Phone Number" required />
                    <input type="text" name="subject" id="subject" placeholder="Email Subject" required />
                    <textarea name="message" id="messageBody" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn" id="submit_btn">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>