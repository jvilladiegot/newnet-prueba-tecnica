SELECT res.room_type_id, res.startdate, res.enddate
     , rom.nof AS num_of_rooms, COUNT(res.id) AS num_of_reservations
     , (rom.nof - COUNT(res.id)) AS available_rooms
FROM rooms_type AS rom LEFT JOIN reservation AS res
                                 ON rom.id = res.room_type_id
WHERE res.startdate = '2017-04-29' AND res.enddate = '2017-05-01'
GROUP BY rom.id;

SELECT res.admin_id, COUNT(res.admin_id) AS num_of_reservations
     , usr.firstname, usr.lastname
FROM reservation AS res INNER JOIN reservation_user AS res_usr
                                   ON res.id = res_usr.reservation_id
                        INNER JOIN `user` AS usr
                                   ON res_usr.user_id = usr.id
GROUP BY res.admin_id, usr.id
ORDER BY res.admin_id, usr.firstname;
