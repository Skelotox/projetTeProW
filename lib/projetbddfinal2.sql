CREATE TABLE `groupe` (
	`id_groupe` int DEFAULT NULL AUTO_INCREMENT,
	`libelle` varchar (20) DEFAULT NULL,
	PRIMARY KEY (`id_groupe`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `etudiant` (
  `id_etudiant` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `id_groupe` int DEFAULT NOT NULL,
  PRIMARY KEY (`id_etudiant`),
  CONSTRAINT `fk_id_groupe_etudiant`
		FOREIGN KEY(`id_groupe`)
		REFERENCES `groupe`(`id_groupe`)
		ON DELETE CASCADE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `entreprise` (
	`id_entreprise` int DEFAULT NULL AUTO_INCREMENT,
	`nom` varchar(20) DEFAULT NULL,
	`coordonnees` varchar(250) DEFAULT NULL,
	`secteur_activite` varchar(250) DEFAULT NULL,
	PRIMARY KEY (`id_entreprise`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `annonce` (
	`id_annonce` int DEFAULT NULL AUTO_INCREMENT,
	`sujet` varchar(20) DEFAULT NULL,
	`responsable` varchar(20) DEFAULT NULL,
	`id_entreprise` int DEFAULT NOT NULL,
	PRIMARY KEY (`id_annonce`),
	CONSTRAINT `fk_id_entreprise_annonce`
		FOREIGN KEY(`id_entreprise`)
		REFERENCES `entreprise`(`id_entreprise`)
		ON DELETE CASCADE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `enseignant` (
	`id_enseignant` int DEFAULT NULL AUTO_INCREMENT,
	`nom` varchar (20) DEFAULT NULL,
	`prenom` varchar (20) DEFAULT NULL,
	`login` varchar (20) DEFAULT NULL,
	`email` varchar (250) DEFAULT NULL,
	`password` varchar (20) DEFAULT NULL,
	`resp_stage` boolean DEFAULT 0,
	PRIMARY KEY (`id_enseignant`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


CREATE TABLE `soutenance` (
	`id_soutenance` int DEFAULT NULL AUTO_INCREMENT,
	`date_soutenance` datetime DEFAULT NULL,
	`salle` varchar (20) DEFAULT NULL,
	`note` int DEFAULT NULL,
	`tuteur_entreprise` boolean DEFAULT NULL,
	`co_souteneur` int DEFAULT NOT NULL,
	`id_etudiant` int DEFAULT NOT NULL,
	PRIMARY KEY (`id_soutenance`),
	CONSTRAINT `fk_id_etudiant_soutenance`
		FOREIGN KEY(`id_etudiant`)
		REFERENCES `etudiant`(`id_etudiant`)
		ON DELETE CASCADE,
	CONSTRAINT `fk_co_souteneur_soutenance`
		FOREIGN KEY(`co_souteneur`)
		REFERENCES `enseignant`(`id_enseignant`)
		ON DELETE CASCADE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `affecte` (
	`id_etudiant` int DEFAULT NOT NULL,
	`enseignant_tuteur` int DEFAULT NOT NULL,
	PRIMARY KEY (`id_etudiant`,`enseignant_tuteur`),
		CONSTRAINT `fk_id_etudiant_affecte`
		FOREIGN KEY(`id_etudiant`)
		REFERENCES `etudiant`(`id_etudiant`)
		ON DELETE CASCADE,
	CONSTRAINT `fk_enseignant_tuteur_affecte`
		FOREIGN KEY(`enseignant_tuteur`)
		REFERENCES `enseignant`(`id_enseignant`)
		ON DELETE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;
	
	
	
	
	
	

