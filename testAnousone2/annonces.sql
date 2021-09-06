#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: categories
#------------------------------------------------------------

CREATE TABLE categories(
        id_categories   Int  Auto_increment  NOT NULL ,
        name_categories Varchar (50) NOT NULL
	,CONSTRAINT categories_PK PRIMARY KEY (id_categories)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ads
#------------------------------------------------------------

CREATE TABLE ads(
        ads_id        Int  Auto_increment  NOT NULL ,
        ads_title     Varchar (50) NOT NULL ,
        ads_price     Int NOT NULL ,
        ads_desc      Longtext NOT NULL ,
        ads_email     Varchar (50) NOT NULL ,
        id_categories Int NOT NULL
	,CONSTRAINT ads_PK PRIMARY KEY (ads_id)

	,CONSTRAINT ads_categories_FK FOREIGN KEY (id_categories) REFERENCES categories(id_categories)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: images
#------------------------------------------------------------

CREATE TABLE images(
        images_id  Int  Auto_increment  NOT NULL ,
        images_src Varchar (50) NOT NULL ,
        ads_id     Int NOT NULL
	,CONSTRAINT images_PK PRIMARY KEY (images_id)

	,CONSTRAINT images_ads_FK FOREIGN KEY (ads_id) REFERENCES ads(ads_id)
)ENGINE=InnoDB;

