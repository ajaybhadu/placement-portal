<?php

$link = mysqli_connect("localhost", "root", "", "placementportal");
if($link === false)
{

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

$Reg_No = $Year_Of_Passing = $Class10_YOP = $Class10_Percentage = $Class12_YOP = $Class12_Percentage = $Diploma_YOP = $Diploma_Percentage = $Break = $Current_Cgpa = $S1_gpa = $S2_gpa = $S3_gpa = $S4_gpa = $S5_gpa = $S6_gpa = $S7_gpa = $S8_gpa = $Standing_Arrears = $H_Arrears = $Pin = $P_Pin = $Mobile = $Mobile_Sec = $F_Number = $M_Number = $Height = $Weight = $I_Duration1 = $I_Duration2 = $I_Duration3 = 0;
$Name = $Gender = $DOB = $Department = $University = $Campus = $Class10_Board = $Class12_Board = $DiplomaB = $Diploma_WE = $Reason_Break = $Work_Exp = $ES1 = $ES2 = $ES3 = $Address = $City = $State = $P_Address = $P_City = $P_State = $Email = $Email_Sec = $F_Name = $F_Occupation = $FC_Name = $F_Designation = $FC_Address = $F_Email = $M_Name = $M_Occupation = $MC_Name = $M_Designation = $MC_Address = $M_Email = $Nationality = $Passport = $LS1 = $LS2 = $LS3 = $LW1 = $LW2 = $LW3 = $LR1 = $LR2 = $LR3 = $IC_Name1 = $Title1 = $IC_Name2 = $Title2 = $IC_Name3 = $Title3 = $Responsibility = $Co_act = $Extra_act = $Hobbies = $Boarding = $Info = " ";


if(isset($_POST['submit']))
{
	
	
if(empty($_POST["Reg_No"]))
{
  $Err = "Required Field";
}
else
{
  $Reg_No = test_input($_POST["Reg_No"]);
}


if(empty($_POST["Name"]))
{
  $Err = "Required Field";
}
else
{
  $Name = test_input($_POST["Name"]);
}




$Gender=@$_POST['Gender'];
$B_Day=$_POST['B_Day'];
$B_Month=$_POST['B_Month'];
$B_Year=$_POST['B_Year'];

if($B_Day != '' && $B_Month != '' && $B_Year != '')
{
	$DOB=$B_Day.'-'.$B_Month.'-'.$B_Year;
}

$Department=$_POST['Department'];
$University=$_POST['University'];
$Campus=$_POST['Campus'];
$Year_Of_Passing=$_POST['Year_of_passing'];
$Class10_YOP=$_POST['Class10_YOP'];
$Class10_Board=$_POST['Class10_Board'];
$Class10_Percentage=$_POST['Class10_Percentage'];
$Class12_YOP=$_POST['Class12_YOP'];
$Class12_Board=$_POST['Class12_Board'];
$Class12_Percentage=$_POST['Class12_Percentage'];
$Diploma_YOP=$_POST['Diploma_YOP'];
$DiplomaB=$_POST['DiplomaB'];
$Diploma_Percentage=$_POST['Diploma_Percentage'];
$Diploma_WE=$_POST['Diploma_WE'];
$Break=$_POST['Break'];
$Reason_Break=$_POST['Reason_Break'];
$Current_Cgpa=$_POST['Current_Cgpa'];
$S1_gpa=$_POST['S1_gpa'];
$S2_gpa=$_POST['S2_gpa'];
$S3_gpa=$_POST['S3_gpa'];
$S4_gpa=$_POST['S4_gpa'];
$S5_gpa=$_POST['S5_gpa'];
$S6_gpa=$_POST['S6_gpa'];
$S7_gpa=$_POST['S7_gpa'];
$S8_gpa=$_POST['S8_gpa'];
$Standing_Arrears=$_POST['Standing_Arrears'];
$H_Arrears=$_POST['H_Arrears'];
$Work_Exp=$_POST['Work_Exp'];
$ES1=$_POST['ES1'];
$ES2=$_POST['ES2'];
$ES3=$_POST['ES3'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$State=$_POST['State'];
$Pin=$_POST['Pin'];
$P_Address=$_POST['P_Address'];
$P_City=$_POST['P_City'];
$P_State=$_POST['P_State'];
$P_Pin=$_POST['P_Pin'];
$Mobile=$_POST['Mobile'];
$Mobile_Sec=$_POST['Mobile_Sec'];
$Email=$_POST['Email'];
$Email_Sec=$_POST['Email_Sec'];
$F_Name=$_POST['F_Name'];
$F_Occupation=$_POST['F_Occupation'];
$FC_Name=$_POST['FC_Name'];
$F_Designation=$_POST['F_Designation'];
$FC_Address=$_POST['FC_Address'];
$F_Number=$_POST['F_Number'];
$F_Email=$_POST['F_Email'];
$M_Name=$_POST['M_Name'];
$M_Occupation=$_POST['M_Occupation'];
$MC_Name=$_POST['MC_Name'];
$M_Designation=$_POST['M_Designation'];
$MC_Address=$_POST['MC_Address'];
$M_Number=$_POST['M_Number'];
$M_Email=$_POST['M_Email'];
$Nationality=$_POST['Nationality'];
$Passport=$_POST['Passport'];
$Height=$_POST['Height'];
$Weight=$_POST['Weight'];
$LS1=$_POST['LS1'];
$LS2=$_POST['LS2'];
$LS3=$_POST['LS3'];
$LW1=$_POST['LW1'];
$LW2=$_POST['LW2'];
$LW3=$_POST['LW3'];
$LR1=$_POST['LR1'];
$LR2=$_POST['LR2'];
$LR3=$_POST['LR3'];
$IC_Name1=$_POST['IC_Name1'];
$I_Duration1=$_POST['I_Duration1'];
$Title1=$_POST['Title1'];
$IC_Name2=$_POST['IC_Name2'];
$I_Duration2=$_POST['I_Duration2'];
$Title2=$_POST['Title2'];
$IC_Name3=$_POST['IC_Name3'];
$I_Duration3=$_POST['I_Duration3'];
$Title3=$_POST['Title3'];
$Responsibility=$_POST['Responsibility'];
$Co_act=$_POST['Co_act'];
$Extra_act=$_POST['Extra_act'];
$Hobbies=$_POST['Hobbies'];
$Boarding=$_POST['Boarding'];
$Info=$_POST['Info'];


 
//Execute the query
 
$sql="INSERT INTO s_btech(reg_no,name,gender,dob,department,university,campus,yop,yop10,board10,percent10,yop12,board12,percent12,yopd,boardd,percentd,workd,break,reason,cgpa,s1gpa,s2gpa,s3gpa,s4gpa,s5gpa,s6gpa,s7gpa,s8gpa,s_arrears,h_arrears,workexp,es1,es2,es3,address,city,state,pin,padd,pcity,pstate,ppin,mobile,mobile_sec,email,email_sec,fname,foccupation,fcname,fdes,fcadd,fnum,f_email,mname,moccupation,mcname,mdes,mcadd,mnum,m_email,nationality,passport,height,weight,ls1,ls2,ls3,lw1,lw2,lw3,lr1,lr2,lr3,icname1,iduration1,title1,icname2,iduration2,title2,icname3,iduration3,title3,responsibility,co_act,extra_act,hobbies,boarding,info)
				VALUES('$Reg_No','$Name','$Gender','$DOB','$Department','$University','$Campus','$Year_Of_Passing','$Class10_YOP','$Class10_Board','$Class10_Percentage','$Class12_YOP','$Class12_Board','$Class12_Percentage','$Diploma_YOP','$DiplomaB','$Diploma_Percentage','$Diploma_WE','$Break','$Reason_Break','$Current_Cgpa','$S1_gpa','$S2_gpa','$S3_gpa','$S4_gpa','$S5_gpa','$S6_gpa','$S7_gpa','$S8_gpa','$Standing_Arrears','$H_Arrears','$Work_Exp','$ES1','$ES2','$ES3','$Address','$City','$State','$Pin','$P_Address','$P_City','$P_State','$P_Pin','$Mobile','$Mobile_Sec','$Email','$Email_Sec','$F_Name','$F_Occupation','$FC_Name','$F_Designation','$FC_Address','$F_Number','$F_Email','$M_Name','$M_Occupation','$MC_Name','$M_Designation','$MC_Address','$M_Number','$M_Email','$Nationality','$Passport','$Height','$Weight','$LS1','$LS2','$LS3','$LW1','$LW2','$LW3','$LR1','$LR2','$LR3','$IC_Name1','$I_Duration1','$Title1','$IC_Name2','$I_Duration2','$Title2','$IC_Name3','$I_Duration3','$Title3','$Responsibility','$Co_act','$Extra_act','$Hobbies','$Boarding','$Info')";

if(mysqli_query($link, $sql))
{

    echo "Records added successfully.";

} 
else
{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// Close connection

mysqli_close($link);
}




function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
