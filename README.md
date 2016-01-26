# Thank you

Thanks for purchasing Josh admin theme

We are sure you will Enjoy using it!

# Installation

Git repo installation is a bit different than the original one because here all files copied already and everything is configured properly

infact this will take less time compared to installing from CodeCanyon's files

##### add vendors
we don't push vendors to git as they can grow like anything (a default feature of laravel or any composer related projects)

````composer install````

#### create .env file
Since .env file is gitignored, we need to create that (again a security measure of not to expose your database details to anyone else)

````cp .env.example .env````

#### generate key

Every app needs a key which is being used for many purposes including salting your passwords

```` php artisan key:generate ````

#### database credentials

open ````.env```` and modify database details with yours

#### add tables to databaes

```` php artisan migrate ````

#### add admin to users table

```` php artisan db:seed ````

# Congratulations
open your website and now it should be fully working :)

***

# Bugs

To report bugs, please click on "Issues" in left menu and check if the bug is reported already and if it doesn't exists please create new issue by clicking **create issue**

# pull requests

If you would like to improve code :) or fix any bug or add new feature,

please send a pull request and we will be thankful to you for your work! :D