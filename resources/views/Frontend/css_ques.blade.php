@extends('Frontend.layouts.app')
@section('content')

	<section class="job-categories">
		<div class="auto-container">
			<div class="sec-title text-center">
				<h2>Css Interview Questions and Answers</h2>
				
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




			<h3 class="h3">1) What is CSS?</h3>
			<p>CSS stands for Cascading Style Sheet. It is a popular styling language which is used with HTML to design websites. It can also be used with any XML documents including plain XML, SVG, and XUL.<a href="what-is-css" target="_blank">  </a></p>
			<hr/>
			<h3 class="h3">2) What is the origin of CSS?</h3>
			<p>SGML (Standard Generalized Markup Language) is the origin of CSS. It is a language that defines markup languages. </p>
			<hr/>
			<h3 class="h3">3) What are the different variations of CSS?</h3>
			<p>Following are the different variations of CSS:</p>
			<ul class="points">
			<li>CSS1</li>
			<li>CSS2</li>
			<li>CSS2.1</li>
			<li>CSS3</li>
			<li>CSS4</li>
			</ul>
			<hr/>
			<h3 class="h3">4) How can you integrate CSS on a web page?</h3>
			<p>There are three methods to integrate CSS on web pages.</p>
			<ol class="points">
			<li>Inline method - It is used to insert style sheets in HTML document</li>
			<li>Embedded/Internal method - It is used to add a unique style to a single document</li>
			<li>Linked/Imported/External method - It is used when you want to make changes on multiple pages.</li>
			</ol>
			<a href="how-to-add-css" target="_blank">  </a>
			<hr/>
			<h3 class="h3">5) What are the advantages of CSS?</h3>
			<ul class="points">
			<li>Bandwidth</li>
			<li>Site-wide consistency</li>
			<li>Page reformatting</li>
			<li>Accessibility</li>
			<li>Content separated from presentation</li>
			</ul>
			<hr/>
			 
			<h3 class="h3">6) What are the limitations of CSS?</h3>
			<ul class="points">
			<li>Ascending by selectors is not possible</li>
			<li>Limitations of vertical control</li>
			<li>No expressions</li>
			<li>No column declaration</li>
			<li>Pseudo-class not controlled by dynamic behavior</li>
			<li>Rules, styles, targeting specific text not possible</li>
			</ul>
			<hr/>
			<h3 class="h3">7) What are the CSS frameworks?</h3>
			<p>CSS frameworks are the preplanned libraries which make easy and more standard compliant web page styling. The frequently used CSS frameworks are: -</p>
			<ul class="points">
			<li>Bootstrap</li>
			<li>Foundation</li>
			<li>Semantic UI</li>
			<li>Gumby</li>
			<li>Ulkit</li>
			</ul>
			<hr/>
			<h3 class="h3">8) Why background and color are the separate properties if they should always be set together?</h3>
			<p>There are two reasons behind this:</p>
			<ul class="points">
			<li>It enhances the legibility of style sheets. The background property is a complex property in CSS, and if it is combined with color, the complexity will further increase. </li>
			<li>Color is an inherited property while the background is not. So this can make confusion further.</li>
			</ul>
			<hr/>
			<h3 class="h3">9) What is Embedded Style Sheet?</h3>
			<p>An Embedded style sheet is a CSS style specification method used with HTML. You can embed the entire stylesheet in an HTML document by using the STYLE element. <a href="internal-css" target="_blank">  </a></p>
			<div class="codeblock"><textarea name="code" class="xml">
			 &lt;style&gt;  
			body {  
				background-color: linen;  
			}  
			h1 {  
				color: red;  
				margin-left: 80px;  
			}   
			&lt;/style&gt;  
				 </textarea></div>
			<hr/>
			<h3 class="h3">10) What are the advantages of Embedded Style Sheets?</h3>
			<ul class="points">
			<li>You can create classes for use on multiple tag types in the document.</li>
			<li>You can use selector and grouping methods to apply styles in complex situations.</li>
			<li>No extra download is required to import the information.</li>
			</ul>
			<hr/>
			<h3 class="h3">11) What is a CSS selector?</h3>
			<p>It is a string that identifies the elements to which a particular declaration apply. It is also referred as a link between the HTML document and the style sheet. It is equivalent of HTML elements. There are several different types of selectors in CSS: - </p>
			<ul class="points">
			<li>CSS Element Selector</li>
			<li>CSS Id Selector</li>
			<li>CSS Class Selector</li>
			<li>CSS Universal Selector</li>
			<li>CSS Group Selector</li>
			</ul>
			<a href="css-selector" target="_blank">  </a>
			<hr/>
			<h3 class="h3">12) Name some CSS style components.</h3>
			<p>Some CSS Style components are:</p>
			<ul class="points">
			<li>Selector</li>
			<li>Property</li>
			<li>Value</li>
			</ul>
			<hr/>
			<h3 class="h3">13) What is the use of CSS Opacity?</h3>
			<p>The CSS opacity property is used to specify the transparency of an element. In simple word, you can say that it specifies the clarity of the image.
			In technical terms, Opacity is defined as the degree to which light is allowed to travel through an object. For example:</p>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;style&gt;  
			img.trans {  
				opacity: 0.4;  
				filter: alpha(opacity=40); /* For IE8 and earlier */  
			}  
			&lt;/style&gt; 
			</textarea></div>
			<hr/>
			<h3 class="h3">14) Explain universal selector.</h3>
			<p>The universal selector matches the name of any of the element type instead of selecting elements of a specific type.</p>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;style&gt;  
			* {  
			   color: green;  
			   font-size: 20px;  
			}   
			&lt;/style&gt;  
			  </textarea></div>
			<hr/>
			<h3 class="h3">15) Which command is used for the selection of all the elements of a paragraph?</h3>
			<p>The p[lang] command is used for selecting all the elements of a paragraph.</p>
			<hr/>
			<h3 class="h3">16) What is the use of % unit? </h3>
			<p>It is used for defining percentage values.</p>
			<hr/>
			<h3 class="h3">17) Name the property used to specify the background color of an element.</h3>
			<p>The background-color property is used to specify the background color of the element. For example: </p>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;style&gt;  
			h2,p{  
				background-color: #b0d4de;  
			}  
			&lt;/style&gt;
			 </textarea></div>
			<hr/>
			<h3 class="h3">18) Name the property for controlling the image repetition of the background.</h3>
			<p>The background-repeat property repeats the background image horizontally and vertically. Some images are repeated only horizontally or vertically. </p>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;style&gt;  
			body {  
			background-image: url("paper1.gif");  
			margin-left:100px;  
			}  
			&lt;/style&gt;
			 </textarea></div>
			<hr/>
			<h3 class="h3">19) Name the property for controlling the image position in the background.</h3>
			<p> The background-position property is used to define the initial position of the background image. By default, the background image is placed on the top-left of the webpage. </p>
			<p>You can set the following positions:</p>
			<ol class="points">
			<li>center</li>
			<li>top</li>
			<li>bottom</li>
			<li>left</li>
			<li>right</li>
			</ol>
			<div class="codeblock"><textarea name="code" class="xml">
			background: white url('good-morning.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center; 
			</textarea></div>
			<hr/>
			<h3 class="h3">20) Name the property for controlling the image scroll in the background. </h3>
			<p>The background-attachment property is used to specify if the background image is fixed or scroll with the rest of the page in the browser window. If you set fixed the background image, then the image not move during scrolling in the browser. Let's take an example with the fixed background image. </p>
			<div class="codeblock"><textarea name="code" class="xml">
			background: white url('bbb.gif');
			background-repeat: no-repeat;
			background-attachment: fixed;
			</textarea></div>
			<hr/>
			<h3 class="h3">21) What is the use of ruleset?</h3>
			<p>The ruleset is used to identify that selectors can be attached with other selectors. It has two parts:</p>
			<ul class="points">
			<li>Selector - Selector indicates the HTML element you want to style. </li>
			<li>Declaration Block - The declaration block can contain one or more declarations separated by a semicolon.</li>
			</ul>
			<img src="https://static.javatpoint.com/csspages/images/css-syntax.png" alt="CSS syntax" />
			<hr/>
			<h3 class="h3">22) What is the difference between class selectors and id selectors?</h3>
			<p>An overall block is given to class selector while id selectors take only a single element differing from other elements.</p>
			<h4 class="h4">CSS Class Selector</h4>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;style&gt;  
			.center {  
				text-align: center;  
				color: blue;  
			}  
			&lt;/style&gt;
			 </textarea></div>
			<h4 class="h4">CSS Id Selector</h4>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;style&gt;  
			#para1 {  
				text-align: center;  
				color: blue;  
			}  
			&lt;/style&gt;  
			 </textarea></div>
			<p> <a href="css-selector" target="_blank">  </a></p>
			<hr/>
			<h3 class="h3">23) What are the advantages of External Style Sheets?</h3>
			<ul class="points">
			<li>You can create classes for reusing it in many documents.</li>
			<li>By using it, you can control the styles of multiple documents from one file. </li>
			<li>In complex situations, you can use selectors and grouping methods to apply styles. </li>
			</ul>
			<a href="external-css" target="_blank">  </a>
			<hr/>
			<h3 class="h3">24) What is the difference between inline, embedded and external style sheets?</h3>
			<p><strong>Inline</strong>: Inline Style Sheet is used to style only a small piece of code. </p>
			<h4 class="h4">Syntax</h4>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;htmltag style="cssproperty1:value; cssproperty2:value;"&gt; &lt;/htmltag&gt;   
				 </textarea></div>
			<p><strong>Embedded</strong>: Embedded style sheets are put between the &lt;head&gt; &lt;/head&gt; tags.</p>
			<h4 class="h4">Syntax</h4>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;style&gt;  
			body {  
				background-color: linen;  
			}  
			h1 {  
				color: red;  
				margin-left: 80px;  
			}   
			&lt;/style&gt;  
				 </textarea></div>
			<p><strong>External</strong>: This is used to apply the style to all the pages within your website by changing just one style sheet. </p>
			<h4 class="h4">Syntax</h4>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;head&gt;  
			&lt;link rel="stylesheet" type="text/css" href="mystyle.css"&gt;  
			&lt;/head&gt;  
				 </textarea></div>
			<hr/>
			<h3 class="h3">25) What is RWD?</h3>
			<p>RWD stands for Responsive Web Design. This technique is used to display the designed page perfectly on every screen size and device, for example, mobile, tablet, desktop and laptop. You don't need to create a different page for each device. </p>
			<hr/>
			<h3 class="h3">26) What are the benefits of CSS sprites?</h3>
			<p> If a web page has a large number of images that take a longer time to load because each image separately sends out an HTTP request. The concept of CSS sprites is used to reduce the loading time for a web page because it combines the various small images into one image. It reduces the number of HTTP requests and hence the loading time. </p>
			<hr/>
			<h3 class="h3">27) What is the difference between logical tags and physical tags?</h3>
			<ul class="points">
			<li>Physical tags are referred to as presentational markup while logical tags are useless for appearances.</li>
			<li>Physical tags are newer versions, on the other hand, logical tags are old and concentrate on content. </li>
			</ul>
			<hr/>
			<h3 class="h3">28) What is the CSS Box model and what are its elements?</h3>
			<p>The CSS box model is used to define the design and layout of elements of CSS. </p>
			<p>The elements are:</p>
			<ul class="points">
			<li>Margin - It removes the area around the border. It is transparent.</li>
			<li>Border - It represents the area around the padding</li>
			<li>Padding - It removes the area around the content. It is transparent.</li>
			<li>Content - It represents the content like text, images, etc.</li>
			</ul>
			<img src="https://static.javatpoint.com/interview/images/css-box-model.png" alt="CSS Box Model" />
			<hr/>
			<h3 class="h3">29) What is the float property of CSS?</h3>
			<p>The CSS float property is used to move the image to the right or left along with the texts to be wrapped around it. It doesn't change the property of the elements used before it.</p>
			<p>To understand its purpose and origin, let's take a look at its print display. In the print display, an image is set into the page such that text wraps around it as needed. </p>
			<img src="https://static.javatpoint.com/csspages/images/css-float-print.png" alt="CSS Float Print Layout" />
			<p>Its web layout is also just similar to print layout.</p>
			<img src="https://static.javatpoint.com/csspages/images/css-float-web.png" alt="CSS Float Web Layout" /><br>
			<a href="css-float" target="_blank">  </a>
			<hr/>
			<h3 class="h3">30) How to restore the default property value using CSS?</h3>
			<p>In short, there is no easy way to restore to default values to whatever a browser uses.</p>
			<p>The closest option is to use the 'initial' property value, which restores the default CSS values, rather than the browser's default styles.</p>
			<hr/>
			<h3 class="h3">31) What is the purpose of the z-index and how is it used?</h3>
			<p>The z-index helps to specify the stack order of positioned elements that may overlap one another. The z-index default value is zero and can take on either a positive or negative number.</p>
			<p>An element with a higher z-index is always stacked above than a lower index.</p>
			<p>Z-Index can take the following values:</p>
			<ul class="points">
			<li><strong>Auto:</strong> Sets the stack order equal to its parents.</li>
			<li><strong>Number:</strong> Orders the stack order.</li>
			<li><strong>Initial:</strong> Sets this property to its default value (0).</li>
			<li><strong>Inherit:</strong> Inherits this property from its parent element.</li>
			</ul>
			<hr/>
			<h3 class="h3">32) Explain the difference between visibility: hidden and display: none?</h3>
			<p><strong>visibility: hidden</strong> hides the element, but it occupies space and affects the layout of the document.</p>
			<div class="codeblock"><textarea name="code" class="xml">
			 &lt;!DOCTYPE html&gt;
			&lt;html&gt;
			&lt;head&gt;
			&lt;style&gt;
			h1.vis {
				visibility: visible;
			}
			
			h1.hid {
				visibility: hidden;
			}
			&lt;/style&gt;
			&lt;/head&gt;
			&lt;body&gt;
			&lt;h1 class="vis"&gt;It is visible&lt;/h1&gt;
			&lt;h1 class="hid"&gt;It is hidden&lt;/h1&gt;
			
			&lt;p&gt;Note - Second heading is hidden, but it still occupy space.&lt;/p&gt;
			&lt;/body&gt;
			&lt;/html&gt;
				 </textarea></div>
			<p><strong>display: none</strong> also hides the element but not occupy space. It will not affect the layout of the document.</p>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;!DOCTYPE html&gt;
			&lt;html&gt;
			&lt;head&gt;
			&lt;style&gt;
			h1.vis {
				display: block;
			}
			
			h1.hid {
				 display: none;
			}
			&lt;/style&gt;
			&lt;/head&gt;
			&lt;body&gt;
			&lt;h1 class="vis"&gt;It is visible&lt;/h1&gt;
			&lt;h1 class="hid"&gt;It is hidden&lt;/h1&gt;
			
			&lt;p&gt;Note - Second heading is hidden and not occupy space.&lt;/p&gt;
			&lt;/body&gt;
			&lt;/html&gt;
			 </textarea></div>
			<hr/>
			<h3 class="h3">33) What do you understand by W3C?</h3>
			<p>W3C stands for World Wide Web Consortium. Its purpose is to deliver the information of the World Wide Web. It also develops rules and guidelines for the Web.</p>
			<hr/>
			<h3 class="h3">34) What is tweening?</h3>
			<p>It is the process of generating intermediate frames between two images. </p>
			<p>It gives the impression that the first image has smoothly evolved into the second one. </p>
			<p>It is an important method used in all types of animations. </p>
			<p>In CSS3, Transforms (matrix, translate, rotate, scale) module can be used to achieve tweening.</p>
			<hr/>
			<h3 class="h3">35) What is the difference between CSS2 and CSS3?</h3>
			<p>The main difference between CSS2 and CSS3 is that CSS3 is divided into different sections which are also known as modules. Unlike CSS2, CSS3 modules are supported by many browsers.</p>
			<p> Apart from that, CSS3 contains new General Sibling Combinators which is responsible for matching the sibling elements with the given elements.</p>
			<br/>








			


	</section>
	
	@endsection
	