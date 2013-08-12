deploy:
	~/google_appengine/appcfg.py -R update --oauth2 .
run-local:
	~/google_appengine/dev_appserver.py --php_executable_path=/usr/bin/php .
test:
	echo TODO somarone

push:
	git push
