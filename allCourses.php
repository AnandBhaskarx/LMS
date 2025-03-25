<!-- Html Head Links -->
<?php
include('./layout/htmlHeadLinks.php')
?>

<!-- Start Nav Bar -->
<?php
include('./layout/header.php');
?>
<!-- End Nav Bar -->

<!-- Image Section -->
<div id="coursesBanner"></div>
<!-- Image Section -->
<main>
    <div class="CourseContainer container p-3 rounded" id="courses">
        <br><br>
        <div class="row p-0 m-0 align-items-center">
            <h1 class="coursesHeading col-12 p-0 m-0">Courses Categories</h1>
        </div>

        <div class="container my-5" id="free-courses">
            <!-- <h2 class="text-center py-2">Free Courses</h2> -->
            <div class="row">
                <!-- <img src="./im" alt=""> -->
                <?php
                $sql = "SELECT * FROM courses ";
                $result = $connection->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                <!-- Course 1: AI & Machine Learning -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="course-card shadow-lg p-3">
                        <div class="course-img-container">
                            <img src="' . str_replace('..', '.', $row['course_img']) . '" alt="AI Course">
                        </div>
                        <h4><i class="fas fa-robot"></i>  ' . $row['course_name'] . '</h4>
                        <p><i class="fas fa-book"></i>  ' . $row['course_author'] . '</p>
                        <div class="row">
                            <div class="col-12"><i class="fas fa-hourglass-half"></i> Duration: <strong>  ' . $row['course_duration'] . '</strong></div>
                            <div class="col-12 mt-2"><b>₹</b> Price: <strong> <del>  ' . $row['course_original_price'] . '</del> - Rs. ' . $row['course_price'] . '</strong></div>
                        </div>
                        <a class="btn-enroll mt-4" href="courseDetail.php?course_id=' . $row['course_id'] . '"><i class="fas fa-rocket"></i> Enroll Now</a>
                    </div>
                </div>
                ';
                    }
                } ?>
            </div>
        </div>
    </div>
</main>

<!-- Start footer -->
<?php
include('./layout/footer.php');
?>
<!-- End footer -->

<!-- Html Footer Links -->
<?php include('./layout/htmlFooterLinks.php') ?>