/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50731
 Source Host           : localhost:3306
 Source Schema         : pap2021blupost

 Target Server Type    : MySQL
 Target Server Version : 50731
 File Encoding         : 65001

 Date: 21/07/2021 15:15:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for albuns
-- ----------------------------
DROP TABLE IF EXISTS `albuns`;
CREATE TABLE `albuns`  (
  `albumId` int(11) NOT NULL AUTO_INCREMENT,
  `albumNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `albumData` date NOT NULL,
  `albumFotografoId` int(11) NOT NULL,
  `albumCapaURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`albumId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of albuns
-- ----------------------------
INSERT INTO `albuns` VALUES (3, 'Cascais', '2021-07-12', 6, 'imagens/cascaisCapa.jpg');
INSERT INTO `albuns` VALUES (4, 'Leiria', '2021-07-06', 7, 'imagens/leCapa.jpg');
INSERT INTO `albuns` VALUES (5, 'Nazare', '2020-04-10', 7, 'imagens/nazare.jpg');
INSERT INTO `albuns` VALUES (6, 'Batismo', '2021-04-14', 9, 'imagens/batismo.jpg');

-- ----------------------------
-- Table structure for comentarios
-- ----------------------------
DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios`  (
  `comentarioId` int(11) NOT NULL AUTO_INCREMENT,
  `comentarioPerfilId` int(11) NOT NULL,
  `comentarioFotoId` int(11) NOT NULL,
  `comentarioTexto` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`comentarioId`) USING BTREE,
  INDEX `fk_perfis_has_fotos_fotos1_idx`(`comentarioFotoId`) USING BTREE,
  INDEX `fk_perfis_has_fotos_perfis1_idx`(`comentarioPerfilId`) USING BTREE,
  CONSTRAINT `fk_perfis_has_fotos_fotos1` FOREIGN KEY (`comentarioFotoId`) REFERENCES `fotos` (`fotoId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_perfis_has_fotos_perfis1` FOREIGN KEY (`comentarioPerfilId`) REFERENCES `perfis` (`perfilId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of comentarios
-- ----------------------------
INSERT INTO `comentarios` VALUES (4, 6, 3, 'Uma das minhas favoritas');
INSERT INTO `comentarios` VALUES (5, 7, 6, 'Está incrível esta foto');
INSERT INTO `comentarios` VALUES (6, 7, 3, 'Muito gira a foto');
INSERT INTO `comentarios` VALUES (7, 9, 22, 'Adorei a experiência');
INSERT INTO `comentarios` VALUES (8, 9, 3, 'Está mesmo muito gira. Continua com o ótimo trabalho');
INSERT INTO `comentarios` VALUES (9, 13, 22, 'Obrigada por nos proporcionar um momento incrível');
INSERT INTO `comentarios` VALUES (11, 15, 6, 'Cheia de cor');
INSERT INTO `comentarios` VALUES (12, 18, 6, 'Que lindo');
INSERT INTO `comentarios` VALUES (13, 19, 8, 'Muito bonita');
INSERT INTO `comentarios` VALUES (14, 19, 12, 'Que onda gigante');
INSERT INTO `comentarios` VALUES (15, 20, 22, 'Que foto fantasticas !');
INSERT INTO `comentarios` VALUES (16, 20, 7, 'Já estive ai');
INSERT INTO `comentarios` VALUES (17, 20, 17, 'Gosto muito de ir a essa praia');

-- ----------------------------
-- Table structure for favoritos
-- ----------------------------
DROP TABLE IF EXISTS `favoritos`;
CREATE TABLE `favoritos`  (
  `favoritoPerfilId` int(11) NOT NULL,
  `favoritoFotografoId` int(11) NOT NULL,
  PRIMARY KEY (`favoritoPerfilId`, `favoritoFotografoId`) USING BTREE,
  INDEX `fk_fotografos_has_perfis_perfis1_idx`(`favoritoPerfilId`) USING BTREE,
  CONSTRAINT `fk_fotografos_has_perfis_perfis1` FOREIGN KEY (`favoritoPerfilId`) REFERENCES `perfis` (`perfilId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of favoritos
-- ----------------------------
INSERT INTO `favoritos` VALUES (6, 9);
INSERT INTO `favoritos` VALUES (7, 6);
INSERT INTO `favoritos` VALUES (8, 7);
INSERT INTO `favoritos` VALUES (9, 6);
INSERT INTO `favoritos` VALUES (9, 7);
INSERT INTO `favoritos` VALUES (11, 6);
INSERT INTO `favoritos` VALUES (11, 7);
INSERT INTO `favoritos` VALUES (11, 9);
INSERT INTO `favoritos` VALUES (12, 6);
INSERT INTO `favoritos` VALUES (12, 9);
INSERT INTO `favoritos` VALUES (14, 9);
INSERT INTO `favoritos` VALUES (17, 6);
INSERT INTO `favoritos` VALUES (17, 7);
INSERT INTO `favoritos` VALUES (17, 9);
INSERT INTO `favoritos` VALUES (18, 6);
INSERT INTO `favoritos` VALUES (18, 9);
INSERT INTO `favoritos` VALUES (19, 6);
INSERT INTO `favoritos` VALUES (20, 6);
INSERT INTO `favoritos` VALUES (20, 9);

-- ----------------------------
-- Table structure for fotografos
-- ----------------------------
DROP TABLE IF EXISTS `fotografos`;
CREATE TABLE `fotografos`  (
  `fotografoPerfilId` int(11) NOT NULL,
  `fotografoTelemovel` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fotografoCidade` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fotografoFreelancer` enum('sim','nao') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'sim',
  `fotografoAnoInicio` int(11) NULL DEFAULT NULL,
  `fotografoFotoURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fotografoPerfilId`) USING BTREE,
  INDEX `fk_fotografos_perfis1_idx`(`fotografoPerfilId`) USING BTREE,
  CONSTRAINT `fk_fotografos_perfis1` FOREIGN KEY (`fotografoPerfilId`) REFERENCES `perfis` (`perfilId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of fotografos
-- ----------------------------
INSERT INTO `fotografos` VALUES (6, '918 756 321', 'Marinha Grande', 'nao', NULL, 'imagens/pedro.jpg');
INSERT INTO `fotografos` VALUES (7, '918 756 352', 'Maceira, Marinha', 'sim', NULL, 'imagens/me.jpg');
INSERT INTO `fotografos` VALUES (8, NULL, NULL, 'sim', NULL, NULL);
INSERT INTO `fotografos` VALUES (9, '918756243', 'Lisboa', 'sim', NULL, 'imagens/maria.jpg');
INSERT INTO `fotografos` VALUES (10, NULL, NULL, 'sim', NULL, NULL);
INSERT INTO `fotografos` VALUES (11, NULL, NULL, 'sim', NULL, NULL);
INSERT INTO `fotografos` VALUES (12, NULL, NULL, 'sim', NULL, NULL);
INSERT INTO `fotografos` VALUES (13, NULL, NULL, 'sim', NULL, NULL);
INSERT INTO `fotografos` VALUES (14, NULL, NULL, 'sim', NULL, NULL);
INSERT INTO `fotografos` VALUES (15, NULL, NULL, 'sim', NULL, NULL);
INSERT INTO `fotografos` VALUES (16, NULL, NULL, 'sim', NULL, NULL);
INSERT INTO `fotografos` VALUES (17, NULL, NULL, 'sim', NULL, NULL);
INSERT INTO `fotografos` VALUES (18, '  -', '   -', 'sim', NULL, NULL);
INSERT INTO `fotografos` VALUES (19, NULL, NULL, 'sim', NULL, NULL);
INSERT INTO `fotografos` VALUES (20, NULL, NULL, 'sim', NULL, NULL);

-- ----------------------------
-- Table structure for fotos
-- ----------------------------
DROP TABLE IF EXISTS `fotos`;
CREATE TABLE `fotos`  (
  `fotoId` int(11) NOT NULL AUTO_INCREMENT,
  `fotoNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fotoURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fotoAlbumId` int(11) NOT NULL,
  PRIMARY KEY (`fotoId`) USING BTREE,
  INDEX `fk_imagens_albuns1_idx`(`fotoAlbumId`) USING BTREE,
  CONSTRAINT `fk_imagens_albuns1` FOREIGN KEY (`fotoAlbumId`) REFERENCES `albuns` (`albumId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of fotos
-- ----------------------------
INSERT INTO `fotos` VALUES (3, 'Cascais', 'imagens/cascais.jpg', 3);
INSERT INTO `fotos` VALUES (4, 'Casicais2', 'imagens/cascais1.jpg', 3);
INSERT INTO `fotos` VALUES (5, 'Cascais3', 'imagens/cascais2.jpg', 3);
INSERT INTO `fotos` VALUES (6, 'Cascais4', 'imagens/cascais3.jpg', 3);
INSERT INTO `fotos` VALUES (7, 'Cascais5', 'imagens/cascais4.jpg', 3);
INSERT INTO `fotos` VALUES (8, 'Cascais12', 'imagens/cascais5.jpg', 3);
INSERT INTO `fotos` VALUES (9, 'Leiria', 'imagens/le.jpg', 4);
INSERT INTO `fotos` VALUES (10, 'Leiria', 'imagens/lei.jpg', 4);
INSERT INTO `fotos` VALUES (11, 'Leiria', 'imagens/leiria.jpg', 4);
INSERT INTO `fotos` VALUES (12, 'Nazare', 'imagens/naz.jpg', 5);
INSERT INTO `fotos` VALUES (13, 'Nazare', 'imagens/nazar.jpg', 5);
INSERT INTO `fotos` VALUES (17, '', 'imagens/naza.jpg', 5);
INSERT INTO `fotos` VALUES (19, '', 'imagens/naa.jpg', 5);
INSERT INTO `fotos` VALUES (20, '', 'imagens/na.jpg', 5);
INSERT INTO `fotos` VALUES (22, 'sada', 'imagens/batismoC.jpg', 6);

-- ----------------------------
-- Table structure for gostos
-- ----------------------------
DROP TABLE IF EXISTS `gostos`;
CREATE TABLE `gostos`  (
  `gostoPerfilId` int(11) NOT NULL,
  `gostoFotoId` int(11) NOT NULL,
  PRIMARY KEY (`gostoPerfilId`, `gostoFotoId`) USING BTREE,
  INDEX `fk_perfis_has_fotos_fotos2_idx`(`gostoFotoId`) USING BTREE,
  INDEX `fk_perfis_has_fotos_perfis2_idx`(`gostoPerfilId`) USING BTREE,
  CONSTRAINT `fk_perfis_has_fotos_fotos2` FOREIGN KEY (`gostoFotoId`) REFERENCES `fotos` (`fotoId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_perfis_has_fotos_perfis2` FOREIGN KEY (`gostoPerfilId`) REFERENCES `perfis` (`perfilId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of gostos
-- ----------------------------
INSERT INTO `gostos` VALUES (6, 3);
INSERT INTO `gostos` VALUES (7, 3);
INSERT INTO `gostos` VALUES (8, 3);
INSERT INTO `gostos` VALUES (10, 3);
INSERT INTO `gostos` VALUES (11, 3);
INSERT INTO `gostos` VALUES (19, 3);
INSERT INTO `gostos` VALUES (20, 3);
INSERT INTO `gostos` VALUES (6, 4);
INSERT INTO `gostos` VALUES (20, 4);
INSERT INTO `gostos` VALUES (6, 5);
INSERT INTO `gostos` VALUES (7, 5);
INSERT INTO `gostos` VALUES (11, 5);
INSERT INTO `gostos` VALUES (16, 5);
INSERT INTO `gostos` VALUES (17, 5);
INSERT INTO `gostos` VALUES (18, 5);
INSERT INTO `gostos` VALUES (19, 5);
INSERT INTO `gostos` VALUES (20, 5);
INSERT INTO `gostos` VALUES (6, 6);
INSERT INTO `gostos` VALUES (7, 6);
INSERT INTO `gostos` VALUES (8, 6);
INSERT INTO `gostos` VALUES (10, 6);
INSERT INTO `gostos` VALUES (11, 6);
INSERT INTO `gostos` VALUES (13, 6);
INSERT INTO `gostos` VALUES (14, 6);
INSERT INTO `gostos` VALUES (15, 6);
INSERT INTO `gostos` VALUES (17, 6);
INSERT INTO `gostos` VALUES (18, 6);
INSERT INTO `gostos` VALUES (19, 6);
INSERT INTO `gostos` VALUES (20, 6);
INSERT INTO `gostos` VALUES (6, 7);
INSERT INTO `gostos` VALUES (7, 7);
INSERT INTO `gostos` VALUES (10, 7);
INSERT INTO `gostos` VALUES (18, 7);
INSERT INTO `gostos` VALUES (20, 7);
INSERT INTO `gostos` VALUES (6, 8);
INSERT INTO `gostos` VALUES (7, 8);
INSERT INTO `gostos` VALUES (10, 8);
INSERT INTO `gostos` VALUES (11, 8);
INSERT INTO `gostos` VALUES (16, 8);
INSERT INTO `gostos` VALUES (18, 8);
INSERT INTO `gostos` VALUES (19, 8);
INSERT INTO `gostos` VALUES (20, 8);
INSERT INTO `gostos` VALUES (7, 9);
INSERT INTO `gostos` VALUES (14, 9);
INSERT INTO `gostos` VALUES (17, 9);
INSERT INTO `gostos` VALUES (7, 10);
INSERT INTO `gostos` VALUES (18, 10);
INSERT INTO `gostos` VALUES (7, 11);
INSERT INTO `gostos` VALUES (10, 11);
INSERT INTO `gostos` VALUES (14, 11);
INSERT INTO `gostos` VALUES (7, 12);
INSERT INTO `gostos` VALUES (19, 12);
INSERT INTO `gostos` VALUES (20, 12);
INSERT INTO `gostos` VALUES (7, 13);
INSERT INTO `gostos` VALUES (8, 13);
INSERT INTO `gostos` VALUES (10, 13);
INSERT INTO `gostos` VALUES (17, 13);
INSERT INTO `gostos` VALUES (19, 13);
INSERT INTO `gostos` VALUES (20, 13);
INSERT INTO `gostos` VALUES (7, 17);
INSERT INTO `gostos` VALUES (11, 17);
INSERT INTO `gostos` VALUES (19, 17);
INSERT INTO `gostos` VALUES (20, 17);
INSERT INTO `gostos` VALUES (7, 19);
INSERT INTO `gostos` VALUES (10, 19);
INSERT INTO `gostos` VALUES (11, 19);
INSERT INTO `gostos` VALUES (20, 19);
INSERT INTO `gostos` VALUES (7, 20);
INSERT INTO `gostos` VALUES (6, 22);
INSERT INTO `gostos` VALUES (9, 22);
INSERT INTO `gostos` VALUES (10, 22);
INSERT INTO `gostos` VALUES (11, 22);
INSERT INTO `gostos` VALUES (12, 22);
INSERT INTO `gostos` VALUES (13, 22);
INSERT INTO `gostos` VALUES (14, 22);
INSERT INTO `gostos` VALUES (15, 22);
INSERT INTO `gostos` VALUES (16, 22);
INSERT INTO `gostos` VALUES (17, 22);
INSERT INTO `gostos` VALUES (18, 22);
INSERT INTO `gostos` VALUES (19, 22);
INSERT INTO `gostos` VALUES (20, 22);

-- ----------------------------
-- Table structure for notificacoes
-- ----------------------------
DROP TABLE IF EXISTS `notificacoes`;
CREATE TABLE `notificacoes`  (
  `notificacaoId` int(11) NOT NULL AUTO_INCREMENT,
  `notificacaoTipo` enum('gosto','favorito','comentario','aviso') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'gosto',
  `notificacaoPerfilId` int(11) NOT NULL,
  `notificacaoEstado` enum('lido','naoLido') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'naoLido',
  `notificacaoData` date NOT NULL,
  `notificacaoDescricao` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`notificacaoId`) USING BTREE,
  INDEX `fk_notificacoes_perfis1_idx`(`notificacaoPerfilId`) USING BTREE,
  CONSTRAINT `fk_notificacoes_perfis1` FOREIGN KEY (`notificacaoPerfilId`) REFERENCES `perfis` (`perfilId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of notificacoes
-- ----------------------------

-- ----------------------------
-- Table structure for perfis
-- ----------------------------
DROP TABLE IF EXISTS `perfis`;
CREATE TABLE `perfis`  (
  `perfilId` int(11) NOT NULL AUTO_INCREMENT,
  `perfilNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilEstado` enum('inativo','ativo','eliminado') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ativo',
  `perfilEmail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilPassword` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilAdmin` enum('utilizador','admin') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'utilizador',
  PRIMARY KEY (`perfilId`) USING BTREE,
  UNIQUE INDEX `perfilEmail_UNIQUE`(`perfilEmail`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of perfis
-- ----------------------------
INSERT INTO `perfis` VALUES (5, 'Giovanna Salgueiro', 'ativo', 'giovanna18salgueiro@gmail.com', '0e90f35b2993ec28084231af169ad4db', 'admin');
INSERT INTO `perfis` VALUES (6, 'Alexandre Sousa', 'ativo', 'alex_sousa@hotmail.com', '202cb962ac59075b964b07152d234b70', 'utilizador');
INSERT INTO `perfis` VALUES (7, 'Mariana Soares', 'ativo', 'mariaSoares@gmail.com', '202cb962ac59075b964b07152d234b70', 'utilizador');
INSERT INTO `perfis` VALUES (8, 'utilizador123', 'ativo', 'utilizador12@sapo.pt', '202cb962ac59075b964b07152d234b70', 'utilizador');
INSERT INTO `perfis` VALUES (9, 'Francisca Rodrigues', 'ativo', 'kika12rodri@sapo.pt', '202cb962ac59075b964b07152d234b70', 'utilizador');
INSERT INTO `perfis` VALUES (10, '123', 'ativo', '123@sapo.pt', '81dc9bdb52d04dc20036dbd8313ed055', 'utilizador');
INSERT INTO `perfis` VALUES (11, '523', 'ativo', '523@sapo.pt', '202cb962ac59075b964b07152d234b70', 'utilizador');
INSERT INTO `perfis` VALUES (12, 'maria', 'ativo', 'maria_rodrigues@hotmail.com', '202cb962ac59075b964b07152d234b70', 'utilizador');
INSERT INTO `perfis` VALUES (13, 'Manuel Silva', 'ativo', 'manuSilva@gmail.com', '202cb962ac59075b964b07152d234b70', 'utilizador');
INSERT INTO `perfis` VALUES (14, 'asd', 'ativo', 'asd@gmail.com', '202cb962ac59075b964b07152d234b70', 'utilizador');
INSERT INTO `perfis` VALUES (15, 'Joana Soares', 'ativo', 'soares_ju@gmail.com', '202cb962ac59075b964b07152d234b70', 'utilizador');
INSERT INTO `perfis` VALUES (16, '1233', 'ativo', '1233@sapo.pt', '202cb962ac59075b964b07152d234b70', 'utilizador');
INSERT INTO `perfis` VALUES (17, 'user123', 'ativo', 'user123@gmail.com', '202cb962ac59075b964b07152d234b70', 'utilizador');
INSERT INTO `perfis` VALUES (18, 'Ana Carolina', 'ativo', 'carol_maia@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'utilizador');
INSERT INTO `perfis` VALUES (19, 'utilizador74', 'ativo', '74utilizador@sapo.pt', '202cb962ac59075b964b07152d234b70', 'utilizador');
INSERT INTO `perfis` VALUES (20, 'Alexandra Guimaraes', 'ativo', 'guimaAlex@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'utilizador');

SET FOREIGN_KEY_CHECKS = 1;
