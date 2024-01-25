-- Create Databade
create database crud_db;

use crud_db;
-- Create Table Karyawan
CREATE TABLE `karyawan` (
    `id` int(10) NOT NULL auto_increment,
    `nama` varchar(100),
    `alamat` varchar(100),
    `jenis_kelamin` varchar(10),
    `no_hp` varchar(12),
    PRIMARY KEY (`id`)
);