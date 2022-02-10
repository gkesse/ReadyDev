#!/bin/bash
#================================================
spack_path=$(readlink -f "$(dirname "$0")/../spack")
#================================================
. $spack_path/spack.sh
#================================================
sql_run "
insert into users (u_email, u_password, u_group)
values ('root', '1c92cfde525f560f72c06b6afaca483a', '0')
"
#================================================