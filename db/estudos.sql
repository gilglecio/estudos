create table if not exists usuarios(
	id int unsigned auto_increment not null,
	email varchar(60) not null,
	password  varchar(60),
	unique(email),
	primary key(id)
);