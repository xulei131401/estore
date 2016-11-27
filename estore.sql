-- MySQL dump 10.13  Distrib 5.7.11, for Win64 (x86_64)
--
-- Host: localhost    Database: estore
-- ------------------------------------------------------
-- Server version	5.7.11-log

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
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '购物车表主键',
  `goods_id` int(11) DEFAULT NULL COMMENT '商品ＩＤ',
  `goods_name` varchar(255) DEFAULT NULL COMMENT '商品名字',
  `goods_pic` varchar(255) DEFAULT NULL COMMENT '商品图片',
  `goods_price` double DEFAULT NULL COMMENT '商品单价',
  `store_price` double DEFAULT NULL COMMENT '市场价格',
  `num` int(11) DEFAULT NULL COMMENT '购买数量',
  `amount` double DEFAULT NULL COMMENT '小计',
  `user_id` int(11) DEFAULT NULL COMMENT '关联的用户ＩＤ',
  `count` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='购物车表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL COMMENT '商品分类名',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父id（默认为0）',
  `level` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '默认为第一层１',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COMMENT='商品分类表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'男装',0,1),(2,'女装',0,1),(3,'鞋靴',0,1),(4,'男衬衫',1,2),(5,'男鞋',3,2),(6,'女鞋',3,2),(7,'连衣裙',2,2),(8,'打底裤',2,2),(12,'男长衬衫',4,3),(13,'女T恤',2,2),(14,'男运动裤',28,3),(15,'女长T恤',13,3),(16,'女短T恤',13,3),(17,'女黑色连衣裙',7,3),(18,'女白色连衣裙',7,3),(19,'黑色打底裤',8,3),(20,'纯棉打底裤',8,3),(21,'男皮鞋',5,3),(22,'男运动鞋',5,3),(23,'女高跟鞋',6,3),(24,'女皮鞋',6,3),(25,'夹克',1,2),(26,'男青年夹克',25,3),(27,'男老年夹克',25,3),(28,'男裤',1,2);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品主键',
  `goods_name` varchar(45) DEFAULT NULL COMMENT '商品名字',
  `goods_price` double DEFAULT NULL COMMENT '市场价格',
  `goods_pic` varchar(255) DEFAULT NULL COMMENT '商品图片',
  `count` int(20) DEFAULT NULL COMMENT '库存',
  `regtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '上架时间',
  `store_price` int(20) DEFAULT NULL COMMENT '本店价格',
  `description` text COMMENT '商品描述',
  `hits` int(30) NOT NULL DEFAULT '0' COMMENT '商品点击数',
  `category_id` int(20) unsigned NOT NULL COMMENT '关联的商品分类ID',
  `recommend` int(10) NOT NULL DEFAULT '0' COMMENT '店主推荐',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COMMENT='商品表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (1,'七匹狼男皮鞋',70,'/estore/Public/Uploads/Goods/20161024/580dd3699f2e0.jpg',100,'2016-10-24 17:24:57',80,'七匹狼男皮鞋七匹狼男皮鞋七匹狼男皮鞋七匹狼男皮鞋七匹狼男皮鞋七匹狼男皮鞋七匹狼男皮鞋七匹狼男皮鞋',0,21,0),(2,'花花公子男皮鞋',60,'/estore/Public/Uploads/Goods/20161024/580dd3a5edcb0.jpg',100,'2016-10-24 17:25:57',70,'花花公子男皮鞋花花公子男皮鞋花花公子男皮鞋花花公子男皮鞋花花公子男皮鞋花花公子男皮鞋花花公子男皮鞋花花公子男皮鞋花花公子男皮鞋花花公子男皮鞋',0,21,0),(3,'鳄鱼男皮鞋',50,'/estore/Public/Uploads/Goods/20161024/580dd3cf4b320.jpg',100,'2016-10-24 17:26:39',60,'鳄鱼男皮鞋鳄鱼男皮鞋鳄鱼男皮鞋鳄鱼男皮鞋鳄鱼男皮鞋鳄鱼男皮鞋鳄鱼男皮鞋鳄鱼男皮鞋',0,0,0),(4,'纯棉打底裤1',50,'/estore/Public/Uploads/Goods/20161024/580dd3fa40740.jpg',100,'2016-10-24 17:27:22',60,'纯棉打底裤1纯棉打底裤1纯棉打底裤1纯棉打底裤1纯棉打底裤1纯棉打底裤1纯棉打底裤1纯棉打底裤1纯棉打底裤1',0,20,0),(5,'纯棉打底裤2',60,'/estore/Public/Uploads/Goods/20161024/580dd41536330.jpg',100,'2016-10-24 17:27:49',70,'纯棉打底裤2纯棉打底裤2纯棉打底裤2纯棉打底裤2纯棉打底裤2纯棉打底裤2',0,20,0),(6,'纯棉打底裤3',70,'/estore/Public/Uploads/Goods/20161024/580dd42b4c6a8.jpg',100,'2016-10-24 17:28:11',80,'纯棉打底裤3纯棉打底裤3纯棉打底裤3纯棉打底裤3纯棉打底裤3纯棉打底裤3纯棉打底裤3纯棉打底裤3纯棉打底裤3纯棉打底裤3纯棉打底裤3',0,20,1),(7,'黑色打底裤1',50,'/estore/Public/Uploads/Goods/20161024/580dd4504bed8.jpg',100,'2016-10-24 17:28:48',66,'黑色打底裤1黑色打底裤1黑色打底裤1黑色打底裤1黑色打底裤1黑色打底裤1黑色打底裤1黑色打底裤1黑色打底裤1黑色打底裤1',0,19,0),(8,'黑色打底裤2',33,'/estore/Public/Uploads/Goods/20161024/580dd4679c7e8.jpg',100,'2016-10-24 17:29:11',62,'黑色打底裤2黑色打底裤2黑色打底裤2黑色打底裤2黑色打底裤2黑色打底裤2黑色打底裤2黑色打底裤2黑色打底裤2黑色打底裤2黑色打底裤2黑色打底裤2黑色打底裤2黑色打底裤2',0,19,0),(9,'黑色打底裤3',56,'/estore/Public/Uploads/Goods/20161024/580dd48153bd8.jpg',100,'2016-10-24 17:29:37',66,'黑色打底裤3黑色打底裤3黑色打底裤3黑色打底裤3黑色打底裤3黑色打底裤3黑色打底裤3',0,19,0),(10,'男老年夹克衫1',45,'/estore/Public/Uploads/Goods/20161024/580dd4ae537f0.jpg',100,'2016-10-24 17:30:22',120,'男老年夹克衫1男老年夹克衫1男老年夹克衫1男老年夹克衫1男老年夹克衫1男老年夹克衫1男老年夹克衫1',0,27,0),(11,'男老年夹克衫2',47,'/estore/Public/Uploads/Goods/20161024/580dd4f4d36d0.jpg',100,'2016-10-24 17:31:32',77,'男老年夹克衫2男老年夹克衫2男老年夹克衫2男老年夹克衫2v',0,27,0),(12,'男老年夹克衫3',48,'/estore/Public/Uploads/Goods/20161024/580dd50b9b460.jpg',100,'2016-10-24 17:31:55',89,'男老年夹克衫3男老年夹克衫3男老年夹克衫3男老年夹克衫3男老年夹克衫3男老年夹克衫3',0,27,0),(13,'男青年夹克衫1',59,'/estore/Public/Uploads/Goods/20161024/580dd53293378.jpg',100,'2016-10-24 17:32:34',120,'男青年夹克衫1男青年夹克衫1男青年夹克衫1男青年夹克衫1男青年夹克衫1男青年夹克衫1',0,26,0),(14,'男青年夹克衫2',36,'/estore/Public/Uploads/Goods/20161024/580dd54b157c0.jpg',100,'2016-10-24 17:32:59',145,'男青年夹克衫2男青年夹克衫2男青年夹克衫2男青年夹克衫2男青年夹克衫2男青年夹克衫2男青年夹克衫2',0,26,0),(15,'男青年夹克衫3',36,'/estore/Public/Uploads/Goods/20161024/580dd561a50a0.jpg',100,'2016-10-24 17:33:21',125,'男青年夹克衫3男青年夹克衫3男青年夹克衫3男青年夹克衫3男青年夹克衫3男青年夹克衫3男青年夹克衫3男青年夹克衫3',0,26,0),(16,'男运动裤1',46,'/estore/Public/Uploads/Goods/20161024/580dd60f46118.jpg',100,'2016-10-24 17:36:15',62,'男运动裤1男运动裤1男运动裤1男运动裤1男运动裤1男运动裤1',0,14,0),(17,'男运动裤2',69,'/estore/Public/Uploads/Goods/20161024/580dd62994ed0.jpg',100,'2016-10-24 17:36:41',96,'男运动裤2男运动裤2男运动裤2男运动裤2男运动裤2男运动裤2男运动裤2男运动裤2男运动裤2男运动裤2男运动裤2',0,14,0),(18,'男运动裤3',16,'/estore/Public/Uploads/Goods/20161024/580dd63e76a70.jpg',100,'2016-10-24 17:37:02',62,'男运动裤3男运动裤3男运动裤3男运动裤3男运动裤3',0,14,0),(19,'男运动鞋1',45,'/estore/Public/Uploads/Goods/20161024/580dd663c3500.jpg',100,'2016-10-24 17:37:39',56,'男运动鞋1男运动鞋1男运动鞋1男运动鞋1男运动鞋1男运动鞋1男运动鞋1男运动鞋1男运动鞋1',0,22,0),(20,'男运动鞋2',33,'/estore/Public/Uploads/Goods/20161024/580dd68049bb0.jpg',100,'2016-10-24 17:38:08',69,'男运动鞋2男运动鞋2男运动鞋2男运动鞋2男运动鞋2男运动鞋2男运动鞋2男运动鞋2v',0,22,0),(21,'男运动鞋3',55,'/estore/Public/Uploads/Goods/20161024/580dd696c9a90.jpg',100,'2016-10-24 17:38:30',89,'男运动鞋3男运动鞋3男运动鞋3男运动鞋3男运动鞋3男运动鞋3男运动鞋3男运动鞋3男运动鞋3男运动鞋3男运动鞋3',0,22,0),(22,'男长衬衫1',22,'/estore/Public/Uploads/Goods/20161024/580dd714a7b98.jpg',100,'2016-10-24 17:40:36',55,'男长衬衫1男长衬衫1男长衬衫1男长衬衫1男长衬衫1男长衬衫1男长衬衫1男长衬衫1男长衬衫1',0,12,0),(23,'男长衬衫2',55,'/estore/Public/Uploads/Goods/20161024/580dd72d4a768.jpg',100,'2016-10-24 17:41:01',99,'男长衬衫2男长衬衫2男长衬衫2男长衬衫2男长衬衫2男长衬衫2男长衬衫2男长衬衫2',0,12,1),(24,'男长衬衫3',85,'/estore/Public/Uploads/Goods/20161024/580dd743a0e38.jpg',100,'2016-10-24 17:41:23',97,'男长衬衫3男长衬衫3男长衬衫3男长衬衫3男长衬衫3男长衬衫3男长衬衫3男长衬衫3',0,12,0),(25,'女白色连衣裙1',35,'/estore/Public/Uploads/Goods/20161024/580dd79b71868.jpg',100,'2016-10-24 17:42:51',52,'女白色连衣裙1女白色连衣裙1女白色连衣裙1女白色连衣裙1女白色连衣裙1',0,18,0),(26,'女白色连衣裙2',22,'/estore/Public/Uploads/Goods/20161024/580dd7b1c5ff8.jpg',100,'2016-10-24 17:43:13',36,'女白色连衣裙2女白色连衣裙2女白色连衣裙2女白色连衣裙2女白色连衣裙2女白色连衣裙2女白色连衣裙2女白色连衣裙2女白色连衣裙2女白色连衣裙2女白色连衣裙2女白色连衣裙2',0,18,1),(27,'女白色连衣裙3',14,'/estore/Public/Uploads/Goods/20161024/580dd7c8f07a8.jpg',100,'2016-10-24 17:43:36',58,'女白色连衣裙3女白色连衣裙3女白色连衣裙3女白色连衣裙3女白色连衣裙3女白色连衣裙3女白色连衣裙3女白色连衣裙3女白色连衣裙3女白色连衣裙3女白色连衣裙3',0,18,0),(28,'女黑色连衣裙1',25,'/estore/Public/Uploads/Goods/20161024/580dd7e6bfe50.jpg',100,'2016-10-24 17:44:06',63,'女黑色连衣裙1女黑色连衣裙1女黑色连衣裙1女黑色连衣裙1女黑色连衣裙1女黑色连衣裙1女黑色连衣裙1女黑色连衣裙1',0,17,0),(29,'女黑色连衣裙2',24,'/estore/Public/Uploads/Goods/20161024/580dd7fcf03c0.jpg',100,'2016-10-24 17:44:28',58,'女黑色连衣裙2女黑色连衣裙2女黑色连衣裙2女黑色连衣裙2女黑色连衣裙2女黑色连衣裙2女黑色连衣裙2女黑色连衣裙2',0,17,0),(30,'女黑色连衣裙3',36,'/estore/Public/Uploads/Goods/20161024/580dd8105dfe8.jpg',100,'2016-10-24 17:44:48',63,'女黑色连衣裙3女黑色连衣裙3女黑色连衣裙3女黑色连衣裙3女黑色连衣裙3女黑色连衣裙3女黑色连衣裙3女黑色连衣裙3女黑色连衣裙3女黑色连衣裙3',0,17,0),(31,'女短T恤1',45,'/estore/Public/Uploads/Goods/20161024/580dd8342e248.jpg',100,'2016-10-24 17:45:24',54,'女短T恤1女短T恤1女短T恤1女短T恤1女短T恤1女短T恤1',0,16,0),(32,'女短T恤2',33,'/estore/Public/Uploads/Goods/20161024/580dd84ad84f0.jpg',100,'2016-10-24 17:45:46',66,'女短T恤2女短T恤2女短T恤2女短T恤2女短T恤2女短T恤2女短T恤2女短T恤2女短T恤2女短T恤2',0,16,0),(33,'女短T恤3',57,'/estore/Public/Uploads/Goods/20161024/580dd86064578.jpg',100,'2016-10-24 17:46:08',75,'女短T恤3女短T恤3女短T恤3女短T恤3女短T恤3女短T恤3女短T恤3女短T恤3女短T恤3',0,16,0),(34,'女高跟鞋1',66,'/estore/Public/Uploads/Goods/20161024/580dd87d68bc8.jpg',100,'2016-10-24 17:46:37',77,'女高跟鞋1女高跟鞋1女高跟鞋1女高跟鞋1女高跟鞋1女高跟鞋1女高跟鞋1女高跟鞋1女高跟鞋1',0,23,0),(35,'女高跟鞋2',66,'/estore/Public/Uploads/Goods/20161024/580dd895d8cc0.jpg',100,'2016-10-24 17:47:01',96,'女高跟鞋2女高跟鞋2女高跟鞋2女高跟鞋2女高跟鞋2女高跟鞋2女高跟鞋2女高跟鞋2女高跟鞋2女高跟鞋2女高跟鞋2',0,23,0),(36,'女高跟鞋3',36,'/estore/Public/Uploads/Goods/20161024/580dd8aed2730.jpg',100,'2016-10-24 17:47:26',63,'女高跟鞋3女高跟鞋3女高跟鞋3女高跟鞋3女高跟鞋3女高跟鞋3女高跟鞋3女高跟鞋3女高跟鞋3女高跟鞋3',0,23,0),(37,'女皮鞋1',50,'/estore/Public/Uploads/Goods/20161024/580dd8cbd61c8.jpg',100,'2016-10-24 17:47:55',100,'女皮鞋1女皮鞋1女皮鞋1女皮鞋1女皮鞋1女皮鞋1女皮鞋1女皮鞋1女皮鞋1女皮鞋1女皮鞋1',0,24,0),(38,'女皮鞋2',60,'/estore/Public/Uploads/Goods/20161024/580dd8e784530.jpg',100,'2016-10-24 17:48:23',120,'女皮鞋2女皮鞋2女皮鞋2女皮鞋2女皮鞋2女皮鞋2女皮鞋2女皮鞋2女皮鞋2女皮鞋2女皮鞋2',0,24,0),(39,'女皮鞋3',69,'/estore/Public/Uploads/Goods/20161024/580dd8fd12cc8.jpg',100,'2016-10-24 17:48:45',130,'女皮鞋3女皮鞋3女皮鞋3女皮鞋3女皮鞋3女皮鞋3女皮鞋3女皮鞋3女皮鞋3女皮鞋3',0,24,0),(40,'女长T恤1',85,'/estore/Public/Uploads/Goods/20161024/580dd931d13a8.jpg',100,'2016-10-24 17:49:37',160,'女长T恤1女长T恤1女长T恤1女长T恤1女长T恤1女长T恤1女长T恤1女长T恤1女长T恤1',0,15,0),(41,'女长T恤2',56,'/estore/Public/Uploads/Goods/20161024/580dd94aa77b0.jpg',100,'2016-10-24 17:50:02',150,'女长T恤2女长T恤2女长T恤2女长T恤2女长T恤2女长T恤2女长T恤2女长T恤2女长T恤2女长T恤2女长T恤2女长T恤2',0,15,0),(42,'女长T恤3',65,'/estore/Public/Uploads/Goods/20161024/580dd9621c520.jpg',100,'2016-10-24 18:12:01',120,'女长T恤3女长T恤3女长T恤3女长T恤3女长T恤3女长T恤3女长T恤3女长T恤3',0,15,0);
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '排序主键',
  `order_id` bigint(30) DEFAULT NULL COMMENT '订单ID',
  `order_time` timestamp DEFAULT CURRENT_TIMESTAMP COMMENT '生成订单时间',
  `user_id` int(20) DEFAULT NULL COMMENT '用户ID',
  `total` int(11) NOT NULL COMMENT '订单总金额',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='订单表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1,1477302857,'2016-10-24 17:54:17',2,140),(2,1477466638,'2016-10-26 15:23:58',8,320),(3,1477466665,'2016-10-26 15:24:25',2,160);
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(30) DEFAULT NULL COMMENT '订单ＩＤ',
  `goods_id` int(11) DEFAULT NULL COMMENT '商品ＩＤ',
  `goods_name` varchar(45) DEFAULT NULL COMMENT '商品名称',
  `num` int(11) DEFAULT NULL COMMENT '购买数量',
  `total` double DEFAULT NULL COMMENT '订单总价',
  `store_price` double DEFAULT NULL COMMENT '商品出售价格',
  `user_id` int(11) DEFAULT NULL,
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '订单生成时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='商品订单表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_detail`
--

LOCK TABLES `order_detail` WRITE;
/*!40000 ALTER TABLE `order_detail` DISABLE KEYS */;
INSERT INTO `order_detail` VALUES (1,1477302857,3,'鳄鱼男皮鞋',1,140,60,2,'2016-10-24 17:54:17'),(2,1477302857,1,'七匹狼男皮鞋',1,140,80,2,'2016-10-24 17:54:17'),(3,1477466638,1,'七匹狼男皮鞋',2,320,80,8,'2016-10-26 15:23:58'),(4,1477466638,1,'七匹狼男皮鞋',2,320,80,8,'2016-10-26 15:23:58'),(5,1477466665,1,'七匹狼男皮鞋',2,160,80,2,'2016-10-26 15:24:25');
/*!40000 ALTER TABLE `order_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID主键',
  `account` varchar(255) DEFAULT NULL COMMENT '账号',
  `password` varchar(255) DEFAULT NULL COMMENT '密码',
  `sex` int(10) DEFAULT '0' COMMENT '性别',
  `pic` varchar(255) DEFAULT NULL COMMENT '头像',
  `birthday` varchar(255) DEFAULT NULL COMMENT '生日',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `identity` varchar(255) DEFAULT NULL COMMENT '身份证',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='用户表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'zhaoliu','e10adc3949ba59abbe56e057f20f883e',0,'/estore/Public/Uploads/20161024/580d72624d648.jpg','1996-06-13','373045134@qq.com','45454545'),(2,'lisi','e10adc3949ba59abbe56e057f20f883e',0,'/estore/PUBLIC/Index/images/t4.jpg','1996-06-13','4545454@qq.com','asdasdasdasd'),(3,'wangwu','e10adc3949ba59abbe56e057f20f883e',0,'/estore/PUBLIC/Index/images/t4.jpg','1996-06-13','4554545@qq.com','565656'),(8,'admin','21232f297a57a5a743894a0e4a801fc3',0,'/estore/PUBLIC/Index/images/t5.jpg','1996-06-13','373045134@qq.com','45454545');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_address`
--

DROP TABLE IF EXISTS `user_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `address` varchar(45) NOT NULL COMMENT '收货地址名称',
  `tel` varchar(45) NOT NULL COMMENT '收货地址电话',
  `email` varchar(45) NOT NULL COMMENT '收货地址邮箱',
  `user_name` varchar(255) NOT NULL COMMENT '收货人姓名',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='用户收货地址表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_address`
--

LOCK TABLES `user_address` WRITE;
/*!40000 ALTER TABLE `user_address` DISABLE KEYS */;
INSERT INTO `user_address` VALUES (1,2,'山西省太原市中北大学','4555','45455@qq.com','lisi'),(2,3,'北京市xxx胡同','56565656','232323@qq.com','wangwu'),(3,2,'山西省太原市中北大学','1843518xxxx','45455@qq.com','lisi'),(4,1,'山西省太原市中北大学','1843518xxxx','45455@qq.com','zhaoliu'),(6,1,'阿诗丹顿','ksajdhkasjd','asds是','zhaoliu');
/*!40000 ALTER TABLE `user_address` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-05 21:38:00
