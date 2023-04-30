CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255),
    position VARCHAR(255)
);

INSERT INTO users (id, name, address, position)
VALUES
    (92301, 'John Hamun', 'Binus Alam Sutra', 'Mahasiswa'),
    (92302, 'Kenz Ilnom', 'Binus Anggrek', 'Kompti'),
    (92303, 'Alexandrius Kwon', 'Binus Syahdan', 'International Relationship'),
    (92304, 'Marchel Tan', 'Binus Semarang', 'Guru Binary Exploitation');