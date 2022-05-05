-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2022 at 04:58 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_comment` int(11) NOT NULL,
  `id_posts` int(11) DEFAULT NULL,
  `auteur` varchar(50) DEFAULT NULL,
  `contenu` text NOT NULL,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`id_comment`, `id_posts`, `auteur`, `contenu`, `date_creation`) VALUES
(28, 19, 'Amichou', 'On constate encore l\'énorme travail qui reste à faire sur ce continent en matière d\'agriculture.', '2022-04-18 15:03:37'),
(29, 17, 'Amir', 'Je demande quand est ce l\'Afrique va remporter la coupe du monde?', '2022-04-18 15:04:44'),
(30, 19, 'test', 'commentaire', '2022-04-25 19:30:59'),
(34, 19, 'Amirou', 'l\'article est interessant', '2022-04-26 13:44:44'),
(35, 17, 'Amina', 'On espère gagner la coupe haha!!!!!', '2022-04-26 15:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `titre` varchar(100) NOT NULL,
  `chapo` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `auteur` varchar(50) DEFAULT NULL,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `id_user`, `titre`, `chapo`, `contenu`, `auteur`, `date_creation`) VALUES
(14, 29, 'Développement de l\'Afrique', 'La croissance économique en Afrique en 2019 est estimée à 3,2 %, soit un peu moins que le taux de croissance de 3,4 % enregistré en 2018. ', 'La croissance économique en Afrique en 2019 est estimée à 3,2 %, soit un peu moins que le taux de croissance de 3,4 % enregistré en 2018. La Côte d\'Ivoire, l\'Éthiopie, la Mauritanie, le Rwanda et la Tanzanie sont en tête et comptent parmi les économies qui affichent les taux de croissances les plus élevés au monde.', 'Amirou', '2022-04-01 17:10:01'),
(15, 31, 'Le développement de l\'Afrique, affaire de volonté politique', 'Peut-on favoriser en Afrique un développement durable ? Ma réponse est oui, sous trois conditions majeures. ', 'Peut-on favoriser en Afrique un développement durable ? Ma réponse est oui, sous trois conditions majeures. La première est de donner la priorité absolue à tout ce qui touche la gouvernance : guerre ou paix, sécurité civile, nature des États, stabilité administrative, juridique et fiscale, pratique de la démocratie. La deuxième est d’accepter une remise en cause complète de tous les concepts, procédures et instruments dont se servent aujourd’hui les pays riches pour « aider » les pauvres. La troisième est d’accepter l’idée que le développement ne se parachute pas, et ne peut venir de l’extérieur. Il ne s’affirme que lorsqu’il est autocentré et puissamment piloté par une volonté nationale forte, éclairée et légitime. Dans le continent qui nous intéresse, le seul exemple connu d’un décollage réussi ayant pris appui sur l’aide occidentale est l’île Maurice.', 'Aicha', '2022-04-01 17:12:07'),
(16, 29, 'Sport en Afrique', 'LE FOOTBALL EST LE SPORT LE PLUS POPULAIRE EN AFRIQUE', 'Du nord au sud, de l\'est à l\'ouest de l\'Afrique, le football est sans aucun doute le sport le plus populaire et le plus apprécié d\'Afrique.\r\n\r\nLe football est un jeu incroyablement passionnant dont les origines remontent aux années 1800, lorsque les colonialistes britanniques, français et portugais ont introduit ce sport en Afrique.\r\n\r\nContrairement à d\'autres sports, le football nécessite des ressources minimales et c\'est pour cette raison qu\'il a pénétré dans toutes les régions d\'Afrique. Il est courant de trouver des jeunes sur tout le continent, y compris dans les zones rurales, qui aiment jouer au football.', 'Amichou', '2022-04-01 17:13:45'),
(17, 31, 'Quel pays d\'Afrique est qualifié pour la Coupe du Monde ?', 'Le Sénégal, tombeur de l\'Égypte comme en finale de la Coupe d\'Afrique des nations, le Cameroun, renversant contre l\'Algérie, le Maroc, la Tunisie et le Ghana', 'A l’issue des barrages retour disputés ce mardi, on connaît les 5 qualifiés africains pour la Coupe du monde 2022, qui aura lieu du 21 novembre au 18 décembre prochains au Qatar. Il s’agit du Sénégal, champion d’Afrique en titre, du Maroc et de la Tunisie, tous présents lors de la dernière édition, ainsi que du Cameroun et du Ghana, deux sélections dont la dernière participation remontait à 2014.\r\n\r\nParmi ces qualifiés, le Cameroun, qualifié à la dernière minute contre l’Algérie (1-2, a.p.), et le Ghana (1-1 au Nigeria) ont réalisé la surprise et se qualifient en vertu de la règle du but à l’extérieur. Récent vainqueur de la CAN, le Sénégal a de son côté de nouveau remporté le choc contre l’Egypte, aux tirs au but, (1-0, 3-1 tab). Le Maroc (4-1 contre la RDC) et la Tunisie (0-0 face au Mali) ont quant à eux fait respecter la logique avec plus ou moins de maîtrise et de sérénité.', 'Mamie', '2022-04-01 17:16:21'),
(19, 31, 'Agricultures africaines', 'La croissance agricole en Afrique s\'est faite principalement par l\'expansion des surfaces cultivées et par l\'utilisation d\'une main-d\'œuvre agricole plus abondante', '                    L’Afrique possède une grande variété de zones agro-écologiques, qui vont des forêts ombrophiles marquées par deux saisons des pluies à une végétation relativement clairsemée, sèche et aride, arrosée une fois l’an. Si cette diversité constitue un énorme atout, elle représente tout de même un grand défi pour le développement agricole de l’Afrique.\r\n\r\nD’une part, elle offre un immense potentiel en termes de denrées et produits agricoles susceptibles d’être produits et commercialisés sur les marchés intérieurs et extérieurs. D’autre part, cette diversité exclut toute solution générale aux problèmes que pose le développement agricole sur l’ensemble du continent. Par conséquent, la programmation et la mise en œuvre d’interventions dans ce secteur doivent être adaptées aux conditions propres à chaque zone agro-écologique et à la situation socioéconomique des ménages ruraux vivant dans les différents pays du continent.                    ', 'Amirou', '2022-04-01 17:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`) VALUES
(8, 14, 1),
(9, 15, 2),
(10, 16, 3),
(17, 17, 3),
(20, 19, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `date_creation`) VALUES
(1, 'Actualités', '2022-03-08 14:34:02'),
(2, 'Politique', '2022-03-08 14:34:02'),
(3, 'Sport', '2022-03-08 14:36:23'),
(4, 'Tourisme', '2022-03-08 14:36:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `admin`, `email`, `password`) VALUES
(29, 'admin', 1, 'amso@hotmail.com', '$2y$10$a64lojNuvS1CbMoUjqwkxeFhGifV68x.SIU/C7TiNuMb4t4d1zga2'),
(30, 'Amichou', 0, 'amich@hotmail.fr', '$2y$10$pmgHuLjZMkAiw6EgFG35Q.ank63Q7r32yTd0ajh989x8PtxBPBnvK'),
(31, 'Atia', 1, 'atia@hotmail.fr', '$2y$10$4TTdQs4HnNuBZvepj6fn4./6NDaYxbBSwBjt6Kr4wGdHGPs4RtV76'),
(32, 'Mad', 0, 'mad@gmail.com', '$2y$10$JF9KCqW/Q.YYk3ZOxmYQiu/0JDqmATPLDbcYd2Lv4w9N.braVn.kC'),
(33, 'Coum', 0, 'coum@yahoo.fr', '$2y$10$eDrQf9eBPkXOHDPP2EO1I.kdAqpgxXyTxQ5Oa1J7AbCs//8KGwnOy'),
(34, 'Prince', 0, 'prince@hotmail.fr', '$2y$10$KXfpgrYoUZhYzrBjEecnZuZ5OB2exnLaDMgqP0fHq9DOV/VO/8XU.'),
(35, 'coumba', 0, 'coumba@hotmail.fr', '$2y$10$wynf6y9YCbF2yxo2xO0KP.zuENr25esZerwcOaOB.nqDdEXNI11vG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_post` (`id_posts`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag_id` (`tag_id`),
  ADD KEY `post_tag_ibfk_1` (`post_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_posts`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_tag_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
