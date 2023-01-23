
CREATE TABLE category (
    Category_id INT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL
);

CREATE TABLE product (
    Product_id INT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Price DECIMAL(10,2) NOT NULL,
    Description TEXT NOT NULL,
    Image VARCHAR(255) NOT NULL,
    Category_id INT,
    FOREIGN KEY (Category_id) REFERENCES category(Category_id)
);

CREATE TABLE admin (
    Admin_id INT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL
);

CREATE TABLE `order` (
    Order_id INT PRIMARY KEY,
    Total_price DECIMAL(10,2) NOT NULL,
    Date DATE NOT NULL,
    Admin_id INT,
    FOREIGN KEY (Admin_id) REFERENCES admin(Admin_id)
);

INSERT INTO category (Category_id, Name) VALUES
(5, 'MEAT & POULTRY'),
(6, 'BISCUITS, CRACKERS & CAKES'),
(7, 'ELECTRONICS & APPLIANCES'),
(8, 'RICE, PASTA & PULSES'),
(9, 'MILK & LABAN'),
(10, 'WATER');

INSERT INTO product (Product_id, Name, Price, Description, Image, Category_id) VALUES
(1, 'TANMIAH FRESH CHICKEN THIGHS', 10, 'CHICKEN', 'images/meat.png', 5),
(2, 'OREO CLASSIC 38GX 16', 20, 'SWEET', 'images/Oreo.jpg', 6),
(3, 'PHILIPS COFFE MAKER,HD7432/2', 300, 'COFFE TOOLS', 'images/PHILIPS COFFEE.jpg', 7),
(4, 'AL WALIMAH STYLE INDIAN BASMATTI RICE LONGGRAIN 5KG', 45, 'FOOD', 'images/Rice.png', 8),
(5, 'SAUDIA LONG LIFE FULL FAT MILK 1L X12 PIECES', 61, 'MILK', 'images/Saudi Milk.jpg', 9),
(6, 'NOVA WATER 550ML X24', 20, 'WATER', 'images/Nova.jpg', 10);

INSERT INTO admin (Admin_id, Name, Email, Password) VALUES
(5, 'David Williams', 'david@example.com', 'password'),
(6, 'Emily Brown', 'emily@example.com', 'password'),
(7, 'James Smith', 'james@example.com', 'password'),
(8, 'Sophia Johnson', 'sophia@example.com', 'password'),
(9, 'Olivia Williams', 'olivia@example.com', 'password'),
(10, 'Ava Brown', 'ava@example.com', 'password'),
(11, 'Isabella Smith', 'isabella@example.com', 'password'),
(12, 'Mia Johnson', 'mia@example.com', 'password'),
(13, 'Abigail Williams', 'abigail@example.com', 'password'),
(14, 'Emily Brown', 'emily@example.com', 'password'),
(15, 'Charlotte Smith', 'charlotte@example.com', 'password'),
(16, 'Harper Johnson', 'harper@example.com', 'password'),
(17, 'Amelia Williams', 'amelia@example.com', 'password'),
(18, 'Evelyn Brown', 'evelyn@example.com', 'password'),
(19, 'Elizabeth Smith', 'elizabeth@example.com', 'password'),
(20, 'Sofia Johnson', 'sofia@example.com', 'password');

INSERT INTO `order` (Order_id, Total_price, date) VALUES
(1, 14.97, '2022-01-01'),
(2, 7.98, '2022-01-02'),
(3, 12.95, '2022-01-03'),
(4, 9.97, '2022-01-04'),
(5, 14.97, '2022-01-05'),
(6, 7.98, '2022-01-06'),
(7, 12.95, '2022-01-07'),
(8, 9.97, '2022-01-08');






