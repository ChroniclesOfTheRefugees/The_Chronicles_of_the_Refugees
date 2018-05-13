-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 12:20 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infix`
--

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE `alert` (
  `id` int(250) NOT NULL,
  `a1` varchar(10000) NOT NULL,
  `a2` varchar(2500) NOT NULL,
  `a3` varchar(250) NOT NULL,
  `a4` varchar(10000) NOT NULL,
  `a5` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `a6` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `a7` varchar(250) NOT NULL,
  `a8` varchar(250) NOT NULL,
  `a9` varchar(250) NOT NULL,
  `a10` varchar(250) NOT NULL,
  `a11` varchar(250) NOT NULL,
  `a12` varchar(250) NOT NULL,
  `a13` varchar(250) NOT NULL,
  `a14` varchar(250) NOT NULL,
  `a15` varchar(250) NOT NULL,
  `a16` varchar(250) NOT NULL,
  `r1` varchar(1000) DEFAULT NULL,
  `r2` varchar(1000) DEFAULT NULL,
  `r3` varchar(1000) DEFAULT NULL,
  `r4` varchar(1000) DEFAULT NULL,
  `r5` varchar(1000) DEFAULT NULL,
  `r6` varchar(1000) DEFAULT NULL,
  `r7` varchar(1000) DEFAULT NULL,
  `r8` varchar(1000) DEFAULT NULL,
  `r9` varchar(1000) DEFAULT NULL,
  `r10` varchar(1000) DEFAULT NULL,
  `r11` varchar(1000) DEFAULT NULL,
  `r12` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alert`
--

INSERT INTO `alert` (`id`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`, `r12`) VALUES
(48, 'System', 'System', 'System', 'System', '2018-03-04 18:16:01', '2018-03-14 08:21:39', '', '', '', '', '', '', '', '', '', '', '<div class=\"col-sm-6 col-md-3 col-lg-3\"> 								<article class=\"post clearfix maxwidth600 mb-30\"> 									<div class=\"entry-content border-1px p-20\"> 										<h5 class=\"entry-title mt-0 pt-0\"><a href=\"#\">', '</a></h5> 										<ul class=\"list-inline entry-date font-12 mt-5\"> 											<li class=\"pr-0\"><a class=\"text-theme-colored\" href=\"#\">', 'Admin |', '</a></li> 											<li class=\"pl-0\"><span class=\"text-theme-colored\">', '</span></li> 										</ul> 										<p class=\"text-left mb-20 mt-15 font-13\">', '</p>\n										<button type=\"button\" class=\"btn btn-info btn-sm btn btn-dark btn-theme-colored btn-xs btn-flat mt-0 \" data-toggle=\"modal\" data-target=\"#myModal', '\">Read more</button> \n										<div class=\"clearfix\"></div>\n									</div>\n								</article>														\n								<div class=\"container\">\n									<div class=\"modal fade\" id=\"myModal', '\" role=\"dialog\">\r\n										<div class=\"modal-dialog modal-lg\">\r\n											<div class=\"modal-content\">\r\n												<div class=\"modal-header\">\r\n													<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\r\n													<h4 class=\"modal-title\">', '</h4>\r\n												</div>\r\n												<div class=\"modal-body\">\r\n													<p>', '</p>\r\n												</div>\r\n												<div class=\"modal-footer\">\r\n													<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>\r\n												</div>\r\n											</div>\r\n										</div>\r\n									</div>\r\n								</div>								\r\n							</div>', '</p>\n										<a href=\"', '\"><button type=\"button\" class=\"btn btn-info btn-sm btn btn-dark btn-theme-colored btn-xs btn-flat mt-0 \"data-toggle=\"modal\"  data-target=\"#myModal\">Read more</button></a>  										<div class=\"clearfix\"></div> 									</div> 								</article>														 								<div class=\"container\"> 									<div class=\"modal fade\" id=\"myModal'),
(69, 'new question', 'DIFFERENT TYPES OF STROKEDIFFERENT', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum', '<h2>Welcome to the HTML editor!</h2>\n<p>Just type the HTML and it will be shown below.</p>\n\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum neque id magna. Mauris sollicitudin nisi sit amet sem. Etiam sit amet lectus a velit interdum facilisis. Vestibulum ante ipsum primis in faucibus orci <strong>luctus et ultrices posuere</strong> cubilia Curae; In tincidunt eleifend neque. Maecenas interdum, neque in fringilla pellentesque, lacus massa eleifend elit, nec scelerisque nulla orci a nunc. Quisque sollicitudin. Sed pulvinar lacus id lacus. Vestibulum imperdiet tellus eget risus. Quisque libero nisl, feugiat eu, euismod at, elementum eget, tellus. <a href=\"http://www.clesto.com\">Clesto.com</a></p>\n\n<img src=\"https://www.google.se/images/google_80wht.gif\" alt=\"Google logo\">\n\n<h2>Heading in h2, som more sample text</h2>\n\n<p>Phasellus sem odio, varius quis, cursus at, ullamcorper eget, turpis. Maecenas a mi. Mauris dignissim lectus malesuada odio. Duis elit arcu, lobortis ut, porta ac, venenatis ornare, odio. Pellentesque scelerisque. Ut elementum laoreet massa. Suspendisse hendrerit odio eget turpis. Cras tellus dui, malesuada id, adipiscing ut, laoreet sed, magna. Phasellus scelerisque aliquet ligula. Quisque vitae elit sit amet enim suscipit interdum. Curabitur laoreet, mauris sit amet aliquet interdum, pede sapien malesuada metus, in tincidunt turpis justo id arcu. Donec gravida odio ac lectus. Nam rutrum ante in nisi laoreet aliquet. Sed at ante.</p>\n\n<h3>Heading in h3, som more sample text</h3>\n\n<p>Nulla facilisi. Nullam cursus scelerisque erat. Praesent convallis rhoncus dui. In hac habitasse platea dictumst. Nullam pellentesque. Mauris ac orci. Donec dictum. Etiam purus tortor, elementum a, posuere nec, pulvinar id, ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque vel justo. Nullam posuere purus sed arcu.</p>\n\n<ul>\n	<li>Nulla facilisi.</li>\n	<li>Pellentesque habitant morbi</li>\n	<li>Quisque vel justo.</li>\n	<li>Nullam posuere purus sed arcu.</li>\n</ul>', '2018-03-06 09:54:24', '2018-04-22 17:57:08', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(250) NOT NULL,
  `a1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `a2` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `a3` varchar(1000) NOT NULL,
  `a4` varchar(1000) NOT NULL,
  `a5` varchar(1000) NOT NULL,
  `a6` varchar(1000) NOT NULL,
  `a7` varchar(250) NOT NULL,
  `a8` varchar(1000) NOT NULL,
  `a9` varchar(1000) NOT NULL,
  `a10` varchar(1000) NOT NULL,
  `a11` varchar(1000) NOT NULL,
  `a12` varchar(1000) NOT NULL,
  `a13` varchar(1000) NOT NULL,
  `a14` varchar(1000) NOT NULL,
  `a15` varchar(1000) NOT NULL,
  `a16` varchar(1000) NOT NULL,
  `a17` varchar(1000) NOT NULL,
  `a18` varchar(1000) NOT NULL,
  `a19` varchar(1000) NOT NULL,
  `a20` varchar(1000) NOT NULL,
  `a21` varchar(1000) NOT NULL,
  `a22` varchar(1000) NOT NULL,
  `a23` varchar(1000) NOT NULL,
  `a24` varchar(1000) NOT NULL,
  `a25` varchar(1000) NOT NULL,
  `a26` varchar(1000) NOT NULL,
  `a27` varchar(1000) NOT NULL,
  `a28` varchar(1000) NOT NULL,
  `a29` varchar(1000) NOT NULL,
  `r1` varchar(10000) DEFAULT NULL,
  `r2` varchar(10000) DEFAULT NULL,
  `r3` varchar(10000) DEFAULT NULL,
  `r4` varchar(1000) DEFAULT NULL,
  `r5` varchar(1000) DEFAULT NULL,
  `r6` varchar(1000) DEFAULT NULL,
  `r7` varchar(1000) DEFAULT NULL,
  `r8` varchar(1000) DEFAULT NULL,
  `r9` varchar(1000) DEFAULT NULL,
  `r10` varchar(1000) DEFAULT NULL,
  `r11` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `a28`, `a29`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`) VALUES
(1, '2018-05-01 11:38:21', '2018-05-02 08:31:03', '', ' <div class=\"col-md-8\">                           \r\n						<div class=\"entry-image\">\r\n							<img src=\"admin/a_dashboard/uploads/blog/', '1.jpg', '\" class=\"img-responsive\" alt=\"\">\r\n						</div>\r\n						<script type=\'text/javascript\' src=\'//platform-api.sharethis.com/js/sharethis.js#property=5ae841d7d6704600179d6188&product=inline-share-buttons\' async=\'async\'></script>\r\n						<div class=\"sharethis-inline-share-buttons\"></div>\r\n                        <h2 class=\"text-center f4\"style=\"color:#e64b3c;padding:30px 0px 20px 0px;\">', 'A Standard Blog Post', '</h2>\r\n						<h4 class=\"text-center f3\"style=\"color:#02b1e3;padding-bottom: 20px;\">By Admin  | ', 'Company Events', '| Posted at ', '8 May 2015', '</h4>\r\n										', '', '<h4 id=\"\">Comments</h4>\r\n					     <div class=\"fb-comments\" data-href=\"http://localhost/INFIX%20ICT/blog-details', '.php\" data-width=\"100%\" data-numposts=\"100\"></div>		  \n		            </div>', ' <li>\r\n                                    <div class=\"entry\">\r\n                                        <div class=\"sup_whitebg\"></div>\r\n                                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">\r\n                                            <div class=\"row\">\r\n                                                <div class=\"entry-image\">\r\n                                                    <a href=\"../blog-details.php?id=', '\" target=\"_parent\"><img src=\"../admin/a_dashboard/uploads/blog/', '\"class=\"img-responsive\" alt=\"\">\r\n                                                    </a>\r\n                                                </div>\r\n                                            </div>\r\n                                        </div>\r\n                                        <div class=\"container\">\r\n                                            <div class=\"row\">\r\n                                                <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right\">\r\n                                                    <div class=\"row\">\r\n                                                        <div class=\"entery-c\">\r\n                                                            <div class=\"entry-title\">\r\n                                                                <h2><a href=\"../blog-details.php?id=', '\" target=\"_parent\">', '</a></h2>\r\n                                                            </div>\r\n                                                            <ul class=\"entry-meta\">\r\n                                                                <li><a href=\"javascript:;\">By Admin</a>\r\n                                                                </li>\r\n                                                                <li><a href=\"javascript:;\">', '</a>\r\n                                                                </li>\r\n                                                                <li><a href=\"javascript:;\">Posted at', '</a>\n                                                                </li>\n                                                            </ul>\n                                                            <div class=\"sup_title_border\"></div>\n                                                            <div class=\"entry-content\">', '<a href=\"../blog-details.php?id=', '\" target=\"_parent\"class=\"more-link sup_btn sup_black_btn\">Read More <span><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span></a>\r\n														 \r\n                                                                <ul class=\"entry-comment\">\r\n                                                                    <li><a href=\"javascript:;\"><i class=\"icon-speech icons\"></i> 3+</a>\r\n                                                                    </li>\r\n                                                                    <li><a href=\"../blog-details.php?id=', '\"target=\"_parent\"><i class=\"icon-share icons\"></i> Share This</a>\r\n                                                                    </li>\r\n                                                                </ul>\r\n                                                            </div>\r\n                                                        </div>\r\n                                                    </div>\r\n                                                </div>\r\n                                            </div>\r\n                                        </div>\r\n                                    </div>\r\n                                </li>', '', '', '', '', '                        <p class=\" \">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy \n						text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only\n						five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of \n						Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions \n						of Lorem Ipsum.</p>', NULL, '<li>\r\n                                    <div class=\"entry\">\r\n                                        <div class=\"sup_blackbg\"></div>\r\n                                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-push-6 col-md-push-6\">\r\n                                            <div class=\"row\">\r\n                                                <div class=\"entry-image\">\r\n                                                    <a href=\"../blog-details.php?id=', '\" class=\"img-responsive\" alt=\"\">\r\n                                                    </a>\r\n                                                </div>\r\n                                            </div>\r\n                                        </div>\r\n                                        <div class=\"container\">\r\n                                            <div class=\"row\">\r\n                                                <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-pull-6 col-md-pull-6\">\r\n                                                    <div class=\"row\">\r\n                                                        <div class=\"entery-c\">\r\n                                                            <div class=\"entry-title\">\r\n                                                                <h2><a href=\"../blog-details.php?id=', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, '2018-05-11 16:53:04', '2018-05-11 16:53:04', '', '', 'Capture.PNG', '', 'with code repository such as ', '', 'Job ', '', '11th-May-2018', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '  â€¢	Job Level: Begineer / Intermediate. Educational: BSc in Computer Science or Any other relevant fields. Experience: At least 1 year', NULL, '<ul>\r\n	<li>Ability to provide customer supports through various channels such as Emails, Issues, Tickets, Skype, WhatsApp, Facebook etc.</li>\r\n	<li>Good knowledge in PHP/MySQL/JavaScript/HTML/CSS and OOP.</li>\r\n	<li>Good knowledge in PHP Unit testing, writing test cases, etc.</li>\r\n	<li>Woking knowledge with code repository such as Git, SVN, GitHub, Bitbucket etc.</li>\r\n	<li>Knowledge in various testing (or automation) tools such as Selenium, Postman, etc. Knowledge in PHP framework such as CakePHP / Laravel / Slim is a plus.</li>\r\n	<li>Good to have knowledge in other technologies such as Python, Node.js, Elasticsearch, Memcached, Redis, MongoDB, RabbitMQ, Dockers, Kubernetes, DevOps, etc. Job Nature: Full-time (flexible work hours).</li>\r\n</ul>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, '2018-05-12 19:41:04', '2018-05-12 19:41:53', '', '', 'blog.png', '', 'DSS Online Application Process â€“ www dss teletalk com.bd', '', 'Bangla desh', '', '12th-May-2018', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Job Application for DSS Teletalk is now very easy. Candidate can easily apply Any govt jobs visiting Teletalk official website. For Complete your registration for Department of Social Services check below this instruction.', NULL, '<p>SMS Payment System for DSS Teletalk</p>\n\n<p>1st SMS :&nbsp;<strong>DSS&nbsp;</strong>&lt;space&gt;&nbsp;<strong>User ID Send to 16222</strong></p>\n\n<blockquote>\n<p>Example:&nbsp;&nbsp;<strong>DSS 453564 and Send 16222</strong></p>\n</blockquote>\n\n<p>After that applicant will get a reply sms, here will be found 8 digit pin code then candidates will send 2nd SMS.<br />\nReply: Applicant&rsquo;s Name, Tk-112/72 will be charged as application fee. Your PIN is (8 digit number).<br />\n2nd SMS format:<br />\n2nd SMS :&nbsp;<strong>DSS&nbsp;</strong>&lt;space&gt;&nbsp;<strong>Yes&nbsp;</strong>&lt;space&gt;&nbsp;<strong>PIN and send 16222</strong></p>\n\n<blockquote>\n<p>Example:&nbsp;<strong>DSS YES 5454322 and Send 16222</strong></p>\n</blockquote>\n\n<p>Reply: Congratulations! Applicant&rsquo;s Name, payment completed successfully for Department of Social Services (DSS) User ID is (xxxxxxxx) and Password (xxxxxxxx).</p>\n\n<p>Check How to Apply :&nbsp;<a href=\"https://ejobscircular.com/dss-job-circular-exam-result-notice/\" target=\"_blank\">DSS Job Circular</a></p>\n\n<h3>DSS Exam Result</h3>\n\n<p><a href=\"http://www.dss.gov.bd/\" target=\"_blank\">www.dss.gov.bd</a>&nbsp;Job notice also found on my website.&nbsp;<strong>DSS Written Exam Result</strong>, MCQ Test &amp; Admit Card will be published by ejobscircular.com and there official website at dss.teletalk.com.bd . www dss teletalk com bd admit card download website link available at ejobscircular.com . Let`s Download Your dss job admit card 2018.</p>\n\n<h3>DSS Admit Card Download</h3>\n\n<p>Finally DSS Admit Card Download Notice and Exam Center found on my website below. In short time Department of Social Services will be published DSS Teletalk Admit card notice to there website. And You can also Download DSS Written Exam Date, MCQ Test Seat plan in this website.</p>\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, '2018-05-12 19:56:33', '2018-05-12 19:56:33', '', '', 'mall.jpg', '', 'PRAN-RFL Group Job Circular 2018', '', 'Group Job Circular 2018', '', '12th-May-2018', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '  has been published in daily news paper Bangladesh protidin also BD Jobs Careers. RFL Group is one of biggest fast growing and highly diversified private organization in Bangladesh. RFL was Founded 1981 and  import their products 95 countries. The organization produce lot of products including PRAN RFL, food and beverage brands, pure drinking water, pumps, tube wells, bearings, gas stoves etc.Recently RFL Group want to some dynamic, energetic and performance driven individualâ€™s man power.If you are interested for company jobs in Bangladesh, no doubt itâ€™s a good one. So, letâ€™s check the  PRAN-RFL Group Job Circular 2018 details with original job circular image.', NULL, '<p>has been published in daily news paper Bangladesh protidin also BD Jobs Careers. RFL Group is one of biggest fast growing and highly diversified private organization in Bangladesh. RFL was Founded 1981 and&nbsp; import their products 95 countries. The organization produce lot of products including PRAN RFL, food and beverage brands, pure drinking water, pumps, tube wells, bearings, gas stoves etc.Recently RFL Group want to some dynamic, energetic and performance driven individual&rsquo;s man power.If you are interested for company jobs in Bangladesh, no doubt it&rsquo;s a good one. So, let&rsquo;s check the &nbsp;PRAN-RFL Group Job Circular 2018 details with original job circular image.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Organization Name: PRAN-RFL Group, Bangladesh.</p>\r\n\r\n<p>Post Position:&nbsp;As per circular</p>\r\n\r\n<p><strong>Job Posting Date:&nbsp; 12 May 2018</strong></p>\r\n\r\n<p><strong>Application Deadline: 17 May 2018</strong></p>\r\n\r\n<p>Salary: Negotiable</p>\r\n\r\n<p>Number of Vacancies:&nbsp;See circular image.</p>\r\n\r\n<p>Educational Requirements: See circular image.</p>\r\n\r\n<p>Age Limit for Jobs: N/A</p>\r\n\r\n<p>Experience Requirements:No Need.</p>\r\n\r\n<p>Address:Human Resource Department, RFL Group, Rahman Mansion(Prescription Point-4th floor) Near Hossen Market, Ga-136, Uttar Badda(Pragati Sarani) Dhaka-1212</p>\r\n\r\n<p>Job Types: Company Jobs.</p>\r\n\r\n<p>Another benefits: As per company policy.</p>\r\n\r\n<p>Training:3 Months.</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(250) NOT NULL,
  `d1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `d2` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `d3` varchar(1000) NOT NULL,
  `a1` varchar(1000) NOT NULL,
  `a2` varchar(100) NOT NULL,
  `a3` varchar(1000) NOT NULL,
  `a4` varchar(1000) NOT NULL,
  `a5` varchar(1000) NOT NULL,
  `a6` varchar(1000) NOT NULL,
  `a7` varchar(1000) NOT NULL,
  `a8` varchar(1000) NOT NULL,
  `a9` varchar(1000) NOT NULL,
  `a10` varchar(1000) NOT NULL,
  `a11` varchar(1000) NOT NULL,
  `a12` varchar(1000) NOT NULL,
  `a13` varchar(1000) NOT NULL,
  `a14` varchar(1000) NOT NULL,
  `a15` varchar(1000) NOT NULL,
  `a16` varchar(100) NOT NULL,
  `a17` varchar(100) NOT NULL,
  `a18` varchar(100) NOT NULL,
  `a19` varchar(100) NOT NULL,
  `a20` varchar(100) NOT NULL,
  `a21` varchar(100) NOT NULL,
  `a22` varchar(100) NOT NULL,
  `a23` varchar(100) NOT NULL,
  `a24` varchar(100) NOT NULL,
  `a25` varchar(100) NOT NULL,
  `a26` varchar(100) NOT NULL,
  `a27` varchar(100) NOT NULL,
  `a28` varchar(100) NOT NULL,
  `a29` varchar(100) NOT NULL,
  `a30` varchar(100) NOT NULL,
  `b1` varchar(100) NOT NULL,
  `b2` varchar(100) NOT NULL,
  `b3` varchar(100) NOT NULL,
  `b4` varchar(100) NOT NULL,
  `b5` varchar(100) NOT NULL DEFAULT '0',
  `b6` varchar(100) NOT NULL DEFAULT '0',
  `b7` varchar(100) NOT NULL DEFAULT '0',
  `b8` varchar(100) NOT NULL DEFAULT '0',
  `b9` varchar(100) NOT NULL DEFAULT '0',
  `b10` varchar(100) NOT NULL DEFAULT '0',
  `b11` varchar(100) NOT NULL,
  `b12` varchar(100) NOT NULL,
  `b13` varchar(100) NOT NULL,
  `b14` varchar(100) NOT NULL,
  `b15` varchar(100) NOT NULL,
  `r1` varchar(10000) NOT NULL,
  `r2` varchar(10000) NOT NULL,
  `r3` varchar(1000) NOT NULL,
  `r4` varchar(1000) NOT NULL,
  `r5` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `d1`, `d2`, `d3`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `a28`, `a29`, `a30`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `b8`, `b9`, `b10`, `b11`, `b12`, `b13`, `b14`, `b15`, `r1`, `r2`, `r3`, `r4`, `r5`) VALUES
(156, '2018-05-11 13:28:35', '2018-05-11 14:03:16', '', 'Tusar Ali', 'tusar81415@gmail.com', '01795621796', 'Male', '1995-12-08', '', '', '', '1205', '', 'Graphics Design,Web Development,  ', 'Full Time', '', '3', 'HTML,CSS,JS,jQuery,WordPress,Joomla', '556449', 'Graphics Designer', 'Junior Officer', ' ', '2018-05-11', '', '', '31339', '::1', 'mid_solutions.pdf', '', 'mid_solutions.pdf', '', '', '', '', '', '', '', '1', '0', '1', '0', '0', '0', '', '', '', '', '', '', '', '', '', ''),
(157, '2018-05-11 13:36:06', '2018-05-11 13:44:49', '', 'PREMIUM WEBSITE', 'tusar28145@gmail.com', '01795621796', 'Male', '2018-05-24', '', '', '', '1205', '', 'Graphics Design,Web Development,  ', 'Full Time', '', '4', 'HTML', '461679', 'Graphics Designer', 'Junior Officer', ' 35000', '2018-05-11', '', '', '31339', '::1', 'mid_solutions.pdf', '', 'mid_solutions.pdf', '', '', '', '', '', '', '', '1', '0', '1', '0', '0', '0', '', '', '', '', '', '', '', '', '', ''),
(158, '2018-05-11 13:38:14', '2018-05-11 14:37:16', '', 'PREMIUM WEBSITEhfgh', 'tusar8145@gmail.com', '01795621796', 'Male', '1995-12-08', '', '', '', 'dfdsf', '', 'Graphics Design,Web Development,  ', 'Full Time', '', '5', 'HTML,Illustrator,After Effect', '504777', 'Graphics Designer', 'Junior Officer', '35000 ', '2018-05-11', '', '', '31339', '::1', 'Lesson Plan.docx', '', 'Lesson Plan.docx', '', '', '', '', '', '', '', '1', '0', '1', '0', '0', '0', '1', '7', '1', '', '', '', '', '', '', ''),
(159, '2018-05-11 15:47:36', '2018-05-11 15:47:36', '', 'PREMIUM WEBSITE', 'tusar81d45@gmail.com', '01795621796', 'Male', '', '', '', '', '1205', '', 'Graphics Design,Web Development,  ', 'Full Time', '', '', 'Php', '190264', '', '', '', '', '', '', '31339', '::1', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `a1` varchar(10000) NOT NULL,
  `a2` varchar(10000) NOT NULL,
  `a3` varchar(10000) NOT NULL,
  `a4` varchar(10000) NOT NULL,
  `id` int(250) NOT NULL,
  `a5` varchar(500) NOT NULL,
  `a6` varchar(500) NOT NULL,
  `a7` varchar(500) NOT NULL,
  `a8` varchar(500) NOT NULL,
  `a9` varchar(500) NOT NULL,
  `a10` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`a1`, `a2`, `a3`, `a4`, `id`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`) VALUES
('										<ul class=\"dropdown\">\n											<li><a href=\"user\"style=\"text-align:right;\">View Portfolio</a></li>\n											<li><a href=\"login/logout\"style=\"text-align:right;\">Logout</a></li>												  \n									</ul>', '', '', '', 1, '', '', '', '', '', ''),
('Hi', 'GET OUR PREMIUM SERVICE ', 'crypto_r.php', '4.jpg', 3, '2.jpg', '3.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `a1` varchar(1000) NOT NULL,
  `a2` varchar(1000) NOT NULL,
  `a3` varchar(1000) NOT NULL,
  `a4` varchar(1000) NOT NULL,
  `a5` varchar(1000) NOT NULL,
  `a6` varchar(1000) NOT NULL,
  `a7` varchar(1000) NOT NULL,
  `a8` varchar(1000) NOT NULL,
  `a9` varchar(1000) NOT NULL,
  `a10` varchar(1000) NOT NULL,
  `a11` varchar(1000) NOT NULL,
  `a12` varchar(1000) NOT NULL,
  `a13` varchar(1000) NOT NULL,
  `a14` varchar(1000) NOT NULL,
  `a15` varchar(1000) NOT NULL DEFAULT 'unseen',
  `id` int(250) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `id`, `time`) VALUES
('', 'hjg', 'jhgj@fdf.com', 'vcvx', 'cvxcv', 'vcxvcx', '', '', '', '', '', '', '', '', 'unseen', 3, '2018-05-12 20:19:25'),
('', 'hjg', 'jhgj@fdf.com', 'vcvx', 'cvxcv', 'vcxvcx', '', '', '', '', '', '', '', '', 'unseen', 4, '2018-05-12 20:20:10'),
('', 'hjg', 'jhgj@fdf.com', 'vcvx', 'cvxcv', 'vcxvcx', '', '', '', '', '', '', '', '', 'unseen', 5, '2018-05-12 20:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `id` int(250) NOT NULL,
  `a1` varchar(10000) NOT NULL,
  `a2` varchar(2500) NOT NULL,
  `a3` varchar(250) NOT NULL,
  `a4` varchar(10000) NOT NULL,
  `a5` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `a6` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `a7` varchar(250) NOT NULL,
  `a8` varchar(250) NOT NULL,
  `a9` varchar(250) NOT NULL,
  `a10` varchar(250) NOT NULL,
  `a11` varchar(250) NOT NULL,
  `a12` varchar(250) NOT NULL,
  `a13` varchar(250) NOT NULL,
  `a14` varchar(250) NOT NULL,
  `a15` varchar(250) NOT NULL,
  `a16` varchar(500) NOT NULL,
  `r1` varchar(1000) DEFAULT NULL,
  `r2` varchar(1000) DEFAULT NULL,
  `r3` varchar(1000) DEFAULT NULL,
  `r4` varchar(1000) DEFAULT NULL,
  `r5` varchar(1000) DEFAULT NULL,
  `r6` varchar(1000) DEFAULT NULL,
  `r7` varchar(1000) DEFAULT NULL,
  `r8` varchar(1000) DEFAULT NULL,
  `r9` varchar(1000) DEFAULT NULL,
  `r10` varchar(1000) DEFAULT NULL,
  `r11` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`id`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`) VALUES
(67, 'System', 'up', 'up', 'up', '2018-03-05 19:46:28', '2018-03-14 08:45:40', '', '', '', '', '', '', '', '', '', '\"><button type=\"button\" style=\"color:black;\"class=\"pull-right text-gray font-13\" data-toggle=\"modal\" data-target=\"#myModalb1\">Read more</button></a> \n											</div>\n											</article>\n											</div>\n											<div class=\"container\">\n											<div class=\"modal fade\" id=\"myModalb1							', '\r\n												\r\n												<li class=\"each-masonry-item wow fadeInUp\" data-wow-duration=\"1.5s\" data-wow-offset=\"10\">\r\n													<div class=\"timeline-block\">\r\n														<span class=\"timeline-post-format\"><i class=\"fa fa-user\"></i></span>\r\n														<article class=\"post clearfix\">\r\n															<div class=\"entry-header\">\r\n																<h5 class=\"entry-title\"><a href=\"#\">', '</a></h5>\r\n																<ul class=\"list-inline font-12 mb-20 mt-10\">', '<li>posted by <a href=\"#\" class=\"text-theme-colored\">Admin |</a></li>', '<li><span class=\"text-theme-colored\">', '</span></li>\r\n																</ul>\r\n															</div>\r\n															<div class=\"entry-content\">\r\n																<p class=\"mb-30\">', '</p>																\n																<button type=\"button\" style=\"color:black;\"class=\"pull-right text-gray font-13\" data-toggle=\"modal\" data-target=\"#myModalb', '\">Read more</button> \r\n															</div>\r\n														</article>\r\n													</div>\r\n													<div class=\"container\">\r\n														<div class=\"modal fade\" id=\"myModalb', '\" role=\"dialog\">\r\n															<div class=\"modal-dialog modal-lg\">\r\n																<div class=\"modal-content\">\r\n																	<div class=\"modal-header\">\r\n																		<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\r\n																		<h4 class=\"modal-title\">', '</h4>\r\n																	</div>\r\n																	<div class=\"modal-body\"style=\"text-align: left;\">\r\n																		<p style=\"text-align: left;padding-left:20px;padding-right:20px;\">', '</p>\r\n																	</div>\r\n																	<div class=\"modal-footer\">\r\n																		<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>\r\n																	</div>\r\n																</div>\r\n															</div>\r\n														</div>\r\n													</div>	\r\n												</li>', '</p>																\n											<a href=\"'),
(71, 'bnbnbvn', 'ghjng', 'jnghfg', 'jhfgjh', '2018-05-07 18:59:50', '2018-05-07 18:59:50', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'bv', 'vbv', 'vbcv', '1', '2018-05-07 19:46:14', '2018-05-07 19:46:14', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'gg', 'p', 'p', '1', '2018-05-07 19:46:34', '2018-05-07 19:46:34', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, '1', 'v', 'v', 'v', '2018-05-07 19:46:58', '2018-05-07 19:46:58', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, '', 'vcb', 'v', 'vcb', '2018-05-07 19:47:35', '2018-05-07 19:47:35', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, '1', 'bnv', 'bn', 'bvn', '2018-05-07 19:47:44', '2018-05-07 19:47:44', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, '1', 'xcv', 'xcv', 'cvx', '2018-05-07 19:53:14', '2018-05-07 19:53:14', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, '', 'bvn', 'bvn', 'bn', '2018-05-07 19:54:20', '2018-05-07 19:54:20', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, '', 'nbv', 'nbv', 'nvb', '2018-05-07 19:54:49', '2018-05-07 19:54:49', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, '', 'gfh', 'gfhfg', 'gh', '2018-05-07 19:55:03', '2018-05-07 19:55:03', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, '', 'mnb', 'mnbm', 'nb', '2018-05-07 19:55:27', '2018-05-07 19:55:27', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, '', 'jh', 'gh', 'gj', '2018-05-07 19:57:24', '2018-05-07 19:57:24', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, '', 'fg', 'hfg', 'h', '2018-05-07 19:57:45', '2018-05-07 19:57:45', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(250) NOT NULL,
  `d1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `d2` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `d3` varchar(1000) NOT NULL,
  `a1` varchar(1000) NOT NULL,
  `a2` varchar(1000) NOT NULL,
  `a3` varchar(1000) NOT NULL,
  `a4` varchar(1000) NOT NULL,
  `a5` varchar(1000) NOT NULL,
  `a6` varchar(1000) NOT NULL,
  `a7` varchar(1000) NOT NULL,
  `a8` varchar(1000) NOT NULL,
  `a9` varchar(1000) NOT NULL,
  `a10` varchar(1000) NOT NULL,
  `a11` varchar(1000) NOT NULL,
  `a12` varchar(1000) NOT NULL,
  `a13` varchar(1000) NOT NULL,
  `a14` varchar(1000) NOT NULL,
  `a15` varchar(1000) NOT NULL,
  `a16` varchar(100) NOT NULL,
  `a17` varchar(100) NOT NULL,
  `a18` varchar(100) NOT NULL,
  `a19` varchar(100) NOT NULL,
  `a20` varchar(100) NOT NULL,
  `a21` varchar(100) NOT NULL,
  `a22` varchar(100) NOT NULL,
  `a23` varchar(100) NOT NULL,
  `a24` varchar(100) NOT NULL,
  `a25` varchar(100) NOT NULL,
  `a26` varchar(100) NOT NULL,
  `a27` varchar(100) NOT NULL,
  `a28` varchar(100) NOT NULL,
  `a29` varchar(100) NOT NULL,
  `a30` varchar(100) NOT NULL,
  `b1` varchar(100) NOT NULL,
  `b2` varchar(100) NOT NULL,
  `b3` varchar(100) NOT NULL DEFAULT '0',
  `b4` varchar(100) NOT NULL DEFAULT '90',
  `b5` varchar(100) NOT NULL,
  `b6` varchar(100) NOT NULL,
  `b7` varchar(100) NOT NULL,
  `b8` varchar(100) NOT NULL,
  `b9` varchar(100) NOT NULL,
  `b10` varchar(100) NOT NULL,
  `b11` varchar(100) NOT NULL,
  `b12` varchar(100) NOT NULL,
  `b13` varchar(100) NOT NULL,
  `b14` varchar(100) NOT NULL,
  `b15` varchar(100) NOT NULL,
  `r1` varchar(10000) NOT NULL,
  `r2` varchar(10000) NOT NULL,
  `r3` varchar(1000) NOT NULL,
  `r4` varchar(1000) NOT NULL,
  `r5` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `d1`, `d2`, `d3`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `a28`, `a29`, `a30`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `b8`, `b9`, `b10`, `b11`, `b12`, `b13`, `b14`, `b15`, `r1`, `r2`, `r3`, `r4`, `r5`) VALUES
(19, '2018-05-10 13:20:47', '2018-05-10 13:20:47', '', 'Full Time', '2018-05-10', 'Enable', '10 September 2018', 'Tusar', '7175', 'Game Development,  ', 'Php Developers', '0', '5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>Position: Customer Support &amp; QA Engineer (PHP)</p>\r\n\r\n<p>Salary: 10,000 to 25,000<br />\r\nVacancy: 01<br />\r\nJob Location: Remote.</p>\r\n\r\n<p>INFIX ICT is looking for a talented Customer Support and QA Engineer (PHP) with very strong english communication skills to provide customer support, perform QA tests, write technical documentation and improve product quality.</p>\r\n\r\n<p><strong>Job Description / Responsibility: </strong></p>\r\n\r\n<ul>\r\n	<li>Ability to write tutorial, tips, how to articles, user guides, user stories, software documentation, technical documentation, etc.</li>\r\n	<li>Ability to provide customer supports through various channels such as Emails, Issues, Tickets, Skype, WhatsApp, Facebook etc.</li>\r\n	<li>Good knowledge in PHP/MySQL/JavaScript/HTML/CSS and OOP.</li>\r\n	<li>Good knowledge in PHP Unit testing, writing test cases, etc.</li>\r\n	<li>Woking knowledge with code repository such as Git, SVN, GitHub, Bitbucket etc.</li>\r\n	<li>Knowledge in various testing (or automation) tools such as Selenium, Postman, etc. Knowledge in PHP framework such as CakePHP / Laravel / Slim is a plus.</li>\r\n	<li>Good to have knowledge in other technologies such as Python, Node.js, Elasticsearch, Memcached, Redis, MongoDB, RabbitMQ, Dockers, Kubernetes, DevOps, etc. Job Nature: Full-time (flexible work hours).</li>\r\n</ul>\r\n\r\n<p><strong>Qualifications: </strong></p>\r\n\r\n<ul>\r\n	<li>Job Level: Begineer / Intermediate. Educational: BSc in Computer Science or Any other relevant fields. Experience: At least 1 year.</li>\r\n</ul>\r\n\r\n<p><strong>Other Requirements: </strong></p>\r\n\r\n<ul>\r\n	<li>Creativity.</li>\r\n	<li>Age 20 to 35 year(s).</li>\r\n	<li>Organizational &amp; Time Management Skills.&nbsp;</li>\r\n	<li>Very stong english communication skills.&nbsp;</li>\r\n</ul>\r\n\r\n<p>Suitable for female candidates working from home.</p>\r\n', '', '', '', ''),
(20, '2018-05-10 13:23:20', '2018-05-11 15:50:33', '', 'Full Time', '2018-05-10', 'Disable', '10 September 2018', 'Tusar', '31339', 'Graphics Design,Web Development,  ', 'Php Developers', '1', 'Php Developers', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>Position: Customer Support &amp; QA Engineer (PHP)</p>\r\n\r\n<p>Salary: 10,000 to 25,000<br />\r\nVacancy: 01<br />\r\nJob Location: Remote.</p>\r\n\r\n<p>INFIX ICT is looking for a talented Customer Support and QA Engineer (PHP) with very strong english communication skills to provide customer support, perform QA tests, write technical documentation and improve product quality.</p>\r\n\r\n<p><strong>Job Description / Responsibility: </strong></p>\r\n\r\n<ul>\r\n	<li>Ability to write tutorial, tips, how to articles, user guides, user stories, software documentation, technical documentation, etc.</li>\r\n	<li>Ability to provide customer supports through various channels such as Emails, Issues, Tickets, Skype, WhatsApp, Facebook etc.</li>\r\n	<li>Good knowledge in PHP/MySQL/JavaScript/HTML/CSS and OOP.</li>\r\n	<li>Good knowledge in PHP Unit testing, writing test cases, etc.</li>\r\n	<li>Woking knowledge with code repository such as Git, SVN, GitHub, Bitbucket etc.</li>\r\n	<li>Knowledge in various testing (or automation) tools such as Selenium, Postman, etc. Knowledge in PHP framework such as CakePHP / Laravel / Slim is a plus.</li>\r\n	<li>Good to have knowledge in other technologies such as Python, Node.js, Elasticsearch, Memcached, Redis, MongoDB, RabbitMQ, Dockers, Kubernetes, DevOps, etc. Job Nature: Full-time (flexible work hours).</li>\r\n</ul>\r\n\r\n<p><strong>Qualifications: </strong></p>\r\n\r\n<ul>\r\n	<li>Job Level: Begineer / Intermediate. Educational: BSc in Computer Science or Any other relevant fields. Experience: At least 1 year.</li>\r\n</ul>\r\n\r\n<p><strong>Other Requirements: </strong></p>\r\n\r\n<ul>\r\n	<li>Creativity.</li>\r\n	<li>Age 20 to 35 year(s).</li>\r\n	<li>Organizational &amp; Time Management Skills.&nbsp;</li>\r\n	<li>Very stong english communication skills.&nbsp;</li>\r\n</ul>\r\n\r\n<p>Suitable for female candidates working from home.</p>\r\n', '', '', '', ''),
(21, '2018-05-12 13:35:34', '2018-05-12 13:35:34', '', 'Full Time', '2018-05-12', 'Disable', '12th-May-2018', 'Tusar', '20764', '  ', 'ggg', '0', 'gg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, '2018-05-12 13:38:24', '2018-05-12 13:38:24', '', 'Full Time', '2018-05-12', 'Disable', '12th-May-2018', 'Tusar', '1222', '', 'ppppp', '0', 'pp', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '2018-05-12 13:51:16', '2018-05-12 13:51:16', '', 'Married', '2018-05-10', 'Disable', '12th-May-2018', 'Tusar', '2448', '', 'Name', '2', 'Age', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, '2018-05-12 13:55:39', '2018-05-12 13:56:14', '', 'Unmarried', '', 'Disable', '12th-May-2018', 'Tusar', '373', '', 'Tusar2', '0', 'Tusar2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>hi</p>\r\n', '', '', '', ''),
(25, '2018-05-12 14:01:24', '2018-05-12 14:01:24', '', 'Married', '2018-05-25', 'Left', '12th-May-2018', 'Tusar', '20331', '', 'Ali', '12', '23', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>good</p>\r\n', '', '', '', ''),
(26, '2018-05-12 14:13:22', '2018-05-12 14:14:03', '', 'Married', '', 'Disable', '12th-May-2018', 'Tusar', '8466', '', 'tus', '0', '23', '', '', '', '', '', 'Female', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '2018-05-12 14:15:42', '2018-05-12 14:15:42', '', 'Unmarried', '2018-05-24', 'Left', '12th-May-2018', 'Tusar', '16490', '', 'yyy', '11', '333', '', '', '', '', '', 'Female', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>yy</p>\r\n', '', '', '', ''),
(28, '2018-05-12 14:32:13', '2018-05-12 14:32:13', '', 'Unmarried', '2018-05-16', 'Available', '12th-May-2018', 'Tusar', '6170', '', 'oooo', '3', '20', '', '', '', '', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '2018-05-12 14:33:26', '2018-05-12 14:33:26', '', 'Married', '2018-05-12', 'Available', '12th-May-2018', 'Tusar', '8723', '', 'rrrrrrrr', '0', 'rrrrrrrrrrrrr', '', '', '', '', '', 'Male', '', 'rrrrr', 'rrrrrrrrrrrrr', 'rrrrrrrrrrrrr', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, '2018-05-12 14:35:27', '2018-05-12 14:35:47', '', 'Married', '', 'Disable', '12th-May-2018', 'Tusar', '11964', '', 'ppppppppp', '0', 'pppppp', '', '', '', '', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>ppppppp</p>\r\n', '', '', '', ''),
(31, '2018-05-12 14:37:11', '2018-05-12 14:37:44', '', 'Married', '2018-05-16', 'Disable', '12th-May-2018', 'Tusar', '714', '', 'gggggg', '3', 'ggggg', '', '', '', '', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>yyyyyyyy</p>\r\n', '', '', '', ''),
(32, '2018-05-12 14:39:20', '2018-05-12 14:39:48', '', 'Married', '2018-05-23', 'Disable', '12th-May-2018', 'Tusar', '14670', '', 'ppppppppppppppptttpp', '10', 'ppp', '', '', '', '', '', 'Female', '', 'ppppp', 'ppppppppppppp', 'ppppppppppppptpttpttpttp', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>tttttttttttt</p>\r\n', '', '', '', ''),
(33, '2018-05-12 14:52:02', '2018-05-12 14:52:46', '', 'Married', '', 'Disable', '12th-May-2018', 'Tusar', '18397', '', 'oooo', '0', 'ooooo', '', '', '', '', '', 'Male', '', 'oooo', 'oooo', 'ooooo', 'oooooppp', 'ppp', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>ooooooo</p>\r\n', '', '', '', ''),
(34, '2018-05-12 15:02:28', '2018-05-12 15:03:46', '', 'Married', '', 'Disable', '12th-May-2018', 'Tusar', '258', '', '', '0', '', '', '', '', '', '', 'Male', 'O-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, '2018-05-12 15:19:23', '2018-05-12 15:19:23', '', 'Married', '2018-05-12', 'Available', '12th-May-2018', 'Tusar', '11407', '', '', '0', '', '', '', '', '', '', 'Male', 'A+', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, '2018-05-12 15:22:08', '2018-05-12 15:22:08', '', 'Married', '2018-05-12', 'Available', '12th-May-2018', 'Tusar', '11514', '', '', '0', '', '', '', '', '', '', 'Male', 'A+', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, '2018-05-12 15:23:48', '2018-05-12 15:23:48', '', 'Married', '2018-05-12', 'Available', '12th-May-2018', 'Tusar', '3233', '', 'xx', '0', '', '', '', '', '', '', 'Male', 'A+', 'xxx', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, '2018-05-12 15:25:37', '2018-05-12 15:25:37', '', 'Married', '2018-05-12', 'Available', '12th-May-2018', 'Tusar', '20916', '', 'tuuu', '0', '', '', '', '', '', '', 'Male', 'A+', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, '2018-05-12 15:27:22', '2018-05-12 15:27:22', '', 'Married', '2018-05-12', 'Available', '12th-May-2018', 'Tusar', '17788', '', 'nnnn', '0', '', '', '', '', '', '', 'Male', 'A+', '', '', '', '', '', 'notepad++.exe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, '2018-05-12 15:33:44', '2018-05-12 15:33:44', '', 'Married', '2018-05-17', 'Available', '12th-May-2018', 'Tusar', '27803', '', 'ggg', '4', 'ggg', '', '', '', '', '', 'Male', 'A+', '', '', '', '', '', 'readme.txt', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, '2018-05-12 15:42:03', '2018-05-12 15:42:03', '', 'Unmarried', '2018-05-24', 'Left', '12th-May-2018', 'Tusar', '7869', '', 'Tusar', '11', '23', '', '', '', '', '', 'Female', 'A-', 'y', 'y', 'y', 'y', 'y', 'profile1.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>y</p>\r\n', '', '', '', ''),
(42, '2018-05-12 15:58:40', '2018-05-12 15:58:40', '', 'Married', '2018-05-17', 'Available', '12th-May-2018', 'Tusar', '20490', '', 'ggg', '4', 'ggg', '', '', '', '', '', 'Male', 'A+', '', '', '', '', '', 'readme.txt', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, '2018-05-12 15:59:30', '2018-05-12 15:59:30', '', 'Married', '2018-05-17', 'Available', '12th-May-2018', 'Tusar', '20603', '', 'ggg', '4', 'ggg', '', '', '', '', '', 'Male', 'A+', '', '', '', '', '', 'readme.txt', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, '2018-05-12 16:01:05', '2018-05-12 16:01:05', '', 'Married', '2018-05-17', 'Available', '12th-May-2018', 'Tusar', '28312', '', 'ggg', '4', 'ggg', '', '', '', '', '', 'Male', 'A+', '', '', '', '', '', 'readme.txt', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, '2018-05-12 16:01:54', '2018-05-12 16:01:54', '', 'Married', '2018-05-17', 'Available', '12th-May-2018', 'Tusar', '5873', '', 'ggg', '4', 'ggg', '', '', '', '', '', 'Male', 'A+', '', '', '', '', '', 'readme.txt', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, '2018-05-12 16:03:00', '2018-05-12 16:03:00', '', 'Married', '2018-05-17', 'Available', '12th-May-2018', 'Tusar', '25302', '', 'ggg', '4', 'ggg', '', '', '', '', '', 'Male', 'A+', '', '', '', '', '', 'readme.txt', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, '2018-05-12 21:29:12', '2018-05-12 21:29:12', '', 'Married', '2018-05-24', 'Available', '12th-May-2018', 'Tusar', '18813', '', 'Tusar', '11', '23', '', '', '', '', '', 'Male', 'A+', '', '', 'Na', 'Dhaka', 'Bangladesh', 'profile1.jpg', '', '', '', '', '', '', '', '', '', '0', '90', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, '2018-05-12 21:56:24', '2018-05-12 21:56:24', '', 'Married', '1990-05-31', 'Available', '12th-May-2018', 'Tusar', '121', '', 'Shohel', '10208', '23', '', '', '', '', '', 'Male', 'B+', '3', 'Rakhain', 'Myanmar', 'Khagrachari', 'Bangladesh', '9054_Kishore.jpg', '', '', '', '', '', '', '', '', '', '0', '90', '', '', '', '', '', '', '', '', '', '', '', '<p>Poor man is he who don&#39;t have money, but only in the eyes of a rich. Poor man is he who don&#39;t have peace and happiness, but only in the eyes of person who is content. Poor man is he who is unhealthy, but only in the eyes of a person with good constitution. Poor is relative, but never a state of life. One can change it, if you don&#39;t consider it as fate, but even if u consider it a &quot;long shot&quot;.</p>\r\n', '', '', '', ''),
(49, '2018-05-12 21:58:10', '2018-05-12 21:58:10', '', 'Married', '1973-05-12', 'Left', '12th-May-2018', 'Tusar', '4639', '', 'Mr Arafat ', '16436', '45', '', '', '', '', '', 'Male', 'B-', '4', 'Rakhain', 'Myanmar', 'Khagrachari', 'Bangladesh', 'images (1).jpg', '', '', '', '', '', '', '', '', '', '0', '90', '', '', '', '', '', '', '', '', '', '', '', '<p>Poor man is he who don&#39;t have money, but only in the eyes of a rich. Poor man is he who don&#39;t have peace and happiness, but only in the eyes of person who is content. Poor man is he who is unhealthy, but only in the eyes of a person with good constitution. Poor is relative, but never a state of life. One can change it, if you don&#39;t consider it as fate, but even if u consider it a &quot;long shot&quot;.</p>\r\n', '', '', '', ''),
(50, '2018-05-12 21:59:00', '2018-05-12 21:59:00', '', 'Married', '1970-05-12', 'Available', '12th-May-2018', 'Tusar', '11061', '', 'Myfat Duytak', '17532', '47', '', '', '', '', '', 'Male', 'O+', '', 'Rakhain', 'Myanmar', 'Khagrachari', 'Bangladesh', 'passport-suri-copy1.jpg', '', '', '', '', '', '', '', '', '', '0', '90', '', '', '', '', '', '', '', '', '', '', '', '<p>Poor man is he who don&#39;t have money, but only in the eyes of a rich. Poor man is he who don&#39;t have peace and happiness, but only in the eyes of person who is content. Poor man is he who is unhealthy, but only in the eyes of a person with good constitution. Poor is relative, but never a state of life. One can change it, if you don&#39;t consider it as fate, but even if u consider it a &quot;long shot&quot;.</p>\r\n', '', '', '', ''),
(51, '2018-05-12 22:00:01', '2018-05-12 22:00:01', '', 'Married', '1992-04-07', 'Available', '13th-May-2018', 'Tusar', '12603', '', 'Klhya Khya', '9532', '26', '', '', '', '', '', 'Male', 'A+', '5', 'Rakhain', 'Myanmar', 'Khagrachari', 'Bangladesh', 'UmarFarouk.jpg', '', '', '', '', '', '', '', '', '', '0', '90', '', '', '', '', '', '', '', '', '', '', '', '<p>Poor man is he who don&#39;t have money, but only in the eyes of a rich. Poor man is he who don&#39;t have peace and happiness, but only in the eyes of person who is content. Poor man is he who is unhealthy, but only in the eyes of a person with good constitution. Poor is relative, but never a state of life. One can change it, if you don&#39;t consider it as fate, but even if u consider it a &quot;long shot&quot;.</p>\r\n', '', '', '', ''),
(52, '2018-05-12 22:01:13', '2018-05-12 22:01:13', '', 'Married', '1982-04-05', 'Available', '13th-May-2018', 'Tusar', '17841', '', 'Kuyah Khane', '13187', '36', '', '', '', '', '', 'Female', 'B+', '4', 'Rakhain', 'Myanmar', 'Khagrachari', 'Bangladesh', 'images.jpg', '', '', '', '', '', '', '', '', '', '0', '90', '', '', '', '', '', '', '', '', '', '', '', '<p>Poor man is he who don&#39;t have money, but only in the eyes of a rich. Poor man is he who don&#39;t have peace and happiness, but only in the eyes of person who is content. Poor man is he who is unhealthy, but only in the eyes of a person with good constitution. Poor is relative, but never a state of life. One can change it, if you don&#39;t consider it as fate, but even if u consider it a &quot;long shot&quot;.</p>\r\n', '', '', '', ''),
(53, '2018-05-12 22:02:24', '2018-05-12 22:02:24', '', 'Married', '2018-05-13', 'Available', '13th-May-2018', 'Tusar', '9751', '', 'Shaimajy', '0', '47', '', '', '', '', '', 'Female', 'O-', '5', 'Rakhain', 'Myanmar', 'Khagrachari', 'Bangladesh', 'Poor_female_and_her_child_India.jpg', '', '', '', '', '', '', '', '', '', '0', '90', '', '', '', '', '', '', '', '', '', '', '', '<p>Poor man is he who don&#39;t have money, but only in the eyes of a rich. Poor man is he who don&#39;t have peace and happiness, but only in the eyes of person who is content. Poor man is he who is unhealthy, but only in the eyes of a person with good constitution. Poor is relative, but never a state of life. One can change it, if you don&#39;t consider it as fate, but even if u consider it a &quot;long shot&quot;.</p>\r\n', '', '', '', ''),
(54, '2018-05-12 22:03:04', '2018-05-12 22:03:04', '', 'Married', '2018-05-13', 'Available', '13th-May-2018', 'Tusar', '3053', '', 'Loyudm', '0', '50', '', '', '', '', '', 'Male', 'O+', '4', 'Rakhain', 'Myanmar', 'Khagrachari', 'Bangladesh', 'UmarFarouk.jpg', '', '', '', '', '', '', '', '', '', '0', '90', '', '', '', '', '', '', '', '', '', '', '', '<p>Poor man is he who don&#39;t have money, but only in the eyes of a rich. Poor man is he who don&#39;t have peace and happiness, but only in the eyes of person who is content. Poor man is he who is unhealthy, but only in the eyes of a person with good constitution. Poor is relative, but never a state of life. One can change it, if you don&#39;t consider it as fate, but even if u consider it a &quot;long shot&quot;.</p>\r\n', '', '', '', ''),
(55, '2018-05-12 22:04:38', '2018-05-12 22:04:38', '', 'Married', '1962-05-13', 'Available', '13th-May-2018', 'Tusar', '3251', '', 'Klays Kha ', '20454', '55', '', '', '', '', '', 'Female', 'A+', '4', 'Rakhain', 'Myanmar', 'Khagrachari', 'Bangladesh', 'a4902ad8-a2df-49bd-9238-07ed2777c398.jpg', '', '', '', '', '', '', '', '', '', '0', '90', '', '', '', '', '', '', '', '', '', '', '', '<p>Poor man is he who don&#39;t have money, but only in the eyes of a rich. Poor man is he who don&#39;t have peace and happiness, but only in the eyes of person who is content. Poor man is he who is unhealthy, but only in the eyes of a person with good constitution. Poor is relative, but never a state of life. One can change it, if you don&#39;t consider it as fate, but even if u consider it a &quot;long shot&quot;.</p>\r\n', '', '', '', ''),
(56, '2018-05-12 22:05:22', '2018-05-12 22:05:22', '', 'Married', '1974-05-13', 'Left', '13th-May-2018', 'Tusar', '31209', '', 'Kuays', '16071', '44', '', '', '', '', '', 'Female', 'A+', '4', 'Rakhain', 'Myanmar', 'Khagrachari', 'Bangladesh', 'pakistan_poor_woman.jpg', '', '', '', '', '', '', '', '', '', '0', '90', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(250) NOT NULL,
  `username` varchar(2000) NOT NULL,
  `password` varchar(20) NOT NULL,
  `a1` varchar(250) NOT NULL DEFAULT '0',
  `a2` varchar(250) NOT NULL DEFAULT '0',
  `a3` varchar(250) NOT NULL DEFAULT '0',
  `a4` varchar(250) NOT NULL DEFAULT '0',
  `a5` varchar(250) NOT NULL DEFAULT '0',
  `a6` varchar(250) NOT NULL DEFAULT '0',
  `a7` varchar(250) NOT NULL DEFAULT '0',
  `a8` varchar(250) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`) VALUES
(1235, 'user', 'pass', '15101111', '12 September 2018', 'Forum Management,Contact & Questions,Refugee Management,Manage User', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `myportfolio`
--

CREATE TABLE `myportfolio` (
  `a1` varchar(1000) NOT NULL,
  `a2` varchar(1000) NOT NULL,
  `a3` varchar(1000) NOT NULL,
  `a4` varchar(1000) NOT NULL,
  `a5` varchar(1000) NOT NULL,
  `a6` varchar(1000) NOT NULL,
  `a7` varchar(1000) NOT NULL,
  `a8` varchar(1000) NOT NULL,
  `a9` varchar(1000) NOT NULL,
  `a10` varchar(1000) NOT NULL,
  `a11` varchar(1000) NOT NULL,
  `a12` varchar(1000) NOT NULL,
  `a13` varchar(1000) NOT NULL,
  `a14` varchar(1000) NOT NULL,
  `userID` varchar(1000) NOT NULL,
  `id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myportfolio`
--

INSERT INTO `myportfolio` (`a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `userID`, `id`) VALUES
('BTC/USD', 'Bitcoin', 'Buy at Market prices', '10/16/2017', '5,700.18', '10,303.71', '81%', '', '', '', '', '', '', '', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `product_id` int(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `random_serial` int(100) NOT NULL,
  `product_details` text NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `product_id`, `phone`, `random_serial`, `product_details`, `date`) VALUES
(47, 'mostakim', 'mostak@gmail.com', 2, '01738157543', 648167, 'With Premium you get access to the following features:\n\nPremium designer templates - Website Builder Premium gives you access to exclusive templates designed for the optimal web experience. There are different categories to choose from and you can get your website ready in no time.\nHigh-resolution publishing - Website Builder Premium shows the images of your site in the most optimal resolution, depending on the screen your visitor is using. If your site is viewed on an HD screen, your images will be visible in high-resolution.\nRestore backups inside Website Builder - With Premium you will have access to former versions of your website. Did you delete a page or did you like the former styling better? No problem - with Website Builder Backups you can view old versions of your website and restore them.\nSites with up to 200 pages - The standard version of Website Builder allows you to publish up to 5 pages. With Premium you can publish large websites without having to keep your content to a minimum.\nAdvanced publishing - Premium uses more advanced publishing that optimizes the code of your website. The result is a faster loading site. The improved publishing also helps search engines find your website quicker!\nWe are constantly working to improve Website Builder, so you can look forward to more features to be added in the future.', '11th-May-2018'),
(48, 'info', 'tusar8145@gmail.com', 2, '01395959595', 801363, 'With Premium you get access to the following features:\n\nPremium designer templates - Website Builder Premium gives you access to exclusive templates designed for the optimal web experience. There are different categories to choose from and you can get your website ready in no time.\nHigh-resolution publishing - Website Builder Premium shows the images of your site in the most optimal resolution, depending on the screen your visitor is using. If your site is viewed on an HD screen, your images will be visible in high-resolution.\nRestore backups inside Website Builder - With Premium you will have access to former versions of your website. Did you delete a page or did you like the former styling better? No problem - with Website Builder Backups you can view old versions of your website and restore them.\nSites with up to 200 pages - The standard version of Website Builder allows you to publish up to 5 pages. With Premium you can publish large websites without having to keep your content to a minimum.\nAdvanced publishing - Premium uses more advanced publishing that optimizes the code of your website. The result is a faster loading site. The improved publishing also helps search engines find your website quicker!\nWe are constantly working to improve Website Builder, so you can look forward to more features to be added in the future.', '11th-May-2018'),
(53, 'tusar', 'tusar8145@gmail.com', 2, '017', 566472, 'With Premium you get access to the following features:\n\nPremium designer templates - Website Builder Premium gives you access to exclusive templates designed for the optimal web experience. There are different categories to choose from and you can get your website ready in no time.\nHigh-resolution publishing - Website Builder Premium shows the images of your site in the most optimal resolution, depending on the screen your visitor is using. If your site is viewed on an HD screen, your images will be visible in high-resolution.\nRestore backups inside Website Builder - With Premium you will have access to former versions of your website. Did you delete a page or did you like the former styling better? No problem - with Website Builder Backups you can view old versions of your website and restore them.\nSites with up to 200 pages - The standard version of Website Builder allows you to publish up to 5 pages. With Premium you can publish large websites without having to keep your content to a minimum.\nAdvanced publishing - Premium uses more advanced publishing that optimizes the code of your website. The result is a faster loading site. The improved publishing also helps search engines find your website quicker!\nWe are constantly working to improve Website Builder, so you can look forward to more features to be added in the future.', '11th-May-2018');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `userID` int(250) NOT NULL,
  `p1` varchar(200) NOT NULL DEFAULT '0',
  `p2` varchar(200) NOT NULL DEFAULT '0',
  `p3` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `p4` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `a1` varchar(100) NOT NULL DEFAULT 'Not Registered'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`userID`, `p1`, `p2`, `p3`, `p4`, `a1`) VALUES
(49, '362', '87', '2018-04-29 06:00:01', '2018-04-29 06:00:01', 'Not Registered'),
(50, '7656', '7287', '2018-04-29 06:00:01', '2018-04-29 06:00:01', 'Not Registered'),
(51, '4', '18', '2018-04-29 06:00:01', '2018-04-29 06:00:01', 'Not Registered');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `a1` varchar(1000) NOT NULL,
  `a2` varchar(1000) NOT NULL,
  `a3` varchar(1000) NOT NULL,
  `a4` varchar(1000) NOT NULL,
  `a5` varchar(1000) NOT NULL,
  `a6` varchar(1000) NOT NULL,
  `a7` varchar(1000) NOT NULL,
  `a8` varchar(1000) NOT NULL,
  `a9` varchar(1000) NOT NULL,
  `a10` varchar(1000) NOT NULL,
  `a11` varchar(1000) NOT NULL,
  `a12` varchar(1000) NOT NULL,
  `a13` varchar(1000) NOT NULL,
  `a14` varchar(1000) NOT NULL,
  `a15` varchar(1000) NOT NULL,
  `id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `id`) VALUES
('BTC/USD', 'Bitcoin', 'Buy at Market prices', '10/16/2017', '5,700.18', '10,303.71', '81%', '', '', '', '', '', '', '', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(250) NOT NULL,
  `d1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `d2` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `d3` varchar(1000) NOT NULL,
  `a1` varchar(1000) NOT NULL,
  `a2` varchar(1000) NOT NULL,
  `a3` varchar(1000) NOT NULL,
  `a4` longtext NOT NULL,
  `a5` varchar(1000) NOT NULL,
  `a6` varchar(1000) NOT NULL,
  `a7` varchar(1000) NOT NULL,
  `a8` varchar(1000) NOT NULL,
  `a9` varchar(1000) NOT NULL,
  `a10` varchar(1000) NOT NULL,
  `a11` varchar(1000) NOT NULL,
  `a12` varchar(1000) NOT NULL,
  `a13` varchar(1000) NOT NULL,
  `a14` varchar(1000) NOT NULL,
  `a15` varchar(1000) NOT NULL,
  `a16` varchar(100) NOT NULL,
  `a17` varchar(100) NOT NULL,
  `a18` varchar(100) NOT NULL,
  `a19` varchar(100) NOT NULL,
  `a20` varchar(100) NOT NULL,
  `a21` varchar(100) NOT NULL,
  `a22` varchar(100) NOT NULL,
  `a23` varchar(100) NOT NULL,
  `a24` varchar(100) NOT NULL,
  `a25` varchar(100) NOT NULL,
  `a26` varchar(100) NOT NULL,
  `a27` varchar(100) NOT NULL,
  `a28` varchar(100) NOT NULL,
  `a29` varchar(100) NOT NULL,
  `a30` varchar(100) NOT NULL,
  `b1` varchar(100) NOT NULL,
  `b2` varchar(100) NOT NULL,
  `b3` varchar(100) NOT NULL,
  `b4` varchar(100) NOT NULL,
  `b5` varchar(100) NOT NULL,
  `b6` varchar(100) NOT NULL,
  `b7` varchar(100) NOT NULL,
  `b8` varchar(100) NOT NULL,
  `b9` varchar(100) NOT NULL,
  `b10` varchar(100) NOT NULL,
  `b11` varchar(100) NOT NULL,
  `b12` varchar(100) NOT NULL,
  `b13` varchar(100) NOT NULL,
  `b14` varchar(100) NOT NULL,
  `b15` varchar(100) NOT NULL,
  `r1` varchar(10000) NOT NULL,
  `r2` varchar(10000) NOT NULL,
  `r3` varchar(1000) NOT NULL,
  `r4` varchar(1000) NOT NULL,
  `r5` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `d1`, `d2`, `d3`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `a28`, `a29`, `a30`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `b8`, `b9`, `b10`, `b11`, `b12`, `b13`, `b14`, `b15`, `r1`, `r2`, `r3`, `r4`, `r5`) VALUES
(3, '2018-05-07 16:45:19', '2018-05-07 16:54:25', '', 'BASIC WEBSITE', 'One time', '100', 'Not having a website means you’re losing out on potential customers. The excuse of websites being too complicated or too expensive to create is no longer valid. Bluehost offers you a domain, a business email, AND a professional WordPress website for just $2.95/month.\r\n\r\nFollow the 5 simple steps in this guide to have your small business website up and running in no time:\r\n\r\nStep 1: Choose and Register Your Small Business Website’s Domain Name\r\nThe very first step is to decide what name you’ll give your website – for example, www.YourBusiness.com.\r\n\r\nFirst things first, you’ll want to check and see if your business name is available. To find out, enter it into the domain search tool below, powered by Bluehost. If you are taken straight to the registration page, it means your name is available, if you see a message that the domain is not available for registration, then you will have to adjust your business name.\r\n\r\nIf the .COM version of your business name is available, consider using this for your website. Otherwise, try different phrases before settling for an alternate suffix, like .NET or .INFO. Consumers overwhelmingly use .COM when entering a web address. So even if you promote your .NET website, you could lose customers who typed in the .COM version instead.\r\n\r\nTips for Finding Business Website Domains\r\nIf your business name is taken, here are a few tips to keep in mind as you search for alternate names:\r\n\r\nDomain names are important for search engines, like Google. Consider including words that people are likely to use when searching for your business. “ProStar Lawncare” is probably better than “ProStar USA.”\r\nDomain names should be easy to pronounce and remember. Keep your name as short as possible and avoid punctuation like dashes. As a simple rule of thumb, make sure somebody can find your domain if they hear it spoken out loud.\r\nUse location to find a unique URL. If all other options are taken, add your city/area name to the domain. For example, a company called Smith Plumbers based in Albany, NY, could try www.smithplumbersalbany.com. This, again, can help your website appear in Google since customers are likely to enter their city name when searching for a service.\r\nIf you still need help choosing a domain name, see our Top 25 Domain Name Tips From The Pros.\r\n\r\nStep 2: Choose Which Platform & Host are Right for You\r\nOnce you’ve chosen a domain, the next step is to decide where to host your website. A host is the service that actually stores your website and transmits it to visitors. In our experience, the two best host platforms are Bluehost and Weebly.Bluehost is the most versatile hosting option and the one that delivers the most value. You can register your domain, host your website, AND get a business email address for just $2.95 per month. Click here to check out Bluehost’s hosting plans.\r\n\r\nWeebly is a bit more user-friendly, and offers more personalized customer support. This can make it a better option for less tech-savvy users who only need a simple information website. However, the tradeoff is a higher price tag $12/mo, and this doesn’t include a domain or email account.\r\n\r\nNow let’s explore each of these options in more detail:\r\n\r\nOption 1: Create a WordPress Website using Bluehost ($2.95/month)\r\nIf you are a little more technologically savvy, and want access to unlimited features and functionality, WordPress is the way to go. Bluehost offers affordable hosting plans and a free WordPress website (with a domain and business email account included) for just $2.95/month.\r\n\r\nYou can also learn how to setup a WordPress site here.\r\n\r\nGetting Started with WordPress\r\nJust bear in mind: WordPress is an intermediate website builder. You won’t need any programming knowledge per se, but you will need to familiarize yourself with their backend menu. Unlike Weebly, which lets you edit the website just by dragging and dropping elements, WordPress has a more traditional edit menu.\r\n\r\nThat said, we’ve written a few guides and recorded a video that explains how to create a WordPress website using Bluehost from start to finish. If you follow one of our guides and use the same theme, you should get most of the work done in less than an hour.\r\n\r\nCheck out our WordPress guides below. For each of these, we use Bluehost, which gives you a WordPress website, domain and business email for just $2.95/month:\r\n\r\nCreate a Business Website (With Business template)\r\nCreate a Restaurant Website (With restaurant template)\r\nCreate a Salon Website (With Salon template)\r\nOption 2: Use a Website Builder like Weebly ($12/month)\r\nFor small business owners who are short on time, are less technologically advanced, but are willing to pay a little bit more, we recommend using Weebly. Weebly is part of a new class of tools called website builders that utilize drag-and-drop interfaces to make it easier than ever to design a site\r\n\r\nWith Weebly, you start by choosing a template, then customize with your own pages, text, images, etc.\r\n\r\n', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '2018-05-07 16:48:05', '2018-05-07 16:54:25', '', 'PREMIUM WEBSITE', 'one time', '300', 'With Premium you get access to the following features:\r\n\r\nPremium designer templates - Website Builder Premium gives you access to exclusive templates designed for the optimal web experience. There are different categories to choose from and you can get your website ready in no time.\r\nHigh-resolution publishing - Website Builder Premium shows the images of your site in the most optimal resolution, depending on the screen your visitor is using. If your site is viewed on an HD screen, your images will be visible in high-resolution.\r\nRestore backups inside Website Builder - With Premium you will have access to former versions of your website. Did you delete a page or did you like the former styling better? No problem - with Website Builder Backups you can view old versions of your website and restore them.\r\nSites with up to 200 pages - The standard version of Website Builder allows you to publish up to 5 pages. With Premium you can publish large websites without having to keep your content to a minimum.\r\nAdvanced publishing - Premium uses more advanced publishing that optimizes the code of your website. The result is a faster loading site. The improved publishing also helps search engines find your website quicker!\r\nWe are constantly working to improve Website Builder, so you can look forward to more features to be added in the future.', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '2018-05-07 16:49:59', '2018-05-07 16:54:25', '', 'WEB SOFTWARE', 'one time', '400', 'Benefits of using web-based software\r\nWeb technologies offer new opportunities for businesses all sizes. There are well recognised benefits of using a web-based solution opposed to a desktop software package:\r\n\r\nweb based software is accessible from anywhere, as long as you have a connection to to the Internet – this gives you the opportunity to work on the move from home or from any remote location;\r\nweb based software are easier make accessible to various mobile devices: smartphones including iPhone, netbooks etc.;\r\nweb based software is easier to deploy and maintain.\r\nWhat is web based software?\r\nWeb based software, (or a web-based application) is a software that runs on a server (computer connected to the Internet), while users connect to it from their computers using an Internet browser.\r\n\r\nWeb based software is used by consumers and businesses alike: webmail, social networking sites and online shops are used by most of us. Business services are also very popular: from office suite (G suite) to online collaboration, accounting and CRM.\r\n\r\nIf you are using G suite, you might probably be interested in Magic Web Solutions’ project management tool that’s complementing G suite. It’s called Kanbanchi because it’s based on Kanban methodology.', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '2018-05-07 16:51:43', '2018-05-07 16:54:25', '', 'GRAPHICS DESIGN', 'permanent', '200', 'What is Graphic Design?\r\nGraphic design is the process of creating visual and textual content in order to communicate messages to a target group. It involves the application of typography, photography, and illustration, in combination with visual hierarchy and page layout techniques. Twenty-first-century graphic design extends beyond traditional print media and includes web design, packaging, wayfinding, and exhibition design.\r\n\r\nThe history of graphic design begins with the production of manuscripts in ancient civilizations, which placed an emphasis on typography. For centuries, early artists—usually commissioned or, like medieval monks, duty-bound by vocation to work in the realms of mysticism, religion, and state affairs—had few tools at their disposal. They had to etch and ink representations painstakingly on stone, clay, papyrus, bark, parchment, and vellum. With technological progress (i.e., the invention of movable type and eventually computers), the field developed into a distinct profession. In the late 19th and early 20th centuries, the creation of print media (e.g., advertisements, books for mass/worldwide distribution, and magazines) using a combination of visual and textual content grew. In 1922, William A. Dwiggins, an American type designer, calligrapher, and book designer, introduced the term graphic design to describe the emerging field. Throughout the rest of the 20th century and into the 21st, the field continued to advance; globally, it spans multiple media, both static and interactive.\r\n\r\nThe term “graphic design” is closely related to visual design and information design. Although interpretations may vary, at the heart of all descriptions lies a human-centered design process. Understanding the users’ information needs and visual processing capabilities is key to designing visual information that successfully communicates the desired message. Perhaps unsurprisingly, for designers creating work for ever-increasingly mobile audiences, augmenting graphic design to suit the user’s context is a heavyweight matter to bear in mind at all times.', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(250) NOT NULL,
  `a1` varchar(10000) NOT NULL,
  `a2` varchar(2500) NOT NULL,
  `a3` varchar(250) NOT NULL,
  `a4` varchar(10000) NOT NULL,
  `a5` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `a6` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `a7` varchar(250) NOT NULL,
  `a8` varchar(250) NOT NULL,
  `a9` varchar(250) NOT NULL,
  `a10` varchar(250) NOT NULL,
  `a11` varchar(250) NOT NULL,
  `a12` varchar(250) NOT NULL,
  `a13` varchar(250) NOT NULL,
  `a14` varchar(250) NOT NULL,
  `a15` varchar(250) NOT NULL,
  `a16` varchar(250) NOT NULL,
  `r1` varchar(1000) DEFAULT NULL,
  `r2` varchar(1000) DEFAULT NULL,
  `r3` varchar(1000) DEFAULT NULL,
  `r4` varchar(1000) DEFAULT NULL,
  `r5` varchar(1000) DEFAULT NULL,
  `r6` varchar(1000) DEFAULT NULL,
  `r7` varchar(1000) DEFAULT NULL,
  `r8` varchar(1000) DEFAULT NULL,
  `r9` varchar(1000) DEFAULT NULL,
  `r10` varchar(1000) DEFAULT NULL,
  `r11` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`) VALUES
(67, 'System', 'y', 'y', 'y', '2018-03-05 11:08:53', '2018-03-14 08:00:38', '', '', '', '', '', '', '', '', '', '', '<div class=\"col-xs-12 col-sm-6 col-md-6\">\n								<div class=\"icon-box bg-white left media border-3px bg-hover-theme-colored mb-30 p-30 pb-20\"> \n									<a href=\"#\" class=\"media-left pull-left\"><img src=\"admin/a_dashboard/uploads/icon/', '\" alt=\"\" width=\"64\"></a>\n									<div class=\"media-body\">\n										<h4 class=\"media-heading heading\">', '</h4>\r\n										<p>', '</p>\n										<a target=\"_Blank\" href=\"', '\" class=\"text-theme-colored2\">Read More ?</a>\n									</div>\n								</div>\n							</div>', 'admin/a_dashboard/uploads/report/', '</p> 										<a ', 'href=\"', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(250) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `s1` varchar(2000) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `date`, `s1`) VALUES
(15, 'tusar8145@gmail.com', '2018-03-30 22:55:35', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `userStatus` enum('Y','N') NOT NULL DEFAULT 'N',
  `tokenCode` varchar(100) NOT NULL,
  `a1` varchar(100) NOT NULL,
  `a2` varchar(100) NOT NULL,
  `a3` varchar(100) NOT NULL,
  `a4` varchar(100) NOT NULL,
  `a5` varchar(100) NOT NULL,
  `a6` varchar(100) NOT NULL,
  `a7` varchar(100) NOT NULL,
  `a8` varchar(100) NOT NULL,
  `a9` varchar(100) NOT NULL,
  `a10` varchar(100) NOT NULL,
  `a11` varchar(100) NOT NULL,
  `a12` varchar(100) NOT NULL,
  `a13` varchar(100) NOT NULL,
  `a14` varchar(100) NOT NULL,
  `a15` varchar(100) NOT NULL DEFAULT 'unseen',
  `a16` varchar(100) NOT NULL,
  `a17` varchar(100) NOT NULL,
  `a18` varchar(100) NOT NULL,
  `a19` varchar(100) NOT NULL DEFAULT 'Not Registered'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userID`, `userName`, `userEmail`, `userPass`, `userStatus`, `tokenCode`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`) VALUES
(49, 'Mr x', 'tusar8145@gmail.com', '3749dae01a0bc2482673fe8135c7cc15', 'Y', '515616e1ae516d9e59105dcdc9ac72b4', 'Testing', 'Mail', 'Green Road', 'Dhaka', 'Dhaka', '1205', 'Bangladesh', '', '', '', '', '', '', '', 'seen', '', '', '', 'Not Registered'),
(50, 'Rahman', 'tariyt@gmail.com', '114998572bbb83c8851fda8ba5869734', 'Y', '44a3ccb3fbc3757f009dc8d3719675c5', 'Testing', 'Hasan', 'Dhaka', 'Dhaka', 'Dhaka', '1205', 'Bangladesh', '', '', '', '', '', '', '', 'seen', '', '', '', 'Not Registered'),
(51, 'Baki', 'soper@gmail.com', 'dfd01004bd6ea928a434469b9c58cf87', 'N', 'a2af0fe86d210e64aa0fe54a72a66266', 'Testing', 'Hasan', 'Dhaka', 'Dhaka', 'Dhaka', '1205', 'Bangladesh', '', '', '', '', '', '', '', 'seen', '', '', '', 'Not Registered');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(100) NOT NULL,
  `age` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `age`) VALUES
(3, 90),
(3, 89),
(3, 88),
(3, 87),
(3, 86),
(3, 85),
(3, 84),
(3, 83),
(3, 82),
(3, 81),
(3, 80),
(3, 79),
(3, 78),
(3, 77),
(3, 76),
(3, 75),
(3, 74),
(3, 73),
(3, 72),
(3, 71),
(3, 70),
(3, 69),
(3, 68),
(3, 67),
(3, 66),
(3, 65),
(3, 64),
(3, 63);

-- --------------------------------------------------------

--
-- Table structure for table `uptodate`
--

CREATE TABLE `uptodate` (
  `id` int(250) NOT NULL,
  `a1` varchar(10000) NOT NULL,
  `a2` varchar(2500) NOT NULL,
  `a3` varchar(250) NOT NULL,
  `a4` varchar(10000) NOT NULL,
  `a5` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `a6` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `a7` varchar(250) NOT NULL,
  `a8` varchar(250) NOT NULL,
  `a9` varchar(250) NOT NULL,
  `a10` varchar(250) NOT NULL,
  `a11` varchar(250) NOT NULL,
  `a12` varchar(250) NOT NULL,
  `a13` varchar(250) NOT NULL,
  `a14` varchar(250) NOT NULL,
  `a15` varchar(250) NOT NULL,
  `a16` varchar(250) NOT NULL,
  `r1` varchar(1000) DEFAULT NULL,
  `r2` varchar(1000) DEFAULT NULL,
  `r3` varchar(1000) DEFAULT NULL,
  `r4` varchar(1000) DEFAULT NULL,
  `r5` varchar(1000) DEFAULT NULL,
  `r6` varchar(1000) DEFAULT NULL,
  `r7` varchar(1000) DEFAULT NULL,
  `r8` varchar(1000) DEFAULT NULL,
  `r9` varchar(1000) DEFAULT NULL,
  `r10` varchar(1000) DEFAULT NULL,
  `r11` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uptodate`
--

INSERT INTO `uptodate` (`id`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`) VALUES
(67, 'System', 'hp', 'hp', 'hp', '2018-03-05 20:05:35', '2018-03-14 08:37:02', '', '', '', '', '', '', '', '', '', '', '<div class=\"col-md-6\">\r\n										<article class=\"post clearfix mb-30 bg-lighter\">\r\n											<div class=\"entry-header\">\r\n												<div class=\"post-thumb thumb\"> \r\n												</div>\r\n											</div>\r\n											<div class=\"entry-content border-1px p-20 pr-10\">\r\n												<div class=\"entry-meta media mt-0 no-bg no-border\">												\r\n													<div class=\"media-body pl-15\">\r\n														<div class=\"event-content pull-left flip\">\r\n															<h4 class=\"entry-title text-white text-uppercase m-0 mt-5\"><a href=\"blog-single-right-sidebar.html\">', '</a></h4>\r\n															<div class=\" \"style=\"color:dark;background-color: ;text-align:left;border-bottom:1px solid lightgray;\">', '</div>\r\n														</div>\r\n													</div>\r\n												</div>\r\n												<p class=\"mt-10\"style=\"text-align:left;padding-left:18px;\">', '</p>\n												<button type=\"button\" style=\"background-color:orange;\" class=\"btn btn-info btn-sm btn btn-dark btn-theme-colored btn-xs btn-flat mt-0 btn-read-more \" data-toggle=\"modal\" data-target=\"#myModala', '\">Read more</button> \r\n												<div class=\"clearfix\"></div>\r\n											</div>\r\n										</article>\r\n										<div class=\"container\">\r\n											<div class=\"modal fade\" id=\"myModala', '\" role=\"dialog\">\r\n												<div class=\"modal-dialog modal-lg\">\r\n													<div class=\"modal-content\">\r\n														<div class=\"modal-header\">\r\n															<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\r\n															<h4 class=\"modal-title\">', '</h4>\r\n														</div>\r\n														<div class=\"modal-body\"style=\"text-align: left;\">\r\n															<p style=\"text-align: left;padding-left:20px;padding-right:20px;\">', '</p>\r\n														</div>\r\n														<div class=\"modal-footer\">\r\n															<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>\r\n														</div>\r\n													</div>\r\n												</div>\r\n											</div>\r\n										</div>										\r\n									</div>', '</p>\n											<a href=\"', '\"><button type=\"button\" style=\"background-color:orange;\" class=\"btn btn-info btn-sm btn btn-dark btn-theme-colored btn-xs btn-flat mt-0 btn-read-more \" data-toggle=\"modal\" data-target=\"#myModala1\">Read more</button></a> \n											<div class=\"clearfix\"></div>\n										</div>\n									</article>\n									<div class=\"container\">\n										<div class=\"modal fade\" id=\"myModala1', NULL),
(73, 'DIFFERENT TYPES OF STROKEDIFFERENT', 'DIFFERENT TYPES OF STROKEDIFFERENT', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum\nneque id magna. Mauris sollicitudin nisi sit amet sem. Etiam sit amet.', '<h2>Welcome to the HTML editor!</h2>\n<p>Just type the HTML and it will be shown below.</p>\n\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum neque id magna. Mauris sollicitudin nisi sit amet sem. Etiam sit amet lectus a velit interdum facilisis. Vestibulum ante ipsum primis in faucibus orci <strong>luctus et ultrices posuere</strong> cubilia Curae; In tincidunt eleifend neque. Maecenas interdum, neque in fringilla pellentesque, lacus massa eleifend elit, nec scelerisque nulla orci a nunc. Quisque sollicitudin. Sed pulvinar lacus id lacus. Vestibulum imperdiet tellus eget risus. Quisque libero nisl, feugiat eu, euismod at, elementum eget, tellus. <a href=\"http://www.clesto.com\">Clesto.com</a></p>\n\n<img src=\"https://www.google.se/images/google_80wht.gif\" alt=\"Google logo\">\n\n<h2>Heading in h2, som more sample text</h2>\n\n<p>Phasellus sem odio, varius quis, cursus at, ullamcorper eget, turpis. Maecenas a mi. Mauris dignissim lectus malesuada odio. Duis elit arcu, lobortis ut, porta ac, venenatis ornare, odio. Pellentesque scelerisque. Ut elementum laoreet massa. Suspendisse hendrerit odio eget turpis. Cras tellus dui, malesuada id, adipiscing ut, laoreet sed, magna. Phasellus scelerisque aliquet ligula. Quisque vitae elit sit amet enim suscipit interdum. Curabitur laoreet, mauris sit amet aliquet interdum, pede sapien malesuada metus, in tincidunt turpis justo id arcu. Donec gravida odio ac lectus. Nam rutrum ante in nisi laoreet aliquet. Sed at ante.</p>\n\n<h3>Heading in h3, som more sample text</h3>\n\n<p>Nulla facilisi. Nullam cursus scelerisque erat. Praesent convallis rhoncus dui. In hac habitasse platea dictumst. Nullam pellentesque. Mauris ac orci. Donec dictum. Etiam purus tortor, elementum a, posuere nec, pulvinar id, ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque vel justo. Nullam posuere purus sed arcu.</p>\n\n<ul>\n	<li>Nulla facilisi.</li>\n	<li>Pellentesque habitant morbi</li>\n	<li>Quisque vel justo.</li>\n	<li>Nullam posuere purus sed arcu.</li>\n</ul>', '2018-03-06 10:00:50', '2018-03-06 10:00:50', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alert`
--
ALTER TABLE `alert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `a7` (`a7`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `a2` (`a2`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `a1` (`a1`);

--
-- Indexes for table `myportfolio`
--
ALTER TABLE `myportfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`age`);

--
-- Indexes for table `uptodate`
--
ALTER TABLE `uptodate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alert`
--
ALTER TABLE `alert`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1236;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `userID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `age` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `uptodate`
--
ALTER TABLE `uptodate`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
