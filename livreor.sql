-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 29 mai 2020 à 09:03
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus feugiat aliquam justo id suscipit. Nunc ac lectus sed dui bibendum dignissim elementum ac ante. Morbi quis eros at metus bibendum suscipit. Sed vitae ultricies nunc, vel iaculis dolor. Morbi cursus molestie dui, id pellentesque dui hendrerit vitae. Ut tempor ut mauris vitae elementum. Nunc eu enim purus. Quisque vitae nisi et tellus ullamcorper malesuada. Suspendisse sit amet molestie quam. Phasellus sed condimentum arcu, id condimentum augue. Proin augue leo, hendrerit et mattis sit amet, tincidunt non est. Vivamus non lorem id purus tincidunt blandit. Integer imperdiet pellentesque enim, egestas feugiat lacus elementum nec. Suspendisse vel neque tincidunt, facilisis purus a, finibus diam. Maecenas nunc dui, hendrerit eu condimentum non, vehicula vel tellus.', 1, '2020-05-25 10:50:32'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rhoncus ipsum et sapien faucibus, eget ornare sapien elementum. Aliquam eu augue sit amet odio sagittis iaculis. Nunc pellentesque in eros tincidunt posuere. Cras vel ex at ipsum laoreet malesuada. Fusce ornare enim nec ligula ultricies iaculis. Duis mattis dolor eros, ac consequat risus sodales a. Nulla scelerisque dui eget tortor hendrerit pharetra.', 2, '2020-05-26 10:51:50'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac lacus id enim egestas vestibulum at sed diam. Proin et.', 3, '2020-05-27 10:53:10'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at.', 4, '2020-05-28 10:54:34'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a neque arcu. Proin quam lorem, gravida quis pellentesque vitae, tincidunt ac odio. Donec eget pretium ante, et rhoncus felis. Praesent sed bibendum risus. Duis ante ligula, lobortis sed mi a, convallis pharetra sem. Sed auctor quis ante dignissim aliquet. Donec erat quam, auctor eget ante nec, blandit elementum magna. Proin nisl magna, cursus tristique viverra ut, scelerisque vitae libero. Pellentesque ullamcorper dolor ligula, id pharetra sem condimentum nec. Nam non lectus dolor. Aenean enim tellus, vulputate eu erat sed, vehicula malesuada nibh. In consectetur non sem id condimentum. Aenean suscipit risus eros, eu volutpat nisl malesuada nec. Donec et suscipit tellus. Aliquam in ipsum et dolor feugiat vulputate.', 2, '2020-05-29 10:56:39'),
(6, 'Vestibulum vitae auctor ipsum. Suspendisse odio massa, dictum vel egestas et, ultricies ac est. Morbi eget nisl nibh. Proin pulvinar dui sit amet ante sollicitudin, et ultricies ante vulputate. Integer metus nibh, tristique non nulla nec, pharetra condimentum libero. Maecenas condimentum justo non velit varius lobortis. Donec mollis ipsum pretium lorem maximus, efficitur volutpat lorem faucibus. Donec in odio consequat, eleifend tellus ut, accumsan diam.', 1, '2020-05-30 10:57:49'),
(7, 'Duis mattis venenatis mi sit amet luctus. Quisque a ex scelerisque, euismod risus a, rhoncus augue. Ut tempor libero et tristique posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut porttitor lorem gravida neque sollicitudin fringilla. Pellentesque tellus lacus, vehicula ac quam in, egestas tempus lectus. Proin consequat vehicula ipsum, vitae tristique dui interdum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin orci velit, porta ut pretium id, congue in mauris. Ut risus orci, dapibus quis semper id, scelerisque in erat.', 3, '2020-05-29 10:58:31');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'hulk', '$2y$10$c9y7QwFX65EWAe8WIpOMDu3pvLP1zrUK302THXLO4VMqsBtQiAPVC'),
(2, 'cariboo', '$2y$10$HkUzZhP0t5gcHxo2fAH31.z/2VJZlbRWezZH5k9XB/nGszQdo4vtW'),
(3, 'shelly', '$2y$10$1B7fuBIcCWqmLbAgpA0hsuiZiK0jV.SmUS7UtU3q9nbIM7b5C5M72'),
(4, 'Michou', '$2y$10$sLUsLa/oVkmI8ll/QRzyauMw6KWf.Ff0gNLC/uHLT/IryFLTs.JHG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
