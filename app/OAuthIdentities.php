<?php
/**
 * Created by PhpStorm.
 * User: sergi
 * Date: 03/03/16
 * Time: 20:14
 */

namespace App;


trait OAuthIdentities
{

    /**
     * Get OAuth identities
     */
    public function oauthIdentities()
    {
        return $this->hasMany(\Acacha\Socialite\OAuthIdentity::class);
    }
}