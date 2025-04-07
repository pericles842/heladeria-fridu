-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-04-2025 a las 04:13:45
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `heladeria_fridu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Helados'),
(2, 'Toppings'),
(3, 'Bebidas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispatches`
--

CREATE TABLE `dispatches` (
  `id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `status` enum('pending','in_transit','delivered','canceled') NOT NULL DEFAULT 'pending',
  `tracking_code` varchar(100) DEFAULT NULL,
  `delivery_date` datetime NOT NULL,
  `day_date_delivered` datetime NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `serial` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `status` enum('available','sold') NOT NULL DEFAULT 'available',
  `category_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `providers`
--

CREATE TABLE `providers` (
  `id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `rif` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `providers`
--

INSERT INTO `providers` (`id`, `company`, `tel`, `email`, `location`, `rif`) VALUES
(1, 'Heladeros Venezolanos', '0412-1234567', 'heladerosvenezolanos@gmail.com', 'Caracas', 'J-12345678-9'),
(2, 'Distribuidora de Helados', '0414-9876543', 'distribuidorahelados@gmail.com', 'Valencia', 'J-87654321-0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `modules` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`modules`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `modules`) VALUES
(1, 'Administrador', '[{\"id\": 1, \"key\": \"roles\", \"nombre\": \"Roles\", \"ver\": true, \"crear\": true, \"actualizar\": true, \"eliminar\": true}, {\"id\": 2, \"key\": \"usuarios\", \"nombre\": \"Usuarios\", \"ver\": true, \"crear\": true, \"actualizar\": true, \"eliminar\": true}, {\"id\": 3, \"key\": \"proveedores\", \"nombre\": \"Proveedores\", \"ver\": true, \"crear\": true, \"actualizar\": true, \"eliminar\": true}, {\"id\": 4, \"key\": \"almacenes\", \"nombre\": \"Almacenes\", \"ver\": true, \"crear\": true, \"actualizar\": true, \"eliminar\": true}, {\"id\": 5, \"key\": \"productos\", \"nombre\": \"Productos\", \"ver\": true, \"crear\": true, \"actualizar\": true, \"eliminar\": true}, {\"id\": 6, \"key\": \"categoria\", \"nombre\": \"Categoría\", \"ver\": true, \"crear\": true, \"actualizar\": true, \"eliminar\": true}, {\"id\": 7, \"key\": \"inventario\", \"nombre\": \"Inventario\", \"ver\": true, \"crear\": true, \"actualizar\": true, \"eliminar\": true}, {\"id\": 8, \"key\": \"despacho\", \"nombre\": \"Despacho\", \"ver\": true, \"crear\": true, \"actualizar\": true, \"eliminar\": true}, {\"id\": 9, \"key\": \"reportes\", \"nombre\": \"Reportes\", \"ver\": true, \"crear\": true, \"actualizar\": true, \"eliminar\": true}]'),
(2, 'Cliente', '[{\"id\": 1, \"key\": \"roles\", \"nombre\": \"Roles\", \"ver\": false, \"crear\": false, \"actualizar\": false, \"eliminar\": false}, {\"id\": 2, \"key\": \"usuarios\", \"nombre\": \"Usuarios\", \"ver\": false, \"crear\": false, \"actualizar\": false, \"eliminar\": false}, {\"id\": 3, \"key\": \"proveedores\", \"nombre\": \"Proveedores\", \"ver\": false, \"crear\": false, \"actualizar\": false, \"eliminar\": false}, {\"id\": 4, \"key\": \"almacenes\", \"nombre\": \"Almacenes\", \"ver\": false, \"crear\": false, \"actualizar\": false, \"eliminar\": false}, {\"id\": 5, \"key\": \"productos\", \"nombre\": \"Productos\", \"ver\": false, \"crear\": false, \"actualizar\": false, \"eliminar\": false}, {\"id\": 6, \"key\": \"categoria\", \"nombre\": \"Categoría\", \"ver\": false, \"crear\": false, \"actualizar\": false, \"eliminar\": false}, {\"id\": 7, \"key\": \"inventario\", \"nombre\": \"Inventario\", \"ver\": false, \"crear\": false, \"actualizar\": false, \"eliminar\": false}, {\"id\": 8, \"key\": \"despacho\", \"nombre\": \"Despacho\", \"ver\": false, \"crear\": false, \"actualizar\": false, \"eliminar\": false}, {\"id\": 9, \"key\": \"reportes\", \"nombre\": \"Reportes\", \"ver\": false, \"crear\": false, \"actualizar\": false, \"eliminar\": false}]'),
(3, 'Empleado', '[{\"id\": 1, \"key\": \"roles\", \"nombre\": \"Roles\", \"ver\": false, \"crear\": false, \"actualizar\": false, \"eliminar\": false}, {\"id\": 2, \"key\": \"usuarios\", \"nombre\": \"Usuarios\", \"ver\": true, \"crear\": false, \"actualizar\": false, \"eliminar\": false}, {\"id\": 3, \"key\": \"proveedores\", \"nombre\": \"Proveedores\", \"ver\": true, \"crear\": true, \"actualizar\": false, \"eliminar\": false}, {\"id\": 4, \"key\": \"almacenes\", \"nombre\": \"Almacenes\", \"ver\": true, \"crear\": false, \"actualizar\": false, \"eliminar\": false}, {\"id\": 5, \"key\": \"productos\", \"nombre\": \"Productos\", \"ver\": true, \"crear\": true, \"actualizar\": true, \"eliminar\": false}, {\"id\": 6, \"key\": \"categoria\", \"nombre\": \"Categoría\", \"ver\": true, \"crear\": false, \"actualizar\": false, \"eliminar\": false}, {\"id\": 7, \"key\": \"inventario\", \"nombre\": \"Inventario\", \"ver\": true, \"crear\": true, \"actualizar\": true, \"eliminar\": false}, {\"id\": 8, \"key\": \"despacho\", \"nombre\": \"Despacho\", \"ver\": true, \"crear\": false, \"actualizar\": false, \"eliminar\": false}, {\"id\": 9, \"key\": \"reportes\", \"nombre\": \"Reportes\", \"ver\": true, \"crear\": false, \"actualizar\": false, \"eliminar\": false}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sale_products`
--

CREATE TABLE `sale_products` (
  `id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `email`, `password`, `rol_id`) VALUES
(1, 'Jorge Garcia', 'admin@gmail.com', '123', 1),
(2, 'Juan Perez', 'client@gmail.com', '123', 3),
(3, 'Louis Sarmiento', 'virginia.susarra@gmail.com', '123', 3),
(4, 'Louis', 'slouis482@gmail.com', '123', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `warehouses`
--

CREATE TABLE `warehouses` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `code` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `warehouses`
--

INSERT INTO `warehouses` (`id`, `name`, `code`, `location`, `status`) VALUES
(1, 'Almacen Principal', 'AP001', 'Caracas', 'active'),
(2, 'Almacen Secundario', 'AS002', 'Valencia', 'active');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dispatches`
--
ALTER TABLE `dispatches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tracking_code` (`tracking_code`),
  ADD KEY `sale_id` (`sale_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `serial` (`serial`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `warehouse_id` (`warehouse_id`),
  ADD KEY `provider_id` (`provider_id`);

--
-- Indices de la tabla `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tel` (`tel`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `sale_products`
--
ALTER TABLE `sale_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_id` (`sale_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `dispatches`
--
ALTER TABLE `dispatches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sale_products`
--
ALTER TABLE `sale_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dispatches`
--
ALTER TABLE `dispatches`
  ADD CONSTRAINT `dispatches_ibfk_1` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouses` (`id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`);

--
-- Filtros para la tabla `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `sale_products`
--
ALTER TABLE `sale_products`
  ADD CONSTRAINT `sale_products_ibfk_1` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`),
  ADD CONSTRAINT `sale_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
