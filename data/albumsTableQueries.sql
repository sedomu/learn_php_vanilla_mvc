--TABLE CREATION

CREATE TABLE albums (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title VARCHAR,
    release_date TEXT,
    recording_period VARCHAR,
    studio VARCHAR,
    duration INTEGER,
    label VARCHAR,
    producer VARCHAR,
    wikipedia_presentation TEXT
);

--INSERTING FIRST ALBUM

INSERT INTO albums (
    title,
    release_date,
    recording_period,
    studio,
    duration,
    label,
    producer,
    wikipedia_presentation
) VALUES (
    'Licensed to Ill',
    '1986-11-15',
    '1985-1986',
    'Chung King (New York City)',
    2672,
    'Def Jam • Columbia',
    'Rick Rubin',
    'Licensed to Ill is the debut studio album by the American hip hop group Beastie Boys, released on November 15, 1986, by Def Jam and Columbia Records. The album became the first rap LP to top the Billboard 200 chart, and was the second rap album to be certified Platinum by the Recording Industry Association of America (RIAA). It is one of Columbia Records'' fastest-selling debut records to date and was certified Diamond by the RIAA in 2015 for shipping over ten million copies in the United States.[1] The album received critical acclaim for its unique musical style, chemistry between the group members, and their stylized rapping. Since its release, Licensed to Ill has been ranked by critics as one of the greatest hip hop and debut albums of all time. Despite its popularity and success, this would be the group''''s only album to be released from Def Jam due to creative differences with producer Rick Rubin, resulting in the group leaving the label to sign with Capitol Records for their next album, Paul''s "Boutique" (1989).'
);

--INSERTING SECOND ENTRY

INSERT INTO albums (
    title,
    release_date,
    recording_period,
    studio,
    duration,
    label,
    producer,
    wikipedia_presentation
) VALUES (
    'Paul''s Boutique',
    '1989-07-25',
    '1988-1989',
    'Mario C''s and the Record Plant, Los Angeles • The Opium Den, Koreatown, Los Angeles',
    3183,
    'Capitol',
    'Beastie Boys • The Dust Brothers • Mario Caldato Jr.',
    'Paul''s Boutique is the second studio album by the American hip hop group Beastie Boys, released on July 25, 1989, by Capitol Records. Produced by the Beastie Boys and the Dust Brothers, the album''s composition makes extensive use of samples, drawn from a wide range of genres including funk, soul, rock, and jazz. It was recorded over two years at Matt Dike''s apartment and the Record Plant in Los Angeles. Paul''s Boutique did not match the sales of the group''s 1986 debut Licensed to Ill, and was promoted minimally by Capitol. However, despite its initial commercial failure, it became recognized as the group''s breakthrough achievement, with its innovative lyrical and sonic style earning them a position as critical favorites within the hip hop community. Sometimes described as the "Sgt. Pepper of hip-hop",[3] Paul''s Boutique has placed on several lists of the greatest albums of all time, and is viewed by many critics as a landmark album of golden age hip hop and a seminal work in sample-based production.'
);

--INSERTING THIRD ENTRY

INSERT INTO albums (
    title,
    release_date,
    recording_period,
    studio,
    duration,
    label,
    producer,
    wikipedia_presentation
) VALUES (
    'Check Your Head',
    '1992-04-21',
    '1991-1992',
    'G-Son, Atwater Village, California',
    3209,
    'Grand Royal • Capitol',
    'Mario Caldato Jr.',
    'Check Your Head is the third studio album by the American hip hop group Beastie Boys, released on April 21, 1992, by Grand Royal and Capitol Records. Three years elapsed between the releases of the band''s previous studio album Paul''s Boutique (1989) and Check Your Head, which was recorded at the G-Son Studios in Atwater Village in 1991 under the guidance of producer Mario Caldato Jr.  the group''s third producer in as many albums. Less sample-heavy than their previous records, the album features instrumental contributions from all three members: Adam Horovitz on guitar, Adam Yauch on bass guitar, and Mike Diamond on drums. The album was re-released in a number of formats in 2009, with 16 B-sides and rarities, as well as a commentary track, included as bonus material. 7] It is one of the albums profiled in the 2007 book Check the Technique, which includes a track-by-track breakdown by Diamond, Yauch, Horovitz, Caldato, and frequent Beasties collaborator Money Mark. 8]'
);

--INSERTING FOURTH ENTRY

INSERT INTO albums (
    title,
    release_date,
    recording_period,
    studio,
    duration,
    label,
    producer,
    wikipedia_presentation
) VALUES (
    'Ill Communication',
    '1994-05-31',
    '1993-1994',
    'Tin Pan Alley (New York City) • G-Son (Los Angeles)',
    3577,
    'Grand Royal • Capitol',
    'Beastie Boys • Mario Caldato Jr.' ,
    'Ill Communication is the fourth studio album by the American hip hop group Beastie Boys, released on May 31, 1994, by Grand Royal and Capitol Records. Co-produced by Beastie Boys and Mario Caldato, Jr.  it is among the band''s most varied releases, drawing from hip hop, punk rock, jazz, and funk, and continues their trend away from sampling and towards live instruments, which began with their previous release, Check Your Head (1992). The album features musical contributions from Money Mark, Eric Bobo and Amery "AWOL" Smith, and vocal contributions from Q-Tip and Biz Markie. Beastie Boys were influenced by Miles Davis''s jazz rock albums On the Corner (1972) and Agharta (1975) while recording Ill Communication. 2] The album became the band''s second number-one album on the U. Billboard 200 chart and their second album to be certified triple platinum by the Recording Industry Association of America (RIAA). It was supported by the single "Sabotage", which was accompanied by a music video directed by Spike Jonze that parodied 1970s cop shows.' 
);

--INSERTING FIFTH ENTRY

INSERT INTO albums (
    title,
    release_date,
    recording_period,
    studio,
    duration,
    label,
    producer,
    wikipedia_presentation
) VALUES (
    'Hello Nasty',
    '1998-07-14',
    '1997-1998',
    'G-Son (Los Angeles) • Oscilloscope Laboratories (New York City)',
    4048,
    'Grand Royal • Capitol',
    'Beastie Boys • Mario Caldato Jr.',
    'Hello Nasty is the fifth studio album by the American hip hop group Beastie Boys, released on July 14, 1998, by Grand Royal and Capitol Records. The album sold 681,000 copies in its first week, debuting at No. 1 on the Billboard 200 chart, and won Best Alternative Music Album and Best Rap Performance by a Duo or Group (for "Intergalactic") at the 41st Annual Grammy Awards. In Beastie Boys Book (2018), Ad-Rock said he felt Hello Nasty was the group''s "best record".[1]'
);

--INSERTING SIXTH ENTRY

INSERT INTO albums (
    title,
    release_date,
    recording_period,
    studio,
    duration,
    label,
    producer,
    wikipedia_presentation
) VALUES (
    'To the 5 Boroughs',
    '2004-06-15',
    '2003-2004',
    'Oscilloscope Laboratories, Tribeca, New York City',
    2677,
    'Capitol',
    'Beastie Boys',
    'To the 5 Boroughs is the sixth studio album by the American hip-hop group Beastie Boys, released on June 14, 2004, internationally, and a day later in the United States. It sold 360,000 copies in its first week of release, becoming the group''s third consecutive album to debut at number one on the Billboard 200, and has been certified Platinum by the Recording Industry Association of America for sales of over 1,000,000 copies in the U.S. The album is the first major Beastie Boys release since 1998''s Hello Nasty, and it reflects on the aftermath of the September 11 attacks on New York City.[3]'    
);

--INSERTING SEVENTH ENTRY

INSERT INTO albums (
    title,
    release_date,
    recording_period,
    studio,
    duration,
    label,
    producer,
    wikipedia_presentation
) VALUES (
    'The Mix-Up',
    '2007-06-26',
    '2006-2007',
    'Oscilloscope Laboratories, New York City',
    2563,
    'Capitol',
    'Beastie Boys',
    'The Mix-Up is the seventh studio album by the American hip hop group Beastie Boys, released on June 26, 2007. The album consists entirely of instrumental performances and won a Grammy Award for Best Pop Instrumental Album.[6]'    
);

--INSERTING EIGHTH ENTRY

INSERT INTO albums (
    title,
    release_date,
    recording_period,
    studio,
    duration,
    label,
    producer,
    wikipedia_presentation
) VALUES (
    'Hot Sauce Committee Part Two',
    '2011-05-03',
    '2008-2009',
    'Oscilloscope Laboratories (New York City)',
    2647,
    'Capitol',
    'Beastie Boys',
    'Hot Sauce Committee Part Two is the eighth and final studio album by the American hip hop group Beastie Boys, released on May 3, 2011, through Capitol Records. The project was originally planned to be released in two parts, with Hot Sauce Committee, Pt. 1 originally planned for release in 2009. The release was delayed after band member Adam "MCA" Yauch''s cancer diagnosis.[4] After a two-year delay, only one collection of tracks, Part Two, was released and the plan for a two-part album was eventually abandoned after Yauch''s death on May 4, 2012. The album was critically acclaimed upon release, with the energetic rapping, experimental production, and disregard for contemporary hip hop trends being praised. It also performed well commercially, debuting at No. 2 on the Billboard 200 chart. The release was supported by four singles – "Lee Majors Come Again", "Too Many Rappers" featuring Nas, "Make Some Noise", and "Don''t Play No Game That I Can''t Win" featuring Santigold.'
);