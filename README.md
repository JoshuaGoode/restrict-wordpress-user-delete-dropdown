# restrict-wordpress-user-delete-dropdown
Basic WordPress plugin to bypass https://core.trac.wordpress.org/ticket/19867 on sites with many users.

By default, this plugin restricts author attribution on the user delete page to just administrators -- can be expanded/limited to other roles.

![Screen Shot on 2024-04-15 at 14:37:51](https://github.com/JoshuaGoode/restrict-wordpress-user-delete-dropdown/assets/4887830/0ddb2301-96b6-4755-afca-ad1c2e01fa01)

#### Instructions

This is only useful if https://core.trac.wordpress.org/ticket/19867 has not been resolved and you're encountering a `There has been a critical error on this website` fatal/critical error on the user deletion screen. E.g., `https://example.com/wp-admin/users.php?action=delete&user=1234&_wpnonce=xxxxxx`

1. Download/upload/copy `restrict-user-delete-dropdown/restrict-user-delete-dropdown.php` to the site.
2. Activate the `Restrict User Deletion Dropdown` plugin
3. Content attribution drop-down should now properly load -- given you don't have an excessive number of users with the designated role (defaults to administrator) -- and you should be able to delete the user. 
