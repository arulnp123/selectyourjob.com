

@extends('Frontend.layouts.app')
@section('content')

	<section class="job-categories">
		<div class="auto-container">
			<div class="sec-title text-center">
				<h2>SQL Interview Questions and Answers</h2>
				
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

			<h3 class="h3">1) What is SQL?</h3>
<p>SQL stands for the Structured Query Language. It is the standard language used to maintain the relational database and perform many different data manipulation operations on the data. SQL was initially invented in 1970. It is a database language used for database creation, deletion, fetching and modifying rows, etc. sometimes, it is pronounced as 'sequel.' We can also use it to handle organized data comprised of entities (variables) and relations between different entities of the data.</p>
<hr/>
<h3 class="h3">2) When SQL appeared?</h3>
<p>SQL first appeared in 1974. It is one of the most used languages for maintaining the relational database. In 1986, SQL became the standard of the American National Standards Institute (ANSI) and ISO (International Organization for Standardization) in 1987.</p>
<hr/>
<h3 class="h3">3) What are the usages of SQL?</h3>
<p>SQL is responsible for maintaining the relational data and the data structures present in the database. Some of the common usages are given below:</p>
<ul class="points">
<li>To execute queries against a database</li>
<li>To retrieve data from a database</li>
<li>To inserts records in a database</li>
<li>To updates records in a database</li>
<li>To delete records from a database</li>
<li>To create new databases</li>
<li>To create new tables in a database</li>
<li>To create views in a database</li>
<li>To perform complex operations on the database.</li>
</ul>
<hr/>
<h3 class="h3">4) Does SQL support programming language features?</h3>
<p>SQL refers to the Standard Query Language. Therefore, it is true that SQL is a language but does not actually support the programming language. It is a common language that doesn't have a loop, conditional statements, and logical operations. It cannot be used for anything other than data manipulation. It is a command language to perform database operations. The primary purpose of SQL is to retrieve, manipulate, update, delete, and perform complex operations like joins on the data present in the database.</p>
<hr/>
<h3 class="h3">5) What are the subsets of SQL?</h3>
<p>The following are the four significant subsets of the SQL:</p>
<ul class="points">
<li><strong>Data definition language (DDL):</strong> It defines the data structure that consists of commands like CREATE, ALTER, DROP, etc.</li>
<li><strong>Data manipulation language (DML):</strong> It is used to manipulate existing data in the database. The commands in this category are SELECT, UPDATE, INSERT, etc.</li>
<li><strong>Data control language (DCL):</strong> It controls access to the data stored in the database. The commands in this category include GRANT and REVOKE.</li>
<li><strong>Transaction Control Language (TCL):</strong> It is used to deal with the transaction operations in the database. The commands in this category are COMMIT, ROLLBACK, SET TRANSACTION, SAVEPOINT, etc.</li>
</ul>
<hr/>
<h3 class="h3">6) What is the purpose of DDL Language?</h3>
<p>DDL stands for Data definition language. It is the subset of a database that defines the data structure of the database when the database is created. <strong>For example,</strong> we can use the DDL commands to add, remove, or modify tables. It consists of the following commands: CREATE, ALTER and DELETE database objects such as schema, tables, indexes, view, sequence, etc.</p>
<p><strong>Example</strong></p>
<div class="codeblock"><textarea name="code" class="xml">
CREATE TABLE Students
(
Roll_no INT,
Name VARCHAR(45),
Branch VARCHAR(30),
);
</textarea></div>
<hr/>
<h3 class="h3">7) What is the purpose of DML Language?</h3>
<p>Data manipulation language makes the user able to retrieve and manipulate data in a relational database. The DML commands can only perform read-only operations on data. We can perform the following operations using DDL language:</p>
<ul class="points">
<li>Insert data into the database through the INSERT command.</li>
<li>Retrieve data from the database through the SELECT command.</li>
<li>Update data in the database through the UPDATE command.</li>
<li>Delete data from the database through the DELETE command.</li>
</ul>
<p><strong>Example</strong></p>
<div class="codeblock"><textarea name="code" class="xml">
INSERT INTO Student VALUES (111, 'George', 'Computer Science')
</textarea></div>
<hr/>
<h3 class="h3">8) What is the purpose of DCL Language?</h3>
<p>Data control language allows users to control access and permission management to the database. It is the subset of a database, which decides that what part of the database should be accessed by which user at what point of time. It includes two commands, GRANT and REVOKE.</p>
<p><strong>GRANT:</strong> It enables system administrators to assign privileges and roles to the specific user accounts to perform specific tasks on the database.</p>
<p><strong>REVOKE:</strong> It enables system administrators to revoke privileges and roles from the user accounts so that they cannot use the previously assigned permission on the database.</p>
<p><strong>Example</strong></p>
<div class="codeblock"><textarea name="code" class="xml">
GRANT * ON mydb.Student TO javatpoint@localhsot;
</textarea></div>
<hr/>
<h3 class="h3">9) What are tables and fields in the database?</h3>
<p>A table is a set of organized data in the form of rows and columns. It enables users to store and display records in the structure format. It is similar to worksheets in the spreadsheet application. Here rows refer to the tuples, representing the simple data item, and columns are the attribute of the data items present in a particular row. Columns can categorize as vertical, and Rows are horizontal.</p>
<p>Fields are the components to provide the structure for the table. It stores the same category of data in the same data type. A table contains a fixed number of columns but can have any number of rows known as the record. It is also called a column in the table of the database. It represents the attribute or characteristics of the entity in the record.</p>
<p><strong>Example</strong></p>
<p><strong>Table:</strong> Student</p>
<p><strong>Field:</strong> Stud_rollno, Stud_name, Date of Birth, Branch, etc.</p>
<hr/>
<h3 class="h3">10) What is a primary key?</h3>
<p>A primary key is a field or the combination of fields that uniquely identify each record in the table. It is one of a special kind of unique key. If the column contains a primary key, it cannot be null or empty. A table can have duplicate columns, but it cannot have more than one primary key. It always stores unique values into a column. <strong>For example,</strong> the ROLL Number can be treated as the primary key for a student in the university or college.</p>
<img src="https://static.javatpoint.com/interview/images/sql-interview-questions1.png" alt="SQL Interview Questions and Answers" />
<p>We can define a primary key into a student table as follows:</p>
<div class="codeblock"><textarea name="code" class="xml">
CREATE TABLE Student (  
    roll_number INT PRIMARY KEY,  
    name VARCHAR(45),   
);  
</textarea></div>
<p>To read more information, <a href="https://www.javatpoint.com/mysql-primary-key">click here</a>.</p>
<hr/>
<h3 class="h3">11) What is a foreign key?</h3>
<p>The foreign key is used to link one or more tables together. It is also known as the referencing key. A foreign key is specified as a key that is related to the primary key of another table. It means a foreign key field in one table refers to the primary key field of the other table. It identifies each row of another table uniquely that maintains the referential integrity. The primary key-foreign key relationship is a very crucial relationship as it maintains the ACID properties of the database sometimes. It also prevents actions that would destroy links between the child and parent tables.</p>
<p>We can define a foreign key into a table as follows:</p>
<div class="codeblock"><textarea name="code" class="xml">
CONSTRAINT constraint_name]  
    FOREIGN KEY [foreign_key_name] (col_name, ...)  
    REFERENCES parent_tbl_name (col_name,...)  
</textarea></div>
<hr/>
<p>To read more information, <a href="https://www.javatpoint.com/mysql-foreign-key">click here</a>.</p>
<hr/>
<h3 class="h3">12) What is a unique key?</h3>
<p>A unique key is a single or combination of fields that ensure all values stores in the column will be unique. It means a column cannot stores duplicate values. This key provides uniqueness for the column or set of columns. <strong>For example,</strong> the email addresses and roll numbers of student's tables should be unique. It can accept a null value but only one null value per column. It ensures the integrity of the column or group of columns to store different values into a table.</p>
<p>We can define a foreign key into a table as follows:</p>
<div class="codeblock"><textarea name="code" class="xml">
CREATE TABLE table_name(  
    col1 datatype,  
    col2 datatype UNIQUE,  
    ...  
);
</textarea></div>
<p>To read more information, <a href="https://www.javatpoint.com/mysql-unique-key">click here</a>.</p>
<hr/>
<h3 class="h3">13) What is the difference between a primary key and a unique key?</h3>
<p>The primary key and unique key both are essential constraints of the SQL. The main difference among them is that the primary key identifies each record in the table. In contrast, the unique key prevents duplicate entries in a column except for a NULL value. The following comparison chart explains it more clearly:</p>
<table class="alt">
<tr>
<th>Primary Key</th>
<th>Unique Key</th>
</tr>
<tr>
<td>The primary key act as a unique identifier for each record in the table.</td>
<td>The unique key is also a unique identifier for records when the primary key is not present in the table.</td>
</tr>
<tr>
<td>We cannot store NULL values in the primary key column.</td>
<td>We can store NULL value in the unique key column, but only one NULL is allowed.</td>
</tr>
<tr>
<td>We cannot change or delete the primary key column values.</td>
<td>We can modify the unique key column values.</td>
</tr>
</table>
<p>To read more information, <a href="https://www.javatpoint.com/primary-key-vs-unique-key">click here</a>.</p>
<hr/>
<h3 class="h3">14) What is a Database?</h3>
<p>A database is an organized collection of data that is structured into tables, rows, columns, and indexes. It helps the user to find the relevant information frequently. It is an electronic system that makes data access, data manipulation, data retrieval, data storing, and data management very easy. Almost every organization uses the database for storing the data due to its easily accessible and high operational ease. The database provides perfect access to data and lets us perform required tasks.</p>
<p>The following are the common features of a database:</p>
<ul class="points">
<li>Manages large amounts of data</li>
<li>Accurate</li>
<li>Easy to update</li>
<li>Security</li>
<li>Data integrity</li>
<li>Easy to research data</li>
</ul>
<hr/>
<h3 class="h3">15) What is meant by DBMS?</h3>
<p>DBMS stands for Database Management System. It is a software program that primarily functions as an interface between the database and the end-user. It provides us the power such as managing the data, the database engine, and the database schema to facilitate the organization and manipulation of data using a simple query in almost no time. It is like a File Manager that manages data in a database rather than saving it in file systems. Without the database management system, it would be far more difficult for the user to access the database's data.</p>
<p>The following are the components of a DBMS:</p>
<ul class="points">
<li>Software</li>
<li>Data</li>
<li>Procedures</li>
<li>Database Languages</li>
<li>Query Processor</li>
<li>Database Manager</li>
<li>Database Engine</li>
<li>Reporting</li>
</ul>
<hr/>
<h3 class="h3">16) What are the different types of database management systems?</h3>
<p>The database management systems can be categorized into several types. Some of the important lists are given below:</p>
<ul class="points">
<li>Hierarchical databases (DBMS)</li>
<li>Network databases (IDMS)</li>
<li>Relational databases (RDBMS</li>
<li>Object-oriented databases</li>
<li>Document databases (Document DB)</li>
<li>Graph databases</li>
<li>ER model databases</li>
<li>NoSQL databases</li>
</ul>
<hr/>
<h3 class="h3">17) What is RDBMS?</h3>
<p>RDBMS stands for Relational Database Management System. It is a database management system based on a relational model. It facilitates you to manipulate the data stored in the tables by using relational operators. RDBMS stores the data into the collection of tables and links those tables using the relational operators easily whenever required. Examples of relational database management systems are Microsoft Access, MySQL, SQL Server, Oracle database, etc.</p>
<hr/>
<h3 class="h3">18) What is Normalization in a Database?</h3>
<p>Normalization is used to minimize redundancy and dependency by organizing fields and table of a database.</p>
<p>There are some rules of database normalization, which is commonly known as Normal From, and they are:</p>
<ul class="points">
<li>First normal form(1NF)</li>
<li>Second normal form(2NF)</li>
<li>Third normal form(3NF)</li>
<li>Boyce-Codd normal form(BCNF)</li>
</ul>
<p>Using these steps, the redundancy, anomalies, inconsistency of the data in the database can be removed.</p>
<hr/>
<h3 class="h3">19) What is the primary use of Normalization?</h3>
<p>Normalization is mainly used to add, delete or modify a field that can be made in a single table. The primary use of Normalization is to remove redundancy and remove the insert, delete and update distractions. Normalization breaks the table into small partitions and then links them using different relationships to avoid the chances of redundancy.</p>
<hr/>
<h3 class="h3">20) What are the disadvantages of not performing database Normalization?</h3>
<p>The major disadvantages are:</p>
<p>The occurrence of redundant terms in the database causes the waste of space in the disk.</p>
<p>Due to redundant terms, inconsistency may also occur. If any change is made in the data of one table but not made in the same data of another table, then inconsistency will occur. This inconsistency will lead to the maintenance problem and effects the ACID properties as well.</p>
<hr/>
<h3 class="h3">21) What is an inconsistent dependency?</h3>
<p>An Inconsistent dependency refers to the difficulty of getting relevant data due to a missing or broken path to the data. It leads users to search the data in the wrong table, resulting in an error as an output.</p>
<hr/>
<h3 class="h3">22) What is Denormalization in a Database?</h3>
<p>Denormalization is a technique used by database administrators to optimize the efficiency of their database infrastructure. The denormalization concept is based on Normalization, which is defined as arranging a database into tables correctly for a particular purpose. This method allows us to add redundant data into a normalized database to alleviate issues with database queries that merge data from several tables into a single table. It adds redundant terms into the tables to avoid complex joins and many other complex operations.</p>
<p>Denormalization doesn't mean that normalization will not be done. It is an optimization strategy that takes place after the normalization process.</p>
<hr/>
<h3 class="h3">23) What are the different types of SQL operators?</h3>
<p>Operators are the special keywords or special characters reserved for performing particular operations. They are also used in SQL queries. We can primarily use these operators within the WHERE clause of SQL commands. It's a part of the command to filters data based on the specified condition. The SQL operators can be categorized into the following types:</p>
<ul class="points">
<li><strong>Arithmetic operators:</strong> These operators are used to perform mathematical operations on numerical data. The categories of this operators are addition (+), subtraction (-), multiplication (*), division (/), remainder/modulus (%), etc.</li>
<li><strong>Logical operators:</strong> These operators evaluate the expressions and return their results in True or False. This operator includes ALL, AND, ANY, ISNULL, EXISTS, BETWEEN, IN, LIKE, NOT, OR, UNIQUE.</li>
<li><strong>Comparison operators:</strong> These operators are used to perform comparisons of two values and check whether they are the same or not. It includes equal to (=), not equal to (!= or <>), less than (<), greater than (>), less than or equal to (<=), greater than or equal to (>=), not less than (!<), not greater than (!>), etc.</li>
<li><strong>Bitwise operators:</strong> It is used to do bit manipulations between two expressions of integer type. It first performs conversion of integers into binary bits and then applied operators such as AND (& symbol), OR (|, ^), NOT (~), etc.</li>
<li><strong>Compound operators:</strong> These operators perform operations on a variable before setting the variable's result to the operation's result. It includes Add equals (+=), subtract equals (-=), multiply equals (*=), divide equals (/=), modulo equals (%=), etc.</li>
<li><strong>String operators:</strong> These operators are primarily used to perform concatenation and pattern matching of strings. It includes + (String concatenation), += (String concatenation assignment), % (Wildcard), [] (Character(s) matches), [^] (Character(s) not to match), _ (Wildcard match one character), etc.</li>
</ul>
<hr/>
<h3 class="h3">24) What is a view in SQL?</h3>
<p>A view is a database object that has no values. It is a virtual table that contains a subset of data within a table. It looks like an actual table containing rows and columns, but it takes less space because it is not present physically. It is operated similarly to the base table but does not contain any data of its own. Its name is always unique. A view can have data from one or more tables. If any changes occur in the underlying table, the same changes reflected in the views also.</p>
<img src="https://static.javatpoint.com/interview/images/sql-interview-questions2.png" alt="SQL Interview Questions and Answers" />
<p>The primary use of a view is to implement the security mechanism. It is the searchable object where we can use a query to search the view as we use for the table. It only shows the data returned by the query that was declared when the view was created.</p>
<p>We can create a view by using the following syntax:</p>
<div class="codeblock"><textarea name="code" class="xml">
CREATE VIEW view_name AS
SELECT column_lists FROM table_name
WHERE condition;
</textarea></div>
<hr/>
<h3 class="h3">25) What is an Index in SQL?</h3>
<p>An index is a disc structure associated with a table or view that speeds up row retrieval. It reduces the cost of the query because the query's high cost will lead to a fall in its performance. It is used to increase the performance and allow faster retrieval of records from the table. Indexing reduces the number of data pages we need to visit to find a particular data page. It also has a unique value meaning that the index cannot be duplicated. An index creates an entry for each value which makes it faster to retrieve data.</p>
<p><strong>For example:</strong> Suppose we have a book which carries the details of the countries. If you want to find out information about India, why will you go through every page of that book? You could directly go to the index. Then from the index, you can go to that particular page where all the information about India is given.</p>
<hr/>
<h3 class="h3">26) What are the different types of indexes in SQL?</h3>
<p>SQL indexes are nothing more than a technique of minimizing the query's cost. The higher the query's cost, the worse the query's performance. The following are the different types of Indexes supported in SQL:</p>
<ul class="points">
<li>Unique Index</li>
<li>Clustered Index</li>
<li>Non-Clustered Index</li>
<li>Bit-Map Index</li>
<li>Normal Index</li>
<li>Composite Index</li>
<li>B-Tree Index</li>
<li>Function-Based Index</li>
</ul>
<hr/>
<h3 class="h3">27) What is the unique index?</h3>
<p>UNIQUE INDEX is used to enforce the uniqueness of values in single or multiple columns. We can create more than one unique index in a single table. For creating a unique index, the user has to check the data in the column because the unique indexes are used when any column of the table has unique values. This indexing does not allow the field to have duplicate values if the column is unique indexed. A unique index can be applied automatically when a primary key is defined.</p>
<p>We can create it by using the following syntax:</p>
<div class="codeblock"><textarea name="code" class="xml">
CREATE UNIQUE INDEX index_name  
ON table_name (index_column1, index_column2,...);
</textarea></div>
<p><strong>Example</strong></p>
<div class="codeblock"><textarea name="code" class="xml">
CREATE TABLE Employee(    
    ID int AUTO_INCREMENT PRIMARY KEY,     
    Name varchar(45),   
    Phone varchar(15),  
    City varchar(25), 
);
</textarea></div>
<p>Suppose we want to make a Phone column as a unique index. We can do this like below:</p>
<div class="codeblock"><textarea name="code" class="xml">
CREATE UNIQUE INDEX index_name_phone ON Employee (Phone);  
</textarea></div>
<p>To read more information, <a href="https://www.javatpoint.com/mysql-unique-index">click here</a>.</p>
<hr/>
<h3 class="h3">28) What is clustered index in SQL?</h3>
<p>A clustered index is actually a table where the data for the rows are stored. It determines the order of the table data based on the key values that can sort in only one direction. Each table can have only one clustered index. It is the only index, which has been automatically created when the primary key is generated. If many data modifications needed to be done in the table, then clustered indexes are preferred.</p>
<p>To read more information, <a href="https://www.javatpoint.com/mysql-clustered-index">click here</a>.</p>
<hr/>
<h3 class="h3">29) What is the non-clustered index in SQL?</h3>
<p>The indexes other than PRIMARY indexes (clustered indexes) are called non-clustered indexes. We know that clustered indexes are created automatically when primary keys are generated, and non-clustered indexes are created when multiple joins conditions and various filters are used in the query. The non-clustered index and table data are both stored in different places. It cannot be able to alter the physical order of the table and maintains the logical order of data.</p>
<p>The purpose of creating a non-clustered index is for searching the data. Its best example is a book where the content is written in one place, and the index is at a different place. We can create 0 to 249 non-clustered indexes in each table. The non-clustered indexing improves the performance of the queries which use keys without assigning the primary key.</p>
<hr/>
<h3 class="h3">30) What are the differences between SQL, MySQL, and SQL Server?</h3>
<p>The following comparison chart explains their main differences:</p>
<table class="alt">
<tr>
<th>SQL</th>
<th>MySQL</th>
<th>SQL Server</th>
</tr>
<tr>
<td>SQL or Structured Query Language is useful for managing our relational databases. It is used to query and operate the database.</td>
<td>MySQL is the popular database management system used for managing the relational database. It is a fast, scalable, and easy-to-use database.</td>
<td>SQL Server is an RDBMS database system mainly developed for the Windows system to store, retrieve, and access data requested by the developer.</td>
</tr>
<tr>
<td>SQL first appeared in 1974.</td>
<td>MySQL first appeared on May 23, 1995.</td>
<td>SQL Server first appeared on April 24, 1989.</td>
</tr>
<tr>
<td>SQL was developed by IBM Corporation.</td>
<td>MySQL was developed by Oracle Corporation.</td>
<td>SQL Server was developed by Microsoft Company.</td>
</tr>
<tr>
<td>SQL is a query language for managing databases.</td>
<td>MySQL is database software that uses SQL language to conduct with the database.</td>
<td>SQL Server is also a software that uses SQL language to conduct with the database.</td>
</tr>
<tr>
<td>SQL has no variables.</td>
<td>MySQL can use variables constraints and data types.</td>
<td>SQL Server can use variables constraints and data types.</td>
</tr>
<tr>
<td>SQL is a programming language, so that it does not get any updates. Its commands are always fixed and remain the same.</td>
<td>MySQL is software, so it gets frequent updation.</td>
<td>SQL Server is also software, so it gets frequent updation.</td>
</tr>
</table>
<hr/>
<h3 class="h3">31) What is the difference between SQL and PL/SQL?</h3>
<p>The following comparison chart explains their main differences:</p>
<table class="alt">
<tr>
<th>SQL</th>
<th>PL/SQL</th>
</tr>
<tr>
<td>SQL is a database structured query language used to communicate with relational databases. It was developed by IBM Corporations and first appeared in 1974.</td>
<td>PL/SQL or Procedural Language/Structured Query Language is a dialect of SQL used to enhance the capabilities of SQL. Oracle Corporation developed it in the early 90's. It uses SQL as its database language.</td>
</tr>
<tr>
<td>SQL is a declarative and data-oriented language.</td>
<td>PL/SQL is a procedural and application-oriented language.</td>
</tr>
<tr>
<td>SQL has no variables.</td>
<td>PL/SQL can use variables constraints and data types.</td>
</tr>
<tr>
<td>SQL can execute only a single query at a time.</td>
<td>PL/SQL can execute a whole block of code at once.</td>
</tr>
<tr>
<td>SQL query can be embedded in PL/SQL.</td>
<td>PL/SQL cannot be embedded in SQL as SQL does not support any programming language and keywords.</td>
</tr>
<tr>
<td>SQL can directly interact with the database server.</td>
<td>PL/SQL cannot directly interact with the database server.</td>
</tr>
<tr>
<td>SQL is like the source of data that we need to display.</td>
<td>PL/SQL provides a platform where SQL data will be shown.</td>
</tr>
</table>
<hr/>
<h3 class="h3">32) Is it possible to sort a column using a column alias?</h3>
<p>Yes. We can use the alias method in the ORDER BY instead of the WHERE clause for sorting a column.</p>
<hr/>
<h3 class="h3">33) What is the difference between clustered and non-clustered indexes in SQL?</h3>
<p>Indexing is a method to get the requested data very fast. There are mainly two types of indexes in SQL, clustered index and non-clustered index. The differences between these two indexes are very important from an SQL performance perspective. The following comparison chart explains their main differences:</p>
<table class="alt">
<tr>
<th>Clustered Index</th>
<th>Non-Clustered Index</th>
</tr>
<tr>
<td>A clustered index is a table or view where the data for the rows are stored. In a relational database, if the table column contains a primary key, MySQL automatically creates a clustered index named PRIMARY.</td>
<td>The indexes other than PRIMARY indexes (clustered indexes) are called non-clustered indexes. It has a structure separate from the data row. The non-clustered indexes are also known as secondary indexes.</td>
</tr>
<tr>
<td>Clustered indexes store the data information and the data itself.</td>
<td>Non-clustered indexes stores only the information, and then it will refer you to the data stored in clustered data.</td>
</tr>
<tr>
<td>There can only be one clustered index per table.</td>
<td>There can be one or more non-clustered indexes in a table.</td>
</tr>
<tr>
<td>A clustered index determines how data is stored physically in the table. Therefore, reading from a clustered index is faster.</td>
<td>It creates a logical ordering of data rows and uses pointers for accessing the physical data files. Therefore, reading from a clustered index is slower.</td>
</tr>
<tr>
<td>A clustered index always contains an index id of 0.</td>
<td>A non-clustered index always contains an index id>0.</td>
</tr>
</table>
<p>To read more information, <a href="https://www.javatpoint.com/mysql-clustered-vs-non-clustered-index">click here</a>.</p>
<hr/>
<h3 class="h3">34) What is the SQL query to display the current date?</h3>
<p>There is a built-in function in SQL called GetDate(), which is used to return the current timestamp.</p>
<hr/>
<h3 class="h3">35) Which are joins in SQL? Name the most commonly used SQL joins?</h3>
<p>SQL joins are used to retrieve data from multiple tables into a meaningful result set. It is performed whenever you need to fetch records from two or more tables. They are used with SELECT statement and join conditions.</p>
<p>The following are the most commonly used joins in SQL:</p>
<ul class="points">
<li>INNER JOIN</li>
<li>LEFT OUTER JOIN</li>
<li>RIGHT OUTER JOIN</li>
</ul>
<hr/>
<h3 class="h3">36) What are the different types of joins in SQL?</h3>
<p>Joins are used to merge two tables or retrieve data from tables. It depends on the relationship between tables. According to the ANSI standard, the following are the different types of joins used in SQL:</p>
<ul class="points">
<li>INNER JOIN</li>
<li>SELF JOIN</li>
<li>LEFT OUTER JOIN</li>
<li>RIGHT OUTER JOIN</li>
<li>FULL OUTER JOIN</li>
<li>CROSS JOIN</li>
</ul>
<img src="https://static.javatpoint.com/interview/images/sql-interview-questions3.png" alt="SQL Interview Questions and Answers" />
<p>To read more information, <a href="https://www.javatpoint.com/sql-server-joins">click here</a>.</p>
<hr/>
<h3 class="h3">37) What is INNER JOIN in SQL?</h3>
<p>Inner join returns only those records from the tables that match the specified condition and hides other rows and columns. In simple words, it fetches rows when there is at least one match of rows between the tables is found. INNER JOIN keyword joins the matching records from two tables. It is assumed as a default join, so it is optional to use the INNER keyword with the query.</p>
<p>The below visual representation explain this join more clearly:</p>
<img src="https://static.javatpoint.com/interview/images/sql-interview-questions4.png" alt="SQL Interview Questions and Answers" />
<p>The following syntax illustrates the INNER JOIN:</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT column_lists
FROM table1  
INNER JOIN table2 ON join_condition1  
INNER JOIN table3 ON join_condition2  
...;  
</textarea></div>
<p>To read more information, <a href="https://www.javatpoint.com/mysql-inner-join">click here</a>.</p>
<hr/>
<h3 class="h3">38) What is the Right JOIN in SQL?</h3>
<p>The Right join is used to retrieve all rows from the right-hand table and only those rows from the other table that fulfilled the join condition. It returns all the rows from the right-hand side table even though there are no matches in the left-hand side table. If it finds unmatched records from the left side table, it returns a Null value. This join is also known as Right Outer Join.</p>
<p>The below visual representation explain this join more clearly:</p>
<img src="https://static.javatpoint.com/interview/images/sql-interview-questions5.png" alt="SQL Interview Questions and Answers" />
<p>The following syntax illustrates the RIGHT JOIN:</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT colum_lists  
FROM table1   
RIGHT JOIN table2  
ON join_condition;
</textarea></div>
<p>To read more information, <a href="https://www.javatpoint.com/sql-right-join">click here</a>.</p>
<hr/>
<h3 class="h3">39) What is Left Join in SQL?</h3>
<p>The Left Join is used to fetch all rows from the left-hand table and common records between the specified tables. It returns all the rows from the left-hand side table even though there are no matches on the right-hand side table. If it will not find any matching record from the right side table, then it returns null. This join can also be called a Left Outer Join.</p>
<p>The following visual representation explains it more clearly:</p>
<img src="https://static.javatpoint.com/interview/images/sql-interview-questions6.png" alt="SQL Interview Questions and Answers" />
<p>The following syntax illustrates the RIGHT JOIN:</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT colum_lists  
FROM table1   
LEFT JOIN table2  
ON join_condition;
</textarea></div>
<p>To read more information, <a href="https://www.javatpoint.com/sql-left-join">click here</a>.</p>
<hr/>
<h3 class="h3">40) What is Full Join in SQL?</h3>
<p>The Full Join results from a combination of both left and right join that contains all the records from both tables. It fetches rows when there are matching rows in any one of the tables. This means it returns all the rows from the left-hand side table and all the rows from the right-hand side tables. If a match is not found, it puts NULL value. It is also known as FULL OUTER JOIN.</p>
<p>The following visual representation explains it more clearly:</p>
<img src="https://static.javatpoint.com/interview/images/sql-interview-questions7.png" alt="SQL Interview Questions and Answers" />
<p>The following syntax illustrates the FULL JOIN:</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT * FROM table1   
FULL OUTER JOIN table2  
ON join_condition;
</textarea></div>
<p>To read more information, <a href="https://www.javatpoint.com/sql-full-join">click here</a>.</p>
<hr/>
<h3 class="h3">41) What is a "TRIGGER" in SQL?</h3>
<p>A trigger is a set of SQL statements that reside in a system catalog. It is a special type of stored procedure that is invoked automatically in response to an event. It allows us to execute a batch of code when an insert, update or delete command is run against a specific table because the trigger is the set of activated actions whenever DML commands are given to the system.</p>
<p>SQL triggers have two main components one is action, and another is an event. When certain actions are taken, an event occurs as a result of those actions.</p>
<p>We use the CREATE TRIGGER statement for creating a trigger in SQL. Here is the syntax:</p>
<div class="codeblock"><textarea name="code" class="xml">
CREATE TRIGGER trigger_name    
    (AFTER | BEFORE) (INSERT | UPDATE | DELETE)  
         ON table_name FOR EACH ROW    
         BEGIN    
        --variable declarations    
        --trigger code    
        END;
</textarea></div>
<p>To read more information, <a href="https://www.javatpoint.com/mysql-trigger">click here</a>.</p>
<hr/>
<h3 class="h3">42) What is self-join and what is the requirement of self-join?</h3>
<p>A SELF JOIN is used to join a table with itself. This join can be performed using table aliases, which allow us to avoid repeating the same table name in a single sentence. It will throw an error if we use the same table name more than once in a single query without using table aliases.</p>
<p>A SELF JOIN is required when we want to combine data with other data in the same table itself. It is often very useful to convert a hierarchical structure to a flat structure.</p>
<p>The following syntax illustrates the SELF JOIN:</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT column_lists  
FROM table1 AS T1, table1 AS T2  
WHERE join_conditions;  
</textarea></div>
<p><strong>Example</strong></p>
<p>Suppose we have a table 'Student' having the following data:</p>
<img src="https://static.javatpoint.com/interview/images/sql-interview-questions8.png" alt="SQL Interview Questions and Answers" />
<p>If we want to get retrieve the student_id and name from the table where student_id is equal, and course_id is not equal, it can be done by using the self-join:</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT  s1.student_id, s1.name  
FROM student AS s1, student s2  
WHERE s1.student_id=s2.student_id  
AND s1.course_id<>s2.course_id;  
</textarea></div>
<p>Here is the result:</p>
<img src="https://static.javatpoint.com/interview/images/sql-interview-questions9.png" alt="SQL Interview Questions and Answers" />
<p>To read more information, <a href="https://www.javatpoint.com/mysql-self-join">click here</a>.</p>
<hr/>
<h3 class="h3">43) What are the set operators in SQL?</h3>
<p>We use the set operators to merge data from one or more tables of the same kind. Although the set operators are like SQL joins, there is a significant distinction. SQL joins combine columns from separate tables, whereas SQL set operators combine rows from different queries. SQL queries that contain set operations are called compound queries. The set operators in SQL are categories into four different types:</p>
<img src="https://static.javatpoint.com/interview/images/sql-interview-questions10.jpg" alt="SQL Interview Questions and Answers" />
<p><strong>A. UNION:</strong> It combines two or more results from multiple SELECT queries into a single result set. It has a default feature to remove the duplicate rows from the tables. The following syntax illustrates the Union operator:</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT columns FROM table1  
UNION  
SELECT columns FROM table2;  
</textarea></div>
<p><strong>B. UNION ALL:</strong> This operator is similar to the Union operator, but it does not remove the duplicate rows from the output of the SELECT statements. The following syntax illustrates the UNION ALL operator:</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT columns FROM table1  
UNION  ALL
SELECT columns FROM table2;  
</textarea></div>
<p><strong>C. INTERSECT:</strong> This operator returns the common records from two or more SELECT statements. It always retrieves unique records and arranges them in ascending order by default. Here, the number of columns and data types should be the same. The following syntax illustrates the INTERSECT operator:</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT columns FROM table1  
INTERSECT
SELECT columns FROM table2;  
</textarea></div>
<p><strong>D. MINUS:</strong> This operator returns the records from the first query, which is not found in the second query. It does not return duplicate values. The following syntax illustrates the MINUS operator:</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT columns FROM table1  
MINUS
SELECT columns FROM table2;  
</textarea></div>
<p>To read more information, <a href="https://www.javatpoint.com/dbms-sql-set-operation">click here</a>.</p>
<hr/>
<h3 class="h3">44) What is the difference between IN and BETWEEN operators?</h3>
<p>The following comparison chart explains their main differences:</p>
<table class="alt">
<tr>
<th>BETWEEN Operator</th>
<th>IN Operator</th>
</tr>
<tr>
<td>This operator is used to selects the range of data between two values. The values can be numbers, text, and dates as well.</td>
<td>It is a logical operator to determine whether or not a specific value exists within a set of values. This operator reduces the use of multiple OR conditions with the query.</td>
</tr>
<tr>
<td>It returns records whose column value lies in between the defined range.</td>
<td>It compares the specified column's value and returns the records when the match exists in the set of values.</td>
</tr>
<tr>
<td>
The following syntax illustrates this operator:<br>
SELECT * FROM table_name<br>
WHERE column_name BETWEEN 'value1' AND 'value2';
</td>
<td>
The following syntax illustrates this operator:<br>
SELECT * FROM table_name<br>
WHERE column_name IN ('value1','value 2');
</td>
</tr>
</table>
<hr/>
<h3 class="h3">45) What is a constraint? Tell me about its various levels.</h3>
<p>The constraint is used to specify the rule and regulations that allows or restricts what values/data will be stored in the table. It ensures data accuracy and integrity inside the table. It enforces us to store valid data and prevents us from storing irrelevant data. If any interruption occurs between the constraint and data action, the action is failed. Some of the most commonly used constraints are NOT NULL, PRIMARY KEY, FOREIGN KEY, AUTO_INCREMENT, UNIQUE KEY, etc.</p>
<p>The following syntax illustrates us to create a constraint for a table:</p>
<div class="codeblock"><textarea name="code" class="xml">
CREATE TABLE table_name (  
    column1 datatype constraint,  
    column2 datatype constraint, 
    .........  
);  
</textarea></div>
<p>SQL categories the constraints into two levels:</p>
<p><strong>Column Level Constraints:</strong> These constraints are only applied to a single column and limit the type of data that can be stored in that column.</p>
<p><strong>Table Level Constraints:</strong> These constraints are applied to the entire table and limit the type of data that can be entered.</p>
<p>To read more information, <a href="https://www.javatpoint.com/mysql-constraints">click here</a>.</p>
<hr/>
<h3 class="h3">46) How to write an SQL query to find students' names start with 'A'?</h3>
<p>We can write the following query to get the student details whose name starts with A:</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT * FROM student WHERE stud_name like 'A%';
</textarea></div>
<p>Here is the demo example where we have a table named student that contains two names starting with the 'A' character.</p>
<img src="https://static.javatpoint.com/interview/images/sql-interview-questions11.png" alt="SQL Interview Questions and Answers" />
<hr/>
<h3 class="h3">47) Write the SQL query to get the third maximum salary of an employee from a table named employees.</h3>
<p>The following query is the simplest way to get the third maximum salary of an employee:</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT * FROM `employees` ORDER BY `salary` DESC LIMIT 1 OFFSET 2
</textarea></div>
<p>Here is the demo example that shows how to get the third maximum salary of an employee.</p>
<img src="https://static.javatpoint.com/interview/images/sql-interview-questions12.png" alt="SQL Interview Questions and Answers" />
<p>The following are the alternative way to get the third-highest salary of an employee:</p>
<p><strong>A. Using LIMIT Keyword</strong></p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT salary FROM employees 
ORDER BY salary DESC 
LIMIT 2, 1;
</textarea></div>
<p><strong>B. Using Subquery</strong></p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT salary  
FROM 
    (SELECT salary 
     FROM employees 
     ORDER BY salary DESC 
     LIMIT 3) AS Temp 
ORDER BY salary LIMIT 1;
</textarea></div>
<p><strong>C. Using TOP Keyword</strong></p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT TOP 1 salary 
FROM 
    (SELECT DISTINCT TOP 3 salary 
     FROM employees 
     ORDER BY salary DESC) AS Temp 
ORDER BY salary ASC;
</textarea></div>
<hr/>
<h3 class="h3">48) What is the difference between DELETE and TRUNCATE statements in SQL?</h3>
<p>The main difference between them is that the delete statement deletes data without resetting a table's identity, whereas the truncate command resets a particular table's identity. The following comparison chart explains it more clearly:</p>
<table class="alt">
<tr>
<th>No.</th>
<th>DELETE</th>
<th>TRUNCATE</th>
</tr>
<tr>
<td>1)</td>
<td>The delete statement removes single or multiple rows from an existing table depending on the specified condition.</td>
<td>The truncate command deletes the whole contents of an existing table without the table itself. It preserves the table structure or schema.</td>
</tr>
<tr>
<td>2)</td>
<td>DELETE is a <strong>DML command.</strong></td>
<td>TRUNCATE is a <strong>DML command.</strong></td>
</tr>
<tr>
<td>3)</td>
<td>We <strong>can use the WHERE</strong> clause in the DELETE command.</td>
<td>We <strong>cannot use the WHERE</strong> clause with TRUNCATE.</td>
</tr>
<tr>
<td>4)</td>
<td>DELETE statement is used <strong>to delete a row</strong> from a table.</td>
<td>TRUNCATE statement is used <strong>to remove all the rows</strong> from a table.</td>
</tr>
<tr>
<td>5)</td>
<td>DELETE is <strong>slower</strong> because it maintained the log.</td>
<td>TRUNCATE statement is <strong>faster</strong> than DELETE statement as it deletes entire data at a time without maintaining transaction logs.</td>
</tr>
<tr>
<td>6)</td>
<td>You <strong>can roll back</strong> data after using the DELETE statement.</td>
<td>It is <strong>not possible to roll back</strong> after using the TRUNCATE statement.</td>
</tr>
<tr>
<td>7)</td>
<td>DELETE query <strong>takes more space.</strong></td>
<td>TRUNCATE query <strong>occupies less space.</strong></td>
</tr>
</table>
<p>To read more information, <a href="https://www.javatpoint.com/delete-vs-truncate-command">click here</a>.</p>
<hr/>
<h3 class="h3">49) What is the ACID property in a database?</h3>
<p>The ACID properties are meant for the transaction that goes through a different group of tasks. A transaction is a single logical order of data. It provides properties to maintain consistency before and after the transaction in a database. It also ensures that the data transactions are processed reliably in a database system.</p>
<p>The ACID property is an acronym for Atomicity, Consistency, Isolation, and Durability.</p>
<p><strong>Atomicity:</strong> It ensures that all statements or operations within the transaction unit must be executed successfully. If one part of the transaction fails, the entire transaction fails, and the database state is left unchanged. Its main features are COMMIT, ROLLBACK, and AUTO-COMMIT.</p>
<p><strong>Consistency:</strong> This property ensures that the data must meet all validation rules. In simple words, we can say that the database changes state only when a transaction will be committed successfully. It also protects data from crashes.</p>
<p><strong>Isolation:</strong> This property guarantees that the concurrent property of execution in the transaction unit must be operated independently. It also ensures that statements are transparent to each other. The main goal of providing isolation is to control concurrency in a database.</p>
<p><strong>Durability:</strong> This property guarantees that once a transaction has been committed, it persists permanently even if the system crashes, power loss, or failed.</p>
<p>To read more information, <a href="https://www.javatpoint.com/acid-properties-in-dbms">click here</a>.</p>
<hr/>
<h3 class="h3">50) Is a blank space or zero the same as a NULL value?</h3>
<p>No. The NULL value is not the same as zero or a blank space. The following points explain their main differences:</p>
<ul class="points">
<li>A NULL value is a value, which is 'unavailable, unassigned, unknown or not applicable.' It would be used in the absence of any value. We can perform arithmetic operations on it. On the other hand, zero is a number, and a blank space is treated as a character.</li>
<li>The NULL value can be treated as an unknown and missing value, but zero and blank spaces differ from the NULL value.</li>
<li>We can compare a blank space or a zero to another blank space or a zero. On the other hand, one NULL may not be the same as another NULL. NULL indicates that no data has been provided or that no data exists.</li>
</ul>
<hr/>
<h3 class="h3">51) What are functions and their usage in SQL?</h3>
<p>SQL functions are simple code snippets that are frequently used and re-used in database systems for data processing and manipulation. Functions are the measured values. It always performs a specific task. The following rules should be remembered while creating functions:</p>
<ul class="points">
<li>A function should have a name, and the name cannot begin with a special character such as @, $, #, or other similar characters.</li>
<li>Functions can only work with the SELECT statements.</li>
<li>Every time a function is called, it compiles.</li>
<li>Functions must return value or result.</li>
<li>Functions are always used with input parameters.</li>
</ul>
<p>SQL categories the functions into two types:</p>
<ul class="points">
<li><strong>User-Defined Function:</strong> Functions created by a user based on their needs are termed user-defined functions.</li>
<li><strong>System Defined Function:</strong> Functions whose definition is defined by the system are termed system-defined functions. They are built-in database functions.</li>
</ul>
<p>SQL functions are used for the following purposes:</p>
<ul class="points">
<li>To perform calculations on data</li>
<li>To modify individual data items</li>
<li>To manipulate the output</li>
<li>To format dates and numbers</li>
<li>To convert data types</li>
</ul>
<hr/>
<h3 class="h3">52) What is meant by case manipulation functions? Explains its different types in SQL.</h3>
<p>Case manipulation functions are part of the character functions. It converts the data from the state in which it is already stored in the table to upper, lower, or mixed case. The conversion performed by this function can be used to format the output. We can use it in almost every part of the SQL statement. Case manipulation functions are mostly used when you need to search for data, and you don't have any idea that the data you are looking for is in lower case or upper case.</p>
<p>There are three case manipulation functions in SQL:</p>
<p><strong>LOWER:</strong> This function is used to converts a given character into lowercase. The following example will return the 'STEPHEN' as 'stephen':</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT LOWER ('STEPHEN') AS Case_Reault FROM dual;
</textarea></div>

<p><strong>UPPER:</strong> This function is used to converts a given character into uppercase. The following example will return the 'stephen' as 'STEPHEN':</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT UPPER ('stephen') AS Case_Reault FROM dual;
</textarea></div>
<p><strong>INITCAP:</strong> This function is used to converts given character values to uppercase for the initials of each word. It means every first letter of the word is converted into uppercase, and the rest is in lower case. The following example will return the 'hello stephen' as 'Hello Stephen':</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT INITCAP ('hello stephen') AS Case_Reault FROM dual;
</textarea></div>
<hr/>
<h3 class="h3">53) Explain character-manipulation functions? Explains its different types in SQL.</h3>
<p>Character-manipulation functions are used to change, extract, and alter the character string. When one or more characters and words are passed into the function, the function will perform its operation on those input strings and return the result.</p>
<p>The following are the character manipulation functions in SQL:</p>
<p><strong>A) CONCAT:</strong> This function is used to join two or more values together. It always appends the second string into the end of the first string. For example:</p>
<p><strong>Input:</strong> SELECT CONCAT ('Information-', 'technology') FROM DUAL;</p>
<p><strong>Output:</strong> Information-technology</p>
<p><strong>B) SUBSTR:</strong> It is used to return the portion of the string from a specified start point to an endpoint. For example:</p>
<p><strong>Input:</strong> SELECT SUBSTR ('Database Management System', 9, 11) FROM DUAL;</p>
<p><strong>Output:</strong> Management</p>
<p><strong>C) LENGTH:</strong> This function returns the string's length in numerical value, including the blank spaces. For example:</p>
<p><strong>Input:</strong> SELECT LENGTH ('Hello Javatpoint') FROM DUAL;</p>
<p><strong>Output:</strong> 16</p>
<p><strong>D) INSTR:</strong> This function finds the exact numeric position of a specified character or word in a given string. For example:</p>
<p><strong>Input:</strong> SELECT INSTR ('Hello Javatpoint', 'Javatpoint');</p>
<p><strong>Output:</strong> 7</p>
<p><strong>E) LPAD:</strong> It returns the padding of the left-side character value for right-justified value. For example:</p>
<p><strong>Input:</strong> SELECT LPAD ('200', 6,'*');</p>
<p><strong>Output:</strong> ***200</p>
<p><strong>F) RPAD:</strong> It returns the padding of the right-side character value for left-justified value. For example:</p>
<p><strong>Input:</strong> SELECT RPAD ('200', 6,'*');</p>
<p><strong>Output:</strong> 200***</p>
<p><strong>G) TRIM:</strong> This function is used to remove all the defined characters from the beginning, end, or both. It also trimmed extra spaces. For example:</p>
<p><strong>Input:</strong> SELECT TRIM ('A' FROM 'ABCDCBA');</p>
<p><strong>Output:</strong> BCDCB</p>
<p><strong>H) REPLACE:</strong> This function is used to replace all occurrences of a word or portion of the string (substring) with the other specified string value. For example:</p>
<p><strong>Input:</strong> SELECT REPLACE ( 'It is the best coffee at the famous coffee shop.', 'coffee', 'tea');</p>
<p><strong>Output:</strong> It is the best tea at the famous tea shop.</p>
<hr/>
<h3 class="h3">54) What is the usage of the NVL() function?</h3>
<p>The NVL() function is used to convert the NULL value to the other value. The function returns the value of the second parameter if the first parameter is NULL. If the first parameter is anything other than NULL, it is left unchanged. This function is used in Oracle, not in SQL and MySQL. Instead of NVL() function, MySQL have IFNULL() and SQL Server have ISNULL() function.</p>
<hr/>
<h3 class="h3">55) Which function is used to return remainder in a division operator in SQL?</h3>
<p>The MOD function returns the remainder in a division operation.</p>
<hr/>
<h3 class="h3">56) What are the syntax and use of the COALESCE function?</h3>
<p>The COALESCE() function evaluates the arguments in sequence and returns the first NON-NULL value in a specified number of expressions. If it evaluates arguments as NULL or not found any NON-NULL value, it returns the NULL result.</p>
<p>The syntax of COALESCE function is given below:</p>
<div class="codeblock"><textarea name="code" class="xml">
COALESCE (exp1, exp2, .... expn) 
</textarea></div>
<p><strong>Example:</strong></p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT COALESCE(NULL, 'Hello', 'Javatpoint', NULL) AS Result;
</textarea></div>
<p>This statement will return the following output:</p>
<img src="https://static.javatpoint.com/interview/images/sql-interview-questions13.png" alt="SQL Interview Questions and Answers" />
<hr/>
<h3 class="h3">57) How do we use the DISTINCT statement? What is its use?</h3>
<p>The DISTINCT keyword is used to ensure that the fetched value always has unique values. It does not allow to have duplicate values. The DISTINCT keyword is used with the SELECT statement and retrieves different values from the table's column. We can use it with the help of the following syntax:</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT DISTINCT column_lists FROM table_name WHERE [condition];
</textarea></div>
<p>Suppose we have a table 'customer' containing eight records in which the name column has some duplicate values.</p>
<img src="https://static.javatpoint.com/interview/images/sql-interview-questions14.png" alt="SQL Interview Questions and Answers" />
<p>If we want to get the name column without any duplicate values, the DISTINCT keyword is required. Executing the below command will return a name column with unique values.</p>
<img src="https://static.javatpoint.com/interview/images/sql-interview-questions15.png" alt="SQL Interview Questions and Answers" />
<hr/>
<h3 class="h3">58) What is the default ordering of data using the ORDER BY clause? How could it be changed?</h3>
<p>The ORDER BY clause is used to sort the table data either in ascending or descending order. By default, it will sort the table in ascending order. If we want to change its default behavior, we need to use the DESC keyword after the column name in the ORDER BY clause.</p>
<p>The syntax to do this is given below:</p>
<div class="codeblock"><textarea name="code" class="xml">
SELECT expressions FROM tables  
WHERE conditions  
ORDER BY expression [ASC | DESC];  
</textarea></div>
<p>We have taken a customer table in the previous example. Now, we will demonstrate the ORDER BY clause on them as well.</p>
<p>In the below output, we can see that the first query will sort the table data in ascending order based on the name column. However, if we run the second query by specifying the DESC keyword, the table's order is changed in descending order.</p>
<img src="https://static.javatpoint.com/interview/images/sql-interview-questions16.png" alt="SQL Interview Questions and Answers" />
<hr/>
<h3 class="h3">59) Is the following query returns the output?</h3>
<div class="codeblock"><textarea name="code" class="xml">
SELECT subject_code, AVG (marks)
FROM Students
WHERE AVG(marks) > 70
GROUP BY subject_code;
</textarea></div>
<p><strong>Answer:</strong> No. The above query does not return the output because we cannot use the WHERE clause to restrict the groups. We need to use the HAVING clause instead of the WHERE clause to get the correct output.</p>
<hr/>
<h3 class="h3">60) What is the difference between the WHERE and HAVING clauses?</h3>
<p>The main difference is that the WHERE clause is used to filter records before any groupings are established, whereas the HAVING clause is used to filter values from a group. The below comparison chart explains the most common differences:</p>
<table class="alt">
<tr>
<th>WHERE</th>
<th>HAVING</th>
</tr>
<tr>
<td>This clause is implemented in row operations.</td>
<td>This clause is implemented in column operations.</td>
</tr>
<tr>
<td>It does not allow to work with aggregate functions.</td>
<td>It can work with aggregate functions.</td>
</tr>
<tr>
<td>This clause can be used with the SELECT, UPDATE, and DELETE statements.</td>
<td>This clause can only be used with the SELECT statement.</td>
</tr>
</table>
<p>To know more differences, <a href="https://www.javatpoint.com/where-vs-having">click here</a>.</p>
<hr/>
<h3 class="h3">61) How many Aggregate functions are available in SQL?</h3>
<p>The aggregate function is used to determine and calculate several values in a table and return the result as a single number. For example, the average of all values, the sum of all values, and the maximum and minimum value among particular groupings of values.</p>
<p>The following syntax illustrates how to use aggregate functions:</p>
<div class="codeblock"><textarea name="code" class="xml">
function_name (DISTINCT | ALL expression)  
</textarea></div>
<p><strong>SQL provides seven (7) aggregate functions, which are given below:</strong></p>
<ul class="points">
<li><strong>AVG():</strong> This function is used to returns the average value from specified columns.</li>
<li><strong>COUNT():</strong> This function is used to returns the number of table rows, including rows with null values.</li>
<li><strong>MAX():</strong> This function is used to returns the largest value among the group.</li>
<li><strong>MIN():</strong> This function is used to returns the smallest value among the group.</li>
<li><strong>SUM():</strong> This function is used to returns the total summed values(non-null) of the specified column.</li>
<li><strong>FIRST()</strong>: This function is used to returns the first value of an expression.</li>
<li><strong>LAST()</strong>: This function is used to returns the last value of an expression.</li>
</ul>
<hr/>
<h3 class="h3">62) What is SQL Injection?</h3>
<p>SQL injection is a type of vulnerability in website and web app code that allows attackers to control back-end operations and access, retrieve, and destroy sensitive data from databases. In this technique, malicious SQL statements are inserted into a database entry field, and once they are performed, the database becomes vulnerable to an attacker. This technique is commonly used to access sensitive data and perform administrative activities on databases by exploiting data-driven applications. It is also known as <strong>SQLi attack.</strong></p>
<p>Some common examples of SQL injection are:</p>
<ul class="points">
<li>Accessing confidential data to modify an SQL query to get desired results.</li>
<li>UNION attacks to steal data from different database tables.</li>
<li>Examine the database to extract information regarding the version and structure of the database.</li>
</ul>
<hr/>
<h3 class="h3">63) What is the difference between the RANK() and DENSE_RANK() functions?</h3>
<p>The <strong>RANK function</strong> determines the rank for each row within your ordered partition in the result set. If the two rows are assigned the same rank, then the next number in the ranking will be its previous rank plus a number of duplicate numbers. For example, if we have three records at rank 4, the next rank listed would be ranked 7.</p>
<p>The <strong>DENSE_RANK</strong> function assigns a unique rank for each row within a partition as per the specified column value without any gaps. It always specifies ranking in consecutive order. If the two rows are assigned the same rank, this function will assign it with the same rank, and the next rank being the next sequential number. For example, if we have 3 records at rank 4, the next rank listed would be ranked 5.</p>
<hr/>
<h3 class="h3">64) Is it possible to implicitly insert a row for the identity column?</h3>
<p>Yes. We can implicitly insert a row for the identity column. Here is an example of doing this:</p>
<div class="codeblock"><textarea name="code" class="xml">
SET IDENTITY_INSERT TABLE1 ON
INSERT INTO demo_table1 (id, name, branch)
SELECT id, name, branch FROM demo_table2
SET IDENTITY_INSERT OFF
</textarea></div>
<hr/>
<h3 class="h3">65) What are SQL comments?</h3>
<p>Comments are explanations or annotations in SQL queries that are readable by programmers. It's used to make SQL statements easier to understand for humans. During the parsing of SQL code, it will be ignored. Comments can be written on a single line or across several lines.</p>
<ul class="points">
<li><strong>Single Line Comments:</strong> It starts with two consecutive hyphens (--).</li>
<li><strong>Multi-line Comments:</strong> It starts with /* and ends with */.</li>
</ul>

<p>This section provides multiple-choice questions and answers based on advanced query optimization.</p>
<p class="pq">1) What type of join do you need when you want to include rows with values that don't match?</p>
<ol class="pointsa">
<li>Equi-Join</li>
<li>Outer Join</li>
<li>Natural Join</li>
<li>All of the above.</li>
</ol>
<button class="showanswer" onclick="showhide(1)"><span id="btntext1">Show Answer</span></button>
<button class="workspace" onclick="showworkspace(1)"><span id="btntext1">Workspace</span></button>
<div id="workspace1"></div>
<div class="testanswer" id="answer1">
<p><strong>Answer:</strong> b</p>
<p><strong>Explanation:</strong> Outer Join returns all rows that match the specified condition, including unmatched rows from one or both tables. Hence, option (B) is the right answer because the outer join is the only join that can display unmatched records.</p>
</div>
<p class="pq">2) Which of the following option matched a CASE SQL statement?</p>
<ol class="pointsa">
<li>A way to establish an IF-THEN-ELSE in SQL.</li>
<li>A way to establish a loop in SQL.</li>
<li>A way to establish a data definition in SQL.</li>
<li>None of the above.</li>
</ol>
<button class="showanswer" onclick="showhide(2)"><span id="btntext2">Show Answer</span></button>
<button class="workspace" onclick="showworkspace(2)"><span id="btntext2">Workspace</span></button>
<div id="workspace2"></div>
<div class="testanswer" id="answer2">
<p><strong>Answer:</strong> a</p>
<p><strong>Explanation:</strong> The CASE expression is a control flow function that evaluates a set of conditions and displays the output when the first condition is met. It is primarily used to handle conditional statements, same as IF-THEN-ELSE statements in other programming languages. Hence, option (A) is the right answer.</p>
</div>
<p class="pq">3) Which of the following is an illegal data type in SQL?</p>
<ol class="pointsa">
<li>NUMBER</li>
<li>CLOB</li>
<li>BLOB</li>
<li>LINT</li>
</ol>
<button class="showanswer" onclick="showhide(3)"><span id="btntext3">Show Answer</span></button>
<button class="workspace" onclick="showworkspace(3)"><span id="btntext3">Workspace</span></button>
<div id="workspace3"></div>
<div class="testanswer" id="answer3">
<p><strong>Answer:</strong> d</p>
<p><strong>Explanation: NUMBER</strong> data type is used for defining exact or approximate numeric values. <strong>CLOB</strong> stands for Character Large Object used for storing a large amount of textual data. <strong>BLOB</strong> stands for Binary Large Object that acts as a reference or pointer to an object such as a file, image, video, etc. <strong>LINT</strong> is a SQL dialect linter. It highlights mistakes, explains what's wrong with them, why they might be wrong, and what you can do as developers to fix them. Hence option (D) is the right answer.</p>
</div>
<p class="pq">4) The view is updated immediately if the actual relations used in the view definition change. These views are referred to as _________.</p>
<ol class="pointsa">
<li>Instant views</li>
<li>Instantaneous views</li>
<li>Materialized views</li>
<li>Materialistic views</li>
</ol>
<button class="showanswer" onclick="showhide(4)"><span id="btntext4">Show Answer</span></button>
<button class="workspace" onclick="showworkspace(4)"><span id="btntext4">Workspace</span></button>
<div id="workspace4"></div>
<div class="testanswer" id="answer4">
<p><strong>Answer:</strong> c</p>
<p><strong>Explanation:</strong> A materialized view is a table stored on the disk containing the data from the result set of a query. It helps to keep the database up-to-date. Views are called Materialized views when the actual relations used in the view definition change, and the view is updated immediately.</p>
</div>
<p class="pq">5) The part of SQL that deals with the SQL support constructs are called _______.</p>
<ol class="pointsa">
<li>Persistent Construct Dealer</li>
<li>Persistent Supports Centre</li>
<li>Primary Storage Medium</li>
<li>Persistent Storage Module</li>
</ol>
<button class="showanswer" onclick="showhide(5)"><span id="btntext5">Show Answer</span></button>
<button class="workspace" onclick="showworkspace(5)"><span id="btntext5">Workspace</span></button>
<div id="workspace5"></div>
<div class="testanswer" id="answer5">
<p><strong>Answer:</strong> d</p>
<p><strong>Explanation:</strong> Persistent Storage Module (SQL/PSM) is a feature that allows users to extend the basic SQL functionality with their own additions.</p>
</div>
<p class="pq">6) Which of the following is true regarding a correlated subquery?</p>
<ol class="pointsa">
<li>Uses the result of an outer query to determine the processing of an inner query.</li>
<li>Uses the result of an inner query to determine the processing of an outer query.</li>
<li>Uses the result of an inner query to determine the processing of an inner query.</li>
<li>Uses the result of an outer query to determine the processing of an outer query.</li>
</ol>
<button class="showanswer" onclick="showhide(6)"><span id="btntext6">Show Answer</span></button>
<button class="workspace" onclick="showworkspace(6)"><span id="btntext6">Workspace</span></button>
<div id="workspace6"></div>
<div class="testanswer" id="answer6">
<p><strong>Answer:</strong> a</p>
<p><strong>Explanation:</strong> Correlated subqueries are used for row-by-row processing. It referenced a column in the outer query and evaluated once for each row processed by the outer query (parent statement) such as SELECT, UPDATE, or DELETE statement. On the other hand, uncorrelated subqueries evaluate the subquery first and then determine the processing of the outer query.</p>
</div>
<p class="pq">7) Whenever a database is modified, the system executes a statement called _________.</p>
<ol class="pointsa">
<li>Function</li>
<li>Trigger</li>
<li>Package</li>
<li>Protocol</li>
</ol>
<button class="showanswer" onclick="showhide(7)"><span id="btntext7">Show Answer</span></button>
<button class="workspace" onclick="showworkspace(7)"><span id="btntext7">Workspace</span></button>
<div id="workspace7"></div>
<div class="testanswer" id="answer7">
<p><strong>Answer:</strong> b</p>
<p><strong>Explanation:</strong> A trigger is a set of SQL queries that reside in a system catalog. It is a special type of stored procedure that is invoked automatically in response to an event. Hence, option (B) is correct because the trigger is a statement that the system executes whenever a database is modified.</p>
</div>
<p class="pq">8) A transaction starts when</p>
<ol class="pointsa">
<li>A COMMIT statement is issued</li>
<li>A ROLLBACK statement is issued</li>
<li>A CREATE statement is used</li>
<li>All of the above</li>
</ol>
<button class="showanswer" onclick="showhide(8)"><span id="btntext8">Show Answer</span></button>
<button class="workspace" onclick="showworkspace(8)"><span id="btntext8">Workspace</span></button>
<div id="workspace8"></div>
<div class="testanswer" id="answer8">
<p><strong>Answer:</strong> d</p>
<p><strong>Explanation:</strong> A transaction has a statement to begin and end both. It starts when one of the following events takes place CREATE, COMMIT, ROLLBACK, etc. Hence option (D) is correct.</p>
</div>
<p class="pq">9) Which of the below sequential statements cannot be used in a function?</p>
<ol class="pointsa">
<li>IF</li>
<li>WAIT</li>
<li>CASE</li>
<li>LOOP</li>
</ol>
<button class="showanswer" onclick="showhide(9)"><span id="btntext9">Show Answer</span></button>
<button class="workspace" onclick="showworkspace(9)"><span id="btntext9">Workspace</span></button>
<div id="workspace9"></div>
<div class="testanswer" id="answer9">
<p><strong>Answer:</strong> b</p>
<p><strong>Explanation:</strong> A function can use any type of sequential statements, such as an IF, CASE, LOOP, NEXT, EXIT, or NULL statement. However, it has one exception: it does not allow to work with WAIT statement because it cannot be used inside a function. The WAIT statement is used to schedule system work.</p>
</div>
<p class="pq">10) In the data type TIME(p), what does p stands for?</p>
<ol class="pointsa">
<li>The amount of delay required to be added to the time</li>
<li>The maximum number of allowed hours</li>
<li>The number of fractional digits for the seconds</li>
<li>None of the above</li>
</ol>
<button class="showanswer" onclick="showhide(10)"><span id="btntext10">Show Answer</span></button>
<button class="workspace" onclick="showworkspace(10)"><span id="btntext10">Workspace</span></button>
<div id="workspace10"></div>
<div class="testanswer" id="answer10">
<p><strong>Answer:</strong> c</p>
<p><strong>Explanation:</strong> The SQL TIME data type represents a day's time using a 24-hour clock. The p indicates the number of digits for the fractional part of the seconds. Its value ranges from 0 to 7. If we do not specify the p, it will be 7 by default. Hence option (C) is the correct answer.</p>
</div>
<p class="pq">11) Which of the following is a privilege in SQL standard?</p>
<ol class="pointsa">
<li>SELECT</li>
<li>INSERT</li>
<li>UPDATE</li>
<li>All of the above</li>
</ol>
<button class="showanswer" onclick="showhide(11)"><span id="btntext11">Show Answer</span></button>
<button class="workspace" onclick="showworkspace(11)"><span id="btntext11">Workspace</span></button>
<div id="workspace11"></div>
<div class="testanswer" id="answer11">
<p><strong>Answer:</strong> d</p>
<p><strong>Explanation:</strong> A privilege allows users to perform a set of activities on a particular database object. Privileges are divided into two categories:</p>
<ul class="points">
<li><strong>System Privileges</strong>: This indicates that the user has the ability to CREATE, ALTER, or "DROP" database components.</li>
<li><strong>Object Privileges</strong>: This enables the user to EXECUTE, SELECT, INSERT, or DELETE data from database objects with privileges.</li>
</ul>
</div>
<p class="pq">12) Which of the following indicates another name for referential integrity constraints?</p>
<ol class="pointsa">
<li>Functional dependencies</li>
<li>Subset dependencies</li>
<li>Superset dependencies</li>
<li>Primary dependencies</li>
</ol>
<button class="showanswer" onclick="showhide(12)"><span id="btntext12">Show Answer</span></button>
<button class="workspace" onclick="showworkspace(12)"><span id="btntext12">Workspace</span></button>
<div id="workspace12"></div>
<div class="testanswer" id="answer12">
<p><strong>Answer:</strong> b</p>
<p><strong>Explanation:</strong> Referential integrity specify a relation between two tables. Each table must have a primary key. It is also called subset dependencies because the set of foreign key values in table1 of table2 must be a subset of the set of primary key values in table2.</p>
</div>
<p class="pq">13) Triggers are stored blocks of code that have to be called in order to operate.</p>
<ol class="pointsa">
<li>TRUE</li>
<li>FALSE</li>
</ol>
<button class="showanswer" onclick="showhide(13)"><span id="btntext13">Show Answer</span></button>
<button class="workspace" onclick="showworkspace(13)"><span id="btntext13">Workspace</span></button>
<div id="workspace13"></div>
<div class="testanswer" id="answer13">
<p><strong>Answer:</strong> b</p>
<p><strong>Explanation:</strong> Option (B) is correct because the trigger is a set of SQL statements that resides in system memory with unique names and is executed automatically when a database server event occurs.</p>
</div>
<p class="pq">14) Outer join is the same as equi-join, except one of the duplicate columns in the result table is removed.</p>
<ol class="pointsa">
<li>TRUE</li>
<li>FALSE</li>
</ol>
<button class="showanswer" onclick="showhide(14)"><span id="btntext14">Show Answer</span></button>
<button class="workspace" onclick="showworkspace(14)"><span id="btntext14">Workspace</span></button>
<div id="workspace14"></div>
<div class="testanswer" id="answer14">
<p><strong>Answer:</strong> b</p>
<p><strong>Explanation:</strong> An equijoin is a join in which the equal comparison operator is used to match the keys of both tables. In contrast, outer join is a join where rows in one table that do not have a matching row in another table are selected with NULL values for the unknown columns.</p>
</div>
<p class="pq">15) A transaction is a collection of closely related update commands that must all be completed, or none at all, for the database to be valid.</p>
<ol class="pointsa">
<li>TRUE</li>
<li>FALSE</li>
</ol>
<button class="showanswer" onclick="showhide(15)"><span id="btntext15">Show Answer</span></button>
<button class="workspace" onclick="showworkspace(15)"><span id="btntext15">Workspace</span></button>
<div id="workspace15"></div>
<div class="testanswer" id="answer15">
<p><strong>Answer:</strong> a</p>
<p><strong>Explanation:</strong> A transaction is a group of statements to perform single or multiple tasks in a database. Each transaction must happen two things in SQL:</p>
<ul class="points">
<li>Either all modification is successful when the transaction is committed.</li>
<li>Or, all modifications are undone when the transaction is rollback.</li>
</ul>
</div>
<hr/>




<script src="https://static.javatpoint.com/js/shcoreandbrush.js"></script>
<script type="text/javascript"> dp.SyntaxHighlighter.HighlightAll('code'); </script>
<script src="https://static.javatpoint.com/lazysizes.min.js?v=5.8" async></script>
















			@endsection