<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220206164610 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Insert Sensor Types';
    }

    public function up(Schema $schema): void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->addSql("
                INSERT INTO sensor_type (name)
                VALUES ('name".$i."')
            ");
        }
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
