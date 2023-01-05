CREATE DATABASE IF NOT EXISTS traductor_colores_es_en;
USE traductor_colores_es_en;
CREATE TABLE IF NOT EXISTS tabla_colores(
    `id_color` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `color_es` VARCHAR(16) NOT NULL,
    `color_en` VARCHAR(16) NOT NULL
) ENGINE = InnoDB;