#
# Table structure for table 'tx_teammanager_domain_model_club'
#
CREATE TABLE tx_teammanager_domain_model_club (

	club_name varchar(255) DEFAULT '' NOT NULL,
	about text,
	found_date date DEFAULT NULL,
	staff int(11) unsigned DEFAULT '0' NOT NULL,
	teams int(11) unsigned DEFAULT '0' NOT NULL,
	address int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_teammanager_domain_model_team'
#
CREATE TABLE tx_teammanager_domain_model_team (

	club int(11) unsigned DEFAULT '0' NOT NULL,

	team_name varchar(255) DEFAULT '' NOT NULL,
	team_info text,
	players int(11) unsigned DEFAULT '0' NOT NULL,
	activities int(11) unsigned DEFAULT '0' NOT NULL,
	level int(11) unsigned DEFAULT '0',
	stuff int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users (

	club int(11) unsigned DEFAULT '0' NOT NULL,
	team int(11) unsigned DEFAULT '0' NOT NULL,

	roles int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_teammanager_domain_model_activity'
#
CREATE TABLE tx_teammanager_domain_model_activity (

	activity_title varchar(255) DEFAULT '' NOT NULL,
	meettime datetime DEFAULT NULL,
	activity_goal text,
	address int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_teammanager_domain_model_address'
#
CREATE TABLE tx_teammanager_domain_model_address (

	activity int(11) unsigned DEFAULT '0' NOT NULL,

	street varchar(255) DEFAULT '' NOT NULL,
	zip varchar(255) DEFAULT '' NOT NULL,
	town varchar(255) DEFAULT '' NOT NULL,
	p_o_box varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_teammanager_domain_model_level'
#
CREATE TABLE tx_teammanager_domain_model_level (

	title varchar(255) DEFAULT '' NOT NULL,
	info varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_teammanager_domain_model_role'
#
CREATE TABLE tx_teammanager_domain_model_role (

	staff int(11) unsigned DEFAULT '0' NOT NULL,

	role_title varchar(255) DEFAULT '' NOT NULL,
	description text,

);

#
# Table structure for table 'tx_teammanager_domain_model_team'
#
CREATE TABLE tx_teammanager_domain_model_team (

	club int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_teammanager_team_activity_mm'
#
CREATE TABLE tx_teammanager_team_activity_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_teammanager_domain_model_role'
#
CREATE TABLE tx_teammanager_domain_model_role (

	staff int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_teammanager_domain_model_address'
#
CREATE TABLE tx_teammanager_domain_model_address (

	activity int(11) unsigned DEFAULT '0' NOT NULL,

);
