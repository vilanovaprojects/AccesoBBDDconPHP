
CREATE USER 'EXES' IDENTIFIED BY 'EXES';

GRANT ALL PRIVILEGES ON *.* TO 'EXES';

CREATE SCHEMA EXES_BBDD;

CREATE TABLE EXES_BBDD.Datos_Cliente (
  `id` INT NOT NULL AUTO_INCREMENT,
  `NOMBRE` VARCHAR(45) NULL,
  `NIF` VARCHAR(15) NOT NULL,
  `DIRECCION` VARCHAR(45) NULL,
  `CP` VARCHAR(15) NULL,
  `FECHA_ALTA` DATE NULL,
  PRIMARY KEY (`id`));
  
INSERT INTO EXES_BBDD.Datos_Cliente (NOMBRE, NIF, DIRECCION, CP, FECHA_ALTA)
VALUES 
  ('Juan Pérez', '12345678A', 'Calle 1', '28001', '2022-01-01'),
  ('María García', '23456789B', 'Calle 2', '28002', '2022-02-02'),
  ('Pedro Martínez', '34567890C', 'Calle 3', '28003', '2022-03-03'),
  ('Ana Rodríguez', '45678901D', 'Calle 4', '28004', '2022-04-04'),
  ('José López', '56789012E', 'Calle 5', '28005', '2022-05-05'),
  ('Laura Sánchez', '67890123F', 'Calle 6', '28006', '2022-06-06'),
  ('Pablo Moreno', '78901234G', 'Calle 7', '28007', '2022-07-07'),
  ('Lucía Fernández', '89012345H', 'Calle 8', '28008', '2022-08-08'),
  ('David García', '90123456I', 'Calle 9', '28009', '2022-09-09');
  
  
  
  
  
