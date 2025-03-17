CREATE TABLE `users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `email` varchar(150) UNIQUE NOT NULL,
  `password` varchar(150) NOT NULL,
  `rol_id` int NOT NULL
);

CREATE TABLE `roles` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `create` int NOT NULL DEFAULT 0,
  `update` int NOT NULL DEFAULT 0,
  `delete` int NOT NULL DEFAULT 0
);

CREATE TABLE `products` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `serial` varchar(150) UNIQUE NOT NULL,
  `description` text,
  `discount` int,
  `price` decimal(10, 2) NOT NULL DEFAULT 0,
  `status` enum('available', 'sold') NOT NULL DEFAULT 'available',
  `category_id` int NOT NULL,
  `warehouse_id` int NOT NULL,
  `provider_id` int NOT NULL,
  `created_at` datetime
);

CREATE TABLE `categories` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(150) NOT NULL
);

CREATE TABLE `warehouses` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `code` varchar(50) UNIQUE NOT NULL
);

CREATE TABLE `providers` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `company` varchar(100) NOT NULL,
  `tel` varchar(20) UNIQUE NOT NULL
);

CREATE TABLE `sales` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `created_at` datetime NOT NULL
);

CREATE TABLE `sale_products` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `sale_id` int NOT NULL,
  `product_id` int NOT NULL
);

CREATE TABLE `dispatches` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `sale_id` int NOT NULL,
  `status` enum('pending', 'in_transit', 'delivered', 'canceled') NOT NULL DEFAULT 'pending',
  `tracking_code` varchar(100) UNIQUE,
  `delivery_date` datetime NOT NULL,
  `day_date_delivered` datetime NOT NULL,
  `location` varchar(255) NOT NULL
);

ALTER TABLE
  `users`
ADD
  FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);

ALTER TABLE
  `products`
ADD
  FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

ALTER TABLE
  `products`
ADD
  FOREIGN KEY (`warehouse_id`) REFERENCES `warehouses` (`id`);

ALTER TABLE
  `products`
ADD
  FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`);

ALTER TABLE
  `sales`
ADD
  FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE
  `sale_products`
ADD
  FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`);

ALTER TABLE
  `sale_products`
ADD
  FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

ALTER TABLE
  `dispatches`
ADD
  FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`);


INSERT INTO
  roles (name, `create`, `update`, `delete`)
VALUES
  ('Administrador', 1, 1, 1),
  ('Cliente', 0, 0, 0),
  ('Trabajador', 0, 0, 0);

INSERT INTO
  users (nombre, email, password, rol_id)
VALUES
  ('Jorge Garcia', 'admin@gmail.com', '123', 1),
  ('Juan Perez', 'client@gmail.com', '123', 3);