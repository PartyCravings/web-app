<?php

namespace AppBundle\Doctrine\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171029102650 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE services');
        $this->addSql('ALTER TABLE country CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE pages CHANGE content content MEDIUMTEXT NOT NULL, CHANGE updated_at updated_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE service ADD vendor INT DEFAULT NULL, DROP vendor_id');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2F52233F6 FOREIGN KEY (vendor) REFERENCES vendor (id)');
        $this->addSql('CREATE INDEX IDX_E19D9AD2F52233F6 ON service (vendor)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE services (id INT AUTO_INCREMENT NOT NULL, model VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, sku VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, location VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, quantity INT NOT NULL, stock_status_id INT NOT NULL, manufacturer_id INT NOT NULL, shipping TINYINT(1) NOT NULL, ship_individually TINYINT(1) NOT NULL, free_shipping TINYINT(1) NOT NULL, shipping_price NUMERIC(10, 0) NOT NULL, price NUMERIC(10, 0) NOT NULL, tax_class_id INT NOT NULL, date_available DATETIME NOT NULL, weight NUMERIC(10, 0) NOT NULL, weight_class_id INT NOT NULL, lenght NUMERIC(10, 0) NOT NULL, width NUMERIC(10, 0) NOT NULL, height NUMERIC(10, 0) NOT NULL, lenght_class_id INT NOT NULL, status TINYINT(1) NOT NULL, viewed INT NOT NULL, sort_order INT NOT NULL, subtract TINYINT(1) NOT NULL, minimum INT NOT NULL, maximum INT NOT NULL, cost NUMERIC(10, 0) NOT NULL, call_to_order TINYINT(1) NOT NULL, settings VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, date_added DATETIME NOT NULL, date_modified DATETIME NOT NULL, services_featured VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, services_related VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, services_to_categories VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, services_to_downloads VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, services_to_stores VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE country CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE pages CHANGE content content MEDIUMTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE updated_at updated_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2F52233F6');
        $this->addSql('DROP INDEX IDX_E19D9AD2F52233F6 ON service');
        $this->addSql('ALTER TABLE service ADD vendor_id INT NOT NULL, DROP vendor');
    }
}
