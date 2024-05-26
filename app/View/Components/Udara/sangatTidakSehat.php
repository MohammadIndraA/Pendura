<?php

namespace App\View\Components\Udara;

use App\Models\Udara;
use Illuminate\View\Component;

class sangatTidakSehat extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $udaras = Udara::orderBy('id', 'desc')->first();
        $ke9 = $udaras['mq_09'];
        $ke135  = $udaras['mq_135'];
        $ke7 = $udaras['mq_07'];
        $mq_135 = $udaras['mq_135'];
        $mq_09 =$udaras['mq_09'];
        $mq_07 =$udaras['mq_07'];
        $aqi = round(collect([$udaras['mq_135'], $udaras['mq_09'], $udaras['mq_07']])->avg());
        return view('components.udara.sangat-tidak-sehat',compact('aqi','ke9','ke7','ke135','mq_09','mq_135', 'mq_07'));
    }
}
