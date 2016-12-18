CREATE TABLE CommandList(
	commandID integer unique,
	commandName varchar(100),
	CONSTRAINT pk_cmdid PRIMARY KEY (commandID)
);

CREATE TABLE CommandOrder(
	commandNo integer unique AUTO_INCREMENT,
	commandID integer,
	commandTime datetime,
	executed boolean DEFAULT FALSE,
	smartTempUp boolean DEFAULT TRUE,
	CONSTRAINT pk_cmdno PRIMARY KEY (commandNo),
	CONSTRAINT fk_cmdid FOREIGN KEY (commandID) REFERENCES CommandList(commandID)
);

INSERT INTO CommandList VALUES(0, "power_on");
INSERT INTO CommandList VALUES(1, "power_off");
INSERT INTO CommandList VALUES(2, "temp_up");
INSERT INTO CommandList VALUES(3, "temp_down");
INSERT INTO CommandList VALUES(4, "humi_up");
INSERT INTO CommandList VALUES(5, "humi_down");
INSERT INTO CommandList VALUES(6, "speed_up");
INSERT INTO CommandList VALUES(7, "speed_down");
INSERT INTO CommandList VALUES(8, "time_up");
INSERT INTO CommandList VALUES(9, "time_down");
INSERT INTO CommandList VALUES(10, "mode_up");
INSERT INTO CommandList VALUES(11, "mode_down");

DROP TABLE CommandOrder;
DROP TABLE CommandList;
CREATE TABLE CommandList(
	commandNo INTEGER UNIQUE AUTO_INCREMENT,
	commandID VARCHAR(100),
	executed BOOLEAN DEFAULT FALSE,
	CONSTRAINT pk_cmdno PRIMARY KEY (commandNo)
);
