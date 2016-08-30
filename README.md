# codeigniter3-example
Example project using CodeIgniter 3

## Installation
- (Optional?) Run `composer install`
- Run `touch database.sqlite` to create the file where the database will be
- Make sure you have SQLite
- Run migrations using `php index.php migrate` (You might have to disable some paths in `application/config/routes.php`)
- (Optional?) `chmod +x server.sh` 
- Run `./server.sh` to start the server
- Go to `http://localhost:8001/` and you should see an empty page showing "News articles"
