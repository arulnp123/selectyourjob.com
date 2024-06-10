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
						<h3>PySpark Interview Questions and Answers</h3>
                      
						<p class="qus">1. Compare Hadoop and Spark?</p>
						<p class="ans">We will compare Hadoop MapReduce and Spark based on the following aspects:</p>
                      	<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Feature Criteria</th>
							  <th scope="col">Apache Spark</th>
							  <th scope="col">Hadoop</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Speed </td>
							  <td>100 times faster than Hadoop</td>
							  <td>Decent speed</td>
							</tr>
							<tr>
							  <td>Processing</td>
							  <td>Real-time & Batch processing</td>
							  <td>Batch processing only</td>
							</tr>
							<tr>
							  <td>Difficulty</td>
							  <td>Easy because of high level modules</td>
							  <td>Tough to learn</td>
							</tr>
                            <tr>
							  <td>Recovery</td>
							  <td>Allows recovery of partitions</td>
							  <td>Fault-tolerant</td>
							</tr>
							<tr>
							  <td>Interactivity</td>
							  <td>Has interactive modes</td>
							  <td>No interactive mode except Pig & Hive</td>
							</tr>
						  </tbody>
						</table>
                      <p class="ans">Table: Apache Spark versus Hadoop</p>
                      <p class="ans">Let us understand the same using an interesting analogy.</p>
                      <p class="ans">“Single cook cooking an entree is regular computing. Hadoop is multiple cooks cooking an entree into pieces and letting each cook her piece.</p>
                      <p class="ans">Each cook has a separate stove and a food shelf. The first cook cooks the meat, the second cook cooks the sauce. This phase is called “Map”. A the end the main cook assembles the complete entree. This is called “Reduce”. For Hadoop, the cooks are not allowed to keep things on the stove between operations. Each time you make a particular operation, the cook puts results on the shelf. This slows things down.</p>
                      <p class="ans">For Spark, the cooks are allowed to keep things on the stove between operations. This speeds things up. Finally, for Hadoop the recipes are written in a language which is illogical and hard to understand. For Spark, the recipes are nicely written.” – Stan Kladko, Galactic Exchange.io </p>
                      
                      <p class="qus">2. What is Apache Spark?</p>
                      <p class="ans">The clause "WHERE" isolates a row or an element during the usage of a related system.</p>
                      <ul>
                        <li>1. Apache Spark is an open-source cluster computing framework for real-time processing.</li>
                        <li>2. It has a thriving open-source community and is the most active Apache project at the moment</li>
                        <li>3. Spark provides an interface for programming entire clusters with implicit data parallelism and fault-tolerance.</li>
                      </ul>
					  <img src="<?= base_url(); ?>assets/img/apache.png" style="width:500px;" /><br>
					  <p>Spark is of the most successful projects in the Apache Software Foundation. Spark has clearly evolved as the market leader for Big Data processing. Many organizations run Spark on clusters with thousands of nodes. Today, Spark is being adopted by major players like Amazon, eBay, and Yahoo! </p>
					  <p class="qus">3. Explain the key features of Apache Spark.</p>
                      <p class="ans">The following are the key features of Apache Spark:<br>
                      <ul>
                        <li>1.	Polyglot</li>
                        <li>2.	Speed</li>
                        <li>3.	Multiple Format Support</li>
						<li>4.	Lazy Evaluation</li>
                        <li>5.	Real Time Computation</li>
                        <li>6.	Hadoop Integration</li>
						<li>7.	Machine Learning</li>
                      </ul>
					  <p>Let us look at these features in detail:<br></p>
					  <ul>
                        <li>1.	Polyglot: Spark provides high-level APIs in Java, Scala, Python and R. Spark code can be written in any of these four languages. It provides a shell in Scala and Python. The Scala shell can be accessed through ./bin/spark-shell and Python shell through ./bin/pyspark from the installed directory.</li>
                        <li>2.	Speed: Spark runs upto 100 times faster than Hadoop MapReduce for large-scale data processing. Spark is able to achieve this speed through controlled partitioning. It manages data using partitions that help parallelize distributed data processing with minimal network traffic.</li>
                        <li>3.	Multiple Formats: Spark supports multiple data sources such as Parquet, JSON, Hive and Cassandra. The Data Sources API provides a pluggable mechanism for accessing structured data though Spark SQL. Data sources can be more than just simple pipes that convert data and pull it into Spark.</li>
						<li>4.	Lazy Evaluation: Apache Spark delays its evaluation till it is absolutely necessary. This is one of the key factors contributing to its speed. For transformations, Spark adds them to a DAG of computation and only when the driver requests some data, does this DAG actually gets executed.</li>
                        <li>5.	Real Time Computation: Spark’s computation is real-time and has less latency because of its in-memory computation. Spark is designed for massive scalability and the Spark team has documented users of the system running production clusters with thousands of nodes and supports several computational models.</li>
                        <li>6.	Hadoop Integration: Apache Spark provides smooth compatibility with Hadoop. This is a great boon for all the Big Data engineers who started their careers with Hadoop. Spark is a potential replacement for the MapReduce functions of Hadoop, while Spark has the ability to run on top of an existing Hadoop cluster using YARN for resource scheduling. </li>
						<li>7.	Machine Learning: Spark’s MLlib is the machine learning component which is handy when it comes to big data processing. It eradicates the need to use multiple tools, one for processing and one for machine learning. Spark provides data engineers and data scientists with a powerful, unified engine that is both fast and easy to use.</li>
                      </ul>
					  </p>
					  <p class="qus">4. What are the languages supported by Apache Spark and which is the most popular one?</p>
                      <p class="ans">Apache Spark supports the following four languages: Scala, Java, Python and R. Among these languages, Scala and Python have interactive shells for Spark. The Scala shell can be accessed through ./bin/spark-shell and the Python shell through ./bin/pyspark. Scala is the most used among them because Spark is written in Scala and it is the most popularly used for Spark.</p>
					  <p class="qus">5. What are benefits of Spark over MapReduce?</p>
                      <p class="ans">Spark has the following benefits over MapReduce:<br>
                      <ul>
                        <li>1.	Due to the availability of in-memory processing, Spark implements the processing around 10 to 100 times faster than Hadoop MapReduce whereas MapReduce makes use of persistence storage for any of the data processing tasks.</li>
                        <li>2.	Unlike Hadoop, Spark provides inbuilt libraries to perform multiple tasks from the same core like batch processing, Steaming, Machine learning, Interactive SQL queries. However, Hadoop only supports batch processing.</li>
                        <li>3.	Hadoop is highly disk-dependent whereas Spark promotes caching and in-memory data storage.</li>
						<li>4.	Spark is capable of performing computations multiple times on the same dataset. This is called iterative computation while there is no iterative computing implemented by Hadoop.</li>
                      </ul>
					  </p>
					  <p class="qus">6. What is YARN?</p>
                      <p class="ans">Similar to Hadoop, YARN is one of the key features in Spark, providing a central and resource management platform to deliver scalable operations across the cluster. YARN is a distributed container manager, like Mesos for example, whereas Spark is a data processing tool. Spark can run on YARN, the same way Hadoop Map Reduce can run on YARN. Running Spark on YARN necessitates a binary distribution of Spark as built on YARN support.</p>
					  <p class="qus">7. Do you need to install Spark on all nodes of YARN cluster?</p>
                      <p class="ans">No, because Spark runs on top of YARN. Spark runs independently from its installation. Spark has some options to use YARN when dispatching jobs to the cluster, rather than its own built-in manager, or Mesos. Further, there are some configurations to run YARN. They include master, deploy-mode, driver-memory, executor-memory, executor-cores, and queue.</p>
					  <p class="qus">8. Is there any benefit of learning MapReduce if Spark is better than MapReduce?</p>
                      <p class="ans">Yes, MapReduce is a paradigm used by many big data tools including Spark as well. It is extremely relevant to use MapReduce when the data grows bigger and bigger. Most tools like Pig and Hive convert their queries into MapReduce phases to optimize them better.</p>
					  <p class="qus">9. Explain the concept of Resilient Distributed Dataset (RDD).</p>
                      <p class="ans">RDD stands for Resilient Distribution Datasets. An RDD is a fault-tolerant collection of operational elements that run in parallel. The partitioned data in RDD is immutable and distributed in nature. There are primarily two types of RDD:<br>
                      <ul>
                        <li>1.	Parallelized Collections: Here, the existing RDDs running parallel with one another.</li>
                        <li>2.	Hadoop Datasets: They perform functions on each file record in HDFS or other storage systems.</li>
                      </ul>
					  <p>RDDs are basically parts of data that are stored in the memory distributed across many nodes. RDDs are lazily evaluated in Spark. This lazy evaluation is what contributes to Spark’s speed.
					  </p>
					  <p class="qus">10. How do we create RDDs in Spark?</p>
                      <p class="ans">Spark provides two methods to create RDD:<br>
                      <ul>
                        <li>1. By parallelizing a collection in your Driver program.</li>
                        <li>2. This makes use of SparkContext’s ‘parallelize’</li>
						<li>method val DataArray = Array(2,4,6,8,10)</li>
						<li> </li>
						<li>val DataRDD = sc.parallelize(DataArray)</li>
                        <li>3. By loading an external dataset from external storage like HDFS, HBase, shared file system.</li>
                      </ul>
					  </p>
					  <p class="qus">11. What is Executor Memory in a Spark application?</p>
                      <p class="ans">Every spark application has same fixed heap size and fixed number of cores for a spark executor. The heap size is what referred to as the Spark executor memory which is controlled with the spark.executor.memory property of the –executor-memory flag. Every spark application will have one executor on each worker node. The executor memory is basically a measure on how much memory of the worker node will the application utilize.</p>
					  <p class="qus">12. Define Partitions in Apache Spark.</p>
                      <p class="ans">As the name suggests, partition is a smaller and logical division of data similar to ‘split’ in MapReduce. It is a logical chunk of a large distributed data set. Partitioning is the process to derive logical units of data to speed up the processing process. Spark manages data using partitions that help parallelize distributed data processing with minimal network traffic for sending data between executors. By default, Spark tries to read data into an RDD from the nodes that are close to it. Since Spark usually accesses distributed partitioned data, to optimize transformation operations it creates partitions to hold the data chunks. Everything in Spark is a partitioned RDD.</p>
					  <p class="qus">13. What operations does RDD support?</p>
                      <p class="ans">RDD (Resilient Distributed Dataset) is main logical data unit in Spark. An RDD has distributed a collection of objects. Distributed means, each RDD is divided into multiple partitions. Each of these partitions can reside in memory or stored on the disk of different machines in a cluster. RDDs are immutable (Read Only) data structure. You can’t change original RDD, but you can always transform it into different RDD with all changes you want.<br>
RDDs support two types of operations: transformations and actions. <br>
Transformations: Transformations create new RDD from existing RDD like map, reduceByKey and filter we just saw. Transformations are executed on demand. That means they are computed lazily.<br>
Actions: Actions return final results of RDD computations. Actions triggers execution using lineage graph to load the data into original RDD, carry out all intermediate transformations and return final results to Driver program or write it out to file system.
                      </p>
					  <p class="qus">14. What do you understand by Transformations in Spark?</p>
                      <p class="ans">Transformations are functions applied on RDD, resulting into another RDD. It does not execute until an action occurs. map() and filter() are examples of transformations, where the former applies the function passed to it on each element of RDD and results into another RDD. The filter() creates a new RDD by selecting elements from current RDD that pass function argument.</p><br>
<p>1  <br>
2  val rawData=sc.textFile("path to/movies.txt")<br>
  3	val moviesData=rawData.map(x=&gt;x.split("  "))<br></p>
<p>As we can see here, rawData RDD is transformed into moviesData RDD. Transformations are lazily evaluated.
</p>
					  <p class="qus">15. Define Actions in Spark.</p>
                      <p class="ans">An action helps in bringing back the data from RDD to the local machine. An action’s execution is the result of all previously created transformations. Actions triggers execution using lineage graph to load the data into original RDD, carry out all intermediate transformations and return final results to Driver program or write it out to file system.
reduce() is an action that implements the function passed again and again until one value if left. take() action takes all the values from RDD to a local node.<br>
                      1	moviesData.saveAsTextFile(“MoviesData.txt”)<br>
As we can see here, moviesData RDD is saved into a text file called MoviesData.txt. 
                      </p>
					  <p class="qus">16. Define functions of SparkCore.</p>
                      <p class="ans">Spark Core is the base engine for large-scale parallel and distributed data processing. The core is the distributed execution engine and the Java, Scala, and Python APIs offer a platform for distributed ETL application development. SparkCore performs various important functions like memory management, monitoring jobs, fault-tolerance, job scheduling and interaction with storage systems. Further, additional libraries, built atop the core allow diverse workloads for streaming, SQL, and machine learning. It is responsible for:<br>
                      <ul>
                        <li>1.	Memory management and fault recovery</li>
                        <li>2.	Scheduling, distributing and monitoring jobs on a cluster</li>
                        <li>3.	Interacting with storage systems</li>
                      </ul>
                      </p>
					  <p class="qus">17. What do you understand by Pair RDD?</p>
                      <p class="ans">Apache defines PairRDD functions class as<br>
1	class PairRDDFunctions[K, V] extends Logging with HadoopMapReduceUtil with Serializable<br>
Special operations can be performed on RDDs in Spark using key/value pairs and such RDDs are referred to as Pair RDDs. Pair RDDs allow users to access each key in parallel. They have a reduceByKey() method that collects data based on each key and a join() method that combines different RDDs together, based on the elements having the same key.
                      </p>
					  <p class="qus">18. Name the components of Spark Ecosystem.</p>
                      <p class="ans">
                      <ul>
                        <li>1.	Spark Core: Base engine for large-scale parallel and distributed data processing</li>
                        <li>2.	Spark Streaming: Used for processing real-time streaming data</li>
                        <li>3.	Spark SQL: Integrates relational processing with Spark’s functional programming API</li>
						<li>4.	GraphX: Graphs and graph-parallel computation</li>
                        <li>5.	MLlib: Performs machine learning in Apache Spark</li>
                      </ul>
                      </p>
					  <p class="qus">19. How is Streaming implemented in Spark? Explain with examples.</p>
                      <p class="ans">Spark Streaming is used for processing real-time streaming data. Thus it is a useful addition to the core Spark API. It enables high-throughput and fault-tolerant stream processing of live data streams. The fundamental stream unit is DStream which is basically a series of RDDs (Resilient Distributed Datasets) to process the real-time data. The data from different sources like Flume, HDFS is streamed and finally processed to file systems, live dashboards and databases. It is similar to batch processing as the input data is divided into streams like batches.</p>
					  <p class="qus">20. Is there an API for implementing graphs in Spark?</p>
                      <p class="ans">GraphX is the Spark API for graphs and graph-parallel computation. Thus, it extends the Spark RDD with a Resilient Distributed Property Graph.<br>
The property graph is a directed multi-graph which can have multiple edges in parallel. Every edge and vertex have user defined properties associated with it. Here, the parallel edges allow multiple relationships between the same vertices. At a high-level, GraphX extends the Spark RDD abstraction by introducing the Resilient Distributed Property Graph: a directed multigraph with properties attached to each vertex and edge.<br>
To support graph computation, GraphX exposes a set of fundamental operators (e.g., subgraph, joinVertices, and mapReduceTriplets) as well as an optimized variant of the Pregel API. In addition, GraphX includes a growing collection of graph algorithms and builders to simplify graph analytics tasks.
                      </p>
					  <p class="qus">21. What is PageRank in GraphX?</p>
                      <p class="ans">PageRank measures the importance of each vertex in a graph, assuming an edge from u to v represents an endorsement of v’s importance by u. For example, if a Twitter user is followed by many others, the user will be ranked highly.<br>
GraphX comes with static and dynamic implementations of PageRank as methods on the PageRank Object. Static PageRank runs for a fixed number of iterations, while dynamic PageRank runs until the ranks converge (i.e., stop changing by more than a specified tolerance). GraphOps allows calling these algorithms directly as methods on Graph.
                      </p>
					  <p class="qus">22. How is machine learning implemented in Spark?</p>
                      <p class="ans">MLlib is scalable machine learning library provided by Spark. It aims at making machine learning easy and scalable with common learning algorithms and use cases like clustering, regression filtering, dimensional reduction, and alike.<br>
					  <img src="<?= base_url(); ?>assets/img/learningimplemented.png" style="width:500px;" /><br>
                      </p>
					  <p class="qus">23. Is there a module to implement SQL in Spark? How does it work?</p>
                      <p class="ans">Spark SQL is a new module in Spark which integrates relational processing with Spark’s functional programming API. It supports querying data either via SQL or via the Hive Query Language. For those of you familiar with RDBMS, Spark SQL will be an easy transition from your earlier tools where you can extend the boundaries of traditional relational data processing. 
Spark SQL integrates relational processing with Spark’s functional programming. Further, it provides support for various data sources and makes it possible to weave SQL queries with code transformations thus resulting in a very powerful tool.
The following are the four libraries of Spark SQL.<br>
                      <ul>
                        <li>1.	Data Source API</li>
                        <li>2.	DataFrame API</li>
                        <li>3.	Interpreter & Optimizer</li>
						<li>4.	SQL Service</li>
                      </ul>
					  <img src="<?= base_url(); ?>assets/img/implementsql.png" style="width:00px;" /><br>
					  </p>
					  <p class="qus">24. What is a Parquet file?</p>
                      <p class="ans">Parquet is a columnar format file supported by many other data processing systems. Spark SQL performs both read and write operations with Parquet file and consider it be one of the best big data analytics formats so far. 
Parquet is a columnar format, supported by many data processing systems. The advantages of having a columnar storage are as follows:<br>
                      <ul>
                        <li>1.	Columnar storage limits IO operations.</li>
                        <li>2.	It can fetch specific columns that you need to access.</li>
                        <li>3.	Columnar storage consumes less space.</li>
						<li>4.	It gives better-summarized data and follows type-specific encoding.</li>
                      </ul>
					  </p>
					  <p class="qus">25. How can Apache Spark be used alongside Hadoop?</p>
                      <p class="ans">The best part of Apache Spark is its compatibility with Hadoop. As a result, this makes for a very powerful combination of technologies. Here, we will be looking at how Spark can benefit from the best of Hadoop. Using Spark and Hadoop together helps us to leverage Spark’s processing to utilize the best of Hadoop’s HDFS and YARN. <br>
					  <img src="<?= base_url(); ?>assets/img/alongsidehadoop.png" style="width:500px;" /><br>
					  Hadoop components can be used alongside Spark in the following ways:<br>
                      <ul>
                        <li>1.	HDFS: Spark can run on top of HDFS to leverage the distributed replicated storage.</li>
                        <li>2.	MapReduce: Spark can be used along with MapReduce in the same Hadoop cluster or separately as a processing framework.</li>
                        <li>3.	YARN: Spark applications can also be run on YARN (Hadoop NextGen).</li>
						<li>4.	Batch & Real Time Processing: MapReduce and Spark are used together where MapReduce is used for batch processing and Spark for real-time processing.</li>
                      </ul>
					  </p>
					  <p class="qus">26. What is RDD Lineage?</p>
                      <p class="ans">Spark does not support data replication in the memory and thus, if any data is lost, it is rebuild using RDD lineage. RDD lineage is a process that reconstructs lost data partitions. The best is that RDD always remembers how to build from other datasets.</p>
					  <p class="qus">27. What is Spark Driver?</p>
                      <p class="ans">Spark Driver is the program that runs on the master node of the machine and declares transformations and actions on data RDDs. In simple terms, a driver in Spark creates SparkContext, connected to a given Spark Master.<br>
The driver also delivers the RDD graphs to Master, where the standalone cluster manager runs.
                      </p>
					  <p class="qus">28. What file systems does Spark support?</p>
                      <p class="ans">The following three file systems are supported by Spark:<br>
                      <ul>
                        <li>1.	Hadoop Distributed File System (HDFS).</li>
                        <li>2.	Local File system.</li>
                        <li>3.	Amazon S3</li>
                      </ul>
					  </p>
					  <p class="qus">29. List the functions of Spark SQL.</p>
                      <p class="ans">Spark SQL is capable of:<br>
                      <ul>
                        <li>1.	Loading data from a variety of structured sources.</li>
                        <li>2.	Querying data using SQL statements, both inside a Spark program and from external tools that connect to Spark SQL through standard database connectors (JDBC/ODBC). For instance, using business intelligence tools like Tableau. </li>
                        <li>3.	Providing rich integration between SQL and regular Python/Java/Scala code, including the ability to join RDDs and SQL tables, expose custom functions in SQL, and more.</li>
                      </ul>
					  </p>
					  <p class="qus">30. What is Spark Executor?</p>
                      <p class="ans">When SparkContext connects to a cluster manager, it acquires an Executor on nodes in the cluster. Executors are Spark processes that run computations and store the data on the worker node. The final tasks by SparkContext are transferred to executors for their execution.
					  </p>
					  <p class="qus">31. Name types of Cluster Managers in Spark.</p>
                      <p class="ans">The Spark framework supports three major types of Cluster Managers:<br>
                      <ul>
                        <li>1.	Standalone: A basic manager to set up a cluster.</li>
                        <li>2.	Apache Mesos: Generalized/commonly-used cluster manager, also runs Hadoop MapReduce and other applications.</li>
                        <li>3.	YARN: Responsible for resource management in Hadoop.</li>
                      </ul>
					  </p>
					  <p class="qus">32. What do you understand by worker node?</p>
                      <p class="ans">Worker node refers to any node that can run the application code in a cluster. The driver program must listen for and accept incoming connections from its executors and must be network addressable from the worker nodes.<br> 
Worker node is basically the slave node. Master node assigns work and worker node actually performs the assigned tasks. Worker nodes process the data stored on the node and report the resources to the master. Based on the resource availability, the master schedule tasks.
                      </p>
					  <p class="qus">33. Illustrate some demerits of using Spark.</p>
                      <p class="ans">The following are some of the demerits of using Apache Spark:<br>
                      <ul>
                        <li>1.	Since Spark utilizes more storage space compared to Hadoop and MapReduce, there may arise certain problems.</li>
                        <li>2.	Developers need to be careful while running their applications in Spark.</li>
                        <li>3.	Instead of running everything on a single node, the work must be distributed over multiple clusters.</li>
						<li>4.	Spark’s “in-memory” capability can become a bottleneck when it comes to cost-efficient processing of big data.</li>
                        <li>5.	Spark consumes a huge amount of data when compared to Hadoop.</li>
                      </ul>
					  </p>
					  <p class="qus">34. List some use cases where Spark outperforms Hadoop in processing.</p>
                      <p class="ans">
                      <ul>
                        <li>1.	Sensor Data Processing: Apache Spark’s “In-memory” computing works best here, as data is retrieved and combined from different sources.</li>
						<li>2.	Real Time Processing: Spark is preferred over Hadoop for real-time querying of data. e.g. Stock Market Analysis, Banking, Healthcare, Telecommunications, etc.</li>
                        <li>3.	Stream Processing: For processing logs and detecting frauds in live streams for alerts, Apache Spark is the best solution.</li>
                        <li>4.	Big Data Processing: Spark runs upto 100 times faster than Hadoop when it comes to processing medium and large-sized datasets.</li>
                      </ul>
					  </p>
					  <p class="qus">35. What is a Sparse Vector?</p>
                      <p class="ans">A sparse vector has two parallel arrays; one for indices and the other for values. These vectors are used for storing non-zero entries to save space.</p>
					  <p class="qus">36. Can you use Spark to access and analyze data stored in Cassandra databases?</p>
                      <p class="ans">Yes, it is possible if you use Spark Cassandra Connector.To connect Spark to a Cassandra cluster, a Cassandra Connector will need to be added to the Spark project. In the setup, a Spark executor will talk to a local Cassandra node and will only query for local data. It makes queries faster by reducing the usage of the network to send data between Spark executors (to process data) and Cassandra nodes (where data lives).</p>
					  <p class="qus">37. Is it possible to run Apache Spark on Apache Mesos?</p>
                      <p class="ans">Yes, Apache Spark can be run on the hardware clusters managed by Mesos. In a standalone cluster deployment, the cluster manager in the below diagram is a Spark master instance. When using Mesos, the Mesos master replaces the Spark master as the cluster manager. Mesos determines what machines handle what tasks. Because it takes into account other frameworks when scheduling these many short-lived tasks, multiple frameworks can coexist on the same cluster without resorting to a static partitioning of resources.</p>
					  <p class="qus">38. How can Spark be connected to Apache Mesos?</p>
                      <p class="ans">To connect Spark with Mesos:<br>
                      <ul>
                        <li>1.	Configure the spark driver program to connect to Mesos.</li>
                        <li>2.	Spark binary package should be in a location accessible by Mesos.</li>
                        <li>3.	Install Apache Spark in the same location as that of Apache Mesos and configure the property ‘spark.mesos.executor.home’ to point to the location where it is installed.</li>
                      </ul>
					  </p>
					  <p class="qus">39. How can you minimize data transfers when working with Spark?</p>
                      <p class="ans">Minimizing data transfers and avoiding shuffling helps write spark programs that run in a fast and reliable manner. The various ways in which data transfers can be minimized when working with Apache Spark are:<br>
                      <ul>
                        <li>1.	Using Broadcast Variable- Broadcast variable enhances the efficiency of joins between small and large RDDs.</li>
                        <li>2.	Using Accumulators – Accumulators help update the values of variables in parallel while executing.</li>
                      </ul>
					  <p>The most common way is to avoid operations ByKey, repartition or any other operations which trigger shuffles.</p>
					  <p class="qus">40. What are broadcast variables?</p>
                      <p class="ans">Broadcast variables allow the programmer to keep a read-only variable cached on each machine rather than shipping a copy of it with tasks. They can be used to give every node a copy of a large input dataset in an efficient manner. Spark also attempts to distribute broadcast variables using efficient broadcast algorithms to reduce communication cost.<br>
					  <img src="<?= base_url(); ?>assets/img/broadcastvariables.png" style="width:500px;" /><br>
					  </p>
					  <p class="qus">41. Explain accumulators in Apache Spark.</p>
                      <p class="ans">Accumulators are variables that are only added through an associative and commutative operation. They are used to implement counters or sums. Tracking accumulators in the UI can be useful for understanding the progress of running stages. Spark natively supports numeric accumulators. We can create named or unnamed accumulators.<br>
					  <img src="<?= base_url(); ?>assets/img/accumulatorsinspark.png" style="width:500px;" /><br>
					  </p>
					  <p class="qus">42. Why is there a need for broadcast variables when working with Apache Spark?</p>
                      <p class="ans">Broadcast variables are read only variables, present in-memory cache on every machine. When working with Spark, usage of broadcast variables eliminates the necessity to ship copies of a variable for every task, so data can be processed faster. Broadcast variables help in storing a lookup table inside the memory which enhances the retrieval efficiency when compared to an RDD lookup().
					  </p>
					  <p class="qus">43. How can you trigger automatic clean-ups in Spark to handle accumulated metadata?</p>
                      <p class="ans">You can trigger the clean-ups by setting the parameter ‘spark.cleaner.ttl’ or by dividing the long running jobs into different batches and writing the intermediary results to the disk.
					  </p>
					  <p class="qus">44. What is the significance of Sliding Window operation?</p>
                      <p class="ans">Sliding Window controls transmission of data packets between various computer networks. Spark Streaming library provides windowed computations where the transformations on RDDs are applied over a sliding window of data. Whenever the window slides, the RDDs that fall within the particular window are combined and operated upon to produce new RDDs of the windowed DStream.<br>
					  <img src="<?= base_url(); ?>assets/img/windowoperation.png" style="width:500px;" /><br>
					  </p>
					  <p class="qus">45. What is a DStream in Apache Spark?</p>
                      <p class="ans">Discretized Stream (DStream) is the basic abstraction provided by Spark Streaming. It is a continuous stream of data. It is received from a data source or from a processed data stream generated by transforming the input stream. Internally, a DStream is represented by a continuous series of RDDs and each RDD contains data from a certain interval. Any operation applied on a DStream translates to operations on the underlying RDDs.<br>
DStreams can be created from various sources like Apache Kafka, HDFS, and Apache Flume. DStreams have two operations:<br>
                      <ul>
                        <li>1.	Transformations that produce a new DStream.</li>
                        <li>2.	Output operations that write data to an external system.</li>
                      </ul>
					  <p>There are many DStream transformations possible in Spark Streaming. Let us look at filter(func). filter(func) returns a new DStream by selecting only the records of the source DStream on which func returns true.</p>
					  <img src="<?= base_url(); ?>assets/img/dstream.png" style="width:500px;" /><br>
					  </p>
					  <p class="qus">46. Explain Caching in Spark Streaming.</p>
                      <p class="ans">DStreams allow developers to cache/ persist the stream’s data in memory. This is useful if the data in the DStream will be computed multiple times. This can be done using the persist() method on a DStream. For input streams that receive data over the network (such as Kafka, Flume, Sockets, etc.), the default persistence level is set to replicate the data to two nodes for fault-tolerance.
					  <img src="<?= base_url(); ?>assets/img/streaming.png" style="width:500px;" /><br>
					  </p>
					  <p class="qus">47. When running Spark applications, is it necessary to install Spark on all the nodes of YARN cluster?</p>
                      <p class="ans">Spark need not be installed when running a job under YARN or Mesos because Spark can execute on top of YARN or Mesos clusters without affecting any change to the cluster.
					  </p>
					  <p class="qus">48. What are the various data sources available in Spark SQL?</p>
                      <p class="ans">Parquet file, JSON datasets and Hive tables are the data sources available in Spark SQL.
					  </p>
					  <p class="qus">49. What are the various levels of persistence in Apache Spark?</p>
                      <p class="ans">Apache Spark automatically persists the intermediary data from various shuffle operations, however, it is often suggested that users call persist () method on the RDD in case they plan to reuse it. Spark has various persistence levels to store the RDDs on disk or in memory or as a combination of both with different replication levels.<br>
The various storage/persistence levels in Spark are: <br>
                      <ul>
                        <li>1.	MEMORY_ONLY: Store RDD as deserialized Java objects in the JVM. If the RDD does not fit in memory, some partitions will not be cached and will be recomputed on the fly each time they’re needed. This is the default level.</li>
						<li>2.	MEMORY_AND_DISK: Store RDD as deserialized Java objects in the JVM. If the RDD does not fit in memory, store the partitions that don’t fit on disk, and read them from there when they’re needed.</li>
                        <li>3.	MEMORY_ONLY_SER: Store RDD as serialized Java objects (one byte array per partition).</li>
                        <li>4.	MEMORY_AND_DISK_SER: Similar to MEMORY_ONLY_SER, but spill partitions that don’t fit in memory to disk instead of recomputing them on the fly each time they’re needed.</li>
						<li>5.	DISK_ONLY: Store the RDD partitions only on disk.</li>
                        <li>6.	OFF_HEAP: Similar to MEMORY_ONLY_SER, but store the data in off-heap memory.</li>
                      </ul>
					  </p>
					  <p class="qus">50. Does Apache Spark provide checkpoints?</p>
                      <p class="ans">Checkpoints are similar to checkpoints in gaming. They make it run 24/7 and make it resilient to failures unrelated to the application logic.<br>
					  <img src="<?= base_url(); ?>assets/img/checkpoints.png" style="width:500px;" /><br>
					  Lineage graphs are always useful to recover RDDs from a failure but this is generally time-consuming if the RDDs have long lineage chains. Spark has an API for checkpointing i.e. a REPLICATE flag to persist. However, the decision on which data to checkpoint – is decided by the user. Checkpoints are useful when the lineage graphs are long and have wide dependencies.
					  </p>
					  <p class="qus">51. How Spark uses Akka?</p>
                      <p class="ans">Spark uses Akka basically for scheduling. All the workers request for a task to master after registering. The master just assigns the task. Here Spark uses Akka for messaging between the workers and masters.
					  </p>
					  <p class="qus">52. What do you understand by Lazy Evaluation?</p>
                      <p class="ans">Spark is intellectual in the manner in which it operates on data. When you tell Spark to operate on a given dataset, it heeds the instructions and makes a note of it, so that it does not forget – but it does nothing, unless asked for the final result. When a transformation like map() is called on an RDD, the operation is not performed immediately. Transformations in Spark are not evaluated till you perform an action. This helps optimize the overall data processing workflow.<br>
                      <img src="<?= base_url(); ?>assets/img/meow.png" style="width:500px;" /><br>
					  </p>
					  <p class="qus">53. What do you understand by SchemaRDD in Apache Spark RDD?</p>
                      <p class="ans">SchemaRDD is an RDD that consists of row objects (wrappers around the basic string or integer arrays) with schema information about the type of data in each column.<br> 
SchemaRDD was designed as an attempt to make life easier for developers in their daily routines of code debugging and unit testing on SparkSQL core module. The idea can boil down to describing the data structures inside RDD using a formal description similar to the relational database schema. On top of all basic functions provided by common RDD APIs, SchemaRDD also provides some straightforward relational query interface functions that are realized through SparkSQL.<br> 
Now, it is officially renamed to DataFrame API on Spark’s latest trunk.
					  </p>
					  <p class="qus">54. How is Spark SQL different from HQL and SQL?</p>
                      <p class="ans">Spark SQL is a special component on the Spark Core engine that supports SQL and Hive Query Language without changing any syntax. It is possible to join SQL table and HQL table to Spark SQL.
					  </p>
					  <p class="qus">55. Explain a scenario where you will be using Spark Streaming.</p>
                      <p class="ans">When it comes to Spark Streaming, the data is streamed in real-time onto our Spark program.<br>
Twitter Sentiment Analysis is a real-life use case of Spark Streaming. Trending Topics can be used to create campaigns and attract a larger audience. It helps in crisis management, service adjusting and target marketing.<br>
Sentiment refers to the emotion behind a social media mention online. Sentiment Analysis is categorizing the tweets related to a particular topic and performing data mining using Sentiment Automation Analytics Tools.<br>
Spark Streaming can be used to gather live tweets from around the world into the Spark program. This stream can be filtered using Spark SQL and then we can filter tweets based on the sentiment. The filtering logic will be implemented using MLlib where we can learn from the emotions of the public and change our filtering scale accordingly.<br>
<img src="<?= base_url(); ?>assets/img/scenerio.png" style="width:500px;" /><br>
					  </p>
					  <p class="qus">56. What is PySpark?</p>
                      <p class="ans">PySpark is an Apache Spark interface in Python. It is used for collaborating with Spark using APIs written in Python. It also supports Spark’s features like Spark DataFrame, Spark SQL, Spark Streaming, Spark MLlib and Spark Core. It provides an interactive PySpark shell to analyze structured and semi-structured data in a distributed environment. PySpark supports reading data from multiple sources and different formats. It also facilitates the use of RDDs (Resilient Distributed Datasets). PySpark features are implemented in the py4j library in python.<br>
PySpark can be installed using PyPi by using the command:<br>
pip install pyspark
					  </p>
					  <p class="qus">57. What are the characteristics of PySpark?</p>
                      <p class="ans">There are 4 characteristics of PySpark:<br>
					  <img src="<?= base_url(); ?>assets/img/characteristicsofpyspark.png" style="width:500px;" /><br>
                      <ul>
                        <li>●	Abstracted Nodes: This means that the individual worker nodes can not be addressed.</li>
						<li>●	Spark API: PySpark provides APIs for utilizing Spark features.</li>
                        <li>●	Map-Reduce Model: PySpark is based on Hadoop’s Map-Reduce model this means that the programmer provides the map and the reduce functions.</li>
                        <li>●	Abstracted Network: Networks are abstracted in PySpark which means that the only possible communication is implicit communication.</li>
                      </ul>
					  </p>
					  <p class="qus">58. What are the advantages and disadvantages of PySpark?</p>
                      <p class="ans">Advantages of PySpark:<br>
                      <ul>
                        <li>●	Simple to use: Parallelized code can be written in a simpler manner.</li>
						<li>●	Error Handling: PySpark framework easily handles errors.</li>
                        <li>●	Inbuilt Algorithms: PySpark provides many of the useful algorithms in Machine Learning or Graphs.</li>
                        <li>●	Library Support: Compared to Scala, Python has a huge library collection for working in the field of data science and data visualization.</li>
						<li>●	Easy to Learn: PySpark is an easy to learn language.</li>
                      </ul>
					  <p>Disadvantages of PySpark:</p><br>
					  <ul>
                        <li>●	Sometimes, it becomes difficult to express problems using the MapReduce model.</li>
						<li>●	Since Spark was originally developed in Scala, while using PySpark in Python programs they are relatively less efficient and approximately 10x times slower than the Scala programs. This would impact the performance of heavy data processing applications.</li>
                        <li>●	The Spark Streaming API in PySpark is not mature when compared to Scala. It still requires improvements.</li>
                        <li>●	PySpark cannot be used for modifying the internal function of the Spark due to the abstractions provided. In such cases, Scala is preferred.</li>
                      </ul>
					  </p>
					  <p class="qus">59. What is PySpark SparkContext?</p>
                      <p class="ans">PySpark SparkContext is an initial entry point of the spark functionality. It also represents Spark Cluster Connection and can be used for creating the Spark RDDs (Resilient Distributed Datasets) and broadcasting the variables on the cluster.<br>
The following diagram represents the architectural diagram of PySpark’s SparkContext:<br>
<img src="<?= base_url(); ?>assets/img/dataflow.png" style="width:500px;" /><br>
When we want to run the Spark application, a driver program that has the main function will be started. From this point, the SparkContext that we defined gets initiated. Later on, the driver program performs operations inside the executors of the worker nodes. Additionally, JVM will be launched using Py4J which in turn creates JavaSparkContext. Since PySpark has default SparkContext available as “sc”, there will not be a creation of a new SparkContext.
					  </p>
					  <p class="qus">60. Why do we use PySpark SparkFiles?</p>
                      <p class="ans">PySpark’s SparkFiles are used for loading the files onto the Spark application. This functionality is present under SparkContext and can be called using the sc.addFile() method for loading files on Spark. SparkFiles can also be used for getting the path using the SparkFiles.get() method. It can also be used to resolve paths to files added using the sc.addFile() method.
					  </p>
					  <p class="qus">61. What are PySpark serializers?</p>
                      <p class="ans">The serialization process is used to conduct performance tuning on Spark. The data sent or received over the network to the disk or memory should be persisted. PySpark supports serializers for this purpose. It supports two types of serializers, they are:<br>
                      <ul>
                        <li>●	PickleSerializer: This serializes objects using Python’s PickleSerializer (class pyspark.PickleSerializer). This supports almost every Python object.</li>
						<li>●	MarshalSerializer: This performs serialization of objects. We can use it by using class pyspark.MarshalSerializer. This serializer is faster than the PickleSerializer but it supports only limited types.</li>
                      </ul>
					  <p>Consider an example of serialization which makes use of MarshalSerializer:<br>
# --serializing.py----<br>
from pyspark.context import SparkContext<br>
from pyspark.serializers import MarshalSerializer<br>
sc = SparkContext("local", "Marshal Serialization", serializer = MarshalSerializer())    #Initialize spark context and serializer<br>
print(sc.parallelize(list(range(1000))).map(lambda x: 3 * x).take(5))<br>
sc.stop()<br>
When we run the file using the command:<br>
$SPARK_HOME/bin/spark-submit serializing.py<br>
The output of the code would be the list of size 5 of numbers multiplied by 3:<br>
[0, 3, 6, 9, 12]
					  </p>
					  <p class="qus">62. Is PySpark faster than pandas?</p>
                      <p class="ans">PySpark supports parallel execution of statements in a distributed environment, i.e on different cores and different machines which are not present in Pandas. This is why PySpark is faster than pandas.
					  </p>
					  <p class="qus">63. What is SparkSession in Pyspark?</p>
                      <p class="ans">SparkSession is the entry point to PySpark and is the replacement of SparkContext since PySpark version 2.0. This acts as a starting point to access all of the PySpark functionalities related to RDDs, DataFrame, Datasets etc. It is also a Unified API that is used in replacing the SQLContext, StreamingContext, HiveContext and all other contexts.<br>
					  <img src="<?= base_url(); ?>assets/img/sparksession.png" style="width:500px;" /><br>
					  The SparkSession internally creates SparkContext and SparkConfig based on the details provided in SparkSession. SparkSession can be created by making use of builder patterns.
					  </p>
					  <p class="qus">64. What is PySpark UDF?</p>
                      <p class="ans">UDF stands for User Defined Functions. In PySpark, UDF can be created by creating a python function and wrapping it with PySpark SQL’s udf() method and using it on the DataFrame or SQL. These are generally created when we do not have the functionalities supported in PySpark’s library and we have to use our own logic on the data. UDFs can be reused on any number of SQL expressions or DataFrames.
					  </p>
					  <p class="qus">65. What are the industrial benefits of PySpark?</p>
                      <p class="ans">These days, almost every industry makes use of big data to evaluate where they stand and grow. When you hear the term big data, Apache Spark comes to mind. Following are the industry benefits of using PySpark that supports Spark:<br>
                      <ul>
                        <li>●	Media streaming: Spark can be used to achieve real-time streaming to provide personalized recommendations to subscribers. Netflix is one such example that uses Apache Spark. It processes around 450 billion events every day to flow to its server-side apps.</li>
						<li>●	Finance: Banks use Spark for accessing and analyzing the social media profiles and in turn get insights on what strategies would help them to make the right decisions regarding customer segmentation, credit risk assessments, early fraud detection etc.</li>
                        <li>●	Healthcare: Providers use Spark for analyzing the past records of the patients to identify what health issues the patients might face posting their discharge. Spark is also used to perform genome sequencing for reducing the time required for processing genome data.</li>
                        <li>●	Travel Industry: Companies like TripAdvisor uses Spark to help users plan the perfect trip and provide personalized recommendations to the travel enthusiasts by comparing data and review from hundreds of websites regarding the place, hotels, etc.</li>
						<li>●	Retail and e-commerce: This is one important industry domain that requires big data analysis for targeted advertising. Companies like Alibaba run Spark jobs for analyzing petabytes of data for enhancing customer experience, providing targetted offers, sales and optimizing the overall performance.</li>
                      </ul>
					  </p>
					  <p class="qus">66. What is PySpark Architecture?</p>
                      <p class="ans">PySpark similar to Apache Spark works in master-slave architecture pattern. Here, the master node is called the Driver and the slave nodes are called the workers. When a Spark application is run, the Spark Driver creates SparkContext which acts as an entry point to the spark application. All the operations are executed on the worker nodes. The resources required for executing the operations on the worker nodes are managed by the Cluster Managers. The following diagram illustrates the architecture described:<br>
					  <img src="<?= base_url(); ?>assets/img/pysparkarchitecture.png" style="width:500px;" /><br>
					  </p>
					  <p class="qus">67. What PySpark DAGScheduler?</p>
                      <p class="ans">DAG stands for Direct Acyclic Graph. DAGScheduler constitutes the scheduling layer of Spark which implements scheduling of tasks in a stage-oriented manner using jobs and stages. The logical execution plan (Dependencies lineage of transformation actions upon RDDs) is transformed into a physical execution plan consisting of stages. It computes a DAG of stages needed for each job and keeps track of what stages are RDDs are materialized and finds a minimal schedule for running the jobs. These stages are then submitted to TaskScheduler for running the stages. This is represented in the image flow below:<br>
					  <img src="<?= base_url(); ?>assets/img/dagscheduler.png" style="width:500px;" /><br>
					  DAGScheduler performs the following three things in Spark:<br>
                      <ul>
                        <li>●	Compute DAG execution for the job.</li>
						<li>●	Determine preferred locations for running each task</li>
                        <li>●	Failure Handling due to output files lost during shuffling.</li>
                      </ul>
					  <p>PySpark’s DAGScheduler follows event-queue architecture. Here a thread posts events of type DAGSchedulerEvent such as new stage or job. The DAGScheduler then reads the stages and sequentially executes them in topological order.
					  </p>
					  <p class="qus">68. What is the common workflow of a spark program?</p>
                      <p class="ans">The most common workflow followed by the spark program is:<br>
                      <ul>
                        <li>●	The first step is to create input RDDs depending on the external data. Data can be obtained from different data sources.</li>
						<li>●	Post RDD creation, the RDD transformation operations like filter() or map() are run for creating new RDDs depending on the business logic.</li>
                        <li>●	If any intermediate RDDs are required to be reused for later purposes, we can persist those RDDs.</li>
                        <li>●	Lastly, if any action operations like first(), count() etc are present then spark launches it to initiate parallel computation.</li>
                      </ul>
					  </p>
					  <p class="qus">69. Why is PySpark SparkConf used?</p>
                      <p class="ans">PySpark SparkConf is used for setting the configurations and parameters required to run applications on a cluster or local system. The following class can be executed to run the SparkConf:<br>
class pyspark.Sparkconf(<br>
localdefaults = True,<br>
_jvm = None,<br>
_jconf = None<br>
)<br>
where:<br>
                      <ul>
                        <li>●	loadDefaults - is of type boolean and indicates whether we require loading values from Java System Properties. It is True by default.</li>
						<li>●	_jvm - This belongs to the class py4j.java_gateway.JVMView and is an internal parameter that is used for passing the handle to JVM. This need not be set by the users.</li>
                        <li>●	_jconf - This belongs to the class py4j.java_gateway.JavaObject. This parameter is an option and can be used for passing existing SparkConf handles for using the parameters.</li>
                      </ul>
					  </p>
					  <p class="qus">70. How will you create PySpark UDF?</p>
                      <p class="ans">Consider an example where we want to capitalize the first letter of every word in a string. This feature is not supported in PySpark. We can however achieve this by creating a UDF capitalizeWord(str) and using it on the DataFrames. The following steps demonstrate this:<br>
                      <ul>
                        <li>●	Create Python function capitalizeWord that takes a string as input and capitalizes the first character of every word.<br>
def capitalizeWord(str):<br>
   result=""<br>
   words = str.split(" ")<br>
   for word in words:<br>
      result= result + word[0:1].upper() + word[1:len(x)] + " "<br>
   return result<br>
                        </li>
						<li>●	Register the function as a PySpark UDF by using the udf() method of org.apache.spark.sql.functions.udf package which needs to be imported. This method returns the object of class org.apache.spark.sql.expressions.UserDefinedFunction.<br>
""" Converting function to UDF """<br>
capitalizeWordUDF = udf(lambda z: capitalizeWord(z),StringType())<br>
                        </li>
                        <li>●	Use UDF with DataFrame: The UDF can be applied on a Python DataFrame as that acts as the built-in function of DataFrame.
Consider we have a DataFrame of stored in variable df as below:<br>
+----------+-----------------+
|ID_COLUMN |NAME_COLUMN      |
+----------+-----------------+
|1         |harry potter     |
|2         |ronald weasley   |
|3         |hermoine granger |
+----------+-----------------+<br>
                        </li>
                      </ul>
					  <p>To capitalize every first character of the word, we can use:<br>
df.select(col("ID_COLUMN"), convertUDF(col("NAME_COLUMN"))<br>
 .alias("NAME_COLUMN") )<br>
 .show(truncate=False)<br>
The output of the above code would be:<br>
+----------+-----------------+
|ID_COLUMN |NAME_COLUMN      |
+----------+-----------------+
|1         |Harry Potter     |
|2         |Ronald Weasley   |
|3         |Hermoine Granger |
+----------+-----------------+<br>
UDFs have to be designed in a way that the algorithms are efficient and take less time and space complexity. If care is not taken, the performance of the DataFrame operations would be impacted.
					  </p>
					  <p class="qus">71. What are the profilers in PySpark?</p>
                      <p class="ans">Custom profilers are supported in PySpark. These are useful for building predictive models. Profilers are useful for data review to ensure that it is valid and can be used for consumption. When we require a custom profiler, it has to define some of the following methods:<br>
                      <ul>
                        <li>●	profile: This produces a system profile of some sort.</li>
						<li>●	stats: This returns collected stats of profiling.</li>
                        <li>●	dump: This dumps the profiles to a specified path.</li>
                        <li>●	add: This helps to add profile to existing accumulated profile. The profile class has to be selected at the time of SparkContext creation.</li>
						<li>●	dump(id, path): This dumps a specific RDD id to the path given.</li>
                      </ul>
					  </p>
					  <p class="qus">72. How to create SparkSession?</p>
                      <p class="ans">To create SparkSession, we use the builder pattern. The SparkSession class from the pyspark.sql library has the getOrCreate() method which creates a new SparkSession if there is none or else it returns the existing SparkSession object. The following code is an example for creating SparkSession:<br>
import pyspark<br>
from pyspark.sql import SparkSession<br>
spark = SparkSession.builder.master("local[1]") <br>
                   .appName('InterviewBitSparkSession') <br>
                   .getOrCreate()<br>
Here,<br>
                      <ul>
                        <li>●	master() – This is used for setting up the mode in which the application has to run - cluster mode (use the master name) or standalone mode. For Standalone mode, we use the local[x] value to the function, where x represents partition count to be created in RDD, DataFrame and DataSet. The value of x is ideally the number of CPU cores available.</li>
						<li>●	appName() - Used for setting the application name</li>
                        <li>●	getOrCreate() – For returning SparkSession object. This creates a new object if it does not exist. If an object is there, it simply returns that.</li>
                      </ul>
					  <p>If we want to create a new SparkSession object every time, we can use the newSession method as shown below:<br>
import pyspark<br>
from pyspark.sql import SparkSession<br>
spark_session = SparkSession.newSession
					  </p>
					  <p class="qus">73. What do you understand by Pyspark’s startsWith() and endsWith() methods?</p>
                      <p class="ans">These methods belong to the Column class and are used for searching DataFrame rows by checking if the column value starts with some value or ends with some value. They are used for filtering data in applications.<br>
                      <ul>
                        <li>●	startsWith() – returns boolean Boolean value. It is true when the value of the column starts with the specified string and False when the match is not satisfied in that column value.</li>
						<li>●	endsWith() – returns boolean Boolean value. It is true when the value of the column ends with the specified string and False when the match is not satisfied in that column value.</li>
                      </ul>
					  <p>Both the methods are case-sensitive.<br>
Consider an example of the startsWith() method here. We have created a DataFrame with 3 rows:<br>
data = [('Harry', 20),<br>
       ('Ron', 20),<br>
       ('Hermoine', 20)]<br>
columns = ["Name","Age"]<br>
df = spark.createDataFrame(data=data, schema = columns)<br>
If we have the below code that checks for returning the rows where all the names in the Name column start with “H”,<br>
import org.apache.spark.sql.functions.col<br>
df.filter(col("Name").startsWith("H")).show()<br>
The output of the code would be:<br>
+-----------+----------+
| Name      | Age      |
+-----------+----------+
| Harry     | 20       |
| Hermoine  | 20       |
+-----------+----------+<br>
Notice how the record with the Name “Ron” is filtered out because it does not start with “H”.
					  </p>
					  <p class="qus">74. How can you inner join two DataFrames?</p>
                      <p class="ans">We can make use of the join() method present in PySpark SQL. The syntax for the function is:<br>
join(self, other, on=None, how=None)<br>
where,<br>
other - Right side of the join<br>
on - column name string used for joining<br>
how - type of join, by default it is inner. The values can be inner, left, right, cross, full, outer, left_outer, right_outer, left_anti, left_semi.<br>
The join expression can be appended with where() and filter() methods for filtering rows. We can have multiple join too by means of the chaining join() method.<br>
Consider we have two dataframes - employee and department as shown below:<br>
-- Employee DataFrame --<br>
+------+--------+-----------+
|emp_id|emp_name|empdept_id |
+------+--------+-----------+
|     1|   Harry|          5|
|     2|    Ron |          5|
|     3| Neville|         10|
|     4|  Malfoy|         20|
+------+--------+-----------+<br>
-- Department DataFrame --<br>
+-------+--------------------------+
|dept_id| dept_name                |
+-------+--------------------------+
|     5 |   Information Technology | 
|     10|   Engineering            |
|     20|   Marketting             | 
+-------+--------------------------+<br>
We can inner join the Employee DataFrame with Department DataFrame to get the department information along with employee information as:<br>
emp_dept_df = empDF.join(deptDF,empDF.empdept_id == deptDF.dept_id,"inner").show(truncate=False)<br>
The result of this becomes:<br>
+------+--------+-----------+-------+--------------------------+
|emp_id|emp_name|empdept_id |dept_id| dept_name                |
+------+--------+-----------+-------+--------------------------+
|     1|   Harry|          5|     5 |   Information Technology |
|     2|    Ron |          5|    5  |   Information Technology |
|     3| Neville|         10|    10 |   Engineering            |
|     4|  Malfoy|         20|    20 |   Marketting             | 
+------+--------+-----------+-------+--------------------------+<br>
We can also perform joins by chaining join() method by following the syntax:<br>
df1.join(df2,["column_name"]).join(df3,df1["column_name"] == df3["column_name"]).show()<br>
Consider we have a third dataframe called Address DataFrame having columns emp_id, city and state where emp_id acts as the foreign key equivalent of SQL to the Employee DataFrame as shown below:<br>
-- Address DataFrame --<br>
+------+--------------+------+
|emp_id| city         |state |
+------+--------------+------+
|1     | Bangalore    |   KA |
|2     | Pune         |   MH |
|3     | Mumbai       |   MH |
|4     | Chennai      |   TN |
+------+--------------+------+<br>
If we want to get address details of the address along with the Employee and the Department Dataframe, then we can run,<br>
resultDf = empDF.join(addressDF,["emp_id"])<br> 
               .join(deptDF,empDF["empdept_id"] == deptDF["dept_id"])<br> 
               .show()<br>
The resultDf would be:<br>
+------+--------+-----------+--------------+------+-------+--------------------------+
|emp_id|emp_name|empdept_id | city         |state |dept_id| dept_name                |
+------+--------+-----------+--------------+------+-------+--------------------------+
|     1|   Harry|          5| Bangalore    |   KA |     5 |   Information Technology |
|     2|    Ron |          5| Pune         |   MH |     5 |   Information Technology |
|     3| Neville|         10| Mumbai       |   MH |    10 |   Engineering            |
|     4|  Malfoy|         20| Chennai      |   TN |    20 |   Marketting             |
+------+--------+-----------+--------------+------+-------+--------------------------+<br>

					  </p>
					  <p class="qus">75. What do you understand by Pyspark Streaming? How do you stream data using TCP/IP Protocol?</p>
                      <p class="ans">PySpark Streaming is scalable, fault-tolerant, high throughput based processing streaming system that supports streaming as well as batch loads for supporting real-time data from data sources like TCP Socket, S3, Kafka, Twitter, file system folders etc. The processed data can be sent to live dashboards, Kafka, databases, HDFS etc.<br>
					  <img src="<?= base_url(); ?>assets/img/tcpprotocol.png" style="width:500px;" /><br>
					  To perform Streaming from the TCP socket, we can use the readStream.format("socket") method of Spark session object for reading data from TCP socket and providing the streaming source host and port as options as shown in the code below:<br>
from pyspark import SparkContext<br>
from pyspark.streaming import StreamingContext<br>
from pyspark.sql import SQLContext<br>
from pyspark.sql.functions import desc<br>
sc = SparkContext()<br>
ssc = StreamingContext(sc, 10)<br>
sqlContext = SQLContext(sc)<br>
socket_stream = ssc.socketTextStream("127.0.0.1", 5555)<br>
lines = socket_stream.window(20)<br>
df.printSchema()<br>
Spark loads the data from the socket and represents it in the value column of the DataFrame object. The df.printSchema() prints<br>
root<br>
|-- value: string (nullable = true)<br>
Post data processing, the DataFrame can be streamed to the console or any other destinations based on the requirements like Kafka, dashboards, database etc.
					  </p>
					  <p class="qus">76. What are the prerequisites to learn PySpark?</p>
                      <p class="ans">PySpark is easy to learn and implement. It doesn't require the expertise of many programming languages or databases. You can learn it easily if you know a programming language and framework. Before learning the concept of PySpark, you should learn some knowledge of Apache Spark and Python. It will be very helpful to learn the advanced concepts of PySpark.
					  </p>
					  <p class="qus">77. Why are Partitions immutable in PySpark?</p>
                      <p class="ans">In PySpark, every transformation generates a new partition. Partitions use HDFS API to make partitions immutable, distributed, and fault-tolerant. Partitions are also aware of data locality.
					  </p>
					  <p class="qus">78. What are the key differences between an RDD, a DataFrame, and a DataSet?</p>
                      <p class="ans">Following are the key differences between an RDD, a DataFrame, and a DataSet:<br>
RDD<br>
                      <ul>
                        <li>●	RDD is an acronym that stands for Resilient Distributed Dataset. It is a core data structure of PySpark.</li>
						<li>●	RDD is a low-level object that is highly efficient in performing distributed tasks.</li>
                        <li>●	RDD is best to do low-level transformations, operations, and control on a dataset.</li>
                        <li>●	RDD is mainly used to alter data with functional programming structures than with domain-specific expressions.</li>
						<li>●	If you have a similar arrangement of data that needs to be calculated again, RDDs can be efficiently reserved.</li>
                        <li>●	RDD contains all datasets and DataFrames in PySpark.</li>
                      </ul>
					  <p>DataFrame</p><br>
					  <ul>
                        <li>●	A DataFrame is equivalent to a relational table in Spark SQL. It facilitates the structure like lines and segments to be seen.</li>
						<li>●	If you are working on Python, it is best to start with DataFrames and then switch to RDDs if you want more flexibility.</li>
                        <li>●	One of the biggest disadvantages of DataFrames is Compile Time Wellbeing. For example, if the information structure is unknown, you cannot control it.</li>
                      </ul>
					  <p>DataSet</p><br>
					  <ul>
                        <li>●	A Dataset is a distributed collection of data. It is a subset of DataFrames.</li>
						<li>●	Dataset is a newly added interface in Spark 1.6 to provide RDD benefits.</li>
                        <li>●	DataSet consists of the best encoding component. It provides time security in an organized manner, unlike information edges.</li>
                        <li>●	DataSet provides a greater level of type safety at compile-time. It can be used if you want typed JVM objects.</li>
						<li>●	By using DataSet, you can take advantage of Catalyst optimization. You can also use it to benefit from Tungsten's fast code generation.</li>
                      </ul>
					  </p>
					  <p class="qus">79. What is the usage of PySpark StorageLevel?</p>
                      <p class="ans">The PySpark StorageLevel is used to control the storage of RDD. It controls how and where the RDD is stored. PySpark StorageLevel decides if the RDD is stored on the memory, over the disk, or both. It also specifies whether we need to replicate the RDD partitions or serialize the RDD.<br>
Following is the code for PySpark StorageLevel:<br>
                      <ul>
                        <li>1.	class pyspark.StorageLevel( useDisk, useMemory, useOfHeap, deserialized, replication = 1)  </li>
                      </ul>
					  </p>
					  <p class="qus">80. What do you understand by data cleaning?</p>
                      <p class="ans">Data cleaning is the process of preparing data by analyzing the data and removing or modifying data if it is incorrect, incomplete, irrelevant, duplicated, or improperly formatted.
					  </p>
					  <p class="qus">81. What is PySpark ArrayType? Give an example to explain it well.</p>
                      <p class="ans">PySpark ArrayType is a collection data type that extends the PySpark's DataType class, which is the superclass for all kinds. The PySpark ArrayType contains only the same types of items. The ArraType() method can also be used to construct an instance of an ArrayType.<br>
It accepts two arguments:<br>
                      <ul>
                        <li>●	valueType: The valueType should extend the DataType class in PySpark.</li>
						<li>●	valueContainsNull: It is an optional argument. It specifies whether a value can accept null and is set to True by default.</li>
                      </ul>
					  <p>Example:<br>
1.	from pyspark.sql.types import StringType, ArrayType <br> 
2.	arrayCol = ArrayType(StringType(),False)
					  </p>
					  <p class="qus">82. What is PySpark Partition? How many partitions can you make in PySpark?</p>
                      <p class="ans">PySpark Partition is a method of splitting a large dataset into smaller datasets based on one or more partition keys. It enhances the execution speed as transformations on partitioned data run quicker because each partition's transformations are executed in parallel. PySpark supports both partitioning in memory (DataFrame) and partitioning on disc (File system). When we make a DataFrame from a file or table, PySpark creates the DataFrame in memory with a specific number of divisions based on specified criteria.<br>
It also facilitates us to create a partition on multiple columns using partitionBy() by passing the columns you want to partition as an argument to this method.<br>
Syntax:<br>
1.	partitionBy(self, *cols) <br> 
In PySpark, it is recommended to have 4x of partitions to the number of cores in the cluster available for application.
					  </p>
					  <p class="qus">83. What do you understand by "joins" in PySpark DataFrame? What are the different types of joins available in PySpark?</p>
                      <p class="ans">In PySpark, joins merge or join two DataFrames together. It facilitates us to link two or multiple DataFrames together. <br>
INNER Join, LEFT OUTER Join, RIGHT OUTER Join, LEFT ANTI Join, LEFT SEMI Join, CROSS Join, and SELF Join are among the SQL join types PySpark supports. Following is the syntax of PySpark Join. <br>
Syntax: <br>
1.	join(self, other, on=None, how=None) <br>  
Parameter Explanation: <br>
The join() procedure accepts the following parameters and returns a DataFrame: <br>
                      <ul>
                        <li>●	"other": It specifies the join's right side.</li>
						<li>●	"on": It specifies the join column's name.</li>
                        <li>●	"how": It is used to specify an option. Options are inner, cross, outer, full, full outer, left, left outer, right, right outer, left semi, and left anti. The default is inner.</li>
                      </ul>
					  <p>Types of Join in PySpark DataFrame
					  </p><br>
					  <table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Join String</th>
							  <th scope="col">Equivalent SQL Join</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>inner</td>
							  <td>INNER JOIN</td>
							</tr>
							<tr>
							  <td>outer, full, fullouter, full_outer</td>
							  <td>FULL OUTER JOIN</td>
							</tr>
							<tr>
							  <td>left, leftouter, left_outer</td>
							  <td>LEFT JOIN</td>
							</tr>
							<tr>
							  <td>right, rightouter, right_outer</td>
							  <td>RIGHT JOIN</td>
							</tr>
							<tr>
							  <td>cross</td>
							  <td></td>
							</tr>
							<tr>
							  <td>anti, leftanti, left_anti</td>
							  <td></td>
							</tr>
							<tr>
							  <td>semi, leftsemi, left_semi</td>
							  <td></td>
							</tr>
						  </tbody>
						</table>
					  <p class="qus">84. What is Parquet file in PySpark?</p>
                      <p class="ans">In PySpark, the Parquet file is a column-type format supported by several data processing systems. By using the Parquet file, Spark SQL can perform both read and write operations.<br>
The Parquet file contains a column type format storage which provides the following advantages:<br>
                      <ul>
                        <li>●	It is small and consumes less space.</li>
						<li>●	It facilitates us to fetch specific columns for access.</li>
                        <li>●	It follows type-specific encoding.</li>
                        <li>●	It offers better-summarized data.</li>
						<li>●	It contains very limited I/O operations.</li>
                      </ul>
					  </p>
					  <p class="qus">85. What is the difference between get(filename) and getrootdirectory()?</p>
                      <p class="ans">The main difference between get(filename) and getrootdirectory() is that the get(filename) is used to achieve the correct path of the file that is added through SparkContext.addFile(). On the other hand, the getrootdirectory() is used to get the root directory containing the file added through SparkContext.addFile().
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