<?php

namespace App\Http\Controllers\Api;

use App\Signature;
use App\Http\Controllers\Controller;

class ReportSignature extends Controller
{
    /**
     * Flag the given signature.
     *
     * @param Signature $signature
     * @return Signature
     */
    public function update(Signature $signature)
    {
        $signature->flag();

        return $signature;
    }

    /**
	 * Flag the given signature.
	 *
	 * @return bool
	 */
	public function flag()
	{
	    return $this->update(['flagged_at' => \Carbon\Carbon::now()]);
	}

	/**
	 * Get the user Gravatar by their email address.
	 *
	 * @return string   
	 */
	public function getAvatarAttribute()
	{
	    return sprintf('https://www.gravatar.com/avatar/%s?s=100', md5($this->email));
	}
}
