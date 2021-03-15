<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210315090240 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE acces (id INT AUTO_INCREMENT NOT NULL, utilisateurid_id INT DEFAULT NULL, documentid_id INT DEFAULT NULL, autorisationid_id INT DEFAULT NULL, INDEX IDX_D0F43B10EBE08276 (utilisateurid_id), INDEX IDX_D0F43B1085D562DF (documentid_id), INDEX IDX_D0F43B106CC15120 (autorisationid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE autorisation (id INT AUTO_INCREMENT NOT NULL, lecture TINYINT(1) NOT NULL, ecriture TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, chemin VARCHAR(255) NOT NULL, date DATETIME NOT NULL, ectif TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE acces ADD CONSTRAINT FK_D0F43B10EBE08276 FOREIGN KEY (utilisateurid_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE acces ADD CONSTRAINT FK_D0F43B1085D562DF FOREIGN KEY (documentid_id) REFERENCES document (id)');
        $this->addSql('ALTER TABLE acces ADD CONSTRAINT FK_D0F43B106CC15120 FOREIGN KEY (autorisationid_id) REFERENCES autorisation (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE acces DROP FOREIGN KEY FK_D0F43B106CC15120');
        $this->addSql('ALTER TABLE acces DROP FOREIGN KEY FK_D0F43B1085D562DF');
        $this->addSql('ALTER TABLE acces DROP FOREIGN KEY FK_D0F43B10EBE08276');
        $this->addSql('DROP TABLE acces');
        $this->addSql('DROP TABLE autorisation');
        $this->addSql('DROP TABLE document');
        $this->addSql('DROP TABLE utilisateur');
    }
}
