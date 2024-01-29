<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231231195451 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, contact_email VARCHAR(255) NOT NULL, topic VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, created DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sanatory_survey (id INT AUTO_INCREMENT NOT NULL, reservation_id INT DEFAULT NULL, rehabilitation_stay_rating INT NOT NULL, treatment_rating INT NOT NULL, staff_rating INT NOT NULL, text VARCHAR(255) DEFAULT NULL, created DATETIME NOT NULL, INDEX IDX_5C9F9781B83297E7 (reservation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sanatory_survey ADD CONSTRAINT FK_5C9F9781B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sanatory_survey DROP FOREIGN KEY FK_5C9F9781B83297E7');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE sanatory_survey');
    }
}
