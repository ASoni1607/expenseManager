Expense Manager
----------------------------------------

Contents
----------------------------------------
	1. Introduction
	2. Requirements
	3. Installation
	4. Usage
----------------------------------------

Introduction
----------------------------------------
	A simple expense manager that can track users’ expense. User’s can set an initial budget and track all the expense which can be split between the groups for people. 
----------------------------------------

Acknowledgement
----------------------------------------
	I would like to thank my tutor and opportunity provide by Internshala for this project. This project help me to learn basic of web development using HTML, CSS, MySQL and PHP. This project helped me to understand real life problem and using the above knowledge to solve it.
----------------------------------------

Requirement
----------------------------------------
	1. MySQL: This website requires MySQL for storing information. MySQL can be installed using Wamp server.
	2. WAMP server: Apache server is required to run the project which can be installed using WAMP Server.
	3. Browser: Latest version of Chrome, Firefox or Edge should be used to run the website.
----------------------------------------

Installation:
----------------------------------------
	1. Extract the content of project.zip to 
		C:/wamp/www/expense               	(32-Bit OS)
		C:/wamp64/www/expense 			(64-Bit OS)
	2. Go to C:/wamp64/www/expense/ folder and run the budget.sql script.
	3. Start the wamp server, make sure its all services are running and icon is green in color.
	4. Open desired browser and go to localhost/expense.
----------------------------------------

Usage:
----------------------------------------
	1. index.php
		index.php contains the home page of website. 
		User can use login or signup button to create or login an account.
		About Us button shows information about the website. 
		
	2. About Us Page
		Contains little background about the project and developers.

	3. Sign Up page 
		Contains a form to create a new user.
		On successfull creation of new user a (Pop up alert message for successfully registration) is generated.

	4. Home Page:
		Provides a button to create a new plan
		User can change password using change password button and can logout using logout button
	
	5. Create New Plan for user
		Contains a form divided in to two parts to create a new plan
		First part contains Initial Budget and no of persons fields.
		Second part conatins Name of Plan and date along with the name of persons.
		(after submission, redirect to homepage with new plan created, user can create more plan using add button )
	
	6. View Plan page 
		List all the expense created by the users.
		Add expense form can be used to add more expense. (new expense are added in view)
		Expense Distribution button can be used to divide the expense among all the person.

	7. View Distribution page
		Provides a detail view about the budget, plans and expense created.
	
	8. Change Password page
		Allows users to change password.
		On successfull a password has been changed dialog is produced.
----------------------------------------

About the coder
----------------------------------------
Name – Aman Soni
E-mail – amansoni.nitraipur@gmail.com
Collage – NIT Raipur
Branch – ECE 
--------------------------------------------------------------------------------
 
