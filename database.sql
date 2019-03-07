CREATE DATABASE IF NOT EXISTS `users` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `users`;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
