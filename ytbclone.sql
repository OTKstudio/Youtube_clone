-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 06 mars 2022 à 20:18
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ytbclone`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE `abonnement` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `channelid` varchar(255) NOT NULL,
  `channeltitle` varchar(255) NOT NULL,
  `videocount` int(11) NOT NULL,
  `statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`id`, `userid`, `channelid`, `channeltitle`, `videocount`, `statut`) VALUES
(1, 'naomi', 'UC5husyZ7HE5RN4xrg6WwrcA', 'WATOP', 0, 'abonne'),
(8, 'brecht', 'UC5husyZ7HE5RN4xrg6WwrcA', 'WATOP', 10, 'abonne');

-- --------------------------------------------------------

--
-- Structure de la table `all_video`
--

CREATE TABLE `all_video` (
  `id` int(5) NOT NULL,
  `videoid` varchar(255) NOT NULL,
  `videotitle` varchar(350) NOT NULL,
  `thumburl` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `channelid` varchar(255) NOT NULL,
  `channeltitle` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `others` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `all_video`
--

INSERT INTO `all_video` (`id`, `videoid`, `videotitle`, `thumburl`, `description`, `channelid`, `channeltitle`, `date`, `others`) VALUES
(2, 'oaP3Q7f4GHU', 'THE FIGHT RULES Bande Annonce VF (2022)', 'https://i.ytimg.com/vi/oaP3Q7f4GHU/hqdefault.jpg', 'THE FIGHT RULES Bande Annonce VF (2022) Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu THE FIGHT RULES Bande Annonce ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-02-04 20:21:51', ''),
(3, '-vIvnGclNDo', 'LES DERNIERS JOURS DE PTOLEMY GREY Bande Annonce VF (2022)', 'https://i.ytimg.com/vi/-vIvnGclNDo/hqdefault.jpg', 'LES DERNIERS JOURS DE PTOLEMY GREY Bande Annonce VF (2022) Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu LES ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-02-04 17:26:45', ''),
(5, 'Dr2AA7AD6Y4', 'SANS RÉPIT Bande Annonce (2022)', 'https://i.ytimg.com/vi/Dr2AA7AD6Y4/hqdefault.jpg', 'SANS RÉPIT Bande Annonce VF (2022) Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu SANS RÉPIT Bande Annonce VF (2022) ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-02-04 10:23:34', ''),
(6, 'j4xNUmdfKbI', 'OLD HENRY Bande Annonce (2022)', 'https://i.ytimg.com/vi/j4xNUmdfKbI/hqdefault.jpg', 'OLD HENRY Bande Annonce (2022) Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu OLD HENRY Bande Annonce (2022) Tim ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-02-03 17:52:32', ''),
(7, 'ngAmkPJ6pRM', 'MORGUE Bande Annonce VF (2022)', 'https://i.ytimg.com/vi/ngAmkPJ6pRM/hqdefault.jpg', 'MORGUE Bande Annonce VF (2022) Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu MORGUE Bande Annonce VF (2022) © 2022 ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-02-03 11:11:41', ''),
(8, '8WtS_s3fECE', 'PARALLÈLES Bande Annonce (2022) Nouvelle', 'https://i.ytimg.com/vi/8WtS_s3fECE/hqdefault.jpg', 'PARALLÈLES Bande Annonce VF (2022) Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu PARALLÈLES Bande Annonce VF (2022) ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-02-02 12:40:13', ''),
(9, 'QZ2HLOpl6ig', 'SANS ISSUE Bande Annonce VF (2022)', 'https://i.ytimg.com/vi/QZ2HLOpl6ig/hqdefault.jpg', 'SANS ISSUE Bande Annonce VF (2022) Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu SANS ISSUE Bande Annonce VF (2022) ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-02-01 17:16:47', ''),
(10, 'NNnyP9qdSIE', 'LE PRODIGE INCONNU Bande Annonce VF (2022)', 'https://i.ytimg.com/vi/NNnyP9qdSIE/hqdefault.jpg', 'LE PRODIGE INCONNU Bande Annonce VF (2022) Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu LE PRODIGE INCONNU Bande ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-02-01 11:09:12', ''),
(11, 'MolJAkqYHGI', 'MASSACRE À LA TRONÇONNEUSE Bande Annonce VF (2022)', 'https://i.ytimg.com/vi/MolJAkqYHGI/hqdefault.jpg', 'MASSACRE À LA TRONÇONNEUSE Bande Annonce VF (2022) Film Netflix © 2022 @Netflix France.', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-01-31 17:39:48', ''),
(12, 'XYzVUSeYFB8', 'LA BRIGADE Bande Annonce (2022)', 'https://i.ytimg.com/vi/XYzVUSeYFB8/hqdefault.jpg', 'LA BRIGADE Bande Annonce VF (2022) Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu LA BRIGADE Bande Annonce VF (2022) ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-01-31 09:49:43', ''),
(13, 'VfjdO20zyy8', 'AN IMPERFECT MURDER Bande Annonce VF (2022) Alec Baldwin', 'https://i.ytimg.com/vi/VfjdO20zyy8/hqdefault.jpg', 'Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu AN IMPERFECT MURDER Bande Annonce VF (2022) Vera Lockman, une actrice, ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-01-30 12:37:53', ''),
(14, 'hSqwkEz0RNw', 'SOUL FOOD Bande Annonce VF (2022)', 'https://i.ytimg.com/vi/hSqwkEz0RNw/hqdefault.jpg', 'SOUL FOOD Bande Annonce VF (2022) Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu SOUL FOOD Bande Annonce VF (2022) ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-01-29 15:06:22', ''),
(15, 'ZEwj4NDWJNc', 'L&#39;ÂGE DE GLACE : Les Aventures De Buck Wild Bande Annonce VF (2022)', 'https://i.ytimg.com/vi/ZEwj4NDWJNc/hqdefault.jpg', 'Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu L\'ÂGE DE GLACE : Les Aventures De Buck Wild Bande Annonce VF (2022) L\'ÂGE ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-01-28 19:06:31', ''),
(16, '-ud3QmOeyQk', 'UNCHARTED Bande Annonce VF (2022) Finale', 'https://i.ytimg.com/vi/-ud3QmOeyQk/hqdefault.jpg', 'UNCHARTED Bande Annonce VF (2022) Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu UNCHARTED Le Film Bande Annonce VF ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-01-28 16:46:46', ''),
(17, 'jZ5kUGoWAgA', 'ALL OF US ARE DEAD Bande Annonce VF (2022) Nouvelle', 'https://i.ytimg.com/vi/jZ5kUGoWAgA/hqdefault.jpg', 'Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu ALL OF US ARE DEAD Bande Annonce VF (2022) ALL OF US ARE DEAD Bande ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-01-28 16:00:27', ''),
(18, '-jeSwQqGpHo', 'HOME TEAM Bande Annonce VF (2022) NOUVELLE', 'https://i.ytimg.com/vi/-jeSwQqGpHo/hqdefault.jpg', 'Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu HOME TEAM Bande Annonce VF (2022) HOME TEAM Bande Annonce VF (2022) ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-01-28 12:10:49', ''),
(19, 'ySF7ts9PVAI', 'LE TEMPS DES SECRETS Bande Annonce VF (2022)', 'https://i.ytimg.com/vi/ySF7ts9PVAI/hqdefault.jpg', 'Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu LE TEMPS DES SECRETS Bande Annonce VF (2022) LE TEMPS DES SECRETS ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-01-28 09:51:32', ''),
(20, 'gp9qf5rFu3Q', 'RÉDEMPTION Bande Annonce VF (2022) Tainted', 'https://i.ytimg.com/vi/gp9qf5rFu3Q/hqdefault.jpg', 'Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu RÉDEMPTION Bande Annonce VF (2022) Tainted RÉDEMPTION Bande Annonce ...', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-01-27 15:23:30', ''),
(23, 'vInBJVULS1M', 'THE LOST DAUGHTER Bande Annonce VF (2021) Nouvelle', 'https://i.ytimg.com/vi/vInBJVULS1M/hqdefault.jpg', 'THE LOST DAUGHTER Bande Annonce VF (2021) © 2021 @Netflix France.', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2022-01-02 15:01:16', ''),
(24, 'ziYzoQE4rVE', 'DOCTOR STRANGE 2 Bande Annonce VF (2022)', 'https://i.ytimg.com/vi/ziYzoQE4rVE/hqdefault.jpg', 'DOCTOR STRANGE 2 Bande Annonce VF (2022) © 2022 @Marvel FR.', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2021-12-22 15:31:37', ''),
(26, '____5Mo9e-s', 'BUZZ L&#39;ECLAIR Bande Annonce VF (2022) Disney Pixar', 'https://i.ytimg.com/vi/____5Mo9e-s/hqdefault.jpg', 'BUZZ L\'ECLAIR Bande Annonce VF (2022) © 2022 @Disney FR Abonne-Toi à la Chaîne http://bit.ly/2FKhdXu.', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', '2021-10-27 11:35:22', ''),
(28, 'f_zpcGKgXgw', 'Ed Sheeran – Afterglow [Acapella]', 'https://i.ytimg.com/vi/f_zpcGKgXgw/hqdefault.jpg', 'The new album \"=\" is out now - listen here: https://es.lnk.to/equals Subscribe to the Ed Sheeran channel for all the best and latest ...', 'UC0C-w0YjGpqDXGB8IHb662A', 'Ed Sheeran', '2021-12-21 11:00:30', ''),
(33, 'Dhk8CKwHHfs', '“Merry Christmas” with Elton John is out this Friday. Pre-order it or pre-save it now x #Shorts', 'https://i.ytimg.com/vi/Dhk8CKwHHfs/hqdefault.jpg', 'Pre-order or pre-save \"Merry Christmas\" with Elton John - out December 3rd: https://es.lnk.to/Merry-Christmas Subscribe to the Ed ...', 'UC0C-w0YjGpqDXGB8IHb662A', 'Ed Sheeran', '2021-11-29 09:02:51', ''),
(35, 'lXwp45hgXck', 'Ed Sheeran - Overpass Graffiti (Live from SNL)', 'https://i.ytimg.com/vi/lXwp45hgXck/hqdefault.jpg', 'The new album \"=\" is out now - listen here: https://es.lnk.to/equals Subscribe to the Ed Sheeran channel for all the best and latest ...', 'UC0C-w0YjGpqDXGB8IHb662A', 'Ed Sheeran', '2021-11-20 16:00:27', ''),
(37, '8DtlsMVpLms', 'Ed Sheeran - Deezer Session live at the Centre Pompidou', 'https://i.ytimg.com/vi/8DtlsMVpLms/hqdefault.jpg', 'Listen on Deezer here: https://deezer.lnk.to/DeezerSessionsES Subscribe to Ed\'s channel: http://bit.ly/SubscribeToEdSheeran ...', 'UC0C-w0YjGpqDXGB8IHb662A', 'Ed Sheeran', '2021-11-17 09:00:53', ''),
(40, 'Bms39BUQBFw', 'Ed Sheeran - Bad Habits [Official Lyric Video]', 'https://i.ytimg.com/vi/Bms39BUQBFw/hqdefault.jpg', 'Ed Sheeran - Bad Habits [Official Lyric Video] The new album \"=\" is out now - listen here: https://es.lnk.to/equals Subscribe to the ...', 'UC0C-w0YjGpqDXGB8IHb662A', 'Ed Sheeran', '2021-10-29 02:02:42', ''),
(42, 'P_kRTqaD8Mc', 'Ed Sheeran - Tides [Official Lyric Video]', 'https://i.ytimg.com/vi/P_kRTqaD8Mc/hqdefault.jpg', 'Ed Sheeran - Tides [Official Lyric Video] The new album \"=\" is out now - listen here: https://es.lnk.to/equals Subscribe to the Ed ...', 'UC0C-w0YjGpqDXGB8IHb662A', 'Ed Sheeran', '2021-10-29 02:03:17', ''),
(46, 'wQpU_v2cH_w', 'Ed Sheeran - Love In Slow Motion [Official Lyric Video]', 'https://i.ytimg.com/vi/wQpU_v2cH_w/hqdefault.jpg', 'Ed Sheeran - Love In Slow Motion [Official Lyric Video] The new album \"=\" is out now - listen here: https://es.lnk.to/equals ...', 'UC0C-w0YjGpqDXGB8IHb662A', 'Ed Sheeran', '2021-10-29 02:00:26', ''),
(48, 'pVqX2u6YWqI', 'Ed Sheeran - Visiting Hours [Official Lyric Video]', 'https://i.ytimg.com/vi/pVqX2u6YWqI/hqdefault.jpg', 'Ed Sheeran - Visiting Hours [Official Lyric Video] The new album \"=\" is out now - listen here: https://es.lnk.to/equals Subscribe to ...', 'UC0C-w0YjGpqDXGB8IHb662A', 'Ed Sheeran', '2021-10-29 02:00:07', ''),
(50, 'm9f4XtNj1Vg', 'Ed Sheeran - The Joker And The Queen [Official Lyric Video]', 'https://i.ytimg.com/vi/m9f4XtNj1Vg/hqdefault.jpg', 'Ed Sheeran - The Joker And The Queen [Official Lyric Video] The new album \"=\" is out now - listen here: https://es.lnk.to/equals ...', 'UC0C-w0YjGpqDXGB8IHb662A', 'Ed Sheeran', '2021-10-29 02:02:06', ''),
(53, 'YAdm-ipeS84', 'Voici Pourquoi les Coyotes Sont d’Ingénieux Chasseurs', 'https://i.ytimg.com/vi/YAdm-ipeS84/hqdefault.jpg', '', 'UC5husyZ7HE5RN4xrg6WwrcA', 'WATOP', '2022-02-05 16:00:18', ''),
(54, 'upVziccjrxI', 'L&#39;Araignée Qui a Choqué Tout le Monde', 'https://i.ytimg.com/vi/upVziccjrxI/hqdefault.jpg', '', 'UC5husyZ7HE5RN4xrg6WwrcA', 'WATOP', '2022-02-03 16:00:29', ''),
(55, 'nVWhDArGRvg', 'Ces Animaux se Sont Attaqués à la Mauvaise Proie', 'https://i.ytimg.com/vi/nVWhDArGRvg/hqdefault.jpg', '', 'UC5husyZ7HE5RN4xrg6WwrcA', 'WATOP', '2022-02-01 16:00:36', ''),
(56, 'Xr9bVpRapAQ', 'La Vitesse de ce Prédateur Vous Surprendra', 'https://i.ytimg.com/vi/Xr9bVpRapAQ/hqdefault.jpg', '', 'UC5husyZ7HE5RN4xrg6WwrcA', 'WATOP', '2022-01-29 16:00:17', ''),
(57, 'OPIKyk0STko', 'Les Animaux Vengent Leurs Petits', 'https://i.ytimg.com/vi/OPIKyk0STko/hqdefault.jpg', '', 'UC5husyZ7HE5RN4xrg6WwrcA', 'WATOP', '2022-01-27 16:00:14', ''),
(58, 'Z7YvoPeTV7U', 'C&#39;Est Pourquoi les Loups Détestent les Ours', 'https://i.ytimg.com/vi/Z7YvoPeTV7U/hqdefault.jpg', '', 'UC5husyZ7HE5RN4xrg6WwrcA', 'WATOP', '2022-01-25 16:00:32', ''),
(59, 'bSDufiq_GKg', 'Pourquoi Tous les Animaux Détestent les Aigles ?', 'https://i.ytimg.com/vi/bSDufiq_GKg/hqdefault.jpg', '', 'UC5husyZ7HE5RN4xrg6WwrcA', 'WATOP', '2022-01-22 16:00:24', ''),
(60, '-mMjqIzvokc', 'Voici Pourquoi les Éléphants Détestent les Crocodiles', 'https://i.ytimg.com/vi/-mMjqIzvokc/hqdefault.jpg', '', 'UC5husyZ7HE5RN4xrg6WwrcA', 'WATOP', '2022-01-20 16:00:00', ''),
(61, 'o7xb8aZ76uc', 'Regardez Comment se Défend le Plus Terrifiant des Poissons', 'https://i.ytimg.com/vi/o7xb8aZ76uc/hqdefault.jpg', '', 'UC5husyZ7HE5RN4xrg6WwrcA', 'WATOP', '2022-01-18 16:00:28', ''),
(62, 'owe-jXOphU8', 'Voici Pourquoi on les Appelle les Tueurs de Singes', 'https://i.ytimg.com/vi/owe-jXOphU8/hqdefault.jpg', '', 'UC5husyZ7HE5RN4xrg6WwrcA', 'WATOP', '2022-01-15 16:00:28', '');

-- --------------------------------------------------------

--
-- Structure de la table `channels`
--

CREATE TABLE `channels` (
  `id` int(3) NOT NULL,
  `channelid` varchar(255) NOT NULL,
  `channeltitle` varchar(255) NOT NULL,
  `videocount` int(11) NOT NULL,
  `abonnecount` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `channels`
--

INSERT INTO `channels` (`id`, `channelid`, `channeltitle`, `videocount`, `abonnecount`, `date`) VALUES
(1, 'UC5husyZ7HE5RN4xrg6WwrcA', 'WATOP', 10, 0, NULL),
(2, 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', 21, 0, NULL),
(3, 'UC0C-w0YjGpqDXGB8IHb662A', 'Ed Sheeran', 9, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `history`
--

CREATE TABLE `history` (
  `id` int(5) NOT NULL,
  `videoid` varchar(255) NOT NULL,
  `videotitle` varchar(255) NOT NULL,
  `channelid` varchar(255) NOT NULL,
  `channeltitle` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `thumburl` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `history`
--

INSERT INTO `history` (`id`, `videoid`, `videotitle`, `channelid`, `channeltitle`, `username`, `thumburl`, `date`) VALUES
(1, 'oaP3Q7f4GHU', 'THE FIGHT RULES Bande Annonce VF (2022)', 'UClz394yrcpOnPEHqO4_Gjpg', 'AuCiné', 'brecht tankoua', 'https://i.ytimg.com/vi/oaP3Q7f4GHU/hqdefault.jpg', '2022-02-04'),
(2, 'pVqX2u6YWqI', 'Ed Sheeran - Visiting Hours [Official Lyric Video]', 'UC0C-w0YjGpqDXGB8IHb662A', 'Ed Sheeran', 'brecht tankoua', 'https://i.ytimg.com/vi/pVqX2u6YWqI/hqdefault.jpg', '2021-10-29'),
(3, 'YAdm-ipeS84', 'Voici Pourquoi les Coyotes Sont d’Ingénieux Chasseurs', 'UC5husyZ7HE5RN4xrg6WwrcA', 'WATOP', 'brecht tankoua', 'https://i.ytimg.com/vi/YAdm-ipeS84/hqdefault.jpg', '2022-02-05'),
(4, 'YAdm-ipeS84', 'Voici Pourquoi les Coyotes Sont d’Ingénieux Chasseurs', 'UC5husyZ7HE5RN4xrg6WwrcA', 'WATOP', 'brecht tankoua', 'https://i.ytimg.com/vi/YAdm-ipeS84/hqdefault.jpg', '2022-02-05');

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(3) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `channelid` varchar(255) NOT NULL,
  `channeltitle` varchar(255) NOT NULL,
  `videoadd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id`, `userid`, `channelid`, `channeltitle`, `videoadd`) VALUES
(1, 'Brecht', 'UC5husyZ7HE5RN4xrg6WwrcA', '', 10);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `usermail` varchar(255) NOT NULL,
  `userpicture` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `usermail`, `userpicture`, `date`) VALUES
(1, 'brecht tankoua', 'brtankoua@gmail.com', 'https://lh3.googleusercontent.com/a/AATXAJwqCbZnW78qhiMSPAXY6gf0TYjcTh7wgBrQ8NUA=s96-c', '2022-03-06');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `all_video`
--
ALTER TABLE `all_video`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `all_video`
--
ALTER TABLE `all_video`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
