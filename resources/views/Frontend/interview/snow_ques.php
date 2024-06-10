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
						<h3>Snowflake Interview Questions and Answers</h3>
                      
						<p class="qus">1. Define Snowflake?</p>
						<p class="ans">Snowflake is a cloud-oriented data warehouse supplied as a Saas (Software-as-a-service) with complete support for ANSI SQL. It has a distinctive architecture that allows users to create tables and begin querying the data with fewer DBA activities required.</p>
                      
                      <p class="qus">2. What are the unique features of Snowflake?</p>
                      <p class="ans">Snowflake is a cloud-based data warehouse. So, it takes the benefits of the capabilities of the cloud and creates the following unique features:</p>
                      <ul>
                        <li>1. Autoscaling</li>
                        <li>2. Dedicated virtual warehouses</li>
                        <li>3. Zero copy cloning</li>
                        <li>4. Time travel</li>
                        <li>5. Robust data protection features</li>
                        <li>6. Military-grade security and encryption</li>
                      </ul>
                      
                      <p class="qus">3. Describe Snowflake Architecture?</p>
                      <p class="ans">Snowflake is developed on the shared, multi-cluster, patented data architecture generated for the cloud. Snowflake architecture contains services, storage, and compute layers that are logically integrated but scale indefinitely and separate from one another.<br>
					  <img src="<?= base_url(); ?>assets/img/snowflakearchitecture.jpg" style="width:500px;" /><br>
					  <ul>
                        <li>1.	Data storage: In Snowflake, we reorganize the stored data into its intrinsic columnar and optimized format.</li>
                        <li>2.	Cloud services: Cloud services synchronize and manage all the activities throughout the snowflake. It offers the best results for Metadata management, Authentication, and Infrastructure management.</li>
                        <li>3.	Query processing: Virtual warehouses execute the queries in the Snowflake.</li>
                      </ul>
					  </p>
					  <p class="qus">4. Explain briefly about Snowflake editions?</p>
                      <p class="ans">Following are the Snowflake editions:<br>
					  <ul>
                        <li>1.	Standard Edition: Standard Edition is an initial level subscription that offers unlimited access to the Snowflake standard features.</li>
                        <li>2.	Business-critical edition: It provides a higher level of data protection for the critical data of the organization.</li>
                        <li>3.	Enterprise edition: Besides standard edition services and features, this edition provides extra features necessary for big-scale enterprises.</li>
						<li>4.	Virtual Private Snowflake: It offers a higher security level for the enterprises that are handling financial activities.</li>
                      </ul>
					  </p>
					  <p class="qus">5. What are the different methods to access the Snowflake Cloud Datawarehouse?</p>
                      <p class="ans">Methods to access Snowflake cloud data warehouse:<br>
					  <ul>
                        <li>●	ODBC Drivers</li>
                        <li>●	Web User Interface</li>
                        <li>●	Python Libraries</li>
						<li>●	JDBC Drivers</li>
                      </ul>
					  </p>
					  <p class="qus">6. What kind of tool is Snowflake?</p>
                      <p class="ans">Snowflake is mentioned as the ETL tool that contains three steps. Therefore, it is a three-stage process. It includes the following three stages:<br>
					  <ul>
                        <li>1. Extract</li>
						<p>It is the first stage that includes the data extraction from the source and creates data files. The data files that we create in this stage support data formats like CSV, JSON, XML, etc.</p>
                        <li>2. Transfer</li>
						<p>In this stage, we copy the data into the Snowflake database table through the “COPY INTO” command.</p>
                        <li>3. Load</li>
						<p>In this stage, we load the data to internal or external storage. We perform the data staging in the Microsoft Azure Blob and Snowflake managed location.</p>
                      </ul>
					  </p>
					  <p class="qus">7. What are the benefits of Snowflake Compression?</p>
                      <p class="ans"> Following are the benefits of the Snowflake Compression:<br>
					  <ul>
                        <li>●	The storage costs of Snowflake compression are less than the native cloud storage because of compression.</li>
                        <li>●	No storage expenses for the disk caches.</li>
                        <li>●	Approximately zero storage expenses for data sharing or data cloning.</li>
                      </ul>
					  </p>
					  <p class="qus">8. Describe Columnar database?</p>
                      <p class="ans">Columnar database arranges the data at column level in place of normal row level. All column levels will be more quickly and utilize fewer resources when compared with the row-level relational database.
					  </p>
					  <p class="qus">9. Explain the data security features of Snowflake?</p>
                      <p class="ans">Snowflake enciphers all the customer data by using end-to-end encryption. Following are the data security features:<br>
					  <ul>
                        <li>●	Snowflake automatically encrypts the data through Snowflake-managed keys.</li>
                        <li>●	Through TLS, Snowflake protects all the data transfer and communication between the server and the clients.</li>
                        <li>●	We can select the geographical location where we store the data according to our cloud region.</li>
                      </ul>
					  </p>
					  <p class="qus">10. How do we store the data in the Snowflake?</p>
                      <p class="ans">In Snowflake, we store the data in multiple micro partitions, which must be internally optimized and compressed. We store the data in a columnar format in the Snowflake cloud storage. We can access the data objects by executing SQL query operations in Snowflake.
					  </p>
					  <p class="qus">11. What is the role of the storage layer in Snowflake?</p>
                      <p class="ans">The  Storage layer stores all the tables, query results, and data in Snowflake. Storage tier is constructed on extensible cloud spot storage. The design of the storage tier is entirely independent of resiliency, computing resources, and performance for data analytics and storage.
					  </p>
					  <p class="qus">12. Define Snowflake caching?</p>
                      <p class="ans"> Snowflake caches the results of the executed queries. Every time we run a new query, we check the previously executed query. If a matching query is available, we cache the results. After that, we use the cached result set rather than running the query again. So, Snowflake is called global snowflake capture because any number of users can use it.
					  </p>
					  <p class="qus">13. Describe Snowflake computing?</p>
                      <p class="ans">Snowflake cloud data warehouse offers a core architecture that offers instant, managed, and secure access to the complete data network and different kinds of data workloads, which comprises a single platform to develop the latest data applications.
					  </p>
					  <p class="qus">14. Describe zero-copy cloning?</p>
                      <p class="ans">Zero-copy is described as a snowflake clone. We use clones to create a copy of the database schema or table without copying the available storage files on the disk.
					  </p>
					  <p class="qus">15. How many kinds of warehouses are available for Snowflake?</p>
                      <p class="ans">Snowflake architecture divides the data warehouses into three unique functions: data storage, cloud services, and compute resources. The price of utilizing Snowflake is according to the utilization of every function.
					  </p>
					  <p class="qus">16. Is it possible to store the enciphered data in the Snowflake?</p>
                      <p class="ans">The benefit of the customer management keys is that we have full control over the master keys for our important management services. If we do not release this key, we cannot decipher the data saved in our snowflake account.
					  </p>
					  <p class="qus">17. Can we connect AWS glue to Snowflake?</p>
                      <p class="ans">Yes, we can connect AWS glue to the Snowflake. As AWS glue is a data warehouse utility, we can connect it easily with the snowflake. By connecting AWS glue and Snowflake, we can process the data more flexibly and easily.
					  </p>
					  <p class="qus">18. Explain briefly about Schema?</p>
                      <p class="ans">In Snowflake, we use schema for organizing the data. Display mode is a logical set of database objects like views and tables. The benefit of using snowflake programs is that they offer organized data and utilize disk spaces.
					  </p>
					  <p class="qus">19. Explain Failsafe?</p>
                      <p class="ans">Failsafe offers a seven-day period, and we can recover the history data by using snow flags. The time period starts instantly after the holding period of the time trip finishes. We do not provide Failure security as a way of using historical data after the retention period finishes.
					  </p>
					  <p class="qus">20. Where do we store the metadata in Snowflake?</p>
                      <p class="ans">Snowflake systematically creates metadata for external or internal stage files. We can store it in a virtual column, and we can query the data through the “SELECT” statement.
					  </p>
					  <p class="qus">21. Describe Snowflake ETL?</p>
                      <p class="ans"> ETL refers to Extract, Transform, and Load. ETL is a process we use for extracting the data from multiple sources and loading it to a particular database or data warehouse. The data sources include third-party applications, databases, flat files, etc. Snowflake ETL means enforcing the ETL process for loading the data into the Snowflake data warehouse or database.
					  </p>
					  <p class="qus">22. Differentiate Horizontal scaling and Vertical scaling</p>
                      <p class="ans">Horizontal scaling increases concurrency when we have to support additional users. We can utilize auto-scaling and raise the number of virtual warehouses to support and satisfy user queries immediately.<br>
Vertical Scaling reduces processing When we have large workloads, and if we want to maximize it and make it run rapidly, we can explore selecting a large virtual warehouse size. 
					  </p>
					  <p class="qus">23. Describe Snowflake Cluster?</p>
                      <p class="ans"> In Snowflake, Data partitions are known as clustering. This generally defines the grouping key for the table. The method of handling cluster data that is available in the table is known as reclustering.
					  </p>
					  <p class="qus">24. How many nodes exist in a big Snowflake warehouse?</p>
                      <p class="ans">A big Snowflake warehouse contains eight nodes. When we run a query on the cluster, we execute the query through a similar number of knots like the parallel node.
					  </p>
					  <p class="qus">25. Why is Snowflake more popular?</p>
                      <p class="ans">Snowflake is more popular due to the following reasons:<br>
					  <ul>
                        <li>1.	Snowflake provides a broad range of technology areas like data integration, business intelligence, security, and modern analytics.</li>
                        <li>2.	It offers cloud infrastructure and endorses advanced design architectures ideal for dynamic and agile usage trends.</li>
                        <li>3.	Snowflake endorses unique features like scalable compute, data cloning, data sharing, and the partition of the compute and storage.</li>
						<li>4.	Snowflake streamlines data processing.</li>
                      </ul>
					  </p>
					  <p class="qus">26. Is Snowflake OLTP or OLAP?</p>
                      <p class="ans">Snowflake is developed for Online Analytical Processing(OLAP) database system. Based on the utilization, we can use it for Online Transaction Processing(OLTP) intents also.
					  </p>
					  <p class="qus">27. What is the purpose of the Storage Layer in Snowflake?</p>
                      <p class="ans">The storage layer saves all the varied data, query results, and tables. The storage layer is developed on the extensible cloud blob storage. The highest elasticity, scalability, and capacity for data analytics and warehouse are ensured as we engineer the storage for scaling fully autonomous computing resources.
					  </p>
					  <p class="qus">28. What is the role of the computing layer in Snowflake?</p>
                      <p class="ans">In Snowflake, virtual warehouses perform data processing activities. While executing a query, virtual warehouses fetch the minimal data needed from the storage layer for satisfying the query requests.
					  </p>
					  <p class="qus">29. How do we run a Snowflake procedure?</p>
                      <p class="ans">Stored procedures enable us to develop modular code, including complex business logic containing various SQL statements with procedural logic. For running the Snowflake procedure, carry out the below steps:<br>
					  <ul>
                        <li>●	Implement a SQL statement.</li>
                        <li>●	Fetch the query results.</li>
                        <li>●	Fetch the result set metadata.</li>
                      </ul>
					  </p>
					  <p class="qus">30. How do we check the Snowflake history?</p>
                      <p class="ans">For retrieving the activity history details for executing in an executing or scheduled state, query the “TASK_HISTORY” table function in the information schema.
					  </p>
					  <p class="qus">31. Describe Snowflake AWS?</p>
                      <p class="ans">Snowflake provides a data cloud- a global network where several organizations gather data with unlimited concurrency, performance, and scale. Snowflake on AWS acts like a SQL, which makes advance data warehousing efficient, flexible, and available to all users. 
					  </p>
					  <p class="qus">32. What does Snowflake endorse ETL tools?</p>
                      <p class="ans">Snowflake endorses the following ETL tools:<br>
					  <ul>
                        <li>●	 Informatica</li>
                        <li>●	Talend</li>
                        <li>●	Tableau</li>
						<li>●	Matillion</li>
                      </ul>
					  </p>
					  <p class="qus">33. Describe Auto-scaling?</p>
                      <p class="ans">Auto-scaling is a modern property of Snowflake that begins and ends clusters according to the need for the warehouse’s workloads.
					  </p>
					  <p class="qus">34. What are the benefits of the Materialized views?</p>
                      <p class="ans">Following are the benefits of the Materialized views:<br>
					  <ul>
                        <li>1.	Enhances query performance</li>
                        <li>2.	Snowflake automatically handles materialized views.</li>
                        <li>3.	Materialized views include updated data.</li>
                      </ul>
					  </p>
					  <p class="qus">35. Describe Materialized View?</p>
                      <p class="ans">In Snowflake, Materialized view is a pre-calculated data set originated from the query definition. As the data is pre-calculated, it becomes easy to challenge the materialized view than the materialized view from the base table of the view. Materialized views are developed to improve the query performance for general and repeated query patterns.
					  </p>
					  <p class="qus">36. Explain the Clustering key?</p>
                      <p class="ans">In Snowflake, the Clustering key is a subcategory of the columns in the table that assists in co-locating the data inside the table. It is suitable for conditions where tables are comprehensive.
					  </p>
					  <p class="qus">37. What is Snowflake Schema?</p>
                      <p class="ans">Snowflake Schema is a logical portrayal of the tables in the multidimensional database. A fact table depicts it in the middle with the varied connected dimensions. The main objective of the Snowflake schema is data normalization.
					  </p>
					  <p class="qus">38. What are the benefits of the Snowflake Schema?</p>
                      <p class="ans">Following are the benefits of the Snowflake Schema:<br>
					  <ul>
                        <li>●	Utilizes less disk space.</li>
                        <li>●	Minimum data redundancy</li>
                        <li>●	Removes data integration challenges</li>
						<li>●	Lower Maintenance</li>
						<li>●	Runs complex queries</li>
						<li>●	Endorses many-to-many relationships</li>
                      </ul>
					  </p>
					  <p class="qus">39. Describe Snowpipe?</p>
                      <p class="ans">Snowpipe is a cost-efficient and continuous utility used to load the data into the snowflake. Snowpipe spontaneously loads the data when they exist on the stage. Snowpipe eases the data loading process by loading the data in small batches and sets the data available for the analysis.
					  </p>
					  <p class="qus">40. What are the different types of Catches available in Snowflake?</p>
                      <p class="ans">Following are the different types of catches available in Snowflake:<br>
					  <ul>
                        <li>1.	Query Results Cache</li>
                        <li>2.	Metadata Cache</li>
                        <li>3.	Virtual Warehouse Local Disk Caching</li>
                      </ul>
					  </p>
					  <p class="qus">41. Explain the “data shares” option in Snowflake briefly?</p>
                      <p class="ans">In Snowflake, the data shares option enables the users to share the data objects in our database account with other snowflake accounts in a secured manner. The database objects shared between the snowflake accounts are only readable, and we cannot make any modifications to them.
					  </p>
					  <p class="qus">42. What are the different Drivers and Connectors that exist in Snowflake?</p>
                      <p class="ans">Following are the Drivers and Connectors that exist in Snowflake:<br>
					  <ul>
                        <li>●	Node.js Driver</li>
                        <li>●	.NET Driver</li>
                        <li>●	ODBC Driver</li>
						<li>●	JDBC Driver</li>
						<li>●	Snowflake Connector for Kafka</li>
						<li>●	Snowflake Connector for Python</li>
						<li>●	Snowflake Connector for Spark</li>
                      </ul>
					  </p>
					  <p class="qus">43. Explain Micro partitions?</p>
                      <p class="ans">Snowflake has a distinct and robust kind of data partitioning known as micro-partitioning. Data stored in every Snowflake table is automatically transformed into micro partitions. Generally, the micro partition is carried out on all the Snowflake tables.
					  </p>
					  <p class="qus">44. Describe the Time Travel tool?</p>
                      <p class="ans">The time travel tool of Snowflake allows us to use the historical data at any specific point within a particular period of time. Through this, we can access the data that has been changed or deleted. Through this tool, we can carry out the following tasks:<br>
					  <ul>
                        <li>●	Revive the data objects that have been lost unexpectedly.</li>
                        <li>●	For examining data utilization and modifications made to the data in a specific time period.</li>
                        <li>●	Duplicating and Backing up the data from the essential points in the past.</li>
                      </ul>
					  </p>
					  <p class="qus">45. What are the different data sharing types in Snowflake?</p>
                      <p class="ans">Following are three types of data sharing:<br>
					  <ul>
                        <li>1.	Sharing the data among the functional units.</li>
                        <li>2.	Sharing the data between the management units.</li>
                        <li>3.	Sharing the data between geologically distributed locations.</li>
                      </ul>
					  </p>
					  <p class="qus">46. What are the advantages of Snowpipe?</p>
                      <p class="ans"> Following are the advantages of Snowpipe:<br>
					  <ul>
                        <li>●	Real-time understandings</li>
                        <li>●	User-friendliness</li>
                        <li>●	Cost-efficient</li>
						<li>●	Zero management</li>
						<li>●	Flexibility</li>
                      </ul>
					  </p>
					  <p class="qus">47. What is the role of SQL in Snowflake?</p>
                      <p class="ans">The full form of SQL is Structured Query Language, and generally, we use it for data communication. In the SQL, general operators merged into DDL(Data Definition Language) and DML(Data Manipulation Language) to run different statements like UPDATE, SELECT, CREATE, INSERT, DROP, etc. Snowflake supports SQL standard edition. In Snowflake, we use SQL for performing general data warehousing operations like insert, alter, create, delete, update, etc.
					  </p>
					  <p class="qus">48. Explain the Data retention period of Snowflake</p>
                      <p class="ans">The data retention period is an important element of Snowflake, and generally, the data retention period for every Snowflake account is 24 hours(1 day). The data retention period is available for all the Snowflake accounts.
					  </p>
					  <p class="qus">49. How do we secure the data in Snowflake?</p>
                      <p class="ans">Data security is the topmost priority for all organizations. Snowflake applies the best security standards to encrypt and secure the data and customer accounts. It provides leading key management features at no extra cost.<br>
Following are the security steps used by Snowflake to secure our data:<br>
					  <ul>
                        <li>●	Snowflake utilizes a managed key to encrypt the data stored in it systematically.</li>
                        <li>●	Snowflake utilizes TLS for protecting the communication between the clients and servers.</li>
                        <li>●	It enables us to choose a geological location for storing our data.</li>
                      </ul>
					  </p>
					  <p class="qus">50. What are the different types of tables available in Snowflake?</p>
                      <p class="ans">Following are the different types of tables available in Snowflake:<br>
					  <ul>
                        <li>1.	Permanent: It is a typical database table. It utilizes more space, and we can enable fail-safe and Time-travel periods. Permanent tables are useful for the data that requires a higher level of data recovery and data protection.</li>
                        <li>2.	Transient: In Snowflake, we can create transient tables that exist until externally dropped and are accessible to all the users with relevant privileges.  </li>
                        <li>3.	Temporary: We use the temporary table to store transitory and non-permanent data. Temporary tables exist only in the session in which they were developed.</li>
						<li>4.	External: External tables are read-only, and we cannot perform DML operations on them. We can use external tables for join and query operations. </li>
                      </ul>
					  </p>
					  <p class="qus">51. What is the difference between Snowflake and Redshift?</p>
                      <p class="ans">Cloud-based data warehouses are becoming increasingly popular, with Redshift and Snowflake being two of the biggest players. These are large data analytics databases capable of analyzing and reading vast amounts of data.
					  </p>
					  <table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Snowflake</th>
							  <th scope="col">Redshift</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Despite similar on-demand pricing, Snowflake and Redshift package their features differently. In Snowflake's pricing structure, compute usage is separate from storage usage</td>
							  <td>In Redshift, both computer usage and storage usage are combined.</td>
							</tr>
							<tr>
							  <td>Snowflake is more robust than Redshift when it comes to JSON storage. In essence, Snowflake makes it possible to store and query JSON with built-in, native functions.</td>
							  <td>On the other hand, when JSON is loaded into Redshift, it is split into strings, making it more difficult to query and work with.  </td>
							</tr>
							<tr>
							  <td>Snowflake offers security and compliance features specifically tailored to its editions so that your data is protected to the maximum level as per your data strategy.</td>
							  <td>The Redshift platform offers a wide range of encryption solutions</td>
							</tr>
							<tr>
							  <td>Data vacuuming and compression can be automated on Snowflake. It offers the best advantage as it automates much of the process, saving time and effort. </td>
							  <td>Data vacuuming and compression cannot be automated on Redshift, so the system requires more hands-on maintenance.</td>
							</tr>
							</tbody>
						</table>
					  <p class="qus">52. Which cloud platforms does Snowflake currently support?</p>
                      <p class="ans">Snowflake currently supports the following cloud platforms: <br>
					  <ul>
                        <li>●	Amazon Web Services (AWS)</li>
                        <li>2●	Google Cloud Platform (GCP)</li>
                        <li>●	Microsoft Azure (Azure).</li>
                      </ul>
					  </p>
					  <p class="qus">53. In Snowflake, how are data and information secured?</p>
                      <p class="ans">Every organization considers data security to be one of its top priorities. The Snowflake platform adheres to the best security standards in the industry to encrypt and safeguard customer data. The platform provides the best key management features at no additional charge. To protect client data, Snowflake employs the following security measures: <br>
					  <ul>
                        <li>●	Snowflake automatically encrypts the data that it contains using a managed key.</li>
                        <li>●	Snowflake is based on Transport Layer Security (TLS) to ensure data security between customers and servers.</li>
                        <li>●	Depending on your cloud region, you can select a geographic location to store your data.</li>
                      </ul>
					  </p>
					  <p class="qus">54. Which ETL tools are compatible with Snowflake?</p>
                      <p class="ans">Snowflake is compatible with the following ETL tools:<br>
					  <ul>
                        <li>1.	Standard Edition: Standard Edition is an initial level subscription that offers unlimited access to the Snowflake standard features.</li>
                        <li>2.	Business-critical edition: It provides a higher level of data protection for the critical data of the organization.</li>
                        <li>3.	Enterprise edition: Besides standard edition services and features, this edition provides extra features necessary for big-scale enterprises.</li>
						<li>4.	Virtual Private Snowflake: It offers a higher security level for the enterprises that are handling financial activities.</li>
                      </ul>
					  </p>
					  <p class="qus">55. State difference between Star Schema and Snowflake Schema.</p>
                      <p class="ans">Schemas like Star and Snowflake serve as a logical description of the entire database, or how data is organized in a database. 
●	Star Schema: A star schema typically consists of one fact table and several associated dimension tables. The star schema is so named because the structure has the appearance of a star. Dimensions of the star schema have been denormalized. When the same values are repeated within a table, it is considered denormalization.<br>
<img src="<?= base_url(); ?>assets/img/starschema.png" style="width:500px;" /><br>
●	Snowflake Schema: In a snowflake schema, the center has a fact table, which is associated with a number of dimension tables. Those dimension tables are in turn associated with other dimension tables. Snowflake schemas provide fully normalized data structures. Separate dimensional tables are used for the various levels of hierarchy (city > country > region).<br>
<img src="<?= base_url(); ?>assets/img/starschema1.png" style="width:500px;" /><br>
					  </p>
					  <p class="qus">56. What is the best way to remove a string that is an anagram of an earlier string from an array?</p>
                      <p class="ans">For instance, an array of strings arr is given. The task is to remove all strings that are anagrams of an earlier string, then print the remaining array in sorted order.<br> 
●	Examples:  <br>
Input: arr[] = { “Scaler”, “Lacers”, “Accdemy”, “Academy” }, N = 4 <br>

Output: [“Scaler”, “Academy”,]  <br>

Explanation: “Listen” and “Silent” are anagrams, so we remove “Silent”. Similarly, “Scaler” and “Lacers” are anagrams, so we remove “Lacers”. <br>
 
●	Code Implementation<br>
import java.util.*;<br> 
class InterviewBit{<br> 
// Function to remove the anagram String <br>
static void removeAnagrams(String arr[], int N)<br> 
{ <br>
   // vector to store the final result <br>
    Vector ans = new Vector(); <br>
   // A data structure to keep track of previously encountered Strings<br> 
   HashSet found = new HashSet ();<br> 
   for (int i = 0; i < N; i++) { <br> 
       String word = arr[i]; <br> 
       // Sort the characters of the current String <br>
       word = sort(word); <br>
       // Check if the current String is not present in the hashmap <br>
       // Then, push it into the resultant vector and insert it into the hashmap <br>
       if (!found.contains(word)) { <br>
           ans.add(arr[i]); <br>
           found.add(word); <br>
       } <br>
   }  <br>
   // Sort the resultant vector of Strings <br>
   Collections.sort(ans);<br>   
   // Print the required array <br>
   for (int i = 0; i < ans.size(); ++i) { <br>
       System.out.print(ans.get(i)+ " "); <br>
   } <br>
} <br>
static String sort(String inputString) <br>
{ <br>
   // convert input string to char array<br> 
   char tempArray[] = inputString.toCharArray();<br>        
   // sort tempArray <br>
   Arrays.sort(tempArray);  <br>      
   // return new sorted string <br>
   return new String(tempArray); <br>
}  <br>  
// Driver code <br>
public static void main(String[] args) <br>
  { <br>
   String arr[]= { "Scaler", "Lacers", "Accdemy", "Academy" }; <br>
   int N = 4; <br>
   removeAnagrams(arr, N); <br>
  } <br>
}<br>
●	Output:<br>
Scaler Academy<br>
					  </p>
					  <p class="qus">57. What do we need to do to create temporary tables?</p>
                      <p class="ans">In the CREATE TABLE DDL, specify the TEMPORARY keyword (or the TEMP abbreviation) to create a temporary table. The following syntax must be used to create temporary tables:<br>
Create temporary table mytable (id number, creation_date date);
					  </p>
					  <p class="qus">58. Why is Snowflake highly successful?</p>
                      <p class="ans">Snowflake is highly successful because of the following reasons:<br>
					  <ul>
                        <li>●	It assists a wide variety of technology areas like data integration, business intelligence, advanced analytics, security, and governance.</li>
                        <li>●	It offers cloud infrastructure and supports advanced design architectures ideal for dynamic and quick usage developments.</li>
                        <li>●	Snowflake supports predetermined features like data cloning, data sharing, division of computing and storage,  and directly scalable computing.</li>
						<li>●	Snowflake eases data processing.</li>
						<li>●	Snowflake provides extendable computing power.</li>
						<li>●	Snowflake suits various applications like ODS with the staged data, data lakes with data warehouse, raw marts, and data marts with acceptable and modelled data.</li>
                      </ul>
					  </p>
					  <p class="qus">59. Explain Snowflake Time Travel</p>
                      <p class="ans">Snowflake Time Travel tool allows us to access the past data at any moment in the specified period. Through this, we can see the data that we can change or delete. Through this tool, we can carry out the following tasks:<br>
					  <ul>
                        <li>●	Restore the data-associated objects that may have lost unintentionally.</li>
                        <li>●	For examining the data utilization and changes done to the data in a specific time period.</li>
                        <li>●	Duplicating and backing up the data from the essential points in history.</li>
                      </ul>
					  </p>
					  <p class="qus">60. Differentiate Fail-Safe and Time-Travel in Snowflake</p>
                      <table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Time-Travel</th>
							  <th scope="col">Fail-Safe</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>According to the Snowflake edition, account or object particular time travel setup, users can retrieve and set the data reverting to the history.</td>
							  <td>Fail-Safe, the User does not have control over the recovery of data valuable merely after completing the period. In this context, only Snowflake assistance can help for 7 days. Therefore if you set time travel as six days, we retrieve the database objects after executing the transaction + 6 days duration.</td>
							</tr>
						  </tbody>
						</table>
					  <p class="qus">61. What is the use of Snowflake Connectors?</p>
                      <p class="ans">The Snowflake connector is a piece of software that allows us to connect to the Snowflake data warehouse platform and conduct activities such as Read/Write, Metadata import, and Bulk data loading.<br>
The Snowflake connector can be used to execute the following tasks:<br>
					  <ul>
                        <li>●	Read data from or publish data to tables in the Snowflake data warehouse.</li>
                        <li>●	Load data in bulk into a Snowflake data warehouse table.</li>
                        <li>●	You can insert or bulk load data into numerous tables at the same time by using the Numerous input connections functionality.</li>
						<li>●	To lookup records from a table in the Snowflake data warehouse.</li>
                      </ul>
					  <p>Following are the types of Snowflake Connectors:</p>
					  <ul>
                        <li>●	Snowflake Connector for Kafka</li>
                        <li>●	Snowflake Connector for Spark</li>
                        <li>●	Snowflake Connector for Python</li>
                      </ul> 
					  </p>
					  <p class="qus">62. Does Snowflake use Indexes?</p>
                      <p class="ans">No, Snowflake does not use indexes. This is one of the aspects that set the Snowflake scale so good for the queries.
					  </p>
					  <p class="qus">63. What is “Stage” in the Snowflake?</p>
                      <p class="ans">In Snowflake, stages are data storage locations. If the data to be imported into Snowflake is stored in another cloud area, such as AWS S3, Azure, or GCP, these are referred to as External stages; if the data is stored within Snowflake, they are referred to as Internal stages.<br>
Internal Stages are further divided as below<br>
					  <ul>
                        <li>●	Table Stage</li>
                        <li>●	User Stage</li>
                        <li>●	Internal Named Stage</li>
                      </ul>
					  </p>
					  <p class="qus">64. Does Snowflake maintain stored procedures?</p>
                      <p class="ans">Yes, Snowflake maintains stored procedures. The stored procedure is the same as a function; it is created once and used several times. Through the CREATE PROCEDURE command, we can create it and through the “CALL” command, we can execute it. In Snowflake, stored procedures are developed in Javascript API. These APIs enable stored procedures for executing the database operations like SELECT, UPDATE, and CREATE.
					  </p>
					  <p class="qus">65. How do we execute the Snowflake procedure?</p>
                      <p class="ans">Stored procedures allow us to create modular code comprising complicated business logic by adding various SQL statements with procedural logic. For executing the Snowflake procedure, carry out the below steps:<br>
					  <ul>
                        <li>●	Run a SQL statement</li>
                        <li>●	Extract the query results</li>
                        <li>●	Extract the result set metadata</li>
                      </ul>
					  </p>
					  <p class="qus">66. Explain Snowflake Compression</p>
                      <p class="ans">All the data we enter into the Snowflake gets compacted systematically. Snowflake utilizes modern data compression algorithms for compressing and storing the data. Customers have to pay for the packed data, not the exact data.<br>
Following are the advantages of the Snowflake Compression:<br>
					  <ul>
                        <li>●	Storage expenses are lesser than original cloud storage because of compression.</li>
                        <li>●	No storage expenditure for on-disk caches.</li>
                        <li>●	Approximately zero storage expenses for data sharing or data cloning.</li>
                      </ul>
					  </p>
					  <p class="qus">67. How to create a Snowflake task?</p>
                      <p class="ans">To create a Snowflake task, we have to use the “CREATE TASK” command. Procedure to create a snowflake task:<br>
					  <ul>
                        <li>●	CREATE TASK in the schema.</li>
                        <li>●	USAGE in the warehouse on task definition.</li>
                        <li>●	Run SQL statement or stored procedure in the task definition.</li>
                      </ul>
					  </p>
					  <p class="qus">68. What happens to Cache results when the underlying data changes ?</p>
                      <p class="ans">Snowflake Cache results are invalidated when the data in the underlying micro-partition changes. Although more information is available in the Snowflake Documentation, a series of tests demonstrated the result cache will be reused unless the underlying data (or SQL query) has changed. As a series of additional tests demonstrated inserts, updates and deletes which don't affect the underlying data are ignored, and the result cache is used, provided data in the micro-partitions remains unchanged<br>
Finally, results are normally retained for 24 hours, although the clock is reset every time the query is re-executed, up to a limit of 30 days, after which results query the remote disk
					  </p>
					  <p class="qus">69. How to disable Snowflake Query Results Caching?</p>
                      <p class="ans">To disable the Snowflake Results cache, run the below query. It should disable the query for the entire session duration<br>
alter session set use_cached_result =false;
					  </p>
					  <p class="qus">70. Different States of Snowflake Virtual Warehouse ?</p>
                      <p class="ans">
					  <ul>
                        <li>1.	Run from Cold Virtual Warehouse:  When you all your Virtual warehouses are suspended (nothing active), and if you run a query, it will start a new instance of Virtual Warehouse (Cold). Which meant starting a NEW virtual warehouse (with no local disk caching), and executing the query.</li>
                        <li>2.	Run from Warm Virtual Warehouse:  Your virtual warehouse has been active and running for a while and has processed few queries, Then its called WARM Virtual warehouse. Now, If you disable the result caching, and repeat the query.It will make use of the local disk caching which it pulled in the past, which is termed as Warm Caching</li>
                        <li>3.	Run from Hot Virtual Warehouse:  Which means you repeated the query execute, and the result caching is switched on. The results are fully served from the cache and this is the most efficient operation among all the three types</li>
                      </ul>
					  <p>Lets go through a small example to notice the performace between the three states of the virtual warehouse. In this example we have a 60GB table and we are running the same SQL query but in different Warehouse states
					  </p>
					  <table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col"></th>
							  <th scope="col">Cold Warehouse</th>
							  <th scope="col">Warm Warehouse</th>
							  <th scope="col">Hot Warehouse</th>
							  <th scope="col"></th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Run Time</td>
							  <td>20 seconds</td>
							  <td>1.2 seconds</td>
							  <td>2 milliseconds</td>
							  <td>The lower the Query Run time, the better</td>
							</tr>
							<tr>
							  <td>Remote Disk (Source)</td>
							  <td>12.5 GB</td>
							  <td>0</td>
							  <td>0</td>
							  <td>This is the data that is being pulled from Snowflake Micro partition files (Disk)</td>
							</tr>
							<tr>
							  <td>Local Disk Cache</td>
							  <td>0</td>
							  <td>12.5 GB</td>
							  <td>0</td>
							  <td>This is the files that are stored in the Virtual Warehouse disk and SSD Memory. The more the local disk is used the better</td>
							</tr>
							<tr>
							  <td>Results Cache</td>
							  <td>0</td>
							  <td>0</td>
							  <td>100%</td>
							  <td>The results cache is the fastest way to fullfill a query</td>
							</tr>
						  </tbody>
						</table>
					  <p class="qus">71. How to enable or disable Time Travel work in Snowflake ?</p>
                      <p class="ans">Time travel is automatically enabled with the standard, 1-day retention period. However, you may wish to upgrade to Snowflake Enterprise Edition to enable configuring longer data retention periods of up to 90 days for databases, schemas, and tables
					  </p>
					  <p class="qus">72. How to set custom Time Travel duration in Snowflake for a table ?</p>
                      <p class="ans">Below example creates a table with 90 days of retention for time travel<br>
create table mytable(col1 number, col2 date) data_retention_time_in_days=90;<br>
To reduce the retention period for a particular table<br>
alter table mytable set data_retention_time_in_days=30;
					  </p>
					  <p class="qus">73. How does Time Travel works in Snowflake ?</p>
                      <p class="ans">The files in the cloud storage (S3 / Cloud buckets / blob) are immutable. Which means we cannot alter the files, anytime a change happens to a file (like an insert / delete / update), Snowflake cannot modify the file, instead it has to create a new file. Snowflake preserves the old version of the file for a period of time to enable time travel.<br>
This is actually a limitation of the cloud and Snowflake turned this limitation beautifully into an attactive feature for its customers
					  </p>
					  <p class="qus">74. Snowflake Time Travel Storage costs ?</p>
                      <p class="ans">Storage charges are incurred for maintaining historical data during both the Time Travel and Fail-safe periods<br>
Snowflake minimizes the amount of storage required for historical data by maintaining only the information required to restore the individual table rows that were updated or deleted. As a result, storage usage is calculated as a percentage of the table that changed.<br> Full copies of tables are only maintained when tables are dropped or truncated<br>
The Storage charges are calculated for each 24-hour period (i.e. 1 day) from the time the data changed. The number of days historical data is maintained is based on the table type and the Time Travel retention period for the table
					  </p>
					  <p class="qus">75. How to undrop in Snowflake using Time Travel ?</p>
                      <p class="ans">If you dropped an object, you can recover it back using undrop command<br>
					  UNDROP TABLE MyTable;<br>
					  UNDROP SCHEMA MySchema;<br>
					  UNDROP DATABASE MyDatabase;
					  </p>
					  <p class="qus">76.Zero copy cloning sounds like magic. How does it work behind the scenes ?</p>
                      <p class="ans">Snowflake uses immutable blocks in the object store. When you delete something, it isn't really deleted. Instead, the Snowflake Global Services layer just records that the blocks are no longer relevant for that table. If table 1 had 0 days of retention, those blocks would have eventually been flushed after the data had been deleted. However, if you had cloned table 1 prior to deleting the data, the Global Services layer would remember those blocks were still being referenced and they wouldn't be flushed
					  </p>
					  <p class="qus">77.If there are some changes to original tables data like insert/update of rows will it automatically get reflected in the cloned data as well ?</p>
                      <p class="ans">No, when the clone is created it is a point in time view of the data. If you want a clone copy which receives updates from the source you could use Snowflake Data Sharing
					  </p>
					  <p class="qus">78.In case I do some DDL operation on the cloned table will that not affect my original table ?</p>
                      <p class="ans">No. the clone is its very own copy, any changes made to the clone are local to the clone
					  </p>
					  <p class="qus">79.What is the difference between cloning vs Time Travel in Snowflake ?</p>
                      <p class="ans">Time travel allows you to query tables as they were at a point in time in the past, up to 90 days with Enterprise edition. You can think of cloning as a point in time snapshot. You can clone from any point in time version within the 90 day retention period. Any clones which exist beyond the retention period are retained which means clones can be used as a form of backup
					  </p>
					  <p class="qus">80. Advantages of zero copy cloning in Snowflake ?</p>
                      <p class="ans">Here are some of the benefits of zero copy cloning:<br>
Zero Copy cloning is super fast, often referred to "Fast Clone" in Snowflake<br>
You normally have to wait hours, days, maybe weeks to spin up a copy of your production data warehouse so you could have a test or a development environment? And have to pay extra for the test or development environment to able to hold all the replicated data? Or maybe you have some new data scientists that just want to play around with the data but they really need their own copy?<br>
Cloning is very fast (as in it takes barely a minute to clone a 2TB database!), it allows you to have multiple copies of your data without the additional cost of storage usually associated with replicating data<br>
Zero Copy Cloning saves you in Storage costs<br>
Zero Copy cloning creates a copy of the object without having to duplicate the underlying storage. When a clone is created of a table, the clone utilizes no data storage because it shares all the existing micro-partitions of the original table at the time it was cloned; however, rows can then be added, deleted, or updated in the clone independently from the original table. Each change to the clone results in new micro-partitions that are owned exclusively by the clone and are protected through CDP<br>
Zero copy cloning syntax in Snowflake<br>
To clone a entire production database and make it available for development:<br>
CREATE DATABASE Dev CLONE Prod;<br>
To clone a schema<br>
CREATE SCHEMA Dev.DataSchema1 CLONE Prod.DataSchema1;<br>
To clone a single table:<br>
CREATE TABLE C CLONE Dev.public.C;
					  </p>
					  <p class="qus">81. What is the Query processing layer?</p>
                      <p class="ans">All the queries are executed on this processing layer. Snowflake utilizes "virtual warehouses for processing queries. Every virtual warehouse is a Massively Parallel Processing computing cluster consisting of several nodes assigned by snowflake’s cloud provider. In the query processing layer, every Virtual warehouse will not share its computational resources with other virtual warehouses. Each virtual warehouse is thus independent and does not have an impact on the other virtual warehouses in the event of a failover.
					  </p>
					  <p class="qus">82. Give a brief description of software architecture?</p>
                      <p class="ans"> Snowflake has a unique architecture based on a multi-cluster, patented, shared data specifically created for the cloud.  The architecture of Snowflake includes its storage computer and the service layers.  All these are integrated with each other logically and also scaled to be independent of each other.
					  </p>
					  <p class="qus">83. List out the different number of ways that can be used to access the Snowflake cloud data warehouse?</p>
                      <p class="ans">There are many ways on how you can access the Snowflake data warehouse.  They are:<br>
					  <ul>
                        <li>1.  Jdbc drivers</li>
                        <li>2. Odbc drivers</li>
                        <li>3. Python libraries</li>
						<li>4.  Web user interface</li>
						<li>5.  Snow SQL  command-line client</li>
                      </ul>
					  </p>
					  <p class="qus">84. What are the responsibilities of a storage layer in Snowflake?</p>
                      <p class="ans">The Snowflake storage layer is responsible for storing all the tables data query results and tables in the Snowflake. The storage layer is usually built in the cloud storage, making use of the Azure, GPC, AWS system. The storage layer ensures that there will be maximum scalability, elasticity and performance capacity will be high for data warehousing and Analytics. The storage layer is built so that it is responsible for scaling completely independent of the computer resources.
					  </p>
					  <p class="qus">85. What do you understand by the terms Snowflake computing and schema in Snowflake?</p>
                      <p class="ans"> Snowflake computing: Snowflake computing refers to the Snowflake cloud data warehouse's capability to provide secure and governed access to the data network to enable the different types of data workloads using a single platform for developing modern data applications.<br>
Schema: Snowflake refers to the concept of organizing the data in Snowflake.  In simple terms, schemas and databases are used to organize the data stored in the Snowflake. Schema is referred to as the logical grouping of the database objects.  The database objects include tables, views, etc. Snowflake's schema has its own benefit of utilizing these small disk space and providing structured data.
					  </p>
					  <p class="qus">86. Explain what type of database Snowflake is?</p>
                      <p class="ans"> SQL is entirely in SQL database or purely based on SQL database.  It is a relational database system that stores the data in columns and is also compatible with other tools like  Excel, tableau, etc. Snowflake has also come up with the query tool, which supports the multi-statement transactions and involves role-based security.  These are some of the features that are usually expected in the SQL database.
					  </p>
					  <p class="qus">87. What is Snowflake good for?</p>
                      <p class="ans"> Snowflake is good for its architecture and data-sharing capabilities. Snowflake architecture enables you to store, compute, and scale independently. Its data sharing functionalities make it easy to share, govern and secure data in real-time across organizations.
					  </p>
					  <p class="qus">88. What are the three layers of Snowflake architecture?</p>
                      <p class="ans"> The three layers of Snowflake architecture include:<br>
Database storage – In Snowflake, it reorganizes into its internal optimized, columnar, and compressed format when data is loaded. This data is stored in cloud storage.<br>
Query Processing – Queries are executed in the processing layer and are processed using “virtual warehouses.”<br>
Cloud Services – It’s a collection of services that coordinate activities across Snowflake. Services included in this are authentication, metadata management, infrastructure management, access control, and Query parsing & optimization.<br>
					  </p>
					  <p class="qus">89. Who are the competitors to Snowflake?</p>
                      <p class="ans">Top Snowflake competitors are AWS, Google, Microsoft, Cloudera, IBM, SAP, and Teradata.
					  </p>
					  <p class="qus">90. Where is metadata stored in Snowflake?</p>
                      <p class="ans"> Snowflake automatically generates metadata for files in internal stages or external stages. It is stored in virtual columns and can be queried using a standard SELECT statement.
					  </p>
					  <p class="qus">91.Is Snowflake an MPP database?</p>
                      <p class="ans">MPP stands for Massively Parallel Processing, and is a database architecture successfully deployed by Teradata and Netezza. Unlike traditional Symmetric Multi-Processing (SMP) hardware which runs a number of CPUs in a single machine, the MPP architecture deploys a cluster of independently running machines, with data distributed across the system. In addition to the ability to handle massive data volumes, this means it supports a scale out architecture, as additional nodes can be added to the cluster, although this can take from hours to days to deploy.<br>
EPP stands for Elastic Parallel Processing, and was pioneered by Snowflake Computing. This uses a number of independently running MPP clusters connected to a shared data pool. This architecture has the advantage that new clusters can be started within seconds, to elastically grow or shrink resources as needed.[/vc_column_text][vc_column_text css_animation=”left-to-right”]
					  </p>
					  <p class="qus">92. Which Snowflake edition should you use if you want to enable time travel for up to 90 days?</p>
                      <p class="ans">Enterprise Edition, Business Critical Edition and VPS Edition have the option to enable time travel for up to 90 days.[/vc_column_text][vc_column_text css_animation=”left-to-right”]
					  </p>
					  <p class="qus">93. Can you create Transient Views in Snowflake?</p>
                      <p class="ans">In Snowflake, you can create the below views.<br>
					  <ul>
                        <li>●	Standard View</li>
                        <li>●	Secure View</li>
                        <li>●	Materialized View</li>
                      </ul>
					  <p>Transient View is an Invalid view type.<br>
You can create transient tables in Snowflake but not transient views.<br>
Transient Tables:- Snowflake supports creating transient tables that persist until explicitly dropped and are available to all users with the appropriate privileges. Transient tables are similar to permanent tables with the key difference that they do not have a Fail-safe period. As a result, transient tables are specifically designed for transitory data that needs to be maintained beyond each session (in contrast to temporary tables) but does not need the same level of data protection and recovery provided by permanent tables[/vc_column_text][vc_separator][vc_column_text css_animation=”left-to-right”]
					  </p>
					  <p class="qus">94. Explain about the differences and similarities between Transient and Temporary tables?</p>
                      <p class="ans"><img src="<?= base_url(); ?>assets/img/transientdifference.jpg" style="width:500px;" /><br>
					  <img src="<?= base_url(); ?>assets/img/transientsimilarities.jpg" style="width:500px;" />
					  </p>
					  <p class="qus">95. By default, clustering keys are created for every table, how can you disable this option?</p>
                      <p class="ans">Clustering keys are not created by default for every table. Clustering key can be defined<br>
1) when a table is created by appending a CLUSTER BY clause to CREATE TABLE:<br>
create or replace table t1 (c1 date, c2 string, c3 number) cluster by (c1, c2);<br>
2) You can add a clustering key to an existing table or change the existing clustering key for a table using ALTER TABLE<br>
alter table t1 cluster by (c1, c3);<br>
3) At any time, you can drop the clustering key for a table using ALTER TABLE:<br>
ALTER TABLE <name> DROP CLUSTERING KEY<br>
Clustering keys are not intended for all tables. The size of a table, as well as the query performance for the table, should dictate whether to define a clustering key for the table. In particular, to see performance improvements from a clustering key, a table has to be large enough to consist of a sufficiently large number of micro-partitions, and the column(s) defined in the clustering key have to provide sufficient filtering to select a subset of these micro-partitions.<br>
In general, tables in the multi-terabyte (TB) range will experience the most benefit from clustering, particularly if DML is performed regularly/continually on these tables.<br>
Also, before explicitly choosing to cluster a table, Snowflake strongly recommends that you test a representative set of queries on the table to establish some performance baselines.[/vc_column_text][vc_separator][/vc_column][/vc_row][vc_row][vc_column][vc_column_text css_animation=”left-to-right”]
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