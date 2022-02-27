#!/bin/bash
#================================================
spack_path=$(readlink -f "$(dirname "$0")/../spack")
#================================================
. $spack_path/spack.sh
 #================================================
sql_run "
create table users (
id integer primary key autoincrement,
u_email varchar(256) not null,
u_password varchar(256) not null,
uc_date datetime default current_timestamp,
u_active char(1) default '1', -- '0' : inactif ; '1' : actif
u_group char(1) default '2' -- '0' : super_admin ; '1' : admin ; '2' : 'user'
)
"
#================================================