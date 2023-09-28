<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230924114456 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE treatment ADD therapy_room_id INT DEFAULT NULL, ADD number_of_patients INT NOT NULL');
        $this->addSql('ALTER TABLE treatment ADD CONSTRAINT FK_98013C3141B4AC78 FOREIGN KEY (therapy_room_id) REFERENCES therapy_room (id)');
        $this->addSql('CREATE INDEX IDX_98013C3141B4AC78 ON treatment (therapy_room_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE treatment DROP FOREIGN KEY FK_98013C3141B4AC78');
        $this->addSql('DROP INDEX IDX_98013C3141B4AC78 ON treatment');
        $this->addSql('ALTER TABLE treatment DROP therapy_room_id, DROP number_of_patients');
    }
}
