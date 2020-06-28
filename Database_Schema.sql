CREATE DATABASE ICheck;
USE ICheck;

CREATE TABLE user(
    username      VARCHAR(20),
    password      VARCHAR(30),
    email         VARCHAR(320),
    name          VARCHAR(30),
    PRIMARY KEY(username)
    );

CREATE TABLE category(
    ID_category  TINYINT AUTO_INCREMENT,
    name_category   VARCHAR(30),
    PRIMARY KEY(ID_category)
    );


CREATE TABLE product(
    ID_product    VARCHAR(20),
    ID_category     TINYINT,
    description     VARCHAR(150),
    PRIMARY KEY(ID_product),
    CONSTRAINT fk_product_category FOREIGN KEY(ID_category) REFERENCES category(ID_category)
    );

CREATE TABLE favourite(
	ID_favourite      INT AUTO_INCREMENT,
    username          VARCHAR(20),
    ID_product        VARCHAR(20),
    date_favourite      DATE,
    PRIMARY KEY(ID_favourite),
    CONSTRAINT fk_favourite_user FOREIGN KEY(username) REFERENCES user(username),
    CONSTRAINT fk_favourite_product FOREIGN KEY(ID_product) REFERENCES product(ID_product)
    );

CREATE TABLE store(
    ID_store       TINYINT  AUTO_INCREMENT,
    name_store     VARCHAR(30),
    PRIMARY KEY(ID_store)
    );


CREATE TABLE cupboard(
	 ID_cupboard INT AUTO_INCREMENT,
    username    VARCHAR(20),
    ID_product  VARCHAR(20),
    quantity    TINYINT,
    PRIMARY KEY(ID_cupboard),
    CONSTRAINT fk_cupboard_user FOREIGN KEY(username) REFERENCES user(username),
    CONSTRAINT fk_cupboard_product FOREIGN KEY(ID_product) REFERENCES product(ID_product)
    );



CREATE TABLE selection(
    ID_selection INT  AUTO_INCREMENT,
    username     VARCHAR(20),
    list_name    VARCHAR(50),
    feautured    BOOLEAN,
    PRIMARY KEY(ID_selection),
    CONSTRAINT fk_selection_user FOREIGN KEY(username) REFERENCES user(username)
    );


CREATE TABLE Products_on_list(
	ID_product_on_list INT AUTO_INCREMENT,
    ID_selection       INT,
    ID_product         VARCHAR(20),
    quantity           TINYINT,
    PRIMARY KEY(ID_product_on_list),
    CONSTRAINT fk_list_product FOREIGN KEY(ID_product) REFERENCES product(ID_product),
	CONSTRAINT fk_list_selection FOREIGN KEY(ID_selection) REFERENCES selection(ID_selection)
    );


CREATE TABLE purchase(
    ID_purchase  INT  AUTO_INCREMENT,
	username     VARCHAR(20),
    ID_store     TINYINT,
    ID_product   VARCHAR(20),
	Date_purchase DATE,
	Total         FLOAT,
    PRIMARY KEY(ID_purchase),
    CONSTRAINT fk_purchase_store FOREIGN KEY(ID_store) REFERENCES store(ID_store),
	CONSTRAINT fk_purchase_user  FOREIGN KEY(username) REFERENCES user(username)
    );




 CREATE TABLE perishable_product(
    ID_perishable INT  AUTO_INCREMENT,
    ID_product    VARCHAR(20),
    username      VARCHAR(20),
    days_of_life  TINYINT,
    PRIMARY KEY(ID_perishable),
    CONSTRAINT fk_perishable_user FOREIGN KEY(username) REFERENCES user(username),
    CONSTRAINT fk_perishable_product FOREIGN KEY(ID_product) REFERENCES product(ID_product)
    );


    --------------QUERYS--------------

-------------------------VISUALIZAR--------------------------------------

    ---OBTENER TODOS LOS PRODUCTOS QUE ESTÁN EN CUPBOARD DONE---
SELECT product.description, cupboard.quantity FROM cupboard
JOIN product ON product.ID_product= cupboard.ID_product
JOIN user ON user.username= cupboard.username
WHERE cupboard.username= '{$user}';

    ---OBTENER LA INFORMACIÓN DEL USUARIO DONE ----
SELECT * FROM user
WHERE username ='{&user}';

    ---OBTENER LAS COMPRAS DEL USUARIO DONE---
SELECT store.name_store, purchase.Date_purchase,purchase.Total FROM purchase
JOIN store ON store.ID_store = purchase.ID_store
WHERE purchase.username ='{&user}';

    ---OBTENER LOS PRODUCTOS DE UNA COMPRA DONE---
SELECT product.description FROM purchase
JOIN product ON product.ID_product = purchase.ID_product
WHERE purchase.username ='{&user}' AND purchase.ID_purchase='{&purchaseID}';

    ---OBTENER LOS PRODUCTOS FAVORITOS DONE---
SELECT product.description FROM favourite
JOIN product ON product.ID_product = favourite.ID_product
WHERE favourite.username ='{&user}';

    ---OBTENER LA INFO DE LAS LISTAS FAVORITAS DONE ---
SELECT selection.list_name FROM selection
WHERE selection.username ='{&user}';

   ---OBTENER LA INFO DE LOS PRODUCTOS EN LAS LISTAS FAVORITAS DONE---
SELECT product.description  FROM product
JOIN Products_on_list ON Products_on_list.ID_product = product.ID_product
JOIN selection ON selection.ID_selection = Products_on_list.ID_selection
WHERE Products_on_list.ID_selection = '{&selection}' AND selection.username ='{&user}';


  ---OBTENER PRODUCTOS---
  SELECT description FROM product;

  ---OBTENER PRODUCTOS POR CATEGORIA---
  SELECT description FROM product
  WHERE product.ID_category='{&ID_category}';

------------------------------------------INSERTAR------------------------------------------------
   ---CREAR USUARIO---
INSERT INTO user VALUES ('{&user}','{&password}','{&email}','{&name}');

   ---AÑADIR UN PRODUCTO FAVORITO---
INSERT INTO favourite (username,ID_product,date_favourite) VALUES ('{&user}','{&productID}',curdate());

----------------------------------------UPDATE-----------------------------------------------------
