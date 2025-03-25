<!-- Html Head Links -->
<?php

include('./layout/htmlHeadLinks.php');
include('./layout/header.php');
include './ConnectDataBase.php';

if(isset($_GET['course_id'])){
    $courseId = $_GET['course_id'];
    $sql =  "SELECT * FROM courses WHERE course_id = '$courseId'";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
}

?>

<!-- End Nav Bar -->

<div class="container-fluid">
    <!-- Course Content -->
    <div class="p-4">
        <div class="card shadow">
            <div class="banner">
                <img alt="Web Development Course Banner" src="<?php echo str_replace('..','.',$row['course_img'])?>" />
                <div class="banner-overlay">
                    <h2 class="text-white"><?php echo $row['course_name'] ?></h2>
                </div>
            </div>
            <div class="card-body">
                <div class="" id="description">
                    <h2 class="font-weight-bold mt-4">Course Description</h2>
                    <p class="text-muted">
                    <?php echo $row['course_description'] ?>
                    </p>
                    <!-- <h2 class="font-weight-bold mt-4">What you will learn</h2>
                    <ul class="list-unstyled text-muted">
                        <li>Understand the basics of HTML, CSS, and JavaScript.</li>
                        <li>Build responsive websites using modern CSS frameworks.</li>
                        <li>Develop dynamic web applications using JavaScript frameworks.</li>
                        <li>Work with backend technologies like Node.js and Express.</li>
                        <li>Understand database management with MongoDB.</li>
                    </ul> -->
                </div>
                <!-- <div class=" d-none" id="course-content">
                    <h2 class="font-weight-bold mt-4">Course Content</h2>
                    <ul class="list-unstyled text-muted">
                        <li>Introduction to Web Development</li>
                        <li>HTML Basics</li>
                        <li>CSS Basics</li>
                        <li>JavaScript Basics</li>
                        <li>Advanced HTML and CSS</li>
                        <li>Responsive Design with Tailwind CSS</li>
                        <li>JavaScript ES6 and Beyond</li>
                        <li>Introduction to React</li>
                        <li>Building Single Page Applications with React</li>
                        <li>State Management with Redux</li>
                        <li>Introduction to Node.js</li>
                        <li>Building RESTful APIs with Express</li>
                        <li>Database Management with MongoDB</li>
                        <li>Authentication and Authorization</li>
                        <li>Deployment and Hosting</li>
                        The edutrack is the best lms Portal for learning purpose and marketing aspect
                    </ul>
                </div> -->
                <div class="" id="teacher">
                    <h2 class="font-weight-bold mt-4">Teacher</h2>
                    <p class="text-muted">
                        Your instructor for this course is <b><?php echo $row['course_author'] ?></b>, a seasoned web developer with over 10 years of experience in the industry. John has worked with numerous clients and companies, building high-quality web applications and websites.
                    </p>
                </div>
                <div class="" id="reviews">
                    <h2 class="font-weight-bold mt-4">Reviews</h2>
                    <p class="text-muted">
                        "This course is amazing! I learned so much and now feel confident in my web development skills." - Jane Smith
                    </p>
                    <p class="text-muted">
                        "The instructor is very knowledgeable and explains concepts clearly. Highly recommend this course!" - Mark Johnson
                    </p>
                </div>
                <div class="" id="purchase-course">
                    <h2 class="font-weight-bold mt-4">Purchase Course</h2>
                    <div class="bg-light p-4 rounded">
                        <p class="text-muted">
                            <span class="price">Rs. <?php echo $row['course_price'] ?></span>
                            <span class="original-price">Rs. <?php echo $row['course_original_price'] ?></span>
                            <span class="discount">(50% off)</span>
                        </p>
                        <p class="text-muted">
                            Get lifetime access to this course, including all future updates.
                        </p>
                        <button class="btn btn-lg" data-bs-toggle="modal" data-bs-target="#StudentLoginModal" id="buyCourse"><a href="./Payment/">Buy Now</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Start Footer Courses -->
<?php include('./layout/footer.php') ?>
<!-- End Footer Courses -->
<!-- Html Footer Links -->
<?php include('./layout/htmlFooterLinks.php') ?>