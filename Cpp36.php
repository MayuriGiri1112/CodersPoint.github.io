<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!--Latest compiled and minified CSS-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--jQuery library-->

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>File Handling</title>
</head>
<body>

<?php
include("courses_navbar.php");
include("Cpp_sidenav.php");
?>

<div class="main">
	<br>
<?php
include("search.php");
?>
<br><div class="container">
            <div class="jumbotron">
                <h1>File Handling</h1>
            </div>
        </div>
<p>A file is collection of related records, a record is composed of several fields and field is a group of character.</p>
            
            <p>This requires another standard C++ library called fstream which defines three new data types:<br>
                <b>Ofstream</b><br>
This data type represents the output file stream and is used to create files and to write information to files.<br>
<b>Ifstream</b><br>
This data type represents the input file stream and is used to read information from files.<br>
<b>Fstream</b><br>
This data type represents the file stream generally, and has the capabilities of both ofstream and ifstream which means it can create files, write information to files, and read information from files.<br></p>

            <h2>File Operations</h2>
            <ol>
                <li>Open an existing file</li>
                <li>Read from file</li>
                <li>Write to a file</li>
                <li>Moving a specific location in a file(Seeking)</li>
                <li>Closing File</li>
            </ol>

            <h2>Opening a File</h2>
            <p>A file must be opened before you can read from it or write to it. Either the ofstream or fstream object may be used to open a file for writing and ifstream object is used to open a file for reading purpose only. Following is the standard syntax for open() function, which is a member of fstream, ifstream, and ofstream objects.</p>

            void open(const char *filename, ios::openmode mode);<br>

            <p>Here, the first argument specifies the name and location of the file to be opened and the second argument of the open() member function defines the mode in which the file should be opened.</p>

            <h3>file open modes</h3>
            <b>ios::app - </b>Append mode. All output to that file to be appended to the end.<br>
<b>ios::ate - </b> Open a file for output and move the read/write control to the end of the file.<br>
<b>ios::in - </b>Open a file for reading.<br>
<b>ios::out - </b>Open a file for writing.<br>
<b>ios::trunk - </b>If the file already exists, its contents will be truncated before opening the file.<br>

<h2>Closing a File</h2>
<p>When a C++ program terminates, it automatically closes flushes all the streams, release all the allocated memory and close all the opened files. But it is always a good practice that a programmer should close all the opened files before program termination.<br>
    Following is the standard syntax for close() function, which is a member of fstream, ifstream, and ofstream objects.</p>

void close();

<h2>Writing to a File</h2>
<p>While doing C++ programming, you write information to a file from your program using the stream insertion operator (<<) just as you use that operator to output information to the screen. The only difference is that you use an ofstream or fstream object instead of the cout object.</p>

<h2>Reading from a File</h2>
<p>You read information from a file into your program using the stream extraction operator (<<) just as you use that operator to input information from the keyboard. The only difference is that you use an ifstream or fstream object instead of the cin object./p>

<h2>File Position Pointers</h2>
<p>Both istream and ostream provide member functions for repositioning the file-position pointer. These member functions are seekg ("seek get") for istream and seekp ("seek put") for ofstream. The argument to seekg and seekp normally is a long integer. A second argument can be specified to indicate the seek direction. The seek direction can be ios::beg (the default) for positioning relative to the beginning of a stream, ios::cur for positioning relative to the current position in a stream or ios::end for positioning relative to the end of a stream</p>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
