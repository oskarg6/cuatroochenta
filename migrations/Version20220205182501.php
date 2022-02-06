<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220205182501 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sensor (id INT AUTO_INCREMENT NOT NULL, sensor_type_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, value DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_BC8617B05E237E06 (name), UNIQUE INDEX UNIQ_BC8617B01D775834 (value), INDEX IDX_BC8617B0D8550BD9 (sensor_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sensor_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_A13AC6865E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sensor ADD CONSTRAINT FK_BC8617B0D8550BD9 FOREIGN KEY (sensor_type_id) REFERENCES sensor_type (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sensor DROP FOREIGN KEY FK_BC8617B0D8550BD9');
        $this->addSql('DROP TABLE sensor');
        $this->addSql('DROP TABLE sensor_type');
    }
}
