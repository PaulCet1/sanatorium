<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231103213411 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planned_stay DROP FOREIGN KEY FK_E551EE01C0776AB1');
        $this->addSql('DROP INDEX IDX_E551EE01C0776AB1 ON planned_stay');
        $this->addSql('ALTER TABLE planned_stay DROP rehabilitationStay_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planned_stay ADD rehabilitationStay_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE planned_stay ADD CONSTRAINT FK_E551EE01C0776AB1 FOREIGN KEY (rehabilitationStay_id) REFERENCES rehabilitation_stay (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_E551EE01C0776AB1 ON planned_stay (rehabilitationStay_id)');
    }
}
