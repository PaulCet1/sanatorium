<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231011205806 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE scheduled_treatment DROP FOREIGN KEY FK_8E1C2636A5E9CD9B');
        $this->addSql('DROP TABLE scheduled_treatment');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495554B473AE');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C55A8713');
        $this->addSql('DROP INDEX IDX_42C84955C55A8713 ON reservation');
        $this->addSql('DROP INDEX IDX_42C8495554B473AE ON reservation');
        $this->addSql('ALTER TABLE reservation DROP hotel_room, DROP bather, DROP num_of_orders');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE scheduled_treatment (id INT AUTO_INCREMENT NOT NULL, rehabilitation_stay_id INT DEFAULT NULL, start_time DATETIME NOT NULL, end_time DATETIME NOT NULL, created DATETIME NOT NULL, INDEX IDX_8E1C2636A5E9CD9B (rehabilitation_stay_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE scheduled_treatment ADD CONSTRAINT FK_8E1C2636A5E9CD9B FOREIGN KEY (rehabilitation_stay_id) REFERENCES rehabilitation_stay (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE reservation ADD hotel_room INT DEFAULT NULL, ADD bather INT DEFAULT NULL, ADD num_of_orders INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495554B473AE FOREIGN KEY (bather) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955C55A8713 FOREIGN KEY (hotel_room) REFERENCES room (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_42C84955C55A8713 ON reservation (hotel_room)');
        $this->addSql('CREATE INDEX IDX_42C8495554B473AE ON reservation (bather)');
    }
}
