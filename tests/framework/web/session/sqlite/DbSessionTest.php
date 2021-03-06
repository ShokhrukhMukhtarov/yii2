<?php

namespace yiiunit\framework\web\session\sqlite;

/**
 * Class DbSessionTest
 *
 * @author Dmytro Naumenko <d.naumenko.a@gmail.com>
 *
 * @group db
 * @group sqlite
 */
class DbSessionTest extends \yiiunit\framework\web\session\AbstractDbSessionTest
{
    protected function getDriverNames()
    {
        return ['sqlite'];
    }
}
