<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230929144759 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation ADD hotel_room INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955C55A8713 FOREIGN KEY (hotel_room) REFERENCES room (id)');
        $this->addSql('CREATE INDEX IDX_42C84955C55A8713 ON reservation (hotel_room)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C55A8713');
        $this->addSql('DROP INDEX IDX_42C84955C55A8713 ON reservation');
        $this->addSql('ALTER TABLE reservation DROP hotel_room');
    }
}
