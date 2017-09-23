<?php 

include('connection.php'); 

function user_registration($name,$email,$pass){
    
    global $conn;
    $sql="INSERT INTO `registration`(`user_id`, `user_name`, `user_email`, `user_pass`) VALUES ('','$name','$email','$pass')";
    if (!mysqli_query($conn,$sql)){
        echo("Error description: " . mysqli_error($conn));
    }
    else{
        echo "<h4>Posted Successfully</h4>";
    }
    mysqli_close($conn);
}


function user_login($useremail,$userpass){
    
    global $conn;
    $sql = "SELECT * FROM `registration` WHERE `user_email`='$useremail' AND `user_pass`='$userpass'";

    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);


    //gets id and password from the result
    $getid = $row['user_id'];
    $getuser = $row['user_name'];
    $getemail = $row['user_email'];
    $getpassword = $row['user_pass'];

 
    if($userpass==$getpassword){
        $_SESSION['id'] = $getid;
        $_SESSION['name'] = $getuser;
        $_SESSION['email'] = $getemail;
        header("Location: userlogin/home.php");
    }
    else{
     echo "<h4>Please try again</h4>";
 }
}



function user_info($fname,$lname,$email1,$email2,$gender,$marital,$religion,$tel,$tel,$nid,$pass,$comment){
    global $conn;
    $sql="INSERT INTO `user`(`u_id`, `u_fname`, `u_lname`, `u_emailaddr1`, `u_emailaddr2`, `u_gender`, `u_marital`, `u_religion`, `u_tel`, `u_dob`, `u_nid`, `u_passport`, `u_comment`) VALUES ('','$fname','$lname','$email1','$email2','$gender','$marital','$religion','$tel','$tel','$nid','$pass','$comment')";

    if (!mysqli_query($conn,$sql)){
        echo("Error description: ".mysqli_error($conn));
      }
      else{
        echo "<h4>User Info Posted Successfully</h4>";
      }
      
    
    

}



function user_address($id,$address,$city,$zip){
    global $conn;
    $sql="INSERT INTO `address`(`addr_id`, `u_id`, `addr_1`, `addr_city`, `addr_zip`) VALUES ('','$id','$address','$city','$zip')";

    if (!mysqli_query($conn,$sql)){
        echo("Error description: ".mysqli_error($conn));
    }
    else{
        echo "<h4>Address Info Posted Successfully</h4>";
    }
  
    
}


function current_job($jid,$jstatus,$jorg,$jpost,$jsal,$jloc,$jdur,$jcomm){
    global $conn;
    
    $sql="INSERT INTO `jobhistory`(`job_id`, `u_id`, `job_status`, `job_org`, `job_post`, `job_sal`, `job_loc`, `job_dur`, `job_comm`) VALUES ('','$jid','$jstatus','$jorg','$jpost','$jsal','$jloc','$jdur','$jcomm')";
    if (!mysqli_query($conn,$sql)){
        echo("Error description: ".mysqli_error($conn));
    }
    else{
        echo "<h4>Job Info Posted Successfully</h4>";
    }
   
}



function publication($pid,$pdate,$ploc,$ptop,$pdes){
    global $conn;
    $sql="INSERT INTO `publication`(`pub_id`, `u_id`, `pub_date`, `pub_loc`, `pub_topic`, `pub_desc`) VALUES ('','$pid','$pdate','$ploc','$ptop','$pdes')";
    if (!mysqli_query($conn,$sql)){
        echo("Error description: ".mysqli_error($conn));
    }
    else{
        echo "<h4>Publication Info Posted Successfully</h4>";
    }

}


function reference($id,$des){
    global $conn;
    $sql="INSERT INTO `reference`(`ref_id`, `u_id`, `ref_desc`) VALUES ('','$id','$des')";
    if (!mysqli_query($conn,$sql)){
        echo("Error description: ".mysqli_error($conn));
    }
    else{
        echo "<h4>Reference Info Posted Successfully</h4>";
    }
   
}




function skill($sid,$slist){
    global $conn;
    $sql="INSERT INTO `skill`(`skill_id`, `u_id`, `skill_list`) VALUES ('','$sid','$slist')";
    if (!mysqli_query($conn,$sql)){
        echo("Error description: ".mysqli_error($conn));
    }
    else{
        echo "<h4>Skill info Posted Successfully</h4>";
    }

}



function links($lid,$furl,$lurl){
    global $conn;
    $sql="INSERT INTO `links`(`link_id`, `u_id`, `link_facebook`, `link_linkedin`) VALUES ('','$lid','$furl','$lurl')";
    if (!mysqli_query($conn,$sql)){
        echo("Error description: ".mysqli_error($conn));
    }
    else{
        echo "<h4>Link info Posted Successfully</h4>";
    }
   
       
}


function education($eid,$ssctype,$sscins,$sscdate,$sscgpa,$sscdes,$hsctype,$hscins,$hscdate,$hscgpa,$hscdes,$undtype,$undins,$unddate,$undgpa,$unddes){
    
    global $conn;
    
    $sql1="INSERT INTO `education`(`edu_id`, `u_id`, `edu_type`, `edu_inst`, `edu_date_comp`, `edu_gpa`, `edu_desc`) 
    VALUES ('','$eid','$ssctype','$sscins','$sscdate','$sscgpa','$sscdes')";
    $sql2="INSERT INTO `education`(`edu_id`, `u_id`, `edu_type`, `edu_inst`, `edu_date_comp`, `edu_gpa`, `edu_desc`) 
    VALUES  ('','$eid','$hsctype','$hscins','$hscdate','$hscgpa','$hscdes')";
    $sql3="INSERT INTO `education`(`edu_id`, `u_id`, `edu_type`, `edu_inst`, `edu_date_comp`, `edu_gpa`, `edu_desc`) 
    VALUES ('','$eid','$undtype','$undins','$unddate','$undgpa','$unddes')";
    
    if (!mysqli_query($conn,$sql1) && !mysqli_query($conn,$sql2) && !mysqli_query($conn,$sql3)){
        echo("Error description: ".mysqli_error($conn));
    }
    else{
        echo "<h4>Education Info Posted Successfully</h4>";
    }

       
}



function workexp($wid,$wdes){
    global $conn;
    $sql="INSERT INTO `workexperience`(`w_id`, `u_id`, `w_exp`) VALUES ('','$wid','$wdes')";
    if (!mysqli_query($conn,$sql)){
        echo("Error description: ".mysqli_error($conn));
    }
    else{
        echo "<h4>Working Experience Posted Successfully</h4>";
    }
    
}


function coursecom($cid,$cdes){
    global $conn;
    $sql="INSERT INTO `course`(`course_id`, `u_id`, `course_desc`) VALUES ('','$cid','$cdes')";
    if (!mysqli_query($conn,$sql)){
        echo("Error description: ".mysqli_error($conn));
    }
    else{
        echo "<h4>Courses Info Posted Successfully</h4>";
    }
    
}


    

?>




<!--

function f($,$,$,$,$,$){
    global $conn;
    $sql="";
    if (!mysqli_query($conn,$sql)){
        echo("Error description: ".mysqli_error($conn));
    }
    else{
        echo "<h4>Posted Successfully</h4>";
    }
    mysqli_close($conn);
       
}


-->