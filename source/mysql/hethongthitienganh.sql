-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 23, 2022 lúc 09:10 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `a`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi`
--

CREATE TABLE `cauhoi` (
  `MaCauHoi` varchar(8) DEFAULT NULL,
  `YeuCau` varchar(64) DEFAULT NULL,
  `CauHoi` varchar(181) DEFAULT NULL,
  `LoaiCauHoi` varchar(86) DEFAULT NULL,
  `A` varchar(62) DEFAULT NULL,
  `B` varchar(77) DEFAULT NULL,
  `C` varchar(79) DEFAULT NULL,
  `D` varchar(51) DEFAULT NULL,
  `DapAnDung` varchar(9) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cauhoi`
--

INSERT INTO `cauhoi` (`MaCauHoi`, `YeuCau`, `CauHoi`, `LoaiCauHoi`, `A`, `B`, `C`, `D`, `DapAnDung`) VALUES
('CDT-1', 'Choose the correct form of the word', 'What would you ________ for dinner?', 'Chia động từ', 'like', 'likes', 'to like', 'liking', 'A'),
('CDC-1', 'Choose one sentence that has the closest meaning to the root one', 'The critics undervalued his new book.', 'Chuyển đổi câu', 'The critics rejected his new book.', 'The critics were fed up with his new book.', 'The critics had a low opinion of his new book.', 'The critics turned down his new book.', 'C'),
('CDC-2', 'Choose one sentence that has the closest meaning to the root one', 'He got up early but he missed the bus to school.', 'Chuyển đổi câu', 'He got up early so as to miss the bus to school.', 'Though he got up early, he miss the bus to school.', 'Though he got up early, but he miss the bus to school.', 'As he got up early, he miss the bus to school.', 'B'),
('CDC-3', 'Choose one sentence that has the closest meaning to the root one', 'Nam worked hard, so he fell ill.', 'Chuyển đổi câu', 'If he had not worked hard, he would not have fallen ill.', 'If he had worked hard, he would fall ill.', 'If he had worked hard he would have fallen ill.', 'Unless he worked hard he would have fallen ill.', 'A'),
('CDC-4', 'Choose one sentence that has the closest meaning to the root one', 'Martin never really recovered from the shock.', 'Chuyển đổi câu', 'Martin never really gave up from the shock.', 'Martin never really filled in from the shock.', 'Martin never really got over the shock.', 'Martin never really went away the shock.', 'C'),
('CDC-5', 'Choose one sentence that has the closest meaning to the root one', 'I tried not to laugh at his face but it was impossible.', 'Chuyển đổi câu', 'I can’t stop laughing at his face.', 'I couldn’t help laughing at his face.', 'Laughing at his face was impossible.', 'When looking at his face I laughed.', 'B'),
('CDC-6', 'Choose one sentence that has the closest meaning to the root one', 'Nora went to the gas station to have her tank filled.', 'Chuyển đổi câu', 'Nora’s car is being repaired at the gas station.', 'Nora is going to the gas station to pick up her car.', 'Nora had her gas tank filled with gasoline.', 'Nora is going to the gas station to pick up her tan', 'C'),
('CDC-7', 'Choose one sentence that has the closest meaning to the root one', 'She turned the radio on at 7.30. She was still listening to it when her mother came home at 9.00.', 'Chuyển đổi câu', 'She had been listening to the radio since 7.30.', 'She has been listening to the radio at 7.30.', 'She has been listening to the radio after 7.30.', 'She has been listening to the radio by 7.30.', 'A'),
('CDC-8', 'Choose one sentence that has the closest meaning to the root one', 'I didn’t listen to him, and I didn’t succeed.', 'Chuyển đổi câu', 'If I listened to him, I would succeed.', 'If I had listened to him, I would succeed.', 'If I listened to him, I would have succeeded.', 'If I had listened to him, I would have succeeded.', 'D'),
('CDC-9', 'Choose one sentence that has the closest meaning to the root one', 'The snow makes driving dangerous.', 'Chuyển đổi câu', 'The snow makes it impossible to drive.', 'The snow makes it dangerous to drive.', 'Driving is not easy in snowy weather.', 'It is dangerous to go skiing.', 'B'),
('CDC-10', 'Choose one sentence that has the closest meaning to the root one', 'He had worked very hard but he failed.', 'Chuyển đổi câu', 'Hard as he worked, he failed.', 'Thanks to his hard work, he failed.', 'He did not succeeded because of his being hard working.', 'Even though being hard working, he failed.', 'A'),
('CDC-11', 'Choose one sentence that has the closest meaning to the root one', 'Even though it was raining heavily, the explorers decided to continue their journey.', 'Chuyển đổi câu', 'It rained so heavily that the explorers could not continue the', 'The explorers put off their journey due to the heavy rain.', 'The heavy rain could not prevent the explorers from continuing their journey.', 'If it had rained heavily, the explorers would not h', 'C'),
('CDC-12', 'Choose one sentence that has the closest meaning to the root one', 'People say that he gets a high salary.', 'Chuyển đổi câu', 'It is said that he gets a high salary.', 'It is said for him to gets high salary.', 'He is said that he gets a high salary.', 'That he gets a high salary is said.', 'A'),
('CDC-13', 'Choose one sentence that has the closest meaning to the root one', '“If I were you, I would take the job,” said my room-mate.', 'Chuyển đổi câu', 'My room-mate was thinking about taking the job.', 'My room-mate advised me to take the job.', 'My room-mate introduced the idea of taking the job to me.', 'My room-mate insisted on taking the job for me.', 'B'),
('CDC-14', 'Choose one sentence that has the closest meaning to the root one', 'Tim is likely to fail if he takes the exam without studying.', 'Chuyển đổi câu', 'Tim will fail if he takes the exam without studying.', 'It’s probable that Tim will fail the exam if he doesn’t study.', 'It’s certain that Tim will pass the exam if he studies.', 'It’s certain that Tim will fail because he doesn’t ', 'B'),
('CDC-15', 'Choose one sentence that has the closest meaning to the root one', 'The Mayor is opening the new theatre on Saturday.', 'Chuyển đổi câu', 'On Saturday is being opened the new theatre by the Mayor.', 'On Saturday has been opened the new theatre by the Mayor.', 'The new theatre is being opened on Saturday by the Mayor.', 'The new theatre on Saturday has been opened by the ', 'C'),
('CDC-16', 'Choose one sentence that has the closest meaning to the root one', 'John didn\'t attend the class because he was seriously ill.', 'Chuyển đổi câu', 'John\'s class was not serious.', 'John never attended the class.', 'John was absent from class many times.', 'John was too ill to attend the class.', 'D'),
('CDC-17', 'Choose one sentence that has the closest meaning to the root one', 'The water was so cold that the children could not swim in it.', 'Chuyển đổi câu', 'The water was not warm enough for the children to swim in it.', 'The water was not warm enough for the children to swim in.', 'The water was not enough warm for the children to swim in.', 'The water was not warm enough for the children swim', 'B'),
('CDC-18', 'Choose one sentence that has the closest meaning to the root one', 'Lan suggested going out for dinner.', 'Chuyển đổi câu', 'Lan said, \"Why don’t we go out for dinner?\"', 'Lan said, \"Do you want to go out for dinner?\"', 'Lan said, \"Must we go out for dinner?\"', 'Lan said, \"Will you go out for dinner?\"', 'A'),
('CDC-19', 'Choose one sentence that has the closest meaning to the root one', 'Maria eats very little so as not to put on weight.', 'Chuyển đổi câu', 'Maria eats little very because she wants to fose weight.', 'Maria eats very little because she wants weight to lose.', 'Maria eats very little because she wants to lose weight.', 'Maria eats very little because lose weight she want', 'C'),
('CDC-20', 'Choose one sentence that has the closest meaning to the root one', '“Cigarettes?” he asked. “No, thanks,” I said.', 'Chuyển đổi câu', 'He asked for a cigarette, and I immediately refused.', 'He mentioned a cigarette, so I thanked him.', 'He asked if I was smoking, and I denied at once.', 'He offered me a cigarette, but I promptly declined.', 'D'),
('MT-1', 'Fill in the blanks with the correct article', 'New York is ____ large city', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'A'),
('MT-2', 'Fill in the blanks with the correct article', 'Are you attending ____ reception today', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'C'),
('MT-3', 'Fill in the blanks with the correct article', '____ Oranges are grown in Nagpur', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'D'),
('MT-4', 'Fill in the blanks with the correct article', 'She wants to become ____ engineer', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'B'),
('MT-5', 'Fill in the blanks with the correct article', '____ lion is a ferocious animal', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'C'),
('MT-6', 'Fill in the blanks with the correct article', '____ unit means a measurement', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'C'),
('MT-7', 'Fill in the blanks with the correct article', 'He is ____ honest official.', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'A'),
('MT-8', 'Fill in the blanks with the correct article', 'Taj mahal is built of ____ marble', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'D'),
('MT-9', 'Fill in the blanks with the correct article', 'He is ____ European', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'A'),
('MT-10', 'Fill in the blanks with the correct article', 'Let us play ____ chess', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'D'),
('MT-11', 'Fill in the blanks with the correct article', 'I go to Madurai by ____ Vaigai Express', 'Mạo từ', 'a', 'an', 'the', 'some', 'C'),
('MT-12', 'Fill in the blanks with the correct article', 'He hopes to join ____ university soon', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'A'),
('MT-13', 'Fill in the blanks with the correct article', 'Let us go to a restaurant and have ____ coffee', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'A'),
('MT-14', 'Fill in the blanks with the correct article', 'It is ____ absurd story', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'B'),
('MT-15', 'Fill in the blanks with the correct article', 'I want to eat ____ apple', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'B'),
('MT-16', 'Fill in the blanks with the correct article', '____ Pandiyan Express is very popular', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'C'),
('MT-17', 'Fill in the blanks with the correct article', 'India will become ____ super power shortly', 'Mạo từ', 'a', 'an', 'the', 'some', 'A'),
('MT-18', 'Fill in the blanks with the correct article', 'Ram was ____ best student in the class', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'C'),
('MT-19', 'Fill in the blanks with the correct article', 'Please give me ____ useful gift', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'A'),
('MT-20', 'Fill in the blanks with the correct article', '____ apples I bought are sour', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'C'),
('MT-21', 'Fill in the blanks with the correct article', 'The thief was sent to ____ prison', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'C'),
('MT-22', 'Fill in the blanks with the correct article', '____ meat you cooked tasted good', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'C'),
('MT-23', 'Fill in the blanks with the correct article', 'Our city will have ____ university soon', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'A'),
('MT-24', 'Fill in the blanks with the correct article', 'This is ____ car I bought yesterday', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'C'),
('MT-25', 'Fill in the blanks with the correct article', 'Italy is ___ European country.', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'A'),
('MT-26', 'Fill in the blanks with the correct article', '___ elephant is a vegetarian.', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'C'),
('MT-27', 'Fill in the blanks with the correct article', 'The king is likely to marry ___ heiress.', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'C'),
('MT-28', 'Fill in the blanks with the correct article', 'I must go to see ___ old teacher.', 'Mạo từ', 'a', 'an', 'the', 'Ø', 'D'),
('MT-29', 'Fill in the blanks with the correct article', 'It has been raining all ___ afternoon.', 'Mạo từ', 'a', 'an', 'Ø', 'the', 'D'),
('TA-1', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'athletics', 'hopelessness', 'resident', 'tolerance', 'A'),
('TA-2', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'develop', 'overall', 'commitment', 'investment', 'B'),
('TA-3', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'campaign', 'performance', 'brighten', 'donation', 'C'),
('TA-4', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'interview', 'impression', 'company', 'formally', 'B'),
('TA-5', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'commercialize', 'realization', 'predominant', 'spectacular', 'B'),
('TA-6', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'leopard', 'derive', 'reduce', 'support', 'A'),
('TA-7', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'period', 'attract', 'arrive', 'perform', 'A'),
('TA-8', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'impudent', 'wanderings', 'reconcile', 'notation', 'D'),
('TA-9', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'unlucky', 'displeased', 'courage', 'encourage', 'C'),
('TA-10', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'confidence', 'mutual', 'etiquette', 'expensive', 'D'),
('TA-11', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'certificate', 'necessary', 'economy', 'geography', 'B'),
('TA-12', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'floppy', 'outlook', 'loyalty', 'protect', 'C'),
('TA-13', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'gymnastics', 'excellent', 'stadium', 'restaurant', 'A'),
('TA-14', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'penalize', 'athletic', 'amateur', 'synchronize', 'B'),
('TA-15', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'concentrate', 'remember', 'employment', 'position', 'A'),
('TA-16', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'development', 'cooperation', 'surprisingly', 'facility', 'B'),
('TA-17', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'perform', 'impress', 'event', 'spirit', 'D'),
('TA-18', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'photography', 'occasion', 'qualification', 'Canadian', 'C'),
('TA-19', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'initiative', 'humanity', 'conventional', 'independence', 'D'),
('TA-20', 'Choose a word that has different stress pattern', '', 'Trọng âm', 'discuss', 'visit', 'begin', 'respond', 'B'),
('TV-1', 'Fill in the blank with the most appropriate word(s)', 'We\'d better get ___________ to check the wiring before we start decorating.', 'Từ vựng', 'an electrician', 'a mechanic', 'a consumer', 'an engineer', 'A'),
('TV-2', 'Fill in the blank with the most appropriate word(s)', 'To __________ over something is to feel or express worry, annoyance, or anxiety about it.', 'Từ vựng', 'Fret', 'Freak', 'Fear', '', 'A'),
('TV-3', 'Fill in the blank with the most appropriate word(s)', 'Something that is __________ is not only characteristic or distinctive of a type but goes a step further to capture the pure and essential essence of it — or to embody it perfectly.', 'Từ vựng', 'Quintessential', 'Standard', 'Normal', '', 'A'),
('TV-4', 'Fill in the blank with the most appropriate word(s)', 'To ____________ something suggests taking forceful measures to prevent something undesirable.', 'Từ vựng', 'Consider', 'Neglect', 'Safeguard', '', 'C'),
('TV-5', 'Fill in the blank with the most appropriate word(s)', 'To __________ something is to confirm a theory, story, or fact with evidence, such as in a courtroom, witnesses might be called to do this to a story from suspect.', 'Từ vựng', 'Contradict', 'Corporate', 'Verify', '', 'C'),
('TV-6', 'Fill in the blank with the most appropriate word(s)', '__________ is a compound noun used for any idea. Using this term usually connotes our admiration for something or someone\'s creativity.', 'Từ vựng', 'Idea', 'Brainchild', 'Destruction', '', 'B'),
('TV-7', 'Fill in the blank with the most appropriate word(s)', 'gather into a mass, sum, or whole, amount to', 'Từ vựng', 'approach', 'proceed', 'aggregate', '', 'C'),
('TV-8', 'Fill in the blank with the most appropriate word(s)', 'real being, something that exists as a particular and discrete unit, fact of existence', 'Từ vựng', 'Thesis', 'entity', 'statistic', '', 'B'),
('TV-9', 'Fill in the blank with the most appropriate word(s)', 'stiff and unyielding, strict, hard and unbending, not flexible', 'Từ vựng', 'enormous', 'objective', 'rigid', '', 'C'),
('TV-10', 'Fill in the blank with the most appropriate word(s)', 'combine, mix, constitute, pay interest, increase', 'Từ vựng', 'reside', 'compound', 'assemble', '', 'B'),
('TV-11', 'Fill in the blank with the most appropriate word(s)', 'assumption, theory', 'Từ vựng', 'hypothesis', 'manual', 'mechanism', '', 'A'),
('XDL-1', 'Find a mistake', 'Economic reform has dominated Australian economic policy from the early 1980s until the end of the 20th century.', 'Xác định lỗi', 'has dominated', 'economic', 'the early', 'until', 'A'),
('XDL-2', 'Find a mistake', 'Ice always melts if the air temperature will be warm enough.', 'Xác định lỗi', 'melts', 'the air', 'will be', 'warm enough', 'C'),
('XDL-3', 'Find a mistake', 'This information is rather out of the date, so we can’t use it in our new brochure.', 'Xác định lỗi', 'This', 'rather', 'the date', 'new brochure', 'C'),
('XDL-4', 'Find a mistake', 'He suggested that council tenants must he allowed to buy their houses.', 'Xác định lỗi', 'that', 'must', 'allowed', 'their', 'B'),
('XDL-5', 'Find a mistake', 'The home team wears white caps, the visiting team blue one.', 'Xác định lỗi', 'The', 'wears', 'visiting', 'blue one', 'D'),
('XDL-6', 'Find a mistake', 'While preparing for your wedding, keeping in mind that this is just the first step in your future lives of love together.', 'Xác định lỗi', 'preparing', 'wedding', 'keeping', 'together', 'C'),
('XDL-7', 'Find a mistake', 'Jack was excused for school for several days so he could travel with his farther.', 'Xác định lỗi', 'was', 'for', 'so', 'could travel', 'B'),
('XDL-8', 'Find a mistake', 'The Vietnamese Men\'s Football team was won a silver medal.', 'Xác định lỗi', 'Men\'s', 'medal', 'The', 'was won', 'D'),
('XDL-9', 'Find a mistake', 'Marriage is a life-long journey together, which is not simply a boat you get on together and getting off when it does not work out.', 'Xác định lỗi', 'Marriage', 'which', 'simply', 'getting', 'D'),
('XDL-10', 'Find a mistake', 'I wasn’t expecting Anne, but she turned off on the doorstep last night.', 'Xác định lỗi', 'expecting', 'but', 'off', 'on', 'C'),
('XDL-11', 'Find a mistake', 'In 2030, how we will provide for the food, land, and energy needs of a global population of over 8 billion?', 'Xác định lỗi', 'In 2030', 'we will provide', 'needs', 'over 8 billion', 'B'),
('XDL-12', 'Find a mistake', 'I enjoyed talking to the people with that I met at the party last night.', 'Xác định lỗi', 'with that', 'talking', 'the', 'at the party', 'A'),
('XDL-13', 'Find a mistake', 'Higher general education is based on theoretical expertise and might be contrasted with higher vocational education, which concentrating on both practice and theory.', 'Xác định lỗi', 'is based on', 'expertise', 'contrasted with', 'concentrating', 'D'),
('XDL-14', 'Find a mistake', 'What I told Tom was a secret. He shouldn’t have been repeated it to you.', 'Xác định lỗi', 'told', 'was', 'been repeated', 'to you', 'C'),
('XDL-15', 'Find a mistake', 'Alike football, a water polo game begins with the ball in the centre of the pool.', 'Xác định lỗi', 'Alike', 'game', 'with', 'in the centre', 'A'),
('XDL-16', 'Find a mistake', 'We would visit you had we known you were in hospital.', 'Xác định lỗi', 'would visit', 'had', 'known', 'were', 'A'),
('XDL-17', 'Find a mistake', 'The boys were hiding between the bushes in the garden.', 'Xác định lỗi', 'The', 'between', 'were', 'in the', 'B'),
('XDL-18', 'Find a mistake', 'The ancient ruins may be discovered as early as 1792. The historical record is difficult to interpret.', 'Xác định lỗi', 'ancient', 'may be', 'as early', 'historical', 'B'),
('XDL-19', 'Find a mistake', 'A species that faces overexploitation is one that may become severely endangered or even extinct due to the rate in that the species is being used.', 'Xác định lỗi', 'faces', 'overexploitation', 'due to', 'that', 'D'),
('XDL-20', 'Find a mistake', 'Much as though I approve of his enthusiasm, I’m worried he’ll overdo his weight training.', 'Xác định lỗi', 'approve of', 'worried', 'Much as', 'overdo', 'C'),
('', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', ''),
(NULL, NULL, 'Merit', NULL, 're', 'di', 'de', 'dis', 'C'),
(NULL, NULL, 'Post', NULL, 'be', 'out', 'age', 'on', 'B'),
(NULL, NULL, 'Date', NULL, 'un', 'ante', 'in', 'anti', 'B'),
(NULL, NULL, 'Spoken', NULL, 'in', 'de', 'out', 'dis', 'C'),
(NULL, NULL, 'Advantage', NULL, 'de', 're', 'ub', 'dis', 'D'),
(NULL, NULL, 'Minister', NULL, 'bi', 'over', 'on', 'ex', 'D'),
(NULL, NULL, 'Relevant', NULL, 'de', 'ir', 'un', 'miss', 'B'),
(NULL, NULL, 'Large', NULL, 'en', 'in', 'on', 'out', 'A'),
(NULL, NULL, 'Circle', NULL, 'an', 'sem', 'semi', 'en', 'C'),
(NULL, '', 'Looker', NULL, 'on', 'out', 'de', 'in', 'A'),
(NULL, NULL, 'Editor', NULL, 'bye', 'sub', 'joint', 'bi', 'B'),
(NULL, '', 'Danger', NULL, 'er', 'ous', 'ed', 'en', 'B'),
(NULL, NULL, 'Impressive', NULL, 'de', 'in', 'un', 'out', 'C'),
(NULL, NULL, 'Vegetarian', NULL, 'an', 'un', 'en', 'non', 'D'),
(NULL, NULL, 'Monthly', NULL, 'bi', 'bye', 'anti', 'over', 'A');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cdt`
--

CREATE TABLE `cdt` (
  `MaCauHoi` varchar(8) DEFAULT NULL,
  `CauHoi` varchar(73) DEFAULT NULL,
  `LoaiCauHoi` varchar(12) DEFAULT NULL,
  `A` varchar(19) DEFAULT NULL,
  `B` varchar(17) DEFAULT NULL,
  `C` varchar(16) DEFAULT NULL,
  `D` varchar(19) DEFAULT NULL,
  `DapAnDung` varchar(9) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cdt`
--

INSERT INTO `cdt` (`MaCauHoi`, `CauHoi`, `LoaiCauHoi`, `A`, `B`, `C`, `D`, `DapAnDung`) VALUES
('', 'He seldom goes to the park, ____ ?', 'Câu hỏi đuôi', 'doesn’t he', 'is he', 'does he', 'isn’t he', 'C'),
('', 'There are a lot of people attending the wedding party, ________?', 'Câu hỏi đuôi', 'are they', 'are there', 'aren’t they', 'aren’t there', 'D'),
('', 'No one is better at English than Tom, ______?', 'Câu hỏi đuôi', 'is he', 'isn’t he', 'are they', 'aren’t they', 'C'),
('', 'They have been waiting ______ the bus for half an hour.', 'Giới từ', 'for', 'to', 'of', 'with', 'A'),
('', 'Did you go on holiday __ yourself?', 'Giới từ', 'by', 'on', 'to', 'of', 'A'),
('', 'Our flat is ______ the second floor of the building.', 'Giới từ', 'to', 'in', 'on', 'at', 'C'),
('', 'When she arrived in Britain, she wasn\'t used to driving ______ the left.', 'Giới từ', 'at', 'to', 'in', 'on', 'D'),
('', 'Some large cities may have to ban cars___ the city center to wipe out smo', 'Giới từ', 'of', 'from', 'to', 'with', 'B'),
('', 'Every student should spend _______ least two hours on his homework every ', 'Giới từ', 'at', 'for', 'of', 'the', 'A'),
('', 'What time did they arrive ___ London?', 'Giới từ', 'at', 'on', 'in', 'to', 'C'),
('', '_______ the past, people did a great deal of work by hand.', 'Giới từ', 'in', 'from', 'on', 'to', 'A'),
('', 'Mr. Johnson said he was ______ favor of doing the work right away.', 'Giới từ', 'to', 'in', 'above', 'of', 'B'),
('', 'You don\'t like it, do you? __ the contrary, I love it.', 'Giới từ', 'on', 'in', 'of', 'for', 'B'),
('', 'Go and get me a carton _______ cigarettes.', 'Giới từ', 'with', 'of', 'out of', 'no', 'B'),
('', 'We can\'t get everything we want from life; we must just make the best ___', 'Giới từ', 'with', 'of', 'for', 'by', 'B'),
('', 'Aren\'t you glad that you went to the party with us _______ all?', 'Giới từ', 'in', 'after', 'above', 'with', 'B'),
('', 'I shall be ready _______ a moment.', 'Giới từ', 'for', 'in', 'with', 'on', 'B'),
('', 'Your work is _______ the average.', 'Giới từ', 'under', 'beneath', 'down', 'below', 'D'),
('', 'She smiled _______ him.', 'Giới từ', 'at', 'with', 'to', 'about', 'A'),
('', 'I want you to arrange these _______ order by putting the largest first th', 'Giới từ', 'on', 'out of', 'in', 'from', 'C'),
('', 'They chose him _______ their leader.', 'Giới từ', 'with', 'for', 'by', 'into', 'B'),
('', '_______ mistake, I took the wrong book from my desk this morning.', 'Giới từ', 'Through', 'By', 'With', 'In', 'B'),
('', 'I work hard _______ help my family.', 'Giới từ', 'so as to', 'in order to', 'in order that', 'a and b', 'D'),
('', 'She burst _______ tears.', 'Giới từ', 'out of', 'into', 'for', 'in', 'B'),
('', 'William is _______ meanness.', 'Giới từ', 'against', 'above', 'towards', 'according to', 'B'),
('', 'She likes to go _______ a picnic.', 'Giới từ', 'for', 'on', 'for/on', 'by', 'C'),
('', 'The picture is _______ the wall.', 'Giới từ', 'above', 'at', 'over', 'on', 'D'),
('', 'I saw him _______ noon.', 'Giới từ', 'for', 'with', 'against', 'at', 'D'),
('', 'She treated me _______ cake, ice-cream and tea.', 'Giới từ', 'with', 'for', 'to', 'by', 'C'),
('', 'He was put _______ prison.', 'Giới từ', 'to', 'from', 'into', 'at', 'C'),
('', 'We rejoice _______ her success.', 'Giới từ', 'in', 'at', 'over', 'all are correct', 'D'),
('', 'That is last year\'s telephone directory. It\'s _______ date now.', 'Giới từ', 'into', 'out of', 'besides', 'out', 'B'),
('', 'Elizabeth is fond _______ going to dances.', 'Giới từ', 'in', 'of', 'with', 'at', 'B'),
('', 'Her family________ to America before 1979.', 'Chia Động từ', 'moved', 'have moved', 'had moved', 'would move', 'C'),
('', 'Is it raining? – No, it isn’t but the ground is wet. It________', 'Chia Động từ', 'rained', 'had rained', 'has rained', 'has been raining', 'D'),
('', 'I couldn’t cut the grass because the machine_______ a few days previously', 'Chia Động từ', 'broken down', 'has been broken', 'had broken down', 'breaks down', 'C'),
('', 'When her husband was in the army, Janet________ to him twice a week.', 'Chia Động từ', 'was writing', 'wrote', 'was written', 'had written', 'B'),
('', 'By the age of 25, he ________ two famous novels.', 'Chia Động từ', 'wrote', 'writes', 'has written', 'had written', 'D'),
('', 'Almost everyone________ for home by the time we arrived.', 'Chia Động từ', 'leave', 'left', 'leaves', 'had left', 'D'),
('', 'We________ this course before the final examination.', 'Chia Động từ', 'are going to finish', 'have finished', 'will finish', 'will have finished', 'D'),
('', 'When he returned home, he found the door________', 'Chia Động từ', 'unlocking', 'unlocked', 'to be unlocked', 'have unlocked', 'B'),
('', 'Oil________ if you pour it on water.', 'Chia Động từ', 'floated', 'floats', 'will be floated', 'float', 'B'),
('', 'After you finish your work, you________ a break.', 'Chia Động từ', 'should take', 'have taken', 'might have taken', 'takes', 'A'),
('', 'Ask her to come and see me when she ________ her work.', 'Chia Động từ', 'finish', 'has finished', 'finished', 'finishing', 'B'),
('', 'I _______my homework as soon as Jane gets here.', 'Chia Động từ', 'will finish', 'will be finishing', 'finish', 'will have finished', 'A'),
('', 'Mike________ one hour ago.', 'Chia Động từ', 'phoned', 'was phoning', 'had phoned', 'has phoned', 'A'),
('', 'Look! The bus________', 'Chia Động từ', 'left', 'has left', 'leaves', 'is leaving', 'D'),
('', 'Robert________ tomorrow morning on the 10:30 train.', 'Chia Động từ', 'arrived', 'is arriving', 'has arrived', 'would arrive', 'B'),
('', 'We________ our next vacation in London.', 'Chia Động từ', 'spend', 'are spend', 'will have spent', 'are going to spend', 'D'),
('', 'She ________ English at RMIT these days', 'Chia Động từ', 'studies', 'is studying', 'will study', 'is gong to study', 'B'),
('', 'Before you asked, the letter________', 'Chia Động từ', 'was written', 'had been written', 'had written', 'has been written', 'B'),
('', 'He will take the dog out for a walk as soon as he ________ dinner.', 'Chia Động từ', 'finish', 'finishes', 'will finish', 'shall have finished', 'B'),
('', 'When Henry________ into the restaurant, the writer was having dinner.', 'Chia Động từ', 'was going', 'went', 'has gone', 'did go', 'B'),
('', 'For several years his ambition ________ to be a pilot.', 'Chia Động từ', 'has been', 'is', 'was', 'had been', 'A'),
('', 'The man got out of the car,_______ round to the back and opened the boot.', 'Chia Động từ', 'walking', 'walked', 'walks', 'walk', 'B'),
('', 'By the end of next year, George________ English for 2 years.', 'Chia Động từ', 'will have learned', 'will learn', 'has leaned', 'would learn', 'A'),
('', 'After I________ lunch, I looked for my bag.', 'Chia Động từ', 'had', 'had had', 'have has', 'have had', 'B'),
('', 'Monica________ with her sister at the moment until she finds a flat.', 'Chia Động từ', 'stays', 'is staying', 'will stay', 'is going to stay', 'B'),
('', 'What time________ the next train leave?', 'Chia Động từ', 'does', 'will be', 'shall', 'would have', 'A'),
('', 'I saw Maggie at the party. She ________ there with a couple of friends.', 'Chia Động từ', 'were', 'had been', 'was', 'will be', 'C'),
('', 'Angelina Jolie is a famous actress. She ________ in several film.', 'Chia Động từ', 'appears', 'is appearing', 'appeared', 'has appeared', 'D'),
('', 'Hurry! The train________ I don’t want to miss it.', 'Chia Động từ', 'comes', 'is coming', 'came', 'has come', 'B'),
('', 'How many languages_____ John speak?', 'Chia Động từ', 'do', 'does', 'did', 'will', 'B'),
('', 'Let’s go for a walk, ____ ?', 'Câu hỏi đuôi', 'will we', 'shall we', 'don’t you', 'do you', 'B'),
('', 'I think he will come here, ______ ?', 'Câu hỏi đuôi', 'doesn’t he', 'won’t he', 'will he', 'don’t I', 'B'),
('', 'The film is boring, ______ ?', 'Câu hỏi đuôi', 'is it', 'are they', 'isn’t it', 'aren’t they', 'C'),
('', 'You are listening to music, ________ ?', 'Câu hỏi đuôi', 'is you', 'are you', 'aren’t you', 'were you', 'C'),
('', 'He can speak English, ______ ?', 'Câu hỏi đuôi', 'can he', 'can’t he', 'can’t him', 'could he', 'B'),
('', 'You don’t know her, ________?', 'Câu hỏi đuôi', 'do you', 'don’t you', 'are you', 'aren’t you', 'A'),
('', 'Nydia speaks English very well, ______ ?', 'Câu hỏi đuôi', 'does she', 'doesn’t she', 'is she', 'was she', 'B'),
('', 'John has bought a dictionary, __________ ?', 'Câu hỏi đuôi', 'does he', 'did he', 'has he', 'hasn’t he', 'D'),
('', 'They met him at the party last night, ________?', 'Câu hỏi đuôi', 'do they', 'don’t they', 'did they', 'didn’t they', 'D'),
('', 'They are going to do the test tomorrow, __________ ?', 'Câu hỏi đuôi', 'do they', 'are they', 'aren’t they', 'did they', 'C'),
('', 'I’m short, ______ ?', 'Câu hỏi đuôi', 'am not I', 'aren’t you', 'are you', 'aren’t I', 'D'),
('', 'No one is in this room now, ______ ?', 'Câu hỏi đuôi', 'is one', 'isn’t one', 'is he', 'are they', 'D'),
('', 'Somebody has stolen your bag, ________ ?', 'Câu hỏi đuôi', 'have they', 'haven’t they', 'has he', 'hasn’t he', 'B'),
('', 'The ticket doesn’t cost a lot, ________ ?', 'Câu hỏi đuôi', 'do they', 'does it', 'is it', 'isn’t it', 'B'),
('', 'You’ll be at home tonight, ________ ?', 'Câu hỏi đuôi', 'will you', 'won’t you', 'are you', 'won’t you be', 'B'),
('', 'Don’t leave this room, ________ ?', 'Câu hỏi đuôi', 'do you', 'don’t you', 'will you', 'shall we', 'C'),
('', 'Kacey never goes out at night, ________ ?', 'Câu hỏi đuôi', 'doesn’t she', 'does she', 'isn’t she', 'is she', 'B');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `TenDangNhap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
