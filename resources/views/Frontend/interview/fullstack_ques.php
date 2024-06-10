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
						<h3>Fullstack Developer Interview Questions and Answers</h3>
                      
						<p class="qus">1. What are the Success Factors for Successive Integration?</p>
						<p class="ans"> Success factors for successive integration are-</p>                      	
                      	<ul>
                          <li>1. Maintain a code repository</li>
                          <li>2. Automate the build</li>
                          <li>3. Make the build self-testing</li>
                      	  <li>4. Everyone commits to the baseline every day</li>
                          <li>5. Every commit (to baseline) should be built</li>
                          <li>6. Try to keep the build fast</li>
                          <li>7. Test in a clone of the production environment</li>
                      	  <li>8. Make it easy to get the latest deliverables</li>
                          <li>9. Automate deployment</li>
                      	</ul>
                      
                      <p class="qus">2. Explain DevOps?</p>
                      <p class="ans">DevOps is a newly emerging term in the IT field, which is nothing but a practice that emphasizes the collaboration and communication of both software developers and other information technology (IT) professionals. It focuses on delivering software products faster and lowering the failure rate of releases.</p>
                      
                      <p class="qus">3. What is the Difference Between “Git Pull” and “Git Fetch”?</p>
						<p class="ans">In the simplest terms, git pull does a git fetch followed by a git merge.</p>
                      	<p class="ans">When you use pull, Git gets the message to automatically do your work for you. It is context-sensitive, so Git will merge any pulled commits into the branch you are currently working in. pull automatically merges them without giving you any chance to review it first. If you don’t manage your branches with a keen eye, you may be face to face with many problems.</p>
                      	<p class="ans">When you fetch, Git gathers any commits from the target branch that do not exist in your current branch and stores them in your local repository. However, it does not merge them with your current branch. This is particularly useful if you need to keep your repository up to date, but are working on something that might break if you update your files. To integrate the commits into your master branch, you use merge.</p>
						<p class="qus">4. What is Callback Hell?</p>
						<p class="ans"> The asynchronous function requires callbacks as a return parameter. When multiple asynchronous functions are chained together then a callback hell situation comes up.</p>
						<p class="qus">5. What is CORS?</p>
						<p class="ans"> CORS, abbreviation for Cross-Origin Resource Sharing, is a process used to gain the authority of different web resources on different domains.<br>
With the help of CORS, the integration of web scripts can be implemented more freely with the external content of the original domain.
                        </p>
						<p class="qus">6. What are the Differences Between ES6 and ES5 Function Constructors?</p>
						<p class="ans"> Let’s first look at an example of each:<br>
// ES5 Function Constructor<br>
function Person(name) {<br>
  this.name = name;<br>
}<br>

// ES6 Class<br>
class Person {<br>
  constructor(name) {<br>
    this.name = name;<br>
  }<br>
}<br>
For simple constructors, they look pretty similar.<br>
The main difference in the constructor is observed when the effect of inheritance comes into the play. If we want to create a Student class that subclasses Person and add a studentId field, this is what we have to do in addition to the above.<br>
// ES5 Function Constructor<br>
function Student(name, studentId) {<br>
  // Call constructor of superclass to initialize superclass-derived members.<br>
  Person.call(this, name);<br>

  // Initialize subclass's own members.<br>
  this.studentId = studentId;<br>
}<br>

Student.prototype = Object.create(Person.prototype);<br>
Student.prototype.constructor = Student;<br>

// ES6 Class<br>
class Student extends Person {<br>
  constructor(name, studentId) {<br>
    super(name);<br>
    this.studentId = studentId;<br>
  }<br>
}<br>
It’s much more verbose to use inheritance in ES5 and the ES6 version, here it is easier to understand and remember.
.</p>
						<p class="qus">7. What is Multi-Threading?</p>
						<p class="ans"> The process of improving the performance of the CPU is known as Multi-Threading. Usually, it is seen as the ability of a program to be managed by multiple users at a single time.<br>
It is done by the execution of multiple processes that are supported by the operating system.
                        </p>
						<p class="qus">8. What is Continuous Integration?</p>
						<p class="ans"> Continuous Integration is the process of implementation of codes that are specially designed & automated for testing. During the time of production, it helps the developers to apply the codes simply. Web developers prefer this process for the integration of codes many times a day. Continuous Integration helps in detecting errors quickly and locating them more easily.</p>
						<p class="qus">9. What are the Advantages and Disadvantages of Using “use strict“?</p>
						<p class="ans"> “use strict” is a statement that is used to enable strict mode to entire scripts or individual functions. Strict mode is a way to opt in to a restricted variant of JavaScript.<br>
Advantages-<br>
<ul>
                          <li>1.	It makes it impossible to create global variables by mistake.</li>
                          <li>2.	Makes assignments that would otherwise silently fail to throw an exception.</li>
                          <li>3.	Makes attempts to delete undeletable properties throw (where before the attempt would simply have no effect).</li>
                      	  <li>4.	It is mandatory that the function parameter name should be unique.</li>
                          <li>5.	this is undefined in the global context.</li>
                          <li>6.	It catches some common coding bloopers, throwing exceptions.</li>
                          <li>7.	It stops the functioning of features that are confusing.</li>
                      	</ul>
						<p>Disadvantages-</p>
						<ul>
                          <li>1.	A lot of features that most of the developers might be used to are absent.</li>
                          <li>2.	No more access to function.caller and function.arguments.</li>
                          <li>3.	The concatenation of scripts written in different strict modes might cause issues.</li>
                      	</ul>
                        </p>
						<p class="qus">10. What do you think of AMD vs CommonJS?</p>
						<p class="ans"> Both are ways to implement a module system, which was not natively present in JavaScript until ES2015 came along. CommonJS is synchronous while AMD (Asynchronous Module Definition) is obviously asynchronous.<br>

CommonJS is designed with back-end development in mind while AMD, with its support for asynchronous loading of modules, is more intended for browsers.<br>
In my opinion, most would find AMD syntax to be quite dull and CommonJS is closer to the style you would write import statements in other languages. Most of the time, I find AMD unnecessary, because if you served all your JavaScript into one concatenated bundle file, you wouldn’t benefit from the async loading properties.<br>

Also, CommonJS syntax is closer to the Node style of writing modules and there is less context-switching overhead when switching between client-side and server-side JavaScript development.
I’m glad that with ES2015 modules, that have support for both synchronous and asynchronous loading, we can finally just stick to one approach. Although it hasn’t been fully rolled out in browsers and in Node, we can always use transpilers to convert our code.
                        </p>
						<p class="qus">11. Explain Prototype Inheritance in Javascript?</p>
						<p class="ans"> In a language implementing classical inheritance like Java, C#, or C++ you start by creating a class–a blueprint for your objects – and then you can create new objects from that class or you can extend the class, defining a new class that augments the original class.<br>
In JavaScript you first create an object (there is no concept of class), then you can augment your own object or create new objects from it.
Every object in Javascript has a prototype. JavaScript’s inheritance system is based on prototypes, and not class-based. When a message reaches an object, JavaScript will make an attempt to find a property in that object first. If it cannot find it, then the message will be sent directly to the object’s prototype, and so on. That behavior called prototype chain or in many places, prototype inheritance.<br>
Constructor functions are the most preferred way in JavaScript when it comes to constructing prototype chains. When we use new, JavaScript injects an implicit reference to the new object being created in the form of this keyword. It also returns this reference completely at the end of the function.<br>
function Foo() {<br>
  this.kind = ‘foo’<br>
}<br>

var foo = new Foo();<br> 
foo.kind //=> ‘foo’
                        </p>
						<p class="qus">12. When should you not use arrow functions in ES6? Name three or more cases.</p>
						<p class="ans">Arrow functions should NOT be used:<br>
<ul>
                          <li>1.	When we want function hoisting – as arrow functions are anonymous.</li>
                          <li>2.	When we want to use this/argument in a function – as arrow functions do not have this/argument of their own, they depend upon their outer context.</li>
                          <li>3.	When we want to use named function – arrow functions are anonymous.</li>
                      	  <li>4.	When we want to use the function as a constructor – as arrow functions do not have their own this.</li>
                          <li>5.	When we want to add function as a property in object literal and use an object in it – as we can not access this (which should be the object itself).</li>
                      	</ul>
                        </p>
						<p class="qus">13. What is Pair-Programming?</p>
						<p class="ans"> Pair Programming is one of the core elements of extreme programming in which two developers are required to work on the same terminal.
The one developer whose task is to write the code is called the “Driver” and the other who is responsible for reviewing the codes is called the “Navigator”.
                        </p>
						<p class="qus">14. What is Long Polling?</p>
						<p class="ans"> Long Polling is a pattern in web development that is used to improve pushing data from the server to the client. By using a Long Polling pattern, the Client requests information from the server.
If the server does not have any information about the client, the server holds the request and waits for some information to be available instead of sending an empty resource.
                        </p>
						<p class="qus">15. Explain a use case for Docker?</p>
						<p class="ans">Arrow functions should NOT be used:<br>
<ul>
                          <li>1.	Docker is a low overhead way to run virtual machines on your local box or in the cloud. Although they’re not strictly distinct machines, they give you many of those benefits.</li>
                          <li>2.	Docker can encapsulate legacy applications, allowing you to deploy them to servers that might not otherwise be easy to set up with older packages & software versions.</li>
                          <li>3.	Docker can be used to build test boxes, during your deploy process to facilitate continuous integration testing.</li>
                      	  <li>4.	Docker can be used to provision boxes in the cloud, and with the swarm, you can orchestrate clusters too.</li>
                      	</ul>
                        </p>
						<p class="qus">16. What are the latest trends in Full Stack Web Development?</p>
						<p class="ans"> According to industry experts, a candidate who is passionate about full-stack development should be aware of the following trends:<br>
<ul>
                          <li>1.	The rise of Vue JS Functional, real-time web apps, progressive apps, and mobile web development.</li>
                          <li>2.	Programming benefits from JavaScript improvements</li>
                          <li>3.	The emergence of more compatible extensions.</li>
                      	</ul>
                        </p>
						<p class="qus">17. Explain the difference between REST and GraphQL</p>
						<p class="ans"> The main and most important difference between REST and GraphQL is that GraphQL does not deal with dedicated resources. Instead, everything is considered as a graph and therefore is connected and can be queried to app exact needs.
                        </p>
						<p class="qus">18. What is Event Loop?</p>
						<p class="ans">Node.js is a single-threaded application but it supports concurrency via the concept of event and callbacks. As every API of Node js is asynchronous and is a single thread, it uses async function calls to maintain the concurrency. Node uses an observer pattern.
Node thread keeps an event loop and whenever any task gets completed, it fires the corresponding event which signals the event listener function to get executed.
                        </p>
						<p class="qus">19. Explain the purpose of clearing floats in CSS.</p>
						<p class="ans"> The clear CSS property specifies whether an element can be next to floating elements that precede it or must be moved down (cleared) below them.<br>
Clearing floats (or clear fixing) basically force the containing element to expand to contain its child elements. Thus, it forces the subsequent elements to appear below it.
                        </p>
						<p class="qus">20. How can you share code between files?</p>
						<p class="ans">This depends on the JavaScript environment.<br>
On the client (browser environment), as long as the variables/functions are declared in the global scope (window), all scripts can refer to them. Alternatively, adopt the Asynchronous Module Definition (AMD) via RequireJS for a more modular approach.<br>
On the server (Node.js), the common way has been to use CommonJS. Each file is treated as a module and it can export variables and functions by attaching them to the module.exports object.<br>
ES2015 defines a module syntax that aims to replace both AMD and CommonJS. This will eventually be supported in both browser and Node environments.
                        </p>
						<p class="qus">21. What is Temporal Dead Zone in ES6?</p>
						<p class="ans">In ES6 let and const are hoisted (like var, class and function), but there is a period between entering scope and being declared where they cannot be accessed. This period is the temporal dead zone (TDZ).<br>
Consider:<br>
//console.log(aLet)  // would throw ReferenceError<br>

let aLet;<br>
console.log(aLet); // undefined<br>
aLet = 10;<br>
console.log(aLet); // 10<br>
In this example, the TDZ ends when aLet is declared, rather than assigned.
                        </p>
						<p class="qus">22. What is the difference between a blue/green deployment and a rolling deployment?</p>
						<p class="ans">
<ul>
                          <li>1.	In Blue/Green Deployment, you have TWO complete environments. The Blue environment is the one that is running and the Green environment is the one to which you want to upgrade. Once you swap the environment from blue to green, the traffic is directed to your new green environment. You can delete or save your old blue environment for backup until the green environment is stable.</li>
                          <li>2.	In Rolling Deployment, you have only ONE complete environment. The code is deployed in the subset of instances of the same environment and moves to another subset after completion.</li>
                      	</ul>
                        </p>
						<p class="qus">23. What are the disadvantages of GraphQL?</p>
						<p class="ans">Disadvantages of GraphQL are:<br>
<ul>
                          <li>1.	You need to learn how to set up GraphQL. The ecosystem is still rapidly evolving so you have to keep up.</li>
                          <li>2.	You need to send the queries from the client, you can just send strings but if you want more comfort and caching you’ll use a client library -> extra code in your client</li>
                          <li>3.	You need to define the schema beforehand => extra work before you get results</li>
						  <li>4.	You need to have a GraphQL endpoint on your server => new libraries that you don’t know yet</li>
                          <li>5.	Graphql queries are more bytes than simply going to a REST endpoint</li>
                          <li>6.	The server needs to do more processing to parse the query and verify the parameters</li>
                      	</ul>
                        </p>
						<p class="qus">24. What is Inversion of Control?</p>
						<p class="ans"> Inversion of control is a broad term but for a software developer, it’s most commonly described as a pattern used for decoupling components and layers in the system.<br>
For example, say your application has a text editor component and you want to provide spell checking.<br>
Your standard code would look something like this:<br>
public class TextEditor {<br>

    private SpellChecker checker;<br>

    public TextEditor() {<br>
        this.checker = new SpellChecker();<br>
    }<br>
}<br>
What we’ve done here creates a dependency between the TextEditor and the SpellChecker.<br>
In an IoC scenario we would instead do something like this:<br>
public class TextEditor {<br>

    private IocSpellChecker checker;<br>

    public TextEditor(IocSpellChecker checker) {<br>
        this.checker = checker;<br>
    }<br>
}<br>
You have inverted control by handing the responsibility of instantiating the spell checker from the TextEditor class to the caller.<br>
SpellChecker sc = new SpellChecker; // dependency<br>
TextEditor textEditor = new TextEditor(sc);<br>
                        </p>
						<p class="qus">25. What is the most loved language of a full stack developer and why?</p>
						<p class="ans"> Full Stack Developers work with a multitude of languages. Ideally, a candidate must have a few languages that he loves, preferably, some with which he can design the front end and others with which he can take care of the back end. A candidate should be able to demonstrate that well and remember to include the basic most used ones like HTML, CSS, Python, etc.
                        </p>
						<p class="qus">26. Problem Statement: </p>
						<p class="ans">       While returning from Byteland, Stella got one tree with N nodes from her friend over there. All nodes in this tree are colorless and Stella decided to fill colors to make it colorful. Stella wants it to look beautiful and decided to color it in such a way that any 2 nodes u and v with the shortest distance between u and v <=2 can not be of the same color. She is wondering how many different colors she needs if she fills them optimally.<br>
<ul>
                          <li>●	 Input Format:<br>
         The first line contains a single integer n ( 3 <=n<100) – the number of nodes in the tree. Each of the next(n-1) lines contains two integers x and y(1<=x, y<=n) – the indices of two nodes directly connected by an edge. It is guaranteed that any node is reachable from any other using the edges.)
</li>
                          <li>●	Output Format:<br>
          In the first line print single integer k – the minimum number of colors Steel has to use.
</li>
                      	</ul>
						<p>Sample Input 1:<br>
           3<br>
          2 3<br>
          1 3<br>
Sample Output 1:<br>
          3<br>
 Explanation Output 1:<br>
           Tree is like<br>
           1 -> 3 ->2<br>
We can color as follows<br>
         1: Color a<br>
         3: Color b<br>
         2: Color c<br>
         Total 3 colors<br>
Sample Input 2:<br>
           5<br>
          2 1<br>
          3 2<br>
          4 3<br>
          5 4<br>
Sample Output 2<br>
           3<br>
Explanation Output2:<br> 
          Tree is like:<br>
          1 -> 2 ->3 -> 4 -> 5<br>
         We can color as follows<br>
         1: Color a<br>
         2: Color b<br>
         3 : Color c<br>
         4: Color a<br>
         5 : Color b<br>
         Total 3 colors.<br>
   
 import java.io.BufferReader;<br>
import java.io.InputStreamReader;<br>
Class Test<br>
{<br>
    /* Read input from stdin and provide input before<br>
    * running*/<br>
    BufferedReader br = new BufferedReader(<br>
   	new InputStreamReader(System.in)) String line<br>
   	= br.readLine();<br>
    for (int i = 0; i < N; i++) {<br>
   	System.out.println(“Hello Word”);<br>
    }<br>
}<br>
                        </p>
						<p class="qus">27. What is an event loop in Node.js? </p>
						<p class="ans">In general, an event loop is a mechanism that expects and dispatches events or messages in a program. In Node.js, event loops are central flow constructs.<br>
For example, whenever a request needs to be processed, it is inserted into the event loop and processed as soon as it is ready to be processed. <br>
Rather than doing it alone, the node delegates responsibility for managing the system. Because of this behavior, Node does not actively wait for this task to complete and can process other requests in the meantime.
                        </p>
						<p class="qus">28. What is Docker?</p>
						<p class="ans"> Docker is an easy way to run virtual machines on your local machine or in the cloud. While they are not strictly separate machines and do not require an operating system to boot, they offer many of these benefits.<br>
Docker can encapsulate legacy applications, allowing them to be deployed to servers that would otherwise not be easy to configure with older software packages and versions.<br> 
Docker can be used to create test blocks during deployment to facilitate ongoing integration testing. Docker can be used to provision boxes in the cloud, and with the swarm, you can also manage clusters.
                        </p>
						<p class="qus">29.  Problem Statement:</p>
						<p class="ans">        The Girl in Tech Hackathon is a code-a-thon where developers, designers, scientists, students, entrepreneurs, and educators gather to collaborate on projects including applications, software, hardware, data visualization, and platform solutions. The Participants are sitting around the table, and they are numbered from team1 to team n in the clockwise direction. This means that the Participants are numbered 1,2, ..,n-1,n, and participants 1 and n are sitting next to each other. After the Hackathon duration, judges started reviewing the performance of each participant. However, some participants have not finished the project. Each participant needs an extra minute to complete their project. Judges started reviewing the projects sequentially in the clock direction, starting with team x, and it takes them exactly 1 minute to review each project. This means team x gets no extra time to work, whereas team x +1 gets 1 min more to work and so on. Even if the project is not completed by the participant, the judges still spend 1 min to understand the idea and rank the participant.<br>
●	Input Format:<br>
         The first line contains a single positive integer, n, denoting the number of participants in the hackathon. Given the values of t1,t2, t3,… tn extra time is required by each participant to complete the project. You have to guide judges in selecting the best team x to start reviewing the project so that the number of participants able to complete their project is maximal.<br>
●	Output Format:<br>
Print x on a new line. If there are multiple such teams,<br> 
select the smallest one.<br>
Constraints:<br>
1<=n<=9*10^5<br>
0<=ti<=n<br>
Sample Input:<br>
 3<br>
1 0 0<br>
Sample Output:<br>
 2<br>
 import java.io.BufferReader;<br>
import java.io.InputStreamReader;<br>
Class Test<br>
{<br>
    /* Read input from stdin and provide input before<br>
    * running*/<br>
    BufferedReader br = new BufferedReader(<br>
   	new InputStreamReader(System.in)) String line<br>
   	= br.readLine();<br>
    for (int i = 0; i < N; i++) {<br>
   	System.out.println(“Hello Word”);<br>
    }<br>
}<br>
                        </p>
						<p class="qus">30. What is referential transparency in functional programming?</p>
						<p class="ans">A program may have the property of referential transparency if any two expressions in the program that have the same value can be substituted for one another anywhere in the program without changing the result of the program.<br>
 It is used in functional programming. For example, consider the following code snippet:<br>
1.	count1 = (fun(x) + y) * (fun(x) – z);<br>  
2.	temp = fun(a); <br> 
3.	count2 = temp + y * temp – z; <br> 
The variables count1 and count2 will be equal if the value of fun(x) is not reflected. If the variable count1 is not equal to the variable count2, the referential transparency is violated.<br>
                        </p>
						<p class="qus">31. What is a RESTful API?</p>
						<p class="ans"> The term REST represents Representational State Transfer. It is a compositional style that is utilized to make Web Services. It utilizes HTTP solicitations to access and utilize the information. We can make, update, read, and erase information.<br>
An API (Application Program Interface) for a site is the code that permits two programming projects to speak with one another. It permits us to compose mentioning administrations from a working framework or other application.
                        </p>
						<p class="qus">32. What are the differences between Server-side Scripting and Client-side Scripting?</p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Basis comparison</th>
							  <th scope="col">Server-side scripting</th>
							  <th scope="col">Client-side scripting</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Definition</td>
							  <td>Works in the backend and is not visible to the client side.</td>
							  <td>Works in frontend and scripts are visible among users.</td>
							</tr>
							<tr>
							  <td>Processing</td>
							  <td>Server Interaction required</td>
							  <td>Interaction with the server is not required</td>
							</tr>
							<tr>
							  <td>Languages</td>
							  <td>Ruby on Rails, PHP, ASP.net, Python, ColdFusion, etc.</td>
							  <td>CSS, HTML, JavaScript, etc.</td>
							</tr>
							<tr>
							  <td>Security</td>
							  <td>Relatively Secure</td>
							  <td>Insecure</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">33. What’s the difference between normalization and denormalization?</p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Normalization</th>
							  <th scope="col">Denormalization</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Normalization is used to reduce data redundancy and data inconsistently from the table.</td>
							  <td>Denormalization is used to add redundancy to execute queries.</td>
							</tr>
							<tr>
							  <td>Data integrity is maintained</td>
							  <td>Data integrity is not maintained</td>
							</tr>
							<tr>
							  <td>In normalization, no tables are increased.</td>
							  <td>In denormalization, no of tables is decreased.</td>
							</tr>
							<tr>
							  <td>Normalization optimizes the usage of disk space.</td>
							  <td>Denormalization does not optimize the disk spaces.</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">34. What is Closure? Give an example.</p>
						<p class="ans">Closures are made at whatever point a variable that is characterized external the current extension is gotten to from inside some inward degree.<br> 
It gives you admittance to an external function’s degree from an internal capacity. In JavaScript, Closures are made each time a capacity is made. To utilize a conclusion, essentially characterize a function inside another function and uncover it.
                        </p>
						<p class="qus">35. Explain the concept of the index?</p>
						<p class="ans"> An index is used to perform tuning in queries. which can be created to increase the performance of data retrieval. The index can be created on one or more columns of a table.
                        </p>
						<p class="qus">36. How do you keep yourself updated about the new trends in the industry?</p>
						<p class="ans"> This is a typical question to understand your involvement in technology. A good way to demonstrate your involvement in continuous learning would be by speaking about the community meetups you visit. 
You can also talk about the webinars and the forums you regularly attend. If you have personal projects on which you apply your skills, this is a good time to showcase that as well.
                        </p>
						<p class="qus">37. Give an example of a project you have worked on and the technologies involved. How did you make these choices?</p>
						<p class="ans"> This helps in knowing the methodology of the full stack web developer and also gives an idea of his sharpness and precision in choosing the right toolset.<br> 
You need to be as specific as possible and go in-depth while speaking about the reason for choosing a particular toolset. Show a balance between your ability to develop both on the front-end and the back-end of the web application.<br>
It is okay to show that you have more experience in one side of the development game than the other but to demonstrate that you have the ability to work on both ends of the application.
                        </p>
						<p class="qus">38. What should a full-stack developer know?</p>
						<p class="ans">A full-stack developer should present with the accompanying:<br>
<ul>
                          <li>●	Programming Languages: A full-stack developer should have a capacity for more than one programming language like Java, Python, Ruby, C++, and so on. One must become acquainted with various ways of organizing, configuring, executing, and testing the task-dependent on the programming language.</li>
                          <li>●	Front End: One must be acquainted with the front-end advancements like HTML5, CSS3, Angular, and so on. The comprehension of outsider libraries like jQuery, Ajax, SASS, adds more benefits.</li>
                          <li>●	Structures: Proficiency in words that are joined by advancement systems like Spring, Spring Boot, MyBatis, Django, PHP, Hibernate, js, yin, and that’s only the tip of the iceberg.</li>
						  <li>●	Data sets: One should be acquainted with somewhere around one information base. Assuming that you know about MySQL, Oracle, and MongoDB it is adequate.</li>
                          <li>●	Design Ability: The information on model plans like UI and UX configuration is additionally fundamental.</li>
                      	</ul>
                        </p>
						<p class="qus">39. What is a connection leak in Java and how can we fix it?</p>
						<p class="ans"> In Java, a connection leak is a situation when the developer forgets to close the JDBC connection, it is known as a connection leak.<br> 
The most common type of Connection Leak experienced in Java development, is when using a Connection Pool (such as DBCP). We can fix it by closing the connection and giving special attention to the error handling code. 
                        </p>
						<p class="qus">40. Name a few Full Stack developer tools?</p>
						<p class="ans"> Some of the popular tools used by full-stack developers to make development more accessible and efficient are:<br>
<ul>
                          <li>●	Backbone</li>
                          <li>●	Visual Studio Code</li>
                          <li>●	WebStorm</li>
						  <li>●	Slack</li>
                          <li>●	Electron</li>
                          <li>●	TypeScript</li>
						  <li>●	CodePen</li>
                          <li>●	GitHub</li>
                      	</ul>
                        </p>
						<p class="qus">41. Which technologies and languages would you need to develop a project from scratch?</p>
						<p class="ans"> This is a hypothetical question geared at understanding the level at which the hiring manager will gauge your readiness to start the job.<br>
 It is an easy way to distinguish a good full-stack developer from someone who is an amateur. People who have difficulty transmitting their thoughts will have bleak chances of getting through at this point.
                        </p>
						<p class="qus">42. What is Dependency Injection?</p>
						<p class="ans"> Dependency Injection is a design pattern by which IoC is executed. Injecting objects or connecting objects with other objects is done by container instead of by the object themselves. It involves three types of classes.<br>
<ul>
                          <li>●	Client class: It depends on the service class.</li>
                          <li>●	Service class: It provides service to the client class.</li>
                          <li>●	Injector class: It injects service class objects into the client class.</li>
                      	</ul>
                        </p>
						<p class="qus">43. How is multithreading used?</p>
						<p class="ans"> The main purpose of multithreading is to provide multiple threads of execution concurrently for maximum utilization of the CPU. It allows multiple threads to exist within the context of a process such that they execute individually but share their process resources.
                        </p>
						<p class="qus">44. What is the Observer pattern?</p>
						<p class="ans"> The purpose of the Observer pattern is to define a one-to-many dependency between objects, as when an object changes the state, then all its dependents are notified and updated automatically. 
The object that watches on the state of another object is called the observer, and the object that is being watched is called the subject.
                        </p>
						<p class="qus">45. What do you mean by data attributes and why is it used? </p>
						<p class="ans"> HTML 5 has “data-*” which are custom attributes defined by the developer. They are used when any existing character is not suitable to be used. These attributes are only used on the page they are written on, and they do not need Ajax calls.<br>
These are Global attributes, so they can be applied to any element.
                        </p>
						<p class="qus">46. What is the difference between deferring and async?</p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">S.odefer</th>
							  <th scope="col">async</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>1.	It downloads the file during the HTML parsing but executes the data after the parsing is completed.</td>
							  <td>downloads the data during the HTML parsing, but it stops the parsing from executing the downloaded file.</td>
							</tr>
							<tr>
							  <td>Defer is used when the script relies upon another script.</td>
							  <td>Async is used if the script does not rely upon any scripts.</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">47. What are the two phases committed in the database? Explain </p>
						<p class="ans">Two-phase Commit (2PC) is the feature of transaction processing systems that enable databases to return to the pre-transaction state if an error condition occurs.<br> 
The two-phase commit strategy is designed to make sure that either all the databases are updated or none of them is updated. As a result, the databases remain synchronized.
                        </p>
						<p class="qus">48. What is event bubbling and capturing in javascript? </p>
						<p class="ans"> Event Bubbling and Event Capturing are the ways of the event propagation in the HTML API when an event occurs in an element that is located inside the other part and both the parts have registered a handle with the recently happened event.<br>
Here the event propagation model identifies that in which order the elements receive the event.<br>
In the case of Event Bubbling, the event is first captured and also handled by the innermost element, and then the event is propagated to the outermost element.<br>
In the case of Event Capturing, the event is first captured and also handled by the outermost element, and then the event is propagated to the innermost element.
                        </p>
						<p class="qus">49. What is the prototype in javascript and how do you use it? </p>
						<p class="ans"> Prototypes are objects created in Javascript. They are the “parent” objects. If we want to create common tasks (properties/methods) for all the objects inherited from the parent object we need to define them in the prototype object.
                        </p>
						<p class="qus">50. What is Express.js? </p>
						<p class="ans"> Express.js is a web application server framework. It is used for Node.js. It helps to create node.js applications in less time. It also provides security-related help for node.js.
                        </p>
						<p class="qus">51.Can you give an example of a suggestion you made that was implemented?</p>
						<p class="ans">Your example of ideas that you’ve put into action should look something like this: I got the notion at my former job to devote a few hours on Fridays to assessing our efficiency. On Fridays, our workload was lower anyhow, so we were able to devote some time to enhancing our job.
                        </p>
						<p class="qus">52.What are the preferred methods of optimising a website's assets?</p>
						<p class="ans">
<ul>
                          <li>●	Make fewer HTTP requests.</li>
                          <li>●	Use a Content Delivery Network.</li>
                          <li>●	Add an Expires header.</li>
						  <li>●	Gzip components.</li>
                          <li>●	Put CSS at the top.</li>
                          <li>●	Move scripts to the bottom.</li>
						  <li>●	Avoid CSS expressions.</li>
                          <li>●	Make JavaScript and CSS external.</li>
                      	</ul>
                        </p>
						<p class="qus">53.What is your checklist for doing code reviews?</p>
						<p class="ans">
<ul>
                          <li>1. Readability </li>
                          <li>2. Maintainability</li>
                          <li>3. Security</li>
						  <li>4. Speed and Performance</li>
                          <li>5. Documentation</li>
                          <li>6. Reinventing the Wheel</li>
						  <li>7. Reliability</li>
                          <li>8. Scalability</li>
                          <li>9. Reusability</li>
						  <li>10. Patterns</li>
                          <li>11. Test Coverage and Test Quality</li>
                          <li>12. Fit for Purpose</li>
                      	</ul>
                        </p>
						<p class="qus">54. Please walk me through the production issue you troubleshooted in the past 12 months.</p>
						<p class="ans">Quickly switch over to what you learned or how you improved after troubleshooting that.<br>
You might also explain the steps you took to make sure that the mistake never happened again.
                        </p>
						<p class="qus">55. What strategies do you follow for measuring the success of a new feature?</p>
						<p class="ans">
<ul>
                          <li>Step 1: Measuring the basic usage of the new feature</li>
                          <li>Step 2: Dig deeper into event properties to look for patterns</li>
                          <li>Step 3: Understanding what users are doing right before using the feature</li>
						  <li>Step 4: Building a behavioral cohort of people who used the feature to analyze how they compare to your overall user population</li>
                          <li>Step 5: Analyzing the impact of the new feature on retention</li>
                          <li>Step 6: Measuring the impact of the new feature on your key conversion funnels</li>
						  <li>Step 7: Measuring the impact of your new feature on engagement</li>
                      	</ul>
                        </p>
						<p class="qus">56. Why did you choose the full-stack developer field as your career?</p>
						<p class="ans">Full Stack Developers are multitasking experts with all-encompassing knowledge and skills. They are familiar with both client-side and server-side applications. They work on both the front-end and back-end of software development.
                        </p>
						<p class="qus">57. How do you protect against screen scraping?</p>
						<p class="ans">Implementing JavaScript to set a cookie value that is checked by the web server can be a simple and effective technique. CAPTCHAS are also a good technique to prevent scraping; if an IP sends too many requests, CAPTCHAS can be presented to the end user to validate human interaction.
                        </p>
						<p class="qus">58. How do you debug a website?</p>
						<p class="ans">In your Chrome browser, open the site you want to debug.<br>
Right click over an element you want to debug. In this example, we're analyzing a yellow button.<br>
Click "Inspect".
                        </p>
						<p class="qus">59.Which stack do you deal with being a full-stack developer ?</p>
						<p class="ans">Depending on the project, what customers need may be a mobile stack, a web stack, or a native application stack.<br>
What technologies and programming languages do you require from start to finish for developing a project?<br>
It comes down to how effectively the interviewer can assess your readiness to begin working. This is a subject of debate. A full stack developer who is knowledgeable and proficient may easily be distinguished from the one who is inexperienced. As a result, you must reply with caution.
                        </p>
						<p class="qus">60. Describe some examples of a web application that you have built, and how did you do it?</p>
						<p class="ans">The interviewer will get an understanding of how you think and how you deal with methods. The response you are giving should be straightforward and detailed, and why you would have developed it at the front or back end.
                        </p>
						<p class="qus">61.Which technologies and languages would you need to develop a project from scratch?</p>
						<p class="ans">This is a hypothetical question designed to help you understand how the recruiting manager will assess your preparedness to begin the job. It's a simple method to spot the difference between a good full stack developer and a novice. Those that have trouble communicating their views will have a tough time getting through at this point.
                        </p>
						<p class="qus">62.What is the best implementation or debugging that you have done in the past?</p>
						<p class="ans">This is a difficult question to answer. This will offer the hiring manager a sense of the difficulty and style of previous projects you've worked on. You should be specific about the problems you encountered and the steps you took to address them. You might also discuss the lessons you learned from the situation.
                        </p>
						<p class="qus">63.How do you stay up-to-date with new industry trends?</p>
						<p class="ans">Explain your engagement and understanding gained via continuous learning with friends, co-workers, or online - that is one correct approach to respond to this question. Also, if you have any personal projects where you employed your skills, now is a great opportunity to show them off. You might also include the webinars or forums that you attend on a regular basis.
                        </p>
						<p class="qus">64.What DBMS technologies are used for full-stack development?</p>
						<p class="ans">Some of the DBMS technologies used for full-stack development are as follows<br>
<ul>
                          <li>●	MySQL</li>
                          <li>●	Oracle</li>
                          <li>●	SQL Server</li>
						  <li>●	MongoDB </li>
                      	</ul>
                        </p>
						<p class="qus">65. Explain MEAN stack?</p>
						<p class="ans">MEAN (MongoDB, Express, Angular, and Node) is a set of software development tools that is well-known for removing language boundaries. MongoDB, a NoSQL data storage text, is the foundation of a MEAN stack. The JavaScript frontend is built using the Express and Angular HTTP servers. The topmost tier of the Stack is Node, which is used for server-side programming.
                        </p>
						<p class="qus">66. So what was the latest thing you learned?</p>
						<p class="ans">This question asked by the interviewer is to understand what all you know, and they will indeed explore the credibility of your CV. Also, they would like to see what you did in the recent six months. You can explain about the assignment or project and let them know what bugs you faced and what solution you found and resolved the bugs. Also, you can explain the websites you visited what you learned, and discuss the recent trends. This will help you out and let the interviewer know what you did in the current six months span.
                        </p>
						<p class="qus">67. What technologies and programming languages do you require from start to finish for developing a project?</p>
						<p class="ans">It is the question of how well the interviewer can analyze your willingness to start the work. This is a question of discussion. A competent and proficient complete stack developer is a convenient way to distinguish it from one who is a rookie. Therefore, you must be careful to respond.
                        </p>
						<p class="qus">68. Are you aware of design patterns?</p>
						<p class="ans">You should be aware of the bugs and errors that are commonly faced while designing any web application. If you gain expertise is very clear, then you must use the force the employer to gain trust by explaining the experience which you have a done coding.
                        </p>
						<p class="qus">69. Can you tell us an example as to when and how you have handled an inefficiency in the code of somebody else?</p>
						<p class="ans">The interviewer will often know how relaxed and up to mark you point out defects or glitches in other programs to find out how proficient a candidate is with programming.
                        </p>
						<p class="qus">70. Give an example of a project and the technology you have been working on. How have you picked these?</p>
						<p class="ans">This helps to understand the strategy of a candidate and also offers an understanding of their efficiency in identifying the perfect toolset. It would help if you defined as well as dig into the specifics when thinking about the purpose of using a specific toolset. Show your ability to play in the creation of a web app with the frontend and backend. It’s all right to prove that you have more expertise on the one hand than on the other but to show you’ve got the potential to do both things.
                        </p>
						<p class="qus">71. Describe some examples of a web application that you have built, and how did you do it?</p>
						<p class="ans">The interviewer will get an understanding of how you think and how you deal with methods. The response you are giving should be straightforward and detailed why you would have developed it at the front or back end.
                        </p>
						<p class="qus">72. How can you build your CSS and JavaScript so that other developers can work with them more efficiently?</p>
						<p class="ans">Developers at the front end must develop codes created by skilled employees or collaborate as part of a team. Complete code is divided into section, and each code and section have detail comments so anyone can understand what the code about is
                        </p>
						<p class="qus">73. In all of your designs, what is the most significant error you did? How have you corrected it?</p>
						<p class="ans">It’s just not practical to function on and continue working on the technology. The response to this question should be frank, speak about a mistake and how serious it was, and then talk about your knowledge from the error and explain the way you wanted it to mitigate the damages done.
                        </p>
						<p class="qus">74. What’s the most bizarre programming challenge you have come across recently?</p>
						<p class="ans">You will talk about the new bug you encountered and explain how you handled it and how you overcame it. Inform the interviewer of the information obtained during the bug solution and how it could first be prevented.
                        </p>
						<p class="qus">75. What standards would you consider for SEO?</p>
						<p class="ans">SEO means Search Engine Optimization. SEO will demand the creation of an optimized position that fits well for search engine rankings. The criteria to be used for SEO include the use of alt tags containing images, the company’s social media must be linked to the web, using the XML sitemap, eliminating broken links, etc.
                        </p>
						<p class="qus">76. How can someone optimize their website?</p>
						<p class="ans">The following points should be recalled for the optimization of the website: <br>
<ul>
                          <li>●	Analyze all the data on your web </li>
                          <li>●	Conduct detailed research on keywords </li>
                          <li>●	Making long content rich in value </li>
						  <li>●	SEO on-page optimization </li>
						  <li>●	SEO off-page optimization </li>
                          <li>●	Optimize the mobile website </li>
                          <li>●	Accelerate the page </li>
						  <li>●	Get your quality backlinks</li>
						  <li>●	Avoid CSS and JavaScript inline </li>
                          <li>●	Gzippering </li>
                          <li>●	Reduce the code </li>
						  <li>●	Using srcset for sensitive images </li>
						  <li>●	Browser caching is to be leveraged</li>
                      	</ul>
                        </p>
						<p class="qus">77. Explain the term front end?</p>
						<p class="ans">Anything with which the user interfaces is the front end of a program or website. From the user’s point of view, the front end is synonymous with the user interface. … Websites need to work well on different platforms and screen sizes, which is why modern web development usually requires responsive design.
                        </p>
						<p class="qus">78. Explain the software stack?</p>
						<p class="ans">A software stack is a set of independent components that enable the implementation of an application together. The elements, including an operating system, architectural layers, protocols, runtime environments, databases, and calling functions, are stacked in a hierarchical position one over the other. The lower levels of the hierarchy typically deal with hardware, and the higher levels of the order carry out complex tasks for the terminal user. Several complicated instructions passing through the stacks allow components to interact directly with the application.
                        </p>
						<p class="qus">79. Explain the LAMP stack?</p>
						<p class="ans">LAMP-a a well-known web development software stack. LAMP (Linux, Apache, MySQL, PHP) The LINUX operating system is the least level of Stack’s hierarchy. The scripting language is the highest layer of the order in this case PHP. (Note: the “P” can also be used in Python or Perl programming languages). LAMP stacks are common as they all have open source components and the Stack can be used with commodities hardware. A LAMP stack is loosely connected, unlike monolithic software stacks which are typically tightly linked and designed for a specific operating system. This means they have proved to be interchangeable and frequently used together, although the components were not initially designed to work together. Nowadays, almost all Linux distributions have LAMP modules.
                        </p>
						<p class="qus">80. Explain the MERN stack?</p>
						<p class="ans">For the four core technologies that make up the Stack, MERN stands for MongoDB, Express, React, and Node.<br>  
MongoDB-archive of documents<br>  
Node.js- Web platform for Express(.js)<br> 
JavaScript’s system on the client side of React(.js)<br>  
Node(.js)-the first web server with JavaScript<br> 
MERN is one of a variety of variants of the MEAN (MongoDB Express English Node) stack, where React.js is substituted for the standard Angular.js frontend system. Other versions like MEVN (MongoDB, Express, Vue, and Node) and JavaScript can operate in any frontend. 
The middle (application) tier consists of express and node. Express.js is a Web platform on the server-side and Node.js a common and efficient server platform for JavaScript. No matter what variant you pick, ME(RVA)N provides the perfect way to work with JavaScript and JSON.
                        </p>
						<p class="qus">81. Explain the application server?</p>
						<p class="ans">Software frameworks for the construction of application servers are application server frameworks. Both the web application and server environment can be created in an application server framework.<br> 
A comprehensive service layer model is included in an application server framework. It contains a range of components that the software developer can access by means of a standard platform API. These components generally operate in the same environment as their web servers for web applications, and their main task is to facilitate the creation of dynamic pages. The various application servers do more than build web pages. To enable developers to focus on the implementation of business logic, they implement the services like clustering, failover, and load balancing.
                        </p>
						<p class="qus">82. Explain referential transparency?</p>
						<p class="ans">The aspect of functional programming is referential transparency. It has been used to substitute the expression in a program but does not change the final result.
                        </p>
						<p class="qus">83. What are some design patterns?</p>
						<p class="ans">Some design pattern is as follows<br>
<ul>
                          <li>●	UI</li>
                          <li>●	GUI </li>
                          <li>●	UX </li>
						  <li>●	Prototype and database principles.</li>
                      	</ul>
                        </p>
						<p class="qus">84. Explain the 3-tier/3 layer model?</p>
						<p class="ans">For any application, three levels of the model consist of three layers. A presentation layer that relates to the front end of the user interface, business layer, and the backend portion is used to validate the data. The third layer is the layer of the database, which deals with data storage.
                        </p>
						<p class="qus">85. What is semantic HTML?</p>
						<p class="ans">The webpage loop is described using HTML. Semantic HTML focuses on the importance of semantics of the info posted on the website. Important text can be found on the website and ranked by search engines.
                        </p>
						<p class="qus">86. Explain the CSS Box model?</p>
						<p class="ans">The model CSS Box is used to evaluate the web page content layout. Each feature that is displayed on the webpage is shown as a rectangular box. The contents to be viewed on-screen are margin, side, lining, contents borders, specific sizes, and colors.
                        </p>
						<p class="qus">87. What is bootstrap in full-stack development?</p>
						<p class="ans">Bootstrap is an open-source kit with HTML, JS, and CSS content developer tools. It can prototype an idea and build the app with the help of SaaS variables, mixtures, grids, prefabricated modules, and plugins.
                        </p>
						<p class="qus">88. Why is REST important in the HTTP protocol?</p>
						<p class="ans">REST is incredibly simple and builds on frameworks that already exist. To achieve targets, it uses existing HTTP features. It does away with the need for new standards, technology, frameworks, etc.
                        </p>
						<p class="qus">89. How is REST different from SOAP?</p>
						<p class="ans">There are two APIs that vary from the following:<br> 
REST is a non-official architectural style. SOAP is an accepted standard protocol.<br> 
REST uses a wide variety of standards, including HTTP, JSON, URL, and XML, while SOAP primarily uses XML and HTTP.
                        </p>
						<p class="qus">90. What is Git?</p>
						<p class="ans">Git helps developers to monitor improvements made to the base by means of their version control system. It is necessary to understand its essential features correctly to get the latest out of it.
                        </p>
						<p class="qus">91. Explain CSS icons?</p>
						<p class="ans">These are available in CSS scalable and CSS customizable vector libraries. Some libraries include bootstrap icons, fantastic fonts, and google icons.
                        </p>
						<p class="qus">92. Name one software registry library?</p>
						<p class="ans">The most important library in the world is the npm app registry. The packages are 800, 000. It is also used for remote administration.
                        </p>
						<p class="qus">93. Explain the difference between architectural and design patterns?</p>
						<p class="ans">A reusable solution to common software architecture problems is an architectural design. 
A model is a reusable approach to software design problems.
                        </p>
						<p class="qus">94. Explain the issues that are addressed by architectural patterns?</p>
						<p class="ans">The issues that are addressed by architectural patterns are as follows<br>
<ul>
                          <li>●	High availability</li>
                          <li>●	Performance</li>
                          <li>●	Security</li>
						  <li>●	Scalability</li>
						  <li>●	Testing</li>
                          <li>●	Deployment</li>
                          <li>●	Maintainability</li>
                      	</ul>
                        </p>
						<p class="qus">95. Explain Sass?</p>
						<p class="ans">It is labeled as Amazing StyleSheet Syntactically. It is the preprocessor for CSS and gives language elegance. This enables the application of variables, mixtures, nesting rules, inline imports, etc. The SaaS supports the arrangement of large stylesheets. Sass helps you to run tiny stylesheets quickly.
                        </p>
						<p class="qus">96. Explain Mixin?</p>
						<p class="ans">Mixin is the code block to be reused on the Web for the community of CSS declarations.
                        </p>
						<p class="qus">97. How is resetting CSS different from normalizing it?</p>
						<p class="ans">Default browser element styling resetting strips. Standardization is used to retain standard types and does not include un-style objects. It is used to fix errors, as well.
                        </p>
						<p class="qus">98. Explain JavaScript coercion?</p>
						<p class="ans">Converting one incorporated into another is known as coercion. It is implied or explicit in two ways. Direct coercion involves explicit conversion using the data form. Automatic conversion of data types happens in tacit coercion. 
                        </p>
						<p class="qus">99. How is null different from undefined?</p>
						<p class="ans">0 is a non-value object although undefined is a type.
                        </p>
						<p class="qus">100. Explain the use of external CSS at the place of inline?</p>
						<p class="ans">The typically misleading impact of Inline CSS on website results. HTML weights are more by using inline scripts. The use of external CSS reduces the size of the HTML and makes it easy to render the website. 
                        </p>
						<p class="qus">101. Explain anonymous functions?</p>
						<p class="ans">These are anonymous functions. The names of the variable are invoked automatically. 
                        </p>
						<p class="qus">102. What is HTML DocType?</p>
						<p class="ans">It’s a browser command written on the page bookmark version language. The HTML tag is used. DocType means DTC, i.e. description of the document type.
                        </p>
						<p class="qus">103. How is the call different from applying?</p>
						<p class="ans">Apply is used as an argument array to call a method—the calluses detailed parameter listing.
                        </p>
						<p class="qus">104. What is visibility: hidden?</p>
						<p class="ans">It means that the original room is invisible but still occupies it.
                        </p>
						<p class="qus">105.What is display: none?</p>
						<p class="ans">It means it is secret, and it takes no space.
                        </p>
						<p class="qus">106. Could you explain the Gitflow workflow?</p>
						<p class="ans">Gitflow workflow employs two parallel long-running branches to record the history of the project, master and develop:<br>
<ul>
                          <li>●	Master - is always ready to be released on LIVE, with everything fully tested and approved (production-ready).</li>
                          <li>●	Hotfix - Maintenance or “hotfix” branches are used to quickly patch production releases. Hotfix branches are a lot like release branches and feature branches except they're based on master instead of develop.</li>
                          <li>●	Develop - is the branch to which all feature branches are merged and where all tests are performed. Only when everything’s been thoroughly checked and fixed it can be merged to the master.</li>
						  <li>●	Feature - Each new feature should reside in its own branch, which can be pushed to the develop branch as their parent one.</li>
                      	</ul>
                        </p>
						<p class="qus">107. What does ACID mean in Database systems?</p>
						<p class="ans">Acronym ACID stands for Atomicity, Consistency, Isolation, and Durability. In database systems, ACID refers to a standard set of properties that ensure database transactions are processed reliably.
                        </p>
						<p class="qus">108. What are MVC and MVP and how MVC is different from MVP?</p>
						<p class="ans">MVC and MVP both are architectural patterns that are used to develop applications.<br>
MVC<br>
MVC stands for Model View Controller. It is an architectural pattern that is used to develop Java Enterprise Applications. It splits an application into three logical components i.e. Model, View, and Controller. It separates the business-specific logic (Model component) from the presentation layer (View component) from each other.<br>
The model components contain data and logic related to it. The View component is responsible for displaying model objects inside the user interface. The Controller receives the input and calls model objects based on handler mapping. It also passes model objects to views in order to display output inside the view layer.<br>
<img src="<?= base_url(); ?>assets/img/mvc.png" style="width:300px;" /><br>
MVP<br>
MVP stands for Model View Presenter. It is derived from the MVC architectural pattern. It adds an extra layer (known as indirection) to the architectural pattern that splits the View and Controller into View and Presenter. The role of Controller is replaced with a Presenter. It exists at the same level as View in MVC. It contains UI business logic for the View. The invocations received from the View directly sends to the Presenter. It maintains the action (events) between View and Model. The Presenter does not directly communicate with the View. It communicates through an interface.<br>
<img src="<?= base_url(); ?>assets/img/mvp.png" style="width:500px;" /><br>
The major difference between MVC and MVP architectural pattern is that in MVC architectural pattern Controller does not pass the data from the Model to the View. It only notifies the View to get the data from the Model itself.<br>
While in MVP architectural pattern the View and Model layers are connected with each other. The presenter itself receives the data from the Model and sends it to the View to show.<br>
Another difference is that MVC is often used in web-frameworks while MVP is used in app development.<br>
<img src="<?= base_url(); ?>assets/img/mvcmvp.png" style="width:500px;" /><br>
                        </p>
						<p class="qus">109. What do you mean by promise, also explain its states?</p>
						<p class="ans">A promise is an object that can be returned synchronously from an asynchronous function. It may be in the following three states:<br>
<ul>
                          <li>●	Fulfilled: If a promise called the onFulfilled() method, a promise will be in fulfilled state.</li>
                          <li>●	Rejected: If a promise called the onRejceted() method, a promise will be in rejected state.</li>
                          <li>●	Pending: If a promise is not yet fulfilled or rejected, a promise will be in pending state.</li>
                      	</ul>
						<p>A promise will be settled if and only if it is not pending.
                        </p>
						<p class="qus">110. How ServletContext is differ from ServletConfig?</p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">ServletContext</th>
							  <th scope="col">ServletConfig</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>ServletContext represents the whole web application running on a particular JVM and common for all the servlet.</td>
							  <td>ServletConfig object represents single servlet.</td>
							</tr>
							<tr>
							  <td>It is just like a global parameter associated with the whole application.</td>
							  <td>It is the same as the local parameter associated with a particular servlet.</td>
							</tr>
							<tr>
							  <td>It has application-wide scope so define outside servlet tag in the web.xml file.</td>
							  <td>It is a name-value pair defined inside the servlet section of web.xml files so it has servlet wide scope.</td>
							</tr>
							<tr>
							  <td>getServletContext() method is used to get the context object.</td>
							  <td>getServletConfig() method is used to get the config object.</td>
							</tr>
							<tr>
							  <td>To get the MIME type of a file or application session related information is stored using a servlet context object.</td>
							  <td>The shopping cart of a user is a specific to particular user so here we can use servlet config.</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">111. What is a Request Dispatcher?</p>
						<p class="ans">RequestDispatcher is an interface that is used to forward the request to another resource that can be HTML, JSP, or another servlet in the same application. We can also use it to include the content of another resource in the response. The interface contains two methods forward() and include().<br>
<img src="<?= base_url(); ?>assets/img/dispatcher.png" style="width:400px;" />
                        </p>
						<p class="qus">112. What are the differences between constructor injection and setter injection?</p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Constructor Injection</th>
							  <th scope="col">Setter Injection</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>There is no partial injection of dependencies.</td>
							  <td>There can be a partial injection of dependencies.</td>
							</tr>
							<tr>
							  <td>It does not override the setter injection value.</td>
							  <td>It overrides the constructor injection value if both are defined.</td>
							</tr>
							<tr>
							  <td>It always creates a new instance if any modification occurs.</td>
							  <td>It does not create a new instance if we made any changes to it.</td>
							</tr>
							<tr>
							  <td>Using constructor injection is better for too many properties.</td>
							  <td>Using setter injection is better for few properties.</td>
							</tr>
							<tr>
							  <td>It makes bean class objects as immutable.</td>
							  <td>It makes bean class objects as mutable.</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">113. How many ways to handle exceptions in the Spring MVC Framework?</p>
						<p class="ans">Spring MVC Framework provides the following ways to handle exceptions:<br>
<ul>
                          <li>●	Controller-Based: We can define the exception handler method in our controller class.</li>
                          <li>●	Global Exception Handler: Exception handling is a cross-cutting concern that Spring</li>
                          <li>●	HandlerExceptionResolver: Any Spring Bean declared in the DispatcherServlet's application context that implements HandlerExceptionResolver will be used to intercept and process any exception raised in the MVC system and not handled by a Controller.</li>
                      	</ul>
                        </p>
						<p class="qus">114. What are the advantages of Hibernate over JDBC?</p>
						<p class="ans">There are the following advantages of Hibernate over JDBC:<br>
<ul>
                          <li>●	Hibernate removes boilerplate code that comes with JDBC API.</li>
                          <li>●	It supports inheritance, associations, and collections that are not present in JDBC API.</li>
                          <li>●	It implicitly provides transaction management.</li>
						  <li>●	We need not to write a lot of try-catch block code.</li>
                          <li>●	In Hibernate, HQL is more object-oriented that is closed to Java programming language.</li>
                          <li>●	It provides better performance in comparison to JDBC because Hibernate supports caching while JDBC does not support caching of queries.</li>
                      	</ul>
                        </p>
						<p class="qus">115. How to avoid deadlock in Java?</p>
						<p class="ans">Avoid Unnecessary Locks: We should use locks only for those members on which it is required. Unnecessary use of locks leads to a deadlock situation. It is recommended that use a lock-free data structure. If possible, keep your code free from locks. For example, instead of using synchronized ArrayList use the ConcurrentLinkedQueue.<br>
Avoid Nested Locks: Another way to avoid deadlock is to avoid giving a lock to multiple threads if we have already provided a lock to one thread. Since we must avoid allocating a lock to multiple threads.<br>
Using Thread.join() Method: We can get a deadlock if two threads are waiting for each other to finish indefinitely using thread join. If a thread has to wait for another thread to finish, it's always best to use join with the maximum time you want to wait for the thread to finish.<br>
Use Lock Ordering: Always assign a numeric value to each lock. Before acquiring the lock with a higher numeric value, acquire the locks with a lower numeric value.<br>
Lock Time-out: We can also specify the time for a thread to acquire a lock. If a thread does not acquire a lock, the thread must wait for a specific time before retrying to acquire a lock.
                        </p>
						<p class="qus">116. What is numeric promotion?</p>
						<p class="ans">The conversion of a smaller numeric type to a larger numeric type is known as numeric promotion. In this type, byte, char, and short values are converted to int values. The int values are converted to long values, if necessary. The long and float values are converted to double values, as needed.
                        </p>
						<p class="qus">117. What is the SOLID principle in Java?</p>
						<p class="ans">In Java, SOLID principles are an object-oriented approach that are applied to software structure design. It is conceptualized by Robert C. Martin (also known as Uncle Bob). These five principles have changed the world of object-oriented programming, and also changed the way of writing software. It also ensures that the software is modular, easy to understand, debug, and refactor.<br>
The word SOLID acronym for:<br>
<ul>
                          <li>●	Single Responsibility Principle (SRP)</li>
                          <li>●	Open-Closed Principle (OCP)</li>
                          <li>●	Liskov Substitution Principle (LSP)</li>
						  <li>●	Interface Segregation Principle (ISP)</li>
                          <li>●	Dependency Inversion Principle (DIP)</li>
                      	</ul>
                        </p>
						<p class="qus">118. How much do full stack developers earn?</p>
						<p class="ans">A Full Stack Developer is one of the most highly paid professionals. In India, the average annual salary for a Full Stack Developer is around ₹6,66,697. With 1-4 years of experience, a full-stack developer earns an average of INR 6,53,006-10,00,000. Employees with between 5 and 9 years of experience can expect to earn between INR 12 and 17 lakhs per year.
                        </p>
						<p class="qus">119. Can you relate of an experience when you found your colleagues code to be inefficient? How did you deal with it?</p>
						<p class="ans"> This helps to determine a candidate’s quality standards and also gives an impression of his team playing skills. You must demonstrate that you have high-quality assurance standards, and show comfort in pointing out flaws or for that matter bugs to others. However, you must pay focus on portraying that you are good at giving positive feedback, getting the work done without creating resentment.
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