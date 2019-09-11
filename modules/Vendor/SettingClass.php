<?php

    namespace Modules\Vendor;

    use Modules\Core\Abstracts\BaseSettingsClass;

    class SettingClass extends BaseSettingsClass
    {
        public static function getSettingPages()
        {
            return [
                [
                    'id'        => 'vendor',
                    'title'     => __("Vendor Settings"),
                    'position'  => 50,
                    'view'      => "Vendor::admin.settings.vendor",
                    "keys"      => [
                        'vendor_enable',
                        'vendor_commission_type',
                        'vendor_commission_amount',
                        'vendor_auto_approved',
                        'vendor_role',
                    ],
                    'html_keys' => [

                    ]
                ]
            ];
        }
    }
