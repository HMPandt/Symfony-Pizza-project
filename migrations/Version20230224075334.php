<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230224075334 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pizzas ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE pizzas ADD CONSTRAINT FK_C6CC6E4012469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_C6CC6E4012469DE2 ON pizzas (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pizzas DROP FOREIGN KEY FK_C6CC6E4012469DE2');
        $this->addSql('DROP INDEX IDX_C6CC6E4012469DE2 ON pizzas');
        $this->addSql('ALTER TABLE pizzas DROP category_id');
    }
}
