@extends('Frontend.layouts.app')
@section('content')

	<section class="job-categories">
		<div class="auto-container">
			<div class="sec-title text-center">
				<h2>Java Interview Questions and Answers</h2>
				
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





			<h3 class="h3">1) What is Java?</h3>
			<p>Java is the high-level, object-oriented, robust, secure programming language, platform-independent, high performance, Multithreaded, and portable programming language. It was developed by <strong>James Gosling</strong> in June 1991. It can also be known as the platform as it provides its own JRE and API. </p>
			<hr/>
			<h3 class="h3">2) What are the differences between C++ and Java?</h3>
			<p>The differences between <a href="cpp-tutorial">C++</a> and Java are given in the following table.</p>
			<table class="alt">
			<tr><th>Comparison Index</th> <th>C++</th><th>Java</th></tr>
			<tr><td><strong>Platform-independent</strong></td><td>C++ is platform-dependent.</td><td>Java is platform-independent.</td></tr>
			<tr><td><strong>Mainly used for</strong></td><td>C++ is mainly used for system programming.</td><td>Java is mainly used for application programming. It is widely used in window, web-based, enterprise and mobile applications.</td></tr>
			<tr><td><strong>Design Goal</strong></td><td>C++ was designed for systems and applications programming. It was an extension of "c-programming-language-tutorial" C programming language .</td><td>Java was designed and created as an interpreter for printing systems but later extended as a support network computing. It was designed with a goal of being easy to use and accessible to a broader audience.
			</td></tr>
			<tr><td><strong>Goto</strong></td><td>C++ supports the  goto statement.</td><td>Java doesn't support the goto statement.</td></tr>
			<tr><td><strong>Multiple inheritance</strong></td><td>C++ supports multiple inheritance.</td><td>Java doesn't support multiple inheritance through class. It can be achieved by  interfaces in java .</td></tr>
			<tr><td><strong>Operator Overloading</strong></td><td>C++ supports  operator overloading .</td><td>Java doesn't support operator overloading.</td></tr>
			<tr><td><strong>Pointers</strong></td><td>C++ supports pointers . You can write pointer program in C++.</td><td>Java supports pointer internally. However, you can't write the pointer program in java. It means java has restricted pointer support in Java.</td></tr>
			<tr><td><strong>Compiler and Interpreter</strong></td><td>C++ uses compiler only. C++ is compiled and run using the compiler which converts source code into machine code so, C++ is platform dependent.
			</td><td>Java uses compiler and interpreter both. Java source code is converted into bytecode at compilation time. The interpreter executes this bytecode at runtime and produces output. Java is interpreted that is why it is platform independent. </td></tr>
			<tr><td><strong>Call by Value and Call by reference</strong></td><td>C++ supports both call by value and call by reference.</td><td>Java supports call by value only. There is no call by reference in java.</td></tr>
			<tr><td><strong>Structure and Union</strong></td><td>C++ supports structures and unions.</td><td>Java doesn't support structures and unions.</td></tr>
			<tr><td><strong>Thread Support</strong></td><td>C++ doesn't have built-in support for threads. It relies on third-party libraries for thread support.</td><td>Java has built-in  thread  support.</td></tr>
			<tr><td><strong>Documentation comment</strong></td><td>C++ doesn't support documentation comment.</td><td>Java supports documentation comment (/** ... */) to create documentation for java source code.</td></tr>
			<tr><td><strong>Virtual Keyword</strong></td><td>C++ supports virtual keyword so that we can decide whether or not override a function.</td><td>Java has no virtual keyword. We can override all non-static methods by default. In other words, non-static methods are virtual by default.</td></tr>
			<tr><td><strong>unsigned right shift >>></strong></td><td>C++ doesn't support >>> operator.</td><td>Java supports unsigned right shift >>> operator that fills zero at the top for the negative numbers. For positive numbers, it works same like >> operator.</td></tr>
			<tr><td><strong>Inheritance Tree</strong></td><td>C++ creates a new inheritance tree always.</td><td>Java uses a single inheritance tree always because all classes are the child of Object class in java. The object class is the root of the <a href="inheritance-in-java">inheritance</a> tree in java.</td></tr>
			<tr><td><strong>Hardware</strong></td><td>C++ is nearer to hardware.</td><td>Java is not so interactive with hardware.</td></tr>
			<tr><td><strong>Object-oriented</strong></td><td>C++ is an object-oriented language. However, in C language, single root hierarchy is not possible.</td><td>Java is also an <a href="java-oops-concepts">object-oriented</a> language. However, everything (except fundamental types) is an object in Java. It is a single root hierarchy as everything gets derived from java.lang.Object.
			</td></tr>
			</table>
			<hr/>
			<h3 class="h3">3) List the features of Java Programming language.</h3>
			<p>There are the following features in Java Programming Language.</p>
			<ul class="points">
			<li><strong>Simple:</strong> Java is easy to learn. The syntax of Java is based on C++ which makes easier to write the program in it. </li><br/>
			<li><strong>Object-Oriented:</strong> Java follows the object-oriented paradigm which allows us to maintain our code as the combination of different type of objects that incorporates both data and behavior.</li><br/>
			<li><strong>Portable:</strong> Java supports read-once-write-anywhere approach. We can execute the Java program on every machine. Java program (.java) is converted to bytecode (.class) which can be easily run on every machine.</li><br/>
			<li><strong>Platform Independent:</strong> Java is a platform independent programming language. It is different from other programming languages like C and C++ which needs a platform to be executed. Java comes with its platform on which its code is executed. Java doesn't depend upon the operating system to be executed. </li><br/>
			<li><strong>Secured:</strong> Java is secured because it doesn't use explicit pointers. Java also provides the concept of ByteCode and Exception handling which makes it more secured.</li><br/>
			<li><strong>Robust:</strong> Java is a strong programming language as it uses strong memory management. The concepts like Automatic garbage collection, Exception handling, etc. make it more robust. </li><br/>
			<li><strong>Architecture Neutral:</strong> Java is architectural neutral as it is not dependent on the architecture. In C, the size of data types may vary according to the architecture (32 bit or 64 bit) which doesn't exist in Java.</li><br/>
			<li><strong>Interpreted:</strong> Java uses the Just-in-time (JIT) interpreter along with the compiler for the program execution.</li><br/>
			<li><strong>High Performance:</strong> Java is faster than other traditional interpreted programming languages because Java bytecode is "close" to native code. It is still a little bit slower than a compiled language (e.g., C++).</li><br/>
			<li><strong>Multithreaded:</strong> We can write Java programs that deal with many tasks at once by defining multiple threads. The main advantage of multi-threading is that it doesn't occupy memory for each thread. It shares a common memory area. Threads are important for multi-media, Web applications, etc.</li><br/>
			<li><strong>Distributed:</strong> Java is distributed because it facilitates users to create distributed applications in Java. RMI and EJB are used for creating distributed applications. This feature of Java makes us able to access files by calling the methods from any machine on the internet.</li><br/>
			<li><strong>Dynamic:</strong> Java is a dynamic language. It supports dynamic loading of classes. It means classes are loaded on demand. It also supports functions from its native languages, i.e., C and C++.</li><br/>
			</ul>
			<hr/>
			<h3 class="h3">4) What do you understand by Java virtual machine?</h3>
			<p><a href="jvm-java-virtual-machine">Java Virtual Machine</a> is a virtual machine that enables the computer to run the Java program. JVM acts like a run-time engine which calls the main method present in the Java code. JVM is the specification which must be implemented in the computer system. The Java code is compiled by JVM to be a Bytecode which is machine independent and close to the native code.</p>
			<hr/>
		
			<h3 class="h3">5) What is the difference between JDK, JRE, and JVM?</h3>
			<h3 class="h4">JVM</h3>
			<p>JVM is an acronym for Java Virtual Machine; it is an abstract machine which provides the runtime environment in which Java bytecode can be executed. It is a specification which specifies the working of Java Virtual Machine. Its implementation has been provided by Oracle and other companies. Its implementation is known as JRE.
			</p>
			<p>JVMs are available for many hardware and software platforms (so JVM is platform dependent). It is a runtime instance which is created when we run the Java class. There are three notions of the JVM: specification, implementation, and instance. </p>
			<h3 class="h4">JRE</h3>
			<p>JRE stands for Java Runtime Environment. It is the implementation of JVM. The Java Runtime Environment is a set of software tools which are used for developing Java applications. It is used to provide the runtime environment. It is the implementation of JVM. It physically exists. It contains a set of libraries + other files that JVM uses at runtime.
			</p>
			<h3 class="h4">JDK</h3>
			<p>JDK is an acronym for Java Development Kit. It is a software development environment which is used to develop Java applications and applets. It physically exists. It contains JRE + development tools. JDK is an implementation of any one of the below given Java Platforms released by Oracle Corporation:</p>
			<ul class="points">
			<li>Standard Edition Java Platform</li>
			<li>Enterprise Edition Java Platform</li>
			<li>Micro Edition Java Platform</li>
			</ul>
			<a href="difference-between-jdk-jre-and-jvm"> .</a>
			<hr/>
			<h3 class="h3">6) How many types of memory areas are allocated by JVM?</h3>
			<p>Many types:</p>
			<ol>
			<li><strong>Class(Method) Area:</strong> Class Area stores per-class structures such as the runtime constant pool, field, method data, and the code for methods.</li>
			<li><strong>Heap:</strong> It is the runtime data area in which the memory is allocated to the objects</li>
			<li><strong>Stack:</strong> Java Stack stores frames. It holds local variables and partial results, and plays a part in method invocation and return. Each thread has a private JVM stack, created at the same time as the thread. A new frame is created each time a method is invoked. A frame is destroyed when its method invocation completes.</li>
			<li><strong>Program Counter Register:</strong> PC (program counter) register contains the address of the Java virtual machine instruction currently being executed.</li>
			<li><strong>Native Method Stack:</strong> It contains all the native methods used in the application.</li>
			</ol>
			<a href="internal-details-of-jvm"> .</a>
			<hr/>
			<h3 class="h3">7) What is JIT compiler?</h3>
			<p><b>Just-In-Time(JIT) compiler:</b> It is used to improve the performance. JIT compiles parts of the bytecode that have similar functionality at the same time, and hence reduces the amount of time needed for compilation. Here the term &ldquo;compiler&rdquo; refers to a translator from the instruction set of a Java virtual machine (JVM) to the instruction set of a specific CPU.</p>
			<hr/>
			<h3 class="h3">8) What is the platform?</h3>
			<p>A platform is the hardware or software environment in which a piece of software is executed. There are two types of platforms, software-based and hardware-based. Java provides the software-based platform.
			</p>
			<hr/>
			<h3 class="h3">9) What are the main differences between the Java platform and other platforms?</h3>
			<p>There are the following differences between the Java platform and other platforms.</p>
			<ul class="points">
			<li>Java is the software-based platform whereas other platforms may be the hardware platforms or software-based platforms.</li>
			<li>Java is executed on the top of other hardware platforms whereas other platforms can only have the hardware components.</li>
			</ul>
			<hr/>
			<h3 class="h3">10) What gives Java its 'write once and run anywhere' nature? </h3>
			<p>The bytecode. Java compiler converts the Java programs into the class file (Byte Code) which is the intermediate language between source code and machine code. This bytecode is not platform specific and can be executed on any computer.</p>
			<hr/>
			<h3 class="h3">11) What is classloader?</h3>
			<p>Classloader is a subsystem of JVM which is used to load class files. Whenever we run the java program, it is loaded first by the classloader. There are three built-in classloaders in Java.</p>
			<ol class="points">
			<li><strong>Bootstrap ClassLoader</strong>: This is the first classloader which is the superclass of Extension classloader. It loads the <em>rt.jar</em> file which contains all class files of Java Standard Edition like java.lang package classes, java.net package classes, java.util package classes, java.io package classes, java.sql package classes, etc.</li>
			<li><strong>Extension ClassLoader</strong>: This is the child classloader of Bootstrap and parent classloader of System classloader. It loads the jar files located inside <em>$JAVA_HOME/jre/lib/ext</em> directory.</li>
			<li><strong>System/Application ClassLoader</strong>: This is the child classloader of Extension classloader. It loads the class files from the classpath. By default, the classpath is set to the current directory. You can change the classpath using "-cp" or "-classpath" switch. It is also known as Application classloader.</li>
			</ol>
			<hr/>
			<h3 class="h3">12) Is Empty .java file name a valid source file name?</h3>
			<p>Yes, Java allows to save our java file by <strong>.java</strong> only, we need to compile it by <strong>javac .java</strong> and run by <strong>java classname</strong> Let's take a simple example:</p>
			
			<p>compile it by <strong>javac .java</strong> </p>
			<p>run it by <strong>java A</strong></p>
			<hr/>
			<h3 class="h3">13) Is delete, next, main, exit or null keyword in java?</h3>
			<p>No.</p>
			<hr/>
			<h3 class="h3">14) If I don't provide any arguments on the command line, then what will the value stored in the String array passed into the main() method, empty or NULL?</h3>
			<p>It is empty, but not null.</p>
			<hr/>
			<h3 class="h3">15) What if I write static public void instead of public static void?</h3>
			<p>The program compiles and runs correctly because the order of specifiers doesn't matter in Java.</p>
			<hr/>
			<h3 class="h3">16) What is the default value of the local variables? </h3>
			<p>The local variables are not initialized to any default value, neither primitives nor object references. </p>
			<hr/>
			<h3 class="h3">17) What are the various access specifiers in Java?</h3>
			<p>In Java, access specifiers are the keywords which are used to define the access scope of the method, class, or a variable. In Java, there are four access specifiers given below.</p>
			<ul class="points">
			<li><strong>Public</strong> The classes, methods, or variables which are defined as public, can be accessed by any class or method.</li>
			<li><strong>Protected</strong> Protected can be accessed by the class of the same package, or by the sub-class of this class, or within the same class.</li>
			<li><strong>Default</strong> Default are accessible within the package only. By default, all the classes, methods, and variables are of default scope.</li>
			<li><strong>Private</strong> The private class, methods, or variables defined as private can be accessed within the class only.</li>
			</ul>
			<hr/>
			<h3 class="h3">18) What is the purpose of static methods and variables?</h3>
			<p>The methods or variables defined as static are shared among all the objects of the class. The static is the part of the class and not of the object. The static variables are stored in the class area, and we do not need to create the object to access such variables. Therefore, static is used in the case, where we need to define variables or methods which are common to all the objects of the class.</p>
			<p>For example, In the class simulating the collection of the students in a college, the name of the college is the common attribute to all the students. Therefore, the college name will be defined as <strong>static</strong>.</p>
			<hr/>
			<h3 class="h3">19) What are the advantages of Packages in Java?</h3>
			<p>There are various advantages of defining packages in Java.</p>
			<ul class="points">
			<li>Packages avoid the name clashes.</li>
			<li>The Package provides easier access control.</li>
			<li>We can also have the hidden classes that are not visible outside and used by the package.</li>
			<li>It is easier to locate the related classes.</li>
			</ul>
			<hr/>
			<h3 class="h3">20) What is the output of the following Java program?</h3>
			
			<p>The output of the above code will be</p>
			
			<p><strong>Explanation</strong></p>
			<p>In the first case, 10 and 20 are treated as numbers and added to be 30. Now, their sum 30 is treated as the string and concatenated with the string <strong>Javatpoint</strong>. Therefore, the output will be <strong>30Javatpoint</strong>.</p>
			<p>In the second case, the string Javatpoint is concatenated with 10 to be the string <strong>Javatpoint10</strong> which will then be concatenated with 20 to be <strong>Javatpoint1020</strong>.</p>
			<hr/>
			<h3 class="h3">21) What is the output of the following Java program?</h3>
			
			<p>The output of the above code will be</p>
			
			<p><strong>Explanation</strong></p>
			<p>In the first case, The numbers 10 and 20 will be multiplied first and then the result 200 is treated as the string and concatenated with the string <strong>Javatpoint</strong> to produce the output <strong>200Javatpoint</strong>.</p>
			<p>In the second case, The numbers 10 and 20 will be multiplied first to be 200 because the precedence of the multiplication is higher than addition. The result 200 will be treated as the string and concatenated with the string <strong>Javatpoint</strong>to produce the output as <strong>Javatpoint200</strong>.</p>
			<hr/>
			<h3 class="h3">22) What is the output of the following Java program?</h3>
			
			<p>The above code will give the compile-time error because the for loop demands a boolean value in the second part and we are providing an integer value, i.e., 0.</p>
			<hr/>
			
			<a id="oopsinterview"></a>
			
			<p>There is given more than 50 OOPs (Object-Oriented Programming and System) interview questions. However, they have been categorized in many sections such as constructor interview questions, static interview questions, Inheritance Interview questions, Abstraction interview question, Polymorphism interview questions, etc. for better understanding.</p>
			<hr/>
			<h3 class="h3">23) What is object-oriented paradigm?</h3>
			<p>It is a programming paradigm based on objects having data and methods defined in the class to which it belongs. Object-oriented paradigm aims to incorporate the advantages of modularity and reusability. Objects are the instances of classes which interacts with one another to design applications and programs. There are the following features of the object-oriented paradigm.</p>
			<ul class="points">
			<li>Follows the bottom-up approach in program design.</li>
			<li>Focus on data with methods to operate upon the object's data</li>
			<li>Includes the concept like Encapsulation and abstraction which hides the complexities from the user and show only functionality.</li>
			<li>Implements the real-time approach like inheritance, abstraction, etc.</li>
			<li>The examples of the object-oriented paradigm are C++, Simula, Smalltalk, Python, C#, etc.</li>
			</ul>
			<hr/>
			<h3 class="h3">24) What is an object?</h3>
			<p>The Object is the real-time entity having some state and behavior. In Java, Object is an instance of the class having the instance variables as the state of the object and the methods as the behavior of the object. The object of a class can be created by using the <strong>new</strong> keyword.</p>
			<hr/>
			<h3 class="h3">25) What is the difference between an object-oriented programming language and object-based programming language?</h3>
			<p>There are the following basic differences between the object-oriented language and object-based language.</p>
			<ul class="points">
			<li>Object-oriented languages follow all the concepts of OOPs whereas, the object-based language doesn't follow all the concepts of OOPs like inheritance and polymorphism.</li>
			<li>Object-oriented languages do not have the inbuilt objects whereas Object-based languages have the inbuilt objects, for example, JavaScript has window object.</li>
			<li>Examples of object-oriented programming are Java, C#, Smalltalk, etc. whereas the examples of object-based languages are JavaScript, VBScript, etc. </li>
			</ul>
			<hr/>
			<h3 class="h3">26) What will be the initial value of an object reference which is defined as an instance variable? </h3>
			<p>All object references are initialized to null in Java.</p>
			<hr/>
			
			<hr/>
			<h3 class="h3">27) What is the constructor?</h3>
			<p>The constructor can be defined as the special type of method that is used to initialize the state of an object. It is invoked when the class is instantiated, and the memory is allocated for the object. Every time, an object is created using the <strong>new</strong> keyword, the default constructor of the class is called. The name of the constructor must be similar to the class name. The constructor must not have an explicit return type.</p>
			
			<hr/>
			<h3 class="h3">28) How many types of constructors are used in Java?</h3>
			<p>Based on the parameters passed in the constructors, there are two types of constructors in Java.</p>
			<ul class="points">
			<li><strong>Default Constructor:</strong> default constructor is the one which does not accept any value. The default constructor is mainly used to initialize the instance variable with the default values. It can also be used for performing some useful task on object creation. A default constructor is invoked implicitly by the compiler if there is no constructor defined in the class.</li>
			<li><strong>Parameterized Constructor:</strong> The parameterized constructor is the one which can initialize the instance variables with the given values. In other words, we can say that the constructors which can accept the arguments are called parameterized constructors.</li>
			</ul>
			<img src="https://static.javatpoint.com/images/core/java-constructor.png" alt="Java Constructors">
			<hr/>
			<h3 class="h3">29) What is the purpose of a default constructor?</h3>
			<p>The purpose of the default constructor is to assign the default value to the objects. The java compiler creates a default constructor implicitly if there is no constructor in the class. </p>
			
			<h3 class="h3">30) Does constructor return any value?</h3>
			<p><b>Ans:</b> yes, The constructor implicitly returns the current instance of the class (You can't use an explicit return type with the constructor).<a href="constructor">  .</a></p>
			<hr/>
			<h3 class="h3">31)Is constructor inherited?</h3>
			<p>No, The constructor is not inherited.</p>
			<hr/>
			<h3 class="h3">32) Can you make a constructor final?</h3>
			<p>No, the constructor can't be final.</p>
			<hr/>
			<h3 class="h3">33) Can we overload the constructors?</h3>
			<p>Yes, the constructors can be overloaded by changing the number of arguments accepted by the constructor or by changing the data type of the parameters. Consider the following example.</p>
			
			<p>In the above program, The constructor Test is overloaded with another constructor. In the first call to the constructor, The constructor with one argument is called, and i will be initialized with the value 10. However, In the second call to the constructor, The constructor with the 2 arguments is called, and i will be initialized with the value 15.</p>
			<hr/>
			<h3 class="h3">34) What do you understand by copy constructor in Java?</h3>
			<p>There is no copy constructor in java. However, we can copy the values from one object to another like copy constructor in C++.</p>
			<p>There are many ways to copy the values of one object into another in java. They are:</p>
			<ul class="points">
			<li>By constructor</li>
			<li>By assigning the values of one object into another</li>
			<li>By clone() method of Object class</li>
			</ul>
			
			<h3 class="h3">35) What are the differences between the constructors and methods?</h3>
			<p>There are many differences between constructors and methods. They are given below.</p>
			<table class="alt">
			<tr><th>Java Constructor</th><th>Java Method</th></tr>
			<tr><td>A constructor is used to initialize the state of an object.</td><td>A method is used to expose the behavior of an object.</td></tr>
			<tr><td>A constructor must not have a return type.</td><td>A method must have a return type.</td></tr>
			<tr><td>The constructor is invoked implicitly.</td><td>The method is invoked explicitly.</td></tr>
			<tr><td>The Java compiler provides a default constructor if you don't have any constructor in a class.</td><td>The method is not provided by the compiler in any case.</td></tr>
			<tr><td>The constructor name must be same as the class name.</td><td> The method name may or may not be same as class name.</td></tr>
			</table>
			<br>
			<img src="https://static.javatpoint.com/images/constructor-vs-method-in-java.jpg" alt="Java Constructors vs Methods">
			<hr/>
			
			<h3 class="h3">37) What is the output of the following Java program? </h3>
			
			<p>The output of the program is 0 because the variable i is initialized to 0 internally. As we know that a default constructor is invoked implicitly if there is no constructor in the class, the variable i is initialized to 0 since there is no constructor in the class.</p>
			<hr/>






























			


	</section>
	
	@endsection
	