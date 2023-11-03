<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231017202542 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE planned_stay (id INT AUTO_INCREMENT NOT NULL, start_date DATETIME NOT NULL, created DATETIME NOT NULL, rehabilitationStay_id INT DEFAULT NULL, INDEX IDX_E551EE01C0776AB1 (rehabilitationStay_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE planned_stay ADD CONSTRAINT FK_E551EE01C0776AB1 FOREIGN KEY (rehabilitationStay_id) REFERENCES rehabilitation_stay (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planned_stay DROP FOREIGN KEY FK_E551EE01C0776AB1');
        $this->addSql('DROP TABLE planned_stay');
    }
}
