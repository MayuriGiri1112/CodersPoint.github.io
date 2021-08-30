-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 09:07 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clone1`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(5) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `c_name`, `link`) VALUES
(1, 'C', 'http://localhost/CodersPoint/C1.php'),
(2, 'Cpp', 'http://localhost/CodersPoint/Cpp1.php'),
(3, 'Java', 'http://localhost/CodersPoint/J1.php'),
(4, 'SQL', 'http://localhost/CodersPoint/SQL1.php');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `d_id` int(5) NOT NULL,
  `c_id` int(5) NOT NULL,
  `d_name` varchar(10) NOT NULL,
  `link` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`d_id`, `c_id`, `d_name`, `link`) VALUES
(1, 1, 'C', 'download1.php?cprog=c/C.pdf'),
(2, 2, 'c++', 'download1.php?cprog=c/Cpp.pdf'),
(3, 3, 'java', 'download1.php?cprog=c/Java.pdf'),
(4, 4, 'sql', 'download1.php?cprog=c/SQL.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `r_id` int(5) NOT NULL,
  `c_id` int(5) NOT NULL,
  `r_name` varchar(20) NOT NULL,
  `total_star` int(11) NOT NULL,
  `average` float NOT NULL,
  `user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`r_id`, `c_id`, `r_name`, `total_star`, `average`, `user`) VALUES
(1, 1, 'c', 56, 3.73333, 15),
(2, 2, 'c++', 61, 4.69231, 13),
(3, 3, 'java', 53, 4.07692, 13),
(4, 4, 'sql', 8, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `topic_name` varchar(50) NOT NULL,
  `topic_link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`topic_name`, `topic_link`) VALUES
('Overview to C', 'http://localhost/CodersPoint/C1.php'),
('Keywords and Identifiers in C', 'http://localhost/CodersPoint/C2.php'),
('Variables and Constants in C', 'http://localhost/CodersPoint/C3.php'),
('Data Types in C', 'http://localhost/CodersPoint/C4.php'),
('Input Output in C', 'http://localhost/CodersPoint/C5.php'),
('Operators in C', 'http://localhost/CodersPoint/C6.php'),
('Bitwise Operator in C', 'http://localhost/CodersPoint/C7.php'),
('Precedence and Associativity of operators in C', 'http://localhost/CodersPoint/C8.php'),
('Loop in C', 'http://localhost/CodersPoint/C9.php'),
('IF-ELSE in C', 'http://localhost/CodersPoint/C10.php'),
('WHILE Loop in C', 'http://localhost/CodersPoint/C11.php'),
('DO-WHILE Loop in C', 'http://localhost/CodersPoint/C12.php'),
('Break and Continue in C', 'http://localhost/CodersPoint/C13.php'),
('Switch Statement in C', 'http://localhost/CodersPoint/C14.php'),
('goto in C', 'http://localhost/CodersPoint/C15.php'),
('Functions in C', 'http://localhost/CodersPoint/C16.php'),
('User-Defined Functions in C', 'http://localhost/CodersPoint/C17.php'),
('Types of Functions in C', 'http://localhost/CodersPoint/C18.php'),
('Recursion in C', 'http://localhost/CodersPoint/C19.php'),
('Storage Class in C', 'http://localhost/CodersPoint/C20.php'),
('Arrays in C', 'http://localhost/CodersPoint/C21.php'),
('Multidimensional arrays in C', 'http://localhost/CodersPoint/C22.php'),
('Pointers in C', 'http://localhost/CodersPoint/C23.php'),
('Pointers and Arrays in C', 'http://localhost/CodersPoint/C24.php'),
('Dynamic Memory Allocation in C', 'http://localhost/CodersPoint/C25.php'),
('Strings in C', 'http://localhost/CodersPoint/C26.php'),
('Strings Function in C', 'http://localhost/CodersPoint/C27.php'),
('Structure in C', 'http://localhost/CodersPoint/C28.php'),
('Structure and Pointers in C', 'http://localhost/CodersPoint/C29.php'),
('Structure and Functions in C', 'http://localhost/CodersPoint/C30.php'),
('Unions in C', 'http://localhost/CodersPoint/C31.php'),
('Overview to C++', 'http://localhost/CodersPoint/Cpp1.php'),
('Structure of a C++ Program', 'http://localhost/CodersPoint/Cpp2.php'),
('Variables in C++', 'http://localhost/CodersPoint/Cpp3.php'),
('Variable Scope in C++', 'http://localhost/CodersPoint/Cpp4.php'),
('Constants in C++', 'http://localhost/CodersPoint/Cpp5.php'),
('Variable Storage Classes in C++', 'http://localhost/CodersPoint/Cpp6.php'),
('Operators in C++', 'http://localhost/CodersPoint/Cpp7.php'),
('Arrays in C++', 'http://localhost/CodersPoint/Cpp8.php'),
('String in C++', 'http://localhost/CodersPoint/Cpp9.php'),
('Pointers in C++', 'http://localhost/CodersPoint/Cpp10.php'),
('Structures in C++', 'http://localhost/CodersPoint/Cpp11.php'),
('Reference in C++', 'http://localhost/CodersPoint/Cpp12.php'),
('Enumeration and Typedef in C++', 'http://localhost/CodersPoint/Cpp13.php'),
('OUTPUT STREAM (cout) ', 'http://localhost/CodersPoint/Cpp14.php'),
('INPUT STREAM (cin)', 'http://localhost/CodersPoint/Cpp15.php'),
('ERROR STREAM (cerr)', 'http://localhost/CodersPoint/Cpp16.php'),
('LOG STREAM (clog)', 'http://localhost/CodersPoint/Cpp17.php'),
('IF-statement in C++', 'http://localhost/CodersPoint/Cpp18.php'),
('Switch Statement in C++', 'http://localhost/CodersPoint/Cpp19.php'),
('Loops in C++', 'http://localhost/CodersPoint/Cpp20.php'),
('Break and Continue in C++', 'http://localhost/CodersPoint/Cpp21.php'),
('Random Number in C++', 'http://localhost/CodersPoint/Cpp22.php'),
('Functions in C++', 'http://localhost/CodersPoint/Cpp23.php'),
('Declaration, Call and Argument in C++', 'http://localhost/CodersPoint/Cpp24.php'),
('Inline Function in C++', 'http://localhost/CodersPoint/Cpp25.php'),
('Recursion in C++', 'http://localhost/CodersPoint/Cpp26.php'),
('Basics of Classes in C++', 'http://localhost/CodersPoint/Cpp27.php'),
('Constructor - Destructor in C++', 'http://localhost/CodersPoint/Cpp28.php'),
('Friend Function in C++', 'http://localhost/CodersPoint/Cpp29.php'),
('Inheritance in C++', 'http://localhost/CodersPoint/Cpp30.php'),
('Function Overloading in C++', 'http://localhost/CodersPoint/Cpp31.php'),
('Operator Overloading in C++', 'http://localhost/CodersPoint/Cpp32.php'),
('Polymorphism and Virtual function in C++', 'http://localhost/CodersPoint/Cpp33.php'),
('Data Abstraction in C++', 'http://localhost/CodersPoint/Cpp34.php'),
('Data Encapsulation in C++', 'http://localhost/CodersPoint/Cpp35.php'),
('File handling in C++', 'http://localhost/CodersPoint/Cpp36.php'),
('Exception Handling in C++', 'http://localhost/CodersPoint/Cpp37.php'),
('Dynamic Memory in C++', 'http://localhost/CodersPoint/Cpp38.php'),
('Templates in C++', 'http://localhost/CodersPoint/Cpp39.php'),
('Introduction to Java', 'http://localhost/CodersPoint/J1.php'),
('Features of Java', 'http://localhost/CodersPoint/J2.php'),
('Pros and Cons of Java', 'http://localhost/CodersPoint/J3.php'),
('Environment Setup of Java', 'http://localhost/CodersPoint/J4.php'),
('Executing First Program in Java', 'http://localhost/CodersPoint/J5.php'),
('Variables in Java', 'http://localhost/CodersPoint/J6.php'),
('Data Types in Java', 'http://localhost/CodersPoint/J7.php'),
('Variable Scope in Java', 'http://localhost/CodersPoint/J8.php'),
('TypeCasting in Java', 'http://localhost/CodersPoint/J9.php'),
('Operators in Java', 'http://localhost/CodersPoint/J10.php'),
('Expression in Java', 'http://localhost/CodersPoint/J11.php'),
('Operator Precedence in Java', 'http://localhost/CodersPoint/J12.php'),
('IF-Statement in Java', 'http://localhost/CodersPoint/J13.php'),
('Switch Statement in Java', 'http://localhost/CodersPoint/J14.php'),
('WHILE Loop in Java', 'http://localhost/CodersPoint/J15.php'),
('DO-WHILE Loop in Java', 'http://localhost/CodersPoint/J16.php'),
('for Loop in Java', 'http://localhost/CodersPoint/J17.php'),
('Basics of Classes in Java', 'http://localhost/CodersPoint/J18.php'),
('Class Objects in Java', 'http://localhost/CodersPoint/J19.php'),
('Constructors in Java', 'http://localhost/CodersPoint/J20.php'),
('Method Overloading in Java', 'http://localhost/CodersPoint/J21.php'),
('Method Overridding in Java', 'http://localhost/CodersPoint/J22.php'),
('Static keyword in Java', 'http://localhost/CodersPoint/J23.php'),
('Inheritance in Java', 'http://localhost/CodersPoint/J24.php'),
('Types of Inheritance in Java', 'http://localhost/CodersPoint/J25.php'),
('final keyword in Java', 'http://localhost/CodersPoint/J26.php'),
('Abstraction in Java', 'http://localhost/CodersPoint/J27.php'),
('Arrays in Java', 'http://localhost/CodersPoint/J28.php'),
('String in Java', 'http://localhost/CodersPoint/J29.php'),
('Vectors in Java', 'http://localhost/CodersPoint/J30.php'),
('Wrapper Classes in Java ', 'http://localhost/CodersPoint/J31.php'),
('Interface in Java ', 'http://localhost/CodersPoint/J32.php'),
('Extending Interfaces in Java', 'http://localhost/CodersPoint/J33.php'),
('Implementing Interfaces in Java', 'http://localhost/CodersPoint/J34.php'),
('Accessing Interfaces in Java', 'http://localhost/CodersPoint/J35.php'),
('Introduction to Packages in Java', 'http://localhost/CodersPoint/J36.php'),
('Java API Package', 'http://localhost/CodersPoint/J37.php'),
('System Packages in Java', 'http://localhost/CodersPoint/J38.php'),
('Creating Threads in Java', 'http://localhost/CodersPoint/J39.php'),
('Stopping and blocking a thread in Java', 'http://localhost/CodersPoint/J40.php'),
('Life cycle of thread in Java', 'http://localhost/CodersPoint/J41.php'),
('Exception and Priority in Java', 'http://localhost/CodersPoint/J42.php'),
('Thread Synchronization in Java', 'http://localhost/CodersPoint/J43.php'),
('Runnable Interface in Java', 'http://localhost/CodersPoint/J44.php'),
('Exceptions in Java', 'http://localhost/CodersPoint/J45.php'),
('Try and catch in Java', 'http://localhost/CodersPoint/J46.php'),
('Custom Exception in Java', 'http://localhost/CodersPoint/J47.php'),
('Introduction to Applet in Java', 'http://localhost/CodersPoint/J48.php'),
('Life Cycle of Applets in Java', 'http://localhost/CodersPoint/J49.php'),
('Creating an Executable Applet in Java', 'http://localhost/CodersPoint/J50.php'),
('Designing a WebPage ', 'http://localhost/CodersPoint/J51.php'),
('Running an Applet in Java', 'http://localhost/CodersPoint/J52.php'),
('stream Classes in Java', 'http://localhost/CodersPoint/J53.php'),
('Byte Stream in Java', 'http://localhost/CodersPoint/J54.php'),
('Character Stream in Java', 'http://localhost/CodersPoint/J55.php'),
('Standard Stream in Java', 'http://localhost/CodersPoint/J56.php'),
('File in Java', 'http://localhost/CodersPoint/J57.php'),
('Introduction to SQL', 'http://localhost/CodersPoint/SQL1.php'),
('SQL Syntax', 'http://localhost/CodersPoint/SQL2.php'),
('Use of SQL SELECT statement', 'http://localhost/CodersPoint/SQL3.php'),
('Use of DISTINCT keyword', 'http://localhost/CodersPoint/SQL4.php'),
('Use of WHERE Clause ', 'http://localhost/CodersPoint/SQL5.php'),
('AND-OR operator', 'http://localhost/CodersPoint/SQL6.php'),
('ORDER BY keyword', 'http://localhost/CodersPoint/SQL7.php'),
('INSERT into table statement ', 'http://localhost/CodersPoint/SQL8.php'),
('How to UPDATE the table ', 'http://localhost/CodersPoint/SQL9.php'),
('Use of DELETE statement', 'http://localhost/CodersPoint/SQL10.php'),
('SQL LIKE operator', 'http://localhost/CodersPoint/SQL11.php'),
('Use of BETWEEN operator', 'http://localhost/CodersPoint/SQL12.php'),
('ALIAS', 'http://localhost/CodersPoint/SQL13.php'),
('SQL JOIN', 'http://localhost/CodersPoint/SQL14.php'),
('CONSTRAINTS', 'http://localhost/CodersPoint/SQL15.php'),
('NOT NULL Constraint', 'http://localhost/CodersPoint/SQL16.php'),
('UNIQUE Constraint', 'http://localhost/CodersPoint/SQL17.php'),
('PRIMARY KEY Constraint', 'http://localhost/CodersPoint/SQL18.php'),
('FOREIGN KEY Constraint', 'http://localhost/CodersPoint/SQL19.php'),
('DROP', 'http://localhost/CodersPoint/SQL20.php'),
('ALTER', 'http://localhost/CodersPoint/SQL21.php'),
('SQL INCREMENT', 'http://localhost/CodersPoint/SQL22.php'),
('CREATE VIEW statement', 'http://localhost/CodersPoint/SQL23.php'),
('SQL DATE function', 'http://localhost/CodersPoint/SQL24.php'),
('SQL NULL values', 'http://localhost/CodersPoint/SQL25.php'),
('SQL NULL Functions', 'http://localhost/CodersPoint/SQL26.php'),
('SQL Data Types', 'http://localhost/CodersPoint/SQL27.php'),
('The AVG() Function', 'http://localhost/CodersPoint/SQL28.php'),
('Count function', 'http://localhost/CodersPoint/SQL29.php'),
('MAX()', 'http://localhost/CodersPoint/SQL30.php'),
('MIN()', 'http://localhost/CodersPoint/SQL31.php'),
('SUM() Function', 'http://localhost/CodersPoint/SQL32.php'),
('SQL GROUP BY statement', 'http://localhost/CodersPoint/SQL33.php'),
('SQL HAVING Clause', 'http://localhost/CodersPoint/SQL34.php'),
('Upper Case Function', 'http://localhost/CodersPoint/SQL35.php'),
('Lower Case Function', 'http://localhost/CodersPoint/SQL36.php'),
('SQL mid() function', 'http://localhost/CodersPoint/SQL37.php'),
('SQL len() function', 'http://localhost/CodersPoint/SQL38.php'),
('SQL round() function', 'http://localhost/CodersPoint/SQL39.php'),
('SQL NOW() function', 'http://localhost/CodersPoint/SQL40.php'),
('Quick Reference', 'http://localhost/CodersPoint/SQL41.php');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `Name` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Branch` varchar(10) NOT NULL,
  `Filename` varchar(30) NOT NULL,
  `Path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`Name`, `Subject`, `Branch`, `Filename`, `Path`) VALUES
('Mayuri Giri', 'PHP', 'BCA', 'Unit 1_Introduction to PHP.pdf', 'UploadedData/Unit 1_Introducti'),
('Komal Yadav', 'LSP', 'CS', 'Unit-1', 'UploadedData/LSP_Unit-1.pptx');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(6) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `EMail` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Telephone` varchar(15) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `Name`, `EMail`, `Password`, `Telephone`, `Address`) VALUES
(1, 'Komal', 'komal@gmail.com', 'komal', '748596748', 'MHOW'),
(2, 'Mayuri Giri', 'mayuri@gmail.com', 'mayuri', '7441165346', 'Pithampur'),
(3, 'ABC', 'abc@gmail.com', 'abc', '7659864213', 'XYZ');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `not_required` int(11) NOT NULL,
  `u_id` int(10) NOT NULL,
  `c_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`not_required`, `u_id`, `c_id`) VALUES
(13, 1, 1),
(16, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `rating_ibfk_1` (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`not_required`),
  ADD KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `d_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `r_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `not_required` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `download`
--
ALTER TABLE `download`
  ADD CONSTRAINT `download_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `course` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `course` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
