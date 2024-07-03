use KrzysiuApp;

CREATE TABLE guests(
	id_guests int not null,
	username varchar(45) not null,
	created_at timestamp DEFAULT CURRENT_TIMESTAMP,
	password varchar(256) not null,
	IP varchar(45),
	PRIMARY KEY (id_guests)
);

CREATE TABLE posts(
	id_posts int not null AUTO_INCREMENT,
	title varchar(45),
	body MEDIUMTEXT,
	id_guest int not null,
	created_at timestamp DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id_posts),
	CONSTRAINT FK_posts_guest_id FOREIGN KEY (id_guest) REFERENCES guests(id_guests)
);

CREATE TABLE visitors(
	id_visitors int not null AUTO_INCREMENT,
	visited timestamp DEFAULT CURRENT_TIMESTAMP,
	ip varchar(45),
	PRIMARY KEY (id_visitors)
);
