<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <title>Homepage</title>

    <style>
        li a:hover{
            background-color: black;
            transition: 0.6s;
        }
    </style>
</head>
    <body style="background-color: #222629;">
    
    <div class="container">
        <div class="title">
            <span class="heading" style="color: gold;">Student Result Management System</span>
        </div>
        
        <div class="nav"style="display: flex; justify-content:center">
            <ul>
                <li>
                    <a href="index.php" style="color: gold;">Home</a>
                </li>
                <li>
                    <a href="login.php" style="color: gold;">Admin Login</a>
                </li>
                <li class="" onclick="toggleDisplay('1')">
                    <!-- <a href="#" class="dropbtn">Faculties &nbsp
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-content" id="1">
                        <a href="">Arts</a>
                        <a href="">Science</a>
                        <a href="">Commerce</a>
                        <a href="">Technology</a>
                        <a href="">Sports</a>
                        <a href="">Others</a>
                    </div>
                </li> -->
                <li class="" onclick="toggleDisplay('2')">
                    <a href="./login.php" class="dropbtn" style="color: gold;">Student Result
                    </a>
                    <!-- <div class="dropdown-content" id="2">
                        <a href="">Admissions</a>
                        <a href="">Scholarship</a>
                        <a href="">Examination</a>
                        <a href="">Manage Results</a>
                    </div> -->
                </li>
            </ul>
        </div>
    
        <div class="slider">
            <img src="https://travelrsguru.files.wordpress.com/2013/01/mumbai-university.jpg" class="slider-image" alt="img">
        </div>
    
        <div class="main" style="margin-top: 40px;">
            <span style="color: gold;">About the University</span>
            <p>The University of Mumbai (known earlier as University of Bombay) is one of the oldest and premier Universities in India. It was established in 1857 consequent upon "Wood's Education Dispatch", and it is one amongst the first three Universities in India. As a sequel to the change in the name of the city from Bombay to Mumbai, the name of the University has been changed from "University of Bombay" to "University of Mumbai", vide notification issued by the Government of Maharashtra and published in the Government Gazette dated 4th September, 1996. The University was accorded 5 star status in 2001 & 'A' grade status in April 2012 by the National Assessment and Accreditation Council (NAAC). It has been granted University with Potential for Excellence (UPE) status by UGC and PURSE Scheme by DST.</p>
    
            <!-- <div class="info"> -->
                <!-- <div>
                    <span>Courses</span> <hr>
                    <p>Still deciding what you want to study at university? Browse the full range of options with our course guides, a detailed information about types of program, specializations and career prospects.</p>
                </div> -->
                <!-- <div>
                    <span>Admissions</span> <hr>
                    <p>Whether your new to campus or are looking for more information on campus activities you can find information about admissions and financial aid here</p>
                </div>
                <div>
                    <span>Library</span> <hr>
                    <p>Be the first to know. Stay informed and up to date with the upcoming technology. Get varied knowledge right from social events to newest research topics by clicking the link</p>
                </div> -->
                <!-- <div>
                    <span>Campus Region</span> <hr>
                    <p>Welcome to Campus, a multipurpose WordPress theme. Go ahead and click around, there is a ton of new stuff to check out. For more information</p>
                </div> -->
            <!-- </div> -->
        </div>

        <div class="footer" style="margin-top: 40px;">
            <div class="footer--contact">
                <span style="color: gold;">Contact Us</span>
                <a href="" style="color: white;">om.m.deshmukh@slrtce.in</a>
                <a href="" style="color: white;">sujal.g.bhatt@slrtce.in</a>
                <a href="" style="color: white;">fardeen.j.kachawa@slrtce.in</a>
                <a href="" style="color: white">kaif.w.siddique@slrtce.in</a>
            </div>

        </div>

    </div>

</body>
</html>