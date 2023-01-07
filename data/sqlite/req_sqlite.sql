-- ==============================================
-- _page
-- ==============================================
drop table if exists _page;

create table if not exists _page (
    _id integer primary key autoincrement,
    _name varchar(255) not null,
    _url varchar(255) not null,
    _title varchar(255) not null,
    _path varchar(255) not null,
    _create_date datetime default current_timestamp,
    _upadte_date datetime,
    unique(_url)
);

-- ==============================================
-- end
-- ==============================================
