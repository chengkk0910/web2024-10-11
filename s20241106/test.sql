CREATE TABLE `db`.`teachers` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(10) NOT NULL,
    `mobile` VARCHAR(10) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `db`.`members` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(10) NOT NULL,
    `mobile` VARCHAR(10) NOT NULL,
    `mobile` VARCHAR(10) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO
    `students` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'amy', '0911-111-111');

INSERT INTO
    `students` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'bob', '0922-123-456');

INSERT INTO
    `students` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'cat', '0933-333-333');

INSERT INTO
    `students` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'egg', '0955-555-555');

UPDATE
    `students`
SET
    `id` = '1'
WHERE
    `students`.`id` = 0;