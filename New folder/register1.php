<html>
<head>
<title>Student Registration Form</title>
<style type="text/css">
h3{font-family: Calibri; font-size: 22pt; font-style: normal; font-weight: bold; color:Black;
text-align: center; text-decoration: underline }
table{font-family: Calibri; color:Black; font-size: 11pt; font-style: normal;
text-align:; background-color: White; border-collapse: collapse; border: 2px solid navy}
table.inner{border: 0px}
</style>
</head>
 
<body>
<h3>ADD STUDENT INFO</h3>
<form action="form.php" method="POST">
 
<table align="center" cellpadding = "10">
 
<!----- Registration No ---------------------------------------------------------->
<tr>
<td>REGISTRATION NO</td>
<td><input type="text" name="Registration_No" maxlength="30"/>
(max 30 characters a-z , A-Z and 0 to 9)
</td>
</tr>
 
<!----- Student Name ---------------------------------------------------------->
<tr>
<td>STUDENT NAME</td>
<td><input type="text" name="Student_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 <!----- pass word------------------------------------------------------------>
 <tr>
<td>PASSWORD</td>
<td><input type="text" name="Password" maxlength="30"/>
(max 30 characters a-z , A-Z and 0 to 9)
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
<select name="Birthday_day" id="Birthday_Day">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
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
 
<select id="Birthday_Month" name="Birthday_Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="Birthday_Year" id="Birthday_Year">
 
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
 
 
 <!----- Father Name ---------------------------------------------------------->
<tr>
<td>FATHER'S NAME</td>
<td><input type="text" name="Father_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- Father occupation -------------------------------------------------------->
<tr>
<td>FATHER'S OCCUPATION</td>
 
<td>
<select name="Father_Occupation" id="Father_Occupation">
<option value="-1">Select One:</option>
<option value="1">Govt.Employee</option>
<option value="2">Bussiness</option>
<option value="3">Doctor</option>
 
<option value="4">Engineer</option>
<option value="5">Private Job</option>
<option value="6">Politician</option>
<option value="7">Other</option>
</select>
</td>
</tr>

 <!----- Mother Name ---------------------------------------------------------->
<tr>
<td>MOTHER'S NAME</td>
<td><input type="text" name="Mother_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- Mother occupation -------------------------------------------------------->
<tr>
<td>MOTHER'S OCCUPATION</td>
 
<td>
<select name="Mother_Occupation" id="Mother_Occupation">
<option value="-1">Select One:</option>
<option value="1">Govt.Employee</option>
<option value="2">Bussiness</option>
<option value="3">Doctor</option>
 
<option value="4">Engineer</option>
<option value="5">Private Job</option>
<option value="6">House Wife</option>
<option value="7">Other</option>
</select>
</td>
</tr>

<!----- Department -------------------------------------------------------->
<tr>
<td>DEPARTMENT</td>
 
<td>
<select name="Department" id="Department">
<option value="-1">Select One:</option>
<option value="1">Civil Engineering</option>
<option value="2">Mechanical Engineering</option>
<option value="3">Automobile Engineering</option>
 
<option value="4">Aerospace Engineering</option>
<option value="5">Mechatronics</option>
<option value="6">Computer Science Engineering</option>
<option value="7">Information Technology</option>
<option value="8">Software Engineering</option>
<option value="9">Electronics & Communication Engineering </option>
<option value="10">Telecommunication Engineering</option>
<option value="11">Electrical and Electronics Engineering</option>
<option value="12">Electronics & Instrumentation Engineering</option>
 
<option value="13">Instrumentation & Control Engineering</option>

</select>
</td>
</tr>




<!----- University---------------------------------------------------------->
<tr>
<td>UNIVERSITY</td>
<td><input type="text" name="University" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>

<!-----Select Campus -------------------------------------------------------->
<tr>
<td>SELECT CAMPUS</td>
 
<td>
<select name="Select_Campus" id="Select_Campus">
<option value="-1">Select One:</option>
<option value="1">Chennai Area - Kattankulathur</option>
<option value="2">Chennai - Ramapuram</option>
<option value="3">Ramapuram Part - Vadapalani</option>
 
<option value="4">NCR - Ghaziabad</option>

</select>
</td>
</tr>



<!-----Year Of Pass -------------------------------------------------------->
<tr>
<td>YEAR OF PASS</td>
 
<td>
<select name="Year_Of_Pass" id="Year_Of_Pass">
<option value="-1">Select One:</option>
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
<td><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
<td><input type="text" name="ClassX_Board" maxlength="30" /></td>
<td><input type="text" name="ClassX_Percentage" maxlength="30" /></td>

</tr>
<tr>

<td></td>
<td align="center">(10 char max)</td>
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
<td><input type="text" name="ClassXII_YrOfPassing" maxlength="30" /></td>
<td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
<td><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>

</tr>
<tr>

<td></td>
<td align="center">(10 char max)</td>
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
<td align="center"><b>Marks</b></td>
<td align="center"><b>Expected</b></td>

</tr>
<tr>
<td><input type="text" name="Diploma" maxlength="30" /></td>
<td><input type="text" name="Diploma" maxlength="30" /></td>
<td><input type="text" name="Diploma" maxlength="30" /></td>

</tr>
<tr>

<td></td>
<td  align="center">(upto 2 decimal)</td>
<td></td>
</tr>
</table>
 
</td>
</tr>


<!-----Break Year -------------------------------------------------------->
<tr>
<td>BREAK YEAR IN DIPLOMA</td>
 
<td>
<select name="Break_Year_In_Diploma" id="Break_Year_In_Diploma">
<option value="-1">Select One:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>

</select>
</td>
</tr>


<!----- Break Reason ---------------------------------------------------------->
<tr>
<td>BREAK REASON IN DIPLOMA</td>
<td><textarea name="Break_Reason_In_Diploma" rows="4" cols="30"></textarea>
(max 200 characters a-z and A-Z)
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
<input type="text" name="Semester-1_gpa" maxlength="10" />
(Upto 2 Decimals)
</td>
</tr>

<!----- Semester2 gpa ---------------------------------------------------------->
<tr>
<td>SEMESTER-2 GPA</td>
<td>
<input type="text" name="Semester-2_gpa" maxlength="10" />
(Upto 2 Decimals)
</td>
</tr>

<!----- Semester3 gpa ---------------------------------------------------------->
<tr>
<td>SEMESTER-3 GPA</td>
<td>
<input type="text" name="Semester-3_gpa" maxlength="10" />
(Upto 2 Decimals)
</td>
</tr>

<!----- Semester4 gpa ---------------------------------------------------------->
<tr>
<td>SEMESTER-4 GPA</td>
<td>
<input type="text" name="Semester-4_gpa" maxlength="10" />
(Upto 2 Decimals)
</td>
</tr>

<!----- Semester5 gpa ---------------------------------------------------------->
<tr>
<td>SEMESTER-5 GPA</td>
<td>
<input type="text" name="Semester-5_gpa" maxlength="10" />
(Upto 2 Decimals)
</td>
</tr>

<!----- Semester6 gpa ---------------------------------------------------------->
<tr>
<td>SEMESTER-6 GPA</td>
<td>
<input type="text" name="Semester-6_gpa" maxlength="10" />
(Upto 2 Decimals)
</td>
</tr>

<!----- Semester7 gpa ---------------------------------------------------------->
<tr>
<td>SEMESTER-7 GPA</td>
<td>
<input type="text" name="Semester-7_gpa" maxlength="10" />
(Upto 2 Decimals)
</td>
</tr>

<!----- Semester8 gpa ---------------------------------------------------------->
<tr>
<td>SEMESTER-8 GPA</td>
<td>
<input type="text" name="Semester-8_gpa" maxlength="10" />
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

<!-----Arrears History ---------------------------------------------------------->
<tr>
<td>ARREAR HISTORY</td>
<td>
<input type="text" name="Arrear_History" maxlength="10" />

</td>
</tr>

<!----- Address Permanent ---------------------------------------------------------->
<tr>
<td>ADDRESS PERMANENT <br /><br /><br /></td>
<td><textarea name="Address_permanent" rows="4" cols="30"></textarea></td>
</tr>


<!----- Address TEMPORERY ---------------------------------------------------------->
<tr>
<td>ADDRESS TEMP <br /><br /><br /></td>
<td><textarea name="Address_Temp" rows="4" cols="30"></textarea></td>
</tr>


<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" maxlength="10" />
(10 digit number)
</td>
</tr>


<!----- Mobile Number Sec ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER SEC</td>
<td>
<input type="text" name="Mobile_Number_Sec" maxlength="10" />
(10 digit number)
</td>
</tr>
<!----- Email Id office ---------------------------------------------------------->
<tr>
<td>EMAIL ID OFFICE</td>
<td><input type="text" name="Email_Id_Office" maxlength="100" /></td>
</tr>
 
<!----- Email Id Sec---------------------------------------------------------->
<tr>
<td>EMAIL ID SEC</td>
<td><input type="text" name="Email_Id_Sec" maxlength="100" /></td>
</tr>
 
<!----- PARENT CELL ---------------------------------------------------------->
<tr>
<td>PARENT CELL</td>
<td>
<input type="text" name="Parent_Cell" maxlength="10" />
(10 digit number)
</td>
</tr>
<!----- Email Id parents ---------------------------------------------------------->
<tr>
<td>PARENT'S EMAIL</td>
<td><input type="text" name="Parent's_email" maxlength="100" /></td>
</tr>
 
 
<!----- payment ---------------------------------------------------------->
<tr>
<td>PAYMENT</td>
<td><input type="text" name="Payment" maxlength="100" /></td>
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
