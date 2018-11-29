CREATE TABLE Advertiser (
  AdvertiserID int NOT NULL AUTO_INCREMENT,
  AdvertiserName varchar(200) DEFAULT NULL,
  PaymentMethod varchar(50) NOT NULL DEFAULT 'post-payment',
  APISupplierString varchar(100) DEFAULT NULL,
  APIFrequency varchar(20) DEFAULT NULL,
  RawPassword varchar(255) DEFAULT NULL,
  Username varchar(255) DEFAULT NULL,
  PostbackIPWhitelist text DEFAULT NULL,
  AccountManagerID int DEFAULT NULL,
  PRIMARY KEY (AdvertiserID)
)
