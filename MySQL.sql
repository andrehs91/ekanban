CREATE DATABASE IF NOT EXISTS `kanban`;

USE `kanban`;

CREATE TABLE IF NOT EXISTS `kanban`.`projects_situations` (
    `id`          INT NOT NULL AUTO_INCREMENT,
    `name`        VARCHAR(20) NOT NULL
) DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE IF NOT EXISTS `kanban`.`projects` (
    `id`           INT NOT NULL AUTO_INCREMENT,
    `name`         VARCHAR(60) NOT NULL,
    `description`  VARCHAR(240) NOT NULL,
    `notes`        VARCHAR(240),
    `situation_id` INT NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `name_UNIQUE` (`name` ASC) VISIBLE,
    CONSTRAINT `situation_id`
        FOREIGN KEY (`situation_id`)
        REFERENCES `kanban`.`projects_situations` (`id`)
        ON DELETE CASCADE
        ON UPDATE NO ACTION
) DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE IF NOT EXISTS `kanban`.`tasks_situations` (
    `id`          INT NOT NULL AUTO_INCREMENT,
    `name`        VARCHAR(20) NOT NULL
) DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE IF NOT EXISTS `kanban`.`tasks` (
    `id`           INT NOT NULL AUTO_INCREMENT,
    `date`         DATE NOT NULL,
    `start_time`   VARCHAR(8) NOT NULL,
    `end_time`     VARCHAR(8) NOT NULL,
    `description`  VARCHAR(240) NOT NULL,
    `notes`        VARCHAR(240),
    `situation_id` INT NOT NULL,
    `project_id`   INT NOT NULL,
    PRIMARY KEY (`id`, `start_time`),
    CONSTRAINT `situation_id`
        FOREIGN KEY (`situation_id`)
        REFERENCES `kanban`.`tasks_situations` (`id`)
        ON DELETE CASCADE
        ON UPDATE NO ACTION,
    CONSTRAINT `project_id`
        FOREIGN KEY (`project_id`)
        REFERENCES `kanban`.`projects` (`id`)
        ON DELETE CASCADE
        ON UPDATE NO ACTION,
    INDEX `project_id_idx` (`project_id` ASC) VISIBLE
) DEFAULT CHARACTER SET = utf8mb4;

CREATE VIEW `tasks_with_projectname` AS
SELECT `kanban`.`tasks`.*, `kanban`.`projects`.name AS `project_name`
FROM `kanban`.`tasks`
INNER JOIN `kanban`.`projects`
ON `kanban`.`tasks`.`project_id` = `kanban`.`projects`.`id`;
