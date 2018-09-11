DROP DATABASE IF EXISTS jusaweb;
create database jusaweb;

use jusaweb;

create table tblUsuario(
id int(20) NOT NULL PRIMARY KEY auto_increment,
nombre varchar (30) NOT NULL,
usuario varchar (30) NOT NULL,
password varchar (100) NOT NULL,
email varchar (100) NOT NULL,
codigo varchar (100),
fechaRecuperacion datetime NULL
);

	CREATE TABLE tblComentario(
		idComentario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		textoComentario TEXT NOT NULL,
		nombre varchar(30) NOT NULL
	);

INSERT INTO tblUsuario(	nombre, usuario, password, email, fechaRecuperacion)VALUES('juan', '123','$2y$10$nsOTbTFXHRhaYeCZ9HqVCuaXVMl7idGjzU9hQQ26LbWm9i4YGCSAq', 'jd123@gmail.com', '');

delimiter //
CREATE procedure spRegistrar(
IN p_nombre varchar(30),
IN p_usuario varchar(30),
IN p_password varchar(100),
IN p_email varchar(100)
)

BEGIN 
	INSERT INTO tblUsuario(
	nombre, usuario, password, email
	)
	VALUES(
	p_nombre, p_usuario, p_password, p_email
	);

END 
//

DELIMITER //
	CREATE PROCEDURE sp_tblUsuarioSelectUsuario(
		IN p_nombreUsuario VARCHAR(20)
	)
	BEGIN
		SELECT 
			nombre, usuario, password, email FROM tblUsuario WHERE usuario = p_nombreUsuario;	
	END 
	//


delimiter //
create procedure sp_tblLogin(
IN p_usuario varchar(30)
)
BEGIN 
	select
 id, nombre, usuario, password, email FROM tblUsuario WHERE usuario = p_usuario;

END 
//

DELIMITER //
	CREATE PROCEDURE sp_tblComentarioInsert(
		IN p_textoComentario TEXT,
		IN p_nombre varchar(30)
	)
	BEGIN
		INSERT INTO tblComentario(textoComentario, nombre) VALUES(p_textoComentario, p_nombre);
	END
	//
    
    
    DELIMITER //
	CREATE PROCEDURE sp_tblComentarioSelect(
	)
	BEGIN
		SELECT * FROM tblComentario;
	END
	//

 DELIMITER //
	CREATE PROCEDURE sp_tblUsuarioUpdate(
		IN p_idUsuario INT,
		IN p_nombre VARCHAR(30),
        IN p_email VARCHAR(100)
	)
	BEGIN
		UPDATE tblUsuario
        SET
        nombre = p_nombre, 
        email = p_email
		WHERE id = p_idUsuario;
	END 
	//

	DELIMITER //
	CREATE PROCEDURE sp_tblUsuarioSelectUsuarioID(
		IN P_idUsuario int(11)
	)
	BEGIN 
	SELECT
		id,
		nombre,
		usuario,
		email,
		password
		FROM tblUsuario WHERE id = p_idUsuario LIMIT 1;
	END
	//
	CREATE PROCEDURE sp_tblUsuarioUpdateClave(
		IN p_idUsuario INT,
		IN p_clave VARCHAR(100)
	)
	BEGIN
		UPDATE tblUsuario
        SET
        password = p_clave
		WHERE id = p_idUsuario;
	END 
	//