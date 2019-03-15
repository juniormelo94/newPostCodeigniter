CREATE TABLE `newpost`.`pedidos` (
  `id_pedido` INT NOT NULL AUTO_INCREMENT,
  `TrackNo` VARCHAR(45) NULL,
  `OrderNumber` VARCHAR(45) NULL,
  `TerminalSN` VARCHAR(45) NULL,
  `PhoneNumber` VARCHAR(16) NULL,
  `Nickname` VARCHAR(45) NULL,
  `Email` VARCHAR(80) NULL,
  `Quantity` INT NULL,
  `Size` INT NULL,
  `CourierCode` VARCHAR(45) NULL,
  PRIMARY KEY (`id_pedido`));
