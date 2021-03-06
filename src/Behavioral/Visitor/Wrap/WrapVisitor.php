<?php

namespace DP\Behavioral\Visitor\Wrap;

use DP\Behavioral\Visitor\Visitables\Bread;
use DP\Behavioral\Visitor\Visitables\Milk;

// Visitor holds logic of an operation to be done
class WrapVisitor implements IWrapVisitor
{
    public function wrapBread(Bread $bread) {
        $bread->setWrap('Bread wrapped.');
    }

    public function wrapMilk(Milk $milk) {
        $milk->setWrap('Milk wrapped.');
    }
}
