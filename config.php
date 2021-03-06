<?php
/**
 * SimpleID configuration file.
 *
 * @package simpleid
 *
 */
/*
 * $Id$
 *
 */


/**
 * Base URL.
 *
 * This is the URL of the location you want to place your SimpleID
 * distribution.  It becomes the URL of the SimpleID server.
 *
 * It is not allowed to have a trailing slash; SimpleID will add it
 * for you.
 *
 * Examples:
 * <code>
 *   define('SIMPLEID_BASE_URL', 'http://www.example.com');
 *   define('SIMPLEID_BASE_URL', 'http://www.example.com:8888');
 *   define('SIMPLEID_BASE_URL', 'http://www.example.com/simpleid');
 *   define('SIMPLEID_BASE_URL', 'https://www.example.com:8888/simpleid');
 * </code>
 *
 */
define('SIMPLEID_BASE_URL', 'https://id.fouin.org');

/**
 * Allow clean URLs.
 *
 * URLs used in SimpleID are normally in the form
 * http://www.example.com/index.php?q=foo.  Enabling clean URLs will allow for
 * SimpleID URLs to be in the form http://www.example.com/foo
 *
 * In order to support clean URLs, you must be using Apache with mod_rewrite
 * enabled.  You will need to rename .htaccess.dist in the SimpleID web directory
 * to .htaccess
 *
 * @since 0.8
 *
 */
define('SIMPLEID_CLEAN_URL', false);

/**
 * Directory to store identity information.
 *
 * This directory must exist and be readable by the web server.
 *
 * For maximum security, it is highly recommended to place this
 * directory outside your web browser's document root directory, so
 * that it is not visible to user agents.
 *
 */
define('SIMPLEID_IDENTITIES_DIR', '/data/simpleid/identities');

/**
 * Directory to store cache data.
 *
 * This directory must exist and be readable and writable by the
 * web server.
 *
 * For maximum security, it is highly recommended to place this
 * directory outside your web browser's document root directory, so
 * that it is not visible to user agents.
 *
 */
define('SIMPLEID_CACHE_DIR', '/data/simpleid/cache');

/**
 * Persistent data storage mechanism.
 *
 * SimpleID provides flexible methods to store and retrieve persistent data.
 * By default, SimpleID uses the file system to store this data, implemented
 * in filesystem.store.inc.  Users can implement other methods by creating
 * a file with extension .store.inc and specifying the file through this
 * setting.
 * 
 * Generally you do not need to change this setting.
 *
 */
define('SIMPLEID_STORE', 'filesystem');

/**
 * Directory to store persistent data.
 *
 * This directory must exist and be readable and writable by the
 * web server.
 *
 * For maximum security, it is highly recommended to place this
 * directory outside your web browser's document root directory, so
 * that it is not visible to user agents.
 *
 */
define('SIMPLEID_STORE_DIR', '/data/simpleid/store');

/**
 * Allows use of unencrypted connections.
 *
 * Between versions 0.6 and 0.8 (inclusive), SimpleID uses either HTTPS or 
 * a form of digest authentication for its login system.  This allows passwords
 * and other secure information not to be sent to the server as plaintext.
 *
 * From version 0.9, SimpleID mandates the use of HTTPS for all connections
 * (other than direct connections between SimpleID and an OpenID relying
 * party).  However, for debug purposes, it may be necessary to allow
 * unencrypted connections to SimpleID.
 *
 * It is strongly recommended that this is set to false.  Setting this to true
 * will allow passwords to be sent as plaintext.  You should not change this
 * value unless it is absolutely necessary.
 *
 * @since 0.9
 */
define('SIMPLEID_ALLOW_PLAINTEXT', false);

/**
 * Allows web browsers to save passwords.
 *
 * SimpleID prevents web browsers from saving user passwords entered in a user
 * logs into SimpleID.  Setting this value to true will allow browsers to
 * ask the user whether the password should be saved in the browser's password
 * store.
 *
 * The default is set to false for security reasons.  You should not change
 * this value unless you are certain regarding the security of your browser's
 * password store.
 *
 * @since 0.8
 */
define('SIMPLEID_ALLOW_AUTOCOMPLETE', false);

/**
 * Performs additional verification of relying party return URLs.
 *
 * When authenticating using OpenID version 2, SimpleID version 0.7 or later
 * can perform additional verification of the relying party's return URLs under
 * section 9.2.1 of the OpenID specification.
 *
 * The default is set to true for security reasons.  However, if your web server
 * is blocked by your web hosting provider's firewall from accessing outside
 * servers, then set this to false.
 *
 * @since 0.7
 *
 */
define('SIMPLEID_VERIFY_RETURN_URL_USING_REALM', true);


/**
 * The locale for the SimpleID user interface.
 *
 * @since 0.9
 */
define('SIMPLEID_LOCALE', 'en');

/**
 * Date and time format.
 *
 * The date and time format specified using the strftime() syntax.
 *
 * See http://www.php.net/strftime for details.
 * 
 */
define('SIMPLEID_DATE_TIME_FORMAT', '%Y-%m-%d %H:%M:%S %Z');

/**
 * The number of seconds before associations expire.  This is an advanced
 * option, for which the default setting should work fine.
 *
 * Note that for ICAM compliance, this number must be less than 86400.
 */
define('SIMPLEID_ASSOC_EXPIRES_IN', 3600);

/**
 * SimpleID extensions.
 *
 * The SimpleID extensions you wish to load.  You should separate the
 * extensions you wish to load with a comma.
 *
 */
define('SIMPLEID_EXTENSIONS', 'sreg,ui');

/**
 * Log file.
 *
 * You can specify a file into which SimpleID will log various diagnostic
 * messages.
 *
 * The log file's directory must exist and must be writable by the web server.
 *
 * To disable logging, set this as an empty string.
 *
 * @since 0.7
 *
 */
define('SIMPLEID_LOGFILE', '/data/logs/simpleid.log');

/**
 * The level of detail for log messages.
 *
 * You can determine which messages are captured in the log file by specifying
 * a number between 0 and 5. The higher the number, the more messages are
 * logged.
 *
 * WARNING: Setting the log level to 5 will result in security sensitive
 * information also being logged.
 *
 * This has effect only if logging is enabled.
 *
 * @since 0.7
 *
 */
define('SIMPLEID_LOGLEVEL', 4);
?>
