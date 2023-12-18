<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231218125544 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE command_line (id INT AUTO_INCREMENT NOT NULL, command_id_id INT NOT NULL, product_id_id INT NOT NULL, quantity INT NOT NULL, unit_price NUMERIC(10, 2) NOT NULL, UNIQUE INDEX UNIQ_70BE1A7BECECCB64 (command_id_id), UNIQUE INDEX UNIQ_70BE1A7BDE18E50B (product_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE command_line ADD CONSTRAINT FK_70BE1A7BECECCB64 FOREIGN KEY (command_id_id) REFERENCES command (id)');
        $this->addSql('ALTER TABLE command_line ADD CONSTRAINT FK_70BE1A7BDE18E50B FOREIGN KEY (product_id_id) REFERENCES product (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE command_line DROP FOREIGN KEY FK_70BE1A7BECECCB64');
        $this->addSql('ALTER TABLE command_line DROP FOREIGN KEY FK_70BE1A7BDE18E50B');
        $this->addSql('DROP TABLE command_line');
    }
}
