CREATE DATABASE haj_monitoring;
USE haj_monitoring;

-- جدول النطاقات
CREATE TABLE zones (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL
);

-- جدول القطاعات
CREATE TABLE sectors (
  id INT AUTO_INCREMENT PRIMARY KEY,
  zone_id INT,
  name VARCHAR(100) NOT NULL,
  FOREIGN KEY (zone_id) REFERENCES zones(id)
);

-- جدول المناوبات
CREATE TABLE shifts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  zone_id INT,
  sector_id INT,
  chief_name VARCHAR(100),
  chief_code VARCHAR(50),
  date_time DATETIME,
  shift_number INT,
  total_units INT,
  total_providers INT,
  employees_count INT,
  volunteers_count INT,
  FOREIGN KEY (zone_id) REFERENCES zones(id),
  FOREIGN KEY (sector_id) REFERENCES sectors(id)
);

-- جدول المركبات
CREATE TABLE vehicles (
  id INT AUTO_INCREMENT PRIMARY KEY,
  shift_id INT,
  ambulance INT,
  golf INT,
  motorcycle INT,
  electric_bike INT,
  scooter INT,
  bus INT,
  salma INT,
  sanad INT,
  tanhat INT,
  tuwaik INT,
  tuwaik_icu INT,
  FOREIGN KEY (shift_id) REFERENCES shifts(id)
);
