<?php

namespace AppBundle\DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170903205443 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE affiliates_extra DROP FOREIGN KEY FK_40CA82EB38248176');
        $this->addSql('ALTER TABLE aso_ebi DROP FOREIGN KEY FK_98AEC13A38248176');
        $this->addSql('DROP TABLE currency');
        $this->addSql('ALTER TABLE account_details DROP address_id, DROP ip');
        $this->addSql('ALTER TABLE address ADD account_id INT DEFAULT NULL, DROP id_country, DROP id_customer, DROP id_staff, DROP id_vendor, DROP vendor_name, DROP last_name, DROP first_name');
        $this->addSql('ALTER TABLE address ADD CONSTRAINT FK_D4E6F819B6B5FBA FOREIGN KEY (account_id) REFERENCES account_details (id)');
        $this->addSql('CREATE INDEX IDX_D4E6F819B6B5FBA ON address (account_id)');
        $this->addSql('DROP INDEX IDX_40CA82EB38248176 ON affiliates_extra');
        $this->addSql('ALTER TABLE affiliates_extra DROP currency_id, DROP currency');
        $this->addSql('DROP INDEX IDX_98AEC13A38248176 ON aso_ebi');
        $this->addSql('ALTER TABLE aso_ebi DROP currency_id');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE currency (id INT AUTO_INCREMENT NOT NULL, iso_code VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, sign VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, blank VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, format VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, decimals VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, conversion_rate VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, deleted VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, active VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, vendor VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE account_details ADD address_id INT NOT NULL, ADD ip VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE address DROP FOREIGN KEY FK_D4E6F819B6B5FBA');
        $this->addSql('DROP INDEX IDX_D4E6F819B6B5FBA ON address');
        $this->addSql('ALTER TABLE address ADD id_country VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD id_customer VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD id_staff VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD id_vendor VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD vendor_name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD last_name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD first_name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, DROP account_id');
        $this->addSql('ALTER TABLE affiliates_extra ADD currency_id INT DEFAULT NULL, ADD currency VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE affiliates_extra ADD CONSTRAINT FK_40CA82EB38248176 FOREIGN KEY (currency_id) REFERENCES currency (id)');
        $this->addSql('CREATE INDEX IDX_40CA82EB38248176 ON affiliates_extra (currency_id)');
        $this->addSql('ALTER TABLE aso_ebi ADD currency_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE aso_ebi ADD CONSTRAINT FK_98AEC13A38248176 FOREIGN KEY (currency_id) REFERENCES currency (id)');
        $this->addSql('CREATE INDEX IDX_98AEC13A38248176 ON aso_ebi (currency_id)');
    }
}
