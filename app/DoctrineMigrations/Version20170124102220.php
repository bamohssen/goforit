<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170124102220 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE teams_competitions (team_id INT NOT NULL, competition_id INT NOT NULL, INDEX IDX_6F75E8F0296CD8AE (team_id), INDEX IDX_6F75E8F07B39D312 (competition_id), PRIMARY KEY(team_id, competition_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE teams_competitions ADD CONSTRAINT FK_6F75E8F0296CD8AE FOREIGN KEY (team_id) REFERENCES competition (id)');
        $this->addSql('ALTER TABLE teams_competitions ADD CONSTRAINT FK_6F75E8F07B39D312 FOREIGN KEY (competition_id) REFERENCES team (id)');
        $this->addSql('ALTER TABLE competition ADD local INT DEFAULT NULL');
        $this->addSql('ALTER TABLE competition ADD CONSTRAINT FK_B50A2CB18BD688E8 FOREIGN KEY (local) REFERENCES local (id)');
        $this->addSql('CREATE INDEX IDX_B50A2CB18BD688E8 ON competition (local)');
        $this->addSql('ALTER TABLE invitation ADD utilisateur INT DEFAULT NULL');
        $this->addSql('ALTER TABLE invitation ADD CONSTRAINT FK_F11D61A21D1C63B3 FOREIGN KEY (utilisateur) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_F11D61A21D1C63B3 ON invitation (utilisateur)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE teams_competitions');
        $this->addSql('ALTER TABLE competition DROP FOREIGN KEY FK_B50A2CB18BD688E8');
        $this->addSql('DROP INDEX IDX_B50A2CB18BD688E8 ON competition');
        $this->addSql('ALTER TABLE competition DROP local');
        $this->addSql('ALTER TABLE invitation DROP FOREIGN KEY FK_F11D61A21D1C63B3');
        $this->addSql('DROP INDEX IDX_F11D61A21D1C63B3 ON invitation');
        $this->addSql('ALTER TABLE invitation DROP utilisateur');
    }
}
