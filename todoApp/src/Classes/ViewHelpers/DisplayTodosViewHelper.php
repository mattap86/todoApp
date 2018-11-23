<?php

namespace Todo\Classes\ViewHelpers;


class DisplayTodosViewHelper
{
    public static function displayTodos($data)
    {
        $result = '';
        foreach ($data as $datum) {
            $result .= '<div class="todos" data-id="' . $datum['id'] . '" data-complete="' . $datum['completed'] . '" >
                            <p>' . $datum['todoName'] . '</p>
                            <button class="checkComplete">DONE</button>
                            <button class="checkDelete">REMOVE</button>
                        </div>';
        }
        return $result;
    }
}
