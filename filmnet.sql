-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: 
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `filmnet`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `filmnet` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci */;

USE `filmnet`;

--
-- Table structure for table `actors`
--

DROP TABLE IF EXISTS `actors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `actor_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `role` varchar(30) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actors`
--

LOCK TABLES `actors` WRITE;
/*!40000 ALTER TABLE `actors` DISABLE KEYS */;
INSERT INTO `actors` VALUES (1,1,1,'Wade Owen Watts / Parzival'),(2,2,1,'Samantha Evelyn Cook / Art3mis'),(3,3,1,'	Nolan Sorrento '),(4,4,3,'T\'Challa / Czarna Pantera'),(5,5,3,'Erik Killmonger'),(6,6,3,'Nakia'),(7,7,3,'Okoye'),(8,8,2,'Luke Skywalker / Dobbu Scay '),(9,9,2,'Leia Organa '),(10,10,2,'Kylo Ren'),(11,11,2,'Rey'),(12,12,4,'Cobb'),(14,13,4,'Arthur'),(15,14,4,'Ariadne'),(16,15,5,'Han Solo'),(17,8,5,'Luke Skywalker'),(18,9,5,'Leia'),(19,10,5,'Kylo Ren'),(20,11,5,'Rey'),(21,16,6,'Oficer K '),(22,15,6,'Rick Deckard'),(23,17,6,'Joi'),(24,18,7,' Lena'),(25,19,7,'Dr Ventress'),(26,20,7,'Josie Radek '),(27,18,8,'Padmé Amidala'),(28,21,8,'Obi-Wan Kenobi'),(29,22,8,'Anakin Skywalker'),(30,23,9,'Scott Lang / Ant-Man'),(31,24,9,'Dr Hank Pym'),(32,25,9,'Hope Van Dyne'),(33,26,10,'Kapitan Jack Sparrow'),(34,27,10,'Will Turner'),(35,28,10,'Kapitan Hector Barbossa'),(36,29,10,'Elizabeth Swann'),(37,26,11,'Kapitan Jack Sparrow'),(38,27,11,'Will Turner'),(39,28,11,'Kapitan Hector Barbossa'),(40,29,11,'Elizabeth Swann'),(41,26,12,'Kapitan Jack Sparrow'),(42,27,12,'Will Turner'),(43,29,12,'Elizabeth Swann'),(44,12,13,'Jack Dawson'),(45,30,13,'Rose DeWitt Bukater'),(46,31,14,'Cooper'),(47,32,14,'Brand'),(48,33,14,'Murph');
/*!40000 ALTER TABLE `actors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `actors_list`
--

DROP TABLE IF EXISTS `actors_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actors_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `surname` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `nationality` varchar(30) COLLATE utf8_polish_ci DEFAULT NULL,
  `photo` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actors_list`
--

LOCK TABLES `actors_list` WRITE;
/*!40000 ALTER TABLE `actors_list` DISABLE KEYS */;
INSERT INTO `actors_list` VALUES (1,'Tye','Sheridan','1996-11-11','USA','http://1.fwcdn.pl/p/84/96/1618496/402253.1.jpg'),(2,'Olivia','Cooke II','1993-12-27','Anglia','http://1.fwcdn.pl/p/79/83/1767983/435923.1.jpg'),(3,'Ben','Mendelsohn I','1969-04-03','Australia','http://1.fwcdn.pl/p/01/44/10144/390259.1.jpg'),(4,'Chadwick','Boseman','1976-11-29','USA','http://1.fwcdn.pl/p/60/63/676063/379880.1.jpg'),(5,'Michael B.','Jordan','1987-02-09','USA','http://1.fwcdn.pl/p/24/46/52446/300571_1.1.jpg'),(6,'Lupita','Nyong\'o','1983-03-01','Meksyk','http://1.fwcdn.pl/p/86/61/1148661/333356.1.jpg'),(7,'Danai','Gurira','1978-02-14','USA','http://1.fwcdn.pl/p/56/47/525647/395489.1.jpg'),(8,'Mark','Hamill I','1951-09-25','USA','http://1.fwcdn.pl/p/47/87/4787/430598.1.jpg'),(9,'Carrie','Fisher','1956-10-21','USA','http://1.fwcdn.pl/p/47/88/4788/319766.1.jpg'),(10,'Adam','Driver I','1983-11-19','USA','http://1.fwcdn.pl/p/66/63/1306663/371756.1.jpg'),(11,'Daisy','Ridley','1992-04-10','Wielka Brytania','http://1.fwcdn.pl/p/14/47/2111447/364481.1.jpg'),(12,'Leonardo','DiCaprio','1974-11-11','USA','http://1.fwcdn.pl/p/00/30/30/398646.1.jpg'),(13,'Joseph','Gordon-Levitt','1981-02-17','USA','http://1.fwcdn.pl/p/31/68/3168/392788.1.jpg'),(14,'Ellen','Page','1987-02-21','Kanada','http://1.fwcdn.pl/p/37/37/133737/379874.1.jpg'),(15,'Harrison','Ford I','1942-07-13','USA','http://1.fwcdn.pl/p/01/74/174/377427.1.jpg'),(16,'Ryan','Gosling','1980-11-12','Kanada','http://1.fwcdn.pl/p/50/13/55013/333184.1.jpg'),(17,'Ana','de Armas','1988-04-30','Kuba','http://1.fwcdn.pl/p/56/16/905616/244602.1.jpg'),(18,'Natalie','Portman','1981-06-09','Izrael','http://1.fwcdn.pl/p/03/16/316/356292.1.jpg'),(19,'Jennifer','Lee Morrow','1962-02-05','USA','http://1.fwcdn.pl/p/01/91/191/342138.1.jpg'),(20,'Tessa','Thompson','1983-10-03','USA','http://1.fwcdn.pl/p/65/38/446538/382820.1.jpg'),(21,'Ewan','McGregor','1971-03-31','Wielka Brytania','http://1.fwcdn.pl/p/00/71/71/345981.1.jpg'),(22,'Hayden','Christensen','1981-04-19','Kanada','http://1.fwcdn.pl/p/15/42/31542/326279.1.jpg'),(23,'Paul','Rudd','1969-04-06','USA','http://1.fwcdn.pl/p/47/18/4718/423923.1.jpg'),(24,'Michael Kirk','Douglas','1944-09-25','USA','http://1.fwcdn.pl/p/01/65/165/356608.1.jpg'),(25,'Evangeline','Lilly','1979-08-03','Kanada','http://1.fwcdn.pl/p/55/62/225562/391239.1.jpg'),(26,'Johnny','Depp','1963-06-09','USA','http://1.fwcdn.pl/p/00/29/29/346090.1.jpg'),(27,'Orlando','Bloom','1977-01-13','Wielka Brytania','http://1.fwcdn.pl/p/83/46/8346/389755.1.jpg'),(28,'Geoffrey','Rush','1951-07-06','Australia','http://1.fwcdn.pl/p/26/81/2681/314202.1.jpg'),(29,'Keira','Knightley','1985-03-26','Wielka Brytania','http://1.fwcdn.pl/p/54/06/45406/367260.1.jpg'),(30,'Kate','Winslet','1975-10-05','Wielka Brytania','http://1.fwcdn.pl/p/01/19/119/347048.1.jpg'),(31,'Matthew','McConaughey','1969-11-04','USA','http://1.fwcdn.pl/p/25/56/2556/358663.1.jpg'),(32,'Anne','Hathaway','1982-11-12','USA','http://1.fwcdn.pl/p/63/51/46351/347364.1.jpg'),(33,'Jessica','Chastain','1977-03-24','USA','http://1.fwcdn.pl/p/96/98/479698/431739.1.jpg');
/*!40000 ALTER TABLE `actors_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genre_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` VALUES (1,1,1),(2,2,1),(3,3,1),(4,2,2),(5,3,2),(6,1,3),(7,2,3),(8,4,4),(9,2,4),(10,3,5),(11,2,5),(12,4,6),(13,2,6),(14,2,7),(15,1,7),(16,4,7),(17,3,8),(18,2,8),(19,3,10),(20,5,10),(21,1,9),(22,2,9),(24,3,11),(25,5,11),(26,5,12),(27,3,12),(28,6,13),(29,7,13),(30,2,14);
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genres_list`
--

DROP TABLE IF EXISTS `genres_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genres_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres_list`
--

LOCK TABLES `genres_list` WRITE;
/*!40000 ALTER TABLE `genres_list` DISABLE KEYS */;
INSERT INTO `genres_list` VALUES (1,'Akcja'),(2,'Sci-Fi'),(3,'Przygodowy'),(4,'Thriller'),(5,'Fantasy'),(6,'Katastroficzny'),(7,'Melodramat');
/*!40000 ALTER TABLE `genres_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(80) COLLATE utf8_polish_ci NOT NULL,
  `description` text COLLATE utf8_polish_ci NOT NULL,
  `release_date` date DEFAULT NULL,
  `director` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `writer` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `poster` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies`
--

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES (1,'Ready Player One','W 2045 roku ludzie znajdują ukojenie w wirtualnej rzeczywistości. Jej twórca przed śmiercią postanawia cały majątek przekazać pierwszej osobie, która znajdzie ukryte w niej \"wielkanocne jajo\".','2018-04-06','Steven Spielberg','Ernest Cline, Zak Penn','http://1.fwcdn.pl/po/98/89/719889/7835365.5.jpg'),(2,'Star Wars: The Last Jedi','Rey odnajduje Luke\'a Skywalkera, by namówić go na powrót i walkę z Najwyższym Porządkiem. Tymczasem Rebelianci próbują uciec przed flotą wroga. ','2017-12-14','Rian Johnson','Rian Johnson','http://1.fwcdn.pl/po/10/49/671049/7808454.5.jpg'),(3,'Black Panther','Książę T\'Challa przywdziewa kostium Czarnej Pantery po tym, jak jego ojciec - król Wakandy - zostaje podstępnie zamordowany. ','2018-02-14','Ryan Coogler','Ryan Coogler Joe Robert Cole','http://1.fwcdn.pl/po/43/58/594358/7816401.5.jpg'),(4,'Inception','Czasy, gdy technologia pozwala na wchodzenie w świat snów. Złodziej Cobb ma za zadanie wszczepić myśl do śpiącego umysłu.','2010-07-30','Christopher Nolan','Christopher Nolan','http://1.fwcdn.pl/po/08/91/500891/7354571.5.jpg'),(5,'Star Wars: Episode VII - The Force Awakens','Złe Imperium zostaje zastąpione przez Najwyższy Porządek, który chce władzy nad galaktyką. Plany wrogiej organizacji może pokrzyżować Ruch Oporu.','2015-12-18','J.J. Abrams','Lawrence Kasdan, J.J. Abrams','http://1.fwcdn.pl/po/10/51/671051/7709414.5.jpg'),(6,'Blade Runner 2049 ','Oficer policji Los Angeles trafia na ukrywaną przez lata informację, która może pogrążyć resztki społeczeństwa w chaosie. Odkrycie prowadzi go do poszukiwań Ricka Deckarda, byłego łowcy androidów, który zaginął trzydzieści lat temu.','2017-10-06','Denis Villeneuve','Hampton Fancher, Michael Green','http://1.fwcdn.pl/po/07/98/630798/7801880.5.jpg'),(7,'Annihilation','Biolożka wyrusza na tajemniczą wyprawę tam, gdzie prawo natury nie istnieje.','2018-02-22','Alex Garland','Alex Garland','http://1.fwcdn.pl/po/08/44/730844/7833139.5.jpg'),(8,'Star Wars: Episode II - Attack of the Clones','Demokratyczne rządy Republiki są zagrożone przez podstępnego hrabiego Dooku. Tymczasem Anakin Skywalker łamie reguły zakonu Jedi i zakochuje się.','2002-05-16','George Lucas','George Lucas, Jonathan Hales','http://1.fwcdn.pl/po/14/65/1465/6940931.5.jpg'),(9,'Ant-Man','Oszust Scott Lang, wyposażony w kombinezon pozwalający na zmniejszanie się, pomaga swojemu mentorowi, Hankowi, zaplanować i wykonać skok, od którego zależą losy świata.','2015-07-17','Peyton Reed','Adam McKay, Paul Rudd','http://1.fwcdn.pl/po/76/91/257691/7693598.5.jpg'),(10,'Pirates of the Caribbean: The Curse of the Black Pearl','Kowal Will Turner sprzymierza się z kapitanem Jackiem Sparrowem, by odzyskać swoją miłość - porwaną córkę gubernatora.','2003-09-05','Gore Verbinski','Ted Elliott, Terry Rossio','http://1.fwcdn.pl/po/73/09/37309/7515192.5.jpg'),(11,'Pirates of the Caribbean: At World\'s End','Will Turner i Elizabeth Swan wyruszają w podróż na kraniec świata, by uratować kapitana Jacka Sparrowa z pułapki Davy\'ego Jonesa.','2007-05-25','Gore Verbinski','Ted Elliott, Terry Rossio','http://1.fwcdn.pl/po/17/60/121760/7154556.5.jpg'),(12,'Pirates of the Caribbean: Dead Man\'s Chest','Jack Sparrow musi spłacić dług zaciągnięty wobec kapitana Latającego Holendra. Uniknie śmierci, gdy znajdzie i zniszczy serce Davy\'ego Jonesa ukryte w Skrzyni Umarlaka.','2006-07-21','Gore Verbinski','Ted Elliott, Terry Rossio','http://1.fwcdn.pl/po/74/04/107404/7518098.5.jpg'),(13,'Titanic','Rok 1912, brytyjski statek Titanic wyrusza w swój dziewiczy rejs do USA. Na pokładzie emigrant Jack przypadkowo spotyka arystokratkę Rose.','1998-02-13','James Cameron','James Cameron','http://1.fwcdn.pl/po/01/87/187/7451731.5.jpg'),(14,'Interstellar','Byt ludzkości na Ziemi dobiega końca wskutek zmian klimatycznych. Grupa naukowców odkrywa tunel czasoprzestrzenny, który umożliwia poszukiwanie nowego domu.','2014-11-07','Christopher Nolan','Christopher Nolan, Jonathan Nolan','http://1.fwcdn.pl/po/56/29/375629/7670122.5.jpg');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;

