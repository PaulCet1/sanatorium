<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230929152142 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE scheduled_treatment DROP FOREIGN KEY FK_8E1C2636471C0366');
        $this->addSql('DROP INDEX IDX_8E1C2636471C0366 ON scheduled_treatment');
        $this->addSql('ALTER TABLE scheduled_treatment DROP treatment_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE scheduled_treatment ADD treatment_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE scheduled_treatment ADD CONSTRAINT FK_8E1C2636471C0366 FOREIGN KEY (treatment_id) REFERENCES treatment (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_8E1C2636471C0366 ON scheduled_treatment (treatment_id)');
    }
}
