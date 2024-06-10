@extends('Frontend.layouts.app')
@section('content')

	<section class="job-categories">
		<div class="auto-container">
			<div class="sec-title text-center">
				<h2>Html Interview Questions and Answers</h2>
				
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



			<h3 class="h3">1) What is HTML?</h3>
			<p>HTML stands for Hyper Text Markup Language. It is a language of World Wide Web. It is a standard text formatting language which is used to create and display pages on the Web. It makes the text more interactive and dynamic. It can turn text into images, tables, links.<a href="what-is-html" target="_blank">  .</a></p>
			<hr/>
			<h3 class="h3">2) What are Tags?</h3>
			<p>HTML tags are composed of three things: an opening tag, content and ending tag. Some tags are unclosed tags.</p>
			<p>HTML documents contain two things:</p>
			<ul class="points">
			<li>content, and</li>
			<li>tags</li>
			</ul>
			<p>When a web browser reads an HTML document, the browser reads it from top to bottom and left to right. HTML tags are used to create HTML documents and render their properties. Each HTML tags have different properties.</p>
			<h4 class="h4">Syntax</h4>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;tag&gt; content &lt;/tag&gt;
			</textarea></div>
			<p>Content is placed between tags to display data on the web page.</p>
			<a href="html-tags" target="_blank"> .</a>
			<hr/>
			<h3 class="h3">3) Do all HTML tags have an end tag?</h3>
			<p>No. There are some HTML tags that don't need a closing tag. For example: &lt;image&gt; tag, &lt;br&gt; tag. <a href="html-tags" target="_blank"> .</a></p>
			<hr/>
			<h3 class="h3">4) What is formatting in HTML?</h3>
			<p>The HTML formatting is a process of format the text for a better look and feel. It uses different tags to make text bold, italicized, underlined. <a href="html-formatting" target="_blank"> .</a></p>
			<hr/>
			<h3 class="h3">5) How many types of heading does an HTML contain?</h3>
			<p>The HTML contains six types of headings which are defined with the &lt;h1&gt; to &lt;h6&gt; tags. Each type of heading tag displays different text size from another. So, &lt;h1&gt; is the largest heading tag and &lt;h6&gt; is the smallest one. For example: </p>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;h1&gt;Heading no. 1&lt;/h1&gt;  
			&lt;h2&gt;Heading no. 2&lt;/h2&gt;  
			&lt;h3&gt;Heading no. 3&lt;/h3&gt;  
			&lt;h4&gt;Heading no. 4&lt;/h4&gt;  
			&lt;h5&gt;Heading no. 5&lt;/h5&gt;  
			&lt;h6&gt;Heading no. 6&lt;/h6&gt;  
			</textarea></div>
			<a href="html-heading" target="_blank"> .</a>
			<hr/>
			<h3 class="h3">6) How to create a hyperlink in HTML?</h3>
			<p>The HTML provides an anchor tag to create a hyperlink that links one page to another page. These tags can appear in any of the following ways:</p>
			<ul class="points">
			<li>Unvisited link - It is displayed, underlined and blue.</li>
			<li>Visited link - It is displayed, underlined and purple.</li>
			<li>Active link - It is displayed, underlined and red.</li>
			</ul>
			<a href="html-anchor" target="_blank"> .</a>
			<hr/>
			<h3 class="h3">7) Which HTML tag is used to display the data in the tabular form?</h3>
			<p>The <b>HTML table tag</b> is used to display data in tabular form (row * column). It also manages the layout of the page, e.g., header section, navigation bar, body content, footer section. Here is the list of tags used while displaying the data in the tabular form: </p>
			<table class="alt">
			<tr><th>Tag</th><th>Description</th></tr>
			<tr><td>&lt;table&gt;</td><td>It defines a table.</td></tr>
			<tr><td>&lt;tr&gt;</td><td>It defines a row in a table.</td></tr>
			<tr><td>&lt;th&gt;</td><td>It defines a header cell in a table.</td></tr>
			<tr><td>&lt;td&gt;</td><td>It defines a cell in a table.</td></tr>
			<tr><td>&lt;caption&gt;</td><td>It defines the table caption.</td></tr>
			<tr><td>&lt;colgroup&gt;</td><td>It specifies a group of one or more columns in a table for formatting.</td></tr>
			<tr><td>&lt;col&gt;</td><td>It is used with &lt;colgroup&gt; element to specify column properties for each
			column.</td></tr>
			<tr><td>&lt;tbody&gt;</td><td>It is used to group the body content in a table.</td></tr>
			<tr><td>&lt;thead&gt;</td><td>It is used to group the header content in a table.</td></tr>
			<tr><td>&lt;tfooter&gt;</td><td>It is used to group the footer content in a table.</td></tr>
			</table>
			<hr/>
			<h3 class="h3">8) What are some common lists that are used when designing a page?</h3>
			<p>There are many common lists which are used to design a page. You can choose any or a combination of the following list types:</p>
			<ul class="points">
			<li>Ordered list - The ordered list displays elements in numbered format. It is represented by &lt;ol&gt; tag.</li>
			<li>Unordered list - The unordered list displays elements in bulleted format. It is represented by &lt;ul&gt; tag.</li>
			<li>Definition list - The definition list displays elements in definition form like in dictionary. The &lt;dl&gt;, &lt;dt&gt; and &lt;dd&gt; tags are used to define description list.</li>
			</ul>
			<a href="html-lists" target="_blank"> .</a>
			<hr/>
			<h3 class="h3">9) What is the difference between HTML elements and tags?</h3>
			<p>HTML elements communicate to the browser to render text. When the elements are enclosed by brackets &lt;&gt;, they form HTML tags. Most of the time, tags come in a pair and surround content.</p>
			<hr/>
			
		
			
			 
			<h3 class="h3">10) What is semantic HTML?</h3>
			<p>Semantic HTML is a coding style. It is the use of HTML markup to reinforce the semantics or meaning of the content. For example: In semantic HTML &lt;b&gt; &lt;/b&gt; tag is not used for bold statement as well as &lt;i&gt; &lt;/i&gt; tag is used for italic. Instead of these we use &lt;strong&gt;&lt;/strong&gt; and &lt;em&gt;&lt;/em&gt; tags.</p>
			<hr/>
			<h3 class="h3">11) What is an image map?</h3>
			<p>Image map facilitates you to link many different web pages using a single image. It is represented by &lt;map&gt; tag. You can define shapes in images that you want to make part of an image mapping.</p>
			<hr/>
			<h3 class="h3">12) How to insert a copyright symbol on a browser page?</h3>
			<p>You can insert a copyright symbol by using &amp;copy; or &amp;#169; in an HTML file. </p>
			<hr/>
			<h3 class="h3">13) How to create a nested webpage in HTML?</h3>
			<p>The HTML iframe tag is used to display a nested webpage. In other words, it represents a webpage within a webpage. The HTML &lt;iframe&gt; tag defines an inline frame. For example:</p>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;!DOCTYPE html&gt;  
			&lt;html&gt;  
			&lt;body&gt;  
			&lt;h2&gt;HTML Iframes example&lt;/h2&gt;  
			&lt;p&gt;Use the height and width attributes to specify the size of the iframe:&lt;/p&gt;  
			&lt;iframe src="https://www.javatpoint.com/" height="300" width="400"&gt;&lt;/iframe&gt;  
			&lt;/body&gt;  
			&lt;/html&gt;  
			</textarea></div>
			<hr/>
			<h3 class="h3">14) How do you keep list elements straight in an HTML file?</h3>
			<p>You can keep the list elements straight by using indents. </p>
			<hr/>
			<h3 class="h3">15) Does a hyperlink only apply to text?</h3>
			<p>No, you can use hyperlinks on text and images both. The HTML anchor tag defines a hyperlink that links one page to another page. The "href" attribute is the most important attribute of the HTML anchor tag.
			<h4 class="h4">Syntax</h4>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;a href = "..........."&gt; Link Text &lt;/a&gt;
			</textarea></div>
			<a href="html-anchor" target="_blank"> .</a>
			<hr/>
			<h3 class="h3">16) What is a style sheet?</h3>
			<p>A style sheet is used to build a consistent, transportable, and well-designed style template. You can add these templates on several different web pages. It describes the look and formatting of a document written in markup language. </p>
			<hr/>
			<h3 class="h3">17) Can you create a multi-colored text on a web page?</h3>
			<p>Yes. To create a multicolor text on a web page you can use &lt;font color ="color"&gt; &lt;/font&gt; for the specific texts you want to color. </p>
			<hr/>
			<h3 class="h3">18) Is it possible to change the color of the bullet?</h3>
			<p>The color of the bullet is always the color of the first text of the list. So, if you want to change the color of the bullet, you must change the color of the text. </p>
			<hr/>
			<h3 class="h3">19) Explain the layout of HTML?</h3>
			<p>HTML layout specifies a way in which the web page is arranged.</p>
			 
			
			<p>Every website has a specific layout to display content in a specific manner. </p>
			<p>Following are different HTML5 elements which are used to define the different parts of a webpage. </p>
			<ul class="points">
			<li>&lt;header&gt;: It is used to define a header for a document or a section.</li>
			<li>&lt;nav&gt;: It is used to define a container for navigation links</li>
			<li>&lt;section&gt;: It is used to define a section in a document</li>
			<li>&lt;article&gt;: It is used to define an independent, self-contained article</li>
			<li>&lt;aside&gt;: It is used to define content aside from the content (like a sidebar)</li>
			<li>&lt;footer&gt;: It is used to define a footer for a document or a section</li>
			</ul>
			<hr/>
			<h3 class="h3">20) What is a marquee?</h3>
			<p>Marquee is used to put the scrolling text on a web page. It scrolls the image or text up, down, left or right automatically. You should put the text which you want to scroll within the &lt;marquee&gt;......&lt;/marquee&gt; tag. <a href="marquee-html" target="_blank"> .</a></p>
			<hr/>
			<h3 class="h3">21) How many tags can be used to separate a section of texts?</h3>
			<p>Three tags are used to separate the texts. </p>
			<ul class="points">
			<li>&lt;br&gt; tag - Usually &lt;br&gt; tag is used to separate the line of text. It breaks the current line and conveys the flow to the next line</li>
			<li>&lt;p&gt; tag - The &lt;p&gt; tag contains the text in the form of a new paragraph. </li>
			<li>&lt;blockquote&gt; tag - It is used to define a large quoted section. If you have a large quotation, then put the entire text within &lt;blockquote&gt;.............&lt;/blockquote&gt; tag.</li>
			</ul>
			<hr/>
			<h3 class="h3">22) How to make a picture of a background image of a web page?</h3>
			<p>To make a picture a background image on a web page, you should put the following tag code after the &lt;/head&gt; tag.</p>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;body background = "image.gif"&gt;
			</textarea></div>
			<p>Here, replace the "image.gif" with the name of your image file which you want to display on your web page. </p>
			<hr/>
			<h3 class="h3">23) What are empty elements?</h3>
			<p>HTML elements with no content are called empty elements. For example: &lt;br&gt;, &lt;hr&gt; etc.</p>
			<hr/>
			<h3 class="h3">24) What is the use of a span tag? Give one example.</h3>
			<p>The span tag is used for following things:</p>
			<ul class="points">
			<li>For adding color on text</li>
			<li>For adding background on text</li>
			<li>Highlight any color text </li>
			</ul>
			<p><strong>Example:</strong></p>
			<div class="codeblock"><textarea name="code" class="xml">
			<p>
			<span style="color:#ffffff;">
			In this page we use span.
			</span>
			</p>
			</textarea></div>
			<hr/>
			<h3 class="h3">25) What is the use of an iframe tag?</h3>
			<p>An iframe is used to display a web page within a web page.</p>
			<p><strong>Syntax:</strong></p>
			<div class="codeblock"><textarea name="code" class="xml">
			<iframe src="URL"></iframe>
			</textarea></div>
			<p><strong>Example:</strong></p>
			<div class="codeblock"><textarea name="code" class="xml">
			<iframe src="demo_iframe.html" width="200px" height="200px"></iframe>
			</textarea></div>
			<p><strong>Target to a link:</strong></p>
			<div class="codeblock"><textarea name="code" class="xml">
			<iframe src="http://www.javatpoint.com" name="iframe_a"></iframe>
			</textarea></div>
			<hr/>
			<h3 class="h3">26) What are the entities in HTML?</h3>
			<p>The HTML character entities are used as a replacement for reserved characters in HTML. You can also replace characters that are not present on your keyboard by entities. These characters are replaced because some characters are reserved in HTML.</p>
			<hr/>
			<h3 class="h3">27) Why is a URL encoded in HTML?</h3>
			<p>An URL is encoded to convert non-ASCII characters into a format that can be used over the Internet because a URL is sent over the Internet by using the ASCII character-set only. If a URL contains characters outside the ASCII set, the URL has to be converted. The non-ASCII characters are replaced with a "%" followed by hexadecimal digits.</p>
			<hr/>
			<h3 class="h3">28) Does a &lt;!DOCTYPE html&gt; tag is a HTML tag?</h3>
			<p>No, the &lt;!DOCTYPE html&gt; declaration is not an HTML tag. There are many type of HTML e.g. HTML 4.01 Strict, HTML 4.01 Transitional, HTML 4.01 Frameset, XHTML 1.0 Strict, XHTML 1.0 Transitional, XHTML 1.0 Frameset, XHTML 1.1 etc. So, &lt;!DOCTYPE html&gt; is used to instruct the web browser about the HTML page.</p>
			<hr/>
			<h2 class="h2" id="html5">HTML5 Interview Questions</h2>
			<p>Let's see a list of top HTML5 interview questions and answers.</p>
			<hr/>
			<h3 class="h3">29) What is the canvas element in HTML5?</h3>
			<p>The &lt;canvas&gt; element is a container that is used to draw graphics on the web page using scripting language like JavaScript. It allows for dynamic and scriptable rendering of 2D shapes and bitmap images. There are several methods in canvas to draw paths, boxes, circles, text and add images. For Example:</p>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;canvas id="myCanvas1" width="300" height="100" style="border:2px solid;"&gt;  
			Your browser does not support the HTML5 canvas tag.  
			&lt;/canvas&gt;  
			</textarea></div>
			<a href="html-canvas" target="_blank"> .</a>
			<hr/>
			<h3 class="h3">30) What is SVG?</h3>
			<p>HTML SVG is used to describe the two-dimensional vector and vector/raster graphics. SVG images and their behaviors are defined in XML text files. So as XML files, you can create and edit an SVG image with the text editor. It is mostly used for vector type diagrams like pie charts, 2-Dimensional graphs in an X, Y coordinate system.
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;svg width="100" height="100"&gt;  
			 &lt;circle cx="50" cy="50" r="40" stroke="yellow" stroke-width="4" fill="red" /&gt;  
			&lt;/svg&gt; 
			</textarea></div>
			<a href="html-svg" target="_blank"> .</a>
			<hr/>
			<h3 class="h3">31) What are the different new form element types in HTML 5?</h3>
			<p>Following is a list of 10 frequently used new elements in HTML 5:</p>
			<ul class="points">
			<li>Color</li>
			<li>Date</li>
			<li>Datetime-local</li>
			<li>Email</li>
			<li>Time</li>
			<li>Url</li>
			<li>Range</li>
			<li>Telephone</li>
			<li>Number</li>
			<li>Search</li>
			</ul>
			<hr/>
			<h3 class="h3">32) Is there any need to change the web browsers to support HTML5?</h3>
			<p>No. Almost all browsers (updated versions) support HTML 5. For example Chrome, Firefox, Opera, Safari, IE.</p>
			<hr/>
			<h3 class="h3">33) Which type of video formats are supported by HTML5?</h3>
			<p>HTML 5 supports three types of video format:</p>
			<ul class="points">
			<li>mp4</li>
			<li>WebM</li>
			<li>Ogg</li>
			</ul>
			<a href="html-video" target="_blank"> .</a>
			<hr/>
			<h3 class="h3">34) Is audio tag supported in HTML 5?</h3>
			<p>Yes. It is used to add sound or music files on the web page. There are three
			supported file formats for HTML 5 audio tag.</p>
			<ol class="points">
			<li>mp3</li>
			<li>WAV</li>
			<li>Ogg</li>
			</ol>
			<p>Let's see the code to play mp3 file using HTML audio tag. </p>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;audio controls&gt;  
			  &lt;source src="koyal.mp3" type="audio/mpeg"&gt;  
			Your browser does not support the html audio tag.  
			&lt;/audio&gt;  
			</textarea></div>
			<p>Instead of koyal.mp3, you can pass any mp3 file name.</p>
			<a href="html-audio" target="_blank"> .</a>
			<hr/>
			<h3 class="h3">35) What is the difference between progress and meter tag?</h3>
			<p>The progress tag is used to represent the progress of the task only while the meter tag is used to measure data within a given range. <a href="html-progress-tag" target="_blank"> .</a></p>
			<hr/>
			<h3 class="h3">36) What is the use of figure tag in HTML 5?</h3>
			<p>The figure tag is used to add a photo in the document on the web page. It is used to handle the group of diagrams, photos, code listing with some embedded content.</p>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;p&gt;The Taj Mahal is widely recognized as "the jewel of Muslim art in India and one of the universally admired masterpieces of the world's heritage."&lt;/p&gt;  
			&lt;figure&gt;  
			  &lt;img src="htmlpages/images/tajmahal.jpg" alt="Taj Mahal"/&gt;  
			&lt;/figure&gt;   
			</textarea></div>
			<a href="html-figure-tag" target="_blank"> .</a>
			<hr/>
			<h3 class="h3">37) What is the use of figcaption tag in HTML 5?</h3>
			<p>The &lt;figcaption&gt; element is used to provide a caption to an image. It is an optional tag and can appear before or after the content within the &lt;figure&gt; tag. The &lt;figcaption&gt; element is used with &lt;figure&gt; element and it can be placed as the first or last child of the &lt;figure&gt; element.</p>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;figure&gt;  
			  &lt;img src="htmlpages/images/tajmahal.jpg" alt="Taj Mahal"/&gt;  
			&lt;figcaption&gt;Fig.1.1 - A front view of the great Taj Mahal in Agra.&lt;/figcaption&gt;  
			&lt;/figure&gt;    
			</textarea></div>
			<a href="html-figcaption-tag" target="_blank"> .</a>
			<hr/>
			<h3 class="h3">38) What is button tag?</h3>
			<p>The button tag is used in HTML 5. It is used to create a clickable button within the HTML form on the web page. It is generally used to create a "submit" or "reset" button. Let's see the code to display the button.</p>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;button name="button" type="button"&gt;Click Here&lt;/button&gt;  
			</textarea></div>
			<a href="html-button-tag" target="_blank"> .</a>
			<hr/>
			<h3 class="h3">39) What is the use of details and summary tag?</h3>
			<p>The details tag is used to specify some additional details on the web page. It can be viewed or hidden on demand. The summary tag is used with details tag. <a href="html-details-tag" target="_blank"> .</a></p>
			<hr/>
			<h3 class="h3">40) What is datalist tag?</h3>
			<p>The HTML 5 datalist tag provides an autocomplete feature on the form element. It facilitates users to choose the predefined options to the users to select data.</p>
			<div class="codeblock"><textarea name="code" class="xml">
			&lt;label&gt;  
			 Enter your favorite cricket player: Press any character&lt;br /&gt;  
			 &lt;input type="text" id="favCktPlayer" list="CktPlayers"&gt;  
			 &lt;datalist id="CktPlayers"&gt;  
			 &lt;option value="Sachin Tendulkar"&gt;  
			 &lt;option value="Brian Lara"&gt;  
			 &lt;option value="Jacques Kallis"&gt;   
			 &lt;option value="Ricky Ponting"&gt;   
			 &lt;option value="Rahul Dravid"&gt;   
			 &lt;option value="Shane Warne"&gt;   
			 &lt;option value="Rohit Sharma"&gt;   
			 &lt;option value="Donald Bradman"&gt;   
			 &lt;option value="Saurav Ganguly "&gt;   
			 &lt;option value="AB diVilliers"&gt;   
			 &lt;option value="Mahendra Singh Dhoni"&gt;   
			 &lt;option value="Adam Gilchrist"&gt;  
			 &lt;/datalist&gt;  
			&lt;/label&gt;   
			</textarea></div>
			<a href="html-datalist-tag" target="_blank"> .</a>
			<hr/>
			<h3 class="h3">41) How are tags migrated from HTML4 to HTML5?</h3>
			<table class="alt">
			<tr><th>No.</th><th>Typical HTML4</th><th>Typical HTML5</th></tr>
			<tr><td>1)</td><td>&lt;div id="header"&gt;</td><td>&lt;header&gt;</td></tr>
			<tr><td>2)</td><td>&lt;div id="menu"&gt;</td><td>&lt;nav&gt;</td></tr>
			<tr><td>3)</td><td>&lt;div id="content"&gt;</td><td>&lt;section&gt;</td></tr>
			<tr><td>4)</td><td>&lt;div id="post"&gt;</td><td>&lt;article&gt;</td></tr>
			<tr><td>5)</td><td>&lt;div id="footer"&gt;</td><td>&lt;footer&gt;</td></tr>
			</table>
			<h3 class="h3">Header and Footer Example</h3>
			<p><strong>HTML 4 Header and Footer:</strong></p>
			<div class="codeblock"><textarea name="code" class="xml">
			<div id="header">
			  <h1>Monday Times</h1>
			</div>
			.
			.
			.
			<div id="footer">
			  <p>&amp;copy; JavaTpoint. All rights reserved.</p>
			</div>
			</textarea></div>
			<p><strong>HTML 5 Header and Footer:</strong></p>
			<div class="codeblock"><textarea name="code" class="xml">
			<header>
			  <h1>Monday Times</h1>
			</header>
			.
			.
			.
			<footer>
			  <p>&copy; JavaTpoint. All rights reserved.</p>
			</footer>
			</textarea></div>
			<h3 class="h3">Menu Example</h3>
			<p><strong>HTML 4 Menu:</strong></p>
			<div class="codeblock"><textarea name="code" class="xml">
			<div id="menu">
			  <ul>
				<li>News</li>
				<li>Sports</li>
				<li>Weather</li>
			  </ul>
			</div>
			</textarea></div>
			<p><strong>HTML 5 Menu:</strong></p>
			<div class="codeblock"><textarea name="code" class="xml">
			<nav>
			  <ul>
				<li>News</li>
				<li>Sports</li>
				<li>Weather</li>
			  </ul>
			</nav>
			</textarea></div>
			<hr/>
			<h3 class="h3">42) If I do not put &lt;!DOCTYPE html&gt; will HTML 5 work?</h3>
			<p>No, the browser will not be able to identify that it is an HTML document and HTML 5 tags do not function properly..</p>
			<hr/>
			<h3 class="h3">43) What is the use of the required attribute in HTML5?</h3>
			<p>It forces a user to fill text on the text field or text area before submitting the form. It is used for form validation.</p>
			<p><strong>Example:</strong></p>
			<div class="codeblock"><textarea name="code" class="xml">
			Name: <input type="text" name="name" required>
			</textarea></div>
			<hr/>
			<h3 class="h3">44) What are the new &lt;input&gt; types for form validation in HTML5?</h3>
			<p>The new input types for form validation are email, URL, number, tel, and date.</p>
			<p><strong>Example:</strong></p>
			<div class="codeblock"><textarea name="code" class="xml">
			<input type="email">
			</textarea></div>
			<br/>







			


	</section>
	
	@endsection
	