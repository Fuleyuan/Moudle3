<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        include('Student.php');
        $students = array();
        $first = new Student();
        $first->surname = "Amy ";
        $first->first_name = "Jack";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->status = "junio";
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        $second = new Student();
        $second->surname = "Einstein  ";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
       
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        $three= new Student();
        $three->surname = "Fu  ";
        $three->first_name = "Leyuan";
        $three->add_email('home', '857798973@qq.com');
        $three->add_email('work1', '857798973@qq.com');
        $three->add_email('work2', '857798973@qq.com');
        $three->status = "Senior";
        $three->add_grade(95);
        $three->add_grade(80);
        $three->add_grade(50);
        $students['141'] = $three;
        
         $fourth = new Student();
        $fourth->surname = "zhq  ";
        $fourth->first_name = "dog";
        $fourth->add_email('home', '857798973@qq.com');
        $fourth->add_email('work1', '857798973@qq.com');
        $fourth->add_email('work2', '857798973@qq.com');
        $fourth->status = "Senior";
        $fourth->add_grade(95);
        $fourth->add_grade(80);
        $fourth->add_grade(50);
        $students['140'] = $fourth;
        
        ksort($students); // one of the many sort functions
        foreach ($students as $student)
            echo $student->toString();
        ?>

    </body>
</html>
