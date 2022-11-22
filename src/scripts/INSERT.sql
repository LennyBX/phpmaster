


INSERT INTO note1(REM_NOT_BIL_1,DAT_BIL_1,NOT_ORA_NOT,NOT_DOS_NOT,NOT_ENT_NOT)
values ('Nous avons un evele qui travail serieusement...','2022-01-01',20,14,13);

INSERT INTO note1(REM_NOT_BIL_1,DAT_BIL_1,NOT_ORA_NOT,NOT_DOS_NOT,NOT_ENT_NOT)
values ('Nous avons un evele qui ne travail pas serieusement dommage ..','2021-01-01',0,4,3);

INSERT INTO note2(REM_NOT_BIL_2,DAT_NOT_BIL_2,NOT_DOS_BIL_2,NOT_ENT_NOT_BIL_2,NOT_ORA_BIL_2)
values ('Nous avons un evele qui travail pas serieusement Bilan 2 bien ..','2021-01-01',14,13,18);

INSERT INTO note2(REM_NOT_BIL_2,DAT_NOT_BIL_2,NOT_DOS_BIL_2,NOT_ENT_NOT_BIL_2,NOT_ORA_BIL_2)
values ('Nous avons un evele qui ne travail pas serieusement dommage bilan 2 inssufisant..','2023-05-07',6,4.5,2.5);


INSERT INTO admin(ID_ADM,LOG_ADM ,MDP_ADM) values (1,'Admin','Adminpassword');
insert into admin(ID_ADM,LOG_ADM ,MDP_ADM) values (2,'Admin2','Adminpassword2');


insert into Entreprise(ID_ENT,LIB_ENT ,NOM_MDS_ENT ,PRE_MDS_ENT ,CP_ENT ,VIL_ENT ,RUE_ENT,NUM_RUE_ENT,TEL_MDS_ENT,MAI_MDS_ENT) values (1,'ORT','Dark','Vador',69008,'Lyon','Avenue Marius',45,0606060606,'mail@gmail.com');
insert into Entreprise (ID_ENT,LIB_ENT ,NOM_MDS_ENT ,PRE_MDS_ENT ,CP_ENT ,VIL_ENT ,RUE_ENT,NUM_RUE_ENT,TEL_MDS_ENT,MAI_MDS_ENT) values (2,'EDF','Evans','Mark',69006,'Lyon','Avenue Bellecour',4,0606060606,'mailMarksEvanseddf@gmail.com');

insert into Tuteur(ID_TUT ,NOM_TUT ,PRE_TUT ,TEL_TUT ,LOG_TUT ,MDP_TUT,ID_NOT_TUT,ID_NOT_TUT_BIL_2)values (1,'Goudet','Magali',0606060606,'m.goudet','toto',1,1);
insert into Tuteur(ID_TUT ,NOM_TUT ,PRE_TUT ,TEL_TUT ,LOG_TUT ,MDP_TUT,ID_NOT_TUT,ID_NOT_TUT_BIL_2)values (2,'Reynar','Christoph',0606060606,'c.reynar','password123',2,2);


insert into Etudiant(ID_ETU ,PRE_ETU ,NOM_ETU ,CLA_ETU,SPE_ETU ,LOG_ETU ,MDP_ETU ,CP_ETU,RUE_ETU ,VIL_ETU ,NUM_RUE_ETU ,MAI_ETU ,TEL_ETU,ID_ENT_ETU ,ID_NOT_ETU,ID_TUT_ETU,ID_NOT_ETU_BIL_2) values(1,'Alex','Blaze','3OLEN','Dev','a.etu','password',69000,'rue capitaine','Lyon',23,'mail2.etu@gmail.com',0606060606,1,1,1,2);


insert into Etudiant(ID_ETU ,PRE_ETU ,NOM_ETU ,CLA_ETU ,SPE_ETU ,LOG_ETU ,MDP_ETU ,CP_ETU ,RUE_ETU ,VIL_ETU ,NUM_RUE_ETU ,MAI_ETU ,TEL_ETU,ID_ENT_ETU ,ID_NOT_ETU,ID_TUT_ETU,ID_NOT_ETU_BIL_2) values(
                                                                                                                                                                                                         2,'Xavier','Géne','4OLEN','infra','x.etu','password3',69003,'rue professeur roux','Lyon',3,'mailalex.etu@gmail.com',0606060606,2,2,1,1);