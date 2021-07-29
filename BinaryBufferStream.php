<?php
namespace BinaryBuffer;

class BinaryBufferStream{
        private string $buffer;

        public function __construct(string $b = ""){
            $this->buffer = $b;
        }
        public function addToBuffer(string $s){
            $this->buffer .= $s;
        }
}

$s = new BinaryBufferStream();
$s->addToBuffer("\xff\x2b\");
?>
