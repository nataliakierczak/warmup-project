<?php

class User_Object
{
    public function getUrl()
    {
        return url::to('users', array(
            'id' => $this->id
        ));
    }

}