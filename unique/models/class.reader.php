<?php
class Reader implements SplObserver{
    
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function update(\SplSubject $subject) {
        echo $this->name.' is reading breakout news <b>'.$subject->getContent().'</b><br>';
    }
}

$post = new Post('Windows');

$allen = new Reader('Allen');
$jim = new Reader('Jim');
$linda = new Reader('Linda');

//add reader
$post->attach($allen);
$post->attach($jim);
$post->attach($linda);

//remove reader
$post->detach($linda);

//set break outs
$post->breakOutNews('Windows e Baidu juntos!');

?>