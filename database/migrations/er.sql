SELECT `火災保険料` FROM bds_system.fund;


ALTER TABLE bds_system.fund
ADD COLUMN `出資総額` DECIMAL(10, 2) 
GENERATED ALWAYS AS (`物件価格`) STORED;


ALTER TABLE bds_system.fund
ADD COLUMN `劣後出資額` DECIMAL(10, 2) 
GENERATED ALWAYS AS (`物件価格` - `募集金額`) STORED;

ALTER TABLE bds_system.fund
ADD COLUMN `合計` DECIMAL(10, 2) 
GENERATED ALWAYS AS (`維持管理費` + `修繕積立金` + `公租公課` + `火災保険料` + `PMフィー` + `税理士報酬` + `その他`) STORED;


ALTER TABLE bds_system.fund
ADD COLUMN `分配原資` DECIMAL(10, 2) 
GENERATED ALWAYS AS (`賃料収入` - `合計`) STORED;


ALTER TABLE bds_system.fund
ADD COLUMN `全体口数` DECIMAL(10, 2) 
GENERATED ALWAYS AS (`募集金額` / `投資単位（1口）`) STORED;


ALTER TABLE bds_system.fund
ADD COLUMN `優先出資分配金` DECIMAL(10, 2) 
GENERATED ALWAYS AS ((`募集金額` / `出資総額`) * `分配原資`) STORED;


ALTER TABLE bds_system.fund
ADD COLUMN `劣後出資分配金（営業者）` DECIMAL 
GENERATED ALWAYS AS (`分配原資` - `優先出資分配金`) STORED;

-- http://localhost:3000/admin/FD40
-- Import CSV 申込日, お名前, 申込金額, (申込口数)
-- data-for-calculating="true"

CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;


CREATE TABLE `bds_system`.`fund_application` (
  `fund_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  `deleted_at` DATETIME NULL,
  PRIMARY KEY (`fund_id`, `user_id`));


CREATE VIEW `v_user_list` AS 
SELECT 
	CONCAT(`お名前1`, `お名前2`) AS `お名前`,
    `固定電話`                  AS `固定電話番号`,
    `携帯電話`				   AS `携帯電話番号`,
	`本人確認日`			       AS `本人確認日`,
	DATE(`created_at`)		   AS `登録日`,
    0                          AS `申込数合計`,
    0						   AS `投資数合計`
FROM user