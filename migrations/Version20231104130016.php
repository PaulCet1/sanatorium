<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231104130016 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE treatment_plan (id INT AUTO_INCREMENT NOT NULL, rehabilitation_stay_id INT DEFAULT NULL, treatment_id INT DEFAULT NULL, time DATETIME NOT NULL, created DATETIME NOT NULL, INDEX IDX_1E99976CA5E9CD9B (rehabilitation_stay_id), INDEX IDX_1E99976C471C0366 (treatment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE treatment_plan ADD CONSTRAINT FK_1E99976CA5E9CD9B FOREIGN KEY (rehabilitation_stay_id) REFERENCES rehabilitation_stay (id)');
        $this->addSql('ALTER TABLE treatment_plan ADD CONSTRAINT FK_1E99976C471C0366 FOREIGN KEY (treatment_id) REFERENCES treatment (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE treatment_plan DROP FOREIGN KEY FK_1E99976CA5E9CD9B');
        $this->addSql('ALTER TABLE treatment_plan DROP FOREIGN KEY FK_1E99976C471C0366');
        $this->addSql('DROP TABLE treatment_plan');
    }
}
