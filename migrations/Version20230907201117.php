<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230907201117 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE treatment ADD leading_person_id INT DEFAULT NULL, DROP leading_person');
        $this->addSql('ALTER TABLE treatment ADD CONSTRAINT FK_98013C31BC399E7D FOREIGN KEY (leading_person_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_98013C31BC399E7D ON treatment (leading_person_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE treatment DROP FOREIGN KEY FK_98013C31BC399E7D');
        $this->addSql('DROP INDEX IDX_98013C31BC399E7D ON treatment');
        $this->addSql('ALTER TABLE treatment ADD leading_person VARCHAR(180) NOT NULL, DROP leading_person_id');
    }
}
