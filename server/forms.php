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
    fullpayyear,earnedsofar,district,residence,county,subcounty,hiscontact,age,profile)values(NULL,'".$id."','".$first."','".$last."','".$gender."',
    '".$village."','".$dob."','".$kids."','".$status."','".$kin."','".$nin."','".$bank."',
    '".$branch."','".$account."','".$email."','".$contact."','".$emergency."','".$nssf."',
    '".$start."',NULL,'".$hire."','".$month."',NULL,NULL,'".$dist."','".$res."','".$county."','".$sub."','".$con."','".$age."',NULL)";

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
else if(isset($_FILES["file"]["type"]))
{
$emp_id = $_POST['numbs'];
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 5000000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
}
else
{
if (file_exists("../server/uploads/" . $_FILES["file"]["name"])) {
echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
}
else
{
$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "../server/uploads/".$_FILES['file']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
$move = "update guards set profile = '".$_FILES['file']['name']."' where Employee_id = '".$emp_id."' ";
if(mysqli_query($link,$move)){
echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";


}else{
    echo mysqli_error($link);
}

}
}
}
else
{
echo "<span id='invalid'>***Invalid file Size or Type***<span>";
}
}
elseif(isset($_REQUEST["key2"])){
    $key2=$_REQUEST['key2'];
    $array2 = array();
    
    $query=mysqli_query($link, "select * from guards where firstname LIKE '%{$key2}%'");
    $count =0;
    while($row=mysqli_fetch_assoc($query))
    {
        $array2[$count++] = $row;
    }
    echo json_encode($array2);
    mysqli_close($link);
}
elseif(isset($_REQUEST["deleted"])){
    $edit2 = $_REQUEST["deleted"];
    $query_2 = mysqli_query($link, "DELETE from guards where id = '$edit2'");
    if($query_2){
        echo "success";
    }else{
        echo "user could not be deleted";
    }
    

}
else{
    echo "operation unsuccessful";
}
