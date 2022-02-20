<?php
if (!function_exists('_user')){
    function _user($user_id){
        $objUser = \App\Models\User::find($user_id);
        if (!$objUser){
            return abort(404);
        }
        return $objUser;
    }
}
