#!/bin/bash
#================================================
spack_path=$(readlink -f "$(dirname "$0")/../spack")
#================================================
. $spack_path/spack.sh
#================================================
sql_run "
begin;
--
create table users_new (
id integer primary key autoincrement, -- user id
u_pseudo varchar(256) not null, -- user pseudonyme
u_password varchar(256) not null, -- user password
u_email varchar(256), -- user email
u_firstname varchar(256), -- user firstname
u_lastname varchar(256), -- user lastname
u_address varchar(256), -- user address
ua_address varchar(256), -- user additional address
u_zipcode varchar(256), -- user zipcode
u_city varchar(256), -- user city
u_country varchar(256), -- user country
u_phone varchar(256), -- user phone
uc_phone varchar(256), -- user cell phone
uc_date datetime default current_timestamp, -- user create date
u_active char(1) default '1', -- user active : '0' : inactive ; '1' : active
u_group char(1) default '2' -- user group : '0' : super_admin ; '1' : admin ; '2' : 'user',
check (u_active = '0' or u_active = '1'),
check (u_group = '0' or u_group = '1' or u_group = '2')
);
--
insert into users_new (id, u_pseudo, u_password, uc_date, u_active, u_group)
select id, u_email, u_password, uc_date, u_active, u_group from users;
--
drop table users;
--
alter table users_new
rename to users;
--
commit;
"
#================================================
sql_run "
update users
set u_pseudo = u_email;
"
#================================================