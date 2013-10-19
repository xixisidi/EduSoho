<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20131016003420 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->addSql("ALTER TABLE  `user_disk_file` ADD  `convertHash` VARCHAR( 128 ) NOT NULL DEFAULT  '' COMMENT  '文件格式转换的HashID' AFTER  `etag` , ADD INDEX (  `convertHash` ) ;");
        $this->addSql("ALTER TABLE  `user_disk_file` ADD  `formats` TEXT NULL DEFAULT NULL AFTER  `convertHash` ;");
        $this->addSql("ALTER TABLE  `user_disk_file` ADD  `convertStatus` ENUM( 'none', 'waiting', 'doing',  'success',  'error' ) NOT NULL DEFAULT  'none' AFTER  `convertHash` ;");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs

    }
}