@extends('Frontend.layouts.app')
@section('content')

	<section class="job-categories">
		<div class="auto-container">
			<div class="sec-title text-center">
				<h2>Nosql Interview Questions and Answers</h2>
				
			</div>
		</section>
	<section>
		<div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="sec-title">
		<div>

			1. What is NoSQL, and how does it differ from traditional relational databases?<br>

			NoSQL (Not Only SQL) is a category of databases that use a non-relational data model.<br> Unlike traditional relational databases, NoSQL databases are schema-less, scalable, and designed to handle unstructured or semi-structured data.<br>
			2. What are the main types of NoSQL databases, and what are their characteristics?<br>
			
			The main types of NoSQL databases are document-based, key-value, column-family, and graph databases. They differ in data models and use cases. For example, document-based databases store data in JSON or BSON documents, while key-value stores use simple key-value pairs.<br>
			3. Explain the CAP theorem and its relevance to NoSQL databases.<br>
			
			The CAP theorem states that in a distributed system, you can have at most two of the following three properties: Consistency, Availability, and Partition Tolerance.<br> NoSQL databases are often designed with a focus on either consistency and availability (CA), consistency and partition tolerance (CP), or availability and partition tolerance (AP), depending on their specific use cases.<br>
			4. What are the advantages and disadvantages of using NoSQL databases?<br>
			
			Advantages of NoSQL databases include scalability, flexibility, and better performance for certain use cases. <br>Disadvantages include the lack of ACID transactions in some cases, a learning curve, and reduced support for complex queries.<br>
			5. When would you choose a document-based NoSQL database like MongoDB over a key-value store like Redis?<br>
			
			Document-based databases like MongoDB are suitable for applications that require complex queries and flexible schemas, whereas key-value stores like Redis are best for high-speed data retrieval and caching.<br>
			6. How does sharding work in NoSQL databases, and why is it important?<br>
			
			Sharding is the process of horizontally partitioning data across multiple servers or nodes.<br> It is important for distributing data and balancing the load in a scalable and fault-tolerant manner.<br>
			7. What is eventual consistency, and how does it relate to NoSQL databases?<br>
			
			Eventual consistency means that in a distributed system, after all updates stop, all replicas will eventually converge to the same value.<br> NoSQL databases often prioritize availability over strong consistency, leading to eventual consistency in some cases.<br>
			8. Explain the use case for a column-family NoSQL database like Apache Cassandra.<br>
			
			Column-family databases are well-suited for applications that require high write and read throughput, such as time-series data, sensor data, and event logging.<br>
			9. What are some common challenges in maintaining and managing NoSQL databases at scale?<br>
			
			Common challenges include data modeling, data consistency in distributed systems, security, and the need for expertise in various NoSQL technologies.<br>

	</section>
	
@endsection
