-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 07:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `cauhoi`
--

CREATE TABLE `cauhoi` (
  `MaCauHoi` int(11) NOT NULL,
  `CauHoi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `LoaiCauHoi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `A` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `B` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `C` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `D` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DapAnDung` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cauhoi`
--

INSERT INTO `cauhoi` (`MaCauHoi`, `CauHoi`, `LoaiCauHoi`, `A`, `B`, `C`, `D`, `DapAnDung`) VALUES
(1, 'We\'d better get ___________ to check the wiring before we start decorating.', 'Từ vựng', 'an electrician', 'a mechanic', 'a consumer', 'an engineer', 'A'),
(2, 'What would you ________ for dinner?', 'Loại từ', 'like', 'likes', 'to like', 'liking', 'A'),
(3, 'Choose a word that has different stress pattern:', 'Trọng âm', 'athletics', 'hopelessness', 'resident', 'tolerance', 'A'),
(4, 'Choose a word that has different stress pattern:', 'Trọng âm', 'develop', 'overall', 'commitment', 'investment', 'B'),
(5, 'Choose a word that has different stress pattern:', 'Trọng âm', 'campaign', 'performance', 'brighten', 'donation', 'C'),
(6, 'Choose a word that has different stress pattern:', 'Trọng âm', 'interview', 'impression', 'company', 'formally', 'B'),
(7, 'Choose a word that has different stress pattern:', 'Trọng âm', 'commercialize', 'realization', 'predominant', 'spectacular', 'B'),
(8, 'Choose a word that has different stress pattern:', 'Trọng âm', 'leopard', 'derive', 'reduce', 'support', 'A'),
(9, 'Choose a word that has different stress pattern:', 'Trọng âm', 'period', 'attract', 'arrive', 'perform', 'A'),
(10, 'Choose a word that has different stress pattern:', 'Trọng âm', 'campaign', 'performance', 'brighten', 'donation', 'C'),
(11, 'Choose a word that has different stress pattern:', 'Trọng âm', 'interview', 'impression', 'company', 'formally', 'B'),
(12, 'Choose a word that has different stress pattern:', 'Trọng âm', 'commercialize', 'realization', 'predominant', 'spectacular', 'B'),
(13, 'Choose a word that has different stress pattern:', 'Trọng âm', 'leopard', 'derive', 'reduce', 'support', 'A'),
(14, 'Choose a word that has different stress pattern:', 'Trọng âm', 'period', 'attract', 'arrive', 'perform', 'A'),
(15, 'Choose a word that has different stress pattern:', 'Trọng âm', 'impudent', 'wanderings', 'reconcile', 'notation', 'D'),
(16, 'Choose a word that has different stress pattern:', 'Trọng âm', 'unlucky', 'displeased', 'courage', 'encourage', 'C'),
(17, 'Choose a word that has different stress pattern:', 'Trọng âm', 'confidence', 'mutual', 'etiquette', 'expensive', 'D'),
(18, 'Choose a word that has different stress pattern:', 'Trọng âm', 'impudent', 'wanderings', 'reconcile', 'notation', 'D'),
(19, 'Choose a word that has different stress pattern:', 'Trọng âm', 'unlucky', 'displeased', 'courage', 'encourage', 'C'),
(20, 'Choose a word that has different stress pattern:', 'Trọng âm', 'confidence', 'mutual', 'etiquette', 'expensive', 'D'),
(21, 'Choose a word that has different stress pattern:', 'Trọng âm', 'certificate', 'necessary', 'economy', 'geography', 'B'),
(22, 'Choose a word that has different stress pattern:', 'Trọng âm', 'floppy', 'outlook', 'loyalty', 'protect', 'C'),
(23, 'Choose a word that has different stress pattern:', 'Trọng âm', 'gymnastics', 'excellent', 'stadium', 'restaurant', 'A'),
(24, 'Choose a word that has different stress pattern:', 'Trọng âm', 'penalize', 'athletic', 'amateur', 'synchronize', 'B'),
(25, 'Choose a word that has different stress pattern:', 'Trọng âm', 'concentrate', 'remember', 'employment', 'position', 'A'),
(26, 'Choose a word that has different stress pattern:', 'Trọng âm', 'certificate', 'necessary', 'economy', 'geography', 'B'),
(27, 'Choose a word that has different stress pattern:', 'Trọng âm', 'floppy', 'outlook', 'loyalty', 'protect', 'C'),
(28, 'Choose a word that has different stress pattern:', 'Trọng âm', 'gymnastics', 'excellent', 'stadium', 'restaurant', 'A'),
(29, 'Choose a word that has different stress pattern:', 'Trọng âm', 'penalize', 'athletic', 'amateur', 'synchronize', 'B'),
(30, 'Choose a word that has different stress pattern:', 'Trọng âm', 'concentrate', 'remember', 'employment', 'position', 'A'),
(31, 'Choose a word that has different stress pattern:', 'Trọng âm', 'development', 'cooperation', 'surprisingly', 'facility', 'B'),
(32, 'Choose a word that has different stress pattern:', 'Trọng âm', 'perform', 'impress', 'event', 'spirit', 'D'),
(33, 'Choose a word that has different stress pattern:', 'Trọng âm', 'photography', 'occasion', 'qualification', 'Canadian', 'C'),
(34, 'Choose a word that has different stress pattern:', 'Trọng âm', 'initiative', 'humanity', 'conventional', 'independence', 'D'),
(35, 'Choose a word that has different stress pattern:', 'Trọng âm', 'discuss', 'visit', 'begin', 'respond', 'B'),
(36, 'Choose a word that has different stress pattern:', 'Trọng âm', 'development', 'cooperation', 'surprisingly', 'facility', 'B'),
(37, 'Choose a word that has different stress pattern:', 'Trọng âm', 'perform', 'impress', 'event', 'spirit', 'D'),
(38, 'Choose a word that has different stress pattern:', 'Trọng âm', 'photography', 'occasion', 'qualification', 'Canadian', 'C'),
(39, 'Choose a word that has different stress pattern:', 'Trọng âm', 'initiative', 'humanity', 'conventional', 'independence', 'D'),
(40, 'Choose a word that has different stress pattern:', 'Trọng âm', 'discuss', 'visit', 'begin', 'respond', 'B'),
(41, 'Find a mistake:\r\n\r\nEconomic reform has dominated Australian economic policy from the early 1980s until the end of the 20th century.', 'Xác định lỗi', 'has dominated', 'economic', 'the early', 'until', 'A'),
(42, 'Find a mistake:\r\n\r\nIce always melts if the air temperature will be warm enough.', 'Xác định lỗi', 'melts', 'the air', 'will be', 'warm enough', 'C'),
(43, 'Find a mistake:\r\n\r\nThis information is rather out of the date,so we can’tuseit in our new brochure.', 'Xác định lỗi', 'This', 'rather', 'the date', 'new brochure', 'C'),
(44, 'Find a mistake:\r\n\r\nHe suggested that council tenants must he allowed to buy their houses.', 'Xác định lỗi', 'that', 'must', 'allowed', 'their', 'B'),
(45, 'Find a mistake:\r\n\r\nThe home team wears white caps, the visiting team blue one.', 'Xác định lỗi', 'The', 'wears', 'visiting', 'blue one', 'D'),
(46, 'Find a mistake:\r\n\r\nEconomic reform has dominated Australian economic policy from the early 1980s until the end of the 20th century.', 'Xác định lỗi', 'has dominated', 'economic', 'the early', 'until', 'A'),
(47, 'Find a mistake:\r\n\r\nIce always melts if the air temperature will be warm enough.', 'Xác định lỗi', 'melts', 'the air', 'will be', 'warm enough', 'C'),
(48, 'Find a mistake:\r\n\r\nThis information is rather out of the date,so we can’tuseit in our new brochure.', 'Xác định lỗi', 'This', 'rather', 'the date', 'new brochure', 'C'),
(49, 'Find a mistake:\r\n\r\nHe suggested that council tenants must he allowed to buy their houses.', 'Xác định lỗi', 'that', 'must', 'allowed', 'their', 'B'),
(50, 'Find a mistake:\r\n\r\nThe home team wears white caps, the visiting team blue one.', 'Xác định lỗi', 'The', 'wears', 'visiting', 'blue one', 'D'),
(51, 'Find a mistake:\r\nWhile preparing for your wedding, keeping in mind that this is just the first step in your future lives of love together.', 'Xác định lỗi', 'preparing', 'wedding', 'keeping', 'together', 'C'),
(52, 'Find a mistake:\r\nJack was excused for school for several days so he could travel with his farther.', 'Xác định lỗi', 'was', 'for', 'so', 'could travel', 'B'),
(53, 'Find a mistake:\r\nThe Vietnamese Men\'s Football team was won a silver medal.', 'Xác định lỗi', 'Men\'s', 'medal', 'The', 'was won', 'D'),
(54, 'Find a mistake:\r\nMarriage is a life-long journey together, which is not simply a boat you get on together and getting off when it does not work out.', 'Xác định lỗi', 'Marriage', 'which', 'simply', 'getting', 'D'),
(55, 'Find a mistake:\r\nI wasn’t expecting Anne, but she turned off on the doorstep last night.', 'Xác định lỗi', 'expecting', 'but', 'off', 'on', 'C'),
(56, 'Find a mistake:\r\nIn 2030, how we will provide for the food, land, and energy needs of a global population of over 8 billion?', 'Xác định lỗi', 'In 2030', 'we will provide', 'needs', 'over 8 billion', 'B'),
(57, 'Find a mistake:\r\nI enjoyed talking to the people with that I met at the party last night.', 'Xác định lỗi', 'with that', 'talking', 'the', 'at the party', 'A'),
(58, 'Find a mistake:\r\nHigher general education is based on theoretical expertise and might be contrasted with higher vocational education, which concentrating on both practice and theory.', 'Xác định lỗi', 'is based on', 'expertise', 'contrasted with', 'concentrating', 'D'),
(59, 'Find a mistake:\r\nWhat I told Tom was a secret. He shouldn’t have been repeated it to you.', 'Xác định lỗi', 'told', 'was', 'been repeated', 'to you', 'C'),
(60, 'Find a mistake:\r\nAlike football, a water polo game begins with the ball in the centre of the pool.', 'Xác định lỗi', 'Alike', 'game', 'with', 'in the centre', 'A'),
(61, 'Find a mistake:\r\nWe would visit you had we known you were in hospital.', 'Xác định lỗi', 'would visit', 'had', 'known', 'were', 'A'),
(62, 'Find a mistake:\r\nThe boys were hiding between the bushes in the garden.', 'Xác định lỗi', 'The', 'between', 'were', '\r\nin the', 'B'),
(63, 'Find a mistake:\r\nThe ancient ruins may be discovered as early as 1792. The historical record is difficult to interpret.', 'Xác định lỗi', 'ancient', 'may be', 'as early', 'historical', 'B'),
(64, 'Find a mistake:\r\nA species that faces overexploitation is one that may become severely endangered or even extinct due to the rate in that the species is being used.', 'Xác định lỗi', 'faces', 'overexploitation', 'due to', 'that', 'D'),
(65, 'Find a mistake:\r\nMuch as though I approve of his enthusiasm, I’m worried he’ll overdo his weight training.', 'Xác định lỗi', 'approve of', 'worried', 'Much as', 'overdo', 'C'),
(66, 'Find a mistake:\r\nWhile preparing for your wedding, keeping in mind that this is just the first step in your future lives of love together.', 'Xác định lỗi', 'preparing', 'wedding', 'keeping', 'together', 'C'),
(67, 'Find a mistake:\r\nJack was excused for school for several days so he could travel with his farther.', 'Xác định lỗi', 'was', 'for', 'so', 'could travel', 'B'),
(68, 'Find a mistake:\r\nThe Vietnamese Men\'s Football team was won a silver medal.', 'Xác định lỗi', 'Men\'s', 'medal', 'The', 'was won', 'D'),
(69, 'Find a mistake:\r\nMarriage is a life-long journey together, which is not simply a boat you get on together and getting off when it does not work out.', 'Xác định lỗi', 'Marriage', 'which', 'simply', 'getting', 'D'),
(70, 'Find a mistake:\r\nI wasn’t expecting Anne, but she turned off on the doorstep last night.', 'Xác định lỗi', 'expecting', 'but', 'off', 'on', 'C'),
(71, 'Find a mistake:\r\nIn 2030, how we will provide for the food, land, and energy needs of a global population of over 8 billion?', 'Xác định lỗi', 'In 2030', 'we will provide', 'needs', 'over 8 billion', 'B'),
(72, 'Find a mistake:\r\nI enjoyed talking to the people with that I met at the party last night.', 'Xác định lỗi', 'with that', 'talking', 'the', 'at the party', 'A'),
(73, 'Find a mistake:\r\nHigher general education is based on theoretical expertise and might be contrasted with higher vocational education, which concentrating on both practice and theory.', 'Xác định lỗi', 'is based on', 'expertise', 'contrasted with', 'concentrating', 'D'),
(74, 'Find a mistake:\r\nWhat I told Tom was a secret. He shouldn’t have been repeated it to you.', 'Xác định lỗi', 'told', 'was', 'been repeated', 'to you', 'C'),
(75, 'Find a mistake:\r\nAlike football, a water polo game begins with the ball in the centre of the pool.', 'Xác định lỗi', 'Alike', 'game', 'with', 'in the centre', 'A'),
(76, 'Find a mistake:\r\nWe would visit you had we known you were in hospital.', 'Xác định lỗi', 'would visit', 'had', 'known', 'were', 'A'),
(77, 'Find a mistake:\r\nThe boys were hiding between the bushes in the garden.', 'Xác định lỗi', 'The', 'between', 'were', '\r\nin the', 'B'),
(78, 'Find a mistake:\r\nThe ancient ruins may be discovered as early as 1792. The historical record is difficult to interpret.', 'Xác định lỗi', 'ancient', 'may be', 'as early', 'historical', 'B'),
(79, 'Find a mistake:\r\nA species that faces overexploitation is one that may become severely endangered or even extinct due to the rate in that the species is being used.', 'Xác định lỗi', 'faces', 'overexploitation', 'due to', 'that', 'D'),
(80, 'Find a mistake:\r\nMuch as though I approve of his enthusiasm, I’m worried he’ll overdo his weight training.', 'Xác định lỗi', 'approve of', 'worried', 'Much as', 'overdo', 'C'),
(81, 'Choose one sentence that has the same meaning to the root one:\r\nThe critics undervalued his new book.', 'Chuyển đổi câu', 'The critics rejected his new book.', 'The critics were fed up with his new book.', 'The critics had a low opinion of his new book.', 'The critics turned down his new book.', 'C'),
(82, 'Choose one sentence that has the same meaning to the root one:\r\nHe got up early but he missed the bus to school.', 'Chuyển đổi câu', 'He got up early so as to miss the bus to school.', 'Though he got up early, he miss the bus to school.', 'Though he got up early, but he miss the bus to school.', 'As he got up early, he miss the bus to school.', 'B'),
(83, 'Choose one sentence that has the same meaning to the root one:\r\nNam worked hard, so he fell ill.', 'Chuyển đổi câu', 'If he had not worked hard, he would not have fallen ill.', 'If he had worked hard, he would fall ill.', 'If he had worked hard he would have fallen ill.', 'Unless he worked hard he would have fallen ill.', 'A'),
(84, 'Choose one sentence that has the same meaning as the root one:\r\nMartin never really recovered from the shock.', 'Chuyển đổi câu', 'Martin never really gave up from the shock.', 'Martin never really filled in from the shock.', 'Martin never really got over the shock.', 'Martin never really went away the shock.', 'C'),
(85, 'Choose one sentence that has the same meaning to the root one:\r\nI tried not to laugh at his face but it was impossible.', 'Chuyển đổi câu', 'I can’t stop laughing at his face.', 'I couldn’t help laughing at his face.', 'Laughing at his face was impossible.', 'When looking at his face I laughed.', 'B'),
(86, 'Choose one sentence that has the same meaning as the root one:\r\nNora went to the gas station to have her tank filled.', 'Chuyển đổi câu', 'Nora’s car is being repaired at the gas station.', 'Nora is going to the gas station to pick up her car.', 'Nora had her gas tank filled with gasoline.', 'Nora is going to the gas station to pick up her tank.', 'C'),
(87, 'Choose one sentence that has the same meaning as the root one:\r\nShe turned the radio on at 7.30. She was still listening to it when her mother came home at 9.00.', 'Chuyển đổi câu', 'She had been listening to the radio since 7.30.', 'She has been listening to the radio at 7.30.', 'She has been listening to the radio after 7.30.', 'She has been listening to the radio by 7.30.', 'A'),
(88, 'Choose one sentence that has the same meaning as the root one:\r\nI didn’t listen to him, and I didn’t succeed.', 'Chuyển đổi câu', 'If I listened to him, I would succeed.', 'If I had listened to him, I would succeed.', 'If I listened to him, I would have succeeded.', 'If I had listened to him, I would have succeeded.', 'D'),
(89, 'Choose one sentence that has the same meaning as the root one:\r\nThe snow makes driving dangerous.', 'Chuyển đổi câu', 'The snow makes it impossible to drive.', 'The snow makes it dangerous to drive.', 'Driving is not easy in snowy weather.', 'It is dangerous to go skiing.', 'B'),
(90, 'Choose one sentence that has the closest meaning to the root one:\r\nHe had worked very hard but he failed.', 'Chuyển đổi câu', 'Hard as he worked, he failed.', 'Thanks to his hard work, he failed.', 'He did not succeeded because of his being hard working.', 'Even though being hard working, he failed.', 'A'),
(91, 'Choose one sentence that has the closest meaning to the root one:\r\nEven though it was raining heavily, the explorers decided to continue their journey.', 'Chuyển đổi câu', 'It rained so heavily that the explorers could not continue their journey.', 'The explorers put off their journey due to the heavy rain.', 'The heavy rain could not prevent the explorers from continuing their journey.', 'If it had rained heavily, the explorers would not have continued their journey.', 'C'),
(92, 'Choose one sentence that has the same meaning to the root one:\r\nPeople say that he gets a high salary.', 'Chuyển đổi câu', 'It is said that he gets a high salary.', 'It is said for him to gets high salary.', 'He is said that he gets a high salary.', 'That he gets a high salary is said.', 'A'),
(93, 'Choose one sentence that has the same meaning to the root one:\r\n“If I were you, I would take the job,” said my room-mate.', 'Chuyển đổi câu', 'My room-mate was thinking about taking the job.', 'My room-mate advised me to take the job.', 'My room-mate introduced the idea of taking the job to me.', 'My room-mate insisted on taking the job for me.', 'B'),
(94, 'Choose one sentence that has the same meaning as the root one:\r\nTim is likely to fail if he takes the exam without studying.', 'Chuyển đổi câu', 'Tim will fail if he takes the exam without studying.', 'It’s probable that Tim will fail the exam if he doesn’t study.', 'It’s certain that Tim will pass the exam if he studies.', 'It’s certain that Tim will fail because he doesn’t study.', 'B'),
(95, 'Choose one sentence that has the same meaning as the root one:\r\nThe Mayor is opening the new theatre on Saturday.', 'Chuyển đổi câu', 'On Saturday is being opened the new theatre by the Mayor.', 'On Saturday has been opened the new theatre by the Mayor.', 'The new theatre is being opened on Saturday by the Mayor.', 'The new theatre on Saturday has been opened by the Mayor.', 'C'),
(96, 'Choose one sentence that has the same meaning as the root one:\r\nJohn didn\'t attend the class because he was seriously ill.', 'Chuyển đổi câu', 'John\'s class was not serious.', 'John never attended the class.', 'John was absent from class many times.', 'John was too ill to attend the class.', 'D'),
(97, 'Choose one sentence that has the same meaning as the root one:\r\nThe water was so cold that the children could not swim in it.', 'Chuyển đổi câu', 'The water was not warm enough for the children to swim in it.', 'The water was not warm enough for the children to swim in.', 'The water was not enough warm for the children to swim in.', 'The water was not warm enough for the children swim in.', 'B'),
(98, 'Choose one sentence that has the closest meaning to the root one:\r\nLan suggested going out for dinner.', 'Chuyển đổi câu', 'Lan said, \"Why don’t we go out for dinner?\"', 'Lan said, \"Do you want to go out for dinner?\"', 'Lan said, \"Must we go out for dinner?\"', 'Lan said, \"Will you go out for dinner?\"', 'A'),
(99, 'Choose one sentence that has the same meaning as the root one:\r\nMaria eats very little so as not to put on weight.', 'Chuyển đổi câu', 'Maria eats little very because she wants to fose weight.', 'Maria eats very little because she wants weight to lose.', 'Maria eats very little because she wants to lose weight.', 'Maria eats very little because lose weight she wants to.', 'C'),
(100, 'Choose one sentence that has the same meaning as the root one:\r\n“Cigarettes?” he asked. “No, thanks,” I said.', 'Chuyển đổi câu', 'He asked for a cigarette, and I immediately refused.', 'He mentioned a cigarette, so I thanked him.', 'He asked if I was smoking, and I denied at once.', 'He offered me a cigarette, but I promptly declined.', 'D'),
(101, 'Choose one sentence that has the same meaning to the root one:\r\nThe critics undervalued his new book.', 'Chuyển đổi câu', 'The critics rejected his new book.', 'The critics were fed up with his new book.', 'The critics had a low opinion of his new book.', 'The critics turned down his new book.', 'C'),
(102, 'Choose one sentence that has the same meaning to the root one:\r\nHe got up early but he missed the bus to school.', 'Chuyển đổi câu', 'He got up early so as to miss the bus to school.', 'Though he got up early, he miss the bus to school.', 'Though he got up early, but he miss the bus to school.', 'As he got up early, he miss the bus to school.', 'B'),
(103, 'Choose one sentence that has the same meaning to the root one:\r\nNam worked hard, so he fell ill.', 'Chuyển đổi câu', 'If he had not worked hard, he would not have fallen ill.', 'If he had worked hard, he would fall ill.', 'If he had worked hard he would have fallen ill.', 'Unless he worked hard he would have fallen ill.', 'A'),
(104, 'Choose one sentence that has the same meaning as the root one:\r\nMartin never really recovered from the shock.', 'Chuyển đổi câu', 'Martin never really gave up from the shock.', 'Martin never really filled in from the shock.', 'Martin never really got over the shock.', 'Martin never really went away the shock.', 'C'),
(105, 'Choose one sentence that has the same meaning to the root one:\r\nI tried not to laugh at his face but it was impossible.', 'Chuyển đổi câu', 'I can’t stop laughing at his face.', 'I couldn’t help laughing at his face.', 'Laughing at his face was impossible.', 'When looking at his face I laughed.', 'B'),
(106, 'Choose one sentence that has the same meaning as the root one:\r\nNora went to the gas station to have her tank filled.', 'Chuyển đổi câu', 'Nora’s car is being repaired at the gas station.', 'Nora is going to the gas station to pick up her car.', 'Nora had her gas tank filled with gasoline.', 'Nora is going to the gas station to pick up her tank.', 'C'),
(107, 'Choose one sentence that has the same meaning as the root one:\r\nShe turned the radio on at 7.30. She was still listening to it when her mother came home at 9.00.', 'Chuyển đổi câu', 'She had been listening to the radio since 7.30.', 'She has been listening to the radio at 7.30.', 'She has been listening to the radio after 7.30.', 'She has been listening to the radio by 7.30.', 'A'),
(108, 'Choose one sentence that has the same meaning as the root one:\r\nI didn’t listen to him, and I didn’t succeed.', 'Chuyển đổi câu', 'If I listened to him, I would succeed.', 'If I had listened to him, I would succeed.', 'If I listened to him, I would have succeeded.', 'If I had listened to him, I would have succeeded.', 'D'),
(109, 'Choose one sentence that has the same meaning as the root one:\r\nThe snow makes driving dangerous.', 'Chuyển đổi câu', 'The snow makes it impossible to drive.', 'The snow makes it dangerous to drive.', 'Driving is not easy in snowy weather.', 'It is dangerous to go skiing.', 'B'),
(110, 'Choose one sentence that has the closest meaning to the root one:\r\nHe had worked very hard but he failed.', 'Chuyển đổi câu', 'Hard as he worked, he failed.', 'Thanks to his hard work, he failed.', 'He did not succeeded because of his being hard working.', 'Even though being hard working, he failed.', 'A'),
(111, 'Choose one sentence that has the closest meaning to the root one:\r\nEven though it was raining heavily, the explorers decided to continue their journey.', 'Chuyển đổi câu', 'It rained so heavily that the explorers could not continue their journey.', 'The explorers put off their journey due to the heavy rain.', 'The heavy rain could not prevent the explorers from continuing their journey.', 'If it had rained heavily, the explorers would not have continued their journey.', 'C'),
(112, 'Choose one sentence that has the same meaning to the root one:\r\nPeople say that he gets a high salary.', 'Chuyển đổi câu', 'It is said that he gets a high salary.', 'It is said for him to gets high salary.', 'He is said that he gets a high salary.', 'That he gets a high salary is said.', 'A'),
(113, 'Choose one sentence that has the same meaning to the root one:\r\n“If I were you, I would take the job,” said my room-mate.', 'Chuyển đổi câu', 'My room-mate was thinking about taking the job.', 'My room-mate advised me to take the job.', 'My room-mate introduced the idea of taking the job to me.', 'My room-mate insisted on taking the job for me.', 'B'),
(114, 'Choose one sentence that has the same meaning as the root one:\r\nTim is likely to fail if he takes the exam without studying.', 'Chuyển đổi câu', 'Tim will fail if he takes the exam without studying.', 'It’s probable that Tim will fail the exam if he doesn’t study.', 'It’s certain that Tim will pass the exam if he studies.', 'It’s certain that Tim will fail because he doesn’t study.', 'B'),
(115, 'Choose one sentence that has the same meaning as the root one:\r\nThe Mayor is opening the new theatre on Saturday.', 'Chuyển đổi câu', 'On Saturday is being opened the new theatre by the Mayor.', 'On Saturday has been opened the new theatre by the Mayor.', 'The new theatre is being opened on Saturday by the Mayor.', 'The new theatre on Saturday has been opened by the Mayor.', 'C'),
(116, 'Choose one sentence that has the same meaning as the root one:\r\nJohn didn\'t attend the class because he was seriously ill.', 'Chuyển đổi câu', 'John\'s class was not serious.', 'John never attended the class.', 'John was absent from class many times.', 'John was too ill to attend the class.', 'D'),
(117, 'Choose one sentence that has the same meaning as the root one:\r\nThe water was so cold that the children could not swim in it.', 'Chuyển đổi câu', 'The water was not warm enough for the children to swim in it.', 'The water was not warm enough for the children to swim in.', 'The water was not enough warm for the children to swim in.', 'The water was not warm enough for the children swim in.', 'B'),
(118, 'Choose one sentence that has the closest meaning to the root one:\r\nLan suggested going out for dinner.', 'Chuyển đổi câu', 'Lan said, \"Why don’t we go out for dinner?\"', 'Lan said, \"Do you want to go out for dinner?\"', 'Lan said, \"Must we go out for dinner?\"', 'Lan said, \"Will you go out for dinner?\"', 'A'),
(119, 'Choose one sentence that has the same meaning as the root one:\r\nMaria eats very little so as not to put on weight.', 'Chuyển đổi câu', 'Maria eats little very because she wants to fose weight.', 'Maria eats very little because she wants weight to lose.', 'Maria eats very little because she wants to lose weight.', 'Maria eats very little because lose weight she wants to.', 'C'),
(120, 'Choose one sentence that has the same meaning as the root one:\r\n“Cigarettes?” he asked. “No, thanks,” I said.', 'Chuyển đổi câu', 'He asked for a cigarette, and I immediately refused.', 'He mentioned a cigarette, so I thanked him.', 'He asked if I was smoking, and I denied at once.', 'He offered me a cigarette, but I promptly declined.', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `TenDangNhap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD KEY `id` (`MaCauHoi`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `MaCauHoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
