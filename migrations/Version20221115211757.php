<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221115211757 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tache ADD id_emp_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tache ADD CONSTRAINT FK_938720755C5185E5 FOREIGN KEY (id_emp_id) REFERENCES employe (id)');
        $this->addSql('CREATE INDEX IDX_938720755C5185E5 ON tache (id_emp_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tache DROP FOREIGN KEY FK_938720755C5185E5');
        $this->addSql('DROP INDEX IDX_938720755C5185E5 ON tache');
        $this->addSql('ALTER TABLE tache DROP id_emp_id');
    }
}
