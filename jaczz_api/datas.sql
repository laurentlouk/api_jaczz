-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 24 Février 2014 à 16:24
-- Version du serveur: 5.5.33
-- Version de PHP: 5.4.4-14+deb7u7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `jaccz`
--

CREATE DATABASE IF NOT EXISTS jaccz;

USE jaccz;

-- --------------------------------------------------------

--
-- Structure de la table `jaccz`
--

CREATE TABLE IF NOT EXISTS `jacczData` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_channel` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;


--
-- Structure de la table `jacczSettings`
--

CREATE TABLE IF NOT EXISTS `jacczSettings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `set_check` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

--
-- Contenu de la table `jacczSettings`
--
