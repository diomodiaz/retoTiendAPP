
create table usuario (
  id_usuario int (11) not null,
  cedula int (15) not null,
  nombre varchar(50) not null,
  apellido varchar(50) not null,
  telefono varchar(15) not null,
  correo varchar(40) not null,
  user varchar(20) not null,
  pass varchar(20) not null,
  primary key (id_usuario)
);

create table posteo (
  id_posteo int (11) not null,
  titulo varchar (40) not null,
  descripcion varchar (70) not null,
  archivo varchar(30) not null,
  id_usuario int(11) not null,
  primary key (id_posteo),
  index (id_usuario),
  foreign key (id_usuario) references usuario (id_usuario)
);

create table comentario (
    id_comentario int (11) not null,
    comentario varchar (80) not null,
    id_usuario int(11) not null,
    id_posteo int(11) not null,
    primary key (id_comentario),
    index (id_usuario),
    foreign key (id_usuario) references usuario (id_usuario),
    index (id_posteo),
    foreign key (id_posteo) references posteo (id_posteo)
);

create table megusta (
  id_megusta int(11) not null,
  megusta varchar(20) not null,
  id_usuario int(11) not null,
  id_posteo int(11) not null,
  primary key (id_megusta),
  index (id_usuario),
  foreign key (id_usuario) references usuario (id_usuario),
  index (id_posteo),
  foreign key (id_posteo) references posteo (id_posteo)
);