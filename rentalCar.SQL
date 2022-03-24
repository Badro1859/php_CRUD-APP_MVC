/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     24/03/2022 23:49:49                          */
/*==============================================================*/


drop table if exists CAR;

drop table if exists CLIENT;

drop table if exists RENT;

drop table if exists USERS;

/*==============================================================*/
/* Table: CAR                                                   */
/*==============================================================*/
create table CAR
(
   CARID                numeric(8,0) not null,
   NAME                 char(20) not null,
   TYPE                 char(20),
   PRIXDAY              numeric(8,0) not null,
   AVAILABLE            TINYINT not null,
   IMG                  longblob,
   primary key (CARID)
);

/*==============================================================*/
/* Table: CLIENT                                                */
/*==============================================================*/
create table CLIENT
(
   CLIENTID             numeric(8,0) not null,
   NAME                 char(20) not null,
   FNAME                char(20) not null,
   NATIONALID           char(40) not null,
   TEL                  char(10) not null,
   ADRESSE              char(20),
   primary key (CLIENTID)
);

/*==============================================================*/
/* Table: RENT                                                  */
/*==============================================================*/
create table RENT
(
   CLIENTID             numeric(8,0) not null,
   CARID                numeric(8,0) not null,
   USERID               numeric(8,0) not null,
   START                date not null,
   NUMDAYS              numeric(8,0) not null,
   primary key (CLIENTID, CARID, USERID, START)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USERS
(
   USERID               numeric(8,0) not null,
   NAME                 char(20) not null,
   PASS             char(20) not null,
   TEL                  char(10),
   ISADMIN              TINYINT not null,
   primary key (USERID)
);

alter table RENT add constraint FK_RENT foreign key (USERID)
      references USERS (USERID) on delete restrict on update restrict;

alter table RENT add constraint FK_RENT2 foreign key (CLIENTID)
      references CLIENT (CLIENTID) on delete restrict on update restrict;

alter table RENT add constraint FK_RENT3 foreign key (CARID)
      references CAR (CARID) on delete restrict on update restrict;