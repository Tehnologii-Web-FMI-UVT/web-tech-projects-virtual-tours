<?php
namespace App\Controllers;

class LanguageSwitcher extends BaseController
{
    public function switch($language = 'en')
    {
        // Set the session to the chosen language
        session()->set('language', $language);

        // Set the locale for this request
        $this->request->setLocale($language);

        // Redirect back to the previous page
        return redirect()->back();
    }
}

