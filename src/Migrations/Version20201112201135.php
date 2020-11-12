<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201112201135 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dedi_sylius_seo_content (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE `UTF8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dedi_sylius_seo_content_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT NOT NULL, seo_not_indexable TINYINT(1) DEFAULT \'0\' NOT NULL, seo_metadata_title VARCHAR(255) DEFAULT NULL, seo_metadata_description VARCHAR(255) DEFAULT NULL, seo_og_metadata_title VARCHAR(255) DEFAULT NULL, seo_og_metadata_description VARCHAR(255) DEFAULT NULL, seo_og_metadata_url VARCHAR(255) DEFAULT NULL, seo_og_metadata_image VARCHAR(255) DEFAULT NULL, seo_og_metadata_type VARCHAR(255) DEFAULT NULL, locale VARCHAR(255) NOT NULL, INDEX IDX_E67669382C2AC5D3 (translatable_id), UNIQUE INDEX dedi_sylius_seo_content_translation_uniq_trans (translatable_id, locale), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE `UTF8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dedi_sylius_seo_content_translation ADD CONSTRAINT FK_E67669382C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES dedi_sylius_seo_content (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sylius_channel ADD google_analytics_code VARCHAR(255) DEFAULT NULL, ADD google_tag_manager_id VARCHAR(255) DEFAULT NULL, ADD referenceableContent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sylius_channel ADD CONSTRAINT FK_16C8119E6C2DE67 FOREIGN KEY (referenceableContent_id) REFERENCES dedi_sylius_seo_content (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_16C8119E6C2DE67 ON sylius_channel (referenceableContent_id)');
        $this->addSql('ALTER TABLE sylius_product ADD brand VARCHAR(255) DEFAULT NULL, ADD gtin8 VARCHAR(8) DEFAULT NULL, ADD gtin13 VARCHAR(13) DEFAULT NULL, ADD gtin14 VARCHAR(14) DEFAULT NULL, ADD mpn VARCHAR(255) DEFAULT NULL, ADD isbn VARCHAR(255) DEFAULT NULL, ADD sku VARCHAR(255) DEFAULT NULL, ADD offer_aggregated TINYINT(1) DEFAULT \'0\' NOT NULL, ADD referenceableContent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sylius_product ADD CONSTRAINT FK_677B9B746C2DE67 FOREIGN KEY (referenceableContent_id) REFERENCES dedi_sylius_seo_content (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_677B9B746C2DE67 ON sylius_product (referenceableContent_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dedi_sylius_seo_content_translation DROP FOREIGN KEY FK_E67669382C2AC5D3');
        $this->addSql('ALTER TABLE sylius_channel DROP FOREIGN KEY FK_16C8119E6C2DE67');
        $this->addSql('ALTER TABLE sylius_product DROP FOREIGN KEY FK_677B9B746C2DE67');
        $this->addSql('DROP TABLE dedi_sylius_seo_content');
        $this->addSql('DROP TABLE dedi_sylius_seo_content_translation');
        $this->addSql('DROP INDEX UNIQ_16C8119E6C2DE67 ON sylius_channel');
        $this->addSql('ALTER TABLE sylius_channel DROP google_analytics_code, DROP google_tag_manager_id, DROP referenceableContent_id');
        $this->addSql('DROP INDEX UNIQ_677B9B746C2DE67 ON sylius_product');
        $this->addSql('ALTER TABLE sylius_product DROP brand, DROP gtin8, DROP gtin13, DROP gtin14, DROP mpn, DROP isbn, DROP sku, DROP offer_aggregated, DROP referenceableContent_id');
    }
}
