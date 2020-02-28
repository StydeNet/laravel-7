<?php

namespace App\View\Components;

use Illuminate\Contracts\Translation\Translator;
use Illuminate\View\Component;

class Field extends Component
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $help;
    /**
     * @var string
     */
    private $label;
    /**
     * @var Translator
     */
    private $translator;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Translator $translator, string $name, string $type = 'text', string $help = null, string $label = null)
    {
        $this->translator = $translator;
        //
        $this->name = $name;
        $this->type = $type;
        $this->help = $help;
        $this->label = $label;
    }

    public function label()
    {
        if ($this->label != null) {
            return $this->label;
        }

        if ($this->translator->has('validation.attributes.'.$this->name)) {
            return $this->translator->get('validation.attributes.'.$this->name);
        }

        return ucfirst(str_replace('_', ' ', $this->name));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.field');
    }
}
