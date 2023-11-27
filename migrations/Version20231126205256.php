<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231126205256 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sanatory_survey DROP FOREIGN KEY FK_5C9F9781A5E9CD9B');
        $this->addSql('ALTER TABLE sanatory_survey DROP FOREIGN KEY FK_5C9F9781A76ED395');
        $this->addSql('DROP INDEX IDX_5C9F9781A5E9CD9B ON sanatory_survey');
        $this->addSql('DROP INDEX IDX_5C9F9781A76ED395 ON sanatory_survey');
        $this->addSql('ALTER TABLE sanatory_survey ADD reservation_id INT DEFAULT NULL, DROP rehabilitation_stay_id, DROP user_id');
        $this->addSql('ALTER TABLE sanatory_survey ADD CONSTRAINT FK_5C9F9781B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
        $this->addSql('CREATE INDEX IDX_5C9F9781B83297E7 ON sanatory_survey (reservation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sanatory_survey DROP FOREIGN KEY FK_5C9F9781B83297E7');
        $this->addSql('DROP INDEX IDX_5C9F9781B83297E7 ON sanatory_survey');
        $this->addSql('ALTER TABLE sanatory_survey ADD user_id INT DEFAULT NULL, CHANGE reservation_id rehabilitation_stay_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sanatory_survey ADD CONSTRAINT FK_5C9F9781A5E9CD9B FOREIGN KEY (rehabilitation_stay_id) REFERENCES rehabilitation_stay (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE sanatory_survey ADD CONSTRAINT FK_5C9F9781A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_5C9F9781A5E9CD9B ON sanatory_survey (rehabilitation_stay_id)');
        $this->addSql('CREATE INDEX IDX_5C9F9781A76ED395 ON sanatory_survey (user_id)');
    }
}
