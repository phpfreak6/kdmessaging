/* Nitin 31-05-2021 */

ALTER TABLE `brands` CHANGE `whatsapp_authentication_token` `sub_account_token` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE `brands` CHANGE `whatsapp_account_id` `sub_account_id` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE `brands` CHANGE `aws_short_code` `short_code` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE `settings` DROP `application_id`, DROP `aws_access_key`, DROP `aws_secret_access_key`, DROP `aws_ses_region`, DROP `aws_daily_quota`, DROP `sends_left`, DROP `sends_today`, DROP `send_rate`;

ALTER TABLE `settings` CHANGE `whatsapp_account_id` `account_id` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE `settings` CHANGE `whatsapp_authentication_token` `authentication_token` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE `settings` DROP `timezone`, DROP `language`;


/* Nitin 08-06-2021 */

CREATE TABLE `message_info` (
  `message_info_id` int(255) NOT NULL,
  `brand_id` int(255) NOT NULL,
  `campaign_id` int(255) NOT NULL,
  `list_number_id` int(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `message_info`
  ADD PRIMARY KEY (`message_info_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `campaign_id` (`campaign_id`),
  ADD KEY `list_number_id` (`list_number_id`);

ALTER TABLE `message_info`
  MODIFY `message_info_id` int(255) NOT NULL AUTO_INCREMENT;


ALTER TABLE `delivery` ADD `price` VARCHAR(255) NULL DEFAULT NULL AFTER `message_id`;