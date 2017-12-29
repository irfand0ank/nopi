/*
Navicat MySQL Data Transfer

Source Server         : irfan
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : nopi

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-12-29 23:35:13
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `kategori`
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO kategori VALUES ('1', 'Celana Jeans');
INSERT INTO kategori VALUES ('2', 'Kemeja');
INSERT INTO kategori VALUES ('3', 'Rompi');
INSERT INTO kategori VALUES ('4', 'w');
INSERT INTO kategori VALUES ('5', 'q');
INSERT INTO kategori VALUES ('6', 'q');
INSERT INTO kategori VALUES ('7', 'w');
INSERT INTO kategori VALUES ('8', 'e');
INSERT INTO kategori VALUES ('9', 'r');
INSERT INTO kategori VALUES ('10', 'r');
INSERT INTO kategori VALUES ('11', 'r');
INSERT INTO kategori VALUES ('12', 'r');
INSERT INTO kategori VALUES ('13', 'r');
INSERT INTO kategori VALUES ('14', 'r');
INSERT INTO kategori VALUES ('15', 'r');
INSERT INTO kategori VALUES ('16', 'r');
INSERT INTO kategori VALUES ('17', 'erwrwrwer');
INSERT INTO kategori VALUES ('18', 'erwerw');
INSERT INTO kategori VALUES ('19', 'werwer');
INSERT INTO kategori VALUES ('20', 'werwr');
INSERT INTO kategori VALUES ('21', 'wrwerw');
INSERT INTO kategori VALUES ('22', 'werwrew');
INSERT INTO kategori VALUES ('23', 'wrwer');
INSERT INTO kategori VALUES ('24', 'werwer');
INSERT INTO kategori VALUES ('25', 'werwer');
INSERT INTO kategori VALUES ('26', 'qweq');

-- ----------------------------
-- Table structure for `pelanggan`
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------

-- ----------------------------
-- Table structure for `penjahit`
-- ----------------------------
DROP TABLE IF EXISTS `penjahit`;
CREATE TABLE `penjahit` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_usaha` varchar(255) DEFAULT NULL,
  `status` enum('F','T') DEFAULT 'F',
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penjahit
-- ----------------------------
INSERT INTO penjahit VALUES ('1', 'ELLY YUSUF', 'Dungingi', 'Tuladenggi', 'JL. BERINGIN', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('2', 'FARIDA TOOLINGO', 'Dungingi', 'Tuladenggi', 'JL. BERINGIN', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('3', 'ROHAYATI UMAR', 'Dungingi', 'Tuladenggi', 'JL. BERINGIN', 'JASA KONVEKSI', 'F');
INSERT INTO penjahit VALUES ('4', 'NINGSIH MUSA', 'Dungingi', 'Tuladenggi', 'JL. BERINGIN', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('5', 'MASNITA K. HIMA', 'Dungingi', 'Tuladenggi', 'JL. BERINGIN', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('6', 'NONI KASIM', 'Dungingi', 'Tuladenggi', 'JL. BERINGIN', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('7', 'ETJON YUSUF', 'Dungingi', 'Tuladenggi', 'JL. BERINGIN', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('8', 'KARTIN ABDULLAH', 'Dungingi', 'Tuladenggi', 'JL. BERINGIN', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('9', 'SAIRA TILOME', 'Dungingi', 'Tuladenggi', 'JL. BERINGIN', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('10', 'MURNI ABDULLAH', 'Dungingi', 'Tuladenggi', 'JL. BERINGIN', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('11', 'SUMIYATI TOOLINGO', 'Dungingi', 'Tuladenggi', 'JL. BERINGIN', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('12', 'MUKMIN YASIN', 'Dungingi', 'Tuladenggi', 'JL. SAWIT', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('13', 'NURSIATI RAHMAN/TAILOR', 'Dungingi', 'Tomulabutao', 'JL.RAMBUTAN', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('14', 'MASTIN ABDUL / TAILOR MASDIN', 'Dungingi', 'Libuo', 'JL. BELIMBING', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('15', 'SALMA KARIM', 'Dungingi', 'Libuo', 'JL. PALMA', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('16', 'ASTUTI SATARUNO', 'Dungingi', 'Libuo', 'JL. BELIMBING', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('17', 'ROSMAWATI ASAGAF', 'Dungingi', 'Libuo', 'JL. DELIMA', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('18', 'ERNA ISMAIL ', 'Dungingi', 'Huangobotu', 'LINGKUNGAN I', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('19', 'RABIA ISMAIL ', 'Dungingi', 'Huangobotu', 'LINGKUNGAN I', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('20', 'YANTI  NGABITO ', 'Dungingi', 'Huangobotu', 'LINGKUNGAN II', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('21', 'NELI HASAN ', 'Dungingi', 'Huangobotu', 'LINGKUNGAN II', 'KONFEKSI ', 'F');
INSERT INTO penjahit VALUES ('22', 'HAMZAH LIHAWA ', 'Dungingi', 'Huangobotu', 'LINGKUNGAN V', 'PENJAHIT ', 'F');
INSERT INTO penjahit VALUES ('23', 'ROHATI RAHIM', 'Dumbo raya', 'Botu', 'JL. SAPTAMARGA', 'MENJAHIT FONI', 'F');
INSERT INTO penjahit VALUES ('24', 'HADIDJAH MOHA', 'Dumbo raya', 'Botu', 'KEL BOTU', 'T JAHIT', 'F');
INSERT INTO penjahit VALUES ('25', 'SAM ZAKARIA', 'Dumbo raya', 'Botu', 'KEL BOTU', 'T JAHIT', 'F');
INSERT INTO penjahit VALUES ('26', 'ROSMIN ISHAK', 'Dumbo raya', 'Botu', 'KEL BOTU', 'MENJAHIT ', 'F');
INSERT INTO penjahit VALUES ('27', 'Fatma Ibrahim', 'Dumbo raya', 'Bugis', null, 'Jahit', 'F');
INSERT INTO penjahit VALUES ('28', 'Salma Ibrahim', 'Dumbo raya', 'Bugis', null, 'Jahit', 'F');
INSERT INTO penjahit VALUES ('29', 'RAHMAD TANIYO', 'Dumbo raya', 'Talumolo', 'TALUMOLO', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('30', 'RUSTAM ISMAIL', 'Dumbo raya', 'Talumolo', 'TALUMOLO', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('31', 'RUSNI UPINGO', 'Dumbo raya', 'Talumolo', 'TALUMOLO', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('32', 'MEGAWATI ADAM', 'Dumbo raya', 'Talumolo', 'TALUMOLO', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('33', 'DJALIL ISHAK', 'Hulonthalangi', 'Pohe', 'JL. BOTULIODU KEL. POHE RT 001/RW 003', 'USAHA JAHIT', 'F');
INSERT INTO penjahit VALUES ('34', 'RASJID BEMPAH ', 'Hulonthalangi', 'Tenda', 'JL. YOSSUDARSO RT 1 / RW 2', 'TK JAHIT ', 'F');
INSERT INTO penjahit VALUES ('35', 'WIRDA PINAU ', 'Hulonthalangi', 'Tenda', 'JL. MAWAR RT 1 / RW 5 ', 'USAHA JAHIT', 'F');
INSERT INTO penjahit VALUES ('36', 'MASNIYATI SULEMAN ', 'Hulonthalangi', 'Tenda', 'JL. MAWAR RT 1 / RW 5', 'USAHA JAHIT', 'F');
INSERT INTO penjahit VALUES ('37', 'RITA MAILITE ', 'Hulonthalangi', 'Siendeng', 'JL. BANTENG RT 001 / RW 004', 'tkng jahit', 'F');
INSERT INTO penjahit VALUES ('38', 'TJANI MAHMUD', 'Hulonthalangi', 'Siendeng', 'KEL SIENDENG RT 002 / RW 002', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('39', 'AHMAD K HUNAWA ', 'Hulonthalangi', 'Siendeng', 'JL. ST TUBUN RT 002 / RW 004', 'TKG JAHIT', 'F');
INSERT INTO penjahit VALUES ('40', 'AMBARINI KALUKU ', 'Hulonthalangi', 'Siendeng', 'KEL SIENDENG RT 003 / RW 001', 'TUKANG JAHIT ', 'F');
INSERT INTO penjahit VALUES ('41', 'RINCE KATILI ', 'Hulonthalangi', 'Siendeng', 'JL. G AGUNG RT 003 / RW 002', 'TKG JAHIT', 'F');
INSERT INTO penjahit VALUES ('42', 'HERNI K. IBRAHIM', 'Kota Barat', 'Dembe 1', 'JL. USMAN ISA', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('43', 'SISKAWTY SIMBUKA', 'Kota Barat', 'Dembe 1', 'JL. USMAN ISA', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('44', 'WILIS DJAFAR', 'Kota Barat', 'Dembe 1', 'JL. USMAN ISA', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('45', 'MUHMAD FAZRI H. LATIF', 'Kota Barat', 'Dembe 1', 'JL. USMAN ISA', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('46', 'SUMARNI ANTULA', 'Kota Barat', 'Dembe 1', 'JL. USMAN ISA', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('47', 'MARYAM ANTU', 'Kota Barat', 'Dembe 1', 'JL. USMAN ISA', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('48', 'JAHYA SULEMAN', 'Kota Barat', 'Dembe 1', 'JL. USMAN ISA', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('49', 'SALMA PANEO', 'Kota Barat', 'Dembe 1', 'JL. USMAN ISA', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('50', 'RAHMAN TALIB', 'Kota Barat', 'Dembe 1', 'JL. USMAN ISA', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('51', 'KUNUN ISHAK', 'Kota Barat', 'Dembe 1', 'JL. USMAN ISA', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('52', 'ASTIN DJUALI', 'Kota Barat', 'Lekobalo', 'JL. USMAN ISA', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('53', 'ERNA SUNE', 'Kota Barat', 'Lekobalo', 'JL. USMAN ISA', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('54', 'MUHTARA ANTU', 'Kota Barat', 'Lekobalo', 'JL. USMAN ISA', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('55', 'SUHARTIN YUSUF', 'Kota Barat', 'Pilolodaa', 'JL. USMAN ISA', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('56', 'ERNA ADJUNU', 'Kota Barat', 'Buliide', 'KEL. BULIIDE', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('57', 'Rukiyah Abdul Gani', 'Kota Barat', 'MolosipatW', 'Kel. Molosipat W', 'Menjahit', 'F');
INSERT INTO penjahit VALUES ('58', 'Roslin K. Thalib', 'Kota Barat', 'MolosipatW', 'Kel. Molosipat W', 'Menjahit', 'F');
INSERT INTO penjahit VALUES ('59', 'ABDULLAH HEMETO', 'Kota Barat', 'Buladu', 'JL. PALMA', 'TAILOR', 'F');
INSERT INTO penjahit VALUES ('60', 'MARYAM ZAKARIA', 'Kota Barat', 'Buladu', 'JL. PALMA', 'TAILOR', 'F');
INSERT INTO penjahit VALUES ('61', 'DJAFAR MODJIDU', 'Kota Barat', 'Buladu', 'JL. PALMA', 'TAILOR', 'F');
INSERT INTO penjahit VALUES ('62', 'UYU SUAIB', 'Kota Selatan', 'Biawao', 'SETIA PRAJA', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('63', 'ABD. RAHMAN YASIN', 'Kota Selatan', 'Biawu', 'JL. Hi. A.R. KONIYO, BSC  RT 02/RW 02', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('64', 'ASNA ADAM', 'Kota Selatan', 'Biawu', 'JL. G. TILONGKABILA RT 02/RW 01', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('65', 'ASTIN KARIM', 'Kota Selatan', 'Biawu', 'JL. G. TILONGKABILA  RT 01/RW 01', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('66', 'ELVY UMAR', 'Kota Selatan', 'Biawu', 'JL. G. TILONGKABILA RT 02/RW 01', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('67', 'HERY MUSA', 'Kota Selatan', 'Biawu', 'JL. G. BOLIOHUTO RT 01/RW 02', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('68', 'ISKANDAR BOUATO', 'Kota Selatan', 'Biawu', 'JL. Hi. A.R. KONIYO, BSC RT 03/RW 02', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('69', 'MARIKO MOO', 'Kota Selatan', 'Biawu', 'JL. Hi. A.R. KONIYO, BSC RT 03/RW 02', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('70', 'MIMI BOMBAY', 'Kota Selatan', 'Biawu', 'JL. G. KINIBALU RT 03/RW 01', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('71', 'RATNA DJAJIUWA', 'Kota Selatan', 'Biawu', 'JL. G. TILONGKABILA RT 02/RW 01', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('72', 'ROSMIATI MOO', 'Kota Selatan', 'Biawu', 'JL. HI.AR KONIYO BSc RT 03/RW 02', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('73', 'SISKA LAIYA', 'Kota Selatan', 'Biawu', 'JL. G. KINI BALU RT 03/ RW 01', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('74', 'TITIEN USMAN', 'Kota Selatan', 'Biawu', 'JL. G. TILONGKABILA RT 01/RW 01', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('75', 'WATY SADU', 'Kota Selatan', 'Biawu', 'JL. G. BOLIOHUTO RT 03/RW 02', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('76', 'YANA ABDULLAH', 'Kota Selatan', 'Biawu', 'JL. Hi. A.R. KONIYO, BSC RT 03/RW 01', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('77', 'YANTI THALIB', 'Kota Selatan', 'Biawu', 'JL. G. LOKON RT 01/RW 02', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('78', 'YUSRIN MAIYO', 'Kota Selatan', 'Biawu', 'JL. G. BOLIOHUTO RT 01/RW 02', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('79', 'ABASI DJIBRAN', 'Kota Selatan', 'Limba b', 'JL.IMAM BONJOL', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('80', 'BUDIMULYONO ABDUL', 'Kota Selatan', 'Limba b', 'JL.AGUS SALIM', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('81', 'ERNI', 'Kota Selatan', 'Limba b', 'JL.MOH.YAMIN', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('82', 'HADIRUN PAKAYA', 'Kota Selatan', 'Limba b', 'JL.AGUS SALIM', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('83', 'HASAN YUSUF', 'Kota Selatan', 'Limba b', 'JL.MANGGIS', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('84', 'JAINAL ISMAIL', 'Kota Selatan', 'Limba b', 'JL.IMAM BONJOL', 'TKG.JAHIT', 'F');
INSERT INTO penjahit VALUES ('85', 'NURSIA HADI', 'Kota Selatan', 'Limba b', 'JL.MANGGIS', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('86', 'RITA H. DUMAKO', 'Kota Selatan', 'Limba b', 'JL.AGUS SALIM', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('87', 'SAADIAH H. KAUNANG', 'Kota Selatan', 'Limba b', 'JL.IMAM BONJOL', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('88', 'SAIFUL LIHAWA', 'Kota Selatan', 'Limba b', 'JL.SUN BONE', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('89', 'SAMSIA MAULANA', 'Kota Selatan', 'Limba b', 'JL.TEUKU UMAR', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('90', 'SUMIYATI BITALA', 'Kota Selatan', 'Limba b', 'JL.MOH YAMIN', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('91', 'YATI BOTUTIHE', 'Kota Selatan', 'Limba b', 'JL.MOH YAMIN', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('92', 'YUNAN ISMAIL', 'Kota Selatan', 'Limba b', 'JL.IMAM BONJOL', 'TKG.JAHIT', 'F');
INSERT INTO penjahit VALUES ('93', 'YURIKO ANTUKE', 'Kota Selatan', 'Limba b', 'JL,AHMAD DAHLAN', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('94', 'ZAHRA HALID', 'Kota Selatan', 'Limba b', 'JL.AGUS SALIM', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('95', 'ZENAP JUNAIDI', 'Kota Selatan', 'Limba b', 'JL.DIPONEGORO', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('96', 'RATNA DARISE', 'Kota Selatan', 'Limba UI', 'JL. SUDIRMAN', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('97', 'FATMA BAU', 'Kota Selatan', 'Limba UI', 'JL. HOS COKROMAINOTO', 'TAYLOR', 'F');
INSERT INTO penjahit VALUES ('98', 'RIS TUU', 'Kota Selatan', 'Limba UI', 'JL. JAMALUDIN MALIK', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('99', 'RISKO SABUNGE', 'Kota Selatan', 'Limba UI', 'JL. HUSNI THAMRIN', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('100', 'IDRIS MAHMUD', 'Kota Selatan', 'Limba UI', 'JL. HUSNI THAMRIN', 'TAYLOR', 'F');
INSERT INTO penjahit VALUES ('101', 'MOHAMAD TUGE', 'Kota Selatan', 'Limba UI', 'JL. JAMALUDIN MALIK', 'TAYLOR', 'F');
INSERT INTO penjahit VALUES ('102', 'RIS TUU', 'Kota Selatan', 'Limba UI', 'JL. BUDI UTOMO', 'TAYLOR', 'F');
INSERT INTO penjahit VALUES ('103', 'AHMAD HAMZAH', 'Kota Selatan', 'Limba UI', 'JL. HUSNI THAMRIN', 'TAYLOR', 'F');
INSERT INTO penjahit VALUES ('104', 'ERNI HASYIM', 'Kota Selatan', 'Limba UI', 'JL. JAMALUDIN MALIK', 'TAYLOR', 'F');
INSERT INTO penjahit VALUES ('105', 'FATUM ABID', 'Kota Selatan', 'Limba UII', 'JL.SAMRATULANGI', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('106', 'NONCE BUSURA', 'Kota Selatan', 'Limba UII', 'JL.PATIMURA', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('107', 'NELCO RAHMAN', 'Kota Tengah', 'Wumialo', 'JLN JAKARTA KEL WUMIALO', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('108', 'HAPISA UMAR', 'Kota Tengah', 'Wumialo', 'JLN JAKARTA KEL WUMIALO', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('109', 'HARTATI HASAN', 'Kota Tengah', 'Wumialo', 'JLN JAKARTA KEL WUMIALO', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('110', 'RUSMIN ADJUNGE', 'Kota Tengah', 'Wumialo', 'JLN JAKARTA KEL WUMIALO', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('111', 'LENI HALUTI', 'Kota Tengah', 'Wumialo', 'JLN JAKARTA KEL WUMIALO', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('112', 'DAVID UMONTI', 'Kota Tengah', 'Wumialo', 'JLN JAKARTA KEL WUMIALO', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('113', 'SAIFUL MOHAMAD', 'Kota Tengah', 'Wumialo', 'JLN JERUK KEL. WUMIALO', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('114', 'NURDIANA ISHAK', 'Kota Tengah', 'Wumialo', 'JLN AR. HAKIM KEL. WUMIALO', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('115', 'SYAMSUDIN ADAM', 'Kota Tengah', 'Dulalowo Timur', 'JL IRIAN', 'PENJAHIT', 'F');
INSERT INTO penjahit VALUES ('116', 'Yano Paramata', 'Kota Tengah', 'Dulalowo', 'DULALOWO', 'Kios/ Tukang Jahit', 'F');
INSERT INTO penjahit VALUES ('117', 'Ismail Monoarfa', 'Kota Tengah', 'Dulalowo', 'DULALOWO', 'Tukang Jahit', 'F');
INSERT INTO penjahit VALUES ('118', 'ROSLIN PAKAJI', 'Kota Tengah', 'Liluwo', 'LILUWO', 'JASA MENJAHIT & BORDIR', 'F');
INSERT INTO penjahit VALUES ('119', 'RANTI MOHAMAD', 'Kota Tengah', 'Liluwo', 'LILUWO', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('120', 'SATRIN ABDULLAH', 'Kota Tengah', 'Liluwo', 'LILUWO', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('121', 'ASNA INGGILE', 'Kota Tengah', 'Liluwo', 'LILUWO', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('122', 'NISMA USMAN', 'Kota Tengah', 'Liluwo', 'LILUWO', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('123', 'KAURIA KATILI', 'Kota Tengah', 'Liluwo', 'LILUWO', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('124', 'REKI RAHMAT BASIRU', 'Kota Tengah', 'Pulubala', 'L. MADURA', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('125', 'RITA PIETERS', 'Kota Tengah', 'Pulubala', 'JL. SELAYAR', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('126', 'HADIDJAH AMIRI', 'Kota Tengah', 'Pulubala', 'JL. SAKURA', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('127', 'MASRI  MOMIYO', 'Kota Tengah', 'Pulubala', 'JL. ANGGREK', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('128', 'RENENG UMAR', 'Kota Tengah', 'Pulubala', 'JL. SAKURA', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('129', 'AMSIR MANOPPO', 'Kota Tengah', 'Pulubala', 'JL. PINANG', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('130', 'ENDANG ABDUL', 'Kota Tengah', 'Pulubala', 'JL. SELAYAR', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('131', 'MARDIA RADJAK', 'Kota Tengah', 'Pulubala', 'JL. MANADO', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('132', 'MOHAMAD TAUFIK PAKAYA', 'Kota Tengah', 'Pulubala', 'JL. MOROTAI', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('133', 'RAPIA TAHA', 'Kota Tengah', 'Pulubala', 'JL. SAKURA', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('134', 'SOEMARI HADI SAPUTRO', 'Kota Tengah', 'Pulubala', 'JL. LOROSAI', 'MENJAHIT', 'F');
INSERT INTO penjahit VALUES ('135', 'RISNA NAIU', 'Kota Tengah', 'Paguyaman', 'Jln. Bali RT 01 / RW 03', 'Jasa Tailor', 'F');
INSERT INTO penjahit VALUES ('136', 'SUWARNI ANWAR', 'Kota Tengah', 'Paguyaman', 'Jln. Bali RT 01/ RW 01', 'Jasa Tailor', 'F');
INSERT INTO penjahit VALUES ('137', 'ERVINA LATALA', 'Kota Tengah', 'Paguyaman', 'Jln. HB Jassin RT 02/RW 01', 'Jasa Tailor', 'F');
INSERT INTO penjahit VALUES ('138', 'MARWAN NGABITO', 'Kota Tengah', 'Paguyaman', 'Jln. AR.Hakim RT 03/RW 03', 'Jasa Tailor', 'F');
INSERT INTO penjahit VALUES ('139', 'FITRI HATABU', 'Kota Timur', 'Heledulaa Utara', 'HELEDULAA UTARA', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('140', 'MIN DEU', 'Kota Timur', 'Heledulaa Utara', 'HELEDULAA UTARA', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('141', 'MARTHA HAJARATI', 'Kota Timur', 'Heledulaa Utara', 'HELEDULAA UTARA', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('142', 'MAIMUN PAYU', 'Kota Timur', 'Heledulaa Utara', 'HELEDULAA UTARA', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('143', 'ZURIYATI KAJUJU', 'Kota Timur', 'Heledulaa Selatan', 'HELEDULAA SELATAN', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('144', 'ETI YUSUF', 'Kota Timur', 'Heledulaa Selatan', 'HELEDULAA SELATAN', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('145', 'NELI SAID', 'Kota Timur', 'Heledulaa Selatan', 'HELEDULAA SELATAN', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('146', 'MISRAWATI MALANUA', 'Kota Timur', 'Heledulaa Selatan', 'HELEDULAA SELATAN', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('147', 'SALMA UMAR', 'Kota Timur', 'Ipilo', 'IPILO', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('148', 'MAISARAH DJAFAR', 'Kota Timur', 'Ipilo', 'IPILO', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('149', 'YUSNI RASYID', 'Kota Timur', 'Ipilo', 'IPILO', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('150', 'RUSNI UMAR', 'Kota Timur', 'Ipilo', 'IPILO', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('151', 'RIHAN MA\'RUF', 'Kota Timur', 'Moodu', 'MOODU', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('152', 'ASNA Z', 'Kota Timur', 'Moodu', 'MOODU', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('153', 'NURCE PONGOLIU', 'Kota Timur', 'Moodu', 'MOODU', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('154', 'FATMA SULEMAN', 'Kota Timur', 'Padebuolo', 'PADEBUOLO', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('155', 'FATMAWATI ISMAIL', 'Kota Timur', 'Padebuolo', 'PADEBUOLO', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('156', 'MEY DAUD', 'Kota Timur', 'Padebuolo', 'PADEBUOLO', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('157', 'RAMLI ALI', 'Kota Timur', 'Tamalate', 'TAMALATE', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('158', 'AISA KASIM', 'Kota Timur', 'Tamalate', 'TAMALATE', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('159', 'MEIKE KASIM', 'Kota Timur', 'Tamalate', 'TAMALATE', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('160', 'Linda Abdullah', 'Kota Utara', 'Dulomo utara', 'Jl. Rusli Datau ', 'Menjahit/Salon', 'F');
INSERT INTO penjahit VALUES ('161', 'Zainun Sumaga', 'Kota Utara', 'Dulomo utara', 'Jl. Rusli Datau ', 'Menjahit', 'F');
INSERT INTO penjahit VALUES ('162', 'Djafar Alatada', 'Kota Utara', 'Dulomo utara', 'Jl. Lupoyo', 'Menjahit', 'F');
INSERT INTO penjahit VALUES ('163', 'Nibras Hilinilo', 'Kota Utara', 'Dulomo utara', 'Jl. Rusli Datau II ', 'Menjahit', 'F');
INSERT INTO penjahit VALUES ('164', 'Saida Djafar', 'Kota Utara', 'Dembe jaya', 'Jl. Kh. Adam Zakaria', 'Menjahit', 'F');
INSERT INTO penjahit VALUES ('165', 'Zainudin Abdul', 'Kota Utara', 'Dembe jaya', 'Jl. Taman Surya', 'Menjahit', 'F');
INSERT INTO penjahit VALUES ('166', 'Meli Poluan', 'Kota Utara', 'Dembe jaya', 'Jl. Taman Surya', 'Menjahit/Rebonding', 'F');
INSERT INTO penjahit VALUES ('167', 'Rohani Umar', 'Kota Utara', 'Dembe II', 'Kel. Dembe II', 'Menjahit', 'F');
INSERT INTO penjahit VALUES ('168', 'Salma Kadir', 'Kota Utara', 'Dembe II', 'Kel. Dembe II', 'Menjahit', 'F');
INSERT INTO penjahit VALUES ('169', 'Masita Said', 'Kota Utara', 'Dembe II', 'Kel. Dembe II', 'Menjahit', 'F');
INSERT INTO penjahit VALUES ('170', 'Salma Umar', 'Kota Utara', 'Dembe II', 'Kel. Dembe II', 'Menjahit', 'F');
INSERT INTO penjahit VALUES ('171', 'Debora Devi Gani', 'Kota Utara', 'Dembe II', 'Kel. Dembe II', 'Menjahit', 'F');
INSERT INTO penjahit VALUES ('172', 'Ulin M. H', 'Kota Utara', 'Dembe II', 'Kel. Dembe II', 'Tailor', 'F');
INSERT INTO penjahit VALUES ('173', 'Titin Biludi', 'Kota Utara', 'Dembe II', 'Kel. Dembe II', 'Menjahit', 'F');
INSERT INTO penjahit VALUES ('174', 'Nizma Samaun', 'Kota Utara', 'Dembe II', 'Kel. Dembe II', 'Menjahit', 'F');
INSERT INTO penjahit VALUES ('175', 'Fatmah Djailani', 'Kota Utara', 'Dembe II', 'Kel. Dembe II', 'Menjahit', 'F');
INSERT INTO penjahit VALUES ('176', 'YOHANNES GUSASI ', 'Kota Sipatana', 'Bulotadaa Timur', 'JLN. MEMBRAMO', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('177', 'RISNA LANTU', 'Kota Sipatana', 'Bulotadaa Timur', 'JLN YUSUF HASIRU', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('178', 'IRAM ALI', 'Kota Sipatana', 'Bulotadaa Timur', 'JLN RUSLI DATAU', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('179', 'RIDWAN HELINGO', 'Kota Sipatana', 'Bulotadaa Timur', 'JLN. MEMBRAMO', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('180', 'MUCHLIS AMU', 'Kota Sipatana', 'Bulotadaa Timur', 'JLN. MEMBRAMO', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('181', 'SOFYAN AMU', 'Kota Sipatana', 'Bulotadaa Timur', 'JLN. MEMBRAMO', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('182', 'NETJO AKUBA', 'Kota Sipatana', 'Bulotadaa Timur', 'JLN. PRAMUKA', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('183', 'MAWARDI ISMAIL', 'Kota Sipatana', 'Bulotadaa Timur', 'JLN. BARITO', 'TUKANG JAHIT', 'F');
INSERT INTO penjahit VALUES ('184', 'Yanti Malanua', 'Kota Sipatana', 'Bulotadaa Barat', 'Jl. H Thayeb M Gobel', 'Taylor', 'F');
INSERT INTO penjahit VALUES ('185', 'Nely Kaharu', 'Kota Sipatana', 'Bulotadaa Barat', 'Jl. H Thayeb M Gobel', 'Taylor', 'F');
INSERT INTO penjahit VALUES ('186', 'Syahril Amu', 'Kota Sipatana', 'Bulotadaa Barat', 'Jl. Poowo', 'Multeq Taylor', 'F');
INSERT INTO penjahit VALUES ('187', 'Sartin Urbubia', 'Kota Sipatana', 'Bulotadaa Barat', 'Jl. Poowo', 'Sartin Taylor', 'F');
INSERT INTO penjahit VALUES ('188', 'Femy Podungge', 'Kota Sipatana', 'Bulotadaa Barat', 'Jl. Pramuka', 'Taylor', 'F');
INSERT INTO penjahit VALUES ('189', 'AMIR RUGA', 'Kota Sipatana', 'Tapa', 'THAYEB M. GOBEL', 'TAILOR', 'F');
INSERT INTO penjahit VALUES ('190', 'YULAN IGIRISA', 'Kota Sipatana', 'Tangikiki', 'JL. TIRTONADI', 'TAYLOR', 'F');
INSERT INTO penjahit VALUES ('191', 'TUTEN KALAY', 'Kota Sipatana', 'Tangikiki', 'JL. YUSUF HASIRU', 'TUKANG JAHIT', 'F');

-- ----------------------------
-- Table structure for `penjual_kain`
-- ----------------------------
DROP TABLE IF EXISTS `penjual_kain`;
CREATE TABLE `penjual_kain` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penjual_kain
-- ----------------------------

-- ----------------------------
-- Table structure for `pesanan`
-- ----------------------------
DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE `pesanan` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_penjahit` varchar(255) DEFAULT NULL,
  `id_pelanggan` varchar(255) DEFAULT NULL,
  `id_jasa` varchar(255) DEFAULT NULL,
  `jenis_pesanan` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `baca` enum('T','F') DEFAULT 'F',
  `setuju_jahit` enum('F','W','T') DEFAULT NULL,
  `finish` enum('T','F') DEFAULT 'F',
  `waktu_kerja` int(11) DEFAULT NULL,
  `mulai` date DEFAULT NULL,
  `selesai` date DEFAULT NULL,
  `setuju_pemesan` enum('F','T') DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pesanan
-- ----------------------------
INSERT INTO pesanan VALUES ('1', '11', '10', '1', 'biasa', 'ccc', 'T', null, 'F', null, null, null, null);
INSERT INTO pesanan VALUES ('2', '11', '10', '2', 'aa', 'qq', 'T', null, 'F', null, null, null, 'T');
INSERT INTO pesanan VALUES ('3', '11', '10', '3', 'aa', 'dd', 'T', null, 'F', null, null, null, null);
INSERT INTO pesanan VALUES ('4', '11', '10', '3', '213', '11', 'T', 'T', 'F', null, null, null, null);
INSERT INTO pesanan VALUES ('5', '11', '10', '2', '12', '1212', 'T', 'F', 'F', null, null, null, null);

-- ----------------------------
-- Table structure for `rating`
-- ----------------------------
DROP TABLE IF EXISTS `rating`;
CREATE TABLE `rating` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `member` varchar(255) DEFAULT NULL,
  `pelanggan` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `rating` float(11,0) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rating
-- ----------------------------
INSERT INTO rating VALUES ('1', '10', '11', null, '4');
INSERT INTO rating VALUES ('2', '10', '12', null, '3');
INSERT INTO rating VALUES ('3', '9', '13', null, '5');
INSERT INTO rating VALUES ('4', '9', '14', null, '4');
INSERT INTO rating VALUES ('5', '10', '15', null, '2');
INSERT INTO rating VALUES ('6', '9', '16', null, '5');
INSERT INTO rating VALUES ('7', '8', '17', null, '5');
INSERT INTO rating VALUES ('8', '20', '18', null, '1');
INSERT INTO rating VALUES ('9', '21', '19', null, '5');

-- ----------------------------
-- Table structure for `regis_penjahit`
-- ----------------------------
DROP TABLE IF EXISTS `regis_penjahit`;
CREATE TABLE `regis_penjahit` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` varchar(255) DEFAULT NULL,
  `id_penjahit` varchar(255) DEFAULT NULL,
  `jenis_rek` varchar(255) DEFAULT NULL,
  `nomor_rek` varchar(255) DEFAULT NULL,
  `jasa` varchar(255) DEFAULT NULL,
  `moto` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of regis_penjahit
-- ----------------------------
INSERT INTO regis_penjahit VALUES ('4', '11', '191', 'bri', '0806423566sss', '1,16,2,20,21,3,4', null, null);

-- ----------------------------
-- Table structure for `transaksi_kain`
-- ----------------------------
DROP TABLE IF EXISTS `transaksi_kain`;
CREATE TABLE `transaksi_kain` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_penjual` varchar(255) DEFAULT NULL,
  `nama_kain` varchar(255) DEFAULT NULL,
  `harga` decimal(10,0) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `status` enum('F','T') DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaksi_kain
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `level` int(1) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO users VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin lagi 123', '1', null);
INSERT INTO users VALUES ('10', 'akun', '05c0598f35c35762cd7f3801e2388b37', 'akun biasa', '5', null);
INSERT INTO users VALUES ('3', 'disperindag', '80c7888fef32a85d7811ecca03bcbfef', 'disperindag', '2', null);
INSERT INTO users VALUES ('4', 'rahmat', 'af2a4c9d4c4956ec9d6ba62213eed568', 'Rahmat', '2', null);
INSERT INTO users VALUES ('11', 'akun2', '9ce0ca3d09106a37842cfcbfbdf2f60d', 'akun penjahit', '3', 'file_1514370398.jpg');
INSERT INTO users VALUES ('12', 'akun3', '5f5c57d23f6275a6f15337395a4633e4', 'akun penjual', '5', null);
INSERT INTO users VALUES ('13', 'test', '322650e1328739dbca646008305dd95e', 'tesrt', '5', null);
