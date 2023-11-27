<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231123225825 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sanatory_survey (id INT AUTO_INCREMENT NOT NULL, rehabilitation_stay_id INT DEFAULT NULL, created DATETIME NOT NULL, INDEX IDX_5C9F9781A5E9CD9B (rehabilitation_stay_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sanatory_survey ADD CONSTRAINT FK_5C9F9781A5E9CD9B FOREIGN KEY (rehabilitation_stay_id) REFERENCES rehabilitation_stay (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sanatory_survey DROP FOREIGN KEY FK_5C9F9781A5E9CD9B');
        $this->addSql('DROP TABLE sanatory_survey');
    }
}
