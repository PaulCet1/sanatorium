<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230929143830 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE scheduled_treatment (id INT AUTO_INCREMENT NOT NULL, rehabilitation_stay_id INT DEFAULT NULL, treatment_id INT DEFAULT NULL, start_time DATETIME NOT NULL, end_time DATETIME NOT NULL, created DATETIME NOT NULL, INDEX IDX_8E1C2636A5E9CD9B (rehabilitation_stay_id), INDEX IDX_8E1C2636471C0366 (treatment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE scheduled_treatment ADD CONSTRAINT FK_8E1C2636A5E9CD9B FOREIGN KEY (rehabilitation_stay_id) REFERENCES rehabilitation_stay (id)');
        $this->addSql('ALTER TABLE scheduled_treatment ADD CONSTRAINT FK_8E1C2636471C0366 FOREIGN KEY (treatment_id) REFERENCES treatment (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE scheduled_treatment DROP FOREIGN KEY FK_8E1C2636A5E9CD9B');
        $this->addSql('ALTER TABLE scheduled_treatment DROP FOREIGN KEY FK_8E1C2636471C0366');
        $this->addSql('DROP TABLE scheduled_treatment');
    }
}
