<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231103215632 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rehabilitation_stay_planned DROP FOREIGN KEY FK_E0322D70A5E9CD9B');
        $this->addSql('ALTER TABLE rehabilitation_stay_planned DROP FOREIGN KEY FK_E0322D70BB1210E2');
        $this->addSql('DROP TABLE rehabilitation_stay_planned');
        $this->addSql('ALTER TABLE planned_stay ADD rehabilitationStay_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE planned_stay ADD CONSTRAINT FK_E551EE01C0776AB1 FOREIGN KEY (rehabilitationStay_id) REFERENCES rehabilitation_stay (id)');
        $this->addSql('CREATE INDEX IDX_E551EE01C0776AB1 ON planned_stay (rehabilitationStay_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rehabilitation_stay_planned (rehabilitation_stay_id INT NOT NULL, planned_stay_id INT NOT NULL, INDEX IDX_E0322D70BB1210E2 (planned_stay_id), INDEX IDX_E0322D70A5E9CD9B (rehabilitation_stay_id), PRIMARY KEY(rehabilitation_stay_id, planned_stay_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE rehabilitation_stay_planned ADD CONSTRAINT FK_E0322D70A5E9CD9B FOREIGN KEY (rehabilitation_stay_id) REFERENCES rehabilitation_stay (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rehabilitation_stay_planned ADD CONSTRAINT FK_E0322D70BB1210E2 FOREIGN KEY (planned_stay_id) REFERENCES planned_stay (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE planned_stay DROP FOREIGN KEY FK_E551EE01C0776AB1');
        $this->addSql('DROP INDEX IDX_E551EE01C0776AB1 ON planned_stay');
        $this->addSql('ALTER TABLE planned_stay DROP rehabilitationStay_id');
    }
}
