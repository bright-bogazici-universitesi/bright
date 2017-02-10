# Bright

## Development
- Clone this repository:
  ```
  git clone https://github.com/smddzcy/bright
  ```
- Install the dependencies: (Make sure you have `npm` and `composer` installed)
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
- Create a branch (use kebabcase: all lowercase letters, separate words with `-`), make & commit your changes.
- Before pushing your branch, rebase the remote origin:
  ```
  git pull --rebase origin master
  ```
- Push your branch:
  ```
  git push -u origin YOUR-BRANCH-NAME
  ```
- Make a pull request. Voila 👌
