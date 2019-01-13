DROP DATABASE DatabaseTrangSucCuoi;
CREATE DATABASE DatabaseTrangSucCuoi CHARACTER SET utf8 COLLATE utf8_general_ci;
USE databasetrangsuccuoi;

INSERT INTO products(product_name, cost_price, price, quantity, type_pro, pic, comments) VALUE
	 ('Đôi nhẫn vàng 18K 87473',  7320000, 10110000, 52,  'Nhẫn Vàng', 'Image/Vang/pic1.png',     	NULL),
	 ('Nhẫn vàng 24K 10945',      8970000, 12840000, 18,  'Nhẫn vàng', 'Image/Vang/pic2.png',   	NULL),
	 ('Nhẫn vàng 18K 80443',      6520000,  8790000, 70,  'Nhẫn vàng', 'Image/Vang/pic3.png',     	NULL),
	 ('Nhẫn vàng 14K 84904',      6320000,  7850000, 21,  'Nhẫn vàng', 'Image/Vang/pic4.png',   	NULL),
	 ('Nhẫn vàng 24K 44893',      9240000, 15270000, 15,  'Nhẫn vàng', 'Image/Vang/pic5.png',   	NULL),
	 ('nhẫn vàng 18K 84932',      5450000,  9570000,  8,  'Nhẫn vàng', 'Image/Vang/pic6.png',   	NULL),
	 ('Đôi nhẫn vàng 24K 88594', 10649000, 15802000, 35,  'Nhẫn vàng', 'Image/Vang/pic9.png',   	NULL),
	 ('Lắc tay vàng 24K 847393',  9370000, 14560000, 12,  'Lắc tay',   'Image/LacTay/pic1.png', 	NULL),
	 ('Lắc tay vàng 18K 847492',  8010000, 12840000, 23,  'Lắc tay',   'Image/LacTay/pic2.png', 	NULL),
	 ('Lắc tay vàng 18k 67271',   5980000,  8790000, 12,  'Lắc tay',   'Image/LacTay/pic3.png', 	NULL),
	 ('Lắc tay vàng 14K 84374',   4290000,  7850000, 32,  'Lắc tay',   'Image/LacTay/pic4.png', 	NULL),
	 ('Lắc tay vàng 24K 89729',  10999000, 15270000, 17,  'Lắc tay',   'Image/LacTay/pic5.png', 	NULL),
	 ('Lắc tay vàng 18K 87532',   6390000, 95700000, 11,  'Lắc tay',   'Image/LacTay/pic6.png',     NULL),
	 ('Lắc tay vàng 24K 90874',  10140000, 15820000, 35,  'Lắc tay',   'Image/LacTay/pic9.png',     NULL),
	 ('Cặp Silver đính đá 8347',   320000,   730000, 11,  'Nhẫn bạc',  'Image/NhanDoi/pic1.png',    NULL),
	 ('Cặp Silver đính đá 8473',   432000,   860000, 20,  'Nhẫn bạc',  'Image/NhanDoi/pic2.png',    NULL),
	 ('Cặp Silver đính đá 9843',   392000,   760000,  6,  'Nhẫn bạc',  'Image/NhanDoi/pic3.png',    NULL),
	 ('Cặp Silver đính đá 7623',   240000,   570000, 13,  'Nhẫn bạc',  'Image/NhanDoi/pic4.png',    NULL),
	 ('Cặp Silver đính đá 6961',   370000,   799000, 21,  'Nhẫn bạc',  'Image/NhanDoi/pic5.png',    NULL),
	 ('Cặp Silver đính đá 3219',   390000,   800000,  4,  'Nhân bạc',  'Image/NhanDoi/pic6.png',    NULL),
	 ('Cặp Silver đính đá 2981',   290000,   630000, 12,  'Nhẫn bạc',  'Image/NhanDoi/pic10.png',   NULL),
	 ('Đôi nhẫn kim cương 8544',  12730000, 17110000, 31, 'Kim cương', 'Image/NhanCuoiKC/pic1.png', NULL),
	 ('Đôi nhẫn kim cương 9652',   8900000, 12840000,  7, 'Kim cương', 'Image/NhanCuoiKC/pic2.png', NULL),
	 ('Đôi nhẫn kim cương 4082',   5800000,  8790000, 25, 'Kim cương', 'Image/NhanCuoiKC/pic3.png', NULL),
	 ('Đôi nhẫn kim cương 8703',   5320000,  7850000, 21, 'Kim cương', 'Image/NhanCuoiKC/pic4.png', NULL),
	 ('Đôi nhẫn kim cương 5473',  11270000, 15354000, 18, 'Kim cương', 'Image/NhanCuoiKC/pic5.png',	NULL),
	 ('Đôi nhẫn kim cương 9958',   6730000,  9570000,  2, 'Kim cương', 'Image/NhanCuoiKC/pic6.png', NULL),
	 ('Đôi nhẫn kim cương 1284',  12970000, 17802000, 17, 'Kim cương', 'Image/NhanCuoiKC/pic7.png', NULL),
	 ('Nhẫn đính hôn 8473',       11970000, 17110000,  1, 'Đính hôn',  'Image/NhanCauHon/pic1.png', NULL),
	 ('Nhẫn đính hôn 6492',        9320000, 12840000,  1, 'Đính hôn',  'Image/NhanCauHon/pic2.png', NULL),
	 ('Nhẫn đính hôn 4739',        5720000,  8790000, 26, 'Đính hôn',  'Image/NhanCauHon/pic3.png', NULL),
	 ('Nhẫn đính hôn 7539',        5130000,  7850000, 35, 'Đính hôn',  'Image/NhanCauHon/pic4.png', NULL),
	 ('Nhẫn đính hôn 5825',       11980000, 15270000,  2, 'Đính hôn',  'Image/NhanCauHon/pic5.png', NULL),
	 ('Nhẫn đính hôn 9360',        6890000,  9570000, 29, 'Đính hôn',  'Image/NhanCauHon/pic6.png', NULL),
	 ('Nhẫn đính hôn 7902',       12765000, 17590000,  1, 'Đính hôn',  'Image/NhanCauHon/pic7.png', NULL);
 
 
INSERT INTO customers (cus_name, username, password, phone, email, address, level, avatar_url) VALUE 
	 ('Ngọc Hà Nguyễn',  'ngoc.ha',    '12345',     0987589834, 'ngoc.ha@gmail.com' ,   '15 - Lê Thánh Tông - Đà Nãng',    'Vàng', ''),
     ('Trần Cao Minh',   'minh.cao',   'caominh',   0897998531, 'cao.minh@gmail.com',   '97 - Lê Duẩn - Đà Nẵng',          'Bạc',  ''),
     ('Nguyễn Ngọc Anh', 'anh.nguyen', '12956',     0724595942, 'anh.nguyen@gmaii.com', '73 - Lê Duẩn - Đproductsà Nẵng',          'Đồng', ''),
     ('Võ Thanh Hà',     'ha.vo',      '857454',    0376743827, 'ha.vo@gmail.com',      '53 - Nguyễn Văn Linh - Đà Nẵng',  'New',  ''),
     ('Hà Thanh Bình',   'binh.ha',    'abcd123',   0978746383, 'binh.ha@gmail.com',    '175 - Phan Tứ - Đà Nẵng',         'Đồng', ''),
     ('Cao Duy Cường',   'cuong.cao',  'cuong',     0735437468, 'cuong.cao@gmail.com',  '5 - Xô Viết Nghệ Tĩnh - Đà Nẵng', 'New',  ''),
     ('Trần Ngọc Mai',   'mai.tran',   '12345',     0746237483, 'ngoc.mai@gmail.com',   '32 - Lý Nam Đế - TP HCM',         'Vàng', '');
     
     
     
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 