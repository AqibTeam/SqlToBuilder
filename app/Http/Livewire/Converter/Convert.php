<?php

namespace App\Http\Livewire\Converter;

use Livewire\Component;

class Convert extends Component
{
    public $SqlData;
    private $res;

    public function render()
    {
        return view('livewire.converter.convert',[
            'res' => $this->res,
        ]);
    }

    public function doConvert(){

        $builder = new \BigShark\SQLToBuilder\BuilderClass($this->SqlData);
        $this->res = $builder->convert();
    }
}
