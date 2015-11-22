<?php

require 'edugyaan_constants.inc.php';
require 'edugyaan_connect.inc.php';	


//Creating College Information Table
$query = 'create table if not exists Edu_College(
	College_Id int unsigned Auto_Increment ,
	College_Name varchar(250) ,
	College_Rank int ,
	College_Admissions varchar(250) ,
	College_Cutoffs int ,
	College_Placement varchar(500) ,
	College_Fees int ,
	College_Info varchar(250) ,

	PRIMARY KEY (College_Id,College_Name,College_Rank,College_Placement,College_Cutoffs)	

	)';

mysqli_query($db,$query) or die(mysqli_error($db));


//Creating Test Information Table
$query = 'create table if not exists Edu_Test(
	Test_Id int unsigned Auto_Increment ,
	Username varchar(250) ,
	Aptitude_Questions varchar(500) ,
	Aptitude_Answers varchar(500) ,

	PRIMARY KEY (Test_Id,Username,Aptitude_Questions,Aptitude_Answers)

	)';

mysqli_query($db,$query) or die(mysqli_error($db)); 



//Creating Table Queries
$query = 'create table if not exists Edu_Queries(
	Query_Id int unsigned Auto_Increment ,
	Username varchar(250) ,
	Questions varchar(500) ,
	Answers varchar(500) ,

	Primary Key (Query_Id,Username,Questions,Answers)

	)';

mysqli_query($db,$query) or die(mysqli_error($db)) ;


//Creating Table User Information
$query = 'create table if not exists Edu_User(
	First_Name varchar(250) ,
	Second_Name varchar(250) ,
	Password char(40),
	Birth_Date date ,
	Contact int ,
	Security_Question varchar(250) ,
	Security_Answer varchar(250) ,

	Primary Key(First_Name,Second_Name,Password,Birth_Date,Contact)


	)';

mysqli_query($db,$query) or die(mysqli_error($db)) ;



//Creating Table for Student Information 	
$query = 'create table if not exists Edu_StuInfo(
	Field_Of_Interest varchar(250) ,
	Qualification varchar(250) ,
	Aptitude_Result varchar(250),

	Primary Key(Field_Of_Interest,Qualification,Aptitude_Result)

	)';

mysqli_query($db,$query) or die(mysqli_error($db)) ;
?>
