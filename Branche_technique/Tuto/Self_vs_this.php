<?php      
                                    //?  Self Vs this

//* $this :
//      -> refer to Current Object 
//      -> Access Non Static Members 
//      -> Use ($) because it Represnt a Variable  

//* $Self :
//      -> refer to Current Class  
//      -> Access  Static Members 
//      -> Not Use ($) because its Not Represnt a Variable but present class construction 

        //!  Syntax of $this :

class Example {
    public $message = "Hello, World!";  // Non-static property

    public function showMessage() {
        echo $this->message;  // Using $this to refer to the instance property
    }
}

$example = new Example();
$example->showMessage();  // Outputs: Hello, World!


        //!  Syntax of $Self :
    
class Example {
    public static $greeting = "Hello from the class!";  // Static property

    public static function showGreeting() {
        echo self::$greeting;  // Using self to refer to the static property
    }
}

Example::showGreeting();  // Outputs: Hello from the class!


?>
