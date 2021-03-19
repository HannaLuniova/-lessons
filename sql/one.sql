-- находит работников с зарплатой >100 и <400
SELECT * 
FROM `vedomost` 
WHERE zp >100 and zp <400

-- находит тех,кто в бухгалтерии получает зарплату >200
SELECT *
FROM `vedomost`
WHERE otdel="Бухгалтерия" and zp>200

-- находит работников склада и бухгалтерии
SELECT *
FROM `vedomost`
WHERE otdel="Бухгалтерия" or otdel="Склад"

-- находит тех,у кого зарплата >500 и не работают в бухгалтерии
SELECT *
FROM `vedomost`
WHERE zp>500 and not otdel="Бухгалтерия"

-- отсортировать по размеру з/п
SELECT * 
FROM `vedomost`
ORDER BY zp

-- отсортировать по размеру з/п в обратном порядке
SELECT * 
FROM `vedomost`
ORDER BY zp DESC

-- выводит список работников отсортированный по алфавиту
SELECT * 
FROM `vedomost`
ORDER BY fio

-- отсор-ть таблицу по отделам и з/п
SELECT * 
FROM `vedomost`
ORDER BY otdel,zp

-- от-ть таблицу по отделам в прямом направлении и по фио работников в обратном напр-и
SELECT * 
FROM `vedomost`
ORDER BY otdel,fio DESC

-- переименовать поле
SELECT `fio` AS 'name',`zp` 
FROM `vedomost`

-- столбец - это поле, а строка - это запись
-- столбец - это атрибут, а строка - это кортеж

-- все поля в таб. по-русски
SELECT `fio` AS 'ФИО',`zp` AS 'Зарплата',`otdel` AS 'Отдел',`nomer` AS 'Номер'
FROM `vedomost`

--перевести з/п в $
SELECT `fio`,`zp`/2.6 AS 'usd'
FROM `vedomost`

--округлить до двух цифр после запятой
SELECT `fio`,round(`zp`/2.6,2) AS 'usd'
FROM `vedomost`

-- вывести список работ-в бух-и и их з/п в рос.рублях
SELECT `fio`,`otdel`,round(`zp`/0.035,2) AS 'RUB'
FROM `vedomost`
WHERE otdel="Бухгалтерия"

-- вывести список работников склада и их з/п в четырёх валютах
SELECT `fio`,`otdel`,round(`zp`/0.035,2) AS 'RUB',round(`zp`/2.6,2) AS 'usd',round(`zp`/3.1,2) AS 'eur',zp  AS 'бел'
FROM `vedomost`
WHERE otdel="Склад"

-- Вывести список студентов дневного отделения
SELECT * 
FROM `course`
WHERE `branch`='Дневное'

-- Вывести список студентов, которые изучают английский и флористику
SELECT `FIO`
FROM `course`
WHERE  `item_name`='Английский язык' or `item_name`='Флористика'

-- Вывести список студентов с практическими занятиями и оплатой за полный курс обучения >500 
SELECT `FIO`,`type_lessons`,`payment`
FROM `course`
WHERE `type_lessons`='Практика' and `payment`>500

-- Вывести список студентов вечернего и заочного обучения с типом занятий "Лекция" и количеством часов >30 и <70
SELECT `FIO` AS 'ФИО',`branch` AS 'Отделение',`number_hours` AS 'Количество часов',`type_lessons` AS 'Тип занятий'
FROM `course`
WHERE (branch = 'Вечернее' or branch = 'Заочное') and type_lessons='Лекция' and `number_hours` BETWEEN 20 and 70

-- Вывести всех студентов со специальностью "иностранные языки" в дневном отделении с оплатой за курс не более 800
SELECT `FIO`,`specialty`,`payment` 
FROM `course`
WHERE `specialty`='Иностранные языки' and `branch`='Дневное' and `payment`<=800

