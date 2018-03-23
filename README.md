# PHP framework for small web-sites

routes
---

There is file in folder "routes" that name "routes.php". There is array which return routes in the file.
as key of array you have to specify a route and in the right "name_of_controller@name_of_method_of_controller"

controllers
---

There are controllers in the app/controllers. Each controllers has to extends Controller 
(before you need to write "use app\Controller"). In the constructor of a controller you can write code which
will be executed before every method of this.

views
---

To return view you've got to return function view($path, $vars=[], $fmt) where $path is path of your 
view (it start from folder "public/views/") standard file extension is html, if you need to use another 
file extension, you have to specify it in the third variable. If you want to use some variables in 
your views you can specify this in the second parameter. Then just write <?= $name_of_var ?> to print it.

config
---

There is configuration file in the "config/web.config.php"

"name" is parameter which contain name of your subdomain. if you don't use it let it be empty.

"debug" contain true or false, if true, then you'll see errors, else no.
