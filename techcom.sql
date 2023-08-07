-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 08-08-2023 a las 01:47:50
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `techcom`
--

DELIMITER $$
--
-- Procedimientos
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
WHERE 	Correo = pCorreo;
	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarProductosPromocion` ()   BEGIN
   SELECT IDPro,rutaImagen, Nombre, Descripcion, Precio FROM producto WHERE IDTipoP = 4;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `FiltrarPrecio` (IN `pCategoria` VARCHAR(100))   BEGIN
CASE pCategoria
        WHEN '₡0 - ₡50000' THEN
            SELECT * FROM producto WHERE Precio >= 0 AND Precio <= 50000;
        WHEN '₡50000 - ₡100000' THEN
            SELECT * FROM producto WHERE Precio > 50000 AND Precio <= 100000;
        WHEN '₡100000 - ₡150000' THEN
            SELECT * FROM producto WHERE Precio > 100000 AND Precio <= 150000;
        WHEN '₡150000 - ₡200000' THEN
            SELECT * FROM producto WHERE Precio > 150000 AND Precio <= 200000;
        
        ELSE
            SELECT * FROM producto;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `new_procedure` (IN `pIDUsuario` INT(11), IN `pContrasenna` VARCHAR(25))   BEGIN

	UPDATE usuarios
	SET Contrasenna = pContrasenna
	WHERE IDUsuario = pIDUsuario;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarInformacion` (IN `pNombre` VARCHAR(100), IN `pCorreo` VARCHAR(50), IN `pAsunto` VARCHAR(50), IN `pMensaje` VARCHAR(150))   BEGIN
INSERT INTO `techcom`.`contacto`(`Nombre`,`Correo`,`Asunto`,`Mensaje`)
VALUES (pNombre,pCorreo,pAsunto,pMensaje);

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
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `IDCarrito` int(11) NOT NULL,
  `Cantidad` int(2) NOT NULL,
  `IDPro_Carrito` int(11) NOT NULL,
  `IDUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `Nombre` varchar(100) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Asunto` varchar(50) NOT NULL,
  `Mensaje` varchar(150) NOT NULL,
  `Idcontacto` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `IDInv` int(11) NOT NULL,
  `IDPro` int(11) NOT NULL,
  `IDSucursal` int(11) NOT NULL,
  `Cantidad` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `IDPro` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Precio` int(10) NOT NULL,
  `IDTipoP` int(11) NOT NULL,
  `IDProveedor` int(11) NOT NULL,
  `IDSucursales` int(11) NOT NULL,
  `rutaImagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`IDPro`, `Nombre`, `Descripcion`, `Precio`, `IDTipoP`, `IDProveedor`, `IDSucursales`, `rutaImagen`) VALUES
(1, 'Redragon K552 Kumara', 'Es un teclado mecánico diseñado especialmente para jugadores y usuarios que buscan una experiencia de escritura y juego de alta calidad.', 12000, 4, 3, 2, '\\ProyectoAmbienteWeb\\Views\\img\\redragon-k552.jpg'),
(2, 'Huawei P30', '¡Descubre el poder de la fotografía con el Huawei P30, el teléfono inteligente perfecto para capturar momentos inolvidables! Equipado con una cámara Leica de triple lente, este dispositivo te permitirá dar rienda suelta a tu creatividad y obtener imá', 20000, 4, 9, 2, '\\ProyectoAmbienteWeb\\Views\\img\\huawei-p30.jpg'),
(3, 'Razer Deathadder Essentials', 'Este ratón ergonómico ha sido diseñado especialmente para satisfacer las necesidades de los jugadores más exigentes y los usuarios que buscan una experiencia de uso inigualable.', 10000, 3, 8, 2, ''),
(4, 'Lenovo Thinkvision S24E10', 'Con su elegante diseño y pantalla de 23.8 pulgadas, este monitor ofrece imágenes nítidas y colores vibrantes en alta definición Full HD (1920 x 1080 píxeles). Disfruta de detalles precisos y una claridad impresionante para tus tareas diarias, trabajo', 97000, 5, 1, 2, NULL),
(5, 'p5', 'dggdgdggdff', 160000, 1, 2, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `IDProveedor` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`IDProveedor`, `Nombre`) VALUES
(1, 'Lenovo'),
(2, 'HP'),
(3, 'Redragon'),
(4, 'Dell'),
(5, 'Apple'),
(6, 'Asus'),
(7, 'Msi'),
(8, 'Razer'),
(9, 'Huawei');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `IDSucursales` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Ubicacion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`IDSucursales`, `Nombre`, `Ubicacion`) VALUES
(1, 'TechcomL', 'Lindora'),
(2, 'TechcomSJ', 'San Jose'),
(3, 'TechcomA', 'Alajuela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproducto`
--

CREATE TABLE `tipoproducto` (
  `IDTipoP` int(11) NOT NULL,
  `Tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipoproducto`
--

INSERT INTO `tipoproducto` (`IDTipoP`, `Tipo`) VALUES
(1, 'Computadora'),
(2, 'Celular'),
(3, 'Periferico'),
(4, 'Promocion'),
(5, 'Monitor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
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
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IDUsuario`, `Identificacion`, `Nombre`, `Telefono`, `Direccion`, `Correo`, `Contrasenna`, `Admin`) VALUES
(5, '123', 'jean', '88888888', 'Heredia', 'jeanguzal@gmail.com', '3HvhiYRZ', b'1'),
(6, '456', 'David', '777777777', 'Alajuela', 'sinicah864@miqlab.com', 'Pl2yrcEy', b'1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`IDCarrito`),
  ADD KEY `FK_IDUsuario` (`IDUsuario`),
  ADD KEY `FK_IDPro_Carrito` (`IDPro_Carrito`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`Idcontacto`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`IDInv`),
  ADD KEY `FK_IDPro` (`IDPro`),
  ADD KEY `FK_IDSucursal` (`IDSucursal`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`IDPro`),
  ADD KEY `FK_IDTipoP` (`IDTipoP`),
  ADD KEY `FK_IDProveedor` (`IDProveedor`),
  ADD KEY `FK_IDSucursales` (`IDSucursales`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`IDProveedor`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`IDSucursales`);

--
-- Indices de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  ADD PRIMARY KEY (`IDTipoP`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IDUsuario`),
  ADD UNIQUE KEY `idx_usuarios_Correo` (`Correo`),
  ADD UNIQUE KEY `idx_usuarios_Identificacion` (`Identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `IDCarrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `Idcontacto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `IDInv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `IDPro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `IDProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `IDSucursales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  MODIFY `IDTipoP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IDUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `FK_IDPro_Carrito` FOREIGN KEY (`IDPro_Carrito`) REFERENCES `producto` (`IDPro`),
  ADD CONSTRAINT `FK_IDUsuario` FOREIGN KEY (`IDUsuario`) REFERENCES `usuarios` (`IDUsuario`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `FK_IDPro` FOREIGN KEY (`IDPro`) REFERENCES `producto` (`IDPro`),
  ADD CONSTRAINT `FK_IDSucursal` FOREIGN KEY (`IDSucursal`) REFERENCES `sucursal` (`IDSucursales`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_IDProveedor` FOREIGN KEY (`IDProveedor`) REFERENCES `proveedor` (`IDProveedor`),
  ADD CONSTRAINT `FK_IDSucursales` FOREIGN KEY (`IDSucursales`) REFERENCES `sucursal` (`IDSucursales`),
  ADD CONSTRAINT `FK_IDTipoP` FOREIGN KEY (`IDTipoP`) REFERENCES `tipoproducto` (`IDTipoP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
