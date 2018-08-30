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
elseif (isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM guards WHERE name LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["name"] . "</p>";
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($link);
else{
    echo "nop";
}