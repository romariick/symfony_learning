<?php 

trait A
{
    use A;

    public function get()
    {
        return 'a';
    }
}

class B
{
    use A;
}

$b = new B;
echo $b->get();