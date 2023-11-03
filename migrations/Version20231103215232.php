<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231103215232 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rehabilitation_stay_planned (rehabilitation_stay_id INT NOT NULL, planned_stay_id INT NOT NULL, INDEX IDX_E0322D70A5E9CD9B (rehabilitation_stay_id), INDEX IDX_E0322D70BB1210E2 (planned_stay_id), PRIMARY KEY(rehabilitation_stay_id, planned_stay_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rehabilitation_stay_planned ADD CONSTRAINT FK_E0322D70A5E9CD9B FOREIGN KEY (rehabilitation_stay_id) REFERENCES rehabilitation_stay (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rehabilitation_stay_planned ADD CONSTRAINT FK_E0322D70BB1210E2 FOREIGN KEY (planned_stay_id) REFERENCES planned_stay (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rehabilitation_stay_planned DROP FOREIGN KEY FK_E0322D70A5E9CD9B');
        $this->addSql('ALTER TABLE rehabilitation_stay_planned DROP FOREIGN KEY FK_E0322D70BB1210E2');
        $this->addSql('DROP TABLE rehabilitation_stay_planned');
    }
}
