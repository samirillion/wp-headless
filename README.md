# wp-headless
Headless Wordpress Theme

Not too much going on right now, the main thing is the plugins that you add to work with this theme:

+----------------------------------+----------+-----------+---------+
| acf-to-rest-api-master           | active   | none      | 3.1.0   |
| acf-to-rest-api-recursive-master | active   | none      | 1.0.0   |
| advanced-custom-fields-pro       | active   | none      | 5.7.9   |
| better-rest-api-featured-images  | active   | none      | 1.2.1   |
| classic-editor                   | active   | none      | 1.3     |
| easy-wp-smtp                     | inactive | none      | 1.3.7   |
| github-updater                   | active   | available | 8.6.0   |
| post-duplicator                  | active   | none      | 2.20    |
| svg-support                      | active   | none      | 2.3.15  |
| wp-mailfrom-ii                   | active   | none      | 1.1     |
| wp-migrate-db-pro                | active   | none      | 1.9.2   |
| wp-migrate-db-pro-media-files    | active   | none      | 1.4.12  |
| wp-retina-2x                     | active   | none      | 5.5.1   |
| wp-security-audit-log            | active   | none      | 3.3.0.2 |
| wp-migrate-db-pro-compatibility  | must-use | none      | 1.2     |
+----------------------------------+----------+-----------+---------+

If you want to be able to access ACF relationship field post data, you need to make a change to the 
acf-to-rest-api-recursive-master plugin. In the plugin.php file, change the hook to wp_loaded. Don't know why 
