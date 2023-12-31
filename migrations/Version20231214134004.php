<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231214134004 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client_avis (id INT AUTO_INCREMENT NOT NULL, id_client_id INT DEFAULT NULL, date_publication DATETIME NOT NULL, avis VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_5E0D689299DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE client_avis ADD CONSTRAINT FK_5E0D689299DED506 FOREIGN KEY (id_client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD email VARCHAR(180) NOT NULL, ADD roles JSON NOT NULL COMMENT \'(DC2Type:json)\', ADD password VARCHAR(255) NOT NULL, DROP first_name, DROP last_name');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client_avis DROP FOREIGN KEY FK_5E0D689299DED506');
        $this->addSql('DROP TABLE client_avis');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE user ADD last_name VARCHAR(255) NOT NULL, DROP email, DROP roles, CHANGE password first_name VARCHAR(255) NOT NULL');
    }
}
