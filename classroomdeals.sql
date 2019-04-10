-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 08, 2017 at 12:42 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classroomdeals`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` char(25) NOT NULL,
  `category_name` varchar(15) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
('1001', 'Engineering'),
('1002', 'Science'),
('1003', 'Commerce'),
('1004', 'Arts'),
('1005', 'Law'),
('1006', 'Management');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `item_id` char(25) NOT NULL,
  `user_id` char(25) NOT NULL,
  `category_id` char(10) NOT NULL,
  `item_title` varchar(1000) NOT NULL,
  `item_description` varchar(5000) DEFAULT NULL,
  `item_price` int(5) NOT NULL,
  `item_image` text NOT NULL,
  `item_mobile_number` varchar(10) NOT NULL,
  `item_college` char(40) NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `user_id` (`user_id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `user_id`, `category_id`, `item_title`, `item_description`, `item_price`, `item_image`, `item_mobile_number`, `item_college`) VALUES
('6222', '1359174417', '1001', 'Introduction to Algorithms', 'This internationally acclaimed textbook provides a comprehensive introduction to the modern study of computer algorithms. It covers a broad range of algorithms in depth, yet makes their design and analysis accessible to all levels of readers. Each chapter is relatively selfcontained and presents an algorithm, a design technique, an application area, or a related topic. The algorithms are described and designed in a manner to be readable by anyone who has done a little programming. The explanations have been kept elementary without sacrificing depth of coverage or mathematical rigor.\r\n\r\nThe third edition has been revised and updated throughout. It includes two completely new chapters, on Van Emde Boas trees and Multithreaded algorithms, and substantial additions to the chapter on recurrences (now called Divide and Conquer). It features improved treatment of dynamic programming and greedy algorithms and a new notion of edgebased flow in the material on flow networks. Many new exercises and problems have been added in this edition. The text is intended primarily for students studying algorithms or data structures. As it discusses engineering issues in algorithm design, as well as mathematical aspects, it is equally well suited for selfstudy by technical professionals.', 780, 'uploads/algo clrs.jpeg', '8879253329', '1'),
('6629', '1307423579', '1003', 'Advanced Accountancy', 'Fully solved theoretical and practical questions of past 41 CA-Intermediate (IPC) exams ( including May 2016 )\r\nApprox. 320 solved practical problems with working notes\r\nFully illustrated theory with more than 270 illustrations\r\nCoverage of all applicable Accounting Standards with explanations,illustrations,examples & flow charts\r\nUpdated as per Companies Act 2013', 800, 'uploads/accountacy.jpg', '9575468213', '4'),
('5337', '1390407562', '1002', 'Bad Science', 'Since 2003 Dr Ben Goldacre has been exposing dodgy medical data in his popular Guardian column. In this eye-opening book he takes on the MMR hoax and misleading cosmetics ads, acupuncture and homeopathy, vitamins and mankindâ€™s vexed relationship with all manner of â€˜toxinsâ€™. Along the way, the self-confessed â€˜Johnny Ball cum Witchfinder Generalâ€™ performs a successful detox on a Barbie doll, sees his dead cat become a certified nutritionist and probes the supposed medical qualifications of â€˜Drâ€™ Gillian McKeith.\r\n\r\nFull spleen and satire, Ben Goldacre takes us on a hilarious, invigorating and ultimately alarming journey through the bad science we are fed daily by hacks and quacks.', 269, 'uploads/badscience.jpg', '9853214567', '3'),
('9760', '1310062415', '1001', 'Programming with Java', 'Authored by the most trusted name in the area, this text acts like a \"Primer\", moving step by step - starting from fundamentals to core concepts in much desired logical flow - and hence, renders conceptual clarity along with simplicity. It is well suited for a first-level programming course in Java. The book offers a comprehensive coverage of basic concepts of Java programming, in the light of object orientation, explained in simple language and supported with good examples and programming exercises.\r\n\r\nSalient Features:\r\n\r\nLatest version of Java SE 7\r\nNew solved examples for Multithreading, Event handling, Classes and Strings\r\nIncludes model questions from Sun Certified Java Programmer Exam\r\nTable of Contents:\r\n\r\nFundamentals of Object-Oriented Programming\r\nJava Evolution\r\nOverview of Java Language\r\nConstants, Variables and Data Types\r\nOperators and Expressions\r\nDecision Making and Branching\r\nDecision Making and Looping\r\nClasses, Objects and Methods\r\nArrays, Strings and Vectors\r\nInterfaces: Multiple Inheritance\r\nPackages: Putting Classes Together\r\nMultithreaded Programming\r\nManaging Errors and Exceptions\r\nApplet Programming\r\nGraphics Programming\r\nManaging Input/Output Files in Java\r\nJava Collections', 380, 'uploads/java balguruswamy.jpeg', '8865213245', '1'),
('5622', '1378067297', '1006', 'The Business School', 'The Business School is a popular book written by Robert T. Kiyosaki. From this book the reader will get know all information of Multi-level marketing. He explains beautifully why Multi- level-marketing is important.\r\n\r\nMulti-level marketing is a marketing approach in which the sales strength is repaid not only for sales they produce, but also for the sales of the other salespersons that they hire. This hired sales force is mentioned as the participant\'s \"downline\" and can offer multiple levels of return.\r\n\r\nMLM is also known as pyramid selling, network marketing and referral marketing. You will get to know the ebb and flows of MLM through this book. Moreover, the book gives a complete and innovative view points on the matter of network marketing and gives important lessons on running a successful network marketing chain.\r\n\r\nAbout the Author\r\nRobert Toru Kiyosaki is an famous American businessman, investor, self-help author, educator, motivational speaker, financial literacy activist, financial commentator and radio personality. Kiyosaki is the creator of the Rich Dad Company, which provides personal education and Business education through books, games, seminars, blogs, coaching and workshops. He is also the originator of the Cashflow board and software games to incorporate adults and children business and financial concepts.', 290, 'uploads/The Business School.jpg', '8965213245', '5'),
('3206', '1381554119', '1003', 'UGC NET/SET', 'The University Grants Commission (UGC) conducts the National Eligibility Test (NET) twice a year to determine eligibility for lectureship and for award of Junior Research Fellowship (JRF) to Indian nationals to ensure minimum standards for the entrants in the teaching profession and research. UGC NET Tutor Commerce Paper II & III has been revised as per the new syllabi and examination pattern issued by the UGC for Commerce Paper II & III.\r\n\r\nThe book has been divided into40 Chapters namely Elements of Business Environment, Economic Environment, Policies & Planning, Legal Environment in India, Liberalisation, Privatisation & Globalisation, Accounting, Partnership, Advanced Company Accounts, Cost & Management, Business Commerce, Utility Analysis & Laws of Returns, Market Structure & Price Determination, Statistics, Analysis & Interpretation of Data, Normal Distribution, Computer Applications, Management & its Functions', 560, 'uploads/UGC.jpg', '9825314562', '4'),
('8555', '1235985246', '1001', 'Civil Engineering', 'The important topics that are in the book are mechanics, applied mechanics, hydraulics and fluids mechanics, strength of materials, hydraulic machines, soil mechanics and foundations, building material irrigation, concrete technology, building construction, public health engineering and engineering geology. The topics covered include all the course material for under-graduated courses as well as that for objective type multiple choice questions also.\r\n\r\nIt consists of concise conventional theory of each subject and further each concept and theoretical topics are framed into nearly 200 objective type questions.', 480, 'uploads/Civil.jpg', '9856321478', '1'),
('9320', '1268813553', '1001', 'Objective Computer Science', '1. Overview of Computer System and Data Processing\r\n2. Introduction to Computers\r\n3. Evolution of Computers\r\n4. Digital Logic Families\r\n5. Number System and Arithmetic\r\n6. Boolean Algebra and Logic Gates\r\n7. Combinational Logic Design\r\n8. Computer System\r\n9. Microprocessor\r\n10. Memory Organisation', 250, 'uploads/comps.jpg', '7854362149', '1'),
('5357', '1310851101', '1002', 'Encyclopedia of General Science', 'Encyclopaedia of General Science is an ideal book for competitive examinations. The concept of the book is based on NCERT Science Books. The General Science book covers subjects like Physics, Chemistry, Biology, Space Science, Agriculture & Animal Husbandry, Environment, Health and Computer Science, which later sub-divided into various chapters.\r\n\r\nThe book helps in clearing the UPSC & State Level Civil Service Examinations, SSC, Railways and other competitive exams and thus contains 1000 of multiple choice questions. On some of the topics complexities has been simplified for the non-science students. Each section in the book contains appendices, glossary and Assessment at the end. Get the book from Amazon India at reasonable rates from the market. The book is a Question Bank of General Science Objective Questions.', 399, 'uploads/Science encyclopedia.jpg', '7542135684', '3'),
('7400', '1282452481', '1002', '101 Science Experiments', 'Be the next Albert Einstein with these cool science experiments for kids and discover how to bend light, weigh air and even make a rainbow! 101 Great Science Experiments is bursting with fun experiments for you to try out at home revealing the secrets of science through practical and exciting projects. Find out how to use everyday objects to discover the principles of science.\r\n\r\nWith 101 science experiments for kids inside covering topics such as colour, magnets, senses, electricity and much more.', 350, 'uploads/101 science.jpg', '9852147632', '3'),
('3082', '1233281180', '1002', 'NCERT Science', 'NCERT National textbook for students seeking to study for competitive entrance exams.', 99, 'uploads/ncert science.jpg', '8651423789', '3'),
('3336', '1277714436', '1004', 'The Art of War', 'Sun Tzuâ€™s Art of War is a widely acclaimed book on military strategy that has influenced and shaped the idea of Western and Eastern nations military philosophy. It presents complete instructions on how to win battles and manage conflicts. The theories proposed in Art of War are extremely beneficial on the battle ground and has been tried and tested by many successful military generals around the world. It is difficult to ascertain exactly when was this book written and many historians have ascribed it to different times.\r\n\r\nThe Art of War has established its significance not just as a valuable book for military strategies but it also gives lesson in diplomacy and public administration and planning. It stresses on the need for healthy and friendly relations with other nations. In the context of changing world politics and rising interest in foreign policy affairs, The Art of War is a valuable read to understand about what idea goes behind shaping the strategies and policy with our neighbouring nations.', 950, 'uploads/the art of war.jpg', '8531246578', '4'),
('8022', '1340406066', '1004', 'Indian Art and Culture', 'Meant for Aspirants of the Civil Services (Preliminary and Mains) examination, this book covers the syllabus of Indian Heritage and Culture of the General Studies Paper I. The author has provided a wide ranged knowledge base on Indian art, paintings, music and architecture with the help of several pictures and diagrams which he believes, will help arouse the readerâ€™s interest. The content is also supported with a plethora of questions that will help students to prepare for the examination.', 475, 'uploads/indian art.jpg', '7788994455', '4'),
('4887', '1288465469', '1006', 'Marketing Management', 'The world of marketing is changing everydayâ€“and in order for students to have a competitive edge, they need a textbook that reflects the best of todayâ€™s marketing theory and practices. Marketing Management, 15/e, is the gold standard marketing text because its content and organization consistently reflect the latest changes in todayâ€™s marketing theory and practice. The fifteenth edition is updated wherever appropriate to provide the most comprehensive, current, and engaging marketing management text as possible.', 955, 'uploads/marketing.jpg', '9865321478', '5'),
('5868', '1292616447', '1006', 'Financial Management', 'This new edition of this well accepted text-cum-reference book on financial management presents the central theme and concerns of corporate finance and strategic financial management. Integrating the latest changes in the Indian financial system, the book captures a well rounded description of tax and regulatory framework, various issues in financial management and a discussion of financial management practices with adequate treatment of analytical tools.', 750, 'uploads/financial management.jpg', '8536214578', '5'),
('6899', '1260908905', '1004', 'Gate Biotechnology 2018', 'GATE 2018 Solved Papers for Biotechnology consists of 18 completely solved previous yearâ€™s papers from 2000-2017. Each question is supported with detailed solution for the better understanding of concepts and techniques to solve the questions. This book will completely help the student to familiarize and practice with the original exam pattern.', 550, 'uploads/gate biotech.jpg', '9853621478', '6'),
('7849', '1259272233', '1004', 'MCQ Biotechnology', 'GATE 2018 Solved Papers for Biotechnology consists of 18 completely solved previous yearâ€™s papers from 2000-2017. Each question is supported with detailed solution for the better understanding of concepts and techniques to solve the questions. This book will completely help the student to familiarize and practice with the original exam pattern.', 880, 'uploads/mcq biotech.jpg', '8954362147', '6'),
('7854', '1270663703', '1004', 'IIT-JAM: M.Sc. Biotechnology', 'This comprehensive book is useful for IIT-JAM Biotechnology for the purpose of Study and practice of questions based on the latest pattern of the examination. This book included Previous Years Papers and Practice Test Papers (Solved). Detailed Answers have also been provided for the questions for Better Understanding of the Candidates.', 420, 'uploads/iit jam biotech.jpg', '8875642315', '6'),
('3292', '1324964427', '1001', 'The Lean Startup', 'The Lean Start up is a book that explains how to work on your innovative concepts as businessman through moments of anxiety and dilemma. The way to start a company has changed drastically over the time and this book will explain you how to utilize this change to our benefit. The book provides the plan, how a startup is a company devoted to creating something innovative under circumstances of extreme uncertainty. As per author Every one of us has one thing in common and that is to clear the way of uncertainty and reach the target of having a sustainable, unbeaten and balanced company.\r\n\r\nThe book emphasizes on the developed companies that are both economically proficient and make use of human imagination more frequently. Influenced by lessons from lean manufacturing, it relies depends on validate learning, rapid scientific testing, as well as a number of counter-intuitive exercises that shorten product growth cycles, measure actual development without resorting to vanity metrics and learn what consumers really want. Thereby, it a organization to move directions with agility, altering plans inch by inch, minute by minute. The book make you learn entrepreneurship, in organization of all sizes, a way to judge their vision continuously and to adapt and adjust according to situation.', 399, 'uploads/leanstartup.png', '8965321475', '7'),
('6978', '1331309494', '1001', 'The Millionaire Fastlane', 'Is the financial plan of mediocrity -- a dream-stealing, soul-sucking dogma known as \"The Slowlane\" your plan for creating wealth? You know how it goes; it sounds a little something like this: \"Go to school, get a good job, save 10% of your paycheck, buy a used car, cancel the movie channels, quit drinking expensive Starbucks lattes, save and penny-pinch your life away, trust your life-savings to the stock market, and one day, when you are oh, say, 65 years old, you can retire rich.\" The mainstream financial gurus have sold you blindly down the river to a great financial gamble: You have been hoodwinked to believe that wealth can be created by recklessly trusting in the uncontrollable and unpredictable markets: the housing market, the stock market, and the job market. This impotent financial gamble dubiously promises wealth in a wheelchair -- sacrifice your adult life for a financial plan that reaps dividends in the twilight of life. Accept the Slowlane as your blueprint for wealth and your financial future will blow carelessly asunder on a sailboat of HOPE: HOPE you can find a job and keep it, HOPE the stock market does not tank, HOPE the economy rebounds, HOPE, HOPE, and HOPE. Do you really want HOPE to be the centerpiece for your familys financial plan? Drive the Slowlane road and you will find your life deteriorate into a miserable exhibition about what you cannot do, versus what you can. For those who do not want a lifetime subscription to mediocrity and a slight chance of elderly riches, there is an alternative; an expressway to extraordinary wealth that can burn a trail to financial independence faster than any road out there. -- Why jobs, 401(k)s, mutual funds, and 40-years of mindless frugality will never make you rich young. -- Why most entrepreneurs fail and how to immediately put the odds in your favor. -- The real law of wealth: Leverage this and wealth has no choice but to be magnetized to you. -- The leading cause of poorness: Change this and you change', 350, 'uploads/fastlane.jpg', '8879253329', '7'),
('5188', '1341580199', '1001', 'The First 20 Hours', 'Lots of books promise to change your life. This one actually will -Seth Godin\r\n\r\nPick up any new skill in just 20 hours...\r\n\r\nWant to learn to paint, play the piano, launch a business, fly a plane? Then pick up this book and set aside twenty hours to go from knowing nothing to performing like a pro. Thats it.\r\n\r\nJosh Kaufman, author of international bestseller The Personal MBA, has developed this brilliant approach to mastering anything fast.\r\n\r\nYou will learn how to:\r\nâ€¢ Focus energy on acquiring key skill sets\r\nâ€¢ Eliminate obstacles and discover critical tools\r\nâ€¢ Create rapid feedback loops\r\nâ€¢ Work against the clock to get better fast\r\n\r\nWith examples ranging from writing a web program to learning an instrument to picking up windsurfing, Kaufman shows how to break complexity into simple tasks, make the very best of your limited time and solve unexpected problems.\r\n\r\nIn The First 20 Hours you will learn how to acquire any skill in record time - and have a lot of fun along the way.\r\n\r\nAfter reading this, you will be ready to take on any number of skills and make progress on that big project you have been putting off for years - Chris Guillebeau, author of The $100 Startup', 299, 'uploads/20hours.jpg', '7788995648', '7'),
('9866', '1274387723', '1001', 'The 100$ Startup', 'Change your job to change your life\r\n\r\nYou no longer need to work nine-to-five in a big company to pay the mortgage, send your kids to school and afford that yearly holiday. You can quit the rat race and start up on your own - and you do not need an MBA or a huge investment to do it.\r\n\r\nThe $100 Startup is your manual to a new way of living. Learn how to:\r\n\r\n- Earn a good living on your own terms, when and where you want\r\n\r\n- Achieve that perfect blend of passion and income to make work something you love\r\n\r\n- Take crucial insights from 50 ordinary people who started a business with $100 or less\r\n\r\n- Spend less time working and more time living your life', 349, 'uploads/100$startup.jpg', '8953621457', '7'),
('9569', '1301855339', '1001', 'Be Obsessed or Be Average', 'We are in the middle of an epidemic of average. So-called \"normal\" people get up every day, go to work, do what is asked of them, leave promptly at 5, and return home to sit on the couch and watch TV. Society tells us that this is what it means to lead a balanced life. Do not stress too much or work too hard. Your career is not everything. But Grant Cardone thinks this preoccupation with balance has really just given an excuse to be mediocre. The bestselling author, self-made multimillionaire, radio and TV personality, and owner of Grant Cardone TV knows that if you want real success, you have to be obsessed. You have to be hungry and hyper-focused and insatiable, and not listen to naysayers who tell you to tone it down. You also have to know how to harness that obsession so that you can use it to your advantage. Some of his maxims:-\"Criticism is easily avoided by saying nothing, doing nothing, and being nothing.\"-\"Never fear the haters - fear the weak who listen to them.\"-\"Most people are dying at 20 and making it official at 80. Most people are living their life with nothing to brag or talk about.\"If you are looking for someone to coddle you and make excuses for your lack of success, you have come to the wrong book. For many people, a career is not everything. For everyone else, there is Grant Cardone.', 888, 'uploads/be obsessed.jpg', '8976521346', '7'),
('2288', '1250596689', '1001', 't', 't', 1, 'uploads/be obsessed.jpg', '1111111111', '1'),
('8352', '1274186105', '1001', 'book', 'book', 199, 'uploads/100$startup.jpg', '8097713927', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` char(25) NOT NULL,
  `user_name` char(25) NOT NULL,
  `user_email` char(25) NOT NULL,
  PRIMARY KEY (`user_id`(21))
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
