<?php

namespace Todo\Classes\ViewHelpers;


class DisplayTodosViewHelper
{
    /**
     * Displays all entries in db on display.phtml and defines each entries data attributes.
     *
     * @param array(multidimensional) $data is all entries in the db.
     *
     * @return string $result is the db entry's held data concatenated to html.
     */
    public static function displayTodos(array $data)
    {
        $result = '';
        foreach ($data as $datum) {
            $result .= '<div class="row todos" data-id="' . $datum['id'] . '" data-complete="' . $datum['completed'] . '"
                        data-delete="' . $datum['deleted'] . '" >
                            <span class="col-xs-1 col-xs-offset-1 col-md-1 col-md-offset-2 checkComplete">&#10003;</span>
                            <span class="col-xs-6 col-xs-offset-1 col-md-4 col-md-offset-1 todo">' . $datum['todoName'] . '</span>
                            <span class="col-xs-1 col-xs-offset-1 checkDelete">&#10008;</span>
                        </div>';
        }
        return $result;
    }
}
