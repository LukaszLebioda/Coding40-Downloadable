https://www.youtube.com/watch?v=f9q65Qov9hI&t=689s

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

	Create new project: Name, e.g. Test Project.
	Prefix: e.g. TP.
	Description: optional.
	Create.
	
	Test Plan Management.
	Create.
	Name: e.g.Testplan.
	Description: optional.
	Active, Public - both checkboxes checked!