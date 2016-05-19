<?php

$link = mysqli_connect("localhost", "root", "", "placementportal");
if($link === false)
{

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

$Reg_No = $Year_Of_Passing = $Class10_YOP = $Class10_Percentage = $Class12_YOP = $Class12_Percentage = $Diploma_YOP = $Diploma_Percentage = $Break = $Current_Cgpa = $S1_gpa = $S2_gpa = $S3_gpa = $S4_gpa = $S5_gpa = $S6_gpa = $S7_gpa = $S8_gpa = $Standing_Arrears = $H_Arrears = $Pin = $P_Pin = $Mobile = $Mobile_Sec = $F_Number = $M_Number = $Height = $Weight = $I_Duration1 = $I_Duration2 = $I_Duration3 = 0;
$Name = $Gender = $DOB = $Department = $University = $Campus = $Class10_Board = $Class12_Board = $DiplomaB = $Diploma_WE = $Reason_Break = $Work_Exp = $ES1 = $ES2 = $ES3 = $Address = $City = $State = $P_Address = $P_City = $P_State = $Email = $Email_Sec = $F_Name = $F_Occupation = $FC_Name = $F_Designation = $FC_Address = $F_Email = $M_Name = $M_Occupation = $MC_Name = $M_Designation = $MC_Address = $M_Email = $Nationality = $Passport = $LS1 = $LS2 = $LS3 = $LW1 = $LW2 = $LW3 = $LR1 = $LR2 = $LR3 = $IC_Name1 = $Title1 = $IC_Name2 = $Title2 = $IC_Name3 = $Title3 = $Responsibility = $Co_act = $Extra_act = $Hobbies = $Boarding = $Info = " ";

// create a variable
$Reg_No=@$_POST['Reg_No'];
$Name=@$_POST['Name'];
$Gender=@$_POST['Gender'];
$B_Day=@$_POST['B_Day'];
$B_Month=@$_POST['B_Month'];
$B_Year=@$_POST['B_Year'];

if($B_Day != '' && $B_Month != '' && $B_Year != '')
{
	$DOB=$B_Day.'-'.$B_Month.'-'.$B_Year;
}

$Department=@$_POST['Department'];
$University=@$_POST['University'];
$Campus=@$_POST['Campus'];
$Year_Of_Passing=@$_POST['Year_of_passing'];
$Class10_YOP=@$_POST['Class10_YOP'];
$Class10_Board=@$_POST['Class10_Board'];
$Class10_Percentage=@$_POST['Class10_Percentage'];
$Class12_YOP=@$_POST['Class12_YOP'];
$Class12_Board=@$_POST['Class12_Board'];
$Class12_Percentage=@$_POST['Class12_Percentage'];
$Diploma_YOP=@$_POST['Diploma_YOP'];
$DiplomaB=@$_POST['DiplomaB'];
$Diploma_Percentage=@$_POST['Diploma_Percentage'];
$Diploma_WE=@$_POST['Diploma_WE'];
$Break=@$_POST['Break'];
$Reason_Break=@$_POST['Reason_Break'];
$Current_Cgpa=@$_POST['Current_Cgpa'];
$S1_gpa=@$_POST['S1_gpa'];
$S2_gpa=@$_POST['S2_gpa'];
$S3_gpa=@$_POST['S3_gpa'];
$S4_gpa=@$_POST['S4_gpa'];
$S5_gpa=@$_POST['S5_gpa'];
$S6_gpa=@$_POST['S6_gpa'];
$S7_gpa=@$_POST['S7_gpa'];
$S8_gpa=@$_POST['S8_gpa'];
$Standing_Arrears=@$_POST['Standing_Arrears'];
$H_Arrears=@$_POST['H_Arrears'];
$Work_Exp=@$_POST['Work_Exp'];
$ES1=@$_POST['ES1'];
$ES2=@$_POST['ES2'];
$ES3=@$_POST['ES3'];
$Address=@$_POST['Address'];
$City=@$_POST['City'];
$State=@$_POST['State'];
$Pin=@$_POST['Pin'];
$P_Address=@$_POST['P_Address'];
$P_City=@$_POST['P_City'];
$P_State=@$_POST['P_State'];
$P_Pin=@$_POST['P_Pin'];
$Mobile=@$_POST['Mobile'];
$Mobile_Sec=@$_POST['Mobile_Sec'];
$Email=@$_POST['Email'];
$Email_Sec=@$_POST['Email_Sec'];
$F_Name=@$_POST['F_Name'];
$F_Occupation=@$_POST['F_Occupation'];
$FC_Name=@$_POST['FC_Name'];
$F_Designation=@$_POST['F_Designation'];
$FC_Address=@$_POST['FC_Address'];
$F_Number=@$_POST['F_Number'];
$F_Email=@$_POST['F_Email'];
$M_Name=@$_POST['M_Name'];
$M_Occupation=@$_POST['M_Occupation'];
$MC_Name=@$_POST['MC_Name'];
$M_Designation=@$_POST['M_Designation'];
$MC_Address=@$_POST['MC_Address'];
$M_Number=@$_POST['M_Number'];
$M_Email=@$_POST['M_Email'];
$Nationality=@$_POST['Nationality'];
$Passport=@$_POST['Passport'];
$Height=@$_POST['Height'];
$Weight=@$_POST['Weight'];
$LS1=@$_POST['LS1'];
$LS2=@$_POST['LS2'];
$LS3=@$_POST['LS3'];
$LW1=@$_POST['LW1'];
$LW2=@$_POST['LW2'];
$LW3=@$_POST['LW3'];
$LR1=@$_POST['LR1'];
$LR2=@$_POST['LR2'];
$LR3=@$_POST['LR3'];
$IC_Name1=@$_POST['IC_Name1'];
$I_Duration1=@$_POST['I_Duration1'];
$Title1=@$_POST['Title1'];
$IC_Name2=@$_POST['IC_Name2'];
$I_Duration2=@$_POST['I_Duration2'];
$Title2=@$_POST['Title2'];
$IC_Name3=@$_POST['IC_Name3'];
$I_Duration3=@$_POST['I_Duration3'];
$Title3=@$_POST['Title3'];
$Responsibility=@$_POST['Responsibility'];
$Co_act=@$_POST['Co_act'];
$Extra_act=@$_POST['Extra_act'];
$Hobbies=@$_POST['Hobbies'];
$Boarding=@$_POST['Boarding'];
$Info=@$_POST['Info'];


 
//Execute the query
 
$sql="INSERT INTO s_btech(reg_no,name,gender,dob,department,university,campus,yop,yop10,board10,percent10,yop12,board12,percent12,yopd,boardd,percentd,workd,break,reason,cgpa,s1gpa,s2gpa,s3gpa,s4gpa,s5gpa,s6gpa,s7gpa,s8gpa,s_arrears,h_arrears,workexp,es1,es2,es3,address,city,state,pin,padd,pcity,pstate,ppin,mobile,mobile_sec,email,email_sec,fname,foccupation,fcname,fdes,fcadd,fnum,f_email,mname,moccupation,mcname,mdes,mcadd,mnum,m_email,nationality,passport,height,weight,ls1,ls2,ls3,lw1,lw2,lw3,lr1,lr2,lr3,icname1,iduration1,title1,icname2,iduration2,title2,icname3,iduration3,title3,responsibility,co_act,extra_act,hobbies,boarding,info)
				VALUES('$Reg_No','$Name','$Gender','$DOB','$Department','$University','$Campus','$Year_Of_Passing','$Class10_YOP','$Class10_Board','$Class10_Percentage','$Class12_YOP','$Class12_Board','$Class12_Percentage','$Diploma_YOP','$DiplomaB','$Diploma_Percentage','$Diploma_WE','$Break','$Reason_Break','$Current_Cgpa','$S1_gpa','$S2_gpa','$S3_gpa','$S4_gpa','$S5_gpa','$S6_gpa','$S7_gpa','$S8_gpa','$Standing_Arrears','$H_Arrears','$Work_Exp','$ES1','$ES2','$ES3','$Address','$City','$State','$Pin','$P_Address','$P_City','$P_State','$P_Pin','$Mobile','$Mobile_Sec','$Email','$Email_Sec','$F_Name','$F_Occupation','$FC_Name','$F_Designation','$FC_Address','$F_Number','$F_Email','$M_Name','$M_Occupation','$MC_Name','$M_Designation','$MC_Address','$M_Number','$M_Email','$Nationality','$Passport','$Height','$Weight','$LS1','$LS2','$LS3','$LW1','$LW2','$LW3','$LR1','$LR2','$LR3','$IC_Name1','$I_Duration1','$Title1','$IC_Name2','$I_Duration2','$Title2','$IC_Name3','$I_Duration3','$Title3','$Responsibility','$Co_act','$Extra_act','$Hobbies','$Boarding','$Info')";

if(mysqli_query($link, $sql)){

    alert("Records added successfully.");

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// Close connection

mysqli_close($link);







?>

<?php
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        die($problem);
    }
    return $data;
}
?>





<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Placement Portal</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">
		
    
    
    
  </head>
  
  
<head>
<script>

function validateForm() 
{
 var a = document.forms["Form"]["Reg_No"].value;
 if (a == null || a == "")
 {
  alert("Missing Value : Registration Number");
  return false;
 }
 var b = document.forms["Form"]["Name"].value;
 if(b == null || b == "")
 {
	 alert("Missing Value : Name");
	 return false;
 }
 var c = document.forms["Form"]["Gender"].value;
 if(c == null || c == "")
 {
	 alert("Missing Value : Gender");
	 return false;
 }
 var d = document.forms["Form"]["B_Day"].value;
 if(d == "-1")
 {
	 alert("Missing Value : Date Of Birth");
	 return false;
 }
 var e = document.forms["Form"]["B_Month"].value;
 if(e == "-1")
 {
	 alert("Missing Value : Date Of Birth");
	 return false;
 }
 var f = document.forms["Form"]["B_Year"].value;
 if(f == "-1")
 {
	 alert("Missing Value : Date Of Birth");
	 return false;
 }
 var g = document.forms["Form"]["Department"].value;
 if(g == "-1")
 {
	 alert("Missing Value : Department");
	 return false;
 }
 var h = document.forms["Form"]["University"].value;
 if(h == null || h == "")
 {
	 alert("Missing Value : University");
	 return false;
 }
 var i = document.forms["Form"]["Campus"].value;
 if(i == "-1")
 {
	 alert("Missing Value : Campus");
	 return false;
 }
 var j = document.forms["Form"]["Year_of_passing"].value;
 if(j == "-1")
 {
	 alert("Missing Value : Year of Passing");
	 return false;
 }
 var k = document.forms["Form"]["Class10_YOP"].value;
 if(k == null || k == "")
 {
	 alert("Missing Value : Class X Year Of Passing");
	 return false;
 }
 var l = document.forms["Form"]["Class10_Board"].value;
 if(l == null || l == "")
 {
	 alert("Missing Value : Class X Board");
	 return false;
 }
 var m = document.forms["Form"]["Class10_Percentage"].value;
 if(m == null || m == "")
 {
	 alert("Missing Value : Class X Percentage");
	 return false;
 }
 var n = document.forms["Form"]["Break"].value;
 if(n == null || n == "")
 {
	 alert("Missing Value : Break in Studies");
	 return false;
 }
 var o = document.forms["Form"]["Current_Cgpa"].value;
 if(o == null || o == "")
 {
	 alert("Missing Value : Current CGPA");
	 return false;
 }
 var p = document.forms["Form"]["S1_gpa"].value;
 if(p == null || p == "")
 {
	 alert("Missing Value : Semester-1 GPA");
	 return false;
 }
 var q = document.forms["Form"]["S2_gpa"].value;
 if(q == null || q == "")
 {
	 alert("Missing Value : Semester-2 GPA");
	 return false;
 }
 var r = document.forms["Form"]["S3_gpa"].value;
 if(r == null || r == "")
 {
	 alert("Missing Value : Semester-3 GPA");
	 return false;
 }
 var s = document.forms["Form"]["S4_gpa"].value;
 if(s == null || s == "")
 {
	 alert("Missing Value : Semester-4 GPA");
	 return false;
 }
 var t = document.forms["Form"]["S5_gpa"].value;
 if(t == null || t == "")
 {
	 alert("Missing Value : Semester-5 GPA");
	 return false;
 }
 var u = document.forms["Form"]["Standing_Arrears"].value;
 if(u == null || u == "")
 {
	 alert("Missing Value : Standing Arrears");
	 return false;
 }
 var v = document.forms["Form"]["H_Arrears"].value;
 if(v == null || v == "")
 {
	 alert("Missing Value : History Of Arrears");
	 return false;
 }
 var w = document.forms["Form"]["ES1"].value;
 if(w == null || w == "")
 {
	 alert("Missing Value : Elective Subject");
	 return false;
 }
 var x = document.forms["Form"]["Address"].value;
 if(x == null || x == "")
 {
	 alert("Missing Value : Present Address");
	 return false;
 }
 var y = document.forms["Form"]["City"].value;
 if(y == null || y == "")
 {
	 alert("Missing Value : City");
	 return false;
 }
 var z = document.forms["Form"]["State"].value;
 if(z == null || z == "")
 {
	 alert("Missing Value : State");
	 return false;
 }
 var a1 = document.forms["Form"]["Pin"].value;
 if(a1 == null || a1 == "")
 {
	 alert("Missing Value : Pin Code");
	 return false;
 }
 var b1 = document.forms["Form"]["P_Address"].value;
 if(b1 == null || b1 == "")
 {
	 alert("Missing Value : Permanent Address");
	 return false;
 }
 var c1 = document.forms["Form"]["P_City"].value;
 if(c1 == null || c1 == "")
 {
	 alert("Missing Value : City");
	 return false;
 }
 var d1 = document.forms["Form"]["P_State"].value;
 if(d1 == null || d1 == "")
 {
	 alert("Missing Value : State");
	 return false;
 }
 var e1 = document.forms["Form"]["P_Pin"].value;
 if(e1 == null || e1 == "")
 {
	 alert("Missing Value : Pin Code");
	 return false;
 }
 var f1 = document.forms["Form"]["Mobile"].value;
 if(f1 == null || f1 == "")
 {
	 alert("Missing Value : Mobile Number");
	 return false;
 }
 var g1 = document.forms["Form"]["Email"].value;
 if(g1 == null || g1 == "")
 {
	 alert("Missing Value : Email");
	 return false;
 }
 var h1 = document.forms["Form"]["F_Name"].value;
 if(h1 == null || h1 == "")
 {
	 alert("Missing Value : Father's Name");
	 return false;
 }
 var i1 = document.forms["Form"]["M_Name"].value;
 if(i1 == null || i1 == "")
 {
	 alert("Missing Value : Mother's Name");
	 return false;
 }
 var j1 = document.forms["Form"]["Nationality"].value;
 if(j1 == null || j1 == "")
 {
	 alert("Missing Value : Nationality");
	 return false;
 }
 var k1 = document.forms["Form"]["Height"].value;
 if(k1 == null || k1 == "")
 {
	 alert("Missing Value : Height");
	 return false;
 }
 var l1 = document.forms["Form"]["Weight"].value;
 if(l1 == null || l1 == "")
 {
	 alert("Missing Value : Weight");
	 return false;
 }
 var m1 = document.forms["Form"]["LS1"].value;
 if(m1 == null || m1 == "")
 {
	 alert("Missing Value : Languages Known to Speak");
	 return false;
 }
 var n1 = document.forms["Form"]["LW1"].value;
 if(n1 == null || n1 == "")
 {
	 alert("Missing Value : Languages Known to Write");
	 return false;
 }
 var o1 = document.forms["Form"]["LR1"].value;
 if(o1 == null || o1 == "")
 {
	 alert("Missing Value : Languages Known to Read");
	 return false;
 }
 var p1 = document.forms["Form"]["IC_Name1"].value;
 if(p1 == null || p1 == "")
 {
	 alert("Missing Value : Internship-1 Company Name");
	 return false;
 }
 var q1 = document.forms["Form"]["I_Duration1"].value;
 if(q1 == null || q1 == "")
 {
	 alert("Missing Value : Internship-1 Duration");
	 return false;
 }
 var r1 = document.forms["Form"]["Title1"].value;
 if(r1 == null || r1 == "")
 {
	 alert("Missing Value : Internship-1 Title and Description");
	 return false;
 }
 var s1 = document.forms["Form"]["Responsibility"].value;
 if(s1 == null || s1 == "")
 {
	 alert("Missing Value : Responsibilities Undertaken");
	 return false;
 }
 var t1 = document.forms["Form"]["Co_act"].value;
 if(t1 == null || t1 == "")
 {
	 alert("Missing Value : Co-Curricular Activities");
	 return false;
 }
 var u1 = document.forms["Form"]["Extra_act"].value;
 if(u1 == null || u1 == "")
 {
	 alert("Missing Value : Extra-Curricular Activities");
	 return false;
 }
 var v1 = document.forms["Form"]["Hobbies"].value;
 if(v1 == null || v1 == "")
 {
	 alert("Missing Value : Hobbies");
	 return false;
 }
 var w1 = document.forms["Form"]["Boarding"].value;
 if(w1 == "-1")
 {
	 alert("Missing Value : Boarding");
	 return false;
 }
 var x1 = document.forms["Form"]["Info"].value;
 if(x1 == "-1")
 {
	 alert("Missing Value : All Information is Correct");
	 return false;
 }
 
  
}

</script>

    </head>
  
  
  
  
  
  
  
  
  

  <body>

    <html>
  <head>
    <meta charset="utf-8">
    <title>SRM UNIVERSITY PLACEMENT PORTAL</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Vollkorn:700italic,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <header>
      <a href="#" class="logo">
        <strong>SRM UNIVERSITY</strong>
      </a>
      <nav>
        <ul>
          <li><a href="index.html">About</a></li>
          <li><a href="index.html">Portfolio</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="b.html">Register</a></li>
          <li><a href="login.html">Login</a></li>
        </ul>      
      </nav>
    </header>
    <!-- student registration------------------------------------------------------------------------------------>
    
    <html>
<head>
<title>Student Registration Form</title>
<style type="text/css">

h3{font-family: Calibri; font-size: 22pt; font-style: normal; font-weight: bold; color:Black;
text-align: center; text-decoration: underline }
table{font-family: Calibri; color:Black; font-size: 11pt; font-style: normal;
text-align:; background-color: WHITE; border-collapse: collapse; border: 2px solid navy}
table.inner{border: 0px}
</style>
</head>
 
<body>
<body bgcolor="#00688b">


<h3>REGISTER</h3>
<form name="Form" action="" method="POST" onsubmit="return validateForm();">
 
<table align="center" cellpadding = "10">
 
<!----- Registration No ---------------------------------------------------------->
<tr>
<td>REGISTRATION NUMBER</td>
<td><input type="text" name="Reg_No" maxlength="30"/>
</td>
</tr>
 
<!----- Student Name ---------------------------------------------------------->
<tr>
<td>NAME</td>
<td><input type="text" name="Name" maxlength="50"/>
</td>
</tr>
 <!----- pass word------------------------------------------------------------>
<!--<tr>
<td>PASSWORD</td>
<td><input type="text" name="Password" maxlength="30"/>
</td>
</tr>
 
 <!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
 
<td>
<select required name="B_Day" id="B_Day">
<option value="-1">Day:</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
 
<select id="B_Month" name="B_Month">
<option value="-1">Month:</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
 
<select name="B_Year" id="B_Year">
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
</td>
</tr>
 
 
 

<!----- Department -------------------------------------------------------->
<tr>
<td>DEPARTMENT</td>
 
<td>
<select name="Department" id="Department">
<option value="-1">Select One:</option>
<option value="Civil Engineering">Civil Engineering</option>
<option value="Mechanical Engineering">Mechanical Engineering</option>
<option value="Automobile Engineering">Automobile Engineering</option>
<option value="Aerospace Engineering">Aerospace Engineering</option>
<option value="Mechatronics">Mechatronics</option>
<option value="Computer Science & Engineering">Computer Science & Engineering</option>
<option value="Information Technology">Information Technology</option>
<option value="Software Engineering">Software Engineering</option>
<option value="Electronics & Communication Engineering">Electronics & Communication Engineering </option>
<option value="Telecommunication Engineering">Telecommunication Engineering</option>
<option value="Electrical & Electronics Engineering">Electrical and Electronics Engineering</option>
<option value="Electronics & Instrumentation Engineering">Electronics & Instrumentation Engineering</option>
<option value="Instrumentation & Control Engineering">Instrumentation & Control Engineering</option>

</select>
</td>
</tr>




<!----- University---------------------------------------------------------->
<tr>
<td>UNIVERSITY</td>
<td><input type="text" name="University" maxlength="50"/>
</td>
</tr>

<!-----Select Campus -------------------------------------------------------->
<tr>
<td>SELECT CAMPUS</td>
 
<td>

<select name="Campus" id="Campus">
<option value="-1">Select One:</option>
<option value="Chennai Area - Kattankulathur">Chennai Area - Kattankulathur</option>
<option value="Chennai - Ramapuram">Chennai - Ramapuram</option>
<option value="Ramapuram Part - Vadapalani">Ramapuram Part - Vadapalani</option>
<option value="NCR - Ghaziabad">NCR - Ghaziabad</option>

</select>
</td>
</tr>



<!-----Year Of Passing -------------------------------------------------------->
<tr>
<td>YEAR OF PASSING</td>
 
<td>
<select name="Year_of_passing" id="Year_of_passing">
<option value="-1">Select One:</option>
<option value="2025">2025</option>
<option value="2024">2024</option>
<option value="2023">2023</option>
<option value="2022">2022</option>
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
</select>
</td>
</tr>

<!----- 10 Board---------------------------------------------------------->
<tr>
<td>X BOARD</td>
 
<td>
<table>
 
<tr>
<td align="center"><b>Year of Passing</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Percentage/CGPA</b></td>

</tr>
<tr>
<td><input type="text" name="Class10_YOP" maxlength="30" /></td>
<td><input type="text" name="Class10_Board" maxlength="30" /></td>
<td><input type="text" name="Class10_Percentage" maxlength="30" /></td>

</tr>
<tr>

<td></td>
<td></td>
<td align="center">(upto 2 decimal)</td>
</tr>
</table>
 
</td>
</tr>


<!----- 12 Board---------------------------------------------------------->
<tr>
<td>XII BOARD</td>
 
<td>
<table>
 
<tr>
<td align="center"><b>Year of Passing</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Percentage/CGPA</b></td>

</tr>
<tr>
<td><input type="text" name="Class12_YOP" maxlength="30" /></td>
<td><input type="text" name="Class12_Board" maxlength="30" /></td>
<td><input type="text" name="Class12_Percentage" maxlength="30" /></td>

</tr>
<tr>

<td></td>
<td></td>
<td align="center">(upto 2 decimal)</td>
</tr>
</table>
 
</td>
</tr>



<!----- Diploma---------------------------------------------------------->
<tr>
<td>DIPLOMA</td>
 
<td>
<table>
 
<tr>
<td align="center"><b>Year of Passing</b></td>

<td align="center"><b>Board</b></td>
<td align="center"><b>Percentage</b></td>



</tr>
<tr>
<td><input type="text" name="Diploma_YOP" maxlength="30" /></td>

<td><input type="text" name="DiplomaB" maxlength="30" /></td>
<td><input type="text" name="Diploma_Percentage" maxlength="30" /></td>

</tr>
<tr>

<td></td>
<td></td>
<td align="center">(upto 2 decimal)</td>
</tr>
</table>
 
</td>
</tr>


<!-----Diploma Work Experience -------------------------------------------------------->
<tr>
<td>DIPLOMA WORK EXPERIENCE</td>
 
<td><textarea name="Diploma_WE" rows="4" cols="30"></textarea>

</td>
</tr>


<!-----Break Year -------------------------------------------------------->
<tr>
<td>BREAK IN STUDIES</td>
 
<td>
<input type="text" name="Break" maxlength="30"/>
(Mention Year)
</td>
</tr>


<!----- Break Reason ---------------------------------------------------------->
<tr>
<td>REASON FOR BREAK</td>
<td><textarea name="Reason_Break" rows="4" cols="30"></textarea>
</td>
</tr>


<!----- Current Cgpa ---------------------------------------------------------->
<tr>
<td>CURRENT CGPA</td>
<td>
<input type="text" name="Current_Cgpa" maxlength="10" />
(Upto 2 Decimals)
</td>
</tr>


<!----- Semester1 gpa ---------------------------------------------------------->
<tr>
<td>SEMESTER-1 GPA</td>
<td>
<input type="text" name="S1_gpa" maxlength="10" />
(Upto 2 Decimals)
</td>
</tr>

<!----- Semester2 gpa ---------------------------------------------------------->
<tr>
<td>SEMESTER-2 GPA</td>
<td>
<input type="text" name="S2_gpa" maxlength="10" />
(Upto 2 Decimals)
</td>
</tr>

<!----- Semester3 gpa ---------------------------------------------------------->
<tr>
<td>SEMESTER-3 GPA</td>
<td>
<input type="text" name="S3_gpa" maxlength="10" />
(Upto 2 Decimals)
</td>
</tr>

<!----- Semester4 gpa ---------------------------------------------------------->
<tr>
<td>SEMESTER-4 GPA</td>
<td>
<input type="text" name="S4_gpa" maxlength="10" />
(Upto 2 Decimals)
</td>
</tr>

<!----- Semester5 gpa ---------------------------------------------------------->
<tr>
<td>SEMESTER-5 GPA</td>
<td>
<input type="text" name="S5_gpa" maxlength="10" />
(Upto 2 Decimals)
</td>
</tr>

<!----- Semester6 gpa ---------------------------------------------------------->
<tr>
<td>SEMESTER-6 GPA</td>
<td>
<input type="text" name="S6_gpa" maxlength="10" />
(Upto 2 Decimals)
</td>
</tr>

<!----- Semester7 gpa ---------------------------------------------------------->
<tr>
<td>SEMESTER-7 GPA</td>
<td>
<input type="text" name="S7_gpa" maxlength="10" />
(Upto 2 Decimals)
</td>
</tr>

<!----- Semester8 gpa ---------------------------------------------------------->
<tr>
<td>SEMESTER-8 GPA</td>
<td>
<input type="text" name="S8_gpa" maxlength="10" />
(Upto 2 Decimals)
</td>
</tr>


<!----- Standing Arrears ---------------------------------------------------------->
<tr>
<td>STANDING ARREARS</td>
<td>
<input type="text" name="Standing_Arrears" maxlength="10" />

</td>
</tr>

<!-----History Of Arrears ---------------------------------------------------------->
<tr>
<td>HISTORY OF ARREARS</td>
<td>
<input type="text" name="H_Arrears" maxlength="10" />

</td>
</tr>

<!-----work experience ---------------------------------------------------------->
<tr>
<td>WORK EXPERIENCE</td>
<td>
<input type="text" name="Work_Exp" maxlength="10" />

</td>
</tr>

<!--- ELECTIVE SUBJECT IF ANY---->

<tr>
<td>ELECTIVE SUBJECT</td>
<td>
<input type="text" name="ES1" maxlength="50" />
<input type="text" name="ES2" maxlength="50" />
<input type="text" name="ES3" maxlength="50" />

</td>
</tr>

<!----- Present Address ---------------------------------------------------------->
<tr>
<td>PRESENT ADDRESS<br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>
<!--- CITY -->
<tr>
<td>CITY</td>
<td>
<input type="text" name="City" maxlength="20" />

</td>
</tr>

<!---- STATE-->

<tr>
<td>STATE</td>
<td>
<input type="text" name="State" maxlength="20" />

</td>
</tr>
<!--- PINCODE -->
<tr>
<td>PIN CODE</td>
<td>
<input type="text" name="Pin" maxlength="10" />

</td>
</tr>

<!----- Permanent Address ---------------------------------------------------------->
<tr>
<td>PERMANENT ADDRESS<br /><br /><br /></td>
<td><textarea name="P_Address" rows="4" cols="30"></textarea></td>
</tr>


<!--- CITY -->
<tr>
<td>CITY</td>
<td>
<input type="text" name="P_City" maxlength="20" />

</td>
</tr>

<!---- STATE-->

<tr>
<td>STATE</td>
<td>
<input type="text" name="P_State" maxlength="20" />

</td>
</tr>
<!--- PINCODE -->
<tr>
<td>PIN CODE</td>
<td>
<input type="text" name="P_Pin" maxlength="10" />

</td>
</tr>


<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile" maxlength="10" />
(10 digit)
</td>
</tr>


<!----- Mobile Number (Secondary) ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER (SECONDARY)</td>
<td>
<input type="text" name="Mobile_Sec" maxlength="10"/>
(10 digit)
</td>
</tr>
<!----- Email---------------------------------------------------------->
<tr>
<td>EMAIL</td>
<td><input type="text" name="Email" maxlength="100" /></td>
</tr>
 
<!----- Email (Secondary)---------------------------------------------------------->
<tr>
<td>EMAIL (SECONDARY)</td>
<td><input type="text" name="Email_Sec" maxlength="100" /></td>
</tr>
 
 
 <!----- Father's Name ---------------------------------------------------------->
<tr>
<td>FATHER'S NAME</td>
<td><input type="text" name="F_Name" maxlength="50"/>
</td>
</tr>

<!----- Father's occupation -------------------------------------------------------->
<tr>
<td>OCCUPATION</td>
 
<td><input type="text" name="F_Occupation" maxlength="50"/>

</td>
</tr>
<!----- Company Name -------------------------------------------------------->
<tr>
<td>COMPANY NAME</td>
 
<td><input type="text" name="FC_Name" maxlength="50"/>

</td>
</tr>

<!----- DESIGNATION ---------------------------------------------------------->
<tr>
<td>DESIGNATION</td>
<td><input type="text" name="F_Designation" maxlength="50"/>
</td>
</tr>


<!----- Company Address -------------------------------------------------------->
<tr>
<td>COMPANY ADDRESS</td>
 
<td><textarea name="FC_Address" rows="4" cols="30"></textarea></td>

</td>
</tr>
<!----- Parent's Mobile Number---------------------------------------------------------->
<tr>
<td>CONTACT NUMBER</td>
<td>
<input type="text" name="F_Number" maxlength="10" />
(10 digit)
</td>
</tr>
<!----- Parent's Email---------------------------------------------------------->
<tr>
<td>EMAIL</td>
<td><input type="text" name="F_Email" maxlength="100" /></td>
</tr>
 
 <!----- Mother's Name ---------------------------------------------------------->
<tr>
<td>MOTHER'S NAME</td>
<td><input type="text" name="M_Name" maxlength="50"/>
</td>
</tr>

<!----- Mother's occupation -------------------------------------------------------->
<tr>
<td>OCCUPATION</td>
 
<td><input type="text" name="M_Occupation" maxlength="50"/>

</td>
</tr>


<!----- Company Name -------------------------------------------------------->
<tr>
<td>COMPANY NAME</td>
 
<td><input type="text" name="MC_Name" maxlength="50"/>

</td>
</tr>

<!----- DESIGNATION ---------------------------------------------------------->
<tr>
<td>DESIGNATION</td>
<td><input type="text" name="M_Designation" maxlength="50"/>
</td>
</tr>


<!----- Company Address -------------------------------------------------------->
<tr>
<td>COMPANY ADDRESS</td>
 
<td><textarea name="MC_Address" rows="4" cols="30"></textarea></td>

</td>
</tr>
<!----- Parent's Mobile Number---------------------------------------------------------->
<tr>
<td>CONTACT NUMBER</td>
<td>
<input type="text" name="M_Number" maxlength="10" />
(10 digit)
</td>
</tr>
<!----- Parent's Email---------------------------------------------------------->
<tr>
<td>EMAIL</td>
<td><input type="text" name="M_Email" maxlength="100" /></td>
</tr>
 
 <!----- NATIONALITY---------------------------------------------------------->
<tr>
<td>NATIONALITY</td>
<td><input type="text" name="Nationality" maxlength="100" /></td>
</tr>
 
 <!----- PASSPORT NO---------------------------------------------------------->
<tr>
<td>PASSPORT NO</td>
<td><input type="text" name="Passport" maxlength="100" /></td>
</tr>
 
 
 <!--------- HEIGHT------------------------------------------------------>
 <tr>
<td>HEIGHT</td>
<td>
<input type="text" name="Height" maxlength="10" />
(in cm)
</td>
</tr>
<!--------- weight------------------------------------------------------>
 <tr>
<td>WEIGHT</td>
<td>
<input type="text" name="Weight" maxlength="10" />
(in kg)
</td>
</tr>

<!--------- LANGUAGES KNOWN------------------------------------------------------>
<!----- TO SPEAK------>
 <tr>

<td>LANGUAGES KNOWN TO SPEAK</td>

<td>
<input type="text" name="LS1" maxlength="" />
<input type="text" name="LS2" maxlength="" />
<input type="text" name="LS3" maxlength="" />

</td>
</tr>
 
 <!----- TO WRITE------>
  <tr>

<td>LANGUAGES KNOWN TO WRITE</td>

<td>
<input type="text" name="LW1" maxlength="" />
<input type="text" name="LW2" maxlength="" />
<input type="text" name="LW3" maxlength="" />

</td>
</tr>
<!----- TO READ------>
  <tr>

<td>LANGUAGES KNOWN TO READ</td>

<td>
<input type="text" name="LR1" maxlength="" />
<input type="text" name="LR2" maxlength="" />
<input type="text" name="LR3" maxlength="" />

</td>
</tr>


<!-------INTERNSHIP DETAILS-------->

<tr>
<td>INTERNSHIP 1</td>
 
<td>
<table>
 
<tr>
<td align="center"><b>COMPANY NAME</b></td>
<td align="center"><b>DURATION</b></td>
<td align="center"><b>TITLE AND DESCRIPTION</b></td>

</tr>
<tr>
<td><input type="text" name="IC_Name1" maxlength="30" /></td>
<td><input type="text" name="I_Duration1" maxlength="30" /></td>
<td><textarea name="Title1" rows="5" cols="30"></textarea></td>

</tr>
<tr>

<td></td>

<td align="center">(IN WEEKS)</td>
<td></td>
</tr>
</table>
 
</td>
</tr>

<!--- INTERNSHIP 2 ---->
<tr>
<td>INTERNSHIP 2</td>
 
<td>
<table>
 
<tr>
<td align="center"><b>COMPANY NAME</b></td>
<td align="center"><b>DURATION</b></td>
<td align="center"><b>TITLE AND DESCRIPTION</b></td>

</tr>
<tr>
<td><input type="text" name="IC_Name2" maxlength="30" /></td>
<td><input type="text" name="I_Duration2" maxlength="30" /></td>
<td><textarea name="Title2" rows="5" cols="30"></textarea></td>

</tr>
<tr>

<td></td>

<td align="center">(IN WEEKS)</td>
<td></td>
</tr>
</table>
 
</td>
</tr>

<!--- INTERNSHIP 3 --->
<tr>
<td>INTERNSHIP 3</td>
 
<td>
<table>
 
<tr>
<td align="center"><b>COMPANY NAME</b></td>
<td align="center"><b>DURATION</b></td>
<td align="center"><b>TITLE AND DISCRIPTION</b></td>

</tr>
<tr>
<td><input type="text" name="IC_Name3" maxlength="30" /></td>
<td><input type="text" name="I_Duration3" maxlength="30" /></td>
<td><textarea name="Title3" rows="5" cols="30"></textarea></td>

</tr>
<tr>

<td></td>

<td align="center">(IN WEEKS)</td>
<td></td>
</tr>
</table>
 
</td>
</tr>


<!----- RESPONSIBILITY UNDERTAKEN--------------->

<tr>
<td>RESPONSIBILITY UNDERTAKEN<br /><br /><br /></td>
<td><textarea name="Responsibility" rows="5" cols="30"></textarea></td>
</tr>

<!----- Co-curricular activities--------------->

<tr>
<td>CO-CURRICULAR ACTIVITIES<br /><br /><br /></td>
<td><textarea name="Co_act" rows="5" cols="30"></textarea></td>
</tr>

<!----- extra curricular activities--------------->

<tr>
<td>EXTRA-CURRICULAR ACTIVITIES<br /><br /><br /></td>
<td><textarea name="Extra_act" rows="5" cols="30"></textarea></td>
</tr>

<!----- HOBBIES--------------->

<tr>
<td>HOBBIES<br  /><br /><br /></td>
<td><textarea name="Hobbies" rows="5" cols="30"></textarea></td>
</tr>


<!----- BOARDING---------------------------------------------------------->
<tr>
<td>BOARDING</td>
<td>
<select name="Boarding" id="Boarding">
<option value="-1">Select One:</option>
<option value="HOSTELLER">HOSTELLER</option>
<option value="DAY SCHOLAR">DAY SCHOLAR</option>

</select>
</tr>
 
 <!----- all information is correct---------------------------------------------------------->
<tr>
<td>ALL INFORMATION IS CORRECT</td>
<td>
<select name="Info" id="Info">
<option value="-1">Select One:</option>
<option value="YES">YES</option>
<option value="NO">NO</option>

</select>
</tr>
<!----- Payment ---------------------------------------------------------->
<!--<tr>
<td>PAYMENT</td>
<td>
<select name="Payment" id="Payment">
<option value="-1">Select One:</option>
<option value="1">PAID</option>
<option value="2">DUE</option>

</select>
</tr>
 

 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>



 
</body>
</html>
    
     <!-- student registration------------------------------------------------------------------------------------>
  </body>
  </body>
</html>
    
         
    
    
  </body>
</html>

