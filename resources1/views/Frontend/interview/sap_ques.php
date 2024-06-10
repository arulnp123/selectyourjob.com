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
						<h3>SAP Interview Questions and Answers</h3>
                      
						<p class="qus">1. What is SAP?</p>
						<p class="ans">SAP is the name of the company originated in 1972 under the German name (Systems, Applications, and Products in Data Processing) is the prominent ERP (Enterprise Resource Planning) software package.</p>
                      
                      <p class="qus">2. What is an ERP?</p>
                      <p class="ans">ERP stands for Enterprise Resource Planning Software and is an integrated computer-based system used to manage a company's resources efficiently. It ensures smooth information amongst various departments in an enterprise or a company and manages workflows. </p>
                      
                      <p class="qus">3. What are the different types of ERP's?</p>
                      <ul>
                        <li>1. SAP</li>
                        <li>2. JD Edwards (now acquired by Oracle)</li>
                        <li>3. Siebel</li>
                        <li>4. Peoplesoft (now acquired by Oracle)</li>
                        <li>5. Microsoft Dynamics</li>
                      </ul>
					  <p class="qus">4. SAP Basics feature Configuration of the SAP modules</p>
                      <p class="ans"> Transaction SPRO - this is the main tree for all the configuration.<br>
Function Key<br>
                        <ul>
                        <li>●	CTRL+C - Copy</li>
                        <li>●	CTRL+V – Paste</li>
                        <li>●	CTRL+X - Cut</li>
                        <li>●	F1 - Help</li>
                        <li>●	F4 - Possible entries or matchcode for the field you are accessing</li>
						<li>●	F5 - Selection screen</li>
                        <li>●	F7 - Previous screen</li>
                        <li>●	F8 - Next screen</li>
                        <li>●	F9 - Technical info</li>
                      </ul>
					  <p>Navigation</p><br>
					  <ul>
                        <li>●	/n Skip to the next record if you are processing one batch input session</li>
                        <li>●	/nend Close all R/3 sessions and logoff</li>
                        <li>●	/bend Cancel a batch input foreground process</li>
                        <li>●	/nxxx x Call the transaction xxxx in the same session</li>
                        <li>●	/o Generate a session list</li>
						<li>●	/i Delete the current session</li>
                        <li>●	/oxxx x Call the transaction xxxx in an additional session</li>
                        <li>●	/h Turn the debug mode on</li>
                        <li>●	/$tab Reset all buffers (for System Administrators)</li>
						<li>●	/$syn c Synchronize instances buffers (for System Administrators)</li>
                      </ul>
					  </p>
					  <p class="qus">5. Explain NetWeaver?</p>
                      <p class="ans">NetWeaver is an application builder from Netweaver for integrating databases and business processes from some sources while exploiting the leading Web services technologies. Part of the company's mySAP product group that can run on a single instance of NetWeaver known as SAP Web Application Server (SAP WEBAs).<br>
The benefit of using Netweaver is you can access SAP data using the web (http protocol) or even mobile. Thus you can save on costs involved in training users on SAP Client-side GUI. 
					  </p>
					  <p class="qus">6. List the Different Modules in SAP. </p>
                      <p class="ans">The different SAP Modules are<br>
                        <ul>
                        <li>●	FI (Financial Accounting) </li>
                        <li>●	CO (Controlling) </li>
                        <li>●	EAM (Enterprise Asset Management) </li>
                        <li>●	HR (Human Resource) </li>
                        <li>●	SD (Sales and Distribution) </li>
						<li>●	MM (Materials Management)</li>
                        <li>●	PP (Production Planning) </li>
                        <li>●	QM (Quality Management)</li>
                        <li>●	BW (Business Warehousing) </li>
                      </ul>
					  <p>There are many industry-specific solutions that SAP provides apart from the list of modules above which is ever growing.
					  </p>
					  <p class="qus">7. Mention what is the difference between OLAP and Data Mining?</p>
                      <p class="ans">OLAP: OLAP stands for Online Analytical Processing it is a reporting tool configured to understand your database schema, dimensions and composition facts<br>
Data Mining: It is an analytic process to explore data in search of consistent patterns or systematic relationship between variables.
					  </p>
					  <p class="qus">8. What is Metadata, Transaction data, and Master data </p>
                      <p class="ans">
                        <ul>
                        <li>●	Meta Data: Meta Data is data about Data. It states the structure of data or MetaObjects. </li>
                        <li>●	Transaction Data: This is data related to day to day transactions. </li>
                        <li>●	Master Data: This Data is key business information like Customer information, Employee, Materials, etc. This is more like a reference data. For Ex. If a customer orders ten units of your product instead of asking the customer for his shipping address ten times, the same can be referenced from the Customer Master Data.</li>
                      </ul>
					  </p>
					  <p class="qus">9. What are the different SAP products? </p>
                      <p class="ans">
                        <ul>
                        <li>●	SAP R/3 - It succeeds SAP R/2 and is the market leader in ERP. R/3 stands for three-tier architecture, i.e., Presentation, Logic, and Data tier. It has many modules like </li>
                        <li>●	SAP R/3 - It succeeds SAP R/2 and is the market leader in ERP. R/3 stands for three-tier architecture, i.e., Presentation, Logic, and Data tier. It has many modules like HR, SD, FI, etc. which encompass almost all enterprise departments. </li>
                        <li>●	mySAP - It is a suite of SAP products which apart from SAP R/3 also contains PLM, SRM, CRM, SCM</li>
                      </ul>
					  </p>
					  <p class="qus">10. Is SAP A Database? </p>
                      <p class="ans"> NO. The SAP is not a database, but it's an application that makes use of databases provided by other vendors like Oracle, SQL Server, etc. 
					  </p>
					  <p class="qus">11. What is a transaction in SAP terminology? </p>
                      <p class="ans"> In SAP terminology, a transaction is series of logically connected dialog steps.
					  </p>
					  <p class="qus">12. Can we run business warehouse without SAP R/3 implementation? </p>
                      <p class="ans">Yes, you can run business warehouse without R/3 implementation. You have to merely transfer structures associated with business warehouse data sources (ODS table, Infocube) to the inbound data files or use third-party tools to connect your flat files and other data sources. 
					  </p>
					  <p class="qus">13. Mention what do you mean by datasets? </p>
                      <p class="ans">The data sets are sequential files processed on the application server. They are used for file handling in SAP.
					  </p>
					  <p class="qus">14. How many SAP Sessions can you work on at a given time? </p>
                      <p class="ans">At given time for a particular client, you can work on six sessions at max.
					  </p>
					  <p class="qus">15. What are variables? </p>
                      <p class="ans">Variables are parameters of a query that are set in the parameter query definition and are not filled with values until the queries are entered into the workbooks.
					  </p>
					  <p class="qus">16. Mention the different types of variables? </p>
                      <p class="ans">Variables are used in different application<br>
                        <ul>
                        <li>●	Hierarchy nodes</li>
                        <li>●	Characteristics variable </li>
                        <li>●	Formulas</li>
                        <li>●	Hierarchies</li>
                        <li>●	Text</li>
						<li>●	Replacement Path</li>
                        <li>●	Processing Types</li>
                        <li>●	User entry/default type</li>
                      </ul>
					  </p>
					  <p class="qus">17. Mention where are the t-code name and program values stored? Explain how you can find a list of all t-codes in the SAP system?</p>
                      <p class="ans">To view transaction table TSTC you can use transaction code st11, and you can define a new t-code using transaction se93.
					  </p>
					  <p class="qus">18. Mention what are the main three stages of data-mining?</p>
                      <p class="ans">The three stages of data-mining include<br>
                        <ul>
                        <li>●	Initial Exploration</li>
                        <li>●	Model building</li>
                        <li>●	Deployment</li>
                      </ul>
					  </p>
					  <p class="qus">19. Mention some of the set-backs of SAP? </p>
                      <p class="ans">
                        <ul>
                        <li>●	It is expensive </li>
                        <li>●	Demands highly trained staff </li>
                        <li>●	Lengthy implementation time </li>
                        <li>●	Interfaces are a little bit complex </li>
                        <li>●	Does not determine where master data resides </li>
                      </ul>
					  </p>
					  <p class="qus">20. Mention what are the different layers in R/3 system?</p>
                      <p class="ans">
                        <ul>
                        <li>●	Different layers in R/3 system includes </li>
                        <li>●	Database layer </li>
                        <li>●	Presentation Layer </li>
                        <li>●	Application layer</li>
                      </ul>
					  </p>
					  <p class="qus">21. Explain what AWB is? </p>
                      <p class="ans">AWB stands for Administrator Workbench. It is a tool for controlling monitoring and maintaining all the processes connected with data staging and processing in the business information warehousing.
					  </p>
					  <p class="qus">22. Describe the process to create a table in the data dictionary? </p>
                      <p class="ans">
                        <ul>
                        <li>●	To create a table in the data dictionary, you have to follow this steps</li>
                        <li>●	Creating domains (data type, field length, range) </li>
                        <li>●	Creating data elements (Properties and type for a table field) </li>
                        <li>●	Creating tables (SE 11)</li>
						</ul>
					  </p>
					  <p class="qus">23. Explain the significance of ODS in BIW? </p>
                      <p class="ans">An ODS Object serves to store consolidated and debugged transaction data on a document level. It defines a consolidated dataset from one or more InfoSources. This dataset can be analyzed with an InfoSet Query or BEx Query. The data of an ODS Object can be updated with a delta update into InfoCubes and other ODS Objects in the same system or across systems. In contrast to multi-dimensional data storage with InfoCubes, the data in ODS Objects is stored in transparent, flat database tables.
					  </p>
					  <p class="qus">24. Tell the difference between Domain and Data Element? </p>
                      <p class="ans">
                        <ul>
                        <li>●	Data Element: It is an intermediate object between domain and table type</li>
                        <li>●	Domain: It describes the attributes such as length, type, and possible value range</li>
						</ul>
					  </p>
					  <p class="qus">25. What is WF? Explain its importance? </p>
                      <p class="ans">Business Work Flow: Tool for automatic control and execution of cross-application processes. This involves coordinating the persons involved, the work steps required, the data, which needs to be processed (business objects). The main advantage is a reduction in throughput times and the costs contain in managing business processes. Its use enhances transparency and quality.
					  </p>
					  <p class="qus">26. Give Explanation of SET parameters and GET parameters? </p>
                      <p class="ans">To use parameter IDs, you need to "set" values in the global memory area and then "get" values from this parameter ID memory area. In the case of the online program, you have to "Set" values from screen fields, and you will "get" these values for screen fields.
					  </p>
					  <p class="qus">27. Mention what is IDOC, ALE, RFC, EDI, and explain briefly?</p>
                      <p class="ans">
                        <ul>
                        <li>●	ALE: Application Linking enabling</li>
                        <li>●	IDOC: Intermediary documents</li>
                        <li>●	EDI: Electronic data interchange</li>
                        <li>●	RFC: Remote function call</li>
						</ul>
					  </p>
					  <p class="qus">28. Define LUW (Logical Unit Of Work)?</p>
                      <p class="ans">LUW is a span of time during which database records are updated either commit or rollback.
					  </p>
					  <p class="qus">29. Mention what is BDC? How many methods of BDC there are? </p>
                      <p class="ans"> BDC stands for Batch Data Communication. The methods of BDC are <br>
                        <ul>
                        <li>●	Batch Input Session Method </li>
                        <li>●	Direct Input Method </li>
                        <li>●	Call Transaction Method</li>
						</ul>
					  </p>
					  <p class="qus">30. Mention what is meant by a "baseline data" in SAP AR and AP?</p>
                      <p class="ans">The baseline date is the date on which the payment terms apply. Usually, it is the document date on the invoice but can also be the date of entry or posting date from the ledger.
					  </p>
					  <p class="qus">31. What do you mean by one-time vendors? </p>
                      <p class="ans">In specific industries, it is not possible to create new master records for every vendor trading partner. One-time vendor enables for a dummy vendor code to be used on invoice entry, and the information that is generally stored in the vendor master is keyed on the invoice itself.
					  </p>
					  <p class="qus">32. Mention what are the standard stages of the SAP Payment Run? </p>
                      <p class="ans">While executing the SAP Payment Run the standard stages of SAP includes<br>
                        <ul>
                        <li>●	Entering of parameters: It involves entering company codes, vendor accounts, payment methods, etc. </li>
                        <li>●	Proposal Scheduling: The system proposes list of invoices to be paid</li>
                        <li>●	Payment booking: Booking of the actual payments into the ledger</li>
                        <li>●	Printing of Payment forms: Printing of payment forms </li>
                      </ul>
					  </p>
					  <p class="qus">33. Mention what is the difference between the "residual payment" and "partial payment" methods of allocating cash in account receivable? </p>
                      <p class="ans">The main difference between the residual and partial payment includes: <br>
                        <ul>
                        <li>●	Residual Payment: While in residual payment, invoice A456 is cleared for the full value $100 and a new invoice line item is produced for the remaining balance of $30. </li>
                        <li>●	Partial payment: For example, let say invoice A456 exits for $100, and the customer pays $70. With the partial payment, it offsets the invoice leaving a remaining balance $30</li>
						</ul>
					  </p>
					  <p class="qus">34. Describe internal tables, value tables, check tables, and transparent table. </p>
                      <p class="ans">It is the standard data type object; it exists only throughout the runtime of the program.<br>
                        <ul>
                        <li>●	Internal table will exist with the same structure both in the dictionary as well as in the database exactly with the same data and fields </li>
                        <li>●	Value table will be at domain level checking</li>
                        <li>●	Check table will be at field level checking</li>
						</ul>
					  </p>
					  <p class="qus">35. Explain an application, presentation, and database servers in SAP R/3.</p>
                      <p class="ans">The application layer of an R/3 system is made up of the application server and the message server. Application programs in an R/3 system run on application servers. Using the message server, the application servers communicate with presentation components, the database and also with each other. All the data are stored in a centralized server, which is known as a database server.
					  </p>
					  <p class="qus">36. Why do you choose to implement SAP? </p>
                      <p class="ans">There are many technical reasons numbers of companies are planning to implement SAP. It’s highly configurable, highly secure data handling, min data redundancy, max data consistency; you can capitalize on the economics of sales like purchasing, tight integration-cross function.
					  </p>
					  <p class="qus">37. Explain the difference between SAP BASIS and SAP ABAP</p>
                      <p class="ans">
                        <ul>
                        <li>●	SAP Basis is, the administration module of SAP used to control code changes, upgrades, database admin, network setup, etc. while</li>
                        <li>●	SAP ABAP is the programming language used within SAP to customize, generate reports, generate forms, etc.</li>
						</ul>
					  </p>
					  <p class="qus">38. Mention the different types of the source system in SAP?</p>
                      <p class="ans">The different types of the source system in SAP includes<br>
                        <ul>
                        <li>●	SAP BW</li>
                        <li>●	SAP R/3 source system </li>
                        <li>●	Flat files</li>
                        <li>●	External Systems</li>
						</ul>
					  </p>
					  <p class="qus">39. Explain what a company in SAP is?</p>
                      <p class="ans">The company in SAP is the highest organizational unit for which financial statements like profit and loss statements, balance sheets can be drawn according to the requirement of organizations. A single company contains one or many company codes. All the company codes in SAP must use same COA (chart of accounts) and fiscal year.
					  </p>
					  <p class="qus">40. Explain what should be the method of writing a BDC program?</p>
                      <p class="ans">The method of writing BDC program is to<br>
                        <ul>
                        <li>●	Create recording</li>
                        <li>●	Convert the legacy system data to a flat file into the internal table referred as "Conversion."</li>
                        <li>●	Transfer the Flat file into the SAP system called "SAP Data Transfer."</li>
                      </ul>
					  <p>Depending upon the BDC type CALL TRANSACTION or CREATE SESSIONS
					  </p>
					  <p class="qus">41. Explain what is Extended Star Schema?</p>
                      <p class="ans">The star schema consists of the fact tables and the dimension tables. The master data related tables are kept in separate tables, which has reference to the characteristics in the dimension tables. These separate tables for master data are termed as the Extended Star Schema.
					  </p>
					  <p class="qus">42. Mention the benefits of reporting with BW over R/3.</p>
                      <p class="ans">Business Warehouse uses a data warehouse and OLAP concepts for analyzing and storing data While the R/3 was intended for transaction processing. You can get the same analysis out of R/3, but it would be easier from a BW.
					  </p>
					  <p class="qus">43. Mention Reason behind codes used in Account Receivable.</p>
                      <p class="ans">"Reason Codes" are tags that can be assigned to describe under/overpayments during the allocation of incoming customer payments. They should not be mixed up with "void reason codes" used when outgoing cheques are produced.
					  </p>
					  <p class="qus">44. Mention the two types of services that are used to deal with communication</p>
                      <p class="ans">You can use two types of services<br>
                        <ul>
                        <li>●	Gateway Service: This service allows communication between R/3 and external applications using CPI-C protocol.</li>
                        <li>●	Message Service: To exchange short internal messages, this service is used by the application servers</li>
                      </ul>
					  </p>
					  <p class="qus">45. Mention what are the common transport errors?</p>
                      <p class="ans">The common transport errors include<br>
                        <ul>
                        <li>●	Return code 4: Imported with warnings, generation of program, columns or row missing</li>
                        <li>●	Return code 8: Imported with a syntax error, program generation error, dictionary activation error, etc.</li>
						</ul>
					  </p>
					  <p class="qus">46. Describe the concept of “Business Content” in SAP Business Information Warehouse?</p>
                      <p class="ans">Business Content is a pre-configured set of the role and task-relevant information models based on consistent Metadata in the SAP Business Information Warehouse. Business Content provides selected roles within a company with the information they need to carry out their tasks. These information models essentially contain roles, workbooks, queries, InfoSources, InfoCubes, key figures, characteristics, update rules and extractors for SAP R/3, Business Applications, and other selected applications.
					  </p>
					  <p class="qus">47. Mention what pooled tables is?</p>
                      <p class="ans">Pooled tables are used to store control data. A number of pooled tables can be united to form a table pool. Table tool is a physical table on the database in which all the records of the allocated pooled tables are stored.
					  </p>
					  <p class="qus">48. What is an update type concerning a match code ID?</p>
                      <p class="ans">If the data in one of the base tables of a matchcode ID changes, the matchcode data has to be updated. The update type stipulates when the match-code has to be updated and how it has to be done. The update type also defines which method is to be used for making match-codes.
					  </p>
					  <p class="qus">49. Explain what is a dispatcher?</p>
                      <p class="ans">The dispatcher is a component that takes the request for client systems and stores the request in the queue.<br>
                        <ul>
                        <li>●	Return code 12: Indicates import cancelled due to object missing, object not active, etc.</li>
                        <li>●	Return code 18: Indicates import cancelled due to system down while import, user expired during import and insufficient roles or authorization</li>
                      </ul>
					  </p>
					  <p class="qus">50. Explain what the .sca files and mention their importance.</p>
                      <p class="ans">.sca stands for SAP component Archive. It is used to deploy the Java components, patches and other java developments in the form of .sca,.sda,.war and .jar.
					  </p>
					  <p class="qus">51. Mention what is the protocol does SAP Gateway process use?</p>
                      <p class="ans">The SAP gateway process uses TCP/IP protocol to communicate with the clients.
					  </p>
					  <p class="qus">52. Explain what is Extractor?</p>
                      <p class="ans">In the SAP source system, extractors are a data retrieval mechanism. It can fill the extract structure of a data source with the data from the SAP source system datasets.
					  </p>
					  <p class="qus">53. Direct Input Method</p>
                      <p class="ans">Batch Input Session Method
Call transaction Method
Mention what is meant by a “baseline data” in SAP AR and AP?
The baseline date is the date from which the payment terms apply. Usually, it is the document date on the invoice but can also be the date of entry or posting date from the ledger.
					  </p>
					  <p class="qus">54. Explain what is Bex?</p>
                      <p class="ans">Bex means Business Explorer. It allows the end-user to locate reports, analyze information, view reports, and can execute queries. The queries in the workbook can be saved to their respective roles in the Bex browser. It has the following components Bex analyzer, Bex Map, and Bex web.
					  </p>
					  <p class="qus">55. Differentiate Salesforce and SAP.</p>
                      <table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Salesforce</th>
							  <th scope="col">SAP</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Salesforce offers a comprehensive CRM(Customer Relationship Management) tool with all features included in a single plan and provides different products and software solutions to the developers and users.</td>
							  <td>SAP CRM is the most popular ERP software that offers tools that can be used by businesses in a large range of industries and allows users to select the required functions.</td>
							</tr>
							<tr>
							  <td>Salesforce uses the Cloud-based deployment model and does not support On-premise deployment.</td>
							  <td>SAP uses a cloud-based deployment model and supports On-premise deployment.</td>
							</tr>
							<tr>
							  <td>For using Salesforce CRM’s premium features, an additional amount has to be paid.</td>
							  <td>Any additional charges are not required for SAP, we need to pay for the perceptual licenses yearly maintenance and support.</td>
							</tr>
							<tr>
							  <td>Salesforce provides the “Get Started” guide to the customers, which is included in the subscription fee. The user has to purchase the different guides or customization training.</td>
							  <td>In SAP, the user needs to purchase the online training module and certification.</td>
							</tr>
						  </tbody>
						</table>
					  <p class="qus">56. Differentiate between Open SQL and Native SQL?</p>
                      <table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Open SQL</th>
							  <th scope="col">Native SQL</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>It has ABAP specific(Cross-database) SQL statements</td>
							  <td>It has database-specific SQL statements</td>
							</tr>
							<tr>
							  <td>It has ABAP specific(Cross-database) SQL statements
It can operate only on tables that were created in the ABAP dictionary(SE11)
</td>
							  <td>It has database-specific SQL statements
It can be used on the database tables that are not being administered by ABAP dictionary
</td>
							</tr>
							<tr>
							  <td>It supports for buffering of tables in an SAP Application server</td>
							  <td>It does not support for buffering of tables in the SAP Application server</td>
							</tr>
							<tr>
							  <td>It supports conjunction with ABAP constructions that simplify or speed up access</td>
							  <td>It does not support conjunction with ABAP constructions that simplify or speed up access</td>
							</tr>
						  </tbody>
						</table>
					  <p class="qus">57. What is code pushdown in SAP?</p>
                      <p class="ans">Code pushdown means transferring data-intense calculations to the database layer. ALL calculations will not be pushed into the database, only required calculations will be considered. For example, if you wish to do the calculation for finding the amount of all positions of invoices, it is not mandatory to select all positions of those invoices and perform the calculation of sum using a loop. By using an aggregation function(SUM()) on the database you can easily do this.
					  </p>
					  <p class="qus">58. What is SAP S/4HANA?</p>
                      <p class="ans">SAP S/4HANA(SAP Business Suite 4 SAP HANA) is an ERP software package based on the SAP HANA(in-memory database) and it permits companies for doing ERP transactions and analyzing the business data in real-time. S/4HANA can be easily used and administered during complex problem solving and handling a huge quantity of data than its predecessors. It is provided in on-premises, cloud and hybrid deployment models along with SAP is forcing its customers for opting the cloud. SAP S/4HANA is used by organizations mainly for integrating and managing business functions like sales, finance, procurement, human resources, service, and manufacturing in real-time.
					  </p>
					  <p class="qus">59. Differentiate between S/4HANA On-premise and S/4HANA Cloud in SAP.</p>
                      <table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Characteristics</th>
							  <th scope="col">S/4HANA On-premise</th>
							  <th scope="col">S/4HANA Cloud</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <th scope="col">Licencing model</th>
							  <td>It has a Traditional licensing model where a preliminary price will be paid by an entity for obtaining the software with an annual maintenance charge.</td>
							  <td>It has a Subscription licensing model where subscription price per month or quarterly will be paid by an entity.</td>
							</tr>
							<tr>
							  <th scope="col">Infrastructure and Maintenance model</th>
							  <td>With the help of dedicated own IT staff, the customer is in control of deployment and maintenance.</td>
							  <td>SAP provides the system and also it is responsible for the system maintenance.</td>
							</tr>
							<tr>
							  <th scope="col">Implementation approach</th>
							  <td>Highly individual requirements regarding business processes and customization</td>
							  <td>Pre-defined best-practice configuration with limited specialization.</td>
							</tr>
							<tr>
							  <th scope="col">Functional scope</th>
							  <td>Full ERP Scope, SAP JAM and SAP Ariba network, integration with SAP Hybris Marketing.</td>
							  <td>Embedded ERP scenarios, key scenarios, SAP fieldglass, integration with SAP SuccessFactors Employee Central, SAP JAM and SAP Ariba network, integration with SAP Hybris Marketing.</td>
							</tr>
							<tr>
							  <th scope="col">Speed of Innovation</th>
							  <td>Customer has complete control over the speed of innovation, planned downtimes, changes within the system, etc.</td>
							  <td>Customers automatically participate in quarterly innovation upgrades</td>
							</tr>
						  </tbody>
						</table>
					  <p class="qus">60. Explain about SAP portal.</p>
                      <p class="ans">
                        <ul>
                        <li>●	SAP Enterprise Portal(SAP EP) provides users with web-based, role-specific, and also provides secure access to all the services, information, and applications in SAP environments. Employees require only a desktop and a Web Browser, and can start with work immediately after authentication in the portal has been completed. It contains the NetWeaver components Portal, Collaboration, and Knowledge Management. Pre-defined content is also provided by the SAP. Currently, the portfolio is having more than 100 business packages, which can be shipped in many languages.</li>
                        <li>●	The major advantage of using this portal is that you are allowed to use multiple JSP(Java Server Pages) pages at a time. Here you can have separate views and each view can be a JSP page or a web page that supports interaction with the J2EE server so that multiple works can be handled on the same page.</li>
						</ul>
					  </p>
					  <p class="qus">61. Explain about SAP launchpad.</p>
                      <p class="ans">SAP launchpad simplifies access to business applications with a personalized as well as role-based launchpad site. This service will allow an organization for establishing a central point of access to SAP(Example: SAP S/4HANA), custom-built, third-party applications, etc., both on the on-premise and the cloud.
The SAP Launchpad service provides the following features:<br>
                        <ul>
                        <li>●	Application Integration: It provides a central point of access for tasks and applications, with limitless integration to different UI technologies and third-party applications.</li>
                        <li>●	Intuitive and Engaging User Experience: It gives a personalized and role-based launchpad along with a content structure(flexible)that follows the SAP Fiori 3 design guidelines.</li>
                        <li>●	Integrations: It has an integration with central SAP BTP(Business Technology Platform) services like inbox and cloud identity services.</li>
                        <li>●	Extensibility: It is considered an extensible framework for customizations with the help of shell plugins and custom branding.</li>
						</ul>
					  </p>
					  <p class="qus">62. How can we create an OLAP(Online Analytical Processing) connection in CMC(Central Management Console)?</p>
                      <p class="ans">From SAP BO 4.0(SAP Business Objects 4.0) onwards it is allowed to connect BEx query through BICS(Business Intelligence Consumer Services) connection which is also called OLAP connection. With the help of CMC(Central Management Console) or IDT(Information Design Tool), it is possible to create and save the OLAP connection. This OLAP connection can be created for connection with the Multi-provider, BI(Business Intelligence) server, InfoCube, and BEx query. If the connection is specific for a particular Cube, Query, or Multi-provider then the connection will be created in query or cube base. Otherwise, the connection will be created on the BI server using which connection to any BEx query is possible. The advantage of Connection creation on the BI server is only a single OLAP connection is required for all BO reports.<br>
Steps for creating OLAP connection to connect with BI server:<br>
                        <ul>
                        <li>●	Login to CMC with the right of Administrator authorization and go for the OLAP Connection option.</li>
                        <li>●	Then select the option new connection.</li>
                        <li>●	Enter the details of the BI server as given in the below screenshot.</li>
                        <li>●	Click on Connect button for checking connectivity and give the credential of the BI server.</li>
                        <li>●	Don’t go for a selection of any cube or query as we are making the connection to the BI server, click on cancel.</li>
						<li>●	Select ‘Predefined’ for Authentication Type and maintain the user name and password, then click on save.</li>
                      </ul>
					  <p><img src="<?= base_url(); ?>assets/img/olap.png" style="width:500px;" /><br>
					  Now, OLAP Connection to the BI server has been successfully created using CMC.
					  </p>
					  <p class="qus">63. What is the posting key?</p>
                      <p class="ans">The posting key is a two-digit numeric key used for determining the type of transaction which is entered in the line item. It determines account types(A–>Assets, D–>Customers, K–>Vendors, M–>Materials, S–>General Ledger Account), the layout of entry screens, and types of posting(Debit or Credit). Special posting keys are useful in posting special General ledger transactions.<br>
Posting keys scenarios are:<br>
                        <ul>
                        <li>●	The standard SAP system is responsible to deliver the standard posting key, and you will be enabled for using the standard posting and change or modify it as per the business organization requirement.</li>
                        <li>●	Posting keys provided in the SAP will control the entries in a line item of document entries.</li>
                        <li>●	It decides about the account type to post, that is, whether the amount is supposed to be posted on the credit side or debit side.</li>
                      </ul>
					  </p>
					  <p class="qus">64. What is the Information model?</p>
                      <p class="ans">Information model consists of Analytic, Attribute, and Calculation views and it is mainly used for hiding the technicalities of data selection so that it becomes easier for the business users to model their data who are having only functional knowledge about a database and doesn’t have any technical knowledge. So we can say that the information model hides the complexity and overcomes a few setbacks with the queries.<br>
Information models are:<br>
                        <ul>
                        <li>●	Used for converting the linear structure into a multi-dimension structure without having technical knowledge.</li>
                        <li>●	Process of source data(in tables) conversion into the format that is business understandable.</li>
                        <li>●	Make use of Hardware advancements available in HANA.</li>
                        <li>●	It is possible to reduce the data transfer between the database and application layer by defining information models inside HANA DB.</li>
                        <li>●	Having Complex logic and also transformation executed in DB layer.</li>
                      </ul>
					  </p>
					  <p class="qus">65. What do you mean by transactional RFC?</p>
                      <p class="ans">Transactional RFC(Transactional Remote Function Call) allows giving out of the sent request for a mistake in the system for a once. This is done after the allocation of an ID for the transaction procedure which is also called TID(Transaction ID). The remote system access is not necessary during the present moment in the Transaction RFC.
					  </p>
					  <p class="qus">66. What are the advantages of SQL script?</p>
                      <p class="ans">
                        <ul>
                        <li>●	SQL scripts are easier to use because they can be saved and loaded whenever it is needed.</li>
                        <li>●	It reduces the number of errors as there are no manually entered commands that are prone to human errors.</li>
                        <li>●	We can schedule the SQL script to run at a convenient time, or when a human is not present.</li>
                        <li>●	For holding the interim result, a local variable can be declared in a SQL script.</li>
                        <li>●	SQL Script Procedure can return more than one result with the help of the “OUTPUT Parameter”, while the Normal SQL Procedure can return only one result.</li>
						<li>●	You are permitted to define local or global tables types that can be used as parameters in a SQL script.</li>
                      </ul>
					  </p>
					  <p class="qus">67. How can I prepare for SAP interview?</p>
                      <p class="ans">With SAP-based career opportunities offering higher pay and rewarding benefits to those with the relevant technical ability, it’s no wonder the field is becoming increasingly saturated with talent.<br>
Here are some points on how to prepare for SAP interview questions:<br>
                        <ul>
                        <li>●	Research the Job</li>
                        <li>●	Research the company</li>
                        <li>●	Find out the expected Interview format</li>
                        <li>●	Research the interviewers</li>
                        <li>●	Prepare some questions for the interviewers</li>
						<li>●	Go through your Resume in detail before the interview</li>
                        <li>●	Provide references/exhibits with an example of your work</li>
                        <li>●	Be Mentally Prepared</li>
                        <li>●	End on a strong note</li>
                      </ul>
					  <p>If you prepare on the above-mentioned points properly, then definitely you can crack the SAP interview easily.
					  </p>
					  <p class="qus">68. How many interview rounds are there in SAP India?</p>
                      <p class="ans">The interview process in SAP India will generally involve the following three rounds:<br>
                        <ul>
                        <li>●	Online Assessment Test</li>
                        <li>●	Technical Interview</li>
                        <li>●	Managerial Interview</li>
                        <li>●	HR Interview</li>
                      </ul>
					  <p>For both freshers and experienced candidates, the interview rounds will usually remain the same as mentioned above. But in the case of some prominent roles or based on your experience level, you may have to face two or more rounds of technical interviews followed by an HR interview.
					  </p>
					  <p class="qus">69. Are SAP Labs and SAP India the same?</p>
                      <p class="ans">No. SAP Labs India is a Research and Development wing related to SAP and is responsible for SAP software development and maintenance. While SAP India is a consulting wing and is responsible for consulting and implementation of this SAP software to numerous customers or clients.
					  </p>
					  <p class="qus">70. What is the SAP course?</p>
                      <p class="ans">SAP is a very larger area and is divided into various functional modules. When enrolling for an SAP course, you must know about what you want to study and specialize yourself in. You are allowed to obtain SAP Certification as a part of a degree or through a stand-alone course. SAP Course trained person is capable of creating information warehouses, designing input screens, and accessing data tables. A lot of programs can be associated with this SAP software but SAP ERP is the most popular among all of them.
					  </p>
					  <p class="qus">71. How can I be able to get a job in SAP?</p>
                      <p class="ans">The SAP market is very competitive than ever. Companies often have several candidates to select from for any given SAP position. So here below are a few tips that can help you stand out from the crowd and enhance your chances of being selected for SAP jobs.<br>
                        <ul>
                        <li>●	Network/connect with colleagues who work on SAP technologies.</li>
                        <li>●	Keep up-to-date with the recent SAP developments.</li>
                        <li>●	Contact good SAP recruitment agencies.</li>
                        <li>●	Make sure that your CV is mentioning about all the SAP relevant skills that you possess.</li>
                      </ul>
					  </p>
					  <p class="qus">72. What is the salary of SAP Developers in India?</p>
                      <p class="ans"> India, the average salary of a SAP Developer is around Rs. 5 Lakhs per annum. Salaries differ according to the location in which one works, as well as the function and duties one does in the company.
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