CREATE TABLE  `user` (
    `id_user` INT PRIMARY KEY AUTO_INCREMENT,
    `nome` VARCHAR(30),
    `email` VARCHAR(500),
    `senha` VARCHAR(50),
    `data_nascimento` DATETIME,
    `data_criacao` DATETIME,
    `data_alteracao` DATETIME,
    `username` VARCHAR(150)
);
