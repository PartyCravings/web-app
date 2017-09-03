<?php

namespace AppBundle\DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170903203212 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE vendors');
        $this->addSql('ALTER TABLE vendor ADD vendorDescriptions INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vendor ADD CONSTRAINT FK_F52233F65CAE469F FOREIGN KEY (vendorDescriptions) REFERENCES vendor_descriptons (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F52233F65CAE469F ON vendor (vendorDescriptions)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        
        $this->addSql('CREATE TABLE vendors (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, alias VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, status TINYINT(1) NOT NULL, is_enabled TINYINT(1) NOT NULL, is_suspended TINYINT(1) NOT NULL, is_deleted TINYINT(1) NOT NULL, vendorDescriptions INT DEFAULT NULL, UNIQUE INDEX UNIQ_4F25BA115CAE469F (vendorDescriptions), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vendors ADD CONSTRAINT FK_4F25BA115CAE469F FOREIGN KEY (vendorDescriptions) REFERENCES vendor_descriptons (id)');
        $this->addSql('ALTER TABLE vendor DROP FOREIGN KEY FK_F52233F65CAE469F');
        $this->addSql('DROP INDEX UNIQ_F52233F65CAE469F ON vendor');
        $this->addSql('ALTER TABLE vendor DROP vendorDescriptions');
    }
}
