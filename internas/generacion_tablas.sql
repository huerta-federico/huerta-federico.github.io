create database
     acdb2_02bim;

DROP TABLE IF EXISTS
    `empresa_automotriz`;
CREATE TABLE `empresa_automotriz`(
    `id` INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nombre` VARCHAR(100) NOT NULL,
    `siglas` VARCHAR(10) NOT NULL,
    `direccion` VARCHAR(100) NOT NULL,
    `nombre_gerente` VARCHAR(100) NOT NULL,
    `num_sucursales` INT(10) NOT NULL,
    `num_empleados` INT(10) NOT NULL,
    `ventas_mensuales` INT(100) NOT NULL
);

INSERT INTO `empresa_automotriz`(
    `nombre`,
    `siglas`,
    `direccion`,
    `nombre_gerente`,
    `num_sucursales`,
    `num_empleados`,
    `ventas_mensuales`
)
VALUES(
    "Asiacar",
    "AC",
    "Av. Carlos Julio Arosemena",
    "Pepe Perez",
    2,
    40,
    400000
);
INSERT INTO `empresa_automotriz`(
    `nombre`,
    `siglas`,
    `direccion`,
    `nombre_gerente`,
    `num_sucursales`,
    `num_empleados`,
    `ventas_mensuales`
)
VALUES(
    "Chevrolet Ecuador",
    "CE",
    "Guayaquil",
    "Ramiro Ramirez",
    4,
    80,
    800000
);