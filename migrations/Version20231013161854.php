<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231013161854 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE leading_person_user DROP FOREIGN KEY FK_69D8C51E471C0366');
        $this->addSql('ALTER TABLE leading_person_user DROP FOREIGN KEY FK_69D8C51EA76ED395');
        $this->addSql('DROP TABLE leading_person_user');
        $this->addSql('ALTER TABLE treatment ADD leading_person_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE treatment ADD CONSTRAINT FK_98013C31BC399E7D FOREIGN KEY (leading_person_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_98013C31BC399E7D ON treatment (leading_person_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE leading_person_user (treatment_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_69D8C51EA76ED395 (user_id), INDEX IDX_69D8C51E471C0366 (treatment_id), PRIMARY KEY(treatment_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE leading_person_user ADD CONSTRAINT FK_69D8C51E471C0366 FOREIGN KEY (treatment_id) REFERENCES treatment (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE leading_person_user ADD CONSTRAINT FK_69D8C51EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE treatment DROP FOREIGN KEY FK_98013C31BC399E7D');
        $this->addSql('DROP INDEX IDX_98013C31BC399E7D ON treatment');
        $this->addSql('ALTER TABLE treatment DROP leading_person_id');
    }
}
