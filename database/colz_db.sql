CREATE TABLE customer (
customer_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
customer_name VARCHAR(30) NOT NULL,
contact_name VARCHAR(30) NOT NULL,
address VARCHAR(30) NOT NULL,
city VARCHAR(30) NOT NULL,
postal_code VARCHAR(30) NOT NULL,
country VARCHAR(50)
)

INSERT INTO customer (customer_name,contact_name, address, city, postal_code, country) VALUES ("nischal", "9823000133", "Opera", "Sydney", "144660", "Australia");

INSERT INTO customer (customer_name, contact_name, address, city, postal_code, country) VALUES
("vivek", "9823000123", "banasthali", "Kathamndu", "133660", "Nepal"),
("Anish", "9080000112", "machapokhari", "kathmandu", "144330", "Nepal");

INSERT INTO customer (customer_name, contact_name, address, city, postal_code, country) VALUES
("kumar", "97765432", "jughu", "Delhi", "144330", "India"),
("amit", "97765432", "jughu", "Delhi", "144330", "India");
("asis", "97765432", "jughu", "Delhi", "144330", "India");
("sugam", "97765432", "jughu", "Delhi", "144330", "India");

INSERT INTO customer (customer_name, contact_name, address, city, postal_code, country) VALUES
("kumar", "98792341", "minTown", "Shanghai", "13430", "China"),
("amit", "98792341", "minTown", "Shanghai", "13430", "China");
("asis", "98792341", "minTown", "Shanghai", "13430", "China");
("sugam", "98792341", "minTown", "Shanghai", "13430", "China");