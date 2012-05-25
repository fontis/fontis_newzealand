<?php
/**
 * Fontis New Zealand Extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category   Fontis
 * @package    Fontis_Newzealand
 * @author     Chris Norton
 * @copyright  Copyright (c) 2008 Fontis Pty. Ltd. (http://www.fontis.com.au)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

$installer = $this;
$installer->startSetup();
$installer->run("
DELETE FROM `{$this->getTable('directory_country_region')}` WHERE country_id = 'NZ';

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'AUK', 'Auckland');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'Auckland'), ('en_NZ', LAST_INSERT_ID(), 'Auckland');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'BOP', 'Bay of Plenty');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'Bay of Plenty'), ('en_NZ', LAST_INSERT_ID(), 'Bay of Plenty');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'CAN', 'Canterbury');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'Canterbury'), ('en_NZ', LAST_INSERT_ID(), 'Canterbury');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'GIS', 'Gisborne');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'Gisborne'), ('en_NZ', LAST_INSERT_ID(), 'Gisborne');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'HKB', 'Hawke\'s Bay');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'Hawke\'s Bay'), ('en_NZ', LAST_INSERT_ID(), 'Hawke\'s Bay');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'MBH', 'Marlborough');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'Marlborough'), ('en_NZ', LAST_INSERT_ID(), 'Marlborough');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'MWT', 'Manawatu');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'Manawatu'), ('en_NZ', LAST_INSERT_ID(), 'Manawatu');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'NSN', 'Nelson');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'Nelson'), ('en_NZ', LAST_INSERT_ID(), 'Nelson');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'NTL', 'Northland');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'Northland'), ('en_NZ', LAST_INSERT_ID(), 'Northland');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'OTA', 'Otago');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'Otago'), ('en_NZ', LAST_INSERT_ID(), 'Otago');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'CAS', 'South Canterbury');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'South Canterbury'), ('en_NZ', LAST_INSERT_ID(), 'South Canterbury');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'STL', 'Southland');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'Southland'), ('en_NZ', LAST_INSERT_ID(), 'Southland');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'TAS', 'Tasman');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'Tasman'), ('en_NZ', LAST_INSERT_ID(), 'Tasman');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'TKI', 'Taranaki');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'Taranaki'), ('en_NZ', LAST_INSERT_ID(), 'Taranaki');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'WGN', 'Wellington');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'Wellington'), ('en_NZ', LAST_INSERT_ID(), 'Wellington');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'WKO', 'Waikato');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'Waikato'), ('en_NZ', LAST_INSERT_ID(), 'Waikato');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'WAN', 'Wanganui');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'Wanganui'), ('en_NZ', LAST_INSERT_ID(), 'Wanganui');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('NZ', 'WTC', 'West Coast');
INSERT INTO `{$this->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
('en_US', LAST_INSERT_ID(), 'West Coast'), ('en_NZ', LAST_INSERT_ID(), 'West Coast');
");
//$installer->installEntities();
$installer->endSetup();
