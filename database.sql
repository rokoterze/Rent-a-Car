

CREATE TABLE `failedlogins` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `LoginTimeUnix` int(50) NOT NULL,
  `LoginTime` datetime NOT NULL,
  `IsActiveAttempt` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO failedlogins VALUES("20","admin","1672169430","2022-12-27 20:30:30","0");
INSERT INTO failedlogins VALUES("21","admin","1672169437","2022-12-27 20:30:37","0");
INSERT INTO failedlogins VALUES("22","user","1672336745","2022-12-29 18:59:05","0");
INSERT INTO failedlogins VALUES("23","user","1672336755","2022-12-29 18:59:15","0");
INSERT INTO failedlogins VALUES("24","user","1672336761","2022-12-29 18:59:21","0");
INSERT INTO failedlogins VALUES("25","user","1672336766","2022-12-29 18:59:26","0");
INSERT INTO failedlogins VALUES("26","user","1672336852","2022-12-29 19:00:52","0");
INSERT INTO failedlogins VALUES("27","user","1672432082","2022-12-30 21:28:02","0");
INSERT INTO failedlogins VALUES("28","user","1672433025","2022-12-30 21:43:45","0");
INSERT INTO failedlogins VALUES("29","user","1672433731","2022-12-30 21:55:31","0");
INSERT INTO failedlogins VALUES("30","admin","1672435408","2022-12-30 22:23:28","0");
INSERT INTO failedlogins VALUES("31","Administrator","1673982665","2023-01-17 20:11:05","0");
INSERT INTO failedlogins VALUES("32","Administrator","1673984022","2023-01-17 20:33:42","0");
INSERT INTO failedlogins VALUES("33","Administrator","1673984081","2023-01-17 20:34:41","0");
INSERT INTO failedlogins VALUES("34","Administrator","1673984327","2023-01-17 20:38:47","0");
INSERT INTO failedlogins VALUES("35","User","1673985785","2023-01-17 21:03:05","0");
INSERT INTO failedlogins VALUES("36","User","1673985791","2023-01-17 21:03:11","0");
INSERT INTO failedlogins VALUES("37","User","1673985797","2023-01-17 21:03:17","0");
INSERT INTO failedlogins VALUES("38","User","1673985804","2023-01-17 21:03:24","0");
INSERT INTO failedlogins VALUES("39","User","1673988026","2023-01-17 21:40:26","0");
INSERT INTO failedlogins VALUES("40","User","1673988033","2023-01-17 21:40:33","0");
INSERT INTO failedlogins VALUES("41","User","1673988264","2023-01-17 21:44:24","0");
INSERT INTO failedlogins VALUES("42","User","1674056246","2023-01-18 16:37:26","0");
INSERT INTO failedlogins VALUES("43","User","1674411749","2023-01-22 19:22:29","0");
INSERT INTO failedlogins VALUES("44","User","1674579742","2023-01-24 18:02:22","1");



CREATE TABLE `syschanges` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `Location` varchar(255) NOT NULL,
  `SystemChange` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `TimeUnix` int(50) NOT NULL,
  `DateTime` datetime NOT NULL,
  `Username` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=335 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO syschanges VALUES("115","System Configuration","UPDATE","Pagination Number: OLD: 5 / NEW: 10","1673803156","2023-01-15 18:19:16","Administrator");
INSERT INTO syschanges VALUES("116","Account Database","UPDATE","Account: ivo","1673803171","2023-01-15 18:19:31","Administrator");
INSERT INTO syschanges VALUES("117","System Configuration","UPDATE","Pagination Number: OLD: 10 / NEW: 5","1673803208","2023-01-15 18:20:08","Administrator");
INSERT INTO syschanges VALUES("118","System Configuration","UPDATE","Pagination Number: OLD: 5 / NEW: 8","1673803666","2023-01-15 18:27:46","Administrator");
INSERT INTO syschanges VALUES("119","System Configuration","UPDATE","Pagination Number: OLD: 8 / NEW: 50","1673803970","2023-01-15 18:32:50","Administrator");
INSERT INTO syschanges VALUES("120","System Configuration","UPDATE","Pagination Number: OLD: 50 / NEW: 15","1673803985","2023-01-15 18:33:05","Administrator");
INSERT INTO syschanges VALUES("121","Account Database","UPDATE","Account: user","1673804390","2023-01-15 18:39:50","Administrator");
INSERT INTO syschanges VALUES("122","System Configuration","UPDATE","Login Attempt: OLD: 10 / NEW: 3","1673804414","2023-01-15 18:40:14","Administrator");
INSERT INTO syschanges VALUES("123","Account Database","UPDATE","Account: ivan","1673804489","2023-01-15 18:41:29","Administrator");
INSERT INTO syschanges VALUES("124","Account Database","UPDATE","Account: pero","1673804493","2023-01-15 18:41:33","Administrator");
INSERT INTO syschanges VALUES("125","Account Database","UPDATE","Account: mate","1673804509","2023-01-15 18:41:49","Administrator");
INSERT INTO syschanges VALUES("126","Account Database","UPDATE","Account: ivo","1673804513","2023-01-15 18:41:53","Administrator");
INSERT INTO syschanges VALUES("130","System Configuration","UPDATE","Cookie Lifetime [Days]: OLD: 1 / NEW: 30","1673807759","2023-01-15 19:35:59","Administrator");
INSERT INTO syschanges VALUES("131","System Configuration","UPDATE","Cookie Lifetime [Days]: OLD: 30 / NEW: 1","1673807873","2023-01-15 19:37:53","Administrator");
INSERT INTO syschanges VALUES("132","System Configuration","UPDATE","Pagination Number: OLD: 15 / NEW: 10","1673808018","2023-01-15 19:40:18","Administrator");
INSERT INTO syschanges VALUES("133","Account Database","UPDATE","Account: Administrator","1673808132","2023-01-15 19:42:12","Administrator");
INSERT INTO syschanges VALUES("134","Account Database","UPDATE","Account: ivana@ivana.hr","1673898460","2023-01-16 20:47:40","Administrator");
INSERT INTO syschanges VALUES("135","Account Database","UPDATE","Account: ivana@ivana.hr","1673898466","2023-01-16 20:47:46","Administrator");
INSERT INTO syschanges VALUES("136","Account Database","UPDATE","Account: ivana@ivana.hr","1673899498","2023-01-16 21:04:58","Administrator");
INSERT INTO syschanges VALUES("137","Account Database","UPDATE","Account: ivan","1673900506","2023-01-16 21:21:46","Administrator");
INSERT INTO syschanges VALUES("138","Account Database","UPDATE","Account: ivana@ivana.hr","1673900629","2023-01-16 21:23:49","Administrator");
INSERT INTO syschanges VALUES("139","Account Database","UPDATE","Account: user","1673902346","2023-01-16 21:52:26","Administrator");
INSERT INTO syschanges VALUES("140","Account Database","UPDATE","Account: user","1673902438","2023-01-16 21:53:58","Administrator");
INSERT INTO syschanges VALUES("141","System Configuration","UPDATE","Login Attempt: OLD: 3 / NEW: 5","1673902457","2023-01-16 21:54:17","user");
INSERT INTO syschanges VALUES("142","System Configuration","UPDATE","Pagination Number: OLD: 10 / NEW: 5","1673902457","2023-01-16 21:54:17","user");
INSERT INTO syschanges VALUES("143","System Configuration","UPDATE","Cookie Lifetime [Days]: OLD: 1 / NEW: 5","1673902457","2023-01-16 21:54:17","user");
INSERT INTO syschanges VALUES("144","Account Database","UPDATE","Account: User","1673902502","2023-01-16 21:55:02","user");
INSERT INTO syschanges VALUES("145","System Configuration","UPDATE","Login Attempt: OLD: 5 / NEW: 7","1673902632","2023-01-16 21:57:12","User");
INSERT INTO syschanges VALUES("146","System Configuration","UPDATE","Cookie Lifetime [Days]: OLD: 5 / NEW: 7","1673902632","2023-01-16 21:57:12","User");
INSERT INTO syschanges VALUES("147","System Configuration","UPDATE","Pagination Number: OLD: 5 / NEW: 7","1673902636","2023-01-16 21:57:16","User");
INSERT INTO syschanges VALUES("148","System Configuration","UPDATE","Login Attempt: OLD: 7 / NEW: 3","1673902646","2023-01-16 21:57:26","User");
INSERT INTO syschanges VALUES("149","System Configuration","UPDATE","Pagination Number: OLD: 7 / NEW: 5","1673902646","2023-01-16 21:57:26","User");
INSERT INTO syschanges VALUES("150","System Configuration","UPDATE","Pagination Number: OLD: 5 / NEW: 10","1673906809","2023-01-16 23:06:49","Administrator");
INSERT INTO syschanges VALUES("151","Account Database","UPDATE","Account: jerko","1673906832","2023-01-16 23:07:12","Administrator");
INSERT INTO syschanges VALUES("152","Account Database","UPDATE","Account: hrvoje","1673906837","2023-01-16 23:07:17","Administrator");
INSERT INTO syschanges VALUES("153","Account Database","UPDATE","Account: matej","1673906843","2023-01-16 23:07:23","Administrator");
INSERT INTO syschanges VALUES("154","Account Database","UPDATE","Account: matej","1673906852","2023-01-16 23:07:32","Administrator");
INSERT INTO syschanges VALUES("155","Account Database","UPDATE","Account: matej","1673906860","2023-01-16 23:07:40","Administrator");
INSERT INTO syschanges VALUES("156","Account Database","UPDATE","Account: ivana@ivana.hr","1673906869","2023-01-16 23:07:49","Administrator");
INSERT INTO syschanges VALUES("157","Account Database","UPDATE","Account: jerko","1673906878","2023-01-16 23:07:58","Administrator");
INSERT INTO syschanges VALUES("158","Account Database","UPDATE","Account: ante","1673906884","2023-01-16 23:08:04","Administrator");
INSERT INTO syschanges VALUES("159","Account Database","UPDATE","Account: ivo","1673906887","2023-01-16 23:08:07","Administrator");
INSERT INTO syschanges VALUES("160","Account Database","UPDATE","Account: mate","1673906891","2023-01-16 23:08:11","Administrator");
INSERT INTO syschanges VALUES("161","Account Database","UPDATE","Account: User","1673906895","2023-01-16 23:08:15","Administrator");
INSERT INTO syschanges VALUES("162","System Configuration","UPDATE","Login Attempt: OLD: 3 / NEW: 5","1673970527","2023-01-17 16:48:47","Administrator");
INSERT INTO syschanges VALUES("163","System Configuration","UPDATE","Pagination Number: OLD: 10 / NEW: 20","1673970527","2023-01-17 16:48:47","Administrator");
INSERT INTO syschanges VALUES("164","System Configuration","UPDATE","Pagination Number: OLD: 20 / NEW: 100","1673970544","2023-01-17 16:49:04","Administrator");
INSERT INTO syschanges VALUES("165","System Configuration","UPDATE","Pagination Number: OLD: 100 / NEW: 20","1673970856","2023-01-17 16:54:16","Administrator");
INSERT INTO syschanges VALUES("166","System Configuration","UPDATE","Login Attempt: OLD: 5 / NEW: 4","1673972409","2023-01-17 17:20:09","Administrator");
INSERT INTO syschanges VALUES("167","System Configuration","UPDATE","Pagination Number: OLD: 20 / NEW: 10","1673972409","2023-01-17 17:20:09","Administrator");
INSERT INTO syschanges VALUES("168","System Configuration","UPDATE","Cookie Lifetime [Days]: OLD: 7 / NEW: 1","1673972409","2023-01-17 17:20:09","Administrator");
INSERT INTO syschanges VALUES("169","Account Database","UPDATE","Account: ante","1673972510","2023-01-17 17:21:50","Administrator");
INSERT INTO syschanges VALUES("170","Account Database","UPDATE","Account: ante","1673972515","2023-01-17 17:21:55","Administrator");
INSERT INTO syschanges VALUES("171","System Configuration","UPDATE","Cookie Lifetime [Days]: OLD: 1 / NEW: 2","1673972797","2023-01-17 17:26:37","Administrator");
INSERT INTO syschanges VALUES("172","Account Database","UPDATE","Account: User","1673973664","2023-01-17 17:41:04","Administrator");
INSERT INTO syschanges VALUES("173","Account Database","UPDATE","Account: User","1673973684","2023-01-17 17:41:24","Administrator");
INSERT INTO syschanges VALUES("174","Account Database","UPDATE","Account: mate","1673974047","2023-01-17 17:47:27","Administrator");
INSERT INTO syschanges VALUES("175","Account Database","UPDATE","Account: ante","1673974172","2023-01-17 17:49:32","Administrator");
INSERT INTO syschanges VALUES("176","Account Database","UPDATE","Account: mate","1673974232","2023-01-17 17:50:32","Administrator");
INSERT INTO syschanges VALUES("177","Account Database","UPDATE","Account: mate","1673974264","2023-01-17 17:51:04","Administrator");
INSERT INTO syschanges VALUES("178","System Configuration","UPDATE","Login Attempt: OLD: 4 / NEW: 5","1673974566","2023-01-17 17:56:06","Administrator");
INSERT INTO syschanges VALUES("179","System Configuration","UPDATE","Pagination Number: OLD: 10 / NEW: 2","1673974566","2023-01-17 17:56:06","Administrator");
INSERT INTO syschanges VALUES("180","System Configuration","UPDATE","Cookie Lifetime [Days]: OLD: 2 / NEW: 1","1673974566","2023-01-17 17:56:06","Administrator");
INSERT INTO syschanges VALUES("181","System Configuration","UPDATE","Pagination Number: OLD: 2 / NEW: 5","1673974772","2023-01-17 17:59:32","Administrator");
INSERT INTO syschanges VALUES("182","System Configuration","UPDATE","Login Attempt: OLD: 5 / NEW: 3","1673985758","2023-01-17 21:02:38","Administrator");
INSERT INTO syschanges VALUES("183","Account Database","UPDATE","Account: User","1673986641","2023-01-17 21:17:21","Administrator");
INSERT INTO syschanges VALUES("184","Account Database","UPDATE","Account: User","1673986894","2023-01-17 21:21:34","Administrator");
INSERT INTO syschanges VALUES("185","Account Database","UPDATE","Account: User","1673987549","2023-01-17 21:32:29","Administrator");
INSERT INTO syschanges VALUES("186","Account Database","UPDATE","Account: User","1673987568","2023-01-17 21:32:48","Administrator");
INSERT INTO syschanges VALUES("187","Account Database","UPDATE","Account: User","1673987798","2023-01-17 21:36:38","Administrator");
INSERT INTO syschanges VALUES("188","Account Database","UPDATE","Account: User","1673987803","2023-01-17 21:36:43","Administrator");
INSERT INTO syschanges VALUES("189","Account Database","UPDATE","Account: User","1673987959","2023-01-17 21:39:19","Administrator");
INSERT INTO syschanges VALUES("190","System Configuration","UPDATE","Login Attempt: OLD: 3 / NEW: 2","1673988017","2023-01-17 21:40:17","Administrator");
INSERT INTO syschanges VALUES("191","Account Database","UPDATE","Account: User","1673988077","2023-01-17 21:41:17","Administrator");
INSERT INTO syschanges VALUES("192","Account Database","UPDATE","Account: pero","1673988133","2023-01-17 21:42:13","Administrator");
INSERT INTO syschanges VALUES("193","Account Database","UPDATE","Account: User","1673988168","2023-01-17 21:42:48","Administrator");
INSERT INTO syschanges VALUES("194","Account Database","UPDATE","Account: User","1673988178","2023-01-17 21:42:58","Administrator");
INSERT INTO syschanges VALUES("195","Account Database","UPDATE","Account: User","1673988184","2023-01-17 21:43:04","Administrator");
INSERT INTO syschanges VALUES("196","Account Database","UPDATE","Account: User","1673988187","2023-01-17 21:43:07","Administrator");
INSERT INTO syschanges VALUES("197","Account Database","UPDATE","Account: User","1673988196","2023-01-17 21:43:16","Administrator");
INSERT INTO syschanges VALUES("198","Account Database","UPDATE","Account: User","1673988204","2023-01-17 21:43:24","Administrator");
INSERT INTO syschanges VALUES("199","System Configuration","UPDATE","Login Attempt: OLD: 2 / NEW: 1","1673988241","2023-01-17 21:44:01","Administrator");
INSERT INTO syschanges VALUES("200","Account Database","UPDATE","Account: User","1673988288","2023-01-17 21:44:48","Administrator");
INSERT INTO syschanges VALUES("201","Account Database","UPDATE","Account: User","1673994789","2023-01-17 23:33:09","Administrator");
INSERT INTO syschanges VALUES("202","Account Database","UPDATE","Account: User","1673994803","2023-01-17 23:33:23","Administrator");
INSERT INTO syschanges VALUES("203","Account Database","UPDATE","Account: ivana","1674032463","2023-01-18 10:01:03","Administrator");
INSERT INTO syschanges VALUES("204","System Configuration","UPDATE","Login Attempt: OLD: 1 / NEW: 3","1674051475","2023-01-18 15:17:55","Administrator");
INSERT INTO syschanges VALUES("205","System Configuration","UPDATE","Pagination Number: OLD: 5 / NEW: 10","1674051475","2023-01-18 15:17:55","Administrator");
INSERT INTO syschanges VALUES("206","System Configuration","UPDATE","Cookie Lifetime [Days]: OLD: 1 / NEW: 2","1674051570","2023-01-18 15:19:30","Administrator");
INSERT INTO syschanges VALUES("207","System Configuration","UPDATE","Login Attempt: OLD: 3 / NEW: 1","1674056239","2023-01-18 16:37:19","Administrator");
INSERT INTO syschanges VALUES("208","Account Database","UPDATE","Account: User","1674056291","2023-01-18 16:38:11","Administrator");
INSERT INTO syschanges VALUES("209","System Configuration","UPDATE","Login Attempt: OLD: 1 / NEW: 2","1674058101","2023-01-18 17:08:21","Administrator");
INSERT INTO syschanges VALUES("210","Account Database","UPDATE","Account: mate","1674058124","2023-01-18 17:08:44","Administrator");
INSERT INTO syschanges VALUES("211","System Configuration","UPDATE","Login Attempt: OLD: 2 / NEW: 3","1674157888","2023-01-19 20:51:28","Administrator");
INSERT INTO syschanges VALUES("212","System Configuration","UPDATE","Cookie Lifetime [Days]: OLD: 2 / NEW: 1","1674157888","2023-01-19 20:51:28","Administrator");
INSERT INTO syschanges VALUES("213","System Configuration","UPDATE","Pagination Number: OLD: 10 / NEW: 20","1674160503","2023-01-19 21:35:03","Administrator");
INSERT INTO syschanges VALUES("214","System Configuration","BACKUP","Database backup downloaded","1674207665","2023-01-20 10:41:05","Administrator");
INSERT INTO syschanges VALUES("218","System Configuration","UPDATE","Pagination Number: OLD: 20 / NEW: 30","1674209658","2023-01-20 11:14:18","Administrator");
INSERT INTO syschanges VALUES("221","System Configuration","BACKUP","Database restored: rent-a-car","1674210005","2023-01-20 11:20:05","Administrator");
INSERT INTO syschanges VALUES("222","System Configuration","BACKUP","Database downloaded: rent-a-car","1674210007","2023-01-20 11:20:07","Administrator");
INSERT INTO syschanges VALUES("223","System Configuration","BACKUP","Database restored: rent-a-car","1674210066","2023-01-20 11:21:06","Administrator");
INSERT INTO syschanges VALUES("224","System Configuration","BACKUP","Database downloaded: rent-a-car","1674210067","2023-01-20 11:21:07","Administrator");
INSERT INTO syschanges VALUES("225","System Configuration","BACKUP","Database restored: rent-a-car","1674210134","2023-01-20 11:22:14","Administrator");
INSERT INTO syschanges VALUES("226","System Configuration","BACKUP","Database downloaded: rent-a-car","1674210197","2023-01-20 11:23:17","Administrator");
INSERT INTO syschanges VALUES("227","Account Database","UPDATE","Account: jerko","1674225031","2023-01-20 15:30:31","Administrator");
INSERT INTO syschanges VALUES("228","Account Database","UPDATE","Account: mate","1674300688","2023-01-21 12:31:28","Administrator");
INSERT INTO syschanges VALUES("229","Vehicle Administration","UPDATE","Vehicle: 7","1674303514","2023-01-21 13:18:34","User");
INSERT INTO syschanges VALUES("230","Vehicle Administration","UPDATE","Vehicle: 7","1674303609","2023-01-21 13:20:09","User");
INSERT INTO syschanges VALUES("231","Vehicle Administration","UPDATE","Vehicle: 5","1674303626","2023-01-21 13:20:26","User");
INSERT INTO syschanges VALUES("232","Vehicle Administration","UPDATE","Vehicle: 5","1674303649","2023-01-21 13:20:49","User");
INSERT INTO syschanges VALUES("233","Vehicle Administration","UPDATE","Vehicle: 10","1674304005","2023-01-21 13:26:45","User");
INSERT INTO syschanges VALUES("234","Vehicle Administration","UPDATE","Vehicle: 10","1674304014","2023-01-21 13:26:54","User");
INSERT INTO syschanges VALUES("235","Vehicle Administration","UPDATE","Vehicle: 7","1674304679","2023-01-21 13:37:59","User");
INSERT INTO syschanges VALUES("236","Vehicle Administration","UPDATE","Vehicle: 10","1674304698","2023-01-21 13:38:18","User");
INSERT INTO syschanges VALUES("237","Vehicle Administration","CREATE","Vehicle: ST7824PP","1674304752","2023-01-21 13:39:12","User");
INSERT INTO syschanges VALUES("238","Vehicle Administration","UPDATE","Vehicle: 11","1674304774","2023-01-21 13:39:34","User");
INSERT INTO syschanges VALUES("239","Vehicle Administration","UPDATE","Vehicle: 12","1674305208","2023-01-21 13:46:48","User");
INSERT INTO syschanges VALUES("240","Vehicle Administration","UPDATE","Vehicle: 12","1674305342","2023-01-21 13:49:02","User");
INSERT INTO syschanges VALUES("241","Vehicle Administration","UPDATE","Vehicle: 11","1674306455","2023-01-21 14:07:35","User");
INSERT INTO syschanges VALUES("242","Vehicle Administration","UPDATE","Vehicle: 11","1674306496","2023-01-21 14:08:16","User");
INSERT INTO syschanges VALUES("243","Vehicle Administration","CREATE","Vehicle: RI001","1674316760","2023-01-21 16:59:20","User");
INSERT INTO syschanges VALUES("244","System Configuration","UPDATE","Cookie Lifetime [Days]: OLD: 1 / NEW: 2","1674317342","2023-01-21 17:09:02","Administrator");
INSERT INTO syschanges VALUES("245","System Configuration","UPDATE","Cookie Lifetime [Days]: OLD: 2 / NEW: 1","1674317547","2023-01-21 17:12:27","Administrator");
INSERT INTO syschanges VALUES("247","Vehicle Administration","CREATE","Vehicle: RI002","1674317895","2023-01-21 17:18:15","User");
INSERT INTO syschanges VALUES("249","Vehicle Administration","CREATE","Vehicle: RI003","1674317917","2023-01-21 17:18:37","User");
INSERT INTO syschanges VALUES("251","Vehicle Administration","CREATE","Vehicle: ST887SD","1674317956","2023-01-21 17:19:16","User");
INSERT INTO syschanges VALUES("253","Vehicle Administration","CREATE","Vehicle: ST8854A","1674317974","2023-01-21 17:19:34","User");
INSERT INTO syschanges VALUES("255","Check-In","CREATE","Vehicle: ST7824PP","1674319847","2023-01-21 17:50:47","User");
INSERT INTO syschanges VALUES("257","Check-In","CREATE","Vehicle: ST7824PP","1674320097","2023-01-21 17:54:57","User");
INSERT INTO syschanges VALUES("259","Check-In","CREATE","Vehicle: ST5578AS","1674320135","2023-01-21 17:55:35","User");
INSERT INTO syschanges VALUES("261","Check-In","CREATE","Vehicle: ST554AA","1674320182","2023-01-21 17:56:22","User");
INSERT INTO syschanges VALUES("263","Check-In","CREATE","Vehicle: ST8744AV","1674320237","2023-01-21 17:57:17","User");
INSERT INTO syschanges VALUES("264","Check-In","CREATE","Vehicle: ","1674321812","2023-01-21 18:23:32","User");
INSERT INTO syschanges VALUES("265","Check-In","CREATE","Vehicle: ","1674322690","2023-01-21 18:38:10","User");
INSERT INTO syschanges VALUES("266","Check-In","CREATE","Vehicle: ST8854A","1674324300","2023-01-21 19:05:00","User");
INSERT INTO syschanges VALUES("267","Check-In","CREATE","Vehicle: ST7824PP","1674326264","2023-01-21 19:37:44","User");
INSERT INTO syschanges VALUES("268","Check-In","CREATE","Vehicle: ST5578AS","1674326304","2023-01-21 19:38:24","User");
INSERT INTO syschanges VALUES("269","Check-In","CREATE","Vehicle: ST554AA","1674326387","2023-01-21 19:39:47","User");
INSERT INTO syschanges VALUES("270","Check-In","CREATE","Vehicle: ST7824PP","1674332427","2023-01-21 21:20:27","User");
INSERT INTO syschanges VALUES("271","Check-In","CREATE","Vehicle: RI001","1674337548","2023-01-21 22:45:48","User");
INSERT INTO syschanges VALUES("272","Check-In","CREATE","Vehicle: RI002","1674337644","2023-01-21 22:47:24","User");
INSERT INTO syschanges VALUES("273","Check-In","CREATE","Vehicle: RI003","1674337729","2023-01-21 22:48:49","User");
INSERT INTO syschanges VALUES("274","Check-In","CREATE","Vehicle: RI001","1674337884","2023-01-21 22:51:24","User");
INSERT INTO syschanges VALUES("275","Check-In","CREATE","Vehicle: RI003","1674338027","2023-01-21 22:53:47","User");
INSERT INTO syschanges VALUES("276","Check-In","CREATE","Vehicle: RI002","1674338146","2023-01-21 22:55:46","User");
INSERT INTO syschanges VALUES("277","Check-In","CREATE","Vehicle: RI001","1674338480","2023-01-21 23:01:20","User");
INSERT INTO syschanges VALUES("278","Check-In","CREATE","Vehicle: RI002","1674338585","2023-01-21 23:03:05","User");
INSERT INTO syschanges VALUES("279","Check-In","CREATE","Vehicle: RI003","1674338616","2023-01-21 23:03:36","User");
INSERT INTO syschanges VALUES("280","System Configuration","UPDATE","Pagination Number: OLD: 30 / NEW: 40","1674343893","2023-01-22 00:31:33","Administrator");
INSERT INTO syschanges VALUES("281","Check-In","CREATE","Vehicle: ST7824PP","1674387221","2023-01-22 12:33:41","User");
INSERT INTO syschanges VALUES("282","Vehicle Administration","CREATE","Vehicle: ","1674387688","2023-01-22 12:41:28","User");
INSERT INTO syschanges VALUES("283","Vehicle Administration","UPDATE","Vehicle: 17","1674388589","2023-01-22 12:56:29","User");
INSERT INTO syschanges VALUES("284","Vehicle Administration","UPDATE","Vehicle: 17","1674389439","2023-01-22 13:10:39","User");
INSERT INTO syschanges VALUES("285","Vehicle Administration","UPDATE","Vehicle: 17","1674389522","2023-01-22 13:12:02","User");
INSERT INTO syschanges VALUES("286","Vehicle Administration","CREATE","Vehicle: ST8854A","1674389739","2023-01-22 13:15:39","User");
INSERT INTO syschanges VALUES("287","Vehicle Administration","UPDATE","Vehicle: 18","1674389749","2023-01-22 13:15:49","User");
INSERT INTO syschanges VALUES("288","Vehicle Administration","UPDATE","Vehicle: 8","1674389764","2023-01-22 13:16:04","User");
INSERT INTO syschanges VALUES("289","Check-In","CREATE","Vehicle: ST554AA","1674395821","2023-01-22 14:57:01","User");
INSERT INTO syschanges VALUES("290","Check-Out","CREATE","Vehicle: ST554AA","1674401133","2023-01-22 16:25:33","User");
INSERT INTO syschanges VALUES("291","Check-Out","CREATE","Vehicle: ST7824PP","1674401187","2023-01-22 16:26:27","User");
INSERT INTO syschanges VALUES("292","Check-Out","CREATE","Vehicle: ","1674401196","2023-01-22 16:26:36","User");
INSERT INTO syschanges VALUES("293","Check-Out","CREATE","Vehicle: RI003","1674401212","2023-01-22 16:26:52","User");
INSERT INTO syschanges VALUES("294","Check-Out","CREATE","Vehicle: RI002","1674401216","2023-01-22 16:26:56","User");
INSERT INTO syschanges VALUES("295","Vehicle Administration","CREATE","Vehicle: ST9911F","1674401277","2023-01-22 16:27:57","User");
INSERT INTO syschanges VALUES("296","Vehicle Administration","CREATE","Vehicle: ST716FM","1674402235","2023-01-22 16:43:55","User");
INSERT INTO syschanges VALUES("297","Account Database","UPDATE","Account: User","1674402401","2023-01-22 16:46:41","Administrator");
INSERT INTO syschanges VALUES("298","Vehicle Administration","UPDATE","Vehicle: 20","1674402569","2023-01-22 16:49:29","User");
INSERT INTO syschanges VALUES("300","Vehicle Administration","UPDATE","Vehicle: 20","1674402852","2023-01-22 16:54:12","User");
INSERT INTO syschanges VALUES("304","Vehicle Administration","UPDATE","Vehicle: 20","1674404523","2023-01-22 17:22:03","User");
INSERT INTO syschanges VALUES("305","Vehicle Administration","UPDATE","Vehicle: 20","1674404529","2023-01-22 17:22:09","User");
INSERT INTO syschanges VALUES("306","Check-In","CREATE","Vehicle: ST8054A","1674405131","2023-01-22 17:32:11","User");
INSERT INTO syschanges VALUES("307","Check-Out","CREATE","Vehicle: ST8054A","1674405144","2023-01-22 17:32:24","User");
INSERT INTO syschanges VALUES("308","System Configuration","UPDATE","Login Attempt: OLD: 3 / NEW: 1","1674411740","2023-01-22 19:22:20","Administrator");
INSERT INTO syschanges VALUES("309","Account Database","UPDATE","Account: User","1674411781","2023-01-22 19:23:01","Administrator");
INSERT INTO syschanges VALUES("310","Vehicle Administration","UPDATE","Vehicle: 20","1674413391","2023-01-22 19:49:51","User");
INSERT INTO syschanges VALUES("311","Vehicle Administration","CREATE","Vehicle: ST777AA","1674413422","2023-01-22 19:50:22","User");
INSERT INTO syschanges VALUES("312","Vehicle Administration","UPDATE","Vehicle: 22","1674413434","2023-01-22 19:50:34","User");
INSERT INTO syschanges VALUES("313","Vehicle Administration","UPDATE","Vehicle: 22","1674413444","2023-01-22 19:50:44","User");
INSERT INTO syschanges VALUES("314","Check-In","CREATE","Vehicle: ST777AA","1674413478","2023-01-22 19:51:18","User");
INSERT INTO syschanges VALUES("315","Check-Out","CREATE","Vehicle: ST777AA","1674413491","2023-01-22 19:51:31","User");
INSERT INTO syschanges VALUES("316","Check-In","CREATE","Vehicle: ST777AA","1674498580","2023-01-23 19:29:40","User");
INSERT INTO syschanges VALUES("317","System Configuration","UPDATE","Pagination Number: OLD: 40 / NEW: 30","1674514736","2023-01-23 23:58:56","Administrator");
INSERT INTO syschanges VALUES("318","System Configuration","BACKUP","Database downloaded: rent-a-car","1674514745","2023-01-23 23:59:05","Administrator");
INSERT INTO syschanges VALUES("319","System Configuration","BACKUP","Database downloaded: rent-a-car","1674514895","2023-01-24 00:01:35","Administrator");
INSERT INTO syschanges VALUES("320","Check-Out","CREATE","Vehicle: ","1674515518","2023-01-24 00:11:58","User");
INSERT INTO syschanges VALUES("321","Check-In","CREATE","Vehicle: ST716FM","1674515667","2023-01-24 00:14:27","User");
INSERT INTO syschanges VALUES("322","Check-Out","CREATE","Vehicle: ST716FM","1674515725","2023-01-24 00:15:25","User");
INSERT INTO syschanges VALUES("323","Check-Out","CREATE","Vehicle: ST777AA","1674515925","2023-01-24 00:18:45","User");
INSERT INTO syschanges VALUES("324","Check-In","CREATE","Vehicle: ST554AA","1674515991","2023-01-24 00:19:51","User");
INSERT INTO syschanges VALUES("325","Check-In","CREATE","Vehicle: ST777AA","1674575652","2023-01-24 16:54:12","User");
INSERT INTO syschanges VALUES("326","Check-Out","CREATE","Vehicle: ST777AA","1674575662","2023-01-24 16:54:22","User");
INSERT INTO syschanges VALUES("327","Vehicle Administration","CREATE","Vehicle: ST9235BA","1674576806","2023-01-24 17:13:26","User");
INSERT INTO syschanges VALUES("328","Vehicle Administration","CREATE","Vehicle: ST552AG","1674576837","2023-01-24 17:13:57","User");
INSERT INTO syschanges VALUES("329","Check-In","CREATE","Vehicle: ST552AG","1674576940","2023-01-24 17:15:40","User");
INSERT INTO syschanges VALUES("330","Check-In","CREATE","Vehicle: ST9235BA","1674576966","2023-01-24 17:16:06","User");
INSERT INTO syschanges VALUES("331","Check-In","CREATE","Vehicle: ST777AA","1674577005","2023-01-24 17:16:45","User");
INSERT INTO syschanges VALUES("332","Account Database","UPDATE","Account: User","1674579627","2023-01-24 18:00:27","Administrator");
INSERT INTO syschanges VALUES("333","Account Database","UPDATE","Account: User","1674579734","2023-01-24 18:02:14","Administrator");
INSERT INTO syschanges VALUES("334","System Configuration","UPDATE","Pagination Number: OLD: 30 / NEW: 10","1674579945","2023-01-24 18:05:45","Administrator");



CREATE TABLE `sysconfig` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Type` varchar(255) NOT NULL,
  `Value` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO sysconfig VALUES("1","Login Attempts","1");
INSERT INTO sysconfig VALUES("2","Pagination Number","10");
INSERT INTO sysconfig VALUES("3","Cookie Lifetime","1");



CREATE TABLE `syslogs` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `LoginTimeUnix` int(50) DEFAULT NULL,
  `LoginDateTime` datetime DEFAULT NULL,
  `LogoutTimeUnix` int(50) DEFAULT NULL,
  `LogoutDateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=274 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO syslogs VALUES("138","Administrator","1673643672","2023-01-13 22:01:12","1673645537","2023-01-13 22:32:17");
INSERT INTO syslogs VALUES("140","Administrator","1673690697","2023-01-14 11:04:57","1673690703","2023-01-14 11:05:03");
INSERT INTO syslogs VALUES("142","Administrator","1673693735","2023-01-14 11:55:35","1673696920","2023-01-14 12:48:40");
INSERT INTO syslogs VALUES("143","Administrator","1673696939","2023-01-14 12:48:59","1673697067","2023-01-14 12:51:07");
INSERT INTO syslogs VALUES("144","User","1673697079","2023-01-14 12:51:19","1673697168","2023-01-14 12:52:48");
INSERT INTO syslogs VALUES("145","Administrator","1673697103","2023-01-14 12:51:43","1673697153","2023-01-14 12:52:33");
INSERT INTO syslogs VALUES("146","Administrator","1673697177","2023-01-14 12:52:57","1673708532","2023-01-14 16:02:12");
INSERT INTO syslogs VALUES("151","User","1673704293","2023-01-14 14:51:33","1673704488","2023-01-14 14:54:48");
INSERT INTO syslogs VALUES("154","user","1673704798","2023-01-14 14:59:58","1673704801","2023-01-14 15:00:01");
INSERT INTO syslogs VALUES("155","Administrator","1673709382","2023-01-14 16:16:22","1673718888","2023-01-14 18:54:48");
INSERT INTO syslogs VALUES("156","User","1673718915","2023-01-14 18:55:15","1673718925","2023-01-14 18:55:25");
INSERT INTO syslogs VALUES("157","Administrator","1673718935","2023-01-14 18:55:35","1673723984","2023-01-14 20:19:44");
INSERT INTO syslogs VALUES("158","User","1673723994","2023-01-14 20:19:54","1673723996","2023-01-14 20:19:56");
INSERT INTO syslogs VALUES("159","Administrator","1673724002","2023-01-14 20:20:02","1673724003","2023-01-14 20:20:03");
INSERT INTO syslogs VALUES("160","Administrator","1673724012","2023-01-14 20:20:12","1673727197","2023-01-14 21:13:17");
INSERT INTO syslogs VALUES("161","Administrator","1673733738","2023-01-14 23:02:18","1673733816","2023-01-14 23:03:36");
INSERT INTO syslogs VALUES("162","Administrator","1673733850","2023-01-14 23:04:10","1673734540","2023-01-14 23:15:40");
INSERT INTO syslogs VALUES("163","Administrator","1673778880","2023-01-15 11:34:40","1673780855","2023-01-15 12:07:35");
INSERT INTO syslogs VALUES("164","Administrator","1673780863","2023-01-15 12:07:43","1673782863","2023-01-15 12:41:03");
INSERT INTO syslogs VALUES("165","Administrator","1673782870","2023-01-15 12:41:10","1673783936","2023-01-15 12:58:56");
INSERT INTO syslogs VALUES("166","Administrator","1673783943","2023-01-15 12:59:03","1673786944","2023-01-15 13:49:04");
INSERT INTO syslogs VALUES("167","Administrator","1673786951","2023-01-15 13:49:11","1673787129","2023-01-15 13:52:09");
INSERT INTO syslogs VALUES("168","Administrator","1673787137","2023-01-15 13:52:17","1673803799","2023-01-15 18:29:59");
INSERT INTO syslogs VALUES("169","Administrator","1673803807","2023-01-15 18:30:07","1673806010","2023-01-15 19:06:50");
INSERT INTO syslogs VALUES("170","Administrator","1673806024","2023-01-15 19:07:04","1673807678","2023-01-15 19:34:38");
INSERT INTO syslogs VALUES("171","Administrator","1673807686","2023-01-15 19:34:46","1673807846","2023-01-15 19:37:26");
INSERT INTO syslogs VALUES("172","Administrator","1673807855","2023-01-15 19:37:35","1673808135","2023-01-15 19:42:15");
INSERT INTO syslogs VALUES("173","Administrator","1673808171","2023-01-15 19:42:51","1673808416","2023-01-15 19:46:56");
INSERT INTO syslogs VALUES("174","Administrator","1673896965","2023-01-16 20:22:45","1673899963","2023-01-16 21:12:43");
INSERT INTO syslogs VALUES("175","Administrator","1673899972","2023-01-16 21:12:52","1673901093","2023-01-16 21:31:33");
INSERT INTO syslogs VALUES("176","Administrator","1673901116","2023-01-16 21:31:56","1673902376","2023-01-16 21:52:56");
INSERT INTO syslogs VALUES("177","User","1673902383","2023-01-16 21:53:03","1673902387","2023-01-16 21:53:07");
INSERT INTO syslogs VALUES("178","Administrator","1673902396","2023-01-16 21:53:16","1673902441","2023-01-16 21:54:01");
INSERT INTO syslogs VALUES("179","user","1673902447","2023-01-16 21:54:07","1673902505","2023-01-16 21:55:05");
INSERT INTO syslogs VALUES("180","User","1673902511","2023-01-16 21:55:11","1673903304","2023-01-16 22:08:24");
INSERT INTO syslogs VALUES("181","Administrator","1673903344","2023-01-16 22:09:04","1673903978","2023-01-16 22:19:38");
INSERT INTO syslogs VALUES("182","Administrator","1673906793","2023-01-16 23:06:33","1673907128","2023-01-16 23:12:08");
INSERT INTO syslogs VALUES("183","Administrator","1673969949","2023-01-17 16:39:09","1673972798","2023-01-17 17:26:38");
INSERT INTO syslogs VALUES("184","Administrator","1673972806","2023-01-17 17:26:46","1673973006","2023-01-17 17:30:06");
INSERT INTO syslogs VALUES("185","Administrator","1673973270","2023-01-17 17:34:30","1673973582","2023-01-17 17:39:42");
INSERT INTO syslogs VALUES("186","Administrator","1673973630","2023-01-17 17:40:30","1673973686","2023-01-17 17:41:26");
INSERT INTO syslogs VALUES("187","User","1673973693","2023-01-17 17:41:33","1673973737","2023-01-17 17:42:17");
INSERT INTO syslogs VALUES("188","Administrator","1673973879","2023-01-17 17:44:39","1673974778","2023-01-17 17:59:38");
INSERT INTO syslogs VALUES("189","Administrator","1673982256","2023-01-17 20:04:16","1673982649","2023-01-17 20:10:49");
INSERT INTO syslogs VALUES("190","Administrator","1673984057","2023-01-17 20:34:17","1673984060","2023-01-17 20:34:20");
INSERT INTO syslogs VALUES("191","Administrator","1673985700","2023-01-17 21:01:40","1673985778","2023-01-17 21:02:58");
INSERT INTO syslogs VALUES("192","Administrator","1673986510","2023-01-17 21:15:10","1673986613","2023-01-17 21:16:53");
INSERT INTO syslogs VALUES("193","Administrator","1673986628","2023-01-17 21:17:08","1673986645","2023-01-17 21:17:25");
INSERT INTO syslogs VALUES("194","User","1673986651","2023-01-17 21:17:31","1673986655","2023-01-17 21:17:35");
INSERT INTO syslogs VALUES("195","User","1673986661","2023-01-17 21:17:41","1673986670","2023-01-17 21:17:50");
INSERT INTO syslogs VALUES("196","Administrator","1673986800","2023-01-17 21:20:00","1673988019","2023-01-17 21:40:19");
INSERT INTO syslogs VALUES("197","Administrator","1673988066","2023-01-17 21:41:06","1673988247","2023-01-17 21:44:07");
INSERT INTO syslogs VALUES("198","User","1673988255","2023-01-17 21:44:15","1673988258","2023-01-17 21:44:18");
INSERT INTO syslogs VALUES("202","Administrator","1674055236","2023-01-18 16:20:36","1674055376","2023-01-18 16:22:56");
INSERT INTO syslogs VALUES("203","Administrator","1674055383","2023-01-18 16:23:03","1674069872","2023-01-18 20:24:32");
INSERT INTO syslogs VALUES("205","Administrator","1674069918","2023-01-18 20:25:18","1674157900","2023-01-19 20:51:40");
INSERT INTO syslogs VALUES("206","Administrator","1674157908","2023-01-19 20:51:48","1674160517","2023-01-19 21:35:17");
INSERT INTO syslogs VALUES("207","Administrator","1674207272","2023-01-20 10:34:32","1674211724","2023-01-20 11:48:44");
INSERT INTO syslogs VALUES("208","Administrator","1674211737","2023-01-20 11:48:57","1674211748","2023-01-20 11:49:08");
INSERT INTO syslogs VALUES("209","Administrator","1674212140","2023-01-20 11:55:40","1674212475","2023-01-20 12:01:15");
INSERT INTO syslogs VALUES("210","Administrator","1674218573","2023-01-20 13:42:53","1674219191","2023-01-20 13:53:11");
INSERT INTO syslogs VALUES("211","User","1674218954","2023-01-20 13:49:14","1674218966","2023-01-20 13:49:26");
INSERT INTO syslogs VALUES("212","Administrator","1674224974","2023-01-20 15:29:34","1674296353","2023-01-21 11:19:13");
INSERT INTO syslogs VALUES("213","User","1674226583","2023-01-20 15:56:23","1674233393","2023-01-20 17:49:53");
INSERT INTO syslogs VALUES("217","User","1674237244","2023-01-20 18:54:04","1674296350","2023-01-21 11:19:10");
INSERT INTO syslogs VALUES("218","Administrator","1674296368","2023-01-21 11:19:28","1674296662","2023-01-21 11:24:22");
INSERT INTO syslogs VALUES("219","User","1674296668","2023-01-21 11:24:28","1674300671","2023-01-21 12:31:11");
INSERT INTO syslogs VALUES("220","Administrator","1674300681","2023-01-21 12:31:21","1674300692","2023-01-21 12:31:32");
INSERT INTO syslogs VALUES("222","Administrator","1674303662","2023-01-21 13:21:02","1674303694","2023-01-21 13:21:34");
INSERT INTO syslogs VALUES("224","Administrator","1674303740","2023-01-21 13:22:20","1674311110","2023-01-21 15:25:10");
INSERT INTO syslogs VALUES("226","User","1674311125","2023-01-21 15:25:25","1674316544","2023-01-21 16:55:44");
INSERT INTO syslogs VALUES("227","User","1674316575","2023-01-21 16:56:15","1674317596","2023-01-21 17:13:16");
INSERT INTO syslogs VALUES("228","Administrator","1674316922","2023-01-21 17:02:02","1674316973","2023-01-21 17:02:53");
INSERT INTO syslogs VALUES("229","Administrator","1674317327","2023-01-21 17:08:47","1674317589","2023-01-21 17:13:09");
INSERT INTO syslogs VALUES("232","Administrator","1674317794","2023-01-21 17:16:34","1674317823","2023-01-21 17:17:03");
INSERT INTO syslogs VALUES("233","User","1674317831","2023-01-21 17:17:11","1674320256","2023-01-21 17:57:36");
INSERT INTO syslogs VALUES("234","Administrator","1674320280","2023-01-21 17:58:00","1674320309","2023-01-21 17:58:29");
INSERT INTO syslogs VALUES("235","Administrator","1674320412","2023-01-21 18:00:12","1674320423","2023-01-21 18:00:23");
INSERT INTO syslogs VALUES("236","User","1674320436","2023-01-21 18:00:36","1674343829","2023-01-22 00:30:29");
INSERT INTO syslogs VALUES("237","Administrator","1674343847","2023-01-22 00:30:47","1674344009","2023-01-22 00:33:29");
INSERT INTO syslogs VALUES("238","User","1674344084","2023-01-22 00:34:44","1674345811","2023-01-22 01:03:31");
INSERT INTO syslogs VALUES("239","Administrator","1674345825","2023-01-22 01:03:45","1674345860","2023-01-22 01:04:20");
INSERT INTO syslogs VALUES("240","User","1674345911","2023-01-22 01:05:11","1674346211","2023-01-22 01:10:11");
INSERT INTO syslogs VALUES("241","User","1674380214","2023-01-22 10:36:54","1674402317","2023-01-22 16:45:17");
INSERT INTO syslogs VALUES("242","Administrator","1674402340","2023-01-22 16:45:40","1674402411","2023-01-22 16:46:51");
INSERT INTO syslogs VALUES("244","User","1674402545","2023-01-22 16:49:05","1674404839","2023-01-22 17:27:19");
INSERT INTO syslogs VALUES("245","Administrator","1674404868","2023-01-22 17:27:48","1674404883","2023-01-22 17:28:03");
INSERT INTO syslogs VALUES("247","User","1674407550","2023-01-22 18:12:30","1674411709","2023-01-22 19:21:49");
INSERT INTO syslogs VALUES("248","Administrator","1674411735","2023-01-22 19:22:15","1674411743","2023-01-22 19:22:23");
INSERT INTO syslogs VALUES("249","Administrator","1674411765","2023-01-22 19:22:45","1674411784","2023-01-22 19:23:04");
INSERT INTO syslogs VALUES("250","User","1674411790","2023-01-22 19:23:10","1674413603","2023-01-22 19:53:23");
INSERT INTO syslogs VALUES("251","User","1674413870","2023-01-22 19:57:50","1674413877","2023-01-22 19:57:57");
INSERT INTO syslogs VALUES("252","Administrator","1674413884","2023-01-22 19:58:04","1674420302","2023-01-22 21:45:02");
INSERT INTO syslogs VALUES("253","Administrator","1674495036","2023-01-23 18:30:36","1674495622","2023-01-23 18:40:22");
INSERT INTO syslogs VALUES("254","User","1674495631","2023-01-23 18:40:31","1674495658","2023-01-23 18:40:58");
INSERT INTO syslogs VALUES("255","Administrator","1674495667","2023-01-23 18:41:07","1674495670","2023-01-23 18:41:10");
INSERT INTO syslogs VALUES("256","User","1674495676","2023-01-23 18:41:16","1674500666","2023-01-23 20:04:26");
INSERT INTO syslogs VALUES("257","Administrator","1674502792","2023-01-23 20:39:52","1674503136","2023-01-23 20:45:36");
INSERT INTO syslogs VALUES("258","Administrator","1674510341","2023-01-23 22:45:41","1674511048","2023-01-23 22:57:28");
INSERT INTO syslogs VALUES("259","User","1674511057","2023-01-23 22:57:37","1674512640","2023-01-23 23:24:00");
INSERT INTO syslogs VALUES("260","Administrator","1674514615","2023-01-23 23:56:55","1674514621","2023-01-23 23:57:01");
INSERT INTO syslogs VALUES("261","User","1674514629","2023-01-23 23:57:09","1674514691","2023-01-23 23:58:11");
INSERT INTO syslogs VALUES("262","Administrator","1674514709","2023-01-23 23:58:29","1674515202","2023-01-24 00:06:42");
INSERT INTO syslogs VALUES("263","User","1674515461","2023-01-24 00:11:01","1674516137","2023-01-24 00:22:17");
INSERT INTO syslogs VALUES("264","User","1674574989","2023-01-24 16:43:09","1674575590","2023-01-24 16:53:10");
INSERT INTO syslogs VALUES("265","Administrator","1674575600","2023-01-24 16:53:20","1674575617","2023-01-24 16:53:37");
INSERT INTO syslogs VALUES("266","User","1674575624","2023-01-24 16:53:44","1674575846","2023-01-24 16:57:26");
INSERT INTO syslogs VALUES("267","User","1674576475","2023-01-24 17:07:55","1674578595","2023-01-24 17:43:15");
INSERT INTO syslogs VALUES("268","Administrator","1674579389","2023-01-24 17:56:29","1674579410","2023-01-24 17:56:50");
INSERT INTO syslogs VALUES("269","Administrator","1674579439","2023-01-24 17:57:19","1674579717","2023-01-24 18:01:57");
INSERT INTO syslogs VALUES("270","Administrator","1674579729","2023-01-24 18:02:09","1674579735","2023-01-24 18:02:15");
INSERT INTO syslogs VALUES("271","Administrator","1674579765","2023-01-24 18:02:45","1674579976","2023-01-24 18:06:16");
INSERT INTO syslogs VALUES("272","Administrator","1674580002","2023-01-24 18:06:42","1674580016","2023-01-24 18:06:56");
INSERT INTO syslogs VALUES("273","Administrator","1674580024","2023-01-24 18:07:04","","");



CREATE TABLE `users` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `AccountType` enum('Admin','User') NOT NULL,
  `DateOfCreation` datetime NOT NULL,
  `VerificationCode` int(50) NOT NULL,
  `IsActivated` enum('Active','Inactive') NOT NULL,
  `IsLocked` enum('Locked','Unlocked') NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO users VALUES("77","Roko","Terze","roko_terze@outlook.com","User","$2y$10$OmyCt.Q1tJszgqYchoArCeoj41c6/MfEZ8Ijjb/L187WDnL8Bq9ku","User","2022-12-29 18:45:41","71480","Active","Locked");
INSERT INTO users VALUES("79","Mate","Matic","mate@mate.hr","mate","$2y$10$QOas5ddB2.7lUIlq0RBl2O6WluD2b.yjqF3iac4qlOa2/DsO78uem","Admin","2023-01-03 11:36:22","98715","Active","Unlocked");
INSERT INTO users VALUES("80","Ivo","Ivic","ivo@ivo.hr","ivo","$2y$10$Pfeuv9agDgWqepJiSxHZ5OrFtG9vak3HMzaQCkcTYR02sof2.qbfC","User","2023-01-03 11:36:53","38700","Inactive","Unlocked");
INSERT INTO users VALUES("81","Ante","Antic","ante@ante.hr","ante","$2y$10$uIsDbUgvL9V2Xt1XLJmd9OOerpZzy3YwuuhVEN94.kYPMoJKxTYIm","User","2023-01-03 11:37:18","92119","Active","Unlocked");
INSERT INTO users VALUES("82","Kreso","Kresic","kreso@kreso.hr","kreso","$2y$10$gyPluq8Vi5GoTP4sA0H8JO7P201qwdVlWSCBaZjeB5/S3iLh8NOQm","User","2023-01-03 13:13:19","31192","Inactive","Unlocked");
INSERT INTO users VALUES("83","Ivan","Ivanic","ivan@ivan.hr","ivan","$2y$10$pJZAbjsvmO3gLyzHUeVKxu.d07KRKYbIsFcokTUqL6OsMv2lWOjgG","User","2023-01-03 13:13:45","22303","Active","Unlocked");
INSERT INTO users VALUES("84","Pero","Peric","pero@pero.hr","pero","$2y$10$tCPslNo1Uu8l3e5ga48BceS.uInMJDTL/G5LqA4o54Q80ZpM0LqM6","Admin","2023-01-03 13:14:06","24559","Inactive","Unlocked");
INSERT INTO users VALUES("85","Frane","Franic","frane@frane.hr","frane","$2y$10$kSO4gkZcZZH8nbF34rN8uuXLvUrau9Em/Q.RvxGRL.P/Nu/a9RT6y","User","2023-01-03 15:13:24","79293","Active","Unlocked");
INSERT INTO users VALUES("88","Ivana","Ivic","ivan2@ivan.hr","ivana","$2y$10$ZmeoYREl08fqsna5809TMev3XSjnjUJ76nznEDxFvqk8/99TJbM9W","User","2023-01-03 16:06:56","49177","Active","Unlocked");
INSERT INTO users VALUES("89","Matej","Matic","mate@matej.com","matej","$2y$10$2x6w2zQngq4XcoWp4lgAve.XQrKsEIgnNJzf03wh/soYJrhW..NFC","User","2023-01-03 16:07:38","23069","Inactive","Locked");
INSERT INTO users VALUES("90","Hrvoje","Hrvojic","hrvoje@hrvoje.hr","hrvoje","$2y$10$K4xu/cOWb8HTo/WaSXzm/.HK/8k1G3CQzMRc88jqqo8RR1tAYTgCO","User","2023-01-03 16:08:07","60972","Inactive","Locked");
INSERT INTO users VALUES("91","Jerko","Jerkic","jerko@jerko.com","jerko","$2y$10$7JMNAL3nMRUJFR0ug9dEuuOxLYvxeuIveVxkjT6jueZCW4R9wGlya","User","2023-01-03 16:08:31","12345","Active","Locked");
INSERT INTO users VALUES("93","Roko","Terze","rterze1993@gmail.com","Administrator","$2y$10$0heg3cFIxWZEOa3i7QQNvu8uDialTj5LiHvx2AzatVTLXOUCFAkGW","Admin","2023-01-12 20:57:18","33218","Active","Unlocked");



CREATE TABLE `vehicledatabase` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Make` varchar(255) NOT NULL,
  `Model` varchar(255) NOT NULL,
  `Plate` varchar(255) NOT NULL,
  `Price` int(10) NOT NULL,
  `Type` enum('Car','Bicycle','Scooter') NOT NULL,
  `DateOfCreation` datetime NOT NULL,
  `Username` varchar(25) NOT NULL,
  `IsActive` enum('Active','Inactive') NOT NULL,
  `IsAvailable` enum('Available','Not Available') NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO vehicledatabase VALUES("8","Mercedes","E270","ST8744AV","50","Car","2023-01-21 13:25:40","User","Inactive","Available");
INSERT INTO vehicledatabase VALUES("9","Renault","Clio","ST554AA","70","Car","2023-01-21 13:26:04","User","Active","Not Available");
INSERT INTO vehicledatabase VALUES("10","Seat","Ibiza","ST5578AS","70","Car","2023-01-21 13:26:21","User","Active","Available");
INSERT INTO vehicledatabase VALUES("11","Volkswagen","Passat","ST7824PP","75","Car","2023-01-21 13:39:12","User","Active","Available");
INSERT INTO vehicledatabase VALUES("12","Rimac","Greyp","RI001","15","Bicycle","2023-01-21 16:59:20","User","Active","Available");
INSERT INTO vehicledatabase VALUES("13","Rimac","Greyp","RI002","15","Bicycle","2023-01-21 17:18:15","User","Active","Available");
INSERT INTO vehicledatabase VALUES("14","Rimac","Greyp","RI003","15","Bicycle","2023-01-21 17:18:37","User","Active","Available");
INSERT INTO vehicledatabase VALUES("15","Piaggio","Beverly","ST887SD","25","Scooter","2023-01-21 17:19:16","User","Active","Available");
INSERT INTO vehicledatabase VALUES("16","Piaggio","Liberty","ST8054A","20","Scooter","2023-01-21 17:19:34","User","Active","Available");
INSERT INTO vehicledatabase VALUES("17","Audi","A4","ST9911F","50","Car","2023-01-22 12:41:28","User","Active","Available");
INSERT INTO vehicledatabase VALUES("18","Audi","A6","ST8854A","65","Car","2023-01-22 13:15:39","User","Active","Available");
INSERT INTO vehicledatabase VALUES("19","Audi","A8","ST911F","80","Car","2023-01-22 16:27:57","User","Active","Available");
INSERT INTO vehicledatabase VALUES("20","Ford","Mustang","ST716FM","100","Car","2023-01-22 16:43:55","User","Active","Available");
INSERT INTO vehicledatabase VALUES("22","Renault","Megane","ST777AA","50","Car","2023-01-22 19:50:22","User","Active","Not Available");
INSERT INTO vehicledatabase VALUES("23","Mercedes","E550","ST9235BA","120","Car","2023-01-24 17:13:26","User","Active","Not Available");
INSERT INTO vehicledatabase VALUES("24","Kia","Ceed","ST552AG","40","Car","2023-01-24 17:13:57","User","Active","Not Available");



CREATE TABLE `vehiclerenting` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `CustomerName` varchar(255) NOT NULL,
  `CustomerSurname` varchar(255) NOT NULL,
  `CustomerOIB` bigint(25) NOT NULL,
  `Plate` varchar(255) NOT NULL,
  `CheckinDate` date NOT NULL,
  `CheckoutDate` date NOT NULL,
  `TotalPrice` int(10) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `IsActive` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO vehiclerenting VALUES("1","Roko","Terze","9632587410","ST552AG","2023-01-24","2023-01-29","200","User","Active");
INSERT INTO vehiclerenting VALUES("2","Roko","Terze","1234567890","ST9235BA","2023-01-24","2023-01-31","840","User","Active");
INSERT INTO vehiclerenting VALUES("3","Roko","Terze","9854712305","ST777AA","2023-01-24","2023-01-27","150","User","Active");

