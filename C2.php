<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!--Latest compiled and minified CSS-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="style.css" type="text/css">
        <!--jQuery library-->

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Keywords and Identifiers</title>

</head>
<body>

<?php
include("courses_navbar.php");
include("C_sidenav.php");
?>

<div class="main">
	<br>
        <?php
include("search.php");
?>
<br><div class="container">
            <div class="jumbotron">
                <h1>Keywords and Identifiers</h1>
            </div>
        </div>
            <p>

            <h1>Character set</h1>
Character set are the set of alphabets, letters and some special characters that are valid in C language.

<h3>Alphabets:</h3>

Uppercase: A B C  ....................................  X Y Z<br>

Lowercase: a b c  ......................................  x y z

<h3>Digits:</h3>

0 , 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 ........

<h3>Special Characters:</h3>

Special Characters in C language<br>
<table class="e">
    <tbody>
        <tr class="f"><td class="f">,</td>  <td class="f"><</td>  <td class="f">></td>  <td class="f">.</td>  <td class="f">_</td>  <td class="f">(</td>  <td class="f">)</td>  <td class="f">;</td>  <td class="f">$</td>  <td class="f">:</td>  <td class="f">%</td>  <td class="f">[</td>  <td class="f">]</td>  <td class="f">#</td>  <td class="f">?</td></tr>
        <tr class="f"><td class="f">'</td>  <td class="f">&</td>  <td class="f">{</td>  <td class="f">}</td>  <td class="f">"</td>  <td class="f">^</td>  <td class="f">!</td>  <td class="f">*</td>  <td class="f">/</td>  <td class="f">|</td>  <td class="f">-</td>  <td class="f">\</td>  <td class="f">~</td>  <td class="f">+</td>      <td class="f"> </td></tr>
    </tbody>
</table>
<h3>White space Characters:</h3>

blank space, new line, horizontal tab, carriage return and form feed

<h1>Keywords</h1>
Keywords are the reserved words used in programming. Each keywords has fixed meaning and that cannot be changed by user. For example:

int money;
Here, int is a keyword that indicates, 'money' is of type integer. 

As, C programming is case sensitive, all keywords must be written in lowercase.

<h3>Keywords in C Language:</h3>
<table class="e">
    <tbody>
        <tr class="f"><td class="f">auto</td>   <td class="f">double</td> <td class="f">int</td>        <td class="f">struct</td></tr>
        <tr class="f"><td class="f">break</td>    <td class="f">else</td>         <td class="f">long</td>       <td class="f">switch</td></tr>
        <tr class="f"><td class="f">case</td>   <td class="f">enum</td>         <td class="f">register</td>   <td class="f">typedef</td></tr>
        <tr class="f"><td class="f">char</td>   <td class="f">extern</td> <td class="f">return</td>     <td class="f">union</td></tr>
        <tr class="f"><td class="f">continue</td>     <td class="f">for</td>          <td class="f">signed</td>     <td class="f">void</td></tr>
        <tr class="f"><td class="f">do</td>           <td class="f">if</td>     <td class="f">static</td>     <td class="f">while</td></tr>
        <tr class="f"><td class="f">default</td>      <td class="f">goto</td>         <td class="f">sizeof</td>     <td class="f">volatile</td></tr>
        <tr class="f"><td class="f">const</td>    <td class="f">float</td>  <td class="f">short</td>      <td class="f">unsigned</td></tr>
    </tbody>
</table><br><br>
Besides these keywords, there are some additional keywords supported by Turbo C.

Additional Keywords for Borland C
asm far interrupt pascal  near  huge  cdecl
All these keywords, their syntax and application will be discussed in their respective topics.

<h1>Identifiers</h1>
In C programming, identifiers are names given to C entities, such as variables, functions, structures etc. Identifier are created to give unique name to C entities to identify it during the execution of program. For example:<br><br>

int money;<br>
int mango_tree;<br><br>
Here, money is a identifier which denotes a variable of type integer. Similarly, mango_tree is another identifier, which denotes another variable of type integer.

<h3>Rules for writing identifier:</h3>
<ol>
    <li>An identifier can be composed of letters (both uppercase and lowercase letters), digits and underscore '_' only.</li>
    <li>The first letter of identifier should be either a letter or an underscore. But, it is discouraged to start an identifier name with an underscore though it is legal. It is because, identifier that starts with underscore can conflict with system names. In such cases, compiler will complain about it. Some system names that start with underscore are _fileno, _iob, _wfopen etc.</li>
    <li>There is no rule for the length of an identifier. However, the first 31 characters of an identifier are discriminated by the compiler. So, the first 31 letters of two identifiers in a program should be different.</li>
</ol>
<h3>Tips for Good Programming Practice:</h3>

Programmer can choose the name of identifier whatever they want. However, if the programmer choose meaningful name for an identifier, it will be easy to understand and work on, particularly in case of large program.</p>
</div><br><br><br><br>
<?php
include("footer.php");
?>
</body>
</html>
