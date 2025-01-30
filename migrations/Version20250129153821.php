<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250129153821 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, order_details_id_id INT DEFAULT NULL, INDEX IDX_F529939842C8706A (order_details_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE order_details (id INT AUTO_INCREMENT NOT NULL, article_id_id INT DEFAULT NULL, INDEX IDX_845CA2C18F3EC46 (article_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F529939842C8706A FOREIGN KEY (order_details_id_id) REFERENCES order_details (id)');
        $this->addSql('ALTER TABLE order_details ADD CONSTRAINT FK_845CA2C18F3EC46 FOREIGN KEY (article_id_id) REFERENCES article (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F529939842C8706A');
        $this->addSql('ALTER TABLE order_details DROP FOREIGN KEY FK_845CA2C18F3EC46');
        $this->addSql('DROP TABLE `order`');
        $this->addSql('DROP TABLE order_details');
    }
}
