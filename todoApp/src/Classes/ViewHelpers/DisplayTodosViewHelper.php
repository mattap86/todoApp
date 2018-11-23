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
            $result .= '<div class="todos" data-id="' . $datum['id'] . '" data-complete="' . $datum['completed'] . '"
                        data-delete="' . $datum['deleted'] . '" >
                            <span class="todo">' . $datum['todoName'] . '</span>
                            <button class="checkComplete">DONE</button>
                            <button class="checkDelete">REMOVE</button>
                        </div>';
        }
        return $result;
    }
}
