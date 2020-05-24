/*
SQLyog Ultimate v9.50 
MySQL - 5.7.29-0ubuntu0.16.04.1 : Database - findyourhome
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`findyourhome` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `findyourhome`;

/*Table structure for table `ADMIN` */

DROP TABLE IF EXISTS `ADMIN`;

CREATE TABLE `ADMIN` (
  `ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  CONSTRAINT `FK_7F5ACFC611D3633A` FOREIGN KEY (`ID`) REFERENCES `UTILISATEUR` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ADMIN` */

/*Table structure for table `APPARTEMENT` */

DROP TABLE IF EXISTS `APPARTEMENT`;

CREATE TABLE `APPARTEMENT` (
  `NUMAPPART` int(11) NOT NULL AUTO_INCREMENT,
  `RUE` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ETAGE` int(11) DEFAULT NULL,
  `TYPEAPPART` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PRIX_LOC` decimal(10,2) DEFAULT NULL,
  `PRIX_CHARGES` decimal(10,2) DEFAULT NULL,
  `ASCENSEUR` tinyint(1) DEFAULT NULL,
  `PRÉAVIS` tinyint(1) DEFAULT NULL,
  `DATE_LIBRE` date DEFAULT NULL,
  `COTISATION` decimal(10,2) DEFAULT NULL,
  `ARRONDISSE_DEM` int(11) DEFAULT NULL,
  `code_postal` int(11) DEFAULT NULL,
  `ville` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPRIETAIRE` int(11) DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`NUMAPPART`),
  KEY `I_FK_APPARTEMENT_ARRONDISSEMENT` (`ARRONDISSE_DEM`),
  KEY `I_FK_APPARTEMENT_PROPRIETAIRE` (`NUMAPPART`),
  KEY `IDX_FCA52F65FCD1D0C6` (`PROPRIETAIRE`),
  CONSTRAINT `FK_FCA52F65AD5E9AD1` FOREIGN KEY (`ARRONDISSE_DEM`) REFERENCES `ARRONDISSEMENT` (`ARRONDISSE_DEM`),
  CONSTRAINT `FK_FCA52F65FCD1D0C6` FOREIGN KEY (`PROPRIETAIRE`) REFERENCES `PROPRIETAIRE` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `APPARTEMENT` */

insert  into `APPARTEMENT`(`NUMAPPART`,`RUE`,`ETAGE`,`TYPEAPPART`,`PRIX_LOC`,`PRIX_CHARGES`,`ASCENSEUR`,`PRÉAVIS`,`DATE_LIBRE`,`COTISATION`,`ARRONDISSE_DEM`,`code_postal`,`ville`,`libelle`,`PROPRIETAIRE`,`photo`) values (3,'27 rue du louvre',0,'Studio','1000.00','100.00',0,1,'2020-06-15','70.00',1,75001,'Paris',NULL,6,'c809d3499df0608ffae0a3f27208d97f.png'),(4,'27 rue etienne marcel',0,'Studio','1000.00','100.00',0,1,'2021-02-17','70.00',2,75002,'Paris',NULL,6,'e565261dc250620f094f4b897e7a7345.png'),(5,'123 avenue de la Republique',2,'Studio','650.00','80.00',1,0,'2020-05-15','70.00',1,75001,'Paris','Cheminée',6,'a0e90e4fef53b9f627d87dc851e1d94c.png'),(7,'14 rue voltaire',4,'f3','1200.00','150.00',1,1,'2020-04-04','140.00',9,75009,'Paris',NULL,13,'0807c6c7241e19fe65ee11d1121aa32b.png'),(8,'44 avenue Santerre',1,'f2','920.00','100.00',1,0,'2020-04-10','50.00',12,75012,'paris','Jardin devant',15,'12018c1fd91a66829e5c2f31c89fbb97.png'),(9,'11 rue de Saint paul',3,'f2','1000.00','100.00',1,0,'2020-04-18','140.00',4,75004,'paris',NULL,15,'13aed857c718ccc77be513518c202589.png'),(10,'13 rue dantzig',1,'f1','800.00','100.00',0,0,'2020-03-29','60.00',7,75007,'paris','terrasse',6,NULL),(11,'2 place de malakoff',5,'f1bis','1300.00','120.00',1,1,'2020-04-30','100.00',14,75014,'paris','',15,NULL),(12,'20 rue santerre',3,'F1bis','1150.00','90.00',0,1,'2020-04-21','80.00',13,75013,'paris',NULL,15,NULL),(13,'4 rue Joseph morlent',2,'F1','1130.00','95.00',0,0,'2020-04-24','120.00',3,75003,'Paris',NULL,6,NULL),(14,'16 place des fetes',0,'f1','1100.00','100.00',0,0,'2020-04-26','100.00',3,75003,'paris','Accès au jardin',6,NULL),(15,'80 avenue des haies',4,'f1','970.00','100.00',1,1,'2020-04-30','70.00',17,75017,'paris',NULL,19,'83a7b5234a7a4590b640cb2d4384f538.png');

/*Table structure for table `ARRONDISSEMENT` */

DROP TABLE IF EXISTS `ARRONDISSEMENT`;

CREATE TABLE `ARRONDISSEMENT` (
  `ARRONDISSE_DEM` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ARRONDISSE_DEM`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ARRONDISSEMENT` */

insert  into `ARRONDISSEMENT`(`ARRONDISSE_DEM`) values (1),(2),(3),(4),(5),(6),(7),(8),(9),(10),(11),(12),(13),(14),(15),(16),(17),(18),(19),(20);

/*Table structure for table `CLIENT` */

DROP TABLE IF EXISTS `CLIENT`;

CREATE TABLE `CLIENT` (
  `ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  CONSTRAINT `FK_37BCC3D311D3633A` FOREIGN KEY (`ID`) REFERENCES `UTILISATEUR` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `CLIENT` */

insert  into `CLIENT`(`ID`) values (4),(6),(11),(12),(14),(16),(17),(18);

/*Table structure for table `DEMANDE` */

DROP TABLE IF EXISTS `DEMANDE`;

CREATE TABLE `DEMANDE` (
  `NUM_DEM` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE_DEM` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DATE_LIMITE` date DEFAULT NULL,
  `ID` int(11) DEFAULT NULL,
  `VILLE_DEM` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`NUM_DEM`),
  KEY `I_FK_DEMANDE_CLIENT` (`ID`),
  CONSTRAINT `FK_19D129BF11D3633A` FOREIGN KEY (`ID`) REFERENCES `CLIENT` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `DEMANDE` */

insert  into `DEMANDE`(`NUM_DEM`,`TYPE_DEM`,`DATE_LIMITE`,`ID`,`VILLE_DEM`) values (1,'studio','2020-02-03',4,NULL),(12,'f1','2016-04-02',4,NULL),(31,'f1','2021-01-01',4,NULL),(35,'terrasse','2020-03-19',12,'paris'),(36,'studio','2020-12-31',12,'paris'),(37,'studio','2020-12-31',12,'paris'),(43,'terrasse','2021-04-02',12,'paris'),(44,'terrasse','2021-04-02',12,'paris'),(45,'terrasse','2021-04-02',12,'paris'),(48,'rrrr','2019-02-02',12,'paris'),(49,'rrrr','2019-02-02',12,'paris'),(66,'f1','2020-03-03',12,'paris'),(67,'studio','2020-03-03',12,'paris'),(68,'studio','2020-03-03',12,'paris'),(69,'studio','2020-04-05',12,'paris'),(70,'studio','2020-12-14',12,'paris'),(71,'studio','2020-04-16',12,'paris'),(72,'studio','2020-03-16',12,'paris'),(73,'studio','2020-04-02',12,'paris'),(74,'3 chambres','2020-05-10',11,'paris'),(75,'3 chambres','2020-05-10',11,'paris'),(76,'studio','2020-05-12',6,'paris'),(77,NULL,'2021-03-17',11,NULL),(78,NULL,'2021-03-17',11,NULL),(79,'chambres','2020-05-15',16,'paris'),(80,'chambres','2020-06-10',17,'paris'),(81,'chambres','2020-05-17',14,'paris'),(82,'2 chambre','2020-05-18',12,'paris'),(85,'f2','2020-05-19',18,'paris');

/*Table structure for table `LOCATAIRE` */

DROP TABLE IF EXISTS `LOCATAIRE`;

CREATE TABLE `LOCATAIRE` (
  `R_I_B` int(21) DEFAULT NULL,
  `TEL_BANQUE` int(11) DEFAULT NULL,
  `NUMAPPART` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `I_FK_LOCATAIRE_APPARTEMENT` (`NUMAPPART`),
  CONSTRAINT `FK_80BEE80411D3633A` FOREIGN KEY (`ID`) REFERENCES `UTILISATEUR` (`ID`),
  CONSTRAINT `FK_80BEE8046A8A714C` FOREIGN KEY (`NUMAPPART`) REFERENCES `APPARTEMENT` (`NUMAPPART`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `LOCATAIRE` */

insert  into `LOCATAIRE`(`R_I_B`,`TEL_BANQUE`,`NUMAPPART`,`ID`) values (1234567890,112234455,5,4),(1234567890,12345,3,12),(1111,1234567891,9,14);

/*Table structure for table `PROPRIETAIRE` */

DROP TABLE IF EXISTS `PROPRIETAIRE`;

CREATE TABLE `PROPRIETAIRE` (
  `ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  CONSTRAINT `FK_FCD1D0C611D3633A` FOREIGN KEY (`ID`) REFERENCES `UTILISATEUR` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `PROPRIETAIRE` */

insert  into `PROPRIETAIRE`(`ID`) values (6),(13),(15),(19);

/*Table structure for table `UTILISATEUR` */

DROP TABLE IF EXISTS `UTILISATEUR`;

CREATE TABLE `UTILISATEUR` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PRENOM` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ADRESSE` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CODE_POSTAL` int(11) DEFAULT NULL,
  `VILLE` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TEL` int(11) DEFAULT NULL,
  `MAIL` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` json DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `UTILISATEUR` */

insert  into `UTILISATEUR`(`ID`,`NOM`,`PRENOM`,`ADRESSE`,`CODE_POSTAL`,`VILLE`,`TEL`,`MAIL`,`roles`,`username`,`password`) values (4,'Villada','Dayana','27 rue des morillons',75015,'Paris',NULL,'dayrz18@gmail.com','[\"ROLE_LOCATAIRE\"]','dayana','$argon2id$v=19$m=65536,t=4,p=1$3KR3X4PRPrr9XkYYFRPvPA$Ld6uSNCg1h49waCfIIWiparg3MTMGE7JTlowkXbJ0wE'),(6,'Villada','Diego','27 rue des m',75015,'Paris',601334593,'dv@hotmail.com','[\"ROLE_PROPRIETAIRE\"]','diego','$argon2id$v=19$m=65536,t=4,p=1$C7LGDXS/w751ysNaGnQsOA$Cr5Rv+HFi7OkU+nMDgzvGMuM+B6k7QQqE+3+kttkVZQ'),(11,'carbonell','daniela','14 avenue de la Republique',75010,'Paris',748291374,'dc@hotmail.com','[\"ROLE_ADMIN\"]','daniela','$argon2id$v=19$m=65536,t=4,p=1$8XzB1AFRS656u8BpKB+H+Q$T5LxzEL4Z3ZVHYfzeqwNypL2O4mdKSiXzZsys0rHyZ0'),(12,'martinez','v',NULL,NULL,'paris',NULL,NULL,'[\"ROLE_CLIENT\"]','vale','$argon2id$v=19$m=65536,t=4,p=1$hvpYcXQcpuawvkt7IEMlcg$oP8TO8Z7KUz4YfcOWcc5njZrNm4UKW/vqRYOdsGjKd4'),(13,'Rodriguez','Sule','27 rue des morillons',75016,'paris',781234235,'sule@hotmail.com','[\"ROLE_PROPRIETAIRE\"]','sule','$argon2id$v=19$m=65536,t=4,p=1$FGIt4jZaWBMT8nBo3/FxeQ$tNrOt3MlCmNtQ/0FmSnq5Fb9uScCq8HrVRshg50Ionw'),(14,'Coutolleau','Oriane',NULL,NULL,NULL,NULL,'oc@hotmail.com','[\"ROLE_LOCATAIRE\"]','oriane','$argon2id$v=19$m=65536,t=4,p=1$Yac9a1sxIdIkQB2L1iTgmg$SJ92zQuJgo8N8+DJM1zsW0IW01dUlIcfVC+xycdCSxQ'),(15,'Lopez','Moises','Avenue Champs Elycées',75016,'paris',987654321,'ml@gmail.com','[\"ROLE_PROPRIETAIRE\"]','moises','$argon2id$v=19$m=65536,t=4,p=1$RgH5725Viwh6tA71l8p9KA$HjMlC3Ijvb3l0Sqj92x0RAnfpryuk2Gre1WlQZuKUq0'),(16,'Gracia','Juana','12 rue des Boulets',75008,'paris',123456711,'jg@gmail.com','[\"ROLE_CLIENT\"]','juana','$argon2id$v=19$m=65536,t=4,p=1$8NVjhIE0paFYvtS0FsjTnw$BoKCHZvsSKpFGAaGngoPB0nPGSeAoqkNykWdKuWzQlA'),(17,'mariam','grajales',NULL,NULL,NULL,NULL,'mg@gmail.com','[\"ROLE_CLIENT\"]','mariam','$argon2id$v=19$m=65536,t=4,p=1$3O7m+oqYgw69bD+bk3Ds5g$YqijTa7YAmFqDOyNikhvL5VZfYSRQE0St+xzZss5ovs'),(18,'lewis','cécile',NULL,NULL,NULL,NULL,'cecile@hotmail.com','[\"ROLE_CLIENT\"]','cecile','$argon2id$v=19$m=65536,t=4,p=1$xQCW0+4XKtAFQEgGRP6z6w$iBLoChkQ+4nn1dBzECZrQoP/nFi89Zf0h2khxkooD5U'),(19,'John','Thomas',NULL,NULL,NULL,NULL,'thomasj@gmail.com','[\"ROLE_PROPRIETAIRE\"]','thomas','$argon2id$v=19$m=65536,t=4,p=1$GTqNu6Xav/c+bTy5aKv6gQ$USAi7Gr6OdfhD/vInXV9ZIFi4AlJ/22nLrvvVWJYWvk');

/*Table structure for table `concerner` */

DROP TABLE IF EXISTS `concerner`;

CREATE TABLE `concerner` (
  `ARRONDISSE_DEM` int(11) NOT NULL,
  `NUM_DEM` int(11) NOT NULL,
  PRIMARY KEY (`ARRONDISSE_DEM`,`NUM_DEM`),
  KEY `IDX_ABE9A866AD5E9AD1` (`ARRONDISSE_DEM`),
  KEY `IDX_ABE9A86614E66863` (`NUM_DEM`),
  CONSTRAINT `FK_ABE9A86614E66863` FOREIGN KEY (`NUM_DEM`) REFERENCES `DEMANDE` (`NUM_DEM`),
  CONSTRAINT `FK_ABE9A866AD5E9AD1` FOREIGN KEY (`ARRONDISSE_DEM`) REFERENCES `ARRONDISSEMENT` (`ARRONDISSE_DEM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `concerner` */

insert  into `concerner`(`ARRONDISSE_DEM`,`NUM_DEM`) values (1,35),(1,36),(1,37),(1,43),(1,44),(1,66),(1,67),(1,68),(1,69),(1,70),(1,71),(1,72),(1,73),(1,75),(1,76),(1,77),(1,79),(2,12),(2,75),(4,78),(4,81),(7,74),(7,82),(9,74),(9,79),(9,82),(12,80),(12,82),(12,85);

/*Table structure for table `migration_versions` */

DROP TABLE IF EXISTS `migration_versions`;

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migration_versions` */

insert  into `migration_versions`(`version`,`executed_at`) values ('20200328214646','2020-03-28 21:47:10');

/*Table structure for table `visiterdem` */

DROP TABLE IF EXISTS `visiterdem`;

CREATE TABLE `visiterdem` (
  `numvisite` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `numappart` int(11) DEFAULT NULL,
  `datevisite` date DEFAULT NULL,
  PRIMARY KEY (`numvisite`),
  KEY `FK_VISI_CLIENT` (`numappart`),
  KEY `FK_VISITER_CLIENT` (`id`),
  CONSTRAINT `visiterdem_ibfk_1` FOREIGN KEY (`numappart`) REFERENCES `APPARTEMENT` (`NUMAPPART`),
  CONSTRAINT `visiterdem_ibfk_2` FOREIGN KEY (`id`) REFERENCES `CLIENT` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `visiterdem` */

insert  into `visiterdem`(`numvisite`,`id`,`numappart`,`datevisite`) values (1,12,4,'2020-05-04'),(2,12,4,'2020-09-04'),(3,NULL,4,'2020-05-04'),(4,NULL,4,'2020-04-04'),(5,NULL,4,'2020-04-04'),(6,NULL,4,'2020-04-04'),(7,NULL,4,'2020-04-04'),(8,NULL,4,'2020-04-04'),(9,NULL,4,'2020-04-04'),(11,NULL,7,'2020-04-07'),(14,11,7,'2020-04-08'),(15,11,5,'2020-05-05'),(16,11,4,'2020-01-01'),(17,11,4,'2020-01-01'),(18,11,4,'2020-01-01'),(19,16,7,'2020-05-09'),(20,17,8,'2020-04-13'),(21,14,9,'2020-04-24'),(22,12,8,'2020-04-14'),(23,18,8,'2020-05-12');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
