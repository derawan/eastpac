<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SiteConfig;
use Validator;

class AdministratorController extends Controller
{

    public function manageUser()
    {
        $title = 'Manage User';

        return view('admin.usermanage', compact('title'));
    }

    public function configIndex()
    {
        $title = "Site Config";

        $site_title = $this->getConfigValue('SITE_TITLE');
        $contact_email = $this->getConfigValue('CONTACT_EMAIL');
        $contact_address = $this->getConfigValue('CONTACT_ADDRESS');
        $contact_phone_number = $this->getConfigValue('CONTACT_PHONE_NUMBER');


        return view('admin.config', compact(
                                            'title',
                                            'site_title',
                                            'contact_email',
                                            'contact_address',
                                            'contact_phone_number'
                                        ));
    }

    public function updateConfigValue(Request $request)
    {
        // dd($request->all());
        $search_key = str_replace('-', '_', $request->key);
        $validator = Validator::make($request->all(), [
            'key' => 'required',
            'val' => 'required'
        ]);

        if($validator->fails()) {
            $result = [
                'msg' => 'Save Config Failed'
            ];

            $status = 500;
        } else {
            SiteConfig::where('key', strtoupper($search_key))->update(
                [
                    'value' => $request->val
                ]
            );

            $result = [
                'msg' => 'Save Config Success'
            ];

            $status = 500;
        }

        return response()->json($result);

    }

    protected function getConfigValue($key)
    {
        $config_value = SiteConfig::where('key', strtoupper($key))->first()->value;

        return $config_value;
    }
}
