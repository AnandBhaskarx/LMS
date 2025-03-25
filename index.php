<!-- Html Head Links -->
<?php
include('./layout/htmlHeadLinks.php');
include('./layout/header.php');
include('./ConnectDataBase.php');

include ('./API/APIConfig.php');

?>
<!-- End Nav Bar -->

<!-- Start Body -->
<style>
    /* Hero Section Styling */
    #bodyContainer {
        background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
        min-height: 70vh;
        padding: 5rem 2rem;
        color: white;
        position: relative;
        overflow: hidden;
    }

    #bodyContainer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjA1KSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3QgZmlsbD0idXJsKCNwYXR0ZXJuKSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIvPjwvc3ZnPg==');
        opacity: 0.3;
    }

    .lms {
        position: relative;
        z-index: 2;
        max-width: 900px;
        margin: 0 auto;
        text-align: center;
    }

    .lms h1 {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 2rem;
        text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        line-height: 1.2;
    }

    .lms p {
        font-size: 1.3rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
        opacity: 0.95;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .feature-item {
        background: rgba(255,255,255,0.1);
        backdrop-filter: blur(5px);
        padding: 1.5rem;
        border-radius: 12px;
        transition: all 0.3s ease;
    }

    .feature-item:hover {
        transform: translateY(-5px);
        background: rgba(255,255,255,0.2);
    }

    .feature-icon {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #FFF;
    }

    .feature-title {
        font-weight: 600;
        margin-bottom: 0.5rem;
        font-size: 1.2rem;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .lms h1 {
            font-size: 2.5rem;
        }
        
        .lms p {
            font-size: 1.1rem;
        }
        
        #bodyContainer {
            min-height: auto;
            padding: 3rem 1.5rem;
        }
        
        .features-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<section>
  <div class="d-flex flex-column justify-content-center align-items-center text-center" id="bodyContainer">
    <div class="lms">
      <h1>Transform Your Learning Experience</h1>
      <p>Our Learning Management System provides a comprehensive platform for educators and learners to connect, collaborate, and achieve educational goals through innovative digital solutions.</p>
      
      <div class="features-grid">
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-laptop-code"></i>
          </div>
          <h3 class="feature-title">Interactive Courses</h3>
          <p>Engaging multimedia content with quizzes and assignments</p>
        </div>
        
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <h3 class="feature-title">Progress Tracking</h3>
          <p>Monitor your learning journey with detailed analytics</p>
        </div>
        
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-users"></i>
          </div>
          <h3 class="feature-title">Collaborative Learning</h3>
          <p>Discussion forums and peer interaction features</p>
        </div>
        
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <h3 class="feature-title">Mobile Friendly</h3>
          <p>Access your courses anytime, anywhere</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- End Body -->

<!-- Start Free Courses -->
<?php include('./freeCourses.php') ?>
<!-- End Free Courses -->


<!-- Feddback Section -->
<style>
    /* Custom CSS for Feedback Section */
    #feedback {
        background-color: #f8f9fa;
        padding: 50px 0;
        border-radius: 15px;
        margin-bottom: 50px;
    }
    
    #feedback h1 {
        color: #2c3e50;
        font-weight: 700;
        margin-bottom: 40px !important;
        position: relative;
    }
    
    #feedback h1::after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background: #3498db;
        margin: 15px auto;
        border-radius: 2px;
    }
    
    .feedback-card {
        background: white;
        border-radius: 15px;
        transition: all 0.3s ease;
        height: 100%;
        border: none !important;
    }
    
    .feedback-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
    }
    
    .feedback-card img {
        object-fit: cover;
        border: 3px solid #3498db;
    }
    
    .feedback-card h5 {
        color: #2c3e50;
        font-weight: 600;
        margin-top: 15px;
    }
    
    .feedback-card span {
        font-size: 0.9rem;
        color: #7f8c8d;
    }
    
    .feedback-card p {
        color: #555;
        font-style: italic;
        margin-top: 15px;
        line-height: 1.6;
    }
    
    .carousel-control-prev, .carousel-control-next {
        width: 5% !important;
        opacity: 1 !important;
    }
    
    .carousel-control-prev-icon, .carousel-control-next-icon {
        background-color: #3498db !important;
        background-size: 60%;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        padding: 10px;
    }
    
    .carousel-control-prev-icon:hover, .carousel-control-next-icon:hover {
        background-color: #2980b9 !important;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .col-md-3 {
            margin-bottom: 20px;
        }
        
        .carousel-item .row {
            flex-direction: column;
            align-items: center;
        }
    }
</style>

<div class="container my-5 py-4" id="feedback">
    <h1 class="text-center mb-5">Students Feedback</h1>
    <div id="feedbackCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <?php
            $sql = "SELECT s.Stu_Name, s.Stu_Profile, s.Stu_Proffesion, f.f_msg FROM student AS s JOIN feedback AS f ON s.Stu_id = f.Stu_id";
            $result = $connection->query($sql);
            $count = 0;
            $totalCards = 0;

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $stuImg = str_replace('..', '.', $row['Stu_Profile']);
                    $stuName = $row['Stu_Name'];
                    $stuProffesion = $row['Stu_Proffesion'];
                    $f_msg = $row['f_msg'];

                    if ($count % 3 == 0) {
                        echo '<div class="carousel-item ' . ($totalCards == 0 ? 'active' : '') . '">';
                        echo '<div class="row justify-content-center">';
                    }
            ?>
                    <div class="col-lg-3 col-md-4 mb-4 px-3">
                        <div class="card feedback-card text-center p-4 h-100 shadow-sm">
                            <img src="<?php echo $stuImg ?>" class="rounded-circle mx-auto d-block" style="width: 100px; height: 100px;" alt="Profile">
                            <h5 class="mt-3"><?php echo $stuName ?></h5>
                            <span class="text-muted d-block mb-2"><?php echo $stuProffesion ?></span>
                            <div class="rating mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="px-2">"<?php echo $f_msg ?>"</p>
                        </div>
                    </div>
            <?php
                    $count++;
                    if ($count % 3 == 0 || $count == $result->num_rows) {
                        echo '</div></div>';
                        $totalCards++;
                    }
                }
            } else {
                echo '<div class="text-center py-5"><h4>No feedback available yet</h4></div>';
            }
            ?>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#feedbackCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#feedbackCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</div>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<!-- Start Contact -->
<?php include('./contactUs.php') ?>
<!-- End Contact -->
<br><br>

<!-- Start Footer Courses -->
<?php include('./layout/footer.php') ?>
<!-- End Footer Courses -->


<!-- Html Footer Links -->
<?php include('./layout/htmlFooterLinks.php') ?>