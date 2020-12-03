CREATE TABLE PRODUCTO(
           ID_PRODUCTO integer PRIMARY KEY AUTOINCREMENT,
           PRODUCTO VARCHAR(100) NOT NULL,
           PRECIO DECIMAL(11,2) NOT NULL,
           EXISTENCIA INTEGER NOT NULL
);

INSERT INTO PRODUCTO (PRODUCTO,PRECIO,EXISTENCIA) VALUES ('XBOX ONE X','11999','10');
INSERT INTO PRODUCTO (PRODUCTO,PRECIO,EXISTENCIA) VALUES ('PLAY 5','11999','10');
INSERT INTO PRODUCTO (PRODUCTO,PRECIO,EXISTENCIA) VALUES ('XBOX ONE S','6999','10');
INSERT INTO PRODUCTO (PRODUCTO,PRECIO,EXISTENCIA) VALUES ('NITENDO','4999','10');
INSERT INTO PRODUCTO (PRODUCTO,PRECIO,EXISTENCIA) VALUES ('XBOX 360','999','10');
INSERT INTO PRODUCTO (PRODUCTO,PRECIO,EXISTENCIA) VALUES ('CONTROL XBOX ONE','1499','10');
INSERT INTO PRODUCTO (PRODUCTO,PRECIO,EXISTENCIA) VALUES ('DISCO DURO 1TB','2999','10');
INSERT INTO PRODUCTO (PRODUCTO,PRECIO,EXISTENCIA) VALUES ('XBOX ONE','3999','10');

CREATE TABLE TBLTICKET(
PKTICKET integer PRIMARY KEY AUTOINCREMENT,
FECHA VARCHAR(100),
HORA_VENTA VARCHAR(100),
CANTIDAD_PRODUCTO INTEGER,
KPRODUCTO INTEGER,
TOTAL_PRODUCTO INTEGER,
ESTADO_COMPRA CHAR(1),
FOREIGN KEY (KPRODUCTO) REFERENCES PRODUCTO (ID_PRODUCTO)
);
