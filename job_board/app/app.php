<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/JobOpening.php';
    require_once __DIR__.'/../src/Contact.php';

    $app = new Silex\Application();
    $app->post('/jobOpening',function(){
        $jhondz = new Contact('Jhondee','jhondeediaz@gmail.com','321');
        $j = new JobOpening($_POST['job_title'],$_POST['job_description'],$jhondz);
        $h = new JobOpening('Actionlabs','janitor',$jhondz);
        $jhondz->addJobPostings($j);
        $jhondz->addJobPostings($h);
        
        return "<pre>".var_dump($jhondz)."</pre>";
        
    });
    $app->get('/',function(){
        return <<<HTML
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Board</title>
</head>
<body>
    <h2>add a contact</h2>
    <form action="/jobOpening" method="POST">
        <div class="form-group">
            <label for="job_title">Job Title:<input type="text" class="form-control" name="job_title">
        </div>
        <div class="form-group">
            <label for="job_description"> Job Description:<input type="text" class="form-control" name="job_description">
        </div>
        <button type="submit" class="">Submit</button>
     </form>
</body>
</html
HTML;
    });

    

    

    return $app;
?>

