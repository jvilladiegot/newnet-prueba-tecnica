USE newnet;

INSERT INTO `user` (id, firstname, lastname, phonenumber, birthdate, email) VALUES
(1, 'Jhon', 'Doe', '1-451-395-1600', '1980-09-28', 'jdone@gmail.com'),
(2, 'Jane', 'Jackson', '1-709-896-0629', '1985-05-01', 'jjackson@yahoo.com'),
(3, 'Alex', 'Smith', '1-742-823-9990', '1990-05-28', 'jasmith@oul.com'),
(4, 'Johana', 'Roll', '1-806-460-9612', '1981-10-31', 'jkrolling@uk.com')
;

INSERT INTO rooms_type (id, `name`, nof) VALUES
(1, 'Single', 2),
(2, 'Double', 1),
(3, 'Shared', 2)
;

INSERT INTO reservation (id, room_type_id, startdate, enddate, admin_id) VALUES
(10, 1, '2017-04-29', '2017-05-01', 1),
(11, 2, '2017-04-29', '2017-05-01', 1),
(12, 3, '2017-04-29', '2017-05-01', 2),
(13, 2, '2017-05-02', '2017-05-05', 2),
(14, 1, '2017-05-06', '2017-05-10', 1),
(15, 3, '2017-05-26', '2017-05-29', 2),
(16, 2, '2017-05-26', '2017-05-29', 2),
(17, 2, '2017-05-06', '2017-05-10', 3)
;

INSERT INTO reservation_user (user_id, reservation_id) VALUES
(1, 10),
(2, 11),
(3, 12),
(4, 13),
(1, 14),
(2, 15),
(3, 16),
(4, 17)
;
