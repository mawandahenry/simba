<?php
include("con.php");
if(isset($_POST["data1"])){
    $a = array();
    parse_str($_POST["data1"],$a);
    $id = $a['number'];
    $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
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
    fullpayyear,earnedsofar,district,residence,county,subcounty,hiscontact,age,profile)values(NULL,'".$id."','".$first."','".$last."','".$gender."',
    '".$village."','".$dob."','".$kids."','".$status."','".$kin."','".$nin."','".$bank."',
    '".$branch."','".$account."','".$email."','".$contact."','".$emergency."','".$nssf."',
    '".$start."',NULL,'".$hire."','".$month."',NULL,NULL,'".$dist."','".$res."','".$county."','".$sub."','".$con."','".$age."','".$image."')";

    $result = mysqli_query($link, $sql1);
       if($result){
         echo "success";
    }
    else{
        echo "error".mysqli_error($link);
    }
    
}
elseif(isset($_REQUEST["key"])){
    $key=$_REQUEST['key'];
    $array = array();
    
    $query=mysqli_query($link, "select * from guards where firstname LIKE '%{$key}%'");
    $count =0;
    while($row=mysqli_fetch_assoc($query))
    {
        $array[$count++] = $row;
    }
    echo json_encode($array);
    mysqli_close($link);
}
elseif(isset($_REQUEST["edit"])){
    $edit = $_REQUEST["edit"];
    $search_array = array();
    $query2 = mysqli_query($link, "select * from guards where id = '$edit'");
    $count2=0;
    while($row2 = mysqli_fetch_assoc($query2)){
        $search_array[$count2++] = $row2;
    }
    echo json_encode($search_array);

}
elseif(isset($_REQUEST['edited'])){
    $edit = array();
    parse_str($_REQUEST['edited'],$edit);
    $number = $edit['edit_number'];
    $this_id = $edit['id'];
    $first = $edit['edit_first'];
    $last =$edit['edit_last'];
    $gender = $edit['edit_Gender'];
    $age = $edit['edit_age'];
    $dob = $edit['edit_dob'];
    $nin = $edit['edit_NIN'];
    $status = $edit['edit_status'];
    $email = $edit['edit_email'];
    $contact = $edit['edit_contact'];
    $home = $edit['edit_home'];//odd man out
    $emergency = $edit['edit_emergency'];
    $bank = $edit['edit_bank'];
    $branch = $edit['edit_branch'];
    $account = $edit['edit_account'];
    $county = $edit['edit_county'];
    $sub = $edit['edit_sub'];
    $nssf = $edit['edit_nssf'];
    $village = $edit['edit_village'];
    $dist = $edit['edit_district'];
    $kin = $edit['edit_kin'];
    $con = $edit['edit_hiscontact'];
    $res = $edit['edit_res'];
    $hire = $edit['edit_hire'];
    $start = $edit['edit_start'];
    $month = $edit['edit_month'];
    $kids = $edit['edit_kids'];

    $my_sql = "update guards set Employee_id = '".$number."',firstname= '".$first."',lastname= '".$last."',gender = '".$gender."',age = '".$age."',
    DOB = '".$dob."', NIN = '".$nin."', status = '".$status."',email = '".$email."',contact = '".$contact."',emergencycontact = '".$emergency."',
    bankname = '".$bank."',branch = '".$branch."',accountnumber = '".$account."',county = '".$county."',subcounty = '".$sub."',NSSFno = '".$nssf."',
    village = '".$village."',district = '".$dist."',next_of_kin = '".$kin."', hiscontact = '".$con."',residence = '".$res."',hiredate = '".$hire."',
    startdate = '".$start."',monthlypay = '".$month."',kids = '".$kids."' where id = '".$this_id."'";
    $exec = mysqli_query($link, $my_sql);
    if($exec){
        echo "success";
    }
    else{
        echo "error".mysqli_error($link);
    }
    
}
else{
    echo "operation unsuccessful";
}
