https://www.youtube.com/watch?v=f9q65Qov9hI&t=689s // INSTALACJA
https://www.youtube.com/watch?v=yWUinQtU9hM // PRZYPADKI TESTOWE
https://www.guru99.com/testlink-tutorial-complete-guide.html // TESTLINK TUTORIAL

1. Download testlink_1_9_20_fixed from GitHub.

2. Localhost/phpMyAdmin: Create database: testlink.

3. Copy testlink folder into xampp/htdocs.

4. Replace two directories in testlink/config.inc.php file with:

testlink/logs:

$tlCfg->log_path = 'C:/xampp/htdocs/testlink/logs/'; /* unix example */
if (($lp = getenv('TESTLINK_LOG_PATH'))) {
  $tlCfg->log_path = trim($lp);
}

testlink/upload_area:

$g_repositoryPath = 'C:/xampp/htdocs/testlink/upload_area/';  /* unix example */
if (($upa = getenv('TESTLINK_UPLOAD_AREA'))) {
  $g_repositoryPath = trim($upa);
}

5. Uruchom localhost/testlink - "New installation".

6. 	Database admin login: root 
	Database admin password: ""
	
	TestLink DB login: admin
	TesLink DB login: admin
	
7. 	Localhost/testlink: login to application (admin / admin).

8. 	Test Project Management. 
	Create (create a new project).
	Name (e.g. Bonito online bookstore)
	Prefix (e.g. BO).
	Description (e.g.: A test to validate the Bonito online bookstore searchbox and cart behaviour / functionality).
	Create.
	
9.  Test Plan Management (example info: scope of software testing, milestone, test suites, test cases).  
	Create.
	Name (e.g. Bonito TestPlan).
	Description (e.g. A test plan for Bonito online store application).
	Create.
	Active.
	Public.
	
10. Builds / Releases.
	Create.
	Title (e.g. Bonito online bookstore sample build).
	Description (e.g. This is a sample build for Bonito online bookstore application).
	Active.
	Open. 
	Release date.
	Create.
	
11. Test Specification (creates a test suite - a collection of test cases to test the same component).
	Settings icon click.
	Plus icon click (create tab).
	Test suite name (e.g. Bonito online bookstore searchbox).
	Details (e.g. The test suite contains test cases related to test Bonito online bookstore searchbox funcionality).
	Save.
	
12. Create a test case (a sequence of test steps to test a specific scenario with an expected result).
	After having created a test suites, they appear in the folder tree structure under the Test Specification Panel.
	Settings icon click ("Actions").
	Plus icon click ("Create") (next to: "Test Case Operations").
	Test Case Title (e.g.: "Loading the page; searchbox visibvle).
	Preconditions: optional (.e.g. 1. The user should be connected to the Internet. 2. The user should have valid user id and password). 
	Summary: optional (e.g. The test case to check the Bonito online store searchbox funcionality).
	Create.
	
13. Create Test Step.
	Step actions + Expected results.
	Save.
	
