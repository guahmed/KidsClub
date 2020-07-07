<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200707160130 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE manager ADD name VARCHAR(255) NOT NULL, ADD last_name VARCHAR(255) NOT NULL, ADD age INT NOT NULL, ADD telphone VARCHAR(255) NOT NULL, ADD adress VARCHAR(255) NOT NULL, ADD govermnet VARCHAR(255) NOT NULL, ADD postal_code INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE manager DROP name, DROP last_name, DROP age, DROP telphone, DROP adress, DROP govermnet, DROP postal_code');
    }
}
