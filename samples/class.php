<?php

class RatingList extends \Project\ProjectBaseComponent {


    public function executeComponent() {

        $this->arResult['local'] = $this->getLocalization();
        $this->IncludeComponentTemplate();

        $messages = array(
            'alert' => $this->getLocalization()->message('path.to.alert')
        );
    }
}