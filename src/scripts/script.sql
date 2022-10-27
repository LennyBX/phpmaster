CREATE TABLE Note(
                     ID_NOT INT,
                     REM_NOT VARCHAR(400),
                     DAT_NOT DATE,
                     NOT_ORA_NOT DECIMAL(15,2),
                     NOT_DOS_NOT DECIMAL(15,2),
                     NOT_DOS_FIN_NOT DECIMAL(15,2),
                     NOT_ORA_FIN_NOT DECIMAL(15,2),
                     NOT_ENT_NOT DECIMAL(15,2),
                     PRIMARY KEY(ID_NOT)
)ENGINE=InnoDB;

CREATE TABLE Admin(
                      ID_ADM INT,
                      LOG_ADM VARCHAR(50),
                      MDP_ADM VARCHAR(250),
                      PRIMARY KEY(ID_ADM)
)ENGINE=InnoDB;

CREATE TABLE Entreprise(
                           ID_ENT INT,
                           LIB_ENT VARCHAR(100),
                           NOM_MDS_ENT VARCHAR(50),
                           PRE_MDS_ENT VARCHAR(50),
                           CP_ENT INT,
                           VIL_ENT VARCHAR(50),
                           RUE_ENT VARCHAR(50),
                           NUM_RUE_ENT INT,
                           TEL_MDS_ENT INT,
                           MAI_MDS_ENT VARCHAR(50),
                           PRIMARY KEY(ID_ENT)
)ENGINE=InnoDB;

CREATE TABLE Tuteur(
                       ID_TUT INT,
                       NOM_TUT VARCHAR(50),
                       PRE_TUT VARCHAR(50),
                       TEL_TUT VARCHAR(50),
                       LOG_TUT VARCHAR(50),
                       MDP_TUT VARCHAR(250),
                       ID_NOT_TUT INT NOT NULL,
                       PRIMARY KEY(ID_TUT),
                       FOREIGN KEY(ID_NOT_TUT) REFERENCES Note(ID_NOT)
)ENGINE=InnoDB;

CREATE TABLE Etudiant(
                         ID_ETU VARCHAR(50),
                         PRE_ETU VARCHAR(50),
                         NOM_ETU VARCHAR(50),
                         CLA_ETU VARCHAR(50),
                         SPE_ETU VARCHAR(50),
                         LOG_ETU VARCHAR(50),
                         MDP_ETU VARCHAR(250),
                         CP_ETU INT,
                         RUE_ETU VARCHAR(50),
                         VIL_ETU VARCHAR(50),
                         NUM_RUE_ETU VARCHAR(50),
                         MAI_ETU INT,
                         TEL_ETU INT,
                         ID_ENT_ETU INT,
                         ID_NOT_ETU INT,
                         ID_TUT_ETU INT,
                         PRIMARY KEY(ID_ETU),
                         FOREIGN KEY(ID_ENT_ETU) REFERENCES Entreprise(ID_ENT),
                         FOREIGN KEY(ID_NOT_ETU) REFERENCES Note(ID_NOT),
                         FOREIGN KEY(ID_TUT_ETU) REFERENCES Tuteur(ID_TUT)
)ENGINE=InnoDB;
