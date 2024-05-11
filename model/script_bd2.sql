-- MySQL Script generated by MySQL Workbench
-- Fri Jun 25 09:06:59 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema db_centro
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_centro
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_centro` DEFAULT CHARACTER SET utf8 ;
USE `db_centro` ;

-- -----------------------------------------------------
-- Table `db_centro`.`permissao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_centro`.`permissao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `db_centro`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_centro`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome_completo` VARCHAR(45) NULL,
  `nome_user` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `cd` TIMESTAMP NULL,
  `ud` TIMESTAMP NULL,
  `idpermissao` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuario_permissao_idx` (`idpermissao` ASC),
  CONSTRAINT `fk_usuario_permissao`
    FOREIGN KEY (`idpermissao`)
    REFERENCES `db_centro`.`permissao` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_centro`.`formando`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_centro`.`formando` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `num_bi` VARCHAR(45) NULL,
  `code` VARCHAR(45) NULL,
  `data_nasc` DATE NULL,
  `endereco` VARCHAR(100) NULL,
  `telefone` VARCHAR(45) NULL,
  `email` VARCHAR(100) NULL,
  `genero` VARCHAR(45) NULL,
  `cd` TIMESTAMP NULL,
  `ud` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_centro`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_centro`.`categoria` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_centro`.`curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_centro`.`curso` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  `idcategoria` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_curso_categoria1_idx` (`idcategoria` ASC),
  CONSTRAINT `fk_curso_categoria1`
    FOREIGN KEY (`idcategoria`)
    REFERENCES `db_centro`.`categoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_centro`.`ciclo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_centro`.`ciclo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  `data_inicio` DATE NULL,
  `data_fim` DATE NULL,
  `code` VARCHAR(45) NULL,
  `estado` VARCHAR(20) NULL,
  `cd` TIMESTAMP NULL,
  `ud` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_centro`.`horario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_centro`.`horario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_centro`.`ciclo_curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_centro`.`ciclo_curso` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `v_inscricao` DECIMAL(9,2) NULL,
  `v_curso` DECIMAL(9,2) NULL,
  `v_mensal` DECIMAL(9,2) NULL,
  `duracao` INT NULL,
  `v_certificado` DECIMAL(9,2) NULL,
  `idciclo` INT NOT NULL,
  `idcurso` INT NOT NULL,
  `cd` TIMESTAMP NULL,
  `ud` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_ciclo_curso_ciclo1_idx` (`idciclo` ASC),
  INDEX `fk_ciclo_curso_curso1_idx` (`idcurso` ASC),
  CONSTRAINT `fk_ciclo_curso_ciclo1`
    FOREIGN KEY (`idciclo`)
    REFERENCES `db_centro`.`ciclo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ciclo_curso_curso1`
    FOREIGN KEY (`idcurso`)
    REFERENCES `db_centro`.`curso` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_centro`.`turma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_centro`.`turma` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `code` VARCHAR(45) NULL,
  `descricao` VARCHAR(45) NULL,
  `idhorario` INT NOT NULL,
  `idciclo_curso` INT NOT NULL,
  `cd` TIMESTAMP NULL,
  `ud` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_turma_horario1_idx` (`idhorario` ASC),
  INDEX `fk_turma_ciclo_curso1_idx` (`idciclo_curso` ASC),
  CONSTRAINT `fk_turma_horario1`
    FOREIGN KEY (`idhorario`)
    REFERENCES `db_centro`.`horario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_turma_ciclo_curso1`
    FOREIGN KEY (`idciclo_curso`)
    REFERENCES `db_centro`.`ciclo_curso` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_centro`.`frequencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_centro`.`frequencia` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  `idformando` INT NOT NULL,
  `cd` TIMESTAMP NULL,
  `ud` TIMESTAMP NULL,
  `idturma` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_frequencia_formando1_idx` (`idformando` ASC),
  INDEX `fk_frequencia_turma1_idx` (`idturma` ASC),
  CONSTRAINT `fk_frequencia_formando1`
    FOREIGN KEY (`idformando`)
    REFERENCES `db_centro`.`formando` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_frequencia_turma1`
    FOREIGN KEY (`idturma`)
    REFERENCES `db_centro`.`turma` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_centro`.`pagamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_centro`.`pagamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cd` TIMESTAMP NULL,
  `ud` TIMESTAMP NULL,
  `valor` DECIMAL(9,2) NULL,
  `forma_pag` VARCHAR(45) NULL,
  `descricao` VARCHAR(45) NULL,
  `idformando` INT NOT NULL,
  `idusuario` INT NOT NULL,
  `idciclo_curso` INT NOT NULL,
  `code` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pagamento_formando1_idx` (`idformando` ASC),
  INDEX `fk_pagamento_usuario1_idx` (`idusuario` ASC),
  INDEX `fk_pagamento_ciclo_curso1_idx` (`idciclo_curso` ASC),
  CONSTRAINT `fk_pagamento_formando1`
    FOREIGN KEY (`idformando`)
    REFERENCES `db_centro`.`formando` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pagamento_usuario1`
    FOREIGN KEY (`idusuario`)
    REFERENCES `db_centro`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pagamento_ciclo_curso1`
    FOREIGN KEY (`idciclo_curso`)
    REFERENCES `db_centro`.`ciclo_curso` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;