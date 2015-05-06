<?php namespace Acme\Profile;

use System\Classes\PluginBase;

use RainLab\User\Models\User as UserModel;
use RainLab\User\Controllers\Users as UsersController;
use Acme\Profile\Models\Profile as ProfileModel;


/**
 * Profile Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = ['RainLab.User'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Profile',
            'description' => 'No description provided yet...',
            'author'      => 'Acme',
            'icon'        => 'icon-leaf'
        ];
    }

public function boot()
    {

/*        UserModel::extend(function($model){
            $model->hasOne['profile'] = ['Acme\Profile\Models\Profile'];

        });
*/
    UsersController::extendListColumns(function($list, $model){

        if (!$model instanceof UserModel)
            return;
    
        $list->addColumns([
                'headline' =>[
                    'label' =>'Headline',
                ],
            ]);
    });
  
    UsersController::extendFormFields(function($form, $model, $context){

        if (!$model instanceof UserModel)
            return;
        /*
        if (!$model->exists)
            return;
        
        // Ensures that a profile model always exists...
           ProfileModel::getFromUser($model);
        */

        $form->addTabFields([
                            /*
                            'profile[headline]' =>[
                                'label' =>'Headline', 
                                'tab' => 'Profile',
                                'type' => 'textarea',
                                ],
                            'profile[about_me]' =>[
                                'label' =>'About Me', 
                                'tab' => 'Profile',
                                'type' => 'textarea',
                                ],
                            'profile[interests]' =>[
                                'label' =>'Interests', 
                                'tab' => 'Profile',
                                'type' => 'textarea',
                                ],
                            'profile[books]' =>[
                                'label' =>'Books', 
                                'tab' => 'Profile',
                                'type' => 'textarea',
                                ],
                            'profile[music]' =>[
                                'label' =>'Music', 
                                'tab' => 'Profile',
                                'type' => 'textarea',
                            */

                            'headline' =>[
                                'label' =>'Headline', 
                                'tab' => 'Profile',
                                ],
                            'about_me' =>[
                                'label' =>'About Me', 
                                'tab' => 'Profile',
                                'type' => 'textarea',
                                ],
                            'interests' =>[
                                'label' =>'Interests', 
                                'tab' => 'Profile',
                                'type' => 'textarea',
                                ],
                            'books' =>[
                                'label' =>'Books', 
                                'tab' => 'Profile',
                                'type' => 'textarea',
                                ],
                            'music' =>[
                                'label' =>'Music', 
                                'tab' => 'Profile',
                                'type' => 'textarea',
                                ],
                            
                            ]);
        });
        
    }


}
