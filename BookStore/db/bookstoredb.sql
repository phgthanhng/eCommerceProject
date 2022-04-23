-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 10:14 PM
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
-- Database: `bookstoredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookID` int(11) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `retailprice` decimal(10,2) NOT NULL,
  `availablequantity` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookID`, `bookname`, `isbn`, `author`, `publisher`, `retailprice`, `availablequantity`, `image`, `description`, `category`) VALUES
(2, 'AGAIN, RACHEL', '9780385675376', 'Marian Keyes', 'Doubleday Canada', '37.99', 98, '624d0a4576b25.png', 'From internationally bestselling author Marian Keyes comes the eagerly awaited sequel to Rachel\'\'s Holiday.\n\nBack in the long ago nineties, Rachel Walsh was a mess.\n \nBut a spell in rehab transformed everything. Life became very good, very quickly. These days, Rachel has love, family, a great job as an addiction counsellor, she even gardens. Her only bad habit is a fondness for expensive sneakers.\n \nBut with the sudden reappearance of a man she\'\'d once loved, her life wobbles.\n \nShe\'\'d thought she was settled. Fixed forever. Is she about to discover that no matter what our age, everything can change?\n \nIs it time to think again, Rachel?', 'fiction'),
(3, 'BE A TRIANGLE (SIGNED EDITION): HOW I WENT FROM BE', '9780385684194', 'Lilly Singh', 'Doubleday Canada', '24.99', 60, '6262e4a0d25d7.jpg', 'From the New York Times bestselling author of How to Be a Bawse comes an honest, funny, and inspiring primer on learning to come home to your truest and happiest self.\r\n\r\n“It’s time to flip right side up. It’s time for this book title to make sense. It’s time to be a triangle.”\r\n \r\nEveryone knows that sometimes, life just sucks—even world-famous actress, author, and creator Lilly Singh. In this book, Lilly provides a safe space where readers can learn how to create a sense of peace within themselves. Without sugarcoating what it’s like to face adversity—including Lilly’s intensely personal struggles with identity, success, and self-doubt—she teaches readers to “unsubscribe” from cookie-cutter ideals.\r\n \r\nWith her signature blend of vulnerability, insight, and humor, Lilly instructs readers to “be a triangle”: You must build a solid foundation for your life, one that can be built upon, but never fundamentally changed or destroyed. As she puts it, we must always find a way to come home to ourselves—“we must create a place, a set of beliefs, a simple set of priorities to come back to should life lead us astray, which it will.”\r\n \r\nLike a wise, empathetic friend who always keeps you honest, Lilly pushes you to adjust your mindset and change the conversations you have with yourself. The result is a deeply humane, entertaining, and uplifting guide to befriending yourself and becoming a true “miracle for the world.”\"', 'non-fiction'),
(4, 'Freezing Order: A True Story Of Money Laundering, ', '9781982153281', 'Bill Browder', 'Simon & Schuster', '38.88', 78, '624d085dac16b.png', 'Following his explosive New York Times bestseller Red Notice, Bill Browder returns with another gripping thriller chronicling how he became Vladimir Putin’s number one enemy by exposing Putin’s campaign to steal and launder hundreds of billions of dollars and kill anyone who stands in his way.\r\n\r\nWhen Bill Browder’s young Russian lawyer, Sergei Magnitsky, was beaten to death in a Moscow jail, Browder made it his life’s mission to go after his killers and make sure they faced justice. The first step of that mission was to uncover who was behind the $230 million tax refund scheme that Magnitsky was killed over. As Browder and his team tracked the money as it flowed out of Russia through the Baltics and Cyprus and on to Western Europe and the Americas, they were shocked to discover that Vladimir Putin himself was a beneficiary of the crime.', 'non-fiction'),
(6, 'Hook, Line, And Sinker: A Novel', '9780063045699', 'Tessa Bailey', 'HarperCollins', '19.99', 33, '624d315967bca.png', 'In the follow-up to It Happened One Summer, Tessa Bailey delivers another deliciously fun rom-com about a former player who accidentally falls for his best friend while trying to help her land a different man…\r\n\r\nKing crab fisherman Fox Thornton has a reputation as a sexy, carefree flirt. Everyone knows he’s a guaranteed good time—in bed and out—and that’s exactly how he prefers it. Until he meets Hannah Bellinger. She’s immune to his charm and looks, but she seems to enjoy his… personality? And wants to be friends? Bizarre. But he likes her too much to risk a fling, so platonic pals it is.\r\n\r\nNow, Hannah\'\'s in town for work, crashing in Fox’s spare bedroom. She knows he’s a notorious ladies’ man, but they’re definitely just friends. In fact, she\'\'s nursing a hopeless crush on a colleague and Fox is just the person to help with her lackluster love life. Armed with a few tips from Westport’s resident Casanova, Hannah sets out to catch her coworker’s eye… yet the more time she spends with Fox, the more she wants him instead. As the line between friendship and flirtation begins to blur, Hannah can\'\'t deny she loves everything about Fox, but she refuses to be another notch on his bedpost. \r\n\r\nLiving with his best friend should have been easy. Except now she’s walking around in a towel, sleeping right across the hall, and Fox is fantasizing about waking up next to her for the rest of his life and… and… man overboard! He’s fallen for her, hook, line, and sinker. Helping her flirt with another guy is pure torture, but maybe if Fox can tackle his inner demons and show Hannah he’s all in, she\'\'ll choose him instead?', 'romance'),
(12, 'THE NO-SHOW', '9780593438442', 'Beth O\'leary', 'Penguin Publishing Group', '15.99', 50, '6262e413e5a07.jpg', 'Three women who seemingly have nothing in common find that they\'\'re involved with the same man in this smart new rom-com by Beth O\'\'Leary, bestselling author of The Flatshare.\r\n\r\nSiobhan is a quick-tempered life coach with way too much on her plate. Miranda is a tree surgeon used to being treated as just one of the guys on the job. Jane is a soft-spoken volunteer for the local charity shop with zero sense of self-worth.\r\n \r\nThese three women are strangers who have only one thing in common: they’ve all been stood up on the same day, the very worst day to be stood up—Valentine’s Day. And, unbeknownst to them, they’ve all been stood up by the same man.\r\n \r\nOnce they\'\'ve each forgiven him for standing them up, they are all in serious danger of falling in love with a man who may have not just one or two but three women on the go....\r\n \r\nIs there more to him than meets the eye? Where was he on Valentine’s Day? And will they each untangle the truth before they all get their hearts broken?', 'fiction'),
(13, 'WHY HAS NOBODY TOLD ME THIS BEFORE?', '9780063227934', 'Julie Smith', 'HarperCollins', '34.99', 30, '6262e66956f14.jpg', 'International bestseller\r\n\r\n“Smart, insightful, and warm. Dr. Julie is both the expert and wise friend we all need.” –Lori Gottlieb, New York Times bestselling author of Maybe You Should Talk to Someone and co-host of the \"Dear Therapists\" podcast?\r\n\r\nDrawing on years of experience as a clinical psychologist, online sensation Dr Julie Smith provides the skills you need to navigate common life challenges and take charge of your emotional and mental health in her debut book.\r\n\r\nFilled with secrets from a therapist\'\'s toolkit, Why Has Nobody Told Me This Before teaches you how to fortify and maintain your mental health, even in the most trying of times. Dr Julie Smith’s expert advice and powerful coping techniques will help you stay resilient, whether you want to manage anxiety, deal with criticism, cope with depression, build self-confidence, find motivation, or learn to forgive yourself. Why Has Nobody Told Me This Before tackles everyday issues and offers practical solutions in bite-sized, easy-to-digest entries which make it easy to quickly find specific information and guidance. \r\n\r\nYour mental well-being is just as important as your physical well-being. Packed with proven strategies, Dr. Julie’s empathetic guide offers a deeper understanding of how your mind works and gives you the insights and help you need to nurture your mental health every day. Wise and practical, Why Has Nobody Told Me This Before might just change your life.', 'self-help'),
(14, 'WHEN YOU\'RE READY, THIS IS HOW YOU HEAL', '9781949759440', 'Brianna Wiest', 'Thought Catalog Books', '22.99', 99, '6262e740e7dbe.jpg', 'Healing is not a one-time event. It can begin with a one-time event - typically some form of sudden loss that disrupts our projection of what the future might be. However, the true work of healing is allowing that disruption to wake us from a deep state of unconsciousness, to release the personas we adapted into, and begin consciously piecing together the full truth of who we were meant to be.', 'self-help'),
(16, 'THE MOUNTAIN IS YOU: TRANSFORMING SELF-SABOTAGE IN', '9781949759228', 'Brianna Wiest', 'Thought Catalog Books', '22.99', 66, '6262ee770feb7.jpg', 'Coexisting but conflicting needs create self-sabotaging behaviors. This is why we resist efforts to change, often until they feel completely futile. But by extracting crucial insight from our most damaging habits, building emotional intelligence by better understanding our brains and bodies, releasing past experiences at a cellular level, and learning to act as our highest potential future selves, we can step out of our own way and into our potential. For centuries, the mountain has been used as a metaphor for the big challenges we face, especially ones that seem impossible to overcome. To scale our mountains, we actually have to do the deep internal work of excavating trauma, building resilience, and adjusting how we show up for the climb. In the end, it is not the mountain we master, but ourselves.', 'self-help'),
(17, '101 ESSAYS THAT WILL CHANGE THE WAY YOU THINK', '9781945796067', 'Brianna Wiest', 'Thought Catalog Books', '21.00', 33, '6262eedb4e8c4.jpg', 'In her second compilation of published writing, Brianna Wiest explores pursuing purpose over passion, embracing negative thinking, seeing the wisdom in daily routine, and becoming aware of the cognitive biases that are creating the way you see your life. This book contains never before seen pieces as well as some of Brianna\'s most popular essays, all of which just might leave you thinking: this idea changed my life.', 'self-help'),
(18, 'BURN AFTER WRITING (PINK)', '9780593329917', 'Sharon Jones', 'Penguin Publishing Group', '19.00', 23, '6262ef575c83e.jpg', 'The national bestseller.\r\n \r\nWrite. Burn. Repeat. Now with new covers to match whatever mood you’re in.\r\n\r\n\"This book has made me laugh and cry, filled me with joy, and inspired me.\"\r\n-TikTok user camrynbanks\r\n\r\nInstagram, WhatsApp, Snapchat, TikTok, VSCO, YouTube...the world has not only become one giant feed, but also one giant confessional. Burn After Writing allows you to spend less time scrolling and more time self-reflecting. Through incisive questions and thought experiments, this journal helps you learn new things while letting others go. Imagine instead of publicly declaring your feelings for others, you privately declared your feelings for yourself?\r\n\r\nHelp your heart by turning off the comments and muting the accounts that drive you into jealousy for a few moments a night. Whether you are going through the ups and downs of growing up, or know a few young people who are, you will flourish by finding free expression--even if through a few tears!\r\n\r\nPush your limits, reflect on your past, present, and future, and create a secret book that\'\'s about you, and just for you. This is not a diary, and there is no posting required. And when you\'\'re finished, toss it, hide it, or Burn After Writing.', 'self-help'),
(19, 'The Subtle Art of Not Giving a F*ck: A Counterintu', '9780062641540', 'Mark Manson', 'HarperCollins', '23.99', 300, '6262efda85640.jpg', '#1 International Bestseller and #1 New York Times Bestseller\r\n\r\nOver 2 million copies sold\r\n\r\nIn this generation-defining self-help guide, a superstar blogger cuts through the crap to show us how to stop trying to be \"positive\" all the time so that we can truly become better, happier people.\r\n\r\nFor decades, we’ve been told that positive thinking is the key to a happy, rich life. \"F**k positivity,\" Mark Manson says. \"Let’s be honest, shit is f**ked and we have to live with it.\" In his wildly popular Internet blog, Manson doesn’t sugarcoat or equivocate. He tells it like it is—a dose of raw, refreshing, honest truth that is sorely lacking today. The Subtle Art of Not Giving a F**k is his antidote to the coddling, let’s-all-feel-good mindset that has infected American society and spoiled a generation, rewarding them with gold medals just for showing up.\r\n\r\nManson makes the argument, backed both by academic research and well-timed poop jokes, that improving our lives hinges not on our ability to turn lemons into lemonade, but on learning to stomach lemons better. Human beings are flawed and limited—\"not everybody can be extraordinary, there are winners and losers in society, and some of it is not fair or your fault.\" Manson advises us to get to know our limitations and accept them. Once we embrace our fears, faults, and uncertainties, once we stop running and avoiding and start confronting painful truths, we can begin to find the courage, perseverance, honesty, responsibility, curiosity, and forgiveness we seek.\r\n\r\nThere are only so many things we can give a f**k about so we need to figure out which ones really matter, Manson makes clear. While money is nice, caring about what you do with your life is better, because true wealth is about experience. A much-needed grab-you-by-the-shoulders-and-look-you-in-the-eye moment of real-talk, filled with entertaining stories and profane, ruthless humor, The Subtle Art of Not Giving a F**k is a refreshing slap for a generation to help them lead contented, grounded lives.', 'self-help'),
(20, 'Things That Matter: Overcoming Distraction To Purs', '9780593193976', 'Joshua Becker', 'The Crown Publishing Group', '34.00', 455, '6262f05b034a9.jpg', 'Discover practical steps you can take today to live a life focused on things that matter, from the bestselling author of The More of Less and The Minimalist Home.\r\n\r\n“Things That Matter points the way to free ourselves from the distractions of everyday life so that we can build the lives we seek to create.”—Gretchen Rubin, author of The Happiness Project\r\n\r\nDo you want to live a meaningful life—with very few regrets—and make a positive difference in the world? But is culture distracting you from doing so? Perhaps moments, days, and years go by without you stopping to ask yourself, Am I living out my true purpose? Even if that question whispers to you, are you brushing it aside because you don’t know what to change in life’s busyness?\r\n \r\nIn Things That Matter, Joshua Becker helps you identify the obstacles—such as fear, technology, money, possessions, and the opinions of others—that keep you from living with intention, and then he provides practical ideas for letting go of those distractions today so you can focus on what matters most. He uses practical exercises and questions, insights from a nationwide survey, and success stories to give you the motivation you need to\r\n \r\n  • identify the pursuits that matter most to you\r\n  • align your dreams with your daily priorities\r\n  • recognize how money and possessions keep you from happiness\r\n  • become aware of how others’ opinions of you influence your choices\r\n  • embrace what you’re truly passionate about instead of planning that next escape\r\n  • figure out what to do with all those emails, notifications, and pings\r\n  • let go of past mistakes and debilitating habits\r\n \r\nThings That Matter is a book about living well. It’s about overcoming the chatter of a world focused on all the wrong things. It’s about rethinking the common assumptions of today to find satisfaction and fulfillment tomorrow.\r\n \r\nHow do we get to the end of our lives with minimal regrets? We set aside lesser pursuits to seek lasting meaning. And we discover the joy of doing it every day.', 'self-help'),
(21, 'The Untethered Soul: The Journey Beyond Yourself', '9781572245372', 'Michael A. Singer, Michael Sin', 'New Harbinger Publications', '27.95', 88, '6262f0bda7119.jpg', '#1 New York Times bestseller\r\n\r\nWhat would it be like to free yourself from limitations and soar beyond your boundaries? What can you do each day to discover inner peace and serenity? The Untethered Soul offers simple yet profound answers to these questions.\r\n\r\nWhether this is your first exploration of inner space, or you’ve devoted your life to the inward journey, this book will transform your relationship with yourself and the world around you. You’ll discover what you can do to put an end to the habitual thoughts and emotions that limit your consciousness. By tapping into traditions of meditation and mindfulness, author and spiritual teacher Michael A. Singer shows how the development of consciousness can enable us all to dwell in the present moment and let go of painful thoughts and memories that keep us from achieving happiness and self-realization.\r\n\r\nCopublished with the Institute of Noetic Sciences (IONS) The Untethered Soul begins by walking you through your relationship with your thoughts and emotions, helping you uncover the source and fluctuations of your inner energy. It then delves into what you can do to free yourself from the habitual thoughts, emotions, and energy patterns that limit your consciousness. Finally, with perfect clarity, this book opens the door to a life lived in the freedom of your innermost being.\r\n\r\nThe Untethered Soul has already touched the lives of more than a million readers, and is available in a special hardcover gift edition with ribbon bookmark—the perfect gift for yourself, a loved one, or anyone who wants a keepsake edition of this remarkable book.\r\n\r\nVisit www.untetheredsoul.com for more information.', 'self-help'),
(22, 'WHAT HAPPENED TO YOU?: Conversations on Trauma, Re', '9781250223180', 'Oprah Winfrey, Bruce D. Perry', 'Flatiron Books', '36.99', 87, '6262f1281dbae.jpg', '#1 NEW YORK TIMES BESTSELLER\r\n\r\nOur earliest experiences shape our lives far down the road, and What Happened to You? provides powerful scientific and emotional insights into the behavioral patterns so many of us struggle to understand.\r\n\r\n“Through this lens we can build a renewed sense of personal self-worth and ultimately recalibrate our responses to circumstances, situations, and relationships. It is, in other words, the key to reshaping our very lives.”—Oprah Winfrey\r\n\r\nThis book is going to change the way you see your life.\r\n\r\nHave you ever wondered \"Why did I do that?\" or \"Why can\'t I just control my behavior?\" Others may judge our reactions and think, \"What\'s wrong with that person?\" When questioning our emotions, it\'s easy to place the blame on ourselves; holding ourselves and those around us to an impossible standard. It\'s time we started asking a different question.\r\n\r\nThrough deeply personal conversations, Oprah Winfrey and renowned brain and trauma expert Dr. Bruce Perry offer a groundbreaking and profound shift from asking “What’s wrong with you?” to “What happened to you?”\r\n\r\nHere, Winfrey shares stories from her own past, understanding through experience the vulnerability that comes from facing trauma and adversity at a young age. In conversation throughout the book, she and Dr. Perry focus on understanding people, behavior, and ourselves. It’s a subtle but profound shift in our approach to trauma, and it’s one that allows us to understand our pasts in order to clear a path to our future—opening the door to resilience and healing in a proven, powerful way.', 'self-help'),
(23, 'How To Not Die Alone: The Surprising Science That ', '9781982120634', 'Logan Ury', 'Simon & Schuster', '35.99', 65, '6262f1c35c7aa.jpg', 'A “must-read” (The Washington Post) funny and practical guide to help you find, build, and keep the relationship of your dreams.\r\n\r\nHave you ever looked around and wondered, “Why has everyone found love except me?” You’re not the only one. Great relationships don’t just appear in our lives—they’re the culmination of a series of decisions, including whom to date, how to end it with the wrong person, and when to commit to the right one. But our brains often get in the way. We make poor decisions, which thwart us on our quest to find lasting love.\r\n\r\nDrawing from years of research, behavioral scientist turned dating coach Logan Ury reveals the hidden forces that cause those mistakes. But awareness on its own doesn’t lead to results. You have to actually change your behavior. Ury shows you how.\r\n\r\nThis “simple-to-use guide” (Lori Gottlieb, New York Times bestselling author of Maybe You Should Talk to Someone) focuses on a different decision in each chapter, incorporating insights from behavioral science, original research, and real-life stories. You’ll learn:\r\n-What’s holding you back in dating (and how to break the pattern)\r\n-What really matters in a long-term partner (and what really doesn’t)\r\n-How to overcome the perils of online dating (and make the apps work for you)\r\n-How to meet more people in real life (while doing activities you love)\r\n-How to make dates fun again (so they stop feeling like job interviews)\r\n-Why “the spark” is a myth (but you’ll find love anyway)\r\n\r\nThis “data-driven” (Time), step-by-step guide to relationships, complete with hands-on exercises, is designed to transform your life. How to Not Die Alone will help you find, build, and keep the relationship of your dreams.', 'self-help'),
(24, 'Stolen Focus: Why You Can\'t Pay Attention--and How', '9780593138519', 'Johann Hari', 'Crown', '37.00', 294, '6262f23d78961.jpg', 'NEW YORK TIMES BESTSELLER • Our ability to pay attention is collapsing. From the New York Times bestselling author of Chasing the Scream and Lost Connections comes a groundbreaking examination of why this is happening—and how to get our attention back.\r\n\r\n“The book the world needs in order to win the war on distraction.”—Adam Grant, author of Think Again\r\n\r\n“Read this book to save your mind.”—Susan Cain, author of Quiet\r\n \r\nIn the United States, teenagers can focus on one task for only sixty-five seconds at a time, and office workers average only three minutes. Like so many of us, Johann Hari was finding that constantly switching from device to device and tab to tab was a diminishing and depressing way to live. He tried all sorts of self-help solutions—even abandoning his phone for three months—but nothing seemed to work. So Hari went on an epic journey across the world to interview the leading experts on human attention—and he discovered that everything we think we know about this crisis is wrong.\r\n \r\nWe think our inability to focus is a personal failure to exert enough willpower over our devices. The truth is even more disturbing: our focus has been stolen by powerful external forces that have left us uniquely vulnerable to corporations determined to raid our attention for profit. Hari found that there are twelve deep causes of this crisis, from the decline of mind-wandering to rising pollution, all of which have robbed some of our attention. In Stolen Focus, he introduces readers to Silicon Valley dissidents who learned to hack human attention, and veterinarians who diagnose dogs with ADHD. He explores a favela in Rio de Janeiro where everyone lost their attention in a particularly surreal way, and an office in New Zealand that discovered a remarkable technique to restore workers’ productivity.\r\n \r\nCrucially, Hari learned how we can reclaim our focus—as individuals, and as a society—if we are determined to fight for it. Stolen Focus will transform the debate about attention and finally show us how to get it back.', 'self-help'),
(25, 'How To Win Friends And Influence People: Updated F', '9781982171452', 'Dale Carnegie', 'Simon & Schuster', '38.99', 543, '6262f2a846b8e.jpg', 'Updated for the first time in more than forty years, Dale Carnegie’s timeless bestseller How to Win Friends and Influence People—a classic that has improved and transformed the personal and professional lives of millions.\r\n\r\nThis new edition of the most influential self-help book of the last century has been updated under the care of Dale’s daughter, Donna, introducing changes that keep the book fresh for today’s readers, with priceless material restored from the original 1936 text.\r\n\r\nOne of the best-known motivational guides in history, Dale Carnegie’s groundbreaking publication has sold tens of millions of copies, been translated into almost every known written language, and has helped countless people succeed.\r\n\r\nCarnegie’s rock-solid, experience-tested advice has remained relevant for generations because he addresses timeless questions about the art of getting along with people. How to Win Friends and Influence People teaches you:\r\n-How to communicate effectively\r\n-How to make people like you\r\n-How to increase your ability to get things done\r\n-How to get others to see your side\r\n-How to become a more effective leader\r\n-How to successfully navigate almost any social situation\r\n-And so much more!\r\n\r\nHow to Win Friends and Influence People is a historic bestseller for one simple reason: Its crucial life lessons, conveyed through engaging storytelling, have shown readers how to become who they wish to be. With the newly updated version of this classic, that’s as true now as ever.', 'self-help'),
(26, 'The Diamond Eye: A Novel', '9780063226142', 'Kate Quinn', 'HarperCollins', '24.99', 875, '6262f354dc271.jpg', 'The New York Times bestselling author of The Rose Code returns with an unforgettable World War II tale of a quiet bookworm who becomes history’s deadliest female sniper. Based on a true story.\r\n\r\n\r\nIn 1937 in the snowbound city of Kiev (now known as Kyiv), wry and bookish history student Mila Pavlichenko organizes her life around her library job and her young son—but Hitler’s invasion of Ukraine and Russia sends her on a different path. Given a rifle and sent to join the fight, Mila must forge herself from studious girl to deadly sniper—a lethal hunter of Nazis known as Lady Death. When news of her three hundredth kill makes her a national heroine, Mila finds herself torn from the bloody battlefields of the eastern front and sent to America on a goodwill tour.\r\n\r\nStill reeling from war wounds and devastated by loss, Mila finds herself isolated and lonely in the glittering world of Washington, DC—until an unexpected friendship with First Lady Eleanor Roosevelt and an even more unexpected connection with a silent fellow sniper offer the possibility of happiness. But when an old enemy from Mila’s past joins forces with a deadly new foe lurking in the shadows, Lady Death finds herself battling her own demons and enemy bullets in the deadliest duel of her life.\r\n\r\nBased on a true story, The Diamond Eye is a haunting novel of heroism born of desperation, of a mother who became a soldier, of a woman who found her place in the world and changed the course of history forever.', 'fiction'),
(27, 'Sea Of Tranquility: A Novel', '9781443466097', 'Emily St. John Mandel', 'HarperCollins', '29.99', 432, '6262f3e60c05a.jpg', 'From the #1 bestselling author of the Scotiabank Giller Prize–shortlisted The Glass Hotel and the internationally bestselling Station Eleven comes a new novel of dazzling imagination\r\n\r\nIn this captivating tale of imagination and ambition, a seemingly disparate array of people come into contact with a time traveller who must resist the pull to change the past and the future. The cast includes a British exile on the West coast of Canada in the early 1900s; the author of a bestselling novel about a fictional pandemic who embarks on a galaxy-spanning book tour during the outbreak of an actual pandemic; a resident of a moon colony almost 300 years in the future; and a lonely girl who films an old-growth forest and experiences a disruption in the recording. Blurring the lines between reality and fantasy, Emily St. John Mandel’s dazzling story follows these engrossing characters across space and time as their lives ultimately intersect.\r\n\r\nSea of Tranquility is a breathtaking and wondrous examination of the ties that bind us together, by a master storyteller.', 'fiction'),
(28, 'Lessons In Chemistry', '9780385697378', 'Bonnie Garmus', 'Doubleday Canada', '24.95', 654, '6262f455d450b.jpg', 'A delight for readers of Where\'\'d You Go, Bernadette, this blockbuster debut set in 1960s California features the singular voice of Elizabeth Zott, a scientist whose career takes a detour when she becomes the star of a beloved TV cooking show.\r\n\r\nChemist Elizabeth Zott is not your average woman. In fact, Elizabeth Zott would be the first to point out that there is no such thing as an average woman. But it\'\'s the early 1960s and her all-male team at Hastings Research Institute takes a very unscientific view of equality. Except for one: Calvin Evans, the lonely, brilliant, Nobel Prize–nominated grudge holder who falls in love with—of all things—her mind. True chemistry results. \r\n \r\nLike science, though, life is unpredictable. Which is why a few years later Eizabeth Zott finds herself not only a single mother but also the reluctant star of America\'\'s most beloved cooking show, Supper at Six. Elizabeth\'\'s unusual approach to cooking (\"combine one tablespoon acetic acid with a pinch of sodium chloride\") proves revolutionary. But as her following grows, not everyone is happy. Because, as it turns out, Elizabeth Zott isn\'\'t just teaching women how to cook. She\'\'s daring them to change the status quo.  \r\n \r\nLaugh-out-loud funny, shrewdly observant and studded with a dazzling cast of supporting characters, Lessons in Chemistry is as original and vibrant as its protagonist.', 'fiction'),
(29, 'Bluebird: A Novel', '9781982156657', 'Genevieve Graham', 'Simon & Schuster', '24.99', 431, '6262f5b95f0ec.jpg', 'A dazzling novel set during the Great War and postwar Prohibition about a young nurse, a soldier, and a family secret that binds them together for generations to come—from USA TODAY and repeat #1 bestselling author Genevieve Graham.\r\n\r\nPresent day\r\n\r\nCassie Simmons, a museum curator, is enthusiastic about solving mysteries from the past, and she has a personal interest in the history of the rumrunners who ferried illegal booze across the Detroit River during Prohibition. So when a cache of whisky labeled Bailey Brothers’ Best is unearthed during a local home renovation, Cassie hopes to find the answers she’s been searching for about the legendary family of bootleggers...\r\n\r\n1918\r\n\r\nCorporal Jeremiah Bailey of the 1st Canadian Tunnelling Company is tasked with planting mines in the tunnels beneath enemy trenches. After Jerry is badly wounded in an explosion, he finds himself in a Belgium field hospital under the care of Adele Savard, one of Canada’s nursing sisters, nicknamed “Bluebirds” for their blue gowns and white caps. As Jerry recovers, he forms a strong connection with Adele, who is from a place near his hometown of Windsor, along the Detroit River. In the midst of war, she’s a welcome reminder of home, and when Jerry is sent back to the front, he can only hope that he’ll see his bluebird again.\r\n\r\nBy war’s end, both Jerry and Adele return home to Windsor, scarred by the horrors of what they endured overseas. When they cross paths one day, they have a chance to start over. But the city is in the grip of Prohibition, which brings exciting opportunities as well as new dangerous conflicts that threaten to destroy everything they have fought for.\r\n\r\nPulled from the pages of history, Bluebird is a compelling, luminous novel about the strength of the human spirit and the power of love to call us home.', 'fiction'),
(30, 'PART OF YOUR WORLD', '9781538704370', 'Abby Jimenez', 'Grand Central Publishing', '21.99', 543, '6262f6113c8c2.jpg', 'The New York Times bestselling author of Life\'s Too Short delivers a refreshingly modern fairy tale perfect for fans of Casey McQuiston and Emily Henry.\r\n\r\nAfter a wild bet, gourmet grilled-cheese sandwich, and cuddle with a baby goat, Alexis Montgomery has had her world turned upside down. The cause: Daniel Grant, a ridiculously hot carpenter who’s ten years younger than her and as casual as they come—the complete opposite of sophisticated city-girl Alexis. And yet their chemistry is undeniable.\r\n\r\nWhile her ultra-wealthy parents want her to carry on the family legacy of world-renowned surgeons, Alexis doesn’t need glory or fame. She’s fine with being a “mere” ER doctor. And every minute she spends with Daniel and the tight-knit town where he lives, she’s discovering just what’s really important. Yet letting their relationship become anything more than a short-term fling would mean turning her back on her family and giving up the opportunity to help thousands of people.\r\n\r\nBringing Daniel into her world is impossible, and yet she can’t just give up the joy she’s found with him either. With so many differences between them, how can Alexis possibly choose between her world and his?', 'fiction'),
(31, 'THE LONG WEEKEND INTL: A NOVEL', '9780063074354', 'Gilly Macmillan', 'HarperCollins', '24.99', 897, '6262f675d4de3.jpg', '“Twisty, dark, and packs a punch. . . . Gripping and genuinely nail-biting.” — SARAH PEARSE, New York Times bestselling author of The Sanatorium\r\n\r\nIn this pulse-pounding thriller from the New York Times bestselling author of The Nanny, a group of women travel to the most remote place in England for a weekend escape, only to discover a startling note that one of their husbands will be killed before they return home—perfect for fans of Ruth Ware and Lucy Foley.\r\n\r\nThree couples\r\n\r\nTwo bodies\r\n\r\nOne secret\r\n\r\nDark Fell Barn is a “perfectly isolated” retreat, or so says its website when Jayne books a reservation for her friends. A quiet place, far removed from the rest of the world, is exactly what they need.\r\n\r\nThe women arrive for a girls’ night ahead of their husbands. There’s ex-Army Jayne, hardened and serious, but also damaged. Ruth, the driven doctor and new mother who is battling demons of her own. Young Emily, just wed and insecure, the newest addition of this tight-knit band. Missing this year is Edie, who was the glue holding them together, until her husband died suddenly.\r\n\r\nBut what they hoped would be a relaxing break soon turns to horror. Upon arrival at Dark Fell Barn, the women find a devastating note claiming one of their husbands will be murdered. There are no phones, no cell service to check on their men. Friendships fracture as the situation spins wildly out of control. Betrayal can come in many forms.\r\n\r\nThis group has kept each other’s secrets for far too long.\r\n\r\n\"Fast-paced and incredibly compelling . . . this book will not let you put it down.\" — SHARI LAPENA, New York Times bestselling author of The Couple Next Door', 'fiction'),
(32, 'YOUNG MUNGO', '9781039003705', 'Douglas Stuart', 'Knopf Canada', '35.00', 644, '6262f6d359b96.jpg', '\"Young Mungo seals it: Douglas Stuart is a genius.\" —The Washington Post\r\n \r\nFrom the Booker Prize-winning author of Shuggie Bain, Young Mungo is both a vivid portrayal of working-class life and the deeply moving story of the dangerous first love of two young men.\r\n\r\nBorn under different stars, Protestant Mungo and Catholic James live in a hyper-masculine world. They are caught between two of Glasgow’s housing estates where young working-class men divide themselves along sectarian lines, and fight territorial battles for the sake of reputation. They should be sworn enemies if they’re to be seen as men at all, and yet they become best friends as they find a sanctuary in the dovecote that James has built for his prize racing pigeons. As they begin to fall in love, they dream of escaping the grey city, and Mungo must work hard to hide his true self from all those around him, especially from his elder brother Hamish, a local gang leader with a brutal reputation to uphold.\r\n \r\nBut the threat of discovery is constant and the punishment unspeakable. When Mungo’s mother sends him on a fishing trip to a loch in Western Scotland, with two strange men behind whose drunken banter lie murky pasts, he needs to summon all his inner strength and courage to get back to a place of safety, a place where he and James might still have a future.\r\n \r\nImbuing the everyday world of its characters with rich lyricism, Douglas Stuart’s Young Mungo is a gripping and revealing story about the meaning of masculinity, the push and pull of family, the violence faced by so many queer people, and the dangers of loving someone too much.', 'fiction'),
(33, 'PENGUIN CLASSICS COMPLETE NOVELS OF JANE AUSTEN', '9780141030173', 'Jane Austen', 'Penguin Uk', '27.99', 654, '6262f7ae49fae.jpg', 'From one of the greatest novelists of the nineteenth century, The Complete Novels of Jane Austen collects all of Jane Austen\'\'s novels in a single volume, published in Penguin Classics.\r\nFew novelists have conveyed the subtleties and nuances of their own social milieu with the wit and insight of Jane Austen. Here in one volume are her seven great novels: Sense and Sensibility, Pride and Prejudice, Mansfield Park, Emma, Northanger Abbey, Persuasion, and Lady Susan. Through her vivacious and spirited heroines and their circle, Austen vividly portrays English middle-class life as the eighteenth century came to a close and the nineteenth century began. Each of the novels is a love story and a story about marriage - marriage for love, for financial security, for social status. But they are not straightforward romances: ironic, comic and wise, they are masterly evocations of the society Jane Austen observed. This beautiful volume covers the literary career of one of England\'\'s finest prose stylists of any century.\r\n\r\nJane Austen (1775-1817) was famously modest about her own genius but has become one of English literature\'\'s most revered writers. Austen began writing at a young age, embarking on what is possibly her best-known work, Pride and Prejudice, at the age of 22. She was the author of Sense and Sensibility, Pride and Prejudice, Emma, Persuasion, Mansfield Park and Northanger Abbey.\r\n\r\nIf you enjoyed The Complete Novels of Jane Austen, you might like Charlotte Brontë\'\'s Jane Eyre, also available in Penguin Classics.\r\n\r\n\'\'One of my favourite writers\'\'\r\nHelen Fielding, author of Bridget Jones\'\'s Diary\r\n\r\n\'\'You care about the people living between Austen\'\'s pages as intensely as if they were real\'\'\r\nEsther Freud, author of Hideous Kinky\r\n\r\n\'\'Jane Austen is a writer who will be with you for a lifetime\'\'\r\nElizabeth Buchan, author of Revenge of the Middle Aged Woman', 'classic'),
(34, 'THE PICTURE OF DORIAN GRAY', '9780141439570', 'Oscar Wilde', 'Penguin Publishing Group', '14.00', 54, '6262f85577177.jpg', 'An astounding novel of decadence, debauchery, and secrecy from one of Ireland\'\'s greatest writers. Nominated as one of America’s best-loved novels by PBS’s The Great American Read\r\n\r\nEnthralled by his own exquisite portrait, Dorian Gray makes a Faustian bargain to sell his soul in exchange for eternal youth and beauty. Under the influence of Lord Henry Wotton, he is drawn into a corrupt double life, where he is able to indulge his desires while remaining a gentleman in the eyes of polite society. Only Dorian\'\'s picture bears the traces of his decadence.\r\nA knowing account of a secret life and an analysis of the darker side of late Victorian society. The Picture of Dorian Gray offers a disturbing portrait of an individual coming face to face with the reality of his soul. Shocking in its suggestion of unspeakable sin, this novel was later used as evidence against Wilde when he was tried for indecency in 1895. \r\n\r\nFor more than seventy years, Penguin has been the leading publisher of classic literature in the English-speaking world. With more than 1,700 titles, Penguin Classics represents a global bookshelf of the best works throughout history and across genres and disciplines. Readers trust the series to provide authoritative texts enhanced by introductions and notes by distinguished scholars and contemporary authors, as well as up-to-date translations by award-winning translators.', 'classic'),
(35, 'THE CATCHER IN THE RYE', '9780316769488', 'J. D. Salinger', 'Little, Brown And Company', '34.99', 543, '6262fa02ce142.jpg', 'The \"brilliant, funny, meaningful novel\" (The New Yorker) that established J. D. Salinger as a leading voice in American literature--and that has instilled in millions of readers around the world a lifelong love of books.\r\n\r\n\"If you really want to hear about it, the first thing you\'\'ll probably want to know is where I was born, and what my lousy childhood was like, and how my parents were occupied and all before they had me, and all that David Copperfield kind of crap, but I don\'\'t feel like going into it, if you want to know the truth.\"\r\n\r\nThe hero-narrator of The Catcher in the Rye is an ancient child of sixteen, a native New Yorker named Holden Caufield. Through circumstances that tend to preclude adult, secondhand description, he leaves his prep school in Pennsylvania and goes underground in New York City for three days.', 'classic'),
(36, 'A TREE GROWS IN BROOKLYN [75TH ANNIVERSARY ED]', '9780060736262', 'Betty Smith', 'HarperCollins', '31.99', 675, '6262fa571b719.jpg', 'A PBS Great American Read Top 100 Pick\r\n\r\nA special 75th anniversary edition of the beloved American classic about a young girl\'\'s coming-of-age at the turn of the twentieth century.\r\n\r\nFrom the moment she entered the world, Francie Nolan needed to be made of stern stuff, for growing up in the Williamsburg slums of Brooklyn, New York demanded fortitude, precocity, and strength of spirit. Often scorned by neighbors for her family\'\'s erratic and eccentric behavior-such as her father Johnny\'\'s taste for alcohol and Aunt Sissy\'\'s habit of marrying serially without the formality of divorce-no one, least of all Francie, could say that the Nolans\'\' life lacked drama. By turns overwhelming, heartbreaking, and uplifting, the Nolans\'\' daily experiences are raw with honestly and tenderly threaded with family connectedness. Betty Smith has, in the pages of A Tree Grows in Brooklyn, captured the joys of humble Williamsburg life-from \"junk day\" on Saturdays, when the children traded their weekly take for pennies, to the special excitement of holidays, bringing cause for celebration and revelry. Smith has created a work of literary art that brilliantly captures a unique time and place as well as deeply resonant moments of universal experience. Here is an American classic that \"cuts right to the heart of life,\" hails the New York Times. \"If you miss A Tree Grows in Brooklyn, you will deny yourself a rich experience.\"', 'classic'),
(37, 'FAHRENHEIT 451: A NOVEL', '9781451673319', 'Ray Bradbury', 'Simon & Schuster', '35.99', 677, '6262faa58d204.jpg', 'Nearly seventy years after its original publication, Ray Bradbury’s internationally acclaimed novel Fahrenheit 451 stands as a classic of world literature set in a bleak, dystopian future. Today its message has grown more relevant than ever before.\r\n\r\nGuy Montag is a fireman. His job is to destroy the most illegal of commodities, the printed book, along with the houses in which they are hidden. Montag never questions the destruction and ruin his actions produce, returning each day to his bland life and wife, Mildred, who spends all day with her television “family.” But when he meets an eccentric young neighbor, Clarisse, who introduces him to a past where people didn’t live in fear and to a present where one sees the world through the ideas in books instead of the mindless chatter of television, Montag begins to question everything he has ever known.', 'classic'),
(38, 'THE COUNT OF MONTE CRISTO', '9780140449266', 'Alexandre Dumas', 'Penguin Publishing Group', '22.00', 654, '6262fafa751f6.jpg', '\"On what slender threads do life and fortune hang.\" Nominated as one of America’s best-loved novels by PBS’s The Great American Read\r\n\r\nThrown in prison for a crime he has not committed, Edmond Dantes is confined to the grim fortress of If. There he learns of a great hoard of treasure hidden on the Isle of Monte Cristo and he becomes determined not only to escape, but also to unearth the treasure and use it to plot the destruction of the three men responsible for his incarceration. Dumas’ epic tale of suffering and retribution, inspired by a real-life case of wrongful imprisonment, was a huge popular success when it was first serialized in the 1840s.\r\nRobin Buss’s lively English translation is complete and unabridged, and remains faithful to the style of Dumas’s original. This edition includes an introduction, explanatory notes and suggestions for further reading.\r\n\r\nFor more than seventy years, Penguin has been the leading publisher of classic literature in the English-speaking world. With more than 1,700 titles, Penguin Classics represents a global bookshelf of the best works throughout history and across genres and disciplines. Readers trust the series to provide authoritative texts enhanced by introductions and notes by distinguished scholars and contemporary authors, as well as up-to-date translations by award-winning translators.', 'classic'),
(39, 'THE GREAT GATSBY (COLLINS CLASSICS)', '9780008195595', 'F. Scott Fitzgerald', 'HARPERCOLLINS PUBLISHERS', '45.99', 432, '6262fb44a1f45.jpg', 'The Great American Novel of love and betrayal in the Jazz Age is now a major film.\'\'I believe that on the first night I went to Gatsby\'\'s house I was one of the few guests who had actually been invited. Peoplewere not invited - they went there.\'\'Jay Gatsby\'\'s opulent Long Island mansion throngs with the bright young things of the Roaring Twenties. But Gatsby himself, young, handsome and mysteriously rich, never appearsto his guests. He stands apart from the crowd, yearning for something just out of reach - Daisy Buchanan, lost years before to another man. One fateful summer, when the pair finally reunite, their actions set in motion a series of events that will unravel their lives, bringing tragedy to all who surround them.Widely considered F. Scott Fitzgerald\'\'s masterpiece, The Great Gatsby is a tale of excess and obsession, and a work of classictwentieth-century American literature.', 'classic'),
(40, 'TO KILL A MOCKINGBIRD', '9780060935467', 'Harper Lee', 'HarperCollins', '19.99', 654, '6262fb8737aba.jpg', 'Voted America\'\'s Best-Loved Novel in PBS\'\'s The Great American Read\r\n\r\nHarper Lee\'\'s Pulitzer Prize-winning masterwork of honor and injustice in the deep South—and the heroism of one man in the face of blind and violent hatred\r\n\r\nOne of the most cherished stories of all time, To Kill a Mockingbird has been translated into more than forty languages, sold more than forty million copies worldwide, served as the basis for an enormously popular motion picture, and was voted one of the best novels of the twentieth century by librarians across the country. A gripping, heart-wrenching, and wholly remarkable tale of coming-of-age in a South poisoned by virulent prejudice, it views a world of great beauty and savage inequities through the eyes of a young girl, as her father—a crusading local lawyer—risks everything to defend a black man unjustly accused of a terrible crime.', 'classic'),
(41, 'THE METAMORPHOSIS: AND OTHER STORIES', '9780805210576', 'Franz Kafka', 'Knopf Doubleday Publishing Group', '20.00', 654, '6262fbca7545c.jpg', 'This collection brings together the stories that Kafka allowed to be published during his lifetime. To Max Brod, his literary executor, he wrote: “Of all my writings the only books that can stand are these.”', 'classic'),
(42, 'The Palace Papers: Inside The House Of Windsor--th', '9780385695145', 'Tina Brown', 'Doubleday Canada', '42.95', 54, '6262fc663a502.jpg', 'The riveting inside story of the British royal family since the death of Princess Diana, from the Queen’s tightening grip to the defection of Harry and Meghan—by the #1 New York Times bestselling author of The Diana Chronicles\r\n\r\n\"Never again,\" became Queen Elizabeth II\'\'s mantra shortly after Diana\'\'s death. More specifically, there could never be \"another Diana\"—a member of the family whose global popularity upstaged, outshone, and posed an existential threat to the British monarchy.\r\n \r\nPicking up where The Diana Chronicles left off, The Palace Papers reveals how the royal family reinvented itself after the traumatic years when Diana\'\'s blazing celebrity ripped through the House of Windsor like a comet.\r\n \r\nTina Brown takes readers on a tour de force journey that shows the Queen\'\'s stoic resolve as she coped with the passing of Princess Margaret, the Queen Mother, and her partner for seven decades, Prince Philip, and triumphed in her Jubilee years even as the family dramas raged around her. She explores Prince Charles\'\'s determination to make Camilla his queen, the tension between two princes on \"different paths,\" the ascendance of the resolute Kate Middleton, the disturbing allegations surrounding Prince Andrew and Jeffrey Epstein, and Harry and Meghan\'\'s stunning decision to \"step back\" as senior royals. Despite the fragile monarchy\'\'s best efforts, \"never again\" seems fast approaching.\r\n \r\nFull of powerful revelations, nuanced details, and searing insight, The Palace Papers will irrevocably change how the world perceives and understands the royal family.', 'non-fiction');
INSERT INTO `book` (`bookID`, `bookname`, `isbn`, `author`, `publisher`, `retailprice`, `availablequantity`, `image`, `description`, `category`) VALUES
(43, 'BITTERSWEET: HOW SORROW AND LONGING MAKE US WHOLE', '9780451499783', 'Susan Cain', 'Crown', '37.00', 765, '6262fde7440d9.jpg', '#1 NEW YORK TIMES BESTSELLER • Sadness is a superpower. In her new masterpiece, the author of the bestselling phenomenon Quiet reveals the power of a bittersweet outlook on life, and why we’ve been so blind to its value.\r\n \r\n“Bittersweet grabs you by the heart and doesn’t let go.”—BRENÉ BROWN, author of Atlas of the Heart\r\n“Susan Cain has described and validated my existence once again!”—GLENNON DOYLE, author of Untamed\r\n“A sparkling ode to the beauty of the human condition.”—ADAM GRANT, author of Think Again\r\n\r\nONE OF THE MOST ANTICIPATED BOOKS OF 2022—Oprah Daily, BookPage\r\n\r\nBittersweetness is a tendency to states of long­ing, poignancy, and sorrow; an acute aware­ness of passing time; and a curiously piercing joy at the beauty of the world. It recognizes that light and dark, birth and death—bitter and sweet—are forever paired. \r\n \r\nIf you’ve ever wondered why you like sad music . . . \r\nIf you find comfort or inspiration in a rainy day . . . \r\nIf you react intensely to music, art, nature, and beauty . . .\r\n \r\nThen you probably identify with the bitter­sweet state of mind.\r\n \r\nWith Quiet, Susan Cain urged our society to cultivate space for the undervalued, indispensable introverts among us, thereby revealing an un­tapped power hidden in plain sight. Now she em­ploys the same mix of research, storytelling, and memoir to explore why we experience sorrow and longing, and how embracing the bittersweetness at the heart of life is the true path to creativity, con­nection, and transcendence.\r\n \r\nCain shows how a bittersweet state of mind is the quiet force that helps us transcend our personal and collective pain. If we don’t acknowledge our own heartache, she says, we can end up inflicting it on others via abuse, domination, or neglect. But if we realize that all humans know—or will know—loss and suffering, we can turn toward one another. \r\n \r\nAt a time of profound discord and personal anxiety, Bittersweet brings us together in deep and unexpected ways.', 'non-fiction'),
(44, 'PAM AND TOMMY', '9781552674796', 'Amanda Chicago Lewis', 'Unknown', '13.99', 654, '6262ff2368696.jpg', 'The untold story of the world’s most infamous sex tape.\r\n\r\n \r\n\r\nPorn, guns, the mob and one very disgruntled electrician –writer Amanda Chicago Lewis traces the story of how the superstar couple’s most intimate moments went global and helped expose the dark side of Internet culture. From the details of the brazen theft to the desperate attempts to shutdown the tape, from the millions of dollars the tape made sketchy distributors and to the greed that ultimately destroyed the man who stole the tape, it’s no exaggeration to say that the affair set the stage for the twenty-first century’s obsession with celebrity. Before Kim Kardashian and TMZ, there was Pam and Tommy.\r\n\r\n \r\n\r\nA wild ride through the worlds of celebrity and the early Internet, PAM & TOMMY reveals a story whose impact and meaning has been misunderstood for years.', 'non-fiction'),
(45, 'My Mother\'s War: The Incredible True Story Of How ', '9781335469533', 'Eva Taylor', 'Hanover Square Press', '34.95', 43, '6262ffd73f0d3.jpg', '\"A sad and beautiful book, shining a light on quiet heroism in dark times.” –Lucy Adlington, New York Times bestselling author of The Dressmakers of Auschwitz\r\n\r\nThe extraordinary story of Sabine Zuur, a beautiful, young Dutch resistance fighter who spent over two years in three concentration camps during World War Two, told by her daughter using an astonishing archive of personal letters\r\n\r\nAfter her mother’s death, Eva Taylor discovered an astounding collection of documents, photos and letters from her time as a resistance fighter in Nazi-occupied Holland. Using the letters, she reconstructed her mother\'s experience in the underground resistance movement and then as a prisoner in the Amersfoort, Ravensbruck and Mauthausen concentration camps.\r\n \r\nThe letters reveal an amazing story of life during wartime, including declarations of love from her fiancé before his tragic death as a Spitfire pilot, prison notes smuggled out in her laundry, and passionate but sometimes terrifying messages from a German professional criminal who ultimately would save Sabine’s life.\r\n \r\nA one-of-a-kind story of survival, My Mother’s War captures a remarkable life in the words of the young woman who lived it.', 'non-fiction'),
(46, 'We Were Dreamers: An Immigrant Superhero Origin St', '9781443460590', 'Simu Liu', 'HarperCollins', '34.99', 543, '6263006871590.jpg', 'Marvel’s newest recruit shares his own inspiring and unexpected origin story, ranging from China to the bright lights of Hollywood. An immigrant who battled everything from parental expectations to cultural stereotypes, Simu Liu struggled to forge a path for himself, rising from the ashes of a failed accounting career (yes, you read that right) to become Shang-Chi.\r\n\r\nOur story begins in the city of Harbin, where Simu’s parents have left him with his grandparents while they seek to build a future in Canada. One day, a mysterious stranger shows up; it’s Simu’s father, who whisks him away from the only home he has ever known to the land of opportunity and maple syrup. \r\n\r\nLife in the new world, however, is not all that it was cracked up to be. Simu’s new guardians lack the gentle touch of his grandparents, resulting in harsh words and hurt feelings. His parents, on the other hand, find their new son emotionally distant and difficult to relate to. Although they are related by blood, they are separated by culture, language and values. \r\n\r\nAs Simu grows up, he plays the part of the ideal son well, getting A’s at school, crushing national math competitions and making his parents proud. But as time goes on, he grows increasingly disillusioned with the expectations placed on his shoulders, and finds it harder and harder to keep up the charade. Barely a year out of college, he hits rock bottom when he is laid off from his first job as an accountant. Unemployed, riddled with shame and with nothing left to lose, Simu sees an ad on Craigslist that will send him on a wildly unexpected journey into the mysterious world of show business. Through a swath of rejections and comical mishaps, Simu’s determination leads him to succeed as an actor and to open the door to reconciling with his parents.\r\n\r\nWe Were Dreamers is more than a celebrity memoir—it’s a story about growing up between cultures, finding your family and becoming the master of your own extraordinary circumstances.', 'non-fiction'),
(47, 'IT ENDS WITH US: A NOVEL', '9781501110368', 'Colleen Hoover', 'Atria Books', '22.99', 43, '62630107b8ce4.jpg', 'In this “brave and heartbreaking novel that digs its claws into you and doesn’t let go, long after you’ve finished it” (Anna Todd, New York Times bestselling author) from the #1 New York Times bestselling author of All Your Perfects, a workaholic with a too-good-to-be-true romance can’t stop thinking about her first love.\r\n\r\nLily hasn’t always had it easy, but that’s never stopped her from working hard for the life she wants. She’s come a long way from the small town where she grew up—she graduated from college, moved to Boston, and started her own business. And when she feels a spark with a gorgeous neurosurgeon named Ryle Kincaid, everything in Lily’s life seems too good to be true.\r\n\r\nRyle is assertive, stubborn, maybe even a little arrogant. He’s also sensitive, brilliant, and has a total soft spot for Lily. And the way he looks in scrubs certainly doesn’t hurt. Lily can’t get him out of her head. But Ryle’s complete aversion to relationships is disturbing. Even as Lily finds herself becoming the exception to his “no dating” rule, she can’t help but wonder what made him that way in the first place.\r\n\r\nAs questions about her new relationship overwhelm her, so do thoughts of Atlas Corrigan—her first love and a link to the past she left behind. He was her kindred spirit, her protector. When Atlas suddenly reappears, everything Lily has built with Ryle is threatened.\r\n\r\nAn honest, evocative, and tender novel, It Ends with Us is “a glorious and touching read, a forever keeper. The kind of book that gets handed down” (USA TODAY).', 'romance'),
(48, 'THE LOVE HYPOTHESIS', '9780593336823', 'Ali Hazelwood', 'Penguin Publishing Group', '34.95', 654, '6263015138eb3.jpg', 'The Instant New York Times Bestseller and TikTok Sensation!\r\n\r\nAs seen on THE VIEW!\r\n\r\nA BuzzFeed Best Summer Read of 2021\r\n\r\nWhen a fake relationship between scientists meets the irresistible force of attraction, it throws one woman\'\'s carefully calculated theories on love into chaos.\r\n\r\nAs a third-year Ph.D. candidate, Olive Smith doesn\'\'t believe in lasting romantic relationships--but her best friend does, and that\'\'s what got her into this situation. Convincing Anh that Olive is dating and well on her way to a happily ever after was always going to take more than hand-wavy Jedi mind tricks: Scientists require proof. So, like any self-respecting biologist, Olive panics and kisses the first man she sees.\r\n\r\nThat man is none other than Adam Carlsen, a young hotshot professor--and well-known ass. Which is why Olive is positively floored when Stanford\'\'s reigning lab tyrant agrees to keep her charade a secret and be her fake boyfriend. But when a big science conference goes haywire, putting Olive\'\'s career on the Bunsen burner, Adam surprises her again with his unyielding support and even more unyielding...six-pack abs.\r\n\r\nSuddenly their little experiment feels dangerously close to combustion. And Olive discovers that the only thing more complicated than a hypothesis on love is putting her own heart under the microscope.', 'romance'),
(49, 'LOVE AND OTHER WORDS', '9781501128011', 'Christina Lauren', 'Gallery Books', '22.99', 998, '6263019527b6f.jpg', 'After a decade apart, childhood sweethearts reconnect by chance in New York Times bestselling author Christina Lauren’s touching, romantic novel Love and Other Words…how many words will it take for them to figure out where it all went wrong?\r\n\r\nThe story of the heart can never be unwritten.\r\n\r\nMacy Sorensen is settling into an ambitious if emotionally tepid routine: work hard as a new pediatrics resident, plan her wedding to an older, financially secure man, keep her head down and heart tucked away.\r\n\r\nBut when she runs into Elliot Petropoulos—the first and only love of her life—the careful bubble she’s constructed begins to dissolve. Once upon a time, Elliot was Macy’s entire world—growing from her gangly bookish friend into the man who coaxed her heart open again after the loss of her mother...only to break it on the very night he declared his love for her.\r\n\r\nTold in alternating timelines between Then and Now, teenage Elliot and Macy grow from friends to much more—spending weekends and lazy summers together in a house outside of San Francisco devouring books, sharing favorite words, and talking through their growing pains and triumphs. As adults, they have become strangers to one another until their chance reunion. Although their memories are obscured by the agony of what happened that night so many years ago, Elliot will come to understand the truth behind Macy’s decade-long silence, and will have to overcome the past and himself to revive her faith in the possibility of an all-consuming love.', 'romance'),
(50, 'Bridgerton [tv Tie-in]: The Duke And I', '9780063078697', 'Julia Quinn', 'HarperCollins', '34.99', 658, '626301e7ae328.jpg', 'A #1 New York Times Bestseller \r\n\r\nFrom #1 New York Times bestselling author Julia Quinn comes the story of Daphne Bridgerton, in the first of her beloved Regency-set novels featuring the charming, powerful Bridgerton family, now a series created by Shondaland for Netflix.\r\n\r\nIn the ballrooms and drawing rooms of Regency London, rules abound. From their earliest days, children of aristocrats learn how to address an earl and curtsey before a prince—while other dictates of the ton are unspoken yet universally understood. A proper duke should be imperious and aloof. A young, marriageable lady should be amiable…but not too amiable.\r\n\r\nDaphne Bridgerton has always failed at the latter. The fourth of eight siblings in her close-knit family, she has formed friendships with the most eligible young men in London. Everyone likes Daphne for her kindness and wit. But no one truly desires her. She is simply too deuced honest for that, too unwilling to play the romantic games that captivate gentlemen.\r\n\r\nAmiability is not a characteristic shared by Simon Basset, Duke of Hastings. Recently returned to England from abroad, he intends to shun both marriage and society—just as his callous father shunned Simon throughout his painful childhood. Yet an encounter with his best friend’s sister offers another option. If Daphne agrees to a fake courtship, Simon can deter the mamas who parade their daughters before him. Daphne, meanwhile, will see her prospects and her reputation soar.\r\n\r\nThe plan works like a charm—at first. But amid the glittering, gossipy, cut-throat world of London’s elite, there is only one certainty: love ignores every rule...\r\n\r\nThis novel includes the 2nd epilogue, a peek at the story after the story.', 'romance'),
(51, 'The Scum Villain\'s Self-saving System: Ren Zha Fan', '9781648279225', 'Mo Xiang Tong Xiu', 'Seven Seas Entertainment', '15.95', 54, '6263027d68715.jpg', 'Three years have passed since Shen Qingqiu betrayed Luo Binghe, and now there are only two years left before his “deceased” disciple rises from the dead to claim his bloody glory as the protagonist. At least, that’s how the story is supposed to go.\r\n \r\nIn the midst of investigating a mysterious plague, Shen Qingqiu discovers that his actions have irreparably altered the plot—Luo Binghe has returned all too soon and Shen Qingqiu’s brilliant escape plan isn’t even ready yet! Worse, Shen Qingqiu can no longer predict his young disciple’s actions.\r\n \r\nThe only thing that hasn’t changed is Luo Binghe’s intense fixation on Shen Qingqiu himself, but even this obsession may be more than it seems. Not that Shen Qingqiu has the time to puzzle through all the inconsistencies. There are various parties at play in the changing plot, and if he doesn’t act fast, he may face a fate far worse than death.\r\n\r\nREAD LESS', 'romance'),
(52, 'AN OFFER FROM A GENTLEMAN: BRIDGERTON', '29.99', 'Julia Quinn', 'HarperCollins', '29.88', 543, '626302df4921a.jpg', 'A New York Times Bestseller\r\n\r\nFrom #1 New York Times bestselling author Julia Quinn comes the story of Benedict Bridgerton, in the third of her beloved Regency-set novels featuring the charming, powerful Bridgerton family, now a series created by Shondaland for Netflix.\r\n\r\nBENEDICT’S STORY\r\n\r\nSophie Beckett never dreamed she’d be able to sneak into Lady Bridgerton’s famed masquerade ball—or that “Prince Charming” would be waiting there for her! Though the daughter of an earl, Sophie has been relegated to the role of servant by her disdainful stepmother. But now, spinning in the strong arms of the debonair and devastatingly handsome Benedict Bridgerton, she feels like royalty. Alas, she knows all enchantments must end when the clock strikes midnight.\r\n\r\nEver since that magical night, a radiant vision in silver has blinded Benedict to the attractions of any other—except, perhaps, this alluring and oddly familiar beauty dressed in housemaid’s garb whom he feels compelled to rescue from a most disagreeable situation. He has sworn to find and wed his mystery miss, but this breathtaking maid makes him weak with wanting her. Yet, if he offers her his heart, will Benedict sacrifice his only chance for a fairy-tale love?', 'romance');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `totalprice` decimal(10,2) NOT NULL DEFAULT 0.00,
  `cartstatus` varchar(15) NOT NULL DEFAULT 'not checkout'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `userID`, `totalprice`, `cartstatus`) VALUES
(3, 5, '0.00', 'not checkout');

-- --------------------------------------------------------

--
-- Table structure for table `cartitem`
--

CREATE TABLE `cartitem` (
  `cartitemID` int(11) NOT NULL,
  `cartID` int(11) NOT NULL,
  `bookID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cartitemprice` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `cartID` int(11) NOT NULL,
  `orderdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `orderstatus` varchar(10) NOT NULL,
  `shippingaddress` varchar(50) NOT NULL,
  `total price` decimal(10,2) NOT NULL,
  `paymentmethod` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `return`
--

CREATE TABLE `return` (
  `returnID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `returndate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `returnstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewID` int(11) NOT NULL,
  `bookID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `reviewdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reviewcontent` varchar(300) NOT NULL,
  `reviewmark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `newsletter` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `firstname`, `lastname`, `phone`, `address`, `email`, `newsletter`) VALUES
(1, 'phgthanhng', '123456', 'Phuong Thanh', 'Nguyen', '438-680-289', '5062 Avenue Victoria', 'anc@gmail.com', 'no'),
(2, 'chilcj', 'password', 'Chilka', 'Castro', '438-397-6747', '7704 ruer Verdier Saint Leonard Quebec H12S2H9', 'chilcjcastro@yahoo.ca', 'no'),
(3, 'jiahui', '123456', 'Jiahui', 'Xia', '438-132-6727', '821 Sainte Croix Ave, Saint-Laurent, Quebec H4L 3X', 'jiahuixia@gmail.com', 'no'),
(4, 'huizi', '$2y$10$DZoaugi6SaJmxuz6WHDTmuDEIWMYyrSg6Go5bKmz2jR1TGDtnoZdq', 'huizi', 'Xia', '757-868-4367', '1190 Rue Egan', '222@gmail.com', 'yes'),
(5, 'testuser', '$2y$10$GNixtkeBlGtTdqZiiXwtvuXBeG7UIgSS8F8lcH4NFeha.DyqA897a', 'test', 'user', '438-398-9138', '666 hell bound', 'testuser@email.com', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlistID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wishlistitem`
--

CREATE TABLE `wishlistitem` (
  `wishlist_itemID` int(11) NOT NULL,
  `wishlistID` int(11) NOT NULL,
  `bookID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `FK_cart_customer` (`userID`);

--
-- Indexes for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD PRIMARY KEY (`cartitemID`),
  ADD KEY `FK_cartitem_cart` (`cartID`),
  ADD KEY `FK_cartitem_book` (`bookID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `FK_order_customer` (`userID`),
  ADD KEY `FK_order_cart` (`cartID`);

--
-- Indexes for table `return`
--
ALTER TABLE `return`
  ADD PRIMARY KEY (`returnID`),
  ADD KEY `FK_return_order` (`orderID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewID`),
  ADD KEY `FK_review_customer` (`userID`),
  ADD KEY `FK_review_book` (`bookID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlistID`),
  ADD KEY `FK_wishlist_customer` (`userID`);

--
-- Indexes for table `wishlistitem`
--
ALTER TABLE `wishlistitem`
  ADD PRIMARY KEY (`wishlist_itemID`),
  ADD KEY `FK_wishlistitem_book` (`bookID`),
  ADD KEY `FK_wishlistitem_wishlist` (`wishlistID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cartitem`
--
ALTER TABLE `cartitem`
  MODIFY `cartitemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `return`
--
ALTER TABLE `return`
  MODIFY `returnID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlistID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlistitem`
--
ALTER TABLE `wishlistitem`
  MODIFY `wishlist_itemID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_cart_user` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD CONSTRAINT `FK_cartitem_book` FOREIGN KEY (`bookID`) REFERENCES `book` (`bookID`),
  ADD CONSTRAINT `FK_cartitem_cart` FOREIGN KEY (`cartID`) REFERENCES `cart` (`cartID`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_order_cart` FOREIGN KEY (`cartID`) REFERENCES `cart` (`cartID`),
  ADD CONSTRAINT `FK_order_user` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `return`
--
ALTER TABLE `return`
  ADD CONSTRAINT `FK_return_order` FOREIGN KEY (`orderID`) REFERENCES `order` (`orderID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_review_book` FOREIGN KEY (`bookID`) REFERENCES `book` (`bookID`),
  ADD CONSTRAINT `FK_review_user` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `FK_wishlist_user` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `wishlistitem`
--
ALTER TABLE `wishlistitem`
  ADD CONSTRAINT `FK_wishlistitem_book` FOREIGN KEY (`bookID`) REFERENCES `book` (`bookID`),
  ADD CONSTRAINT `FK_wishlistitem_wishlist` FOREIGN KEY (`wishlistID`) REFERENCES `wishlist` (`wishlistID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
