/*
SQLyog Ultimate v10.3 
MySQL - 5.6.26 : Database - perpus_kominfo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`perpus_kominfo` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `perpus_kominfo`;

/*Table structure for table `anggota` */

DROP TABLE IF EXISTS `anggota`;

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nama_anggota` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `anggota` */

insert  into `anggota`(`id_anggota`,`nama_anggota`,`jk`,`alamat`) values (4,'Ardhi Wahyudhi','L','Kavling'),(5,'Mila Nurafiah','P','Jl. Raya serang'),(6,'Adham Wahyu','L','Jl. Keslamatan bersama');

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `jenis_buku` enum('Komik','Paket','Majalah') NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `jumlah` int(2) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `buku` */

insert  into `buku`(`id_buku`,`judul`,`jenis_buku`,`penerbit`,`tahun_terbit`,`jumlah`) values (1,'Detective Conan','Komik','PT. Media Elexindo','2015',5),(2,'Sosiologi Terpadu','Paket','Erlangga Corp','2018',5);

/*Table structure for table `detail_transaksi` */

DROP TABLE IF EXISTS `detail_transaksi`;

CREATE TABLE `detail_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status_kembali` enum('sudah','belum') NOT NULL DEFAULT 'belum',
  KEY `id_buku` (`id_buku`),
  KEY `id_pinjam` (`id_transaksi`),
  CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `detail_transaksi_ibfk_3` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_transaksi` */

insert  into `detail_transaksi`(`id_transaksi`,`id_buku`,`tgl_pinjam`,`tgl_kembali`,`status_kembali`) values (18,1,'2019-05-28','2019-05-29','sudah'),(20,2,'2019-05-23','2019-05-27','sudah');

/*Table structure for table `grafik` */

DROP TABLE IF EXISTS `grafik`;

CREATE TABLE `grafik` (
  `id_grafik` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `jan` int(11) NOT NULL,
  `feb` int(11) NOT NULL,
  `mar` int(11) NOT NULL,
  `apr` int(11) NOT NULL,
  `mei` int(11) NOT NULL,
  `jun` int(11) NOT NULL,
  `jul` int(11) NOT NULL,
  `agu` int(11) NOT NULL,
  `sep` int(11) NOT NULL,
  `okt` int(11) NOT NULL,
  `nov` int(11) NOT NULL,
  `des` int(11) NOT NULL,
  `update_terakhir` datetime NOT NULL,
  PRIMARY KEY (`id_grafik`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `grafik` */

insert  into `grafik`(`id_grafik`,`jan`,`feb`,`mar`,`apr`,`mei`,`jun`,`jul`,`agu`,`sep`,`okt`,`nov`,`des`,`update_terakhir`) values (15,0,0,0,0,2,0,0,0,0,0,0,0,'2019-05-24 00:09:25');

/*Table structure for table `pustakawan` */

DROP TABLE IF EXISTS `pustakawan`;

CREATE TABLE `pustakawan` (
  `id_pustakawan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pustakawan` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_pustakawan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `pustakawan` */

insert  into `pustakawan`(`id_pustakawan`,`nama_pustakawan`,`jk`,`alamat`) values (2,'James Bond','L','Jl. Inggris itu jauh');

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(11) NOT NULL,
  `id_pustakawan` int(11) NOT NULL,
  `tgl_trans` datetime NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_anggota` (`id_anggota`),
  KEY `id_pustakawan` (`id_pustakawan`),
  KEY `id_anggota_2` (`id_anggota`),
  KEY `id_pustakawan_2` (`id_pustakawan`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_pustakawan`) REFERENCES `pustakawan` (`id_pustakawan`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id_transaksi`,`id_anggota`,`id_pustakawan`,`tgl_trans`) values (18,4,2,'2019-05-23 21:42:30'),(20,6,2,'2019-05-23 22:27:02');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('Anggota','Pustakawan','Administrator') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id_user`,`username`,`password`,`level`) values (1,'pustakawan','$2y$10$uL92KfQ9VcCPiEB4dv57b.AaJAq.mvzmuH.1t4hQmwnDL6E8Nz/4S','Pustakawan'),(2,'admin','$2y$10$Yx4W/mpSuaEBHIFBvuNCc.3UPcjoyI2yZJ0vdAmMZgcHOVo0k/c5a','Administrator'),(5,'head_pustakawan','$2y$10$YNT41u7bxxyNjOKDB8rQwOkrP1AswlfYfgb/GfA8Gtb1XFaT5FbjO','Pustakawan'),(6,'anggota','$2y$10$/Do9yWuibZoQpcw2G1tL/eNIXGwfew1cnuhFj5h8mpYomc8t9EUe2','Anggota');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
