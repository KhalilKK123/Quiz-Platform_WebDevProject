-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2024 at 08:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `KMH`
--

-- --------------------------------------------------------

--
-- Table structure for table `css`
--

CREATE TABLE `css` (
  `id` int(11) NOT NULL,
  `Diff` enum('Beginner','Amateur','Expert') NOT NULL,
  `Question` varchar(10000) NOT NULL,
  `A1` varchar(1000) NOT NULL,
  `A2` varchar(1000) NOT NULL,
  `A3` varchar(1000) NOT NULL,
  `A4` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `css`
--

INSERT INTO `css` (`id`, `Diff`, `Question`, `A1`, `A2`, `A3`, `A4`) VALUES
(1, 'Beginner', 'What does CSS stand for?', 'Colorful Style Sheets', 'Creative Style Sheets', 'Computer Style Sheets', 'Cascading Style Sheets'),
(2, 'Beginner', 'Which HTML tag is used to define an internal style sheet?', '<css>', '<script>', '<link>', '<style>'),
(3, 'Beginner', 'Which HTML attribute is used to define inline styles?', 'class', 'styles', 'font', 'style'),
(4, 'Beginner', 'Which property is used to change the background color?', 'bgcolor', 'color', 'bg-color', 'background-color'),
(5, 'Beginner', 'Which CSS property controls the text size?', 'font-style', 'text-size', 'text-style', 'font-size'),
(6, 'Beginner', 'What is the correct CSS syntax for making all the <p> elements bold?', '<p style=\"text-size:bold;\">', '<p style=\"font-size:bold;\">', 'p {text-size: bold;}', 'p {font-weight: bold;}'),
(7, 'Beginner', 'How do you display a border like this: The top border = 10 pixels, the bottom border = 5 pixels, the left border = 20 pixels, and the right border = 1pixel?', 'border-width: 10px 20px 5px 1px;', 'border-width: 10px 5px 20px 1px;', 'border-width: 10px 20px 1px 5px;', 'border-width: 10px 1px 5px 20px;'),
(8, 'Beginner', 'Which property is used to change the font of an element?', 'font-weight', 'font-style', 'font-variant', 'font-family'),
(9, 'Beginner', 'How do you make each word in a text start with a capital letter?', 'text-transform: uppercase', 'text-transform: lowercase', 'text-transform: none', 'text-transform: capitalize'),
(10, 'Beginner', 'Which property is used to change the left margin of an element?', 'padding-left', 'indent', 'margin', 'margin-left'),
(11, 'Amateur', 'How do you select an element with id \"demo\"?', 'demo', '.demo', '*demo', '#demo'),
(12, 'Amateur', 'How do you select elements with class name \"test\"?', '#test', '*test', 'test', '.test'),
(13, 'Amateur', 'How do you select all p elements inside a div element?', 'div + p', 'div.p', 'div ~ p', 'div p'),
(14, 'Amateur', 'How do you make the text bold?', 'font', 'style', 'text', 'font-weight'),
(15, 'Amateur', 'Which property is used to change the left padding of an element?', 'margin-left', 'padding', 'margin', 'padding-left'),
(16, 'Amateur', 'How do you make a list that lists its items with squares?', 'list-type: square;', 'list: square;', 'list-style: square;', 'list-style-type: square;'),
(17, 'Amateur', 'How do you change the text color of an element?', 'fgcolor', 'text-color', 'font-color', 'color'),
(18, 'Amateur', 'Which property is used to change the font of an element?', 'font-weight', 'font-style', 'font-variant', 'font-family'),
(19, 'Amateur', 'How do you display hyperlinks without an underline?', 'a {underline;}', 'a {decoration;}', 'a {text-decoration;}', 'a {text-decoration: none;}'),
(20, 'Amateur', 'How do you make each word in a text start with a capital letter?', 'text-transform', 'text-transform', 'text-transform', 'text-transform: capitalize'),
(21, 'Expert', 'How do you center a block element horizontally?', 'padding: 0 auto;', 'text-align: center;', 'float: center;', 'margin: 0 auto;'),
(22, 'Expert', 'Which property is used to specify the width of an element\'s border?', 'border-style', 'border-color', 'border', 'border-width'),
(23, 'Expert', 'How do you make a flex container?', 'display: block;', 'display: inline-block;', 'display: inline-flex;', 'display: flex;'),
(24, 'Expert', 'Which CSS property controls the text size?', 'font-style', 'text-size', 'text-style', 'font-size'),
(25, 'Expert', 'Which property is used to change the background color?', 'bgcolor', 'color', 'bg-color', 'background-color'),
(26, 'Expert', 'What is the default value of the position property?', 'absolute', 'fixed', 'relative', 'static'),
(27, 'Expert', 'Which property is used to change the font of an element?', 'font-weight', 'font-style', 'font-variant', 'font-family'),
(28, 'Expert', 'How do you make a list that lists its items with squares?', 'list-type: square;', 'list: square;', 'list-style: square;', 'list-style-type: square;'),
(29, 'Expert', 'How do you change the text color of an element?', 'fgcolor', 'text-color', 'font-color', 'color'),
(30, 'Expert', 'Which property is used to change the left padding of an element?', 'margin-left', 'padding', 'margin', 'padding-left');

-- --------------------------------------------------------

--
-- Table structure for table `html`
--

CREATE TABLE `html` (
  `id` int(11) NOT NULL,
  `Diff` enum('Beginner','Amateur','Expert') NOT NULL,
  `Question` varchar(10000) NOT NULL,
  `A1` varchar(1000) NOT NULL,
  `A2` varchar(1000) NOT NULL,
  `A3` varchar(1000) NOT NULL,
  `A4` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `html`
--

INSERT INTO `html` (`id`, `Diff`, `Question`, `A1`, `A2`, `A3`, `A4`) VALUES
(1, 'Beginner', 'What is the correct HTML element for the largest heading?', '<heading>', '<head>', '<h6>', '<h1>'),
(2, 'Beginner', 'Which HTML element is used to define a paragraph?', '<para>', '<paragraph>', '<text>', '<p>'),
(3, 'Beginner', 'What is the correct HTML element for inserting a line break?', '<lb>', '<break>', '<line>', '<br>'),
(4, 'Beginner', 'Which HTML attribute specifies an alternate text for an image, if the image cannot be displayed?', 'title', 'src', 'longdesc', 'alt'),
(5, 'Beginner', 'How can you make a numbered list?', '<ul>', '<dl>', '<list>', '<ol>'),
(6, 'Beginner', 'How can you make a bulleted list?', '<ol>', '<dl>', '<bl>', '<ul>'),
(7, 'Beginner', 'What is the correct HTML for creating a hyperlink?', '<a>http://www.example.com</a>', '<link href=\"http://www.example.com\">Example</link>', '<a url=\"http://www.example.com\">Example</a>', '<a href=\"http://www.example.com\">Example</a>'),
(8, 'Beginner', 'Which HTML element is used to specify a footer for a document or section?', '<bottom>', '<foot>', '<section>', '<footer>'),
(9, 'Beginner', 'How do you create an unordered list in HTML?', '<ol>', '<list>', '<dl>', '<ul>'),
(10, 'Beginner', 'What does HTML stand for?', 'Hyperlinks and Text Markup Language', 'Home Tool Markup Language', 'Hyper Tool Markup Language', 'Hypertext Markup Language'),
(11, 'Amateur', 'Which HTML attribute is used to define inline styles?', 'class', 'font', 'styles', 'style'),
(12, 'Amateur', 'How can you open a link in a new tab/browser window?', '<a href=\"url\" new>', '<a href=\"url\" target=\"_self>', '<a href=\"url\" target=\"new_tab>', '<a href=\"url\" target=\"_blank>'),
(13, 'Amateur', 'Which HTML element defines the title of a document?', '<head>', '<meta>', '<link>', '<title>'),
(14, 'Amateur', 'How do you create a dropdown list in HTML?', '<list>', '<dropdown>', '<ul>', '<select>'),
(15, 'Amateur', 'Which HTML element is used to define important text?', '<important>', '<b>', '<i>', '<strong>'),
(16, 'Amateur', 'What is the correct HTML for making a text area?', '<input type=\"textarea\">', '<input type=\"textbox\">', '<textbox>', '<textarea>'),
(17, 'Amateur', 'Which HTML attribute specifies a unique identifier for an element?', 'class', 'name', 'key', 'id'),
(18, 'Amateur', 'Which HTML element is used to define the main content of a document?', '<section>', '<article>', '<content>', '<main>'),
(19, 'Amateur', 'What is the correct HTML for making a checkbox?', '<check>', '<input type=\"check\">', '<checkbox>', '<input type=\"checkbox\">'),
(20, 'Amateur', 'Which HTML element is used to define emphasized text?', '<italic>', '<i>', '<b>', '<em>'),
(21, 'Expert', 'Which HTML5 element is used to define navigation links?', '<navigation>', '<navigate>', '<navlinks>', '<nav>'),
(22, 'Expert', 'What is the correct HTML element for playing video files?', '<media>', '<movie>', '<film>', '<video>'),
(23, 'Expert', 'Which HTML attribute is used to define inline JavaScript?', 'script', 'onscript', 'js', 'onclick'),
(24, 'Expert', 'What does the <canvas> element in HTML do?', 'Displays a webpage', 'Embeds a video', 'Adds a background image', 'Creates a drawing area'),
(25, 'Expert', 'Which attribute is used in HTML to reference an external JavaScript file?', 'href', 'link', 'script', 'src'),
(26, 'Expert', 'What is the correct HTML for including a background image?', '<background img=\"background.jpg\">', '<body bg=\"background.jpg\">', '<background url=\"background.jpg\">', '<body background=\"background.jpg\">'),
(27, 'Expert', 'Which HTML element is used to define a client-side script?', '<javascript>', '<js>', '<client>', '<script>'),
(28, 'Expert', 'How can you make a form element read-only?', 'readonly=\"true\"', 'readonly', 'disable', 'readonly=\"readonly\"'),
(29, 'Expert', 'Which HTML5 element is used to embed sound content?', '<mp3>', '<sound>', '<bgsound>', '<audio>'),
(30, 'Expert', 'Which HTML attribute is used to define the character encoding of a document?', 'encoding', 'char', 'code', 'charset');

-- --------------------------------------------------------

--
-- Table structure for table `js`
--

CREATE TABLE `js` (
  `id` int(11) NOT NULL,
  `Diff` enum('Beginner','Amateur','Expert') NOT NULL,
  `Question` varchar(10000) NOT NULL,
  `A1` varchar(1000) NOT NULL,
  `A2` varchar(1000) NOT NULL,
  `A3` varchar(1000) NOT NULL,
  `A4` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `js`
--

INSERT INTO `js` (`id`, `Diff`, `Question`, `A1`, `A2`, `A3`, `A4`) VALUES
(1, 'Beginner', 'What does JavaScript primarily do in web development?', 'Defines the structure of web pages', 'Styles web pages', 'Manages databases', 'Adds interactivity to web pages'),
(2, 'Beginner', 'Which HTML tag is used to include JavaScript code?', '<javascript>', '<js>', '<code>', '<script>'),
(3, 'Beginner', 'How do you create a function in JavaScript?', 'function = myFunction() {}', 'function: myFunction() {}', 'createFunction myFunction() {}', 'function myFunction() {}'),
(4, 'Beginner', 'How do you call a function named \"myFunction\"?', 'call myFunction()', 'call function myFunction()', 'Call.myFunction()', 'myFunction()'),
(5, 'Beginner', 'How do you write a comment in JavaScript?', '<!-- This is a comment -->', '/* This is a comment */', '* This is a comment *', '// This is a comment'),
(6, 'Beginner', 'Which event occurs when the user clicks on an HTML element?', 'onchange', 'onmouseclick', 'onmouseover', 'onclick'),
(7, 'Beginner', 'How do you declare a JavaScript variable?', 'v carName;', 'variable carName;', 'declare carName;', 'var carName;'),
(8, 'Beginner', 'What is the correct JavaScript syntax to change the content of the HTML element below?<p id=\"demo\">This is a demonstration.</p>', 'document.getElement(\"p\").innerHTML = \"Hello World!\";', 'document.getElementByName(\"p\").innerHTML = \"Hello World!\";', 'document.getElementByTagName(\"p\").innerHTML = \"Hello World!\";', 'document.getElementById(\"demo\").innerHTML = \"Hello World!\";'),
(9, 'Beginner', 'How do you find the number with the highest value of x and y?', 'ceil(x, y)', 'Math.ceil(x, y)', 'top(x, y)', 'Math.max(x, y)'),
(10, 'Beginner', 'Which operator is used to assign a value to a variable?', '*', '-', 'x', '='),
(11, 'Amateur', 'Which of the following is a JavaScript framework?', 'Laravel', 'Django', 'Rails', 'React'),
(12, 'Amateur', 'How do you write an IF statement in JavaScript?', 'if i == 5 then', 'if i = 5', 'if i == 5', 'if (i == 5)'),
(13, 'Amateur', 'How do you write a FOR loop in JavaScript?', 'for (i <= 5; i++)', 'for (i = 0; i <= 5)', 'for i = 1 to 5', 'for (i = 0; i <= 5; i++)'),
(14, 'Amateur', 'How can you add a comment that has more than one line?', '// This comment has more than one line //', '<!-- This comment has more than one line -->', '* This comment has more than one line *', '/* This comment has more than one line */'),
(15, 'Amateur', 'What is the correct way to write a JavaScript array?', 'var colors = \"red\", \"green\", \"blue\"', 'var colors = (1:\"red\", 2:\"green\", 3:\"blue\")', 'var colors = 1 = (\"red\"), 2 = (\"green\"), 3 = (\"blue\")', 'var colors = [\"red\", \"green\", \"blue\"]'),
(16, 'Amateur', 'How do you round the number 7.25 to the nearest integer?', 'round(7.25)', 'Math.rnd(7.25)', 'rnd(7.25)', 'Math.round(7.25)'),
(17, 'Amateur', 'How do you find the number with the lowest value of x and y?', 'Math.low(x, y)', 'Math.small(x, y)', 'Math.lower(x, y)', 'Math.min(x, y)'),
(18, 'Amateur', 'Which JavaScript keyword is used to declare a constant?', 'var', 'let', 'constant', 'const'),
(19, 'Amateur', 'How do you create a new object in JavaScript?', 'var obj = new Object();', 'var obj = Object();', 'var obj = create Object();', 'var obj = {};'),
(20, 'Amateur', 'Which method converts JSON data to a JavaScript object?', 'JSON.convert()', 'JSON.stringify()', 'JSON.toObject()', 'JSON.parse()'),
(21, 'Expert', 'Which built-in method returns the calling string value converted to lower case?', 'toLower()', 'changeCase(case)', 'None of the above', 'toLowerCase()'),
(22, 'Expert', 'Which method is used to add one or more elements to the end of an array and returns the new length of the array?', 'pop()', 'join()', 'map()', 'push()'),
(23, 'Expert', 'What is the output of the following code? console.log(typeof null);', '\"null\"', '\"undefined\"', '\"boolean\"', '\"object\"'),
(24, 'Expert', 'Which JavaScript method is used to access an HTML element by id?', 'getElement(id)', 'getElementByClass()', 'getElementByName()', 'getElementById()'),
(25, 'Expert', 'Which of the following methods can be used to debug JavaScript code?', 'console.log()', 'alert()', 'debugger;', 'All of the above'),
(26, 'Expert', 'Which of the following is not a reserved word in JavaScript?', 'interface', 'throws', 'short', 'program'),
(27, 'Expert', 'What will be the output of the following code? var x = 5; var y = 6; var result = x + y + \"7\"; console.log(result);', '\"567\"', '18', '117', '\"117\"'),
(28, 'Expert', 'Which of the following is a way to create an object in JavaScript?', 'var obj = new Object();', 'var obj = Object.create(null);', 'All of the above', 'var obj = {};'),
(29, 'Expert', 'What does the bind method do in JavaScript?', 'Attaches an event handler to a specific element', 'Returns a function that is executed after a specified delay', 'None of the above', 'Creates a new function that, when called, has its this keyword set to the provided value'),
(30, 'Expert', 'What is the result of the following code? console.log(0.1 + 0.2 == 0.3);', 'true', 'undefined', 'NaN', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `php`
--

CREATE TABLE `php` (
  `id` int(11) NOT NULL,
  `Diff` enum('Beginner','Amateur','Expert') NOT NULL,
  `Question` varchar(10000) NOT NULL,
  `A1` varchar(1000) NOT NULL,
  `A2` varchar(1000) NOT NULL,
  `A3` varchar(1000) NOT NULL,
  `A4` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `php`
--

INSERT INTO `php` (`id`, `Diff`, `Question`, `A1`, `A2`, `A3`, `A4`) VALUES
(1, 'Beginner', 'What does PHP stand for?', 'Private Home Page', 'Personal Hypertext Processor', 'Personal Hypertext Processor', 'PHP: Hypertext Preprocessor'),
(2, 'Beginner', 'Which symbol is used to start a variable in PHP?', '@', '#', '%', '$'),
(3, 'Beginner', 'How do you write \"Hello World\" in PHP?', 'echo \"Hello World\";', 'print(\"Hello World\");', 'echo(\"Hello World\");', 'All of the above'),
(4, 'Beginner', 'Which extension is used for PHP files?', '.ph', '.html', '.xml', '.php'),
(5, 'Beginner', 'How do you get information from a form that is submitted using the \"get\" method?', 'Request.Form;', 'Request.QueryString;', '$_POST[];', '$_GET[];'),
(6, 'Beginner', 'How do you create a cookie in PHP?', 'createcookie(name, value, expire);', 'makecookie(name, value, expire);', 'cookie(name, value, expire);', 'setcookie(name, value, expire);'),
(7, 'Beginner', 'What is the correct way to end a PHP statement?', '.', '</php>', ':', ';'),
(8, 'Beginner', 'Which of the following is a correct way to open a PHP block?', '<php>', '<script>', '<% %>', '<?php ?>'),
(9, 'Beginner', 'Which of the following is used to display a string in PHP?', 'echo', 'disp', 'printf', 'All of the above'),
(10, 'Beginner', 'How do you include a file in PHP?', 'include \'filename\';', 'require \'filename\';', 'include_once \'filename\';', 'All of the above'),
(11, 'Amateur', 'What will be the output of the following PHP code? $x = 10; echo $x++;', '9', '11', '12', '10'),
(12, 'Amateur', 'What is the output of the following PHP code? $arr = [1, 2, 3]; echo $arr[3];', '1', '2', '3', 'Error: Undefined offset'),
(13, 'Amateur', 'How do you create an associative array in PHP?', '$arr = [\"first\", 1, \"second\", 2];', '$arr = array(1, 2, 3);', '$arr = [\"first\", \"second\", \"third\"];', '$arr = array(\"first\" => 1, \"second\" => 2);'),
(14, 'Amateur', 'Which function is used to count the number of elements in an array?', 'count_array()', 'size_of()', 'elements_count()', 'count()'),
(15, 'Amateur', 'How do you start a session in PHP?', 'start_session()', 'session_begin()', 'session_create()', 'session_start()'),
(16, 'Amateur', 'Which of the following is used to get the length of a string in PHP?', 'strlength()', 'string_len()', 'length()', 'strlen()'),
(17, 'Amateur', 'What is the purpose of the die() function in PHP?', 'To delete a variable', 'To pause the script execution', 'To remove a file', 'To output a message and terminate the current script'),
(18, 'Amateur', 'How do you check if a variable is set in PHP?', 'is_set()', 'check_set()', 'var_set()', 'isset()'),
(19, 'Amateur', 'Which of the following is the correct way to create a class in PHP?', 'class = MyClass { }', 'create class MyClass { }', 'define class MyClass { }', 'class MyClass { }'),
(20, 'Amateur', 'Which function can be used to include the contents of one PHP file into another PHP file?', 'require()', 'include_once()', 'include()', 'All of the above'),
(21, 'Expert', 'What will be the output of the following PHP code? $a = \"Hello\"; $b = \" world!\"; $a .= $b; echo $a;', 'Hello', 'world!', 'Hello', 'Hello world!'),
(22, 'Expert', 'Which of the following functions can be used to encrypt data in PHP?', 'md5()', 'sha1()', 'hash()', 'All of the above'),
(23, 'Expert', 'Which PHP function is used to send HTTP headers?', 'send_header()', 'http_send_headers()', 'http_headers()', 'header()'),
(24, 'Expert', 'How do you convert an object to an array in PHP?', '(object) $array', 'convert_array($object)', 'array_cast($object)', '(array) $object'),
(25, 'Expert', 'Which of the following methods is used to get the current date and time in PHP?', 'time()', 'date()', 'getdate()', 'All of the above'),
(26, 'Expert', 'How do you create a namespace in PHP?', 'create namespace MyNamespace;', 'namespace = MyNamespace;', 'define namespace MyNamespace;', 'namespace MyNamespace;'),
(27, 'Expert', 'What is the use of mysqli_connect() function in PHP?', 'To close the connection to the MySQL server', 'To execute a MySQL query', 'To select a MySQL database', 'To open a new connection to the MySQL server'),
(28, 'Expert', 'Which function is used to get the length of an array in PHP?', 'array_length()', 'array_size()', 'length()', 'count()'),
(29, 'Expert', 'What will be the output of the following PHP code? $arr = array(1, 2, 3, 4); foreach ($arr as &$value) { $value = $value * 2; } echo $arr[0];', '1', '4', '8', '2'),
(30, 'Expert', 'Which of the following methods can be used to upload files in PHP?', 'upload_file()', 'save_file()', 'copy_file()', 'move_uploaded_file()');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `css`
--
ALTER TABLE `css`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `html`
--
ALTER TABLE `html`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `js`
--
ALTER TABLE `js`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php`
--
ALTER TABLE `php`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `css`
--
ALTER TABLE `css`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `html`
--
ALTER TABLE `html`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `js`
--
ALTER TABLE `js`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `php`
--
ALTER TABLE `php`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
