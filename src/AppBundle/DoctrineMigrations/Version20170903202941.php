<?php

namespace AppBundle\DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170903202941 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE aso_ebi DROP FOREIGN KEY FK_98AEC13A82F1BAF4');
        $this->addSql('DROP TABLE languages');
        $this->addSql('DROP INDEX IDX_98AEC13A82F1BAF4 ON aso_ebi');
        $this->addSql('ALTER TABLE aso_ebi DROP language_id');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE languages (id INT AUTO_INCREMENT NOT NULL, lang_code VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, lang_name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, lang_show VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, rtl TINYINT(1) NOT NULL, translated TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE aso_ebi ADD language_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE aso_ebi ADD CONSTRAINT FK_98AEC13A82F1BAF4 FOREIGN KEY (language_id) REFERENCES languages (id)');
        $this->addSql('CREATE INDEX IDX_98AEC13A82F1BAF4 ON aso_ebi (language_id)');
    }
}
