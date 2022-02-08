<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220208193019 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_BC8617B01D775834 ON sensor');
        $this->addSql('DROP INDEX UNIQ_BC8617B05E237E06 ON sensor');
        $this->addSql('DROP INDEX UNIQ_A13AC6865E237E06 ON sensor_type');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BC8617B01D775834 ON sensor (value)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BC8617B05E237E06 ON sensor (name)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A13AC6865E237E06 ON sensor_type (name)');
    }
}
