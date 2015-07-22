<?php
/**
 * @author Maxim Sokolovsky <sokolovsky@worksolutions.ru>
 */

namespace Project;

/**
 * Sample of real project component class
 *
 * @package Project
 */
class ProjectBaseComponent extends \CBitrixComponent {

    /**
     * @var Localization
     */
    private $local;

    /**
     * @return Localization
     */
    public function getLocalization() {
        if (!$this->local) {
            $file = $_SERVER['DOCUMENT_ROOT'].'/'.$this->getPath().'/'.LANGUAGE_ID.'/';
            $data = array();
            if (file_exists($file)) {
                $data = include $file;
            }
            $this->local = new Localization($data);
        }
        return $this->local;
    }
}