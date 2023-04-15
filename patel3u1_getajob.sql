-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2023 at 09:53 PM
-- Server version: 10.4.28-MariaDB-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patel3u1_getajob`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `recruiter_name` varchar(60) NOT NULL,
  `recruiter_email` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `job_id` int(11) NOT NULL,
  `job_description` text NOT NULL,
  `posted_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`recruiter_name`, `recruiter_email`, `company`, `job_name`, `job_id`, `job_description`, `posted_date`) VALUES
('Aksh Patel', 'akshpatel@getajob.com', 'Bizagility', 'Administrative Office Assistant ', 11001, 'Are you a detail-oriented individual with strong organizational skills? Do you thrive in a fast-paced environment and enjoy multitasking? If so, we have an exciting opportunity for you! We are currently seeking an entry-level Administrative Office Assistant to join our team, and help us manage our daily operations.\r\nResponsibilities:\r\n• Manage our calendar and schedule appointments\r\n• Respond to emails and phone calls in a timely and professional manner\r\n• Coordinate meetings and events, including booking venues and arranging catering\r\n• Manage our filing system, ensuring that all documents are properly stored and easily accessible\r\n• Assist with the preparation of reports and presentations\r\n• Provide support to our team, as needed\r\nQualifications:\r\n• High school diploma or equivalent\r\n• Strong organizational and time management skills\r\n• Excellent communication and interpersonal skills\r\n• Ability to work independently and in a team environment\r\n• Proficient in Microsoft Office Suite, including Word, Excel, and PowerPoint\r\n• Familiarity with Quickbooks or other accounting software is a plus\r\n', '2023-04-10 02:00:14'),
('Lisa Upton', 'lisa@getajob.com', 'Google', 'Product Manager', 11002, 'Minimum qualifications:\r\nBachelor\'s degree or equivalent practical experience.\r\n8 years of experience in product management, co-founder or related technical role.\r\n3 years of experience building and shipping technical products.\r\nExperience developing/launching products/technologies within one or more of the following: Cloud, SaaS, enterprise, internal tools, and/or supply chain networks.\r\nPreferred qualifications:\r\n3 years of people management experience with direct reports.\r\nExperience driving product vision, go-to-market strategy, and design discussions.\r\nExperience managing day-to-day technical and design direction.\r\nExperience in one or more of the following: cloud infrastructure, SaaS, big data, security and privacy, development and operations, or artificial intelligence/machine learning.\r\nKnowledge of multiple functional areas such as Product Management, Engineering, UX/UI, Sales, Customer Support, Finance, or Marketing.\r\nAbility to influence multiple stakeholders without direct authority.', '2023-04-14 23:57:07'),
('Aksh Patel', 'akshpatel@getajob.com', 'Meta', 'Developer', 11003, 'Experience leading projects with industry-wide impact experience communicating and working across functions to drive solutions Significant experience in mentoring/influencing senior engineers across organizations\r\nProven track record of planning multi-year roadmap in which shorter-term projects ladder to the long-term vision \r\nExperience in driving large cross-functional/industry-wide engineering efforts 12+ years coding experience in C, C++, Java and/or C# 12+ years experience building server applications\r\nBachelor\'s degree in Computer Science, Computer Engineering, relevant technical field, or equivalent practical experience.\r\nPreferred Qualifications:\r\nExperience with operating system internals, filesystems, programming language design, compilers ', '2023-04-14 23:57:07'),
('Dhruv Bera', 'berad@getajob.com', 'LinkedIn', 'Data Anaylst', 11004, 'Responsibilities\r\nWork closely with project managers to understand and maintain focus on their analytics needs, including critical metrics and KPIs, and deliver actionable insights to relevant decision-makers\r\nProactively analyze data to answer key questions for stakeholders or yourself, with an eye on what drives business performance, and investigate and communicate which areas need improvement in efficiency and productivity\r\nCreate and maintain rich interactive visualizations through data interpretation and analysis, with reporting components from multiple data sources\r\nDefine and implement data acquisition and integration logic, selecting an appropriate combination of methods and tools within the defined technology stack to ensure optimal scalability and performance of the solution\r\nDevelop and maintain databases by acquiring data from primary and secondary sources, and build scripts that will make our data evaluation process more flexible or scalable across datasets\r\nRequired skills and qualifications\r\nThree or more years of experience mining data as a data analyst\r\nProven analytics skills, including mining, evaluation, and visualization\r\nTechnical writing experience in relevant areas, including queries, reports, and presentations\r\nStrong SQL or Excel skills, with aptitude for learning other analytics tools\r\nPreferred skills and qualifications\r\nBachelor’s degree (or equivalent) in mathematics, computer science, economics, or statistics\r\nExperience with database and model design and segmentation techniques\r\nStrong programming experience with frameworks, including XML, JavaScript, and ETL\r\nPractical experience in statistical analysis through the use of statistical packages, including Excel, SPSS, and SAS\r\nProven success in a collaborative, team-oriented environment', '2023-04-15 00:01:18'),
('Aksh Patel', 'akshpatel@getajob.com', 'Indeed Inc.', 'Business Analyst', 11005, 'REQUIREMENTS:\r\nPost-Secondary Degree/Diploma in a related field\r\nComputer Science, Engineering, or Business\r\n2 years in IT field\r\n3 years in Business Process Improvement\r\nExcellent verbal and written communication skills\r\nStrong analytical and problem-solving skills\r\nAbility to evolve with a rapidly changing environment and anticipate changes in technology\r\nKnowledge of current and emerging technologies\r\nPast hands-on experience in delivering products and services\r\nExperience summarizing and presenting findings and challenges to manager level employees\r\nRESPONSIBILITIES:\r\nFacilitate the design, implementation, and communication of customer focused solutions\r\nWork with key business customers to define project scope and identify and prioritize requirements.\r\nDefine, manage, and implement the solutions to identified business issues\r\nFocus on continuous process improvement and user satisfaction by increasing IT’s value through innovation and emerging technologies.\r\nIdentify opportunities and recommend solutions that will enhance or improve current business processes.\r\nResearch, design, and implement the appropriate technologies to support and improve corporate communications, access to information, and end-user productivity.\r\nPerform project management duties for IT-related undertakings, including clear capture of business requirements, provision of functional deliverables, milestone planning, and project post mortems.\r\nPerform liaison duties between users, operations, and programming personnel in the areas of systems design, modifications or trouble shooting.\r\nStay informed on new or emerging trends and technologies that provide clear benefits to the organization, business partners, and/or customers.\r\nOther Duties as assigned', '2023-04-15 00:01:18'),
('Lisa Upton', 'lisa@getajob.com', 'JP Morgan & Chase Co.', 'Senior Accountant', 11006, 'Required qualifications, capabilities, and skills\r\nUniversity graduate, preferably with major in Information System or Accounting / Finance / Business Administration / Economics.\r\n8+ year(s) of relevant experience within the finance industry & knowledge of financial products / accounting & finance principles.\r\nStrong analytical, problem-solving skills with operational experience & track record in designing client solutions.\r\nLogical, problem-solving & technical analyst with ability to piece together the E2E processes through gathering information from each functional areas;\r\nProficient with Microsoft Office (Word, Excel, PowerPoint, Visio etc...)\r\nExcellent written and verbal communication. Fluency in English and effective communicator (proficiency in Mandarin/Cantonese is advantageous)\r\nAbility to work flexible hours, work independently and collaborate with various stakeholders and regional teams.\r\nPreferred qualifications, capabilities, and skills\r\nHighly motivated, execution driven, flexible & versatile character with ability to influence and negotiate for results.\r\nStrong end to end ownership, governance, controls, risks and dependency management;\r\nAbility to work both independently, cope with multiple priorities & taking clear ownership for delivery, and collaborate with team. Highly motivated with a positive can-do attitude - adaptable, versatile and able to manage ambiguity.', '2023-04-15 00:05:02'),
('Lisa Upton', 'lisa@getajob.com', 'JP Morgan & Chase Co.', 'Investment Banker', 11007, 'Required qualifications, capabilities, and skills:\r\nMinimum 1 years of experience gained within a trading role in an investment banking environment\r\nAbility to discuss in detail your knowledge of the current market (including trends)\r\nHave the ability to balance analytical and technical skill set with proven instinct\r\nPreferred Qualifications, capabilities and skills\r\nAbility to discuss in detail your understanding of the entire landscape: knowledge of the client\'s sector and client\'s specific business needs and limitations. Deep understanding of client-specific nuances and leverages that help deliver more value to clients and the firm.\r\nAbility to discuss in detail your understanding of the various market variables and their impacts on products (pricing, flows etc.)\r\nAbility to communicate concepts and ideas, both verbally and via documentation, and be able to defend their validity and target messages to different audiences.\r\nAbility to talk in detail your understanding of how to build a strong talent pipeline; identifies and works to retain strong performers.', '2023-04-15 00:05:02'),
('Dhruv Bera', 'berad@getajob.com', 'Cognizant', 'Application Developer', 11008, 'Required:\r\n10+ years of experience in Web Application Development.\r\nPrimary Skillset includes Java/J2EE, Spring REST services, Spring Boot.\r\nSecondary Skillset Angular and Microservice\r\nExcellent Communication Skills, prior experience in handling the customer relationship/Technical Project management responsibilities.\r\nExtensive experience withJ2EE technologies, object-oriented programming concepts, and multi-tiered distributed applications\r\nExperience in developing web application using Spring Framework and knowledge of design patterns.\r\nExperience within an Agile/SAFE development methodologies.\r\nExposure to DevOPS Engineering Practices will be added advantage.\r\nStrong analytical and problem-solving skills.\r\nEducation and Additional Skills\r\nComputer Science Degree or equivalent college education\r\nShould have experience with working in large development projects.\r\nShould have the ability coordinate across multiple teams.\r\nBe nimble in handling and delivering fast moving projects with very minimal supervision.\r\nExcellent Communication skills, both written and verbal.', '2023-04-15 00:08:57'),
('Dhruv Bera', 'berad@getajob.com', 'Apple Inc.', 'Senior Product Manager', 11009, 'Key Qualifications\r\nAbility to collaborate with the store leadership team to develop strategic plans across multiple business groups, improving process and surpassing standards to drive the business in the store\r\nProven ability to inspire, coach, train, and develop store team members to consistently provide exceptional customer service and drive for results\r\nExperience adapting to challenges, providing support, and guiding communications in a constantly changing retail environment\r\nDescription\r\nAs a Senior Manager you guide other leaders to inspire top performance from their teams. You monitor multiple lines of business within the store to achieve operational objectives and collaborate with corporate business partners to report results. You’re knowledgeable about the industry and keep up to date about competitors and trends. You lead the sales and customer support teams by example, finding solutions to create and maintain a high level of customer focus. To foster growth among your staff, you coach and encourage with clear communications. By developing strong relationships across teams and with customers, you create an environment that enhances loyalty for Apple products and services', '2023-04-15 00:08:57'),
('Lisa Upton', 'lisa@getajob.com', 'Boston Consultancy Group', 'Senior Manager', 11010, '5+ years of experience in a supervisory role\r\nSeveral years of experience managing large teams required\r\nInfrequent travel may be required\r\nOccasional evening and weekend work may be required\r\nUnrelenting work ethic\r\nUncompromising commitment to excellence in service\r\nSeveral years of experience managing large teams\r\nImmaculate written and oral communications skills including public speaking and presentation capabilities\r\nValues driven role model\r\nStrong ability to identify, analyze, and solve problems; ability to settle issues as they arise\r\nAbility to implement and support change management\r\nStrong service orientation and sensitivity in responding to customer needs\r\nAbility to handle difficult and confidential situations with poise, understanding, and tact\r\nAbility to handle competing priorities, keeping constant sight of the overall objectives\r\nProject confidence, authority, and enthusiasm, excelling in leading, mentoring, and motivating an administrative services department\r\nStrong organizational skills, project management skills, and attention to detail\r\nUnflappable and thick-skinned, with the personal fortitude to push back when necessary\r\nAble to perform successfully in a fast-paced, intellectually intense, service-oriented environment and to interpret rules and guidelines flexibly to enhance the business and in keeping with BCG\'s values and culture\r\nExperience working successfully within a complex matrix structured organization is beneficial and strongly preferred', '2023-04-15 00:13:47'),
('Aksh Patel', 'akshpatel@getajob.com', 'Tata Consultancy Service', 'Software Developer', 11011, 'Responsibilities\r\nDevelop, create, and modify general computer application software or specialized programs\r\nAnalyze user needs and develop software solutions\r\nDesign or customize software for client use to optimize operational efficiency\r\nImprove existing systems by analyzing areas of modification\r\nAnalyze and design databases with application areas\r\nCoordinate database development with a team or individually\r\nMaintain systems by monitoring, identifying, and correcting software defects\r\nCreate technical specifications and test plans\r\nUpdate knowledge and skills regularly through in-house and external courses, manuals, and new applications\r\nRequirements\r\nB.S and Masters Programs in Computer Science (CS), Information Technology (IT), Information Systems (IS), Electrical Engineering (EE), Computer Engineering (CE), Informatics, or Software Engineering (SE)\r\nCumulative GPA of 3.0 or higher\r\nKnowledge of basic computer science concepts, programming, and Information Systems\r\nInterest and willingness to travel and relocate\r\nPrevious experience in Java/J2EE Development, C++/C#, .NET, VB/ASP Development and Database experience is preferred', '2023-04-15 00:13:47'),
('Dhruv Bera', 'berad@getajob.com', 'University of Windsor', 'Teaching Assistant', 11012, 'Form 1 – Description of Duties and Allocation of Hours must be completed prior to commencement of duties\r\nThe total combined hours per term for all GA/TA appointments held in all departments must not exceed: 100 hours (TA I, II, III); 110 hours (MI); 140 hours (GA)\r\nA full-time graduate student may not be employed for more than 240 hours total for all University-related employment during the term, including a GA appointment\r\nGraduate students may be not be employed as a Sessional Instructor and a GA in the same term\r\nAll GAs must remain enrolled full-time for the duration of the appointment\r\nAll international TAs must be registered full-time for the duration of the appointment\r\nThis appointment is governed by the CUPE 4580 GA/TA Collective Agreement and may be subject to change\r\nAll Notices of Appointment must be approved through the GA/TA Approval Workflow by the AAU Head and the Dean of Graduate Studies.\r\nAfter the appointee signs this form it is to be submitted to their department.		', '2023-04-15 01:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_codes`
--

CREATE TABLE `user_codes` (
  `user_code` int(11) NOT NULL,
  `user_description` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_codes`
--

INSERT INTO `user_codes` (`user_code`, `user_description`) VALUES
(1, 'Job- Seeker'),
(2, 'Recruiter/HR');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usercode` int(11) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`fname`, `lname`, `email`, `password`, `usercode`, `city`, `state`, `country`, `zipcode`, `created_date`) VALUES
('Aksh', 'Patel', 'akshpatel@getajob.com', 'Aksh123', 2, 'Toronto', 'Ontario', 'Canada', 'M1M 3L4', '2023-04-08 22:40:23'),
('Dhruv', 'Bera', 'berad@getajob.com', 'Dhruv123', 2, 'Toronto', 'Ontario', 'Canada', 'M1M 4T4', '2023-04-09 20:16:36'),
('Lisa', 'Upton', 'lisa@getajob.com', 'Lisa123', 2, 'Vancouver', 'BC', 'Canada', 'X3X 7U7', '2023-04-14 23:37:37'),
('Maria', 'Khan', 'mariakhan@getajob.com', 'Maria123', 1, 'Montreal', 'Quebec', 'Canada', 'H8Y 9I9', '2023-04-15 01:13:00'),
('NIRAJ', 'PASHANDU', 'pashanduniraj@getajob.com', '1234567890', 1, 'WINDSOR', 'ONTARIO', 'CANADA', 'N9B2N2', '2023-04-08 22:37:52'),
('Vedang', 'Patel', 'vedangpatel@getajob.com', 'V123456', 1, 'Windsor', 'Ontario', 'Canada', 'X1X 2Y2', '2023-04-08 20:42:46'),
('Yash ', 'Pashandu', 'yash@getajob.com', 'Yash123', 1, 'Calgary', 'Alberta', 'Canada', 'L1W 2P8', '2023-04-14 23:26:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `recruiter_email` (`recruiter_email`),
  ADD KEY `company` (`company`),
  ADD KEY `job_name` (`job_name`);

--
-- Indexes for table `user_codes`
--
ALTER TABLE `user_codes`
  ADD PRIMARY KEY (`user_code`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`email`),
  ADD KEY `city` (`city`),
  ADD KEY `state` (`state`),
  ADD KEY `usercode` (`usercode`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`recruiter_email`) REFERENCES `user_profiles` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_ibfk_1` FOREIGN KEY (`usercode`) REFERENCES `user_codes` (`user_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
