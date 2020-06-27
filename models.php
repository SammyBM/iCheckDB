<?php 

class user {
	public $username;
	public $password;
}

class Olimpeda {
	public $id_olimpiada;
	public $nombre_olimpiada;
	public $id_ciencia;
}

class Material {
	public $id_material;
	public $nombre_material;
	public $url_material;
	public $id_olimpiada;
}

class Etapa {
	public $id_etapa;
	public $nombre_etapa;
	public $id_olimpiada;
}

class Competencia {
	public $id_competencia;
	public $nombre_competencia;
	public $fecha_competencia;
	public $nombre_organizador;
	public $lugar_competencia;
	public $id_etapa;
}

class Usuario{
	public $id_usuario;
	public $nivel_usuario;
	public $nombre_usuario;
	public $password_usuario;
}

class Inscripcion {
	public $id_usuario;
	public $id_competencia;
}

class Validacion {
	public $id_usuario;
	public $id_competencia;
	public $asistencia;	
}

class Resultado {
	public $id_usuario;
	public $id_competencia;
	public $puntaje;
	public $medalla;
}	

 ?>