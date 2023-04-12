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


CREATE TABLE usuarios (    
    id INT(11) NOT NULL,
    numero_cuenta INT(15) NOT NULL,    
    nombre_completo VARCHAR(255) NOT NULL,
    correo_electronico VARCHAR(255) NOT NULL,    
    saldo DECIMAL(10,2) NOT NULL DEFAULT '0.00',
    PRIMARY KEY (numero_cuenta)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    
CREATE TABLE transferencias (
    id INT(11) NOT NULL AUTO_INCREMENT,    
    remitente_id INT(15) NOT NULL,
    destinatario_id INT(15) NOT NULL,    
    cantidad DECIMAL(10,2) NOT NULL DEFAULT '0.00',
    fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,    
    PRIMARY KEY (id),
    FOREIGN KEY (remitente_id) REFERENCES usuarios(numero_cuenta),    
    FOREIGN KEY (destinatario_id) REFERENCES usuarios(numero_cuenta)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;