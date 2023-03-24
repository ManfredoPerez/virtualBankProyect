CREATE TABLE `infocliente` (
  `idCliente` int(5) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `DPI` int(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `infocliente` (`idCliente`, `Nombre`, `Apellido`, `DPI`, `Email`, `Direccion`, `Ciudad`, `Telefono`, `password`) VALUES
(2, 'Lupita', 'Ochoa', 2147483647, 'lupeoutlook.es', '1racallelalala', 'Quetzaltenango', '54897854', '123'),
(3, 'Pablo', 'Escobar', 12345678, 'pab@gmail.com', 'San Marcos', 'Guatemala', '51980256', 'ola12');


ALTER TABLE `infocliente`
  ADD PRIMARY KEY (`idCliente`);


ALTER TABLE `infocliente`
  MODIFY `idCliente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;