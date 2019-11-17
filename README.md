# Hearts and Minds Development Setup

## Inital setup

* Download and Install MAMP (v5.5 or newer)
* Download Wordpress (v5.3 or newer) and unzip the files to Applications/MAMP/htdocs/heartsandminds
* Download [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/) plugin and copy to /heartsandminds/wp-content/plugins
* Download [Wordpress Importer](https://wordpress.org/plugins/wordpress-importer/) plugin and copy to /heartsandminds/wp-content/plugins

## Theme setup
* Clone the [theme](https://github.com/heartsandminds/theme.git) into the wp themes folder

## Content setup

* Start MAMP
* Create a new empty database called HM01
* Import database: MYPHPADMIN -> New -> Import -> Select file HM01.sql
* Copy wp-config.php into Applications/MAMP/htdocs/heartsandminds/ overwriting existing file
* Copy Uploads folder - Images to be copied to wp-content/uploads
* Copy and rename htaccess.txt - Applications/MAMP/htdocs/heartsandminds/.htaccess
* Login and navigate to the permalinks section and click save to update site url structure
