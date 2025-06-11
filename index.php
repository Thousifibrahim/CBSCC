<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CBSCC | Home</title>
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="includes/bootstrap/bootstrap.min.css">
    <?php include_once 'includes/db.inc.php'; ?>
</head>
<body>

<img src="images/bgmain.png" id="img1">
<div style="position: absolute; margin-left: 56%; margin-top: 175px;">
    <img src="images/task.png" width="430px" style="z-index: 1; margin-left: 100px;">
</div>

<?php include_once 'includes/nav.php'; ?>

<div class="content" style="margin-top: 60px; margin-left: 80px;">
    <h1 style="margin-left: 30px; font-size: 70px;">
        <b></b><br> PLACEMENT <br><b> MANAGEMENT </b><br> (Career Bridge)
    </h1>
</div>

<div id="users" style="z-index: 1; position: relative; margin-top: 90vh; margin-left: 229px;">
    <h1 style="text-align: center; padding-right: 250px;"><u>USERS</u></h1>
    <div style="display: flex; justify-content: center; margin: 20px 0;">
       <img src="images/new.png" alt="New Image" style="width: 100px;     margin-right: 240px;">
    </div>
    
    <br>
    <div class="card-group">
        <div class="card" style="width: 400px; background: none; border: none;" align="center">
            <img src="images/admin1.svg" class="card-img-top" alt="Admin" style="width: 400px;">
            <div class="card-body" style="margin-right: 250px;">
                <h2 class="card-title" align="center"><a href="login.php">Admin</a></h2>
                <p class="card-text"><small class="text-muted">Placement Officer</small></p>
            </div>
        </div>

        <div class="card" style="width: 400px; background: none; border: none;" align="center">
            <img src="images/student1.svg" class="card-img-top" alt="Student" style="width: 410px; margin-top: 37px;">
            <div class="card-body" style="margin-right: 250px;">
                <h2 class="card-title" align="center"><a href="login.php">User</a></h2>
                <p class="card-text"><small class="text-muted">Student</small></p>
            </div>
        </div>
    </div>
</div>

<section class="PlcmntRcrd basic_mrgn reveal" style="margin-top: 200px;">
    <div align="center" class="PlcmntRcrd_header">
        <h2> Students Got Placed in </h2>
        <br>
    </div>
    <div class="marquee-container">
        <img src="images/sony.png" alt="Sony" class="cmpnylogo">
        <img src="images/deloitte.webp" alt="Deloitte" class="cmpnylogo">
        <img src="images/atlan.png" alt="Atlan" class="cmpnylogo">
        <img src="images/tcs.png" alt="TCS" class="cmpnylogo">
        <img src="images/cognizant.png" alt="Cognizant" class="cmpnylogo">
        <img src="images/Infosys.webp" alt="Infosys" class="cmpnylogo">
        <img src="images/mindtree.jpg" alt="Mindtree" class="cmpnylogo">
        <img src="images/wipro.png" alt="Wipro" class="cmpnylogo">
        <img src="images/capegemini.png" alt="Capgemini" class="cmpnylogo">
        <img src="images/cdac.jpg" alt="CDAC" class="cmpnylogo">
        <img src="images/B&B.jpg" alt="B&B" class="cmpnylogo">
        <img src="images/xopuntech.png" alt="XopunTech" class="cmpnylogo">
        <img src="images/boldtek.png" alt="BoldTek" class="cmpnylogo">
        <img src="images/tebixa.png" alt="Tebixa" class="cmpnylogo">
    </div>
</section>

<section>
    <div class="container" style="margin-bottom: 10px; margin-top: 30px;">
        <div class="d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="images/placement.png" class="card-img-top" alt="Internships">
                <div class="card-body">
                    <h5 class="card-title">Internships</h5>
                    <p class="card-text">Internships are mandatory for the Even semester students. The referrals can be used to attain an internship. The academic partners for internships are: .</p>
                    <a href="images/pdf/intern.pdf" class="btn btn-primary">Visit</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="images/brochurs.png" class="card-img-top" alt="Brochures">
                <div class="card-body">
                    <h5 class="card-title">BROCHURES</h5>
                    <p class="card-text">Brochures contain information about the programs, campus life, placements, and admissions process for prospective students. You can visit the link and download the college brochure.</p>
                    <a href="images/pdf/brochure.pdf" class="btn btn-primary">Visit</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="images/policies-card.png" class="card-img-top" alt="Policies">
                <div class="card-body">
                    <h5 class="card-title">POLICIES</h5>
                    <p class="card-text">Policies outline the criteria for hiring. Placement policies ensure fairness, consistency, and transparency in the hiring process, and help organizations attract and retain top talent.</p>
                    <a href="images/pdf/loi.pdf" class="btn btn-primary">Visit</a>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br>
<br><br>

<h1 align="center" class="reveal"><mark>About St. Claret College Autonomous</mark></h1>

<div class="about_bvec row">
    <div class="col-md-4 mb-4 mb-md-0">
        <img src="images/scc.png" alt="St. Claret College" class="img-fluid" style="max-width: 80%; height: auto; margin-left: 47px; margin-top: 120px;">
    </div>
    <div class="col-md-8">
        <h6 class="about_bvec_para" style="margin-top: 110px; margin-right: 16px; border-left-width: 56px; text-align: justify;">
            <b>ST. Claret College (SCC)</b> was established in 2005 by the international Missionary Congregation of Claretians who manage two universities and over 150 educational institutions in 66 countries around the world. The Bengaluru campus is managed by Claretian Society for Integral Human Development which was established in 1989 with the aim of providing holistic and quality education. Apart from St. Claret College, the campus shelters four other educational institutions: St. Claret Evening College, St. Claret Pre-University College, St. Claret School, and Anthony Claret (AC) School. Moved by the spiritual inspiration of St. Anthony Mary Claret, its patron, and supported by the robust Christian intellectual tradition, SCC offers integral education to transform students to be enlightened leaders who bring about a civilization of love and harmony. SCC is recognized by UGC, permanently affiliated to Bangalore University, approved by AICTE and is accredited by NAAC with A+ Grade.
        </h6>
        <h5>Vision:</h5>
        <h6>To promote educational excellence, leadership and service, based on universal love in an environment characterized by respect for the individual and concern for the community, so as to effect holistic transformation in each student</h6>
        <h5>Mission:</h5>
        <h6>To form intellectually competent, professionally skilled, spiritually vibrant, morally responsible, socially just and culturally sensitive global citizens through holistic Claretine education to advance a civilization of love and harmony.</h6>
    </div>
</div>

<br><br><br><br>

<h1 align="center" class="reveal"><mark>Message from T&P Officer</mark></h1>

<div class="about_bvec row">
    <div class="col-md-8" style="padding-left: 50px; margin-top: 95px; margin-bottom: 15px;">
        <p class="about_bvec_para">
        <h4>Prameela</h4>
        <h5>T&P Officer</h5>
        <h6>Career Bridge, a Placement Management System, is engineered to revolutionize the traditional placement process within academic institutions. This innovative software tackles the challenges of manual placement procedures by providing a streamlined, error-resistant, and transparent platform for both students and administrators. Career Bridge offers a user-friendly interface that simplifies complex data entry, ensures data integrity, and reduces administrative burdens.</h6>
        <h6>SCC's Training and Placement Centre (TPC) assists the students to explore employment opportunities and new career avenues. A team of officers supervise the training and placement programs on the campus. TPC also helps students in career planning through counseling and career guidance. The TPC helps in the professional development of the students by training them towards employability skills such as resume-writing, group discussion and interview skills which in turn helps the students to move into their career of choice. A good portion of the placement training is carried out by experts from industries and corporate world.</h6>
    </div>
    <div class="col-md-4 mb-4 mb-md-0 text-md-right">
        <img src="images/Prameela.png" alt="Prameela" class="img-fluid" style="max-width: 80%; height: auto; margin-right: 47px;">
    </div>
</div>

<div style="text-align: center; margin-top: 50px; padding: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 5px;">
    <p style="color: white; margin: 0;">Developed and maintained by <strong>SMD Thousif</strong> and <strong>SR Sandeep</strong></p>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
