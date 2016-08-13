create table if not exists usuarios(
	id int unsigned auto_increment not null,
	email varchar(60) not null,
	password  varchar(60),
	unique(email),
	primary key(id)
);

create table if not exists artigos(
	id int unsigned auto_increment not null,
	title varchar(60) not null,
	content text not null,
	thumb varchar(60),
	author_id int unsigned not null,
	created_at datetime not null,
	primary key(id)
);