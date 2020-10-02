<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201002112447 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, pseudo VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE escape_game (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, duration TIME NOT NULL, date_time DATETIME NOT NULL, number_min INT NOT NULL, number_max INT NOT NULL, public TINYINT(1) NOT NULL, excerpt VARCHAR(255) NOT NULL, category_name VARCHAR(255) NOT NULL, category_font VARCHAR(255) NOT NULL, category_color VARCHAR(255) NOT NULL, resume_text LONGTEXT NOT NULL, resume_image VARCHAR(255) NOT NULL, introduction_text LONGTEXT NOT NULL, introduction_image VARCHAR(255) NOT NULL, instructions_text LONGTEXT NOT NULL, instructions_image VARCHAR(255) NOT NULL, happy_end_text LONGTEXT NOT NULL, happy_end_image VARCHAR(255) NOT NULL, game_over_text LONGTEXT NOT NULL, game_over_image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE escape_game');
    }
}
