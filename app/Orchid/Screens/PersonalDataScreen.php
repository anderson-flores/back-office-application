<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;

class PersonalDataScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Data';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Data';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [];
    }
}
