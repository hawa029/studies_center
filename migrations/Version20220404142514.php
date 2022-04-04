<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220404142514 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `admin` ADD is_connected TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE student ADD is_connected TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE teacher ADD is_connected TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE user ADD is_connected TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `admin` DROP is_connected');
        $this->addSql('ALTER TABLE student DROP is_connected');
        $this->addSql('ALTER TABLE teacher DROP is_connected');
        $this->addSql('ALTER TABLE user DROP is_connected');
    }
}
