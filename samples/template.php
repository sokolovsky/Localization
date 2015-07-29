<?php
/**
 * @author Maxim Sokolovsky <sokolovsky@worksolutions.ru>
 */

/** @var \Project\Localization $local */
$local = $this->arParams['local'];

$errorName = $local->message('error.name');

$localFilter = $local->fork('filter');

$local->addData(array(
    'key' => 'Значение ключа',
    'sampleGroup' => array(
        'name' => 'Наименование',
        'sample' => 'Пример',
        'mark' => 'Пример с использованием `#mark#` метки'
    )
));

$groupName = $local->message('sampleGroup.name');
$groupSample = $local->message('sampleGroup.sample');

$mark = $local->message('sampleGroup.sample', array(
    '#mark#' => 'Значение'
));
