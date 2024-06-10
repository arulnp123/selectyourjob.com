<style>
p.qus {
    font-size: 17px;
    font-weight: bold;
  	margin-top: 20px;
}
tbody, ul{
	text-align: initial;
}
</style>

<section class="featured-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="about-content pr-70 rpr-0 wow fadeInRight delay-0-2s">
					<div class="section-title mb-35">
						<h3>SQL Interview Questions and Answers</h3>
                      
						<p class="qus">1. What is the difference between SQL and MySQL?</p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">SQL</th>
							  <th scope="col">MySQL</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>SQL is a standard language which stands for Structured Query Language based on the English language </td>
							  <td>MySQL is a database management system.</td>
							</tr>
							<tr>
							  <td>SQL is the core of the relational database which is used for accessing and managing database.</td>
							  <td>MySQL is an RDMS (Relational Database Management System) such as SQL Server, Informix etc.</td>
							</tr>
						  </tbody>
						</table>
                      
                      <p class="qus">2. What are the different subsets of SQL?</p>
                      <ul>
                        <li>1. Data Definition Language (DDL) – It allows you to perform various operations on the database such as CREATE, ALTER, and DELETE objects.</li>
                        <li>2. Data Manipulation Language(DML) – It allows you to access and manipulate data. It helps you to insert, update, delete and retrieve data from the database.</li>
                        <li>3. Data Control Language(DCL) – It allows you to control access to the database. Example – Grant, Revoke access permissions.</li>
                      </ul>
                      
                      <p class="qus">3. What do you mean by DBMS? What are its different types?</p>
					  <p class="ans">                       
					  <img src="<?= base_url(); ?>assets/img/dbms.png" style="width:300px;" /><br>
					  A Database Management System (DBMS) is a  software application that interacts with the user, applications, and the database itself to capture and analyze data. A database is a structured collection of data.<br> 
A DBMS allows a user to interact with the database. The data stored in the database can be modified, retrieved and deleted and can be of any type like strings, numbers, images, etc.<br>
There are two types of DBMS:<br>
					  <ul>
                        <li>●	Relational Database Management System: The data is stored in relations (tables). Example – MySQL.</li>
                        <li>●	Non-Relational Database Management System: There is no concept of relations, tuples and attributes.  Example – MongoDB</li>
                      </ul>
					  </p>
					  <p class="qus">4. What is RDBMS? How is it different from DBMS?</p>
					  <p class="ans">A relational database management system (RDBMS) is a set of applications and features that allow IT professionals and others to develop, edit, administer, and interact with relational databases. Most commercial relational database management systems use Structured Query Language (SQL) to access the database, which is stored in the form of tables.<br>
The RDBMS is the most widely used database system in businesses all over the world. It offers a stable means of storing and retrieving massive amounts of data.<br>
Databases, in general, hold collections of data that may be accessed and used in other applications. The development, administration, and use of database platforms are all supported by a database management system.<br>
A relational database management system (RDBMS) is a type of database management system (DBMS) that stores data in a row-based table structure that links related data components. An RDBMS contains functions that ensure the data’s security, accuracy, integrity, and consistency. This is not the same as the file storage utilized by a database management system.<br>
The following are some further distinctions between database management systems and relational database management systems:<br>
The number of users who are permitted to utilise the system<br>
A DBMS can only handle one user at a time, whereas an RDBMS can handle numerous users.<br>
Hardware and software specifications<br>
In comparison to an RDBMS, a DBMS requires fewer software and hardware.<br>
Amount of information<br>
RDBMSes can handle any quantity of data, from tiny to enormous, whereas DBMSes are limited to small amounts.<br>
The structure of the database<br>
Data is stored in a hierarchical format in a DBMS, whereas an RDBMS uses a table with headers that serve as column names and rows that hold the associated values.<br>
Implementation of the ACID principle<br>
The atomicity, consistency, isolation, and durability (ACID) concept is not used by DBMSs for data storage. RDBMSes, on the other hand, use the ACID model to organize their data and assure consistency.<br>
Databases that are distributed<br>
A DBMS will not provide complete support for distributed databases, whereas an RDBMS will.<br>
Programs that are managed<br>
A DBMS focuses on keeping databases that are present within the computer network and system hard discs, whereas an RDBMS helps manage relationships between its incorporated tables of data.<br>
Normalization of databases is supported<br>
A RDBMS can be normalized , but a DBMS cannot be normalized.
					  </p>
					  <p class="qus">5. What is a Self-Join?</p>
					  <p class="ans">A self-join is a type of join that can be used to connect two tables. As a result, it is a unary relationship. Each row of the table is attached to itself and all other rows of the same table in a self-join. As a result, a self-join is mostly used to combine and compare rows from the same database table.
					  </p>
					  <p class="qus">6. What is the SELECT statement?</p>
					  <p class="ans">A self-join is a type of join that can be used to connect two tables. As a result, it is a unary relationship. Each row of the table is attached to itself and all other rows of the same table in a self-join. As a result, a self-join is mostly used to combine and compare rows from the same database table.
					  </p>
					  <p class="qus">7. What are some common clauses used with SELECT query in SQL?</p>
					  <p class="ans">The following are some frequent SQL clauses used in conjunction with a SELECT query:<br>
					  <ul>
<li>WHERE clause: In SQL, the WHERE clause is used to filter records that are required depending on certain criteria.</li>
<li>ORDER BY clause: The ORDER BY clause in SQL is used to sort data in ascending (ASC) or descending (DESC) order depending on specified field(s) (DESC).</li>
<li>GROUP BY clause: GROUP BY clause in SQL is used to group entries with identical data and may be used with aggregation methods to obtain summarised database results.</li>
<li>HAVING clause in SQL is used to filter records in combination with the GROUP BY clause. It is different from WHERE, since the WHERE clause cannot filter aggregated records.</li>
</ul>
					  </p>
					  <p class="qus">8. What are UNION, MINUS and INTERSECT commands?</p>
					  <p class="ans"><ul>
					 <li>The UNION operator is used to combine the results of two tables while also removing duplicate entries.</li>
<li>The MINUS operator is used to return rows from the first query but not from the second query.</li>
<li>The INTERSECT operator is used to combine the results of both queries into a single row.</li>
<li>Before running either of the above SQL statements, certain requirements must be satisfied –</li>
<li>Within the clause, each SELECT query must have the same amount of columns.</li>
<li>The data types in the columns must also be comparable.</li>
<li>In each SELECT statement, the columns must be in the same order.</li>
</ul>
					  </p>
					  <p class="qus">9. What is Cursor? How to use a Cursor?</p>
					  <p class="ans"><ul>
					 <li>After any variable declaration, DECLARE a cursor. A SELECT Statement must always be coupled with the cursor definition.</li>
<li>To start the result set, move the cursor over it. Before obtaining rows from the result set, the OPEN statement must be executed.</li>
<li>To retrieve and go to the next row in the result set, use the FETCH command.</li>
<li>To disable the cursor, use the CLOSE command.</li>
<li>Finally, use the DEALLOCATE command to remove the cursor definition and free up the resources connected with it.</li>
</ul>
					  </p>
					  <p class="qus">10. List the different types of relationships in SQL.</p>
					  <p class="ans">There are different types of relations in the database:<br>
					  <ul>
					 <li>One-to-One – This is a connection between two tables in which each record in one table corresponds to the maximum of one record in the other.</li>
<li>One-to-Many and Many-to-One – This is the most frequent connection, in which a record in one table is linked to several records in another.</li>
<li>Many-to-Many – This is used when defining a relationship that requires several instances on each sides.</li>
<li>Self-Referencing Relationships – When a table has to declare a connection with itself, this is the method to employ.</li>
                      </ul>
					  </p>
					  <p class="qus">11. What is OLTP?</p>
					  <p class="ans">OLTP, or online transactional processing, allows huge groups of people to execute massive amounts of database transactions in real time, usually via the internet. A database transaction occurs when data in a database is changed, inserted, deleted, or queried.
					  </p>
					  <p class="qus">12. What are the differences between OLTP and OLAP?</p>
					  <p class="ans">OLTP stands for online transaction processing, whereas OLAP stands for online analytical processing. OLTP is an online database modification system, whereas OLAP is an online database query response system.
					  </p>
					  <p class="qus">13. How to create empty tables with the same structure as another table?</p>
					  <p class="ans">To create empty tables:<br>
Using the INTO operator to fetch the records of one table into a new table while setting a WHERE clause to false for all entries, it is possible to create empty tables with the same structure. As a result, SQL creates a new table with a duplicate structure to accept the fetched entries, but nothing is stored into the new table since the WHERE clause is active.
					  </p>
					  <p class="qus">14. What is PostgreSQL?</p>
					  <p class="ans">In 1986, a team lead by Computer Science Professor Michael Stonebraker created PostgreSQL under the name Postgres. It was created to aid developers in the development of enterprise-level applications by ensuring data integrity and fault tolerance in systems. PostgreSQL is an enterprise-level, versatile, resilient, open-source, object-relational database management system that supports variable workloads and concurrent users. The international developer community has constantly backed it. PostgreSQL has achieved significant appeal among developers because to its fault-tolerant characteristics.<br>
It’s a very reliable database management system, with more than two decades of community work to thank for its high levels of resiliency, integrity, and accuracy. Many online, mobile, geospatial, and analytics applications utilise PostgreSQL as their primary data storage or data warehouse.
					  </p>
					  <p class="qus">15. What are SQL comments?</p>
					  <p class="ans">SQL Comments are used to clarify portions of SQL statements and to prevent SQL statements from being executed. Comments are quite important in many programming languages. The comments are not supported by a Microsoft Access database. As a result, the Microsoft Access database is used in the examples in Mozilla Firefox and Microsoft Edge.<br>
Single Line Comments: It starts with two consecutive hyphens (–).<br>
Multi-line Comments: It starts with /* and ends with */.
					  </p>
					  <p class="qus">16. What is the usage of the NVL() function?</p>
					  <p class="ans">You may use the NVL function to replace null values with a default value. The function returns the value of the second parameter if the first parameter is null. If the first parameter is anything other than null, it is left alone.<br>
This function is used in Oracle, not in SQL and MySQL. Instead of NVL() function, MySQL have IFNULL() and SQL Server have ISNULL() function.
					  </p>
					  <p class="qus">17. Explain character-manipulation functions? Explains its different types in SQL.</p>
					  <p class="ans">Change, extract, and edit the character string using character manipulation routines. The function will do its action on the input strings and return the result when one or more characters and words are supplied into it.<br>
The character manipulation functions in SQL are as follows:<br>
					  <ul>
<li>A) CONCAT (joining two or more values): This function is used to join two or more values together. The second string is always appended to the end of the first string.</li>
<li>B) SUBSTR: This function returns a segment of a string from a given start point to a given endpoint.</li>
<li>C) LENGTH: This function returns the length of the string in numerical form, including blank spaces.</li>
<li>D) INSTR: This function calculates the precise numeric location of a character or word in a string.</li>
<li>E) LPAD: For right-justified values, it returns the padding of the left-side character value.</li>
<li>F) RPAD: For a left-justified value, it returns the padding of the right-side character value.</li>
<li>G) TRIM: This function removes all defined characters from the beginning, end, or both ends of a string. It also reduced the amount of wasted space.</li>
<li>H) REPLACE: This function replaces all instances of a word or a section of a string (substring) with the other string value specified.</li>
                      </ul>
					  </p>
					  <p class="qus">18. Write the SQL query to get the third maximum salary of an employee from a table named employees.</p>
					  <p class="ans">Employee table<br>
					  <table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">employee_name</th>
							  <th scope="col">salary</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>A</td>
							  <td>24000</td>
							</tr>
							<tr>
							  <td>C</td>
							  <td>34000</td>
							</tr>
							<tr>
							  <td>D</td>
							  <td>55000</td>
							</tr>
							<tr>
							  <td>E</td>
							  <td>75000</td>
							</tr>
							<tr>
							  <td>F</td>
							  <td>21000</td>
							</tr>
							<tr>
							  <td>G</td>
							  <td>40000</td>
							</tr>
							<tr>
							  <td>H</td>
							  <td>50000</td>
							</tr>
						  </tbody>
						</table>
						<p>
						SELECT * FROM(<br>
SELECT employee_name, salary, DENSE_RANK()<br> 
OVER(ORDER BY salary DESC)r FROM Employee) <br>
WHERE r=&n;<br>
To find 3rd highest salary set n = 3
</p>
					  <p class="qus">19. What is the difference between the RANK() and DENSE_RANK() functions?</p>
					  <p class="ans">The RANK() function in the result set defines the rank of each row within your ordered partition. If both rows have the same rank, the next number in the ranking will be the previous rank plus a number of duplicates. If we have three records at rank 4, for example, the next level indicated is 7.<br>
The DENSE_RANK() function assigns a distinct rank to each row within a partition based on the provided column value, with no gaps. It always indicates a ranking in order of precedence. This function will assign the same rank to the two rows if they have the same rank, with the next rank being the next consecutive number. If we have three records at rank 4, for example, the next level indicated is 5.
					  </p>
					  <p class="qus">20. What are Tables and Fields?</p>
					  <p class="ans">A table is a collection of data components organized in rows and columns in a relational database. A table can also be thought of as a useful representation of relationships. The most basic form of data storage is the table. An example of an Employee table is shown below.<br>
					  <table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">ID</th>
							  <th scope="col">Name</th>
							  <th scope="col">Department</th>
							  <th scope="col">Salary</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>1</td>
							  <td>Rahul</td>
							  <td>Sales</td>
							  <td>24000</td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>Rohini</td>
							  <td>Marketing</td>
							  <td>34000</td>
							</tr>
							<tr>
							  <td>3</td>
							  <td>Shylesh</td>
							  <td>Sales</td>
							  <td>24000</td>
							</tr>
							<tr>
							  <td>4</td>
							  <td>Tarun</td>
							  <td>Analytics</td>
							  <td>30000</td>
							</tr>
						  </tbody>
						</table>
						<p>
A Record or Row is a single entry in a table. In a table, a record represents a collection of connected data. The Employee table, for example, has four records.<br>
A table is made up of numerous records (rows), each of which can be split down into smaller units called Fields(columns). ID, Name, Department, and Salary are the four fields in the Employee table above.
</p>
					  </p>
					  <p class="qus">21. What is a UNIQUE constraint?</p>
					  <p class="ans">The UNIQUE Constraint prevents identical values in a column from appearing in two records. The UNIQUE constraint guarantees that every value in a column is unique.
					  </p>
					  <p class="qus">22. What is a Self-Join?</p>
					  <p class="ans">A self-join is a type of join that can be used to connect two tables. As a result, it is a unary relationship. Each row of the table is attached to itself and all other rows of the same table in a self-join. As a result, a self-join is mostly used to combine and compare rows from the same database table.
					  </p>
					  <p class="qus">23. What is the SELECT statement?</p>
					  <p class="ans">A SELECT command gets zero or more rows from one or more database tables or views. The most frequent data manipulation language (DML) command is SELECT in most applications. SELECT queries define a result set, but not how to calculate it, because SQL is a declarative programming language.
					  </p>
					  <p class="qus">24. What are some common clauses used with SELECT query in SQL?</p>
					  <p class="ans">The following are some frequent SQL clauses used in conjunction with a SELECT query:<br>
					  <img src="<?= base_url(); ?>assets/img/commonclauses.png" style="width:250px;" /><br>
Explore Curriculum<br>
					  <ul>
<li>WHERE clause: In SQL, the WHERE clause is used to filter records that are required depending on certain criteria.</li>
<li>ORDER BY clause: The ORDER BY clause in SQL is used to sort data in ascending (ASC) or descending (DESC) order depending on specified field(s) (DESC).</li>
<li>GROUP BY clause: GROUP BY clause in SQL is used to group entries with identical data and may be used with aggregation methods to obtain summarised database results.</li>
<li>HAVING clause in SQL is used to filter records in combination with the GROUP BY clause. It is different from WHERE, since the WHERE clause cannot filter aggregated records.</li>
                      </ul>
					  </p>
					  <p class="qus">25. What are UNION, MINUS and INTERSECT commands?</p>
					  <p class="ans">
					  <ul>
<li>The UNION operator is used to combine the results of two tables while also removing duplicate entries. </li>
<li>The MINUS operator is used to return rows from the first query but not from the second query. </li>
<li>The INTERSECT operator is used to combine the results of both queries into a single row.</li>
<li>Before running either of the above SQL statements, certain requirements must be satisfied –</li>
<li>Within the clause, each SELECT query must have the same amount of columns.</li>
<li>The data types in the columns must also be comparable.</li>
<li>In each SELECT statement, the columns must be in the same order.</li>
                      </ul>
					  </p>
					  <p class="qus">26. What is Cursor? How to use a Cursor?</p>
					  <p class="ans">
					  <ul>
<li>After any variable declaration, DECLARE a cursor. A SELECT Statement must always be coupled with the cursor definition.</li>
<li>To start the result set, move the cursor over it. Before obtaining rows from the result set, the OPEN statement must be executed.</li>
<li>To retrieve and go to the next row in the result set, use the FETCH command.</li>
<li>To disable the cursor, use the CLOSE command.</li>
<li>Finally, use the DEALLOCATE command to remove the cursor definition and free up the resources connected with it.</li>
                      </ul>
					  </p>
					  <p class="qus">27. List the different types of relationships in SQL.</p>
					  <p class="ans">There are different types of relations in the database:<br>
					  <ul>
<li>One-to-One – This is a connection between two tables in which each record in one table corresponds to the maximum of one record in the other.</li>
<li>One-to-Many and Many-to-One – This is the most frequent connection, in which a record in one table is linked to several records in another.</li>
<li>Many-to-Many – This is used when defining a relationship that requires several instances on each sides.</li>
<li>Self-Referencing Relationships – When a table has to declare a connection with itself, this is the method to employ.</li>
                      </ul>
					  </p>
					  <p class="qus">28. What is SQL example?</p>
					  <p class="ans">SQL is a database query language that allows you to edit, remove, and request data from databases. The following statements are a few examples of SQL statements:<br>
					  <ul>
<li>●	SELECT </li>
<li>●	INSERT </li>
<li>●	UPDATE</li>
<li>●	DELETE</li>
<li>●	CREATE DATABASE</li>
<li>●	ALTER DATABASE</li>
                      </ul>
					  </p>
					  <p class="qus">29. What are basic SQL skills?</p>
					  <p class="ans">SQL skills aid data analysts in the creation, maintenance, and retrieval of data from relational databases, which divide data into columns and rows. It also enables users to efficiently retrieve, update, manipulate, insert, and alter data.
The most fundamental abilities that a SQL expert should possess are:<br>
					  <ul>
<li>1.	Database Management</li>
<li>2.	Structuring a Database</li>
<li>3.	Creating SQL clauses and statements</li>
<li>4.	SQL System SKills like MYSQL, PostgreSQL</li>
<li>5.	PHP expertise is useful.</li>
<li>6.	Analyze SQL data</li>
<li>7.	Using WAMP with SQL to create a database</li>
<li>8.	OLAP Skills</li>
                      </ul>
					  </p>
					  <p class="qus">30. What is schema in SQL Server?</p>
					  <p class="ans">A schema is a visual representation of the database that is logical. It builds and specifies the relationships among the database’s numerous entities. It refers to the several kinds of constraints that may be applied to a database. It also describes the various data kinds. It may also be used on Tables and Views.<br>

Schemas come in a variety of shapes and sizes. Star schema and Snowflake schema are two of the most popular. The entities in a star schema are represented in a star form, whereas those in a snowflake schema are shown in a snowflake shape.<br>
Any database architecture is built on the foundation of schemas.
					  </p>
					  <p class="qus">31. How to create a temp table in SQL Server?</p>
					  <p class="ans">Temporary tables are created in TempDB and are erased automatically after the last connection is closed. We may use Temporary Tables to store and process interim results. When we need to store temporary data, temporary tables come in handy.<br>

The following is the syntax for creating a Temporary Table:<br>
					  <ul>
<li>CREATE TABLE #Employee (id INT, name VARCHAR(25))</li>
<li>INSERT INTO #Employee VALUES (01, ‘Ashish’), (02, ‘Atul’)</li>
                      </ul>
					  </p>
					  <p class="qus">31. How to install SQL Server in Windows 11?</p>
					  <p class="ans">Install SQL Server Management Studio In Windows 11<br>
					  <ul>
<li>Step 1: Click on SSMS, which will take you to the SQL Server Management Studio page.</li>
<li>Step 2: Moreover, click on the SQL Server Management Studio link and tap on Save File. </li>
<li>Step 3: Save this file to your local drive and go to the folder.</li>
<li>Step 4: The setup window will appear, and here you can choose the location where you want to save the file.</li>
<li>Step 5: Click on Install.</li>
<li>Step 6: Close the window after the installation is complete.</li>
<li>Step 7: Furthermore, go back to your Start Menu and search for SQL server management studio.</li>
<li>Step 8: Furthermore, double-click on it, and the login page will appear once it shows up.</li>
<li>Step 9: You should be able to see your server name. However, if that’s not visible, click on the drop-down arrow on the server and tap on Browse.</li>
<li>Step 10: Choose your SQL server and click on Connect.</li>
                      </ul>
					  <p>After that, the SQL server will connect, and Windows 11 will run good.</p>
					  </p>
					  <p class="qus">32. What is the case when in SQL Server?</p>
					  <p class="ans">The CASE statement is used to construct logic in which one column’s value is determined by the values of other columns.<br>
At least one set of WHEN and THEN commands makes up the SQL Server CASE Statement. The condition to be tested is specified by the WHEN statement. If the WHEN condition returns TRUE, the THEN sentence explains what to do.<br>
When none of the WHEN conditions return true, the ELSE statement is executed. The END keyword brings the CASE statement to a close.<br>
					  <ul>
<li>1   CASE</li>
<li>2   WHEN condition1 THEN result1</li>
<li>3   WHEN condition2 THEN result2</li>
<li>4   WHEN conditionN THEN resultN</li>
<li>5   ELSE result</li>
<li>6   END;</li>	
                      </ul>
					  </p>
					  <p class="qus">33. NoSQL vs SQL</p>
					  <p class="ans">
					  <ul>
<li>In summary, the following are the five major distinctions between SQL and NoSQL:</li>
<li>Relational databases are SQL, while non-relational databases are NoSQL</li>
<li>SQL databases have a specified schema and employ structured query language. For unstructured data, NoSQL databases use dynamic schemas.</li>
<li>SQL databases scale vertically, but NoSQL databases scale horizontally.</li>
<li>NoSQL databases are document, key-value, graph, or wide-column stores, whereas SQL databases are table-based.</li>
<li>SQL databases excel in multi-row transactions, while NoSQL excels at unstructured data such as documents and JSON.</li>
                      </ul>
					  </p>
					  <p class="qus">34. What is the difference between NOW() and CURRENT_DATE()?</p>
					  <p class="ans">NOW() returns a constant time that indicates the time at which the statement began to execute. (Within a stored function or trigger, NOW() returns the time at which the function or triggering statement began to execute.<br>
The simple difference between NOW() and CURRENT_DATE() is that NOW() will fetch the current date and time both in format ‘YYYY-MM_DD HH:MM:SS’ while CURRENT_DATE() will fetch the date of the current day ‘YYYY-MM_DD’.
					  </p>
					  <p class="qus">35. What is BLOB and TEXT in MySQL?</p>
					  <p class="ans">BLOB stands for Binary Huge Objects and can be used to store binary data, whereas TEXT may be used to store a large number of strings. BLOB may be used to store binary data, which includes images, movies, audio, and applications.<br>
BLOB values function similarly to byte strings, and they lack a character set. As a result, bytes’ numeric values are completely dependent on comparison and sorting.<br>
    TEXT values behave similarly to a character string or a non-binary string. The comparison/sorting of TEXT is completely dependent on the character set collection.
					  </p>
					  <p class="qus">36. How to remove duplicate rows in SQL?</p>
					  <p class="ans">If the SQL table has duplicate rows, the duplicate rows must be removed.<br>
Let’s assume the following table as our dataset:<br>
<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">ID</th>
							  <th scope="col">Name</th>
							  <th scope="col">Age</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>1</td>
							  <td>A</td>
							  <td>21</td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>B</td>
							  <td>23</td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>B</td>
							  <td>23</td>
							</tr>
							<tr>
							  <td>4</td>
							  <td>D</td>
							  <td>22</td>
							</tr>
							<tr>
							  <td>5</td>
							  <td>E</td>
							  <td>25</td>
							</tr>
							<tr>
							  <td>6</td>
							  <td>G</td>
							  <td>26</td>
							</tr>
							<tr>
							  <td>5</td>
							  <td>E</td>
							  <td>25</td>
							</tr>
						  </tbody>
						</table>
					  <ul>
					  <p>The following SQL query removes the duplicate ids from the  table:</p>
<li>DELETE FROM table WHERE ID IN (</li>
<li>SELECT </li>
<li>ID, COUNT(ID) </li>
<li>FROM   table</li>
<li>GROUP BY  ID</li>
<li>HAVING </li>
<li>COUNT (ID) > 1); </li>
                      </ul>
					  </p>
					  <p class="qus">37. How to create a stored procedure using SQL Server?</p>
					  <p class="ans">A stored procedure is a piece of prepared SQL code that you can save and reuse again and over.<br>
So, if you have a SQL query that you create frequently, save it as a stored procedure and then call it to run it.<br>
You may also supply parameters to a stored procedure so that it can act based on the value(s) of the parameter(s) given.<br>
Stored Procedure Syntax<br>
CREATE PROCEDURE procedure_name<br>
AS<br>
sql_statement<br>
GO;<br>
Execute a Stored Procedure<br>
EXEC procedure_name;
					  </p>
					  <p class="qus">38. What is Database Black Box Testing?</p>
					  <p class="ans">Black Box Testing is a software testing approach that involves testing the functions of software applications without knowing the internal code structure, implementation details, or internal routes. Black Box Testing is a type of software testing that focuses on the input and output of software applications and is totally driven by software requirements and specifications. Behavioral testing is another name for it.
					  </p>
					  <p class="qus">39. What are the different types of SQL sandbox?</p>
					  <p class="ans">SQL Sandbox is a secure environment within SQL Server where untrusted programmes can be run. There are three different types of SQL sandboxes:<br>
					  <ul>
<li>Safe Access Sandbox: In this environment, a user may execute SQL activities like as building stored procedures, triggers, and so on, but they can’t access the memory or create files.</li>
<li>Sandbox for External Access: Users can access files without having the ability to alter memory allocation.</li>
<li>Unsafe Access Sandbox: This contains untrustworthy code that allows a user to access memory.</li>
                      </ul>
					  </p>
					  <p class="qus">40. Where MyISAM table is stored?</p>
					  <p class="ans">Prior to the introduction of MySQL 5.5 in December 2009, MyISAM was the default storage engine for MySQL relational database management system versions.  It’s based on the older ISAM code, but it comes with a lot of extra features. Each MyISAM table is split into three files on disc (if it is not partitioned). The file names start with the table name and end with an extension that indicates the file type. The table definition is stored in a.frm file, however this file is not part of the MyISAM engine; instead, it is part of the server. The data file’s suffix is.MYD (MYData). The index file’s extension is.MYI (MYIndex). If you lose your index file, you may always restore it by recreating indexes.
					  </p>
					  <p class="qus">41. How to find the nth highest salary in SQL?</p>
					  <p class="ans">The most typical interview question is to find the Nth highest pay in a table. This work can be accomplished using the dense rank() function.<br>
Employee table<br>
<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">employee_name</th>
							  <th scope="col">salary</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>A</td>
							  <td>24000</td>
							</tr>
							<tr>
							  <td>C</td>
							  <td>34000</td>
							</tr>
							<tr>
							  <td>D</td>
							  <td>55000</td>
							</tr>
							<tr>
							  <td>E</td>
							  <td>75000</td>
							</tr>
							<tr>
							  <td>F</td>
							  <td>21000</td>
							</tr>
							<tr>
							  <td>G</td>
							  <td>40000</td>
							</tr>
							<tr>
							  <td>H</td>
							  <td>50000</td>
							</tr>
						  </tbody>
						</table>
						<p>
						SELECT * FROM(<br>
SELECT employee_name, salary, DENSE_RANK()<br> 
OVER(ORDER BY salary DESC)r FROM Employee)<br> 
WHERE r=&n;<br>
To find to the 2nd highest salary set n = 2<br>
To find 3rd highest salary set n = 3 and so on.
					  </p>
					  <p class="qus">42. What do you mean by table and field in SQL?</p>
					  <p class="ans">A table refers to a collection of data in an organised manner in form of rows and columns. A field refers to the number of columns in a table. For example:<br>
Table: StudentInformation<br>
Field: Stu Id, Stu Name, Stu Marks
					  </p>
					  <p class="qus">43. What are joins in SQL?</p>
					  <p class="ans">A JOIN clause is used to combine rows from two or more tables, based on a related column between them. It is used to merge two tables or retrieve data from there. There are 4 types of joins, as you can refer to below:<br>
					  <img src="<?= base_url(); ?>assets/img/joinsinsql.png" style="width:500px;" /><br>
					  <ul>
<li>●	Inner join: Inner Join in SQL is the most common type of join. It is used to return all the rows from multiple tables where the join condition is satisfied. </li>
<li>●	Left Join:  Left Join in SQL is used to return all the rows from the left table but only the matching rows from the right table where the join condition is fulfilled.</li>
<li>●	Right Join: Right Join in SQL is used to return all the rows from the right table but only the matching rows from the left table where the join condition is fulfilled.</li>
                      </ul>
					  </p>
					  <p class="qus">44. What is the difference between CHAR and VARCHAR2 datatype in SQL?</p>
					  <p class="ans">Both Char and Varchar2 are used for characters datatype but varchar2 is used for character strings of variable length whereas Char is used for strings of fixed length. For example, char(10) can only store 10 characters and will not be able to store a string of any other length whereas varchar2(10) can store any length i.e 6,8,2 in this variable.
					  </p>
					  <p class="qus">45. What is a Primary key?</p>
					  <p class="ans"><img src="<?= base_url(); ?>assets/img/primarykey.png" style="width:250px;" /><br>
					  <ul>
<li>●	A Primary key in SQL is a column (or collection of columns) or a set of columns that uniquely identifies each row in the table.</li>
<li>●	Uniquely identifies a single row in the table</li>
<li>●	Null values not allowed</li>
                      </ul>
					  <p>Example- In the Student table, Stu_ID is the primary key.
					  </p>
					  <p class="qus">46. What are Constraints?</p>
					  <p class="ans">Constraints in SQL are used to specify the limit on the data type of the table. It can be specified while creating or altering the table statement. The sample of constraints are:<br>
					  <ul>
<li>●	NOT NULL</li>
<li>●	CHECK</li>
<li>●	DEFAULT</li>
<li>●	UNIQUE</li>
<li>●	PRIMARY KEY</li>
<li>●	FOREIGN KEY</li>
                      </ul>
					  </p>
					  <p class="qus">47. What is the difference between DELETE and TRUNCATE statements?</p>
					  <table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">DELETE</th>
							  <th scope="col">TRUNCATE</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Delete command is used to delete a row in a table.</td>
							  <td>Truncate is used to delete all the rows from a table.</td>
							</tr>
							<tr>
							  <td>You can rollback data after using delete statement.</td>
							  <td>You cannot rollback data.</td>
							</tr>
							<tr>
							  <td>It is a DML command.</td>
							  <td>It is a DDL command.</td>
							</tr>
							<tr>
							  <td>It is slower than truncate statement.</td>
							  <td>It is faster.</td>
							</tr>
						  </tbody>
						</table>
					  <p class="qus">48. What is a Unique key?</p>
					  <p class="ans">
					  <ul>
<li>●	Uniquely identifies a single row in the table.</li>
<li>●	Multiple values allowed per table.</li>
<li>●	Null values allowed.</li>
                      </ul>
					  </p>
					  <p class="qus">49. What is a Foreign key in SQL?</p>
					  <p class="ans">
					  <ul>
<li>●	Foreign key maintains referential integrity by enforcing a link between the data in two tables.</li>
<li>●	The foreign key in the child table references the primary key in the parent table.</li>
<li>●	The foreign key constraint prevents actions that would destroy links between the child and parent tables.</li>
                      </ul>
					  </p>
					  <p class="qus">50. What do you mean by data integrity? </p>
					  <p class="ans">Data Integrity defines the accuracy as well as the consistency of the data stored in a database. It also defines integrity constraints to enforce business rules on the data when it is entered into an application or a database.
					  </p>
					  <p class="qus">51. What is the difference between clustered and non-clustered index in SQL?</p>
					  <p class="ans">The differences between the clustered and non clustered index in SQL are :<br>
					  <ul>
<li>1.	Clustered index is used for easy retrieval of data from the database and its faster whereas reading from non clustered index is relatively slower.</li>
<li>2.	Clustered index alters the way records are stored in a database as it sorts out rows by the column which is set to be clustered index whereas in a non clustered index, it does not alter the way it was stored but it creates a separate object within a table which points back to the original table rows after searching.</li>
<li>3.	One table can only have one clustered index whereas it can have many non clustered index.</li>
                      </ul>
					  </p>
					  <p class="qus">52. Write a SQL query to display the current date?</p>
					  <p class="ans">In SQL, there is a built-in function called GetDate() which helps to return the current timestamp/date.
					  </p>
					  <p class="qus">53.What do you understand by query optimization?</p>
					  <p class="ans">The phase that identifies a plan for evaluation query which has the least estimated cost is known as query optimization.<br>
The advantages of query optimization are as follows:<br>
					  <ul>
<li>●	The output is provided faster</li>
<li>●	A larger number of queries can be executed in less time</li>
<li>●	Reduces time and space complexity</li>
                      </ul>
					  </p>
					  <p class="qus">54. What do you mean by Denormalization?</p>
					  <p class="ans">Denormalization refers to a technique which is used to access data from higher to lower forms of a database. It helps the database managers to increase the performance of the entire infrastructure as it introduces redundancy into a table. It adds the redundant data into a table by incorporating database queries that combine data from various tables into a single table.
					  </p>
					  <p class="qus">55. What are Entities and Relationships?</p>
					  <p class="ans">Entities:  A person, place, or thing in the real world about which data can be stored in a database. Tables store data that represents one type of entity. For example – A bank database has a customer table to store customer information. The customer table stores this information as a set of attributes (columns within the table) for each customer.<br>
Relationships: Relation or links between entities that have something to do with each other. For example – The customer name is related to the customer account number and contact information, which might be in the same table. There can also be relationships between separate tables (for example, customer to accounts).
					  </p>
					  <p class="qus">57. Explain different types of index in SQL.</p>
					  <p class="ans">There are three types of index in SQL namely:<br>
Unique Index:<br>
This index does not allow the field to have duplicate values if the column is unique indexed. If a primary key is defined, a unique index can be applied automatically.<br>
Clustered Index:<br>
This index reorders the physical order of the table and searches based on the basis of key values. Each table can only have one clustered index.<br>
Non-Clustered Index:<br>
Non-Clustered Index does not alter the physical order of the table and maintains a logical order of the data. Each table can have many nonclustered indexes.
					  </p>
					  <p class="qus">58. What is Normalization and what are the advantages of it?</p>
					  <p class="ans">Normalization in SQL is the process of organizing data to avoid duplication and redundancy. Some of the advantages are:<br>
					  <ul>
<li>●	Better Database organization</li>
<li>●	More Tables with smaller rows</li>
<li>●	Efficient data access</li>
<li>●	Greater Flexibility for Queries</li>
<li>●	Quickly find the information</li>
<li>●	Easier to implement Security</li>
<li>●	Allows easy modification</li>
<li>●	Reduction of redundant and duplicate data</li>
<li>●	More Compact Database</li>
<li>●	Ensure Consistent data after modification</li>
                      </ul>
					  </p>
					  <p class="qus">59. What is the difference between DROP and TRUNCATE commands?</p>
					  <p class="ans">DROP command removes a table and it cannot be rolled back from the database whereas TRUNCATE command removes all the rows from the table.
					  </p>
					  <p class="qus">60. Explain different types of Normalization.</p>
					  <p class="ans">There are many successive levels of normalization. These are called normal forms. Each consecutive normal form depends on the previous one.The first three normal forms are usually adequate.<br>
Normal Forms are used in database tables to remove or decrease duplication. The following are the many forms:<br>
First Normal Form:<br>
When every attribute in a relation is a single-valued attribute, it is said to be in first normal form. The first normal form is broken when a relation has a composite or multi-valued property.<br>
Second Normal Form:<br>
A relation is in second normal form if it meets the first normal form’s requirements and does not contain any partial dependencies. In 2NF, a relation has no partial dependence, which means it has no non-prime attribute that is dependent on any suitable subset of any table candidate key. Often, the problem may be solved by setting a single column Primary Key.<br>
Third Normal Form:<br>
If a relation meets the requirements for the second normal form and there is no transitive dependency, it is said to be in the third normal form.
					  </p>
					  <p class="qus">61. What is OLTP?</p>
					  <p class="ans">OLTP, or online transactional processing, allows huge groups of people to execute massive amounts of database transactions in real time, usually via the internet. A database transaction occurs when data in a database is changed, inserted, deleted, or queried.<br>
What are the differences between OLTP and OLAP?<br>
OLTP stands for online transaction processing, whereas OLAP stands for online analytical processing. OLTP is an online database modification system, whereas OLAP is an online database query response system.
					  </p>
					  <p class="qus">62. How to create empty tables with the same structure as another table?</p>
					  <p class="ans">To create empty tables:<br>
Using the INTO operator to fetch the records of one table into a new table while setting a WHERE clause to false for all entries, it is possible to create empty tables with the same structure. As a result, SQL creates a new table with a duplicate structure to accept the fetched entries, but nothing is stored into the new table since the WHERE clause is active.
					  </p>
					  <p class="qus">63. What is PostgreSQL?</p>
					  <p class="ans">In 1986, a team lead by Computer Science Professor Michael Stonebraker created PostgreSQL under the name Postgres. It was created to aid developers in the development of enterprise-level applications by ensuring data integrity and fault tolerance in systems. PostgreSQL is an enterprise-level, versatile, resilient, open-source, object-relational database management system that supports variable workloads and concurrent users. The international developer community has constantly backed it. PostgreSQL has achieved significant appeal among developers because to its fault-tolerant characteristics.<br>
It’s a very reliable database management system, with more than two decades of community work to thank for its high levels of resiliency, integrity, and accuracy. Many online, mobile, geospatial, and analytics applications utilise PostgreSQL as their primary data storage or data warehouse.
					  </p>
					  <p class="qus">64. What are SQL comments?</p>
					  <p class="ans">SQL Comments are used to clarify portions of SQL statements and to prevent SQL statements from being executed. Comments are quite important in many programming languages. The comments are not supported by a Microsoft Access database. As a result, the Microsoft Access database is used in the examples in Mozilla Firefox and Microsoft Edge.<br>
Single Line Comments: It starts with two consecutive hyphens (–).<br>
Multi-line Comments: It starts with /* and ends with */.
					  </p>
					  <p class="qus">65. What is the difference between the RANK() and DENSE_RANK() functions?</p>
					  <p class="ans">The RANK() function in the result set defines the rank of each row within your ordered partition. If both rows have the same rank, the next number in the ranking will be the previous rank plus a number of duplicates. If we have three records at rank 4, for example, the next level indicated is 7.<br>
The DENSE_RANK() function assigns a distinct rank to each row within a partition based on the provided column value, with no gaps. It always indicates a ranking in order of precedence. This function will assign the same rank to the two rows if they have the same rank, with the next rank being the next consecutive number. If we have three records at rank 4, for example, the next level indicated is 5.
					  </p>
					  <p class="qus">66. What is SQL Injection?</p>
					  <p class="ans">SQL injection is a sort of flaw in website and web app code that allows attackers to take control of back-end processes and access, retrieve, and delete sensitive data stored in databases. In this approach, malicious SQL statements are entered into a database entry field, and the database becomes exposed to an attacker once they are executed. By utilising data-driven apps, this strategy is widely utilised to get access to sensitive data and execute administrative tasks on databases. SQLi attack is another name for it.<br>
The following are some examples of SQL injection:<br>
					  <ul>
<li>●	Getting access to secret data in order to change a SQL query to acquire the desired results.</li>
<li>●	UNION attacks are designed to steal data from several database tables.</li>
<li>●	Examine the database to get information about the database’s version and structure</li>
                      </ul>
					  </p>
					  <p class="qus">67. How many Aggregate functions are available in SQL?</p>
					  <p class="ans">SQL aggregate functions provide information about a database’s data. AVG, for example, returns the average of a database column’s values.<br>
SQL provides seven (7) aggregate functions, which are given below:<br>
					  <ul>
<li>AVG(): returns the average value from specified columns.</li>
<li>COUNT(): returns the number of table rows, including rows with null values.</li>
<li>MAX(): returns the largest value among the group.</li>
<li>MIN(): returns the smallest value among the group.</li>
<li>SUM(): returns the total summed values(non-null) of the specified column.</li>
<li>FIRST(): returns the first value of an expression.</li>
<li>LAST(): returns the last value of an expression.</li>
                      </ul>
					  </p>
					  <p class="qus">68. What is the default ordering of data using the ORDER BY clause? How could it be changed?</p>
					  <p class="ans">The ORDER BY clause in MySQL can be used without the ASC or DESC modifiers. The sort order is preset to ASC or ascending order when this attribute is absent from the ORDER BY clause.
					  </p>
					  <p class="qus">69. How do we use the DISTINCT statement? What is its use?</p>
					  <p class="ans">The SQL DISTINCT keyword is combined with the SELECT query to remove all duplicate records and return only unique records. There may be times when a table has several duplicate records.
The DISTINCT clause in SQL is used to eliminate duplicates from a SELECT statement’s result set.
					  </p>
					  <p class="qus">70. What are the syntax and use of the COALESCE function?</p>
					  <p class="ans">From a succession of expressions, the COALESCE function returns the first non-NULL value. The expressions are evaluated in the order that they are supplied, and the function’s result is the first non-null value. Only if all of the inputs are null does the COALESCE method return NULL.<br>
The syntax of COALESCE function is COALESCE (exp1, exp2, …. expn) 
					  </p>
					  <p class="qus">71. What is the ACID property in a database?</p>
					  <p class="ans">ACID stands for Atomicity, Consistency, Isolation, Durability. It is used to ensure that the data transactions are processed reliably in a database system. <br>
					  <ul>
<li>●	Atomicity: Atomicity refers to the transactions that are completely done or failed where transaction refers to a single logical operation of a data. It means if one part of any transaction fails, the entire transaction fails and the database state is left unchanged.</li>
<li>●	Consistency: Consistency ensures that the data must meet all the validation rules. In simple words,  you can say that your transaction never leaves the database without completing its state.</li>
<li>●	Isolation: The main goal of isolation is concurrency control.</li>
<li>●	Durability: Durability means that if a transaction has been committed, it will occur whatever may come in between such as power loss, crash or any sort of error.</li>
                      </ul>
					  </p>
					  <p class="qus">72. What do you mean by “Trigger” in SQL?</p>
					  <p class="ans">Trigger in SQL is are a special type of stored procedures that are defined to execute automatically in place or after data modifications. It allows you to execute a batch of code when an insert, update or any other query is executed against a specific table.
					  </p>
					  <p class="qus">73. What are the different operators available in SQL?</p>
					  <p class="ans">There are three operators available in SQL, namely:<br>
					  <ul>
<li>1.	Arithmetic Operators</li>
<li>2.	Logical Operators</li>
<li>3.	Comparison Operators</li>
                      </ul>
					  </p>
					  <p class="qus">74.  Are NULL values same as that of zero or a blank space? </p>
					  <p class="ans">A NULL value is not at all same as that of zero or a blank space. NULL value represents a value which is unavailable, unknown, assigned or not applicable whereas a zero is a number and blank space is a character.
					  </p>
					  <p class="qus">75. What is the difference between cross join and natural join?</p>
					  <p class="ans">The cross join produces the cross product or Cartesian product of two tables whereas the natural join is based on all the columns having the same name and data types in both the tables.
					  </p>
					  <p class="qus">76. What is subquery in SQL?</p>
					  <p class="ans">A subquery is a query inside another query where a query is defined to retrieve data or information back from the database. In a subquery, the outer query is called as the main query whereas the inner query is called subquery. Subqueries are always executed first and the result of the subquery is passed on to the main query. It can be nested inside a SELECT, UPDATE or any other query. A subquery can also use any comparison operators such as >,< or =.
					  </p>
					  <p class="qus">77. What are the different types of a subquery?</p>
					  <p class="ans">There are two types of subquery namely, Correlated and Non-Correlated.<br>
Correlated subquery: These are queries which select the data from a table referenced in the outer query. It is not considered as an independent query as it refers to another table and refers the column in a table.<br>
Non-Correlated subquery: This query is an independent query where the output of subquery is substituted in the main query.
					  </p>
					  <p class="qus">78. List the ways to get the count of records in a table?</p>
					  <p class="ans">To count the number of records in a table in SQL, you can use the below commands:<br>
SELECT * FROM table1<br>

SELECT COUNT(*) FROM table1
					  </p>
					  <p class="qus">79. Write a SQL query to find the names of employees that begin with ‘A’?</p>
					  <p class="ans">SELECT rows FROM sysindexes WHERE id = OBJECT_ID(table1) AND indid < 2<br><br>
To display name of the employees that begin with ‘A’, type in the below command:<br>
1	SELECT * FROM Table_name WHERE EmpName like 'A%'
					  </p>
					  <p class="qus">80. Write a SQL query to get the third-highest salary of an employee from employee_table?</p>
					  <p class="ans">Change, extract, and edit the character string using character manipulation routines. The function will do its action on the input strings and return the result when one or more characters and words are supplied into it.<br>
The character manipulation functions in SQL are as follows:<br>
					  <ul>
<li>1   SELECT TOP 1 salary</li>
<li>2   FROM(</li>
<li>3   SELECT TOP 3 salary</li>
<li>4   FROM employee_table</li>
<li>5   ORDER BY salary DESC) AS emp</li>
<li>6	ORDER BY salary ASC;</li>
                      </ul>
					  </p>
					  <p class="qus">81. What is the need for group functions in SQL? </p>
					  <p class="ans">Group functions work on the set of rows and return one result per group. Some of the commonly used group functions are: AVG, COUNT, MAX, MIN, SUM, VARIANCE.
					  </p>
					  <p class="qus">82. What is a Relationship and what are they?</p>
					  <p class="ans">Relation or links are between entities that have something to do with each other. Relationships are defined as the connection between the tables in a database. There are various relationships, namely:<br>
					  <ul>
<li>●	One to One Relationship.</li>
<li>●	One to Many Relationship.</li>
<li>●	Many to One Relationship.</li>
<li>●	Self-Referencing Relationship.</li>
                      </ul>
					  </p>
					  <p class="qus">83.  How can you insert NULL values in a column while inserting the data?</p>
					  <p class="ans">NULL values in SQL can be inserted in the following ways:<br>
					  <ul>
<li>●	Implicitly by omitting column from column list.</li>
<li>●	Explicitly by specifying NULL keyword in the VALUES clause</li>
                      </ul>
					  </p>
					  <p class="qus">84. What is the main difference between ‘BETWEEN’ and ‘IN’ condition operators?</p>
					  <p class="ans">BETWEEN operator is used to display rows based on a range of values in a row whereas the IN condition operator is used to check for values contained in a specific set of values.<br>
 Example of BETWEEN:<br>
SELECT * FROM Students where ROLL_NO BETWEEN 10 AND 50;<br>
Example of IN:<br>
SELECT * FROM students where ROLL_NO IN (8,15,25);
					  </p>
					  <p class="qus">85. Why are SQL functions used?</p>
					  <p class="ans">SQL functions are used for the following purposes:<br>
					  <ul>
<li>●	To perform some calculations on the data</li>
<li>●	To modify individual data items</li>
<li>●	To manipulate the output</li>
<li>●	To format dates and numbers</li>
<li>●	To convert the data types</li>
                      </ul>
					  </p>
					  <p class="qus">86. What is the need for MERGE statement?</p>
					  <p class="ans">This statement allows conditional update or insertion of data into a table. It performs an UPDATE if a row exists, or an INSERT if the row does not exist.
					  </p>
					  <p class="qus">87. What do you mean by recursive stored procedure?</p>
					  <p class="ans">Recursive stored procedure refers to a stored procedure which calls by itself until it reaches some boundary condition. This recursive function or procedure helps the programmers to use the same set of code n number of times.
					  </p>
					  <p class="qus">88. What is CLAUSE in SQL?</p>
					  <p class="ans">SQL clause helps to limit the result set by providing a condition to the query. A clause helps to filter the rows from the entire set of records.<br>
For example – WHERE, HAVING clause.
					  </p>
					  <p class="qus">89. What is the difference between ‘HAVING’ CLAUSE and a ‘WHERE’ CLAUSE?</p>
					  <p class="ans">HAVING clause can be used only with SELECT statement. It is usually used in a GROUP BY clause and whenever GROUP BY is not used, HAVING behaves like a WHERE clause.<br>
Having Clause is only used with the GROUP BY function in a query whereas WHERE Clause is applied to each row before they are a part of the GROUP BY function in a query.
					  </p>
					  <p class="qus">90. List the ways in which  Dynamic SQL can be executed?</p>
					  <p class="ans">Following are the ways in which dynamic SQL can be executed:<br>
					  <ul>
<li>●	Write a query with parameters.</li>
<li>●	Using EXEC.</li>
<li>●	Using sp_executesql.</li>
                      </ul>
					  </p>
					  <p class="qus">91. What are the various levels of constraints?</p>
					  <p class="ans">Constraints are the representation of a column to enforce data entity and consistency. There are two levels  of a constraint, namely:<br>
					  <ul>
<li>●	column level constraint</li>
<li>●	table level constraint</li>
                      </ul>
					  </p>
					  <p class="qus">92. How can you fetch common records from two tables?</p>
					  <p class="ans">You can fetch common records from two tables using INTERSECT. For example:<br>

Select studentID from student. <strong>INTERSECT </strong> Select StudentID from Exam
					  </p>
					  <p class="qus">93. List some case manipulation functions in SQL?</p>
					  <p class="ans">There are three case manipulation functions in SQL, namely:<br>
					  <ul>
<li>●	LOWER: This function returns the string in lowercase. It takes a string as an argument and returns it by converting it into lower case. Syntax:<br>
LOWER(‘string’)
</li>
<li>●	UPPER: This function returns the string in uppercase. It takes a string as an argument and returns it by converting it into uppercase. Syntax:<br>
UPPER(‘string’)
</li>
<li>●	INITCAP: This function returns the string with the first letter in uppercase and rest of the letters in lowercase. Syntax:<br>
INITCAP(‘string’)
</li>
                      </ul>
					  </p>
					  <p class="qus"> 94. What are the different set operators available in SQL?</p>
					  <p class="ans">Some of the available set operators are – Union, Intersect or Minus operators.
					  </p>
					  <p class="qus">95. What is an ALIAS command?</p>
					  <p class="ans">ALIAS command in SQL is the name that can be given to any table or a column. This alias name can be referred in WHERE clause to identify a particular table or a column.<br>
For example-<br>
Select emp.empID, dept.Result from employee emp, department as dept where emp.empID=dept.empID<br>
In the above example, emp refers to alias name for employee table and dept refers to alias name for department table.
					  </p>
					  <p class="qus">96. What are aggregate and scalar functions?</p>
					  <p class="ans">Aggregate functions are used to evaluate mathematical calculation and returns a single value. These calculations are done from the columns in a table. For example- max(),count() are calculated with respect to numeric.<br>
Scalar functions return a single value based on the input value. For example – UCASE(), NOW() are calculated with respect to string.
					  </p>
					  <p class="qus">97. How can you fetch alternate records from a table?</p>
					  <p class="ans">You can fetch alternate records i.e both odd and even row numbers. For example- To display even numbers, use the following command:<br>
Select studentId from (Select rowno, studentId from student) where mod(rowno,2)=0<br>
Now, to display odd numbers:<br>
Select studentId from (Select rowno, studentId from student) where mod(rowno,2)=1
					  </p>
					  <p class="qus">98. Name the operator which is used in the query for pattern matching?</p>
					  <p class="ans">LIKE operator is used for pattern matching, and it can be used as -.<br>
1.	% – It matches zero or more characters.<br>
For example- select * from students where studentname like ‘a%’<br>
_ (Underscore) – it matches exactly one character.<br>
For example- select * from student where studentname like ‘abc_’
					  </p>
					  <p class="qus">99. How can you select unique records from a table?</p>
					  <p class="ans">You can select unique records from a table by using the DISTINCT keyword.<br>
Select DISTINCT studentID from Student<br>
Using this command, it will print unique student id from the table Student.
					  </p>
					  <p class="qus">100. How can you fetch first 5 characters of the string?</p>
					  <p class="ans">There are a lot of ways to fetch characters from a string. For example:<br>
Select SUBSTRING(StudentName,1,5) as studentname from student
					  </p>
					  <p class="qus">101. What is the main difference between SQL and PL/SQL?</p>
					  <p class="ans">SQL is a query language that allows you to issue a single query or execute a single insert/update/delete whereas PL/SQL is Oracle’s “Procedural Language” SQL, which allows you to write a full program (loops, variables, etc.) to accomplish multiple operations such as selects/inserts/updates/deletes. 
					  </p>
					  <p class="qus">102. What is a View?</p>
					  <p class="ans">A view is a virtual table which consists of a subset of data contained in a table. Since views are not present, it takes less space to store. View can have data of one or more tables combined and it depends on the relationship.
					  </p>
					  <p class="qus">103. What are Views used for?</p>
					  <p class="ans">A view refers to a logical snapshot based on a table or another view. It is used for the following reasons:<br>
					  <ul>
<li>●	Restricting access to data.</li>
<li>●	Making complex queries simple.</li>
<li>●	Ensuring data independence.</li>
<li>●	Providing different views of same data.</li>
                      </ul>
					  </p>
					  <p class="qus">104. What is a Stored Procedure?</p>
					  <p class="ans">A Stored Procedure is a function which consists of many SQL statements to access the database system. Several SQL statements are consolidated into a stored procedure and execute them whenever and wherever required which saves time and avoid writing code again and again.
					  </p>
					  <p class="qus">105. List some advantages and disadvantages of Stored Procedure?</p>
					  <p class="ans">Advantages:<br>
A Stored Procedure can be used as a modular programming which means create once, store and call for several times whenever it is required. This supports faster execution. It also reduces network traffic and provides better security to the data.<br>
Disadvantage:<br>
The only disadvantage of Stored Procedure is that it can be executed only in the database and utilizes more memory in the database server.
					  </p>
					  <p class="qus">106. List all the types of user-defined functions?</p>
					  <p class="ans">There are three types of user-defined functions, namely:<br>
					  <ul>
<li>●	Scalar Functions</li>
<li>●	Inline Table-valued functions</li>
<li>●	Multi-statement valued functions</li>
                      </ul>
					  <p>Scalar returns the unit, variant defined the return clause. Other two types of defined functions return table.
					  </p>
					  <p class="qus">107. What do you mean by Collation?</p>
					  <p class="ans">Collation is defined as a set of rules that determine how data can be sorted as well as compared. Character data is sorted using the rules that define the correct character sequence along with options for specifying case-sensitivity, character width etc.
					  </p>
					  <p class="qus">108. What are the different types of Collation Sensitivity?</p>
					  <p class="ans">Following are the different types of collation sensitivity:<br>
					  <ul>
<li>●	Case Sensitivity: A and a and B and b.</li>
<li>●	Kana Sensitivity: Japanese Kana characters.</li>
<li>●	Width Sensitivity: Single byte character and double-byte character.</li>
<li>●	Accent Sensitivity.</li>
                      </ul>
					  </p>
					  <p class="qus">109. What are Local and Global variables?</p>
					  <p class="ans">Local variables:<br>
These variables can be used or exist only inside the function. These variables are not used or referred by any other function.<br>
Global variables:<br>
These variables are the variables which can be accessed throughout the program. Global variables cannot be created whenever that function is called.
					  </p>
					  <p class="qus">110. What is Auto Increment in SQL?</p>
					  <p class="ans">Autoincrement keyword allows the user to create a unique number to get generated whenever a new record is inserted into the table.<br>
This keyword is usually required whenever PRIMARY KEY in SQL is used.<br>
AUTO INCREMENT keyword can be used in Oracle and IDENTITY keyword can be used in SQL SERVER.
					  </p>
					  <p class="qus">111. What is a Datawarehouse?</p>
					  <p class="ans">Datawarehouse refers to a central repository of data where the data is assembled from multiple sources of information. Those data are consolidated, transformed and made available for the mining as well as online processing. Warehouse data also have a subset of data called Data Marts.
					  </p>
					  <p class="qus">112. What are the different authentication modes in SQL Server? How can it be changed?</p>
					  <p class="ans">Windows mode and Mixed Mode – SQL and Windows. You can go to the below steps to change authentication mode in SQL Server:<br>
					  <ul>
<li>●	Click Start> Programs> Microsoft SQL Server and click SQL Enterprise Manager to run SQL Enterprise Manager from the Microsoft SQL Server program group.</li>
<li>●	Then select the server from the Tools menu.</li>
<li>●	Select SQL Server Configuration Properties, and choose the Security page.</li>
                      </ul>
					  </p>
					  <p class="qus">113. What are STUFF and REPLACE function?</p>
					  <p class="ans">STUFF Function: This function is used to overwrite existing character or inserts a string into another string. Syntax:<br>
STUFF(string_expression,start, length, replacement_characters)<br>
where,<br>
string_expression: it is the string that will have characters substituted<br>
start: This refers to the starting position<br>
length: It refers to the number of characters in the string which are substituted.<br>
replacement_string: They are the new characters which are injected in the string.<br>
 
REPLACE function: This function is used to replace the existing characters of all the occurrences. Syntax:<br>
REPLACE (string_expression, search_string, replacement_string)<br>
Here every search_string in the string_expression will be replaced with the replacement_string.
					  </p>
                      
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
		
<script>
//disable Copy Functions //
$('body').bind('copy paste',function(e) {
    e.preventDefault(); return false; 
});
</script>