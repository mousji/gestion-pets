<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220406221647 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE continent (id INT AUTO_INCREMENT NOT NULL, lib VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE continent_pet (continent_id INT NOT NULL, pet_id INT NOT NULL, INDEX IDX_417508C5921F4C77 (continent_id), INDEX IDX_417508C5966F7FB6 (pet_id), PRIMARY KEY(continent_id, pet_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE continent_pet ADD CONSTRAINT FK_417508C5921F4C77 FOREIGN KEY (continent_id) REFERENCES continent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE continent_pet ADD CONSTRAINT FK_417508C5966F7FB6 FOREIGN KEY (pet_id) REFERENCES pet (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE continent_pet DROP FOREIGN KEY FK_417508C5921F4C77');
        $this->addSql('DROP TABLE continent');
        $this->addSql('DROP TABLE continent_pet');
    }
}
