CREATE DATABASE fakultas;

CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR (4) NOT NULL,
    nama VARCHAR (50) NOT NULL
);

CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR (8) NOT NULL,
    nama VARCHAR (50) NOT NULL,
    jenis_kelamin enum ('laki-laki', 'perempuan') NOT NULL,
    tempat_lahir VARCHAR (50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR (255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan (id)
);

-- memasukkan data jurusan
insert into jurusan (kode,nama) values ('ANRM','Manajemen');
insert into jurusan (kode,nama) values ('NZFR','Ilmu Komunikasi');

-- memasukkan data mahasiswa
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
values (1,'20220001', 'Hanum', 'Perempuan', 'Pasuruan', '2002-06-14', 'Jl. Siliwangi 46');
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
values (2,'20220002', 'Zain Malik', 'laki-laki', 'Surabaya', '2000-01-20', 'Jl. Merdeka Utara 07');

-- update data mahasiswa
update mahasiswa set tempat_lahir = "Malang" where id = 1;

-- delete data mahasiswa
delete from mahasiswa where id=3;