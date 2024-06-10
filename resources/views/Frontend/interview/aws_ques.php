<style>
p.qus {
    font-size: 17px;
    font-weight: bold;
  	margin-top: 20px;
}
tbody, ol{
	text-align: initial;
}
</style>

<section class="featured-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="about-content pr-70 rpr-0 wow fadeInRight delay-0-2s">
					<div class="section-title mb-35">
						<h3>AWS Interview Questions and Answers</h3>
						<p class="qus">1. What is AWS?</p>
						<p class="ans">Amazon Web Services (AWS) is a Comprehensive Cloud platform that offers more than 165 services such as database storage, content delivery, security infrastructure, etc., from data centers worldwide. The robust infrastructure and agility at low costs are important reasons for its adoption from startups to large scale enterprises.</p>
                      
                      <p class="qus">2. What is Cloud Computing?</p>
						<p class="ans">Cloud computing provides various features of a computer in a comprehensive platform via the internet. Cloud computing offers computing power, database, software, storage, applications, security, etc. at reduced costs and improves performance. With Cloud computing, huge investments in hardware and software are reduced drastically and pay only for the services utilized.</p>
                      
                      <p class="qus">3. What is a Container?</p>
						<p class="ans">Containers help to package software’s code and configuration into an object. Containers utilize the OS installed on the server and ensures stable, consistent and speedy deployment independent of the environment.</p>
                      <p class="ans">AWS Cloud provides the resources to run containers and also offers orchestration services for building and operating applications that are packed in containers.</p>
                      <p class="ans">This is predominantly useful in DevOps based processes supported by AWS.</p>
					  <p class="qus">4. What is a Data lake?</p>
					  <p class="ans">Data Lake is a repository to store structured and unstructured data of any scale. They are mainly utilized in Big Data and Data Science since we can store data in its original form without any need to structure the Data and it is possible to perform various analysis to arrive at better solutions.</p>
					  <p class="qus">5. What is the difference between Data Warehouse and Data Lake?</p>
					  <table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Data Warehouse</th>
							  <th scope="col">Data Lake</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Data is relational from transactional systems and operational databases.</td>
							  <td>Data is both non-relational and relational from various sources such as IoT devices, mobile apps, websites, and social media.</td>
							</tr>
							<tr>
							  <td>Provides fastest query results at high cost of storage.</td>
							  <td>Provides faster query results at low storage cost.</td>
							</tr>
							<tr>
							  <td>Used by Business analysts.</td>
							  <td>Used by Data scientists, Data developers, and Business analysts.</td>
							</tr>
							<tr>
							  <td>Helps in Batch reporting, BI and visualizations</td>
							  <td>Helps to perform various analytics such as Machine Learning, Predictive analytics, data discovery and profiling</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">6. What are the main components of AWS?</p>
						<p class="ans">The key components of AWS are:<br>
<ol>						
<li>●	Simple Email service</li>
<li>●	Route 53</li>
<li>●	Simple Storage Device S3</li>
<li>●	Elastic compute cloud( EC2)</li>
<li>●	Elastic Block Store</li>
<li>●	Cloud watch</li>
</ol>
						</p>
						<p class="qus">7. What is S3?</p>
						<p class="ans">S3 implies the Simple Storage Service. S3 refers to a storage service capable of storing volumes of data from anywhere around the globe. For utilising S3 one can pay only for the usage in the Pay-as-you-go model of payment. AWS Course helps students to clearly understand key components of AWS such as S3.
						</p>
						<p class="qus">8. What is the importance of buffer in AWS?</p>
						<p class="ans">A buffer helps to integrate and synchronize various components in AWS and helps to maintain equilibrium by linking multiple apparatus to deliver quick services at a uniform rate.
						</p>
						<p class="qus">9. Explain the various storage classes available in S3?</p>
						<p class="ans">The various storage classes available in S3 are listed below.<br>
<ol>						
<li>●	Standard frequency accessed</li>
<li>●	RRS – reduced redundancy storage</li>
<li>●	Standard infrequency accessed</li>
<li>●	One-zone infrequency accessed</li>
<li>●	Glacier.</li>
</ol>
						</p>
						<p class="qus">10. What is Snowball?</p>
						<p class="ans">Snowball is a transporting option available in AWS to transport the data in and out of AWS. Snowball helps to transfer immense data at low networking cost.
						</p>
						<p class="qus">11. What are key-pairs?</p>
						<p class="ans">Key Pairs are used to connect to the virtual machines. The secure login credentials used to connect to virtual machines are known as Key pairs.
						</p>
						<p class="qus">12. What are the types of volumes in EBS?</p>
						<p class="ans">Various types of Volumes in EBS are listed below.<br>
<ol>						
<li>●	General-purpose</li>
<li>●	Magnetic</li>
<li>●	Provisioned IOPS</li>
<li>●	Cold HDD</li>
<li>●	Throughput optimized</li>
</ol>
						</p>
						<p class="qus">13. What is the total number of buckets that can be created in AWS by default ?</p>
						<p class="ans">One Hundred(100) buckets can be created in each AWS account by default. We can also increase the number of buckets by submitting a request form to Amazon.
						</p>
						<p class="qus">14. List some important features of a classic load balancer in EC2.</p>
						<p class="ans">Distributes traffic among various EC2 instances evenly and ensures high scalability for the incoming traffic.<br>
Load balancer decides on routing the traffic by accessing the health of the systems.<br>
Load Balancer can route traffic from a user to the same Virtual Machine for any number of instances for a hasslefree experience.
						</p>
						<p class="qus">15. Can we use Amazon Transfer acceleration and Snowball to transfer data across countries?</p>
						<p class="ans">Amazon Transfer Acceleration can accelerate Data Transfer by 300% with the help of amazon content delivery network and optimised networks. Whereas Snowball is not compatible to support Cross Region data transfer.
						</p>
						<p class="qus">16. List various connection issues faced while connecting to an EC2 instance.</p>
						<p class="ans">
<ol>						
<li>●	Server refusing Key</li>
<li>●	Connection timeout</li>
<li>●	unprotected Private Key</li>
<li>●	Host Key missing</li>
<li>●	User Key unrecognised</li>
</ol>
						</p>
						<p class="qus">17. What is an AMI?</p>
						<p class="ans">Amazon Machine Image contains various software configurations, block device mapping for allocating volumes to the virtual machine and launch permissions.
						</p>
						<p class="qus">18. What is an EIP?</p>
						<p class="ans">An elastic IP address is useful for dynamic cloud computing where we can stop and restart the instances multiple times.
						</p>
						<p class="qus">19. What is Cloudwatch?</p>
						<p class="ans">Cloudwatch is helpful to monitor various features of the AWS such as networks, storage, applications, the health of the systems, etc.
						</p>
						<p class="qus">20. What are the types in cloudwatch?</p>
						<p class="ans">Basic- Free service<br>
Detailed – Charged service<br>
						</p>
						<p class="qus">21. List the cloudwatch metrics that are available for EC2 instances.</p>
						<p class="ans">Various Cloudwatch metrics available for EC2 instances are mentioned below.<br>
<ol>						
<li>●	CPU utilisation</li>
<li>●	CPU credit usage</li>
<li>●	CPU credit balance</li>
<li>●	networkIn</li>
<li>●	networkOut</li>
<li>●	Diskreads</li>
<li>●	Diskwrites</li>
</ol>
						</p>
						<p class="qus">22. What are the different storage classes in S3?</p>
						<p class="ans">Different types of storage classes in S3 are listed below.<br>
<ol>						
<li>●	Glacier</li>
<li>●	One-zone infrequently accessed.</li>
<li>●	Standard infrequently accessed</li>
<li>●	Standard frequently accessed</li>
<li>●	RRS – reduced redundancy storage</li>
</ol>
						</p>
						<p class="qus">23. List various parameters involved in S3 pricing.</p>
						<p class="ans">The parameters determining the S3 pricing are listed below.<br>
<ol>						
<li>●	Data transfer</li>
<li>●	Storage utilised</li>
<li>●	Transfer acceleration</li>
<li>●	Storage management</li>
<li>●	Number of requests</li>
</ol>
						</p>
						<p class="qus">24. Methods to encrypt data in S3.</p>
						<p class="ans">Various methods used to encrypt data in S3 are listed below.<br>
<ol>						
<li>●	C (Client-Side)</li>
<li>●	S3 (AES 256 encryption)</li>
<li>●	KMS (Key Management Service)</li>
</ol>
						</p>
						<p class="qus">25. What is the prerequisite for Cross-region replication in S3?</p>
						<p class="ans">The source and destination buckets should be in different regions and versioning must be enabled at both the source and destination.
						</p>
						<p class="qus">26. Explain Policies.</p>
						<p class="ans">Policies refer to permissions attached to the created users to access AWS account.
						</p>
						<p class="qus">27. List the Types of Policies</p>
						<p class="ans"><ol><li>●	Inline policies</li>
<li>●	Managed policies</li>
</ol>
						</p>
						<p class="qus">28. What is CloudFront?</p>
						<p class="ans">Cloudfront refers to an AWS service that can effectively distribute the content of businesses and app developers with low latency at high-speed.
						</p>
						<p class="qus">29. What are the Roles?</p>
						<p class="ans">Roles are users with different accounts who help to permit trustable entities to an AWS account. There is no necessity to create login credentials for Roles to work on the resources.
						</p>
						<p class="qus">30. What are the Edge locations?</p>
						<p class="ans">Edge Location refers to the location where the contents are cached and can be useful when users access the content. If the searched content is unavailable in edge locations, the content will be created from an origin location and a copy of it will be saved in the edge locations.
						</p>
						<p class="qus">31. What is archive storage capacity in Glacier?</p>
						<p class="ans">Individual archives can be stored up to a maximum of 40 TB in Glacier.
						</p>
						<p class="qus">32. What is VPC?</p>
						<p class="ans">Virtual Private Cloud(VPC) helps the users to customise and configure networks easily. VPC permits users to have their internet gateways, Subnets, Nat Gateways and IP address range; isolated from other networks in the cloud.
						</p>
						<p class="qus">33. What is a VPC peering connection?</p>
						<p class="ans">VPC peering connection allows users to connect two or more Virtual Private Clouds and the instances in the connected VPC function coherently.
						</p>
						<p class="qus">34. How the security of VPC can be controlled?</p>
						<p class="ans">Security groups and Network Access Control List (NACL) can be utilised to regulate the security of a Virtual Private Cloud.
						</p>
						<p class="qus">35. What are NAT gateways?</p>
						<p class="ans">Network Address Translation gateways help the instances to be connected to the internet. NAT Gateways serve as a one-way traffic regulator since they prevent any initiation of a connection from the Internet to the instances.
						</p>
						<p class="qus">36. What are the different types of storage gateway?</p>
						<p class="ans">Various types of Storage Gateways are listed below.<br>
<ol>						
<li>●	Tape gateway</li>
<li>●	Volume gateway</li>
<li>●	File gateway</li>
</ol>
						</p>
						<p class="qus">37. What is a redshift?</p>
						<p class="ans">Redshift is a data warehouse product of Amazon that provides fast and powerful services; completely manageable petabyte-scale warehouse.
						</p>
						<p class="qus">38. What are the database types in RDS?</p>
						<p class="ans">The Database types in RDS are listed below:<br>
<ol>						
<li>●	MYSQL server</li>
<li>●	Oracle</li>
<li>●	SQL server</li>
<li>●	Postgresql</li>
<li>●	Aurora</li>
<li>●	MariaDB</li>
</ol>
						</p>
						<p class="qus">39. What are the various Routing Policies in route53?</p>
						<p class="ans">List of various Routing Policies in route53.<br>
<ol>						
<li>●	Simple routing</li>
<li>●	Multivalue answer</li>
<li>●	Geolocation routing</li>
<li>●	Latency routing</li>
<li>●	Weighted routing</li>
<li>●	Failover routing</li>
</ol>
						</p>
						<p class="qus">40. What is SNS?</p>
						<p class="ans">Simple Notification Service(SNS) is a web service under AWS that notifies the user of any activity in the cloud that requires attention through mail or messages as desired by the user.
						</p>
						<p class="qus">41. What is multi-AZ RDS?</p>
						<p class="ans">Multi-AZ RDS is helpful to make a replica of the production database to be available in other availability zones. They come handy in case of disaster recovery and primary database shutdown, to have a complete set of database as a backup.
						</p>
						<p class="qus">42. What are the types of backups in the RDS database?</p>
						<p class="ans">Types of backups in the RDS database.<br>
<ol>						
<li>●	Automated</li>
<li>●	Manual (also known as snapshots)</li>
</ol>
						</p>
						<p class="qus">43. Explain the usage of Classic Load Balancer and Application Load Balancer.</p>
						<p class="ans">Classic Load Balancer is designed for simple load balancing of traffic whereas Application Load Balancer helps in intelligent load balancing of traffic across various EC2 instances.<br>
Application Load Balancer is utilised to route traffic to multiple instances.
						</p>
						<p class="qus">44. Is there a way to upload a file greater than 100 MB in Amazon S3?</p>
						<p class="ans">Larger files can be uploaded using the Multipart Upload Utility in AWS, where the large files are uploaded in parts independently and parallel to decrease the upload time. The parts will be merged and converted into a single file once the upload is completed.
						</p>
						<p class="qus">45. What are some of the key best practices for security in Amazon EC2?</p>
						<p class="ans">Some of the best security practices in Amazon EC2 are listed below:
<ol>						
<li>●	Securing the AWS account and the access key.</li>
<li>●	Creating separate Identity and Access Management(IAM) credentials to each user who has access to AWS resources.</li>
<li>●	Disable unimportant services and applications in EC2 instances.</li>
<li>●	Grant permissions to perform specified tasks and deny access for irrelevant resources.</li>
<li>●	Review security infrastructure regularly.</li>
</ol>
						</p>
						<p class="qus">46. Differentiate between vertical and horizontal scaling in AWS.</p>
						<p class="ans">Vertical Scaling refers to the process of increasing the power and performance of an existing machine by adding up resources to the infrastructure.<br>
Horizontal Scaling refers to the scenario where the power and performance are augmented by adding new machines to the infrastructure.<br>
Vertical Scaling is restricted to handle a limited number of users and Horizontal Scaling comes to the rescue when the users are increasing in large numbers with clustering, load balancing and distributed file system.
						</p>
						<p class="qus">47. How will you access the data on EBS in AWS?</p>
						<p class="ans">Elastic Block Storage provides highly functional block-level storage that can be connected to any EC2 instance and accessed easily.
						</p>
						<p class="qus">48. How can you speed up data transfer in Snowball?</p>
						<p class="ans">The data transfer can be increased in the following way:<br>
<ol>						
<li>●	Performing multiple copy operations from different terminals, on the same Snowball device.</li>
<li>●	Reducing encryption by Transferring large files or batches of small files.</li>
<li>●	Prioritising activities on the source and snowball machine can improve the speed of data transfer.</li>
</ol>
						</p>
						<p class="qus">49. List the network performance parameters while launching instances in a cluster placement group?</p>
						<p class="ans">If Instances are launched in a cluster placement group, one can expect the performance parameters to be as mentioned below.<br>
<ol>						
<li>●	20 Gbps in full-duplex (Multi-flow).</li>
<li>●	10 Gbps in a single flow.</li>
<li>●	Outside the group, network traffic will be restricted to 5 Gbps</li>
</ol>
						</p>
						<p class="qus">50. What is the difference between Scalability and Elasticity?</p>
						<p class="ans">Scalability refers to the ability of a system to increase the hardware requirements or processing nodes to tackle increasing demand.<br>
The elasticity of a system refers to the capability of the system to add resources for improving the performance when required and returning to the original configuration when resources are not required.<br>
This feature helps a lot in cloud computing since the resources are bought in the pay-as-you-go pricing.
						</p>
						<p class="qus">51. How to reduce the load on the Amazon EC2 instance?</p>
						<p class="ans">Attaching a load balancer to an autoscaling group will distribute the load effectively among various instances.
						</p>
						<p class="qus">52. Explain the purpose of Connection Draining</p>
						<p class="ans">Connection Draining will reroute the traffic from non-updated and health check failed instances.
						</p>
						<p class="qus">53. What is the purpose of lifecycle hooks in AutoScaling?</p>
						<p class="ans">Lifecycle hooks help to add wait time before launch or termination of an instance for extraction of log files or installation of necessary software respectively.
						</p>
						<p class="qus">54. What is Lambda?</p>
						<p class="ans">Lambda helps to run server-less applications and to deploy various functions that are triggered by events. Lambda cannot be used for developing applications that are accessible publicly.
						</p>
						<p class="qus">55. How does Elastic Beanstalk update?</p>
						<p class="ans">Elastic Beanstalk creates a replica of an instance and routes the traffic to the duplicate instance before updating an instance. In case the update fails, it will roll back to the original instance providing a hassle-free user experience.
						</p>
						<p class="qus">56. What is the use of tags?</p>
						<p class="ans">Tags are helpful to identify and group various AWS resources. AWS Training in Hyderabad at FITA Academy provides the students with the necessary training to understand the concepts of AWS and its application. Tutors at FITA Academy train the students with market-relevant skills and help the students in achieving their professional career
						</p>
						<p class="qus">57. List the advantages of Cloud Computing.</p>
						<p class="ans"><ol><li>●	Elasticity</li>
<li>●	Scalability</li>
<li>●	Speed and Agility</li>
<li>●	pay-as-you-use model</li>
<li>●	Worldwide launch in unnoticeable time</li>
</ol>
						</p>
						<p class="qus">58. What is the Availability Zone?</p>
						<p class="ans">Availability Zone is also known as Data Centre that is designed as an independent failure zone with high-speed connectivity and low latency.
						</p>
						<p class="qus">59. What is Region?</p>
						<p class="ans">The Region is similar to a geographical location where there are independent collections of AWS resources connected in higher bandwidth.
						</p>
						<p class="qus">60. Explain Auto scaling and its components.</p>
						<p class="ans">Auto Scaling is an important feature that permits to increase or decrease the instances based on CPU or Memory utilisation. the components in Auto Scaling are Launch configuration and Auto-scaling groups.
						</p>
						<p class="qus">61. Explain Security Groups.</p>
						<p class="ans">Security Groups are enhanced security features that hold the traffic of the instances and serve as a firewall. One can frame rules to security groups to permit traffic among various instances for better monitoring of the security infrastructure.
						</p>
						<p class="qus">62..Explain Amazon EBS-Optimized instances</p>
						<p class="ans">Amazon EBS-Optimized Instances utilises an optimized stack configuration and has additional capacity for Amazon EBS that can be selected by paying hourly charges based on usage..
						</p>
						<p class="qus">63. Which Automation Gears helps in Spinup Services?</p>
						<p class="ans">API tools such as API Fortress, Scripting languages like Perl and hybrid cloud management tools like Scarl are few such automation gears helpful for Spin Up Services.
						</p>
						<p class="qus">64. Explain Amazon EMR.</p>
						<p class="ans">Amazon Elastic Map Reduce is an administrative feature that can completely monitor Hadoop system on the Amazon EC2 instance.
						</p>
						<p class="qus">65. List the virtualization types in AWS.</p>
						<p class="ans"><ol><li>●	Hardware-Assisted Virtualisation</li>
<li>●	Para Virtualization</li></ol>
						</p>
						<p class="qus">66. Explain Stateful and Stateless firewall.</p>
						<p class="ans">Any security group that regulates traffic among instances and various AWS resources is a Stateful firewall.<br>
A Stateless firewall is an Access Control List on a network at the subnet level and can allow or deny traffic based on rules.
						</p>
						<p class="qus">67. What do you know about Amazon Kinesis Firehose?</p>
						<p class="ans">It is a Data Firehouse that can help in stacking information in Information Stores or devices without the need for a continuous organization.
						</p>
						<p class="qus">68. What is Amazon DynamoDB?</p>
						<p class="ans">DynamoDB is a product of Amazon that provides fast and reliable Database services with increased performance and scalability for storage of humongous data at low costs.
						</p>
						<p class="qus">69. What is the association between AMI and Instance?</p>
						<p class="ans">AMI refers to Amazon Machine Image that acts as a template containing software configurations such as OS, server and applications. AMI can be used to launch an instance that replicates the AMI functioning as a virtual server and can be used to launch multiple instances also.
						<img src="<?= base_url(); ?>assets/img/image002.jpg" style="width:350px;" />
						</p>
						<p class="qus">70. What is the purpose of the cradle in AWS?</p>
						<p class="ans">Cradle serves the purpose of monitoring the synchronisation of a stack with different parts to maintain a robust framework. Cradle acts as a cushion to make the segments work efficiently enabling administration easier.
						</p>
						<p class="qus">71. What are the DB engines which can be used in AWS RDS?</p>
						<p class="ans">Various DB engines used in AWS RDS are listed below.<br>
<ol>						
<li>●	MariaDB</li>
<li>●	MS SQL DB</li>
<li>●	MYSQL DB</li>
<li>●	Oracle DB</li>
<li>●	Postgre DB</li>
</ol>
						</p>
						<p class="qus">72. Explain the difference between the Service Role and SAML Federated Role.</p>
						<p class="ans">Service Role is used to specify a task in AWS services on the basis of various policies attached to it.<br>
Federated Roles are useful for providing access to AWS based on the designed Role.
						</p>
						<p class="qus">73. How a Root AWS user differs from an IAM User.</p>
						<p class="ans">Root AWS User is granted complete access to AWS services without any policy attached whereas an IAM User can access based on the policies attached to it.
						</p>
						<p class="qus">74. What is the benefit of creating a group in IAM</p>
						<p class="ans">Group Creation in IAM aids in managing the users with similar kind of policies attached and by changing the policies access to AWS can be easily managed for all the users in the Group.
						</p>
						<p class="qus">75. Explain the benefits of the Security Token Service( STS).</p>
						<p class="ans">STS helps to secure the AWS environment since the credentials are temporary and there is no necessity to revoke or rotate them.
						</p>
						<p class="qus">76. What is the distinction between Amazon S3 and EC2?</p>
						<p class="ans">S3 refers to Simple Storage Service where bulk volumes of data can be stored and retrieved easily along with a REST interface and secure validation keys (HMAC_SHA1).<br>
EC2 refers to Elastic Compute Cloud is utilised for developing applications and run servers and various languages & tools such as Python, Ruby, Apache, Linux, PHP, HTML, etc.
						</p>
						<p class="qus">77. Explain Amazon CloudSearch.</p>
						<p class="ans">Amazon CloudSearch helps to incorporate various seek and fetch abilities on numerous applications. They support AWS ENgineers by reducing the time taken to perform changes or updates on various applications.
						</p>
						<p class="qus">78. Explain the AWS Certificate Manager.</p>
						<p class="ans">AWS Certificate Manager is an administrative feature for various activities using Secure Socket Layers to arrange interchanges and setting up of the character of various sites over the internet.
						</p>
						<p class="qus">79. What is an Auto Scaling group?</p>
						<p class="ans">Auto Scaling group contains various Amazon EC2 instances administered by Auto Scaling Services with each group containing various configuration options to decide launch or termination of instances.
						</p>
						<p class="qus">80. What is SES?</p>
						<p class="ans">Simple Email Service(SES) is a service provided by Amazon to send bulk Email to customers instantly reducing the cost of the service.
						</p>
						<p class="qus">81. What is SQS?</p>
						<p class="ans">Simple Queue Service (SQS) by Amazon provides quick and reliable message queuing service in which messages are queued temporarily until the user wish to send them to consumers
						</p>
						<p class="qus">82. Explain SNS.</p>
						<p class="ans">Simple Notification Service is an Amazon web service to coordinate the delivery of messages or emails to the recipients.
						</p>
						<p class="qus">83. What are the routing policies available in Amazon Route53?</p>
						<p class="ans">Various Routing Policies in Route53 are listed below.<br>
<ol>						
<li>●	Simple</li>
<li>●	Failover</li>
<li>●	Weighted</li>
<li>●	Geolocation</li>
<li>●	Latency Based</li>
</ol>
						</p>
						<p class="qus">84. What is Lightsail?</p>
						<p class="ans">Amazon’s Lightsail helps to launch and control any virtual Private Server with AWS by providing various facilities like storage, data transfer, static IP, etc.
						</p>
						<p class="qus">85. Differentiate Basic and Detailed monitoring.</p>
						<p class="ans">Basic Monitoring interacts with Amazon Cloud watch at an interval of 5 minutes on a set of predetermined metrics at no cost.<br>
Detailed Monitoring interacts with Amazon Cloud watch round the clock and permits aggregation of data as a charged service.
						</p>
						<p class="qus">86. What is IaaS?</p>
						<p class="ans">IaaS refers to the cloud service that helps in running various services in the cloud platform on a pay-as-you-go basis.
						</p>
						<p class="qus">87. Explain Amazon ElastiCache.</p>
						<p class="ans">Amazon ElastiCache denotes the web service that helps in the management of memory caching environment.<br>
Benefits of ElastiCache are listed below.<br>
<ol>
<li>●	Scalable Caching Environment</li>
<li>●	High Performance</li>
<li>●	Cost-effectiveness</li>
</ol>
						</p>
						<p class="qus">88. What Is Lambda edge?</p>
						<p class="ans">Lambda Edge can perform various functions that run as a response to CloudFront events for executing various functions in AWS locations without a managing server.
						</p>
						<p class="qus">89. What is PaaS?</p>
						<p class="ans">PaaS helps to run various cloud platforms predominantly to develop, test and monitor the functioning of the software.
						</p>
						<p class="qus">90. List various layers of Cloud Architecture in AWS.</p>
						<p class="ans">Various layers of AWS Cloud architecture is listed below.<br>
<ol>
<li>●	Node Controller</li>
<li>●	Cloud controller</li>
<li>●	Cluster controller</li>
<li>●	Storage Controller</li>
</ol>
						</p>
						<p class="qus">91. List some important features of Amazon cloud search.</p>
						<p class="ans">A few important features of Amazon Cloud search are listed below.<br>
<ol>
<li>●	Range searches</li>
<li>●	Prefix Searches</li>
<li>●	Entire text search</li>
<li>●	Boolean searches</li>
<li>●	AutoComplete advice</li>
</ol>
						</p>
						<p class="qus">92. How the instance type of the instances that are running in an application tier along with Auto Scaling can be changed?</p>
						<p class="ans">
<ol>
<li>1.	auto scaling launch configuration</li>
<li>2.	auto scaling tags configuration</li>
<li>3.	auto scaling policy configuration</li>
<li>4.	None of the above</li>
</ol>
						</p>
						<p class="qus">93. Where does the user specify the maximum number of instances using the auto scaling commands?</p>
						<p class="ans">
<ol>
<li>1.	Auto scaling tags configuration</li>
<li>2.	Auto Scaling group</li>
<li>3.	Auto Scaling launch configuration</li>
<li>4.	Auto scaling policy configuration</li>
</ol>
						</p>
						<p class="qus">94. Which among the below mentioned is a structured data store that can support indexing and data queries for EC2 and S3?</p>
						<p class="ans">
<ol>
<li>1.	DynamoDB</li>
<li>2.	Aurora</li>
<li>3.	SimpleDB</li>
<li>4.	MySQL</li>
</ol>
						</p>
						<p class="qus">95. The maximum permissible VPCs per account/region and subnets per VPC in AWS.</p>
						<p class="ans">
<ol>
<li>1.	4, 100</li>
<li>2.	5, 200</li>
<li>3.	7, 40</li>
<li>4.	3, 150</li>
</ol>
						</p>
						<p class="qus">96. Which among the following should be chosen for complex querying capabilities without whole data warehouse?</p>
						<p class="ans">
<ol>
<li>1.	RDS</li>
<li>2.	ElastiCache</li>
<li>3.	Redshift</li>
<li>4.	DynamoDB</li>
</ol>
						</p>
						<p class="qus">97. Which among the following should be chosen for collecting and processing e-commerce data with real-time analysis?</p>
						<p class="ans">
<ol>
<li>1.	DynamoDB</li>
<li>2.	Aurora</li>
<li>3.	Redshift</li>
<li>4.	SimpleDB</li>
</ol>
						</p>
						<p class="qus">98. Which among the following is used to transfer data among instances spread across countries to your Amazon S3 bucket?</p>
						<p class="ans">
<ol>
<li>1.	Amazon CloudFront</li>
<li>2.	Amazon Transfer Acceleration</li>
<li>3.	Amazon Snowball</li>
<li>4.	Amazon Glacier</li>
</ol>
						</p>
						<p class="qus">99. Which among the below services is a data storage system that uses secure HMAC-SHA1 authentication keys?</p>
						<p class="ans">
<ol>
<li>1.	Amazon Elastic Block Store</li>
<li>2.	Amazon S3</li>
<li>3.	Amazon Snapshot</li>
</ol>
						</p>
						<p class="qus">100. Which Value should be set in the instance’s tenancy attribute for running single-tenant hardware?</p>
						<p class="ans">
<ol>
<li>1.	One</li>
<li>2.	Dedicated</li>
<li>3.	Reserved</li>
<li>4.	Isolated</li>
</ol>
						</p>
						<p class="qus">101. When costs are incurred in an Elastic IP address?</p>
						<p class="ans">
<ol>
<li>1.	EIP is allocated.</li>
<li>2.	EIP is allocated and associated with a running instance.</li>
<li>3.	EIP is allocated and associated with a stopped instance.</li>
<li>4.	None of the Above</li>
</ol>
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