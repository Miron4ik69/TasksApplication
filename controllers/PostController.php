<?php 
session_start();

class PostController 
{
    /* Home page */
    public function home() 
    {
       $results = App::get('database')->selectAll('tasks', [
           'pageNumber' => $_GET
       ]);

       $res = $results["res"];
       $pages = $results["pages"];

        return view('index', [
            'results' => $res,
            'pages' => $pages
        ]);     
    }


    /* Insert to database */
    public function store()
    {

        App::get('database')->insert('tasks', [      
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'text' => $_POST['text']
        ]);
        
        header('Location: /');
    }

    
    /* Sort  */
    public function sort()
    {

       $results =  App::get('database')->sort('tasks', [
            'filter' => $_POST['filter']
        ]);

        return view('index', [
            'results' => $results,
        ]); 
        
    }
    /* Edit page */
    public function edit()
    {
    
        $results = App::get('database')->edit('tasks', [
            'id' => $_GET['id']
        ]);

        return view('edit', [
            'results' => $results
        ]);
    }

    /* Update text in database */
    public function update() 
    {
        if($_SESSION){
            $result = App::get('database')->updateTask('tasks', [
                'id' => $_POST['id'],
                'text' => $_POST['text']
            ]);
        } else {
           header('Location: /');
        }
        

        header('Location: /');
       
    }

    public function status()
    {

        App::get('database')->status('tasks', [
            'status' => $_POST['status'],
            'id' => $_POST['id']
        ]);

        header('Location: /');
    }
}