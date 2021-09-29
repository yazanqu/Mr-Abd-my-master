<?php
class Person {
    static $code = +963;
    public $name;
    public $email;
    public $phone;
    
    
    public function __construct($name , $email , $phone){
        $this->name = $name;
        $this->email =$email;
        $this->phone = $phone;
    }
    public function show_info()
    {
        echo " name: {$this->name }  email: {$this->email} phone: {$this->phone} ";

    }
}
class Student extends Person {
    public $id;

     public function __construct($id, $name , $email , $phone)
    {
        parent::__construct($name , $email , $phone);
        $this->id = $id;
    }
    public function show_info(){
        echo "id : {$this->id } ";
        Parent::show_info();
    }

}
class ClassRoom{
    public $level;
    public $capacity;
    public $students;

    public function __construct($level , $capacity )
    {
        $this->level = $level;
        $this->capacity = $capacity;
        $this->students = [];
    }
    public function Add_user(Student $students){

        $this->students[] = $students;
    }
    public function show_info(){
        echo "the level of the class is: {$this->level} and the capacity is {$this->capacity}";
        foreach($this->students as $student){
            $student->show_info();
        }
    }    
    public function Delete_user($id){  
        foreach($this->students as $key => $student ){
            if ($student->id == $id )
            unset ($this->students[$key]);
        }

    }
}
class School{
    public $name;
    public $class_rooms;
    
    
    public function __construct($name)
    {
        $this->name = $name;
        $this->class_rooms = [];
    }
    public function show_info (){
        echo "the name of the School is: {$this->name}";
        foreach($this->class_rooms as $class_room)
        $class_room->show_info();  
    }
    public function add_class_room( ClassRoom $classRoom ){
        $this->class_rooms [] = $classRoom;
    }
    public function delete_class_room($level){
        foreach($this->class_rooms as $key => $class_room){
        if( $class_room->level == $level){
        unset($this->class_rooms[$key]);
        }
    }
    }

}
$student1 = new Student( '4' , 'yazan' , 'yazan@gmial.com' , '0993995330' );
$student2 = new Student( '2' , 'samira' , 'yazan@g23.com' , '0993995330' );
$student3 = new Student( '3' , 'Danila' , 'yazan@gmi123.com' , '0993995330' );
$student4 = new Student( '5' , 'Mazen' , 'yazan@gmial2.com' , '0993995330' );
$student5 = new Student( '6' , 'Ali' , 'yazan@gmial2.com' , '0993995330' );

$math = new ClassRoom('3' , '17');
$math->Add_user($student1);
$math->Add_user($student2);
$math->Add_user($student3);
$math->Add_user($student4);
$math->Add_user($student5);
$programming = new ClassRoom('8' , '20');
$school1 = new School('Smaher');
$school1->add_class_room($math);
$school1->show_info();
$school2 = new School('Hnadi');
$school2->add_class_room($programming);
?>