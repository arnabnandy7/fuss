<?php
namespace Gajus\Fuss;

/**
 * @link https://github.com/gajus/fuss for the canonical source repository
 * @license https://github.com/gajus/fuss/blob/master/LICENSE BSD 3-Clause
 */
interface Session {
    /**
     * @return Gajus\Fuss\AccessToken
     */
    public function getAccessToken ();
}