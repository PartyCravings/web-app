<?php

namespace AppBundle\DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170903202536 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE affiliates DROP FOREIGN KEY FK_108C6A8FD8A48BBD');
        $this->addSql('ALTER TABLE aso_ebi DROP FOREIGN KEY FK_98AEC13AF92F3E70');
        $this->addSql('ALTER TABLE party DROP FOREIGN KEY FK_89954EE0F92F3E70');
        $this->addSql('ALTER TABLE zones DROP FOREIGN KEY FK_85CAB168F92F3E70');
        $this->addSql('ALTER TABLE live_parties DROP FOREIGN KEY FK_C2BE587E9395C3F3');
        $this->addSql('ALTER TABLE live_parties DROP FOREIGN KEY FK_C2BE587E139E13E2');
        $this->addSql('DROP TABLE bruteforce_attempts');
        $this->addSql('DROP TABLE compare');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE customer');
        $this->addSql('DROP TABLE ext_translations');
        $this->addSql('DROP TABLE failed_logins');
        $this->addSql('DROP TABLE guest');
        $this->addSql('DROP TABLE login_history');
        $this->addSql('DROP TABLE members');
        $this->addSql('DROP TABLE newsletter');
        $this->addSql('DROP TABLE page_not_found');
        $this->addSql('DROP TABLE party_urls');
        $this->addSql('DROP TABLE profile');
        $this->addSql('DROP TABLE referrer');
        $this->addSql('DROP TABLE search_engine');
        $this->addSql('DROP TABLE search_engines');
        $this->addSql('DROP TABLE settings');
        $this->addSql('DROP TABLE templates');
        $this->addSql('DROP TABLE timezone');
        $this->addSql('DROP TABLE trackers');
        $this->addSql('DROP TABLE translators');
        $this->addSql('DROP TABLE trusted_servers');
        $this->addSql('DROP TABLE twofactor_auth');
        $this->addSql('DROP TABLE twofactor_backupcodes');
        $this->addSql('DROP TABLE web_browser');
        $this->addSql('DROP TABLE websites');
        $this->addSql('DROP TABLE zones');
        $this->addSql('DROP INDEX IDX_108C6A8FD8A48BBD ON affiliates');
        $this->addSql('ALTER TABLE affiliates DROP country_id_id');
        $this->addSql('DROP INDEX IDX_98AEC13AF92F3E70 ON aso_ebi');
        $this->addSql('ALTER TABLE aso_ebi DROP country_id');
        $this->addSql('DROP INDEX IDX_C2BE587E9395C3F3 ON live_parties');
        $this->addSql('DROP INDEX IDX_C2BE587E139E13E2 ON live_parties');
        $this->addSql('ALTER TABLE live_parties ADD account_id INT DEFAULT NULL, DROP customer_id, DROP partyUrl_id');
        $this->addSql('ALTER TABLE live_parties ADD CONSTRAINT FK_C2BE587E9B6B5FBA FOREIGN KEY (account_id) REFERENCES accounts (id)');
        $this->addSql('CREATE INDEX IDX_C2BE587E9B6B5FBA ON live_parties (account_id)');
        $this->addSql('ALTER TABLE party DROP FOREIGN KEY FK_89954EE0F603EE73');
        $this->addSql('DROP INDEX IDX_89954EE0F92F3E70 ON party');
        $this->addSql('DROP INDEX IDX_89954EE0F603EE73 ON party');
        $this->addSql('ALTER TABLE party DROP country_id, DROP vendor_id');
        $this->addSql('ALTER TABLE vendor DROP id_country');
        $this->addSql('ALTER TABLE zone ADD zoneDescriptions INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zone ADD CONSTRAINT FK_A0EBC0072FC8C4DB FOREIGN KEY (zoneDescriptions) REFERENCES zone_descriptions (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A0EBC0072FC8C4DB ON zone (zoneDescriptions)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bruteforce_attempts (id INT AUTO_INCREMENT NOT NULL, action VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, occured DATETIME NOT NULL, ip VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, subnet VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, metadata VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compare (id INT AUTO_INCREMENT NOT NULL, id_customer VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, product VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE country (id INT AUTO_INCREMENT NOT NULL, id_currency VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, iso_code VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, call_prefix VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, active VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, contains_states VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, need_identification_nr VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, need_zip_code VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, zip_code_format VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, display_tax_label VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, lang VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, vendor VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customer (id INT AUTO_INCREMENT NOT NULL, id_vendor_group VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, id_vendor VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, id_gender VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, id_default_group VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, id_lang VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, id_risk VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, company VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, siret VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ape VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, firstname VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, lastname VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, password VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, plain_password VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, last_passwd_gen VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, birthday VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, newsletter VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ip_registration_newsletter VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, newsletter_date_add VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, optin VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, website VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, outstanding_allow_amount VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, show_public_prices VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, max_payment_days VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, note VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, active VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, is_guest TINYINT(1) NOT NULL, deleted VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, date_add VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, date_upd VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, suspended VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, _group VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, message VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, message_sync_imap VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, thread VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ext_translations (id INT AUTO_INCREMENT NOT NULL, locale VARCHAR(8) NOT NULL COLLATE utf8_unicode_ci, object_class VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, field VARCHAR(32) NOT NULL COLLATE utf8_unicode_ci, foreign_key VARCHAR(64) NOT NULL COLLATE utf8_unicode_ci, content LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, UNIQUE INDEX lookup_unique_idx (locale, object_class, field, foreign_key), INDEX translations_lookup_idx (locale, object_class, foreign_key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE failed_logins (id INT AUTO_INCREMENT NOT NULL, login_id INT NOT NULL, ip VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, attempts INT NOT NULL, last_attempt DATETIME NOT NULL, device VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE guest (id INT AUTO_INCREMENT NOT NULL, id_operating_system VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, id_web_browser VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, id_customer VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, javascript VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, screen_resolution_x VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, screen_resolution_y VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, screen_color VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, accept_language VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, mobile_theme VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE login_history (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ip VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, timestamp DATETIME NOT NULL, device VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE members (id INT AUTO_INCREMENT NOT NULL, dimension_id INT NOT NULL, object_type_id INT NOT NULL, parent_member_id INT NOT NULL, depth INT NOT NULL, namee VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, description VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, object_id INT NOT NULL, sort_order INT NOT NULL, color VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, archived_on DATETIME NOT NULL, archived_by_id INT NOT NULL, is_suspended TINYINT(1) NOT NULL, is_enabled TINYINT(1) NOT NULL, is_deleted TINYINT(1) NOT NULL, date_add DATETIME NOT NULL, date_upd DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE newsletter (id INT AUTO_INCREMENT NOT NULL, id_vendor VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, id_vendor_group VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, newsletter_date_add VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ip_registration_newsletter VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, http_referrer VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, active VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, deleted VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page_not_found (id INT AUTO_INCREMENT NOT NULL, id_shop VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, id_shop_group VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, request_uri VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, http_referer VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, date_add VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE party_urls (id INT AUTO_INCREMENT NOT NULL, uri VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, party_id INT NOT NULL, customer_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profile (id INT AUTO_INCREMENT NOT NULL, lang VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE referrer (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, passwd VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, http_referer_regexp VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, http_referer_like VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, request_uri_regexp VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, request_uri_like VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, http_referer_regexp_not VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, http_referer_like_not VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, request_uri_regexp_not VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, request_uri_like_not VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, base_fee VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, percent_fee VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, click_fee VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, date_add VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, cache VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, service VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE search_engine (id INT AUTO_INCREMENT NOT NULL, server VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, getvar VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE search_engines (id INT AUTO_INCREMENT NOT NULL, domain VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, url VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, cookie_send VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, no_of_results_page INT NOT NULL, start TINYINT(1) NOT NULL, start_offset INT NOT NULL, max_results INT NOT NULL, regex VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, form_pattern VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, to_pattern VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, url_index INT NOT NULL, title_index INT NOT NULL, description_index INT NOT NULL, encoding VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, status INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE settings (id INT AUTO_INCREMENT NOT NULL, setting_id INT NOT NULL, vendor_id INT NOT NULL, value VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, date_add DATETIME NOT NULL, date_upd DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE templates (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, author VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, path VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, image VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, is_default TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE timezone (id INT AUTO_INCREMENT NOT NULL, timezone_name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, timezone_label VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, gmt_diff VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trackers (id INT AUTO_INCREMENT NOT NULL, tracker_id INT NOT NULL, trackername VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, description VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, client_id INT NOT NULL, viewwindow VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, clickwindow VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, blockwindow VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, status VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, type VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, linkcampaigns VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, variablemethod VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, appendcode VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, updated DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE translators (id INT AUTO_INCREMENT NOT NULL, lang_code VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, trans_name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, trans_company VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, trans_website VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trusted_servers (id INT AUTO_INCREMENT NOT NULL, url VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, url_hash VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, token VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, shared_secret VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, status INT NOT NULL, sync_token VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE twofactor_auth (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, code VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, requested TINYINT(1) NOT NULL, timestamp DATETIME NOT NULL, device VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, status VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE twofactor_backupcodes (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, code VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, used VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE web_browser (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE websites (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, url VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, owner_name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, owner_email VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, category VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, title VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, description VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, keywords VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, title2 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, title3 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, title4 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, title5 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, description2 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, description3 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, description4 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, description5 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, reciprocal_url VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, user_id INT NOT NULL, status INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE zones (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, code VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, status TINYINT(1) NOT NULL, sort_order INT NOT NULL, is_enabled TINYINT(1) NOT NULL, is_suspended TINYINT(1) NOT NULL, is_deleted TINYINT(1) NOT NULL, zoneDescriptions INT DEFAULT NULL, UNIQUE INDEX UNIQ_85CAB1682FC8C4DB (zoneDescriptions), INDEX IDX_85CAB168F92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE zones ADD CONSTRAINT FK_85CAB1682FC8C4DB FOREIGN KEY (zoneDescriptions) REFERENCES zone_descriptions (id)');
        $this->addSql('ALTER TABLE zones ADD CONSTRAINT FK_85CAB168F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE affiliates ADD country_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE affiliates ADD CONSTRAINT FK_108C6A8FD8A48BBD FOREIGN KEY (country_id_id) REFERENCES country (id)');
        $this->addSql('CREATE INDEX IDX_108C6A8FD8A48BBD ON affiliates (country_id_id)');
        $this->addSql('ALTER TABLE aso_ebi ADD country_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE aso_ebi ADD CONSTRAINT FK_98AEC13AF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('CREATE INDEX IDX_98AEC13AF92F3E70 ON aso_ebi (country_id)');
        $this->addSql('ALTER TABLE live_parties DROP FOREIGN KEY FK_C2BE587E9B6B5FBA');
        $this->addSql('DROP INDEX IDX_C2BE587E9B6B5FBA ON live_parties');
        $this->addSql('ALTER TABLE live_parties ADD partyUrl_id INT DEFAULT NULL, CHANGE account_id customer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE live_parties ADD CONSTRAINT FK_C2BE587E139E13E2 FOREIGN KEY (partyUrl_id) REFERENCES party_urls (id)');
        $this->addSql('ALTER TABLE live_parties ADD CONSTRAINT FK_C2BE587E9395C3F3 FOREIGN KEY (customer_id) REFERENCES customer (id)');
        $this->addSql('CREATE INDEX IDX_C2BE587E9395C3F3 ON live_parties (customer_id)');
        $this->addSql('CREATE INDEX IDX_C2BE587E139E13E2 ON live_parties (partyUrl_id)');
        $this->addSql('ALTER TABLE party ADD country_id INT DEFAULT NULL, ADD vendor_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE party ADD CONSTRAINT FK_89954EE0F603EE73 FOREIGN KEY (vendor_id) REFERENCES vendor (id)');
        $this->addSql('ALTER TABLE party ADD CONSTRAINT FK_89954EE0F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('CREATE INDEX IDX_89954EE0F92F3E70 ON party (country_id)');
        $this->addSql('CREATE INDEX IDX_89954EE0F603EE73 ON party (vendor_id)');
        $this->addSql('ALTER TABLE vendor ADD id_country VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE zone DROP FOREIGN KEY FK_A0EBC0072FC8C4DB');
        $this->addSql('DROP INDEX UNIQ_A0EBC0072FC8C4DB ON zone');
        $this->addSql('ALTER TABLE zone DROP zoneDescriptions');
    }
}
