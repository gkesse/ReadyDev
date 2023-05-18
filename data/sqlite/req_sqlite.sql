-- ==============================================
-- _views
-- ==============================================

drop table if exists _views;

create table if not exists _views (
    _id integer primary key autoincrement
    , _url varchar(255) not null
    , _view integer not null
    , _create_date datetime default current_timestamp
    , _upadte_date datetime
    , unique(_url)
);

-- ==============================================
-- end
-- ==============================================
