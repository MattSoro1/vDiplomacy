<?php
// This is file installs the map data for the Edwardian3 variant
defined('IN_CODE') or die('This script can not be run by itself.');
require_once("variants/install.php");

InstallTerritory::$Territories=array();
$countries=$this->countries;
$territoryRawData=array(
	array('Iceland', 'Coast', 'No', 0, 400, 136, 155, 47),
	array('Edinburgh', 'Coast', 'Yes', 2, 497, 510, 187, 192),
	array('Belfast', 'Coast', 'Yes', 2, 337, 595, 120, 238),
	array('Liverpool', 'Coast', 'Yes', 2, 453, 633, 172, 227),
	array('Wales', 'Coast', 'No', 2, 417, 677, 156, 255),
	array('London', 'Coast', 'Yes', 2, 508, 724, 164, 281),
	array('Yorkshire', 'Coast', 'No', 2, 493, 653, 189, 240),
	array('Norway', 'Coast', 'Yes', 0, 740, 470, 276, 164),
	array('Sweden', 'Coast', 'Yes', 0, 857, 591, 336, 137),
	array('Finland', 'Coast', 'No', 6, 1084, 200, 405, 149),
	array('Finnmark', 'Coast', 'No', 0, 970, 120, 365, 42),
	array('St. Petersburg', 'Coast', 'Yes', 6, 1288, 479, 483, 173),
	array('St. Petersburg (North Coast)', 'Coast', 'No', 6, 1318, 296, 509, 103),
	array('St. Petersburg (South Coast)', 'Coast', 'No', 6, 1180, 516, 446, 193),
	array('Moscow', 'Land', 'Yes', 6, 1218, 684, 567, 216),
	array('Riga', 'Coast', 'Yes', 6, 1098, 526, 411, 194),
	array('Courland', 'Coast', 'No', 6, 1041, 620, 392, 234),
	array('Ukraine', 'Land', 'No', 6, 1290, 798, 497, 311),
	array('Ciscaucasia', 'Coast', 'No', 6, 1688, 1086, 601, 343),
	array('Sevastopol', 'Coast', 'Yes', 6, 1368, 1024, 497, 357),
	array('Kiev', 'Land', 'Yes', 6, 1214, 891, 445, 331),
	array('Warsaw', 'Land', 'Yes', 6, 1039, 783, 396, 303),
	array('Bessarabia', 'Coast', 'No', 6, 1229, 996, 462, 378),
	array('Prussia', 'Coast', 'No', 4, 1008, 700, 359, 267),
	array('Silesia', 'Land', 'No', 4, 929, 838, 336, 307),
	array('Berlin', 'Coast', 'Yes', 4, 869, 728, 322, 284),
	array('Bavaria', 'Land', 'No', 4, 756, 879, 289, 336),
	array('Dresden', 'Land', 'Yes', 4, 780, 797, 295, 308),
	array('Stuttgart', 'Land', 'Yes', 4, 688, 909, 262, 344),
	array('Alsace', 'Land', 'No', 4, 655, 904, 243, 335),
	array('Essen', 'Land', 'Yes', 4, 654, 811, 244, 307),
	array('Frankfurt', 'Land', 'Yes', 4, 715, 814, 267, 309),
	array('Hanover', 'Coast', 'No', 4, 705, 724, 279, 287),
	array('Kiel', 'Coast', 'Yes', 4, 738, 667, 298, 266),
	array('Denmark', 'Coast', 'Yes', 0, 793, 644, 281, 235),
	array('Bohemia', 'Land', 'No', 1, 894, 887, 316, 329),
	array('Galicia', 'Land', 'No', 1, 1088, 896, 411, 333),
	array('Budapest', 'Land', 'Yes', 1, 1003, 957, 379, 354),
	array('Vienna', 'Land', 'Yes', 1, 866, 951, 325, 363),
	array('Tyrol', 'Land', 'No', 1, 745, 989, 288, 364),
	array('Trieste', 'Coast', 'Yes', 1, 806, 1064, 312, 390),
	array('Zagreb', 'Coast', 'Yes', 1, 851, 1104, 320, 410),
	array('Bosnia', 'Land', 'No', 1, 913, 1122, 348, 414),
	array('Transylvania', 'Land', 'No', 1, 1065, 1037, 390, 394),
	array('Rumania', 'Coast', 'Yes', 0, 1210, 1083, 428, 396),
	array('Bulgaria', 'Coast', 'Yes', 0, 1183, 1141, 441, 431),
	array('Serbia', 'Land', 'Yes', 0, 1034, 1143, 384, 420),
	array('Montenegro', 'Coast', 'Yes', 0, 950, 1166, 361, 436),
	array('Albania', 'Coast', 'No', 7, 996, 1289, 367, 464),
	array('Greece', 'Coast', 'Yes', 0, 1049, 1377, 394, 497),
	array('Macedonia', 'Coast', 'No', 7, 1045, 1241, 393, 464),
	array('Constantinople', 'Coast', 'Yes', 7, 1194, 1208, 479, 471),
	array('Smyrna', 'Coast', 'Yes', 7, 1241, 1368, 464, 515),
	array('Konya', 'Coast', 'No', 7, 1386, 1372, 520, 514),
	array('Angora', 'Coast', 'No', 7, 1360, 1208, 514, 451),
	array('Erzurum', 'Coast', 'Yes', 7, 1553, 1198, 572, 460),
	array('Van', 'Land', 'No', 7, 1701, 1262, 631, 459),
	array('Persia', 'Coast', 'Yes', 0, 1928, 1406, 697, 492),
	array('Mesopotamia', 'Coast', 'No', 7, 1870, 1516, 683, 554),
	array('Jabal Shammar', 'Coast', 'Yes', 0, 1870, 1677, 708, 631),
	array('Damascus', 'Coast', 'Yes', 7, 1558, 1372, 587, 513),
	array('Hejaz', 'Coast', 'No', 7, 1552, 1714, 585, 645),
	array('Palestine', 'Coast', 'No', 7, 1484, 1562, 563, 593),
	array('Cairo', 'Coast', 'Yes', 2, 1294, 1654, 485, 625),
	array('Cyrenaica', 'Coast', 'No', 0, 1038, 1597, 389, 605),
	array('Tripolitania', 'Coast', 'Yes', 0, 810, 1609, 264, 611),
	array('Tunisia', 'Coast', 'No', 3, 648, 1406, 243, 526),
	array('Algiers', 'Coast', 'Yes', 3, 525, 1386, 149, 517),
	array('Morocco', 'Coast', 'Yes', 0, 180, 1397, 39, 519),
	array('Gibraltar', 'Coast', 'No', 2, 181, 1286, 69, 479),
	array('Spain', 'Coast', 'Yes', 0, 316, 1124, 130, 428),
	array('Spain (North Coast)', 'Coast', 'No', 0, 205, 1023, 86, 389),
	array('Spain (West Coast)', 'Coast', 'No', 0, 170, 1206, 68, 449),
	array('Spain (East Coast)', 'Coast', 'No', 0, 329, 1213, 109, 465),
	array('Portugal', 'Coast', 'Yes', 0, 154, 1083, 58, 404),
	array('Gascony', 'Coast', 'No', 3, 425, 1033, 155, 388),
	array('Marseilles', 'Coast', 'Yes', 3, 521, 1073, 207, 409),
	array('Piedmont', 'Coast', 'No', 5, 638, 1041, 237, 404),
	array('Tuscany', 'Coast', 'No', 5, 721, 1133, 264, 417),
	array('Rome', 'Coast', 'Yes', 5, 775, 1202, 281, 442),
	array('Naples', 'Coast', 'Yes', 5, 841, 1261, 328, 490),
	array('Apulia', 'Coast', 'No', 5, 908, 1251, 308, 444),
	array('Bologna', 'Coast', 'Yes', 5, 754, 1092, 290, 418),
	array('Venetia', 'Coast', 'No', 5, 739, 1046, 287, 386),
	array('Milan', 'Land', 'Yes', 5, 700, 1036, 262, 380),
	array('Switzerland', 'Land', 'Yes', 0, 674, 969, 256, 367),
	array('Lyon', 'Land', 'Yes', 3, 559, 952, 209, 355),
	array('Paris', 'Land', 'Yes', 3, 506, 888, 188, 334),
	array('Brest', 'Coast', 'Yes', 3, 389, 857, 156, 332),
	array('Picardy', 'Coast', 'No', 3, 539, 818, 199, 307),
	array('Lorraine', 'Land', 'No', 3, 593, 871, 224, 322),
	array('Belgium', 'Coast', 'Yes', 0, 585, 788, 216, 292),
	array('Netherlands', 'Coast', 'Yes', 0, 649, 728, 240, 269),
	array('Barents Sea', 'Sea', 'No', 0, 1191, 43, 449, 16),
	array('Norwegian Sea', 'Sea', 'No', 0, 645, 144, 245, 57),
	array('North Atlantic', 'Sea', 'No', 0, 199, 350, 77, 115),
	array('Atlantic', 'Sea', 'No', 0, 130, 786, 45, 288),
	array('Irish Sea', 'Sea', 'No', 0, 393, 624, 148, 235),
	array('English Channel', 'Sea', 'No', 0, 344, 788, 137, 293),
	array('North Sea', 'Sea', 'No', 0, 596, 626, 222, 229),
	array('Helgoland Bight', 'Sea', 'No', 0, 693, 643, 254, 241),
	array('Skagerrak', 'Sea', 'No', 0, 778, 519, 272, 206),
	array('Baltic Sea', 'Sea', 'No', 0, 938, 630, 340, 243),
	array('Gulf of Bothnia', 'Sea', 'No', 0, 995, 504, 375, 182),
	array('Bay of Biscay', 'Sea', 'No', 0, 308, 956, 88, 348),
	array('South Atlantic Ocean', 'Sea', 'No', 0, 46, 1311, 18, 490),
	array('Indian Ocean', 'Sea', 'No', 0, 1978, 1548, 729, 666),
	array('Western Mediterranean', 'Sea', 'No', 0, 519, 1306, 217, 494),
	array('Gulf of Lyon', 'Sea', 'No', 0, 571, 1185, 212, 447),
	array('Tyrrhenian Sea', 'Sea', 'No', 0, 726, 1283, 267, 472),
	array('Central Mediterranean', 'Sea', 'No', 0, 901, 1536, 372, 564),
	array('Ionian Sea', 'Sea', 'No', 0, 934, 1353, 348, 519),
	array('Adriatic Sea', 'Sea', 'No', 0, 893, 1193, 343, 453),
	array('Aegean Sea', 'Sea', 'No', 0, 1121, 1301, 430, 528),
	array('Eastern Mediterranean', 'Sea', 'No', 0, 1330, 1482, 460, 576),
	array('Black Sea', 'Sea', 'No', 0, 1431, 1097, 540, 413),
	array('Clyde', 'Coast', 'No', 2, 475, 459, 178, 172)
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $countryID, $x, $y, $sx, $sy)=$territoryRawRow;
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy);
}
unset($territoryRawData);

$bordersRawData=array(
	array('Iceland','Norwegian Sea','Yes','No'),
	array('Iceland','North Atlantic','Yes','No'),
	array('Edinburgh','Yorkshire','Yes','Yes'),
	array('Edinburgh','Norwegian Sea','Yes','No'),
	array('Edinburgh','North Sea','Yes','No'),
	array('Edinburgh','Clyde','Yes','Yes'),
	array('Belfast','North Atlantic','Yes','No'),
	array('Belfast','Atlantic','Yes','No'),
	array('Belfast','Irish Sea','Yes','No'),
	array('Belfast','Clyde','Yes','Yes'),
	array('Liverpool','Wales','Yes','Yes'),
	array('Liverpool','Yorkshire','No','Yes'),
	array('Liverpool','Irish Sea','Yes','No'),
	array('Liverpool','Clyde','Yes','Yes'),
	array('Wales','London','Yes','Yes'),
	array('Wales','Yorkshire','No','Yes'),
	array('Wales','Atlantic','Yes','No'),
	array('Wales','Irish Sea','Yes','No'),
	array('Wales','English Channel','Yes','No'),
	array('London','Yorkshire','Yes','Yes'),
	array('London','English Channel','Yes','No'),
	array('London','North Sea','Yes','No'),
	array('Yorkshire','North Sea','Yes','No'),
	array('Norway','Sweden','Yes','Yes'),
	array('Norway','Finland','No','Yes'),
	array('Norway','Finnmark','Yes','Yes'),
	array('Norway','Barents Sea','Yes','No'),
	array('Norway','Norwegian Sea','Yes','No'),
	array('Norway','North Sea','Yes','No'),
	array('Norway','Skagerrak','Yes','No'),
	array('Sweden','Finland','Yes','Yes'),
	array('Sweden','Finnmark','No','Yes'),
	array('Sweden','Denmark','Yes','Yes'),
	array('Sweden','Skagerrak','Yes','No'),
	array('Sweden','Baltic Sea','Yes','No'),
	array('Sweden','Gulf of Bothnia','Yes','No'),
	array('Finland','Finnmark','No','Yes'),
	array('Finland','St. Petersburg','No','Yes'),
	array('Finland','St. Petersburg (South Coast)','Yes','No'),
	array('Finland','Gulf of Bothnia','Yes','No'),
	array('Finnmark','St. Petersburg','No','Yes'),
	array('Finnmark','St. Petersburg (North Coast)','Yes','No'),
	array('Finnmark','Barents Sea','Yes','No'),
	array('Finnmark','Norwegian Sea','Yes','No'),
	array('St. Petersburg','Moscow','No','Yes'),
	array('St. Petersburg','Riga','No','Yes'),
	array('St. Petersburg (North Coast)','Barents Sea','Yes','No'),
	array('St. Petersburg (South Coast)','Riga','Yes','No'),
	array('St. Petersburg (South Coast)','Gulf of Bothnia','Yes','No'),
	array('Moscow','Riga','No','Yes'),
	array('Moscow','Courland','No','Yes'),
	array('Moscow','Ukraine','No','Yes'),
	array('Moscow','Ciscaucasia','No','Yes'),
	array('Moscow','Kiev','No','Yes'),
	array('Moscow','Warsaw','No','Yes'),
	array('Riga','Courland','Yes','Yes'),
	array('Riga','Baltic Sea','Yes','No'),
	array('Riga','Gulf of Bothnia','Yes','No'),
	array('Courland','Warsaw','No','Yes'),
	array('Courland','Prussia','Yes','Yes'),
	array('Courland','Baltic Sea','Yes','No'),
	array('Ukraine','Ciscaucasia','No','Yes'),
	array('Ukraine','Sevastopol','No','Yes'),
	array('Ukraine','Kiev','No','Yes'),
	array('Ciscaucasia','Sevastopol','Yes','Yes'),
	array('Ciscaucasia','Erzurum','Yes','Yes'),
	array('Ciscaucasia','Van','No','Yes'),
	array('Ciscaucasia','Persia','No','Yes'),
	array('Ciscaucasia','Black Sea','Yes','No'),
	array('Sevastopol','Kiev','No','Yes'),
	array('Sevastopol','Bessarabia','Yes','Yes'),
	array('Sevastopol','Black Sea','Yes','No'),
	array('Kiev','Warsaw','No','Yes'),
	array('Kiev','Bessarabia','No','Yes'),
	array('Kiev','Galicia','No','Yes'),
	array('Warsaw','Prussia','No','Yes'),
	array('Warsaw','Silesia','No','Yes'),
	array('Warsaw','Galicia','No','Yes'),
	array('Bessarabia','Galicia','No','Yes'),
	array('Bessarabia','Rumania','Yes','Yes'),
	array('Bessarabia','Black Sea','Yes','No'),
	array('Prussia','Silesia','No','Yes'),
	array('Prussia','Berlin','Yes','Yes'),
	array('Prussia','Baltic Sea','Yes','No'),
	array('Silesia','Berlin','No','Yes'),
	array('Silesia','Dresden','No','Yes'),
	array('Silesia','Bohemia','No','Yes'),
	array('Silesia','Galicia','No','Yes'),
	array('Berlin','Dresden','No','Yes'),
	array('Berlin','Hanover','No','Yes'),
	array('Berlin','Kiel','Yes','Yes'),
	array('Berlin','Baltic Sea','Yes','No'),
	array('Bavaria','Dresden','No','Yes'),
	array('Bavaria','Stuttgart','No','Yes'),
	array('Bavaria','Frankfurt','No','Yes'),
	array('Bavaria','Bohemia','No','Yes'),
	array('Bavaria','Tyrol','No','Yes'),
	array('Bavaria','Switzerland','No','Yes'),
	array('Dresden','Stuttgart','No','Yes'),
	array('Dresden','Frankfurt','No','Yes'),
	array('Stuttgart','Alsace','No','Yes'),
	array('Stuttgart','Essen','No','Yes'),
	array('Stuttgart','Frankfurt','No','Yes'),
	array('Stuttgart','Bohemia','No','Yes'),
	array('Stuttgart','Switzerland','No','Yes'),
	array('Alsace','Essen','No','Yes'),
	array('Alsace','Switzerland','No','Yes'),
	array('Alsace','Lyon','No','Yes'),
	array('Alsace','Lorraine','No','Yes'),
	array('Alsace','Belgium','No','Yes'),
	array('Essen','Frankfurt','No','Yes'),
	array('Essen','Hanover','No','Yes'),
	array('Essen','Belgium','No','Yes'),
	array('Essen','Netherlands','No','Yes'),
	array('Frankfurt','Hanover','No','Yes'),
	array('Hanover','Kiel','Yes','Yes'),
	array('Hanover','Netherlands','Yes','Yes'),
	array('Hanover','Helgoland Bight','Yes','No'),
	array('Kiel','Denmark','Yes','Yes'),
	array('Kiel','Helgoland Bight','Yes','No'),
	array('Kiel','Baltic Sea','Yes','No'),
	array('Denmark','North Sea','Yes','No'),
	array('Denmark','Helgoland Bight','Yes','No'),
	array('Denmark','Skagerrak','Yes','No'),
	array('Denmark','Baltic Sea','Yes','No'),
	array('Bohemia','Galicia','No','Yes'),
	array('Bohemia','Budapest','No','Yes'),
	array('Bohemia','Vienna','No','Yes'),
	array('Bohemia','Tyrol','No','Yes'),
	array('Galicia','Budapest','No','Yes'),
	array('Galicia','Transylvania','No','Yes'),
	array('Galicia','Rumania','No','Yes'),
	array('Budapest','Vienna','No','Yes'),
	array('Budapest','Zagreb','No','Yes'),
	array('Budapest','Transylvania','No','Yes'),
	array('Vienna','Tyrol','No','Yes'),
	array('Vienna','Trieste','No','Yes'),
	array('Vienna','Zagreb','No','Yes'),
	array('Tyrol','Trieste','No','Yes'),
	array('Tyrol','Venetia','No','Yes'),
	array('Tyrol','Milan','No','Yes'),
	array('Tyrol','Switzerland','No','Yes'),
	array('Trieste','Zagreb','Yes','Yes'),
	array('Trieste','Venetia','Yes','Yes'),
	array('Trieste','Adriatic Sea','Yes','No'),
	array('Zagreb','Bosnia','No','Yes'),
	array('Zagreb','Transylvania','No','Yes'),
	array('Zagreb','Serbia','No','Yes'),
	array('Zagreb','Montenegro','Yes','Yes'),
	array('Zagreb','Adriatic Sea','Yes','No'),
	array('Bosnia','Serbia','No','Yes'),
	array('Bosnia','Montenegro','No','Yes'),
	array('Bosnia','Macedonia','No','Yes'),
	array('Transylvania','Rumania','No','Yes'),
	array('Transylvania','Serbia','No','Yes'),
	array('Rumania','Bulgaria','Yes','Yes'),
	array('Rumania','Serbia','No','Yes'),
	array('Rumania','Black Sea','Yes','No'),
	array('Bulgaria','Serbia','No','Yes'),
	array('Bulgaria','Macedonia','No','Yes'),
	array('Bulgaria','Constantinople','Yes','Yes'),
	array('Bulgaria','Black Sea','Yes','No'),
	array('Serbia','Macedonia','No','Yes'),
	array('Montenegro','Albania','Yes','Yes'),
	array('Montenegro','Macedonia','No','Yes'),
	array('Montenegro','Adriatic Sea','Yes','No'),
	array('Albania','Greece','Yes','Yes'),
	array('Albania','Macedonia','No','Yes'),
	array('Albania','Ionian Sea','Yes','No'),
	array('Albania','Adriatic Sea','Yes','No'),
	array('Greece','Macedonia','Yes','Yes'),
	array('Greece','Central Mediterranean','Yes','No'),
	array('Greece','Ionian Sea','Yes','No'),
	array('Greece','Aegean Sea','Yes','No'),
	array('Macedonia','Constantinople','Yes','Yes'),
	array('Macedonia','Aegean Sea','Yes','No'),
	array('Constantinople','Smyrna','Yes','Yes'),
	array('Constantinople','Konya','No','Yes'),
	array('Constantinople','Angora','Yes','Yes'),
	array('Constantinople','Aegean Sea','Yes','No'),
	array('Constantinople','Black Sea','Yes','No'),
	array('Smyrna','Konya','Yes','Yes'),
	array('Smyrna','Aegean Sea','Yes','No'),
	array('Konya','Angora','No','Yes'),
	array('Konya','Erzurum','No','Yes'),
	array('Konya','Damascus','Yes','Yes'),
	array('Konya','Aegean Sea','Yes','No'),
	array('Konya','Eastern Mediterranean','Yes','No'),
	array('Angora','Erzurum','Yes','Yes'),
	array('Angora','Black Sea','Yes','No'),
	array('Erzurum','Van','No','Yes'),
	array('Erzurum','Mesopotamia','No','Yes'),
	array('Erzurum','Damascus','No','Yes'),
	array('Erzurum','Black Sea','Yes','No'),
	array('Van','Persia','No','Yes'),
	array('Van','Mesopotamia','No','Yes'),
	array('Persia','Mesopotamia','Yes','Yes'),
	array('Persia','Indian Ocean','Yes','No'),
	array('Mesopotamia','Jabal Shammar','Yes','Yes'),
	array('Mesopotamia','Damascus','No','Yes'),
	array('Mesopotamia','Indian Ocean','Yes','No'),
	array('Jabal Shammar','Hejaz','Yes','Yes'),
	array('Jabal Shammar','Indian Ocean','Yes','No'),
	array('Damascus','Hejaz','No','Yes'),
	array('Damascus','Palestine','Yes','Yes'),
	array('Damascus','Eastern Mediterranean','Yes','No'),
	array('Hejaz','Palestine','No','Yes'),
	array('Hejaz','Cairo','Yes','Yes'),
	array('Hejaz','Indian Ocean','Yes','No'),
	array('Palestine','Cairo','Yes','Yes'),
	array('Palestine','Eastern Mediterranean','Yes','No'),
	array('Cairo','Cyrenaica','Yes','Yes'),
	array('Cairo','South Atlantic Ocean','Yes','No'),
	array('Cairo','Indian Ocean','Yes','No'),
	array('Cairo','Eastern Mediterranean','Yes','No'),
	array('Cyrenaica','Tripolitania','Yes','Yes'),
	array('Cyrenaica','Central Mediterranean','Yes','No'),
	array('Cyrenaica','Eastern Mediterranean','Yes','No'),
	array('Tripolitania','Tunisia','Yes','Yes'),
	array('Tripolitania','Central Mediterranean','Yes','No'),
	array('Tunisia','Algiers','Yes','Yes'),
	array('Tunisia','Western Mediterranean','Yes','No'),
	array('Tunisia','Tyrrhenian Sea','Yes','No'),
	array('Tunisia','Central Mediterranean','Yes','No'),
	array('Algiers','Morocco','Yes','Yes'),
	array('Algiers','Western Mediterranean','Yes','No'),
	array('Morocco','Gibraltar','Yes','Yes'),
	array('Morocco','South Atlantic Ocean','Yes','No'),
	array('Morocco','Western Mediterranean','Yes','No'),
	array('Gibraltar','Spain','No','Yes'),
	array('Gibraltar','Spain (West Coast)','Yes','No'),
	array('Gibraltar','Spain (East Coast)','Yes','No'),
	array('Gibraltar','South Atlantic Ocean','Yes','No'),
	array('Gibraltar','Western Mediterranean','Yes','No'),
	array('Spain','Portugal','No','Yes'),
	array('Spain','Gascony','No','Yes'),
	array('Spain','Marseilles','No','Yes'),
	array('Spain (North Coast)','Portugal','Yes','No'),
	array('Spain (North Coast)','Gascony','Yes','No'),
	array('Spain (North Coast)','Bay of Biscay','Yes','No'),
	array('Spain (West Coast)','Portugal','Yes','No'),
	array('Spain (West Coast)','South Atlantic Ocean','Yes','No'),
	array('Spain (East Coast)','Marseilles','Yes','No'),
	array('Spain (East Coast)','Western Mediterranean','Yes','No'),
	array('Spain (East Coast)','Gulf of Lyon','Yes','No'),
	array('Portugal','Bay of Biscay','Yes','No'),
	array('Portugal','South Atlantic Ocean','Yes','No'),
	array('Gascony','Marseilles','No','Yes'),
	array('Gascony','Lyon','No','Yes'),
	array('Gascony','Paris','No','Yes'),
	array('Gascony','Brest','Yes','Yes'),
	array('Gascony','Bay of Biscay','Yes','No'),
	array('Marseilles','Piedmont','Yes','Yes'),
	array('Marseilles','Lyon','No','Yes'),
	array('Marseilles','Gulf of Lyon','Yes','No'),
	array('Piedmont','Tuscany','Yes','Yes'),
	array('Piedmont','Bologna','No','Yes'),
	array('Piedmont','Milan','No','Yes'),
	array('Piedmont','Switzerland','No','Yes'),
	array('Piedmont','Lyon','No','Yes'),
	array('Piedmont','Gulf of Lyon','Yes','No'),
	array('Tuscany','Rome','Yes','Yes'),
	array('Tuscany','Bologna','No','Yes'),
	array('Tuscany','Gulf of Lyon','Yes','No'),
	array('Tuscany','Tyrrhenian Sea','Yes','No'),
	array('Rome','Naples','Yes','Yes'),
	array('Rome','Apulia','No','Yes'),
	array('Rome','Bologna','No','Yes'),
	array('Rome','Tyrrhenian Sea','Yes','No'),
	array('Naples','Apulia','Yes','Yes'),
	array('Naples','Tyrrhenian Sea','Yes','No'),
	array('Naples','Central Mediterranean','Yes','No'),
	array('Naples','Ionian Sea','Yes','No'),
	array('Apulia','Bologna','Yes','Yes'),
	array('Apulia','Ionian Sea','Yes','No'),
	array('Apulia','Adriatic Sea','Yes','No'),
	array('Bologna','Venetia','Yes','Yes'),
	array('Bologna','Milan','No','Yes'),
	array('Bologna','Adriatic Sea','Yes','No'),
	array('Venetia','Milan','No','Yes'),
	array('Venetia','Adriatic Sea','Yes','No'),
	array('Milan','Switzerland','No','Yes'),
	array('Switzerland','Lyon','No','Yes'),
	array('Lyon','Paris','No','Yes'),
	array('Lyon','Lorraine','No','Yes'),
	array('Paris','Brest','No','Yes'),
	array('Paris','Picardy','No','Yes'),
	array('Paris','Lorraine','No','Yes'),
	array('Brest','Picardy','Yes','Yes'),
	array('Brest','English Channel','Yes','No'),
	array('Brest','Bay of Biscay','Yes','No'),
	array('Picardy','Lorraine','No','Yes'),
	array('Picardy','Belgium','Yes','Yes'),
	array('Picardy','English Channel','Yes','No'),
	array('Lorraine','Belgium','No','Yes'),
	array('Belgium','Netherlands','Yes','Yes'),
	array('Belgium','English Channel','Yes','No'),
	array('Belgium','North Sea','Yes','No'),
	array('Netherlands','North Sea','Yes','No'),
	array('Netherlands','Helgoland Bight','Yes','No'),
	array('Barents Sea','Norwegian Sea','Yes','No'),
	array('Norwegian Sea','North Atlantic','Yes','No'),
	array('Norwegian Sea','North Sea','Yes','No'),
	array('Norwegian Sea','Clyde','Yes','No'),
	array('North Atlantic','Atlantic','Yes','No'),
	array('North Atlantic','Irish Sea','Yes','No'),
	array('North Atlantic','Clyde','Yes','No'),
	array('Atlantic','Irish Sea','Yes','No'),
	array('Atlantic','English Channel','Yes','No'),
	array('Atlantic','Bay of Biscay','Yes','No'),
	array('Atlantic','South Atlantic Ocean','Yes','No'),
	array('English Channel','North Sea','Yes','No'),
	array('English Channel','Bay of Biscay','Yes','No'),
	array('North Sea','Helgoland Bight','Yes','No'),
	array('North Sea','Skagerrak','Yes','No'),
	array('Baltic Sea','Gulf of Bothnia','Yes','No'),
	array('Bay of Biscay','South Atlantic Ocean','Yes','No'),
	array('South Atlantic Ocean','Indian Ocean','Yes','No'),
	array('Western Mediterranean','Gulf of Lyon','Yes','No'),
	array('Western Mediterranean','Tyrrhenian Sea','Yes','No'),
	array('Gulf of Lyon','Tyrrhenian Sea','Yes','No'),
	array('Tyrrhenian Sea','Central Mediterranean','Yes','No'),
	array('Central Mediterranean','Ionian Sea','Yes','No'),
	array('Central Mediterranean','Aegean Sea','Yes','No'),
	array('Central Mediterranean','Eastern Mediterranean','Yes','No'),
	array('Ionian Sea','Adriatic Sea','Yes','No'),
	array('Aegean Sea','Eastern Mediterranean','Yes','No')
);

foreach($bordersRawData as $borderRawRow)
{
	list($from, $to, $fleets, $armies)=$borderRawRow;
	InstallTerritory::$Territories[$to]  ->addBorder(InstallTerritory::$Territories[$from],$fleets,$armies);
}
unset($bordersRawData);

InstallTerritory::runSQL($this->mapID);
InstallCache::terrJSON($this->territoriesJSONFile(),$this->mapID);
?>
