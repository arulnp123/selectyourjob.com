@extends('Frontend.layouts.app')
@section('content')

	<section class="job-categories">
		<div class="auto-container">
			<div class="sec-title text-center">
				<h2>PySpark Interview Questions and Answers</h2>
				
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
			
<h3 class="h3">1) What is PySpark? / What do you know about PySpark?</h3>
<p>PySpark is a tool or interface of Apache Spark developed by the Apache Spark community and Python to support Python to work with Spark. This tool collaborates with Apache Spark using APIs written in Python to support features like Spark SQL, Spark DataFrame, Spark Streaming, Spark Core, Spark MLlib, etc. It provides an interactive PySpark shell to analyze structured and semi-structured data in a distributed environment and process them by providing optimized APIs that help the program to read data from various data sources. PySpark features are implemented in the py4j library in Python. Due to the availability of the Py4j library, it facilitates users to work with RDDs (Resilient Distributed Datasets) in the Python programming language. Python supports many libraries that support big data processing and machine learning.</p>
<p>You can install PySpark using PyPi by using the following command:</p>
<div class="codeblock"><textarea name="code" class="xml">
pip install pyspark
</textarea></div>
<hr/>
<h3 class="h3">2) What are the main characteristics of PySpark?</h3>
<p>Following are the main four main characteristics of PySpark:</p>
<ul class="points">
<li><strong>Nodes are abstracted:</strong> The nodes are abstracted in PySpark. It means we cannot access the individual worker nodes.</li>
<li><strong>PySpark is based on MapReduce:</strong> PySpark is based on the MapReduce model of Hadoop. It means that the programmer provides the map and the reduced functions.</li>
<li><strong>APIs for Spark features:</strong> PySpark provides APIs for utilizing Spark features.</li>
<li><strong>Abstracted Network:</strong> PySpark provides abstracted networks. It means that the networks are abstracted in PySpark, and it facilitates only implicit communication.</li>
</ul>
<hr/>
<h3 class="h3">3) What is RDD in PySpark?</h3>
<p>In PySpark, RDD is an acronym that stands for Resilient Distributed Datasets. It is a core data structure of PySpark. It is a low-level object that is highly efficient in performing distributed tasks.</p>
<p>The PySpark's RDDs are the elements that can run and operate on multiple nodes to do parallel processing on a cluster. These are immutable elements. It means that if you once create an RDD, you cannot change it. RDDs are also fault-tolerant. In the case of any failure, they recover automatically. We can apply multiple operations on RDDs to achieve a certain task.</p>
<hr/>
<h3 class="h3">4) What are the key advantages and disadvantages of PySpark?</h3>
<p>Following is a list of key advantages and disadvantages of PySpark:</p>
<p><strong>Advantages of PySpark</strong></p>
<ul class="points">
<li>PySpark is an easy-to-learn language. You can learn and implement it easily if you know Python and Apache Spark.</li>
<li>PySpark is simple to use. It provides parallelized codes that are simple to write.</li>
<li>Error handling is simple in the PySpark framework. You can easily handle errors and manage synchronization points</li>
<li>PySpark is a Python API for Apache Spark. It provides great library support. Python has a huge library collection for working in data science and data visualization compared to other languages.</li>
<li>Many important algorithms are already written and implemented in Spark. It provides many algorithms in Machine Learning or Graphs. </li>
</ul>
<p><strong>Disadvantages of PySpark</strong></p>
<ul class="points">
<li>PySpark is based on Hadoop's MapReduce model, so sometimes, it becomes challenging to manage and express problems using the MapReduce model.</li>
<li>Since Apache Spark was originally written in Scala while using PySpark in Python programs, they are not as efficient as other programming models. It is approximate 10x times slower than the Scala programs. Due to this reason, it negatively impacts the performance of heavy data processing applications.</li>
<li>The Spark Streaming API in PySpark is not as efficient as Scala. It still requires improvements.</li>
<li>In PySpark, the nodes are abstracted, and it uses the abstracted network, so it cannot be used to modify the internal function of the Spark. Scala is preferred in this case.</li>
</ul>
<hr/>
<h3 class="h3">5) What are the prerequisites to learn PySpark?</h3>
<p>PySpark is easy to learn and implement. It doesn't require the expertise of many programming languages or databases. You can learn it easily if you know a programming language and framework. Before learning the concept of PySpark, you should learn some knowledge of Apache Spark and Python. It will be very helpful to learn the advanced concepts of PySpark.</p>
<hr/>
<h3 class="h3">6) Why are Partitions immutable in PySpark?</h3>
<p>In PySpark, every transformation generates a new partition. Partitions use HDFS API to make partitions immutable, distributed, and fault-tolerant. Partitions are also aware of data locality.</p>
<hr/>
<h3 class="h3">7) What are the key differences between an RDD, a DataFrame, and a DataSet?</h3>
<p>Following are the key differences between an RDD, a DataFrame, and a DataSet:</p>
<p><strong>RDD</strong></p>
<ul class="points">
<li>RDD is an acronym that stands for Resilient Distributed Dataset. It is a core data structure of PySpark.</li>
<li>RDD is a low-level object that is highly efficient in performing distributed tasks.</li>
<li>RDD is best to do low-level transformations, operations, and control on a dataset.</li>
<li>RDD is mainly used to alter data with functional programming structures than with domain-specific expressions.</li>
<li>If you have a similar arrangement of data that needs to be calculated again, RDDs can be efficiently reserved.</li>
<li>RDD contains all datasets and DataFrames in PySpark.</li>
</ul>
<p><strong>DataFrame</strong></p>
<ul class="points">
<li>A DataFrame is equivalent to a relational table in Spark SQL. It facilitates the structure like lines and segments to be seen.</li>
<li>If you are working on Python, it is best to start with DataFrames and then switch to RDDs if you want more flexibility.</li>
<li>One of the biggest disadvantages of DataFrames is Compile Time Wellbeing. For example, if the information structure is unknown, you cannot control it.</li>
</ul>
<p><strong>DataSet</strong></p>
<ul class="points">
<li>A Dataset is a distributed collection of data. It is a subset of DataFrames. </li>
<li>Dataset is a newly added interface in Spark 1.6 to provide RDD benefits. </li>
<li>DataSet consists of the best encoding component. It provides time security in an organized manner, unlike information edges. </li>
<li>DataSet provides a greater level of type safety at compile-time. It can be used if you want typed JVM objects. </li>
<li>By using DataSet, you can take advantage of Catalyst optimization. You can also use it to benefit from Tungsten's fast code generation.</li>
</ul>
<hr/>
<h3 class="h3">8) What do you understand by PySpark SparkContext?</h3>
<p>SparkContext acts as the entry point to any spark functionality. When the Spark application runs, it starts the driver program, and the main function and SparkContext get initiated. After that, the driver program runs the operations inside the executors on worker nodes. In PySpark, SparkContext is known as PySpark SparkContext. It uses Py4J (library) to launch a JVM and then creates a JavaSparkContext. The PySpark's SparkContext is by default available as 'sc', so it doesn't mean creating a new SparkContext.</p>
<hr/>
<h3 class="h3">9) What is the usage of PySpark StorageLevel?</h3>
<p>The PySpark StorageLevel is used to control the storage of RDD. It controls how and where the RDD is stored. PySpark StorageLevel decides if the RDD is stored on the memory, over the disk, or both. It also specifies whether we need to replicate the RDD partitions or serialize the RDD.</p>
<p><strong>Following is the code for PySpark StorageLevel:</strong></p>
<div class="codeblock"><textarea name="code" class="xml">
class pyspark.StorageLevel( useDisk, useMemory, useOfHeap, deserialized, replication = 1)
</textarea></div>
<hr/>
<h3 class="h3">10) What do you understand by data cleaning?</h3>
<p>Data cleaning is the process of preparing data by analyzing the data and removing or modifying data if it is incorrect, incomplete, irrelevant, duplicated, or improperly formatted.</p>
<hr/>
<h3 class="h3">11) What is PySpark SparkConf?</h3>
<p>PySpark SparkConf is mainly used if we have to set a few configurations and parameters to run a Spark application on the local/cluster. In other words, we can say that PySpark SparkConf is used to provide configurations to run a Spark application.</p>
<hr/>
<h3 class="h3">12) What are the different types of algorithms supported in PySpark?</h3>
<p>Different types of algorithms supported in PySpark are:</p>
<ul class="points">
<li>spark.mllib</li>
<li>mllib.regression</li>
<li>mllib.recommendation</li>
<li>mllib.clustering</li>
<li>mllib.classification</li>
<li>mllib.linalg</li>
<li>mllib.fpm</li>
</ul>
<hr/>
<h3 class="h3">13) What is SparkCore, and what are the key functions of SparkCore?</h3>
<p>SparkCore is a general execution engine for the Spark platform, including all the functionalities. It offers in-memory computing capabilities to deliver a good speed, a generalized execution model to support various applications, and Java, Scala, and Python APIs that make the development easy.</p>
<p>The main responsibility of SparkCore is to perform all the basic I/O functions, scheduling, monitoring, etc. It is also responsible for fault recovery and effective memory management.</p>
<p><strong>The key functions of SparkCore are:</strong></p>
<ul class="points">
<li>Perform all the basic I/O functions</li>
<li>Job scheduling</li>
<li>Monitoring jobs</li>
<li>Memory management</li>
<li>Fault-tolerance</li>
<li>Interaction with storage systems</li>
</ul>
<h4 class="n">Note: It also includes additional libraries that can divide the workloads for streaming, machine learning, and SQL.</h4>
<hr/>
<h3 class="h3">14) What do you know about PySpark SparkFiles?</h3>
<p>PySpark facilitates users to upload their files using sc.addFile. Here, sc is our default SparkContext. We can also get the path of the working directory using SparkFiles.get. SparkFiles provides the following types of class methods to resolve the path to the files added through SparkContext.addFile():</p>
<ul class="points">
<li>get(filename)</li>
<li>getrootdirectory()</li>
</ul>
<hr/>
<h3 class="h3">15) What do you know about PySpark serializers?</h3>
<p>In PySpark, serialization is a process that is used to conduct performance tuning on Spark. PySpark supports serializers because we have to continuously check the data sent or received over the network to the disk or memory. PySpark supports two types of serializers. They are as follows:</p>
<ul class="points">
<li><strong>PickleSerializer:</strong> This is used to serialize the objects using Python's PickleSerializer using class pyspark.PickleSerializer). This serializer supports almost every Python object.</li>
<li><strong>MarshalSerializer:</strong> The MarshalSerializer is used to perform serialization of objects. This can be used by using class pyspark.MarshalSerializer. This serializer is way faster than the PickleSerializer, but it supports only limited types.</li>
</ul>
<hr/>
<h3 class="h3">16) What is PySpark ArrayType? Give an example to explain it well.</h3>
<p>PySpark ArrayType is a collection data type that extends the PySpark's DataType class, which is the superclass for all kinds. The PySpark ArrayType contains only the same types of items. The ArraType() method can also be used to construct an instance of an ArrayType.</p>
<p>It accepts two arguments:</p>
<ul class="points">
<li><strong>valueType:</strong> The valueType should extend the DataType class in PySpark.</li>
<li><strong>valueContainsNull:</strong> It is an optional argument. It specifies whether a value can accept null and is set to True by default. </li>
</ul>
<p><strong>Example:</strong></p>
<div class="codeblock"><textarea name="code" class="xml">
from pyspark.sql.types import StringType, ArrayType
arrayCol = ArrayType(StringType(),False)
</textarea></div>
<hr/>
<h3 class="h3">17) What are the most frequently used Spark ecosystems?</h3>
<p>The most frequently used Spark ecosystems are:</p>
<ul class="points">
<li>Spark SQL for developers. It is also known as Shark. </li>
<li>Spark Streaming for processing live data streams.</li>
<li>Graphx for generating and computing graphs.</li>
<li>MLlib (also known as Machine Learning Algorithms)</li>
<li>SparkR to promote R programming language in Spark engine.</li>
</ul>
<hr/>
<h3 class="h3">18) What machine learning API does PySpark provide?</h3>
<p>Just like Apache Spark, PySpark also provides a machine learning API known as MLlib. MLlib supports the following types of machine learning algorithms:</p>
<ul class="points">
<li><strong>mllib.classification:</strong> This machine learning API supports different methods for binary or multiclass classification and regression analysis such as Random Forest, Decision Tree, Naive Bayes, etc.</li>
<li><strong>mllib.clustering:</strong> This machine learning API solves clustering problems for grouping entities subsets with one another depending on similarity.</li>
<li><strong>mllib.fpm:</strong> FPM stands for Frequent Pattern Matching in this machine learning API. This machine learning API is used to mine frequent items, subsequences, or other structures that are used for analyzing large datasets.</li>
<li><strong>mllib.linalg:</strong> This machine learning API is used to solve problems on linear algebra.</li>
<li><strong>mllib.recommendation:</strong> This machine learning API is used for collaborative filtering and recommender systems.</li>
<li><strong>spark.mllib:</strong> This machine learning API is used to support model-based collaborative filtering where small latent factors are identified using the Alternating Least Squares (ALS) algorithm used for predicting missing entries.</li>
<li><strong>mllib.regression:</strong> This machine learning API solves problems by using regression algorithms that find relationships and variable dependencies.</li>
</ul>
<hr/>
<h3 class="h3">19) What is PySpark Partition? How many partitions can you make in PySpark?</h3>
<p>PySpark Partition is a method of splitting a large dataset into smaller datasets based on one or more partition keys. It enhances the execution speed as transformations on partitioned data run quicker because each partition's transformations are executed in parallel. PySpark supports both partitioning in memory (DataFrame) and partitioning on disc (File system). When we make a DataFrame from a file or table, PySpark creates the DataFrame in memory with a specific number of divisions based on specified criteria.</p>
<p>It also facilitates us to create a partition on multiple columns using partitionBy() by passing the columns you want to partition as an argument to this method.</p>
<p><strong>Syntax:</strong></p>
<div class="codeblock"><textarea name="code" class="xml">
partitionBy(self, *cols)
</textarea></div>
<p>In PySpark, it is recommended to have 4x of partitions to the number of cores in the cluster available for application.</p>
<hr/>
<h3 class="h3">20) What do you understand by PySpark DataFrames?</h3>
<p>PySpark DataFrames are the distributed collection of well-organized data. These are the same as relational databases tables and are placed into named columns. PySpark DataFrames are better optimized than R or Python programming language because these can be created from different sources like Hive Tables, Structured Data Files, existing RDDs, external databases, etc.</p>
<p>The biggest advantage of PySpark DataFrame is that the data in the PySpark DataFrame is distributed across different machines in the cluster, and the operations performed on this would be run parallel on all the machines. This facilitates handling a large collection of structured or semi-structured data of a range of petabytes.</p>
<hr/>
<h3 class="h3">21) What do you understand by "joins" in PySpark DataFrame? What are the different types of joins available in PySpark?</h3>
<p>In PySpark, joins merge or join two DataFrames together. It facilitates us to link two or multiple DataFrames together.</p>
<p>INNER Join, LEFT OUTER Join, RIGHT OUTER Join, LEFT ANTI Join, LEFT SEMI Join, CROSS Join, and SELF Join are among the SQL join types PySpark supports. Following is the syntax of PySpark Join.</p>
<p><strong>Syntax:</strong></p>
<div class="codeblock"><textarea name="code" class="xml">
join(self, other, on=None, how=None)
</textarea></div>
<p><strong>Parameter Explanation:</strong></p>
<p>The join() procedure accepts the following parameters and returns a DataFrame:</p>
<ul class="points">
<li><strong>"other":</strong> It specifies the join's right side.</li>
<li><strong>"on":</strong> It specifies the join column's name.</li>
<li><strong>"how":</strong> It is used to specify an option. Options are inner, cross, outer, full, full outer, left, left outer, right, right outer, left semi, and left anti. The default is inner.</li>
</ul>
<p><strong>Types of Join in PySpark DataFrame</strong></p>
<table class="alt">
<tr>
<th>Join String</th>
<th>Equivalent SQL Join</th>
</tr>
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
<td>RIGHT JOIN </td>
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
</table>
<hr/>
<h3 class="h3">22) What is Parquet file in PySpark?</h3>
<p>In PySpark, the Parquet file is a column-type format supported by several data processing systems. By using the Parquet file, Spark SQL can perform both read and write operations.</p>
<p>The Parquet file contains a column type format storage which provides the following advantages:</p>
<ul class="points">
<li>It is small and consumes less space.</li>
<li>It facilitates us to fetch specific columns for access.</li>
<li>It follows type-specific encoding.</li>
<li>It offers better-summarized data.</li>
<li>It contains very limited I/O operations.</li>
</ul>
<hr/>
<h3 class="h3">23) What do you understand by a cluster manager? What are the different cluster manager types supported by PySpark?</h3>
<p>In PySpark, a cluster manager is a cluster mode platform that facilitates Spark to run by providing all resources to worker nodes according to their requirements.</p>
<p>A Spark cluster manager ecosystem contains a master node and multiple worker nodes. The master nodes provide the worker nodes with the resources like memory, processor allocation, etc., according to the nodes' requirements with the help of the cluster manager.</p>
<p><strong>PySpark supports the following cluster manager types:</strong></p>
<ul class="points">
<li><strong>Standalone:</strong> This is a simple cluster manager that comes with Spark.</li>
<li><strong>Apache Mesos:</strong> This cluster manager is used to run Hadoop MapReduce and PySpark apps.</li>
<li><strong>Hadoop YARN:</strong> This cluster manager is used in Hadoop2.</li>
<li><strong>Kubernetes:</strong> This cluster manager is an open-source cluster manager that helps automate deployment, scaling, and automatic management of containerized apps.</li>
<li><strong>local:</strong> This cluster manager is a mode for running Spark applications on laptops/desktops. </li>
</ul>
<hr/>
<h3 class="h3">24) Why is PySpark faster than pandas?</h3>
<p>PySpark is faster than pandas because it supports the parallel execution of statements in a distributed environment. For example, PySpark can be executed on different cores and machines, unavailable in Pandas. This is the main reason why PySpark is faster than pandas.</p>
<hr/>
<h3 class="h3">25) What is the difference between get(filename) and getrootdirectory()?</h3>
<p>The main difference between get(filename) and getrootdirectory() is that the get(filename) is used to achieve the correct path of the file that is added through SparkContext.addFile(). On the other hand, the getrootdirectory() is used to get the root directory containing the file added through SparkContext.addFile().</p>
<hr/>
<h3 class="h3">26) What do you understand by SparkSession in Pyspark?</h3>
<p>In PySpark, SparkSession is the entry point to the application. In the first version of PySpark, SparkContext was used as the entry point. SparkSession is the replacement of SparkContext since PySpark version 2.0. After the PySpark version 2.0, SparkSession acts as a starting point to access all of the PySpark functionalities related to RDDs, DataFrame, Datasets, etc. It is also a Unified API used to replace the SQLContext, StreamingContext, HiveContext, and all other contexts in Pyspark.</p>
<p>The SparkSession internally creates SparkContext and SparkConfig according to the details provided in SparkSession. You can create SparkSession by using builder patterns.</p>
<hr/>
<h3 class="h3">27) What are the key advantages of PySpark RDD?</h3>
<p>Following is the list of key advantages of PySpark RDD:</p>
<p><strong>Immutability:</strong> The PySpark RDDs are immutable. If you create them once, you cannot modify them later. You have to create a new RDD whenever you try to apply any transformation operations on the RDDs. </p>
<p><strong>Fault Tolerance:</strong> The PySpark RDD provides fault tolerance features. Whenever an operation fails, the data gets automatically reloaded from other available partitions. This provides a seamless experience of execution of the PySpark applications. </p>
<p><strong>Partitioning:</strong> When we create an RDD from any data, the elements in the RDD are partitioned to the cores available by default.</p>
<p><strong>Lazy Evolution:</strong> PySpark RDD follows the lazy evolution process. In PySpark RDD, the transformation operations are not performed as soon as they are encountered. The operations would be stored in the DAG and are evaluated once it finds the first RDD action.</p>
<p><strong>In-Memory Processing:</strong> The PySpark RDD is used to help in loading data from the disk to the memory. You can persist RDDs in the memory for reusing the computations.</p>
<hr/>
<h3 class="h3">28) Explain the common workflow of a spark program.</h3>
<p>The common workflow of a spark program can be described in the following steps:</p>
<ul class="points">
<li>In the first step, we create the input RDDs depending on the external data. Data can be obtained from different data sources.</li>
<li>After creating the PySpark RDDs, we run the RDD transformation operations such as filter() or map() to create new RDDs depending on the business logic.</li>
<li>If we require any intermediate RDDs to reuse for later purposes, we can persist those RDDs. </li>
<li>Finally, if any action operations like first(), count(), etc., are present, Spark launches it to initiate parallel computation. </li>
</ul>
<hr/>
<h3 class="h3">29) How can you implement machine learning in Spark?</h3>
<p>We can implement machine learning in Spark by using MLlib. Spark provides a scalable machine learning record called MLlib. It is mainly used to create machine learning scalable and straightforward with ordinary learning algorithms and use cases like clustering, weakening filtering, dimensional lessening, etc.</p>
<hr/>
<h3 class="h3">30) What do you understand by custom profilers in PySpark?</h3>
<p>PySpark supports custom profilers. The custom profilers are used for building predictive models. Profilers are also used for data review to ensure that it is valid, and we can use it in consumption. When we require a custom profiler, it has to define some of the following methods:</p>
<ul class="points">
<li><strong>stats:</strong> This is used to return collected stats of profiling.</li>
<li><strong>profile:</strong> This is used to produce a system profile of some sort.</li>
<li><strong>dump:</strong> This is used to dump the profiles to a specified path.</li>
<li><strong>dump(id, path):</strong> This is used to dump a specific RDD id to the path given.</li>
<li><strong>add:</strong> This is used for adding profile to existing accumulated profile. The profile class has to be selected at the time of SparkContext creation.</li>
</ul>
<hr/>
<h3 class="h3">31) What do you understand by Spark driver?</h3>
<p>The Spark driver is a plan that runs on the master node of a machine. It is mainly used to state actions and alterations on data RDDs.</p>
<hr/>
<h3 class="h3">32) What is PySpark SparkJobinfo?</h3>
<p>The PySpark SparkJobinfo is used to get information about the SparkJobs that are in execution.</p>
<p>Following is the code for using the SparkJobInfo:</p>
<div class="codeblock"><textarea name="code" class="xml">
class SparkJobInfo(namedtuple("SparkJobInfo", "jobId stageIds status ")): 
</textarea></div>
<hr/>
<h3 class="h3">33) What are the main functions of Spark core?</h3>
<p>The main task of Spark Core is to implement several vital functions such as memory management, fault-tolerance, monitoring jobs, job setting up, and communication with storage systems. It also contains additional libraries, built atop the middle that is used to diverse workloads for streaming, machine learning, and SQL.</p>
<p><strong>The Spark Core is mainly used for the following tasks:</strong></p>
<ul class="points">
<li>Fault tolerance and recovery.</li>
<li>To interact with storage systems.</li>
<li>Memory management.</li>
<li>Scheduling and monitoring jobs on a cluster.</li>
</ul>
<hr/>
<h3 class="h3">34) What do you understand by PySpark SparkStageinfo?</h3>
<p>The PySpark SparkStageInfo is used to get information about the SparkStages available at that time. Following is the code used for SparkStageInfo:</p>
<div class="codeblock"><textarea name="code" class="xml">
class SparkStageInfo(namedtuple("SparkStageInfo", "stageId currentAttemptId name numTasks unumActiveTasks" "numCompletedTasks numFailedTasks" )):
</textarea></div>
<hr/>
<h3 class="h3">35) What is the use of Spark execution engine?</h3>
<p>The Apache Spark execution engine is a chart execution engine that facilitates users to examine massive data sets with a high presentation. You need to detain Spark in the memory to pick up performance radically if you want data to be manipulated with manifold stages of processing.</p>
<hr/>
<h3 class="h3">36) What is the use of Akka in PySpark?</h3>
<p>Akka is used in PySpark for scheduling. When a worker requests a task to the master after registering, the master assigns a task to him. In this case, Akka sends and receives messages between the workers and masters.</p>
<hr/>
<h3 class="h3">37) What do you understand by startsWith() and endsWith() methods in PySpark?</h3>
<p>The startsWith() and endsWith() methods in PySpark belong to the Column class and are used to search DataFrame rows by checking if the column value starts with some value or ends with some value. Both are used for filtering data in applications. </p>
<ul class="points">
<li><strong>startsWith() method:</strong> This method is used to return a Boolean value. It shows TRUE when the column's value starts with the specified string and FALSE when the match is not satisfied in that column value.</li>
<li><strong>endsWith() method:</strong> This method is used to return a Boolean value. It shows TRUE when the column's value ends with the specified string and FALSE when the match is not satisfied in that column value. Both methods are case-sensitive.</li>
</ul>
<hr/>
<h3 class="h3">38) What do you understand by RDD Lineage?</h3>
<p>The RDD lineage is a procedure that is used to reconstruct the lost data partitions. The Spark does not hold up data replication in the memory. If any data is lost, we have to rebuild it using RDD lineage. This is the best use case as RDD always remembers how to construct from other datasets.</p>
<hr/>
<h3 class="h3">39) Can we create PySpark DataFrame from external data sources?</h3>
<p>Yes, we can create PySpark DataFrame from external data sources. The real-time applications use external file systems like local, HDFS, HBase, MySQL table, S3 Azure, etc. The following example shows how to create DataFrame by reading data from a csv file present in the local system:</p>
<div class="codeblock"><textarea name="code" class="xml">
df = spark.read.csv("/path/to/file.csv")
</textarea></div>
<p>PySpark supports csv, text, avro, parquet, tsv and many other file extensions.</p>
<hr/>
<h3 class="h3">40) What are the main attributes used in SparkConf? </h3>
<p>Following is the list of main attributes used in SparkConf: </p>
<ul class="points">
<li><strong>set(key, value):</strong> This attribute is used for setting the configuration property. </li>
<li><strong>setSparkHome(value):</strong> This attribute enables the setting Spark installation path on worker nodes.</li>
<li><strong>setAppName(value):</strong> This attribute is used for setting the application name.</li>
<li><strong>setMaster(value):</strong> This attribute is used to set the master URL. </li>
<li><strong>get(key, defaultValue=None):</strong> This attribute supports getting a configuration value of a key.</li>li>
</ul>
<hr/>
<h3 class="h3">41) How can you associate Spark with Apache Mesos?</h3>
<p>We can use the following steps to associate Spark with Mesos:</p>
<ul class="points">
<li>First, configure the sparkle driver program to associate with Mesos.</li>
<li>The Spark paired bundle must be in the area open by Mesos.</li>
<li>After that, install Apache Spark in a similar area as Apache Mesos and design the property "spark.mesos.executor.home" to point to the area where it is introduced.</li>
</ul>
<hr/>
<h3 class="h3">42) What are the main file systems supported by Spark?</h3>
<p>Spark supports the following three file systems:</p>
<ul class="points">
<li>Local File system.</li>
<li>Hadoop Distributed File System (HDFS).</li>
<li>Amazon S3</li>
</ul>
<hr/>
<h3 class="h3">43) How can we trigger automatic cleanups in Spark to handle accumulated metadata?</h3>
<p>We can trigger the automatic cleanups in Spark by setting the parameter ' Spark.cleaner.ttl' or separating the long-running jobs into dissimilar batches and writing the mediator results to the disk.</p>
<hr/>
<h3 class="h3">44) How can you limit information moves when working with Spark?</h3>
<p>We can limit the information moves when working with Spark by using the following manners:</p>
<ul class="points">
<li>Communicate</li>
<li>Accumulator factors </li>
</ul>
<hr/>
<h3 class="h3">45) How is Spark SQL different from HQL and SQL?</h3>
<p>Hive is used in HQL (Hive Query Language), and Spark SQL is used in Structured Query language for processing and querying data. We can easily join SQL table and HQL table to Spark SQL. Flash SQL is used as a unique segment on the Spark Core motor that supports SQL and Hive Query Language without changing any sentence structure.</p>
<hr/>
<h3 class="h3">46) What is DStream in PySpark?</h3>
<p>In PySpark, DStream stands for Discretized Stream. It is a group of information or gathering of RDDs separated into little clusters. It is also known as Apache Spark Discretized Stream and is used as a gathering of RDDs in the grouping. DStreams are based on Spark RDDs and are used to enable Streaming to flawlessly coordinate with some other Apache Spark segments like Spark MLlib and Spark SQL.</p>
<hr/>





<script src="https://static.javatpoint.com/js/shcoreandbrush.js"></script>
<script type="text/javascript"> dp.SyntaxHighlighter.HighlightAll('code'); </script>
<script src="https://static.javatpoint.com/lazysizes.min.js?v=5.8" async></script>









			@endsection