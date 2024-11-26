-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2024 a las 03:08:53
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_venta1`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE  PROCEDURE `actualizarcategoria` (IN `p_id` INT(11), IN `p_nombre` VARCHAR(20), IN `p_detalle` VARCHAR(50))   BEGIN
	UPDATE categoria SET nombre=p_nombre,detalle=p_detalle,detalle=p_detalle WHERE id=p_id;
    SELECT p_id;
END$$

CREATE  PROCEDURE `actualizarcompras` (IN `p_id` INT(11), IN `p_id_producto` INT(11), IN `p_cantidad` INT(5), IN `p_precio` DECIMAL(6,2), IN `p_id_trabajador` INT(11))   BEGIN
	UPDATE compras SET id_producto=p_id_producto,cantidad=p_cantidad,precio=p_precio,id_trabajador=p_id_trabajador WHERE id=p_id;
    SELECT p_id;
END$$

CREATE  PROCEDURE `actualizardetalle_venta` (IN `p_id` INT(11), IN `p_id_venta` INT(11), IN `p_id_producto` INT(11), IN `p_cantidad` INT(6))   BEGIN
	UPDATE detalle_venta SET id_venta=p_id_venta,id_producto=p_id_producto,cantidad=p_cantidad WHERE id=p_id;
    SELECT p_id;
END$$

CREATE  PROCEDURE `actualizarpagos` (IN `p_id` INT(11), IN `p_id_venta` INT(11), IN `p_fecha_hora` DATETIME, IN `p_monto` DECIMAL(6,2), IN `p_metodo_pago` VARCHAR(20), IN `p_estado` INT(1))   BEGIN
	UPDATE pagos SET id_venta=p_id_venta,fecha_hora=p_fecha_hora,monto=p_monto,metodo_pago=p_metodo_pago,estado=p_estado WHERE id=p_id;
    SELECT p_id;
END$$

CREATE  PROCEDURE `actualizarpersona` (IN `p_id` INT(11), IN `p_nro_identidad` VARCHAR(11), IN `p_razon_social` VARCHAR(130), IN `p_telefono` VARCHAR(15), IN `p_correo` VARCHAR(100), IN `p_departamento` VARCHAR(20), IN `p_provincia` VARCHAR(30), IN `p_distrito` VARCHAR(50), IN `p_cod_postal` INT(5), IN `p_direccion` VARCHAR(100), IN `p_rol` VARCHAR(15), IN `p_password` VARCHAR(500), IN `p_estado` VARCHAR(1), IN `p_fecha_reg` DATETIME)   BEGIN
	UPDATE persona SET nro_identidad=p_nro_identidad,razon_social=p_razon_social,telefono=p_telefono,correo=p_correo,departamento=p_departamento,provincia=p_provincia,distrito=p_distrito,cod_postal=p_cod_postal,direccion=p_direccion,rol=p_rol,password=p_password,estado=p_estado,fecha_reg=p_fecha_reg WHERE id=p_id;
    SELECT p_id;
END$$

CREATE  PROCEDURE `actualizarproducto` (IN `p_id` INT(11), IN `p_codigo` VARCHAR(20), IN `p_nombre` VARCHAR(30), IN `p_detalle` VARCHAR(100), IN `p_precio` DECIMAL(6,2), IN `p_id_categoria` INT(11), IN `p_fecha_vencimiento` DATE, IN `p_imagen` VARCHAR(100), IN `p_id_proveedor` INT(11))   BEGIN
	UPDATE producto SET codigo=p_codigo,nombre=p_nombre,detalle=p_detalle,precio=p_precio,id_categoria=p_id_categoria,fecha_vencimiento=p_fecha_vencimiento,imagen=p_imagen,id_proveedor=p_id_proveedor WHERE id=p_id;
    SELECT p_id;
END$$

CREATE  PROCEDURE `actualizarsesiones` (IN `p_id` INT(11), IN `p_id_persona` INT(11), IN `fecha_hora_inicio` DATETIME, IN `p_fecha_hora_fin` DATETIME, IN `p_token` VARCHAR(20), IN `p_ip` VARCHAR(20))   BEGIN
	UPDATE sesiones SET id_persona=p_id_persona,fecha_hora_inicio=fecha_hora_inicio,fecha_hora_fin=p_fecha_hora_fin,token=p_token,ip=p_ip WHERE id=p_id;
    SELECT p_id;
END$$

CREATE  PROCEDURE `actualizarventa` (IN `p_id` INT(11), IN `p_codigo` VARCHAR(20), IN `p_fecha_hora` DATETIME, IN `p_id_cliente` INT(11), IN `p_id_vendedor` INT(11), IN `p_estado` INT(1))   BEGIN
	UPDATE venta SET codigo=p_codigo,fecha_hora=p_fecha_hora,id_cliente=p_id_cliente,id_vendedor=p_id_vendedor,estado=p_estado WHERE id=p_id;
    SELECT p_id;
END$$

CREATE  PROCEDURE `buscarcategoria` ()   BEGIN
	SELECT * FROM categoria;
END$$

CREATE  PROCEDURE `buscarcategoriaId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM categoria WHERE id=p_id;
END$$

CREATE PROCEDURE `buscarcompras` ()   BEGIN
	SELECT * FROM compras;
END$$

CREATE  PROCEDURE `buscarcomprasId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM compras WHERE id=p_id;
END$$

CREATE  PROCEDURE `buscardetalle_venta` ()   BEGIN
	SELECT * FROM detalle_venta;
END$$

CREATE  PROCEDURE `buscardetalle_ventaId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM detalle_venta WHERE id=p_id;
END$$

CREATE  PROCEDURE `buscarpagos` ()   BEGIN
	SELECT * FROM pagos;
END$$

CREATE  PROCEDURE `buscarpagosId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM pagos WHERE id=p_id;
END$$

CREATE  PROCEDURE `buscarpersona` ()   BEGIN
	SELECT * FROM persona;
END$$

CREATE  PROCEDURE `buscarpersonaId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM persona WHERE id=p_id;
END$$

CREATE  PROCEDURE `buscarproductoId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM producto WHERE id=p_id;
END$$

CREATE  PROCEDURE `buscarproductos` ()   BEGIN
	SELECT * FROM producto;
END$$

CREATE  PROCEDURE `buscarsesiones` ()   BEGIN
	SELECT * FROM sesiones;
END$$

CREATE  PROCEDURE `buscarsesionesId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM sesiones WHERE id=p_id;
END$$

CREATE  PROCEDURE `buscarventa` ()   BEGIN
	SELECT * FROM venta;
END$$

CREATE  PROCEDURE `buscarventaId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM venta WHERE id=p_id;
END$$

CREATE PROCEDURE `eliminarcategoria` (IN `p_id` INT(11))   BEGIN
	DELETE FROM categoria WHERE id=p_id;
    SELECT p_id;
END$$

CREATE  PROCEDURE `eliminarcompras` (IN `p_id` INT(11))   BEGIN
	DELETE FROM compras WHERE id=p_id;
    SELECT p_id;
END$$

CREATE  PROCEDURE `eliminardetalle_venta` (IN `p_id` INT(11))   BEGIN
	DELETE FROM detalle_venta WHERE id=p_id;
    SELECT p_id;
END$$

CREATE  PROCEDURE `eliminarpagos` (IN `p_id` INT(11))   BEGIN
	DELETE FROM pagos WHERE id=p_id;
    SELECT p_id;
END$$

CREATE  PROCEDURE `eliminarpersona` (IN `p_id` INT(11))   BEGIN
	DELETE FROM persona WHERE id=p_id;
    SELECT p_id;
END$$

CREATE  PROCEDURE `eliminarproducto` (IN `p_id` INT(11))   BEGIN
	DELETE FROM producto WHERE id=p_id;
    SELECT p_id;
END$$

CREATE  PROCEDURE `eliminarsesiones` (IN `p_id` INT(11))   BEGIN
	DELETE FROM sesiones WHERE id=p_id;
    SELECT p_id;
END$$

CREATE  PROCEDURE `eliminarventa` (IN `p_id` INT(11))   BEGIN
	DELETE FROM venta WHERE id=p_id;
    SELECT p_id;
END$$

CREATE  PROCEDURE `insertcategoria` (IN `p_nombre` VARCHAR(20), IN `p_detalle` VARCHAR(50))   BEGIN
	DECLARE existe_categoria INT;
    DECLARE id INT;
    SET existe_categoria = (SELECT COUNT(*) FROM categoria WHERE nombre=p_nombre);
    
    IF existe_categoria=0 THEN
    	INSERT INTO categoria (nombre,detalle)
        	VALUES 
(p_nombre,p_detalle);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE  PROCEDURE `insertcompras` (IN `p_id_producto` INT(11), IN `p_cantidad` INT(5), IN `p_precio` DECIMAL(6,2), IN `p_id_trabajador` INT(11))   BEGIN
	DECLARE existe_compras INT;
    DECLARE id INT;
    SET existe_compras = (SELECT COUNT(*) FROM compras WHERE id_producto=p_id_producto);
    
    IF existe_compras=0 THEN
    	INSERT INTO compras (id_producto,cantidad,precio,stock,id_trabajador)
        	VALUES 
(p_id_producto,p_cantidad,p_detalle,p_precio,p_id_trabajador);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE  PROCEDURE `insertdetalle_venta` (IN `p_id_venta` INT(11), IN `p_id_producto` INT(11), IN `p_cantidad` INT(6))   BEGIN
	DECLARE existe_detalle_venta INT;
    DECLARE id INT;
    SET existe_detalle_venta = (SELECT COUNT(*) FROM detalle_venta WHERE id_venta=p_id_venta);
    
    IF existe_detalle_venta=0 THEN
    	INSERT INTO detalle_venta (id_venta,id_producto,cantidad)
        	VALUES 
(p_id_venta,p_id_producto,p_cantidad);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE  PROCEDURE `insertpagos` (IN `p_id_venta` INT(11), IN `p_fecha_hora` DATETIME, IN `p_monto` DECIMAL(6,2), IN `p_metodo_pago` VARCHAR(20), IN `p_estado` INT(1))   BEGIN
	DECLARE existe_pagos INT;
    DECLARE id INT;
    SET existe_pagos = (SELECT COUNT(*) FROM pagos WHERE id_venta=p_id_venta);
    
    IF existe_pagos=0 THEN
    	INSERT INTO pagos (id_venta,fecha_hora,monto,metodo_pago,estado)
        	VALUES 
(p_id_venta,p_fecha_hora,p_monto,p_metodo_pagop_estado);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE  PROCEDURE `insertpersona` (IN `p_nro_identidad` VARCHAR(11), IN `p_razon_social` VARCHAR(130), IN `p_telefono` VARCHAR(15), IN `p_correo` VARCHAR(100), IN `p_departamento` VARCHAR(20), IN `p_provincia` VARCHAR(30), IN `p_distrito` VARCHAR(50), IN `p_cod_postal` INT(5), IN `p_direccion` VARCHAR(100), IN `p_rol` VARCHAR(15), IN `p_password` VARCHAR(500), IN `p_estado` VARCHAR(1), IN `p_fecha_reg` DATETIME)   BEGIN
	DECLARE existe_persona INT;
    DECLARE id INT;
    SET existe_persona = (SELECT COUNT(*) FROM persona WHERE nro_identidad=p_nro_identidad);
    
    IF existe_persona=0 THEN
    	INSERT INTO persona (nro_identidad,razon_social,telefono,correo,departamento,provincia,distrito,cod_postal,direccion,rol,password,estado,fecha_reg)
        	VALUES 
(p_nro_identidad,p_razon_social,p_telefono,p_correo,p_departamento,p_provincia,p_distrito,p_cod_postal,p_direccion,p_cod_postal,p_direccion,p_rol,p_password,p_estado,p_fecha_reg);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE  PROCEDURE `insertproducto` (IN `p_codigo` INT(20), IN `p_nombre` VARCHAR(30), IN `p_detalle` VARCHAR(100), IN `p_precio` DECIMAL(6,2), IN `p_stock` INT(5), IN `p_id_categoria` INT(11), IN `p_imagen` VARCHAR(100), IN `p_id_proveedor` INT(11))   BEGIN
	DECLARE existe_producto INT;
    DECLARE id INT;
    SET existe_producto = (SELECT COUNT(*) FROM producto WHERE codigo=p_codigo);
    
    IF existe_producto=0 THEN
    	INSERT INTO producto (codigo,nombre,detalle,precio,stock,id_categoria,imagen,id_proveedor)
        	VALUES 
(p_codigo,p_nombre,p_detalle,p_precio,p_stock,p_id_categoria,p_imagen,p_id_proveedor);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE PROCEDURE `insertsesiones` (IN `p_id_persona` INT(11), IN `p_fecha_hora_inicio` DATETIME, IN `p_fecha_hora_fin` DATETIME, IN `token` VARCHAR(20), IN `p_ip` VARCHAR(20))   BEGIN
	DECLARE existe_sesiones INT;
    DECLARE id INT;
    SET existe_sesiones = (SELECT COUNT(*) FROM sesiones WHERE id_persona=p_id_persona);
    
    IF existe_sesiones=0 THEN
    	INSERT INTO sesiones (id_persona,fecha_hora_inicio,fecha_hora_fin,token,ip)
        	VALUES 
(p_id_persona,p_fecha_hora_inicio,p_fecha_hora_fin,token,p_ip);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE  PROCEDURE `insertventa` (IN `p_codigo` VARCHAR(20), IN `p_fecha_hora` DATETIME, IN `p_id_cliente` INT(11), IN `p_id_vendedor` INT(11), IN `p_estado` INT(1))   BEGIN
	DECLARE existe_venta INT;
    DECLARE id INT;
    SET existe_venta = (SELECT COUNT(*) FROM venta WHERE codigo=p_codigo);
    
    IF existe_venta=0 THEN
    	INSERT INTO venta (codigo,fecha_hora,id_cliente,id_vendedor,estado)
        	VALUES 
(p_codigo,p_fecha_hora,p_id_cliente,p_id_vendedor,p_estado);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `detalle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `detalle`) VALUES
(1, 'polos', 'polos para adultos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(5) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `id_trabajador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `monto` decimal(6,2) DEFAULT NULL,
  `metodo_pago` varchar(20) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nro_identidad` varchar(11) DEFAULT NULL,
  `razon_social` varchar(130) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `departamento` varchar(20) DEFAULT NULL,
  `provincia` varchar(30) DEFAULT NULL,
  `distrito` varchar(50) DEFAULT NULL,
  `cod_postal` int(5) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `rol` varchar(15) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  `fecha_reg` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nro_identidad`, `razon_social`, `telefono`, `correo`, `departamento`, `provincia`, `distrito`, `cod_postal`, `direccion`, `rol`, `password`, `estado`, `fecha_reg`) VALUES
(1, '45698321', 'jhonatan cesar ñaupai farfan', '900654123', 'jhonatan@gmail.com', 'ayacucho', 'huanta', 'huanta', 123456, 'jr racaredo alvarado', 'proveedor', '123456789', '1', '2024-12-12 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `detalle` varchar(100) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `stock` int(5) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `codigo`, `nombre`, `detalle`, `precio`, `stock`, `id_categoria`, `imagen`, `id_proveedor`) VALUES
(1, '123456', 'polo', 'polo amarrillo', 60.99, 100, 1, 'polo.jpg', 1),
(2, '1', 'jh', '111', 1.00, 1, 1, '1', 1),
(3, '12222', 'jh', '111', 1.00, 1, 1, '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `id` int(11) NOT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `fecha_hora_inicio` datetime DEFAULT NULL,
  `fecha_hora_fin` datetime DEFAULT NULL,
  `token` varchar(20) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_vendedor` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_trabajador` (`id_trabajador`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_vendedor` (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_trabajador`) REFERENCES `persona` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id`),
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_proveedor`) REFERENCES `persona` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD CONSTRAINT `sesiones_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_vendedor`) REFERENCES `persona` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
