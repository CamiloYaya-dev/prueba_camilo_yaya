<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250527061638 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE proyecto (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion LONGTEXT DEFAULT NULL, estado VARCHAR(255) NOT NULL, activo TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', updated_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE tarea (id INT AUTO_INCREMENT NOT NULL, usuario_id INT NOT NULL, proyecto_id INT NOT NULL, descripcion LONGTEXT NOT NULL, estado VARCHAR(255) NOT NULL, fecha DATETIME NOT NULL, duracion INT NOT NULL, activo TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', updated_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_3CA05366DB38439E (usuario_id), INDEX IDX_3CA05366F625D1BA (proyecto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, activo TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', updated_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE usuario_proyecto (id INT AUTO_INCREMENT NOT NULL, usuario_id INT NOT NULL, proyecto_id INT NOT NULL, tarifa NUMERIC(10, 2) NOT NULL, activo TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', updated_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_8713F020DB38439E (usuario_id), INDEX IDX_8713F020F625D1BA (proyecto_id), UNIQUE INDEX unique_usuario_proyecto_activo (usuario_id, proyecto_id, activo), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', available_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tarea ADD CONSTRAINT FK_3CA05366DB38439E FOREIGN KEY (usuario_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tarea ADD CONSTRAINT FK_3CA05366F625D1BA FOREIGN KEY (proyecto_id) REFERENCES proyecto (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE usuario_proyecto ADD CONSTRAINT FK_8713F020DB38439E FOREIGN KEY (usuario_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE usuario_proyecto ADD CONSTRAINT FK_8713F020F625D1BA FOREIGN KEY (proyecto_id) REFERENCES proyecto (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE tarea DROP FOREIGN KEY FK_3CA05366DB38439E
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tarea DROP FOREIGN KEY FK_3CA05366F625D1BA
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE usuario_proyecto DROP FOREIGN KEY FK_8713F020DB38439E
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE usuario_proyecto DROP FOREIGN KEY FK_8713F020F625D1BA
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE proyecto
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE tarea
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE usuario_proyecto
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
    }
}
