<style>
    /* Custom CSS for Free Courses Section */
    #free-courses {
        background-color: #ffffff;
        padding: 60px 0;
    }
    
    #free-courses h2 {
        color: #2c3e50;
        font-weight: 700;
        margin-bottom: 40px;
        position: relative;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    #free-courses h2::after {
        content: '';
        display: block;
        width: 100px;
        height: 4px;
        background: linear-gradient(to right, #3498db, #9b59b6);
        margin: 15px auto;
        border-radius: 2px;
    }
    
    .course-card {
        background: white;
        border-radius: 12px;
        transition: all 0.3s ease;
        overflow: hidden;
        border: none;
        height: 100%;
        position: relative;
    }
    
    .course-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
    }
    
    .course-img-container {
        height: 180px;
        overflow: hidden;
        border-radius: 8px;
        margin-bottom: 15px;
    }
    
    .course-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .course-img-container:hover img {
        transform: scale(1.05);
    }
    
    .course-card h4 {
        color: #2c3e50;
        font-weight: 600;
        margin-bottom: 10px;
    }
    
    .course-card h4 i {
        color: #3498db;
        margin-right: 8px;
    }
    
    .course-card p {
        color: #7f8c8d;
        margin-bottom: 15px;
    }
    
    .course-card p i {
        color: #3498db;
        margin-right: 8px;
    }
    
    .course-card .row div {
        color: #555;
        margin-bottom: 5px;
    }
    
    .course-card strong {
        color: #2c3e50;
    }
    
    .course-card del {
        color: #e74c3c;
    }
    
    .btn-enroll {
        display: inline-block;
        background: linear-gradient(to right, #3498db, #9b59b6);
        color: white !important;
        padding: 10px 20px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        width: 100%;
        text-align: center;
        border: none;
    }
    
    .btn-enroll:hover {
        background: linear-gradient(to right, #2980b9, #8e44ad);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
    }
    
    .btn-enroll i {
        margin-right: 8px;
    }
    
    #all-courses {
        background: linear-gradient(to right, #e74c3c, #f39c12);
        color: white;
        border: none;
        padding: 12px 30px !important;
        border-radius: 30px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        margin-top: 20px;
    }
    
    #all-courses:hover {
        background: linear-gradient(to right, #c0392b, #d35400);
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(231, 76, 60, 0.3);
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .course-card {
            margin-bottom: 30px;
        }
        
        .course-img-container {
            height: 150px;
        }
    }
</style>

<div class="container my-5 py-4" id="free-courses">
    <h2 class="text-center py-3">Free Courses</h2>
    <div class="row g-4">
        <?php
        $sql = "SELECT * FROM courses LIMIT 2,3";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="course-card shadow p-3 h-100">
                        <div class="course-img-container">
                            <a href="courseDetail.php?course_id='.$row['course_id'].'">
                                <img src="' . str_replace('..', '.', $row['course_img']) . '" alt="' . $row['course_name'] . '" class="img-fluid">
                            </a>
                        </div>
                        <h4><i class="fas fa-robot"></i> ' . $row['course_name'] . '</h4>
                        <p><i class="fas fa-user-tie"></i> Instructor: ' . $row['course_author'] . '</p>
                        <div class="row px-2">
                            <div class="col-12 mb-2"><i class="fas fa-clock"></i> Duration: <strong>' . $row['course_duration'] . '</strong></div>
                            <div class="col-12 mb-3">
                                <i class="fas fa-tag"></i> Price: 
                                <strong class="text-danger"><del>₹' . $row['course_original_price'] . '</del></strong>
                                <strong class="text-success"> FREE</strong>
                            </div>
                        </div>
                        <a class="btn btn-enroll mt-auto" href="courseDetail.php?course_id='.$row['course_id'].'">
                            <i class="fas fa-rocket"></i> Enroll Now
                        </a>
                    </div>
                </div>
                ';
            }
        } else {
            echo '<div class="col-12 text-center py-5"><h4>No courses available at the moment</h4></div>';
        }
        ?>
    </div>
    
    <div class="text-center mt-5">
        <a class="btn btn-lg" href="allCourses.php" id="all-courses">
            <i class="fas fa-book-open me-2"></i> View All Courses
        </a>
    </div>
</div>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>