<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231013140128 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495519EB6921');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955FCA532D');
        $this->addSql('DROP INDEX IDX_42C84955FCA532D ON reservation');
        $this->addSql('DROP INDEX IDX_42C8495519EB6921 ON reservation');
        $this->addSql('ALTER TABLE reservation ADD client INT DEFAULT NULL, ADD rehabilitationstay INT DEFAULT NULL, DROP client_id, DROP rehabilitationstay_id');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955C7440455 FOREIGN KEY (client) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849555D0C1BBB FOREIGN KEY (rehabilitationstay) REFERENCES rehabilitation_stay (id)');
        $this->addSql('CREATE INDEX IDX_42C84955C7440455 ON reservation (client)');
        $this->addSql('CREATE INDEX IDX_42C849555D0C1BBB ON reservation (rehabilitationstay)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C7440455');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849555D0C1BBB');
        $this->addSql('DROP INDEX IDX_42C84955C7440455 ON reservation');
        $this->addSql('DROP INDEX IDX_42C849555D0C1BBB ON reservation');
        $this->addSql('ALTER TABLE reservation ADD client_id INT DEFAULT NULL, ADD rehabilitationstay_id INT DEFAULT NULL, DROP client, DROP rehabilitationstay');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495519EB6921 FOREIGN KEY (client_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955FCA532D FOREIGN KEY (rehabilitationstay_id) REFERENCES rehabilitation_stay (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_42C84955FCA532D ON reservation (rehabilitationstay_id)');
        $this->addSql('CREATE INDEX IDX_42C8495519EB6921 ON reservation (client_id)');
    }
}
