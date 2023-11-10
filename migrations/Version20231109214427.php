<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231109214427 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE treatment_plan ADD planned_stay_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE treatment_plan ADD CONSTRAINT FK_1E99976CBB1210E2 FOREIGN KEY (planned_stay_id) REFERENCES planned_stay (id)');
        $this->addSql('CREATE INDEX IDX_1E99976CBB1210E2 ON treatment_plan (planned_stay_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE treatment_plan DROP FOREIGN KEY FK_1E99976CBB1210E2');
        $this->addSql('DROP INDEX IDX_1E99976CBB1210E2 ON treatment_plan');
        $this->addSql('ALTER TABLE treatment_plan DROP planned_stay_id');
    }
}
