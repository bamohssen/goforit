<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170124112624 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE regles_competitions ADD competition_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE regles_competitions ADD CONSTRAINT FK_D12BDF57B39D312 FOREIGN KEY (competition_id) REFERENCES competition (id)');
        $this->addSql('CREATE INDEX IDX_D12BDF57B39D312 ON regles_competitions (competition_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE regles_competitions DROP FOREIGN KEY FK_D12BDF57B39D312');
        $this->addSql('DROP INDEX IDX_D12BDF57B39D312 ON regles_competitions');
        $this->addSql('ALTER TABLE regles_competitions DROP competition_id');
    }
}
