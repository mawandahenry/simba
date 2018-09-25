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
    $bank = $a['bank'];                    // inserting the guards etails into the database
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
    $mum = $a['mum'];
    $dad = $a['dad'];
    $origin_name = $a['lname'];
    $origin_con = $a['lccontact'];
    $loc_name = $a['llcname'];
    $loc_con = $a['llccontact'];
    $loc_home = $a['lhome'];
    $loc_district = $a['ldistrict'];
    $loc_vil = $a['lvillage'];
    $loc_county = $a['lcounty'];



    $sql1 = "insert into guards(id,Employee_id,firstname,lastname,gender,
    village,DOB,kids,status,next_of_kin,NIN,bankname,branch,accountnumber,
    email,contact,emergencycontact,NSSFno,startdate,releasedate,hiredate,monthlypay,
    fullpayyear,earnedsofar,district,residence,county,subcounty,hiscontact,age,profile,mum,dad,lcname,
    lccontact,fired,ldistrict,llcname,llcontact,lcounty,lvillage,lhome,leav,reason)values(NULL,'".$id."','".$first."','".$last."','".$gender."',
    '".$village."','".$dob."','".$kids."','".$status."','".$kin."','".$nin."','".$bank."',
    '".$branch."','".$account."','".$email."','".$contact."','".$emergency."','".$nssf."',
    '".$start."',NULL,'".$hire."','".$month."',NULL,NULL,'".$dist."','".$res."','".$county."','".$sub."','".$con."','".$age."',NULL,'".$mum."','".$dad."',
    '".$origin_name."','".$origin_con."', 'NO','".$loc_district."','".$loc_name."','".$loc_con."','".$loc_county."','".$loc_vil."','".$loc_home."','NO','NONE')";

    $result = mysqli_query($link, $sql1);
       if($result){
        echo "success";
    }
    else{
        echo "error".mysqli_error($link);
    }
    
}
elseif(isset($_POST["key"])){
    
    $key=$_POST['key'];
    
    $array = array();
    
    $query=mysqli_query($link, "SELECT * FROM guards WHERE firstname LIKE '%{$key}%' AND fired = 'NO' ");
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
    $query2 = mysqli_query($link, "SELECT * FROM guards WHERE id = '$edit' AND fired ='NO'");
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
    $mum = $edit['edit_mum'];
    $dad = $edit['edit_dad'];
    $origin_name = $edit['edit_2'];
    $origin_con = $edit['edit_3'];
    $loc_name = $edit['edit_4'];
    $loc_con = $edit['edit_llccontact'];
    $loc_home = $edit['edit_lhome'];
    $loc_district = $edit['edit_ldistrict'];
    $loc_vil = $edit['edit_lvillage'];
    $loc_county = $edit['edit_lcounty'];

    $my_sql = "update guards set Employee_id = '".$number."',firstname= '".$first."',lastname= '".$last."',gender = '".$gender."',age = '".$age."',
    DOB = '".$dob."', NIN = '".$nin."', status = '".$status."',email = '".$email."',contact = '".$contact."',emergencycontact = '".$emergency."',
    bankname = '".$bank."',branch = '".$branch."',accountnumber = '".$account."',county = '".$county."',subcounty = '".$sub."',NSSFno = '".$nssf."',
    village = '".$village."',district = '".$dist."',next_of_kin = '".$kin."', hiscontact = '".$con."',residence = '".$res."',hiredate = '".$hire."',
    startdate = '".$start."',monthlypay = '".$month."',kids = '".$kids."',mum = '".$mum."',dad = '".$dad."',
    lcname = '".$origin_name."', lccontact = '".$origin_con."', ldistrict = '".$loc_district."', llcname = '".$loc_name."',llcontact = '".$loc_con."',
    lcounty = '".$loc_county."', lvillage = '".$loc_vil."', lhome = '".$loc_home."' where id = '".$this_id."'";
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
$validextensions = array("jpeg", "jpg", "png","JPG");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 5000000)//Approx. 5mb files can be uploaded.
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
elseif(isset($_POST["key2"])){
    $key2=$_POST['key2'];  //searches for a guard to be fired
    $array2 = array();
    $query=mysqli_query($link, "SELECT * FROM guards WHERE firstname LIKE '%{$key2}%' AND fired ='NO'");
    $count =0;
    while($row=mysqli_fetch_assoc($query))
    {
        $array2[$count++] = $row;
    }
    echo json_encode($array2);
    mysqli_close($link);
}
elseif(isset($_POST["deleted"])){ //updates the fire thing when a guard is fired
    $niw = array();
    parse_str($_POST["deleted"], $niw);
    $id = $niw['id'];
    $reason = $niw['reason'];
    $fire = $niw['fired'];
    $query_2 = mysqli_query($link, "update guards set fired = 'YES', reason = '$reason', releasedate = '$fire' where id = '$id'");
    if($query_2){
        echo "success";
    }else{
        echo "user could not be deleted";
    }
    

}
elseif(isset($_POST["dey"])){//..............editing neede here.....
    $key3=$_POST["dey"];
    
     //returns details searched in the details search form
    $array4 = array();
    $query=mysqli_query($link, "SELECT * FROM guards WHERE firstname LIKE  '%{$key3}%' AND fired = 'NO'");
    $count =0;
    while($row=mysqli_fetch_assoc($query))
    {
        $array4[$count++] = $row;
    }
    echo json_encode($array4);
    mysqli_close($link);
}
elseif(isset($_REQUEST["det"])){
    $key4=$_REQUEST["det"];
    //$req = mysqli_real_escape_string($key4); // returns the guards details when he/she is clicked
    $array5 = array();
    $query=mysqli_query($link, "SELECT * FROM guards WHERE id = '".$key4."'");
    $count =0;
    while($row=mysqli_fetch_assoc($query))
    {
        $array5[$count++] = $row;
    }
    echo json_encode($array5);
    mysqli_close($link);
}
elseif(isset($_POST["yello"])){

    $query8=mysqli_query($link, "select count(id) as tot from guards");
    // $query9=mysqli_query($link, "select count(gender) as males from guards where gender = 'Male'");
    // $query10=mysqli_query($link, "select count(gender) as females from guards where gender = 'Female'");
    // $query11=mysqli_query($link, "select count(id) as fired from guards where fired = 'YES'");
    // $query12=mysqli_query($link, "select count(id) as avas from guards where fired = 'NO'");
    $county = 0; 
    $nams = array();
    while ($row = mysqli_fetch_assoc($query8)) {
        $nams[$county++] = $row;
    }
    echo json_encode($nams);
    mysqli_close($link);
}
elseif(isset($_POST["yello2"])){
    $query9=mysqli_query($link, "select count(gender) as males from guards where gender = 'Male'");
    // $query10=mysqli_query($link, "select count(gender) as females from guards where gender = 'Female'");
    // $query11=mysqli_query($link, "select count(id) as fired from guards where fired = 'YES'");
    // $query12=mysqli_query($link, "select count(id) as avas from guards where fired = 'NO'");
    $county = 0; 
    $namx = array();
    while ($row = mysqli_fetch_assoc($query9)) {
        $namx[$county++] = $row;
    }
    echo json_encode($namx);
    mysqli_close($link);
}
elseif(isset($_POST["yello3"])){
   
     $query10=mysqli_query($link, "select count(gender) as females from guards where gender = 'Female'");
    // $query11=mysqli_query($link, "select count(id) as fired from guards where fired = 'YES'");
    // $query12=mysqli_query($link, "select count(id) as avas from guards where fired = 'NO'");
    $county1 = 0; 
    $namx2 = array();
    while ($row = mysqli_fetch_assoc($query10)) {
        $namx2[$county++] = $row;
    }
    echo json_encode($namx2);
    mysqli_close($link);
}
elseif(isset($_POST["yello4"])){
   
     $query10=mysqli_query($link, "select count(id) as fired from guards where fired = 'YES'");
    // $query11=mysqli_query($link, "select count(id) as fired from guards where fired = 'YES'");
    // $query12=mysqli_query($link, "select count(id) as avas from guards where fired = 'NO'");
    $count = 0; 
    $namx3 = array();
    while ($row = mysqli_fetch_assoc($query10)) {
        $namx3[$count++] = $row;
    }
    echo json_encode($namx3);
    mysqli_close($link);
}
elseif(isset($_POST["yello5"])){
   
     $query14=mysqli_query($link, "select count(id) as leav from guards where leav = 'YES'");
    // $query11=mysqli_query($link, "select count(id) as fired from guards where fired = 'YES'");
    // $query12=mysqli_query($link, "select count(id) as avas from guards where fired = 'NO'");
    $cou = 0; 
    $n = array();
    while ($row = mysqli_fetch_assoc($query14)) {
        $n[$cou++] = $row;
    }
    echo json_encode($n);
    mysqli_close($link);
}
elseif(isset($_POST["yello6"])){
   
     //$query14=mysqli_query($link, "select count(id) as leav from guards where leav = 'YES'");
    // $query11=mysqli_query($link, "select count(id) as fired from guards where fired = 'YES'");
    $query16=mysqli_query($link, "select count(id) as avai from guards where fired = 'NO' && leav = 'NO'");
    $coin= 0; 
    $ny = array();
    while ($row = mysqli_fetch_assoc($query16)) {
        $ny[$coin++] = $row;
    }
    echo json_encode($ny);
    mysqli_close($link);
}
elseif(isset($_POST["yello7"])){
   
     //$query14=mysqli_query($link, "select count(id) as leav from guards where leav = 'YES'");
    // $query11=mysqli_query($link, "select count(id) as fired from guards where fired = 'YES'");
    $query19=mysqli_query($link, "select * from guards where gender = 'Male'");
    $cot= 0; 
    $nyt = array();
    while ($row = mysqli_fetch_assoc($query19)) {
        $nyt[$cot++] = $row;
    }
    echo json_encode($nyt);
    mysqli_close($link);
}
elseif(isset($_POST["yello8"])){
   
     //$query14=mysqli_query($link, "select count(id) as leav from guards where leav = 'YES'");
    // $query11=mysqli_query($link, "select count(id) as fired from guards where fired = 'YES'");
    $query0=mysqli_query($link, "select * from guards where gender = 'Female'");
    $c= 0; 
    $cc = array();
    while ($row = mysqli_fetch_assoc($query0)) {
        $cc[$c++] = $row;
    }
    echo json_encode($cc);
    mysqli_close($link);
}
elseif(isset($_POST["yello9"])){
   
     //$query14=mysqli_query($link, "select count(id) as leav from guards where leav = 'YES'");
    // $query11=mysqli_query($link, "select count(id) as fired from guards where fired = 'YES'");
    $query02=mysqli_query($link, "select * from guards");
    $c1= 0; 
    $cc2 = array();
    while ($row = mysqli_fetch_assoc($query02)) {
        $cc2[$c1++] = $row;
    }
    echo json_encode($cc2);
    mysqli_close($link);
}
elseif(isset($_POST["yel"])){
   
     //$query14=mysqli_query($link, "select count(id) as leav from guards where leav = 'YES'");
    // $query11=mysqli_query($link, "select count(id) as fired from guards where fired = 'YES'");
    $ql=mysqli_query($link, "select * from guards where fired = 'NO'");
    $x= 0; 
    $cx= array();
    while ($row = mysqli_fetch_assoc($ql)) {
        $cx[$x++] = $row;
    }
    echo json_encode($cx);
    mysqli_close($link);
}
elseif(isset($_POST["burn"])){
   
     //$query14=mysqli_query($link, "select count(id) as leav from guards where leav = 'YES'");
    // $query11=mysqli_query($link, "select count(id) as fired from guards where fired = 'YES'");
    $queryt=mysqli_query($link, "select * from guards where fired = 'YES'");
    $ct= 0; 
    $cm = array();
    while ($row = mysqli_fetch_assoc($queryt)) {
        $cm[$ct++] = $row;
    }
    echo json_encode($cm);
    mysqli_close($link);
}
elseif(isset($_POST["yellox"])){
   
     //$query14=mysqli_query($link, "select count(id) as leav from guards where leav = 'YES'");
    // $query11=mysqli_query($link, "select count(id) as fired from guards where fired = 'YES'");
    $q=mysqli_query($link, "select * from guards where fired = 'NO' && leav = 'YES' ");
    $cty= 0; 
    $cmx= array();
    while ($row = mysqli_fetch_assoc($q)) {
        $cmx[$cty++] = $row;
    }
    echo json_encode($cmx);
    mysqli_close($link);
}
else{
    echo "operation unsuccessful";
}
