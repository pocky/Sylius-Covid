<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200404204903 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE coop_tilleuls_click_n_collect_location (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, enabled TINYINT(1) NOT NULL, name VARCHAR(255) NOT NULL, street VARCHAR(255) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, postcode VARCHAR(255) DEFAULT NULL, country_code VARCHAR(255) DEFAULT NULL, province_code VARCHAR(255) DEFAULT NULL, province_name VARCHAR(255) DEFAULT NULL, rrule VARCHAR(255) NOT NULL, order_preparation_delay INT NOT NULL, throughput INT NOT NULL, generate_pin TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_EB00CA2277153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE `UTF8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coop_tilleuls_click_n_collect_shipping_method_location (shippingmethod_id INT NOT NULL, location_id INT NOT NULL, INDEX IDX_967D835CABA732A8 (shippingmethod_id), INDEX IDX_967D835C64D218E (location_id), PRIMARY KEY(shippingmethod_id, location_id)) DEFAULT CHARACTER SET UTF8 COLLATE `UTF8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE coop_tilleuls_click_n_collect_shipping_method_location ADD CONSTRAINT FK_967D835CABA732A8 FOREIGN KEY (shippingmethod_id) REFERENCES sylius_shipping_method (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE coop_tilleuls_click_n_collect_shipping_method_location ADD CONSTRAINT FK_967D835C64D218E FOREIGN KEY (location_id) REFERENCES coop_tilleuls_click_n_collect_location (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sylius_shipment ADD location_id INT DEFAULT NULL, ADD pin VARCHAR(255) DEFAULT NULL, ADD collection_time DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE sylius_shipment ADD CONSTRAINT FK_FD707B3364D218E FOREIGN KEY (location_id) REFERENCES coop_tilleuls_click_n_collect_location (id)');
        $this->addSql('CREATE INDEX IDX_FD707B3364D218E ON sylius_shipment (location_id)');
        $this->addSql('CREATE INDEX IDX_FD707B3364D218E25E3B4AB ON sylius_shipment (location_id, collection_time)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sylius_shipment DROP FOREIGN KEY FK_FD707B3364D218E');
        $this->addSql('ALTER TABLE coop_tilleuls_click_n_collect_shipping_method_location DROP FOREIGN KEY FK_967D835C64D218E');
        $this->addSql('DROP TABLE coop_tilleuls_click_n_collect_location');
        $this->addSql('DROP TABLE coop_tilleuls_click_n_collect_shipping_method_location');
        $this->addSql('DROP INDEX IDX_FD707B3364D218E ON sylius_shipment');
        $this->addSql('ALTER TABLE sylius_shipment DROP location_id, DROP pin, DROP collection_time');
    }
}
