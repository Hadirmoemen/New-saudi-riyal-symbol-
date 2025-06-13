
1- Add ConvertSpeciaHtml.php to app/http/Middelware
2-Add this links to head files backend and frontend
 <link rel="stylesheet" href="https://unpkg.com/saudi-riyal-symbol@latest/dist/saudi-riyal-symbol.css">

<link rel="stylesheet" href="https://unpkg.com/saudi-riyal-symbol@latest/dist/saudi-riyal-symbol.min.css">
  

3-Add this code to kernel.php file
in this part 
protected $middlewareGroups = [
        'web' => [ 
     
\App\Http\Middleware\ConvertSpecialHtml::class,

4-Write riyal symbol in the control panel <sr></sr>

project done to laravel Muktivendor project www.zoodn.com
 Any questions contact hadeergalalfahmy@gmail.com
