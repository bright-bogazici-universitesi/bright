# Bright

## Development
- Clone this repository:
```
git clone https://github.com/bright-bogazici-universitesi/bright.git
```
- Install the dependencies: (Make sure you have `npm`, `composer` and `mysql` installed)
```
npm install && composer install
```
- Create a `.env` file in the base folder. Copy and paste this template:
```
APP_ENV=local
APP_KEY=YOUR_GENERATED_KEY
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR_DB_NAME
DB_USERNAME=YOUR_DB_USER
DB_PASSWORD=YOUR_DB_PASS

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
```
Now change the `YOUR_BLA_BLA` parts with your info.
You can generate a key for `APP_KEY` with `php artisan key:generate`.
- Before starting development, open the server and the bundling tool. Run these commands in 2 separate terminals (both in the base folder):
```
php artisan serve
npm run watch
```
- Open the application in your browser:
```
http://localhost:8000
```
- Create a branch (use kebabcase: all lowercase letters, separate words with `-`), make & commit your changes.
- Before pushing your branch, rebase the remote origin:
```
git pull --rebase origin master
```
- Push your branch:
```
git push -u origin YOUR-BRANCH-NAME
```
- Make a [pull request](https://github.com/smddzcy/bright/compare). Voila 👌


## TODO

### Blog

- [ ] Template and controller of blog posts.
- [ ] Backend for moderators (writers of blog posts).
- [ ] Backend for blog posts.
- [ ] Moderator page for blog.
We'll write the blog posts here. It should allow blog posts to be written in
multiple languages, and support HTML and plain text entry.

### Contact

- [ ] Template and controller for contact form.
- [ ] Backend for contact informations.
- [ ] Email accounts for contact (who's gonna receive the contact requests?).

### Knowledge Base

- [ ] Backend for knowledge base. We should talk about this, details are not clear yet.

### Programs & Events

- [ ] I have no idea what these are. We should talk about these first.
