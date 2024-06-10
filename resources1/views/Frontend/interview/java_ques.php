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
						<h3>Java Interview Questions and Answers</h3>
                      
						<p class="qus">1. What is Java?</p>
						<p class="ans">Java is the high-level, object-oriented, robust, secure programming language, platformindependent, high performance, Multithreaded, and portable programming language. It was developed by James Gosling in June 1991. It can also be known as the platform as it provides its own JRE and API.</p>
                      
                      <p class="qus">2. What are the differences between C++ and Java?</p>
                      <p class="ans">The differences between C++ and Java are given in the following table.</p>
                      <table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Comparison Index</th>
							  <th scope="col">C++</th>
							  <th scope="col">Java</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Platformindependent</td>
							  <td>C++ is platform-dependent</td>
							  <td>Java is platform-independent.</td>
							</tr>
							<tr>
							  <td>Mainly used for</td>
							  <td>C++ is mainly used for system programming.</td>
							  <td>Java is mainly used for application programming. It is widely used in window, web-based, enterprise and mobile applications</td>
							</tr>
							<tr>
							  <td>Design Goal</td>
							  <td>C++ was designed for systems and applications programming. It was an extension of C programming language.</td>
							  <td>Java was designed and created as an interpreter for printing systems but later extended as a support network computing. It was designed with a goal of being easy to use and accessible to a broader audience.</td>
							</tr>
							<tr>
							  <td>Goto</td>
							  <td>C++ supports the goto statement.</td>
							  <td>Java doesn't support the goto statement.</td>
							</tr>
							<tr>
							  <td>Multiple inheritance</td>
							  <td>C++ supports multiple inheritance.</td>
							  <td>Java doesn't support multiple inheritance through class. It can be achieved by interfaces in java.</td>
							</tr>
							<tr>
							  <td>Operator Overloading</td>
							  <td>C++ supports operator overloading.</td>
							  <td>Java doesn't support operator overloading.</td>
							</tr>
							<tr>
							  <td>Pointers</td>
							  <td>C++ supports pointers. You can write pointer program in C++.</td>
							  <td>Java supports pointer internally. However, you can't write the pointer program in java. It means java has restricted pointer support in Java.</td>
							</tr>
							<tr>
							  <td>Compiler and Interpreter</td>
							  <td>C++ uses compiler only. C++ is compiled and run using the compiler which converts source code into machine code so, C++ is platform dependent.</td>
							  <td>Java uses compiler and interpreter both. Java source code is converted into bytecode at compilation time. The interpreter executes this bytecode at runtime and produces output. Java is interpreted that is why it is platform independent.</td>
							</tr>
							<tr>
							  <td>Call by Value and Call by reference</td>
							  <td>C++ supports both call by value and call by reference.</td>
							  <td>Java supports call by value only. There is no call by reference in java.</td>
							</tr>
							<tr>
							  <td>Structure and Union</td>
							  <td>C++ supports structures and unions.</td>
							  <td>Java doesn't support structures and unions.</td>
							</tr>
							<tr>
							  <td>Thread Support</td>
							  <td>C++ doesn't have built-in support for threads. It relies on third-party libraries for thread support.</td>
							  <td>Java has built-in thread support.</td>
							</tr>
							<tr>
							  <td>Documentation comment</td>
							  <td>C++ doesn't support documentation comment.</td>
							  <td>Java supports documentation comment (/** ... */) to create documentation for java source code.</td>
							</tr>
							<tr>
							  <td>Virtual Keyword</td>
							  <td>C++ supports virtual keyword so that we can decide whether or not override a function.</td>
							  <td>Java has no virtual keyword. We can override all non-static methods by default. In other words, non-static methods are virtual by default.</td>
							</tr>
							<tr>
							  <td>unsigned right shift >>></td>
							  <td>C++ doesn't support >>> operator.</td>
							  <td>Java supports unsigned right shift >>> operator that fills zero at the top for the negative numbers. For positive numbers, it works same like >> operator.</td>
							</tr>
							<tr>
							  <td>Inheritance Tree</td>
							  <td>C++ creates a new inheritance tree always.</td>
							  <td>Java uses a single inheritance tree always because all classes are the child of Object class in java. The object class is the root of the inheritance tree in java.</td>
							</tr>
							<tr>
							  <td>Hardware</td>
							  <td>C++ is nearer to hardware.</td>
							  <td>Java is not so interactive with hardware.</td>
							</tr>
							<tr>
							  <td>Object-oriented</td>
							  <td>C++ is an object-oriented language. However, in C language, single root hierarchy is not possible.</td>
							  <td>Java is also an object-oriented language. However, everything (except fundamental types) is an object in Java. It is a single root hierarchy as everything gets derived from java.lang.Object.</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">3) List the features of Java Programming language.</p>
						<p class="ans">There are the following features in Java Programming Language.<br>
<ul>
<li>●	Simple: Java is easy to learn. The syntax of Java is based on C++ which makes easier to write the program in it.</li>
<li>●	
Object-Oriented: Java follows the object-oriented paradigm which allows us to maintain our code as the combination of different type of objects that incorporates both data and behavior.</li>
<li>●	
Portable: Java supports read-once-write-anywhere approach. We can execute the Java program on every machine. Java program (.java) is converted to bytecode (.class) which can be easily run on every machine.</li>
<li>●	
Platform Independent: Java is a platform independent programming language. It is different from other programming languages like C and C++ which needs a platform to be executed. Java comes with its platform on which its code is executed. Java doesn't depend upon the operating system to be executed.</li>
<li>●	
Secured: Java is secured because it doesn't use explicit pointers. Java also provides the concept of ByteCode and Exception handling which makes it more secured.</li>
<li>●	
Robust: Java is a strong programming language as it uses strong memory management. The concepts like Automatic garbage collection, Exception handling, etc. make it more robust.</li>
<li>●	
Architecture Neutral: Java is architectural neutral as it is not dependent on the architecture. In C, the size of data types may vary according to the architecture (32 bit or 64 bit) which doesn't exist in Java.</li>
<li>●	
Interpreted: Java uses the Just-in-time (JIT) interpreter along with the compiler for the program execution.</li>
<li>●	
High Performance: Java is faster than other traditional interpreted programming languages because Java bytecode is "close" to native code. It is still a little bit slower than a compiled language (e.g., C++).</li>
<li>●	
Multithreaded: We can write Java programs that deal with many tasks at once by defining multiple threads. The main advantage of multi-threading is that it doesn't occupy memory for each thread. It shares a common memory area. Threads are important for multi-media, Web applications, etc.</li>
<li>●	
Distributed: Java is distributed because it facilitates users to create distributed applications in Java. RMI and EJB are used for creating distributed applications. This feature of Java makes us able to access files by calling the methods from any machine on the internet.</li>
<li>●	
Dynamic: Java is a dynamic language. It supports dynamic loading of classes. It means classes are loaded on demand. It also supports functions from its native languages, i.e., C and C++.</li>
</ul>
                        </p>
						<p class="qus">4) What do you understand by Java virtual machine?</p>
						<p class="ans">Java Virtual Machine is a virtual machine that enables the computer to run the Java program. JVM acts like a run-time engine which calls the main method present in the Java code. JVM is the specification which must be implemented in the computer system. The Java code is compiled by JVM to be a Bytecode which is machine independent and close to the native code.
                        </p>
						<p class="qus">5) What is the difference between JDK, JRE, and JVM?</p>
						<p class="ans">JVM<br>
JVM is an acronym for Java Virtual Machine; it is an abstract machine which provides the runtime environment in which Java bytecode can be executed. It is a specification which specifies the working of Java Virtual Machine. Its implementation has been provided by Oracle and other companies. Its implementation is known as JRE.<br>
JVMs are available for many hardware and software platforms (so JVM is platform dependent). It is a runtime instance which is created when we run the Java class. There are three notions of the JVM: specification, implementation, and instance.<br>
JRE<br>
JRE stands for Java Runtime Environment. It is the implementation of JVM. The Java Runtime Environment is a set of software tools which are used for developing Java applications. It is used to provide the runtime environment. It is the implementation of JVM. It physically exists. It contains a set of libraries + other files that JVM uses at runtime.<br>
JDK<br>
JDK is an acronym for Java Development Kit. It is a software development environment which is used to develop Java applications and applets. It physically exists. It contains JRE + development tools. JDK is an implementation of any one of the below given Java Platforms released by Oracle Corporation:<br>
<ul>
<li>●	Standard Edition Java Platform</li>
<li>●	Enterprise Edition Java Platform</li>
<li>●	Micro Edition Java Platform</li>
</ul>
                        </p>
						<p class="qus">6) How many types of memory areas are allocated by JVM?</p>
						<p class="ans">Many types:<br>
<ul>
<li>1.	Class(Method) Area: Class Area stores per-class structures such as the runtime constant pool, field, method data, and the code for methods.</li>
<li>2.	Heap: It is the runtime data area in which the memory is allocated to the objects</li>
<li>3.	Stack: Java Stack stores frames. It holds local variables and partial results, and plays a part in method invocation and return. Each thread has a private JVM stack, created at the same time as the thread. A new frame is created each time a method is invoked. A frame is destroyed when its method invocation completes.</li>
<li>4.	Program Counter Register: PC (program counter) register contains the address of the Java virtual machine instruction currently being executed.</li>
<li>5.	Native Method Stack: It contains all the native methods used in the application.</li>
</ul>
                        </p>
						<p class="qus">7) What is JIT compiler?</p>
						<p class="ans">Just-In-Time(JIT) compiler: It is used to improve the performance. JIT compiles parts of the bytecode that have similar functionality at the same time, and hence reduces the amount of time needed for compilation. Here the term “compiler” refers to a translator from the instruction set of a Java virtual machine (JVM) to the instruction set of a specific CPU.
                        </p>
						<p class="qus">8) What is the platform?</p>
						<p class="ans">A platform is the hardware or software environment in which a piece of software is executed. There are two types of platforms, software-based and hardware-based. Java provides the software-based platform.
                        </p>
						<p class="qus">9) What are the main differences between the Java platform and other platforms?</p>
						<p class="ans">There are the following differences between the Java platform and other platforms.<br>
<ul>
<li>●	Java is the software-based platform whereas other platforms may be the hardware platforms or software-based platforms.</li>
<li>●	Java is executed on the top of other hardware platforms whereas other platforms can only have the hardware components.</li>
</ul>
                        </p>
						<p class="qus">10) What gives Java its 'write once and run anywhere' nature?</p>
						<p class="ans">The bytecode. Java compiler converts the Java programs into the class file (Byte Code) which is the intermediate language between source code and machine code. This bytecode is not platform specific and can be executed on any computer.
                        </p>
						<p class="qus">11) What is classloader?</p>
						<p class="ans">Classloader is a subsystem of JVM which is used to load class files. Whenever we run the java program, it is loaded first by the classloader. There are three built-in classloaders in Java.<br>
<ul>
<li>1.	Bootstrap ClassLoader: This is the first classloader which is the superclass of Extension classloader. It loads the rt.jar file which contains all class files of Java Standard Edition like java.lang package classes, java.net package classes, java.util package classes, java.io package classes, java.sql package classes, etc.</li>
<li>2.	Extension ClassLoader: This is the child classloader of Bootstrap and parent classloader of System classloader. It loads the jar files located inside $JAVA_HOME/jre/lib/ext directory.</li>
<li>3.	System/Application ClassLoader: This is the child classloader of Extension classloader. It loads the class files from the classpath. By default, the classpath is set to the current directory. You can change the classpath using "-cp" or "-classpath" switch. It is also known as Application classloader.</li>
</ul>
                        </p>
						<p class="qus">12) Is Empty .java file name a valid source file name?</p>
						<p class="ans">Yes, Java allows to save our java file by .java only, we need to compile it by javac .java and run by java classname Let's take a simple example:<br>
<ul>
<li>1.	//save by .java only</li>
<li>2.	class A{</li>
<li>3.	public static void main(String args[]){</li>
<li>4.	System.out.println("Hello java");  </li>
<li>5.	}  </li>
<li>6.	}  </li>
<li>7.	//compile by javac .java  </li>
<li>8.	//run by     java A  </li>
compile it by javac .java<br>
run it by java A<br>
</ul>
                        </p>
						<p class="qus">13) Is delete, next, main, exit or null keyword in java?</p>
						<p class="ans">No.
                        </p>
						<p class="qus">14) If I don't provide any arguments on the command line, then what will the value stored in the String array passed into the main() method, empty or NULL?</p>
						<p class="ans">It is empty, but not null.
                        </p>
						<p class="qus">15) What if I write static public void instead of public static void?</p>
						<p class="ans">The program compiles and runs correctly because the order of specifiers doesn't matter in Java.
                        </p>
						<p class="qus">16) What is the default value of the local variables?</p>
						<p class="ans">The local variables are not initialized to any default value, neither primitives nor object references.
                        </p>
						<p class="qus">17) What are the various access specifiers in Java?</p>
						<p class="ans">In Java, access specifiers are the keywords which are used to define the access scope of the method, class, or a variable. In Java, there are four access specifiers given below.<br>
<ul>
<li>●	Public The classes, methods, or variables which are defined as public, can be accessed by any class or method.</li>
<li>●	Protected Protected can be accessed by the class of the same package, or by the sub-class of this class, or within the same class.</li>
<li>●	Default Default are accessible within the package only. By default, all the classes, methods, and variables are of default scope.</li>
<li>●	Private The private class, methods, or variables defined as private can be accessed within the class only.</li>
</ul>
                        </p>
						<p class="qus">18) What is the purpose of static methods and variables?</p>
						<p class="ans">static is the part of the class and not of the object. The static variables are stored in the class area, and we do not need to create the object to access such variables. Therefore, static is used in the case, where we need to define variables or methods which are common to all the objects of the class.<br>
For example, In the class simulating the collection of the students in a college, the name of the college is the common attribute to all the students. Therefore, the college name will be defined as static.<br>
The methods or variables defined as static are shared among all the objects of the class. 
                        </p>
						<p class="qus">19) What are the advantages of Packages in Java?</p>
						<p class="ans">There are various advantages of defining packages in Java.<br>
<ul>
<li>●	Packages avoid the name clashes.</li>
<li>●	The Package provides easier access control.</li>
<li>●	We can also have the hidden classes that are not visible outside and used by the package.</li>
<li>●	It is easier to locate the related classes.</li>
</ul>
                        </p>
						<p class="qus">20) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	class Test</li>
<li>2.	{  </li>
<li>3.	    public static void main (String args[])   </li>
<li>4.	    {  </li>
<li>5.System.out.println(10 + 20 + "Javatpoint");   </li>
<li>6.System.out.println("Javatpoint" + 10 + 20);  </li>
<li>7.	    }  </li>
<li>8.	} </li>
</ul>
<p>The output of the above code will be<br>
30Javatpoint<br>
Javatpoint1020<br>
Explanation<br>
In the first case, 10 and 20 are treated as numbers and added to be 30. Now, their sum 30 is treated as the string and concatenated with the string Javatpoint. Therefore, the output will be 30Javatpoint.<br>
In the second case, the string Javatpoint is concatenated with 10 to be the string Javatpoint10 which will then be concatenated with 20 to be Javatpoint1020.<br>
                        </p>
						<p class="qus">21) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	class Test   </li>
<li>2.	{  </li>
<li>3.	    public static void main (String args[])   </li>
<li>4.	    {     </li>
<li>5.	        System.out.println(10 * 20 + "Javatpoint");   </li>
<li>6.	        System.out.println("Javatpoint" + 10 * 20);     </li>
<li>7.	    }     </li>
<li>8.	}     </li>
</ul>
<p>The output of the above code will be<br>
200Javatpoint<br>
Javatpoint200<br>
Explanation<br>
In the first case, The numbers 10 and 20 will be multiplied first and then the result 200 is treated as the string and concatenated with the string Javatpoint to produce the output 200Javatpoint.<br>
In the second case, The numbers 10 and 20 will be multiplied first to be 200 because the precedence of the multiplication is higher than addition. The result 200 will be treated as the string and concatenated with the string Javatpointto produce the output as Javatpoint200.
                        </p>
						<p class="qus">22) What is the output of the following Java program?</p>
						<p class="ans">Classloader is a subsystem of JVM which is used to load class files. Whenever we run the java program, it is loaded first by the classloader. There are three built-in classloaders in Java.<br>
<ul>
<li>1.	class Test   </li>
<li>2.	{  </li>
<li>3.	    public static void main (String args[])   </li>
<li>4.	    {     </li>
<li>5.	        for(int i=0; 0; i++)    </li>
<li>6.	        {  </li>
<li>7.	            System.out.println("Hello Javatpoint");  </li>
<li>8.	        }    </li>
<li>9.	    }     </li>
<li>10.	}   </li>
</ul>
<p>The above code will give the compile-time error because the for loop demands a boolean value in the second part and we are providing an integer value, i.e., 0.
                        </p>
						<p class="qus">23) What is object-oriented paradigm?</p>
						<p class="ans">It is a programming paradigm based on objects having data and methods defined in the class to which it belongs. Object-oriented paradigm aims to incorporate the advantages of modularity and reusability. Objects are the instances of classes which interacts with one another to design applications and programs. There are the following features of the object-oriented paradigm.<br>
<ul>
<li>●	Follows the bottom-up approach in program design.</li>
<li>●	Focus on data with methods to operate upon the object's data</li>
<li>●	Includes the concept like Encapsulation and abstraction which hides the complexities from the user and show only functionality.</li>
<li>●	Implements the real-time approach like inheritance, abstraction, etc.</li>
<li>●	The examples of the object-oriented paradigm are C++, Simula, Smalltalk, Python, C#, etc.</li>
</ul>
                        </p>
						<p class="qus">24) What is an object?</p>
						<p class="ans">The Object is the real-time entity having some state and behavior. In Java, Object is an instance of the class having the instance variables as the state of the object and the methods as the behavior of the object. The object of a class can be created by using the new keyword.
                        </p>
						<p class="qus">25) What is the difference between an object-oriented programming language and object-based programming language?</p>
						<p class="ans">There are the following basic differences between the object-oriented language and object-based language.<br>
<ul>
<li>●	Object-oriented languages follow all the concepts of OOPs whereas, the object-based language doesn't follow all the concepts of OOPs like inheritance and polymorphism.</li>
<li>●	Object-oriented languages do not have the inbuilt objects whereas Object-based languages have the inbuilt objects, for example, JavaScript has window object.</li>
<li>●	Examples of object-oriented programming are Java, C#, Smalltalk, etc. whereas the examples of object-based languages are JavaScript, VBScript, etc.</li>
</ul>
                        </p>
						<p class="qus">26) What will be the initial value of an object reference which is defined as an instance variable?</p>
						<p class="ans">All object references are initialized to null in Java.
                        </p>
						<p class="qus">27) What is the constructor?</p>
						<p class="ans">The constructor can be defined as the special type of method that is used to initialize the state of an object. It is invoked when the class is instantiated, and the memory is allocated for the object. Every time, an object is created using the new keyword, the default constructor of the class is called. The name of the constructor must be similar to the class name. The constructor must not have an explicit return type.
                        </p>
						<p class="qus">28) How many types of constructors are used in Java?</p>
						<p class="ans">Based on the parameters passed in the constructors, there are two types of constructors in Java.<br>
<ul>
<li>●	Default Constructor: default constructor is the one which does not accept any value. The default constructor is mainly used to initialize the instance variable with the default values. It can also be used for performing some useful task on object creation. A default constructor is invoked implicitly by the compiler if there is no constructor defined in the class.</li>
<li>●	Parameterized Constructor: The parameterized constructor is the one which can initialize the instance variables with the given values. In other words, we can say that the constructors which can accept the arguments are called parameterized constructors.</li>
</ul>
<br>
<img src="<?= base_url(); ?>assets/img/constructors.png" style="width:500px;" />
                        </p>
						<p class="qus">29) What is the purpose of a default constructor?</p>
						<p class="ans">The purpose of the default constructor is to assign the default value to the objects. The java compiler creates a default constructor implicitly if there is no constructor in the class.<br>
<ul>
<li>1.	class Student3{  </li>
<li>2.	int id;  </li>
<li>3.	String name;  </li>
<li>4.	  </li>
<li>5.	void display(){System.out.println(id+" "+name);}  </li>
<li>6.	  </li>
<li>7.	public static void main(String args[]){  </li>
<li>8.	Student3 s1=new Student3();  </li>
<li>9.	Student3 s2=new Student3();  </li>
<li>10.	s1.display();  </li>
<li>11.	s2.display();  </li>
<li>12.	}  </li>
<li>13.	}</li>
</ul>
<p>Output:<br>
0 null<br>
0 null<br>

Explanation: In the above class, you are not creating any constructor, so compiler provides you a default constructor. Here 0 and null values are provided by default constructor.<br>
<img src="<?= base_url(); ?>assets/img/compiler.png" style="width:500px;" />
                        </p>
						<p class="qus">30) Does constructor return any value?</p>
						<p class="ans">Ans: yes, The constructor implicitly returns the current instance of the class (You can't use an explicit return type with the constructor)
                        </p>
						<p class="qus">31)Is constructor inherited?</p>
						<p class="ans">No, The constructor is not inherited.
                        </p>
						<p class="qus">32) Can you make a constructor final?</p>
						<p class="ans">No, the constructor can't be final.
                        </p>
						<p class="qus">33) Can we overload the constructors?</p>
						<p class="ans">Yes, the constructors can be overloaded by changing the number of arguments accepted by the constructor or by changing the data type of the parameters. Consider the following example.<br>
<ul>
<li>1.	class Test     </li>
<li>2.	{  </li>
<li>3.	    int i;     </li>
<li>4.	    public Test(int k)   </li>
<li>5.	    {    </li>
<li>6.	        i=k;  </li>
<li>7.	    }      </li>
<li>8.	    public Test(int k, int m)    </li>
<li>9.	    {    </li>
<li>10.	        System.out.println("Hi I am assigning the value max(k, m) to i");    </li>
<li>11.	        if(k>m)    </li>
<li>12.	        {    </li>
<li>13.	            i=k;     </li>
<li>14.	        }  </li>
<li>15.	        else     </li>
<li>16.	        {  </li>
<li>17.	            i=m;    </li>
<li>18.	        }    </li>
<li>19.	    }    </li>
<li>20.	}    </li>
<li>21.	public class Main     </li>
<li>22.	{    </li>
<li>23.	    public static void main (String args[])     </li>
<li>24.	    {  </li>
<li>25.	        Test test1 = new Test(10);    </li>
<li>26.	        Test test2 = new Test(12, 15);   </li>
<li>27.	        System.out.println(test1.i);    </li>
<li>28.	        System.out.println(test2.i);    </li>
<li>29.	    }    </li>
<li>30.	}    </li>
<li>31.	        </li>
</ul>
<p>In the above program, The constructor Test is overloaded with another constructor. In the first call to the constructor, The constructor with one argument is called, and i will be initialized with the value 10. However, In the second call to the constructor, The constructor with the 2 arguments is called, and i will be initialized with the value 15.
                        </p>
						<p class="qus">34) What do you understand by copy constructor in Java?</p>
						<p class="ans">There is no copy constructor in java. However, we can copy the values from one object to another like copy constructor in C++.<br>
There are many ways to copy the values of one object into another in java. They are:<br>
<ul>
<li>●	By constructor</li>
<li>●	By assigning the values of one object into another</li>
<li>●	By clone() method of Object class</li>
</ul>
<p>In this example, we are going to copy the values of one object into another using java constructor.</p><br>
<ul>
<li>1.	//Java program to initialize the values from one object to another  </li>
<li>2.	class Student6{    </li>
<li>3.	    int id;       </li>
<li>4.	    String name;     </li>
<li>5.	    //constructor to initialize integer and string      </li>
<li>6.	    Student6(int i,String n){    </li>
<li>7.	    id = i;        </li>
<li>8.	    name = n;      </li>
<li>9.	    }      </li>
<li>10.	    //constructor to initialize another object      </li>
<li>11.	    Student6(Student6 s){      </li>
<li>12.	    id = s.id;      </li>
<li>13.	    name =s.name;       </li>
<li>14.	    }    </li>
<li>15.	    void display(){System.out.println(id+" "+name);}       </li>
<li>16.	     </li>
<li>17.	    public static void main(String args[]){      </li>
<li>18.	    Student6 s1 = new Student6(111,"Karan");  </li>
<li>19.	    Student6 s2 = new Student6(s1);      </li>
<li>20.	    s1.display();      </li>
<li>21.	    s2.display();  </li>
<li>22.	   }  </li>
<li>23.	}      </li>
</ul>
<p>Output:<br>
111 Karan<br>
111 Karan<br>

                        </p>
						<p class="qus">35) What are the differences between the constructors and methods?</p>
						<p class="ans">There are many differences between constructors and methods. They are given below.
                        </p><br>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Java Constructor</th>
							  <th scope="col">Java Method</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>A constructor is used to initialize the state of an object.</td>
							  <td>A method is used to expose the behavior of an object.</td>
							</tr>
							<tr>
							  <td>A constructor must not have a return type.</td>
							  <td>A method must have a return type.</td>
							</tr>
							<tr>
							  <td>The constructor is invoked implicitly.</td>
							  <td>The method is invoked explicitly.</td>
							</tr>
							<tr>
							  <td>The Java compiler provides a default constructor if you don't have any constructor in a class.</td>
							  <td>The method is not provided by the compiler in any case.</td>
							</tr>
							<tr>
							  <td>The constructor name must be same as the class name.</td>
							  <td>The method name may or may not be same as class name.</td>
							</tr>
						  </tbody>
						</table>
						<img src="<?= base_url(); ?>assets/img/difference.jpg" style="width:500px;" />
						<p class="qus">36) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	public class Test     </li>
<li>2.	{     </li>
<li>3.	    Test(int a, int b)  </li>
<li>4.	    {       </li>
<li>5.	        System.out.println("a = "+a+" b = "+b);        </li>
<li>6.	    }      </li>
<li>7.	    Test(int a, float b)          </li>
<li>8.	    {       </li>
<li>9.	        System.out.println("a = "+a+" b = "+b);       </li>
<li>10.	    }        </li>
<li>11.	    public static void main (String args[])        </li>
<li>12.	    {        </li>
<li>13.	        byte a = 10;          </li>
<li>14.	        byte b = 15;      </li>
<li>15.	        Test test = new Test(a,b);         </li>
<li>16.	    }  </li>
<li>17.	}        </li>
</ul>
<p>The output of the following program is:<br>
a = 10 b = 15<br>
Here, the data type of the variables a and b, i.e., byte gets promoted to int, and the first parameterized constructor with the two integer parameters is called.
                        </p>
						<p class="qus">37) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	class Test       </li>
<li>2.	{      </li>
<li>3.	    int i;     </li>
<li>4.	}        </li>
<li>5.	public class Main           </li>
<li>6.	{       </li>
<li>7.	    public static void main (String args[])             </li>
<li>8.	    {         </li>
<li>9.	        Test test = new Test();          </li>
<li>10.	        System.out.println(test.i);  </li>
<li>11.	    }  </li>
<li>12.	}         </li>
</ul>
<p>The output of the program is 0 because the variable i is initialized to 0 internally. As we know that a default constructor is invoked implicitly if there is no constructor in the class, the variable i is initialized to 0 since there is no constructor in the class.
                        </p>
						<p class="qus">38) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	class Test          </li>
<li>2.	{       </li>
<li>3.	    int test_a, test_b;       </li>
<li>4.	    Test(int a, int b)          </li>
<li>5.	    {  </li>
<li>6.	    test_a = a;   </li>
<li>7.	    test_b = b;                </li>
<li>8.	    }          </li>
<li>9.	    public static void main (String args[])             </li>
<li>10.	    {  </li>
<li>11.	        Test test = new Test();     </li>
<li>12.	        System.out.println(test.test_a+" "+test.test_b);  </li>
<li>13.	    }  </li>
<li>14.	}  </li>
</ul>
<p>There is a compiler error in the program because there is a call to the default constructor in the main method which is not present in the class. However, there is only one parameterized constructor in the class Test. Therefore, no default constructor is invoked by the constructor implicitly.
                        </p>
						<p class="qus">39) What is the static variable?</p>
						<p class="ans">The static variable is used to refer to the common property of all objects (that is not unique for each object), e.g., The company name of employees, college name of students, etc. Static variable gets memory only once in the class area at the time of class loading. Using a static variable makes your program more memory efficient (it saves memory). Static variable belongs to the class rather than the object.<br>
<ul>
<li>1.	//Program of static variable           </li>
<li>2.      </li>
<li>3.	class Student8{         </li>
<li>4.	   int rollno;  </li>
<li>5.	   String name;   </li>
<li>6.	   static String college ="ITS";     </li>
<li>7.	                     </li>
<li>8.	   Student8(int r,String n){            </li>
<li>9.	   rollno = r;               </li>
<li>10.	   name = n;   </li>
<li>11.	   }           </li>
<li>12.	 void display (){System.out.println(rollno+" "+name+" "+college);}       </li>
<li>13.	         </li>
<li>14.	 public static void main(String args[]){            </li>
<li>15.	 Student8 s1 = new Student8(111,"Karan");   </li>
<li>16.	 Student8 s2 = new Student8(222,"Aryan");  </li>
<li>17.	   </li>
<li>18.	 s1.display();            </li>
<li>19.	 s2.display();               </li>
<li>20.	 }    </li>
<li>21.	}     </li>
</ul>
<p>Output:111 Karan ITS
                        </p><br>
<img src="<?= base_url(); ?>assets/img/staticvariable.jpg" style="width:00px;" />						
						<p class="qus">40) What is the static method?</p>
						<p class="ans">
<ul>
<li>●	A static method belongs to the class rather than the object.</li>
<li>●	There is no need to create the object to call the static methods.</li>
<li>●	A static method can access and change the value of the static variable.</li>
</ul>
                        </p>
<p class="qus">41) What are the restrictions that are applied to the Java static methods?</p>
						<p class="ans">Two main restrictions are applied to the static methods.<br>
<ul>
<li>●	The static method can not use non-static data member or call the non-static method directly.</li>
<li>●	this and super cannot be used in static context as they are non-static.</li>
</ul>
                        </p>
						<p class="qus">42) Why is the main method static?</p>
						<p class="ans">Because the object is not required to call the static method. If we make the main method non-static, JVM will have to create its object first and then call main() method which will lead to the extra memory allocation.
                        </p>
						<p class="qus">43) Can we override the static methods?</p>
						<p class="ans">No, we can't override static methods.
                        </p>
						<p class="qus">44) What is the static block?</p>
						<p class="ans">Static block is used to initialize the static data member. It is executed before the main method, at the time of classloading.<br>
<ul>
<li>1.	class A2{  </li>
<li>2.	  static{System.out.println("static block is invoked");}    </li>
<li>3.	  public static void main(String args[]){  </li>
<li>4.	   System.out.println("Hello main");  </li>
<li>5.	  }  </li>
<li>6.	}    </li>
</ul>
<p>Output: static block is invoked<br>
       Hello main
                        </p>
						<p class="qus">45) Can we execute a program without main() method?</p>
						<p class="ans">Ans) No, It was possible before JDK 1.7 using the static block. Since JDK 1.7, it is not possible.
                        </p>
						<p class="qus">46) What is the difference between static (class) method and instance method?</p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">static or class method</th>
							  <th scope="col">instance method</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>1)A method that is declared as static is known as the static method.</td>
							  <td>A method that is not declared as static is known as the instance method.</td>
							</tr>
							<tr>
							  <td>2)We don't need to create the objects to call the static methods.</td>
							  <td>The object is required to call the instance methods.</td>
							</tr>
							<tr>
							  <td>3)Non-static (instance) members cannot be accessed in the static context (static method, static block, and static nested class) directly.</td>
							  <td>Static and non-static variables both can be accessed in instance methods.</td>
							</tr>
							<tr>
							  <td>4)For example: public static int cube(int n){ return n*n*n;}</td>
							  <td>For example: public void msg(){...}.</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">47) Can we make constructors static?</p>
						<p class="ans">As we know that the static context (method, block, or variable) belongs to the class, not the object. Since Constructors are invoked only when the object is created, there is no sense to make the constructors static. However, if you try to do so, the compiler will show the compiler error.
                        </p>
						<p class="qus">48) Can we make the abstract methods static in Java?</p>
						<p class="ans">In Java, if we make the abstract methods static, It will become the part of the class, and we can directly call it which is unnecessary. Calling an undefined method is completely useless therefore it is not allowed.
                        </p>
						<p class="qus">49) Can we declare the static variables and methods in an abstract class?</p>
						<p class="ans">Yes, we can declare static variables and methods in an abstract method. As we know that there is no requirement to make the object to access the static context, therefore, we can access the static context declared inside the abstract class by using the name of the abstract class. Consider the following example.<br>
<ul>
<li>1.	abstract class Test  </li>
<li>2.	{  </li>
<li>3.	    static int i = 102;    </li>
<li>4.	    static void TestMethod()    </li>
<li>5.	    {   </li>
<li>6.	        System.out.println("hi !! I am good !!");    </li>
<li>7.	    }  </li>
<li>8.	}     </li>
<li>9.	public class TestClass extends Test     </li>
<li>10.	{   </li>
<li>11.	    public static void main (String args[])    </li>
<li>12.	    {      </li>
<li>13.	        Test.TestMethod();    </li>
<li>14.	        System.out.println("i = "+Test.i);   </li>
<li>15.	    }   </li>
<li>16.	}  </li>
</ul>
<p>Output<br>
hi !! I am good !!<br>
i = 102<br>
                        </p>
						<p class="qus">50) What is this keyword in java?</p>
						<p class="ans">The this keyword is a reference variable that refers to the current object. There are the various uses of this keyword in Java. It can be used to refer to current class properties such as instance methods, variable, constructors, etc. It can also be passed as an argument into the methods or constructors. It can also be returned from the method as the current class instance.<br>
						<img src="<?= base_url(); ?>assets/img/keywordjava.jpg" style="width:500px;" />
                        </p>
						<p class="qus">51) What are the main uses of this keyword?</p>
						<p class="ans">There are the following uses of this keyword.<br>
<ul>
<li>●	this can be used to refer to the current class instance variable.</li>
<li>●	this can be used to invoke current class method (implicitly)</li>
<li>●	this() can be used to invoke the current class constructor.</li>
<li>●	this can be passed as an argument in the method call.</li>
<li>●	this can be passed as an argument in the constructor call.</li>
<li>●	this can be used to return the current class instance from the method.</li>
</ul>
                        </p>
						<p class="qus">52) Can we assign the reference to this variable?</p>
						<p class="ans">No, this cannot be assigned to any value because it always points to the current class object and this is the final reference in Java. However, if we try to do so, the compiler error will be shown. Consider the following example.<br>
<ul>
<li>1.	public class Test  </li>
<li>2.	{     </li>
<li>3.	    public Test()    </li>
<li>4.	    {    </li>
<li>5.	        this = null;     </li>
<li>6.	        System.out.println("Test class constructor called");     </li>
<li>7.	    }    </li>
<li>8.	    public static void main (String args[])  </li>
<li>9.	    {   </li>
<li>10.	        Test t = new Test();   </li>
<li>11.	    }  </li>
<li>12.	}  </li>
</ul>
<p>Output<br>
Test.java:5: error: cannot assign a value to final variable this<br>
        this = null; <br>
        ^<br>
1 error
                        </p>
						<p class="qus">53) Can this keyword be used to refer static members?</p>
						<p class="ans">Yes, It is possible to use this keyword to refer static members because this is just a reference variable which refers to the current class object. However, as we know that, it is unnecessary to access static variables through objects, therefore, it is not the best practice to use this to refer static members. Consider the following example.<br>
<ul>
<li>1.	public class Test     </li>
<li>2.	{      </li>
<li>3.	    static int i = 10;     </li>
<li>4.	    public Test ()    </li>
<li>5.	    {    </li>
<li>6.	        System.out.println(this.i);       </li>
<li>7.	    }   </li>
<li>8.	    public static void main (String args[])  </li>
<li>9.	    {    </li>
<li>10.	        Test t = new Test();  </li>
<li>11.	    }   </li>
<li>12.	}     </li>
</ul>
<p>Output<br>
10<br>
                        </p>
						<p class="qus">54) How can constructor chaining be done using this keyword?</p>
						<p class="ans">Constructor chaining enables us to call one constructor from another constructor of the class with respect to the current class object. We can use this keyword to perform constructor chaining within the same class. Consider the following example which illustrates how can we use this keyword to achieve constructor chaining.<br>
<ul>
<li>1.	public class Employee      </li>
<li>2.	{      </li>
<li>3.	    int id,age;     </li>
<li>4.	    String name, address;    </li>
<li>5.	    public Employee (int age)    </li>
<li>6.	    {         </li>
<li>7.	        this.age = age;  </li>
<li>8.	    }</li>
<li>9.	    public Employee(int id, int age)    </li>
<li>10.	    {    </li>
<li>11.	        this(age);    </li>
<li>12.	        this.id = id;   </li>
<li>13.	    }     </li>
<li>14.	    public Employee(int id, int age, String name, String address)     </li>
<li>15.	    {     </li>
<li>16.	        this(id, age);      </li>
<li>17.	        this.name = name;      </li>
<li>18.	        this.address = address;          </li>
<li>19.	    }     </li>
<li>20.	    public static void main (String args[])    </li>
<li>21.	    {      </li>
<li>22.	        Employee emp = new Employee(105, 22, "Vikas", "Delhi");    </li>
<li>23.	        System.out.println("ID: "+emp.id+" Name:"+emp.name+" age:"+emp.age+" address: "+emp.address);  </li>
<li>24.	    }      </li>
<li>25.	      </li>
<li>26.	} </li>
</ul>
<p>Output<br>
ID: 105 Name:Vikas age:22 address: Delhi
                        </p>
						<p class="qus">55) What are the advantages of passing this into a method instead of the current class object itself?</p>
						<p class="ans">As we know, that this refers to the current class object, therefore, it must be similar to the current class object. However, there can be two main advantages of passing this into a method instead of the current class object.<br>
<ul>
<li>●	this is a final variable. Therefore, this cannot be assigned to any new value whereas the current class object might not be final and can be changed.</li>
<li>●	this can be used in the synchronized block.</li>
</ul>
                        </p>
						<p class="qus">56) What is the Inheritance?</p>
						<p class="ans">Inheritance is a mechanism by which one object acquires all the properties and behavior of another object of another class. It is used for Code Reusability and Method Overriding. The idea behind inheritance in Java is that you can create new classes that are built upon existing classes. When you inherit from an existing class, you can reuse methods and fields of the parent class. Moreover, you can add new methods and fields in your current class also. Inheritance represents the IS-A relationship which is also known as a parent-child relationship.<br>
						There are five types of inheritance in Java.<br>
<ul>
<li>●	Single-level inheritance  </li>
<li>●	Multi-level inheritance    </li>
<li>●	Multiple Inheritance</li>
<li>●	Hierarchical Inheritance </li>
<li>●	Hybrid Inheritance</li>
</ul>
<p>Multiple inheritance is not supported in Java through class.
                        </p>
						<p class="qus">57) Why is Inheritance used in Java?</p>
						<p class="ans">There are various advantages of using inheritance in Java that is given below.<br>
<ul>
<li>●	Inheritance provides code reusability. The derived class does not need to redefine the method of base class unless it needs to provide the specific implementation of the method.</li>
<li>●	Runtime polymorphism cannot be achieved without using inheritance.</li>
<li>●	We can simulate the inheritance of classes with the real-time objects which makes OOPs more realistic.</li>
<li>●	Inheritance provides data hiding. The base class can hide some data from the derived class by making it private. </li>
<li>●	Method overriding cannot be achieved without inheritance. By method overriding, we can give a specific implementation of some basic method contained by the base class. </li>
</ul>
                        </p>
						<p class="qus">58) Which class is the superclass for all the classes?</p>
						<p class="ans">The object class is the superclass of all other classes in Java.
                        </p>
						<p class="qus">59) Why is multiple inheritance not supported in java?</p>
						<p class="ans">To reduce the complexity and simplify the language, multiple inheritance is not supported in java. Consider a scenario where A, B, and C are three classes. The C class inherits A and B classes. If A and B classes have the same method and you call it from child class object, there will be ambiguity to call the method of A or B class.<br>
Since the compile-time errors are better than runtime errors, Java renders compile-time error if you inherit 2 classes. So whether you have the same method or different, there will be a compile time error.<br>
<ul>
<li>1.	class A{    </li>
<li>2.	void msg(){System.out.println("Hello");}   </li>
<li>3.	}  </li>
<li>4.	class B{   </li>
<li>5.	void msg(){System.out.println("Welcome");}  </li>
<li>6.	}    </li>
<li>7.	class C extends A,B{//suppose if it were   </li>
<li>8.	   </li>
<li>9.	 Public Static void main(String args[]){  </li>
<li>10.	   C obj=new C();  </li>
<li>11.	   obj.msg();//Now which msg() method would be invoked?  </li>
<li>12.	}  </li>
<li>13.	} </li>
</ul>
<p>Compile Time Error
                        </p>
						<p class="qus">60) What is aggregation?</p>
						<p class="ans">Aggregation can be defined as the relationship between two classes where the aggregate class contains a reference to the class it owns. Aggregation is best described as a has-a relationship. For example, The aggregate class Employee having various fields such as age, name, and salary also contains an object of Address class having various fields such as Address-Line 1, City, State, and pin-code. In other words, we can say that Employee (class) has an object of Address class. Consider the following example.<br>
						Address.java<br>
<ul>
<li>1.	public class Address {      </li>
<li>2.	String city,state,country;       </li>
<li>3.	   </li>
<li>4.	public Address(String city, String state, String country) {     </li>
<li>5.	    this.city = city;    </li>
<li>6.	    this.state = state;      </li>
<li>7.	    this.country = country;        </li>
<li>8.	}    </li>
<li>9.	    </li>
<li>10.	}   </li>
</ul>
<p>Employee.java</p>
<ul>
<li>1.	public class Emp {     </li>
<li>2.	int id;       </li>
<li>3.	String name;    </li>
<li>4.	Address address;     </li>
<li>5.	    </li>
<li>6.	public Emp(int id, String name,Address address) {      </li>
<li>7.	    this.id = id;        </li>
<li>8.	    this.name = name;    </li>
<li>9.	    this.address=address;   </li>
<li>10.	}    </li>
<li>11.	     </li>
<li>12.	void display(){       </li>
<li>13.	System.out.println(id+" "+name);   </li>
<li>14.	System.out.println(address.city+" "+address.state+" "+address.country);    </li>
<li>15.	}  </li>
<li>16.	     </li>
<li>17.	public static void main(String[] args) {        </li>
<li>18.	Address address1=new Address("gzb","UP","india");   </li>
<li>19.	Address address2=new Address("gno","UP","india");    </li>
<li>20.	   </li>
<li>21.	Emp e=new Emp(111,"varun",address1);      </li>
<li>22.	Emp e2=new Emp(112,"arun",address2);      </li>
<li>23.	       </li>
<li>24.	e.display();    </li>
<li>25.	e2.display();    </li>
<li>26.	          </li>
<li>27.	}        </li>
<li>28.	}    </li>
</ul>
<p>Output<br>
111 varun<br>
gzb UP india<br>
112 arun<br>
gno UP india
                        </p>
						<p class="qus">61) What is composition?</p>
						<p class="ans">Holding the reference of a class within some other class is known as composition. When an object contains the other object, if the contained object cannot exist without the existence of container object, then it is called composition. In other words, we can say that composition is the particular case of aggregation which represents a stronger relationship between two objects. Example: A class contains students. A student cannot exist without a class. There exists composition between class and students.
                        </p>
						<p class="qus">62) What is the difference between aggregation and composition?</p>
						<p class="ans">Aggregation represents the weak relationship whereas composition represents the strong relationship. For example, the bike has an indicator (aggregation), but the bike has an engine (composition).
                        </p>
						<p class="qus">63) Why does Java not support pointers?</p>
						<p class="ans">The pointer is a variable that refers to the memory address. They are not used in Java because they are unsafe(unsecured) and complex to understand.
                        </p>
						<p class="qus">64) What is super in java?</p>
						<p class="ans">The super keyword in Java is a reference variable that is used to refer to the immediate parent class object. Whenever you create the instance of the subclass, an instance of the parent class is created implicitly which is referred by super reference variable. The super() is called in the class constructor implicitly by the compiler if there is no super or this.<br>
<ul>
<li>1.	class Animal{    </li>
<li>2.	Animal(){System.out.println("animal is created");}     </li>
<li>3.	}  </li>
<li>4.	class Dog extends Animal{   </li>
<li>5.	Dog(){  </li>
<li>6.	System.out.println("dog is created");    </li>
<li>7.	}      </li>
<li>8.	}  </li>
<li>9.	class TestSuper4{   </li>
<li>10.	public static void main(String args[]){  </li>
<li>11.	Dog d=new Dog();    </li>
<li>12.	}      </li>
<li>13.	}  </li>
</ul>
<p>Output:<br>
animal is created<br>
dog is created
                        </p>
						<p class="qus">65) How can constructor chaining be done by using the super keyword?</p>
						<p class="ans">
<ul>
<li>1.	class Person   </li>
<li>2.	{      </li>
<li>3.	    String name,address;   </li>
<li>4.	    int age;   </li>
<li>5.	    public Person(int age, String name, String address)  </li>
<li>6.	    {    </li>
<li>7.	        this.age = age;      </li>
<li>8.	        this.name = name;  </li>
<li>9.	        this.address = address;   </li>
<li>10.	    }  </li>
<li>11.	}    </li>
<li>12.	class Employee extends Person       </li>
<li>13.	{  </li>
<li>14.	    float salary;   </li>
<li>15.	    public Employee(int age, String name, String address, float salary)  </li>
<li>16.	    {    </li>
<li>17.	        super(age,name,address);      </li>
<li>18.	        this.salary = salary;  </li>
<li>19.	    }  </li>
<li>20.	}  </li>
<li>21.	public class Test     </li>
<li>22.	{      </li>
<li>23.	    public static void main (String args[])  </li>
<li>24.	    {   </li>
<li>25.	        Employee e = new Employee(22, "Mukesh", "Delhi", 90000);  </li>
<li>26.	        System.out.println("Name: "+e.name+" Salary: "+e.salary+" Age: "+e.age+" Address: "+e.address);    </li>
<li>27.	    }      </li>
<li>28.	}  </li>
</ul>
<p>Output<br>
Name: Mukesh Salary: 90000.0 Age: 22 Address: Delhi
                        </p>
						<p class="qus">66) What are the main uses of the super keyword?</p>
						<p class="ans">There are the following uses of super keyword.<br>
<ul>
<li>●	super can be used to refer to the immediate parent class instance variable.  </li>
<li>●	super can be used to invoke the immediate parent class method.</li>
<li>●	super() can be used to invoke immediate parent class constructor.</li>
</ul>
                        </p>
						<p class="qus">67) What are the differences between this and super keyword?p>
						<p class="ans">There are the following differences between this and super keyword.<br>
<ul>
<li>●	The super keyword always points to the parent class contexts whereas this keyword always points to the current class context.</li>
<li>●	The super keyword is primarily used for initializing the base class variables within the derived class constructor whereas this keyword primarily used to differentiate between local and instance variables when passed in the class constructor.</li>
<li>●	The super and this must be the first statement inside constructor otherwise the compiler will throw an error.</li>
</ul>
                        </p>
						<p class="qus">68) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	class Person   </li>
<li>2.	{  </li>
<li>3.	    public Person()   </li>
<li>4.	    {   </li>
<li>5.	        System.out.println("Person class constructor called");    </li>
<li>6.	    }  </li>
<li>7.	}  </li>
<li>8.	public class Employee extends Person   </li>
<li>9.	{  </li>
<li>10.	    public Employee()   </li>
<li>11.	    {  </li>
<li>12.	        System.out.println("Employee class constructor called");  </li>
<li>13.	    }   </li>
<li>14.	    public static void main (String args[])  </li>
<li>15.	    {  </li>
<li>16.	        Employee e = new Employee();  </li>
<li>17.	    }  </li>
<li>18.	}  </li>
</ul>
<p>Output<br>
Person class constructor called<br>
Employee class constructor <br>
Explanation<br>
The super() is implicitly invoked by the compiler if no super() or this() is included explicitly within the derived class constructor. Therefore, in this case, The Person class constructor is called first and then the Employee class constructor is called.
                        </p>
						<p class="qus">69) Can you use this() and super() both in a constructor?</p>
						<p class="ans">No, because this() and super() must be the first statement in the class constructor.<br>
Example:<br>
<ul>
<li>1.	public class Test{  </li>
<li>2.	    Test()  </li>
<li>3.	     {  </li>
<li>4.	         super();   </li>
<li>5.	         this();  </li>
<li>6.	         System.out.println("Test class object is created");  </li>
<li>7.	     }  </li>
<li>8.	     public static void main(String []args){  </li>
<li>9.	     Test t = new Test();  </li>
<li>10.	     }  </li>
<li>11.	}  </li>
</ul>
<p>Output:<br>
Test.java:5: error: call to this must be first statement in constructor
                        </p>
						<p class="qus">70)What is object cloning?</p>
						<p class="ans">The object cloning is used to create the exact copy of an object. The clone() method of the Object class is used to clone an object. The java.lang.Cloneable interface must be implemented by the class whose object clone we want to create. If we don't implement Cloneable interface, clone() method generates CloneNotSupportedException
                        </p>
						<p class="qus">71) What is method overloading?</p>
						<p class="ans">Method overloading is the polymorphism technique which allows us to create multiple methods with the same name but different signature. We can achieve method overloading in two ways.<br>
<ul>
<li>●	By Changing the number of arguments</li>
<li>●	By Changing the data type of arguments</li>
</ul>
<p>Method overloading increases the readability of the program. Method overloading is performed to figure out the program quickly.
                        </p>
						<p class="qus">72) Why is method overloading not possible by changing the return type in java?</p>
						<p class="ans">In Java, method overloading is not possible by changing the return type of the program due to avoid the ambiguity.<br>
<ul>
<li>1.	class Adder{  </li>
<li>2.	static int add(int a,int b){return a+b;}  </li>
<li>3.	static double add(int a,int b){return a+b;}  </li>
<li>4.	}  </li>
<li>5.	class TestOverloading3{  </li>
<li>6.	public static void main(String[] args){  </li>
<li>7.	System.out.println(Adder.add(11,11));//ambiguity  </li>
<li>8.	}}  </li>
</ul>
<p>Output:<br>
Compile Time Error: method add(int, int) is already defined in class Adder
                        </p>
						<p class="qus">73) Can we overload the methods by making them static?</p>
						<p class="ans">No, We cannot overload the methods by just applying the static keyword to them(number of parameters and types are the same). Consider the following example.<br>
<ul>
<li>1.	public class Animal  </li>
<li>2.	{  </li>
<li>3.	    void consume(int a)  </li>
<li>4.	    {  </li>
<li>5.	        System.out.println(a+" consumed!!");  </li>
<li>6.	    }  </li>
<li>7.	    static void consume(int a)  </li>
<li>8.	    {  </li>
<li>9.	        System.out.println("consumed static "+a);  </li>
<li>10.	    }  </li>
<li>11.	    public static void main (String args[])  </li>
<li>12.	    {  </li>
<li>13.	        Animal a = new Animal();  </li>
<li>14.	        a.consume(10);  </li>
<li>15.	        Animal.consume(20);  </li>
<li>16.	    }  </li>
<li>17.	}    </li>
</ul>
<p>Output<br>
Animal.java:7: error: method consume(int) is already defined in class Animal<br>
    static void consume(int a)<br>
                ^<br>
Animal.java:15: error: non-static method consume(int) cannot be referenced from a static context<br>
        Animal.consume(20);<br>
              ^<br>
2 errors
                        </p>
						<p class="qus">74) Can we overload the main() method?</p>
						<p class="ans">Yes, we can have any number of main methods in a Java program by using method overloading.
                        </p>
						<p class="qus">75) What is method overloading with type promotion?</p>
						<p class="ans">By Type promotion is method overloading, we mean that one data type can be promoted to another implicitly if no exact matching is found.<br>
						<img src="<?= base_url(); ?>assets/img/overloading.png" style="width:500px;" /><br>
						As displayed in the above diagram, the byte can be promoted to short, int, long, float or double. The short datatype can be promoted to int, long, float or double. The char datatype can be promoted to int, long, float or double and so on. Consider the following example.<br>
<ul>
<li>1.	class OverloadingCalculation1{  </li>
<li>2.	  void sum(int a,long b){System.out.println(a+b);}  </li>
<li>3.	  void sum(int a,int b,int c){System.out.println(a+b+c);}  </li>
<li>4.	  </li>
<li>5.	  public static void main(String args[]){  </li>
<li>6.	  OverloadingCalculation1 obj=new OverloadingCalculation1();  </li>
<li>7.	  obj.sum(20,20);//now second int literal will be promoted to long  </li>
<li>8.	  obj.sum(20,20,20);  </li>
<li>9.	  }  </li>
<li>10.	}  </li>
</ul>
<p>Output<br>
40<br>
60
                        </p>
						<p class="qus">76) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	class OverloadingCalculation3{    </li>
<li>2.	  void sum(int a,long b){System.out.println("a method invoked");}    </li>
<li>3.	  void sum(long a,int b){System.out.println("b method invoked");}    </li>
<li>4.	    </li>
<li>5.	  public static void main(String args[]){    </li>
<li>6.	  OverloadingCalculation3 obj=new OverloadingCalculation3();    </li>
<li>7.	  obj.sum(20,20);//now ambiguity    </li>
<li>8.	  }    </li>
<li>9.	}    </li>
</ul>
<p>Output<br>
OverloadingCalculation3.java:7: error: reference to sum is ambiguous<br>
obj.sum(20,20);//now ambiguity <br> 
     ^ <br>
      both method sum(int,long) in OverloadingCalculation3 <br>
      and method sum(long,int) in OverloadingCalculation3 match<br>
1 error<br>
Explanation<br>
There are two methods defined with the same name, i.e., sum. The first method accepts the integer and long type whereas the second method accepts long and the integer type. The parameter passed that are a = 20, b = 20. We can not tell that which method will be called as there is no clear differentiation mentioned between integer literal and long literal. This is the case of ambiguity. Therefore, the compiler will throw an error.
                        </p>
						<p class="qus">77) What is method overriding:</p>
						<p class="ans">If a subclass provides a specific implementation of a method that is already provided by its parent class, it is known as Method Overriding. It is used for runtime polymorphism and to implement the interface methods.<br>
Rules for Method overriding<br>
<ul>
<li>●	The method must have the same name as in the parent class.</li>
<li>●	The method must have the same signature as in the parent class.</li>
<li>●	Two classes must have an IS-A relationship between them.</li>
</ul>
                        </p>
						<p class="qus">78) Can we override the static method?</p>
						<p class="ans">No, you can't override the static method because they are the part of the class, not the object.
                        </p>
						<p class="qus">79) Why can we not override static method?</p>
						<p class="ans">It is because the static method is the part of the class, and it is bound with class whereas instance method is bound with the object, and static gets memory in class area, and instance gets memory in a heap.
                        </p>
						<p class="qus">80) Can we override the overloaded method?</p>
						<p class="ans">Yes.
                        </p>
						<p class="qus">81) Difference between method Overloading and Overriding.</p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Method Overloading</th>
							  <th scope="col">Method Overriding</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>1) Method overloading increases the readability of the program.</td>
							  <td>Method overriding provides the specific implementation of the method that is already provided by its superclass.</td>
							</tr>
							<tr>
							  <td>2) Method overloading occurs within the class.</td>
							  <td>Method overriding occurs in two classes that have IS-A relationship between them.</td>
							</tr>
							<tr>
							  <td>3) In this case, the parameters must be different.</td>
							  <td>In this case, the parameters must be the same.</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">82) Can we override the private methods?</p>
						<p class="ans">No, we cannot override the private methods because the scope of private methods is limited to the class and we cannot access them outside of the class.
                        </p>
						<p class="qus">83) Can we change the scope of the overridden method in the subclass?</p>
						<p class="ans">Yes, we can change the scope of the overridden method in the subclass. However, we must notice that we cannot decrease the accessibility of the method. The following point must be taken care of while changing the accessibility of the method.<br>
<ul>
<li>●	The private can be changed to protected, public, or default.</li>
<li>●	The protected can be changed to public or default.</li>
<li>●	The default can be changed to public.</li>
<li>●	The public will always remain public.</li>
</ul>
                        </p>
						<p class="qus">84) Can we modify the throws clause of the superclass method while overriding it in the subclass?</p>
						<p class="ans">Yes, we can modify the throws clause of the superclass method while overriding it in the subclass. However, there are some rules which are to be followed while overriding in case of exception handling.<br>
<ul>
<li>●	If the superclass method does not declare an exception, subclass overridden method cannot declare the checked exception, but it can declare the unchecked exception.</li>
<li>●	If the superclass method declares an exception, subclass overridden method can declare same, subclass exception or no exception but cannot declare parent exception.</li>
</ul>
                        </p>
						<p class="qus">85) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	class Base   </li>
<li>2.	{  </li>
<li>3.	    void method(int a)  </li>
<li>4.	    {  </li>
<li>5.	        System.out.println("Base class method called with integer a = "+a);  </li>
<li>6.	    }  </li>
<li>7.	       </li>
<li>8.	    void method(double d)  </li>
<li>9.	    {  </li>
<li>10.	        System.out.println("Base class method called with double d ="+d);  </li>
<li>11.	    }  </li>
<li>12.	}  </li>
<li>13.	   </li>
<li>14.	class Derived extends Base  </li>
<li>15.	{  </li>
<li>16.	    @Override  </li>
<li>17.	    void method(double d)  </li>
<li>18.	    {  </li>
<li>19.	        System.out.println("Derived class method called with double d ="+d);  </li>
<li>20.	    }  </li>
<li>21.	}  </li>
<li>22.	   </li>
<li>23.	public class Main  </li>
<li>24.	{      </li>
<li>25.	    public static void main(String[] args)  </li>
<li>26.	    {  </li>
<li>27.	        new Derived().method(10);  </li>
<li>28.	    }  </li>
<li>29.	}  </li>
</ul>
<p>Output<br>
Base class method called with integer a = 10<br>
Explanation<br>
The method() is overloaded in class Base whereas it is derived in class Derived with the double type as the parameter. In the method call, the integer is passed.
                        </p>
						<p class="qus">86) Can you have virtual functions in Java?</p>
						<p class="ans">Yes, all functions in Java are virtual by default.
                        </p>
						<p class="qus">87) What is covariant return type?</p>
						<p class="ans">Now, since java5, it is possible to override any method by changing the return type if the return type of the subclass overriding method is subclass type. It is known as covariant return type. The covariant return type specifies that the return type may vary in the same direction as the subclass.<br>
<ul>
<li>1.	class A{  </li>
<li>2.	A get(){return this;}   </li>
<li>3.	}  </li>
<li>4.	  </li>
<li>5.	class B1 extends A{  </li>
<li>6.	B1 get(){return this;}  </li>
<li>7.	void message(){System.out.println("welcome to covariant return type");}  </li>
<li>8.	  </li>
<li>9.	public static void main(String args[]){  </li>
<li>10.	new B1().get().message();  </li>
<li>11.	}  </li>
<li>12.	}  </li>
</ul>
<p>Output: welcome to covariant return type
                        </p>
						<p class="qus">88) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	class Base    </li>
<li>2.	{   </li>
<li>3.	    public void baseMethod()  </li>
<li>4.	    {  </li>
<li>5.	        System.out.println("BaseMethod called ...");  </li>
<li>6.	    }  </li>
<li>7.	}  </li>
<li>8.	class Derived extends Base   </li>
<li>9.	{  </li>
<li>10.	    public void baseMethod()  </li>
<li>11.	    {   </li>
<li>12.	        System.out.println("Derived method called ...");   </li>
<li>13.	    }  </li>
<li>14.	}  </li>
<li>15.	public class Test   </li>
<li>16.	{  </li>
<li>17.	    public static void main (String args[])   </li>
<li>18.	    {  </li>
<li>19.	        Base b = new Derived();  </li>
<li>20.	        b.baseMethod();  </li>
<li>21.	    }  </li>
<li>22.	    }   </li>
</ul>
<p>________________________________________
Output<br>
Derived method called ...<br>
Explanation<br>
The method of Base class, i.e., baseMethod() is overridden in Derived class. In Test class, the reference variable b (of type Base class) refers to the instance of the Derived class. Here, Runtime polymorphism is achieved between class Base and Derived. At compile time, the presence of method baseMethod checked in Base class, If it presence then the program compiled otherwise the compiler error will be shown. In this case, baseMethod is present in Base class; therefore, it is compiled successfully. However, at runtime, It checks whether the baseMethod has been overridden by Derived class, if so then the Derived class method is called otherwise Base class method is called. In this case, the Derived class overrides the baseMethod; therefore, the Derived class method is called.
                        </p>
						<p class="qus">89) What is the final variable?</p>
						<p class="ans">In Java, the final variable is used to restrict the user from updating it. If we initialize the final variable, we can't change its value. In other words, we can say that the final variable once assigned to a value, can never be changed after that. The final variable which is not assigned to any value can only be assigned through the class constructor.<br>
						<img src="<?= base_url(); ?>assets/img/finalvariable.jpg" style="width:500px;" /><br>
<ul>
<li>1.	class Bike9{  </li>
<li>2.	 final int speedlimit=90;//final variable  </li>
<li>3.	 void run(){  </li>
<li>4.	  speedlimit=400;  </li>
<li>5.	 }  </li>
<li>6.	 public static void main(String args[]){  </li>
<li>7.	 Bike9 obj=new  Bike9();   </li>
<li>8.	 obj.run();  </li>
<li>9.	 }  </li>
<li>10.	}//end of class  </li>
</ul>
<p>Output:Compile Time Error
                        </p>
						<p class="qus">90) What is the final method?</p>
						<p class="ans">If we change any method to a final method, we can't override it. <br>
<ul>
<li>1.	class Bike{  </li>
<li>2.	  final void run(){System.out.println("running");}  </li>
<li>3.	}  </li>
<li>4.	     </li>
<li>5.	class Honda extends Bike{  </li>
<li>6.	   void run(){System.out.println("running safely with 100kmph");}   </li>
<li>7.	      </li>
<li>8.	   public static void main(String args[]){  </li>
<li>9.	   Honda honda= new Honda();  </li>
<li>10.	   honda.run();  </li>
<li>11.	   }  </li>
<li>12.	}  </li>
</ul>
<p>Output:Compile Time Error
                        </p>
						<p class="qus">91) What is the final class?</p>
						<p class="ans">If we make any class final, we can't inherit it into any of the subclasses.<br>
<ul>
<li>1.	final class Bike{}  </li>
<li>2.	   </li>
<li>3.	class Honda1 extends Bike{  </li>
<li>4.	  void run(){System.out.println("running safely with 100kmph");}  </li>
<li>5.	    </li>
<li>6.	  public static void main(String args[]){   </li>
<li>7.	  Honda1 honda= new Honda1();    </li>
<li>8.	  honda.run();  </li>
<li>9.	  }  </li>
<li>10.	}  </li>
</ul>
<p>Output:Compile Time Error
                        </p>
						<p class="qus">92) What is the final blank variable?</p>
						<p class="ans">A final variable, not initialized at the time of declaration, is known as the final blank variable. We can't initialize the final blank variable directly. Instead, we have to initialize it by using the class constructor. It is useful in the case when the user has some data which must not be changed by others, for example, PAN Number. Consider the following example:<br>
<ul>
<li>1.	class Student{  </li>
<li>2.	int id;  </li>
<li>3.	String name;  </li>
<li>4.	final String PAN_CARD_NUMBER;  </li>
<li>5.	... </li>
<li>6.	}  </li>
</ul>
                        </p>
						<p class="qus">93) Can we initialize the final blank variable?</p>
						<p class="ans">Yes, if it is not static, we can initialize it in the constructor. If it is static blank final variable, it can be initialized only in the static block.
                        </p>
						<p class="qus">94) Can you declare the main method as final?</p>
						<p class="ans">Yes, We can declare the main method as public static final void main(String[] args){}.
                        </p>
						<p class="qus">95) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	class Main {   </li>
<li>2.	 public static void main(String args[]){   </li>
<li>3.	   final int i;  </li>
<li>4.	   i = 20;  </li>
<li>5.	   System.out.println(i);  </li>
<li>6.	 }  </li>
<li>7.	}  </li>
</ul>
<p>Output<br>
20<br>
Explanation<br>
Since i is the blank final variable. It can be initialized only once. We have initialized it to 20. Therefore, 20 will be printed.
                        </p>
						<p class="qus">96) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	class Base    </li>
<li>2.	{    </li>
<li>3.	    protected final void getInfo()  </li>
<li>4.	    {  </li>
<li>5.	        System.out.println("method of Base class");  </li>
<li>6.	    }   </li>
<li>7.	}   </li>
<li>8.	   </li>
<li>9.	public class Derived extends Base   </li>
<li>10.	{  </li>
<li>11.	    protected final void getInfo()  </li>
<li>12.	    {  </li>
<li>13.	        System.out.println("method of Derived class");  </li>
<li>14.	    }  </li>
<li>15.	    public static void main(String[] args)  </li>
<li>16.	    {  </li>
<li>17.	        Base obj = new Base();  </li>
<li>18.	        obj.getInfo();  </li>
<li>19.	    }  </li>
<li>20.	}  </li>
</ul>
<p>Output<br>
	Derived.java:11: error: getInfo() in Derived cannot override getInfo() in Base<br>
    protected final void getInfo()<br>
                         ^<br>
  overridden method is final<br>
1 error<br>
Explanation<br>
The getDetails() method is final; therefore it can not be overridden in the subclass.
                        </p>
						<p class="qus">97) Can we declare a constructor as final?</p>
						<p class="ans">The constructor can never be declared as final because it is never inherited. Constructors are not ordinary methods; therefore, there is no sense to declare constructors as final. However, if you try to do so, The compiler will throw an error.
                        </p>
						<p class="qus">98) Can we declare an interface as final?</p>
						<p class="ans">No, we cannot declare an interface as final because the interface must be implemented by some class to provide its definition. Therefore, there is no sense to make an interface final. However, if you try to do so, the compiler will show an error.
                        </p>
						<p class="qus">99) What is the difference between the final method and abstract method?</p>
						<p class="ans">The main difference between the final method and abstract method is that the abstract method cannot be final as we need to override them in the subclass to give its definition.
                        </p>
						<p class="qus">100) What is the difference between compile-time polymorphism and runtime polymorphism?</p>
						<p class="ans">There are the following differences between compile-time polymorphism and runtime polymorphism.
                        </p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">SN</th>
							  <th scope="col">compile-time polymorphism</th>
							  <th scope="col">Runtime polymorphism</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>1</td>
							  <td>In compile-time polymorphism, call to a method is resolved at compile-time.</td>
							  <td>In runtime polymorphism, call to an overridden method is resolved at runtime.</td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>It is also known as static binding, early binding, or overloading.</td>
							  <td>It is also known as dynamic binding, late binding, overriding, or dynamic method dispatch.</td>
							</tr>
							<tr>
							  <td>3</td>
							  <td>Overloading is a way to achieve compile-time polymorphism in which, we can define multiple methods or constructors with different signatures.</td>
							  <td>Overriding is a way to achieve runtime polymorphism in which, we can redefine some particular method or variable in the derived class. By using overriding, we can give some specific implementation to the base class properties in the derived class.</td>
							</tr>
							<tr>
							  <td>4</td>
							  <td>It provides fast execution because the type of an object is determined at compile-time.</td>
							  <td>It provides slower execution as compare to compile-time because the type of an object is determined at run-time.</td>
							</tr>
							<tr>
							  <td>5</td>
							  <td>Compile-time polymorphism provides less flexibility because all the things are resolved at compile-time.</td>
							  <td>Run-time polymorphism provides more flexibility because all the things are resolved at runtime.</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">101) What is Runtime Polymorphism?</p>
						<p class="ans">Runtime polymorphism or dynamic method dispatch is a process in which a call to an overridden method is resolved at runtime rather than at compile-time. In this process, an overridden method is called through the reference variable of a superclass. The determination of the method to be called is based on the object being referred to by the reference variable.<br>
<ul>
<li>1.	class Bike{  </li>
<li>2.	  void run(){System.out.println("running");}   </li>
<li>3.	}  </li>
<li>4.	class Splendor extends Bike{  </li>
<li>5.	  void run(){System.out.println("running safely with 60km");}  </li>
<li>6.	  public static void main(String args[]){  </li>
<li>7.	    Bike b = new Splendor();//upcasting  </li>
<li>8.	    b.run();  </li>
<li>9.	  }  </li>
<li>10.	}  </li>
</ul>
<p>Output:<br>
running safely with 60km.<br>
In this process, an overridden method is called through the reference variable of a superclass. The determination of the method to be called is based on the object being referred to by the reference variable.
                        </p>
						<p class="qus">102) Can you achieve Runtime Polymorphism by data members?</p>
						<p class="ans">No, because method overriding is used to achieve runtime polymorphism and data members cannot be overridden. We can override the member functions but not the data members. Consider the example given below.<br>
<ul>
<li>1.	class Bike{  </li>
<li>2.	 int speedlimit=90;  </li>
<li>3.	}  </li>
<li>4.	class Honda3 extends Bike{  </li>
<li>5.	 int speedlimit=150;  </li>
<li>6.	 public static void main(String args[]){  </li>
<li>7.	  Bike obj=new Honda3();   </li>
<li>8.	  System.out.println(obj.speedlimit);//90  </li>
<li>9.	   }  </li>
</ul>
<p>Output:<br>
90
                        </p>
						<p class="qus">103) What is the difference between static binding and dynamic binding?</p>
						<p class="ans">In case of the static binding, the type of the object is determined at compile-time whereas, in the dynamic binding, the type of the object is determined at runtime.<br>
Static Binding<br>
<ul>
<li>1.	class Dog{  </li>
<li>2.	 private void eat(){System.out.println("dog is eating...");}  </li>
<li>3.	  </li>
<li>4.	 public static void main(String args[]){  </li>
<li>5.	  Dog d1=new Dog();  </li>
<li>6.	  d1.eat();   </li>
<li>7.	 }  </li>
<li>8.	}  </li>
</ul>
<p>Dynamic Binding</p>
<ul>
<li>1.	class Animal{  </li>
<li>2.	 void eat(){System.out.println("animal is eating...");}  </li>
<li>3.	}  </li>
<li>4.	  </li>
<li>5.	class Dog extends Animal{  </li>
<li>6.	 void eat(){System.out.println("dog is eating...");}  </li>
<li>7.	  </li>
<li>8.	 public static void main(String args[]){  </li>
<li>9.	  Animal a=new Dog();  </li>
<li>10.	  a.eat();  </li>
<li>11.	 }  </li>
<li>12.	}  </li>
</ul>
                        </p>
						<p class="qus">56) What is the Inheritance?</p>
						<p class="ans">Inheritance is a mechanism by which one object acquires all the properties and behavior of another object of another class. It is used for Code Reusability and Method Overriding. The idea behind inheritance in Java is that you can create new classes that are built upon existing classes. When you inherit from an existing class, you can reuse methods and fields of the parent class. Moreover, you can add new methods and fields in your current class also. Inheritance represents the IS-A relationship which is also known as a parent-child relationship.<br>
						There are five types of inheritance in Java.<br>
<ul>
<li>●	Single-level inheritance  </li>
<li>●	Multi-level inheritance    </li>
<li>●	Multiple Inheritance</li>
<li>●	Hierarchical Inheritance </li>
<li>●	Hybrid Inheritance</li>
</ul>
<p>Multiple inheritance is not supported in Java through class.
                        </p>
						<p class="qus">104) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	class BaseTest   </li>
<li>2.	{  </li>
<li>3.	  void print()  </li>
<li>4.	  {  </li>
<li>5.	    System.out.println("BaseTest:print() called");  </li>
<li>6.	  }  </li>
<li>7.	}  </li>
<li>8.	public class Test extends BaseTest   </li>
<li>9.	{  </li>
<li>10.	  void print()   </li>
<li>11.	  {  </li>
<li>12.	    System.out.println("Test:print() called");  </li>
<li>13.	  }  </li>
<li>14.	  public static void main (String args[])  </li>
<li>15.	  {  </li>
<li>16.	    BaseTest b = new Test();  </li>
<li>17.	    b.print();  </li>
<li>18.	  }  </li>
<li>19.	}  </li>
</ul>
<p>Output<br>
 Test:print() called<br>

Explanation<br>
It is an example of Dynamic method dispatch. The type of reference variable b is determined at runtime. At compile-time, it is checked whether that method is present in the Base class. In this case, it is overridden in the child class, therefore, at runtime the derived class method is called.
                        </p>
						<p class="qus">105) What is Java instanceOf operator?</p>
						<p class="ans">The instanceof in Java is also known as type comparison operator because it compares the instance with type. It returns either true or false. If we apply the instanceof operator with any variable that has a null value, it returns false. Consider the following example.<br>
<ul>
<li>1.	class Simple1{  </li>
<li>2.	 public static void main(String args[]){  </li>
<li>3.	 Simple1 s=new Simple1();  </li>
<li>4.	 System.out.println(s instanceof Simple1);//true  </li>
<li>5.	 }  </li>
<li>6.	}  </li>
</ul>
<p>Output<br>
true
                        </p>
						<p class="qus">106) What is the abstraction?</p>
						<p class="ans">Abstraction is a process of hiding the implementation details and showing only functionality to the user. It displays just the essential things to the user and hides the internal information, for example, sending SMS where you type the text and send the message. You don't know the internal processing about the message delivery. Abstraction enables you to focus on what the object does instead of how it does it. Abstraction lets you focus on what the object does instead of how it does it.<br>
In Java, there are two ways to achieve the abstraction.<br>
<ul>
<li>●	Abstract Class</li>
<li>●	Interface</li>
</ul>
                        </p>
						<p class="qus">107) What is the difference between abstraction and encapsulation?</p>
						<p class="ans">Abstraction hides the implementation details whereas encapsulation wraps code and data into a single unit.
                        </p>
						<p class="qus">108) What is the abstract class?</p>
						<p class="ans">A class that is declared as abstract is known as an abstract class. It needs to be extended and its method implemented. It cannot be instantiated. It can have abstract methods, non-abstract methods, constructors, and static methods. It can also have the final methods which will force the subclass not to change the body of the method. Consider the following example.<br>
<ul>
<li>1.	abstract class Bike{  </li>
<li>2.	  abstract void run();  </li>
<li>3.	}  </li>
<li>4.	class Honda4 extends Bike{  </li>
<li>5.	void run(){System.out.println("running safely");}  </li>
<li>6.	public static void main(String args[]){   </li>
<li>7.	 Bike obj = new Honda4();  </li>
<li>8.	 obj.run();  </li>
<li>9.	}  </li>
<li>10.	} </li>
</ul>
<p>Output<br>
running safely
                        </p>
						<p class="qus">109) Can there be an abstract method without an abstract class?</p>
						<p class="ans">No, if there is an abstract method in a class, that class must be abstract.
                        </p>
						<p class="qus">110) Is the following program written correctly? If yes then what will be the output of the program?</p>
						<p class="ans">
<ul>
<li>1.	abstract class Calculate  </li>
<li>2.	{  </li>
<li>3.	    abstract int multiply(int a, int b);  </li>
<li>4.	}  </li>
<li>5.	   </li>
<li>6.	public class Main  </li>
<li>7.	{  </li>
<li>8.	    public static void main(String[] args)  </li>
<li>9.	    {  </li>
<li>10.	        int result = new Calculate()  </li>
<li>11.	        {      </li>
<li>12.	            @Override  </li>
<li>13.	            int multiply(int a, int b)   </li>
<li>14.	            {  </li>
<li>15.	                return a*b;  </li>
<li>16.	            }  </li>
<li>17.	        }.multiply(12,32);  </li>
<li>18.	        System.out.println("result = "+result);  </li>
<li>19.	    }  </li>
<li>20.	}  </li>
</ul>
<p>Yes, the program is written correctly. The Main class provides the definition of abstract method multiply declared in abstract class Calculation. The output of the program will be:<br>
Output<br>
384
                        </p>
						<p class="qus">111) Can you use abstract and final both with a method?</p>
						<p class="ans">No, because we need to override the abstract method to provide its implementation, whereas we can't override the final method.
                        </p>
						<p class="qus">112) Is it possible to instantiate the abstract class?</p>
						<p class="ans">No, the abstract class can never be instantiated even if it contains a constructor and all of its methods are implemented.                 </p>
						<p class="qus">113) What is the interface?</p>
						<p class="ans">The interface is a blueprint for a class that has static constants and abstract methods. It can be used to achieve full abstraction and multiple inheritance. It is a mechanism to achieve abstraction. There can be only abstract methods in the Java interface, not method body. It is used to achieve abstraction and multiple inheritance in Java. In other words, you can say that interfaces can have abstract methods and variables. Java Interface also represents the IS-A relationship. It cannot be instantiated just like the abstract class. However, we need to implement it to define its methods. Since Java 8, we can have the default, static, and private methods in an interface.
                        </p>
						<p class="qus">114) What is a marker interface?</p>
						<p class="ans">A Marker interface can be defined as the interface which has no data member and member functions. For example, Serializable, Cloneable are marker interfaces. The marker interface can be declared as follows.<br>
<ul>
<li>1.	public interface Serializable{    </li>
<li>2.	}   </li>
</ul>
                        </p>
						<p class="qus">115) What are the differences between abstract class and interface?</p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Abstract class</th>
							  <th scope="col">Interface</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>An abstract class can have a method body (non-abstract methods).</td>
							  <td>The interface has only abstract methods.</td>
							</tr>
							<tr>
							  <td>An abstract class can have instance variables.</td>
							  <td>An interface cannot have instance variables.</td>
							</tr>
							<tr>
							  <td>An abstract class can have the constructor.</td>
							  <td>The interface cannot have the constructor.</td>
							</tr>
							<tr>
							  <td>An abstract class can have static methods.</td>
							  <td>The interface cannot have static methods.</td>
							</tr>
							<tr>
							  <td>You can extend one abstract class.</td>
							  <td>You can implement multiple interfaces.</td>
							</tr>
							<tr>
							  <td>The abstract class can provide the implementation of the interface.</td>
							  <td>The Interface can't provide the implementation of the abstract class.</td>
							</tr>
							<tr>
							  <td>The abstract keyword is used to declare an abstract class.</td>
							  <td>The interface keyword is used to declare an interface.</td>
							</tr>
							<tr>
							  <td>An abstract class can extend another Java class and implement multiple Java interfaces.</td>
							  <td>An interface can extend another Java interface only.</td>
							</tr>
							<tr>
							  <td>An abstract class can be extended using keyword extends</td>
							  <td>An interface class can be implemented using keyword implements</td>
							</tr>
							<tr>
							  <td>A Java abstract class can have class members like private, protected, etc.</td>
							  <td>Members of a Java interface are public by default.</td>
							</tr>
							<tr>
							  <td>Example:<br>
public abstract class Shape{<br>
public abstract void draw();<br>
}
</td>
							  <td>Example:<br>
public interface Drawable{<br>
void draw();<br>
}
</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">116) Can we define private and protected modifiers for the members in interfaces?</p>
						<p class="ans">No, they are implicitly public.
                        </p>
						<p class="qus">117) When can an object reference be cast to an interface reference?</p>
						<p class="ans">An object reference can be cast to an interface reference when the object implements the referenced interface.
                        </p>
						<p class="qus">118) How to make a read-only class in Java?</p>
						<p class="ans">A class can be made read-only by making all of the fields private. The read-only class will have only getter methods which return the private property of the class to the main method. We cannot modify this property because there is no setter method available in the class. Consider the following example.<br>
<ul>
<li>1.	  //A Java class which has only getter methods.    </li>
<li>2.	public class Student{    </li>
<li>3.	//private data member    </li>
<li>4.	private String college="AKG";    </li>
<li>5.	//getter method for college    </li>
<li>6.	public String getCollege(){    </li>
<li>7.	return college;    </li>
<li>8.	}    </li>
<li>9.	} </li>
</ul>
<p>Output<br>
true
                        </p>
						<p class="qus">119) How to make a write-only class in Java?</p>
						<p class="ans">A class can be made write-only by making all of the fields private. The write-only class will have only setter methods which set the value passed from the main method to the private fields. We cannot read the properties of the class because there is no getter method in this class. Consider the following example.<br>
<ul>
<li>1.	  //A Java class which has only setter methods.    </li>
<li>2.	public class Student{    </li>
<li>3.	//private data member    </li>
<li>4.	private String college;    </li>
<li>5.	//getter method for college    </li>
<li>6.	public void setCollege(String college){    </li>
<li>7.	this.college=college;     </li>
<li>8.	}    </li>
<li>9.	}    </li>
<li>10.	</li>
</ul>
                        </p>
						<p class="qus">120) What are the advantages of Encapsulation in Java?</p>
						<p class="ans">There are the following advantages of Encapsulation in Java<br>
<ul>
<li>●	By providing only the setter or getter method, you can make the class read-only or write-only. In other words, you can skip the getter or setter methods.</li>
<li>●	It provides you the control over the data. Suppose you want to set the value of id which should be greater than 100 only, you can write the logic inside the setter method. You can write the logic not to store the negative numbers in the setter methods.</li>
<li>●	It is a way to achieve data hiding in Java because other class will not be able to access the data through the private data members.</li>
<li>●	The encapsulate class is easy to test. So, it is better for unit testing.</li>
<li>●	The standard IDE's are providing the facility to generate the getters and setters. So, it is easy and fast to create an encapsulated class in Java.</li>
</ul>
                        </p>
						<p class="qus">121) What is the package?</p>
						<p class="ans">A package is a group of similar type of classes, interfaces, and sub-packages. It provides access protection and removes naming collision. The packages in Java can be categorized into two forms, inbuilt package, and user-defined package. There are many built-in packages such as Java, lang, awt, javax, swing, net, io, util, sql, etc. Consider the following example to create a package in Java.<br>
<ul>
<li>1.	//save as Simple.java  </li>
<li>2.	package mypack;   </li>
<li>3.	public class Simple{  </li>
<li>4.	 public static void main(String args[]){  </li>
<li>5.	    System.out.println("Welcome to package");  </li>
<li>6.	   }  </li>
<li>7.	}  </li>
</ul>
                        </p>
						<p class="qus">122) What are the advantages of defining packages in Java?</p>
						<p class="ans">By defining packages, we can avoid the name conflicts between the same class names defined in different packages. Packages also enable the developer to organize the similar classes more effectively. For example, one can clearly understand that the classes present in java.io package are used to perform io related operations.
                        </p>
						<p class="qus">123) How to create packages in Java?</p>
						<p class="ans">If you are using the programming IDEs like Eclipse, NetBeans, MyEclipse, etc. click on file->new->project and eclipse will ask you to enter the name of the package. It will create the project package containing various directories such as src, etc. If you are using an editor like notepad for java programming, use the following steps to create the package.<br>
<ul>
<li>●	Define a package package_name. Create the class with the name class_name and save this file with your_class_name.java.</li>
<li>Now compile the file by running the following command on the terminal.<br>
1.	javac -d . your_class_name.java  
</li>
<li>●	The above command creates the package with the name package_name in the present working directory.Now, run the class file by using the absolute class file name, like following.<br>
1.	java package_name.class_name  </li>
</ul>
<img src="<?= base_url(); ?>assets/img/packages.jpg" style="width:500px;" />
                        </p>
						<p class="qus">124) How can we access some class in another class in Java?</p>
						<p class="ans">There are two ways to access a class in another class.<br>
<ul>
<li>●	By using the fully qualified name: To access a class in a different package, either we must use the fully qualified name of that class, or we must import the package containing that class.</li>
<li>●	By using the relative path, We can use the path of the class that is related to the package that contains our class. It can be the same or subpackage.</li>
</ul>
                        </p>
						<p class="qus">125) Do I need to import java.lang package any time? Why?</p>
						<p class="ans">No. It is by default loaded internally by the JVM.
                        </p>
						<p class="qus">126) Can I import same package/class twice? Will the JVM load the package twice at runtime?</p>
						<p class="ans">One can import the same package or the same class multiple times. Neither compiler nor JVM complains about it. However, the JVM will internally load the class only once no matter how many times you import the same class.
                        </p>
						<p class="qus">127) What is the static import?</p>
						<p class="ans">By static import, we can access the static members of a class directly, and there is no to qualify it with the class name.
                        </p>
						<p class="qus">128) How many types of exception can occur in a Java program?</p>
						<p class="ans">There are mainly two types of exceptions: checked and unchecked. Here, an error is considered as the unchecked exception. According to Oracle, there are three types of exceptions:<br>
<ul>
<li>●	Checked Exception: Checked exceptions are the one which are checked at compile-time. For example, SQLException, ClassNotFoundException, etc.</li>
<li>●	Unchecked Exception: Unchecked exceptions are the one which are handled at runtime because they can not be checked at compile-time. For example, ArithmaticException, NullPointerException, ArrayIndexOutOfBoundsException, etc.
</li>
<li>●	Error: Error cause the program to exit since they are not recoverable. For Example, OutOfMemoryError, AssertionError, etc.
 </li>
</ul>
                        </p>
						<p class="qus">129) What is Exception Handling?</p>
						<p class="ans">Exception Handling is a mechanism that is used to handle runtime errors. It is used primarily to handle checked exceptions. Exception handling maintains the normal flow of the program. There are mainly two types of exceptions: checked and unchecked. Here, the error is considered as the unchecked exception.
                        </p>
						<p class="qus">130) Explain the hierarchy of Java Exception classes?</p>
						<p class="ans">The java.lang.Throwable class is the root class of Java Exception hierarchy which is inherited by two subclasses: Exception and Error. A hierarchy of Java Exception classes are given below:<br>
						<img src="<?= base_url(); ?>assets/img/exception.png" style="width:500px;" />
                        </p>
						<p class="qus">131) What is the difference between Checked Exception and Unchecked Exception?</p>
						<p class="ans">1) Checked Exception<br>
The classes that extend Throwable class except RuntimeException and Error are known as checked exceptions, e.g., IOException, SQLException, etc. Checked exceptions are checked at compile-time.<br>
2) Unchecked Exception<br>
The classes that extend RuntimeException are known as unchecked exceptions, e.g., ArithmeticException, NullPointerException, etc. Unchecked exceptions are not checked at compile-time.
                        </p>
						<p class="qus">132) What is the base class for Error and Exception?</p>
						<p class="ans">The Throwable class is the base class for Error and Exception.
                        </p>
						<p class="qus">133) Is it necessary that each try block must be followed by a catch block?</p>
						<p class="ans">It is not necessary that each try block must be followed by a catch block. It should be followed by either a catch block OR a finally block. So whatever exceptions are likely to be thrown should be declared in the throws clause of the method. Consider the following example.<br>
<ul>
<li>1.	public class Main{  </li>
<li>2.	     public static void main(String []args){  </li>
<li>3.	        try{  </li>
<li>4.	            int a = 1;    </li>
<li>5.	            System.out.println(a/0);  </li>
<li>6.	        }  </li>
<li>7.	        finally  </li>
<li>8.	        {  </li>
<li>9.	            System.out.println("rest of the code...");  </li>
<li>10.	        }  </li>
<li>11.	     }  </li>
<li>12.	}  </li>
<li>13.	   </li>
</ul>
<p>Output:<br>
Exception in thread main java.lang.ArithmeticException:/ by zero<br>
rest of the code...
                        </p>
						<p class="qus">134) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	public class ExceptionHandlingExample {  </li>
<li>2.	public static void main(String args[])  </li>
<li>3.	{  </li>
<li>4.	    try  </li>
<li>5.	    {  </li>
<li>6.	        int a = 1/0;  </li>
<li>7.	        System.out.println("a = "+a);  </li>
<li>8.	    }  </li>
<li>9.	    catch(Exception e){System.out.println(e);}  </li>
<li>10.	    catch(ArithmeticException ex){System.out.println(ex);}    </li>
<li>11.	}  </li>
<li>12.	}  </li>
</ul>
<p>Output<br>
ExceptionHandlingExample.java:10: error: exception ArithmeticException has already been caught<br>
	catch(ArithmeticException ex){System.out.println(ex);}<br>	
	^<br>
1 error<br>
Explanation<br>
ArithmaticException is the subclass of Exception. Therefore, it can not be used after Exception. Since Exception is the base class for all the exceptions, therefore, it must be used at last to handle the exception. No class can be used after this.
                        </p>
						<p class="qus">135) What is finally block?</p>
						<p class="ans">The "finally" block is used to execute the important code of the program. It is executed whether an exception is handled or not. In other words, we can say that finally block is the block which is always executed. Finally block follows try or catch block. If you don't handle the exception, before terminating the program, JVM runs finally block, (if any). The finally block is mainly used to place the cleanup code such as closing a file or closing a connection. Here, we must know that for each try block there can be zero or more catch blocks, but only one finally block. The finally block will not be executed if program exits(either by calling System.exit() or by causing a fatal error that causes the process to abort).<br>
						<img src="<?= base_url(); ?>assets/img/finallyblock.jpg" style="width:500px;" />
                        </p>
						<p class="qus">136) Can finally block be used without a catch?</p>
						<p class="ans">Yes, According to the definition of finally block, it must be followed by a try or catch block, therefore, we can use try block instead of catch.
                        </p>
						<p class="qus">137) Is there any case when finally will not be executed?</p>
						<p class="ans">Finally block will not be executed if program exits(either by calling System.exit() or by causing a fatal error that causes the process to abort).
                        </p>
						<p class="qus">138) What is the difference between throw and throws?</p>
						<p class="ans"><table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">throw keyword</th>
							  <th scope="col">throws keyword</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>1) The throw keyword is used to throw an exception explicitly.</td>
							  <td>The throws keyword is used to declare an exception.</td>
							</tr>
							<tr>
							  <td>2) The checked exceptions cannot be propagated with throw only.</td>
							  <td>The checked exception can be propagated with throws</td>
							</tr>
							<tr>
							  <td>3) The throw keyword is followed by an instance.</td>
							  <td>The throws keyword is followed by class.</td>
							</tr>
							<tr>
							  <td>4) The throw keyword is used within the method.</td>
							  <td>The throws keyword is used with the method signature.</td>
							</tr>
							<tr>
							  <td>5) You cannot throw multiple exceptions.</td>
							  <td>You can declare multiple exceptions, e.g., public void method()throws IOException, SQLException.</td>
							</tr>
						  </tbody>
						</table>
                        </p>
						<p class="qus">139) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	  public class Main{  </li>
<li>2.	     public static void main(String []args){  </li>
<li>3.	        try  </li>
<li>4.	        {  </li>
<li>5.	            throw 90;   </li>
<li>6.	        }  </li>
<li>7.	        catch(int e){  </li>
<li>8.	            System.out.println("Caught the exception "+e);  </li>
<li>9.	        }  </li>
<li>10.	           </li>
<li>11.	    }  </li>
<li>12.	}  </li>
</ul>
<p>Output<br>
Main.java:6: error: incompatible types: int cannot be converted to Throwable<br>
            throw 90; <br>
            ^<br>
Main.java:8: error: unexpected type<br>
        catch(int e){<br>
              ^<br>
  required: class<br>
  found:    int<br>
2 errors<br>
Explanation<br>
In Java, the throwable objects can only be thrown. If we try to throw an integer object, The compiler will show an error since we can not throw basic data type from a block of code.
                        </p>
						<p class="qus">140) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	class Calculation extends Exception  </li>
<li>2.	{  </li>
<li>3.	    public Calculation()   </li>
<li>4.	    {  </li>
<li>5.	        System.out.println("Calculation class is instantiated");  </li>
<li>6.	    }  </li>
<li>7.	    public void add(int a, int b)  </li>
<li>8.	    {  </li>
<li>9.	        System.out.println("The sum is "+(a+b));   </li>
<li>10.	    }  </li>
<li>11.	}  </li>
<li>12.	public class Main{  </li>
<li>13.	     public static void main(String []args){  </li>
<li>14.	        try  </li>
<li>15.	        {  </li>
<li>16.	            throw new Calculation();   </li>
<li>17.	        }  </li>
<li>18.	        catch(Calculation c){  </li>
<li>19.	            c.add(10,20);  </li>
<li>20.	        }  </li>
<li>21.	    }  </li>
<li>22.	}   </li>
</ul>
<p>Output<br>
Calculation class is instantiated<br>
The sum is 30<br>
Explanation<br>
The object of Calculation is thrown from the try block which is caught in the catch block. The add() of Calculation class is called with the integer values 10 and 20 by using the object of this class. Therefore there sum 30 is printed. The object of the Main class can only be thrown in the case when the type of the object is throwable. To do so, we need to extend the throwable class.
                        </p>
						<p class="qus">141) Can an exception be rethrown?</p>
						<p class="ans">Yes.
                        </p>
						<p class="qus">142) Can subclass overriding method declare an exception if parent class method doesn't throw an exception?</p>
						<p class="ans">Yes but only unchecked exception not checked.
                        </p>
						<p class="qus">143) What is exception propagation?</p>
						<p class="ans">An exception is first thrown from the top of the stack and if it is not caught, it drops down the call stack to the previous method, If not caught there, the exception again drops down to the previous method, and so on until they are caught or until they reach the very bottom of the call stack. This procedure is called exception propagation. By default, checked exceptions are not propagated.<br>
<ul>
<li>1.	class TestExceptionPropagation1{  </li>
<li>2.	  void m(){  </li>
<li>3.	    int data=50/0;  </li>
<li>4.	  }  </li>
<li>5.	  void n(){  </li>
<li>6.	    m();  </li>
<li>7.	  }  </li>
<li>8.	  void p(){  </li>
<li>9.	   try{  </li>
<li>10.	    n();  </li>
<li>11.	   }catch(Exception e){System.out.println("exception handled");}  </li>
<li>12.	  }  </li>
<li>13.	  public static void main(String args[]){  </li>
<li>14.	   TestExceptionPropagation1 obj=new TestExceptionPropagation1();  </li>
<li>15.	   obj.p();  </li>
<li>16.	   System.out.println("normal flow...");  </li>
<li>17.	  }  </li>
<li>18.	}  </li>
</ul>
<p>Output:<br>
exception handled<br>
normal flow...<br>
<img src="<?= base_url(); ?>assets/img/fullstack.jpg" style="width:500px;" />
                        </p>
						<p class="qus">144) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	public class Main   </li>
<li>2.	{  </li>
<li>3.	    void a()  </li>
<li>4.	    {  </li>
<li>5.	        try{  </li>
<li>6.	        System.out.println("a(): Main called");  </li>
<li>7.	        b();  </li>
<li>8.	        }catch(Exception e)  </li>
<li>9.	        {  </li>
<li>10.	            System.out.println("Exception is caught");  </li>
<li>11.	        }  </li>
<li>12.	    }  </li>
<li>13.	    void b() throws Exception  </li>
<li>14.	    {  </li>
<li>15.	     try{  </li>
<li>16.	         System.out.println("b(): Main called");  </li>
<li>17.	         c();  </li>
<li>18.	     }catch(Exception e){  </li>
<li>19.	         throw new Exception();  </li>
<li>20.	     }  </li>
<li>21.	     finally   </li>
<li>22.	     {  </li>
<li>23.	         System.out.println("finally block is called");  </li>
<li>24.	     }  </li>
<li>25.	    }  </li>
<li>26.	    void c() throws Exception   </li>
<li>27.	    {  </li>
<li>28.	        throw new Exception();  </li>
<li>29.	    }  </li>
<li>30.	  </li>
<li>31.	    public static void main (String args[])  </li>
<li>32.	    {  </li>
<li>33.	        Main m = new Main();  </li>
<li>34.	        m.a();  </li>
<li>35.	    }  </li>
<li>36.	}  </li>
</ul>
<p>Output<br>
a(): Main called<br>
b(): Main called<br>
finally block is called<br>
Exception is caught<br>
Explanation<br>
In the main method, a() of Main is called which prints a message and call b(). The method b() prints some message and then call c(). The method c() throws an exception which is handled by the catch block of method b. However, It propagates this exception by using throw Exception() to be handled by the method a(). As we know, finally block is always executed therefore the finally block in the method b() is executed first and prints a message. At last, the exception is handled by the catch block of the method a().
                        </p>
						<p class="qus">145) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	public class Calculation   </li>
<li>2.	{  </li>
<li>3.	    int a;   </li>
<li>4.	    public Calculation(int a)  </li>
<li>5.	    {  </li>
<li>6.	        this.a = a;  </li>
<li>7.	    }  </li>
<li>8.	    public int add()  </li>
<li>9.	    {  </li>
<li>10.	        a = a+10;   </li>
<li>11.	        try   </li>
<li>12.	        {  </li>
<li>13.	            a = a+10;   </li>
<li>14.	            try   </li>
<li>15.	            {  </li>
<li>16.	                a = a*10;   </li>
<li>17.	                throw new Exception();   </li>
<li>18.	            }catch(Exception e){  </li>
<li>19.	                a = a - 10;  </li>
<li>20.	            }  </li>
<li>21.	        }catch(Exception e)  </li>
<li>22.	        {  </li>
<li>23.	            a = a - 10;   </li>
<li>24.	        }  </li>
<li>25.	        return a;  </li>
<li>26.	    }  </li>
<li>27.	      </li>
<li>28.	    public static void main (String args[])  </li>
<li>29.	    {  </li>
<li>30.	        Calculation c = new Calculation(10);  </li>
<li>31.	        int result = c.add();  </li>
<li>32.	        System.out.println("result = "+result);  </li>
<li>33.	    }  </li>
<li>34.	}  </li>
</ul>
<p>Output<br>
result = 290<br>
Explanation<br>
The instance variable a of class Calculation is initialized to 10 using the class constructor which is called while instantiating the class. The add method is called which returns an integer value result. In add() method, a is incremented by 10 to be 20. Then, in the first try block, 10 is again incremented by 10 to be 30. In the second try block, a is multiplied by 10 to be 300. The second try block throws the exception which is caught by the catch block associated with this try block. The catch block again alters the value of a by decrementing it by 10 to make it 290. Thus the add() method returns 290 which is assigned to result. However, the catch block associated with the outermost try block will never be executed since there is no exception which can be handled by this catch block.
                        </p>
						<p class="qus">146) What is String Pool?</p>
						<p class="ans">String pool is the space reserved in the heap memory that can be used to store the strings. The main advantage of using the String pool is whenever we create a string literal; the JVM checks the "string constant pool" first. If the string already exists in the pool, a reference to the pooled instance is returned. If the string doesn't exist in the pool, a new string instance is created and placed in the pool. Therefore, it saves the memory by avoiding the duplicacy.<br>
						<img src="<?= base_url(); ?>assets/img/pool.jpg" style="width:500px;" />
                        </p>
						<p class="qus">147) What is the meaning of immutable regarding String?</p>
						<p class="ans">The simple meaning of immutable is unmodifiable or unchangeable. In Java, String is immutable, i.e., once string object has been created, its value can't be changed. Consider the following example for better understanding.<br>
<ul>
<li>1.	class Testimmutablestring{  </li>
<li>2.	 public static void main(String args[]){  </li>
<li>3.	   String s="Sachin";  </li>
<li>4.	   s.concat(" Tendulkar");//concat() method appends the string at the end  </li>
<li>5.	   System.out.println(s);//will print Sachin because strings are immutable objects  </li>
<li>6.	 }  </li>
<li>7.	}  </li>
</ul>
<p>Output:<br>
Sachin
                        </p>
						<p class="qus">148) Why are the objects immutable in java?</p>
						<p class="ans">Because Java uses the concept of the string literal. Suppose there are five reference variables, all refer to one object "sachin". If one reference variable changes the value of the object, it will be affected by all the reference variables. That is why string objects are immutable in java.<br>
                        </p>
						<img src="<?= base_url(); ?>assets/img/immutable.jpg" style="width:500px;" />
						<p class="qus">149) How many ways can we create the string object?</p>
						<p class="ans">1) String Literal<br>
Java String literal is created by using double quotes. For Example:<br>
1.	String s="welcome";<br>  
Each time you create a string literal, the JVM checks the "string constant pool" first. If the string already exists in the pool, a reference to the pooled instance is returned. If the string doesn't exist in the pool, a new string instance is created and placed in the pool. String objects are stored in a special memory area known as the string constant pool For example:<br>
1.	String s1="Welcome";<br>  
2.	String s2="Welcome";//It doesn't create a new instance <br> 
2) By new keyword<br>
1.	String s=new String("Welcome");//creates two objects and one reference variable<br>  
In such case, JVM will create a new string object in normal (non-pool) heap memory, and the literal "Welcome" will be placed in the constant string pool. The variable s will refer to the object in a heap (non-pool).
                        </p>
						<p class="qus">150) How many objects will be created in the following code?</p>
						<p class="ans">
<ul>
<li>1.	String s1="Welcome";  </li>
<li>2.	String s2="Welcome";  </li>
<li>3.	String s3="Welcome";  </li>
</ul>
<p>Only one object will be created using the above code because strings in Java are immutable.
                        </p>
						<p class="qus">151) How many objects will be created in the following code?</p>
						<p class="ans">1.	String s = new String("Welcome");<br>  
Two objects, one in string constant pool and other in non-pool(heap).<br>
                        </p>
						<p class="qus">152) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	public class Test   </li>
<li>2.	  </li>
<li>3.	  public static void main (String args[])  </li>
<li>4.	  {  </li>
<li>5.	      String a = new String("Sharma is a good player");  </li>
<li>6.	      String b = "Sharma is a good player";  </li>
<li>7.	      if(a == b)  </li>
<li>8.	      {  </li>
<li>9.	          System.out.println("a == b");  </li>
<li>10.	      }  </li>
<li>11.	      if(a.equals(b))  </li>
<li>12.	      {  </li>
<li>13.	          System.out.println("a equals b");  </li>
<li>14.	      }  </li>
<li>15.	  }  </li>
</ul>
<p>Output<br>
 a equals b<br>
Explanation<br>
The operator == also check whether the references of the two string objects are equal or not. Although both of the strings contain the same content, their references are not equal because both are created by different ways(Constructor and String literal) therefore, a == b is unequal. On the other hand, the equal() method always check for the content. Since their content is equal hence, a equals b is printed.
                        </p>
						<p class="qus">153) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	public class Test   </li>
<li>2.	{  </li>
<li>3.	    public static void main (String args[])  </li>
<li>4.	    {  </li>
<li>5.	        String s1 = "Sharma is a good player";  </li>
<li>6.	        String s2 = new String("Sharma is a good player");  </li>
<li>7.	        s2 = s2.intern();  </li>
<li>8.	        System.out.println(s1 ==s2);  </li>
<li>9.	    }  </li>
<li>10.	}  </li>
</ul>
<p>Output<br>
true<br>
Explanation<br>
The intern method returns the String object reference from the string pool. In this case, s1 is created by using string literal whereas, s2 is created by using the String pool. However, s2 is changed to the reference of s1, and the operator == returns true.
                        </p>
						<p class="qus">154) What are the differences between String and StringBuffer?</p>
						<p class="ans">The differences between the String and StringBuffer is given in the table below. </p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">No.</th>
							  <th scope="col">String</th>
							  <th scope="col">StringBuffer</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>1)</td>
							  <td>The String class is immutable.</td>
							  <td>The StringBuffer class is mutable.</td>
							</tr>
							<tr>
							  <td>2)</td>
							  <td>The String is slow and consumes more memory when you concat too many strings because every time it creates a new instance.</td>
							  <td>The StringBuffer is fast and consumes less memory when you cancat strings.</td>
							</tr>
							<tr>
							  <td>3)</td>
							  <td>The String class overrides the equals() method of Object class. So you can compare the contents of two strings by equals() method.</td>
							  <td>The StringBuffer class doesn't override the equals() method of Object class.</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">155) What are the differences between StringBuffer and StringBuilder?</p>
						<p class="ans">The differences between the StringBuffer and StringBuilder is given below.
                        </p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">No.</th>
							  <th scope="col">StringBuffer</th>
							  <th scope="col">StringBuilder</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>1)</td>
							  <td>StringBuffer is synchronized, i.e., thread safe. It means two threads can't call the methods of StringBuffer simultaneously.</td>
							  <td>StringBuilder is non-synchronized,i.e., not thread safe. It means two threads can call the methods of StringBuilder simultaneously.</td>
							</tr>
							<tr>
							  <td>2)</td>
							  <td>StringBuffer is less efficient than StringBuilder.</td>
							  <td>StringBuilder is more efficient than StringBuffer.</td>
							</tr>
							<tr>
						<p class="qus">156) How can we create an immutable class in Java?</p>
						<p class="ans">We can create an immutable class by defining a final class having all of its members as final. Consider the following example.<br>
<ul>
<li>1.	public final class Employee{  </li>
<li>2.	final String pancardNumber;  </li>
<li>3.	  </li>
<li>4.	public Employee(String pancardNumber){  </li>
<li>5.	this.pancardNumber=pancardNumber;  </li>
<li>6.	}  </li>
<li>7.	  </li>
<li>8.	public String getPancardNumber(){  </li>
<li>9.	return pancardNumber;  </li>
<li>10.	}  </li>
<li>11.	  </li>
<li>12.	}  </li>
</ul>
<p>Output<br>
true
                        </p>
						<p class="qus">157) What is the purpose of toString() method in Java?</p>
						<p class="ans">The toString() method returns the string representation of an object. If you print any object, java compiler internally invokes the toString() method on the object. So overriding the toString() method, returns the desired output, it can be the state of an object, etc. depending upon your implementation. By overriding the toString() method of the Object class, we can return the values of the object, so we don't need to write much code. Consider the following example.<br>
<ul>
<li>1.	class Student{  </li>
<li>2.	 int rollno;  </li>
<li>3.	 String name;  </li>
<li>4.	 String city;  </li>
<li>5.	  </li>
<li>6.	 Student(int rollno, String name, String city){  </li>
<li>7.	 this.rollno=rollno;  </li>
<li>8.	 this.name=name;  </li>
<li>9.	 this.city=city;  </li>
<li>10.	 }  </li>
<li>11.	   </li>
<li>12.	 public String toString(){//overriding the toString() method  </li>
<li>13.	  return rollno+" "+name+" "+city;  </li>
<li>14.	 }  </li>
<li>15.	 public static void main(String args[]){  </li>
<li>16.	   Student s1=new Student(101,"Raj","lucknow");  </li>
<li>17.	   Student s2=new Student(102,"Vijay","ghaziabad");  </li>
<li>18.	     </li>
<li>19.	   System.out.println(s1);//compiler writes here s1.toString()  </li>
<li>20.	   System.out.println(s2);//compiler writes here s2.toString()  </li>
<li>21.	 }  </li>
<li>22.	}  </li>
</ul>
<p>Output:<br>
101 Raj lucknow<br>
102 Vijay ghaziabad
                        </p>
						<p class="qus">158) Why CharArray() is preferred over String to store the password?</p>
						<p class="ans">String stays in the string pool until the garbage is collected. If we store the password into a string, it stays in the memory for a longer period, and anyone having the memory-dump can extract the password as clear text. On the other hand, Using CharArray allows us to set it to blank whenever we are done with the password. It avoids the security threat with the string by enabling us to control the memory.
                        </p>
						<p class="qus">159) Write a Java program to count the number of words present in a string?</p>
						<p class="ans">Program:<br>
<ul>
<li>1.	  public class Test   </li>
<li>2.	{  </li>
<li>3.	    public static void main (String args[])  </li>
<li>4.	    {  </li>
<li>5.	        String s = "Sharma is a good player and he is so punctual";  </li>
<li>6.	        String words[] = s.split(" ");  </li>
<li>7.	        System.out.println("The Number of words present in the string are : "+words.length);  </li>
<li>8.	    }  </li>
<li>9.	}  </li>
</ul>
<p>Output<br>
The Number of words present in the string are : 10
                        </p>
						<p class="qus">160) Name some classes present in java.util.regex package.</p>
						<p class="ans">There are the following classes and interfaces present in java.util.regex package.<br>
<ul>
<li>●	MatchResult Interface</li>
<li>●	Matcher class</li>
<li>●	Pattern class</li>
<li>●	PatternSyntaxException class </li>
</ul>
<img src="<?= base_url(); ?>assets/img/utilrejex.jpg" style="width:500px;" />
                        </p>
						<p class="qus">161) How the metacharacters are different from the ordinary characters?</p>
						<p class="ans">Metacharacters have the special meaning to the regular expression engine. The metacharacters are ^, $, ., *, +, etc. The regular expression engine does not consider them as the regular characters. To enable the regular expression engine treating the metacharacters as ordinary characters, we need to escape the metacharacters with the backslash.
						</p>
						<p class="qus">162) Write a regular expression to validate a password. A password must start with an alphabet and followed by alphanumeric characters; Its length must be in between 8 to 20.</p>
						<p class="ans">The regular expression for the above criteria will be: ^[a-zA-Z][a-zA-Z0-9]{8,19} where ^ represents the start of the regex, [a-zA-Z] represents that the first character must be an alphabet, [a-zA-Z0-9] represents the alphanumeric character, {8,19} represents that the length of the password must be in between 8 and 20.
                        </p>
						<p class="qus">163) What is the output of the following Java program?</p>
						<p class="ans">
<ul>
<li>1.	import java.util.regex.*;  </li>
<li>2.	class RegexExample2{  </li>
<li>3.	public static void main(String args[]){  </li>
<li>4.	System.out.println(Pattern.matches(".s", "as")); //line 4  </li>
<li>5.	System.out.println(Pattern.matches(".s", "mk")); //line 5   </li>
<li>6.	System.out.println(Pattern.matches(".s", "mst")); //line 6  </li>
<li>7.	System.out.println(Pattern.matches(".s", "amms")); //line 7  </li>
<li>8.	System.out.println(Pattern.matches("..s", "mas")); //line 8  </li>
<li>9.	}}  </li>
</ul>
<p>Output<br>
true<br>
false <br>
false<br>
false <br>
true<br>
Explanation<br>
line 4 prints true since the second character of string is s, line 5 prints false since the second character is not s, line 6 prints false since there are more than 3 characters in the string, line 7 prints false since there are more than 2 characters in the string, and it contains more than 2 characters as well, line 8 prints true since the third character of the string is s.
                        </p>
						<p class="qus">164) What are the advantages of Java inner classes?</p>
						<p class="ans">There are two types of advantages of Java inner classes.<br>
<ul>
<li>●	Nested classes represent a special type of relationship that is it can access all the members (data members and methods) of the outer class including private.</li>
<li>●	Nested classes are used to develop a more readable and maintainable code because it logically groups classes and interfaces in one place only.</li>
<li>●	Code Optimization: It requires less code to write.</li>
</ul>
<p>Output<br>
true
                        </p>
						<p class="qus">165) What is a nested class?</p>
						<p class="ans">The nested class can be defined as the class which is defined inside another class or interface. We use the nested class to logically group classes and interfaces in one place so that it can be more readable and maintainable. A nested class can access all the data members of the outer class including private data members and methods. The syntax of the nested class is defined below.<br>
<ul>
<li>1.	class Java_Outer_class{    </li>
<li>2.	 //code    </li>
<li>3.	 class Java_Nested_class{    </li>
<li>4.	  //code </li>
<li>5.	 }     </li>
<li>6.	}    </li>
<li>7.	     </li>
</ul>
<p>There are two types of nested classes, static nested class, and non-static nested class. The non-static nested class can also be called as inner-class
                        </p>
						<p class="qus">166) What are the disadvantages of using inner classes?</p>
						<p class="ans">There are the following main disadvantages of using inner classes.<br>
<ul>
<li>●	Inner classes increase the total number of classes used by the developer and therefore increases the workload of JVM since it has to perform some routine operations for those extra classes which result in slower performance.</li>
<li>●	IDEs provide less support to the inner classes as compare to the top level classes and therefore it annoys the developers while working with inner classes.</li>
</ul>
<p>Output<br>
true
                        </p>
						<p class="qus">167) What are the types of inner classes (non-static nested class) used in Java?</p>
						<p class="ans">There are mainly three types of inner classes used in Java.
                        </p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Type</th>
							  <th scope="col">Description</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Member Inner Class</td>
							  <td>A class created within class and outside method.</td>
							</tr>
							<tr>
							  <td>Anonymous Inner Class</td>
							  <td>A class created for implementing an interface or extending class. Its name is decided by the java compiler.</td>
							</tr>
							<tr>
							  <td>Local Inner Class</td>
							  <td>A class created within the method.</td>
							  </tr>
						  </tbody>
						</table>
						<p class="qus">168) Is there any difference between nested classes and inner classes?</p>
						<p class="ans">Yes, inner classes are non-static nested classes. In other words, we can say that inner classes are the part of nested classes.
                        </p>
						<p class="qus">169) Can we access the non-final local variable, inside the local inner class?</p>
						<p class="ans">No, the local variable must be constant if you want to access it in the local inner class.
                        </p>
						<p class="qus">170) How many class files are created on compiling the OuterClass in the following program?</p>
						<p class="ans">
<ul>
<li>1.	public class Person {  </li>
<li>2.	String name, age, address;  </li>
<li>3.	class Employee{  </li>
<li>4.	  float salary=10000;  </li>
<li>5.	}  </li>
<li>6.	class BusinessMen{  </li>
<li>7.	  final String gstin="£4433drt3$";   </li>
<li>8.	}  </li>
<li>9.	public static void main (String args[])  </li>
<li>10.	{  </li>
<li>11.	  Person p = new Person();  </li>
<li>12.	}  </li>
<li>13.	}  </li>
</ul>
<p>3 class-files will be created named as Person.class, Person$BusinessMen.class, and Person$Employee.class.
                        </p>
						<p class="qus">171) What are anonymous inner classes?</p>
						<p class="ans">Anonymous inner classes are the classes that are automatically declared and instantiated within an expression. We cannot apply different access modifiers to them. Anonymous class cannot be static, and cannot define any static fields, method, or class. In other words, we can say that it a class without the name and can have only one object that is created by its definition. Consider the following example.<br>
<ul>
<li>1.	abstract class Person{ </li>
<li>2.	  abstract void eat();  </li>
<li>3.	}  </li>
<li>4.	class TestAnonymousInner{  </li>
<li>5.	 public static void main(String args[]){  </li>
<li>6.	  Person p=new Person(){  </li>
<li>7.	  void eat(){System.out.println("nice fruits");}  </li>
<li>8.	  };  </li>
<li>9.	  p.eat();  </li>
<li>10.	 }  </li>
<li>11.	}  </li>
</ul>
<p>Output:<br>
nice fruits<br>
Consider the following example for the working of the anonymous class using interface.</p>
<ul>
<li>1.	interface Eatable{  </li>
<li>2.	 void eat();  </li>
<li>3.	}  </li>
<li>4.	class TestAnnonymousInner1{  </li>
<li>5.	 public static void main(String args[]){  </li>
<li>6.	 Eatable e=new Eatable(){  </li>
<li>7.	  public void eat(){System.out.println("nice fruits");}  </li>
<li>8.	 };  </li>
<li>9.	 e.eat();  </li>
<li>10.	 }  </li>
<li>11.	}  </li>
</ul>
<p>Output:<br>
nice fruits
                        </p>
						<p class="qus">172) What is the nested interface?</p>
						<p class="ans">An Interface that is declared inside the interface or class is known as the nested interface. It is static by default. The nested interfaces are used to group related interfaces so that they can be easy to maintain. The external interface or class must refer to the nested interface. It can't be accessed directly. The nested interface must be public if it is declared inside the interface but it can have any access modifier if declared within the class. The syntax of the nested interface is given as follows.<br>
<ul>
<li>1.	interface interface_name{    </li>
<li>2.	 ...    </li>
<li>3.	 interface nested_interface_name{    </li>
<li>4.	  ...    </li>
<li>5.	 }    </li>
<li>6.	}    </li>
</ul>
                        </p>
						<p class="qus">173) Can a class have an interface?</p>
						<p class="ans">Yes, an interface can be defined within the class. It is called a nested interface.
                        </p>
						<p class="qus">174) Can an Interface have a class?</p>
						<p class="ans">Yes, they are static implicitly.
                        </p>
						<p class="qus">175) What is Garbage Collection?</p>
						<p class="ans">Garbage collection is a process of reclaiming the unused runtime objects. It is performed for memory management. In other words, we can say that It is the process of removing unused objects from the memory to free up space and make this space available for Java Virtual Machine. Due to garbage collection java gives 0 as output to a variable whose value is not set, i.e., the variable has been defined but not initialized. For this purpose, we were using free() function in the C language and delete() in C++. In Java, it is performed automatically. So, java provides better memory management.
                        </p>
						<p class="qus">176) What is gc()?</p>
						<p class="ans">The gc() method is used to invoke the garbage collector for cleanup processing. This method is found in System and Runtime classes. This function explicitly makes the Java Virtual Machine free up the space occupied by the unused objects so that it can be utilized or reused. Consider the following example for the better understanding of how the gc() method invoke the garbage collector.<br>
<ul>
<li>1.	public class TestGarbage1{  </li>
<li>2.	 public void finalize(){System.out.println("object is garbage collected");}  </li>
<li>3.	 public static void main(String args[]){  </li>
<li>4.	  TestGarbage1 s1=new TestGarbage1();  </li>
<li>5.	  TestGarbage1 s2=new TestGarbage1();  </li>
<li>6.	  s1=null;  </li>
<li>7.	  s2=null;  </li>
<li>8.	  System.gc();  </li>
<li>9.	 }  </li>
<li>10.	}  </li>
</ul>
<p>      object is garbage collected<br>
       object is garbage collected
                        </p>
						<p class="qus">177) How is garbage collection controlled?</p>
						<p class="ans">Garbage collection is managed by JVM. It is performed when there is not enough space in the memory and memory is running low. We can externally call the System.gc() for the garbage collection. However, it depends upon the JVM whether to perform it or not.
                        </p>
						<p class="qus">178) How can an object be unreferenced?</p>
						<p class="ans">There are many ways:<br>
<ul>
<li>●	By nulling the reference</li>
<li>●	By assigning a reference to another</li>
<li>●	By anonymous object etc.</li>
</ul>
<img src="<?= base_url(); ?>assets/img/unreferenced.jpg" style="width:500px;" />
<p>1) By nulling a reference:</p>
<ul>
<li>1.	Employee e=new Employee();  </li>
<li>2.	e=null;  </li>
</ul>
<p>2) By assigning a reference to another:</p>
<ul>
<li>1.	Employee e1=new Employee();  </li>
<li>2.	Employee e2=new Employee();  </li>
<li>3.	e1=e2;//now the first object referred by e1 is available for garbage collection  </li>
</ul>
<p>3) By anonymous object:</p>
<ul>
<li>1.	new Employee();  </li>
<li>2.	</li>
</ul>
                        </p>
						<p class="qus">179) What is the purpose of the finalize() method?</p>
						<p class="ans">The finalize() method is invoked just before the object is garbage collected. It is used to perform cleanup processing. The Garbage collector of JVM collects only those objects that are created by new keyword. So if you have created an object without new, you can use the finalize method to perform cleanup processing (destroying remaining objects). The cleanup processing is the process to free up all the resources, network which was previously used and no longer needed. It is essential to remember that it is not a reserved keyword, finalize method is present in the object class hence it is available in every class as object class is the superclass of every class in java. Here, we must note that neither finalization nor garbage collection is guaranteed. Consider the following example.<br>
<ul>
<li>1.	public class FinalizeTest {  </li>
<li>2.	    int j=12;  </li>
<li>3.	    void add()  </li>
<li>4.	    {  </li>
<li>5.	        j=j+12;  </li>
<li>6.	        System.out.println("J="+j);  </li>
<li>7.	    }  </li>
<li>8.	    public void finalize()  </li>
<li>9.	    {  </li>
<li>10.	        System.out.println("Object is garbage collected");  </li>
<li>11.	    }  </li>
<li>12.	    public static void main(String[] args) {  </li>
<li>13.	        new FinalizeTest().add();  </li>
<li>14.	        System.gc();  </li>
<li>15.	        new FinalizeTest().add();  </li>
<li>16.	    }  </li>
<li>17.	}  </li>
<li>18.	      </li>
</ul>
<p>Output<br>
true
                        </p>
						<p class="qus">180) Can an unreferenced object be referenced again?</p>
						<p class="ans">Yes,
                        </p>
						<p class="qus">181) What kind of thread is the Garbage collector thread?</p>
						<p class="ans">Daemon thread.
                        </p>
						<p class="qus">182) What is the difference between final, finally and finalize?</p>
						<p class="ans"><table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">No.</th>
							  <th scope="col">final</th>
							  <th scope="col">finally</th>
							  <th scope="col">finalize</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>1)</td>
							  <td>Final is used to apply restrictions on class, method, and variable. The final class can't be inherited, final method can't be overridden, and final variable value can't be changed.</td>
							  <td>Finally is used to place important code, it will be executed whether an exception is handled or not.</td>
							  <td>Finalize is used to perform clean up processing just before an object is garbage collected.</td>
							</tr>
							<tr>
							  <td>2)</td>
							  <td>Final is a keyword.</td>
							  <td>Finally is a block.</td>
							  <td>Finalize is a method.</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">183) What is the purpose of the Runtime class?</p>
						<p class="ans">Java Runtime class is used to interact with a java runtime environment. Java Runtime class provides methods to execute a process, invoke GC, get total and free memory, etc. There is only one instance of java.lang.Runtime class is available for one java application. The Runtime.getRuntime() method returns the singleton instance of Runtime class.
                        </p>
						<p class="qus">184) How will you invoke any external process in Java?</p>
						<p class="ans">By Runtime.getRuntime().exec(?) method. Consider the following example.<br>
<ul>
<li>1.	public class Runtime1{  </li>
<li>2.	 public static void main(String args[])throws Exception{  </li>
<li>3.	  Runtime.getRuntime().exec("notepad");//will open a new notepad  </li>
<li>4.	 }  </li>
<li>5.	}  </li>
<li>6.	 </li>
</ul>
                        </p>
						<p class="qus">185) Give the hierarchy of InputStream and OutputStream classes.</p>
						<p class="ans">OutputStream Hierarchy<br>
InputStream Hierarchy
                        </p>
						<p class="qus">186) What do you understand by an IO stream?</p>
						<p class="ans">The stream is a sequence of data that flows from source to destination. It is composed of bytes. In Java, three streams are created for us automatically.<br>
<ul>
<li>●	System.out: standard output stream</li>
<li>●	System.in: standard input stream</li>
<li>●	System.err: standard error stream</li>
</ul>
<p>Output<br>
true
                        </p>
						<p class="qus">187) What is the difference between the Reader/Writer class hierarchy and the InputStream/OutputStream class hierarchy?</p>
						<p class="ans">●	The Reader/Writer class hierarchy is character-oriented, and the InputStream/OutputStream class hierarchy is byte-oriented. The ByteStream classes are used to perform input-output of 8-bit bytes whereas the CharacterStream classes are used to perform the input/output for the 16-bit Unicode system. There are many classes in the ByteStream class hierarchy, but the most frequently used classes are FileInputStream and FileOutputStream. The most frequently used classes CharacterStream class hierarchy is FileReader and FileWriter.
                        </p>
						<p class="qus">188) What are the super most classes for all the streams?</p>
						<p class="ans">All the stream classes can be divided into two types of classes that are ByteStream classes and CharacterStream Classes. The ByteStream classes are further divided into InputStream classes and OutputStream classes. CharacterStream classes are also divided into Reader classes and Writer classes. The SuperMost classes for all the InputStream classes is java.io.InputStream and for all the output stream classes is java.io.OutPutStream. Similarly, for all the reader classes, the super-most class is java.io.Reader, and for all the writer classes, it is java.io.Writer.
                        </p>
						<p class="qus">189) What are the FileInputStream and FileOutputStream?</p>
						<p class="ans">Java FileOutputStream is an output stream used for writing data to a file. If you have some primitive values to write into a file, use FileOutputStream class. You can write byte-oriented as well as character-oriented data through the FileOutputStream class. However, for character-oriented data, it is preferred to use FileWriter than FileOutputStream. Consider the following example of writing a byte into a file.<br>
<ul>
<li>1.	import java.io.FileOutputStream;    </li>
<li>2.	public class FileOutputStreamExample {    </li>
<li>3.	    public static void main(String args[]){      </li>
<li>4.	           try{      </li>
<li>5.	             FileOutputStream fout=new FileOutputStream("D:\\testout.txt");      </li>
<li>6.	             fout.write(65);      </li>
<li>7.	             fout.close();      </li>
<li>8.	             System.out.println("success...");      </li>
<li>9.	            }catch(Exception e){System.out.println(e);}      </li>
<li>10.	      }      </li>
<li>11.	      }      </li>
</ul>
<p>Java FileInputStream class obtains input bytes from a file. It is used for reading byte-oriented data (streams of raw bytes) such as image data, audio, video, etc. You can also read character-stream data. However, for reading streams of characters, it is recommended to use FileReader class. Consider the following example for reading bytes from a file.</p>
<ul>
<li>1.	import java.io.FileInputStream;    </li>
<li>2.	public class DataStreamExample {    </li>
<li>3.	     public static void main(String args[]){      </li>
<li>4.	          try{      </li>
<li>5.	            FileInputStream fin=new FileInputStream("D:\\testout.txt");      </li>
<li>6.	            int i=fin.read();    </li>
<li>7.	            System.out.print((char)i);      </li>
<li>8.	    </li>
<li>9.	            fin.close();      </li>
<li>10.	          }catch(Exception e){System.out.println(e);}      </li>
<li>11.	         }      </li>
<li>12.	        }    </li>
</ul>
                        </p>
						<p class="qus">190) What is the purpose of using BufferedInputStream and BufferedOutputStream classes?</p>
						<p class="ans">Java BufferedOutputStream class is used for buffering an output stream. It internally uses a buffer to store data. It adds more efficiency than to write data directly into a stream. So, it makes the performance fast. Whereas, Java BufferedInputStream class is used to read information from the stream. It internally uses the buffer mechanism to make the performance fast.
                        </p>
						<p class="qus">191) How to set the Permissions to a file in Java?</p>
						<p class="ans">In Java, FilePermission class is used to alter the permissions set on a file. Java FilePermission class contains the permission related to a directory or file. All the permissions are related to the path. The path can be of two types:<br>
<ul>
<li>●	D:\\IO\\-: It indicates that the permission is associated with all subdirectories and files recursively.</li>
<li>●	D:\\IO\\*: It indicates that the permission is associated with all directory and files within this directory excluding subdirectories.</li>
</ul>
<p>Let's see the simple example in which permission of a directory path is granted with read permission and a file of this directory is granted for write permission.</p>
<ul>
<li>1.	package com.javatpoint;  </li>
<li>2.	import java.io.*;  </li>
<li>3.	import java.security.PermissionCollection;  </li>
<li>4.	public class FilePermissionExample{  </li>
<li>5.	     public static void main(String[] args) throws IOException {  </li>
<li>6.	      String srg = "D:\\IO Package\\java.txt";  </li>
<li>7.	      FilePermission file1 = new FilePermission("D:\\IO Package\\-", "read");  </li>
<li>8.	      PermissionCollection permission = file1.newPermissionCollection();  </li>
<li>9.	      permission.add(file1);  </li>
<li>10.	           FilePermission file2 = new FilePermission(srg, "write");  </li>
<li>11.	           permission.add(file2);  </li>
<li>12.	         if(permission.implies(new FilePermission(srg, "read,write"))) {  </li>
<li>13.	           System.out.println("Read, Write permission is granted for the path "+srg );  </li>
<li>14.	             }else {  </li>
<li>15.	            System.out.println("No Read, Write permission is granted for the path "+srg);            }  </li>
<li>16.	     }   </li>
<li>17.	}  </li>
</ul>
<p>Output<br>
Read, Write permission is granted for the path D:\IO Package\java.txt
                        </p>
						<p class="qus">192) What are FilterStreams?</p>
						<p class="ans">FilterStream classes are used to add additional functionalities to the other stream classes. FilterStream classes act like an interface which read the data from a stream, filters it, and pass the filtered data to the caller. The FilterStream classes provide extra functionalities like adding line numbers to the destination file, etc.
                        </p>
						<p class="qus">193) What is an I/O filter?</p>
						<p class="ans">An I/O filter is an object that reads from one stream and writes to another, usually altering the data in some way as it is passed from one stream to another. Many Filter classes that allow a user to make a chain using multiple input streams. It generates a combined effect on several filters.
                        </p>
						<p class="qus">194) In Java, How many ways you can take input from the console?</p>
						<p class="ans">In Java, there are three ways by using which, we can take input from the console.<br>
●	Using BufferedReader class: we can take input from the console by wrapping System.in into an InputStreamReader and passing it into the BufferedReader. It provides an efficient reading as the input gets buffered. Consider the following example.<br>
<ul>
<li>1.	import java.io.BufferedReader;   </li>
<li>2.	import java.io.IOException;   </li>
<li>3.	import java.io.InputStreamReader;   </li>
<li>4.	public class Person   </li>
<li>5.	{  </li>
<li>6.	    public static void main(String[] args) throws IOException    </li>
<li>7.	    {   </li>
<li>8.	      System.out.println("Enter the name of the person");  </li>
<li>9.	        BufferedReader reader = new BufferedReader(new InputStreamReader(System.in));   </li>
<li>10.	        String name = reader.readLine();   </li>
<li>11.	        System.out.println(name);           </li>
<li>12.	    }   </li>
<li>13.	}   </li>
</ul>
<p>●	Using Scanner class: The Java Scanner class breaks the input into tokens using a delimiter that is whitespace by default. It provides many methods to read and parse various primitive values. Java Scanner class is widely used to parse text for string and primitive types using a regular expression. Java Scanner class extends Object class and implements Iterator and Closeable interfaces. Consider the following example.</p>
<ul>
<li>1.	import java.util.*;    </li>
<li>2.	public class ScannerClassExample2 {      </li>
<li>3.	      public static void main(String args[]){      </li>
<li>4.	          String str = "Hello/This is JavaTpoint/My name is Abhishek.";    </li>
<li>5.	          //Create scanner with the specified String Object    </li>
<li>6.	          Scanner scanner = new Scanner(str);    </li>
<li>7.	          System.out.println("Boolean Result: "+scanner.hasNextBoolean());              </li>
<li>8.	          //Change the delimiter of this scanner    </li>
<li>9.	          scanner.useDelimiter("/");    </li>
<li>10.	          //Printing the tokenized Strings     </li>
<li>11.	          System.out.println("---Tokenizes String---");      </li>
<li>12.	        while(scanner.hasNext()){    </li>
<li>13.	            System.out.println(scanner.next());    </li>
<li>14.	        }    </li>
<li>15.	          //Display the new delimiter    </li>
<li>16.	          System.out.println("Delimiter used: " +scanner.delimiter</li>
<li>17.	          scanner.close();    </li>
<li>18.	          }      </li>
<li>19.	}    </li>
<li>20.	    </li>
</ul>
<p>●	Using Console class: The Java Console class is used to get input from the console. It provides methods to read texts and passwords. If you read the password using the Console class, it will not be displayed to the user. The java.io.Console class is attached to the system console internally. The Console class is introduced since 1.5. Consider the following example.</p>
<ul>
<li>1.	import java.io.Console;    </li>
<li>2.	class ReadStringTest{      </li>
<li>3.	public static void main(String args[]){      </li>
<li>4.	Console c=System.console();      </li>
<li>5.	System.out.println("Enter your name: ");      </li>
<li>6.	String n=c.readLine();      </li>
<li>7.	System.out.println("Welcome "+n);      </li>
<li>8.	}     </li>
<li>9.	}    </li>
</ul>
                        </p>
						<p class="qus">195) What is serialization?</p>
						<p class="ans">Serialization in Java is a mechanism of writing the state of an object into a byte stream. It is used primarily in Hibernate, RMI, JPA, EJB and JMS technologies. It is mainly used to travel object's state on the network (which is known as marshaling). Serializable interface is used to perform serialization. It is helpful when you require to save the state of a program to storage such as the file. At a later point of time, the content of this file can be restored using deserialization. It is also required to implement RMI(Remote Method Invocation). With the help of RMI, it is possible to invoke the method of a Java object on one machine to another machine.
                        </p>
						<p class="qus">196) How can you make a class serializable in Java?</p>
						<p class="ans">A class can become serializable by implementing the Serializable interface.
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
</script>