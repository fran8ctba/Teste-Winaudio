CREATE DATABASE recrutamento DEFAULT CHARACTER SET utf8;
USE recrutamento;

CREATE TABLE anamnese (
    id            INT(11) NOT NULL AUTO_INCREMENT,  
    descricao          VARCHAR(255) NOT NULL,
    resposta INT(11) NOT NULL,
PRIMARY KEY (id));

INSERT INTO `anamnese`(`descricao`, `resposta`) VALUES ('emagrecimento?',0);
INSERT INTO `anamnese`(`descricao`, `resposta`) VALUES ('astenia?',1);
INSERT INTO `anamnese`(`descricao`, `resposta`) VALUES ('anorexia?',0);
INSERT INTO `anamnese`(`descricao`, `resposta`) VALUES ('mialgias?',1);
INSERT INTO `anamnese`(`descricao`, `resposta`) VALUES ('queda de cabelo?',0);
INSERT INTO `anamnese`(`descricao`, `resposta`) VALUES ('dor, tumorações em couro cabeludo?',1);
INSERT INTO `anamnese`(`descricao`, `resposta`) VALUES ('diminuição da acuidade visual?',0);
INSERT INTO `anamnese`(`descricao`, `resposta`) VALUES ('amaurose?',1);
INSERT INTO `anamnese`(`descricao`, `resposta`) VALUES ('nistagmo?',0);
INSERT INTO `anamnese`(`descricao`, `resposta`) VALUES ('zumbido?',1);
INSERT INTO `anamnese`(`descricao`, `resposta`) VALUES ('anacusia?',0);
INSERT INTO `anamnese`(`descricao`, `resposta`) VALUES ('dor?',1);
