deploy:
	~/google_appengine/appcfg.py -R update --oauth2 .
run-local:
	dev_appserver.py --php_executable_path=/usr/bin/php .
test:
	echo TODO somarone
# push:
# 	git push


########################################
# 2024 python 3 migration
########################################

# documented here: https://cloud.google.com/appengine/migration-center/standard/services/migrating-services?tab=python#datastore
deps:
	pip install -t lib -r requirements.txt

# create pytnon27 to run dev-appserver.py
conda27:
	conda create -y -n py27 python=2.7.18
	conda activate py27
	pip install importlib google

	echo 'Welcome to the past! When done: conda deactivate'

# copied from https://stackoverflow.com/questions/61756973/no-module-named-google-appengine-appengine-local-development-error
# google==2.03; google-api-core==1.17.0; google-auth==1.14.3; google-cloud==0.34.0; google-cloud-core==1.3.0; google-cloud-datastore==1.120; google-cloud-ndb==1.2.0; google-cloud-storage==1.28.0;

# snalling php and since it also isntall apache2 (!!)
# -> sudo update-rc.d apache2 disable

deploy2024:
	echo 'Note that project provapaccap was deleted. I created new one and configured for EU-WEST'
	gcloud --project provapaccap-410016 app deploy --version 105
