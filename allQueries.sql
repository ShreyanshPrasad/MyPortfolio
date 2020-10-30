--Subscription Table--
CREATE TABLE `shreyansh`.`t_newsletter_subscription` ( `sub_id` INT NOT NULL AUTO_INCREMENT , `sub_email` VARCHAR(50) NOT NULL , `sub_record_start_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `sub_record_end_date` TIMESTAMP NULL , `sub_effective_start_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `sub_effective_end_date` TIMESTAMP NULL , `sub_act_status` VARCHAR(1) NOT NULL , `sub_deleted_flag` VARCHAR(1) NOT NULL , PRIMARY KEY (`sub_id`)) ENGINE = InnoDB;

--Dummy data in Subscription Table--
INSERT INTO `t_newsletter_subscription`(`sub_email`, `sub_record_start_date`, `sub_record_end_date`, `sub_effective_start_date`, `sub_effective_end_date`, `sub_act_status`, `sub_deleted_flag`) VALUES (
	'test@dummy.com',
    FROM_UNIXTIME(1604066089),
    FROM_UNIXTIME(1604066089),
    FROM_UNIXTIME(1604066089),
    FROM_UNIXTIME(1604066089),
    'N',
    'Y'
)

INSERT INTO `t_newsletter_subscription`(`sub_email`, `sub_act_status`, `sub_deleted_flag`) VALUES (
	'test@dummy.com',
    'N',
    'Y'
)