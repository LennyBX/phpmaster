CREATE TABLE Note(
     id_note INT,
     remarque VARCHAR(400),
     dat_note DATE,
     note_oral DECIMAL(15,2),
     note_dossier DECIMAL(15,2),
     note_dossier_fin DECIMAL(15,2),
     note_oral_fin DECIMAL(15,2),
     note_entre DECIMAL(15,2),
     PRIMARY KEY(id_note)
)ENGINE=InnoDB;

CREATE TABLE Administrateur(
   id_admin INT,
   log_admin VARCHAR(50),
   mdp_admin VARCHAR(50),
   PRIMARY KEY(id_admin)
)ENGINE=InnoDB;

CREATE TABLE Entreprise(
   id_entre INT,
   lib_entre VARCHAR(50),
   nom_mds VARCHAR(50),
   prenom_mds VARCHAR(50),
   cp_entre INT,
   ville_entre VARCHAR(50),
   rue_entre VARCHAR(50),
   numero_rue_entre INT,
   tel_mds INT,
   mail_mds VARCHAR(50),
   PRIMARY KEY(id_entre)
)ENGINE=InnoDB;

CREATE TABLE Tuteur(
   id_tuteur INT,
   nom_tut VARCHAR(50),
   prenom_tut VARCHAR(50),
   tel_tut VARCHAR(50),
   log_tut VARCHAR(50),
   mdp_tut VARCHAR(50),
   id_note INT NOT NULL,
   PRIMARY KEY(id_tuteur),
   FOREIGN KEY(id_note) REFERENCES Note(id_note)
)ENGINE=InnoDB;

CREATE TABLE Etudiant(
     id_etu VARCHAR(50),
     prenom_etu VARCHAR(50),
     nom_etu VARCHAR(50),
     classe VARCHAR(50),
     specialite VARCHAR(50),
     log_etu VARCHAR(50),
     mdp_etu VARCHAR(250),
     cp_etu INT,
     rue_etu VARCHAR(50),
     ville_etu VARCHAR(50),
     numero_rue_etu VARCHAR(50),
     mail_etu INT,
     tel_etu INT,
     id_entre INT,
     id_note INT,
     id_tuteur INT,
     PRIMARY KEY(id_etu),
     FOREIGN KEY(id_entre) REFERENCES Entreprise(id_entre),
     FOREIGN KEY(id_note) REFERENCES Note(id_note),
     FOREIGN KEY(id_tuteur) REFERENCES Tuteur(id_tuteur)
)ENGINE=InnoDB;