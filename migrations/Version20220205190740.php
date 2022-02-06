<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220205190740 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Insert Measurements';
    }

    public function up(Schema $schema): void
    {
        for ($i = 0; $i < 10; $i++) {
            $this->addSql("
                INSERT INTO measurement (year, type, color, variety, temperature, graduation, ph, observations, wine)
                VALUES (1991, 'type".$i."', 'color".$i."', 'variety".$i."', 5.0, 11.0, 4, 'observations".$i."', 'wine".$i."')
            ");
        }
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
