<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230929102157 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rehabilitation_stay_treatment (rehabilitation_stay_id INT NOT NULL, treatment_id INT NOT NULL, INDEX IDX_58CD0D6AA5E9CD9B (rehabilitation_stay_id), INDEX IDX_58CD0D6A471C0366 (treatment_id), PRIMARY KEY(rehabilitation_stay_id, treatment_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rehabilitation_stay_treatment ADD CONSTRAINT FK_58CD0D6AA5E9CD9B FOREIGN KEY (rehabilitation_stay_id) REFERENCES rehabilitation_stay (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rehabilitation_stay_treatment ADD CONSTRAINT FK_58CD0D6A471C0366 FOREIGN KEY (treatment_id) REFERENCES treatment (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rehabilitation_stay_treatment DROP FOREIGN KEY FK_58CD0D6AA5E9CD9B');
        $this->addSql('ALTER TABLE rehabilitation_stay_treatment DROP FOREIGN KEY FK_58CD0D6A471C0366');
        $this->addSql('DROP TABLE rehabilitation_stay_treatment');
    }
}
