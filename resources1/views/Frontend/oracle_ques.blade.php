@extends('Frontend.layouts.app')
@section('content')

	<section class="job-categories">
		<div class="auto-container">
			<div class="sec-title text-center">
				<h2>Oracle Interview Questions and Answers</h2>
				
			</div>
		</section>
	<section>
		<div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="sec-title">
		<div>



			<meta charset="UTF-8">
			<link rel="SHORTCUT ICON" href="https://static.javatpoint.com/images/favicon2.png" />
			<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/link.css" rel="stylesheet">
			<link rel="dns-prefetch" href="https://clients1.google.com"><link rel="dns-prefetch" href="https://static.javatpoint.com"><link rel="dns-prefetch" href="https://googleads.g.doubleclick.net"><link rel="dns-prefetch" href="https://www.google.com"><link rel="dns-prefetch" href="https://feedify.net">
			<title>Top 44 HTML Interview Questions | HTML5 Interview Questions (2023) - javatpoint</title>
			<meta name="keywords" content="html, interview, questions, beginners, professionals, basic, frequently, asked" />
			<meta name="description" content="HTML Interview Questions or HTML5 Interview Questions for beginners and professionals with a list of top frequently asked HTML interview questions and answers with java, .net, php, database, hr, spring, hibernate, android, oracle, sql, asp.net, c#, python, c, c++ etc." />
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="apple-mobile-web-app-capable" content="yes">
			<meta name="apple-mobile-web-app-status-bar-style" content="black">
			<link rel="canonical" href="https://www.javatpoint.com/html-interview-questions" />
			<meta name="theme-color" content="#4CAF50" />
			<meta property="og:locale" content="en_US" />
			<meta property="og:type" content="article" />
			<meta name="twitter:title" property="og:title" content="Top 44 HTML Interview Questions | HTML5 Interview Questions (2023) - javatpoint" />
			<meta name="twitter:description" property="og:description" content="HTML Interview Questions or HTML5 Interview Questions for beginners and professionals with a list of top frequently asked HTML interview questions and answers with java, .net, php, database, hr, spring, hibernate, android, oracle, sql, asp.net, c#, python, c, c++ etc." />
			<meta property="og:url" content="https://www.javatpoint.com/html-interview-questions" />
			<meta property="og:site_name" content="www.javatpoint.com" />
			<meta name="twitter:card" content="summary" />
			<meta name="twitter:site" content="@pagejavatpoint" />
			<meta name="twitter:domain" content="www.javatpoint.com" />
			<meta name="twitter:creator" content="@pagejavatpoint" />
			<link href="https://www.javatpoint.com/manifest.json" rel="manifest">




			<h3 class="h3">1) What are the components of physical database structure of Oracle database?</h3>
			<p>Components of physical database structure are given below.</p>
			<ul class="points">
			<li>One or more data files.</li>
			<li>Two or more redo log files.</li>
			<li>One or more control files.</li>
			</ul>
			<hr/>
			<h3 class="h3">2) What are the components of logical database structure in Oracle database?</h3>
			<p>Components of logical database structure.</p>
			<ul class="points">
			<li>Tablespaces</li>
			<li>Database's schema objects</li>
			</ul>
			<hr/>
			<h3 class="h3">3) What is a tablespace?</h3>
			<p>A database contains Logical Storage Unit called tablespaces. A tablespace is a set of related logical structures. Actually a tablespace groups related logical structures together.</p>
			<hr/>
			<h3 class="h3">4) What is a SYSTEM tablespace and when it is created?</h3>
			<p>When the database is created in Oracle database system, it automatically generate a SYSTEM named SYSTEM tablespace.
			The SYSTEM tablespace contains data dictionary tables for the entire database.</p>
			<hr/>
			<h3 class="h3">5) What is an Oracle table?</h3>
			<p>A table is basic unit of data storage in Oracle database. A table contains all the accessible information of a user in rows and columns.</p>
			<hr/>
			<h3 class="h3">6) In the Oracle version 9.3.0.5.0, what does each number shows?</h3>
			<p>Oracle version number refers:</p>
			<ul class="points">
			<li>9 - Major database release number</li>
			<li>3 - Database maintenance release number</li>
			<li>0 - Application server release number</li>
			<li>5 - Component Specific release number </li>
			<li>0 - Platform Specific release number</li>
			</ul>
			<hr/>
			<h3 class="h3">7) What is bulk copy or BCP in Oracle?</h3>
			<p>Bulk copy or BCP in Oracle, is used to import or export data from tables and views but it does not copy structure of same data.</p>
			<p>The main advantage of BCP is fast mechanism for coping data and you can also take the backup of data easily.</p>
			<hr/>
			<h3 class="h3">8) What is the relationship among database, tablespace and data file?</h3>
			<p>An Oracle database contains one or more logical storage units called tablespaces. These tablespaces collectively store whole data of databases and each tablespace in Oracle database consists of one or more files called datafiles. These datafiles are physical structure that confirm with the operating system in which Oracle is running.</p>
			<hr/>
			<h3 class="h3">9) What is a snapshot in Oracle database?</h3>
			<p>A snapshot is a replica of a target master table from a single point-in-time. In simple words you can say, snapshot is a copy of a table on a remote database.
			<hr/>
			<h3 class="h3">10) What is the difference between hot backup and cold backup in Oracle? Tell about their benefits also.</h3>
			<p><strong>Hot backup (Online Backup):</strong> A hot backup is also known as online backup because it is done while the database is active. Some sites can not shut down their database while making a backup copy, they are used for 24 hour a day, 7 days a week.</p>
			<p><strong>Cold backup (Offline Backup):</strong> A cold backup is also known as offline backup because it is done while the database has been shutdown using the SHUTDOWN normal command. If the database is suddenly shutdown with a uncertain condition it should be restarted with RESTRICT mode and then shutdown with NORMAL option.</p>
			<p>For a complete cold backup the following files must be backed up.</p>
			<p>All datafiles, All control files, All online redo log files(optional) and the init.ora file (you can recreate it manually).</p>
			<hr/>
			<h3 class="h3">11) How many memory layers are in the Oracle shared pool?</h3>
			<p>Oracle shared pools contains two layers:</p>
			<ol class="points">
			<li>library cache</li>
			<li>data dictionary cache</li>
			</ol>
			<hr/>
			<h3 class="h3">12) What is save point in Oracle database?</h3>
			<p>Save points are used to divide a transaction into smaller parts. It allows rolling back of a transaction. Maximum five save points are allowed. It is used to save our data, whenever you encounter an error you can roll back from the point where you save your SAVEPOINT.</p>
			<hr/>
			<h3 class="h3">13) What is hash cluster in Oracle?</h3>
			<p>Hash cluster is a technique to store a data in hash table and improve the performance of data retrieval. Hash function is applied on table row's cluster key value and store in hash cluster.</p>
			<hr/>
			<h3 class="h3">14) What are the various Oracle database objects?</h3>
			<p><strong>Tables</strong>: This is a set of elements organized in vertical and horizontal fashion.</p>
			<p><strong>Tablespaces</strong>: This is a logical storage unit in Oracle.</p>
			<p><strong>Views</strong>: It is virtual table derived from one or more tables.</p>
			<p><strong>Indexes</strong>: This is a performance tuning method to process the records.</p>
			<p><strong>Synonyms</strong>: This is a name for tables.</p>
			<hr/>
			<h3 class="h3">15) What is the difference between pre-select and pre-query?</h3>
			<p>A pre-query trigger fire before the query executes and fire once while you try to query. With the help of this trigger you can modify the where clause part dynamically.</p>
			<p>Pre-select query fires during the execute query and count query processing after Oracle forms construct the select statement to be issued, but before the statement is actually issued.</p>
			<p>Pre-query trigger fires before Pre-select trigger.</p>
			<hr/>
			<h3 class="h3">16) What are the different types of modules in Oracle forms?</h3>
			<p>Following are the different modules in Oracle forms:</p>
			<ul class="points">
			<li>Form module</li>
			<li>Menu module</li>
			<li>Pl/SQL Library module</li>
			<li>Object Library module</li>
			</ul>
			<hr/>
			<h3 class="h3">17) What is the usage of ANALYZE command in Oracle?</h3>
			<p>ANALYZE command is used to perform various functions on index, table, or cluster. The following list specifies the usage of ANALYZE command in Oracle:</p>
			<ul class="points">
			<li>It is used to identify migrated and chained rows of the table or cluster.</li>
			<li>It is used to validate the structure of the object.</li>
			<li>It helps in collecting the statistics about object used by the optimizer. They are then stored in the data dictionary.</li>
			<li>It helps in deleting statistics used by object from the data dictionary.</li>
			</ul>
			<hr/>
			<h3 class="h3">18) Can you create a synonym without having a table?</h3>
			<p>Yes. We can create a synonym without having a base table.</p>
			<hr/>
			<h3 class="h3">19) What types of joins are used in writing SUBQUERIES?</h3>
			<ul class="points">
			<li>Self join</li>
			<li>Outer Join</li>
			<li>Equi-join</li>
			</ul>
			<hr/>
			<h3 class="h3">20) What is the usage of control file in Oracle?</h3>
			<p>In Oracle, control file is used for database recovery. The control file is also used to identify the database and redo log files that must be opened for database operation to go ahead, whenever an instance of an ORACLE database begins.</p>
			<hr/>
			<h3 class="h3">21) What is a synonym?</h3>
			<p>A synonym is also known as alias for a table, view, sequence or program unit.</p>
			<hr/>
			<h3 class="h3">22) What are the different types of synonyms?</h3>
			<p>There are two types of synonyms or alias:</p>
			<p><strong>Private:</strong> It can only accessed by the owner.</p>
			<p><strong>Public:</strong> It can be accessed by any database user. </p>
			<hr/>
			<h3 class="h3">23) What is the usage of synonyms?</h3>
			<ul class="points">
			<li>Synonym can be used to hide the real name and owner of an object.</li>
			<li>It provides public access to an object.</li>
			<li>It also provides location transparency for tables, views or program units of a remote database.</li>
			<li>It simplifies the SQL statements for database users.</li>
			</ul>
			<hr/>
			<h3 class="h3">24) How do you store pictures in a database?</h3>
			<p>Yes, you can store pictures in a database using Long Raw Data type. This data type is used to store binary data for 2 gigabytes of length. However, the table can have only one Long Raw data type.</p>
			<hr/>
			<h3 class="h3">25) What is BLOB data type in Oracle?</h3>
			<p>BLOB data type is a data type with varying length binary string. It is used to store two gigabytes memory. For BLOB data type, the length needs to be specified in bytes.</p>
			<hr/>
			<h3 class="h3">26) What is the difference between TRANSLATE and REPLACE in Oracle?</h3>
			<p>Translate is used to substitute a character by character while Replace is used to substitute a single character with a word. </p>
			<hr/>
			<h3 class="h3">27) What are the different types of database objects?</h3>
			<p>A list of different types of database objects:</p>
			<ul class="points">
			<li><strong>Tables:</strong> This is a set of elements organized in vertical and horizontal fashion.</li>
			<li><strong>Tablespaces:</strong> This is a logical storage unit in Oracle.</li>
			<li><strong>Views:</strong> It is virtual table derived from one or more tables.</li>
			<li><strong>Indexes:</strong> This is a performance tuning method to process the records.</li>
			<li><strong>Synonyms:</strong> This is a name for tables.</li>
			</ul>
			<hr/>
			<h3 class="h3">28) What is the usage of Save Points in Oracle database?</h3>
			<p>Save Points are used to divide a transaction into smaller phases. It enables rolling back part of a transaction. There are maximum 5 save points allowed in Oracle Database. Whenever an error is encountered, it is possible to rollback from the point where the SAVEPOINT has been saved.</p>
			<hr/>
			<h3 class="h3">29) What is the difference between post-database commit and post-form commit?</h3>
			<p>The post-database commit trigger is executed after Oracle forms issue the commit to finalized transaction while, the post-form commit is fired during the post and commit transactions process, after the database commit occurs.</p>
			<hr/>
			<h3 class="h3">30) What is Logical backup in Oracle?</h3>
			<p>Logical backup is used to read a set of database records and writing them into a file. An Export utility is used to take the backup while an Import utility is used to recover from the backup.</p>
			<hr/>
			<h3 class="h3">31) What do you understand by Redo Log file mirroring?</h3>
			<p>Mirroring is a process of having a copy of Redo log files. It is done by creating group of log files together. This ensures that LGWR automatically writes them to all the members of the current on-line redo log group. If the group fails, the database automatically switches over to the next group. It diminishes the performance.</p>
			<hr/>
			<h3 class="h3">32) What is the meaning of recursive hints in Oracle?</h3>
			<p>The number of times a dictionary table is repeatedly called by various processes is known as recursive hint. Recursive hint is occurred because of the small size of data dictionary cache.</p>
			<hr/>
			<h3 class="h3">33) What are the limitations of CHECK constraint?</h3>
			<p>The main limitation of CHECK constraint is that the condition must be a Boolean expression evaluated using the values in the row being inserted or updated and can't contain sub queries.</p>
			<hr/>
			<h3 class="h3">34) What is the use of GRANT option in IMP command?</h3>
			<p>GRANT is used to import object grants.</p>
			<hr/>
			<h3 class="h3">35) What is the use of ROWS option in IMP command?</h3>
			<p>The ROWS option indicates whether the table rows should be imported.</p>
			<hr/>
			<h3 class="h3">36) What is the use of INDEXES option in IMP command?</h3>
			<p>The INDEXES option is used to determine whether indexes are imported.</p>
			<hr/>
			<h3 class="h3">37) What is the use of IGNORE option in IMP command? </h3>
			<p>The IGNORE option is used to specify how object creation errors should be handled.</p>
			<hr/>
			<h3 class="h3">38) What is the use of SHOW option in IMP command? </h3>
			<p>The SHOW option specifies when the value of show=y, the DDL within the export file is displayed.</p>
			<hr/>
			<h3 class="h3">39) What is the use of FILE param in IMP command?</h3>
			<p>FILE param is used to specify the name of the export file to import. Multiple files can be listed, separated by commas.</p>
			<hr/>
			<h3 class="h3">40) How to convert a date to char in Oracle? Give one example.</h3>
			<p>The <strong>to_char() function</strong> is used to convert date to character. You can also specify the format in which you want output.</p>
			<div class="codeblock"><textarea name="code" class="sql">
			SELECT to_char ( to_date ('12-12-2012', 'DD-MM-YYYY') , 'YYYY-MM-DD') FROM dual;
			</textarea></div>
			<p>Or,</p>
			<div class="codeblock"><textarea name="code" class="sql">
			SELECT to_char ( to_date ('12-12-2012', 'DD-MM-YYYY') , 'DD-MM-YYYY') FROM dual;
			</textarea></div>
			<hr/>
			<h3 class="h3">41) What are actual and formal parameters?</h3>
			<p><strong>Actual Parameters:</strong> Actual parameters are the variables or expressions referenced in the parameter list of a subprogram.</p>
			<p>Let's see a procedure call which lists two actual parameters named empno and amt:</p>
			<div class="codeblock"><textarea name="code" class="sql">
			raise_sal(empno, amt);
			</textarea></div>
			<p><strong>Formal Parameters:</strong> Formal parameters are variables declared in a subprogram specification and referenced in the subprogram body.</p>
			<p>Following procedure declares two formal parameters named empid and amt:</p>
			<div class="codeblock"><textarea name="code" class="sql">
			PROCEDURE raise_sal(empid INTEGER, amt REAL) IS current_salary REAL;
			</textarea></div>
			<hr/>
			<h3 class="h3">42) What are the extensions used by Oracle reports?</h3>
			<p>Oracle reports are use to make business enable with the facility to provide information of all level within or outside in a secure way. Oracle report uses <strong>REP</strong> files and <strong>RDF</strong> file extensions.</p>
			<hr/>
			<h3 class="h3">43) How to convert a string to a date in Oracle database?</h3>
			<p>Syntax: to_date (string , format)</p>
			<p>Let us take an example :</p>
			<div class="codeblock"><textarea name="code" class="sql">
			to_date ('2012-12-12', 'YYYY/MM/DD')
			</textarea></div>
			<p> It will return <strong>December 12, 2012</strong>.</p>
			<hr/>
			<h3 class="h3">44) How do you find current date and time in Oracle?</h3>
			<p>The <strong>SYSDATE() function</strong> is used in Oracle to find the current date and time of operating system on which the database is running.</p>
			<div class="codeblock"><textarea name="code" class="sql">
			SELECT TO_CHAR (SYSDATE, 'MM-DD-YYYY HH24:MI:SS') "Current_Date" FROM DUAL;
			</textarea></div>
			<hr/>







			<script src="https://static.javatpoint.com/js/shcoreandbrush.js"></script>
			<script type="text/javascript"> dp.SyntaxHighlighter.HighlightAll('code'); </script>
			<script src="https://static.javatpoint.com/lazysizes.min.js?v=5.8" async></script>













			

	</section>
	
	@endsection
	