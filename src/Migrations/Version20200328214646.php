<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200328214646 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE APPARTEMENT ADD PROPRIETAIRE INT DEFAULT NULL');
        $this->addSql('ALTER TABLE APPARTEMENT ADD CONSTRAINT FK_FCA52F65FCD1D0C6 FOREIGN KEY (PROPRIETAIRE) REFERENCES PROPRIETAIRE (ID)');
        $this->addSql('CREATE INDEX IDX_FCA52F65FCD1D0C6 ON APPARTEMENT (PROPRIETAIRE)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE APPARTEMENT DROP FOREIGN KEY FK_FCA52F65FCD1D0C6');
        $this->addSql('DROP INDEX IDX_FCA52F65FCD1D0C6 ON APPARTEMENT');
        $this->addSql('ALTER TABLE APPARTEMENT DROP PROPRIETAIRE');
    }
}
