deploy-remote:
	~/google_appengine/appcfg.py -R update --oauth2 .
deploy-local:
	~/google_appengine/dev_appserver.py --php_executable_path=/usr/bin/php .
