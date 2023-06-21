-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 21-06-2023 a las 02:12:37
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_celulares`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celulares`
--

CREATE TABLE `celulares` (
  `id_celular` int(11) NOT NULL,
  `modelo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `marca_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `celulares`
--

INSERT INTO `celulares` (`id_celular`, `modelo`, `descripcion`, `imagen`, `marca_id`) VALUES
(1, 'Motorola Edge 30 256GB', '¿Buscás un celular con la mejor resolución de imágenes y el sistema de carga más veloz en la historia de los Smartphones? Entonces el Moto Edge 30 ultra 5G es lo que estás buscando. Estilo y calidad, siempre de la mano.', 'https://tienda.claro.com.ar/staticContent/Claro/images/catalog/productos/646x1000/70010903.webp', 1),
(2, 'Celular Samsung Galaxy A54 5G 256/8gb Graphite', 'Con un acabado premium en cristal, un módulo de cámara con un diseño elegante y colores que transmiten energía, el Galaxy A54 5G lleva inscrita su identidad Awesome en su aspecto elegante y minimalista.', 'https://www.multipoint.com.ar/Image/0/700_700-2106.jpg', 2),
(11, 'Motorola Moto G32', 'Cambiá de aplicaciones, desplazate por la Web y jugá sin inconvenientes con una velocidad de actualización increíble. Viví una experiencia de sonido envolvente que te permite sentir mejor los bajos, descubrir voces más nítidas y escuchar con mayor claridad gracias a los parlantes estéreo incorporados.', 'https://tienda.movistar.com.ar/media/catalog/product/cache/1d01ed3f1ecf95fcf479279f9ae509ad/f/r/frente_22_1.png', 1),
(12, 'Samsung Galaxy A04e 32GB', 'Ampliá tu visión con la pantalla Infinity-V de 6,5 pulgadas de Galaxy A04e y disfrutá de una vista ininterrumpida de las cosas que te gustan. Gracias a la tecnología HD+, tus contenidos cotidianos se ven nítidos y claros.', 'https://tienda.movistar.com.ar/media/catalog/product/cache/1d01ed3f1ecf95fcf479279f9ae509ad/i/m/image_4__2_1.png', 2),
(13, 'Apple iPhone 11 (128 GB) - Negro', 'Graba videos 4K y captura retratos espectaculares y paisajes increíbles con el sistema de dos cámaras. Toma grandes fotos con poca luz gracias al modo Noche. Disfruta colores reales en las fotos, videos y juegos con la pantalla Liquid Retina de 6.1 pulgadas (3). Aprovecha un rendimiento sin precedentes en los juegos, la realidad aumentada y la fotografía con el chip A13 Bionic. Haz mucho más sin necesidad de volver a cargar el teléfono gracias a su batería de larga duración (2). Y no te preocupes si se moja, el iPhone 11 tiene una resistencia al agua de hasta 30 minutos a una profundidad máxima de 2 metros (1).', 'https://http2.mlstatic.com/D_NQ_NP_656548-MLA46114829749_052021-O.webp', 3),
(14, 'Xiaomi Redmi Note 11', 'Sumérgete en un mundo maravilloso. La pantalla retroiluminada proporciona el más alto brillo, contraste, color y resolución. Disfruta del contenido con una frecuencia de actualización fluida y alta de 90 Hz. Desplácese por sus redes sociales en condiciones cómodas o experimente un juego eficiente y receptivo.', 'https://tienda.movistar.com.ar/media/catalog/product/cache/1d01ed3f1ecf95fcf479279f9ae509ad/r/e/redmi-black-frente_1.png', 5),
(15, 'Sony Xperia PRO-I XQ-BE72 5G 12/512 GB 6,5\" 4K OLE', 'Las dimensiones del Sony Xperia ZL son: 69,3 mm de ancho, 131,6 mm de alto y 9,8 mm de grosor en su perfil, mientras que su peso es de 151 g. El Sony Xperia ZL tiene un tamaño de pantalla de 5\" , con una resolución de 1920x1080. La pantalla es de tipo TFT. Tiene una densidad de píxeles de 441 ppp. Además, con la protección Shatter proof glass te aseguras resistencia frente a arañazos y golpes. En cuanto a características técnicas, el procesador del Sony Xperia ZL es un Qualcomm MDM9215M / APQ8064 de 1 núcleos y con una velocidad de reloj de 1,5 GHz. En el apartado de memoria, contamos con 2 GB de memoria RAM, y 16 GB de memoria interna o de almacenamiento. La memoria de almacenamiento se puede ampliar vía microSD.', 'https://i.ebayimg.com/images/g/lbUAAOSwAXFiTp5n/s-l1600.jpg', 6),
(16, 'CELULAR MOTOROLA E32 HAWAII PLATA 4+64 GB', 'Pantalla ultra wide  La pantalla Max Vision HD+ de 6.5\" tiene una relación de aspecto de 20:9 para que te desplaces menos y veas más. La relación pantalla-cuerpo de 87 % significa que hay más espacio en la pantalla, pero aún así podés usar el teléfono cómodamente con una sola mano.  Olvidate de esperar  El teléfono responde al instante cada vez que tocás, presionás y deslizás gracias al rápido procesador Octa-Core. Cambiá sin retrasos entre varias aplicaciones abiertas. Vas a podés hacer todo lo que querés.', 'https://bringerihogarar.vtexassets.com/arquivos/ids/160812-800-auto?v=638004068167870000&width=800&height=auto&aspect=true', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cuit` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre`, `cuit`) VALUES
(1, 'Motorola', 30711247986),
(2, 'Samsung', 30684125792),
(3, 'Apple', 30707224041),
(5, 'Xiaomi', 30715979574),
(6, 'Sony', 30679928879);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `password`) VALUES
(1, 'user@gmail.com', '$2a$12$mUY9b14/BqYAitaRx5bMYOj65/1LIQR7.G2w/Xw2kiW5G29S3mZX2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `celulares`
--
ALTER TABLE `celulares`
  ADD PRIMARY KEY (`id_celular`),
  ADD KEY `fk_marca` (`marca_id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `celulares`
--
ALTER TABLE `celulares`
  MODIFY `id_celular` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `celulares`
--
ALTER TABLE `celulares`
  ADD CONSTRAINT `fk_marca` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id_marca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
