<style>
p.qus {
    font-size: 17px;
    font-weight: bold;
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
						<h3>Android Interview Questions and Answers</h3>
						<p class="qus">1. What is the latest version of Android? List all the versions of Android?</p>
						<p class="ans">The latest version is Android 9.0- Android Pie released in August, 2018. Android is a mobile operating system developed by Google. It is based on the Linux kernel and designed primarily for touchscreen mobile devices such as smartphones and tablets. Every other Android version has been named after either sweet or desserts. The following table represents the Android name, version and the year of release.</p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Android Name</th>
							  <th scope="col">Version </th>
							  <th scope="col">Year of Release</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Android 1.5</td>
							  <td>Android Cupcake</td>
							  <td>2009</td>
							</tr>
							<tr>
							  <td>1.6</td>
							  <td>Donut</td>
							  <td>2009</td>
							</tr>
							<tr>
							  <td>2.0-2.1</td>
							  <td>Eclair</td>
							  <td>2009</td>
							</tr>
							<tr>
							  <td>2.2 – 2.2.3</td>
							  <td>Froyo</td>
							  <td>2010</td>
							</tr>
							<tr>
							  <td>2.3 – 2.3.7</td>
							  <td>Gingerbread</td>
							  <td>2010</td>
							</tr>
							<tr>
							  <td>3.0 – 3.2.6</td>
							  <td>Honeycomb</td>
							  <td>2011</td>
							</tr>
							<tr>
							  <td>4.0 – 4.0.4</td>
							  <td>Ice Cream Sandwich</td>
							  <td>2011</td>
							</tr>
							<tr>
							  <td>4.1 – 4.3.1</td>
							  <td>Jelly Bean</td>
							  <td>2012</td>
							</tr>
							<tr>
							  <td>4.4 – 4.4.4</td>
							  <td>KitKat</td>
							  <td>2013</td>
							</tr>
							<tr>
							  <td>5.0 – 5.1.1</td>
							  <td>Lollipops</td>
							  <td>2014</td>
							</tr>
							<tr>
							  <td>6.0 – 6.0.1</td>
							  <td>Marshmallow</td>
							  <td>2015</td>
							</tr>
							<tr>
							  <td>7.0 – 7.1.2</td>
							  <td>Nougat</td>
							  <td>2016</td>
							</tr>
							<tr>
							  <td>8.0 – 8.1</td>
							  <td>Oreo</td>
							  <td>2017</td>
							</tr>
							<tr>
							  <td>9.0</td>
							  <td>Pie</td>
							  <td>2018</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">2. What is an Activity? Which method is implemented by all subclasses of an Activity?</p>
						<p class="ans">An Activity is the screen representation of an application in Android.<br>
It serves as an entry point for the user’s interaction. Each activity has a layout file where you can place your UI. An application can have different activities. For example, facebook start page where you enter your email/phone and password to login acts as an activity.<br>
Below are the two methods which almost all subclasses of Activity will implement:<br>
●	onCreate(Bundle): It is a method where your initialization is done. Under this, you will callsetContentView(int) with a layout resource which defines your UI.  Also, you can retrieve the widgets in that UI by using findViewById(Int).  These are required to interact programmatically.<br>
●	onPause(): It is a method which deals with the user whenever it leaves the activity. So any changes made by the user should be commited which is done by the ContentProvider that holds the data. <br>
An activity is implemented as a subclass of Activity class as follows:<br>
1<br>
2	public class MainActivity extends Activity {<br>
}
                        </p>
                        <p class="qus">3. What are the features of Android?</p>
						<p class="ans">Google has changed the lives of everyone by launching a product that improves the mobile experience for everyone. Android helps in understanding your tastes and needs, by giving various features such as having wallpapers, themes, and launchers which completely change the look of your device’s interface.<br>
Android has plenty of features. Some of the features are listed below:<br>
●	Open-source
<br>
●	Customizable operating System
<br>
●	Variety of apps can be developed.
<br>
●	Reduces overall complexity
<br>
●	Supports messaging services, web browser, storage(SQLite), connectivity,media and many more.
                        </p>
						<p class="qus">4. Explain Android Architecture.</p>
					<p class="ans">Android architecture refers to the different layers in the Android stack. It includes your operating system, middleware, and important applications. Each layer in the architecture provides different services to the layer just above it. The four layers in the Android stack are:<br>
●	Linux Kernel
<br>
●	Libraries
<br>
●	Android Framework
<br>
●	Android Applications
                        </p>
						<p class="qus">5. Which programming language is used for Android App development?</p>
						<p class="ans">Java is the official programming language for Android App development. It is also possible to develop in C/ c++ language using  NDK (Android Native Development). However, the major parts of Android are written in Java programming language and the APIs are also designed primarily from Java.
                        </p>
						<p class="qus">6. What is APK format?</p>
						<p class="ans">The APK file or Android application package is the compressed file format that is used to distribute and install application software and middleware onto Google’s Android operating system. The file has .apk extension and has all the application code, resource files, certificates, and other files, compressed in it.
                        </p>
						<p class="qus">7. What is the life cycle of android activity?</p>
						<p class="ans">User navigates between different screen or app, it goes through different states in their lifecycle. So an activity lifecycle consists of 7 different methods of android.app.Activity class i.e :<br>
onCreate() : In this state, the activity is created.
<br>
onStart(): This callback method is called when the activity becomes visible to the user.
<br>
onResume(): The activity is in the foreground and the user can interact with it.
<br>
onPause(): Activity is partially obscured by another activity. Other activity that’s in the foreground is semi-transparent.
<br>
onStop(): The activity is completely hidden and not visible to the user.
<br>
onDestroy(): Activity is destroyed and removed from the memory.<br>

<img src="<?= base_url(); ?>assets/img/and.jpg" style="width:1000px;" />
                        </p>
						<p class="qus">8. Define intents in Android. What are the different types of intents?</p>
						<p class="ans">An Intent is an “intention” to do an action.  An intent is a messaging object you can use to request an action from another app component.<br>
Methods are used to deliver intents to different components:<br>
●	context.startActivity() – To start an activity
<br>
●	context.startService() – To start a service
<br>
●	context.sendBroadcast() – To deliver a broadcast
<br>
Types of Intent:
<br>
Implicit Intent: Implicit intent is when the target component is not defined in the intent and the android system has to evaluate the registered components based on the intent data.<br>
Explicit Intent: Explicit intent is when an application defines the target component directly in the intent.
                        </p>
						<p class="qus">9. What is the difference between an implicit intent and explicit intent?</p>
						<p class="ans">Implicit Intent is used whenever you are performing an action. For example, send email, SMS, dial number or you can use a Uri to specify the data type. For example:<br>
1<br>
2	Intent i = new Intent(ACTION_VIEW,Uri.parse("http://www.edureka.co"));<br>
startActivity(i);<br>
Explicit, on the other hand, helps you to switch from one activity to another activity(often known as the target activity). It is also used to pass data using putExtra method and retrieved by other activity by getIntent().getExtras() methods.
For example:<br>
<ol>
<li>1 Intent i = new Intent(this, Activitytwo.class); #ActivityTwo is the target component</li>
<li>2 i.putExtra("Value1","This is ActivityTwo");</li>
<li>3 i.putExtra("Value2","This Value two for ActivityTwo");</li>
<li>4 startactivity(i);</li>
</ol>
<br>
                        </p>
						<p class="qus">10. What is an Android Framework?</p>
						<p class="ans">Android Framework is an essential part of the Android Architecture. It is a set of APIs that allows developers to write apps and has the following components:
                        </p>
						<table class="table table-striped">
						  <tbody>
							<tr>
							  <td>Services</td>
							  <td>Components that conduct long-running operations in the background, without the inclusion of a user interface.</td>
							</tr>
							<tr>
							  <td>Intent</td>
							  <td>Objects that initiate actions from other app components, either within your program (explicit intents) or through another piece of software on the device (implicit intents).</td>
							</tr>
							<tr>
							  <td>Activities</td>
							  <td>Components that provide users with screens on which they can interact with objects and perform actions. This is the base from which Intents can be deployed.</td>
							</tr>
							<tr>
							  <td>Content Providers</td>
							  <td>Components that enable users to access data within an app such as audio, video, images, contact information, etc.</td>
							</tr>
							<tr>
							  <td>Others</td>
							  <td>App widgets and Processes and Threads</td>
							</tr>
							</tbody>
							</table>
							<p class="qus">11. What is the difference between File, Class, and Activity in android?</p>
							<p class="ans">The difference between them are as follows:
<br>
●	File is a block of arbitrary information or resources for storing information. It can be any file type.
<br>
●	Class is a compiled from of .Java file which Android uses to produce an executable apk.
<br>
●	Activity is the equivalent of a Frame/Window in GUI toolkits. It is not a file or a file type but just a class that can be extended in Android to load UI elements on view.

                        </p>
						<p class="qus">12. What is Google Android SDK? What are the tools placed in android SDK?</p>
						<p class="ans">The Google Android SDK is a toolset that provides a developer the API libraries and tools required to build, test, and debug apps for Android in Windows, Mac or Linux. The tools placed in Android SDk are:<br>
●	Android Emulator<br>
●	DDMS – Dalvik Debug Monitoring Services<br>
●	AAPT – Android Asset Packaging tool<br>
●	ADB – Android debug bridge
                        </p>
						<p class="qus">13. What is a Toast? Write its syntax.</p>
						<p class="ans">●	Toast notification is a message that pops up on the window.<br>
●	It only covers the expanse of space required for the message and the user’s recent activity remains visible and interactive.<br>
●	The notification automatically fades in and out and does not accept interaction events.<br>
Syntax:<br>
1	Toast.makeText(ProjectActivity.this, "Your message here", Toast.LENGTH_LONG).show();

                        </p>
						<p class="qus">14. What is an ANR? What are some measures you can take to avoid ANR?</p>
						<p class="ans">ANR stands for ‘Application Not Responding’. This dialogue is displayed if the main thread in the application has been unresponsive for a long time and in the following conditions:<br>
●	When there is no response to an input event after 5 seconds.<br>
●	When a broadcast receiver is not done executing within 10 seconds.<br>
 Following measures can be taken to avoid ANR:<br>
●	To avoid ANR, an app should perform a lengthy database or networking operations in separate threads.<br>
●	One technique is to create a child thread to prevent the Android system from concluding a code that has been unresponsive for a long period of time. Most of the actual workings of the codes can be placed within the child thread to ensure that the main thread runs with minimal unresponsive time.<br>
●	For background task-intensive apps, you can alleviate pressure from the UI thread by using the IntentService.<br>
                        </p>
						<p class="qus">15. What is AAPT?</p>
						<p class="ans">AAPT is short for Android Asset Packaging Tool. This tool provides developers with the ability to deal with zip-compatible archives, which includes creating, extracting as well as viewing its contents.
                        </p>
						<p class="qus">16. What are broadcast receivers? How is it implemented?</p>
						<p class="ans">●	Broadcast Receiver is a mechanism using which host application can listen for System level events.<br>
●	Broadcast receiver is used by the application whenever they need to perform the execution based on system events. Like listening for Incoming call, sms etc.<br>
●	Broadcast receivers helps in responding to broadcast messages from other application or from the system.<br>
●	It is used to handle communication between Android operating system and applications.<br> 
It is implemented as a subclass of BroadcastReceiver class and each message is broadcaster as an Intent object.<br>
<ol>
<li>1   public class MyReceiver extends BroadcastReceiver {</li>
<li>2   Public void onReceive(context,intent){}</li>
<li>3   }</li>
</ol>
                        </p>
						<p class="qus">17. How will you pass data to sub-activities?</p>
						<p class="ans">●	We can use Bundles to pass data to sub-activities.<br>
●	There are like HashMaps that and take trivial data types. These Bundles transport information from one Activity to another<br>

<ol>
<li>1   Bundle b=new Bundle();</li>
<li>2   b.putString("Email","abc@xyz.com");</li>
<li>3   i.putExtras(b); // where I is intent</li>
</ol>
                        </p>
						<p class="qus">18. What is the use of WebView in Android?</p>
						<p class="ans">WebView is a view that display web pages inside your application. According to Android, “this class is the basis upon which you can roll your own web browser or simply display some online content within your Activity. It uses the WebKit rendering engine to display web pages and includes methods to navigate forward and backward through a history, zoom in and out, perform text searches and more. In order to add WebView to your application, you have to add <WebView>element to your XML layout file.
                        </p>
						<p class="qus">19. What are the different kinds of context in Android?</p>
						<p class="ans">Context defines the current state of an App. Context provides access to creating new activity instance, access databases, start a service, etc. There is a base class ApplicationContext, and subclasses for components: Activity, Service.
                        </p>
						<p class="qus">20. Explain in brief about the important file and folder when you create a new app?</p>
						<p class="ans">●	App – It describes the fundamental characteristics of the app and defines each of its components.<br>
●	java – This contains the .java source files for your project. By default, it includes an MainActivity.java source file. Under this, you create all the activities which have .java extensions and all the code behind the application. MainActivity.java is the actual file which gets converted to a dalvik executable and runs your app.<br>
●	res – It is a directory for files that define your app’s user interface. You can add TextView, button etc to build the GUI and use its various attributes like android:layout_width, android:layout_height etc which are used to set its width and height. <br>
●	Gradle Scripts – This is an auto-generated file which contains compileSdkVersion, buildToolsVersion, applicationId, minSdkVersion, targetSdkVersion, versionCode and versionName<br>
<img src="<?= base_url(); ?>assets/img/image003.png" style="width:300px;"/>
                        </p>
						<p class="qus">21. What are the different storage methods in Android?</p>
						<p class="ans">Android offers several options to see persistent application data. They are:<br>
●	Shared Preferences – Store private primitive data in key-value pairs<br>
●	Internal Storage – Store private data on the device memory<br>
●	External Storage – Store public data on the shared external storage<br>
●	SQLite Databases – Store structured data in a private database<br>
                         </p>
						 <p class="qus">22. Can you deploy executable JARs on android? Which package is supported by it?</p>
						 <p class="ans">No, Android does not support JAR deployments. Applications are packed into Android Package(.apk) using Android Asset Packaging Tool (APT) and then deployed on to the Android platform.
                         </p>
						 <p class="qus">23. What is a Service? How is it implemented?</p>
						 <p class="ans">A service in android is a background process which is used to perform long-running operations. Let’s say, a service of location is active in the background while the user is in a different application. So it does not disturb the user interaction with an activity. Now, services are classified into two types, namely:<br>
1.	Local: This service is accessed from within the application.<br>
2.	Remote – This service is accessed remotely from other applications running on the same device.<br>
It is implemented as a subclass of Service class as follows :<br>
<ol>
<li>1   public class MyService extends Service {</li>
<li>2   }</li>
</ol>
                         </p>
						 <p class="qus">24. What is a Sticky Intent?</p>
						 <p class="ans">A Sticky Intent is a broadcast from sendStickyBroadcast() method which floats around even after the broadcast, allowing others to collect data from it.
                         </p>
						 <p class="qus">25. Explain Folder, File & Description of Android Apps</p>
						 <p class="ans">●	src: contains the .java source files for your project.<br>
●	gen: contains the .R file, a compiler-generated file that references all the resources found in your project.<br>
●	bin: contains the Android package files .apk built by the ADT during the build process and everything else needed to run an Android application.<br>
●	res/drawable-hdpi: this is a directory for drawable objects that are designed for high-density screens.<br>
●	res/layout: this is a directory for files that define your app’s user interface.<br>
●	res/values: this is a directory for other various XML files that contain a collection of resources, such as strings and colors definitions.<br>
●	AndroidManifest.xml: this is the manifest file which describes the fundamental characteristics of the app and defines each of its components.
                         </p>
						 <p class="qus">26. How does Manifest file plays an integral role in App development?</p>
						 <p class="ans">Manifest file plays an integral role as it provides the essential information about your app to the Android system, which the system must have before it can run any of the app’s code. Manifest file performs various tasks such as:<br>						 
●	It names the Java package for the app as the package name serves as a unique identifier for the application.<br>
●	It protects the application by declaring permissions in order to access protected parts of the API and interact with other applications.<br>
●	Manifest file declares the minimum level of the android API and list the libraries which is linked with the application.<br>
●	Manifest file list the instrumentation classes.  These classes provide profiling and other information as the application runs, but this information is removed as soon the application is publishes. It remains only till the application is in development mode.<br>
Structure of a manifest file: The structure of a manifest file consists of various elements such as action, activity, activity-alias and many more. Refer to the below screenshot which shows the general structure of the manifest file.<br>
                         </p>
						 <p class="qus">27. What is the difference between a fragment and an activity?</p>
						 <p class="ans">Activity is typically a single, focused operation that a user can perform such as dial a number, take a picture, send an email, view a map etc.<br>
Fragment is a modular section of an activity, with its own lifecycle and input events, and which can be added or removed at will. Also, a fragment’s lifecycle is directly affected by its host activity’s lifecycle i.e. when the activity is paused, so are all fragments in it, and when the activity is destroyed, so are all of its fragments.
                         </p>
						 <p class="qus">28. Can you change the name of an application after its deployment?</p>
						 <p class="ans">It is not recommended to change the application after its deployment. This may break some functionality.
                         </p>
						 <p class="qus">29. What database is used in Android? How does it differ from client-server database management systems?</p>
						 <p class="ans">SQLite is the open-source relational database. The SQLite engine is serverless, transactional, and self-contained.<br> 
Instead of the typical client-server relationship of most database management systems, the SQLite engine is integrally linked with the application. The library can also be called dynamically and makes use of simple function calls that reduce latency in database access.
                         </p>
						 <p class="qus">30. What is DDMS?</p>
						 <p class="ans">DDMS stands for Dalvik Debug Monitor Server. It gives the following array of debugging features:<br>
●	Port forwarding services<br>
●	Screen capture on the device<br>
●	Thread and heap information<br>
●	Logcat<br>
●	Incoming call and SMS spoofing<br>
●	Network traffic tracking<br>
●	Location data spoofing
                         </p>
						 <p class="qus">31. What is the difference between Service and Thread?</p>
						 <p class="ans">The latest version is Android 9.0- Android Pie released in August, 2018. Android is a mobile operating system developed by Google. It is based on the Linux kernel and designed primarily for touchscreen mobile devices such as smartphones and tablets. Every other Android version has been named after either sweet or desserts. The following table represents the Android name, version and the year of release.</p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Service</th>
							  <th scope="col">Thread</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td> Service is like an Activity but has no interface.</td>
							  <td>A Thread is a concurrent unit of execution.</td>
							</tr>
							<tr>
							  <td>A Service is not a separate process. It works in background until the service or someone else explicitly stop it.</td>
							  <td>By default, all components of the same application run in the same process and thread (called the “main” thread).</td>
							</tr>
							<tr>
							  <td>Service is not killed when an application is killed.</td>
							  <td>Thread is killed when an Application is killed.</td>
							</tr>
							<tr>
							  <td>It expose some of its functionality to other applications by calling Context.bindService().</td>
							  <td>GOOGLE has brought in Handlers and loopers into android threads.</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">32. What are the containers?</p>
						<p class="ans">Containers, holds objects and widgets together, depending on which specific items are needed and in what particular arrangement that is wanted. Containers may hold labels, fields, buttons, or even child containers, as examples.</p>
						<p class="qus">33. What are some of the disadvantages of Android?</p>
						<p class="ans">Android being an open-source platform, and considering that different Android operating systems have been released on different mobile devices, there’s no clear cut policy to how applications can adapt with various OS versions and upgrades. An app that runs on one version of Android OS may or may not run on another version.<br>
Another disadvantage is that it can be challenging for developers to create apps that can adjust correctly to the right screen size and other varying features and specs of various Android devices.
                        </p>
						<p class="qus">34. What is an Android Runtime?</p>
						<p class="ans">●	Android Runtime consists of Dalvik Virtual machine and Core Java libraries.<br>
●	DVM is optimized for low processing power and low memory environments.<br>
●	Unlike JVM, the Dalvik Virtual Machine doesn’t run .class files, instead it runs .dex files.<br>
●	Android 2.2 “Froyo“ brought trace-based just-in-time (JIT) compilation into Dalvik, optimizing the execution of applications and dynamically compiling frequently executed short segments of their bytecode into native machine code.<br>
<img src="<?= base_url(); ?>assets/img/image005.jpeg" style="width:400px;"/>
                        </p>
						<p class="qus">35. What is the importance of an emulator in Android?</p>
						<p class="ans">●	The emulator lets you play around an interface that acts as if it were an actual device.<br>
●	It let you write and test codes, and even debug.<br>
●	It acts as a safe place for testing codes especially if its in the early design phase.
                        </p>
						<p class="qus">36. Name the four essential states of an activity.</p>
						<p class="ans">The four essential states of activity are:<br>
●	Active – if the activity is at the foreground<br>
●	Paused – if the activity is at the background and still visible<br>
●	Stopped – if the activity is not visible and therefore is hidden or obscured by another activity<br>
●	Destroyed – when the activity process is killed or completed terminated<br>
                        </p>
						<p class="qus">37. What is the difference between a regular bitmap and a nine-patch image?</p>
						<p class="ans">A nine-patch image, unlike bitmap, can be resized and used as background or other image sizes for the target device. The Nine-patch refers to the way you can resize the image: 4 corners that are unscaled, 4 edges that are scaled in 1 axis, and the middle one that can be scaled into both axes. This is what differentiates a nine-patch image from a regular bitmap.
                        </p>
						<p class="qus">38. What are the core building blocks of android?</p>
						<p class="ans">●	Activity : An Activity is the screen representation of any application in Android.  Each activity has a layout file where you can place your UI.<br>
●	Content Provider: Content providers share data between applications.<br>
●	Service: It is a component that runs in the background to perform long-running operations without interacting with the user and it even works if application is destroyed.<br>
●	Broadcast Receivers: It respond to broadcast messages from other applications or from the system itself. These messages are sometime called events or intents.
                        </p>
						<p class="qus">39. What are the dialog boxes that are supported in Android?</p>
						<p class="ans">Android supports four dialog boxes:<br>
●	AlertDialog: An alert dialog box supports zero to three buttons and a list of selectable elements, including checkboxes and radio buttons. Among the other dialog boxes, the most suggested dialog box is the alert dialog box.<br>
●	ProgressDialog: This dialog box displays a progress wheel or a progress bar. It is an extension of AlertDialog and supports adding buttons.<br>
●	DatePickerDialog: This dialog box is used for selecting a date by the user.<br>
●	TimePickerDialog: This dialog box is used for selecting time by the user.
                        </p>
						<p class="qus">40. What does APK stand for?</p>
						<p class="ans">APK stands for Android Packaging Kit. The Android packaging key is compressed with classes, UI’s, supportive assets and manifest. All these files are compressed to a single file which is called APK.
                        </p>
						<p class="qus">41. What is a sticky broadcast? Give an example.</p>
						<p class="ans">A sticky broadcast is used for communicating between applications. These broadcasts happen without the user being notified. The Android OS normally treats each application as if it were a separate user. Here’s an example: When you call registerReceiver() for that action — even with a null BroadcastReceiver — you get the Intent that was last broadcast for that action. Hence, you can use this to find the state of the battery without necessarily registering for all future state changes in the battery.
                        </p>
						<p class="qus">42. What is Dalvik Virtual Machine (DVM)?</p>
						<p class="ans">●	Dalvik is the name of Android’s virtual machine.<br>
●	The Dalvik VM is an interpreter-only virtual machine that executes files in the Dalvik Executable (.dex) format.<br>
●	The virtual machine is register-based and can run classes compiled by Java language compiler that have been altered into its native format using the included ‘dx’ tool.<br>
●	The Dalvik core class library is envisioned to provide a familiar development base for those used to programming with Java Standard Edition, but is geared explicitly for the needs of a small mobile device.
                        </p>
						<p class="qus">43. What are the exceptions in android?</p>
						<p class="ans">●	InflateException: When error conditions occur this exception is thrown.<br>
●	Surface.OutOfResourceException: When a Surface is not created or resized, this exception is thrown.<br>
●	SurfaceHolder.BadSurfaceTypeException: When invoked on a Surface ‘SURFACE_TYPE_PUSH_BUFFERS’, this exception is thrown from lockCanvas() method.<br>
●	WindowManager.BadTokenException: This exception is thrown at the time of trying to view an invalid WindowManager.LayoutParamstoken
                        </p>
						<p class="qus">44. What is a content provider? How is it implemented?</p>
						<p class="ans">●	Content providers manage access to a structured set of data. It is the standard interface that connects data in one process with code running in another process.<br>
●	They encapsulate the data and provide mechanisms for defining data security.<br>
●	Content providers are used to share the data between different applications.<br>
It is implemented as a subclass of ContentProviderclass and must implement a standard set of APIs that enable other applications to perform transactions.
<ol>
<li>1   public class MyContentprovider extends ContentProvider {</li>
<li>2   public void onCreate(){}</li>
<li>3   }</li>
</ol>     
                        </p>
						<p class="qus">45. What is the significance of the .dex files?</p>
						<p class="ans">●	Android programs are compiled into ‘.dex’ (Dalvik Executable) files, which are zipped into a single .apk file on the device.<br>
●	‘.dex’ files can be created by translating compiled applications written in Java.<br>
●	(.dex) is a format that is optimized for effective storage and memory-mappable executions. 
                        </p>
						<p class="qus">46. How are escape characters used as attribute?</p>
						<p class="ans">Escape characters are preceded by double backslashes. For example – a newline character is created using ‘n’. 
                        </p>
						<p class="qus">47. What does ADB stand for?</p>
						<p class="ans">ADB stands for Android Debug Bridge. It is a command line tool that is used to communicate with the emulator instance. ADB can control your device over USB from a computer, copy files back and forth, install and uninstall apps, run shell commands, and more.<br>
It is a client-server program that includes three components:<br>
• Client – which runs on your development machine. You can invoke a client from a shell by issuing an ADB command. Other Android tools such as DDMS also create ADB clients.<br>
• Server, which runs as a background process on your development machine. The server manages communication between the client and the ADB daemon running on an emulator or device.<br>
• Daemon, which runs as a background process on each emulator or device instance.
                        </p>
						<p class="qus">48. Can you list and explain the four Java classes related to using sensors on the Android platform?</p>
						<p class="ans">Sensor Manager: This class provides methods regarding the registration of sensor event listeners, the management of data acquisition, and calibration. It also provides methods for accessing and listing sensors.<br>
Sensor: This class creates an instance of a specific sensor, providing methods that allow you to determine its capabilities.<br>
SensorEvent: This class provides information on a sensor event by creating a sensor event object.<br>
SensorEventListener: This interface provides two callback methods that can receive notifications of sensor events.
                        </p>
						<p class="qus">49. What is Orientation in android? How is it done?</p>
						<p class="ans">Orientation helps to represent the layout in a row or column. <br>
Syntax:<br>
<ol>
<li>1	<activity android name=".activity" android: screenOrientation="portrait"></li>
</ol>  
                        </p>
						<p class="qus">50. What is AIDL? What are the datatypes supported by AIDL ?</p>
						<p class="ans">AIDL stands for Android Interface Definition Language.<br>
– It handles the interface requirements between a client and a service to communicate at the same level through interprocess communication.<br>
– The process involves breaking down objects into primitives that are Android understandable.<br>
Data Types:<br>
<ol>
<li>●	String</li>
<li>●	List</li>
<li>●	Map</li>
<li>●	CharSequence</li>
<li>●	Native Java data types (int, long, char and Boolean)</li>
</ol>
                        </p>
						<p class="qus">51. For starters, what’s Android anyway? </p>
						<p class="ans">Android is a Linux-based, open-sourced operating system commonly found on mobile devices, such as smartphones and tablets. It’s a kernel-based system that gives developers the flexibility to design and deploy simple and/or advanced apps.
                        </p>
						<p class="qus">52. Name the basic tools for developing an Android App</p>
						<p class="ans">The tools used for development are:<br>
<ol>
<li>●	JDK</li>
<li>●	SDK Tools</li>
<li>●	Eclipse+ADT Plugin</li>
<li>●	Eclipse+ADT Plugin</li>
</ol>
                        </p>
						<p class="qus">53. List of Android’s advantages.</p>
						<p class="ans">The four main advantages of Linux are:<br>
<ol>
<li>●	Open source, so it’s free</li>
<li>●	It’s platform-independent, so it supports Windows, Linux, and Mac</li>
<li>●	It supports a number of different technologies, such as Bluetooth, speech, cameras, Wi-Fi, etc.</li>
<li>●	It employs DVM (Dalvik Virtual Machine), a highly optimized virtual machine</li>
</ol>
                        </p>
						<p class="qus">54. What’s the difference between mobile testing and mobile application testing?</p>
						<p class="ans">Mobile Testing is performed on the mobile device itself, specifically on the device’s features like Contacts, SMS, the browsers, and it’s Calling function. Mobile Application Testing tests the features and functions of the apps loaded onto a mobile device.
                        </p>
						<p class="qus">55. What’s a “bundle” in Android?</p>
						<p class="ans">Bundles are used to pass the required data to sub-folders.
                        </p>
						<p class="qus">56. How do you identify view elements in an android program?</p>
						<p class="ans">Use the keyword findViewById.
                        </p>
						<p class="qus">57. Does Android have any drawbacks?</p>
						<p class="ans">Android’s weaknesses stem from one of its advantages, namely that it’s everywhere and can run on a huge number of devices.<br>
<ol>						
<li>●	First of all, developers can encounter difficulty in creating apps that easily adjust the display to accommodate the widely disparate screen sizes of all these different devices.</li>
<li>●	Secondly, the large number of devices has given rise to a large number of custom-made Android versions to suit them, thus there is no central set of policies governing upgrades, or parameters for running on many operating systems.</li>
</ol>
                        </p>
						<p class="qus">58. How do you place layouts in Android? Where are they placed?</p>
						<p class="ans">They’re placed as XML files, in the layout folder.
                        </p>
						<p class="qus">59. An Android application keeps crashing. How do you resolve the issue?</p>
						<p class="ans">When an application crashes often, these are the best ways to fix it -<br>
<ol>
<li>1.	It could be a memory space issue. Make sure there’s enough memory space.</li>
<li>2.	Clear the app data by clearing the cache memory using “settings” under Application Manager.</li>
<li>3.	Not all apps run the same on assorted machines, so you may have to tinker with memory management.</li>
<li>4.	It may be a matter of compatibility; a problem that can be headed off by testing the app on as many of your devices as possible beforehand.</li>
</ol>
                        </p>
						<p class="qus">60. Provide the important core components of Android.</p>
						<p class="ans">The core components of Android operating systems are:<br>
<ol>
<li>●	Activity</li>
<li>●	Intents</li>
<li>●	Services</li>
<li>●	Content Provider</li>
<li>●	Fragment</li>
</ol>
                        </p>
						<p class="qus">61. What is the importance of setting up permission in app development?</p>
						<p class="ans"> Once the permissions are set for the app development, then the data and code are restricted to the authorized users only.<br>
If the code is kept without any restriction or if it is accessible to anyone then there are chances of compromise of code which results in defect leakage.
                        </p>
						<p class="qus">62. What is .apk extension in Android?</p>
						<p class="ans"> It is a default file format that is used by the Android Operating System. Application Package Kit (APK) is used for the installation of mobile apps. The .apk contains resource file, certificate, manifest file, and other code.<br>
APK files are archive files in the zip format with .apk extension.
                        </p>
						<p class="qus">63. What is ActivityCreator?</p>
						<p class="ans"> ActivityCreator is a batch file and shell script which was used to create a new Android project. It is now replaced by the “Create New Project” in Android SDK.
                        </p>
						<p class="qus">64. What is Orientation?</p>
						<p class="ans"> Orientation is the key feature in Smartphones nowadays. It has the ability to rotate the screen between Horizontal or Vertical mode.<br>
Android supports two types of screen Orientations as mentioned below:<br>
●	Portrait: When your device is vertically aligned.<br>
●	Landscape: When your device is horizontally aligned.<br>
setOrientation() is a method using which you can set a screen alignments. HORIZONTAL and VERTICAL are two values that can be set in the setOrientation() method. Whenever there is a change in the display orientation i.e. from Horizontal to Vertical or vice versa then onCreate() method of the Activity gets fired.<br>
Basically, when the orientation of the Android mobile device gets changed then the current activity gets destroyed and then the same activity is recreated in the new display orientation. Android developers define the orientation in the AndroidManifest.xml file.
                        </p>
						<p class="qus">65. What all devices have you worked on?</p>
						<p class="ans">There are many mobile devices available in the market with different operating systems.<br>
Specifically, I have worked on Android, Windows, Symbian, iPhone, etc
                        </p>
						<p class="qus">66. Name the mobile automation tools that are available in the market.</p>
						<p class="ans">There are quite a few mobile automation testing tools that are available in the market but these are used only if the project requires it and if the application supports the automation.<br>
These tools are paid as well as free tools, hence analysis needs to be done within the project team and then the appropriate mobile automation tool needs to be selected. Silk Mobile, SeeTest, Ranorex are the paid mobile automation tool while Appium, KIF, Robotium, Calabash are few free tools.
                        </p>
						<p class="qus">67. How do you troubleshoot the android application which is crashing frequently?</p>
						<p class="ans">Given below are the few steps that we need to follow while troubleshooting the crashing issue:<br>
<ol>						
<li>●	Free up memory space: There is only limited space available on mobile devices for mobile apps. To avoid crashing issues or memory-related issues, you need to first check the memory space.</li>
<li>●	Clear app data usage: You can clear the app data using the Application Manager under “Settings”. This will clear the cache memory and allow some free space to install another app or it will boost up your current app.</li>
<li>●	Memory Management: Some apps run perfectly on one type of mobile device but the same app may not work on another type of device as for such devices the processing power, memory management, and CPU speed is different. For any app to run properly on any type of mobile device, you should manage the memory on the device.</li>
<li>●	Compatibility issue: It is always not possible to test mobile apps on all mobile devices, browsers, operating systems, etc. So you need to test your mobile app on as many mobile devices as you can in order to avoid any compatibility issue.</li>
</ol>
                        </p>
						<p class="qus">68. Explain Sensors in Android.</p>
						<p class="ans">Android-enabled devices have built-in sensors that measure orientation, motion, and other conditions.
These sensors provide data with high accuracy, which will help to monitor the positioning and movement of the device. Some of the sensors are hardware-based and few are software-based.<br>
There are three categories of sensors as mentioned below:<br>
●	Motion Sensors: These sensors measure the rotational & acceleration forces and it includes gravity sensors, rotational vector sensors, accelerometers, etc.<br>
●	Environmental Sensors: It measures air temperature, pressure, humidity, etc.<br>
●	Position Sensors: It measures the physical position of the device and includes orientation sensors and magnetometers.<br>
There are four types of Java Classes as shown below:<br>
<ol>
<li>●	Sensor Manager</li>
<li>●	Sensor</li>
<li>●	SensorEvent</li>
<li>●	SensorEventListener</li>
</ol>
                        </p>
						<p class="qus">69. Explain the Android Interface Definition Language.</p>
						<p class="ans">Android Interface Definition Language or AIDL facilitates the communication between the client and service. For the procedure of communication between processes, the data is split into small portions which are easily recognized by the Android platform.
                        </p>
						<p class="qus">70. What is an “Emulator”?</p>
						<p class="ans">An "Emulator" in Android helps the developers play around with an interface that acts as a real mobile device. This way, it becomes easier for the developers to write and test different codes for the application. The process of debugging also becomes possible through emulators. Thus, emulators provide a safe platform for testing codes in their early phases as well as in the later stage when the bugs need to be dealt with.
                        </p>
						<p class="qus">71. What is an API in Android?</p>
						<p class="ans">An Application Programming Interface (API) is simply a set of specifications or rules that determine how software components can interact with each other. Companies that release an API do so to let developers design products around the services it provides.
                        </p>
						<p class="qus">72. Name some testing scenarios for real devices, not on emulators.</p>
						<p class="ans">Emulators are devices that are used to perform tasks comparable to that of real Android devices, and are used to decrease the cost of testing.<br>
But some scenarios can only be performed on real devices. These scenarios include:<br>
<ol>
<li>●	Messaging</li>
<li>●	Bluetooth</li>
<li>●	Mounting and unmounting the memory card</li>
<li>●	Validation of battery scenarios</li>
<li>●	Memory related issues</li>
<li>●	Validation of the performance</li>
</ol>
                        </p>
						<p class="qus">73. State the architecture of an Android application.</p>
						<p class="ans">Any Android application has the following components:<br>
<ol>
<li>●	Notification: Offers features such as light, sound, icons, etc.</li>
<li>●	Services: Performs background functionalities</li>
<li>●	Intent: Performs inter-connection between activities and mechanisms that pass on data</li>
<li>●	Validation of battery scenarios</li>
<li>●	Resource Externalization: Offers features such as strings and graphics</li>
<li>●	Content Providers: Shares data between applications</li>
</ol>
                        </p>
						<p class="qus">74. What is the use of XML-based layouts?</p>
						<p class="ans">The XML-based layouts help inconsistent and standard format for setting up of GUI definition format. The layout details are placed in XML files, and the other items are put in source files.
                        </p>
						<p class="qus">75. Explain what containers are in the Android system.</p>
						<p class="ans">The containers in the Android system help hold objects and widgets together so that the specific items and arrangements can be fulfilled. These containers include labels, buttons, fields, etc.
                        </p>
						<p class="qus">76. Are there any critical loops while monitoring an activity?</p>
						<p class="ans">Yes, there are three key loops when monitoring an activity. These are:<br>
<ol>
<li>●	Loop 1, Entire Lifetime: The activity happens between onCreate and onDestroy.</li>
<li>●	Loop 2, Visible Lifetime: The activity happens between onStart and onStop</li>
<li>●	Loop 3, Foreground Lifetime: The activity happens between onResume and onPause</li>
</ol>
                        </p>
						<p class="qus">77. What are the possible states in which a process is based?</p>
						<p class="ans">The possible states in which a process is based include the following:<br>
<ol>
<li>●	State 1: Foreground activity</li>
<li>●	State 2: Visible activity</li>
<li>●	State 3: Background activity</li>
<li>●	State 4: Empty activity</li>
</ol>
                        </p>
						<p class="qus">78. Can we prevent ANR in the Android system?</p>
						<p class="ans">Yes, we can prevent ANR in the Android system. ANR hinders the Android system from ending code that has been responsive for a long time. The prevention can be made by creating a child thread wherein most of the actual workings of the codes can be applied, and the minimum period of unresponsive times can be revealed.
                        </p>
						<p class="qus">79. What are Default Resources? How are they useful?</p>
						<p class="ans">The default resources include the default strings and files. Their absence will result in creating errors on the screen and could also hinder the running of the downloaded application. They are useful as they are placed as subdirectories under the project directory, which supports the running of the downloaded application.
                        </p>
						<p class="qus">80. What is a Fragment in Android?</p>
						<p class="ans">A Fragment in the Android system is a part of the activity, which is modular in a sense. They can move around and could even combine with other fragments to form a single activity. Fragments are reusable.
                        </p>
						<p class="qus">81. Who is the founder of Android?</p>
						<p class="ans">Andy Rubin.
                        </p>
						<p class="qus">82. What are the code names of android?</p>
						<p class="ans">
<ol>
<li>1.	Aestro</li>
<li>2.	Blender</li>
<li>3.	Cupcake</li>
<li>4.	Donut</li>
<li>5.	Eclair</li>
<li>6.	Froyo</li>
<li>7.	Gingerbread</li>
<li>8.	Honeycomb</li>
<li>9.	Ice Cream Sandwich</li>
<li>10.	Jelly Bean</li>
<li>11.	KitKat</li>
<li>12.	Lollipop</li>
<li>13.	Marshmallow</li>
</ol>
                        </p>
						<p class="qus">83. What is the use of LINUX ID in android?</p>
						<p class="ans">A unique Linux ID is assigned to each application in android. It is used for the tracking of a process.
                        </p>
						<p class="qus">84. How to call another activity in android?</p>
						<p class="ans">1.	Intent i = new Intent(getApplicationContext(), ActivityTwo.class);<br>  
2.	startActivity(i);  

                        </p>
						<p class="qus">85. What is NDK?</p>
						<p class="ans">NDK stands for Native Development Kit. By using NDK, you can develop a part of an app using native language such as C/C++ to boost the performance.
                        </p>
						<p class="qus">86. What is the Adapter in Android?</p>
						<p class="ans">An adapter is used to create a child view to present the parent view items
                        </p>
						<p class="qus">87. What is ADT in Android?</p>
						<p class="ans">ADT stands for Android Development Tool. It is used to develop the applications and test the applications.
                        </p>
						<p class="qus">88. Which kernel is used in Android?</p>
						<p class="ans">Android is a customized Linux 3.6 kernel.
                        </p>
						<p class="qus">89. What is application Widgets in Android?</p>
						<p class="ans">Application widgets are miniature application views that can be embedded in other applications and receive periodic updates.
                        </p>
						<p class="qus">90. Which types of flags are used to run an application on Android?</p>
						<p class="ans">Following are two types of flags to run an application in Android:<br>
<ol>						
<li>●	FLAG_ACTIVITY_NEW_TASK</li>
<li>●	FLAG_ACTIVITY_CLEAR_TOP</li>
</ol>
                        </p>
						<p class="qus">91. What is a singleton class in Android?</p>
						<p class="ans">A singleton class is a class which can create only an object that can be shared by all other classes.
                        </p>
						<p class="qus">92. What is sleep mode in Android?</p>
						<p class="ans">In sleep mode, CPU is slept and doesn't accept any commands from android device except Radio interface layer and alarm.
                        </p>
						<p class="qus">93. What do you mean by a drawable folder in Android?</p>
						<p class="ans">In Android, a drawable folder is compiled a visual resource that can use as a background, banners, icons, splash screen, etc.
                        </p>
						<p class="qus">94. What is a portable wi-fi hotspot?</p>
						<p class="ans">The portable wi-fi hotspot is used to share internet connection to other wireless devices.
                        </p>
						<p class="qus">95. How are escape characters used as attribute?</p>
						<p class="ans">Escape characters are preceded by double backslashes. For example, a newline character is created using ‘\\n’
                        </p>
						<p class="qus">96. When is the onStop() method invoked?</p>
						<p class="ans">A call to onStop method happens when an activity is no longer visible to the user, either because another activity has taken over or if in front of that activity.
                        </p>
						<p class="qus">97. Is there a case wherein other qualifiers in multiple resources take precedence over locale?</p>
						<p class="ans">Yes, there are actually instances wherein some qualifiers can take precedence over locale. There are two known exceptions, which are the MCC (mobile country code) and MNC (mobile network code) qualifiers.
                        </p>
						<p class="qus">98. What is the importance of Default Resources?</p>
						<p class="ans">When default resources, which contain default strings and files, are not present, an error will occur and the app will not run. Resources are placed in specially named subdirectories under the project res/ directory.
                        </p>
						<p class="qus">99. What is a visible activity?</p>
						<p class="ans">A visible activity is one that sits behind a foreground dialog. It is actually visible to the user, but not necessarily being in the foreground itself.
                        </p>
						<p class="qus">100. When is the best time to kill a foreground activity?</p>
						<p class="ans">The foreground activity, being the most important among the other states, is only killed or terminated as a last resort, especially if it is already consuming too much memory. When a memory paging state has been reach by a foreground activity, then it is killed so that the user interface can retain its responsiveness to the user.
                        </p>
						<p class="qus">101. Is it possible to use or add a fragment without using a user interface?</p>
						<p class="ans">Yes, it is possible to do that, such as when you want to create a background behavior for a particular activity. You can do this by using add(Fragment,string) method to add a fragment from the activity.
                        </p>
						<p class="qus">102. How do you remove icons and widgets from the main screen of the Android device?</p>
						<p class="ans">To remove an icon or shortcut, press and hold that icon. You then drag it downwards to the lower part of the screen where a remove button appears.
                        </p>
						<p class="qus">103. What is an action?</p>
						<p class="ans">In Android development, an action is what the intent sender wants to do or expected to get as a response. Most application functionality is based on the intended action.
                        </p>
						<p class="qus">104. What is the difference between Serializable and Parcelable? Which is the best approach in Android?</p>
						<p class="ans">While developing applications usually it needs to transfer data from one activity to another. This data needs to be added into a corresponding intent object. Some additional actions are required to make the data suitable for transfer. For doing that the object should be either serializable or parcelable.<br>
Serializable:<br>
●	Serializable is a standard Java interface. In this approach, you simply mark a class Serializable by implementing the interface and java will automatically serialize it.<br>
●	Reflection is used during the process and many additional objects are created. This leads to plenty of garbage collection and poor performance.<br>
Parcelable:<br>
●	Parcelable is an Android-specific interface. In this approach, you implement the serialization yourself.<br>
●	Reflection is not used during this process and hence no garbage is created.<br>
●	Parcelable is far more efficient than Serializable since it gets around some problems with the default Java serialization scheme. Also, it is faster because it is optimized for usage on the development of Android, and shows better results.
                        </p>
						<p class="qus">105. What is the significance of the .dex file?</p>
						<p class="ans">Android programs are compiled into a .dex file (Dalvik Executable file) by DVM, which are then zipped into a .apk file on the device. .dex files are created by translating compiled applications written in java. .dex is a format that is optimized for effective storage and memory-mappable executions.
                        </p>
						<p class="qus">106. What is the difference between compileSdkVersion and targetSdkVersion?</p>
						<p class="ans">compileSdkVersion:<br>
●	The compileSdkVersion is the version of API the application is compiled against. You can use Android API features involved in that version of the API (as well as all previous versions).<br>
●	For example, if you try and use API 15 features but set compileSdkVersion to 14, you will get a compilation error. If you set compileSdkVersion to 15 you can still run the app on an API 14 device as long as your app’s execution paths do not attempt to invoke any APIs specific to API 15.<br>
targetSdkVersion:<br>
●	The targetSdkVersion indicates that you have tested your app on (presumably up to and including) the version you specify. This is like a certification or sign-off you are giving the Android OS as a hint to how it should handle your application in terms of OS features.<br>
●	For example, setting the targetSdkVersion value to “11” or higher permits the system to apply a new default theme (Holo) to the application when running on Android 3.0 or higher. It also disables screen compatibility mode when running on larger screens (because support for API level 11 implicitly supports larger screens).<br>
                        </p>
						<p class="qus">107. What is JobScheduler?</p>
						<p class="ans">The JobSchedular API is used for scheduling different types of jobs against the framework that will be executed in your app’s own process. This allows your application to perform the given task while being considerate of the device’s battery at the cost of timing control.<br>
The JobScheduler supports batch scheduling of jobs. The Android system can combine jobs for reducing battery consumption. JobManager automatically handles the network unreliability so it makes handling uploads easier.<br>
Here is some example of the situation where you would use this job scheduler:<br>
<ol>
<li>●	Tasks that should be done when the device is connected to a power supply.</li>
<li>●	Tasks that require a Wi-Fi connection or network access.</li>
<li>●	Tasks that should run on a regular basis as batch where the timing is not critical.</li>
<ol>
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