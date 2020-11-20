<?php

use Illuminate\Database\Seeder;

class BackupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql  = "ALTER SEQUENCE perfil_id_seq RESTART WITH 1;";
            $sql .= 'TRUNCATE perfil CASCADE;';
            DB::connection()->getPdo()->exec($sql);
DB::insert("insert into perfil ( celular, avatar, proposito, tipo_reg, organizacion, tipo_org, direccion, canton_id, latitud, longitud, web, facebook, instagram, linkedin, twitter, terminos, created_at, updated_at, deleted_at) values(0999999999, '1605270304_avatar_1.png', 1, True, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, True, '2020-11-13 07:25:04', '2020-11-13 07:25:04', NULL)");
DB::insert("insert into perfil ( celular, avatar, proposito, tipo_reg, organizacion, tipo_org, direccion, canton_id, latitud, longitud, web, facebook, instagram, linkedin, twitter, terminos, created_at, updated_at, deleted_at) values(0987654321, NULL, 1, True, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, True, '2020-11-13 08:15:43', '2020-11-13 08:15:43', NULL)");
DB::insert("insert into perfil ( celular, avatar, proposito, tipo_reg, organizacion, tipo_org, direccion, canton_id, latitud, longitud, web, facebook, instagram, linkedin, twitter, terminos, created_at, updated_at, deleted_at) values(0987654321, '1605275285_avatar_3.jpeg', 1, True, NULL, NULL, 'Francisco S\xc3\xa1nchez 277, Quito 170120, Ecuador', NULL, -0.0791834, -78.4698029, NULL, NULL, NULL, NULL, NULL, True, '2020-11-13 08:48:05', '2020-11-13 08:48:05', NULL)");
DB::insert("insert into perfil ( celular, avatar, proposito, tipo_reg, organizacion, tipo_org, direccion, canton_id, latitud, longitud, web, facebook, instagram, linkedin, twitter, terminos, created_at, updated_at, deleted_at) values(0999999999, NULL, 1, True, NULL, NULL, '100 Dovercourt Rd, Toronto, ON M6J 3C3, Canada', NULL, 43.6430141521, -79.4225948902, NULL, NULL, NULL, NULL, NULL, True, '2020-11-13 10:25:19', '2020-11-13 10:25:19', NULL)");
DB::insert("insert into perfil ( celular, avatar, proposito, tipo_reg, organizacion, tipo_org, direccion, canton_id, latitud, longitud, web, facebook, instagram, linkedin, twitter, terminos, created_at, updated_at, deleted_at) values(0983872914, NULL, 1, True, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, True, '2020-11-13 12:39:46', '2020-11-13 12:39:46', NULL)");
DB::insert("insert into perfil ( celular, avatar, proposito, tipo_reg, organizacion, tipo_org, direccion, canton_id, latitud, longitud, web, facebook, instagram, linkedin, twitter, terminos, created_at, updated_at, deleted_at) values(0983872914, NULL, 1, True, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, True, '2020-11-13 12:40:29', '2020-11-13 12:40:29', NULL)");
DB::insert("insert into perfil ( celular, avatar, proposito, tipo_reg, organizacion, tipo_org, direccion, canton_id, latitud, longitud, web, facebook, instagram, linkedin, twitter, terminos, created_at, updated_at, deleted_at) values(2894204, NULL, 2, False, 'SFG', 3, '65 Lisgar St, Toronto, ON M6J 3X6, Canada', NULL, 43.6426641617, -79.423235476, 'www.hola.com', NULL, NULL, NULL, NULL, True, '2020-11-14 15:48:48', '2020-11-14 15:48:48', NULL)");
DB::insert("insert into perfil ( celular, avatar, proposito, tipo_reg, organizacion, tipo_org, direccion, canton_id, latitud, longitud, web, facebook, instagram, linkedin, twitter, terminos, created_at, updated_at, deleted_at) values(0999999999, NULL, 1, True, NULL, NULL, '100 Dovercourt Rd, Toronto, ON M6J 3C3, Canada', NULL, 43.6430019997, -79.422620717, NULL, NULL, NULL, NULL, NULL, True, '2020-11-14 16:02:59', '2020-11-14 16:02:59', NULL)");
DB::insert("insert into perfil ( celular, avatar, proposito, tipo_reg, organizacion, tipo_org, direccion, canton_id, latitud, longitud, web, facebook, instagram, linkedin, twitter, terminos, created_at, updated_at, deleted_at) values(2894547, '1605396038_avatar_9.png', 3, False, 'SFG', 4, '100 Dovercourt Rd, Toronto, ON M6J 3C3, Canada', NULL, 43.6427677597, -79.4227327594, 'https://www.sanfranciscoglobal.org/', 'https://twitter.com/', NULL, NULL, 'https://twitter.com/', True, '2020-11-14 18:20:38', '2020-11-14 18:23:54', NULL)");
DB::insert("insert into perfil ( celular, avatar, proposito, tipo_reg, organizacion, tipo_org, direccion, canton_id, latitud, longitud, web, facebook, instagram, linkedin, twitter, terminos, created_at, updated_at, deleted_at) values( 0984972940, '1605400302_avatar_10.png', 2, True, NULL, NULL, '65 Lisgar St, Toronto, ON M6J 3X6, Canada', NULL, 43.6427056436, -79.4231009025, NULL, NULL, NULL, NULL, NULL, True, '2020-11-14 19:31:42', '2020-11-14 19:31:42', NULL)");
DB::insert("insert into perfil ( celular, avatar, proposito, tipo_reg, organizacion, tipo_org, direccion, canton_id, latitud, longitud, web, facebook, instagram, linkedin, twitter, terminos, created_at, updated_at, deleted_at) values( 0983466900, NULL, 1, True, NULL, NULL, 'Rio Papallacta 38, Ambato 180207, Ecuador', NULL, -1.268749, -78.626923, NULL, NULL, NULL, NULL, NULL, True, '2020-11-17 09:00:58', '2020-11-17 09:00:58', NULL)");
DB::insert("insert into perfil ( celular, avatar, proposito, tipo_reg, organizacion, tipo_org, direccion, canton_id, latitud, longitud, web, facebook, instagram, linkedin, twitter, terminos, created_at, updated_at, deleted_at) values( 0998896734, '1605655819_avatar_12.png', 1, True, NULL, NULL, 'Rio Papallacta 38, Ambato 180207, Ecuador', NULL, -1.268749, -78.626923, NULL, NULL, NULL, NULL, NULL, True, '2020-11-17 18:30:19', '2020-11-17 18:30:19', NULL)");
DB::insert("insert into perfil ( celular, avatar, proposito, tipo_reg, organizacion, tipo_org, direccion, canton_id, latitud, longitud, web, facebook, instagram, linkedin, twitter, terminos, created_at, updated_at, deleted_at) values( 0995410663, NULL, 2, True, NULL, NULL, 'Rio Papallacta 38, Ambato 180207, Ecuador', NULL, -1.268749, -78.626923, NULL, NULL, NULL, NULL, NULL, True, '2020-11-18 08:12:59', '2020-11-18 08:12:59', NULL)");
$sql  = "ALTER SEQUENCE users_id_seq RESTART WITH 1;";
            $sql .= 'TRUNCATE users CASCADE;';
            DB::connection()->getPdo()->exec($sql);
DB::insert("insert into users (perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) values(NULL, 'Lic. Pedro Madrid', 'salma.diaz@example.net', '2020-11-12 21:31:00', '\$2y\$10\$4D14wMa/WE2ufeXdyV.7Ye5aN/n9eAhuxGTM2vdk1US6jGnGdnl06', NULL, 'rDMP8dUwK4', '2020-11-12 21:31:00', '2020-11-12 21:31:00', NULL)");
DB::insert("insert into users (perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) values(NULL, 'Alexia Ros', 'ivelazquez@example.com', '2020-11-12 21:31:00', '\$2y\$10\$uoO0xo.vhYpOwJnzv9IyzeBITF.kWPphLrpzGh9s6yOd5Mk0hcGgO', NULL, 'gvhi6nxZLy', '2020-11-12 21:31:00', '2020-11-12 21:31:00', NULL)");
DB::insert("insert into users (perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) values(NULL, 'Srta. Nadia Feliciano', 'rodrigo96@example.org', '2020-11-12 21:31:00', '\$2y\$10\$bDAXBUBaElxkSkvQ6LnfxeAnlWxsVUxjyzBaXdkXw0pyAPrzJT2N.', NULL, 'oEjY0XNrI5', '2020-11-12 21:31:00', '2020-11-12 21:31:00', NULL)");
DB::insert("insert into users (perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) values(1, 'Carolina Mej\xc3\xada', 'caro@hotmail.com', '2020-11-13 07:24:00', '\$2y\$10\$ao5mAfdN0Qkhv..c1n5E1uxRLz.gLAlQTBtzkXN0XzFGwiyrPUria', '\$2y\$10\$BT5l9h5twb137e1a5l4oGeo//pilLwvhZ.6aJo0jRW.13B9VRKui2', NULL, '2020-11-13 07:24:00', '2020-11-13 07:25:04', NULL)");
DB::insert("insert into users (perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) values(2, 'Eric Perez', 'eric@hotmail.com', '2020-11-13 07:50:23', '\$2y\$10\$hIeQbJxovhB5ozbJsjobm.CeFRM5R6A8c2PsdS6J0ZWUf.0m/4ay2', '\$2y\$10\$zq3OeRxrpjXSMrYhcYwWXe9NSRRwGLrD4Yjala4fLHzGnQY0LsBfe', NULL, '2020-11-13 07:50:23', '2020-11-13 08:15:43', NULL)");
DB::insert("insert into users (perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) values(NULL, 'pepe trujillo', 'pepe@trujillo.com', '2020-11-13 08:27:23', '\$2y\$10\$wIvRbHLr2b4qx4MqOkNrjuiBtmFYpkEgpXeBtyNNHZ0UZgvlIcSLC', '\$2y\$10\$qtRnLYvfRr6Uz2Ih/PZDle.ss1Whle9xTMTsKE/odlbXNfG4SZ6OG', NULL, '2020-11-13 08:27:23', '2020-11-13 08:27:23', NULL)");
DB::insert("insert into users (perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) values(3, 'Santiago', 'prueba@gmail.com', '2020-11-13 08:46:06', '\$2y\$10\$1qhyDlngsv8SJXoVqzMFE.xNPmzI.qtBG7V0zDjwvH2BRFWw3o8Fu', '\$2y\$10\$Iasu0tPAqbi8BT6wlVCftOf6drAe0yHzHDhiH9fhcL//e45iKWS9a', NULL, '2020-11-13 08:46:06', '2020-11-13 08:48:05', NULL)");
DB::insert("insert into users (perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) values(4, 'Carolina Mej\xc3\xada', 'caroo@caro.com', '2020-11-13 10:24:46', '\$2y\$10\$SGX/rEK/qlSSeVeql8n/AO7bsspEoFYwqpSknWsp3HjGYyC.98EV.', '\$2y\$10\$79cnQeddtQ/EVpcP3cGDUuXyLzw1ac5DccIfr4yu69Zg4x3AMjnl.', NULL, '2020-11-13 10:24:46', '2020-11-13 10:25:19', NULL)");
DB::insert("insert into users (perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) values(6, 'carlos', 'csgallardof@gmail.com', '2020-11-13 08:41:14', '\$2y\$10\$WPAM3g7MPEFqaSipRgCu7.OC55t7H9xlnfbm/d1Bcdc.1OwO4p/LW', '\$2y\$10\$.aXNlE/pZQquFQTqZvASjOxK0kWxKFkSDFZlCcLs/cUgD6dGpDuqu', NULL, '2020-11-13 08:41:14', '2020-11-13 12:40:29', NULL)");
DB::insert("insert into users (perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) values( 7, 'Caro', 'caro@caro.com', '2020-11-14 15:47:17', '\$2y\$10\$7XJdfmXzdKosXIstX2TyAuklySJ5nlLpUXs9Aqsf7wao4NyO9gRjy', '\$2y\$10\$wtJGpqZ.ra5GItkJqOnSqOBMnnXAym4rlGLfPV7PhXqrN1Ltk3uem', NULL, '2020-11-14 15:47:17', '2020-11-14 15:48:48', NULL)");
DB::insert("insert into users (perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) values( 8, 'Test Admin', 'admin@email.com', '2020-11-14 13:25:00', '\$2y\$10\$zqbyHfpGigs8Gr38X3kGiOb3ZPlx5dIx1EJJNBU9fCCWOu7QTEcLa', NULL, NULL, '2020-11-14 13:25:00', '2020-11-14 16:02:59', NULL)");
DB::insert("insert into users (perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) values( 9, 'Stephanie Naranjo', 'stephanienaranjocoo@gmail.com', '2020-11-14 18:00:20', '\$2y\$10\$HEwy3UnXXCUkAH8h/n6HzuSbtIshqV/2BsdJZ9lFsXsED5azBN2kW', '\$2y\$10\$RvdDa.sbtqpo1kQnk4FEW.O0DHHqxWQzqqhAopYJEaM8ZVPIZqGqu', NULL, '2020-11-14 18:00:20', '2020-11-14 18:20:38', NULL)");
DB::insert("insert into users (perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) values( 10, 'Stephanie Naranjo', 'steph_naranjo@yahoo.com', '2020-11-14 17:05:17', '\$2y\$10\$EfFMXVTVBOcnHz3J/9e1G.6tPxrXWrBl.ljiqvqULbMCw/v009Tay', '\$2y\$10\$MLiAJ6KAq2EMWjy5TIAS2enH/7APQLTFMHZbkuhN1OPBju6Dhc1CG', NULL, '2020-11-14 17:05:17', '2020-11-14 19:31:42', NULL)");
DB::insert("insert into users (perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) values( 11, 'Martin', 'martinvelezf@hotmail.com', '2020-11-17 09:00:23', '\$2y\$10\$od8eQrUcqcOJQm/7Y6Euc.ggLuLbbrLb0rqdy4jiz6OO/BKTCjt.G', '\$2y\$10\$E4GqMhFTLhIjMQ1vGxLl5.M64wkTdppIqMUFjS8NPEEQWP5F/CHB2', NULL, '2020-11-17 09:00:23', '2020-11-17 09:00:58', NULL)");
DB::insert("insert into users (perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) values( 12, 'Paul Auqui', 'paul.codemotion@gmail.com', '2020-11-17 18:27:49', '\$2y\$10\$hkr9p6lAdMINhWTpix.uNOfnXyffEAoDRohbGW3FcpuBbY7mSPZqO', '\$2y\$10\$fWWyoRrq3uPE2DMnO64F8u1S2G/N0JAG7wE7VoJjnSrYUwX0rhtaC', NULL, '2020-11-17 18:27:49', '2020-11-17 18:30:19', NULL)");
DB::insert("insert into users (perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) values( 13, 'Claudio Arcos', 'claudioarcos@hotmail.com', '2020-11-18 08:05:18', '\$2y\$10\$3gJTa01e7r1Wi4xfnTTYK.TPpxnLRDcsNQe35SoY0DSpaiIwJQaXS', '\$2y\$10\$08ITu3AZ4Tcro7.Rox5wmeWT4oxdQ0fAhR2dZ6YnEp9z5OZHHZbky', NULL, '2020-11-18 08:05:18', '2020-11-18 08:12:59', NULL)");
$sql  = "ALTER SEQUENCE role_user_id_seq RESTART WITH 1;";
            $sql .= 'TRUNCATE role_user CASCADE;';
            DB::connection()->getPdo()->exec($sql);
DB::insert("insert into role_user ( user_id, role_id, created_at, updated_at, deleted_at) values(1, 1, '2020-11-12 21:31:00', '2020-11-12 21:31:00', NULL)");
DB::insert("insert into role_user ( user_id, role_id, created_at, updated_at, deleted_at) values(2, 2, '2020-11-12 21:31:00', '2020-11-12 21:31:00', NULL)");
DB::insert("insert into role_user ( user_id, role_id, created_at, updated_at, deleted_at) values(3, 3, '2020-11-12 21:31:00', '2020-11-12 21:31:00', NULL)");
DB::insert("insert into role_user ( user_id, role_id, created_at, updated_at, deleted_at) values(4, 1, '2020-11-13 07:24:00', '2020-11-13 07:24:00', NULL)");
DB::insert("insert into role_user ( user_id, role_id, created_at, updated_at, deleted_at) values(5, 1, '2020-11-13 07:50:23', '2020-11-13 07:50:23', NULL)");
DB::insert("insert into role_user ( user_id, role_id, created_at, updated_at, deleted_at) values(6, 1, '2020-11-13 08:27:23', '2020-11-13 08:27:23', NULL)");
DB::insert("insert into role_user ( user_id, role_id, created_at, updated_at, deleted_at) values(7, 1, '2020-11-13 08:41:14', '2020-11-13 08:41:14', NULL)");
DB::insert("insert into role_user ( user_id, role_id, created_at, updated_at, deleted_at) values(8, 1, '2020-11-13 08:46:06', '2020-11-13 08:46:06', NULL)");
DB::insert("insert into role_user ( user_id, role_id, created_at, updated_at, deleted_at) values(9, 1, '2020-11-13 10:24:46', '2020-11-13 10:24:46', NULL)");
DB::insert("insert into role_user ( user_id, role_id, created_at, updated_at, deleted_at) values( 10, 3, '2020-11-14 14:30:00', '2020-11-14 14:30:00', NULL)");
DB::insert("insert into role_user ( user_id, role_id, created_at, updated_at, deleted_at) values( 10, 3, '2020-11-14 15:47:17', '2020-11-14 15:47:17', NULL)");
DB::insert("insert into role_user ( user_id, role_id, created_at, updated_at, deleted_at) values( 12, 1, '2020-11-14 17:05:17', '2020-11-14 17:05:17', NULL)");
DB::insert("insert into role_user ( user_id, role_id, created_at, updated_at, deleted_at) values( 13, 1, '2020-11-14 18:00:20', '2020-11-14 18:00:20', NULL)");
DB::insert("insert into role_user ( user_id, role_id, created_at, updated_at, deleted_at) values( 14, 1, '2020-11-17 09:00:23', '2020-11-17 09:00:23', NULL)");
DB::insert("insert into role_user ( user_id, role_id, created_at, updated_at, deleted_at) values( 15, 1, '2020-11-17 18:27:49', '2020-11-17 18:27:49', NULL)");
DB::insert("insert into role_user ( user_id, role_id, created_at, updated_at, deleted_at) values( 16, 1, '2020-11-18 08:05:18', '2020-11-18 08:05:18', NULL)");
$sql  = "ALTER SEQUENCE eventos_id_seq RESTART WITH 1;";
            $sql .= 'TRUNCATE eventos CASCADE;';
            DB::connection()->getPdo()->exec($sql);
DB::insert("insert into eventos ( nombre, organizador, fecha, hora, imagen, descripcion, tipo, canton, ubicacion, org_lat, org_long, url, estado, terminos, user_id, deleted_at, created_at, updated_at) values( 'OPEN INNOVACI\xc3\x93N', 'SFG', '2020-11-26', '20:00:00', '1605582500_SFG_1.jpg', 'Evento que se desarrollar\xc3\xa1 para fomentar la innovaci\xc3\xb3n a trav\xc3\xa9s del uso de datos abiertos. Este es un evento dirigido para j\xc3\xb3venes, ni\xc3\xb1os, investigadores, estudiantes, profesionales y expertos.  Evento que se desarrollar\xc3\xa1 para fomentar la innovaci\xc3\xb3n a trav\xc3\xa9s del uso de datos abiertos. Este es un evento genial!', False, NULL, NULL, 0, 0, 'meet.google.com/nnp-hacz-nou', False, True, 12, NULL, '2020-11-16 22:08:20', '2020-11-16 22:08:20')");
DB::insert("insert into eventos ( nombre, organizador, fecha, hora, imagen, descripcion, tipo, canton, ubicacion, org_lat, org_long, url, estado, terminos, user_id, deleted_at, created_at, updated_at) values( 'Innovaci\xc3\xb3n al d\xc3\xada', 'SFG', '2020-11-27', '12:00:00', '1605582905_SFG_2.png', 'Este es el mejor momento para enterarte c\xc3\xb3mo puedes ayudar a las mipymes para mejorar su productividad y as\xc3\xad que puedan reactivar la econom\xc3\xada.', True, 101, 'Avenida Amazonas, Quito, Ecuador', '-0.1774277', '-78.4859566', 'meet.google.com/nnp-hacz-nou', False, True, 12, NULL, '2020-11-16 22:15:05', '2020-11-16 22:15:05')");
DB::insert("insert into eventos ( nombre, organizador, fecha, hora, imagen, descripcion, tipo, canton, ubicacion, org_lat, org_long, url, estado, terminos, user_id, deleted_at, created_at, updated_at) values( 'CANADIAN INNOVATION WEEK', 'Canadian Association of Science Centres', '2020-11-19', '09:30:00', '1605649467_Canadian-Association-of-Science-Centres_3.png', 'Este evento te invita a la b\xc3\xbasqueda de la resiliencia a trav\xc3\xa9s del pensamiento innovador en medio de la pandemia.', True, 1701, 'Avenida Amazonas, Quito, Ecuador', '-0.1774277', '-78.4859566', 'https://www.canadiansciencecentres.ca/Canadian-Innovation-Week', False, True, 12, NULL, '2020-11-17 16:44:27', '2020-11-17 16:44:27')");
$sql  = "ALTER SEQUENCE materialesaprendizaje_id_seq RESTART WITH 1;";
            $sql .= 'TRUNCATE materialesaprendizaje CASCADE;';
            DB::connection()->getPdo()->exec($sql);
DB::insert("insert into materialesaprendizaje ( nombre_publicacion, fecha_publicacion, tema_tratado, tipo_documento, tipo, fuente_publicacion, autor_publicacion, estado, terminos, user_id, deleted_at, created_at, updated_at) values( 'Playbook Nesta Inteligencia Colectiva', NULL, 'Tema 2', 'Tipo 3', True, 'www.nesta.com', NULL, False, True, 12, '2020-11-14 20:21:30', '2020-11-14 19:48:55', '2020-11-14 20:21:30')");
DB::insert("insert into materialesaprendizaje ( nombre_publicacion, fecha_publicacion, tema_tratado, tipo_documento, tipo, fuente_publicacion, autor_publicacion, estado, terminos, user_id, deleted_at, created_at, updated_at) values( 'Playbook Nesta Inteligencia Colectiva', '2020-11-14', 'Tema 2', 'Tipo 3', False, 'www.nesta.com', 'Nesta', False, True, 12, NULL, '2020-11-14 19:53:14', '2020-11-14 20:25:31')");
DB::insert("insert into materialesaprendizaje ( nombre_publicacion, fecha_publicacion, tema_tratado, tipo_documento, tipo, fuente_publicacion, autor_publicacion, estado, terminos, user_id, deleted_at, created_at, updated_at) values( 'Social Impact of open Data', NULL, 'Tema 1', 'Tipo 2', True, 'www.hola.com', NULL, False, True, 12, NULL, '2020-11-15 18:04:03', '2020-11-16 07:49:23')");
DB::insert("insert into materialesaprendizaje ( nombre_publicacion, fecha_publicacion, tema_tratado, tipo_documento, tipo, fuente_publicacion, autor_publicacion, estado, terminos, user_id, deleted_at, created_at, updated_at) values( 'Playbook for Innovation Learning', '2018-04-02', 'Tema 1', 'Tipo 2', False, 'https://media.nesta.org.uk/documents/nesta_playbook_for_innovation_learning.pdf', 'Nesta', False, True, 12, NULL, '2020-11-17 16:55:58', '2020-11-17 17:06:01')");
$sql  = "ALTER SEQUENCE fondos_id_seq RESTART WITH 1;";
            $sql .= 'TRUNCATE fondos CASCADE;';
            DB::connection()->getPdo()->exec($sql);
DB::insert("insert into fondos ( fuente, organizacion, nombre_fondo, info, fecha_inicio, fecha_fin, facebook, instagram, youtube, linkedin, twitter, imagen, terminos, user_id, created_at, updated_at, deleted_at) values( False, 'M\xc3\x89XICO', NULL, 'https://labcd.mx/herramientas-gobierno-abierto/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, True, 12, '2020-11-14 21:16:59', '2020-11-14 21:16:59', NULL)");
DB::insert("insert into fondos ( fuente, organizacion, nombre_fondo, info, fecha_inicio, fecha_fin, facebook, instagram, youtube, linkedin, twitter, imagen, terminos, user_id, created_at, updated_at, deleted_at) values( False, 'Fondo Emprende', NULL, 'https://www.fondoemprende.gob.ec/', NULL, NULL, 'https://www.facebook.com/FondoEmprende/', NULL, NULL, NULL, NULL, NULL, True, 12, '2020-11-14 21:04:24', '2020-11-14 21:19:18', '2020-11-14 21:19:18')");
DB::insert("insert into fondos ( fuente, organizacion, nombre_fondo, info, fecha_inicio, fecha_fin, facebook, instagram, youtube, linkedin, twitter, imagen, terminos, user_id, created_at, updated_at, deleted_at) values( False, 'Emprede Ecuador', NULL, 'https://www.fondoemprende.gob.ec/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, True, 12, '2020-11-17 07:43:27', '2020-11-17 07:43:27', NULL)");
DB::insert("insert into fondos ( fuente, organizacion, nombre_fondo, info, fecha_inicio, fecha_fin, facebook, instagram, youtube, linkedin, twitter, imagen, terminos, user_id, created_at, updated_at, deleted_at) values( False, 'GIZ', NULL, 'https://www.giz.de/en/html/index.html', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, True, 12, '2020-11-17 08:16:15', '2020-11-17 08:16:15', NULL)");
DB::insert("insert into fondos ( fuente, organizacion, nombre_fondo, info, fecha_inicio, fecha_fin, facebook, instagram, youtube, linkedin, twitter, imagen, terminos, user_id, created_at, updated_at, deleted_at) values( False, 'GIZ', NULL, 'www.hol.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, True, 12, '2020-11-17 15:24:14', '2020-11-17 15:24:31', '2020-11-17 15:24:31')");
DB::insert("insert into fondos ( fuente, organizacion, nombre_fondo, info, fecha_inicio, fecha_fin, facebook, instagram, youtube, linkedin, twitter, imagen, terminos, user_id, created_at, updated_at, deleted_at) values( True, 'CREAS ECUADOR', 'CREAS ECUADOR', 'http://www.creasecuador.com/', '2020-12-01', '2021-03-01', NULL, NULL, NULL, NULL, NULL, '1605645680_6.png', True, 12, '2020-11-17 15:41:20', '2020-11-17 15:41:20', NULL)");
$sql  = "ALTER SEQUENCE convocatorias_id_seq RESTART WITH 1;";
            $sql .= 'TRUNCATE convocatorias CASCADE;';
            DB::connection()->getPdo()->exec($sql);
DB::insert("insert into convocatorias ( tipoconvocatoria_id, fecha_inicio, fecha_cierre, descripcion, imagen, terminos, user_id, created_at, updated_at, deleted_at) values( 1, '2020-11-17', '2020-11-25', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit auctor dolor. Nulla viverra, nibh quis ultrices malesuada, ligula ipsum vulputate diam, aliquam egestas nibh ante vel dui. Sed in tellus interdum eros vulputate placerat sed non enim. Pellentesque. cxdf', '1605620903_convocatoria_1_1.jpeg', True, 10, '2020-11-17 08:48:23', '2020-11-17 08:48:23', NULL)");
    }
}
