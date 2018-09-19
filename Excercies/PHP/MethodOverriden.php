<?php


class A {
    
    protected $foo;
    
    private function foo(){
        
        $this->foo = 'A-foo';
    }
    public function bar(){
        $this->foo();
        
        return $this->foo;
    }
}

class B extends A{
    
    private function foo(){
        $this->foo = 'B-foo';
    }
    public function bar(){
        echo 'bofff';
    }

        public static function method() {
        
    }

}

$b = new B();
echo $b->bar();

$a = ['foo', 'bar'=>'baz', ['foobar', 'baz']];

echo count($a, true);