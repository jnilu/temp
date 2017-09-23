<?php 
session_start();
if(!isset($_SESSION['id'])){
    header("Location: ../login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">

    <!--jquery-->
    <script type="text/javascript" src="../js/jquery-3.2.1.slim.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="header clearfix">
            <nav>
                <ul class="nav nav-pills float-right">
                    <li class="nav-item">
                        <a class="nav-link active" href="home.php">Back</a>
                    </li>
                </ul>
            </nav>
            <h3 class="text-muted">CV</h3>
        </div>


        <form method="post" action="cv.php">


            <h3>Personal Information</h3>

            <!--first name-->
            <div class="form-group">
                <label for="inputName">First Name</label>
                <input type="text" data-toggle="tooltip" title="Enter First Name" class="form-control" name="inputfname"  required="required">
            </div>


            <!--last name-->
            <div class="form-group">
                <label for="inputName">Last Name</label>
                <input type="text" data-toggle="tooltip" title="Some tooltip text!" class="form-control" name="inputlname" placeholder="Enter name" required="required">
            </div>


            <!--email1-->
            <div class="form-group">
                <label for="inputEmail">Email address 1</label>
               <!-- <small id="emailHelp" class="form-text text-muted">Personal Email Address</small>-->
                <input type="email" data-toggle="tooltip" title="Enter Personal email" class="form-control" name="inputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="required">
            </div>

            <!--email 2-->
            <div class="form-group">
                <label for="inputEmail">Email address 2</label>
               <!-- <small id="emailHelp" class="form-text text-muted">Official Email Address</small>-->
                <input type="email" data-toggle="tooltip" title="Enter Official Email!" class="form-control" name="inputEmail2" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <!--Gender-->
            <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="gender" required="required" >
                  <option value="" selected="selected" disabled="disabled">-- select one --</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
            </div>

            <!--Marital Status-->
            <div class="form-group">
                <label>Marital Status</label>
                <select class="form-control" name="marital" required="required">
                  <option value="" selected="selected" disabled="disabled">-- select one --</option>
                  <option value="Male">Single</option>
                  <option value="Female">Married</option>
                </select>
            </div>

            <!--Religion-->
            <div class="form-group">
                <label>Religion</label>
                <select class="form-control" name="religion" required="required">
                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                    <option value="Buddhism">Buddhism</option>
                    <option value="Christianity">Christianity</option>
                    <option value="Hinduism">Hinduism</option>
                    <option value="Islam">Islam</option>
                    <option value="Other">Other</option>
                </select>
            </div>


            <!--Phone-->
            <div class="form-group">
                <label for="inputEmail">Phone</label>
                <input type="number" data-toggle="tooltip" title="Enter Phone no." class="form-control" name="inputPhone" placeholder="Enter Phone no." required="required">
            </div>

            <!--Date of Birth-->
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" class="form-control" name="inputDateofbirth" placeholder="Birthdate" required="required">
            </div>

            <!--Nid-->
            <div class="form-group">
                <label>National ID</label>
                <small id="nHelp" class="form-text text-muted">if available</small>
                <input type="text" class="form-control" name="inputNid" aria-describedby="nHelp" placeholder="Enter nid no.">
            </div>

            <!--Passport-->
            <div class="form-group">
                <label>Passport No.</label>
                <small id="pHelp" class="form-text text-muted">if available</small>
                <input type="text" class="form-control" name="inputPassport" aria-describedby="pHelp" placeholder="Enter Password no.">
            </div>


            <!--Personal Notes-->
            <div class="form-group">
                <h4>Personal Notes</h4>
                <label for="inputName">About Me</label>
                <textarea class="form-control" placeholder="Write something..." name="pnotes" rows="3"></textarea>
            </div>





            <!--End of Personal info-->



            <!--Start of Address-->

            <h4>Address</h4>

            <!--Address-->
            <div class="form-group">
                <label for="inpuaddress">Residence Address</label>
                <input type="text" class="form-control" name="inputAddress" placeholder="Enter Address." required="required">
            </div>

            <!--City-->
            <div class="form-group">
                <label for="inpuaddress">City</label>
                <input type="text" class="form-control" name="inputCity" placeholder="" required="required">
            </div>

            <!--Zip-->
            <div class="form-group">
                <label for="inpuaddress">Zip</label>
                <input type="number" class="form-control" name="inputZip" placeholder="">
            </div>

            <!--End of Address-->







            <!--Start of Education-->




            <!--Education-->
            <h3>Educational Qualification</h3>
            <div class="form-group">
                <h4>SSC/O-level</h4>

                <!--ssc or o-level-->
                <div class="form-group">
                    <label></label>
                    <select class="form-control" name="inputed1" required="required">
                        <option value="" selected="selected" disabled="disabled">-- select one --</option>
                        <option value="SSC">SSC</option>
                        <option value="O-Level">O-Level</option>
                    </select>
                </div>

                <label for="">School Name</label>
                <input type="text" class="form-control" name="inputsscname" placeholder="" required="required">
                <label for="">Passing Year</label>
                <input type="number" min='1899' max='3000' class="form-control" name="inputsscyear" required="required">
                <label for="">GPA</label>
                <input type="text" class="form-control" name="inputsscgpa">

                <label>Other</label>
                <textarea class="form-control" placeholder="Write something..." name="sscNotes" rows="1"></textarea>
            </div>

            <div class="form-group">
                <h4>HSC/A-level</h4>

                <!--hsc or A-level-->
                <div class="form-group">
                    <label></label>
                    <select class="form-control" name="inputed2" required="required">
                        <option value="" selected="selected" disabled="disabled">-- select one --</option>
                        <option value="HSC">HSC</option>
                        <option value="A-Level">A-Level</option>
                    </select>
                </div>

                <label for="">Institution Name</label>
                <input type="text" class="form-control" name="inputhscname" placeholder="HSC/A-level" required="required">
                <label for="">Passing Year</label>
                <input type="number" min='1899' max='3000' class="form-control" name="inputhscyear" required="required">
                <label for="">GPA</label>
                <input type="text" class="form-control" name="inputhscgpa">

                <label for="inputName">Other</label>
                <textarea class="form-control" placeholder="Write something..." name="hscNotes" rows="1"></textarea>
            </div>

            <div class="form-group">
                <h4>Undergraduate</h4>

                <!--Undergrad-->
                <div class="form-group">
                    <label></label>
                    <select class="form-control" name="inputedu3" required="required">
                        <option selected="selected" value="undergraduate">Undergraduate</option>
                    </select>
                </div>


                <label for="">Institution Name</label>
                <input type="text" class="form-control" name="inputundergradname" placeholder="University" required="required">
                <label for="">Passing Year</label>
                <input type="number" min='1899' max='3000' class="form-control" name="inputundergradyear">
                <label for="">GPA</label>
                <input type="text" class="form-control" name="inputundergradcgpa">

                <label for="inputName">Other</label>
                <textarea class="form-control" placeholder="Write something..." name="undergradNotes" rows="1"></textarea>
            </div>




            <!--End of Address-->



            <!--Start of Links-->



            <h4>Social Media</h4>
            <!--Facebook link-->
            <div class="form-group">
                <label>Facebook link</label>
                <input type="url" class="form-control" name="inputUrl1" placeholder="">
            </div>

            <!--Linkedin link-->
            <div class="form-group">
                <label>Linkedin link</label>
                <input type="url" class="form-control" name="inputUrl2" placeholder="">
            </div>


            <!--END of Links-->






            <!--Start of Skills-->


            <!--Techskills-->
            <div class="form-group">
                <h4>Technical Skills</h4>
                <textarea class="form-control" name="inputTechSkills" rows="4" title="Enter Skill list separated by comma exp: PHP,C++,C,Ruby on Rails"></textarea>
            </div>


            <!--END of skills-->










            <!--Start of  Certificate-->



            <!--Professional Certification-->
            <div class="form-group">
                <h4>Courses Completed</h4>
                <textarea class="form-control" name="inputCourseCom" rows="4" title="Enter Completed Courses separated by comma"></textarea>
            </div>

            <h3>Current Job</h3>



            <!--END of Certificate-->



            <!--Start of Current job-->


            <!--Current job status-->
            <div class="form-group">
                <label>Job Status</label>
                <select class="form-control" name="inputJobStatus" required="required">
                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                    <option value="Employed">Employed</option>
                    <option value="Unemployed">Unemployed</option>
                </select>




                <!--Current Organization-->

                <label>Organization Name</label>
                <input type="text" class="form-control" name="inputorg">


                <!--Job Position-->

                <label>Job Position</label>
                <input type="text" class="form-control" name="inputjobpos">

                <!--Job location-->

                <label>Job Location</label>
                <input type="text" class="form-control" name="inputjobloc">


                <!--Job duration-->

                <label>Job Duration</label>
                <input type="text" class="form-control" placeholder="days/weeks/months/years" name="inputjobdur">


                <!--Salary-->

                <label>Salary</label>
                <input type="number" class="form-control" name="inputsalary">
            </div>

            <div class="form-group">
                <label>Job Description</label>
                <textarea class="form-control" name="inpujobdes" rows="4" data-toggle="tooltip"></textarea>
            </div>





            <!--Start of current job-->




            <!--Start of Work Exp-->


            <!--Work Experience-->
            <div class="form-group">
                <h4>Other Working Experiences</h4>
                <textarea class="form-control" name="inputWorkExp" rows="4" data-toggle="tooltip" title="Enter work experience separated by comma"></textarea>
            </div>



            <!--END of Work Exp-->





            <!--Start of Publication-->



            <!--Publication-->
            <div class="form-group">
                <h4>Publication</h4>

                <label>Publication Date</label>
                <input type="date" class="form-control" placeholder="" name="inputpubdate">


                <label>Publication Location</label>
                <input type="text" class="form-control" placeholder="" name="inputpubloc">

                <label>Publication Topic</label>
                <input type="text" class="form-control" placeholder="" name="inputpubtop">


                <label>Publication Description</label>
                <textarea class="form-control" name="inputPubdes" rows="4"></textarea>
            </div>



            <!--END of Publication-->



            <!--Start of Reference-->


            <!--Reference-->
            <div class="form-group">
                <h4>Reference</h4>
                <textarea class="form-control" name="inputRef" rows="4" title="Enter References separated by comma"></textarea>
            </div>

            <!--End of Reference-->



            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>


    </div>
    <!-- /container -->


    <script src="../js/tether.min.js"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <!--<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>-->
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>




<?php
include("../connection.php");
include("../function.php");


if(isset($_POST['submit'])){
    
    user_info($_POST['inputfname'],$_POST['inputlname'],$_POST['inputEmail1'],$_POST['inputEmail2'],$_POST['gender'],$_POST['marital'],$_POST['religion'],$_POST['inputPhone'],$_POST['inputDateofbirth'],$_POST['inputNid'],$_POST['inputPassport'],$_POST['pnotes']);
    
    user_address($_SESSION['id'],$_POST['inputAddress'],$_POST['inputCity'],$_POST['inputZip']);
    
    
    
    publication($_SESSION['id'],$_POST['inputpubdate'],$_POST['inputpubloc'],$_POST['inputpubtop'],$_POST['inputPubdes']);
    
    
    reference($_SESSION['id'],$_POST['inputRef']);
    
    current_job($_SESSION['id'],$_POST['inputJobStatus'],$_POST['inputorg'],$_POST['inputjobpos'],$_POST['inputsalary'],$_POST['inputjobloc'],$_POST['inputjobdur'],$_POST['inpujobdes']);
    
    
    skill($_SESSION['id'],$_POST['inputTechSkills']);
    
    
    links($_SESSION['id'],$_POST['inputUrl1'],$_POST['inputUrl2']);
    
    
    education($_SESSION['id'],$_POST['inputed1'],$_POST['inputsscname'],$_POST['inputsscyear'],$_POST['inputsscgpa'],$_POST['sscNotes'],$_POST['inputed2'],$_POST['inputhscname'],$_POST['inputhscyear'],$_POST['inputhscgpa'],$_POST['hscNotes'],$_POST['inputedu3'],$_POST['inputundergradname'],$_POST['inputundergradyear'],$_POST['inputundergradcgpa'],$_POST['undergradNotes']);
    
    
    
    workexp($_SESSION['id'],$_POST['inputWorkExp']);
    
    coursecom($_SESSION['id'],$_POST['inputCourseCom']);

}

?>









    <!--
publication(,$_POST[''],$_POST[''],$_POST[''],$_POST[''],$_POST[''],$_POST[''],$_POST['']);-->