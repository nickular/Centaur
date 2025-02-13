# Centaur

Rapid fire radiology quiz module

## Purpose

A set of PHP/MySQL source code to display image and provide an interface for rapid response.

## Demonstration

Try it [here] (http://capricornradiology.org/centaur).

## Getting mysql set up

1. Log in to mysql using the mysql root
2. Create the pennrads account
CREATE USER 'pennrads'@'localhost' IDENTIFIED BY 'pennrads123';
3. Grant privileges to edit the centaur database
GRANT ALL PRIVILEGES ON centaur.* TO pennrads@localhost;

## Installation

1. Copy files to a web directory
2. Create a new database on your MySQL server, and create the table using Centaur.sql
For example:
	mysql -u username -p < Centaur.sql
3. Add data for the test module into database
	mysql -u username -p < AddTestModule.sql
4. Edit primerLib.php and ensure that the $db variable is properly configured to your MySQL database.
For example:
	$db = new mysqli('localhost', 'username', 'password', 'centaur');
5. Go to the index.php URL - if you are able to run the test quiz, you are ready to go!

## How to Create a New Module?

1. Use the testquiz module as a template.  Copy and paste it into a new folder.
1. Edit content.xml (using the comments contained within for guidance).
1. Note that you can use regular HTML code as well as custom form fields which will be stored in the database as long as you follow the directions.  Remember to escape all customized HTML code.
1. Add an entry in the "quizzes" table in the MySQL database - the module ID, the URL, and a short description.
1. Go to the proper URL to test it out.  For example, if your module ID is 1234, then try: http://your.url.com/centaur/cover.php?moduleid=1234
