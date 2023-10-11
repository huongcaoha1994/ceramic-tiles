-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: project_mytiles
-- ------------------------------------------------------
-- Server version	8.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `color` varchar(30) NOT NULL,
  `inventory` decimal(10,0) NOT NULL,
  `category_id` int NOT NULL,
  `brand` varchar(30) NOT NULL,
  `size` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `created_date` date DEFAULT (curdate()),
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'image/gach-lat-nen-thach-anh-60x60-keraben-p6060-trmk.jpg','Viglacera NY3-GP8804 floor tiles',18,'brown',99,11,'Viglacera','80x80','Product code: NY3 GP8804\r\nProduct type: Floor tiles 80x80\r\nBrand: Viglacera\r\nTechnology: Europe\r\nType: A1\r\nSize: 80x80 cm\r\nColor: Beige\r\nPattern: Stone pattern, 5 Face\r\nSurface: Polished\r\nBrick frame: Granite','2023-10-10'),(2,'image/_clas752479_5f7f4316e905a.jpg','Platinum CB-P809 floor tiles',16,'black',99,11,'Viglacera Platinum','80x80','Product code: CB-P809 \r\nFunction: Floor tiles\r\nBrand: Viglacera Platinum\r\nSize: 80x80 cm\r\nSurface: Polished\r\nBrick frame: Granite\r\nSame quality bricks\r\nPackaging: 3 tablets/box','2023-10-10'),(3,'image/floor-tiles.jpg','Viglacera VHP6601 floor tiles',15,'white',90,11,'Viglacera','60x60','Product code: VHP6601\r\nProduct type:  Floor tiles 60x60\r\nBrand: Viglacera\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet Nam','2023-10-10'),(4,'image/5021.png','Chinese 60×60 tiles DBY66186',15,'red',57,11,'Chinese Tiles','60x60','Product code: DBY66186\r\nProduct type:  Floor tiles 60x60\r\nBrand: Chinese Tiles\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: glazed porcelain\r\nProduction technology: CHINA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in China','2023-10-10'),(5,'image/gach-lat-nen-van-da-60x60-keraben-p6060-cebl.jpg','Viglacera SH-GP802 floor tiles',18,'white',98,11,'Viglacera','80x80','Product code: SH-GP802\r\nProduct type: Floor tiles\r\nSize: 80x80 cm\r\nSurface: glossy\r\nBrick bones: Porcelain\r\nPackaging information: 3 tablets/box\r\nApplication: Flooring','2023-10-10'),(6,'image/8b8066-Light-Yellow-Full-Polished-Glazed-Floor-Tile.jpg','Homogeneous Matte Gloss HG4502',8,'yellow',65,21,'Bach Ma Tiles','45x45','Product code: HG4502\r\nProduct type: Homogeneous Matte Gloss\r\nBrand: Bach Ma Tiles\r\nTechnology: Europe\r\nType: A1\r\nSize: 45x45 cm\r\nColor: Beige\r\nPattern: Stone pattern, 5 Face\r\nSurface: Salt and pepper tiles\r\nBrick frame: Granite','2023-10-10'),(7,'image/gach-lat-nen-viglacera-d-403-dd.jpg','Keraben Rough P6060 TRMK',18,'brown',56,21,'Dong Tam Brick','60x60','Product code: P6060 TRMK\r\nProduct type:  Floor tiles 60x60\r\nBrand: Dong Tam Brick\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet Nam','2023-10-10'),(8,'image/DECCLOPIN55G.jpg','Keraben Rough P6061 TRMK',18,'pink',45,21,'Bach Ma Tiles','60x60','Product code: P6061 TRMK\r\nProduct type:  Floor tiles 60x60\r\nBrand: Bach Ma Tiles\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet Nam','2023-10-10'),(9,'image/1gach-lat-nen-van-da-60x60-keraben-p6060-cebl.jpg','Keraben Matte P6060 CEBL',17,'white',67,21,'Dong Tam Brick','60x60','Product code: P6060 CEBL\r\nProduct type:  Imitation cement tiles\r\nBrand: Dong Tam Brick\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: Europe\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet NamProduct code: P6060 CEBL\r\nProduct type:  Imitation cement tiles\r\nBrand: Dong Tam Brick\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: Europe\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet Nam','2023-10-10'),(10,'image/gach-viglacera-sh-808.jpg','Viglacera SH-GP808 floor tiles',20,'brown',57,21,'Viglacera','80x80','Product code: SH-GP808\r\nProduct type: Floor tiles 80x80\r\nCollection: Red River\r\nBrick bones: Porcelain\r\nSize: 80x80cm\r\nEnamel surface: Polish glossy enamel\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nBrand: Viglacera\r\nApplication: Floor tiles\r\nPackaging: 3 tablets/box','2023-10-10'),(11,'image/gach-lat-nen-viglacera-m-414.jpg','Eurotile HOD D01 ceramic tiles',15,'white',35,12,'Viglacera','30x90','Product code: HOD D01\r\nFunction: Wall  and floor tiles\r\nSize: 30x90cm\r\nPattern: Stone pattern\r\nColor: Gray white\r\nBrick frame: Granite\r\nBrand: Viglacera','2023-10-10'),(12,'image/8080ROME001-H.jpg','Eurotile NGC D04 tiles',17,'yellow',89,12,'Viglacera','40x40','Product code: NGC D04\r\nSize: 30x90cm\r\nBrick frame: Granite\r\nPattern: Van Stone\r\nTile glaze: Matt glaze\r\nSurface: Rough\r\nFunction: Tiles\r\nRandom 5 Face product\r\nCollection: Nguyet Cat\r\nFiring temperature: Above 1200ºC for perfect connection.\r\n Flexural strength: 43.6 MPA\r\n Water absorption: &amp;lt; 0.09 %\r\n Abrasion resistance: Abrasion resistance &amp;gt; 700 rounds / 1 minute .','2023-10-10'),(13,'image/lynx-brown-50x50-2m2-floor-tile.jpg','Eurotile DAV D04 tiles',15,'brown',79,12,'Viglacera','30x60','Product code: DAV D04\r\nSize: 30x90cm\r\nFunction: Wall  and floor tiles\r\nGach bone: Granite\r\nTile glaze: Matt glaze\r\nTile surface: Rough\r\nPattern: Fabric pattern\r\nColor: Latte','2023-10-10'),(14,'image/1.jpg','Eurotile VOC G03 ceramic tiles',12,'black',70,12,'Eurotile','30x90','Product code:  VOC G03\r\nTile type:  Ceramic tiles\r\nCollection: Vong sand\r\nBrand: Euroti le \r\nSize: 30x60cm\r\nTile type: Porcelain\r\nSurface: Matt, digital printing, random\r\nPattern: Cement\r\nPackaging: 06 tablets/box (1.08m2)\r\nOrigin: Vietnam','2023-10-10'),(15,'image/1gach-lat-nen-viglacera-m-414.jpg','Viglacera F3600 wall tiles',12,'white',87,12,'Viglacera','30x60','Product code: F3600\r\nProduct type: Wall tiles 30x60\r\nBrand: Viglacera\r\nSize: 30x60mm\r\nSurface: rough brick\r\nPattern: White\r\nFunction: Wall tiles\r\nMade in Viet Nam','2023-10-10'),(16,'image/gach-platinum-cb-p809.jpg','Viglacera Q2556 wall tiles',12,'black',57,22,'Viglacera','25x40','Product code: Q2556\r\nSize: 25x40cm\r\nTile type: Ceramic\r\nColor: Black\r\nPattern: Stone pattern\r\nTile surface: Polished\r\nFunction: Wall tiles','2023-10-10'),(17,'image/images.jpg','Viglacera Q2555 wall tiles',12,'black',74,22,'Viglacera','25x40','Product code: Q2555\r\nSize: 25x40cm\r\nTile type: Ceramic\r\nColor: Black\r\nPattern: Stone pattern\r\nTile surface: Polished\r\nFunction: Wall tiles','2023-10-10'),(18,'image/422-orange.jpg','Viglacera CL-GP4806 tiles',15,'orange',11,22,'Viglacera','40x80','Product code: CL-GP4806\r\nBrand: Viglacera\r\nTile line: Porcelain\r\nSize: 40x80 cm\r\nEnamel surface: Glossy enamel\r\nFunction: Tiles\r\nMade in Viet Nam\r\nPackaging: 3 tablets/box','2023-10-10'),(19,'image/1images.jpg','Viglacera CL-GP4804 tiles',15,'orange',58,22,'Viglacera','40x80','Product code: CL-GP4804\r\nBrand: Viglacera\r\nTile line: Porcelain\r\nSize: 40x80 cm\r\nEnamel surface: Glossy enamel\r\nFunction: Tiles\r\nMade in Viet Nam\r\nPackaging: 3 tablets/box','2023-10-10'),(20,'image/tải xuống.jpg','Viglacera Q2500 wall tiles',11,'white',86,22,'Viglacera','25x40','Size: 25x40cm\r\nTile type: Ceramic\r\nColor: White\r\nPattern: Plain\r\nTile surface: Polished\r\nFunction: Wall tiles\r\nPackaging: 10 tablets/box','2023-10-10'),(21,'image/2images.jpg','Eurotile THD G04 tiles',15,'black',77,13,'Eurotile','30x60','Product code: THD G04\r\nBrand:  Eurotile\r\nSize: 30x60 cm\r\nPattern: Cement Texture\r\nSurface: Rough\r\nType of enamel: Matt enamel\r\nBrick frame: Granite\r\nFunction:  Wall  and floor tiles\r\nRandom 5 Face product','2023-10-10'),(22,'image/gach-viglacera-gf-449.jpg','Viglacera GF449 tiles',16,'yellow',89,13,'Viglacera','40x40','Product code: GF449\r\nFunction: Floor tiles\r\nPattern: Imitation stone \r\nBrick bones: Ceramic\r\nSurface: Matt enamel\r\nSize: 40x40cm','2023-10-10'),(23,'image/1floor-tiles.jpg','Viglacera M414 floor tiles',15,'white',45,13,'Viglacera','40x40','Product code: M414\r\nUses: Floor tiles\r\nSize: 40×40 cm\r\nSurface: Rough\r\nType: Ceramic\r\nPackaging information: 6 tablets/box\r\nBrand: Viglacera\r\nMade in Viet Nam','2023-10-10'),(24,'image/1tải xuống.jpg','Eurotile PHS G02 ceramic tiles',15,'white',89,13,'Eurotile','30x60','Product code: PHS G02\r\nFunction: Tiles\r\nSize (cm): 30x60\r\nPattern: Van Stone\r\nSurface: Rough\r\nType of enamel: Matt enamel\r\nBrick color: Cream color (Cream)\r\nBrick frame: Granite\r\nRandom 5 Face product','2023-10-10'),(25,'image/petra-brown-RAK-vitrified-floor-tiles.jpg','Viglacera S 411 floor tiles',17,'brown',78,13,'Viglacera','40x40','Product code: S411\r\nProduct type: Floor tiles 40x40\r\nBrand: Viglacera\r\nProduction technology: Europe\r\nBrick bones:  Ceramic\r\nFeatures: Anti-moss and mold\r\nSize: 40x40 cm\r\nSurface: Rough\r\nUses: Exterior garden tiles\r\nPackaging: 6 tablets/box','2023-10-10'),(26,'image/gach-men-mau-vang-van-da-c605-dna-600mmx600mm.jpg','Viglacera S402 floor tiles',16,'yellow',68,23,'Viglacera','40x40','Product code: S402\r\nFunction: Floor tiles\r\nPattern: Imitation stone \r\nBrick bones: Ceramic\r\nSurface: Matt enamel\r\nSize: 40x40cm','2023-10-10'),(27,'image/gach-lat-nen-viglacera-vhp-6601.jpg','Viglacera SG402 floor tiles',16,'white',89,23,'Viglacera','40x40','Product code: SG 402\r\nSize: Floor tiles 40x40cm\r\nType: Rustic Tiles\r\nMade in Viet Nam\r\nBrand: Viglacera','2023-10-10'),(28,'image/modula--avera-av-030-surface-pro-sq-arcit18.jpg','Viglacera GA401 tiles',16,'red',76,23,'Viglacera','40x40','Product code: GA401\r\nUses: Tiles\r\nSize: 40×40 cm\r\nSurface: Rough\r\nType: Ceramic\r\nPackaging information: 6 tablets/box\r\nBrand: Viglacera  \r\nOrigin: Vietnam','2023-10-10'),(29,'image/af5e5f28e0bd123cf14e31a7b6db1ac9.jpg','Viglacera GF445 floor tiles',14,'orange',89,23,'Viglacera','40x40','Product code: GF445\r\nSize: 40x40cm\r\nSurface: Rough\r\nTile glaze: Matt glaze\r\nFunction: Floor tiles , garden tiles\r\nBrand: Viglacera','2023-10-10'),(30,'image/sparko-brown-RAK-vitrified-floor-tiles-kottayam-thiruvalla.jpg','Viglacera GA403 tiles',14,'brown',80,23,'Viglacera','40x40','Product code:  GA403\r\nUses:  Tiles\r\nSize: 40×40 cm\r\nSurface: Rough\r\nType: Ceramic\r\nPackaging information: 6 tablets/box\r\nBrand: Viglacera\r\nOrigin: Vietnam','2023-10-10'),(31,'image/gft_bdw_rubra_strip_brown_ft_germfree_forever_tiles_porcelain.jpg','Viglacera GA403 tiles',14,'brown',80,13,'Viglacera','40x40','Product code:  GA403\r\nUses:  Tiles\r\nSize: 40×40 cm\r\nSurface: Rough\r\nType: Ceramic\r\nPackaging information: 6 tablets/box\r\nBrand: Viglacera\r\nOrigin: Vietnam','2023-10-10'),(32,'image/1gft_bdw_rubra_strip_brown_ft_germfree_forever_tiles_porcelain.jpg','Viglacera GA403 tiles',14,'brown',80,14,'Viglacera','40x40','Product code:  GA403\r\nUses:  Tiles\r\nSize: 40×40 cm\r\nSurface: Rough\r\nType: Ceramic\r\nPackaging information: 6 tablets/box\r\nBrand: Viglacera\r\nOrigin: Vietnam','2023-10-10'),(33,'image/2tải xuống.jpg','Platinum CB-P809 floor tiles',16,'black',78,14,'Viglacera Platinum','80x80','Product code: CB-P809 \r\nFunction: Floor tiles\r\nBrand: Viglacera Platinum\r\nSize: 80x80 cm\r\nSurface: Polished\r\nBrick frame: Granite\r\nSame quality bricks\r\nPackaging: 3 tablets/box','2023-10-10'),(34,'image/2floor-tiles.jpg','Viglacera VHP6601 floor tiles',15,'white',85,14,'Viglacera','60x60','Product code: VHP6601\r\nProduct type:  Floor tiles 60x60\r\nBrand: Viglacera\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet Nam','2023-10-10'),(35,'image/gach-lat-nen-viglacera-ga-401-3.jpg','Chinese 60×60 tiles DBY66186',15,'red',76,14,'Chinese Tiles','60x60','Product code: DBY66186\r\nProduct type:  Floor tiles 60x60\r\nBrand: Chinese Tiles\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: glazed porcelain\r\nProduction technology: CHINA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in China','2023-10-10'),(36,'image/18780_gach_porcelain_tasa_60x60_men_bong_6621.jpg','Viglacera SH-GP802 floor tiles',18,'yellow',70,24,'Viglacera','80x80','Product code: SH-GP802\r\nProduct type: Floor tiles\r\nSize: 80x80 cm\r\nSurface: glossy\r\nBrick bones: Porcelain\r\nPackaging information: 3 tablets/box\r\nApplication: Flooring','2023-10-10'),(37,'image/18080ROME001-H.jpg','Homogeneous Matte Gloss HG4502',8,'yellow',75,24,'Bach Ma Tiles','45x45','Product code: HG4502\r\nProduct type: Homogeneous Matte Gloss\r\nBrand: Bach Ma Tiles\r\nTechnology: Europe\r\nType: A1\r\nSize: 45x45 cm\r\nColor: Beige\r\nPattern: Stone pattern, 5 Face\r\nSurface: Salt and pepper tiles\r\nBrick frame: Granite','2023-10-10'),(38,'image/1gach-lat-nen-thach-anh-60x60-keraben-p6060-trmk.jpg','Keraben Rough P6060 TRMK',18,'brown',80,24,'Dong Tam Brick','60x60','Product code: P6060 TRMK\r\nProduct type:  Floor tiles 60x60\r\nBrand: Dong Tam Brick\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet Nam','2023-10-10'),(39,'image/HTB1Z7rPgAUmBKNjSZFOq6yb2XXau.jpg','Keraben Rough P6061 TRMK',18,'pink',67,24,'Bach Ma Tiles','60x60','Product code: P6061 TRMK\r\nProduct type:  Floor tiles 60x60\r\nBrand: Bach Ma Tiles\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet Nam','2023-10-10'),(40,'image/2gach-lat-nen-viglacera-m-414.jpg','Keraben Matte P6060 CEBL',17,'white',97,24,'Dong Tam Brick','60x60','Product code: P6060 CEBL\r\nProduct type:  Imitation cement tiles\r\nBrand: Dong Tam Brick\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: Europe\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet Nam','2023-10-10'),(41,'image/1gach-viglacera-sh-808.jpg','Viglacera SH-GP808 floor tiles',20,'brown',47,14,'Viglacera','80x80','Product code: SH-GP808\r\nProduct type: Floor tiles 80x80\r\nCollection: Red River\r\nBrick bones: Porcelain\r\nSize: 80x80cm\r\nEnamel surface: Polish glossy enamel\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nBrand: Viglacera\r\nApplication: Floor tiles\r\nPackaging: 3 tablets/box','2023-10-10'),(42,'image/mm6616.jpg','Chinese 60×60 tiles DBY66186',15,'pink',68,15,'Chinese Tiles','60x60','Product code: DBY66186\r\nProduct type:  Floor tiles 60x60\r\nBrand: Chinese Tiles\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: glazed porcelain\r\nProduction technology: CHINA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in China','2023-10-10'),(43,'image/18b8066-Light-Yellow-Full-Polished-Glazed-Floor-Tile.jpg','Homogeneous Matte Gloss HG4502',17,'yellow',64,15,'Bach Ma Tiles','45x45','Product code: HG4502\r\nProduct type: Homogeneous Matte Gloss\r\nBrand: Bach Ma Tiles\r\nTechnology: Europe\r\nType: A1\r\nSize: 45x45 cm\r\nColor: Beige\r\nPattern: Stone pattern, 5 Face\r\nSurface: Salt and pepper tiles\r\nBrick frame: Granite','2023-10-10'),(44,'image/2gach-viglacera-sh-808.jpg','Viglacera SH-GP808 floor tiles',20,'brown',58,15,'Viglacera','80x80','Product code: SH-GP808\r\nProduct type: Floor tiles 80x80\r\nCollection: Red River\r\nBrick bones: Porcelain\r\nSize: 80x80cm\r\nEnamel surface: Polish glossy enamel\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nBrand: Viglacera\r\nApplication: Floor tiles\r\nPackaging: 3 tablets/box','2023-10-10'),(45,'image/1lynx-brown-50x50-2m2-floor-tile.jpg','Eurotile DAV D04 tiles',15,'brown',69,15,'Eurotile','30x90','Product code: DAV D04\r\nSize: 30x90cm\r\nFunction: Wall  and floor tiles\r\nGach bone: Granite\r\nTile glaze: Matt glaze\r\nTile surface: Rough\r\nPattern: Fabric pattern\r\nColor: Latte','2023-10-10'),(46,'image/11.jpg','Eurotile VOC G03 ceramic tiles',12,'black',55,25,'Eurotile','30x60','Product code:  VOC G03\r\nTile type:  Ceramic tiles\r\nCollection: Vong sand\r\nBrand: Eurotile \r\nSize: 30x60cm\r\nTile type: Porcelain\r\nSurface: Matt, digital printing, random\r\nPattern: Cement\r\nPackaging: 06 tablets/box (1.08m2)\r\nOrigin: Vietnam','2023-10-10'),(47,'image/3images.jpg','Viglacera Q2556 wall tiles',12,'black',53,25,'Viglacera','25x40','Product code: Q2556\r\nSize: 25x40cm\r\nTile type: Ceramic\r\nColor: Black\r\nPattern: Stone pattern\r\nTile surface: Polished\r\nFunction: Wall tiles','2023-10-10'),(48,'image/4images.jpg','Viglacera CL-GP4806 tiles',15,'orange',85,25,'Viglacera','40x80','Product code: CL-GP4806\r\nBrand: Viglacera\r\nTile line: Porcelain\r\nSize: 40x80 cm\r\nEnamel surface: Glossy enamel\r\nFunction: Tiles\r\nMade in Viet Nam\r\nPackaging: 3 tablets/box','2023-10-10'),(49,'image/1petra-brown-RAK-vitrified-floor-tiles.jpg','Viglacera GA403 tiles',14,'brown',67,25,'Viglacera','40x40','Product code:  GA403\r\nUses:  Tiles\r\nSize: 40×40 cm\r\nSurface: Rough\r\nType: Ceramic\r\nPackaging information: 6 tablets/box\r\nBrand: Viglacera\r\nOrigin: Vietnam','2023-10-10'),(50,'image/1modula--avera-av-030-surface-pro-sq-arcit18.jpg','Viglacera GA401 tiles',16,'red',90,25,'Viglacera','40x40','Product code: GA401\r\nUses: Tiles\r\nSize: 40×40 cm\r\nSurface: Rough\r\nType: Ceramic\r\nPackaging information: 6 tablets/box\r\nBrand: Viglacera  \r\nOrigin: Vietnam','2023-10-10'),(51,'image/1sparko-brown-RAK-vitrified-floor-tiles-kottayam-thiruvalla.jpg','Viglacera S 411 floor tiles',18,'brown',78,15,'Viglacera','40x40','Product code: S411\r\nProduct type: Floor tiles 40x40\r\nBrand: Viglacera\r\nProduction technology: Europe\r\nBrick bones:  Ceramic\r\nFeatures: Anti-moss and mold\r\nSize: 40x40 cm\r\nSurface: Rough\r\nUses: Exterior garden tiles\r\nPackaging: 6 tablets/box','2023-10-10'),(52,'image/2gach-lat-nen-thach-anh-60x60-keraben-p6060-trmk.jpg','Viglacera S 411 floor tiles',18,'brown',75,16,'Viglacera','40x40','Product code: S411\r\nProduct type: Floor tiles 40x40\r\nBrand: Viglacera\r\nProduction technology: Europe\r\nBrick bones:  Ceramic\r\nFeatures: Anti-moss and mold\r\nSize: 40x40 cm\r\nSurface: Rough\r\nUses: Exterior garden tiles\r\nPackaging: 6 tablets/box','2023-10-10'),(53,'image/28080ROME001-H.jpg','Viglacera S402 floor tiles',16,'yellow',80,16,'Viglacera','40x40','Product code: S402\r\nFunction: Floor tiles\r\nPattern: Imitation stone \r\nBrick bones: Ceramic\r\nSurface: Matt enamel\r\nSize: 40x40cm','2023-10-10'),(54,'image/1422-orange.jpg','Viglacera GF445 floor tiles',14,'orange',69,12116,'Viglacera','40x40','Product code: GF445\r\nSize: 40x40cm\r\nSurface: Rough\r\nTile glaze: Matt glaze\r\nFunction: Floor tiles , garden tiles\r\nBrand: Viglacera','2023-10-10'),(55,'image/3gach-viglacera-sh-808.jpg','Viglacera GA403 tiles',14,'brown',76,16,'Viglacera','40x40','Product code:  GA403\r\nUses:  Tiles\r\nSize: 40×40 cm\r\nSurface: Rough\r\nType: Ceramic\r\nPackaging information: 6 tablets/box\r\nBrand: Viglacera\r\nOrigin: Vietnam','2023-10-10'),(56,'image/2gft_bdw_rubra_strip_brown_ft_germfree_forever_tiles_porcelain.jpg','Eurotile DAV D04 tiles',15,'brown',89,26,'Eurotile','30x90','Product code: DAV D04\r\nSize: 30x90cm\r\nFunction: Wall  and floor tiles\r\nGach bone: Granite\r\nTile glaze: Matt glaze\r\nTile surface: Rough\r\nPattern: Fabric pattern\r\nColor: Latte','2023-10-10'),(57,'image/118780_gach_porcelain_tasa_60x60_men_bong_6621.jpg','Eurotile NGC D04 tiles',17,'yellow',87,26,'Eurotile','30x90','Product code: NGC D04\r\nSize: 30x90cm\r\nBrick frame: Granite\r\nPattern: Van Stone\r\nTile glaze: Matt glaze\r\nSurface: Rough\r\nFunction: Tiles\r\nRandom 5 Face product\r\nCollection: Nguyet Cat\r\nFiring temperature: Above 1200ºC for perfect connection.\r\nFlexural strength: 43.6 MPA\r\nWater absorption: &amp;amp;lt; 0.09 %\r\nAbrasion resistance: Abrasion resistance &amp;amp;gt; 700 rounds / 1 minute .','2023-10-10'),(58,'image/3tải xuống.jpg','Viglacera F3600 wall tiles',12,'white',87,26,'Viglacera','30x60','Product code: F3600\r\nProduct type: Wall tiles 30x60\r\nBrand: Viglacera\r\nSize: 30x60mm\r\nSurface: rough brick\r\nPattern: White\r\nFunction: Wall tiles\r\nMade in Viet Nam','2023-10-10'),(59,'image/4tải xuống.jpg','Platinum CB-P809 floor tiles',16,'black',90,26,'Viglacera Platinum','80x80','Product code: CB-P809 \r\nFunction: Floor tiles\r\nBrand: Viglacera Platinum\r\nSize: 80x80 cm\r\nSurface: Polished\r\nBrick frame: Granite\r\nSame quality bricks\r\nPackaging: 3 tablets/box','2023-10-10'),(60,'image/1gach-lat-nen-viglacera-vhp-6601.jpg','Viglacera SH-GP802 floor tiles',18,'white',77,26,'Viglacera','60x60','Product code: SH-GP802\r\nProduct type: Floor tiles\r\nSize: 80x80 cm\r\nSurface: glossy\r\nBrick bones: Porcelain\r\nPackaging information: 3 tablets/box\r\nApplication: Flooring','2023-10-10'),(61,'image/1mm6616.jpg','Keraben Rough P6061 TRMK',18,'pink',96,16,'Bach Ma Tiles','60x60','Product code: P6061 TRMK\r\nProduct type:  Floor tiles 60x60\r\nBrand: Bach Ma Tiles\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet Nam','2023-10-10'),(62,'image/1_clas752479_5f7f4316e905a.jpg','Eurotile THD G04 tiles',15,'black',66,17,'Eurotile','30x60','Product code: THD G04\r\nBrand:  Eurotile\r\nSize: 30x60 cm\r\nPattern: Cement Texture\r\nSurface: Rough\r\nType of enamel: Matt enamel\r\nBrick frame: Granite\r\nFunction:  Wall  and floor tiles\r\nRandom 5 Face product','2023-10-10'),(63,'image/28b8066-Light-Yellow-Full-Polished-Glazed-Floor-Tile.jpg','Viglacera GF449 tiles',16,'yellow',86,17,'Viglacera','40x40','Product code: GF449\r\nFunction: Floor tiles\r\nPattern: Imitation stone \r\nBrick bones: Ceramic\r\nSurface: Matt enamel\r\nSize: 40x40cm','2023-10-10'),(64,'image/3floor-tiles.jpg','Eurotile PHS G02 ceramic tiles',12,'white',75,17,'Eurotile','30x60','Product code: PHS G02\r\nFunction: Tiles\r\nSize (cm): 30x60\r\nPattern: Van Stone\r\nSurface: Rough\r\nType of enamel: Matt enamel\r\nBrick color: Cream color (Cream)\r\nBrick frame: Granite\r\nRandom 5 Face product','2023-10-10'),(65,'image/2gach-lat-nen-van-da-60x60-keraben-p6060-cebl.jpg','Keraben Matte P6060 CEBL',17,'white',78,17,'Dong Tam Brick','60x60','Product code: P6060 CEBL\r\nProduct type:  Imitation cement tiles\r\nBrand: Dong Tam Brick\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: Europe\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet Nam','2023-10-10'),(66,'image/1DECCLOPIN55G.jpg','Keraben Rough P6061 TRMK',18,'pink',70,27,'Bach Ma Tiles','60x60','Product code: P6061 TRMK\r\nProduct type:  Floor tiles 60x60\r\nBrand: Bach Ma Tiles\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet Nam','2023-10-10'),(67,'image/3gach-lat-nen-thach-anh-60x60-keraben-p6060-trmk.jpg','Keraben Rough P6060 TRMK',18,'brown',90,27,'Dong Tam Brick','60x60','Product code: P6060 TRMK\r\nProduct type:  Floor tiles 60x60\r\nBrand: Dong Tam Brick\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet Nam','2023-10-10'),(68,'image/3gach-lat-nen-viglacera-m-414.jpg','Viglacera SH-GP802 floor tiles',18,'white',56,27,'Viglacera','80x80','Product code: SH-GP802\r\nProduct type: Floor tiles\r\nSize: 80x80 cm\r\nSurface: glossy\r\nBrick bones: Porcelain\r\nPackaging information: 3 tablets/box\r\nApplication: Flooring','2023-10-10'),(69,'image/16797_gach_lat_nen_toko_600x600_3d_55.jpg','Homogeneous Matte Gloss HG4502',8,'yellow',74,27,'Bach Ma Tiles','45x45','Product code: HG4502\r\nProduct type: Homogeneous Matte Gloss\r\nBrand: Bach Ma Tiles\r\nTechnology: Europe\r\nType: A1\r\nSize: 45x45 cm\r\nColor: Beige\r\nPattern: Stone pattern, 5 Face\r\nSurface: Salt and pepper tiles\r\nBrick frame: Granite','2023-10-10'),(70,'image/2gach-lat-nen-viglacera-vhp-6601.jpg','Viglacera VHP6601 floor tiles',15,'white',56,27,'Viglacera','60x60','Product code: VHP6601\r\nProduct type:  Floor tiles 60x60\r\nBrand: Viglacera\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet Nam','2023-10-10'),(71,'image/4gach-viglacera-sh-808.jpg','Viglacera SH-GP808 floor tiles',20,'brown',87,17,'Viglacera','80x80','Product code: SH-GP808\r\nProduct type: Floor tiles 80x80\r\nCollection: Red River\r\nBrick bones: Porcelain\r\nSize: 80x80cm\r\nEnamel surface: Polish glossy enamel\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nBrand: Viglacera\r\nApplication: Floor tiles\r\nPackaging: 3 tablets/box','2023-10-10'),(72,'image/5tải xuống.jpg','Eurotile HOD D01 ceramic tiles',15,'white',76,18,'Eurotile','30x90','Product code: HOD D01\r\nFunction: Wall  and floor tiles\r\nSize: 30x90cm\r\nPattern: Stone pattern\r\nColor: Gray white\r\nBrick frame: Granite\r\nBrand: Viglacera','2023-10-10'),(73,'image/15021.png','Viglacera GA401 tiles',16,'red',97,18,'Viglacera','40x40','Product code: GA401\r\nUses: Tiles\r\nSize: 40×40 cm\r\nSurface: Rough\r\nType: Ceramic\r\nPackaging information: 6 tablets/box\r\nBrand: Viglacera  \r\nOrigin: Vietnam','2023-10-10'),(74,'image/218780_gach_porcelain_tasa_60x60_men_bong_6621.jpg','Homogeneous Matte Gloss HG4502',10,'yellow',43,18,'Bach Ma Tiles','45x45','Product code: HG4502\r\nProduct type: Homogeneous Matte Gloss\r\nBrand: Bach Ma Tiles\r\nTechnology: Europe\r\nType: A1\r\nSize: 45x45 cm\r\nColor: Beige\r\nPattern: Stone pattern, 5 Face\r\nSurface: Salt and pepper tiles\r\nBrick frame: Granite','2023-10-10'),(75,'image/1gach-platinum-cb-p809.jpg','Viglacera Q2556 wall tiles',12,'black',68,18,'Viglacera','25x40','Product code: Q2556\r\nSize: 25x40cm\r\nTile type: Ceramic\r\nColor: Black\r\nPattern: Stone pattern\r\nTile surface: Polished\r\nFunction: Wall tiles','2023-10-10'),(76,'image/jade-black-tile-597947.jpg','Platinum CB-P809 floor tiles',16,'black',96,28,'Viglacera Platinum','80x80','Product code: CB-P809 \r\nFunction: Floor tiles\r\nBrand: Viglacera Platinum\r\nSize: 80x80 cm\r\nSurface: Polished\r\nBrick frame: Granite\r\nSame quality bricks\r\nPackaging: 3 tablets/box','2023-10-10'),(77,'image/4floor-tiles.jpg','Viglacera VHP6601 floor tiles',15,'white',56,28,'Viglacera','60x60','Product code: VHP6601\r\nProduct type:  Floor tiles 60x60\r\nBrand: Viglacera\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet Nam','2023-10-10'),(78,'image/2mm6616.jpg','Keraben Rough P6061 TRMK',18,'pink',23,28,'Bach Ma Tiles','60x60','Product code: P6061 TRMK\r\nProduct type:  Floor tiles 60x60\r\nBrand: Bach Ma Tiles\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet Nam','2023-10-10'),(79,'image/gach-xuong-da-do-van-trang-60x60-bong-kinh-trung-quoc-dby66186-300x300.jpg','Viglacera GA401 tiles',16,'red',89,28,'Viglacera','40x40','Product code: GA401\r\nUses: Tiles\r\nSize: 40×40 cm\r\nSurface: Rough\r\nType: Ceramic\r\nPackaging information: 6 tablets/box\r\nBrand: Viglacera  \r\nOrigin: Vietnam','2023-10-10'),(80,'image/3gach-lat-nen-van-da-60x60-keraben-p6060-cebl.jpg','Eurotile HOD D01 ceramic tiles',15,'white',65,28,'Eurotile','30x90','Product code: HOD D01\r\nFunction: Wall  and floor tiles\r\nSize: 30x90cm\r\nPattern: Stone pattern\r\nColor: Gray white\r\nBrick frame: Granite\r\nBrand: Eurotile','2023-10-10'),(81,'image/1gach-men-mau-vang-van-da-c605-dna-600mmx600mm.jpg','Eurotile NGC D04 tiles',17,'yellow',67,19,'Eurotile','30x90','Product code: NGC D04\r\nSize: 30x90cm\r\nBrick frame: Granite\r\nPattern: Van Stone\r\nTile glaze: Matt glaze\r\nSurface: Rough\r\nFunction: Tiles\r\nRandom 5 Face product\r\nCollection: Nguyet Cat\r\nFiring temperature: Above 1200ºC for perfect connection.\r\nFlexural strength: 43.6 MPA\r\nWater absorption: &amp;amp;lt; 0.09 %\r\nAbrasion resistance: Abrasion resistance &amp;amp;gt; 700 rounds / 1 minute .','2023-10-10'),(82,'image/4gach-lat-nen-viglacera-m-414.jpg','Eurotile PHS G02 ceramic tiles',12,'white',65,19,'Eurotile','30x60','Product code: PHS G02\r\nFunction: Tiles\r\nSize (cm): 30x60\r\nPattern: Van Stone\r\nSurface: Rough\r\nType of enamel: Matt enamel\r\nBrick color: Cream color (Cream)\r\nBrick frame: Granite\r\nRandom 5 Face product','2023-10-10'),(83,'image/3gach-lat-nen-viglacera-vhp-6601.jpg','Viglacera M414 floor tiles',15,'white',98,19,'Viglacera','40x40','Product code: M414\r\nUses: Floor tiles\r\nSize: 40×40 cm\r\nSurface: Rough\r\nType: Ceramic\r\nPackaging information: 6 tablets/box\r\nBrand: Viglacera\r\nMade in Viet Nam','2023-10-10'),(84,'image/rosso-jasper-1.jpg','Viglacera GA401 tiles',16,'red',56,19,'Viglacera','40x40','Product code: GA401\r\nUses: Tiles\r\nSize: 40×40 cm\r\nSurface: Rough\r\nType: Ceramic\r\nPackaging information: 6 tablets/box\r\nBrand: Viglacera  \r\nOrigin: Vietnam','2023-10-10'),(85,'image/2422-orange.jpg','Viglacera GF445 floor tiles',14,'orange',76,19,'Viglacera','40x40','Product code: GF445\r\nSize: 40x40cm\r\nSurface: Rough\r\nTile glaze: Matt glaze\r\nFunction: Floor tiles , garden tiles\r\nBrand: Viglacera','2023-10-10'),(86,'image/1HTB1Z7rPgAUmBKNjSZFOq6yb2XXau.jpg','Viglacera CL-GP4804 tiles',15,'pink',87,19,'Viglacera','40x80','Product code: CL-GP4804\r\nBrand: Viglacera\r\nTile line: Porcelain\r\nSize: 40x80 cm\r\nEnamel surface: Glossy enamel\r\nFunction: Tiles\r\nMade in Viet Nam\r\nPackaging: 3 tablets/box','2023-10-10'),(87,'image/2DECCLOPIN55G.jpg','Viglacera Q2500 wall tiles',11,'pink',76,19,'Viglacera','25x40','Size: 25x40cm\r\nTile type: Ceramic\r\nColor: White\r\nPattern: Plain\r\nTile surface: Polished\r\nFunction: Wall tiles\r\nPackaging: 10 tablets/box','2023-10-10'),(88,'image/21.jpg','Viglacera Q2556 wall tiles',12,'black',37,19,'Viglacera','25x40','Product code: Q2556\r\nSize: 25x40cm\r\nTile type: Ceramic\r\nColor: Black\r\nPattern: Stone pattern\r\nTile surface: Polished\r\nFunction: Wall tiles','2023-10-10'),(89,'image/1gach-lat-nen-viglacera-ga-401-3.jpg','Chinese 60×60 tiles DBY66186',15,'red',35,19,'Chinese Tiles','60x60','Product code: DBY66186\r\nProduct type:  Floor tiles 60x60\r\nBrand: Chinese Tiles\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: glazed porcelain\r\nProduction technology: CHINA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in China','2023-10-10'),(90,'image/2sparko-brown-RAK-vitrified-floor-tiles-kottayam-thiruvalla.jpg','Viglacera SH-GP808 floor tiles',20,'brown',64,19,'Viglacera','80x80','Product code: SH-GP808\r\nProduct type: Floor tiles 80x80\r\nCollection: Red River\r\nBrick bones: Porcelain\r\nSize: 80x80cm\r\nEnamel surface: Polish glossy enamel\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nBrand: Viglacera\r\nApplication: Floor tiles\r\nPackaging: 3 tablets/box','2023-10-10'),(91,'image/5gach-viglacera-sh-808.jpg','Keraben Rough P6060 TRMK',18,'brown',34,9,'Dong Tam Brick','60x60','Product code: P6060 TRMK\r\nProduct type:  Floor tiles 60x60\r\nBrand: Dong Tam Brick\r\nBrick frame: Granite\r\nSize: 60x60cm\r\nTile glaze: Matt glaze\r\nProduction technology: ITALIA\r\nPrinting technology: Digital\r\nFunction: Floor tiles\r\nMade in Viet Nam','2023-10-10');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-11 21:44:03
