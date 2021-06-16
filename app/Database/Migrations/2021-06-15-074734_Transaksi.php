<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],
			'id_pembeli' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true
			],
			'id_barang' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true
			],
			'jumlah' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'total_harga' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'alamat' => [
				'type' => 'TEXT'
			],
			'ongkir' => [
				'type' => 'INT'
			],
			'status' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'created_by' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'created_date' => [
				'type' => 'DATETIME'
			],
			'updated_by' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => true
			],
			'updated_date' => [
				'type' => 'DATETIME',
				'null' => true
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('id_pembeli', 'user', 'id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('id_barang', 'barang', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('transaksi');
	}

	public function down()
	{
		$this->forge->dropTable('transaksi');
	}
}
