
-- Base de datos: `asistencia`
-- ----------------------------------
-- Estructura de tabla para la tabla `alumnos`
CREATE TABLE IF NOT EXISTS `alumnos` (
`codigomatricula` varchar(22) NOT NULL,
`nombre` varchar(22) NOT NULL,
`apellidos` varchar(22) NOT NULL,
`telefono` varchar(22) NOT NULL,
`dni` varchar(9) NOT NULL,
PRIMARY KEY (`codigomatricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
-- Estructura de tabla para la tabla `falta`
CREATE TABLE IF NOT EXISTS `falta` (
`codigofalta` varchar(22) NOT NULL,
`fecha` varchar(22) NOT NULL,
`alumno` varchar(22) NOT NULL,
`codigomateria` varchar(22) NOT NULL,
PRIMARY KEY (`codigofalta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
-- Estructura de tabla para la tabla `materias`
CREATE TABLE IF NOT EXISTS `materias` (
`codigomateria` varchar(22) NOT NULL,
`asignatura` varchar(22) NOT NULL,
`curso` varchar(22) NOT NULL,
`profesor` varchar(22) NOT NULL,
PRIMARY KEY (`codigomateria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
-- Estructura de tabla para la tabla `profesores`
CREATE TABLE IF NOT EXISTS `profesores` (
`dni` varchar(22) NOT NULL,
`nombre` varchar(22) NOT NULL,
`apellidos` varchar(22) NOT NULL,
`telefono` varchar(22) NOT NULL,
PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
