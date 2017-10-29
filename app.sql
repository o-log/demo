create table phpadmin_demomodel (id int not null auto_increment primary key, created_at_ts int not null default 0) engine InnoDB default charset utf8 /* rand6306 */;
alter table phpadmin_demomodel add column login varchar(255)   not null    /* rand42908 */;
alter table phpadmin_demomodel add column description varchar(255)   not null    /* rand36892 */;
delete from phpadmin_demomodel /* khsdgk87689sdf */;
insert into phpadmin_demomodel (login, description, created_at_ts) values ('admin', 'Project admin', unix_timestamp(NOW())) /* iusygd67587 */;
insert into phpadmin_demomodel (login, description, created_at_ts) values ('guest', 'Guest account', unix_timestamp(NOW())) /* iusygd67562343 */;
insert into phpadmin_demomodel (login, description, created_at_ts) values ('jake', 'Employee', unix_timestamp(NOW())) /* iusygd663456 */;
insert into phpadmin_demomodel (login, description, created_at_ts) values ('finn', 'Employee', unix_timestamp(NOW())) /* iusygd55435425 */;
insert into phpadmin_demomodel (login, description, created_at_ts) values ('marceline', 'Employee', unix_timestamp(NOW())) /* iusygd634563456 */;
