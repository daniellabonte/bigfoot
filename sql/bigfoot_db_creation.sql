--Creates BIGfoot database
--File      bigfoot_db_create
--Author    Daniel Labonté
--Date      2017-03-11

DROP TABLE IF EXISTS tblProducts;
DROP TABLE IF EXISTS tblColours;
DROP TABLE IF EXISTS tblCategories;


CREATE TABLE tblProducts(
	itemID          INTEGER      PRIMARY KEY, 
	itemName        VARCHAR(48), 
	itemPrice       NUMERIC      NOT NULL, 
	itemDescription VARCHAR(500)          DEFAULT 'No description available.', 
	stockAmount     integer      NOT NULL DEFAULT 0, 
	itemImage       VARCHAR(24)  NOT NULL DEFAULT 'default-product-image.jpg', 
	colourID        VARCHAR(3), 
	categoryID      VARCHAR(3)
);

CREATE TABLE tblColours(
	value VARCHAR(3) PRIMARY KEY,
	property VARCHAR(24) NOT NULL
);

CREATE TABLE tblCategories(
	value VARCHAR(3) PRIMARY KEY,
	property VARCHAR(24) NOT NULL
);



INSERT INTO tblColours
	(value, property)
VALUES
	('red', 'Red'),
	('blu', 'Blue'),
	('whi', 'White'),
	('gre', 'Grey'),
	('bla', 'Black'),
	('pat', 'Pattern');



--DUMMY DATA
INSERT INTO tblCategories
	(value, property)
VALUES
	('mal', 'Male'),
	('fem', 'Female'),
	('chi', 'Children');

INSERT INTO tblProducts(
	itemID,
	itemName,
	itemPrice,
	itemDescription,
	stockAmount,
	itemImage,
	colourID,
	categoryID
)
VALUES(
	100000,
	'Blue Socks',
	14.99,
	'These blue socks will make your friends love you. They are made of high quality polyester and lovingly crafted by a child in china.',
	500,
	'100000.jpg',
	'blu',
	NULL
),(
	100001,
	'White Socks',
	17.99,
	'These white socks are a bit dangerous. Wear them outside for a single step, and the bottom of the sock will turn brown, so use with caution.',
	100,
	'100001.jpg',
	'whi',
	NULL
),(
	100002,
	'Black Socks',
	24.95,
	'Black socks, they never get dirty, the longer you wear them, the blacker they get, Sometimes I think I should wash them, but something inside me says: no, not yet, not yet...',
	1300,
	'100002.jpg',
	'bla',
	NULL
),(
	100003,
	'Grey Socks',
	34.95,
	'Grey socks, they never get dirty, the longer you wea... Well, maybe thats not true.',
	493,
	'100003.jpg',
	'gre',
	NULL
),(
	100004,
	'Red Socks',
	5.99,
	'Make a fashion statement with these bad boys. All your friends will be jealous of you, so be careful.',
	14,
	'100004.jpg',
	'red',
	'fem'
),(
	100005,
	'Striped Foot Coverers',
	84.69,
	'Striped with red and white, these gorgeous limited edition foot things will make anyone go nuts.',
	3,
	'100005.jpg',
	'pat',
	'mal'
),(
	100006,
	'Sox for Fun',
	1.99,
	'You know what, Im not sure why were bothering with these ugly pieces of crap. Kids love them I guess.',
	0,
	'100006.jpg',
	'pat',
	'chi'
);