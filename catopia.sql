CREATE TABLE user
(
  id_user INT auto increment,
  fname VARCHAR(50) NOT NULL,
  lname VARCHAR(50) NOT NULL,
  address VARCHAR(255) NOT NULL,
  city VARCHAR(50) NOT NULL,
  state CHAR(2) NOT NULL,
  zip CHAR(5) NOT NULL,
  email VARCHAR(150) NOT NULL,
  phone CHAR(12) NOT NULL,
  pass 
  level ENUM("m", "e", "a"),
  PRIMARY KEY (id_user)
);

CREATE TABLE cats
(
  id_cats INT auto increment,
  cat_image_id varchar(12),
  name_cat VARCHAR(50) NOT NULL,
  adopt ENUM("adopt","foster"),
  age CHAR(2) NOT NULL,
  info VARCHAR(255) NOT NULL,
  id_client INT NOT NULL,
  PRIMARY KEY (id_cats),
  FOREIGN KEY (id_user) REFERENCES client(id_user)
);

CREATE TABLE items
(
  id_item INT NOT NULL,
  name_item VARCHAR(25) NOT NULL,
  description VARCHAR(255) NOT NULL,
  qty VARCHAR(25) NOT NULL,
  goal VARCHAR(25) NOT NULL,
  PRIMARY KEY (id_item)
);

insert into user values
(default, 'Tracy', 'Reed', '1722 Renwick Drive', 'Asheville', 'NC', 28803, '484-314-7223', 'tracytreed@no.com', 'm'),
(default,'Marion', 'Brown', '3174 Hardesty Street', 'Asheville', 'NC', 28803, '303-444-4475', 'mbrown@com.net', 'm'),
(default,'Steve', 'Snider', '39430 Big Rock Road', 'Asheville', 'NC', 28803,  '717-420-1212','snidley@com.net', 'm'),
(default,'Tobias', 'Stocking', '291-A Gorgonzola ', 'Asheville', 'NC', 28803,  '616-410-2990','stockingfeet@com.net', 'm'),
(default,'Frank', 'Wheeler', '2225 Iola Ave', 'Asheville', 'NC', 28803,  '303-414-0404','fwheeler@com.net', 'm'),
(default,'Brittany', 'Fox', '297-B Gorgonzola', 'Asheville', 'NC', 28803,  '616-410-2942', 'bfoxy@com.net', 'm'),
(default,'Fran', 'McCoy', '1440 Manchester Way ', 'Asheville', 'NC', 28803, 87757, '303-477-8787', 'franm@com.net', 'm'),
(default,'Joan', 'Thomaston', '667438 E. 91st St.', 'Asheville', 'NC', 28803, '616-684-9385', 'joanie@com.net', 'm' ),
(default,'Ted', 'Stiggle', '12920 Industrial Workers', 'Asheville', 'NC', 28801,'303-421-1410',  'thestig@com.net','m'),
(default,'Dean',  'Farrell', '121 Highway 80', 'Asheville', 'NC', 28801,  '717-483-3111', 'farrelld@com.net', 'm'),
(default,'Maureen', 'Waltz', '1900 Industrial Way', 'Asheville', 'NC', 28805,  '215-419-2349', 'waltzer@com.net', 'm'),
(default,'Stacey', 'Luevano', '1271 Haven Lane', 'Asheville', 'NC', 28806,  '215-419-2349', 'staceyl@com.net', 'm'),
(default,'Paul', 'Tran', '3964 Winding Way', 'Asheville', 'NC', 28805,  '215-419-2349', 'ptran@com.net', 'e'),
(default,'Oliver', 'Watson', '313 Small Street', 'Asheville', 'NC', 28806,  '215-419-2349', 'thewatz@com.net', 'a');

insert into cats values
(default,'Felicia', 'adopt', '3 yrs', 'Calico who loves to snuggle and know everything that is going on. She likes to watch tv and play in the blankets.'),
(default,'Riff Raff','adopt', '4 yrs', 'Hi there, I am looking for a job! Im used to being an outdoor cat and Im very good at rodent control and bug catching!  Am an adventurous polydactyl who likes occasional affection.'),
(default,'Shadow', 'foster', '8 weeks', 'Shadow is a Bombay who loves to talk and chase mice.  He is a loving little kitten that needs some tender care since losing his mother.'),
(default,'Night Shade','adopt', '1 yr', 'Night Shade came to us as a stray. He is very affectionate and enjoys a good lap to lay in.'),
(default,'Ronnie', 'foster','4 weeks', 'Hello! Are you looking for a social kitty who loves getting showered with attention? Look no further, because Im your kitty! I love it all, cuddling close, playing with toys, you name it. My purr motor doesnt take long to start up, and once it gets going it will run non-stop. If I sound like the perfect kitty for you, ask to meet me today.'),
(default,'Gia', 'adopt','2 yrs','Are you ready to snuggle and be loved?! Because that is my mission in life, to make you smile. Im a super social kitty who likes to be with my humans and chat it up about your day. Im a total lap kitty and a SNUGGLER.I also LOVE TO PLAY, my favorite toy is the cat catcher mouse toy!'),
(default,'Caramel', 'foster','6 weeks', 'Hi there! Im a cute little kitty looking for my forever home and family. My perfect someone will help teach me that the world isnt a big, scary place. With a little patience, and a lot of tender loving care Im sure I will grow up to be an affectionate, social butterfly. I would love to go home with a confident feline friend who can show me the ropes. If I sound like the perfect kitty companion for you, ask to meet me today!'),
(default,'Gidget','adopt', '4 yrs', 'Hi there, my name is Gidget. Ive been taking some time to get adjusted to shelter life, and I am ready to find my forever home now. My good friends here know how shy I can be, but they also know that when you get past my silly, tough exterior, Im a little snuggle bug who will make biscuits and drool. I would love a quiet home where I can get a second chance'),
(default,'Java','adopt', '9 months', 'Hi! Im new here. Everyones still getting to know me. Once they do, this space will have all kinds of information about me'),
(default,'Nermal','foster', '4 weeks', 'My name is Nermal.  I am a sweet, cuddly cat who loves to play hide and seek with toys from beneath the door. When you hold me in your arms my purring machine runs non-stop. I love chin rubs, and if you see me kneading that means I love your presence. You can also hear me purring loudly or bunting when you brush my soft fur. My meows are the cutest sounds you wouldve heard.'),
(default,'Juniper', 'adopt','1 yr', 'My name is Juniper, or Junie for short. Im a bit of a shy girl, possibly even a Fraidy-Cat, with strangers. But once I get to know you, Ill be your devoted friend. I like a good chat - I hope you speak Cat - and I have lots to say. Im a pretty good listener as well. My favorite activities are pouncing on toys, chasing flies and napping next to you. Oh, and hiding in boxes. Lets get to know each other.'),
(default,'Miss Daisy','adopt', '4 yrs', 'I am swanky and sophisticated, intelligent and inquisitive. I love nothing more than to poke my nose into an unlikely corner and squeeze in for a looooonnngg nap. Then Ill emerge, stretch, grab a quick bite and find a human to cuddle up with.I am one cooooool cat'),
(default,'Jiji', 'adopt','3 yrs', 'Hi, Im Jiji! I may seem timid at first, but Im actually social and curious once I get comfortable. A few times a day I ask to play and will zoom around chasing toys or letting you chase me. My vertical leap is quite impressive! When thats done, I will relax nearby and purr loudly while you pet me.'),
(default,'Scarlett', 'adopt','2 yrs 6 months', 'Hi friends, Im Scarlett! Im a fluffy and friendly gal looking for a home! Are you looking for a curious and playful cat? That will be me! I love to play and meet new people all the time! If you want to come give me some love, come visit me today!'),
(default,'Snowball', 'adopt','10 months', 'Hi there, Im Snowball. Im the new kid on the block and just went up for adoption! Two things you should know about me are (#1) I am as beautiful as I am sassy and (#2) I LOVE to chase toy mice. Im ready to find my new family'),
(default,'Smooches', 'foster','2 weeks', 'Hi! Im new here. Everyones still getting to know me. Once they do, this space will have all kinds of information about me.'),
(default,'Sydney', 'adopt','1 yr', 'Hi! Im an outgoing little kitty looking for my forever home and family. My perfect someone LOVES to play because my favorite activity is having fun. I still need to learn my big kitty manners, but Im sure with a little help from my new family, and maybe a few treats, I will catch on in no time. If you are looking for the perfect little ball of energy full of KITTEN POWER, look no further. Ask to meet me today'),
(default,'Teegan', 'foster','4 months', 'Hello! Are you looking for a social kitty who loves getting showered with attention? Look no further, because Im your kitty! I love it all, cuddling close, playing with toys, you name it. My purr motor doesnt take long to start up, and once it gets going it will run non-stop.'),
(default,'Yumi', 'foster','3 weeks', 'Hi! Im new here. Everyones still getting to know me. Once they do, this space will have all kinds of information about me.'),
(default,'Scampers','foster', '5 weeks', 'Hi! Im new here. Everyones still getting to know me. Once they do, this space will have all kinds of information about me.'),
(default,'Skyler','adopt', '6 months', 'Hi! Im an outgoing little kitty looking for my forever home and family. My perfect someone LOVES to play because my favorite activity is having fun. I still need to learn my big kitty manners, but Im sure with a little help from my new family, and maybe a few treats, I will catch on in no time.'),
(default,'Talliban', 'adopt','10 yrs', 'Hello there! My name is Talliban and I am GORGEOUS. Although I love gentle cheek rubs, cuddly beds, soft blankets and affection, I dont usually enjoy being picked up. But hey, maybe we can work on that in our new home. My favorite activities include sleeping and eating. Sound like your perfect match? I thought so.'),
(default,'Zora','foster', '5 weeks', 'Hi! Im Zora, and Im a gentle, sweet girl looking for a quiet home to call my own.'),
(default,'Riley','foster', '6 weeks', 'Hi! Im new here. Everyones still getting to know me. Once they do, this space will have all kinds of information about me.'),
(default,'Puffins','adopt', '2 yrs', 'Hi, my name is Puffins. I am a sweet and affectionate cat looking for a forever home. I can be shy at first but then I warm up. My ideal home is a quiet place that I can lounge around, watch a little TV with you or sit with you while you read your favorite book or magazine.'),
(default,'Scampers','adopt', '5 months', 'Hi! Im new here. There is a whole world to discover for me, I have yet to know what its like to lounge on a bed, sit on a couch and curl up on a blanket next to her new best friend. Adventures, cuddles and play times await me, what an exciting time.'),
(default,'Bootsie', 'foster','5 weeks', 'Hi! Im new here. Everyones still getting to know me. Once they do, this space will have all kinds of information about me.');


