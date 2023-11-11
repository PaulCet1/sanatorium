<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231111124125 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rehabilitation_stay ADD treatment_profile_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rehabilitation_stay ADD CONSTRAINT FK_A6254374DF84AFAD FOREIGN KEY (treatment_profile_id) REFERENCES treatment_profile (id)');
        $this->addSql('CREATE INDEX IDX_A6254374DF84AFAD ON rehabilitation_stay (treatment_profile_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rehabilitation_stay DROP FOREIGN KEY FK_A6254374DF84AFAD');
        $this->addSql('DROP INDEX IDX_A6254374DF84AFAD ON rehabilitation_stay');
        $this->addSql('ALTER TABLE rehabilitation_stay DROP treatment_profile_id');
    }
}
