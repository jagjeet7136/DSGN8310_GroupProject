-- Insert queries for the `address` table with 30 entries
INSERT INTO `address` (`address_id`, `street`, `city`, `state`, `postal_code`, `country`) VALUES
(1, '123 Main St', 'Anytown', 'AnyState', '12345', 'USA'),
(2, '456 Elm St', 'Othertown', 'OtherState', '54321', 'USA'),
(3, '789 Oak St', 'Somewhere', 'SomeState', '67890', 'USA'),
(4, '456 Pine St', 'Newtown', 'NewState', '54321', 'USA'),
(5, '789 Maple St', 'Elsewhere', 'ElseState', '67890', 'USA'),
(6, '321 Cedar St', 'Anywhere', 'AnyState', '12345', 'USA'),
(7, '654 Birch St', 'Nowhere', 'NoState', '54321', 'USA'),
(8, '987 Walnut St', 'Everywhere', 'EveryState', '67890', 'USA'),
(9, '123 Oak St', 'Here', 'HereState', '12345', 'USA'),
(10, '456 Maple St', 'There', 'ThereState', '54321', 'USA'),
(11, '789 Elm St', 'Somewhere Else', 'SomeOtherState', '67890', 'USA'),
(12, '321 Cedar St', 'Over There', 'OverThereState', '12345', 'USA'),
(13, '654 Pine St', 'Anywhere Else', 'AnyOtherState', '54321', 'USA'),
(14, '987 Oak St', 'Nowhere Else', 'NoOtherState', '67890', 'USA'),
(15, '123 Maple St', 'Here and There', 'HereAndThereState', '12345', 'USA'),
(16, '456 Elm St', 'Everywhere Else', 'EveryOtherState', '54321', 'USA'),
(17, '789 Cedar St', 'This Place', 'ThisState', '67890', 'USA'),
(18, '321 Walnut St', 'That Place', 'ThatState', '12345', 'USA'),
(19, '654 Oak St', 'Some Place', 'SomeState', '54321', 'USA'),
(20, '987 Pine St', 'Some Other Place', 'SomeOtherState', '67890', 'USA'),
(21, '123 Elm St', 'Another Place', 'AnotherState', '12345', 'USA'),
(22, '456 Maple St', 'One More Place', 'OneMoreState', '54321', 'USA'),
(23, '789 Pine St', 'Last Place', 'LastState', '67890', 'USA'),
(24, '321 Oak St', 'Final Place', 'FinalState', '12345', 'USA'),
(25, '654 Elm St', 'Test Place', 'TestState', '54321', 'USA'),
(26, '987 Maple St', 'Example Place', 'ExampleState', '67890', 'USA'),
(27, '123 Pine St', 'Sample Place', 'SampleState', '12345', 'USA'),
(28, '456 Oak St', 'Random Place', 'RandomState', '54321', 'USA'),
(29, '789 Elm St', 'Placeholder Place', 'PlaceholderState', '67890', 'USA'),
(30, '321 Cedar St', 'Temporary Place', 'TemporaryState', '12345', 'USA'),
(31, '321 Cedar St', 'Temporary Place', 'TemporaryState', '12345', 'USA');

-- Insert queries for the `customers` table with 30 entries
INSERT INTO `customers` (`customer_id`, `first_name`, `last_name`, `email`, `phone`, `address_id`) VALUES
(1, 'John', 'Doe', 'john.doe@example.com', '123-456-7890', 1),
(2, 'Jane', 'Smith', 'jane.smith@example.com', '987-654-3210', 2),
(3, 'Michael', 'Johnson', 'michael.johnson@example.com', '555-555-5555', 3),
(4, 'Emily', 'Brown', 'emily.brown@example.com', '123-456-7890', 4),
(5, 'William', 'Wilson', 'william.wilson@example.com', '987-654-3210', 5),
(6, 'Olivia', 'Martinez', 'olivia.martinez@example.com', '555-555-5555', 6),
(7, 'James', 'Taylor', 'james.taylor@example.com', '123-456-7890', 7),
(8, 'Sophia', 'Anderson', 'sophia.anderson@example.com', '987-654-3210', 8),
(9, 'Daniel', 'Thomas', 'daniel.thomas@example.com', '555-555-5555', 9),
(10, 'Emma', 'Hernandez', 'emma.hernandez@example.com', '123-456-7890', 10),
(11, 'Alexander', 'Moore', 'alexander.moore@example.com', '987-654-3210', 11),
(12, 'Madison', 'Jackson', 'madison.jackson@example.com', '555-555-5555', 12),
(13, 'Ethan', 'White', 'ethan.white@example.com', '123-456-7890', 13),
(14, 'Abigail', 'Thompson', 'abigail.thompson@example.com', '987-654-3210', 14),
(15, 'Ava', 'Garcia', 'ava.garcia@example.com', '555-555-5555', 15),
(16, 'Noah', 'Clark', 'noah.clark@example.com', '123-456-7890', 16),
(17, 'Isabella', 'Rodriguez', 'isabella.rodriguez@example.com', '987-654-3210', 17),
(18, 'Mason', 'Lewis', 'mason.lewis@example.com', '555-555-5555', 18),
(19, 'Charlotte', 'Walker', 'charlotte.walker@example.com', '123-456-7890', 19),
(20, 'Liam', 'Hall', 'liam.hall@example.com', '987-654-3210', 20),
(21, 'Harper', 'Young', 'harper.young@example.com', '555-555-5555', 21),
(22, 'Evelyn', 'Scott', 'evelyn.scott@example.com', '123-456-7890', 22),
(23, 'Michael', 'King', 'michael.king@example.com', '987-654-3210', 23),
(24, 'Grace', 'Wright', 'grace.wright@example.com', '555-555-5555', 24),
(25, 'Logan', 'Lopez', 'logan.lopez@example.com', '123-456-7890', 25),
(26, 'Sophie', 'Hill', 'sophie.hill@example.com', '987-654-3210', 26),
(27, 'Lucas', 'Green', 'lucas.green@example.com', '555-555-5555', 27),
(28, 'Avery', 'Adams', 'avery.adams@example.com', '123-456-7890', 28),
(29, 'Aria', 'Baker', 'aria.baker@example.com', '987-654-3210', 29),
(30, 'Benjamin', 'Campbell', 'benjamin.campbell@example.com', '555-555-5555', 30),
(31, 'Benjamin', 'Campbell', 'benjamin.campbell@example.com', '555-555-5555', 31);


-- Insert queries for the `suppliers` table with 15 entries
INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `contact_person_name`, `contact_number`, `email`, `address`) VALUES
(1, 'ABC Supplier', 'John Supplier', '111-111-1111', 'john.supplier@example.com', '321 Maple St'),
(2, 'XYZ Supplier', 'Jane Supplier', '222-222-2222', 'jane.supplier@example.com', '654 Pine St'),
(3, '123 Supplier', 'Michael Supplier', '333-333-3333', 'michael.supplier@example.com', '987 Cedar St'),
(4, 'DEF Supplier', 'Emily Supplier', '444-444-4444', 'emily.supplier@example.com', '654 Oak St'),
(5, 'GHI Supplier', 'William Supplier', '555-555-5555', 'william.supplier@example.com', '987 Elm St'),
(6, '456 Supplier', 'Olivia Supplier', '666-666-6666', 'olivia.supplier@example.com', '321 Cedar St'),
(7, 'JKL Supplier', 'James Supplier', '777-777-7777', 'james.supplier@example.com', '789 Walnut St'),
(8, 'MNO Supplier', 'Sophia Supplier', '888-888-8888', 'sophia.supplier@example.com', '456 Pine St'),
(9, 'PQR Supplier', 'Daniel Supplier', '999-999-9999', 'daniel.supplier@example.com', '123 Oak St'),
(10, 'STU Supplier', 'Emma Supplier', '101-101-1010', 'emma.supplier@example.com', '987 Maple St'),
(11, 'VWX Supplier', 'Alexander Supplier', '202-202-2020', 'alexander.supplier@example.com', '321 Elm St'),
(12, 'YZA Supplier', 'Madison Supplier', '303-303-3030', 'madison.supplier@example.com', '456 Oak St'),
(13, 'BCD Supplier', 'Ethan Supplier', '404-404-4040', 'ethan.supplier@example.com', '789 Pine St'),
(14, 'EFG Supplier', 'Abigail Supplier', '505-505-5050', 'abigail.supplier@example.com', '123 Maple St'),
(15, 'HIJ Supplier', 'Ava Supplier', '606-606-6060', 'ava.supplier@example.com', '654 Elm St'),
(16, 'HIJ Supplier', 'Ava Supplier', '606-606-6060', 'ava.supplier@example.com', '654 Elm St');



-- Insert queries for the `products` table with 50 entries
INSERT INTO `products` (`product_id`, `product_name`, `description`, `price`, `supplier_id`, `quantity`) VALUES
(1, 'Hammer', 'A sturdy hammer for all your needs', 9.99, 1, 100),
(2, 'Screwdriver Set', 'A set of screwdrivers for various tasks', 19.99, 2, 50),
(3, 'Drill', 'A powerful drill for drilling holes', 49.99, 3, 20),
(4, 'Wrench', 'Adjustable wrench for tightening nuts and bolts', 12.99, 4, 80),
(5, 'Pliers', 'A versatile tool for gripping and cutting', 14.99, 5, 60),
(6, 'Measuring Tape', 'Measuring tape for accurate measurements', 7.99, 6, 70),
(7, 'Level', 'A tool for determining horizontal or vertical alignment', 24.99, 7, 40),
(8, 'Utility Knife', 'A sharp knife for various cutting tasks', 9.99, 8, 90),
(9, 'Saw', 'Hand saw for cutting wood or plastic', 34.99, 9, 30),
(10, 'Flashlight', 'A portable light source for illumination', 5.99, 10, 100),
(11, 'Sander', 'Power sander for smoothing surfaces', 59.99, 11, 25),
(12, 'Paintbrush Set', 'Set of brushes for painting tasks', 19.99, 12, 55),
(13, 'Extension Cord', 'Extra length power cord for convenience', 12.99, 13, 65),
(14, 'Caulk Gun', 'Tool for applying caulk or sealant', 8.99, 14, 35),
(15, 'Safety Glasses', 'Protective eyewear for safety', 4.99, 15, 120),
(16, 'Gloves', 'Work gloves for hand protection', 6.99, 1, 80),
(17, 'Hacksaw', 'Saw with a fine tooth blade for cutting metal', 27.99, 2, 40),
(18, 'Step Ladder', 'Portable ladder for reaching heights', 49.99, 3, 20),
(19, 'Cordless Drill', 'Drill powered by rechargeable batteries', 79.99, 4, 30),
(20, 'Socket Set', 'Set of sockets for fastening nuts and bolts', 29.99, 5, 50),
(21, 'Staple Gun', 'Tool for driving heavy-duty staples', 18.99, 6, 45),
(22, 'Chisel Set', 'Set of chisels for carving or cutting', 15.99, 7, 35),
(23, 'Angle Grinder', 'Power tool for grinding and polishing', 69.99, 8, 25),
(24, 'Hammerset Anchor', 'Anchor for securing objects to concrete', 1.99, 9, 200),
(25, 'Carpenter Pencil', 'Marking pencil for carpentry tasks', 0.99, 10, 300),
(26, 'Tape Measure', 'Retractable measuring tape for quick measurements', 8.99, 11, 70),
(27, 'Screw Assortment', 'Assortment of screws in various sizes', 6.99, 12, 150),
(28, 'Caulk', 'Sealant for filling gaps or cracks', 3.99, 13, 100),
(29, 'Glue Gun', 'Tool for dispensing hot melt adhesive', 12.99, 14, 40),
(30, 'Wire Stripper', 'Tool for removing insulation from wires', 9.99, 15, 60),
(31, 'Adjustable Clamp', 'Clamp for holding objects securely', 11.99, 1, 50),
(32, 'Hex Key Set', 'Set of hex keys for driving hexagonal screws', 7.99, 2, 80),
(33, 'Miter Saw', 'Power saw for making accurate crosscuts', 149.99, 3, 15),
(34, 'Paint Roller', 'Roller for applying paint to walls or surfaces', 5.99, 4, 90),
(35, 'Paint Tray', 'Tray for holding paint during painting tasks', 3.99, 5, 120),
(36, 'Brush Cleaner', 'Tool for cleaning paint brushes', 4.99, 6, 70),
(37, 'Tape Dispenser', 'Dispenser for adhesive tape', 2.99, 7, 100),
(38, 'Stud Finder', 'Tool for locating studs behind walls', 14.99, 8, 40),
(39, 'Utility Cart', 'Cart for transporting tools or materials', 39.99, 9, 20),
(40, 'Toolbox', 'Container for storing and organizing tools', 29.99, 10, 30),
(41, 'Dust Mask', 'Mask for filtering dust particles', 1.99, 11, 200),
(42, 'Safety Vest', 'High-visibility vest for safety', 9.99, 12, 100),
(43, 'Hard Hat', 'Protective helmet for head protection', 14.99, 13, 80),
(44, 'Work Boots', 'Boots with reinforced toes for foot protection', 34.99, 14, 60),
(45, 'Ear Plugs', 'Plugs for protecting ears from loud noises', 0.99, 15, 200),
(46, 'Ladder', 'Portable ladder for climbing heights', 69.99, 1, 25),
(47, 'Chain Saw', 'Power saw for cutting trees or branches', 179.99, 2, 10),
(48, 'Circular Saw', 'Power saw for making straight cuts', 99.99, 3, 20),
(49, 'Table Saw', 'Power saw for making accurate cuts on large pieces', 249.99, 4, 15),
(50, 'Router', 'Power tool for hollowing out an area in hard material', 149.99, 5, 30);


-- Insert queries for the `orders` table with 100 entries (random customers)
INSERT INTO `orders` (`order_id`, `customer_id`, `order_date`, `total_amount`, `status`) VALUES
(1, 1, '2024-04-01', 50.99, 'Pending'),
(2, 2, '2024-04-02', 75.50, 'Processing'),
(3, 3, '2024-04-03', 30.25, 'Shipped'),
(4, 4, '2024-04-04', 100.00, 'Delivered'),
(5, 5, '2024-04-05', 45.75, 'Pending'),
(6, 6, '2024-04-06', 80.00, 'Processing'),
(7, 7, '2024-04-07', 65.30, 'Shipped'),
(8, 8, '2024-04-08', 95.25, 'Delivered'),
(9, 9, '2024-04-09', 120.50, 'Pending'),
(10, 10, '2024-04-10', 55.75, 'Processing'),
(11, 11, '2024-04-11', 70.00, 'Shipped'),
(12, 12, '2024-04-12', 85.25, 'Delivered'),
(13, 13, '2024-04-13', 40.99, 'Pending'),
(14, 14, '2024-04-14', 65.50, 'Processing'),
(15, 15, '2024-04-15', 90.25, 'Shipped'),
(16, 16, '2024-04-16', 110.00, 'Delivered'),
(17, 17, '2024-04-17', 35.75, 'Pending'),
(18, 18, '2024-04-18', 50.00, 'Processing'),
(19, 19, '2024-04-19', 75.25, 'Shipped'),
(20, 20, '2024-04-20', 100.50, 'Delivered'),
(21, 21, '2024-04-21', 85.75, 'Pending'),
(22, 22, '2024-04-22', 120.00, 'Processing'),
(23, 23, '2024-04-23', 45.25, 'Shipped'),
(24, 24, '2024-04-24', 60.50, 'Delivered'),
(25, 25, '2024-04-25', 70.99, 'Pending'),
(26, 26, '2024-04-26', 95.50, 'Processing'),
(27, 27, '2024-04-27', 110.25, 'Shipped'),
(28, 28, '2024-04-28', 125.00, 'Delivered'),
(29, 29, '2024-04-29', 50.75, 'Pending'),
(30, 30, '2024-04-30', 75.00, 'Processing'),
(31, 1, '2024-05-01', 90.25, 'Shipped'),
(32, 2, '2024-05-02', 105.50, 'Delivered'),
(33, 3, '2024-05-03', 120.75, 'Pending'),
(34, 4, '2024-05-04', 135.00, 'Processing'),
(35, 5, '2024-05-05', 60.25, 'Shipped'),
(36, 6, '2024-05-06', 75.50, 'Delivered'),
(37, 7, '2024-05-07', 55.75, 'Pending'),
(38, 8, '2024-05-08', 70.00, 'Processing'),
(39, 9, '2024-05-09', 85.25, 'Shipped'),
(40, 10, '2024-05-10', 100.50, 'Delivered'),
(41, 11, '2024-05-11', 45.75, 'Pending'),
(42, 12, '2024-05-12', 60.00, 'Processing'),
(43, 13, '2024-05-13', 75.25, 'Shipped'),
(44, 14, '2024-05-14', 90.50, 'Delivered'),
(45, 15, '2024-05-15', 105.75, 'Pending'),
(46, 16, '2024-05-16', 120.00, 'Processing'),
(47, 17, '2024-05-17', 135.25, 'Shipped'),
(48, 18, '2024-05-18', 150.50, 'Delivered'),
(49, 19, '2024-05-19', 165.75, 'Pending'),
(50, 20, '2024-05-20', 180.00, 'Processing'),
(51, 21, '2024-05-21', 65.25, 'Shipped'),
(52, 22, '2024-05-22', 80.50, 'Delivered'),
(53, 23, '2024-05-23', 95.75, 'Pending'),
(54, 24, '2024-05-24', 110.00, 'Processing'),
(55, 25, '2024-05-25', 125.25, 'Shipped'),
(56, 26, '2024-05-26', 140.50, 'Delivered'),
(57, 27, '2024-05-27', 155.75, 'Pending'),
(58, 28, '2024-05-28', 170.00, 'Processing'),
(59, 29, '2024-05-29', 185.25, 'Shipped'),
(60, 30, '2024-05-30', 200.50, 'Delivered'),
(61, 1, '2024-06-01', 215.75, 'Pending'),
(62, 2, '2024-06-02', 230.00, 'Processing'),
(63, 3, '2024-06-03', 245.25, 'Shipped'),
(64, 4, '2024-06-04', 260.50, 'Delivered'),
(65, 5, '2024-06-05', 275.75, 'Pending'),
(66, 6, '2024-06-06', 290.00, 'Processing'),
(67, 7, '2024-06-07', 305.25, 'Shipped'),
(68, 8, '2024-06-08', 320.50, 'Delivered'),
(69, 9, '2024-06-09', 335.75, 'Pending'),
(70, 10, '2024-06-10', 350.00, 'Processing'),
(71, 11, '2024-06-11', 365.25, 'Shipped'),
(72, 12, '2024-06-12', 380.50, 'Delivered'),
(73, 13, '2024-06-13', 395.75, 'Pending'),
(74, 14, '2024-06-14', 410.00, 'Processing'),
(75, 15, '2024-06-15', 425.25, 'Shipped'),
(76, 16, '2024-06-16', 440.50, 'Delivered'),
(77, 17, '2024-06-17', 455.75, 'Pending'),
(78, 18, '2024-06-18', 470.00, 'Processing'),
(79, 19, '2024-06-19', 485.25, 'Shipped'),
(80, 20, '2024-06-20', 500.50, 'Delivered'),
(81, 21, '2024-06-21', 515.75, 'Pending'),
(82, 22, '2024-06-22', 530.00, 'Processing'),
(83, 23, '2024-06-23', 545.25, 'Shipped'),
(84, 24, '2024-06-24', 560.50, 'Delivered'),
(85, 25, '2024-06-25', 575.75, 'Pending'),
(86, 26, '2024-06-26', 590.00, 'Processing'),
(87, 27, '2024-06-27', 605.25, 'Shipped'),
(88, 28, '2024-06-28', 620.50, 'Delivered'),
(89, 29, '2024-06-29', 635.75, 'Pending'),
(90, 30, '2024-06-30', 650.00, 'Processing'),
(91, 1, '2024-07-01', 665.25, 'Shipped'),
(92, 2, '2024-07-02', 680.50, 'Delivered'),
(93, 3, '2024-07-03', 695.75, 'Pending'),
(94, 4, '2024-07-04', 710.00, 'Processing'),
(95, 5, '2024-07-05', 725.25, 'Shipped'),
(96, 6, '2024-07-06', 740.50, 'Delivered'),
(97, 7, '2024-07-07', 755.75, 'Pending'),
(98, 8, '2024-07-08', 770.00, 'Processing'),
(99, 9, '2024-07-09', 785.25, 'Shipped'),
(100, 10, '2024-07-10', 800.50, 'Delivered');

-- Insert queries for the `order_items` table with 100 entries (random products and quantities)
INSERT INTO `order_items` (`order_items_id`, `order_id`, `product_id`, `quantity`, `unit_price`) VALUES
(1, 1, 1, 2, 9.99),
(2, 1, 3, 1, 49.99),
(3, 2, 2, 1, 19.99),
(4, 2, 5, 3, 14.99),
(5, 3, 4, 4, 12.99),
(6, 3, 7, 1, 24.99),
(7, 4, 6, 2, 7.99),
(8, 4, 8, 1, 9.99),
(9, 5, 9, 1, 34.99),
(10, 5, 10, 2, 5.99),
(11, 6, 12, 3, 19.99),
(12, 6, 15, 1, 4.99),
(13, 7, 16, 2, 6.99),
(14, 7, 18, 1, 49.99),
(15, 8, 21, 1, 18.99),
(16, 8, 22, 2, 15.99),
(17, 9, 24, 3, 1.99),
(18, 9, 25, 5, 0.99),
(19, 10, 26, 1, 8.99),
(20, 10, 27, 2, 6.99),
(21, 11, 29, 4, 12.99),
(22, 11, 31, 1, 11.99),
(23, 12, 33, 1, 149.99),
(24, 12, 35, 2, 5.99),
(25, 13, 37, 1, 2.99),
(26, 13, 38, 1, 14.99),
(27, 14, 39, 1, 39.99),
(28, 14, 40, 1, 29.99),
(29, 15, 42, 2, 9.99),
(30, 15, 43, 1, 14.99),
(31, 16, 45, 3, 0.99),
(32, 16, 47, 1, 179.99),
(33, 17, 48, 2, 99.99),
(34, 17, 49, 1, 249.99),
(35, 18, 50, 2, 149.99),
(36, 18, 1, 1, 9.99),
(37, 19, 2, 3, 19.99),
(38, 19, 4, 1, 12.99),
(39, 20, 5, 2, 14.99),
(40, 20, 6, 1, 7.99),
(41, 21, 7, 1, 24.99),
(42, 21, 8, 2, 9.99),
(43, 22, 10, 3, 34.99),
(44, 22, 11, 1, 59.99),
(45, 23, 13, 2, 12.99),
(46, 23, 14, 1, 8.99),
(47, 24, 15, 1, 4.99),
(48, 24, 16, 3, 6.99),
(49, 25, 17, 1, 27.99),
(50, 25, 18, 1, 49.99),
(51, 26, 20, 2, 29.99),
(52, 26, 21, 1, 18.99),
(53, 27, 22, 1, 15.99),
(54, 27, 23, 2, 69.99),
(55, 28, 24, 3, 1.99),
(56, 28, 25, 4, 0.99),
(57, 29, 26, 1, 8.99),
(58, 29, 27, 1, 6.99),
(59, 30, 28, 2, 12.99),
(60, 30, 29, 1, 3.99),
(61, 31, 31, 1, 11.99),
(62, 31, 32, 2, 7.99),
(63, 32, 34, 1, 5.99),
(64, 32, 35, 3, 3.99),
(65, 33, 36, 2, 4.99),
(66, 33, 37, 1, 2.99),
(67, 34, 39, 1, 39.99),
(68, 34, 40, 1, 29.99),
(69, 35, 41, 2, 1.99),
(70, 35, 42, 1, 9.99),
(71, 36, 43, 1, 14.99),
(72, 36, 44, 2, 34.99),
(73, 37, 45, 1, 0.99),
(74, 37, 46, 3, 69.99),
(75, 38, 47, 2, 179.99),
(76, 38, 48, 1, 99.99),
(77, 39, 49, 1, 249.99),
(78, 39, 50, 2, 149.99),
(79, 40, 1, 2, 9.99),
(80, 40, 2, 1, 19.99),
(81, 41, 3, 3, 49.99),
(82, 41, 4, 1, 12.99),
(83, 42, 5, 2, 14.99),
(84, 42, 6, 1, 7.99),
(85, 43, 7, 1, 24.99),
(86, 43, 8, 2, 9.99),
(87, 44, 10, 3, 34.99),
(88, 44, 11, 1, 59.99),
(89, 45, 12, 2, 19.99),
(90, 45, 13, 1, 12.99),
(91, 46, 15, 1, 4.99),
(92, 46, 16, 3, 6.99),
(93, 47, 17, 1, 27.99),
(94, 47, 18, 1, 49.99),
(95, 48, 20, 2, 29.99),
(96, 48, 21, 1, 18.99),
(97, 49, 22, 1, 15.99),
(98, 49, 23, 2, 69.99),
(99, 50, 24, 3, 1.99),
(100, 50, 25, 4, 0.99);