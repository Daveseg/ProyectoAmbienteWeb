-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 16, 2023 at 04:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techcom`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarClaveUsuario` (IN `pIDUsuario` INT(11), IN `pContrasenna` VARCHAR(25))   BEGIN

	UPDATE usuarios
	SET Contrasenna = pContrasenna
	WHERE IDUsuario = pIDUsuario;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarDatos` (IN `pCorreo` VARCHAR(50))   BEGIN
SELECT 
		Identificacion,
		Nombre,
		Telefono,
		Direccion,
		Correo,
        Admin, 
        IDUsuario
FROM 	usuarios
WHERE 	Correo = pCorreo
	AND Contrasenna = pContrasenna;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `new_procedure` (IN `pIDUsuario` INT(11), IN `pContrasenna` VARCHAR(25))   BEGIN

	UPDATE usuarios
	SET Contrasenna = pContrasenna
	WHERE IDUsuario = pIDUsuario;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarUsuario` (IN `pIdentificacion` VARCHAR(30), IN `pNombre` VARCHAR(100), IN `pTelefono` VARCHAR(30), IN `pDireccion` VARCHAR(300), IN `pCorreo` VARCHAR(50), IN `pContrasenna` VARCHAR(25))   BEGIN

INSERT INTO `techcom`.`usuarios`(`Identificacion`,`Nombre`,`Telefono`,`Direccion`,`Correo`,`Contrasenna`,`Admin`)
VALUES (pIdentificacion,pNombre,pTelefono,pDireccion,pCorreo,pContrasenna,1);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidarSesion` (IN `pCorreo` VARCHAR(50), IN `pContrasenna` VARCHAR(25))   BEGIN
SELECT 
		Identificacion,
		Nombre,
		Telefono,
		Direccion,
		Correo,
        Admin
FROM usuarios
WHERE Correo = pCorreo
	AND Contrasenna = pContrasenna;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
--

CREATE TABLE `carrito` (
  `IDCarrito` int(11) NOT NULL,
  `Cantidad` int(2) NOT NULL,
  `IDPro_Carrito` int(11) NOT NULL,
  `IDUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventario`
--

CREATE TABLE `inventario` (
  `IDInv` int(11) NOT NULL,
  `IDPro` int(11) NOT NULL,
  `IDSucursal` int(11) NOT NULL,
  `Cantidad` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `IDPro` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Precio` int(10) NOT NULL,
  `IDTipoP` int(11) NOT NULL,
  `IDProveedor` int(11) NOT NULL,
  `IDSucursales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proveedor`
--

CREATE TABLE `proveedor` (
  `IDProveedor` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sucursal`
--

CREATE TABLE `sucursal` (
  `IDSucursales` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Ubicacion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipoproducto`
--

CREATE TABLE `tipoproducto` (
  `IDTipoP` int(11) NOT NULL,
  `Tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `IDUsuario` int(11) NOT NULL,
  `Identificacion` varchar(30) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `Direccion` varchar(300) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contrasenna` varchar(25) NOT NULL,
  `Admin` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`IDUsuario`, `Identificacion`, `Nombre`, `Telefono`, `Direccion`, `Correo`, `Contrasenna`, `Admin`) VALUES
(2, '123', 'Jean', 'jeanguzal@gmail.com', 'Heredia', '88888888', 'abc123', b'1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`IDCarrito`),
  ADD KEY `FK_IDUsuario` (`IDUsuario`),
  ADD KEY `FK_IDPro_Carrito` (`IDPro_Carrito`);

--
-- Indexes for table `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`IDInv`),
  ADD KEY `FK_IDPro` (`IDPro`),
  ADD KEY `FK_IDSucursal` (`IDSucursal`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`IDPro`),
  ADD KEY `FK_IDTipoP` (`IDTipoP`),
  ADD KEY `FK_IDProveedor` (`IDProveedor`),
  ADD KEY `FK_IDSucursales` (`IDSucursales`);

--
-- Indexes for table `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`IDProveedor`);

--
-- Indexes for table `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`IDSucursales`);

--
-- Indexes for table `tipoproducto`
--
ALTER TABLE `tipoproducto`
  ADD PRIMARY KEY (`IDTipoP`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IDUsuario`),
  ADD UNIQUE KEY `idx_usuarios_Correo` (`Correo`),
  ADD UNIQUE KEY `idx_usuarios_Identificacion` (`Identificacion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrito`
--
ALTER TABLE `carrito`
  MODIFY `IDCarrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventario`
--
ALTER TABLE `inventario`
  MODIFY `IDInv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `IDPro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `IDProveedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `IDSucursales` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipoproducto`
--
ALTER TABLE `tipoproducto`
  MODIFY `IDTipoP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IDUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `FK_IDPro_Carrito` FOREIGN KEY (`IDPro_Carrito`) REFERENCES `producto` (`IDPro`),
  ADD CONSTRAINT `FK_IDUsuario` FOREIGN KEY (`IDUsuario`) REFERENCES `usuarios` (`IDUsuario`);

--
-- Constraints for table `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `FK_IDPro` FOREIGN KEY (`IDPro`) REFERENCES `producto` (`IDPro`),
  ADD CONSTRAINT `FK_IDSucursal` FOREIGN KEY (`IDSucursal`) REFERENCES `sucursal` (`IDSucursales`);

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_IDProveedor` FOREIGN KEY (`IDProveedor`) REFERENCES `proveedor` (`IDProveedor`),
  ADD CONSTRAINT `FK_IDSucursales` FOREIGN KEY (`IDSucursales`) REFERENCES `sucursal` (`IDSucursales`),
  ADD CONSTRAINT `FK_IDTipoP` FOREIGN KEY (`IDTipoP`) REFERENCES `tipoproducto` (`IDTipoP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
