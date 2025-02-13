<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250129155830 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` ADD date DATE NOT NULL, ADD amount NUMERIC(10, 0) NOT NULL, ADD status VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE order_details ADD date DATE NOT NULL, ADD getamount VARCHAR(255) NOT NULL, ADD status VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` DROP date, DROP amount, DROP status');
        $this->addSql('ALTER TABLE order_details DROP date, DROP getamount, DROP status');
    }
}
