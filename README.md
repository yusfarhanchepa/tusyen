THIS IS SIMPLE CRUD OF CODEIGNITOR

1. Clone

2.create database and config
	database:tusyen
	host:localhost
	username:root
	password:''
	
3. sql query
			CREATE TABLE news (
						id int(11) NOT NULL AUTO_INCREMENT,
						title varchar(128) NOT NULL,
						slug varchar(128) NOT NULL,
						text text NOT NULL,
						PRIMARY KEY (id),
						KEY slug (slug)
		);
		
		
		
		FOLLOW THIS https://www.codeigniter.com/user_guide/tutorial/news_section.html
