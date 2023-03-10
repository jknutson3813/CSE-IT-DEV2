<?php
$podcastgen_version = '3.2.9'; // Version

$first_installation = [[timestamp]];

$installationKey = '[[installationKey]]';

$scriptlang = '[[language]]';

$url = '[[softurl]]/';

$absoluteurl = '[[softpath]]/'; // The location on the server

$theme_path = 'themes/default/';

$upload_dir = 'media/'; // 'media/' the default folder (Trailing slash required). Set chmod 755

$img_dir = 'images/'; // (Trailing slash required). Set chmod 755

$feed_dir = ''; // Where to create feed.xml (empty value = root directory). Set chmod 755

$max_recent = 'all'; // How many file to show in the home page

$recent_episode_in_feed = 'All'; // How many file to show in the XML feed (1,2,5 etc.. or 'All')

$episodeperpage = 10;

$enablestreaming = 'yes'; // Enable mp3 streaming? ('yes' or 'no')

$freebox = 'yes'; // enable freely customizable box

$enablepgnewsinadmin = 'yes';

$strictfilenamepolicy = 'no'; // strictly rename files (just characters A to Z and numbers) 

$categoriesenabled = 'yes';

$cronAutoIndex = 1; //Auto Index New Episodes via Cron

$cronAutoRegenerateRSS = 1; //Auto regenerate RSS via Cron

$indexfile = 'index.php';    // Path of the index file

$podcastPassword = '';       // Password to protect the podcast generator webpages, this will NOT protect the audio or XML files. Leave blank to disable.

$customtagsenabled = 'no';   // Advanced functionality for custom RSS tag input

$timezone = '';              // Timezone used for displaying dates and times

#####################
# XML Feed stuff

$podcast_guid = ''; // Globally unique identifier for your podcast

$podcast_title = '[[site_name]]';

$podcast_subtitle = '[[site_subtitle]]';

$podcast_description = '[[site_desc]]';

$podcast_cover = 'itunes_image.jpg';

$author_name = '[[admin_username]]';

$author_email = '[[admin_email]]';

# The e-mail of the technical admin of the podcast
$webmaster = 'podcastadmin@example.com';

$itunes_category[0] = 'Arts'; // iTunes categories (mainCategory:subcategory)
$itunes_category[1] = '';
$itunes_category[2] = '';

$link = '?name='; // permalink URL of single episode (appears in the <link> and <guid> tags in the feed)

$feed_language = 'en';

$feed_sort = 'timestamp'; // sort method used to order episodes in the feed (by timestamp or by season/episode number)

$feed_locked = ''; // podcast:locked status ('yes', 'no', '' for off)

$copyright = 'All rights reserved';   // Your copyright notice (e.g CC-BY)

$feed_encoding = 'utf-8';

$explicit_podcast = 'no'; //does your podcast contain explicit language? ('yes' or 'no')

$users_json = '{\"[[admin_username]]\": \"[[admin_pass]]"}';

#####################
# WebSub

$websub_server = '';

#####################
# Podcast Index

$pi_api_key = "";
$pi_api_secret = "";

$pi_podcast_id = 0; // is the podcast in Podcast Index? This is its show ID there.

#####################
# WebSub

$websub_server = "https://pubsubhubbub.appspot.com/";

// END OF CONFIG
