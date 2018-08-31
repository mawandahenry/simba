<?php
include("con.php");
if(isset($_POST["data1"])){
    $a = array();
    parse_str($_POST["data1"],$a);
    $id = $a['number'];
    $first = $a['first'];
    $last =$a['last'];
    $gender = $a['gender'];
    $age = $a['age'];
    $dob = $a['dob'];
    $nin = $a['NIN'];
    $status = $a['status'];
    $email = $a['email'];
    $contact = $a['contact'];
    $home = $a['home'];
    $emergency = $a['emergency'];
    $bank = $a['bank'];
    $branch = $a['branch'];
    $account = $a['account'];
    $county = $a['county'];
    $sub = $a['sub'];
    $nssf = $a['nssf'];
    $village = $a['village'];
    $dist = $a['district'];
    $kin = $a['kin'];
    $con = $a['hiscontact'];
    $res = $a['res'];
    $hire = $a['hire'];
    $start = $a['start'];
    $month = $a['month'];
    $kids = $a['kids'];
    $sql1 = "insert into guards(id,Employee_id,firstname,lastname,gender,
    village,DOB,kids,status,next_of_kin,NIN,bankname,branch,accountnumber,
    email,contact,emergencycontact,NSSFno,startdate,releasedate,hiredate,monthlypay,
    fullpayyear,earnedsofar)values(NULL,'".$id."','".$first."','".$last."','".$gender."',
    '".$village."','".$dob."','".$kids."','".$status."','".$kin."','".$nin."','".$bank."',
    '".$branch."','".$account."','".$email."','".$contact."','".$emergency."','".$nssf."',
    '".$start."',NULL,'".$hire."','".$month."',NULL,NULL)";

    $result = mysqli_query($link, $sql1);
    if($result){
        echo "success";
    }
    else{
        echo "error".mysqli_error($link);
    }
    
}
elseif (isset($_REQUEST["name"])){
    
    $Name = $_REQUEST['name']; 
    echo $Name;

   //$Query = "SELECT * FROM guards WHERE firstname LIKE '%$Name%' LIMIT 5";
  // $ExecQuery = MySQLi_query($con, $Query);
 
}else{
    echo "operation unsuccessful";
}
