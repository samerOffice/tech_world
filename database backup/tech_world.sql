-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 03:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech_world`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` text NOT NULL,
  `writer_name` text NOT NULL,
  `blog_description` text NOT NULL,
  `blog_image` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `writer_name`, `blog_description`, `blog_image`, `created_at`, `updated_at`) VALUES
(4, 'How to search keywords for SEO?', 'Kamrun Nahar', '<p dir=\"ltr\" style=\"line-height:1.38;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">What is SEO?</span></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The abbreviation of SEO is (SEARCH ENGINE OPTIMIZATION). In small words we can say, SEO Marketing means a process of developing the reach of a website in Google, Microsoft Bing and in other search engines. </span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> </span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Basically search engine optimization helps to attract new customers, clients or the audience who visits the site. Day by day SEO (search engine optimization) is becoming a great tool for advertisement. At present, for promotional activities SEO plays a vital role. Affiliate marketing, SEO marketing, Digital marketing are very common words to the present tech oriented advance generation. </span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">﻿</span></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><br></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;Creative or Technical: Which knowledge is important for SEO?</span></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><br></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Now it is said that SEO is more technical than creativity. It is also true that here we need to play a big psychological game and for that we need to assume people\'s perceptions about any topic. It is necessary to keep in mind the thought process of the people and on that basis we choose the key words. Designing the full website without any kind of technical errors and selecting very relative contents makes a website very authentic and it gives a better ranking in Google.&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><br></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">How to find out keywords?</span></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><br></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">To find out keywords we can use some keywords research tools such as Google keyword planner, Semrush, Ahrefs, Google Trends, Moz Keyword Planner, and Google Search Console. These are the tools. By taking help from these tools we can easily find out the keywords.</span></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><br></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">How important are the keywords?</span></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><br></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">We need to be very conscious about keywords because this is a kind of psychological game and depends on people\'s perceptions. So, we need to search for appropriate keywords before we start to write about any content. It is really a very tough task. In SEO we need to play a mind game. So, to make a perfect informative article someone needs to find out appropriate keywords for doing SEO because SEO helps to get a rank in the very first page of Google. So, from here we can understand the importance of keywords.&nbsp;&nbsp;&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><br></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">How does Semrush work as a keywords research tool?</span></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><br></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">To find out keywords for a website at first we give the URL on the semrush search option. Semrush takes us on a page where it shows some interesting data to us. Semrush is a website which helps us to find out keywords. Here to see the KD’s (Keyword Difficulty) number and position we can reach a decision. How many times a keyword comes and gets ranked in the google we can get that information through Semrush.&nbsp;&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><br></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 12pt 0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Next we will tell you how you find out the keywords by using these tools? So please read our blogs and stay with us.</span></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 12pt 0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Related links:</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><a href=\"https://www.youtube.com/watch?v=i47nmjM0mRg&amp;list=PLSiEd83PgKB4LWMGzGEm4Lq5P0a6HJ5Cg&amp;index=8\" style=\"text-decoration:none;\"><span style=\"font-size:11pt;font-family:\'Times New Roman\',serif;color:#1155cc;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">https://www.youtube.com/watch?v=i47nmjM0mRg&amp;list=PLSiEd83PgKB4LWMGzGEm4Lq5P0a6HJ5Cg&amp;index=8</span></a></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><a href=\"https://searchengineland.com/guide/what-is-seo\" style=\"text-decoration:none;\"><span style=\"font-size:11pt;font-family:\'Times New Roman\',serif;color:#1155cc;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">https://searchengineland.com/guide/what-is-seo</span></a></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><a href=\"https://moz.com/beginners-guide-to-seo\" style=\"text-decoration:none;\"><span style=\"font-size:11pt;font-family:\'Times New Roman\',serif;color:#1155cc;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">https://moz.com/beginners-guide-to-seo</span></a></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><a href=\"https://www.semrush.com/projects/\" style=\"text-decoration:none;\"><span style=\"font-size:11pt;font-family:\'Times New Roman\',serif;color:#1155cc;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">https://www.semrush.com/projects/</span></a></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:12pt;margin-bottom:12pt;\"></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><a href=\"https://ie.linkedin.com/in/khalidf\" style=\"text-decoration:none;\"><span style=\"font-size:11pt;font-family:\'Times New Roman\',serif;color:#1155cc;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">https://ie.linkedin.com/in/khalidf</span></a></p><div><br></div>', 'blogs/202309081694166435.jpg', '2023-09-08 06:32:57', '2023-09-08 06:32:57'),
(6, 'How can we activate the chime card?', 'Kamrun Nahar', '<p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">What a chime card is?</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The chime card is one of the most lucrative online new technologies that is completely free and there are no charges for activation, set up, or money withdrawal from ATMs. Chime clients can avail online bank accounts and can enjoy so many benefits. They can use chime debit cards for different types of payments. This is so easy to use than other debit cards. It doesn’t have any kind of fees weekly, monthly or yearly.&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">How does a chime card work?</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Chime cards don\'t work like a general banking card. It also has FDIC insurance against each account. That\'s why these accounts are safe to keep money. Chime card has no monthly or overdraft fees. Through a chime card you can purchase dollars. At the same time cards can save the rest and it is a little bit more expensive than cash deposit.</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">What kinds of services does a chime card provide?</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Chime offers different kinds of services including savings accounts and spending accounts.</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Chime card allows users to use online banking without worrying about the hidden fees or charges that are associated through traditional banking. Chime debit cards are available to all customers who open bank accounts in the company. They can use any ATM, retailer, or franchise.&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:12pt;margin-bottom:0pt;padding:0pt 0pt 12pt 0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">How can a person activate the chime card?</span></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 12pt 0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 12pt 0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">There are so many ways to activate the chime card such as:</span></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: 36pt;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 12pt 0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">1. &nbsp; &nbsp; Activate the chime card in online via official website</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: 36pt;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 12pt 0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2.&nbsp; &nbsp; Activate chime card via mobile app</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: 36pt;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 12pt 0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">3.&nbsp; &nbsp; Activate a chime card by calling the customer service office.&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: 36pt;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 12pt 0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">4.&nbsp; &nbsp; Though online by visiting chime website</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: 36pt;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 12pt 0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#212529;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">5.&nbsp; &nbsp; Through \"chime.com\" may anyone activate the chime card.</span></p><p dir=\"ltr\" style=\"line-height:1.656;margin-left: 36pt;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span id=\"docs-internal-guid-27c6de66-7fff-07eb-8410-2172d953dacc\"></span></p><p dir=\"ltr\" style=\"line-height:1.656;text-align: justify;background-color:#ffffff;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">This process will help someone to activate the chime card.&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">What is the procedure of using a chime card?</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Once the website has opened click the \"login\" button that is located at the top right side of the screen. In the following fields someone needs to enter the registered email ID and password.&nbsp; The next page will provide all the information that is necessary to activate the chime debit card. For activating the chime card the first step is getting a confirmation email from the chime.</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">If once a chime card is activated anyone can use it anywhere that accepts VISA credit cards. Anyone can call customer service if they don’t receive any confirmation email. If anyone may get a confirmation email then press the link and go to the company\'s website and click on \"Log In\". Once a person can enter through email and password he or she will be able to activate the account.</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Conclusion</span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">:</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">In short we can say the process to activate a chime card is so simple and straight. If you follow all the steps carefully then someone may need to enter the card details without making any kinds of mistakes. The card will activate and be ready to make rapid payments and withdraw cash money without any charge. If anyone may ask any questions then please contact us. Thank you.</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Related links:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:12pt;margin-bottom:12pt;\"><a href=\"https://help.chime.com/hc/en-us/articles/5152055813783-How-do-I-activate-my-Chime-Visa-Debit-Card-\" style=\"text-decoration:none;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#1155cc;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">https://help.chime.com/hc/en-us/articles/5152055813783-How-do-I-activate-my-Chime-Visa-Debit-Card-</span></a></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:12pt;margin-bottom:12pt;\"><a href=\"https://quickutilities.net/blog/how-to-activate-chime-card-online\" style=\"text-decoration:none;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#1155cc;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">https://quickutilities.net/blog/how-to-activate-chime-card-online</span></a></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:12pt;margin-bottom:12pt;\"><a href=\"https://appsmentorship.com/activate-chime-card/\" style=\"text-decoration:none;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#1155cc;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">https://appsmentorship.com/activate-chime-card/</span></a></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span id=\"docs-internal-guid-290f56f3-7fff-98e2-1fd0-9ed75f96d54e\"></span></span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p><span id=\"docs-internal-guid-a45b58c0-7fff-9a95-d579-acca9eafcbf0\"></span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p>', 'blogs/202309081694162420.jpg', '2023-09-08 08:40:20', '2023-09-08 08:40:20'),
(10, 'Why is my gaming chair so squeaky?', 'Kamrun Nahar', '<p dir=\"ltr\" style=\"line-height:1.3800000000000001;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Do we feel the necessity of a Gaming chair?&nbsp;</span></p><p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-1a4c4fb3-7fff-b851-d644-1ad9c4955553\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.3800000000000001;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Video games are fantastic attractions, very lucrative tools for the young generation for entertainment. When we play video games, we forget about time. While we are sitting for a long time on the same chair we feel a little bit uncomfortable and our body parts inform us in different ways. So a cozy gaming chair is very important for getting real entertainment.&nbsp;&nbsp;</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.3800000000000001;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">How was my experience with a gaming chair that I used before?</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.3800000000000001;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Last year, I bought a nice looking gaming chair but within the last few months my gaming chair was becoming so squeaky. Just&nbsp; eight months had passed and I was completely dissatisfied with that product. I didn’t get any reason behind it. Then I started to search and found the actual reason. Here, on the back side of the gaming chair in a very small letter it was written \" made by X\". Which I didn’t notice before when I bought the gaming chair. We all have a very good knowledge about random products and about their qualities. I didn\'t emphasize on qualities before.&nbsp;</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.3800000000000001;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Choice between originality and duplicity but is the choice really a fact or not?</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.3800000000000001;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Nowadays, Imitation, replicas, these things get priority because of the high price of an original product. People can\'t afford original products. So, if someone can buy anything at a cheaper rate which is as similar as a great brand, then why not! Appearance is more important rather than quality. But when we start to use the products or start to take the services then we can realize quality does matter.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.3800000000000001;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Why are the Branding tools so lucrative?&nbsp;</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.3800000000000001;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">This time I bought a gaming chair from Cybeart, Canada\'s top gaming chair brand.&nbsp; Now I am really happy, it’s really so cozy, good in appearance, and the product material is quite heavy and user friendly. So, If anyone wants to get a suggestion which brand they should buy for a gaming chair then of course I will suggest : \"don’t waste your time and money just place your order in Cybeart\". I hope this brand will not disappoint you. After using the product,&nbsp; you will also recommend other people to buy it just like me.&nbsp;</span></p><p><b style=\"font-weight:normal;\"><br><br></b></p><p dir=\"ltr\" style=\"line-height:1.3800000000000001;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Related links:</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.3800000000000001;margin-top:0pt;margin-bottom:0pt;\"><a href=\"https://cybeart.com/pages/gaming-chairs\" style=\"text-decoration:none;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#1155cc;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">https://cybeart.com/pages/gaming-chairs</span></a></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.3800000000000001;margin-top:0pt;margin-bottom:0pt;\"><a href=\"https://www.razer.com/lifestyle/gaming-chairs\" style=\"text-decoration:none;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#1155cc;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">https://www.razer.com/lifestyle/gaming-chairs</span></a></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.3800000000000001;margin-top:0pt;margin-bottom:0pt;\"><a href=\"https://www.mavix.com/\" style=\"text-decoration:none;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#1155cc;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">https://www.mavix.com/</span></a></p><p><br></p>', 'blogs/202309081694169400.jpg', '2023-09-08 09:18:56', '2023-09-08 09:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'kamrun nahar', 'knhossain04@gmail.com', 'objective', 'hello Samer, what are you doing?', '2023-09-01 08:40:39', '2023-09-01 08:40:39'),
(2, 'samer', 'acquaintsam@gmail.com', 'my second testing', 'I want a business website for my local shop', '2023-09-01 08:48:00', '2023-09-01 08:48:00'),
(3, 'kamrun nahar', 'knhossain04@gmail.com', 'personal blog website', 'I need a blog website for maintaining my contents.', '2023-09-01 09:11:21', '2023-09-01 09:11:21'),
(4, 'Kamrun nahar', 'knhossain04@gmail.com', 'For a website', 'hello \r\nthis is kamrun nahar. I need a e commerce website.', '2023-09-01 09:34:17', '2023-09-01 09:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_01_061124_create_contacts_table', 2),
(6, '2023_09_05_113420_create_blogs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Samer Kauser', 'acquaintsam@gmail.com', NULL, '$2y$10$PNS2RumcgKJqe34NuqVRjeAWyV.q/xnCu2euGWX61bNST90j7alEK', NULL, '2023-08-24 01:05:22', '2023-08-24 01:05:22'),
(2, 'Kamrun Nahar', 'knhossain04@gmail.com', NULL, '$2y$10$tat4CPw9Mg4PTlz/hxOsp.nu2It5HFAz1pfPRzgAQlJKc37tTVqbq', NULL, '2023-09-07 04:07:29', '2023-09-07 04:07:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
