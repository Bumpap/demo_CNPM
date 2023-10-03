-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 04:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appstoredatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `app_item`
--

CREATE TABLE `app_item` (
  `ID_App` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Type_App` varchar(100) NOT NULL,
  `Paid` varchar(50) NOT NULL,
  `Describe_App` text NOT NULL,
  `Develop` varchar(100) NOT NULL,
  `Num_Down` int(11) NOT NULL,
  `Icon` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_item`
--

INSERT INTO `app_item` (`ID_App`, `Name`, `Type_App`, `Paid`, `Describe_App`, `Develop`, `Num_Down`, `Icon`, `Status`) VALUES
(1, '1.1.1.1', 'Entertainment', 'Free', 'This app can change your DNS into private. So that, you can come into some apps that prevent your DNS.', 'Cloudflare', 0, 'image/1.1.1.1.png', 'Valid'),
(2, 'Candy Crush Saga', 'Games', 'Free', 'Start playing Candy Crush Saga today – a legendary puzzle game loved by millions of players around the world.\r\n', 'King', 0, 'image/candycrush.png', 'Valid'),
(3, 'Google Play Games', 'Entertaiment', 'Free', 'Games are more fun with the Google Play Games app. We\'ll help you find your next favorite game – from action to puzzles. And with \"Instant play,\" many games require no installation. Really. Save your progress and track your achievements as you level up. Plus, you can pick up where you left off from any device.\r\n', 'Google LLC', 0, 'image/gpg.png', 'Valid'),
(4, 'TFT Teamfight Tactics', 'Games', 'Free', 'Teamfight Tactics is an auto battler game developed and published by Riot Games. The game is a spinoff of League of Legends and is based on Dota Auto Chess, where players compete online against seven other opponents by building a team to be the last one standing.', 'Riot Games', 0, 'image/tft.png', 'Valid'),
(5, 'Waka - Ebook', 'Books', 'Free', 'Read Ebook: With offline reading feature, just download books to Waka application, you can read books without Wifi, 3G connection. Books are updated daily with a variety of categories: start-up, marketing, management, investment, health care, gender psychology, beauty, cooking, love stories, short stories, literature, comics , children\'s literature, fairy tales, classics ...', 'WAKA CORPORATION', 0, 'image/waka.png', 'Valid'),
(6, 'NovelToon - Read and Tell Stories', 'Books', '10.000 vnd', 'NovelToon is an excellent original free books app. You can read so many kinds of original fun novel - Romance, Fantasy, Modern, Comedy, Time Travel and School Life. Thousands of addictive web novel waiting for you. You can talk with the novelists and become friends, and even suggest them to change the storyline.\r\n', 'MangaToon HK Limited - BR', 0, 'image/novel.png', 'Valid'),
(7, 'BAEMIN - Food delivery app', 'Food-Drink', 'Free', 'We\'re very passionate about delivering food. Have you tried?\r\n\r\n# Super-easy to find the food you like\r\nSearch the tasting food or the restaurant on our app in just 1 click\r\n\r\n# Crazy discounts\r\nEnjoy our countless vouchers & promotions.\r\n\r\n# Feature food for your mood\r\nCheck it out! What’s your mood today?\r\n\r\n# New Collection “District Specialty”\r\n“District Specialty” which offers a list of recommended restaurant organised by district. Collection includes 10 districts with 300 must-try restaurants for each one. Enjoy authentic Vietnamese local food with 60% discount and more.', 'WOOWA BROTHERS VIETNAM', 0, 'image/beamin.png', 'Valid'),
(8, 'Now - Food Delivery', 'Food-Drink', 'Free', 'Fast, reliable and convenient, Now is an on-demand food delivery service app in Vietnam, also featuring a variety of other local services such as fresh grocery & medicine delivery, table booking, passenger & parcel transportation and home/personal services.\r\n\r\nMake your life easier is our mission! We offer:\r\n- All your favorite and popular restaurants/stores in one app and thousands more for you to explore\r\n- Guarantee to deliver at your door\r\n- Daily discounts to indulge your taste buds', 'Foody Corp', 0, 'image/now.png', 'Valid'),
(9, 'Beat Racing', 'Music', '20.000 vnd', 'Move and drag your car to catch the rhythm.\r\nSound easy? You wish!!\r\n\r\n【Easy to play】\r\n- Different cars can produce different musical feelings\r\n- Hold and Drag the car to catch the rhythm.\r\n- Don\'t let go of any rhythms！\r\n- Follow the rhythm of addictive challenges.\r\n- Impress your friends with your perfect combos.', 'Badsnowball Limited', 0, 'image/racing.png', 'Valid'),
(10, 'Tiles Hop: EDM Rush!', 'Music', 'Free', 'Monstercat is going online. Play your favorite songs with our newest character. Try to get the highest scores in this amazing game.\r\n\r\nHeard About EDM Tiles? With Tiles Hop: EDM Rush! you can play various types of music, from beautiful Piano, Guitar songs to Rock and EDM masterpieces.', 'AMANOTES PTE LTD', 0, 'image/tile.png', 'Valid'),
(11, '	\r\nKenh14.vn', 'News', '5000', 'This is the official news reader application of Channel 14 - the largest website for young people in Vietnam. Delivering news at super speed, exclusive, easy reading support, enhancing experience thanks to the application of advanced technology. With the methodical and thorough investment in each category, the App reading Kenh14 news promises to become an indispensable news update tool for young digital age:\r\n\r\nStar: Know all about Showbiz with HOT NEWS about life, scandals ... Meet domestic and international idols through EXCLUSIVE news available only on channel 14', 'VCCORP', 0, 'image/kenh14.png', 'Valid'),
(12, 'Soha.vn', 'News', '5.000 vnd', 'Soha.vn - the ideal choice for you to fill up news for a new day.\r\n\r\nApplication dedicated to providing the latest global news. And exclusive analyzes from diverse fields of business, finance, politics to science, technology and economics ... With the same perfection in terms of content and form of expression, Soha. vn is the ideal choice for you to fill up news for a new day.', 'VCCORP', 0, 'image/soha.png', 'Valid'),
(13, 'Shopee', 'Shopping', 'Free', 'Welcome to SHOPEE - the destination for all shopping, sales and entertainment needs. Applications are continually improved to provide you with the most enjoyable buying experience.', 'Shopee', 0, 'image/shopee.png', 'Valid'),
(14, 'Tiki', 'Shopping', 'Free', 'SHOP ONLINE, IT\'S CHEAP,\r\n\r\nIT\'S FAST, IT\'S CONVENIENT - Good prices from reputable sellers, from electronics, everyday items, consumer goods, all there are.\r\n- Unsymity fast delivery: Select hundreds of thousands of products delivered in 2\r\nhours / day, also see the goods before paying - 1 app makes it all, mobile top-up payment, restaurant voucher, giving flowers to relatives,... especially order fresh TikiNGON delivered in a second.\r\n- Convenient payment via COD, credit card/ATM, Momo e-wallet, Zalopay', 'Tiki Mobile Team', 0, 'image/tiki.png', 'Valid'),
(15, 'Gojek - Ojek Taxi Booking, Delivery and Payment', 'Travel', 'Free', 'Gojek is beyond an app for online transportation, food delivery, logistics, payment, and daily services.\r\n\r\nGojek is also an app with a social mission: to improve the welfare and livelihoods of the Indonesian people. How? By empowering people!\r\n\r\nBy today, Gojek has partnered with over 1 million drivers, 125.000 merchants, and 30.000 other services, spread across 50 cities in Indonesia.', 'PT. Aplikasi Karya Anak Bangsa', 0, 'image/gojek.png', 'Valid'),
(16, 'Google Maps Go - Directions, Traffic & Transit', 'Travel', 'Free', 'Google Maps Go is the lightweight Progressive Web App variation of the original Google Maps app, now with navigation support!\r\n\r\nThis version requires Chrome (if you do not wish to install Chrome, please use www.google.com/maps in your browser instead).\r\n', 'Google LLC', 0, 'image/map.png', 'Valid'),
(17, 'Tik Tok', 'Entertainment', 'Free', 'TikTok is a social media platform for creating, sharing and discovering short videos. The app is used by young people as an outlet to express themselves through singing, dancing, comedy, and lip-syncing, and allows users to create videos and share them across a community.', 'Tik Tok ', 0, 'image/tiktok.png', 'Valid'),
(18, 'Tiger Never Die', 'Books', '5.000 vnd', 'The first time I shared a 3 Fonteinen Oude Gueuze with my wife years ago, she handed it back and told me it smelled like burnt cat hair. Gueuze, of course, can be an acquired taste with its mashup of minerality, acidity, and deep earthy funk. But this new take on oude gueuze from the best gueuze blender in the business is really something spectacular. Soft lemon and stone fruit notes peek out from a body with just a touch of caramelized malt, while a tightly edited acidity is a constant reminder of just how heavy-handed some American brewers are with their ‘sour’ beer.” — Jamie Bogner, cofounder and editorial director of Craft Beer & Brewing. This book teach you how to drink beer', 'Tiger Beer', 0, 'image/tiger.png', 'Valid'),
(19, 'Youtube', 'Entertainment', 'Free', 'Get the official YouTube app on Android phones and tablets. See what the world is watching -- from the hottest music videos to what’s popular in gaming, fashion, beauty, news, learning and more. Subscribe to channels you love, create content of your own, share with friends, and watch on any device.\r\n\r\nWatch and subscribe\r\n● Browse personal recommendations on Home\r\n● See the latest from your favorite channels in Subscriptions\r\n● Look up videos you’ve watched, liked, and saved for later in Library', 'Youtube', 0, 'image/youtube.png', 'Valid'),
(20, 'Subways Surfers', 'Games', 'Free', 'DASH as fast as you can!\r\nDODGE the oncoming trains!\r\n\r\nHelp Jake, Tricky & Fresh escape from the grumpy Inspector and his dog.\r\n\r\n★ Grind trains with your cool crew!\r\n★ Colorful and vivid HD graphics!\r\n★ Hoverboard Surfing!\r\n★ Paint powered jetpack!\r\n★ Lightning fast swipe acrobatics!\r\n★ Challenge and help your friends!\r\n\r\nJoin the most daring chase!\r\n\r\nA Universal App with HD optimized graphics.', 'SYBO Games', 0, 'image/SubwaySufers.png', 'Valid'),
(21, 'Talking Tom Gold Run', 'Games', 'Free', 'From Outfit7, the creators of popular virtual pet games such as My Talking Tom 1 and 2, My Talking Angela, My Talking Tom Friends and Talking Tom Hero Dash, comes a fast-paced running game with Talking Tom!\r\n\r\nTalking Tom Gold Run takes you on a race to catch The Rakoonz - a bunch of pesky raccoon bandits on a mission to commit daylight robbery! Get ready to run, dash and race through the streets in a fun-filled chase.', 'Outfit 7', 0, 'image/TalkingTomGoldRun.png', 'Valid'),
(22, 'Lazada', 'Shopping', 'Free', 'Welcome to the new Lazada mobile app! Join over 140 million shoppers on Lazada across South East Asia for the best online shopping experience. Download and shop now to discover the best deal online.\r\n\r\n\r\n\r\n✨EVERYTHING YOU WANT IS IN LAZADA! ✨\r\nLazada lets you enjoy all the things that you want, from the top items, deals, and other surprises conveniently from your home. You can shop online from a wide assortment of products and the best items that you want. From the fresh options provided by LazMart, including everyday essentials, tech, and home items for your convenience. Enjoy the best products online with the best deals that are up for grabs! Get vouchers, discounts, Flash Sales, and Mega Offer that give you more options to shop and save. You can even get lucky with Free Shipping when you buy at the biggest dates that the platform has planned for. Shop anywhere and have your items delivered straight to you, all without any worries through Lazada!', 'Lazada Mobile', 0, 'image/Lazada.png', 'Valid'),
(23, 'Food Panda', 'Shopping', 'Free', 'Craving something delicious from your favourite restaurant? Forgot to pick up the shopping on your way home? We deliver food and groceries in a flash – whatever you’re after. It’s our mission to bring everything you want, need or crave right to your door, whether it’s a meal from your favourite local restaurant or same day grocery delivery and cleaning supplies.\r\n\r\ndownload the app to check if we\'re in your city\r\n\r\nOur app is crammed with the greatest food experiences in the world. Hungry for wood-fired pizza, a classic burger or super fresh sushi? We know the best food for every cuisine that your city has to offer. foodpanda is the best food delivery service in your city – so take the first bite and download now!\r\n\r\nPlus there’s more to foodpanda than restaurants. Missing milk? Batteries? Detergent? Order from thousands of products with shops on foodpanda. It\'s online grocery delivery without the wait. Choose your favourite shops for everything from groceries to drinks to health to pharmaceuticals and even electronics.\r\n\r\nhow it works\r\n\r\nFirst, enter your address (home/office/treehouse). Then, choose your favourite restaurant or shop and place an order. They prepare your items and, once they’re ready, our courier brings them to you. If you need something to watch, you can track your rider in real-time. Just sit back and enjoy.\r\n\r\nwhat makes us special\r\n\r\nWhether you’re looking for the biggest brands or your favourite local restaurant or shop, foodpanda works with the best spots near you. Pizza or sushi? Groceries or gifts? Whatever you’re after, our rider will be at your doorstep with a smile, while you save time to do something else you love.\r\n\r\ntalk to us', 'Panda', 0, 'image/foodpanda.png', 'Valid'),
(24, 'McDonald', 'Food-Drink', 'Free', 'Craving something delicious from your favourite restaurant? Forgot to pick up the shopping on your way home? We deliver food and groceries in a flash – whatever you’re after. It’s our mission to bring everything you want, need or crave right to your door, whether it’s a meal from your favourite local restaurant or same day grocery delivery and cleaning supplies.\r\n\r\ndownload the app to check if we\'re in your city\r\n\r\nOur app is crammed with the greatest food experiences in the world. Hungry for wood-fired pizza, a classic burger or super fresh sushi? We know the best food for every cuisine that your city has to offer. foodpanda is the best food delivery service in your city – so take the first bite and download now!\r\n\r\nPlus there’s more to foodpanda than restaurants. Missing milk? Batteries? Detergent? Order from thousands of products with shops on foodpanda. It\'s online grocery delivery without the wait. Choose your favourite shops for everything from groceries to drinks to health to pharmaceuticals and even electronics.\r\n\r\nhow it works\r\n\r\nFirst, enter your address (home/office/treehouse). Then, choose your favourite restaurant or shop and place an order. They prepare your items and, once they’re ready, our courier brings them to you. If you need something to watch, you can track your rider in real-time. Just sit back and enjoy.\r\n\r\nwhat makes us special\r\n\r\nWhether you’re looking for the biggest brands or your favourite local restaurant or shop, foodpanda works with the best spots near you. Pizza or sushi? Groceries or gifts? Whatever you’re after, our rider will be at your doorstep with a smile, while you save time to do something else you love.\r\n\r\ntalk to us', 'McDonald', 0, 'image/Mcdonald.png', 'Valid'),
(25, 'Traveloka', 'Travel', 'Free', '*Awarded 1st place in the “Most Innovative Brand” category by BrandZ™ in 2017 and 2018*\r\n*Indonesia Leading Online Travel Agent in the 2017 Indonesia Travel and Tourism Awards*\r\n*Indonesia\'s No. 1 Cheap Flight & Hotel Booking Service according to comScore*\r\n*Official partner of IATA (International Air Transport Association) and PT Kereta Api Indonesia*\r\n*Covered by international press: Forbes, Financial Times, Tech in Asia, e27*\r\n\r\n\r\nTravel to your dream destinations and explore the world around you with Traveloka: the app of choice for more than 40 million users! Book cheap tickets for flights, trains, and buses; get around town and the airport with car rentals* and airport transfer. Save more on hotel booking, villas, or apartments, and enjoy special offers on thousands of exciting activities in Xperience, including attractions, movies*, food, events, spa, and classes.**', 'Traveloka', 0, 'image/Traveloka.png', 'Valid'),
(40, 'GTA', 'Games', '100000', 'GTA', 'Admin', 0, 'image/GTA.png ', 'Valid'),
(41, 'Discord', 'Entertainment', '100000', 'Discord là nơi bạn có thể tạo ra một ngôi nhà cho cộng đồng và bạn bè của mình. Nơi bạn giữ liên lạc và giao lưu qua trò chuyện tin nhắn, trò chuyện thoại và video. Cho dù bạn là thành viên của một câu lạc bộ trường học, một nhóm chơi game, một cộng đồng nghệ thuật trên toàn thế giới hay chỉ là một nhóm bạn muốn dành thời gian bên nhau, Discord đều giúp bạn dễ dàng trò chuyện mỗi ngày và giao lưu thường xuyên hơn.', 'Admin', 0, 'image/Discord.png ', 'Valid'),
(42, 'Omlet', 'Games', '20000', 'Omlet Arcade là nơi để chơi những trò chơi tuyệt vời cùng nhau.\r\nSử dụng mạng ảo trò chơi của chúng tôi để chơi Minecraft nhiều người chơi nhằm xây dựng thế giới với mọi người trên toàn cầu.\r\nPhát trực tiếp những khoảnh khắc đẹp nhất của bạn và lập nhóm với những người bạn mới để cải thiện lối chơi của bạn. Tất cả các trò chơi di động đều được hỗ trợ và có một cộng đồng trên Omlet Arcade!', 'Admin', 0, 'image/Omlet.png ', 'Valid'),
(44, 'Visual Studio Code', 'Books', 'Free', 'Microsoft Visual Studio is an integrated development environment from Microsoft. It is used to develop computer programs, as well as websites, web apps, web services and mobile apps......', 'Admin', 0, 'image/Visual_Studio_Icon_2019.svg.png', 'Valid');

-- --------------------------------------------------------

--
-- Table structure for table `history_bought`
--

CREATE TABLE `history_bought` (
  `Email` varchar(100) NOT NULL,
  `ID_App` int(11) NOT NULL,
  `ID_BOUGHT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_bought`
--

INSERT INTO `history_bought` (`Email`, `ID_App`, `ID_BOUGHT`) VALUES
('HB@gmail.com', 4, 5),
('dphuytdt@gmail.com', 11, 6),
('cbt@gmail.com', 4, 7),
('cbt@gmail.com', 11, 8),
('dphuytdt@gmail.com', 4, 9),
('dphuytdt@gmail.com', 34, 10),
('dphuytdt@gmail.com', 37, 11),
('dphuytdt@gmail.com', 39, 12);

-- --------------------------------------------------------

--
-- Table structure for table `history_card`
--

CREATE TABLE `history_card` (
  `ID_card` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Serial` int(16) NOT NULL,
  `Value` int(11) NOT NULL,
  `Time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_card`
--

INSERT INTO `history_card` (`ID_card`, `Email`, `Serial`, `Value`, `Time`) VALUES
(10, 'dphuytdt@gmail.com', 2147483647, 20000, '2022-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `manage_type`
--

CREATE TABLE `manage_type` (
  `ID_Type` int(11) NOT NULL,
  `Type_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_type`
--

INSERT INTO `manage_type` (`ID_Type`, `Type_Name`) VALUES
(1, 'Books'),
(2, 'Entertainment'),
(4, 'Food-Drink'),
(5, 'Games'),
(6, 'Music'),
(7, 'News'),
(8, 'Shopping'),
(9, 'Travel'),
(14, 'Tools');

-- --------------------------------------------------------

--
-- Table structure for table `naptien`
--

CREATE TABLE `naptien` (
  `Serial` int(225) NOT NULL,
  `Price` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Valid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `Level` int(1) NOT NULL DEFAULT 1,
  `Budget` int(11) NOT NULL DEFAULT 0,
  `De_Name` varchar(100) NOT NULL,
  `Contact_Info` text NOT NULL,
  `AVT` varchar(100) NOT NULL DEFAULT 'image/AVT/AVT_Default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `FullName`, `Email`, `Pass`, `Level`, `Budget`, `De_Name`, `Contact_Info`, `AVT`) VALUES
(5, 'user', 'user@gmail.com', '12345678', 1, 0, 'Google LLC', '0947072684', 'image/AVT/AVT_Default.png'),
(6, 'dev1', 'dev@gmail.com', '12345678', 2, 0, '', '', 'image/AVT/AVT_Default.png'),
(8, 'Admin_Phúc Huy', 'dphuytdt@gmail.com', '12345678', 3, 0, '', '', 'image/AVT/GTA.png');

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `Email` varchar(100) NOT NULL,
  `Hash` varchar(45) NOT NULL,
  `TimeStamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `FullName` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `Time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `verifiedpassword`
--

CREATE TABLE `verifiedpassword` (
  `Email` varchar(100) NOT NULL,
  `Hash` varchar(45) NOT NULL,
  `Time` int(11) NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_item`
--
ALTER TABLE `app_item`
  ADD PRIMARY KEY (`ID_App`);

--
-- Indexes for table `history_bought`
--
ALTER TABLE `history_bought`
  ADD PRIMARY KEY (`ID_BOUGHT`);

--
-- Indexes for table `history_card`
--
ALTER TABLE `history_card`
  ADD PRIMARY KEY (`ID_card`);

--
-- Indexes for table `manage_type`
--
ALTER TABLE `manage_type`
  ADD PRIMARY KEY (`ID_Type`);

--
-- Indexes for table `naptien`
--
ALTER TABLE `naptien`
  ADD PRIMARY KEY (`Serial`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_item`
--
ALTER TABLE `app_item`
  MODIFY `ID_App` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `history_bought`
--
ALTER TABLE `history_bought`
  MODIFY `ID_BOUGHT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `history_card`
--
ALTER TABLE `history_card`
  MODIFY `ID_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `manage_type`
--
ALTER TABLE `manage_type`
  MODIFY `ID_Type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
