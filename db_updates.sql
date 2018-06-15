ALTER TABLE `shaman_pages` ADD get_param varchar(50) NULL;
UPDATE `shaman_pages` SET get_param = "buy" WHERE entity_id = 1;
UPDATE `shaman_pages` SET get_param = "front" WHERE entity_id = 2;
-- etc., update param string for each row