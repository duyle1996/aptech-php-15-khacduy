-- tao bang categories:id,name
create table categories(
category_id int not null auto_increment,
category_name varchar(255),
primary key(category_id)
);
-- them du lieu
insert into categories(category_name)
value ('Anh'),('Phap'),('My');
-- tao bang post:id,title,category_id
CREATE TABLE posts(
post_id int not null AUTO_INCREMENT,
post_title varchar(255),
category_id int,
PRIMARY KEY (post_id)
);
INSERT INTO posts(post_title,category_id)
VALUE ('Iran accounts trying to influence UK politics',1),
('Build new electric ',2),
('Intact shipwreck found ',3),
('Virgin closest ever drone ',1),
('Superbugs to kill',1),
('Self-driving taxis firm says',2),
('Facebook hires Nick Clegg',3),
('Lift off! Spacecrafts 5bn mile',1),
('Fake news inquiry MPs targeted',2),
('Apple is best private firm to',3),
('Dangerous moon Musks woes',1);
-- lay du lieu post co id =5 va ten category cua no
 SELECT posts.post_id, posts.post_title, categories.category_name FROM categories,posts
 where posts.post_id=5 and categories.category_id=posts.category_id;

-- lay ra tat cat cac post co category_id=2 va category_name cua no
SELECT posts.post_id, posts.post_title, posts.category_id,categories.category_name from posts
inner join categories on (posts.category_id=categories.category_id)
where posts.category_id=2;

-- QUAN HE MANY-MANY
-- tao bang post_category
CREATE TABLE post_category(
post_category_id int not null AUTO_INCREMENT,
post_id int,
category_id int,
PRIMARY KEY (post_category_id),
FOREIGN KEY (category_id) REFERENCES categories(category_id),
FOREIGN KEY (post_id) REFERENCES posts(post_id)
);
-- them du lieu 
INSERT INTO post_category(post_id,category_id)
value (1,1),(1,2),(1,3),(2,2),(2,3),(3,3),(4,1),(5,2),(6,3),(7,1),(8,2),(9,3),(10,1);

-- lay ra du lieu category cua tung post
select posts.post_id,posts.post_title,categories.category_name from posts
inner join post_category on (posts.post_id=post_category.post_id)
inner join categories on (post_category.category_id=categories.category_id)
order by posts.post_id;