-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2024 a las 22:27:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eiatec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `ID` int(8) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Cedula` int(20) NOT NULL,
  `Cuenta` varchar(100) NOT NULL,
  `Ubicacion` varchar(100) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Cargo` varchar(100) NOT NULL,
  `Codigo` varchar(100) NOT NULL,
  `Region` varchar(100) NOT NULL,
  `Oficina` varchar(100) NOT NULL,
  `Tipo_de_computador` varchar(150) NOT NULL,
  `Marca` varchar(150) NOT NULL,
  `Modelo` varchar(150) NOT NULL,
  `Numero_de_serie` varchar(150) NOT NULL,
  `Id_producto` varchar(150) NOT NULL,
  `Procesador` varchar(150) NOT NULL,
  `Ram` varchar(150) NOT NULL,
  `Disco_duro` varchar(150) NOT NULL,
  `Gpu` varchar(150) NOT NULL,
  `Tipo_de_sistema` varchar(150) NOT NULL,
  `Display` varchar(150) NOT NULL,
  `Historial_asignacion` varchar(500) NOT NULL,
  `Procesos_a_ejecutar` varchar(500) NOT NULL,
  `Observaciones` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`ID`, `Nombre`, `Cedula`, `Cuenta`, `Ubicacion`, `Area`, `Cargo`, `Codigo`, `Region`, `Oficina`, `Tipo_de_computador`, `Marca`, `Modelo`, `Numero_de_serie`, `Id_producto`, `Procesador`, `Ram`, `Disco_duro`, `Gpu`, `Tipo_de_sistema`, `Display`, `Historial_asignacion`, `Procesos_a_ejecutar`, `Observaciones`) VALUES
(5, 'Juanchos', 15268, 'sgsgd', 'Puente Nacional', 'Contabilidad', 'Auxiliar HSEQ', 'publico', 'Norte', 'N_Uri', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Juancho', 15269, 'sgsgd', 'Ibague', 'area1', 'Coordinador de Proyectos', 'publico', 'Norte', 'C_Adm', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'Juancho', 1526, 'sgsgd', 'Ibague', 'area5', 'Profesional Ambiental', 'publico', 'Norte', 'N_Rio', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'dsfsdfsdf', 56454, '4545', 'Neiva', 'area3', 'Profesional Ambiental', 'publico', 'Norte', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'Dan', 666, 'dddd', 'Riohacha', 'area3', 'Profesional Social', 'sdfsdf', 'Norte', 'C_Hof', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'pollo', 664, 'sdfkjfd@gmail.com', 'Ibague', 'Gerencia', 'Gestor Predial', 'dddd', 'Sur', 'C_Hof', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'peptobismol', 101497, '946xdgfchgvhbj', 'Ibague', 'Geb_Centro', 'Coordinador de Proyectos', 'publico', 'Sur', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'juanchipa', 165465, 'sfsdf', 'Uribia', 'Tecnica', 'Profesional Ambiental', 'fafsdfsdf', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'Danilo', 213123, 'dfdfdf', 'Cartagena', 'Contabilidad', 'Profesional Forestal', 'adasd', 'Sur', 'N_Rio', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'efsdfsdf', 16523, 'sdfkjfd@gmail.com', 'Neiva', 'Contabilidad', 'Gestor Predial', 'publico', 'Sur', 'C_Adm', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 'Juancho', 656565665, 'dddd', 'Cartagena', 'Contabilidad', 'Gestor Social', 'publico', 'Sur', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 'Flipipipi', 12321321, 'sdfkjfd@gmail.com', 'Ibague', 'Tecnica', 'Profesional Ambiental', 'publico', 'Norte', 'N_Hof', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 'linadasdadsad', 166666, 'asdfghj', 'Valledupar ', 'Geb_Centro', 'Profesional Forestal', 'dddd', 'Sur', 'N_Rio', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 'popopopoppo', 16000, 'zsdsdadasdsd', 'Puente Nacional', 'Geb_Norte', 'Contador Junior', 'sdfsdf891', 'Sur', 'S_Nei', '', '', '', '', '', '', '32Gb', '250Gb', '', 'Windows10 home single language', '', 'juanes y juanita', 'asdasd', '556'),
(31, 'pipipi', 232300, 'zsdsdadasdsd', 'Neiva', 'Geb_Norte', 'Profesional Forestal', 'asdsadasdsadytey', 'Centro', 'C_Téc', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'sfsdf', 222, 'sfsdfsdfsdf', 'Puente Nacional', 'Geb_Centro', 'Coordinador de Proyectos', 'publico', 'Norte', 'C_Téc', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 'andrea', 694856, 'peipipi@gmi.com', 'Cartagena', 'Administracion', 'Gestor Predial', 'publico', 'Sur', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 'andreasssss', 694856, 'peipipi@gmi.com', 'Bogotá', 'Contabilidad', 'Auxiliar HSEQ', 'publico', 'Sur', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 'linassss', 694856, 'peipipi@gmi.com', 'Cartagena', 'Tecnica', 'Profesional Forestal', 'publico', 'Centro', 'N_Rio', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 'linasssseses', 694856, 'peipipi@gmi.com', 'Valledupar ', 'Contabilidad', 'Profesional Civil', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 'Danilo', 356566, 'peipipi@gmi.com', 'Ibague', 'Administracion', 'Coordinador de Proyectos', 'publico', 'Centro', 'C_Adm', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 'Danilo656', 356566, 'peipipi@gmi.com', 'Ibague', 'Geb_Norte', 'Profesional Forestal', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 'Danilo6565', 356566, 'peipipi@gmi.com', 'Neiva', 'Administracion', 'Profesional Forestal', 'publico', 'Centro', 'C_Adm', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, 'pipote', 356567, 'peipipi@gmi.com', 'Bogotá', 'Tecnica', 'Coordinador De Arqueología', 'publico', 'Norte', 'S_Hof', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 'pipote56565', 356566, 'peipipi@gmi.com', 'Bogotá', 'Administracion', 'Profesional Forestal', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, '54', 356566, 'peipipi@gmi.com', 'Cartagena', 'Gerencia', 'Gerente', 'publico', 'Centro', 'C_Téc', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, '54jh', 356566, 'peipipi@gmi.com', 'Cartagena', 'Tecnica', 'Profesional Ambiental', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, '54jhfrdsgtrg', 356566, 'peipipi@gmi.com', 'Ibague', 'Geb_Centro', 'Gestor Predial', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, '54jhfrdsgtrg56565', 356566, 'peipipi@gmi.com', 'Bogotá', 'Contabilidad', 'Profesional Ambiental', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, '54jhfrdsgtrg56565', 356566, 'peipipi@gmi.com', 'Cartagena', 'Contabilidad', 'Profesional Ambiental', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 'pilijkj', 356566, 'peipipi@gmi.com', 'Ibague', 'Contabilidad', 'Profesional Ambiental', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 'linsol', 356566, 'peipipi@gmi.com', 'Bogotá', 'Administracion', 'Gestor Predial', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 'fififi', 1526, 'sgsgd', 'Cartagena', 'Geb_Norte', 'Auxiliar HSEQ', 'publico', 'Norte', 'C_Adm', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 'fgddfgfgd', 28, 'dfdfgdf', 'Cartagena', 'Administracion', 'Profesional Sig / Profesional De Aseguramiento De Información - Sig', 'sdfsdf', 'Norte', 'N_Uri', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, 'firolonm', 5656565, 'dfdfgdf', 'Neiva', 'Administracion', 'Profesional Civil', 'sdfsdf', 'Norte', 'C_Téc', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, 'purtirur', 454545, 'sdfkjfd@gmail.com', 'Cartagena', 'Contabilidad', 'Coordinador de Proyectos', 'hotmla', 'Norte', 'N_Rio', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 'lianrtes ', 123, 'peipipi@gmi.com', 'Ibague', 'Geb_Norte', 'Coordinador de Proyectos', 'hotmla', 'Norte', 'N_Rio', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 'vivi', 35656655, 'peipipi@gmi.com', 'Puente Nacional', 'Geb_Centro', 'Profesional Social', 'hotmla', 'Norte', 'C_Adm', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, 'viviana', 35656655, 'peipipi@gmi.com', 'Cartagena', 'Administracion', 'Coordinador de Proyectos', 'hotmla', 'Norte', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 'liz', 3565, 'sdfkjfd@gmail.com', 'Ibague', 'Administracion', 'Gerente Tecnico', 'dddd', 'Norte', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, 'Danisss', 7777, 'sdfkjfd@gmail.com', 'Neiva', 'Geb_Centro', 'Profesional Social', 'dddd', 'Norte', 'N_Rio', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, 'Danissseee', 7777, 'sdfkjfd@gmail.com', 'Ibague', 'Administracion', 'Profesional Forestal', 'dddd', 'Norte', 'C_Adm', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, 'filipinas ortiz', 7778, 'sdfkjfd@gmail.com', 'Cartagena', 'Contabilidad', 'Gerente', 'dddd', 'Norte', 'C_Adm', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 'popri', 7778, 'sdfkjfd@gmail.com', 'Cartagena', 'Administracion', 'Profesional Civil', 'dddd', 'Norte', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, 'popri', 7778, 'sdfkjfd@gmail.com', 'Cartagena', 'Administracion', 'Profesional Civil', 'dddd', 'Norte', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, 'popri', 7778, 'sdfkjfd@gmail.com', 'Cartagena', 'Administracion', 'Profesional Civil', 'dddd', 'Norte', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, 'popri', 7778, 'sdfkjfd@gmail.com', 'Cartagena', 'Administracion', 'Profesional Civil', 'dddd', 'Norte', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(64, 'poprisss', 7779, 'sdfkjfd@gmail.com', 'Neiva', 'Contabilidad', 'Auxiliar HSEQ', 'dddd', 'Norte', 'C_Téc', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(65, 'poprisssttttrr', 7779, 'sdfkjfd@gmail.com', 'Neiva', 'Geb_Centro', 'Coordinador de Proyectos', 'dddd', 'Norte', 'C_Téc', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(66, 'juanes', 7779, 'sdfkjfd@gmail.com', 'Neiva', 'Geb_Centro', 'Coordinador de Proyectos', 'dddd', 'Norte', 'C_Adm', 'Portatil', 'Lenovo', '232', '35', '6455', 'Intel_i5', '8Gb', '500Gb', '2050', 'Windows10 pro', '15,6  FHD', '', 'ggggg', 'jhhou'),
(67, 'juanes', 7779, 'sdfkjfd@gmail.com', 'Neiva', 'Geb_Centro', 'Coordinador de Proyectos', 'dddd', 'Norte', 'C_Adm', 'Portatil', 'Lenovo', '232', '35', '6455', 'Intel_i5', '8Gb', '500Gb', '2050', 'Windows10 pro', '15,6  FHD', '', 'ggggg', 'jhhou'),
(68, 'tito perez', 7779, 'sdfkjfd@gmail.com', 'Cartagena', 'Tecnica', 'Profesional Ambiental', 'dddd', 'Norte', 'S_Nei', 'Mesa', 'Asus', '232', '35', '6455', 'Rizen_5', '12Gb', '250Gb', '2050', 'Windows10 home single language', '15  Full HD', 'juanes y juanita', 'ggggg', 'fifafssss'),
(69, 'titotina perez', 7777, 'sdfkjfd@gmail.com', 'Ibague', 'Tecnica', 'Profesional Ambiental', 'dddd', 'Norte', 'N_Hof', 'Mesa', 'Asus', '232', '35', '6455', 'Intel_i5', '12Gb', '250Gb', '3050', 'Windows10 home', '14  FHD', 'juanes y juanita', 'ggggg', 'nnnnn'),
(70, 'titotina perez albelaes', 77779, 'sdfkjfd@gmail.com', 'Puente Nacional', 'Administracion', 'Profesional Forestal', 'dddd', 'Norte', 'C_Adm', 'Mesa', 'Lenovo', '232', '35', '6455', 'Intel_i5', '8Gb', '500Gb', '2050', 'windows11 home single', '15,6  FHD', 'juanes y juanita', 'ggggg', '63+36'),
(71, 'titotina perez albelaes 45', 777788, 'sdfkjfd@gmail.com', 'Puente Nacional', 'Administracion', 'Profesional Forestal', 'dddd', 'Norte', 'C_Téc', 'Todo_en_uno', 'Asus', '232', '35', '6455', 'Intel_i5', '8Gb', '500Gb', '1650', 'Windows10 home single', '14  FHD', 'juanes y juanita', 'gggg8', '6+56+5+6'),
(72, 'viviana gri', 35656655, 'peipipi@gmi.com', 'Ibague', 'Administracion', 'Profesional Ambiental', 'hotmla', 'Norte', 'C_Adm', 'Portatil', 'Hp', '232', '35', '6455', 'i5', '12Gb', '1TB', '3050', 'windows11 home single', '15  Full HD', 'juanes y juanita', 'asdasd', '1'),
(73, 'shfafhlskfhsdlfh', 3565111, 'peipipi@gmi.com', 'Cartagena', 'Administracion', 'Profesional Ambiental', 'sdfsdf89', 'Centro', 'C_Téc', 'Mesa', 'Asus', '44545455', '3152531', '456456', 'i5', '12Gb', '1Tb+250Gb', '455415', 'windows11 pro', '14  FHD', 'juanes y juanitas', 'gggggs', ''),
(74, 'pepito perez', 3565111, 'peipipi@gmi.com', 'Puente Nacional', 'Administracion', 'Profesional Sig / Profesional De Aseguramiento De Información - Sig', '', 'Centro', 'C_Téc', 'Todo_en_uno', 'Hp', '44545455', '3152531', '456456', 'i5', '8Gb', '1Tb+250Gb', '455415', 'windows11 home single', '15,6  FHD', 'juanes y juanitas', 'gggggs', 'dskskldjf12'),
(75, 'alisonchita', 3565111, 'peipipi@gmi.com', 'Ibague', 'Contabilidad', 'Profesional Ambiental', 'sdfsdf89', 'Centro', 'N_Uri', 'Portatil', 'LENOVO', '44545455', '3152531', '456456', 'i5', '12Gb', '128Gb', '455415', 'Windows10 home single', '14  HD', 'juanes y juanitas', 'gggggs', 'dasfdsfds'),
(76, 'alisonchita :)', 3565111, 'peipipi@gmi.com', 'Bogotá', 'Administracion', 'Profesional Forestal', 'sdfsdf89', 'Centro', 'C_Hof', 'Mesa', 'Lenovo', '44545455', '3152531', '456456', 'i5', '12Gb', '1TB', '455415', 'Windows10 home', '15,6  FHD', 'juanes y juanitas', 'gggggs', 'SDSDS'),
(77, 'alisonchita :)', 3565111, 'peipipi@gmi.com', 'Ibague', 'Administracion', 'Gestor Predial', 'sdfsdf89', 'Centro', 'S_Nei', 'Mesa', 'Dell', '44545455', '3152531', '456456', 'i5', '12Gb', '1Tb+250Gb', '455415', 'Windows10 home single', '14  FHD', 'juanes y juanitas', 'gggggs', 'DFJKDFJK'),
(78, 'Danielazzzz', 3565111, 'sdfkjfd@gmail.com', 'Puente Nacional', 'Geb_Centro', 'Gestor Predial', 'sdfsdf89', 'Norte', 'C_Adm', 'Todo_en_uno', 'Lenovo', '44545455', '35', '456456', 'i9', '12Gb', '250Gb', '5080ti', 'Windows10 pro', '15,6  FHD', '6565', 'ggggg', 'hjhj'),
(79, 'Danielazzzze', 3565111, 'sdfkjfd@gmail.com', 'Puente Nacional', 'Geb_Centro', 'Gestor Predial', 'sdfsdf89', 'Norte', 'C_Adm', 'Todo_en_uno', 'Lenovo', '44545455', '35', '456456', 'i9', '12Gb', '250Gb', '5080ti', 'Windows10 pro', '15,6  FHD', '6565', 'ggggg', 'hjhj'),
(80, 'Danielazzzzesss', 3565111, 'sdfkjfd@gmail.com', 'Puente Nacional', 'Geb_Centro', 'Gestor Predial', 'sdfsdf89', 'Norte', 'C_Adm', 'Todo_en_uno', 'Lenovo', '44545455', '35', '456456', 'i9', '12Gb', '250Gb', '5080ti', 'Windows10 pro', '15,6  FHD', '6565', 'ggggg', 'hjhj'),
(81, 'marianazzz', 56500, 'peipipi@gmi.com', 'Puente Nacional', 'Geb_Centro', 'Coordinador de Proyectos', 'sdfsdf89', 'Norte', 'C_Adm', 'Portatil', 'Dell', '44545455', '35', '456456', 'i9', '12Gb', '250Gb', 'sdfsdfd', 'windows11 home', '14 FHD', 'juanes y juanita', 'gggggs', '88888'),
(82, 'shfafhlskfhsdlfh', 6566, 'peipipi@gmi.com', 'Ibague', 'Geb_Centro', 'Coordinador de Proyectos', 'sdfsdf891', 'Norte', 'C_Téc', 'Mesa', 'Asus', '44545455', '35', '456456', 'sdfsdfds', '12Gb', '500Gb', 'sdfsdfd', 'Windows10 home single language', '14  FHD', 'gfgfgf', 'gfdgdfgdfg', 'dfgdfgdfg'),
(83, 'dsfsdfsdf', 9999, 'sgsgd', 'Puente Nacional', 'Administracion', 'Coordinador de Proyectos', 'sdfsdf891', 'Sur', 'C_Téc', 'Mesa', 'Alienware', '44545455', '35', '456456', 'sdfsdfds', '16Gb', '1Tb+500Gb', 'sdfsdfd', 'Windows10 pro', '15,6  FHD', 'juanes y juanita y pedro', 'gggg8', '89985989'),
(84, 'lilili', 21, 'sdfsdf', 'Cartagena', 'Administracion', 'Coordinador de Proyectos', '55', 'Norte', 'C_Hof', 'Portatil', 'Apple', '55', '55', '55', '55', '8Gb', '1Tb+250Gb', '585', 'windows11 home single language', '15,6  FHD', '5858', '858', '585'),
(85, 'lililiana', 21, 'sdfsdf', 'Cartagena', 'Administracion', 'Coordinador de Proyectos', '55', 'Norte', 'C_Hof', 'Portatil', 'Apple', '55', '55', '55', '55', '8Gb', '1Tb+250Gb', '585', 'windows11 home single language', '15,6  FHD', '5858', '858', '585'),
(86, 'daniiiii', 99, 'sdfkjfd@gmail.com', 'Neiva', 'Geb_Centro', 'Auxiliar HSEQ', 'sdfsdf89', 'Norte', 'C_Téc', 'Mesa', 'Lenovo', '232', '55', '6455', 'i9', '12Gb', '250Gb', 'sdfsdfd', 'Windows10 home single language', '14  IPS', 'sdfsdfsdf', 'sdfsdfsdf', 'sdfsdf'),
(87, 'daniiiiilllll', 4564, 'peipipi@gmi.com', 'Puente Nacional', 'Administracion', 'Profesional Biologo', '66', 'Centro', 'C_Hof', 'Portatil', 'Toshiba', 'adad', 'asdasd', 'asdasdsa', 'asdasd', '16Gb', '1Tb+250Gb', 'sdfsdfd', 'windows11 home single', '15,6  FHD', 'sfdsfdsf', 'sdfsdffsdf', 'sdfsdfdsf'),
(88, 'zzzzzzzppppp', 656, 'dddd', 'Puente Nacional', 'Geb_Centro', 'Gestor Predial', '66', 'Norte', 'S_Hof', 'Mesa', 'Huawei', '44545455', '35', '55', 'sdfsdfds', '16Gb', '250Gb', '455415', 'windows11 pro', '15,6  FHD', 'juanes y juanita', 'sdfsdfsdf', 'sdfsdfsdfdsf'),
(89, 'zzzzzzzppppp88', 656, 'dddd', 'Puente Nacional', 'Geb_Centro', 'Gestor Predial', '66', 'Norte', 'S_Hof', 'Mesa', 'Huawei', '44545455', '35', '55', 'sdfsdfds', '16Gb', '250Gb', '455415', 'windows11 pro', '15,6  FHD', 'juanes y juanita', 'sdfsdfsdf', 'sdfsdfsdfdsf'),
(90, 'zzzzzzzppppp89', 656, 'dddd', 'Puente Nacional', 'Geb_Centro', 'Gestor Predial', '66', 'Norte', 'S_Hof', 'Mesa', 'Huawei', '44545455', '35', '55', 'sdfsdfds', '16Gb', '250Gb', '455415', 'windows11 pro', '15,6  FHD', 'juanes y juanita', 'sdfsdfsdf', 'sdfsdfsdfdsf'),
(91, 'popeto', 656, 'dddd', 'Puente Nacional', 'Geb_Centro', 'Gestor Predial', '66', 'Norte', 'S_Hof', 'Mesa', 'Huawei', '44545455', '35', '55', 'sdfsdfds', '16Gb', '250Gb', '455415', 'windows11 pro', '15,6  FHD', 'juanes y juanita', 'sdfsdfsdf', 'sdfsdfsdfdsf'),
(92, 'popeto999', 656, 'dddd', 'Puente Nacional', 'Geb_Centro', 'Gestor Predial', '66', 'Norte', 'S_Hof', 'Mesa', 'Huawei', '44545455', '35', '55', 'sdfsdfds', '16Gb', '250Gb', '455415', 'windows11 pro', '15,6  FHD', 'juanes y juanita', 'sdfsdfsdf', 'sdfsdfsdfdsf'),
(93, 'popeto9991', 656, 'dddd', 'Puente Nacional', 'Geb_Centro', 'Gestor Predial', '66', 'Norte', 'S_Hof', 'Mesa', 'Huawei', '44545455', '35', '55', 'sdfsdfds', '16Gb', '250Gb', '455415', 'windows11 pro', '15,6  FHD', 'juanes y juanita', 'sdfsdfsdf', 'sdfsdfsdfdsf'),
(94, 'popeto9998', 656, 'dddd', 'Puente Nacional', 'Geb_Centro', 'Gestor Predial', '66', 'Norte', 'S_Hof', 'Mesa', 'Huawei', '44545455', '35', '55', 'sdfsdfds', '16Gb', '250Gb', '455415', 'windows11 pro', '15,6  FHD', 'juanes y juanita', 'sdfsdfsdf', 'sdfsdfsdfdsf'),
(95, 'popeto9998ll', 656, 'dddd', 'Puente Nacional', 'Geb_Centro', 'Gestor Predial', '66', 'Norte', 'S_Hof', 'Mesa', 'Huawei', '44545455', '35', '55', 'sdfsdfds', '16Gb', '250Gb', '455415', 'windows11 pro', '15,6  FHD', 'juanes y juanita', 'sdfsdfsdf', 'sdfsdfsdfdsf'),
(96, 'guego', 656, 'dddd', 'Puente Nacional', 'Geb_Centro', 'Gestor Predial', '66', 'Norte', 'S_Hof', 'Mesa', 'Huawei', '44545455', '35', '55', 'sdfsdfds', '16Gb', '250Gb', '455415', 'windows11 pro', '15,6  FHD', 'juanes y juanita', 'sdfsdfsdf', 'sdfsdfsdfdsf'),
(97, 'guego456', 656, 'dddd', 'Puente Nacional', 'Geb_Centro', 'Gestor Predial', '66', 'Norte', 'S_Hof', 'Mesa', 'Huawei', '44545455', '35', '55', 'sdfsdfds', '16Gb', '250Gb', '455415', 'windows11 pro', '15,6  FHD', 'juanes y juanita', 'sdfsdfsdf', 'sdfsdfsdfdsf'),
(98, 'guego456lol', 656, 'dddd', 'Puente Nacional', 'Geb_Centro', 'Gestor Predial', '66', 'Norte', 'S_Hof', 'Mesa', 'Huawei', '44545455', '35', '55', 'sdfsdfds', '16Gb', '250Gb', '455415', 'windows11 pro', '15,6  FHD', 'juanes y juanita', 'sdfsdfsdf', 'sdfsdfsdfdsf'),
(99, 'daniiiiilllllelelele', 45645, 'peipipi@gmi.com', 'Puente Nacional', 'Administracion', 'Profesional Biologo', '66', 'Centro', 'C_Hof', 'Portatil', 'Toshiba', 'adad', 'asdasd', 'asdasdsa', 'asdasd', '16Gb', '1Tb+250Gb', 'sdfsdfd', 'windows11 home single', '15,6  FHD', 'sfdsfdsf', 'sdfsdffsdf', 'sdfsdfdsf'),
(100, 'Danielazzz65551', 3565111, '231', 'Ibague', 'Geb_Norte', 'Coordinador de Proyectos', '66', 'Norte', 'C_Adm', 'Mesa', 'Toshiba', '44545455', 'asdasd', '456456', 'i9', '32Gb', '1Tb+250Gb', '455415', 'windows11 home single language', '15  Full HD', 'juanes y juanita', 'ggggg', '565656'),
(101, 'pept', 356566, 'sgsgd', 'Ibague', 'Administracion', 'Gestor Predial', 'sdfsdf891', 'Sur', 'C_Adm', 'Portatil', 'Dell', '44545455', 'asdasd', 'dsfsfds', '55', '12Gb', '500Gb', 'sdfsdfd', 'Windows10 home', '14  FHD', 'juanes y juanita', 'asdasd', 'po´ppo'),
(102, 'Dandole duro', 3565111, 'dddd', 'Puente Nacional', 'Geb_Norte', 'Profesional Social', 'sdfsdf89', 'Norte', 'C_Adm', 'Portatil', 'Alienware', '232', '3152531', '55', 'i9', '8Gb', '1TB', '5080ti', 'Windows10 home single language', '15  Full HD', 'dsfsdfsdf', 'sdfdsfsdf', 'dsfsdfsdfdsf'),
(103, 'jose', 3565, 'sdfkjfd@gmail.com', 'Riohacha', 'Geb_Norte', 'Gestor Predial', 'sdfsdf89', 'Sur', 'N_Hof', 'Mesa', 'Apple', '44545455', '35', '6455', 'i5', '12Gb', '500Gb', 'sdfsdfd', 'Windows10 home single', '15,6  FHD', '6565', 'sdfsdfsdf', 'trtttt'),
(104, 'dillan', 3565111, 'sgsgd', 'Bogotá', 'Geb_Centro', 'Auxiliar HSEQ', 'sdfsdf89', 'Centro', 'S_Hof', 'Portatil', 'Toshiba', '44545455', '3152531', 'dsfsfds', '55', '12Gb', '1TB', '455415', 'windows11 home single language', '15,6 LCD', '5858', 'sdfsdfsdf', 'pppppp'),
(105, 'shfafhlskfhsdlfh', 3565111, 'sdfkjfd@gmail.com', 'Neiva', 'Geb_Centro', 'Coordinador Sig', 'sdfsdf89', 'Centro', 'C_Adm', 'Mesa', 'Apple', '232', '35', 'asdasdsa', 'i5', '8Gb', '500Gb', '585', 'windows11 home', '14 FHD', 'juanes y juanita', 'sdfsdfsdf', '63\r\n32323'),
(106, 'pedrooooo acostaaaaaaa', 3565111, 'peipipi@gmi.com', 'Neiva', 'Geb_Centro', 'Profesional Ambiental', '66', 'Norte', 'C_Adm', 'Portatil', 'LENOVO', '232', '35', '456456', 'i9', '12Gb', '500Gb', 'sdfsdfd', 'Windows10 pro', '15  Full HD', 'dfsdfsdf', 'sdfsdfdsfdsf', 'sdfsdfsdfds'),
(107, 'valeria montes', 3565112, 'peipipi@gmi.com', 'Bogotá', 'Geb_Centro', 'Auxiliar HSEQ', 'sdfsdf89', 'Centro', 'C_Adm', 'Todo_en_uno', 'Lenovo', '44545455', '35', '55', '55', '32Gb', '500Gb', '5080ti', 'windows11 pro', '14  FHD', 'juanes y juanita', 'gggggs', 'gfgfggfg'),
(108, 'Danppppp0', 3565, 'sgsgd', 'Puente Nacional', 'Geb_Norte', 'Coordinador Sig', 'sdfsdf89', 'Sur', 'C_Téc', 'Portatil', 'Asus', 'adad', '35', '6455', 'i5', '8Gb', '500Gb', 'sdfsdfd', 'Windows10 home single language', '15,6 FHD', 'juanes y juanita', '858', 'kkkkk'),
(109, 'alpintodo', 3565, 'peipipi@gmi.com', 'Neiva', 'Geb_Norte', 'Profesional Civil', 'sdfsdf', 'Norte', 'S_Nei', 'Portatil', 'Lenovo', 'sd{lfjsdlkfj', 'jghjg', 'dsfsopdfjsdopfj', 'fsdfsdfdsfs', '12Gb', '1TB', 'okldfhnolsidfy', 'windows11 home single language', '15  Full HD', 'asldfjsnmg', 'kgdfg{df´pju', 'lñfjfgldg'),
(110, 'Dan', 66667, 'sdfkjfd@gmail.com', 'Neiva', 'Administracion', 'Coordinador Sig', '66', 'Norte', 'S_Hof', 'Mesa', 'Lenovo', '44545455', '555', '66666', '3212313212', '16Gb', '250Gb', 'cxvxcvxcvcxv', 'Windows10 pro', '15  Full HD', 'gfgfdgdfgdfg', '12345789', 'no coreeeeessss'),
(111, 'libsererrttt', 656, 'peipipi@gmi.com', 'Riohacha', 'Contabilidad', 'Auxiliar HSEQ', '999', 'Sur', 'C_Hof', 'Portatil', 'Asus', 'dsfsdfsd', '3152531', '55', '55', '8Gb', '500Gb', '585', 'windows11 home', '14 FHD', 'sdfghjklñ', 'sdfghjklñ', 'dsdds1111'),
(112, 'shfafhlskfhsdlfh', 3565111, 'peipipi@gmi.com', 'Neiva', 'Geb_Centro', 'Coordinador de Proyectos', 'sdfsdf89', 'Norte', 'C_Adm', 'Mesa', 'Hp', 'adad', '22323', 'dsfsopdfjsdopfj', 'asdasd', '16Gb', '1TB', '585', 'Windows10 home', '14  FHD', 'juanes y juanita', 'sdfsdfsdf', 'dgdfgdfg'),
(113, 'lina maria santos', 35688, 'sgsgd', 'Neiva', 'Geb_Norte', 'Gestor Predial', '66', 'Norte', 'C_Téc', 'Mesa', 'Hp', '232', '555', 'dsfsopdfjsdopfj', 'asdasd', '32Gb', '1TB', 'cxvxcvxcvcxv', 'windows11 pro', '14  FHD', '1231321', 'ggggg', 'bnmiuuvhgfjg'),
(114, 'medellin', 656, 'dddd', 'Puente Nacional', 'Administracion', 'Coordinador De Arqueología', 'dgdg', 'Sur', 'C_Téc', 'Mesa', 'Asus', '232', 'asdasd', '55', 'i9', '64Gb', '1Tb+1Tb', '5080ti', 'Windows10 pro', '15  Full HD', 'juanes y juanitas', 'gggggs', '4564564'),
(115, 'Juanchosssss', 656, 'sgsgd', 'Risaralda', 'Geb_Norte', 'Profesional Biologo', 'dgdg', 'Sur', 'S_Hof', 'Mesa', 'Acer', 'adad', '3152531', '6455', 'asdasd', '16Gb', '250Gb', 'cxvxcvxcvcxv', 'windows11 home', '15,6  FHD', 'juanes y juanita y pedro', 'ggggg', 'ijkofdsvjiofdsdsjkop');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
