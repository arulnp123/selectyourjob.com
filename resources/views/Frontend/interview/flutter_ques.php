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
						<h3>Flutter Interview Questions and Answers</h3>
                      
						<p class="qus">1. What is Flutter?</p>
						<p class="ans">Flutter is a freeware UI software development kit(SDK) or toolkit built by Google for developing web, desktop, and mobile applications through a single codebase. Flutter applications utilize Dart programming language to create the applications. Flutter’s first alpha version was released in 2017. Flutter is optimized for 2D mobile applications that execute on both iOS and Android platforms. Following are the main elements of Flutter:</p>
                      	<ol>
                          <li>1. Flutter engine</li>
                          <li>2. Dart platform</li>
                          <li>3. Design-specific widgets</li>
                      	  <li>4. Foundation Library</li>
                      	</ol>
                      
                      <p class="qus">2. Define Dart?</p>
                      <p class="ans">Dart is a general-purpose and object-oriented programming language with C-language syntax. It is freeware and was built by Google in 2011. Dart programming intends to create the frontend user interface for mobile and web apps</p>
                      
                      <p class="qus">3. What are the Advantages of Flutter?</p>
						<p class="ans">Following are the primary advantages of Flutter:</p>
                      <ol>
                      	<li>1. Flexible and Expressive UI: Flutter offers personalizable layered architecture that assists in expressive UI, flexible design, and rapid rendering.</li>
                          <li>2. Faster Deployment: It provides fast development due to its “hot reload” feature. We can maintain the state on the sub-second reload times.</li>
                          <li>3. Native Performance: Dart compilers have a crucial role in compiling our flutter code because the code can be compiled into natural ARM machine code through the native compilers of Dart. It has natural performance on both iOS and Android.</li>
                      	  <li>4. Flutter offers you accessibility and internationalization for a wide variety of users globally.</li>
                      </ol>
					  <p class="qus">4. What are the restrictions of Flutter?</p>
						<p class="ans">Flutter has the below restrictions:<br>
                        <ol>
                      	<li>1.	Release size is larger: Developers get disappointed when the release size is not as expected.</li>
                          <li>2.	Third-party libraries are limited: As Flutter is relatively new, the amount of third-party libraries is small. Further, some widgets in the Flutter are only accessible on one platform.</li>
                          <li>3.	Limited complexity: The 3D modeling, game engines, and unity integration fail through. Thus, popular mobile platforms do not support it.</li>
                      	  <li>4.	Requirements of Dart: Dart is an object-oriented programming language, yet it cannot race with JavaScript, Java, C#, etc. Consequently, not many developers select it.</li>
						  <li>5.	Deficiency of Overall support: Flutter is not so extensively used yet. Although it possesses the attention of tech buffs, it still lacks the constant support that comes with time. At present, only its community provides support.</li>
						</ol> 
                      </p>
					  <p class="qus">5. Explain Flutter Widgets?</p>
					  <p class="ans">A Flutter application is defined as the tree of widgets. Every time we try to code for developing anything in Flutter, it will be in the widget. Widgets explain how our application must look like with its present state and configuration. When we make any change in the code, the widget reconstructs its description by computing the difference of current and previous widgets to evaluate the minimum changes to render the UI of the app. 
                      </p>
					  <p class="qus">6. What are the similarities and differences between Future and Stream?</p>
					  <p class="ans">Similarities<br>
<ol>					  
<li>1.	Stream and Future both work asynchronously.</li>
<li>2.	Both have the same potential</li>
 </ol>
<p>Differences</p>
<ol>
<li>1.	A stream may be a mixture of Futures.</li>
<li>2.	Future has only one response yet Stream can have any number of Responses.</li>
</ol>
                      </p>
					  <p class="qus">7. How to access screen size in the future?</p>
					  <p class="ans">We can access the screen size and other properties like aspect ratio, pixel density, etc. through MediaQuery.<br>
Example: MediaQuery.of(Context).size,width
                      </p>
					  <p class="qus">8. Why do we require mixins?</p>
					  <p class="ans">Dart does not endorse multiple inheritances. Therefore for implementing multiple inheritances in Flutter. We require mixins. Mixins offer a way for providing a way for writing the reusable class code in multiple class hierarchies.
                      </p>
					  <p class="qus">9. Is Flutter a language?</p>
					  <p class="ans">No, Flutter is the SDK.
                      </p>
					  <p class="qus">10. What is tree shaking in Flutter?</p>
					  <p class="ans">Tree Shaking is the optimization technique for removing the unutilized module in the bundle in the build process. It is also the code elimination technique used for optimizing our application.
                      </p>
					  <p class="qus">11. Differentiate setState and Provider?</p>
					  <p class="ans">      setState()<br>
We use it for managing the local state in a similar stateful widget and its child. The downside is everything is in the same class like UI code, business logic, and mixin UI, which splits clean code principles.<br>
Provider<br>
In the provider pattern, we define everything in the separate class indicating that the UI presentation is defined in the different logics that specify in different thus code appears high quality and clean. Moreover, we don’t need to transmit the state from one screen to another through the constructor.
                      </p>
					  <p class="qus">12. What is the difference between Hot Reload and Hot Restart?</p>
					  <table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Hot Restart</th>
							  <th scope="col">Hot Reload</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>It primarily works with States value.</td>
							  <td>It works with the small r key in the terminal or commands prompt.</td>
							</tr>
							<tr>
							  <td>It enables developers to retrieve completely compiled applications as it destroys the preserved state values and sets them to defaults. Over every Hot Restart, our application widget tree is entirely rebuilt with new typed code.</td>
							  <td>This feature enables us to rapidly compile the recently inserted code in a file and pass them to the Dart Virtual Machine(DVM). After DVM finishes the update, it instantly updates the app’s UI.</td>
							</tr>
							<tr>
							  <td>It takes longer than Hot Reload for compiling and updating the app.</td>
							  <td>It allows us to develop UI, insert new features, fix bugs, and make app development rapid.</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">13. Which one is best between React Native and Flutter?</p>
						<p class="ans">Flutter and React Native both are utilized for developing the native hybrid app through the single codebase. These applications can be executed on Android and iOS platforms.<br>
<ol>				
<li>1.	React Native was developed by Facebook, while Flutter Framework was developed by Google. Therefore, both frameworks have good features and communities.</li>
<li>2.	Flutter utilizes Dart programming language for creating the applications and React Native utilizes Javascript for developing the applications.</li>
<li>3.	From the Developer’s perspective, it is very complex to select them. Therefore, it is very hard to select the winner between React Native and Flutter.</li>
</ol>
                      </p>
					  <p class="qus">14. Explain pubspec.yaml file?</p>
					  <p class="ans">It is the configuration file of the project that utilizes a lot while working with the Flutter project. It enables us to monitor how our application operates. It also enables us to configure the constraints for the application. This file includes:<br>
<ol>				
<li>●	Project Assets</li>
<li>●	Project Dependencies</li>
<li>●	Project common settings like project version, description, and name.</li>
</ol>
                      </p>
					  <p class="qus">15. Explain Plugins and Packages in Flutter?</p>
					  <p class="ans">A package is defined as a set of similar types of interfaces, sub-packages, and classes. The plug-ins and packages allow us to develop the app without developing everything from the packages. In the Flutter, it enables us to import the latest widgets or functionalities into the application. The plugins and packages have a small difference.  Basically, packages are the latest elements or code built-in dart programming language, while plugins enable more functionality on the device through native code.
                      </p>
					  <p class="qus">16. Explain Stateless and Stateful Widgets?</p>
					  <p class="ans">The Stateless widget does not have state information and it remains static across its lifecycle. Stateless widget examples are Row, Text, Container, Column, etc. If the widget or screen includes static content, it must be a Stateless widget, yet if we have to alter the content, it requires it to be the Stateful widget.<br> 
A Stateful widget includes the state information. It is described as dynamic as it can alter the inner data in the Widget lifetime. A widget that enables us to refresh the screen is known as a Stateful widget. A Stateful widget does not have the build() method, but it has createState() method, which gives the class that expands the Flutter state class.
                      </p>
					  <p class="qus">17. Why does the First Flutter app take so long?</p>
					  <p class="ans">When we build the Flutter application the first time, it will take more time. It is because Flutter developed the device-specific IPA or APK file. So, the Xcode and Gradle are used for building the file, taking more time.
                      </p>
					  <p class="qus">18. Explain Tween Animation?</p>
					  <p class="ans">Tween Animation is a short form of in-betweening. In the Tween Animation, we must define the starting and endpoint of the automation. It indicates that the animation starts with the starting value, after that, it goes through a series of intermediary values and lastly arrives at the end value. It also offers the curve and timeline that defines the speed and time of the variation.  
                      </p>
					  <p class="qus">19. Name some famous applications that use Flutter?</p>
					  <p class="ans">Today, various companies utilize Flutter to build applications. Following are the popular applications developed on Flutter:<br>
<ol>				
<li>1.	Google Ads</li>
<li>2.	Alibaba</li>
<li>3.	Reflectly</li>
<li>4.	Coach Yourself</li>
<li>5.	Birch Finance</li>
<li>6.	Watermaniac</li>
<li>7.	Tencent</li>
</ol>
                      </p>
					  <p class="qus">20. What is the latest version of Flutter?</p>
					  <p class="ans">The latest version of Flutter is Flutter - v1.20.4 released on 15th September 2020.
                      </p>
					  <p class="qus">21. Name the famous database packages utilized in Flutter?</p>
					  <p class="ans">The Famous and Most used database packages in the Flutter are:<br>
<ol>				
<li>●	Firebase Database: It allows us to manipulate and access cloud databases.</li>
<li>●	sqflite database: It enables us to manipulate and access the SQLite database.</li>
</ol>
                      </p>
					  <p class="qus">22. Differentiate “runApp()” and “main()” functions in Flutter?</p>
					  <p class="ans"><ol><li>●	The main() function is used to start the program. Without the main() function, we cannot start any program on the Flutter.</li>
<li>●	The runApp() is used to return widgets attached to the screen as the root of the widget tree and will be imparted on the screen.</li>
</ol>
                      </p>
					  <p class="qus">23. Name the different build modes in the Flutter?</p>
					  <p class="ans">The Flutter SDK supports three modes while compiling the application. We can select these compilation modes by relying on where we are in the development lifecycle. Following are the mode names:<br>
					  <ol><li>●	Profile</li>
					  <li>●	Debug</li>
<li>●	Release</li>
</ol>
                      </p>
					  <p class="qus">24. What are Keys and When do we use them in Flutter?</p>
					  <p class="ans">
<ol>
<li>●	In Flutter, We use Keys as the identifier for Elements, SemanticNodes, and Widgets. We will utilize it when any new widget tries to update the available element; later, its key must be similar to the current widget key related to the element.</li>
<li>●	Keys must not be distinct amongst elements in the same parent.</li>
<li>●	The subclasses of the Key should be a LocalKey or GlobalKey.</li>
<li>●	Keys are helpful when we manipulate(like reordering, adding, or removing) a group of widgets of a similar type that hold a similar state.</li>
</ol>
                      </p>
					  <p class="qus">25. Explain Profile Mode?</p>
					  <p class="ans">Profile Mode is used for measuring the performance of the applications. In the Profile Mode, some debugging capability is preserved for profiling the performance of our app. This mode is deactivated on the simulator and emulator as they are not delegates of the real performance. For profiling the mode, we use the following command:<br>
flutter run --profile
                      </p>
					  <p class="qus">26. Explain BuildContext?</p>
					  <p class="ans">In Flutter, BuildContext is the part of the widgets in the element tree such that every widget has its BuildContext. We primarily use it for getting a reference to another theme or widget. For instance, if we have the material design element, it is needed to reference it to the scaffold. We can retrieve it through the Scaffold. of(context) method.
                      </p>
					  <p class="qus">27. When to use main Axis Alignment and cross Axis Alignment? </p>
					  <p class="ans">For Row:<br>
mainAxisAlignment = Horizontal Axis<br>
crossAxisAlignment = Vertical Axis<br>
<img src="<?= base_url(); ?>assets/img/alignment.png" style="width:300px;" /><br>
For Column:<br>
mainAxisAlignment = Vertical Axis<br>
crossAxisAlignment = Horizontal Axis<br>
<img src="<?= base_url(); ?>assets/img/crossalignment.png" style="width:150px;" />
                      </p>
					  <p class="qus">28. What is a "widget" and mention its importance in Flutter? </p>
					  <p class="ans"><ol><li>●	Widgets are basically the UI components in Flutter.</li>					  
<li>●	It is a way to describe the configuration of an Element.</li>
<li>●	They are inspired from components in React.</li>
</ol>
<p>Widgets are important in Flutter because everything within a Flutter application is a Widget , from a simple “Text” to “Buttons” to “Screen Layouts”.
                      </p>
					  <p class="qus">29. How many types of widgets are there in Flutter? </p>
					  <p class="ans">There are two types of widgets:<br>
<ol>
<li>1.	StatelessWidget: A widget that does not require mutable state.</li>
<li>2.	StatefulWidget: A widget that has mutable state.</li>
</ol>
                      </p>
					  <p class="qus">30. When should you use WidgetsBindingObserver? </p>
					  <p class="ans">WidgetsBindingObserver should be used when we want to listen to the AppLifecycleState and call stop/start on our services.
                      </p>
					  <p class="qus">31. What is the difference between Expanded and Flexible widgets? </p>
					  <p class="ans">Expanded is just a shorthand for Flexible<br>
Using expanded this way:<br>
Expanded(<br>
	child: Foo(),<br>
);<br>
is strictly equivalent to:<br>
Flexible(<br>
	fit: FlexFit.tight,<br>
	child: Foo(),<br>
);<br>
You may want to use Flexible over Expanded when you want a different fit, useful in some responsive layouts.<br>
The difference between FlexFit.tight and FlexFit.loose is that loose will allow its child to have a maximum size while tight forces that child to fill all the available space.
                      </p>
					  <p class="qus">32. How is Flutter different from a WebView based application? </p>
					  <p class="ans">
<ol>
<li>●	Code you write for a WebView or an app that runs similarly has to go through multiple layers to finally get executed (like Cordova for Ionic).** In essence, Flutter leapfrogs that by **compiling down to native ARM code to execute on both platforms.</li>
<li>●	“Hybrid” apps are slow, sluggish and look different from the platform they run on. Flutter apps run much, much faster than their hybrid counterparts.</li>
<li>●	It’s much easier to access native components and sensors using plugins rather than using WebView which can’t take full use of their platform.</li>
</ol>
                      </p>
					  <p class="qus">33. What is an App state? </p>
					  <p class="ans">
<ol>
<li>●	State that is not ephemeral, that you want to share across many parts of your app, and that you want to keep between user sessions, is what we call application state (sometimes also called shared state).</li>
<li>●	Examples of application state:</li>
<li>○	User preferences</li>
<li>○	Login info</li>
<li>○	Notifications in a social networking app</li>
<li>○	The shopping cart in an e-commerce app</li>
<li>○	Read/unread state of articles in a news app</li>
</ol>
                      </p>
					  <p class="qus">34. What is Fat Arrow Notation in Dart and when do you use it? </p>
					  <p class="ans">The fat arrow syntax is simply a short hand for returning an expression and is similar to (){ return expression; }.<br>
The fat arrow is for returning a single line, braces are for returning a code block.<br>
Only an expression—not a statement—can appear between the arrow (=>) and the semicolon (;). For example, you can’t put an if statement there, but you can use a conditional expression<br>
// Normal function<br>
void function1(int a) {<br>
  if (a == 3) {<br>
    print('arg was 3');<br>
  } else {<br>
    print('arg was not 3');<br>
  }<br>
}<br>

// Arrow Function<br>
void function2(int a) => print('arg was ${a == 3 ? '' : 'not '}3');
                      </p>
					  <p class="qus">35. Does Flutter work like a browser? How is it different from a WebView based application? </p>
					  <p class="ans">To answer this question simply: Code you write for a WebView or an app that runs similarly has to go through multiple layers to finally get executed. In essence, Flutter leapfrogs that by compiling down to native ARM code to execute on both platforms. “Hybrid” apps are slow, sluggish and look different from the platform they run on. Flutter apps run much, much faster than their hybrid counterparts. Also, it’s much easier to access native components and sensors using plugins rather than using WebViews which can’t take full use of their platform.
                      </p>
					  <p class="qus">36. What are the limitations of Flutter?</p>
					  <p class="ans">Flutter has certain limitations as:<br>
<ol>
<li>●	Lack of third party libraries - Flutter has less number of third party libraries but it's increasing with the time.</li>
<li>●	Larger release size - Flutter frustrates developers when release size is not as per their expectations.</li>
<li>●	Dart is a good Object-oriented programming language but it lacks when compared with others like C# (C-Sharp), JavaScript etc.</li>
<li>●	iOS developers always think before choosing a flutter framework to develop the app for apple devices as it's developed by Google so android issues are fixed faster but issues for apple devices take much time.</li>
</ol>
                      </p>
					  <p class="qus">37. Is Flutter Open source?</p>
					  <p class="ans">Yes, Flutter is a free and open-source UI toolkit by Google to develop desktop, web and mobile applications with one codebase only.
                      </p>
					  <p class="qus">38. What makes Flutter unique?</p>
					  <p class="ans">Flutter uses only a single codebase to develop applications for web, mobile and desktop and the experience for mobile apps is native on both android and iOS. Flutter does not depend on web browser technology nor the set of widgets that each device contains. Instead it uses its own rendering engine to draw widgets. This rendering engine provides very high performance. This concept makes flutter unique.
                      </p>
					  <p class="qus">39. Explain Flutter SDK.</p>
					  <p class="ans">Flutter SDK is an UI kit to build applications for mobile, web and desktop from a single codebase. This SDK comes with a flutter command line tool and dart command line tool to develop apps across platforms. For more you can refer Flutter SDK.
                      </p>
					  <p class="qus">40. How does Flutter run the code on Android?</p>
					  <p class="ans">Android's NDK compiles the flutter engine's C,C++ code. The AOT (ahead-of-time) compiler compiles the Dart code of both (SDK's and your) into native, ARM, and x86 libraries. These libraries are added in a "runner" android project and the whole thing or artefact is built into an Android application package file .apk. The app loads the flutter library on launching of it. Any input or event handling, rendering and so on, are delegated to the compiled code of flutter and app. It is similar to working process of many game engines.<br>
During debug mode, A VM (Virtual Machine) runs flutter code in order to enable hot stateful reload feature. When you run app in debug mode you will see a "debug" banner in top right corner of app. It reminds you that performance is not the characteristic of completed release app.
                      </p>
					  <p class="qus">41. How does Flutter run the code on iOS?</p>
					  <p class="ans">The Flutter Engine's C, C++ code is compiled with LLVM (low level virtual machine - a compiling technology). The Dart code of both the SDK's and yours are compiled by AOT (ahead-of-time) into a native, ARM library. That ARM library is included in "runner" iOS project and the whole code base is built into an iOS App Store Package file .ipa. When the app launched, the app loads the flutter library. Any input or event handling, rendering and so on, are delegated to the compiled code of flutter and app. It is similar to working process of many game engines.
                      </p>
					  <p class="qus">42. In What technology is Flutter built?</p>
					  <p class="ans">Flutter is built using C, C++, Skia - 2D rendering engine and Dart (a modern, concise, object-oriented language). For you can visit Flutter System Architecture and Flutter architectural overview.
                      </p>
					  <p class="qus">43. Explain the lifecycle of a StatefulWidget?</p>
					  <p class="ans">The State objects have following lifecycle methods.<br>
<ol>
<li>●	createState</li>
<li>●	initState</li>
<li>●	didChangeDependencies</li>
<li>●	build</li>
<li>●	didUpdateWidget</li>
<li>●	setState</li>
<li>●	deactivate</li>
<li>●	dispose</li>
</ol>
<p>For more visit State and lifecycle
                      </p>
					  <p class="qus">44. What operating systems flutter support to build the apps?</p>
					  <p class="ans">Flutter app development can be done using Linux, MacOS, ChromeOS and Windows.
                      </p>
					  <p class="qus">45. What is a Cookbook?</p>
					  <p class="ans">The Cookbook provides solutions or recipes for common occurring problems while developing flutter apps. Each recipe is an independent complete solution and can be referenced to help you build up an app. For more you can refer Cookbook
                      </p>
					  <p class="qus">46. What is the Container class in flutter?</p>
					  <p class="ans">The Container class provides the ability to create a widget with certain properties like padding, borders, height, width, border etc.
                      </p>
					  <p class="qus">47. How much will you rate yourself in Flutter?</p>
					  <p class="ans">When you attend an interview, Interviewer may ask you to rate yourself in a specific Technology like Flutter, So It's depend on your knowledge and work experience in Flutter.
                      </p>
					  <p class="qus">48. What challenges did you face while working on Flutter?</p>
					  <p class="ans">This question may be specific to your technology and completely depends on your past work experience. So you need to just explain the challenges you faced related to Flutter in your Project.
                      </p>
					  <p class="qus">49. What was your role in the last Project related to Flutter?</p>
					  <p class="ans">It's based on your role and responsibilities assigned to you and what functionality you implemented using Flutter in your project.
                      </p>
					  <p class="qus">50. How much experience do you have in Flutter?</p>
					  <p class="ans">Here you can tell about your overall work experience on Flutter.
                      </p>
					  <p class="qus">51. Have you done any Flutter Certification or Training?</p>
					  <p class="ans">It depends on the candidate whether you have done any Flutter training or certification. Certifications or training are not essential but good to have.
                      </p>
					  <p class="qus">52.Why is Flutter better than its competitors in mobile app development?</p>
					  <p class="ans">This should be a permanent fixture of any Flutter interview question and answer meeting, regardless of skill level. You need a developer who not only knows how to use Flutter but also believes in the platform’s possibilities as against its competitors in the mobile app development space.<br>
<ol>
<li>●	Flexible programming: The hot reload feature allows developers to modify code in real-time. This is very useful, particularly in debugging and testing. It is time-saving too since the app won’t have to restart to see changes.</li>
<li>●	Faster building process: Of course, Flutter is a cheaper tool for startups looking to develop one native app quickly for up to six operating systems, including the two major mobile platforms: Android and iOS. It is much easier to manage one app from a single codebase that works on six platforms than to manage six apps.</li>
</ol>
                      </p>
					  <p class="qus">53.What are the advantages of Dart in programming?</p>
					  <p class="ans">Flutter supports two programming languages Dart and C++, but the former was specially created for use. Therefore, Flutter questions almost naturally always flow into the Dart space. Any Flutter developer must have at least basic understanding of Dart.<br>
Unlike Python, Javascript, PHP, Ruby and etc., Dart uses static typing, which makes it type-safe and easier to detect and avoid runtime errors, as well as ensure effective code optimization overall.<br>
While Dart is fairly similar to Javascript, it runs code multiple times faster than the latter. The Dart VM (virtual machine) uses both Just-in-Time (JIT) and Ahead-of-Time (AOT) compilers to ensure faster and better code performance.<br>
More so, Dart uses object-oriented programming, which makes it very scalable and stable for building even the most complex applications.
                      </p>
					  <p class="qus">54.What are some editors used in Flutter development?</p>
					  <p class="ans">The most popular Flutter IDEs include Android Studio, IntelliJ IDEA, Xcode, Emacs, Visual Studio, Codemagic, among others.<br>
<ol>
<li>●	IntelliJ IDEA is feature-rich, boasts extensive support for many languages, and provides smart coding assistance. Most beginner developers would probably get by with the free Community Edition, but the paid Ultimate Edition is required to access additional features.</li>
<li>●	Android Studio works like IntelliJ IDEA but for Android only. Unlike the latter, though, Android studio is free and open-source. With smart coding assistance and a built-in debugger, it seems the best choice when programming for Android devices.</li>
<li>●	Visual Studio code, or simply VS Code, is a free tool backed by Microsoft. It speeds up development and lowers development time to minutes. It works with Windows, macOS, and Linux.</li>
</ol>
                      </p>
					  <p class="qus">55.What are some drawbacks of Flutter and Dart?</p>
					  <p class="ans">Indeed Flutter is a great platform for mobile app development. However, a smart and competent developer must know the limits of their tools and be able to produce great results within those limits. Therefore, while Flutter interview questions and answers like this seem to be tricky at first, it is far from such.<br>
Flutter, only just released in 2018, is still in the early stages, compared with established platforms such as native technology, Xamarin, and React Native. Therefore, it still needs time to have very rich library support.<br>
Due to its rapid evolution, it can be a challenge for developers to maintain code because changes are being introduced and implemented constantly. On the one hand, it is indicative of growth; yet, on the other, it might make the job of developers more challenging.<br>
Apps developed using Flutter are often storage-heavy. Native Java apps can be as small as 539 KB but for Flutter, the minimum is about 4 MB. Larger app sizes result in storage space issues and poor user experience for users.
                      </p>
					  <p class="qus">56.How do you add interactivity to an app?</p>
					  <p class="ans">Stateful widgets are dynamic widgets that can be modified to respond to user input (interactivity). The state of a stateful widget can be managed by either the widget itself or the parent widget, or both. Aesthetic states are better managed by the widget while functional states (such as accepting user data), then the widget’s parent should manage such.<br>
Alternatively, a developer may use the GestureDetector to implement interactivity for a custom widget in response to actions such as tapping and dragging.
                      </p>
					  <p class="qus">57.Explain state management</p>
					  <p class="ans">This is easily one of the toughest concepts for developers to grasp on this platform. Therefore, asking a developer to explain state management is among the most telling Flutter interview questions and answers of the candidate’s true level of expertise.<br>
For stateful widgets, a state is the local data that the widget holds that makes it respond to dynamic context, including interactive input. For the entire app, the state consists of everything contained in the app memory while running.<br>
There are two different types of state: app state and ephemeral state. First, the ephemeral state is the UI state. It is also called the local state because it is usually contained in a single widget. On the other hand, app state refers to a state that cuts across various parts of the app.<br>
That is, it is not ephemeral. This includes shopping carts, user preferences, login info, and so on. Sometimes though, both the app state and the ephemeral state flow into each other that they are indistinguishable.
                      </p>
					  <p class="qus">58.What are some approaches to state management?</p>
					  <p class="ans"><ol><li>●	setState is useful only for managing the ephemeral state; that is when the state is widget-specific. It is very straightforward and, in fact, it is not recommended to use a different approach for ephemeral state management.</li>
<li>●	InheritedWidget: as obvious from the name, this approach is used to manage data transmission between ancestors and children.</li>
<li>●	Redux: is useful for app state management and particularly for large, complex apps. Many web developers are already familiar with Redux and so using it in Flutter is not much of a hassle.</li>
<li>●	Other popular state management approaches include Provider, BLoC, MobX, Riverpod, and so on.</li>
</ol>
                      </p>
					  <p class="qus">59.Explain the types of streams in Dart</p>
					  <p class="ans">Streams are a concept in asynchronous programming. They refer to the asynchronous sequence of data events within a program. The SteamController can be used to create new streams or manage existing ones. There are two main types of streams.<br>
Single subscription streams are sequences contained within a larger whole. Such a stream only allows one listener throughout the sequence and the event is not triggered unless there is a listener. On the other hand, broadcast streams are versatile streams that allow more than one listener at a time. More so, one can listen again even a prior subscription has been canceled.
                      </p>
					  <p class="qus">60.Why should you even hire Flutter developers?</p>
					  <p class="ans">Before trying to hire Flutter developers, you first need to determine why such a move is required and what benefit you can get by building an app using Flutter. Flutter, backed by Google, is a major tool in the cross-platform development space. It is a software development kit for building apps for multiple platforms.
                      </p>
					  <p class="qus">61.How should you approach an interview with a Flutter developer?</p>
					  <p class="ans">Flutter is unlike other cross-platform development tools. For one, Flutter is based on an entirely new programming language designed for that purpose. Therefore, in interviewing Flutter developer candidates, asking them conventional questions about cross-platform development would not be enough. You have to probe their Flutter-exclusive knowledge.
                      </p>
					  <p class="qus">62.What single question exposes a Flutter developer’s knowledge?</p>
					  <p class="ans">There are many questions, of course, but if you were to ask just one, that should be concerning the drawbacks of Flutter and Dart. Being able to explain the cons of working with a favoured development tool and programming language is a huge plus. Indeed, the candidate must also be able to explain how they intend to work around those flaws and challenges.
                      </p>
					  <p class="qus">63. How can you install Flutter?</p>
					  <p class="ans">To install and run Flutter on the Windows system, you need first to meet these requirements for your development environment.
                      </p>
					  <table class="table table-striped">
						  <thead>
						  </thead>
						  <tbody>
							<tr>
							  <td>Operating System</td>
							  <td>Windows 7 or Later (I am Windows 10. You can also use Mac or Linux OS.).</td>
							</tr>
							<tr>
							  <td>Disk Space</td>
							  <td>400 MB (It does not include disk space for IDE/tools).</td>
							</tr>
							<tr>
							  <td>Tools</td>
							  <td>1. Windows PowerShell<br>
2. Git for Windows 2.x (Here, Use Git from Windows Command Prompt option).
                            </td>
							</tr>
							<tr>
							  <td>SDK</td>
							  <td>Flutter SDK for Windows</td>
							</tr>
							<tr>
							  <td>IDE</td>
							  <td>Android Studio (Official)</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">64. Which type of animation allows you to represent real-world behavior?</p>
						<p class="ans">The Physics-based animation allows you to represent real-world behavior in Flutter.
                      </p>
					  <p class="qus">65. In the below code snippet, convert makeMangoShake() to a getter called mangoshake using the shorthand "fat arrow" syntax:</p>
					  <p class="ans">
<ol>
<li>1.	class Recipe {  </li>
<li>2.	  int mango;  </li>
<li>3.	  int milk;  </li>
<li>4.	  int sugar;  </li>
<li>5.	  Recipe(this.mango, this.milk, this.sugar);   </li>
<li>6.	  int makeMangoShake() {  </li>
<li>7.	    return mango+milk+sugar;  </li>
<li>8.	  }  </li>
<li>9.	}   </li>
</ol>
<p>Fat Arrow (=>) is used when the method contains a single line of code. We can use it using the following syntax:<br>
1.	methodName(parameters) => statement;<br>   
It is to note that we cannot use the return keyword with a fat arrow (=>). After converting the makeMangoShake() into a fat arrow, it will look like the below code:<br>
1.	int get mangoshake => mango + milk + sugar;
                      </p>
					  <p class="qus">66. Explain the difference between "??" and "?" Operators.</p>
					  <table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">?? operator</th>
							  <th scope="col">? Operator</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>The "??" operator is used to evaluate and returns the value between two expressions. It can be used as below:<br>
expr1 ?? expr2<br>
This operator first checks the expression 1 and, if it is non-null, returns its value; otherwise, it will evaluate and returns the value of expression 2.
                              </td>
							  <td>The "?" operator is used to evaluate and returns the value between two expressions based on the given condition. It can be used as below:<br>
condition ? expr1 : expr2<br>
This operator first checks the condition, and if it is true, it will evaluate expr1 and returns its value (if the condition is matched). Otherwise, it evaluates and returns the value of expr2.
                              </td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">67. Why we use a Ticker in Flutter?</p>
						<p class="ans">Ticker in Flutter is a refresh rate of our animation. It is a class that sends a signal at a regular interval, i.e., around 60 times per second. We can understand it with our watch, which tics at regular intervals. At each tick, Ticker provides a callback method with the duration since the first ticks at each second, after it was started. Even if the tickers started at different times, it always synchronized automatically.
                      </p>
					  <p class="qus">68. What are Null-aware operators?</p>
					  <p class="ans">Dart provides some useful information to handle the null values.<br>
1. The "??=" assignment operator that assigns a value to a variable only when that variable is null.
<ol>
<li>1.	int a; // Initial value of a is null.</li>  
<li>2.	a ??= 5;</li>  
<li>3.	print(a); // It will print 5.</li>
</ol>  
<p>2. The "??" null-aware operator that is used to evaluate and returns the value between two expression. It first checks the expression 1 and if it is non-null, returns its value; otherwise, it will evaluate and returns the value of expression 2:</p>
<ol>
<li>1.	print(3 ?? 5); // It will print 3.</li>  
<li>2.	print(null ?? 5); // It will print 5.</li> 
</ol>
                      </p>
					  <p class="qus">69. Explain the flutter architecture.</p>
					  <p class="ans">The structure of Flutter consists of three layers:<br>
<img src="<?= base_url(); ?>assets/img/flutter.jpg" style="width:500px;" /><br>
<ol>
<li>●	Upper layers: The Dart-based platform that takes care of app widgets, gestures, animations, illustrations, and materials;</li>  
<li>●	Flutter engine: Handles the display and formatting of text.</li>  
<li>●	Built-in service: Used for the management of plugins, packages, and event loops.</li>
</ol> 
                      </p>
					  <p class="qus">70. Explain Flutter Inspector.</p>
					  <p class="ans">In the same manner, as with Native Android, the XML file allows us to view our app's blueprint and properties. There is a powerful tool called Flutter Inspector for Flutter applications that allows you to visualize the blueprint of your widgets and their properties. Using it, you can diagnose various layout issues and understand the current layout.<br> 
Flutter Inspector offers the following benefits: <br>
<ol>
<li>●	Select widget mode </li>  
<li>●	Toggle platform </li>  
<li>●	Show paint baselines </li>
<li>●	Show debug paint </li>  
<li>●	Refresh widget </li>  
<li>●	Enable slow animations </li>
<li>●	Show/hide performance overlay </li> 
</ol> 
                      </p>
					  <p class="qus">71. How can we create HTTP requests in Flutter?</p>
					  <p class="ans">To create HTTP requests, use the HTTP package (import 'package:http/http.dart' as http;). In the following manner, we can make the Requests:<br>
http.get(‘https://jsonplaceholder.typicode.com/albums/1‘);<br> 
It will return a Future <http.Response>.
                      </p>
					  <p class="qus">72. Explain Flutter Provider.</p>
					  <p class="ans">The provider is built using widgets. You can use all the objects in the provider as if they were just part of Flutter with the new widget subclasses it creates. This also means that the provider is not cross-platform. The provider is the simplest way to handle state management. Basically, it works on the concept of PUB-SUB i.e., there is one provider and several subscribers.
                      </p>
					  <p class="qus">73. What is await in Flutter? Write it's usage..</p>
					  <p class="ans">Until the async method is finished, await interrupts the process flow. Await generally means: Wait here until this function is finished so that you can get its return value. Await can only be used with async. Using this, all currently running functions are put on hold until PF nature is complete. 
                      </p>
					  <p class="qus">74. Write the difference between SizedBox Vs Container.</p>
					  <p class="ans">
<ol> 
<li>●	Container: In this parent widget, multiple child widgets can be easily controlled and handled by adjusting their size, padding, and color efficiently. We can wrap a widget in a container widget if it needs any styling, like a color, a shape, or a size constraint, etc.</li>
<li>●	SizedBox: This is a specific size box. It does not allow us to set the widget's color or decoration, unlike Container. In this case, we only need to resize the widget that is passed as a child. In other words, it forces its child widget to have a specific size. </li> 
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