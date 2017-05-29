CREATE TABLE games(
	ID int NOT NULL AUTO_INCREMENT,
	player1 int,
	player2 int,
	position1 tinyint(1),
	position2 tinyint(1),
	position3 tinyint(1),
	position4 tinyint(1),
	position5 tinyint(1),
	position6 tinyint(1),
	position7 tinyint(1),
	position8 tinyint(1),
	position0 tinyint(1),
	turn tinyint(1),
	finished boolean,
	PRIMARY KEY (ID),
	CONSTRAINT FK_player1 FOREIGN KEY (player1) REFERENCES players(ID)
	ON UPDATE CASCADE
	ON DELETE RESTRICT,
	CONSTRAINT FK_player2 FOREIGN KEY (player2) REFERENCES players(ID)
	ON UPDATE CASCADE
	ON DELETE RESTRICT
);

CREATE INDEX IX_games_ID 
ON games (ID, asc);

CREATE TABLE players(
	ID int NOT NULL AUTO_INCREMENT,
	score int,
	playing tinyint(1),
	PRIMARY KEY (ID)
);